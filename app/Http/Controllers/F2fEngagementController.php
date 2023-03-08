<?php

namespace App\Http\Controllers;

use App\Models\F2f_information;
use App\Models\F2f_fees;
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
            $config = ['table'=>'f2f_informations', 'length'=>10, 'field'=>'f2f_id', 'prefix'=>'F2F-'];
            $id_budget_form = IdGenerator::generate($config);

            $f2f_information = new F2f_information();
            $f2f_information->f2f_id                = $id_budget_form;
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

            $f2f_id = DB::table('f2f_informations')->orderBy('f2f_id','DESC')->select('f2f_id')->first();
            $f2f_id = $f2f_id->f2f_id;
            // $client_id = DB::table('customized_engagement_forms')->orderBy('client_id','DESC')->select('client_id')->first();
            // $client_id = $client_id->client_id;
            // $ce_id = DB::table('customized_engagement_forms')->orderBy('id','DESC')->select('id')->first();
            // $ce_id = $ce_id->id;
            // $batch_number = DB::table('customized_engagement_forms')->orderBy('batch_number','DESC')->select('batch_number')->first();
            // $batch_number = $batch_number->batch_number;

            try
                {
                    foreach($request->fee_type as $key => $fee_typess){
                        $f2f_fees['fee_type']      = $fee_typess;
                        $f2f_fees['f2f_id']        = $f2f_id;
                        $f2f_fees['fee_noc']       = $request->fee_noc[$key] ?? '0';
                        $f2f_fees['fee_pd']        = $request->fee_pd[$key];
                        $f2f_fees['fee_nod']       = $request->fee_nod[$key] ?? '0';
                        $f2f_fees['fee_atd']       = $request->fee_atd[$key] ?? '0';
                        $f2f_fees['fee_nswh']      = $request->fee_nswh[$key] ?? '0';
                        // $f2f_fees['nswh_percent']  = $request->nswh_percent[$key];
                        $f2f_fees['fee_notes']     = $request->fee_notes[$key];

                        F2f_fees::create($f2f_fees);
                    }
                }
            catch(\Exception $e){
                DB::rollback();
                Toastr::error($e->getMessage(), 'Error');
            }

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
