<?php

namespace App\Http\Controllers;

use App\songwriters;
use Illuminate\Http\Request;

class SongwritersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.songwriters', ['songwriters' => songwriters::all()]);

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
        $new = new songwriters();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.songwriters'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\songwriters  $songwriters
     * @return \Illuminate\Http\Response
     */
    public function show(songwriters $songwriters)
    {
        $songwriters = songwriters::find($id);
        return view('services.songwriters', ['songwriters' => $songwriters]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\songwriters  $songwriters
     * @return \Illuminate\Http\Response
     */
    public function edit(songwriters $songwriters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\songwriters  $songwriters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, songwriters $songwriters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\songwriters  $songwriters
     * @return \Illuminate\Http\Response
     */
    public function destroy(songwriters $songwriters)
    {
        //
    }
}
