<?php

namespace App\Http\Controllers;

use App\logodesign;
use Illuminate\Http\Request;

class LogoDesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.logodesign', ['logodesign' => logodesign::all()]);

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
        $new = new logodesign();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.logodesign'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\logodesign  $logodesign
     * @return \Illuminate\Http\Response
     */
    public function show(logodesign $logodesign)
    {
        $logodesign = logodesign::find($id);
        return view('services.logodesign', ['logodesign' => $logodesign]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\logodesign  $logodesign
     * @return \Illuminate\Http\Response
     */
    public function edit(logodesign $logodesign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\logodesign  $logodesign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, logodesign $logodesign)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\logodesign  $logodesign
     * @return \Illuminate\Http\Response
     */
    public function destroy(logodesign $logodesign)
    {
        //
    }
}
