<?php

namespace App\Http\Controllers;

use App\nature;
use Illuminate\Http\Request;

class NatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.nature', ['nature' => nature::all()]);

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
        $new = new nature();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.nature'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\nature  $nature
     * @return \Illuminate\Http\Response
     */
    public function show(nature $nature)
    {
        $nature = nature::find($id);
        return view('services.nature', ['nature' => $nature]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nature  $nature
     * @return \Illuminate\Http\Response
     */
    public function edit(nature $nature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nature  $nature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nature $nature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nature  $nature
     * @return \Illuminate\Http\Response
     */
    public function destroy(nature $nature)
    {
        //
    }
}
