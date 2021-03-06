<?php

namespace App\Http\Controllers;

use App\musicvid;
use Illuminate\Http\Request;

class MusicVidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.musicvid', ['musicvid' => musicvid::all()]);
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
        $new = new musicvid();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.musicvid'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\musicvid  $musicvid
     * @return \Illuminate\Http\Response
     */
    public function show(musicvid $musicvid)
    {
        $musicvid = musicvid::find($id);
        return view('services.musicvid', ['musicvid' => $musicvid]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\musicvid  $musicvid
     * @return \Illuminate\Http\Response
     */
    public function edit(musicvid $musicvid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\musicvid  $musicvid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, musicvid $musicvid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\musicvid  $musicvid
     * @return \Illuminate\Http\Response
     */
    public function destroy(musicvid $musicvid)
    {
        //
    }
}
