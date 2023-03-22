<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Consultantfee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ConsultantFeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $consultantFee = DB::table('consultantfees')->latest()->get();
        // $consultantFee = ConsultantFee::all();
        // return view('form.components.consultant_fees.index',compact('consultantFee'));
        return view('form.components.consultant_fees.index');
    }

    public function fetchConsultantFees()
    {
        $data = Consultantfee::all();
        return response()->json([
            'data'=>$data,
        ]);
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
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:191',
            'last_name' => 'required|max:191',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }
        else
        {
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
            $consultantFee->save();
            return response()->json([
                'status' => 200,
                'message' => 'Consultant Fees Added Successfully'
            ]);
            Alert::success('Consultant Fees added successfully','Success');
            return redirect()->back()->with('status', 'Consultant Fees added successfully');
        }

        // $consultantFee = new Consultantfee;
        // $consultantFee->first_name = $request->input('first_name');
        // $consultantFee->last_name = $request->input('last_name');
        // $consultantFee->lead_faci = $request->input('lead_faci');
        // $consultantFee->co_lead = $request->input('co_lead');
        // $consultantFee->co_lead_f2f = $request->input('co_lead_f2f');
        // $consultantFee->co_faci = $request->input('co_faci');
        // $consultantFee->lead_consultant = $request->input('lead_consultant');
        // $consultantFee->consulting = $request->input('consulting');
        // $consultantFee->designer = $request->input('designer');
        // $consultantFee->moderator = $request->input('moderator');
        // $consultantFee->producer = $request->input('producer');
        // $consultantFee->save();
        // Alert::success('Consultant Fees added successfully','Success');
        // return redirect()->back()->with('status', 'Consultant Fees added successfully');
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
        $consultant_fees = Consultantfee::find($id);
        if($consultant_fees){
            return response()->json([
                'status'=>200,
                'consultant_fees'=>$consultant_fees,
            ]);
        }
        else {
            return respons()->json([
                'status'=>404,
                'message'=>'Consultant not found',
            ]);
        }
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
        $validator = Validator::make($request->all(), [
            'first_name'=> 'required|max:191',
            'last_name'=>'required|max:191',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }
        else
        {
            $consultant = Consultantfee::find($id);
            if($consultant)
            {
                $consultant->first_name = $request->input('first_name');
                $consultant->last_name = $request->input('last_name');
                $consultant->lead_faci = $request->input('lead_faci');
                $consultant->co_lead = $request->input('co_lead');
                $consultant->co_lead_f2f = $request->input('co_lead_f2f');
                $consultant->co_faci = $request->input('co_faci');
                $consultant->lead_consultant = $request->input('lead_consultant');
                $consultant->consulting = $request->input('consulting');
                $consultant->designer = $request->input('designer');
                $consultant->moderator = $request->input('moderator');
                $consultant->producer = $request->input('producer');
                $consultant->update();

                $name =  $request->input('first_name').' '.$request->input('last_name');
                return response()->json([
                    'status'=>200,
                    'message'=> $name.' Updated Successfully.'
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'No Student Found.'
                ]);
            }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consultant_fee = Consultantfee::find($id);
        if($consultant_fee)
        {
            $consultant_fee->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Consultant Fee Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Consultant Found.'
            ]);
        }
    }
}
