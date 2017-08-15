<?php

namespace App\Http\Controllers;

use App\wordpress;
use Illuminate\Http\Request;

class WordpressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.wordpress', ['wordpress' => wordpress::all()]);

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
        $new = new wordpress();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.wordpress'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\wordpress  $wordpress
     * @return \Illuminate\Http\Response
     */
    public function show(wordpress $wordpress)
    {
        $wordpress = wordpress::find($id);
        return view('services.wordpress', ['wordpress' => $wordpress]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\wordpress  $wordpress
     * @return \Illuminate\Http\Response
     */
    public function edit(wordpress $wordpress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\wordpress  $wordpress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, wordpress $wordpress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\wordpress  $wordpress
     * @return \Illuminate\Http\Response
     */
    public function destroy(wordpress $wordpress)
    {
        //
    }
}
