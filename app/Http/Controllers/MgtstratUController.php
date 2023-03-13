<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Brian2694\Toastr\Toastr;

class MgtstratUController extends Controller
{
    public function index()
    {
        return view('form.components.mgtstratu_workshops.index');
    }

    public function newRecord()
    {
        return view('form.mgtstratu_workshops');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_id'   => 'required|integer',
            // 'engagement_title'   => 'required',
        ]);

        DB::beginTransaction();
        
        // try {
        //     $config =
        // } catch (\Throwable $th) {
        //     //throw $th;
        // }

        return view('form.mgtstratu_workshops');
    }
}
