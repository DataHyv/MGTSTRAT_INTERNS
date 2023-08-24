<?php

namespace App\Http\Controllers;

use App\Models\Coaching;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\Common;
use App\Models\Client;
use DB;

class CoachingController extends Controller
{
    protected $coaching_engagement_form_model;
    protected $common_model;
    public function __construct(){
        // Load Models
        $this->coaching_engagement_form_model = new Coaching();
        $this->common_model = new Common();

        $this->forFirstSession = ['Consulting Design'];

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
        $this->getEngagementTitle = $this->common_model->select_to_table('coaching_title_list', $engementTitleSelect, $engagementTitleWhere);
    }

    public function index() {
        $coachingList = $this->coaching_engagement_form_model->get_coachingList();
        $companyList = $this->getCompanyList;

        // Sub Info
        $subInfoSelect = ['id','coaching_engagement_forms_id','status','batch_number','session_number','venue','date','start_time','end_time','cluster','intelligence as core_area','sub_fees_total'];
        $subInfoWhere['active'] = 1;
        $subInfoList = $this->common_model->select_to_table('coaching_sub_informations_tbl', $subInfoSelect, $subInfoWhere);

        return view('form.components.coaching_engagement.index', compact('coachingList', 'companyList', 'subInfoList'));
    }

    public function newRecord() {
        $companyList = $this->getCompanyList;
        $consultantFee = $this->getConsultantFee;
        $parentInfoList = [];
        $parentFeeList = [];
        $parentCostList = [];
        $coreArea =  DB::table('core_areas')->where('active',1)->get();
        $engagementTitleList = $this->getEngagementTitle;

        return view('form.components.coaching_engagement.coaching_engagement', compact('engagementTitleList', 'companyList','consultantFee','parentInfoList','parentFeeList','parentCostList','coreArea'));
    }

    public function insert_coaching_engagement_record(Request $request) {

        $feeTypeCount = count($request->fee_type);
        $costTypeCount = count($request->cost_type);  
        
        DB::beginTransaction();
        try {

            $config = ['table'=>'coaching_engagement_forms_tbl', 'length'=>12, 'field'=>'coaching_eng_form_id', 'prefix'=>'CHNG-'];
            $id_budget_form = IdGenerator::generate($config);

            $coaching_form['client_id'] = (int)$request->client_id;
            $coaching_form['coaching_eng_form_id'] = $id_budget_form;
            $coaching_form['status'] = $request->status;
            $coaching_form['customized_type'] = $request->customized_type;
            $coaching_form['engagement_title'] = $request->engagement_title;
            $coaching_form['engagement_title_not_listed'] = ($request->engagement_title == '- MIXED -') ? $request->engagement_title_not_listed : '';
            $coaching_form['pax_number'] = $request->pax_number;
            $coaching_form['batch_number'] = $request->batch_number;
            $coaching_form['session_number'] = $request->session_number;
            $coaching_form['venue'] = $request->program_venue;
            $coaching_form['program_start_time'] = $request->program_start_time;
            $coaching_form['program_end_time'] = $request->program_end_time;
            $coaching_form['cluster'] = $request->cluster;
            $coaching_form['intelligence'] = $request->core_area;
            $coaching_form['Engagement_fees_total'] = $request->input_totalPackages;
            $coaching_form['less_contri_to_overhead'] = $request->lesscto_noc;
   
            $parentId = $this->common_model->insert_to_table('coaching_engagement_forms_tbl', $coaching_form);   
            
            $this->_create_parent_fee_cost($request, $parentId, $feeTypeCount, $costTypeCount);
            $this->_create_subfees($request, $parentId, $feeTypeCount, $costTypeCount); // Create Big Budget Data (Sub information, Sub Fee, Sub Cost)

            if ( $request->status == 'Completed') {
                $this->common_model->setClientFirstLast_Engagement((int)$request->client_id, 'Coaching', $parentId);
            }

            DB::commit();   
            $engagementTitle = ($request->engagement_title == '- MIXED -') ? $request->engagement_title_not_listed : $request->engagement_title;
            return redirect()->route('form/coaching')->with('success', '<b>'.$engagementTitle.'</b><br>Added Successfully!');         
            
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

            $coaching_fee_form['coaching_eng_form_id'] = $parentId;
            $coaching_fee_form['type'] = $request->fee_type[$feeCount];
            $coaching_fee_form['coach_number'] = $request->coach_num[$feeCount];            
            $coaching_fee_form['daily_fees'] = $request->fee_daily[$feeCount];
            $coaching_fee_form['session_num'] = $request->fee_num_sessions[$feeCount];
            $coaching_fee_form['nswh'] = $request->fee_nswh[$feeCount];
            $coaching_fee_form['nswh_percent'] = $request->nswh_percent[0];
            $coaching_fee_form['notes'] = $request->fee_notes[$feeCount];

            $this->common_model->insert_to_table('coaching_engagement_fees_tbl', $coaching_fee_form);
        }
        
        for ($costCount = 0; $costTypeCount > $costCount; $costCount++) { // Cost

            $coaching_cost_form['coaching_eng_form_id'] = $parentId;
            $coaching_cost_form['type'] = $request->cost_type[$costCount];
            $coaching_cost_form['coaches_num'] = $request->cost_coach_num[$costCount] ?? '0';
            $coaching_cost_form['session_fee'] = $request->cost_session_fee[$costCount];
            $coaching_cost_form['session_num'] = $request->cost_session_num[$costCount];
            $coaching_cost_form['nswh'] = $request->cost_nswh[$costCount];
            $coaching_cost_form['rooster'] = $request->cost_roster[$costCount];
            $coaching_cost_form['consultant_id'] = $request->cost_roster_id[$costCount];
            $coaching_cost_form['notes'] = $request->cost_notes[$costCount];

            $this->common_model->insert_to_table('coaching_engagement_costs_tbl', $coaching_cost_form);
        }

        return;

    }
    
    private function _create_subfees($request, $parentId, $feeTypeCount, $costTypeCount) {
        
        for ($batch_count = $request->start_batch_number; $batch_count < $request->batch_number+$request->start_batch_number; $batch_count++) {

            for ($session_count = 1; $session_count <= $request->session_number; $session_count++){
                
                $sub_information['coaching_engagement_forms_id']  = $parentId;
                $sub_information['status'] = $request->status;
                $sub_information['batch_number'] = $batch_count;
                $sub_information['session_number'] = $session_count;
                $sub_information['venue'] = $request->program_venue;
                $sub_information['start_time'] = $request->program_start_time;
                $sub_information['end_time'] = $request->program_end_time;
                $sub_information['cluster'] = $request->cluster;
                $sub_information['intelligence'] = $request->core_area;
                $sub_information['sub_fees_total'] = round((int)(str_replace(',', '', $request->input_totalPackages))/(int)($request->session_number*$request->batch_number));
                $subInfo_insertId = $this->common_model->insert_to_table('coaching_sub_informations_tbl', $sub_information);

                for ($feeSubCount = 0; $feeTypeCount > $feeSubCount; $feeSubCount++) { // Sub Fee

                    $subfee_coach_number = 0;
                    $subfee_daily_fees = 0;
                    $subfee_sessionNumber = 0;
                    $subfee_nswh = 0;
                    $subfee_nswhPercent = 0;
                    $subfee_notes = '';   

                    if ($request->fee_type[$feeSubCount] === 'Consulting and/or Design') {
                        if ($session_count == 1 && $batch_count == $request->start_batch_number) {                            
                            $subfee_coach_number = $request->coach_num[$feeSubCount];
                            $subfee_daily_fees = $request->fee_daily[$feeSubCount];
                            $subfee_sessionNumber = $request->fee_num_sessions[$feeSubCount] ?? '0';    
                            $subfee_nswh = $request->fee_nswh[$feeSubCount] ?? '0';
                            $subfee_nswhPercent = $request->nswh_percent[0] ?? '0';
                            $subfee_notes = $request->fee_notes[$feeSubCount];
                        }
                    }  else {                        
                        $subfee_coach_number  = $request->coach_num[$feeSubCount];
                        $subfee_daily_fees  = $request->fee_daily[$feeSubCount];
                        $subfee_sessionNumber = ceil(($request->fee_num_sessions[$feeSubCount] ?? '0')/($request->session_number*$request->batch_number));
                        $subfee_nswh  = $request->fee_nswh[$feeSubCount] ?? '0';
                        $subfee_nswhPercent = $request->nswh_percent[0] ?? '0';
                        $subfee_notes  = $request->fee_notes[$feeSubCount];
                    }    

                    $sub_fees['coaching_sub_informations_id'] = $subInfo_insertId;
                    $sub_fees['type'] = $request->fee_type[$feeSubCount];
                    $sub_fees['coach_number'] = $subfee_coach_number;
                    $sub_fees['daily_fees'] = $subfee_daily_fees;                               
                    $sub_fees['session_num'] = $subfee_sessionNumber;                               
                    $sub_fees['nswh'] = $subfee_nswh;
                    $sub_fees['nswh_percent'] = $subfee_nswhPercent;
                    $sub_fees['notes'] = $subfee_notes;

                    $subFee_insertId = $this->common_model->insert_to_table('coaching_sub_fees_tbl', $sub_fees);
                } // End Sub Fee insert

                $session_count_lead = 1;

                for ($costCount = 0; $costTypeCount > $costCount; $costCount++) { // Sub Cost

                    $subCost_coaches_num = 0;
                    $subCost_session_fee = 0;
                    $subCost_session_num = 0;
                    $subCost_nswh = 0;
                    $subCost_rooster = '';
                    $subCost_consultant_id = 0;
                    $subCost_notes = '';

                    if (in_array($request->cost_type[$costCount], $this->forFirstSession) && $session_count == 1 && $batch_count == $request->start_batch_number) {

                        $subCost_coaches_num = $request->cost_coach_num[$costCount] ?? '0';
                        $subCost_session_fee = $request->cost_session_fee[$costCount];
                        $subCost_session_num = $request->cost_session_num[$costCount];
                        $subCost_nswh = $request->cost_nswh[$costCount] ?? '0';
                        $subCost_rooster = $request->cost_roster[$costCount] ?? '';
                        $subCost_consultant_id = (int)$request->cost_roster_id[$costCount] ?? 0;
                        $subCost_notes = $request->cost_notes[$costCount] ?? '';

                        if ($request->cost_type[$costCount] == 'Consulting Design' && $session_count_lead == 1 ) { 
                            $session_count_lead++;
                        }

                    } else {
                        if ( !in_array($request->cost_type[$costCount], $this->forFirstSession) ) {
                            $subCost_coaches_num = $request->cost_coach_num[$costCount] ?? '0';
                            $subCost_session_fee = $request->cost_session_fee[$costCount] ?? '0';
                            if (!in_array($request->cost_type[$costCount], ['Program Expenses'])) { 
                                $subCost_session_num = ceil(($request->cost_session_num[$costCount] ?? '0')/($request->session_number*$request->batch_number));
                            } else {
                                $subCost_session_num = $request->cost_session_num[$costCount];
                            }                            
                            $subCost_nswh = $request->cost_nswh[$costCount] ?? '0';
                            $subCost_rooster = $request->cost_roster[$costCount] ?? '';
                            $subCost_consultant_id = (int)$request->cost_roster_id[$costCount] ?? 0;
                            $subCost_notes = $request->cost_notes[$costCount] ?? '';
                        }
                    }

                    $sub_cost['coaching_sub_informations_id']  = $subInfo_insertId;
                    $sub_cost['type'] = $request->cost_type[$costCount];
                    $sub_cost['coaches_num'] = $subCost_coaches_num ?? '0';
                    $sub_cost['session_fee'] = $subCost_session_fee;
                    $sub_cost['session_num'] = $subCost_session_num;
                    $sub_cost['nswh'] = $subCost_nswh;
                    $sub_cost['rooster'] = $subCost_rooster;
                    $sub_cost['consultant_id'] = $subCost_consultant_id;
                    $sub_cost['notes'] = $subCost_notes;

                    $subFee_insertId = $this->common_model->insert_to_table('coaching_sub_costs_tbl', $sub_cost);
                }   

            } // Second `for` loop end
        } // First `for` loop end
        
        return;
    }

    public function update_coaching_engagement_record($id) {
        
        $data = $this->coaching_engagement_form_model->get_coachingList()[0];
        $companyList = $this->getCompanyList;
        $consultantFee = $this->getConsultantFee;
        $coreArea =  DB::table('core_areas')->where('active',1)->get();
        $engagementTitleList = $this->getEngagementTitle;

        // Parent Information
        $parentInfoSelect = ['*'];
        $parentInfoWhere['id'] = $id;
        $parentInfoList = $this->common_model->select_to_table('coaching_engagement_forms_tbl', $parentInfoSelect, $parentInfoWhere);

        if (count($parentInfoList) <= 0) {
            return redirect()->route('forms/no_record');
        }

        $parentInfoList = $parentInfoList[0];

        // Parent Fee
        $parentFeeSelect = ['*'];
        $parentFeeWhere['coaching_eng_form_id'] = $id;
        $parentFeeList = $this->common_model->select_to_table('coaching_engagement_fees_tbl', $parentFeeSelect, $parentFeeWhere);

        // Parent Cost
        $parentCostSelect = ['*'];
        $parentCostWhere['coaching_eng_form_id'] = $id;
        $parentCostList = $this->common_model->select_to_table('coaching_engagement_costs_tbl', $parentCostSelect, $parentCostWhere);

        return view('form.components.coaching_engagement.coaching_engagement', 
        compact('companyList','consultantFee','parentInfoList','parentFeeList','parentCostList','data','coreArea','engagementTitleList'));

    }

    public function save_update_coaching_engagement_record(Request $request) {

        $parent_id = $request->engagement_form_id;
        $feeTypeCount = count($request->fee_type);
        $costTypeCount = count($request->cost_type);    

        DB::beginTransaction();
        try { 
            $subInfoSelect = ['id', 'batch_number'];
            $subInfoWhere['coaching_engagement_forms_id'] = $parent_id;
            $getSubinfo = $this->common_model->select_to_table('coaching_sub_informations_tbl', $subInfoSelect, $subInfoWhere);
            
            $request->start_batch_number = $getSubinfo[0]->batch_number; // Get Start Batch Number

            // Delete Sub Record
            foreach($getSubinfo as $subInfoData) {
                $subFee_whereArr = ['coaching_sub_informations_id' => $subInfoData->id]; // Delete SubFee
                $this->common_model->delete_to_table('coaching_sub_fees_tbl', $subFee_whereArr);

                $subCost_whereArr = ['coaching_sub_informations_id' => $subInfoData->id]; // Delete SubCost
                $this->common_model->delete_to_table('coaching_sub_costs_tbl', $subCost_whereArr);
            }

            $subInfo_whereArr = ['coaching_engagement_forms_id' => $parent_id]; // Delete SubInformarion
            $this->common_model->delete_to_table('coaching_sub_informations_tbl', $subInfo_whereArr);
            // End Sub Record Deletion

            $parentCost_whereArr = ['coaching_eng_form_id' => $parent_id]; // Delete Parent Cost
            $this->common_model->delete_to_table('coaching_engagement_costs_tbl', $parentCost_whereArr);

            $parentFee_whereArr = ['coaching_eng_form_id' => $parent_id]; // Delete Parent Fee
            $this->common_model->delete_to_table('coaching_engagement_fees_tbl', $parentFee_whereArr);

            $coaching_form['client_id'] = (int)$request->client_id;
            $coaching_form['status'] = $request->status;
            $coaching_form['customized_type'] = $request->customized_type;
            $coaching_form['engagement_title'] = $request->engagement_title;
            $coaching_form['engagement_title_not_listed'] = ($request->engagement_title == '- MIXED -') ? $request->engagement_title_not_listed : '';
            $coaching_form['pax_number'] = $request->pax_number;
            $coaching_form['batch_number'] = $request->batch_number;
            $coaching_form['session_number'] = $request->session_number;
            $coaching_form['venue'] = $request->program_venue;
            $coaching_form['program_start_time'] = $request->program_start_time;
            $coaching_form['program_end_time'] = $request->program_end_time;
            $coaching_form['cluster'] = $request->cluster;
            $coaching_form['intelligence'] = $request->core_area;
            $coaching_form['Engagement_fees_total'] = $request->input_totalPackages;
            $coaching_form['less_contri_to_overhead'] = $request->lesscto_noc;
            $coaching_form_where['id'] = $parent_id;  
            $this->common_model->update_to_table('coaching_engagement_forms_tbl', $coaching_form, $coaching_form_where);   

            $this->_create_parent_fee_cost($request, $parent_id, $feeTypeCount, $costTypeCount);
            $this->_create_subfees($request, $parent_id, $feeTypeCount, $costTypeCount); // Create Big Budget Data (Sub information, Sub Fee, Sub Cost)

            if ( $request->status == 'Completed') {
                $this->common_model->setClientFirstLast_Engagement((int)$request->client_id, 'Coaching', $parent_id);
            }

            DB::commit(); 
            $engagementTitle = ($request->engagement_title == '- MIXED -') ? $request->engagement_title_not_listed : $request->engagement_title;
            return redirect()->back()->with('success', '<b>'.$engagementTitle.'</b><br>Updated successfully');

        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error($e->getMessage());
            return redirect()->back();
        }

    }

    public function delete_coaching_engagement_record(Request $request) {

        DB::beginTransaction();
        try {
            $customize_name = $request->engagement_title;
            // Get Sub Info
            $subInfoSelect = ['*'];
            $subInfoWhere = ['coaching_engagement_forms_id' => $request->coaching_engagement_forms_id];
            $subInfoList = $this->common_model->select_to_table('coaching_sub_informations_tbl', $subInfoSelect, $subInfoWhere);

            foreach ($subInfoList as $key => $subInfoData) {
                $subcost_whereArr = ['coaching_sub_informations_id' => $subInfoData->id]; // Delete SubCost
                $this->common_model->delete_to_table('coaching_sub_costs_tbl', $subcost_whereArr);

                $subfee_whereArr = ['coaching_sub_informations_id' => $subInfoData->id]; // Delete SubFee
                $this->common_model->delete_to_table('coaching_sub_fees_tbl', $subfee_whereArr);
            }

            $subInfo_whereArr = ['coaching_engagement_forms_id' => $request->coaching_engagement_forms_id]; // Delete SubInfo
            $this->common_model->delete_to_table('coaching_sub_informations_tbl', $subInfo_whereArr);

            $cost_whereArr = ['coaching_eng_form_id' => $request->coaching_engagement_forms_id]; // Delete Cost
            $this->common_model->delete_to_table('coaching_engagement_costs_tbl', $cost_whereArr);

            $fee_whereArr = ['coaching_eng_form_id' => $request->coaching_engagement_forms_id]; // Delete Fee
            $this->common_model->delete_to_table('coaching_engagement_fees_tbl', $fee_whereArr);

            $ftfInfo_whereArr = ['id' => $request->coaching_engagement_forms_id]; // Delete info
            $this->common_model->delete_to_table('coaching_engagement_forms_tbl', $ftfInfo_whereArr);             
            
            DB::commit(); 
            return redirect()->back()->with('success', '<b>'.$customize_name.'</b><br>Deleted successfully');
        } catch(\Exception $e) {
            DB::rollback();
            Alert::error('MGTSTRAT-U Workshop Engagement deleted fail: ' . $e->getMessage(),'Error');
            return redirect()->back();
        }
    }

    public function coaching_editSubForm($id) {

        $data = $this->coaching_engagement_form_model->get_coachingList()[0];
        $companyList = $this->getCompanyList;
        $consultantFee = $this->getConsultantFee;

        // Sub Information
        $subInfoSelect = ['*', 'intelligence as core_area'];
        $subInfoWhere['id'] = $id;
        $subInfoList = $this->common_model->select_to_table('coaching_sub_informations_tbl', $subInfoSelect, $subInfoWhere);

        if (count($subInfoList) <= 0) {
            return redirect()->route('forms/no_record');
        }

        // Sub Fee
        $subFeeSelect = ['*'];
        $subFeeWhere['coaching_sub_informations_id'] = $id;
        $subFeeList = $this->common_model->select_to_table('coaching_sub_fees_tbl', $subFeeSelect, $subFeeWhere);

        // Sub Cost
        $subCostSelect = ['*'];
        $subCostWhere['coaching_sub_informations_id'] = $id;
        $subCostList = $this->common_model->select_to_table('coaching_sub_costs_tbl', $subCostSelect, $subCostWhere);

        // Parent Information
        $parentInfoSelect = ['*'];
        $parentInfoWhere['id'] = $subInfoList[0]->coaching_engagement_forms_id;
        $parentData = $this->common_model->select_to_table('coaching_engagement_forms_tbl', $parentInfoSelect, $parentInfoWhere);

        // Sub Info
        $subInfosSelect = ['id','coaching_engagement_forms_id','status','batch_number','session_number','venue','date','start_time','end_time','cluster','intelligence as core_area','sub_fees_total'];
        $subInfosWhere['active'] = 1;
        $subInfosWhere['coaching_engagement_forms_id'] = $parentData[0]->id;
        $subInfosList = $this->common_model->select_to_table('coaching_sub_informations_tbl', $subInfosSelect, $subInfosWhere);

        $getClient = Client::orderBy('company_name')->where('id', $parentData[0]->client_id)->get();

        return view('form.components.coaching_engagement.sub_form.coaching_sub_information',
        compact('companyList','consultantFee','subInfoList','subFeeList', 'subCostList', 'parentData', 'getClient', 'data', 'subInfosList'));

    }

    public function coaching_save_editSubForm(Request $request) {

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
            $this->common_model->update_to_table('coaching_sub_informations_tbl', $sub_information, $sub_informationWhere);

            $subFee_whereArr = ['coaching_sub_informations_id' => $subInfoId]; // Delete SubFee
            $this->common_model->delete_to_table('coaching_sub_fees_tbl', $subFee_whereArr);

            for ($feeSubCount = 0; $feeTypeCount > $feeSubCount; $feeSubCount++) {
                $sub_fees['coaching_sub_informations_id'] = $subInfoId;
                $sub_fees['type'] = $request->fee_type[$feeSubCount];
                $sub_fees['coach_number'] = $request->coach_num[$feeSubCount];
                $sub_fees['daily_fees'] = $request->fee_daily[$feeSubCount];
                $sub_fees['session_num'] = $request->fee_num_sessions[$feeSubCount];
                $sub_fees['nswh'] = $request->fee_nswh[$feeSubCount] ?? '0';
                $sub_fees['nswh_percent'] = $request->nswh_percent[0] ?? '0';
                $sub_fees['notes'] = $request->fee_notes[$feeSubCount];
                $this->common_model->insert_to_table('coaching_sub_fees_tbl', $sub_fees);
            } 

            $subCost_whereArr = ['coaching_sub_informations_id' => $subInfoId]; // Delete SubCost
            $this->common_model->delete_to_table('coaching_sub_costs_tbl', $subCost_whereArr);
            
            for ($costCount = 0; $costTypeCount > $costCount; $costCount++) {
                $sub_cost['coaching_sub_informations_id']  = $subInfoId;
                $sub_cost['type'] = $request->cost_type[$costCount];
                $sub_cost['coaches_num'] = $request->cost_coach_num[$costCount] ?? '0';
                $sub_cost['session_fee'] = $request->cost_session_fee[$costCount] ?? '0';
                $sub_cost['session_num'] = $request->cost_session_num[$costCount] ?? '0';
                $sub_cost['nswh'] = $request->cost_nswh[$costCount] ?? '0';
                $sub_cost['rooster'] = $request->cost_roster[$costCount] ?? '';
                $sub_cost['consultant_id'] = (int)$request->cost_roster_id[$costCount] ?? '';
                $sub_cost['notes'] = $request->cost_notes[$costCount] ?? '';
                $this->common_model->insert_to_table('coaching_sub_costs_tbl', $sub_cost);
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

        $data = $this->coaching_engagement_form_model->get_coachingList()[0];
        $companyList = $this->getCompanyList;
        $consultantFee = $this->getConsultantFee;       

        // Parent Information
        $parentInfoSelect = ['*'];
        $parentInfoWhere['id'] = $id;
        $parentData = $this->common_model->select_to_table('coaching_engagement_forms_tbl', $parentInfoSelect, $parentInfoWhere);

        if (count($parentData) <= 0) {
            return redirect()->route('forms/no_record');
        }

        $getClient = Client::orderBy('company_name')->where('id', $parentData[0]->client_id)->get();
        $cluster =  DB::table('clusters')->where('active',1)->get();
        $coreArea =  DB::table('core_areas')->where('active',1)->get();

        // Sub Information
        $subInfoSelect = ['*', 'intelligence as core_area'];
        $subInfoWhere['coaching_engagement_forms_id'] = $id;
        $subInfoList = $this->common_model->select_to_table('coaching_sub_informations_tbl', $subInfoSelect, $subInfoWhere);

        // Sub Cost
        $subCostData = DB::table('coaching_engagement_forms_tbl')
            ->join('coaching_sub_informations_tbl', 'coaching_engagement_forms_tbl.id', '=', 'coaching_sub_informations_tbl.coaching_engagement_forms_id')
            ->join('coaching_sub_costs_tbl', 'coaching_sub_informations_tbl.id', '=', 'coaching_sub_costs_tbl.coaching_sub_informations_id')
            ->select('coaching_sub_costs_tbl.*')
            ->where('coaching_sub_informations_tbl.coaching_engagement_forms_id',$id)
            ->get();

        return view('form.components.coaching_engagement.sub_form.modify_all_sessions',
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
                DB::table('coaching_sub_informations_tbl')->where('id',$subinfoData)->update($update);

                $subCostdataCount = 0;
                foreach($request->subcost_id[$dataCount] as $cost_ids => $cost_id) {     
                    $update_subCost = [];                             
                    $update_subCost['rooster'] = $request->cost_rooster[$dataCount][$subCostdataCount];  
                    if ($update_subCost['rooster'] != 'TBA') {
                        $update_subCost['consultant_id'] = $request->cost_rooster_id[$dataCount][$subCostdataCount];
                    }    
                    DB::table('coaching_sub_costs_tbl')->where('id',$cost_id)->update($update_subCost);
                    $subCostdataCount++;
                } 
                $dataCount++;
            }
            DB::commit();    
            return redirect()->back()->with('success', 'Updated successfully!');
        } catch(\Exception $e) { 
            DB::rollback();
            Toastr::error($e->getMessage());
            return redirect()->back();
            // echo '<pre>';
            // print_r($e->getMessage());
            // echo '</pre>';
        }
    }
}
