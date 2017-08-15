<?php

namespace App\Http\Controllers;

use App\businesswriters;
use Illuminate\Http\Request;

class BusinessWritersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.businesswriters', ['businesswriters' => businesswriters::all()]);

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
        $new = new businesswriters();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.businesswriters'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\businesswriters  $businesswriters
     * @return \Illuminate\Http\Response
     */
    public function show(businesswriters $businesswriters)
    {
        $businesswriters = businesswriters::find($id);
        return view('services.businesswriters', ['businesswriters' => $businesswriters]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\businesswriters  $businesswriters
     * @return \Illuminate\Http\Response
     */
    public function edit(businesswriters $businesswriters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\businesswriters  $businesswriters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, businesswriters $businesswriters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\businesswriters  $businesswriters
     * @return \Illuminate\Http\Response
     */
    public function destroy(businesswriters $businesswriters)
    {
        //
    }
}
