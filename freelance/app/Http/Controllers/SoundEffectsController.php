<?php

namespace App\Http\Controllers;

use App\soundeffects;
use Illuminate\Http\Request;

class SoundEffectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.soundeffects', ['soundeffects' => soundeffects::all()]);

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
        $new = new soundeffects();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.soundeffects'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\soundeffects  $soundeffects
     * @return \Illuminate\Http\Response
     */
    public function show(soundeffects $soundeffects)
    {
        $soundeffects = soundeffects::find($id);
        return view('services.soundeffects', ['soundeffects' => $soundeffects]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\soundeffects  $soundeffects
     * @return \Illuminate\Http\Response
     */
    public function edit(soundeffects $soundeffects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\soundeffects  $soundeffects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, soundeffects $soundeffects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\soundeffects  $soundeffects
     * @return \Illuminate\Http\Response
     */
    public function destroy(soundeffects $soundeffects)
    {
        //
    }
}
