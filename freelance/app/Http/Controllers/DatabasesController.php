<?php

namespace App\Http\Controllers;

use App\databases;
use Illuminate\Http\Request;

class DatabasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.databases', ['databases' => databases::all()]);

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
        $new = new databases();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.databases'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\databases  $databases
     * @return \Illuminate\Http\Response
     */
    public function show(databases $databases)
    {
        $databases = databases::find($id);
        return view('services.databases', ['databases' => $databases]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\databases  $databases
     * @return \Illuminate\Http\Response
     */
    public function edit(databases $databases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\databases  $databases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, databases $databases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\databases  $databases
     * @return \Illuminate\Http\Response
     */
    public function destroy(databases $databases)
    {
        //
    }
}
