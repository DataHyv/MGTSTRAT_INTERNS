<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('users')->get();
        $BudgetForm = DB::table('customized_engagement_forms')->count();
        $users = DB::table('users')->count();
        $user_activity_logs = DB::table('user_activity_logs')->count();
        $activity_logs = DB::table('activity_logs')->count();
        return view('home',compact('BudgetForm','users','user_activity_logs','activity_logs','data'));
    }

    public function SalesReport()
    {
        // return view('SalesReport');
        return view('SalesReport_v2');
    }
}
