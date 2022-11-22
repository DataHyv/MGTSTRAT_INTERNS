<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use DB;

class F2fEngagementController extends Controller
{
    public function index()
    {
        return view('form.components.f2f_engagement.index');
    }

    public function newRecord()
    {
        $companyList = DB::table('clients')->get();
        return view('form.f2f_engagement', compact('companyList'));
    }
}
