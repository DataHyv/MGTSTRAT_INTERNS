<?php

namespace App\Http\Controllers;

use App\Models\MgtstratWebinars;
use Illuminate\Http\Request;

class MgtstratWebinarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.components.mgtstrat_webinars.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.components.mgtstrat_webinars.create');
        // return View::make('form.components.mgtstrat_webinars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MgtstratWebinars  $mgtstratWebinars
     * @return \Illuminate\Http\Response
     */
    public function show(MgtstratWebinars $mgtstratWebinars)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MgtstratWebinars  $mgtstratWebinars
     * @return \Illuminate\Http\Response
     */
    public function edit(MgtstratWebinars $mgtstratWebinars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MgtstratWebinars  $mgtstratWebinars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MgtstratWebinars $mgtstratWebinars)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MgtstratWebinars  $mgtstratWebinars
     * @return \Illuminate\Http\Response
     */
    public function destroy(MgtstratWebinars $mgtstratWebinars)
    {
        //
    }
}
