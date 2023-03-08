<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Client;
use App\Models\Sub_fee;
use App\Models\Sub_cost;
use Illuminate\Http\Request;
use App\Models\Engagement_fee;
use App\Models\Engagement_cost;
use App\Models\Sub_information;
use Illuminate\Support\Facades\Log;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Customized_engagement_form;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Auth;

class CustomizedEngagementController extends Controller
{
    // Customized Engagement Form
    public function index(Request $request)
    {
        $companyList = Client::orderBy('company_name')->get();
        $data = DB::table('customized_engagement_forms')->where('client_id', $request->client)->count();
        if (Auth::guest()){
            return redirect()->route('/');
        }
        return view('form.components.customized_engagement.add.customized_engagement', compact('companyList', 'data'));
    }

    // view record
    public function viewRecord()
    {
        $data = Customized_engagement_form::with('client')->latest()->get();
        $data2 = Sub_information::with('Customized_engagement_form')->get();
        // $data2 = Sub_information::with('Customized_engagement_form')->latest('updated_at')->get();
        // $data2 = DB::table('sub_informations')->where('customized_engagement_form_id', $request->customized_engagement_forms)->count();
        $dataJoin1  = DB::table('customized_engagement_forms')
            ->join('engagement_fees', 'customized_engagement_forms.cstmzd_eng_form_id', '=', 'engagement_fees.cstmzd_eng_form_id')
            ->select('customized_engagement_forms.*', 'engagement_fees.*')
            ->get();
        $dataJoin2  = DB::table('customized_engagement_forms')
            ->join('engagement_costs', 'customized_engagement_forms.cstmzd_eng_form_id', '=', 'engagement_costs.cstmzd_eng_form_id')
            ->select('customized_engagement_forms.*', 'engagement_costs.*')
            ->get();
        return view('form.components.customized_engagement.ce_view_record',compact('data', 'dataJoin1', 'dataJoin2', 'data2'));
    }

    // view delete
    // public function viewDelete($id)
    // {
    //     $delete = Customized_engagement_form::find($id);
    //     $delete->delete();

    //     Alert::success('Data deleted successfully :)','Success');
    //     return redirect()->route('form/customizedEngagement/detail');
    // }

    /* Delete record */
    public function viewDelete(Request $request)
    {
        DB::beginTransaction();
        try {

        /* delete record table estimates */
        $engagement_fees = DB::table('engagement_fees')->where('cstmzd_eng_form_id',$request->cstmzd_eng_form_id)->get();
        foreach ($engagement_fees as $key => $id_engagement_fees) {
            DB::table('engagement_fees')->where('id', $id_engagement_fees->id)->delete();
        }
        $engagement_costs = DB::table('engagement_costs')->where('cstmzd_eng_form_id',$request->cstmzd_eng_form_id)->get();
        foreach ($engagement_costs as $key => $id_engagement_cost) {
            DB::table('engagement_costs')->where('id', $id_engagement_cost->id)->delete();
        }

        $customize_name = $request->engagement_title;

        /* delete record table estimates */
        Customized_engagement_form::destroy($request->id);

        DB::commit();
        // Alert::success('Customized Engagement deleted successfully','Success');
        return redirect()->back()->with('success', '<b>'.$customize_name.'</b><br>Deleted successfully');

        } catch(\Exception $e) {
            DB::rollback();
            Alert::error('Customized Engagement deleted fail','Error');
            return redirect()->back();
        }
    }

    /* Update Record */
    public function updateRecord($cstmzd_eng_form_id, $id)
    {
        // Sub_information::find($id)
        // $data = DB::table('customized_engagement_forms')
        // ->where('cstmzd_eng_form_id',$cstmzd_eng_form_id)
        // ->first();
        $data = DB::table('customized_engagement_forms')
        ->where('cstmzd_eng_form_id',$cstmzd_eng_form_id)
        ->first();
        // $data = Customized_engagement_form::with('client')->latest()->get();
        // $data2 = Customized_engagement_form::with('client')->where('cstmzd_eng_form_id',$cstmzd_eng_form_id)->first();
        $data2 = Client::orderBy('company_name')->get();
        $dataJoin1 = DB::table('customized_engagement_forms')
            ->join('engagement_fees', 'customized_engagement_forms.cstmzd_eng_form_id', '=', 'engagement_fees.cstmzd_eng_form_id')
            ->select('customized_engagement_forms.*', 'engagement_fees.*')
            ->where('engagement_fees.cstmzd_eng_form_id',$cstmzd_eng_form_id)
            ->get();
        $dataJoin2 = DB::table('customized_engagement_forms')
            ->join('engagement_costs', 'customized_engagement_forms.cstmzd_eng_form_id', '=', 'engagement_costs.cstmzd_eng_form_id')
            ->select('customized_engagement_forms.*', 'engagement_costs.*')
            ->where('engagement_costs.cstmzd_eng_form_id',$cstmzd_eng_form_id)
            ->get();
        $dataJoin3 = DB::table('customized_engagement_forms')
            ->join('sub_informations', 'customized_engagement_forms.id', '=', 'sub_informations.customized_engagement_forms_id')
            ->join('sub_fees', 'sub_informations.id', '=', 'sub_fees.sub_informations_id')
            ->select('customized_engagement_forms.*', 'sub_informations.*', 'sub_fees.*')
            ->where('sub_informations.customized_engagement_forms_id',$id)
            ->get();
        $dataJoin5 = DB::table('customized_engagement_forms')
            ->join('sub_informations', 'customized_engagement_forms.id', '=', 'sub_informations.customized_engagement_forms_id')
            ->join('sub_costs', 'sub_informations.id', '=', 'sub_costs.sub_informations_id')
            ->select('customized_engagement_forms.*', 'sub_informations.*', 'sub_costs.*')
            ->where('sub_informations.customized_engagement_forms_id',$id)
            ->get();

        $data3 = Sub_information::with('sub_informations')->where('sub_informations.customized_engagement_forms_id', $id)->get();

        $dataJoin4 = DB::table('sub_informations')
            ->join('sub_fees', 'sub_informations.id', '=', 'sub_fees.sub_informations_id')
            ->select('sub_informations.*', 'sub_fees.*')
            ->where('sub_fees.sub_informations_id',$id)
            ->get();

        // $DateOfEngagements = Customized_engagement_form::findOrFail($data->id);
        // $StartTime = Customized_engagement_form::findOrFail($data->id);
        // $EndTime = Customized_engagement_form::findOrFail($data->id);
        // $Cluster = Customized_engagement_form::findOrFail($data->id);
        // $CoreArea = Customized_engagement_form::findOrFail($data->id);

        return view('form.components.customized_engagement.update.ce_update',
        // [
        //     'DateOfEngagements'=>$DateOfEngagements->program_dates,
        //     'StartTime'=>$StartTime->program_start_time,
        //     'EndTime'=>$EndTime->program_end_time,
        //     'Cluster'=>$Cluster->cluster,
        //     'CoreArea'=>$CoreArea->core_area,
        // ],
            compact('data','dataJoin1','dataJoin2', 'data2', 'dataJoin3', 'dataJoin4', 'data3', 'dataJoin5'));
        // return view('form.budgetForm_update.ce_update',compact('data','dataJoin1','dataJoin2'));
    }

    /* Save Record */
    public function store(Request $request)
    {
        $request->validate([
            'client_id'   => 'required|integer',
            // 'engagement_title'   => 'required',
        ]);

        DB::beginTransaction();
        try{
            // $config = ['table'=>'customized_engagement_forms', 'length'=>12, 'field'=>'cstmzd_eng_form_id', 'prefix'=>'CSTMZD-'];
            $config = ['table'=>'customized_engagement_forms', 'length'=>12, 'field'=>'cstmzd_eng_form_id', 'prefix'=>'CSTMZD-'];
            $id_budget_form = IdGenerator::generate($config);

            $ce_form = new Customized_engagement_form();
            $ce_form->cstmzd_eng_form_id    = $id_budget_form;
            $ce_form->status                = $request->status;
            $ce_form->customized_type       = $request->customized_type;
            $ce_form->ga_percent            = $request->ga_percent;
            $ce_form->client_id             = (int)$request->client_id;
            $ce_form->engagement_title      = $request->engagement_title;
            $ce_form->pax_number            = $request->pax_number;
            $ce_form->batch_number          = $request->batch_number;
            $ce_form->session_number        = $request->session_number;
            $ce_form->program_dates         = $request->program_dates;
            $ce_form->program_start_time    = $request->program_start_time;
            $ce_form->program_end_time      = $request->program_end_time;
            $ce_form->cluster               = $request->cluster;
            $ce_form->core_area             = $request->core_area;
            $ce_form->Engagement_fees_total = $request->engagement_fees_total;
            $ce_form->save();

            $cstmzd_eng_form_id = DB::table('customized_engagement_forms')->orderBy('cstmzd_eng_form_id','DESC')->select('cstmzd_eng_form_id')->first();
            $cstmzd_eng_form_id = $cstmzd_eng_form_id->cstmzd_eng_form_id;
            $client_id = DB::table('customized_engagement_forms')->orderBy('client_id','DESC')->select('client_id')->first();
            $client_id = $client_id->client_id;
            $ce_id = DB::table('customized_engagement_forms')->orderBy('id','DESC')->select('id')->first();
            $ce_id = $ce_id->id;
            $batch_number = DB::table('customized_engagement_forms')->orderBy('batch_number','DESC')->select('batch_number')->first();
            $batch_number = $batch_number->batch_number;

            try
                {
                    foreach($request->fee_type as $key => $fee_types){
                        $engagement_fee['type']                 = $fee_types;
                        $engagement_fee['cstmzd_eng_form_id']   = $cstmzd_eng_form_id;
                        $engagement_fee['client_id']            = $client_id;
                        $engagement_fee['consultant_num']       = $request->fee_consultant_num[$key] ?? '0';
                        $engagement_fee['hour_fee']             = $request->fee_hour_fee[$key];
                        $engagement_fee['hour_num']             = $request->fee_hour_num[$key] ?? '0';
                        $engagement_fee['nswh']                 = $request->fee_nswh[$key] ?? '0';
                        $engagement_fee['nswh_percent']         = $request->nswh_percent[$key];
                        $engagement_fee['notes']                = $request->fee_notes[$key];

                        Engagement_fee::create($engagement_fee);
                    }

                    //insert loop for batch count
                    // for ($batch_count = 1; $batch_count <= $request->batch_number; $batch_count++) {
                    for ($batch_count = $request->start_batch_number; $batch_count < $request->batch_number+$request->start_batch_number; $batch_count++) {
                        //insert loop for session count
                        for ($session_count = 1; $session_count <= $request->session_number; $session_count++){
                            $sub_information = new Sub_information();
                            $sub_information['customized_engagement_forms_id']  = $ce_id;
                            $sub_information['status']                          = $request->status;
                            $sub_information['batch_number']                    = $batch_count;
                            $sub_information['session_number']                  = $session_count;
                            $sub_information['start_time']                      = $request->program_start_time;
                            $sub_information['end_time']                        = $request->program_end_time;
                            $sub_information['cluster']                         = $request->cluster;
                            $sub_information['core_area']                       = $request->core_area;
                            $sub_information['sub_fees_total']                  = (str_replace(',', '', $request->engagement_fees_total))/($request->session_number*$request->batch_number);
                            $sub_information->save();
                            $sub_informations_id = DB::table('sub_informations')->orderBy('id','DESC')->select('id')->first();
                            $sub_informations_id = $sub_informations_id->id;
                            // Sub_fee::create($sub_fee);

                            foreach($request->fee_type as $key => $fee_types){
                                $sub_fees['sub_informations_id']   = $sub_informations_id;
                                $sub_fees['type']                 = $fee_types;
                                $sub_fees['consultant_num']       = $request->fee_consultant_num[$key] ?? '0';
                                $sub_fees['hour_fee']             = $request->fee_hour_fee[$key];
                                $sub_fees['hour_num']             = ($request->fee_hour_num[$key] ?? '0') / ($request->session_number*$request->batch_number);
                                $sub_fees['nswh']                 = $request->fee_nswh[$key] ?? '0';
                                $sub_fees['nswh_percent']         = $request->nswh_percent[$key];
                                $sub_fees['notes']                = $request->fee_notes[$key];
                                // $sub_fees['sub_informations_id']   = $sub_informations_id;

                                // if ($request->fee_type[$key] === 'Night Shift, Weekends and Holidays'){
                                //     $sub_fees['type']                 = $request->fee_type[0];
                                //     $sub_fees['consultant_num']       = $request->fee_consultant_num[0] ?? '0';
                                //     $sub_fees['hour_fee']             = $request->fee_hour_fee[0];
                                //     $sub_fees['hour_num']             = $request->fee_hour_num[0] ?? '0';
                                //     $sub_fees['nswh']                 = $request->fee_nswh[0] ?? '0';
                                //     $sub_fees['nswh_percent']         = $request->nswh_percent[0] ?? '0';
                                //     $sub_fees['notes']                = $request->fee_notes[0];
                                // }
                                // else if ($request->fee_type[$key] === 'Lead Consultant') {
                                //     $sub_fees['type']                 = $request->fee_type[1];
                                //     $sub_fees['consultant_num']       = ($request->fee_consultant_num[1] ?? '0') / ($request->batch_number);
                                //     // $sub_fees['consultant_num']       = $request->fee_consultant_num[1] ?? '0';
                                //     $sub_fees['hour_fee']             = $request->fee_hour_fee[1];
                                //     $sub_fees['hour_num']             = ($request->fee_hour_num[1] ?? '0')/($request->session_number*$request->batch_number);
                                //     // $sub_fees['hour_num']             = $request->fee_hour_num[1] ?? '0';
                                //     $sub_fees['nswh']                 = $request->fee_nswh[1] ?? '0';
                                //     $sub_fees['nswh_percent']         = $request->nswh_percent[1] ?? '0';
                                //     $sub_fees['notes']                = $request->fee_notes[1];
                                // }
                                // else if($request->fee_type[$key] === 'Analyst') {
                                //     $sub_fees['type']                 = $request->fee_type[2];
                                //     $sub_fees['consultant_num']       = ($request->fee_consultant_num[2] ?? '0') / ($request->batch_number);
                                //     // $sub_fees['consultant_num']       = $request->fee_consultant_num[2] ?? '0';
                                //     $sub_fees['hour_fee']             = $request->fee_hour_fee[2];
                                //     $sub_fees['hour_num']             = ($request->fee_hour_num[2] ?? '0')/($request->session_number*$request->batch_number);
                                //     // $sub_fees['hour_num']             = $request->fee_hour_num[2] ?? '0';
                                //     $sub_fees['nswh']                 = $request->fee_nswh[2] ?? '0';
                                //     $sub_fees['nswh_percent']         = $request->nswh_percent[2] ?? '0';
                                //     $sub_fees['notes']                = $request->fee_notes[2];
                                // }
                                // else if($request->fee_type[$key] === 'Designer') {
                                //     $sub_fees['type']                 = $request->fee_type[3];
                                //     $sub_fees['consultant_num']       = ($request->fee_consultant_num[3] ?? '0') / ($request->batch_number);
                                //     // $sub_fees['consultant_num']       = $request->fee_consultant_num[3] ?? '0';
                                //     $sub_fees['hour_fee']             = $request->fee_hour_fee[3];
                                //     $sub_fees['hour_num']             = ($request->fee_hour_num[3] ?? '0')/($request->session_number*$request->batch_number);
                                //     // $sub_fees['hour_num']             = $request->fee_hour_num[3] ?? '0';
                                //     $sub_fees['nswh']                 = $request->fee_nswh[3] ?? '0';
                                //     $sub_fees['nswh_percent']         = $request->nswh_percent[3] ?? '0';
                                //     $sub_fees['notes']                = $request->fee_notes[3];
                                // }
                                // else if($request->fee_type[$key] === 'Lead Facilitator') {
                                //     $sub_fees['type']                 = $request->fee_type[4];
                                //     $sub_fees['consultant_num']       = ($request->fee_consultant_num[4] ?? '0') / ($request->batch_number);
                                //     // $sub_fees['consultant_num']       = $request->fee_consultant_num[4] ?? '0';
                                //     $sub_fees['hour_fee']             = $request->fee_hour_fee[4];
                                //     $sub_fees['hour_num']             = ($request->fee_hour_num[4] ?? '0')/($request->session_number*$request->batch_number);
                                //     // $sub_fees['hour_num']             = $request->fee_hour_num[4] ?? '0';
                                //     $sub_fees['nswh']                 = $request->fee_nswh[4] ?? '0';
                                //     $sub_fees['nswh_percent']         = $request->nswh_percent[4] ?? '0';
                                //     $sub_fees['notes']                = $request->fee_notes[4];
                                // }
                                // else if($request->fee_type[$key] === 'Co-facilitator / Resource Speaker') {
                                //     $sub_fees['type']                 = $request->fee_type[5];
                                //     $sub_fees['consultant_num']       = ($request->fee_consultant_num[5] ?? '0') / ($request->batch_number);
                                //     // $sub_fees['consultant_num']       = $request->fee_consultant_num[5] ?? '0';
                                //     $sub_fees['hour_fee']             = $request->fee_hour_fee[5];
                                //     $sub_fees['hour_num']             = ($request->fee_hour_num[5] ?? '0')/($request->session_number*$request->batch_number);
                                //     // $sub_fees['hour_num']             = $request->fee_hour_num[5] ?? '0';
                                //     $sub_fees['nswh']                 = $request->fee_nswh[5] ?? '0';
                                //     $sub_fees['nswh_percent']         = $request->nswh_percent[5] ?? '0';
                                //     $sub_fees['notes']                = $request->fee_notes[5];
                                // }
                                // else if($request->fee_type[$key] === 'Moderator') {
                                //     $sub_fees['type']                 = $request->fee_type[6];
                                //     $sub_fees['consultant_num']       = ($request->fee_consultant_num[6] ?? '0') / ($request->batch_number);
                                //     // $sub_fees['consultant_num']       = $request->fee_consultant_num[6] ?? '0';
                                //     $sub_fees['hour_fee']             = $request->fee_hour_fee[6];
                                //     $sub_fees['hour_num']             = ($request->fee_hour_num[6] ?? '0')/($request->session_number*$request->batch_number);
                                //     // $sub_fees['hour_num']             = $request->fee_hour_num[6] ?? '0';
                                //     $sub_fees['nswh']                 = $request->fee_nswh[6] ?? '0';
                                //     $sub_fees['nswh_percent']         = $request->nswh_percent[6] ?? '0';
                                //     $sub_fees['notes']                = $request->fee_notes[6];
                                // }
                                // else if($request->fee_type[$key] === 'Producer') {
                                //     $sub_fees['type']                 = $request->fee_type[7];
                                //     $sub_fees['consultant_num']       = ($request->fee_consultant_num[7] ?? '0') / ($request->batch_number);
                                //     // $sub_fees['consultant_num']       = $request->fee_consultant_num[7] ?? '0';
                                //     $sub_fees['hour_fee']             = $request->fee_hour_fee[7];
                                //     $sub_fees['hour_num']             = ($request->fee_hour_num[7] ?? '0')/($request->session_number*$request->batch_number);
                                //     // $sub_fees['hour_num']             = $request->fee_hour_num[7] ?? '0';
                                //     $sub_fees['nswh']                 = $request->fee_nswh[7] ?? '0';
                                //     $sub_fees['nswh_percent']         = $request->nswh_percent[7] ?? '0';
                                //     $sub_fees['notes']                = $request->fee_notes[7];
                                // }
                                // else if($request->fee_type[$key] === 'Documentor') {
                                //     $sub_fees['type']                 = $request->fee_type[8];
                                //     $sub_fees['consultant_num']       = ($request->fee_consultant_num[8] ?? '0') / ($request->batch_number);
                                //     // $sub_fees['consultant_num']       = $request->fee_consultant_num[8] ?? '0';
                                //     $sub_fees['hour_fee']             = $request->fee_hour_fee[8];
                                //     $sub_fees['hour_num']             = ($request->fee_hour_num[8] ?? '0')/($request->session_number*$request->batch_number);
                                //     // $sub_fees['hour_num']             = $request->fee_hour_num[8] ?? '0';
                                //     $sub_fees['nswh']                 = $request->fee_nswh[8] ?? '0';
                                //     $sub_fees['nswh_percent']         = $request->nswh_percent[8] ?? '0';
                                //     $sub_fees['notes']                = $request->fee_notes[8];
                                // }
                                // else if($request->fee_type[$key] === 'Discounts') {
                                //     $sub_fees['type']                 = $request->fee_type[9];
                                //     $sub_fees['consultant_num']       = $request->fee_consultant_num[9] ?? '0';
                                //     $sub_fees['hour_fee']             = $request->fee_hour_fee[9];
                                //     $sub_fees['hour_num']             = $request->fee_hour_num[9] ?? '0';
                                //     $sub_fees['nswh']                 = $request->fee_nswh[9] ?? '0';
                                //     $sub_fees['nswh_percent']         = $request->nswh_percent[9] ?? '0';
                                //     $sub_fees['notes']                = $request->fee_notes[9];
                                // }

                                Sub_fee::create($sub_fees);
                            }

                            if($session_count == 1){
                                $op_cost['type']                 = $request->op_type[0];
                                $op_cost['sub_informations_id']  = $sub_informations_id;
                                $op_cost['consultant_num']       = ($request->op_consultant_num[0] ?? '0') / ($request->batch_number);
                                $op_cost['hour_fee']             = $request->op_hour_fee[0] ?? '0';
                                $op_cost['hour_num']             = $request->op_hour_num[0] ?? '0';
                                $op_cost['nswh']                 = $request->op_nswh[0] ?? '0';
                                $op_cost['rooster']              = $request->op_rooster[0] ?? '';
                                $op_cost['notes']                = $request->op_notes[0] ?? '';

                                Sub_cost::create($op_cost);
                            }
                            else{
                                $op_cost['type']                 = $request->op_type[0];
                                $op_cost['sub_informations_id']  = $sub_informations_id;
                                $op_cost['consultant_num']       = 0;
                                $op_cost['hour_fee']             = 0;
                                $op_cost['hour_num']             = $request->op_hour_num[0] ?? '0';
                                $op_cost['nswh']                 = $request->op_nswh[0] ?? '0';
                                $op_cost['rooster']              = $request->op_rooster[0] ?? '';
                                $op_cost['notes']                = $request->op_notes[0] ?? '';

                                Sub_cost::create($op_cost);
                            }

                            foreach($request->cost_type as $key => $cost_types){
                                $sub_cost['type']                 = $cost_types;
                                $sub_cost['sub_informations_id']  = $sub_informations_id;
                                $sub_cost['consultant_num']       = $request->cost_consultant_num[$key] ?? '0';
                                $sub_cost['hour_fee']             = $request->cost_hour_fee[$key] ?? '0';
                                $sub_cost['hour_num']             = ($request->cost_hour_num[$key] ?? '0')/($request->session_number*$request->batch_number);
                                $sub_cost['nswh']                 = $request->cost_nswh[$key] ?? '0';
                                $sub_cost['rooster']              = $request->cost_rooster[$key] ?? '';
                                $sub_cost['notes']                = $request->cost_notes[$key] ?? '';
                                Sub_cost::create($sub_cost);
                            }
                            //END OF LOOP for session count
                        }


                        //END OF LOOP for batch count
                    }
                }
            catch(\Exception $e){
                DB::rollback();
                Toastr::error('fee'.$e->getMessage(), 'Error');
            }

            try
                {
                    foreach($request->op_type as $key => $op_types){
                        $op_cost['type']                 = $op_types;
                        $op_cost['client_id']           = $client_id;
                        $op_cost['cstmzd_eng_form_id']  = $cstmzd_eng_form_id;
                        $op_cost['consultant_num']       = $request->op_consultant_num[$key] ?? '0';
                        $op_cost['hour_fee']             = $request->op_hour_fee[$key] ?? '0';
                        $op_cost['hour_num']             = $request->op_hour_num[$key] ?? '0';
                        $op_cost['nswh']                 = $request->op_nswh[$key] ?? '0';
                        $op_cost['rooster']              = $request->op_rooster[$key] ?? '';
                        $op_cost['notes']                = $request->op_notes[$key] ?? '';

                        Engagement_cost::create($op_cost);
                    }
                    foreach ($request->cost_type as $key => $cost_types){
                        $engagement_cost['type']                = $cost_types;
                        $engagement_cost['client_id']           = $client_id;
                        $engagement_cost['cstmzd_eng_form_id']  = $cstmzd_eng_form_id;
                        $engagement_cost['consultant_num']      = $request->cost_consultant_num[$key] ?? '0';
                        $engagement_cost['hour_fee']            = $request->cost_hour_fee[$key];
                        $engagement_cost['hour_num']            = $request->cost_hour_num[$key] ?? '0';
                        $engagement_cost['nswh']                = $request->cost_nswh[$key] ?? '0';
                        $engagement_cost['rooster']             = $request->cost_rooster[$key];
                        $engagement_cost['notes']               = $request->cost_notes[$key];

                        Engagement_cost::create($engagement_cost);
                    }
                }
                catch(\Exception $e){
                    DB::rollback();
                    Toastr::error('cost'.$e->getMessage(), 'Error');
                }

            DB::commit();
            // info('This is some useful information.');
            return redirect()->route('form/customizedEngagement/detail')->with('success', '<b>'.$request->engagement_title.'</b><br>Added Successfully!');
        } catch(\Exception $e){
            DB::rollback();
            Alert::error('Data added fail','Error');
            Toastr::error('test'.$e->getMessage(), 'Error');
            return redirect()->back();
        }

        // return redirect('form/customizedEngagement/save');
    }

    /* update customized engagement record */
    public function ceUpdateRecord(Request $request)
    {
        $request->validate([
            'client_id'   => 'required|integer',
        ]);
        DB::beginTransaction();
        try {

            $update = [
                'id'                    => $request->id,
                'status'                => $request->status,
                'customized_type'       => $request->customized_type,
                'ga_percent'            => $request->ga_percent,
                'client_id'             => (int)$request->client_id,
                'engagement_title'      => $request->engagement_title,
                'pax_number'            => $request->pax_number,
                // 'batch_number'            => $request->batch_number,
                // 'session_number'            => $request->session_number,
                'program_dates'         => $request->program_dates,
                'program_start_time'    => $request->program_start_time,
                'program_end_time'      => $request->program_end_time,
                'cluster'               => $request->cluster,
                'core_area'             => $request->core_area,
                'Engagement_fees_total' => $request->engagement_fees_total,
            ];
            Customized_engagement_form::where('id',$request->id)->update($update);

            /** delete record */
            foreach ($request->ce_id as $key => $fee_types) {
                DB::table('engagement_fees')->where('id', $request->ce_id[$key])->delete();
            }
            foreach ($request->op_id as $key => $op_types) {
                DB::table('engagement_costs')->where('id', $request->op_id[$key])->delete();
            }
            foreach ($request->cost_id as $key => $cost_types) {
                DB::table('engagement_costs')->where('id', $request->cost_id[$key])->delete();
            }
            foreach ($request->sub_id as $key => $sub_fee) {
                DB::table('sub_fees')->where('id', $request->sub_id[$key])->delete();
            }
            // foreach ($request->sub_cost_id as $key => $sub_cost) {
            //     DB::table('sub_costs')->where('id', $request->sub_cost_id[$key])->delete();
            // }

            // $client_id = DB::table('customized_engagement_forms')->orderBy('client_id','DESC')->select('client_id')->first();
            // $client_id = $client_id->client_id;

            /** insert new record */
            foreach($request->fee_type as $key => $fee_type)
            {
                $engagement_fee['client_id']            = $request->client_id;
                $engagement_fee['cstmzd_eng_form_id']   = $request->cstmzd_eng_form_id;
                $engagement_fee['type']                 = $request->fee_type[$key];
                $engagement_fee['consultant_num']       = $request->fee_consultant_num[$key] ?? '0';
                $engagement_fee['hour_fee']             = $request->fee_hour_fee[$key];
                $engagement_fee['hour_num']             = $request->fee_hour_num[$key] ?? '0';
                $engagement_fee['nswh']                 = $request->fee_nswh[$key] ?? '0';
                $engagement_fee['nswh_percent']         = $request->nswh_percent[$key] ?? '0';
                $engagement_fee['notes']                = $request->fee_notes[$key];

                Engagement_fee::create($engagement_fee);
            }

            foreach($request->op_type as $key => $op_types){
                $op_cost['client_id']           = $request->client_id;
                $op_cost['cstmzd_eng_form_id']  = $request->cstmzd_eng_form_id;
                $op_cost['type']                = $request->op_type[$key];
                $op_cost['consultant_num']      = $request->op_consultant_num[$key] ?? 0;
                $op_cost['hour_fee']            = $request->op_hour_fee[$key];
                $op_cost['hour_num']            = $request->op_hour_num[$key] ?? 0;
                $op_cost['nswh']                = $request->op_nswh[$key] ?? 0;
                $op_cost['rooster']             = $request->op_rooster[$key];
                $op_cost['notes']               = $request->op_notes[$key];

                Engagement_cost::create($op_cost);
            }

            foreach($request->cost_type as $key => $cost_type)
            {
                $engagement_cost['client_id']           = $request->client_id;
                $engagement_cost['cstmzd_eng_form_id']  = $request->cstmzd_eng_form_id;
                $engagement_cost['type']                = $request->cost_type[$key];
                $engagement_cost['consultant_num']      = $request->cost_consultant_num[$key] ?? 0;
                $engagement_cost['hour_fee']            = $request->cost_hour_fee[$key];
                $engagement_cost['hour_num']            = $request->cost_hour_num[$key] ?? 0;
                $engagement_cost['nswh']                = $request->cost_nswh[$key] ?? 0;
                $engagement_cost['rooster']             = $request->cost_rooster[$key];
                $engagement_cost['notes']               = $request->cost_notes[$key];

                Engagement_cost::create($engagement_cost);
            }

            foreach($request->sub_information as $key => $fee_type)
            {
                $sub_information['start_time'] = $request->program_start_time;
                $sub_information['end_time'] = $request->program_end_time;
                $sub_information['cluster'] = $request->cluster;
                $sub_information['core_area'] = $request->core_area;
                $sub_information['sub_fees_total'] = (str_replace(',', '', $request->engagement_fees_total))/($request->session_number*$request->batch_number);

                Sub_information::where('id',$request->sub_information[$key])->update($sub_information);
            }

            foreach($request->sub_type as $key => $sub_fee){
                $sub_fees['sub_informations_id']  = $request->sub_information_id[$key];

                if ($request->sub_type[$key] === 'Night Shift, Weekends and Holidays'){
                    $sub_fees['type']                 = $request->fee_type[0];
                    $sub_fees['consultant_num']       = $request->fee_consultant_num[0] ?? '0';
                    $sub_fees['hour_fee']             = $request->fee_hour_fee[0];
                    $sub_fees['hour_num']             = $request->fee_hour_num[0] ?? '0';
                    $sub_fees['nswh']                 = $request->fee_nswh[0] ?? '0';
                    $sub_fees['nswh_percent']         = $request->nswh_percent[0] ?? '0';
                    $sub_fees['notes']                = $request->fee_notes[0];
                }
                else if ($request->sub_type[$key] === 'Lead Consultant') {
                    $sub_fees['type']                 = $request->fee_type[1];
                    $sub_fees['consultant_num']       = ($request->fee_consultant_num[1] ?? '0');
                    // $sub_fees['consultant_num']       = ($request->fee_consultant_num[1] ?? '0') / ($request->batch_number);
                    $sub_fees['hour_fee']             = $request->fee_hour_fee[1];
                    $sub_fees['hour_num']             = ($request->fee_hour_num[1] ?? '0') / ($request->session_number*$request->batch_number);
                    $sub_fees['nswh']                 = $request->fee_nswh[1] ?? '0';
                    $sub_fees['nswh_percent']         = $request->nswh_percent[1] ?? '0';
                    $sub_fees['notes']                = $request->fee_notes[1];
                }
                else if($request->sub_type[$key] === 'Analyst') {
                    $sub_fees['type']                 = $request->fee_type[2];
                    // $sub_fees['consultant_num']       = ($request->fee_consultant_num[2] ?? '0') / ($request->batch_number);
                    $sub_fees['consultant_num']       = $request->fee_consultant_num[2] ?? '0';
                    $sub_fees['hour_fee']             = $request->fee_hour_fee[2];
                    $sub_fees['hour_num']             = ($request->fee_hour_num[2] ?? '0')/($request->session_number*$request->batch_number);
                    // $sub_fees['hour_num']             = $request->fee_hour_num[2] ?? '0';
                    $sub_fees['nswh']                 = $request->fee_nswh[2] ?? '0';
                    $sub_fees['nswh_percent']         = $request->nswh_percent[2] ?? '0';
                    $sub_fees['notes']                = $request->fee_notes[2];
                }
                else if($request->sub_type[$key] === 'Designer') {
                    $sub_fees['type']                 = $request->fee_type[3];
                    // $sub_fees['consultant_num']       = ($request->fee_consultant_num[3] ?? '0') / ($request->batch_number);
                    $sub_fees['consultant_num']       = $request->fee_consultant_num[3] ?? '0';
                    $sub_fees['hour_fee']             = $request->fee_hour_fee[3];
                    $sub_fees['hour_num']             = ($request->fee_hour_num[3] ?? '0')/($request->session_number*$request->batch_number);
                    // $sub_fees['hour_num']             = $request->fee_hour_num[3] ?? '0';
                    $sub_fees['nswh']                 = $request->fee_nswh[3] ?? '0';
                    $sub_fees['nswh_percent']         = $request->nswh_percent[3] ?? '0';
                    $sub_fees['notes']                = $request->fee_notes[3];
                }
                else if($request->sub_type[$key] === 'Lead Facilitator') {
                    $sub_fees['type']                 = $request->fee_type[4];
                    // $sub_fees['consultant_num']       = ($request->fee_consultant_num[4] ?? '0') / ($request->batch_number);
                    $sub_fees['consultant_num']       = $request->fee_consultant_num[4] ?? '0';
                    $sub_fees['hour_fee']             = $request->fee_hour_fee[4];
                    $sub_fees['hour_num']             = ($request->fee_hour_num[4] ?? '0')/($request->session_number*$request->batch_number);
                    // $sub_fees['hour_num']             = $request->fee_hour_num[4] ?? '0';
                    $sub_fees['nswh']                 = $request->fee_nswh[4] ?? '0';
                    $sub_fees['nswh_percent']         = $request->nswh_percent[4] ?? '0';
                    $sub_fees['notes']                = $request->fee_notes[4];
                }
                else if($request->sub_type[$key] === 'Co-facilitator / Resource Speaker') {
                    $sub_fees['type']                 = $request->fee_type[5];
                    // $sub_fees['consultant_num']       = ($request->fee_consultant_num[5] ?? '0') / ($request->batch_number);
                    $sub_fees['consultant_num']       = $request->fee_consultant_num[5] ?? '0';
                    $sub_fees['hour_fee']             = $request->fee_hour_fee[5];
                    $sub_fees['hour_num']             = ($request->fee_hour_num[5] ?? '0')/($request->session_number*$request->batch_number);
                    // $sub_fees['hour_num']             = $request->fee_hour_num[5] ?? '0';
                    $sub_fees['nswh']                 = $request->fee_nswh[5] ?? '0';
                    $sub_fees['nswh_percent']         = $request->nswh_percent[5] ?? '0';
                    $sub_fees['notes']                = $request->fee_notes[5];
                }
                else if($request->sub_type[$key] === 'Moderator') {
                    $sub_fees['type']                 = $request->fee_type[6];
                    // $sub_fees['consultant_num']       = ($request->fee_consultant_num[6] ?? '0') / ($request->batch_number);
                    $sub_fees['consultant_num']       = $request->fee_consultant_num[6] ?? '0';
                    $sub_fees['hour_fee']             = $request->fee_hour_fee[6];
                    $sub_fees['hour_num']             = ($request->fee_hour_num[6] ?? '0')/($request->session_number*$request->batch_number);
                    // $sub_fees['hour_num']             = $request->fee_hour_num[6] ?? '0';
                    $sub_fees['nswh']                 = $request->fee_nswh[6] ?? '0';
                    $sub_fees['nswh_percent']         = $request->nswh_percent[6] ?? '0';
                    $sub_fees['notes']                = $request->fee_notes[6];
                }
                else if($request->sub_type[$key] === 'Producer') {
                    $sub_fees['type']                 = $request->fee_type[7];
                    // $sub_fees['consultant_num']       = ($request->fee_consultant_num[7] ?? '0') / ($request->batch_number);
                    $sub_fees['consultant_num']       = $request->fee_consultant_num[7] ?? '0';
                    $sub_fees['hour_fee']             = $request->fee_hour_fee[7];
                    $sub_fees['hour_num']             = ($request->fee_hour_num[7] ?? '0')/($request->session_number*$request->batch_number);
                    // $sub_fees['hour_num']             = $request->fee_hour_num[7] ?? '0';
                    $sub_fees['nswh']                 = $request->fee_nswh[7] ?? '0';
                    $sub_fees['nswh_percent']         = $request->nswh_percent[7] ?? '0';
                    $sub_fees['notes']                = $request->fee_notes[7];
                }
                else if($request->sub_type[$key] === 'Documentor') {
                    $sub_fees['type']                 = $request->fee_type[8];
                    // $sub_fees['consultant_num']       = ($request->fee_consultant_num[8] ?? '0') / ($request->batch_number);
                    $sub_fees['consultant_num']       = $request->fee_consultant_num[8] ?? '0';
                    $sub_fees['hour_fee']             = $request->fee_hour_fee[8];
                    $sub_fees['hour_num']             = ($request->fee_hour_num[8] ?? '0')/($request->session_number*$request->batch_number);
                    // $sub_fees['hour_num']             = $request->fee_hour_num[8] ?? '0';
                    $sub_fees['nswh']                 = $request->fee_nswh[8] ?? '0';
                    $sub_fees['nswh_percent']         = $request->nswh_percent[8] ?? '0';
                    $sub_fees['notes']                = $request->fee_notes[8];
                }
                else if($request->sub_type[$key] === 'Discounts') {
                    $sub_fees['type']                 = $request->fee_type[9];
                    $sub_fees['consultant_num']       = $request->fee_consultant_num[9] ?? '0';
                    $sub_fees['hour_fee']             = $request->fee_hour_fee[9];
                    $sub_fees['hour_num']             = $request->fee_hour_num[9] ?? '0';
                    $sub_fees['nswh']                 = $request->fee_nswh[9] ?? '0';
                    $sub_fees['nswh_percent']         = $request->nswh_percent[9] ?? '0';
                    $sub_fees['notes']                = $request->fee_notes[9];
                }

                Sub_fee::create($sub_fees);
            }


            $engagement_title = $request->engagement_title;

            DB::commit();
            // Toastr::success('Updated successfully','Success');
            // Alert::success('Updated successfully','Success');
            // alert()->success('Post Created', '<button type="button">Confirm</button>')->toHtml();
            // alert()->success('SuccessAlert','Updated successfully!')->showConfirmButton('Confirm', '#3085d6');
            // return redirect()->back()->with('alert', 'Updated!');;
            // return redirect()->back();
            return redirect()->route('form/customizedEngagement/detail')->with('success', '<b>'.$engagement_title.'</b><br>Updated successfully');;
        } catch(\Exception $e) {
            DB::rollback();
            // Toastr::error('Updated fail','Error');
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    /* Delete CE row data */
    public function deleteRow(Request $request)
    {
        $id = $request->id;
        Engagement_fee::where('id', $id)->delete();
        Engagement_cost::where('id', $id)->delete();
        Sub_cost::where('id', $id)->delete();
    }


    /********************************  SUB FEE ********************************/

    /* Sub fee form */
    public function formSubFee(){
        return view('form.components.customized_engagement.sub_fee.customized_engagement');
    }

    public function addBatch(){
        // $id = $request->id;
        // $batchId = Sub_information::where('id', $id)->get();

        $model = Sub_information::find(5);
        $model->id++;
        $model->batch_number++;
        $model->session_number = 1;
        $model->replicate()->save();
    }

    public function saveBatchRecord(Request $request){
        DB::beginTransaction();
        try {

            $update = [
                'id'                    => $request->id,
                'status'                => $request->status,
                'date'                  => $request->date,
                'start_time'            => $request->start_time,
                'end_time'              => $request->end_time,
                'cluster'               => $request->cluster,
                'core_area'             => $request->core_area,
            ];
            Sub_information::where('id',$request->id)->update($update);

            /** delete record */
            foreach ($request->cost_id as $key => $cost_types) {
                DB::table('sub_costs')->where('id', $request->cost_id[$key])->delete();
            }

            foreach($request->cost_type as $key => $cost_type)
            {
                // $sub_cost['client_id']            = $request->client_id;
                $sub_cost['sub_informations_id']  = $request->id;
                $sub_cost['type']                = $request->cost_type[$key];
                $sub_cost['consultant_num']      = $request->cost_consultant_num[$key] ?? '0';
                $sub_cost['hour_fee']            = $request->cost_hour_fee[$key] ?? '0';
                $sub_cost['hour_num']            = $request->cost_hour_num[$key] ?? '0';
                $sub_cost['nswh']                = $request->cost_nswh[$key] ?? '0';
                $sub_cost['rooster']             = $request->cost_rooster[$key];
                $sub_cost['notes']               = $request->cost_notes[$key];

                Sub_cost::create($sub_cost);
                // Sub_cost::where('id', $request->cost_id[$key])->update($sub_cost);
            }

            $mother_id = $request->mother_id;
            $batch_name = $request->batch_name;
            $session_number = $request->session_number;

            DB::commit();
            // Alert::success('Success', 'Updated successfully');
            // return redirect()->back()->with('alert', 'Updated successfully!');
            // return redirect()->back();
            return redirect()->route('form/customizedEngagement/detail')->with('success', '<b>Batch '.$batch_name.'- Session '.$session_number.'</b>'.'<br>Updated successfully!')->with(['mother_id'=>$mother_id]);
        } catch(\Exception $e) {
            DB::rollback();
            // Toastr::error('Updated fail','Error');
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

    public function editSubForm($id)
    {
        $data = Sub_information::find($id);
        $data2 = DB::table('sub_informations')
        ->join('sub_fees', 'sub_informations.id', '=', 'sub_fees.sub_informations_id')
        ->select('sub_informations.*', 'sub_fees.*')
        ->where('sub_fees.sub_informations_id',$id)
        ->get();
        $data3 = DB::table('sub_informations')
        ->join('sub_costs', 'sub_informations.id', '=', 'sub_costs.sub_informations_id')
        ->select('sub_informations.*', 'sub_costs.*')
        ->where('sub_costs.sub_informations_id',$id)
        ->get();
        $dataJoin1  = DB::table('customized_engagement_forms')
        ->join('engagement_fees', 'customized_engagement_forms.cstmzd_eng_form_id', '=', 'engagement_fees.cstmzd_eng_form_id')
        ->join('sub_informations', 'customized_engagement_forms.id', '=', 'sub_informations.customized_engagement_forms_id')
        ->select('customized_engagement_forms.*', 'engagement_fees.*', 'sub_informations.*')
        ->where('sub_informations.customized_engagement_forms_id',$id)
        ->get();

        return view('form.components.customized_engagement.sub_fee.customized_engagement',compact('data','data2','data3','dataJoin1'));
    }
}
