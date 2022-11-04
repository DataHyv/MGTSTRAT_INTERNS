<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
