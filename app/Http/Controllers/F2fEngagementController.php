<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\FTF_Engagement_model;
use App\Models\Common;
use App\Models\Client;
use DB;

class F2fEngagementController extends Controller
{

    protected $ftf_engagement_form;
    protected $common_model;
    public function __construct(){
        // Load Models
        $this->ftf_engagement_form_model = new FTF_Engagement_model();
        $this->common_model = new Common();

        $this->forFirstSession = ['Lead Consultant','Analyst','Designer'];

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
    }

    public function index() {

        $ftfList = $this->ftf_engagement_form_model->get_ftfList();
        $companyList = $this->getCompanyList;

        // Sub Info
        $subInfoSelect = ['id','ftf_engagement_forms_id','status','batch_number','session_number','venue','date','start_time','end_time','cluster','core_area','sub_fees_total'];
        $subInfoWhere['active'] = 1;
        $subInfoList = $this->common_model->select_to_table('ftf_sub_informations_tbl', $subInfoSelect, $subInfoWhere);

        return view('form.components.f2f_engagement.index', compact('ftfList', 'companyList', 'subInfoList'));
    }

    public function newRecord() {
        $companyList = $this->getCompanyList;
        $consultantFee = $this->getConsultantFee;
        $parentInfoList = [];
        $parentFeeList = [];
        $parentCostList = [];

        return view('form.f2f_engagement', compact('companyList','consultantFee','parentInfoList','parentFeeList','parentCostList'));
    }

    public function insert_ftf_engagement_record(Request $request) {

        $feeTypeCount = count($request->fee_type);
        $costTypeCount = count($request->cost_type);  
        
        DB::beginTransaction();
        try {

            $config = ['table'=>'ftf_engagement_forms_tbl', 'length'=>12, 'field'=>'ftf_eng_form_id', 'prefix'=>'FTF-'];
            $id_budget_form = IdGenerator::generate($config);

            $ftf_form['client_id'] = (int)$request->client_id;
            $ftf_form['ftf_eng_form_id'] = $id_budget_form;
            $ftf_form['status'] = $request->status;
            $ftf_form['customized_type'] = $request->customized_type;
            $ftf_form['ga_percent'] = $request->ga_percent;
            $ftf_form['engagement_title'] = $request->engagement_title;
            $ftf_form['pax_number'] = $request->pax_number;
            $ftf_form['batch_number'] = $request->batch_number;
            $ftf_form['session_number'] = $request->session_number;
            $ftf_form['venue'] = $request->program_venue;
            $ftf_form['program_start_time'] = $request->program_start_time;
            $ftf_form['program_end_time'] = $request->program_end_time;
            $ftf_form['cluster'] = $request->cluster;
            $ftf_form['core_area'] = $request->core_area;
            $ftf_form['Engagement_fees_total'] = $request->input_totalPackages;
            $ftf_form['less_contri_to_overhead'] = $request->lesscto_noc;
   
            $parentId = $this->common_model->insert_to_table('ftf_engagement_forms_tbl', $ftf_form);   
            
            $this->create_parent_fee_cost($request, $parentId, $feeTypeCount, $costTypeCount);
            $this->create_subfees($request, $parentId, $feeTypeCount, $costTypeCount); // Create Big Budget Data (Sub information, Sub Fee, Sub Cost)

            if ( $request->status == 'Completed') {
                $this->common_model->setClientFirstLast_Engagement((int)$request->client_id, 'FACE-TO-FACE', $parentId);
            }

            DB::commit();   
            return redirect()->route('form/f2f_engagement/index')->with('success', '<b>'.$request->engagement_title.'</b><br>Added Successfully!');         
            
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

    private function create_parent_fee_cost($request, $parentId, $feeTypeCount, $costTypeCount) {

        for ($feeCount = 0; $feeTypeCount > $feeCount; $feeCount++) { // Fee

            $tftf_fee_form['ftf_eng_form_id'] = $parentId;
            $tftf_fee_form['type'] = $request->fee_type[$feeCount];
            $tftf_fee_form['consultant_num'] = $request->fee_consultant_num[$feeCount];
            $tftf_fee_form['day_fee'] = $request->fee_day[$feeCount];
            $tftf_fee_form['day_num'] = $request->fee_day_num[$feeCount];
            $tftf_fee_form['atd'] = $request->fee_atd[$feeCount];
            $tftf_fee_form['nswh'] = $request->fee_nswh[$feeCount];
            $tftf_fee_form['nswh_percent'] = $request->nswh_percent[0];
            $tftf_fee_form['notes'] = $request->fee_note[$feeCount];

            $this->common_model->insert_to_table('ftf_engagement_fees_tbl', $tftf_fee_form);
        }
        
        for ($costCount = 0; $costTypeCount > $costCount; $costCount++) { // Cost

            $tftf_cost_form['ftf_eng_form_id'] = $parentId;
            $tftf_cost_form['type'] = $request->cost_type[$costCount];
            $tftf_cost_form['consultant_num'] = $request->cost_consultant_num[$costCount];
            $tftf_cost_form['day_fee'] = $request->cost_day_fee[$costCount] ?? '0';
            $tftf_cost_form['day_num'] = $request->cost_day_num[$costCount];
            $tftf_cost_form['atd'] = $request->cost_day_atd[$costCount];
            $tftf_cost_form['nswh'] = $request->cost_nswh[$costCount];
            $tftf_cost_form['rooster'] = $request->cost_roster[$costCount];
            $tftf_cost_form['consultant_id'] = $request->cost_roster_id[$costCount];
            $tftf_cost_form['notes'] = $request->cost_notes[$costCount];

            $this->common_model->insert_to_table('ftf_engagement_costs_tbl', $tftf_cost_form);
        }

        return;

    }
    
    private function create_subfees($request, $parentId, $feeTypeCount, $costTypeCount) {
        
        for ($batch_count = $request->start_batch_number; $batch_count < $request->batch_number+$request->start_batch_number; $batch_count++) {

            for ($session_count = 1; $session_count <= $request->session_number; $session_count++){
                
                $sub_information['ftf_engagement_forms_id']  = $parentId;
                $sub_information['status'] = $request->status;
                $sub_information['batch_number'] = $batch_count;
                $sub_information['session_number'] = $session_count;
                $sub_information['venue'] = $request->program_venue;
                $sub_information['start_time'] = $request->program_start_time;
                $sub_information['end_time'] = $request->program_end_time;
                $sub_information['cluster'] = $request->cluster;
                $sub_information['core_area'] = $request->core_area;
                $sub_information['sub_fees_total'] = (int)(str_replace(',', '', $request->input_totalPackages))/(int)($request->session_number*$request->batch_number);
                $subInfo_insertId = $this->common_model->insert_to_table('ftf_sub_informations_tbl', $sub_information);

                for ($feeSubCount = 0; $feeTypeCount > $feeSubCount; $feeSubCount++) { // Sub Fee

                    $subfee_consultantNo = 0;
                    $subfee_dayFee = 0;
                    $subfee_dayNo = 0;
                    $subfee_atd = 0;
                    $subfee_nswh = 0;
                    $subfee_nswhPercent = 0;
                    $subfee_notes = '';   

                    if ($request->fee_type[$feeSubCount] === 'Lead Consultant') {
                        if ($session_count == 1 && $batch_count == $request->start_batch_number) {
                            $subfee_consultantNo = $request->fee_consultant_num[$feeSubCount] ?? '0';
                            $subfee_dayFee = $request->fee_day[$feeSubCount];
                            $subfee_dayNo = $request->fee_day_num[$feeSubCount] ?? '0';                                    
                            $subfee_atd = $request->fee_atd[$feeSubCount] ?? '0';                                    
                            $subfee_nswh = $request->fee_nswh[$feeSubCount] ?? '0';
                            $subfee_nswhPercent = $request->nswh_percent[0] ?? '0';
                            $subfee_notes = $request->fee_note[$feeSubCount];
                        }
                    } else if($request->fee_type[$feeSubCount] === 'Analyst') {
                        if ($session_count == 1 && $batch_count == $request->start_batch_number) {
                            $subfee_consultantNo = $request->fee_consultant_num[$feeSubCount] ?? '0';
                            $subfee_dayFee = $request->fee_day[$feeSubCount];
                            $subfee_dayNo = $request->fee_day_num[$feeSubCount] ?? '0';                                    
                            $subfee_atd = $request->fee_atd[$feeSubCount] ?? '0';                                    
                            $subfee_nswh = $request->fee_nswh[$feeSubCount] ?? '0';
                            $subfee_nswhPercent = $request->nswh_percent[0] ?? '0';
                            $subfee_notes = $request->fee_note[$feeSubCount];
                        }
                    } else if($request->fee_type[$feeSubCount] === 'Designer') {
                        if ($session_count == 1 && $batch_count == $request->start_batch_number) {
                            $subfee_consultantNo = $request->fee_consultant_num[$feeSubCount] ?? '0';
                            $subfee_dayFee = $request->fee_day[$feeSubCount];
                            $subfee_dayNo = $request->fee_day_num[$feeSubCount] ?? '0';                                    
                            $subfee_atd = $request->fee_atd[$feeSubCount] ?? '0';                                    
                            $subfee_nswh = $request->fee_nswh[$feeSubCount] ?? '0';
                            $subfee_nswhPercent = $request->nswh_percent[0] ?? '0';
                            $subfee_notes = $request->fee_note[$feeSubCount];
                        }
                    } else {
                        $subfee_consultantNo  = $request->fee_consultant_num[$feeSubCount] ?? '0';
                        $subfee_dayFee  = $request->fee_day[$feeSubCount];
                        $subfee_dayNo = ($request->fee_day_num[$feeSubCount] ?? '0')/($request->session_number*$request->batch_number);
                        $subfee_atd  = $request->fee_atd[$feeSubCount] ?? '0';
                        $subfee_nswh  = $request->fee_nswh[$feeSubCount] ?? '0';
                        $subfee_nswhPercent = $request->nswh_percent[0] ?? '0';
                        $subfee_notes  = $request->fee_note[$feeSubCount];
                    }       
                    
                    $sub_fees['ftf_sub_informations_id'] = $subInfo_insertId;
                    $sub_fees['type'] = $request->fee_type[$feeSubCount];
                    $sub_fees['consultant_num'] = $subfee_consultantNo;
                    $sub_fees['day_fee'] = $subfee_dayFee;
                    $sub_fees['day_num'] = $subfee_dayNo;                                    
                    $sub_fees['atd'] = $subfee_atd;                                    
                    $sub_fees['nswh'] = $subfee_nswh;
                    $sub_fees['nswh_percent'] = $subfee_nswhPercent;
                    $sub_fees['notes'] = $subfee_notes;

                    $subFee_insertId = $this->common_model->insert_to_table('ftf_sub_fees_tbl', $sub_fees);
                } // End Sub Fee insert

                $session_count_lead = 1;
                $session_count_analyst = 1;
                $session_count_designer = 1;

                for ($costCount = 0; $costTypeCount > $costCount; $costCount++) { // Sub Cost

                    $subCost_consultant_num = 0;
                    $subCost_day_fee = 0;
                    $subCost_day_num = 0;
                    $subCost_atd = 0;
                    $subCost_nswh = 0;
                    $subCost_rooster = '';
                    $subCost_consultant_id = 0;
                    $subCost_notes = '';

                    if (in_array($request->cost_type[$costCount], $this->forFirstSession) && $session_count == 1 && $batch_count == $request->start_batch_number) {

                        $subCost_consultant_num = $request->cost_consultant_num[$costCount] ?? '0';
                        $subCost_day_fee = $request->cost_day_fee[$costCount] ?? '0';
                        $subCost_day_num = $request->cost_day_num[$costCount];
                        $subCost_atd = $request->cost_day_atd[$costCount] ?? '0';
                        $subCost_nswh = $request->cost_nswh[$costCount] ?? '0';
                        $subCost_rooster = $request->cost_roster[$costCount] ?? '';
                        $subCost_consultant_id = (int)$request->cost_roster_id[$costCount] ?? '';
                        $subCost_notes = $request->cost_notes[$costCount] ?? '';

                        if ($request->cost_type[$costCount] == 'Lead Consultant' && $session_count_lead == 1 ) { 
                            $session_count_lead++;
                        }else if ( $request->cost_type[$costCount] == 'Analyst' && $session_count_analyst == 1 ) { 
                            $session_count_analyst++;
                        }else if ( $request->cost_type[$costCount] == 'Designer' && $session_count_designer == 1 ) { 
                            $session_count_designer++;
                        }

                    } else {
                        if ( !in_array($request->cost_type[$costCount], $this->forFirstSession) ) {
                            $subCost_consultant_num= $request->cost_consultant_num[$costCount];
                            $subCost_day_fee = $request->cost_day_fee[$costCount] ?? '0';
                            $subCost_day_num = ($request->cost_day_num[$costCount] ?? '0')/($request->session_number*$request->batch_number);
                            $subCost_atd = $request->cost_day_atd[$costCount] ?? '0';
                            $subCost_nswh = $request->cost_nswh[$costCount] ?? '0';
                            $subCost_rooster = $request->cost_roster[$costCount] ?? '';
                            $subCost_consultant_id = (int)$request->cost_roster_id[$costCount] ?? '';
                            $subCost_notes = $request->cost_notes[$costCount] ?? '';
                        }
                    }

                    $sub_cost['ftf_sub_informations_id']  = $subInfo_insertId;
                    $sub_cost['type'] = $request->cost_type[$costCount];
                    $sub_cost['consultant_num']= $subCost_consultant_num;
                    $sub_cost['day_fee'] = $subCost_day_fee ?? '0';
                    $sub_cost['day_num'] = $subCost_day_num;
                    $sub_cost['atd'] = $subCost_atd;
                    $sub_cost['nswh'] = $subCost_nswh;
                    $sub_cost['rooster'] = $subCost_rooster;
                    $sub_cost['consultant_id'] = $subCost_consultant_id;
                    $sub_cost['notes'] = $subCost_notes;

                    $subFee_insertId = $this->common_model->insert_to_table('ftf_sub_costs_tbl', $sub_cost);
                }   

            } // Second `for` loop end
        } // First `for` loop end
        
        return;
    }

    public function delete_ftf_engagement_record(Request $request) {

        DB::beginTransaction();
        try {
            $customize_name = $request->engagement_title;
            // Get Sub Info
            $subInfoSelect = ['*'];
            $subInfoWhere = ['ftf_engagement_forms_id' => $request->ftf_eng_form_id];
            $subInfoList = $this->common_model->select_to_table('ftf_sub_informations_tbl', $subInfoSelect, $subInfoWhere);

            foreach ($subInfoList as $key => $subInfoData) {
                $subcost_whereArr = ['ftf_sub_informations_id' => $subInfoData->id]; // Delete SubCost
                $this->common_model->delete_to_table('ftf_sub_costs_tbl', $subcost_whereArr);

                $subfee_whereArr = ['ftf_sub_informations_id' => $subInfoData->id]; // Delete SubFee
                $this->common_model->delete_to_table('ftf_sub_fees_tbl', $subfee_whereArr);
            }

            $subInfo_whereArr = ['ftf_engagement_forms_id' => $request->ftf_eng_form_id]; // Delete SubInfo
            $this->common_model->delete_to_table('ftf_sub_informations_tbl', $subInfo_whereArr);

            $cost_whereArr = ['ftf_eng_form_id' => $request->ftf_eng_form_id]; // Delete Cost
            $this->common_model->delete_to_table('ftf_engagement_costs_tbl', $cost_whereArr);

            $fee_whereArr = ['ftf_eng_form_id' => $request->ftf_eng_form_id]; // Delete Fee
            $this->common_model->delete_to_table('ftf_engagement_fees_tbl', $fee_whereArr);

            $ftfInfo_whereArr = ['id' => $request->ftf_eng_form_id]; // Delete info
            $this->common_model->delete_to_table('ftf_engagement_forms_tbl', $ftfInfo_whereArr);             
            
            DB::commit(); 
            return redirect()->back()->with('success', '<b>'.$customize_name.'</b><br>Deleted successfully');
        } catch(\Exception $e) {
            DB::rollback();
            Alert::error('Face-to-Face Engagement deleted fail: ' . $e->getMessage(),'Error');
            return redirect()->back();
        }
    }

    public function update_ftf_engagement_record($id) {
        
        $data = $this->ftf_engagement_form_model->get_ftfList()[0];
        $companyList = $this->getCompanyList;
        $consultantFee = $this->getConsultantFee;

        // Parent Information
        $parentInfoSelect = ['*'];
        $parentInfoWhere['id'] = $id;
        // $parentInfoList = $this->common_model->select_to_table('ftf_engagement_forms_tbl', $parentInfoSelect, $parentInfoWhere)[0];
        $parentInfoList = $this->common_model->select_to_table('ftf_engagement_forms_tbl', $parentInfoSelect, $parentInfoWhere);

        if (count($parentInfoList) <= 0) {
            return redirect()->route('forms/no_record');
        }

        $parentInfoList = $parentInfoList[0];

        // Parent Fee
        $parentFeeSelect = ['*'];
        $parentFeeWhere['ftf_eng_form_id'] = $id;
        $parentFeeList = $this->common_model->select_to_table('ftf_engagement_fees_tbl', $parentFeeSelect, $parentFeeWhere);

        // Parent Cost
        $parentCostSelect = ['*'];
        $parentCostWhere['ftf_eng_form_id'] = $id;
        $parentCostList = $this->common_model->select_to_table('ftf_engagement_costs_tbl', $parentCostSelect, $parentCostWhere);

        return view('form.f2f_engagement', compact('companyList','consultantFee','parentInfoList','parentFeeList','parentCostList', 'data'));

    }

    public function save_update_ftf_engagement_record(Request $request) {

        $parent_id = $request->engagement_form_id;
        $feeTypeCount = count($request->fee_type);
        $costTypeCount = count($request->cost_type);    

        DB::beginTransaction();
        try { 
            $subInfoSelect = ['id', 'batch_number'];
            $subInfoWhere['ftf_engagement_forms_id'] = $parent_id;
            $getSubinfo = $this->common_model->select_to_table('ftf_sub_informations_tbl', $subInfoSelect, $subInfoWhere);
            
            $request->start_batch_number = $getSubinfo[0]->batch_number; // Get Start Batch Number

            // Delete Sub Record
            foreach($getSubinfo as $subInfoData) {
                $subFee_whereArr = ['ftf_sub_informations_id' => $subInfoData->id]; // Delete SubFee
                $this->common_model->delete_to_table('ftf_sub_fees_tbl', $subFee_whereArr);

                $subCost_whereArr = ['ftf_sub_informations_id' => $subInfoData->id]; // Delete SubCost
                $this->common_model->delete_to_table('ftf_sub_costs_tbl', $subCost_whereArr);
            }

            $subInfo_whereArr = ['ftf_engagement_forms_id' => $parent_id]; // Delete SubInformarion
            $this->common_model->delete_to_table('ftf_sub_informations_tbl', $subInfo_whereArr);
            // End Sub Record Deletion

            $parentCost_whereArr = ['ftf_eng_form_id' => $parent_id]; // Delete Parent Cost
            $this->common_model->delete_to_table('ftf_engagement_costs_tbl', $parentCost_whereArr);

            $parentFee_whereArr = ['ftf_eng_form_id' => $parent_id]; // Delete Parent Fee
            $this->common_model->delete_to_table('ftf_engagement_fees_tbl', $parentFee_whereArr);

            $ftf_form['client_id'] = (int)$request->client_id;
            $ftf_form['status'] = $request->status;
            $ftf_form['customized_type'] = $request->customized_type;
            $ftf_form['ga_percent'] = $request->ga_percent;
            $ftf_form['engagement_title'] = $request->engagement_title;
            $ftf_form['pax_number'] = $request->pax_number;
            $ftf_form['batch_number'] = $request->batch_number;
            $ftf_form['session_number'] = $request->session_number;
            $ftf_form['venue'] = $request->program_venue;
            $ftf_form['program_start_time'] = $request->program_start_time;
            $ftf_form['program_end_time'] = $request->program_end_time;
            $ftf_form['cluster'] = $request->cluster;
            $ftf_form['core_area'] = $request->core_area;
            $ftf_form['Engagement_fees_total'] = $request->input_totalPackages;
            $ftf_form['less_contri_to_overhead'] = $request->lesscto_noc;
            $ftf_form_where['id'] = $parent_id;  
            $this->common_model->update_to_table('ftf_engagement_forms_tbl', $ftf_form, $ftf_form_where);   

            $this->create_parent_fee_cost($request, $parent_id, $feeTypeCount, $costTypeCount);
            $this->create_subfees($request, $parent_id, $feeTypeCount, $costTypeCount); // Create Big Budget Data (Sub information, Sub Fee, Sub Cost)

            if ( $request->status == 'Completed') {
                $this->common_model->setClientFirstLast_Engagement((int)$request->client_id, 'FACE-TO-FACE', $parent_id);
            }

            DB::commit(); 
            return redirect()->back()->with('success', '<b>'.$request->engagement_title.'</b><br>Updated successfully');

        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error($e->getMessage());
            return redirect()->back();
        }

    }

    public function ftf_editSubForm($id) {

        $data = $this->ftf_engagement_form_model->get_ftfList()[0];
        $companyList = $this->getCompanyList;
        $consultantFee = $this->getConsultantFee;

        // Sub Information
        $subInfoSelect = ['*'];
        $subInfoWhere['id'] = $id;
        $subInfoList = $this->common_model->select_to_table('ftf_sub_informations_tbl', $subInfoSelect, $subInfoWhere);

        if (count($subInfoList) <= 0) {
            return redirect()->route('forms/no_record');
        }

        // Sub Fee
        $subFeeSelect = ['*'];
        $subFeeWhere['ftf_sub_informations_id'] = $id;
        $subFeeList = $this->common_model->select_to_table('ftf_sub_fees_tbl', $subFeeSelect, $subFeeWhere);

        // Sub Cost
        $subCostSelect = ['*'];
        $subCostWhere['ftf_sub_informations_id'] = $id;
        $subCostList = $this->common_model->select_to_table('ftf_sub_costs_tbl', $subCostSelect, $subCostWhere);

        // Parent Information
        $parentInfoSelect = ['*'];
        $parentInfoWhere['id'] = $subInfoList[0]->ftf_engagement_forms_id;
        $parentData = $this->common_model->select_to_table('ftf_engagement_forms_tbl', $parentInfoSelect, $parentInfoWhere);

        // Sub Info
        $subInfosSelect = ['*'];
        $subInfosWhere['active'] = 1;
        $subInfosWhere['ftf_engagement_forms_id'] = $parentData[0]->id;
        $subInfosList = $this->common_model->select_to_table('ftf_sub_informations_tbl', $subInfosSelect, $subInfosWhere);

        $getClient = Client::orderBy('company_name')->where('id', $parentData[0]->client_id)->get();

        return view('form.components.f2f_engagement.sub_form.ftf_sub_information',
        compact('companyList','consultantFee','subInfoList','subFeeList', 'subCostList', 'parentData', 'getClient', 'data', 'subInfosList'));

    }

    public function ftf_save_editSubForm(Request $request) {
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
            $sub_information['core_area'] = $request->core_area;
            $sub_information['sub_fees_total'] = $request->input_totalPackages;
            $sub_informationWhere['id'] = $subInfoId;
            $this->common_model->update_to_table('ftf_sub_informations_tbl', $sub_information, $sub_informationWhere);

            $subFee_whereArr = ['ftf_sub_informations_id' => $subInfoId]; // Delete SubFee
            $this->common_model->delete_to_table('ftf_sub_fees_tbl', $subFee_whereArr);

            for ($feeSubCount = 0; $feeTypeCount > $feeSubCount; $feeSubCount++) {
                $sub_fees['ftf_sub_informations_id'] = $subInfoId;
                $sub_fees['type'] = $request->fee_type[$feeSubCount];
                $sub_fees['consultant_num'] = $request->fee_consultant_num[$feeSubCount] ?? '0';
                $sub_fees['day_fee'] = $request->fee_day[$feeSubCount];
                $sub_fees['day_num'] = $request->fee_day_num[$feeSubCount];
                $sub_fees['atd'] = $request->fee_atd[$feeSubCount] ?? '0';
                $sub_fees['nswh'] = $request->fee_nswh[$feeSubCount] ?? '0';
                $sub_fees['nswh_percent'] = $request->nswh_percent[0] ?? '0';
                $sub_fees['notes'] = $request->fee_note[$feeSubCount];
                $this->common_model->insert_to_table('ftf_sub_fees_tbl', $sub_fees);
            }

            $subCost_whereArr = ['ftf_sub_informations_id' => $subInfoId]; // Delete SubCost
            $this->common_model->delete_to_table('ftf_sub_costs_tbl', $subCost_whereArr);

            for ($costCount = 0; $costTypeCount > $costCount; $costCount++) {
                $sub_cost['ftf_sub_informations_id']  = $subInfoId;
                $sub_cost['type'] = $request->cost_type[$costCount];
                $sub_cost['consultant_num']= $request->cost_consultant_num[$costCount];
                $sub_cost['day_fee'] = $request->cost_day_fee[$costCount] ?? '0';
                $sub_cost['day_num'] = $request->cost_day_num[$costCount] ?? '0';
                $sub_cost['atd'] = $request->cost_day_atd[$costCount] ?? '0';
                $sub_cost['nswh'] = $request->cost_nswh[$costCount] ?? '0';
                $sub_cost['rooster'] = $request->cost_roster[$costCount] ?? '';
                $sub_cost['consultant_id'] = (int)$request->cost_roster_id[$costCount] ?? '';
                $sub_cost['notes'] = $request->cost_notes[$costCount] ?? '';
                $this->common_model->insert_to_table('ftf_sub_costs_tbl', $sub_cost);
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

        $data = $this->ftf_engagement_form_model->get_ftfList()[0];
        $companyList = $this->getCompanyList;
        $consultantFee = $this->getConsultantFee;       

        // Parent Information
        $parentInfoSelect = ['*'];
        $parentInfoWhere['id'] = $id;
        $parentData = $this->common_model->select_to_table('ftf_engagement_forms_tbl', $parentInfoSelect, $parentInfoWhere);

        if (count($parentData) <= 0) {
            return redirect()->route('forms/no_record');
        }

        $getClient = Client::orderBy('company_name')->where('id', $parentData[0]->client_id)->get();
        $cluster =  DB::table('clusters')->where('active',1)->get();
        $coreArea =  DB::table('core_areas')->where('active',1)->get();

        // Sub Information
        $subInfoSelect = ['*'];
        $subInfoWhere['ftf_engagement_forms_id'] = $id;
        $subInfoList = $this->common_model->select_to_table('ftf_sub_informations_tbl', $subInfoSelect, $subInfoWhere);

        // Sub Cost
        $subCostData = DB::table('ftf_engagement_forms_tbl')
            ->join('ftf_sub_informations_tbl', 'ftf_engagement_forms_tbl.id', '=', 'ftf_sub_informations_tbl.ftf_engagement_forms_id')
            ->join('ftf_sub_costs_tbl', 'ftf_sub_informations_tbl.id', '=', 'ftf_sub_costs_tbl.ftf_sub_informations_id')
            ->select('ftf_sub_costs_tbl.*')
            ->where('ftf_sub_informations_tbl.ftf_engagement_forms_id',$id)
            ->get();

        return view('form.components.f2f_engagement.sub_form.modify_all_sessions',
        compact('companyList','consultantFee', 'parentData', 'getClient', 'subInfoList', 'subCostData', 'cluster', 'coreArea'));
    }

    public function save_modified_sessions(Request $request) {

        DB::beginTransaction();
        try {

            $dataCount = 0;
            $tbaConsultant = ['Sales','Referral','Engagement Manager','On-site PC','Analyst','Creators Fees','Action Learning Coach','Documentor','Per Diem','Off-Program fee'];

            foreach($request->subinfo_id as $subinfoData) {
                $update = [
                    'status'      => $request->status[$dataCount],
                    'venue'      => $request->venue[$dataCount],
                    'date'        => $request->date[$dataCount],
                    'start_time'  => $request->start_time[$dataCount],
                    'end_time'    => $request->end_time[$dataCount],
                    'cluster'     => $request->cluster[$dataCount],
                    'core_area'   => $request->core_area[$dataCount]
                ];
                DB::table('ftf_sub_informations_tbl')->where('id',$subinfoData)->update($update);

                $subCostdataCount = 0;
                foreach($request->subcost_id[$dataCount] as $cost_ids => $cost_id) {     
                    $update_subCost = [];                             
                    $update_subCost['rooster'] = $request->cost_rooster[$dataCount][$subCostdataCount];  
                    if ($update_subCost['rooster'] != 'TBA') {
                        $update_subCost['consultant_id'] = $request->cost_rooster_id[$dataCount][$subCostdataCount];
                    }    
                    if (!in_array($request->cost_type[$dataCount][$subCostdataCount], $tbaConsultant)) {
                        $update_subCost['day_fee'] = $request->cost_day_fee[$dataCount][$subCostdataCount];
                    }
                    if ($request->cost_type[$dataCount][$subCostdataCount] == 'Creators Fees') {
                        $update_subCost['day_fee'] = $request->cost_day_fee[$dataCount][$subCostdataCount];
                    }

                    DB::table('ftf_sub_costs_tbl')->where('id',$cost_id)->update($update_subCost);
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
        }
    }

}