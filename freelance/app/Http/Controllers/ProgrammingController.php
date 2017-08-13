<?php

namespace App\Http\Controllers;

use App\programming;
use Illuminate\Http\Request;

class ProgrammingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.programming', ['programming' => programming::all()]);
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
        $new = new programming();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.programming'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\programming  $programming
     * @return \Illuminate\Http\Response
     */
    public function show(programming $programming)
    {
        $programming = programming::find($id);
        return view('services.programming', ['programming' => $programming]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\programming  $programming
     * @return \Illuminate\Http\Response
     */
    public function edit(programming $programming)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\programming  $programming
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, programming $programming)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\programming  $programming
     * @return \Illuminate\Http\Response
     */
    public function destroy(programming $programming)
    {
        //
    }
}
