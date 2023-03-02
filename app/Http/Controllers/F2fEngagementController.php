<?php

namespace App\Http\Controllers;

use App\Models\F2f_information;
use App\Models\Client;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Auth;
use DB;

class F2fEngagementController extends Controller
{
    public function index()
    {
        // $data = F2f_information::with('client')->latest()->get();
        // return response()->json([
        //     'f2f_records'=>$data,
        // ]);
        // return view('form.components.f2f_engagement.index', compact('data'));

        return view('form.components.f2f_engagement.index');
    }

    public function fetchRecord()
    {
        $data = F2f_information::with('client')->latest()->get();
        return response()->json([
            'data'=>$data,
        ]);
    }

    public function newRecord()
    {
        // $companyList = DB::table('clients')->get();
        $companyList = Client::orderBy('company_name')->get();
        return view('form.f2f_engagement', compact('companyList'));
    }

    /* Save Record */
    public function store(Request $request)
    {
        // $request->validate([
        //     'client_id'   => 'required|integer',
        // ]);

        DB::beginTransaction();
        try{
            $config = ['table'=>'f2f_informations', 'length'=>10, 'field'=>'cstmzd_eng_form_id', 'prefix'=>'F2F-'];
            $id_budget_form = IdGenerator::generate($config);

            $f2f_information = new F2f_information();
            $f2f_information->cstmzd_eng_form_id    = $id_budget_form;
            $f2f_information->status                = $request->status;
            $f2f_information->customized_type       = $request->customized_type;
            $f2f_information->ga_percent            = $request->ga_percent;
            $f2f_information->client_id             = (int)$request->client_id;
            $f2f_information->engagement_title      = $request->engagement_title;
            $f2f_information->pax_number            = $request->pax_number;
            $f2f_information->program_dates         = $request->program_dates;
            $f2f_information->program_start_time    = $request->program_start_time;
            $f2f_information->program_end_time      = $request->program_end_time;
            $f2f_information->cluster               = $request->cluster;
            $f2f_information->core_area             = $request->core_area;
            $f2f_information->save();

            // $cstmzd_eng_form_id = DB::table('customized_engagement_forms')->orderBy('cstmzd_eng_form_id','DESC')->select('cstmzd_eng_form_id')->first();
            // $cstmzd_eng_form_id = $cstmzd_eng_form_id->cstmzd_eng_form_id;
            // $client_id = DB::table('customized_engagement_forms')->orderBy('client_id','DESC')->select('client_id')->first();
            // $client_id = $client_id->client_id;
            // $ce_id = DB::table('customized_engagement_forms')->orderBy('id','DESC')->select('id')->first();
            // $ce_id = $ce_id->id;
            // $batch_number = DB::table('customized_engagement_forms')->orderBy('batch_number','DESC')->select('batch_number')->first();
            // $batch_number = $batch_number->batch_number;

            // try
            //     {
            //         foreach($request->fee_type as $key => $fee_types){
            //             $engagement_fee['type']                 = $fee_types;
            //             $engagement_fee['cstmzd_eng_form_id']   = $cstmzd_eng_form_id;
            //             $engagement_fee['client_id']            = $client_id;
            //             $engagement_fee['consultant_num']       = $request->fee_consultant_num[$key] ?? '0';
            //             $engagement_fee['hour_fee']             = $request->fee_hour_fee[$key];
            //             $engagement_fee['hour_num']             = $request->fee_hour_num[$key] ?? '0';
            //             $engagement_fee['nswh']                 = $request->fee_nswh[$key] ?? '0';
            //             $engagement_fee['nswh_percent']         = $request->nswh_percent[$key];
            //             $engagement_fee['notes']                = $request->fee_notes[$key];

            //             Engagement_fee::create($engagement_fee);
            //         }
            //     }
            // catch(\Exception $e){
            //     DB::rollback();
            //     Toastr::error('fee'.$e->getMessage(), 'Error');
            // }

            DB::commit();
            // info('This is some useful information.');
            return redirect()->route('form/f2f_engagement/index')->with('success', 'Added Successfully!');
        } catch(\Exception $e){
            DB::rollback();
            Alert::error('Data added fail','Error');
            Toastr::error($e->getMessage(), 'Error');
            return redirect()->back();
        }

        // return redirect('form/customizedEngagement/save');
    }
}
