<?php

namespace App\Http\Controllers;

use App\voice;
use Illuminate\Http\Request;

class VoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.voice', ['voice' => voice::all()]);

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
        $new = new voice();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.voice'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\voice  $voice
     * @return \Illuminate\Http\Response
     */
    public function show(voice $voice)
    {
        $voice = voice::find($id);
        return view('services.voice', ['voice' => $voice]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\voice  $voice
     * @return \Illuminate\Http\Response
     */
    public function edit(voice $voice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\voice  $voice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, voice $voice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\voice  $voice
     * @return \Illuminate\Http\Response
     */
    public function destroy(voice $voice)
    {
        //
    }
}
