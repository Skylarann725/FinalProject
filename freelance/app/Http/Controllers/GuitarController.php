<?php

namespace App\Http\Controllers;

use App\guitar;
use Illuminate\Http\Request;

class GuitarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.guitar', ['guitar' => guitar::all()]);

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
        $new = new guitar();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.guitar'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function show(guitar $guitar)
    {
        $guitar = guitar::find($id);
        return view('services.guitar', ['guitar' => $guitar]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function edit(guitar $guitar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, guitar $guitar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function destroy(guitar $guitar)
    {
        //
    }
}
