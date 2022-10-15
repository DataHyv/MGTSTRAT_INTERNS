<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Client;
use App\Models\Customized_engagement_form;
use App\Models\Engagement_fee;
use App\Models\Engagement_cost;
use DB;

class CustomizedEngagementController extends Controller
{
    // Customized Engagement Form
    public function index(Request $request)
    {
        $companyList = Client::orderBy('company_name')->get();
        $data = DB::table('customized_engagement_forms')->where('client_id', $request->client)->count();
        return view('form.customized_engagement', compact('companyList', 'data'));
    }

    // view record
    public function viewRecord()
    {
        $data = Customized_engagement_form::with('client')->latest()->get();
        $dataJoin1  = DB::table('customized_engagement_forms')
            ->join('engagement_fees', 'customized_engagement_forms.cstmzd_eng_form_id', '=', 'engagement_fees.cstmzd_eng_form_id')
            ->select('customized_engagement_forms.*', 'engagement_fees.*')
            ->get();
        $dataJoin2  = DB::table('customized_engagement_forms')
            ->join('engagement_costs', 'customized_engagement_forms.cstmzd_eng_form_id', '=', 'engagement_costs.cstmzd_eng_form_id')
            ->select('customized_engagement_forms.*', 'engagement_costs.*')
            ->get();
        return view('view_record.ce_record.ce_view_record',compact('data', 'dataJoin1', 'dataJoin2'));
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

        /* delete record table estimates */
        Customized_engagement_form::destroy($request->id);

        DB::commit();
        Alert::success('Customized Engagement deleted successfully','Success');
        return redirect()->back();

        } catch(\Exception $e) {
            DB::rollback();
            Alert::error('Customized Engagement deleted fail','Error');
            return redirect()->back();
        }
    }

    /* Update Record */
    public function updateRecord($cstmzd_eng_form_id)
    {
        $data = DB::table('customized_engagement_forms')->where('cstmzd_eng_form_id',$cstmzd_eng_form_id)->first();
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

        $DateOfEngagements = Customized_engagement_form::findOrFail($data->id);
        $StartTime = Customized_engagement_form::findOrFail($data->id);
        $EndTime = Customized_engagement_form::findOrFail($data->id);
        $Cluster = Customized_engagement_form::findOrFail($data->id);
        $CoreArea = Customized_engagement_form::findOrFail($data->id);

        return view('form.ce_update',
        [
            'DateOfEngagements'=>$DateOfEngagements->program_dates,
            'StartTime'=>$StartTime->program_start_time,
            'EndTime'=>$EndTime->program_end_time,
            'Cluster'=>$Cluster->cluster,
            'CoreArea'=>$CoreArea->core_area,
        ],
            compact('data','dataJoin1','dataJoin2', 'data2'));
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
            $ce_form = new Customized_engagement_form();
            $ce_form->status                = $request->status;
            $ce_form->batch_number          = 'Batch ' . DB::table('customized_engagement_forms')->where('client_id', $request->client_id)->count()+1;
            $ce_form->customized_type       = $request->customized_type;
            $ce_form->ga_percent            = $request->ga_percent;
            $ce_form->client_id             = (int)$request->client_id;
            $ce_form->engagement_title      = $request->engagement_title;
            $ce_form->pax_number            = $request->pax_number;
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
                }
            catch(\Exception $e){
                DB::rollback();
                Toastr::error('fee'.$e->getMessage(), 'Error');
            }

            try
                {foreach ($request->cost_type as $key => $cost_types){
                    $engagement_cost['type']                = $cost_types;
                    $engagement_cost['client_id']  = $client_id;
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
            Alert::success('Data added successfully','Success');
            // return redirect()->back();
            return redirect()->route('form/customizedEngagement/detail');
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
                'batch_number'          => $request->batch_number,
                'ga_percent'            => $request->ga_percent,
                'client_id'             => $request->client_id,
                'engagement_title'      => $request->engagement_title,
                'pax_number'            => $request->pax_number,
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
            foreach ($request->cost_id as $key => $cost_types) {
                DB::table('engagement_costs')->where('id', $request->cost_id[$key])->delete();
            }

            /** insert new record */
            foreach($request->fee_type as $key => $fee_type)
            {
                // $engagement_fee['type']                 = $fee_types;
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

            foreach($request->cost_type as $key => $cost_type)
            {
                $engagement_cost['cstmzd_eng_form_id']  = $request->cstmzd_eng_form_id;
                $engagement_cost['type']                = $request->cost_type[$key];
                $engagement_cost['consultant_num']      = $request->cost_consultant_num[$key] ?? '0';
                $engagement_cost['hour_fee']            = $request->cost_hour_fee[$key];
                $engagement_cost['hour_num']            = $request->cost_hour_num[$key] ?? '0';
                $engagement_cost['nswh']                = $request->cost_nswh[$key] ?? '0';
                $engagement_cost['rooster']             = $request->cost_rooster[$key];
                $engagement_cost['notes']               = $request->cost_notes[$key];

                Engagement_cost::create($engagement_cost);
            }

            DB::commit();
            Toastr::success('Updated successfully','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            // Toastr::error('Update Estimates fail','Error');
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
    }
}

