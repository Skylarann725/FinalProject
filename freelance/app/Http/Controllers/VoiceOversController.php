<?php

namespace App\Http\Controllers;

use App\voiceovers;
use Illuminate\Http\Request;

class VoiceOversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.voiceovers', ['voiceovers' => voiceovers::all()]);

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
        $new = new voiceovers();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.voiceovers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\voiceovers  $voiceovers
     * @return \Illuminate\Http\Response
     */
    public function show(voiceovers $voiceovers)
    {
        $voiceovers = voiceovers::find($id);
        return view('services.voiceovers', ['voiceovers' => $voiceovers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\voiceovers  $voiceovers
     * @return \Illuminate\Http\Response
     */
    public function edit(voiceovers $voiceovers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\voiceovers  $voiceovers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, voiceovers $voiceovers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\voiceovers  $voiceovers
     * @return \Illuminate\Http\Response
     */
    public function destroy(voiceovers $voiceovers)
    {
        //
    }
}
