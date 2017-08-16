<?php

namespace App\Http\Controllers;

use App\journalists;
use Illuminate\Http\Request;

class JournalistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.journalists', ['journalists' => journalists::all()]);

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
        $new = new journalists();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.journalists'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\journalists  $journalists
     * @return \Illuminate\Http\Response
     */
    public function show(journalists $journalists)
    {
        $journalists = journalists::find($id);
        return view('services.journalists', ['journalists' => $journalists]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\journalists  $journalists
     * @return \Illuminate\Http\Response
     */
    public function edit(journalists $journalists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\journalists  $journalists
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, journalists $journalists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\journalists  $journalists
     * @return \Illuminate\Http\Response
     */
    public function destroy(journalists $journalists)
    {
        //
    }
}
