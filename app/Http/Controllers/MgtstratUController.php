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

    public function newRecord()
    {
        $companyList = Client::orderBy('company_name')->get();
        return view('form.mgtstratu_workshops', compact('companyList'));
    }

    /** Save Record */
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
                foreach($request->fee_type as $key => $fee_type) {
                    $engagement_fee['type']                 = $fee_type;
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
                foreach ($request->cost_type as $key => $cost_type){
                    $engagement_cost['type']                = $cost_type;
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
    
    /** Delete record */
    public function viewDelete(Request $request)
    {
        DB::beginTransaction();
        try {

        /* delete record table estimates */
        $engagement_fees = DB::table('workshop_fees')->where('workshop_id',$request->workshop_id)->get();
        foreach ($engagement_fees as $key => $id_engagement_fees) {
            DB::table('workshop_fees')->where('id', $id_engagement_fees->id)->delete();
        }
        $engagement_costs = DB::table('workshop_costs')->where('workshop_id',$request->workshop_id)->get();
        foreach ($engagement_costs as $key => $id_engagement_cost) {
            DB::table('workshop_costs')->where('id', $id_engagement_cost->id)->delete();
        }

        $workshop_name = $request->engagement_title;

        /* delete record table estimates */
        Workshop_information::destroy($request->id);

        DB::commit();
        // Alert::success('MgtStrat-U Workshop deleted successfully','Success');
        return redirect()->back()->with('success', '<b>'.$workshop_name.'</b><br>Deleted successfully');

        } catch(\Exception $e) {
            DB::rollback();
            Alert::error('MgtStrat-U Workshop deleted fail','Error');
            return redirect()->back();
        }
    }

    /** Update record */
    public function updateRecord($workshop_id, $id) {
        $data = DB::table('workshop_informations')
        ->where('workshop_id',$workshop_id)
        ->first();
        $data2 = Client::orderBy('company_name')->get();

        $dataJoin1 = DB::table('workshop_informations')
            ->join('workshop_fees', 'workshop_informations.workshop_id', '=', 'workshop_fees.workshop_id')
            ->select('workshop_informations.*', 'workshop_fees.*')
            ->where('workshop_fees.workshop_id',$workshop_id)
            ->get();
        $dataJoin2 = DB::table('workshop_informations')
            ->join('workshop_costs', 'workshop_informations.workshop_id', '=', 'workshop_costs.workshop_id')
            ->select('workshop_informations.*', 'workshop_costs.*')
            ->where('workshop_costs.workshop_id',$workshop_id)
            ->get();
        
        return view('form.components.mgtstratu_workshops.update.workshop_update_index', compact('data', 'data2', 'dataJoin1', 'dataJoin2'));
    }
    
    public function workshopUpdateRecord(Request $request)
    {
        $request->validate([
            'client_id'   => 'required|integer',
        ]);
        DB::beginTransaction();
        try {

            $update = [
                'id'                    => $request->id,
                'client_id'             => (int)$request->client_id,
                'engagement_title'      => $request->engagement_title,
                'workshop_title'        => $request->workshop_title,
                'cluster'               => $request->cluster,
                'intelligence'          => $request->intelligence,
                'pax_number'            => $request->pax_number,
                'program_dates'         => $request->program_dates,
                'program_start_time'    => $request->program_start_time,
                'program_end_time'      => $request->program_end_time,
                'workshop_fees_total'   => $request->workshop_fees_total,
            ];
            Workshop_information::where('id',$request->id)->update($update);

            /** delete record */
            foreach ($request->fee_id as $key => $fee_type) {
                DB::table('workshop_fees')->where('id', $request->fee_id[$key])->delete();
            }
            foreach ($request->cost_id as $key => $cost_type) {
                DB::table('workshop_costs')->where('id', $request->cost_id[$key])->delete();
            }

            /** 
             * insert new record
             */
            foreach($request->fee_type as $key => $fee_type)
            {
                $engagement_fee['client_id']            = $request->client_id;
                $engagement_fee['workshop_id']          = $request->workshop_id;
                $engagement_fee['type']                 = $request->fee_type[$key];
                $engagement_fee['package_fees']         = $request->fee_package_num[$key] ?? 0;
                $engagement_fee['num_sessions']         = $request->fee_num_sessions[$key] ?? 0; 
                $engagement_fee['nswh']                 = $request->fee_nswh[$key] ?? 0;
                $engagement_fee['notes']                = $request->fee_notes[$key];

                WorkshopFee::create($engagement_fee);
            }

            foreach($request->cost_type as $key => $cost_type)
            {
                $engagement_cost['client_id']           = $request->client_id;
                $engagement_cost['workshop_id']         = $request->workshop_id;
                $engagement_cost['type']                = $request->cost_type[$key];
                $engagement_cost['hour_fee']            = $request->cost_hour_fee[$key] ?? 0;
                $engagement_cost['hour_num']            = $request->cost_hour_num[$key] ?? 0;
                $engagement_cost['nswh']                = $request->cost_nswh[$key] ?? 0;
                $engagement_cost['rooster']             = $request->cost_rooster[$key];

                Workshop_cost::create($engagement_cost);
            }

            $engagement_title = $request->engagement_title;

            DB::commit();

            return redirect()->route('form/mgtstratu_workshops/index')->with('success', '<b>'.$engagement_title.'</b><br>Updated successfully');
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error($e->getMessage());
            return redirect()->back();
        }
    }

}