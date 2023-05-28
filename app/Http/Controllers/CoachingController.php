<?php

namespace App\Http\Controllers;

use App\Models\Coaching;
use Illuminate\Http\Request;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class CoachingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coachings = DB::table('coachings')->get();
        return view('form.components.coaching.index', compact('coachings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companyList = DB::table('clients')->get();
        return view('form.components.coaching.create', compact('companyList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'client' => 'required',
            'engagement_title' => 'required',
            'engagement_type' => 'required'
        ]);
        $coaching = new Coaching;
        if($request->input('tba') === 'yes'){
            $coaching->number_of_pax = 'To Be Announced';
            $coaching->date = 'To Be Announced';
            $coaching->time = 'To Be Announced';
        }
        else{
            $request->validate([
                'number_of_pax' => 'required',
                'date' => 'required',
                'time' => 'required'
            ]);
            $coaching->number_of_pax = $request->input('number_of_pax');
            $coaching->date = $request->input('date');
            $coaching->time = $request->input('time');
        }
        $coaching->status = $request->input('status');      
        $coaching->client = $request->input('client');      
        $coaching->engagement_title = $request->input('engagement_title');
        $coaching->engagement_type = $request->input('engagement_type');
        $coaching->cd_num_of_coaches = $request->input('cd_num_of_coaches');
        $coaching->cd_daily_fees = $request->input('cd_daily_fees');
        $coaching->cd_num_of_sessions = $request->input('cd_num_of_sessions');
        $coaching->cd_nswh = $request->input('cd_nswh');
        $coaching->cd_notes = $request->input('cd_notes');
        $coaching->ec_num_of_coaches = $request->input('ec_num_of_coaches');
        $coaching->ec_daily_fees = $request->input('ec_daily_fees');
        $coaching->ec_num_of_sessions = $request->input('ec_num_of_sessions');
        $coaching->ec_nswh = $request->input('ec_nswh');
        $coaching->ec_notes = $request->input('ec_notes');
        $coaching->pdc_num_of_coaches = $request->input('pdc_num_of_coaches');
        $coaching->pdc_daily_fees = $request->input('pdc_daily_fees');
        $coaching->pdc_num_of_sessions = $request->input('pdc_num_of_sessions');
        $coaching->pdc_nswh = $request->input('pdc_nswh');
        $coaching->pdc_notes = $request->input('pdc_notes');
        $coaching->gsc_num_of_coaches = $request->input('gsc_num_of_coaches');
        $coaching->gsc_daily_fees = $request->input('gsc_daily_fees');
        $coaching->gsc_num_of_sessions = $request->input('gsc_num_of_sessions');
        $coaching->gsc_nswh = $request->input('gsc_nswh');
        $coaching->gsc_notes = $request->input('gsc_notes');
        $coaching->waltc_num_of_coaches = $request->input('waltc_num_of_coaches');
        $coaching->waltc_daily_fees = $request->input('waltc_daily_fees');
        $coaching->waltc_num_of_sessions = $request->input('waltc_num_of_sessions');
        $coaching->waltc_nswh = $request->input('waltc_nswh');
        $coaching->dg_percentage = $request->input('dg_percentage');
        $coaching->dg_notes = $request->input('dg_notes');
        $coaching->engagement_fees_total = $request->input('engagement_fees_total');
        $coaching->s_session_fees = $request->input('s_session_fees');
        $coaching->s_roster = $request->input('s_roster');
        $coaching->r_session_fees = $request->input('r_session_fees');
        $coaching->r_roster = $request->input('r_roster');
        $coaching->em_session_fees = $request->input('em_session_fees');
        $coaching->em_roster = $request->input('em_roster');
        $coaching->subtotal_roster = $request->input('subtotal_roster');
        $coaching->engagement_cost_total = $request->input('engagement_cost_total');
        $coaching->total_package_roster = $request->input('total_package_roster');
        $coaching->pf_lcto = $request->input('pf_lcto');

        $coaching->save();
        Alert::success('Coaching added successfully','Success');
        return redirect('form/coaching');
    }

    public function editRecord($id)
    {
        $coachings = Coaching::where('id', $id)->get()->first();
        return view('form.components.coaching.edit', compact('coachings'));
    }

    public function confirmEdit(Request $request)
    {
        try {
            $request->validate([
                'status' => 'required',
                'engagement_title' => 'required',
                'engagement_type' => 'required'
            ]);
            $number_of_pax = null;
            $date = null;
            $time = null;
            if($request->input('tba') === 'yes'){
                $number_of_pax = 'To Be Announced';
                $date = 'To Be Announced';
                $time = 'To Be Announced';
            }
            else{
                $request->validate([
                    'number_of_pax' => 'required',
                    'date' => 'required',
                    'time' => 'required'
                ]);
                $number_of_pax = $request->input('number_of_pax');
                $date = $request->input('date');
                $time = $request->input('time');
            }
            $update = [
                'status' => $request->input('status'),      
                'engagement_title' => $request->input('engagement_title'),
                'engagement_type' => $request->input('engagement_type'),
                'number_of_pax' => $number_of_pax,
                'date' => $date,
                'time' => $time,
                'cd_num_of_coaches' => $request->input('cd_num_of_coaches'),
                'cd_daily_fees' => $request->input('cd_daily_fees'),
                'cd_num_of_sessions' => $request->input('cd_num_of_sessions'),
                'cd_nswh' => $request->input('cd_nswh'),
                'cd_notes' => $request->input('cd_notes'),
                'ec_num_of_coaches' => $request->input('ec_num_of_coaches'),
                'ec_daily_fees' => $request->input('ec_daily_fees'),
                'ec_num_of_sessions' => $request->input('ec_num_of_sessions'),
                'ec_nswh' => $request->input('ec_nswh'),
                'ec_notes' => $request->input('ec_notes'),
                'pdc_num_of_coaches' => $request->input('pdc_num_of_coaches'),
                'pdc_daily_fees' => $request->input('pdc_daily_fees'),
                'pdc_num_of_sessions' => $request->input('pdc_num_of_sessions'),
                'pdc_nswh' => $request->input('pdc_nswh'),
                'pdc_notes' => $request->input('pdc_notes'),
                'gsc_num_of_coaches' => $request->input('gsc_num_of_coaches'),
                'gsc_daily_fees' => $request->input('gsc_daily_fees'),
                'gsc_num_of_sessions' => $request->input('gsc_num_of_sessions'),
                'gsc_nswh' => $request->input('gsc_nswh'),
                'gsc_notes' => $request->input('gsc_notes'),
                'waltc_num_of_coaches' => $request->input('waltc_num_of_coaches'),
                'waltc_daily_fees' => $request->input('waltc_daily_fees'),
                'waltc_num_of_sessions' => $request->input('waltc_num_of_sessions'),
                'waltc_nswh' => $request->input('waltc_nswh'),
                'dg_percentage' => $request->input('dg_percentage'),
                'dg_notes' => $request->input('dg_notes'),
                'engagement_fees_total' => $request->input('engagement_fees_total'),
                's_session_fees' => $request->input('s_session_fees'),
                's_roster' => $request->input('s_roster'),
                'r_session_fees' => $request->input('r_session_fees'),
                'r_roster' => $request->input('r_roster'),
                'em_session_fees' => $request->input('em_session_fees'),
                'em_roster' => $request->input('em_roster'),
                'subtotal_roster' => $request->input('subtotal_roster'),
                'engagement_cost_total' => $request->input('engagement_cost_total'),
                'total_package_roster' => $request->input('total_package_roster'),
                'pf_lcto' => $request->input('pf_lcto')
            ];
            Coaching::where('id',$request->id)->update($update);
            Alert::success('Coaching updated successfully','Success');
            return redirect('form/coaching');
        }catch(\Exception $e){
            Alert::error('Data updated fail :)','Error');
            return redirect('form/coaching');
        }
    }

    public function deleteRecord($id)
    {
        Coaching::find($id)->delete();
        Alert::success('Data deleted successfully :)','Success');
        return redirect('form/coaching');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coaching  $coaching
     * @return \Illuminate\Http\Response
     */
    public function show(Coaching $coaching)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coaching  $coaching
     * @return \Illuminate\Http\Response
     */
    public function edit(Coaching $coaching)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coaching  $coaching
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coaching $coaching)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coaching  $coaching
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coaching $coaching)
    {
        //
    }
}
