<?php

namespace App\Http\Controllers;

use App\screenwriters;
use Illuminate\Http\Request;

class ScreenwritersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.screenwriters', ['screenwriters' => screenwriters::all()]);

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
        $new = new screenwriters();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.screenwriters'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\screenwriters  $screenwriters
     * @return \Illuminate\Http\Response
     */
    public function show(screenwriters $screenwriters)
    {
        $screenwriters = screenwriters::find($id);
        return view('services.screenwriters', ['screenwriters' => $screenwriters]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\screenwriters  $screenwriters
     * @return \Illuminate\Http\Response
     */
    public function edit(screenwriters $screenwriters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\screenwriters  $screenwriters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, screenwriters $screenwriters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\screenwriters  $screenwriters
     * @return \Illuminate\Http\Response
     */
    public function destroy(screenwriters $screenwriters)
    {
        //
    }
}
