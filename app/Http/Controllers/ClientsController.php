<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Customized_engagement_form;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\Common;
use DB;
use Auth;

class ClientsController extends Controller
{
    protected $common_model;
    public function __construct(){
        $this->common_model = new Common();

        // Query Consultant Fees
        $consultantSelect = ['id', 'first_name', 'last_name', 'lead_faci', 'co_lead', 'co_lead_f2f', 'co_faci', 'lead_consultant', 'consulting', 'designer', 'moderator', 'producer', 'marshal', 'mod_opt'];
        $consultantWhere['active'] = 1;
        $this->getConsultantFee = $this->common_model->select_to_table('consultantfees', $consultantSelect, $consultantWhere);
        
        // Query Consultant Fees
        $industrySelect = ['*'];
        $industryWhere['active'] = '1';
        $this->getIndustryList = $this->common_model->select_to_table('industry', $industrySelect, $industryWhere);

    }

    public function index() {
        $consultantFee = $this->getConsultantFee;
        $industryList = $this->getIndustryList;

        $data = DB::table('clients')->get();
        $data2 = Customized_engagement_form::with('client')->get();
        return view('form.clients',compact('data', 'data2', 'consultantFee', 'industryList'));
    }

    public function addNewClientSave(Request $request) {

        $request->validate([
            'company_name'      => 'required'
        ]);

        try {
            $company_name = $request->company_name;
            // $cstmzd_eng_form_id = $request->cstmzd_eng_form_id;
            $status = $request->status;
            $sales_person = $request->sales_person;
            $sales_person_id = $request->sales_person_id;
            $industry = $request->industry;
            $industry_id = $request->industry_id;
            $old_new = $request->old_new;
            $first_eng = $request->first_eng;
            $latest_eng = $request->latest_eng;

            $config = ['table'=>'clients', 'length'=>10, 'field'=>'cstmzd_eng_form_id', 'prefix'=>'CLNT-'];
            $idClnt = IdGenerator::generate($config);

            $clnt = new Client();
            $clnt -> company_name = $company_name;
            $clnt -> cstmzd_eng_form_id = $idClnt;
            $clnt -> status = $status;
            $clnt -> sales_person = $sales_person;
            $clnt -> consultant_id = $sales_person_id;
            $clnt -> industry = $industry;
            $clnt -> industry_id = $industry_id;
            $clnt -> old_new = $old_new;
            $clnt -> first_eng = $first_eng;
            $clnt -> latest_eng = $latest_eng;

            $clnt->save();

            // Toastr::success('Client successfully Added','success');
            Alert::success('<b>'.$company_name.'</b> <br> added successfully');
            return redirect()->route('clients');
            // change this to route web.php
        }catch(\Exception $e){

            Alert::error('Data added fail'.$e->getMessage(),'Error');
            return redirect()->route('clients');
        }
    }

    public function viewDetailClient($id) {
        $consultantFee = $this->getConsultantFee;
        $industryList = $this->getIndustryList;
        $dataClnt = DB::table('clients')->where('id',$id)->get();
        return view('form.components.clients_register.edit_modal',
        compact('dataClnt', 'consultantFee', 'industryList'));
    }

    // update
    public function updateClient(Request $request) {
        $request->validate([
            'company_name'          => 'required',
        ]);

        try {
            $company_name = $request->company_name;
            $cstmzd_eng_form_id = $request->cstmzd_eng_form_id;
            $status = $request->status;
            $sales_person = $request->sales_person;
            $industry = $request->industry;
            $old_new = $request->old_new;
            $first_eng = $request->first_eng;
            $latest_eng = $request->latest_eng;
            $industry_id = $request->industry_id;
            $sales_person_id = $request->sales_person_id;

        $update = [
            'company_name'      => $company_name,
            'cstmzd_eng_form_id'=> $cstmzd_eng_form_id,
            'status'            => $status,
            'sales_person'      => $sales_person,
            'industry'          => $industry,
            'old_new'           => $old_new,
            'first_eng'         => $first_eng,
            'latest_eng'        => $latest_eng,
            'consultant_id'   => $sales_person_id,
            'industry_id'       => $industry_id
        ];

        Client::where('id',$request->id)->update($update);
        Alert::success('<b>'.$company_name.'</b> <br>  updated successfully');
        return redirect()->route('clients');

        }catch(\Exception $e){
            // echo $e->getMessage();
            Alert::error('Data Failed to Updated','Error');
            return redirect()->route('clients');
        }
    }

    // view delete
    public function deleteClient($id) {
        $deleteClients = Client::find($id)->delete();
        // $deleteClients = Client::find($id);
        // $deleteClients->delete();
        Alert::success('Data deleted successfully');
        return redirect()->route('clients');
    }
}
