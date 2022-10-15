<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Customized_engagement_form;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;
use Auth;

class ClientsController extends Controller
{
    public function index()
    {

        $data = DB::table('clients')->get();
        $data2 = Customized_engagement_form::with('client')->get();
        return view('form.clients',compact('data', 'data2'));
        // dd($data2);

    }


    public function addViewClient()
    {

    }

     // save new user
     public function addNewClientSave(Request $request)
     {

        $request->validate([
            'company_name'      => 'required',
            // 'yr_mnth_sales'     => 'required',
            // 'old_id'     => 'required',
            // 'sales_pax'     => 'required',
            // 'client_class' => 'required',
            // 'industry'  => 'required',
            // 'old_new'  => 'required',
            // 'first_eng'  => 'required',
            // 'second_eng'  => 'required',
        ]);

        // $config = ['table'=>'clients', 'length'=>10, 'prefix'=>'CLNT-'];
        // $idClnt = IdGenerator::generate($config);
        try {
            $company_name = $request->company_name;
            // $cstmzd_eng_form_id = $request->cstmzd_eng_form_id;
            $status = $request->status;
            $sales_person = $request->sales_person;
            $industry = $request->industry;
            $old_new = $request->old_new;
            $first_eng = $request->first_eng;
            $latest_eng = $request->latest_eng;

            $config = ['table'=>'clients', 'length'=>10, 'field'=>'cstmzd_eng_form_id', 'prefix'=>'CLNT-'];
            $idClnt = IdGenerator::generate($config);
            // $id = IdGenerator::generate(['table' => 'products','field'=>'pid', 'length' => 6, 'prefix' =>date('P')]);

            $clnt = new Client();
            $clnt -> company_name = $company_name;
            $clnt -> cstmzd_eng_form_id = $idClnt;
            $clnt -> status = $status;
            $clnt -> sales_person = $sales_person;
            $clnt -> industry = $industry;
            $clnt -> old_new = $old_new;
            $clnt -> first_eng = $first_eng;
            $clnt -> latest_eng = $latest_eng;

            $clnt->save();

            Toastr::success('Client successfully Added','success');
            return redirect()->route('form/clients/new');
            // change this to route web.php
        }catch(\Exception $e){

            Alert::error('Data added fail'.$e->getMessage(),'Error');
            return redirect()->route('form/clients/new');
        }
    }

    public function viewDetailClient($id)
    {
        $dataClnt = DB::table('clients')->where('id',$id)->get();
        return view('form.components.clients_register.edit_modal',compact('dataClnt'));

        // if (Auth::user()->role_name=='Admin')
        // {
        //     $dataClnt = DB::table('customized_engagement_forms')->where('id',$id)->get();
        //     $roleName = DB::table('role_type_users')->get();
        //     $userStatus = DB::table('user_types')->get();
        //     return view('form.components.clients_register.edit_modal',compact('dataClnt'));
        // }
        // else
        // {
        //     return redirect()->route('home');
        // }
    }

    // update
    public function updateClient(Request $request)
    {
        // $dataClnt = DB::table('clients')->where('id',$id)->get();
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


        $update = [

            'company_name'      => $company_name,
            'cstmzd_eng_form_id'=> $cstmzd_eng_form_id,
            'status'            => $status,
            'sales_person'      => $sales_person,
            'industry'          => $industry,
            'old_new'           => $old_new,
            'first_eng'         => $first_eng,
            'latest_eng'        => $latest_eng,

        ];

        Client::where('id',$request->id)->update($update);
        Alert::success('Data updated successfully :)','Success');
        return redirect()->route('form/clients/new');
    }catch(\Exception $e){

        Alert::error('Data updated fail :)','Error');
        return redirect()->route('form/clients/new');
    }
    }

    // view delete
    public function deleteClient($id)
    {
        $deleteClients = Client::find($id)->delete();
        // $deleteClients = Client::find($id);
        // $deleteClients->delete();
        Alert::success('Data deleted successfully :)','Success');
        return redirect()->route('form/clients/new');
    }
}
