<?php

namespace App\Http\Controllers;

use App\academicwriters;
use Illuminate\Http\Request;

class AcademicWritersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.academicwriters', ['academicwriters' => academicwriters::all()]);

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
        $new = new academicwriters();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.academicwriters'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\academicwriters  $academicwriters
     * @return \Illuminate\Http\Response
     */
    public function show(academicwriters $academicwriters)
    {
        $academicwriters = academicwriters::find($id);
        return view('services.academicwriters', ['academicwriters' => $academicwriters]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\academicwriters  $academicwriters
     * @return \Illuminate\Http\Response
     */
    public function edit(academicwriters $academicwriters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\academicwriters  $academicwriters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, academicwriters $academicwriters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\academicwriters  $academicwriters
     * @return \Illuminate\Http\Response
     */
    public function destroy(academicwriters $academicwriters)
    {
        //
    }
}
