<?php

namespace App\Http\Controllers;

use App\singers;
use Illuminate\Http\Request;

class SingersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.singers', ['singers' => singers::all()]);

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
        $new = new singers();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.singers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\singers  $singers
     * @return \Illuminate\Http\Response
     */
    public function show(singers $singers)
    {
        $singers = singers::find($id);
        return view('services.singers', ['singers' => $singers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\singers  $singers
     * @return \Illuminate\Http\Response
     */
    public function edit(singers $singers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\singers  $singers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, singers $singers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\singers  $singers
     * @return \Illuminate\Http\Response
     */
    public function destroy(singers $singers)
    {
        //
    }
}
