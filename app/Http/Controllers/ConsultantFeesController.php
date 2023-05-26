<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Consultantfee;
use Illuminate\Support\Facades\DB;

class ConsultantFeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultantFee = DB::table('consultantfees')->latest()->get();
        // $consultantFee = ConsultantFee::all();
        return view('form.components.consultant_fees.index',compact('consultantFee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'first_name'   => 'required',
            'last_name'   => 'required',
            'lead_faci'   => 'required',
            // 'engagement_title'   => 'required',
        ]);

        $consultantFee = new Consultantfee;
        $consultantFee->first_name = $request->input('first_name');
        $consultantFee->last_name = $request->input('last_name');
        $consultantFee->lead_faci = $request->input('lead_faci');
        $consultantFee->co_lead = $request->input('co_lead');
        $consultantFee->co_lead_f2f = $request->input('co_lead_f2f');
        $consultantFee->co_faci = $request->input('co_faci');
        $consultantFee->lead_consultant = $request->input('lead_consultant');
        $consultantFee->consulting = $request->input('consulting');
        $consultantFee->designer = $request->input('designer');
        $consultantFee->moderator = $request->input('moderator');
        $consultantFee->producer = $request->input('producer');
        $consultantFee->marshal = $request->input('marshal');
        $consultantFee->mod_opt = $request->input('mod_opt');
        $consultantFee->save();
        Alert::success('Consultant Fees added successfully','Success');
        // return redirect()->back()->with('status', 'Consultant Fees added successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateConsultantFees(Request $request)
    {
        $request->validate([
            'first_name'   => 'required',
            'last_name'   => 'required',
            'lead_faci'   => 'required',
            // 'engagement_title'   => 'required',
        ]);

        try {
            $first_name = $request->input('first_name');
            $last_name = $request->input('last_name');
            $lead_faci = $request->input('lead_faci');
            $co_lead = $request->input('co_lead');
            $co_lead_f2f = $request->input('co_lead_f2f');
            $co_faci = $request->input('co_faci');
            $lead_consultant = $request->input('lead_consultant');
            $consulting = $request->input('consulting');
            $designer = $request->input('designer');
            $moderator = $request->input('moderator');
            $producer = $request->input('producer');
            $marshal = $request->input('marshal');
            $mod_opt = $request->input('mod_opt_update');


            $update = [

                'first_name' => $first_name,
                'last_name' => $last_name,
                'lead_faci' => $lead_faci,
                'co_lead' => $co_lead,
                'co_lead_f2f' => $co_lead_f2f,
                'co_faci' => $co_faci,
                'lead_consultant' => $lead_consultant,
                'consulting' => $consulting,
                'designer' => $designer,
                'moderator' => $moderator,
                'producer' => $producer,
                'marshal' => $marshal,
                'mod_opt' => $mod_opt

            ];

            Consultantfee::where('id',$request->id)->update($update);
            Alert::success('Consultant Fees updated successfully','Success');
            return redirect()->back();
        }catch(\Exception $e){

            Alert::error('Data updated fail :)','Error');
            return redirect()->back();
        }
    }

    public function deleteConsultantFees($id)
    {
        $deleteClients = Consultantfee::find($id)->delete();
        Alert::success('Data deleted successfully :)','Success');
        return redirect()->back();
    }
}
