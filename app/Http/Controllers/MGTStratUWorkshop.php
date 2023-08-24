<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\MGT_strat_workshop;
use App\Models\Common;
use App\Models\Client;
use DB;
use Response;

class MGTStratUWorkshop extends Controller
{

    protected $ftf_engagement_form;
    protected $common_model;
    public function __construct(){
        // Load Models
        $this->workshop_engagement_form_model = new MGT_strat_workshop();
        $this->common_model = new Common();

        $this->forFirstSession = ['Customization Fee'];

        // Query Company List
        $clientSelect = ['id', 'company_name', 'cstmzd_eng_form_id', 'status', 'sales_person', 'industry', 'old_new', 'first_eng', 'latest_eng', 'created_at', 'updated_at'];
        $clientWhere['status'] = 'ACTIVE';
        $this->getCompanyList = $this->common_model->select_to_table('clients', $clientSelect, $clientWhere);

        // Query Consultant Fees
        $consultantSelect = ['id', 'first_name', 'last_name', 'lead_faci', 'co_lead', 'co_lead_f2f', 'co_faci', 'lead_consultant', 'consulting', 'designer', 'moderator', 'producer', 'marshal', 'mod_opt'];
        $consultantWhere['active'] = 1;
        $consultantWhereColumnName = 'first_name';
        $consultantWhere_ascdesc = 'ASC';
        $this->getConsultantFee = $this->common_model->select_to_table_orderBy('consultantfees', $consultantSelect, $consultantWhere, $consultantWhereColumnName, $consultantWhere_ascdesc);

        // Engagement Title
        $engementTitleSelect = ['id', 'title'];
        $engagementTitleWhere['active'] = 1;
        $this->getEngagementTitle = $this->common_model->select_to_table('workshop_title_list', $engementTitleSelect, $engagementTitleWhere);

        // Engagement Cluster
        $engementClusterSelect = ['id', 'name'];
        $engagementClustgerWhere['active'] = 1;
        $this->getEngagementCluster = $this->common_model->select_to_table('mgt_cluster_list', $engementClusterSelect, $engagementClustgerWhere);

        // Engagement Intelligence
        $engementIntelligenceSelect = ['id', 'name'];
        $engagementIntelligenceWhere['active'] = 1;
        $this->getEngagementIntelligence = $this->common_model->select_to_table('mgt_intelligence_list', $engementIntelligenceSelect, $engagementIntelligenceWhere);
    }

    public function index() {

        $workshopList = $this->workshop_engagement_form_model->get_workshopList();
        $companyList = $this->getCompanyList;

        // Sub Info
        $subInfoSelect = ['id','workshop_engagement_forms_id','status','batch_number','session_number','venue','date','start_time','end_time','cluster','intelligence as core_area','sub_fees_total'];
        $subInfoWhere['active'] = 1;
        $subInfoList = $this->common_model->select_to_table('workshop_sub_informations_tbl', $subInfoSelect, $subInfoWhere);

        return view('form.components.mgtstrat_u_workshop.index', compact('workshopList', 'companyList', 'subInfoList'));
    }

    public function newRecord() {
        $companyList = $this->getCompanyList;
        $consultantFee = $this->getConsultantFee;
        $parentInfoList = [];
        $parentFeeList = [];
        $parentCostList = [];
        $coreArea =  DB::table('core_areas')->where('active',1)->get();
        $engagementTitleList = $this->getEngagementTitle;

        return view('form.components.mgtstrat_u_workshop.workshop_engagement', compact('coreArea','companyList','consultantFee','parentInfoList','parentFeeList','parentCostList', 'engagementTitleList'));
    }

    public function insert_workshop_engagement_record(Request $request) {

        $feeTypeCount = count($request->fee_type);
        $costTypeCount = count($request->cost_type);  
        
        DB::beginTransaction();
        try {

            $config = ['table'=>'workshop_engagement_forms_tbl', 'length'=>12, 'field'=>'workshop_eng_form_id', 'prefix'=>'WRKSHP-'];
            $id_budget_form = IdGenerator::generate($config);

            $workshop_form['client_id'] = (int)$request->client_id;
            $workshop_form['workshop_eng_form_id'] = $id_budget_form;
            $workshop_form['status'] = $request->status;
            $workshop_form['customized_type'] = $request->customized_type;
            $workshop_form['engagement_title'] = $request->engagement_title;
            $workshop_form['engagement_title_not_listed'] = ($request->engagement_title == '- NOT LISTED -') ? $request->engagement_title_not_listed : '';
            $workshop_form['pax_number'] = $request->pax_number;
            $workshop_form['batch_number'] = $request->batch_number;
            $workshop_form['session_number'] = $request->session_number;
            $workshop_form['venue'] = $request->program_venue;
            $workshop_form['program_start_time'] = $request->program_start_time;
            $workshop_form['program_end_time'] = $request->program_end_time;
            $workshop_form['cluster'] = $request->cluster;
            $workshop_form['intelligence'] = $request->core_area;
            $workshop_form['Engagement_fees_total'] = $request->input_totalPackages;
            $workshop_form['less_contri_to_overhead'] = $request->lesscto_noc;
   
            $parentId = $this->common_model->insert_to_table('workshop_engagement_forms_tbl', $workshop_form);   
            
            $this->_create_parent_fee_cost($request, $parentId, $feeTypeCount, $costTypeCount);
            $this->_create_subfees($request, $parentId, $feeTypeCount, $costTypeCount); // Create Big Budget Data (Sub information, Sub Fee, Sub Cost)

            if ( $request->status == 'Completed') {
                $this->common_model->setClientFirstLast_Engagement((int)$request->client_id, 'MgtStrat-U Workshops', $parentId);
            }

            DB::commit();   
            $engagementTitle = ($request->engagement_title == '- NOT LISTED -') ? $request->engagement_title_not_listed : $request->engagement_title;
            return redirect()->route('form/mgtstratu_workshops/index')->with('success', '<b>'.$engagementTitle.'</b><br>Added Successfully!');         
            
        } catch(\Exception $e) { 
            DB::rollback();
            Toastr::error($e->getMessage());
            echo 'here';
            echo '<pre>';
            print_r($e->getMessage());
            echo '</pre>';
            exit;
        }

        return ;
    }

    private function _create_parent_fee_cost($request, $parentId, $feeTypeCount, $costTypeCount) {

        for ($feeCount = 0; $feeTypeCount > $feeCount; $feeCount++) { // Fee

            $workshop_fee_form['workshop_eng_form_id'] = $parentId;
            $workshop_fee_form['type'] = $request->fee_type[$feeCount];
            $workshop_fee_form['package_fees_excl_vat'] = $request->fee_package[$feeCount];            
            $workshop_fee_form['session_num'] = $request->fee_num_sessions[$feeCount];
            $workshop_fee_form['nswh'] = $request->fee_nswh[$feeCount];
            $workshop_fee_form['nswh_percent'] = $request->nswh_percent[0];
            $workshop_fee_form['notes'] = $request->fee_notes[$feeCount];

            $this->common_model->insert_to_table('workshop_engagement_fees_tbl', $workshop_fee_form);
        }
        
        for ($costCount = 0; $costTypeCount > $costCount; $costCount++) { // Cost

            $workshop_cost_form['workshop_eng_form_id'] = $parentId;
            $workshop_cost_form['type'] = $request->cost_type[$costCount];
            $workshop_cost_form['hour_fee'] = $request->cost_hour_fee[$costCount] ?? '0';
            $workshop_cost_form['hour_num'] = $request->cost_hour_num[$costCount];
            $workshop_cost_form['nswh'] = $request->cost_nswh[$costCount];
            $workshop_cost_form['rooster'] = $request->cost_roster[$costCount];
            $workshop_cost_form['consultant_id'] = $request->cost_roster_id[$costCount];
            $workshop_cost_form['notes'] = $request->cost_notes[$costCount];

            $this->common_model->insert_to_table('workshop_engagement_costs_tbl', $workshop_cost_form);
        }

        return;

    }
    
    private function _create_subfees($request, $parentId, $feeTypeCount, $costTypeCount) {
        
        for ($batch_count = $request->start_batch_number; $batch_count < $request->batch_number+$request->start_batch_number; $batch_count++) {

            for ($session_count = 1; $session_count <= $request->session_number; $session_count++){
                
                $sub_information['workshop_engagement_forms_id']  = $parentId;
                $sub_information['status'] = $request->status;
                $sub_information['batch_number'] = $batch_count;
                $sub_information['session_number'] = $session_count;
                $sub_information['venue'] = $request->program_venue;
                $sub_information['start_time'] = $request->program_start_time;
                $sub_information['end_time'] = $request->program_end_time;
                $sub_information['cluster'] = $request->cluster;
                $sub_information['intelligence'] = $request->core_area;
                $sub_information['sub_fees_total'] = round((int)(str_replace(',', '', $request->input_totalPackages))/(int)($request->session_number*$request->batch_number));
                $subInfo_insertId = $this->common_model->insert_to_table('workshop_sub_informations_tbl', $sub_information);

                for ($feeSubCount = 0; $feeTypeCount > $feeSubCount; $feeSubCount++) { // Sub Fee

                    $subfee_packageFee = 0;
                    $subfee_sessionNumber = 0;
                    $subfee_nswh = 0;
                    $subfee_nswhPercent = 0;
                    $subfee_notes = '';   

                    if ($request->fee_type[$feeSubCount] === 'Customization Fee') {
                        if ($session_count == 1 && $batch_count == $request->start_batch_number) {                            
                            $subfee_packageFee = $request->fee_package[$feeSubCount];
                            $subfee_sessionNumber = $request->fee_num_sessions[$feeSubCount] ?? '0';    
                            $subfee_nswh = $request->fee_nswh[$feeSubCount] ?? '0';
                            $subfee_nswhPercent = $request->nswh_percent[0] ?? '0';
                            $subfee_notes = $request->fee_notes[$feeSubCount];
                        }
                    }  else {                        
                        $subfee_packageFee  = $request->fee_package[$feeSubCount];
                        $subfee_sessionNumber = ceil(($request->fee_num_sessions[$feeSubCount] ?? '0')/($request->session_number*$request->batch_number));
                        $subfee_nswh  = $request->fee_nswh[$feeSubCount] ?? '0';
                        $subfee_nswhPercent = $request->nswh_percent[0] ?? '0';
                        $subfee_notes  = $request->fee_notes[$feeSubCount];
                    }       
                    
                    $sub_fees['workshop_sub_informations_id'] = $subInfo_insertId;
                    $sub_fees['type'] = $request->fee_type[$feeSubCount];
                    $sub_fees['package_fees_excl_vat'] = $subfee_packageFee;
                    $sub_fees['session_num'] = $subfee_sessionNumber;                               
                    $sub_fees['nswh'] = $subfee_nswh;
                    $sub_fees['nswh_percent'] = $subfee_nswhPercent;
                    $sub_fees['notes'] = $subfee_notes;

                    $subFee_insertId = $this->common_model->insert_to_table('workshop_sub_fees_tbl', $sub_fees);
                } // End Sub Fee insert

                $session_count_lead = 1;

                for ($costCount = 0; $costTypeCount > $costCount; $costCount++) { // Sub Cost

                    $subCost_hour_fee = 0;
                    $subCost_hour_num = 0;
                    $subCost_nswh = 0;
                    $subCost_rooster = '';
                    $subCost_consultant_id = 0;
                    $subCost_notes = '';

                    if (in_array($request->cost_type[$costCount], $this->forFirstSession) && $session_count == 1 && $batch_count == $request->start_batch_number) {

                        $subCost_hour_fee = $request->cost_hour_fee[$costCount] ?? '0';
                        $subCost_hour_num = $request->cost_hour_num[$costCount];
                        $subCost_nswh = $request->cost_nswh[$costCount] ?? '0';
                        $subCost_rooster = $request->cost_roster[$costCount] ?? '';
                        $subCost_consultant_id = (int)$request->cost_roster_id[$costCount] ?? 0;
                        $subCost_notes = $request->cost_notes[$costCount] ?? '';

                        if ($request->cost_type[$costCount] == 'Customization Fee' && $session_count_lead == 1 ) { 
                            $session_count_lead++;
                        }

                    } else {
                        if ( !in_array($request->cost_type[$costCount], $this->forFirstSession) ) {
                            $subCost_hour_fee = $request->cost_hour_fee[$costCount] ?? '0';
                            if (!in_array($request->cost_type[$costCount], ['Off-Program Fee', 'Customization Fee'])) { 
                                $subCost_hour_num = ceil(($request->cost_hour_num[$costCount] ?? '0')/($request->session_number*$request->batch_number));
                            } else {
                                $subCost_hour_num = $request->cost_hour_num[$costCount];
                            }
                            $subCost_nswh = $request->cost_nswh[$costCount] ?? '0';
                            $subCost_rooster = $request->cost_roster[$costCount] ?? '';
                            $subCost_consultant_id = (int)$request->cost_roster_id[$costCount] ?? 0;
                            $subCost_notes = $request->cost_notes[$costCount] ?? '';
                        }
                    }

                    $sub_cost['workshop_sub_informations_id']  = $subInfo_insertId;
                    $sub_cost['type'] = $request->cost_type[$costCount];
                    $sub_cost['hour_fee'] = $subCost_hour_fee ?? '0';
                    $sub_cost['hour_num'] = $subCost_hour_num;
                    $sub_cost['nswh'] = $subCost_nswh;
                    $sub_cost['rooster'] = $subCost_rooster;
                    $sub_cost['consultant_id'] = $subCost_consultant_id;
                    $sub_cost['notes'] = $subCost_notes;

                    $subFee_insertId = $this->common_model->insert_to_table('workshop_sub_costs_tbl', $sub_cost);
                }   

            } // Second `for` loop end
        } // First `for` loop end
        
        return;
    }

    public function delete_workshop_engagement_record(Request $request) {

        DB::beginTransaction();
        try {
            $customize_name = $request->engagement_title;
            // Get Sub Info
            $subInfoSelect = ['*'];
            $subInfoWhere = ['workshop_engagement_forms_id' => $request->workshop_engagement_forms_id];
            $subInfoList = $this->common_model->select_to_table('workshop_sub_informations_tbl', $subInfoSelect, $subInfoWhere);

            foreach ($subInfoList as $key => $subInfoData) {
                $subcost_whereArr = ['workshop_sub_informations_id' => $subInfoData->id]; // Delete SubCost
                $this->common_model->delete_to_table('workshop_sub_costs_tbl', $subcost_whereArr);

                $subfee_whereArr = ['workshop_sub_informations_id' => $subInfoData->id]; // Delete SubFee
                $this->common_model->delete_to_table('workshop_sub_fees_tbl', $subfee_whereArr);
            }

            $subInfo_whereArr = ['workshop_engagement_forms_id' => $request->workshop_engagement_forms_id]; // Delete SubInfo
            $this->common_model->delete_to_table('workshop_sub_informations_tbl', $subInfo_whereArr);

            $cost_whereArr = ['workshop_eng_form_id' => $request->workshop_engagement_forms_id]; // Delete Cost
            $this->common_model->delete_to_table('workshop_engagement_costs_tbl', $cost_whereArr);

            $fee_whereArr = ['workshop_eng_form_id' => $request->workshop_engagement_forms_id]; // Delete Fee
            $this->common_model->delete_to_table('workshop_engagement_fees_tbl', $fee_whereArr);

            $workshopInfo_whereArr = ['id' => $request->workshop_engagement_forms_id]; // Delete info
            $this->common_model->delete_to_table('workshop_engagement_forms_tbl', $workshopInfo_whereArr);             
            
            DB::commit(); 
            return redirect()->back()->with('success', '<b>'.$customize_name.'</b><br>Deleted successfully');
        } catch(\Exception $e) {
            DB::rollback();
            Alert::error('MGTSTRAT-U Workshop Engagement deleted fail: ' . $e->getMessage(),'Error');
            return redirect()->back();
        }
    }

    public function update_workshop_engagement_record($id) {
        
        $data = $this->workshop_engagement_form_model->get_workshopList()[0];
        $companyList = $this->getCompanyList;
        $consultantFee = $this->getConsultantFee;
        $engagementTitleList = $this->getEngagementTitle;
        $coreArea =  DB::table('core_areas')->where('active',1)->get();

        // Parent Information
        $parentInfoSelect = ['*'];
        $parentInfoWhere['id'] = $id;
        // $parentInfoList = $this->common_model->select_to_table('workshop_engagement_forms_tbl', $parentInfoSelect, $parentInfoWhere)[0];
        $parentInfoList = $this->common_model->select_to_table('workshop_engagement_forms_tbl', $parentInfoSelect, $parentInfoWhere);

        if (count($parentInfoList) <= 0) {
            return redirect()->route('forms/no_record');
        }

        $parentInfoList = $parentInfoList[0];

        // Parent Fee
        $parentFeeSelect = ['*'];
        $parentFeeWhere['workshop_eng_form_id'] = $id;
        $parentFeeList = $this->common_model->select_to_table('workshop_engagement_fees_tbl', $parentFeeSelect, $parentFeeWhere);

        // Parent Cost
        $parentCostSelect = ['*'];
        $parentCostWhere['workshop_eng_form_id'] = $id;
        $parentCostList = $this->common_model->select_to_table('workshop_engagement_costs_tbl', $parentCostSelect, $parentCostWhere);

        return view('form.components.mgtstrat_u_workshop.workshop_engagement', compact('coreArea','engagementTitleList', 'companyList','consultantFee','parentInfoList','parentFeeList','parentCostList', 'data'));

    }

    public function save_update_workshop_engagement_record(Request $request) {

       
        $parent_id = $request->engagement_form_id;
        $feeTypeCount = count($request->fee_type);
        $costTypeCount = count($request->cost_type);    

        DB::beginTransaction();
        try { 
            $subInfoSelect = ['id', 'batch_number'];
            $subInfoWhere['workshop_engagement_forms_id'] = $parent_id;
            $getSubinfo = $this->common_model->select_to_table('workshop_sub_informations_tbl', $subInfoSelect, $subInfoWhere);
            
            $request->start_batch_number = $getSubinfo[0]->batch_number; // Get Start Batch Number

            // Delete Sub Record
            foreach($getSubinfo as $subInfoData) {
                $subFee_whereArr = ['workshop_sub_informations_id' => $subInfoData->id]; // Delete SubFee
                $this->common_model->delete_to_table('workshop_sub_fees_tbl', $subFee_whereArr);

                $subCost_whereArr = ['workshop_sub_informations_id' => $subInfoData->id]; // Delete SubCost
                $this->common_model->delete_to_table('workshop_sub_costs_tbl', $subCost_whereArr);
            }

            $subInfo_whereArr = ['workshop_engagement_forms_id' => $parent_id]; // Delete SubInformarion
            $this->common_model->delete_to_table('workshop_sub_informations_tbl', $subInfo_whereArr);
            // End Sub Record Deletion

            $parentCost_whereArr = ['workshop_eng_form_id' => $parent_id]; // Delete Parent Cost
            $this->common_model->delete_to_table('workshop_engagement_costs_tbl', $parentCost_whereArr);

            $parentFee_whereArr = ['workshop_eng_form_id' => $parent_id]; // Delete Parent Fee
            $this->common_model->delete_to_table('workshop_engagement_fees_tbl', $parentFee_whereArr);

            $workshop_form['client_id'] = (int)$request->client_id;
            $workshop_form['status'] = $request->status;
            $workshop_form['customized_type'] = $request->customized_type;
            $workshop_form['engagement_title'] = $request->engagement_title;
            $workshop_form['engagement_title_not_listed'] = ($request->engagement_title == '- NOT LISTED -') ? $request->engagement_title_not_listed : '';
            $workshop_form['pax_number'] = $request->pax_number;
            $workshop_form['batch_number'] = $request->batch_number;
            $workshop_form['session_number'] = $request->session_number;
            $workshop_form['venue'] = $request->program_venue;
            $workshop_form['program_start_time'] = $request->program_start_time;
            $workshop_form['program_end_time'] = $request->program_end_time;
            $workshop_form['cluster'] = $request->cluster;
            $workshop_form['intelligence'] = $request->core_area;
            $workshop_form['Engagement_fees_total'] = $request->input_totalPackages;
            $workshop_form['less_contri_to_overhead'] = $request->lesscto_noc;
            $workshop_form_where['id'] = $parent_id;  
            $this->common_model->update_to_table('workshop_engagement_forms_tbl', $workshop_form, $workshop_form_where);   

            $this->_create_parent_fee_cost($request, $parent_id, $feeTypeCount, $costTypeCount);
            $this->_create_subfees($request, $parent_id, $feeTypeCount, $costTypeCount); // Create Big Budget Data (Sub information, Sub Fee, Sub Cost)

            if ( $request->status == 'Completed') {
                $this->common_model->setClientFirstLast_Engagement((int)$request->client_id, 'MgtStrat-U Workshops', $parent_id);
            }

            DB::commit(); 
            $engagementTitle = ($request->engagement_title == '- NOT LISTED -') ? $request->engagement_title_not_listed : $request->engagement_title;
            return redirect()->back()->with('success', '<b>'.$engagementTitle.'</b><br>Updated successfully');

        } catch(\Exception $e) {
            DB::rollback();
            // Toastr::error($e->getMessage());
            echo '<pre>';
            print_r($e->getMessage());
            echo '</pre>';
            exit();
            return redirect()->back();
        }

    }

    public function workshop_editSubForm($id) {

        $data = $this->workshop_engagement_form_model->get_workshopList()[0];
        $companyList = $this->getCompanyList;
        $consultantFee = $this->getConsultantFee;
        $engagementClusterList = $this->getEngagementCluster;
        $engagementIntelligenceList = $this->getEngagementIntelligence;

        // Sub Information
        $subInfoSelect = ['*', 'intelligence as core_area'];
        $subInfoWhere['id'] = $id;
        $subInfoList = $this->common_model->select_to_table('workshop_sub_informations_tbl', $subInfoSelect, $subInfoWhere);

        if (count($subInfoList) <= 0) {
            return redirect()->route('forms/no_record');
        }

        // Sub Fee
        $subFeeSelect = ['*'];
        $subFeeWhere['workshop_sub_informations_id'] = $id;
        $subFeeList = $this->common_model->select_to_table('workshop_sub_fees_tbl', $subFeeSelect, $subFeeWhere);

        // Sub Cost
        $subCostSelect = ['*'];
        $subCostWhere['workshop_sub_informations_id'] = $id;
        $subCostList = $this->common_model->select_to_table('workshop_sub_costs_tbl', $subCostSelect, $subCostWhere);

        // Parent Information
        $parentInfoSelect = ['*'];
        $parentInfoWhere['id'] = $subInfoList[0]->workshop_engagement_forms_id;
        $parentData = $this->common_model->select_to_table('workshop_engagement_forms_tbl', $parentInfoSelect, $parentInfoWhere);

        // Sub Info
        $subInfosSelect = ['*'];
        $subInfosWhere['active'] = 1;
        $subInfosWhere['workshop_engagement_forms_id'] = $parentData[0]->id;
        $subInfosList = $this->common_model->select_to_table('workshop_sub_informations_tbl', $subInfosSelect, $subInfosWhere);

        $getClient = Client::orderBy('company_name')->where('id', $parentData[0]->client_id)->get();

        return view('form.components.mgtstrat_u_workshop.sub_form.workshop_sub_information',
        compact('subInfosList','companyList','consultantFee','subInfoList','subFeeList', 'subCostList', 'parentData', 'getClient', 'data', 'engagementClusterList', 'engagementIntelligenceList'));

    }

    public function workshop_save_editSubForm(Request $request) {
        DB::beginTransaction();
        try {           

            $subInfoId = $request->id;
            $feeTypeCount = count($request->fee_type);
            $costTypeCount = count($request->cost_type);  

            $sub_information['status'] = $request->status;
            $sub_information['date'] = $request->date;
            $sub_information['venue'] = $request->program_venue;
            $sub_information['start_time'] = $request->program_start_time;
            $sub_information['end_time'] = $request->program_end_time;
            $sub_information['cluster'] = $request->cluster;
            $sub_information['intelligence'] = $request->core_area;
            $sub_information['sub_fees_total'] = $request->input_totalPackages;
            $sub_informationWhere['id'] = $subInfoId;
            $this->common_model->update_to_table('workshop_sub_informations_tbl', $sub_information, $sub_informationWhere);

            $subFee_whereArr = ['workshop_sub_informations_id' => $subInfoId]; // Delete SubFee
            $this->common_model->delete_to_table('workshop_sub_fees_tbl', $subFee_whereArr);

            for ($feeSubCount = 0; $feeTypeCount > $feeSubCount; $feeSubCount++) {
                $sub_fees['workshop_sub_informations_id'] = $subInfoId;
                $sub_fees['type'] = $request->fee_type[$feeSubCount];
                $sub_fees['package_fees_excl_vat'] = $request->fee_package[$feeSubCount];
                $sub_fees['session_num'] = $request->fee_num_sessions[$feeSubCount];
                $sub_fees['nswh'] = $request->fee_nswh[$feeSubCount] ?? '0';
                $sub_fees['nswh_percent'] = $request->nswh_percent[0] ?? '0';
                $sub_fees['notes'] = $request->fee_notes[$feeSubCount];
                $this->common_model->insert_to_table('workshop_sub_fees_tbl', $sub_fees);
            }

            $subCost_whereArr = ['workshop_sub_informations_id' => $subInfoId]; // Delete SubCost
            $this->common_model->delete_to_table('workshop_sub_costs_tbl', $subCost_whereArr);
            
            for ($costCount = 0; $costTypeCount > $costCount; $costCount++) {
                $sub_cost['workshop_sub_informations_id']  = $subInfoId;
                $sub_cost['type'] = $request->cost_type[$costCount];
                $sub_cost['hour_fee'] = $request->cost_hour_fee[$costCount] ?? '0';
                $sub_cost['hour_num'] = $request->cost_hour_num[$costCount] ?? '0';
                $sub_cost['nswh'] = $request->cost_nswh[$costCount] ?? '0';
                $sub_cost['rooster'] = $request->cost_roster[$costCount] ?? '';
                $sub_cost['consultant_id'] = (int)$request->cost_roster_id[$costCount] ?? '';
                $sub_cost['notes'] = $request->cost_notes[$costCount] ?? '';
                $this->common_model->insert_to_table('workshop_sub_costs_tbl', $sub_cost);
            } 
            
            DB::commit();
            return redirect()->back()->with('success', '<b>Batch '.$request->batch_name.'- Session '.$request->session_number.'</b>'.'<br>Updated successfully!');            
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function modify_all_session($id = '') {

        $data = $this->workshop_engagement_form_model->get_workshopList()[0];
        $companyList = $this->getCompanyList;
        $consultantFee = $this->getConsultantFee;       

        // Parent Information
        $parentInfoSelect = ['*'];
        $parentInfoWhere['id'] = $id;
        $parentData = $this->common_model->select_to_table('workshop_engagement_forms_tbl', $parentInfoSelect, $parentInfoWhere);

        if (count($parentData) <= 0) {
            return redirect()->route('forms/no_record');
        }

        $getClient = Client::orderBy('company_name')->where('id', $parentData[0]->client_id)->get();
        // $cluster =  DB::table('clusters')->where('active',1)->get();
        // $coreArea =  DB::table('core_areas')->where('active',1)->get();

        $cluster = $this->getEngagementCluster;
        $coreArea = $this->getEngagementIntelligence;

        // Sub Information
        $subInfoSelect = ['*', 'intelligence as core_area'];
        $subInfoWhere['workshop_engagement_forms_id'] = $id;
        $subInfoList = $this->common_model->select_to_table('workshop_sub_informations_tbl', $subInfoSelect, $subInfoWhere);

        // Sub Cost
        $subCostData = DB::table('workshop_engagement_forms_tbl')
            ->join('workshop_sub_informations_tbl', 'workshop_engagement_forms_tbl.id', '=', 'workshop_sub_informations_tbl.workshop_engagement_forms_id')
            ->join('workshop_sub_costs_tbl', 'workshop_sub_informations_tbl.id', '=', 'workshop_sub_costs_tbl.workshop_sub_informations_id')
            ->select('workshop_sub_costs_tbl.*')
            ->where('workshop_sub_informations_tbl.workshop_engagement_forms_id',$id)
            ->get();

        return view('form.components.mgtstrat_u_workshop.sub_form.modify_all_sessions',
        compact('companyList','consultantFee', 'parentData', 'getClient', 'subInfoList', 'subCostData', 'cluster', 'coreArea'));
    }

    public function save_modified_sessions(Request $request) {     
        DB::beginTransaction();
        try {

            $dataCount = 0;
            $tbaConsultant = ['Sales','Referral','Engagement Manager','Creators Fees','Off-Program Fee'];

            foreach($request->subinfo_id as $subinfoData) {
                $update = [
                    'status'      => $request->status[$dataCount],
                    'venue'      => $request->venue[$dataCount],
                    'date'        => $request->date[$dataCount],
                    'start_time'  => $request->start_time[$dataCount],
                    'end_time'    => $request->end_time[$dataCount],
                    'cluster'     => $request->cluster[$dataCount],
                    'intelligence'   => $request->core_area[$dataCount]
                ];
                DB::table('workshop_sub_informations_tbl')->where('id',$subinfoData)->update($update);

                $subCostdataCount = 0;
                foreach($request->subcost_id[$dataCount] as $cost_ids => $cost_id) {     
                    $update_subCost = [];                             
                    $update_subCost['rooster'] = $request->cost_rooster[$dataCount][$subCostdataCount];  
                    if ($update_subCost['rooster'] != 'TBA') {
                        $update_subCost['consultant_id'] = $request->cost_rooster_id[$dataCount][$subCostdataCount];
                    }    
                    if (!in_array($request->cost_type[$dataCount][$subCostdataCount], $tbaConsultant)) {
                        $update_subCost['hour_fee'] = $request->cost_hour_fee[$dataCount][$subCostdataCount];
                    }
                    if ($request->cost_type[$dataCount][$subCostdataCount] == 'Creators Fees') {
                        $update_subCost['hour_fee'] = $request->cost_hour_fee[$dataCount][$subCostdataCount];
                    }

                    DB::table('workshop_sub_costs_tbl')->where('id',$cost_id)->update($update_subCost);
                    $subCostdataCount++;
                } 
                $dataCount++;
            }
            DB::commit();    
            return redirect()->back()->with('success', 'Updated successfully!');
        } catch(\Exception $e) { 
            DB::rollback();
            // Toastr::error($e->getMessage());
            // return redirect()->back();
            echo '<pre>';
            print_r($e->getMessage());
            echo '</pre>';
        }
    }

    public function get_cluster_intelligence(Request $request) {        
        $data = $this->workshop_engagement_form_model->get_cluster_intelligence($request->title);
        return Response::json($data);
    }

}