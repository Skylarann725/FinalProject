<?php

namespace App\Http\Controllers;

use App\mixing;
use Illuminate\Http\Request;

class MixingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.mixing', ['mixing' => mixing::all()]);

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
        $new = new mixing();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.mixing'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mixing  $mixing
     * @return \Illuminate\Http\Response
     */
    public function show(mixing $mixing)
    {
        $mixing = mixing::find($id);
        return view('services.mixing', ['mixing' => $mixing]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mixing  $mixing
     * @return \Illuminate\Http\Response
     */
    public function edit(mixing $mixing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mixing  $mixing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mixing $mixing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mixing  $mixing
     * @return \Illuminate\Http\Response
     */
    public function destroy(mixing $mixing)
    {
        //
    }
}
