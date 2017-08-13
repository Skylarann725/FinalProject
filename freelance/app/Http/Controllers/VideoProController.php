<?php

namespace App\Http\Controllers;

use App\VideoPro;
use Illuminate\Http\Request;

class VideoProController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.videopro', ['videopro' => videopro::all()]);
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
        $new = new videopro();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.videopro'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VideoPro  $videoPro
     * @return \Illuminate\Http\Response
     */
    public function show(VideoPro $videoPro)
    {
        $videopro = videopro::find($id);
        return view('services.videopro', ['videopro' => $videopro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VideoPro  $videoPro
     * @return \Illuminate\Http\Response
     */
    public function edit(VideoPro $videoPro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VideoPro  $videoPro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VideoPro $videoPro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VideoPro  $videoPro
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideoPro $videoPro)
    {
        //
    }
}
