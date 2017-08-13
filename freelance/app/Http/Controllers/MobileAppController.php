<?php

namespace App\Http\Controllers;

use App\mobileapp;
use Illuminate\Http\Request;

class MobileAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.mobileapp', ['mobileapp' => mobileapp::all()]);

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
        $new = new mobileapp();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.mobileapp'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mobileapp  $mobileapp
     * @return \Illuminate\Http\Response
     */
    public function show(mobileapp $mobileapp)
    {
        $mobileapp = mobileapp::find($id);
        return view('services.mobileapp', ['mobileapp' => $mobileapp]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mobileapp  $mobileapp
     * @return \Illuminate\Http\Response
     */
    public function edit(mobileapp $mobileapp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mobileapp  $mobileapp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mobileapp $mobileapp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mobileapp  $mobileapp
     * @return \Illuminate\Http\Response
     */
    public function destroy(mobileapp $mobileapp)
    {
        //
    }
}
