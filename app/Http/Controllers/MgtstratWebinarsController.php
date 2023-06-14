<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use RealRashid\SweetAlert\Facades\Alert;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Client;
use App\Models\Webinar_information;
use App\Models\WebinarFee;
use App\Models\WebinarCost;

class MgtstratWebinarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $companyList = Client::orderBy('company_name')->get();
        $data = Webinar_information::with('client')->latest()->get();
        if (Auth::guest()){
            return redirect()->route('/');
        }
        $dataJoin1  = DB::table('webinar_informations')
            ->join('webinar_fees', 'webinar_informations.webinar_id', '=', 'webinar_fees.webinar_id')
            ->select('webinar_informations.*', 'webinar_fees.*')
            ->get();
        $dataJoin2  = DB::table('webinar_informations')
            ->join('webinar_costs', 'webinar_informations.webinar_id', '=', 'webinar_costs.webinar_id')
            ->select('webinar_informations.*', 'webinar_costs.*')
            ->get();
        return view('form.components.mgtstrat_webinars.index', compact('companyList','data','dataJoin1','dataJoin2'));

    }

    public function newRecord()
    {
        $companyList = Client::orderBy('company_name')->get();
        return view('form.components.mgtstrat_webinars.new_record.main', compact('companyList'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'client_id'   => 'required|integer',
            // 'engagement_title'   => 'required',
        ]);

        DB::beginTransaction();

        try {

            $config = ['table'=>'webinar_informations', 'length'=>12, 'field'=>'webinar_id', 'prefix'=>'WBNR-'];
            $id_budget_form = IdGenerator::generate($config);

            $webinar_form = new Webinar_information();
            $webinar_form->webinar_id             = $id_budget_form;
            $webinar_form->client_id             = (int)$request->client_id;
            $webinar_form->engagement_type        = $request->engagement_type;
            $webinar_form->engagement_title        = $request->engagement_title;
            $webinar_form->webinar_title          = $request->webinar_title;
            $webinar_form->cluster                 = $request->cluster;
            $webinar_form->intelligence            = $request->intelligence;
            $webinar_form->pax_number              = $request->pax_number;
            $webinar_form->program_date           = $request->program_date;
            $webinar_form->program_start_time      = $request->program_start_time;
            $webinar_form->program_end_time        = $request->program_end_time;
            
            // Check if the switch is toggled on or off
            if ($request->input('dcbeCheck')) {
                $webinar_form->program_date = null;
                $webinar_form->program_start_time = null;
                $webinar_form->program_end_time = null;
            } else {
                $webinar_form->program_date           = $request->program_date;
                $webinar_form->program_start_time      = $request->program_start_time;
                $webinar_form->program_end_time        = $request->program_end_time;
            }

            $webinar_form->webinar_fees_total   = $request->mg_input_totalPackages;
            $webinar_form->save();


            $webinar_id = DB::table('webinar_informations')->orderBy('webinar_id','DESC')->select('webinar_id')->first();
            // another variable accessing the first variable's table column webinar_id
            $webinar_id = $webinar_id->webinar_id;
            
            $client_id = DB::table('webinar_informations')->orderBy('client_id','DESC')->select('client_id')->first();
            // another variable accessing the first variable's table column client_id
            $client_id = $client_id->client_id;
            // webinar informations id, wi_id
            $wi_id = DB::table('webinar_informations')->orderBy('id','DESC')->select('id')->first();
            $wi_id = $wi_id->id;

            // FOR FEES
            try {
                foreach($request->fee_type as $key => $fee_type) {
                    $engagement_fee['type']                 = $fee_type;
                    $engagement_fee['webinar_id']           = $webinar_id;
                    $engagement_fee['client_id']            = $client_id;
                    $engagement_fee['package_fees']         = $request->fee_package_num[$key] ?? '0';
                    $engagement_fee['num_sessions']         = $request->fee_num_sessions[$key] ?? '0';
                    $engagement_fee['nswh']                 = $request->fee_nswh[$key] ?? '0';
                    $engagement_fee['notes']                = $request->fee_notes[$key];

                    WebinarFee::create($engagement_fee);
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
                    $engagement_cost['webinar_id']          = $webinar_id;
                    $engagement_cost['hour_fee']            = $request->cost_hour_fee[$key] ?? '0';
                    $engagement_cost['hour_num']            = $request->cost_hour_num[$key] ?? '0';
                    $engagement_cost['nswh']                = $request->cost_nswh[$key] ?? '0';
                    $engagement_cost['rooster']             = $request->cost_rooster[$key];

                    WebinarCost::create($engagement_cost);
                }
            } catch(\Exception $e) {
                DB::rollback();
                Toastr::error('cost'.$e->getMessage(), 'Error');
            }

            DB::commit();
            
            return redirect()->route('form/webinars/index')->with('success', 'Added Successfully!');
        
        } catch(\Exception $e){
            DB::rollback();
            Alert::error('Data added fail','Error');
            Toastr::error('test'.$e->getMessage(), 'Error');
            return redirect()->back();
        }
        
    }


    public function deleteRow(Request $request)
    {
        $id = $request->id;
        WebinarFee::where('id', $id)->delete();
        WebinarCostr::where('id', $id)->delete();
        // Sub_cost::where('id', $id)->delete();
    }

    /* Delete record */
    public function viewDelete(Request $request)
    {
        DB::beginTransaction();
        try {

        /* delete record table estimates */
        $engagement_fees = DB::table('webinar_fees')->where('webinar_id',$request->webinar_id)->get();
        foreach ($engagement_fees as $key => $id_engagement_fees) {
            DB::table('webinar_fees')->where('id', $id_engagement_fees->id)->delete();
        }
        $engagement_costs = DB::table('webinar_costs')->where('webinar_id',$request->webinar_id)->get();
        foreach ($engagement_costs as $key => $id_engagement_cost) {
            DB::table('webinar_costs')->where('id', $id_engagement_cost->id)->delete();
        }

        $webinar_name = $request->engagement_title;

        /* delete record table estimates */
        Webinar_information::destroy($request->id);

        DB::commit();
        // Alert::success('MgtStrat-U Workshop deleted successfully','Success');
        return redirect()->back()->with('success', '<b>'.$webinar_name.'</b><br>Deleted successfully');

        } catch(\Exception $e) {
            DB::rollback();
            Alert::error('MgtStrat-U Webinar deleted fail','Error');
            return redirect()->back();
        }
    }


}