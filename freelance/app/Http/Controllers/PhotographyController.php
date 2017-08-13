<?php

namespace App\Http\Controllers;

use App\Photography;
use Illuminate\Http\Request;

class PhotographyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.photography', ['photography' => photography::all()]);
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
        $new = new photography();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.photography'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photography  $photography
     * @return \Illuminate\Http\Response
     */
    public function show(Photography $photography)
    {
        $photography = photography::find($id);
        return view('services.photography', ['photography' => $photography]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photography  $photography
     * @return \Illuminate\Http\Response
     */
    public function edit(Photography $photography)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photography  $photography
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photography $photography)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photography  $photography
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photography $photography)
    {
        //
    }
}
