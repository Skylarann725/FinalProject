<?php

namespace App\Http\Controllers;

use App\creativewriters;
use Illuminate\Http\Request;

class CreativeWritersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.creativewriters', ['creativewriters' => creativewriters::all()]);

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
        $new = new creativewriters();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.creativewriters'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\creativewriters  $creativewriters
     * @return \Illuminate\Http\Response
     */
    public function show(creativewriters $creativewriters)
    {
        $creativewriters = creativewriters::find($id);
        return view('services.creativewriters', ['creativewriters' => $creativewriters]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\creativewriters  $creativewriters
     * @return \Illuminate\Http\Response
     */
    public function edit(creativewriters $creativewriters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\creativewriters  $creativewriters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, creativewriters $creativewriters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\creativewriters  $creativewriters
     * @return \Illuminate\Http\Response
     */
    public function destroy(creativewriters $creativewriters)
    {
        //
    }
}
