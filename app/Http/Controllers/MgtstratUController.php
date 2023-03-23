<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use RealRashid\SweetAlert\Facades\Alert;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Client;
use App\Models\Workshop_information;
use App\Models\WorkshopFee;
use App\Models\Workshop_cost;


class MgtstratUController extends Controller
{
    public function index(Request $request)
    {
        $companyList = Client::orderBy('company_name')->get();
        // $data = DB::table('workshop_informations')->where('client_id', $request->client)->count();
        $data = Workshop_information::with('client')->latest()->get();
        // if (Auth::guest()){
        //     return redirect()->route('/');
        // }
        $dataJoin1  = DB::table('workshop_informations')
            ->join('workshop_fees', 'workshop_informations.workshop_id', '=', 'workshop_fees.workshop_id')
            ->select('workshop_informations.*', 'workshop_fees.*')
            ->get();
        $dataJoin2  = DB::table('workshop_informations')
            ->join('workshop_costs', 'workshop_informations.workshop_id', '=', 'workshop_costs.workshop_id')
            ->select('workshop_informations.*', 'workshop_costs.*')
            ->get();
        return view('form.components.mgtstratu_workshops.index', compact('companyList', 'dataJoin1', 'dataJoin2', 'data'));
    }

    /* Save Record */
    public function store(Request $request)
    {
        $request->validate([
            'client_id'   => 'required|integer',
            // 'engagement_title'   => 'required',
        ]);

        DB::beginTransaction();

        try {

            $config = ['table'=>'workshop_informations', 'length'=>12, 'field'=>'workshop_id', 'prefix'=>'WRKSHP-'];
            $id_budget_form = IdGenerator::generate($config);

            $workshop_form = new Workshop_information();
            $workshop_form->workshop_id             = $id_budget_form;
            // $workshop_form->status                = $request->status;
            // $workshop_form->ga_percent            = $request->ga_percent;
            $workshop_form->client_id             = (int)$request->client_id;
            $workshop_form->engagement_title        = $request->engagement_title;
            $workshop_form->workshop_title          = $request->workshop_title;
            $workshop_form->cluster                 = $request->cluster;
            $workshop_form->intelligence            = $request->intelligence;
            $workshop_form->pax_number              = $request->pax_number;
            // $workshop_form->batch_number          = $request->batch_number;
            // $workshop_form->session_number        = $request->session_number;
            $workshop_form->program_dates           = $request->program_dates;
            $workshop_form->program_start_time      = $request->program_start_time;
            $workshop_form->program_end_time        = $request->program_end_time;
            // $workshop_form->core_area             = $request->core_area;

            $workshop_form->workshop_fees_total   = $request->mg_input_totalPackages;
            $workshop_form->save();


            $workshop_id = DB::table('workshop_informations')->orderBy('workshop_id','DESC')->select('workshop_id')->first();
            // another variable accessing the first variable's table column workshop_id
            $workshop_id = $workshop_id->workshop_id;
            
            $client_id = DB::table('workshop_informations')->orderBy('client_id','DESC')->select('client_id')->first();
            // another variable accessing the first variable's table column client_id
            $client_id = $client_id->client_id;
            // workshop informations id, wi_id
            $wi_id = DB::table('workshop_informations')->orderBy('id','DESC')->select('id')->first();
            $wi_id = $wi_id->id;

            // FOR FEES
            try {
                foreach($request->fee_type as $key => $fee_types) {
                    $engagement_fee['type']                 = $fee_types;
                    $engagement_fee['workshop_id']          = $workshop_id;
                    $engagement_fee['client_id']            = $client_id;
                    $engagement_fee['package_fees']         = $request->fee_package_num[$key] ?? '0';
                    $engagement_fee['num_sessions']         = $request->fee_num_sessions[$key] ?? '0';
                    $engagement_fee['nswh']                 = $request->fee_nswh[$key] ?? '0';
                    $engagement_fee['notes']                = $request->fee_notes[$key];

                    WorkshopFee::create($engagement_fee);
                }
            } catch(\Exception $e) {
                DB::rollback();
                Toastr::error('fee'.$e->getMessage(), 'Error');
            }

            // FOR COSTS
            try {
                foreach ($request->cost_type as $key => $cost_types){
                    $engagement_cost['type']                = $cost_types;
                    $engagement_cost['client_id']           = $client_id;
                    $engagement_cost['workshop_id']         = $workshop_id;
                    $engagement_cost['hour_fee']            = $request->cost_hour_fee[$key] ?? '0';
                    $engagement_cost['hour_num']            = $request->cost_hour_num[$key] ?? '0';
                    $engagement_cost['nswh']                = $request->cost_nswh[$key] ?? '0';
                    $engagement_cost['rooster']             = $request->cost_rooster[$key];

                    Workshop_cost::create($engagement_cost);
                }
            } catch(\Exception $e) {
                DB::rollback();
                Toastr::error('cost'.$e->getMessage(), 'Error');
            }

            DB::commit();
            
            return redirect()->route('form/mgtstratu_workshops/index')->with('success', 'Added Successfully!');
        
        } catch(\Exception $e){
            DB::rollback();
            Alert::error('Data added fail','Error');
            Toastr::error('test'.$e->getMessage(), 'Error');
            return redirect()->back();
        }
        
    }

    public function newRecord()
    {
        $companyList = Client::orderBy('company_name')->get();
        return view('form.mgtstratu_workshops', compact('companyList'));
    }
}