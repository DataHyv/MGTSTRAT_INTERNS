<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectPages extends Controller
{
    public function noRecordFound() {
        return view('redirect_pages.norecordfound');
    }
}
