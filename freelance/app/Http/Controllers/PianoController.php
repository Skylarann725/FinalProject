<?php

namespace App\Http\Controllers;

use App\piano;
use Illuminate\Http\Request;

class PianoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.piano', ['piano' => piano::all()]);

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
        $new = new piano();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.piano'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\piano  $piano
     * @return \Illuminate\Http\Response
     */
    public function show(piano $piano)
    {
        $piano = piano::find($id);
        return view('services.piano', ['piano' => $piano]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\piano  $piano
     * @return \Illuminate\Http\Response
     */
    public function edit(piano $piano)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\piano  $piano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, piano $piano)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\piano  $piano
     * @return \Illuminate\Http\Response
     */
    public function destroy(piano $piano)
    {
        //
    }
}
