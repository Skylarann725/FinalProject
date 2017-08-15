<?php

namespace App\Http\Controllers;

use App\testing;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.testing', ['testing' => testing::all()]);

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
        $new = new testing();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.testing'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\testing  $testing
     * @return \Illuminate\Http\Response
     */
    public function show(testing $testing)
    {
        $testing = testing::find($id);
        return view('services.testing', ['testing' => $testing]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testing  $testing
     * @return \Illuminate\Http\Response
     */
    public function edit(testing $testing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testing  $testing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testing $testing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testing  $testing
     * @return \Illuminate\Http\Response
     */
    public function destroy(testing $testing)
    {
        //
    }
}
