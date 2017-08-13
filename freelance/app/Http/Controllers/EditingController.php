<?php

namespace App\Http\Controllers;

use App\editing;
use Illuminate\Http\Request;

class EditingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.editing', ['editing' => editing::all()]);

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
        $new = new editing();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.editing'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\editing  $editing
     * @return \Illuminate\Http\Response
     */
    public function show(editing $editing)
    {
        $editing = editing::find($id);
        return view('services.editing', ['editing' => $editing]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\editing  $editing
     * @return \Illuminate\Http\Response
     */
    public function edit(editing $editing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\editing  $editing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, editing $editing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\editing  $editing
     * @return \Illuminate\Http\Response
     */
    public function destroy(editing $editing)
    {
        //
    }
}
