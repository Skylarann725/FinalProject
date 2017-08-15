<?php

namespace App\Http\Controllers;

use App\desktop;
use Illuminate\Http\Request;

class DesktopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.desktop', ['desktop' => desktop::all()]);

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
        $new = new desktop();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.desktop'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\desktop  $desktop
     * @return \Illuminate\Http\Response
     */
    public function show(desktop $desktop)
    {
        $desktop = desktop::find($id);
        return view('services.desktop', ['desktop' => $desktop]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\desktop  $desktop
     * @return \Illuminate\Http\Response
     */
    public function edit(desktop $desktop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\desktop  $desktop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, desktop $desktop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\desktop  $desktop
     * @return \Illuminate\Http\Response
     */
    public function destroy(desktop $desktop)
    {
        //
    }
}
