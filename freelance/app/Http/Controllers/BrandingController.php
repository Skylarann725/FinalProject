<?php

namespace App\Http\Controllers;

use App\branding;
use Illuminate\Http\Request;

class BrandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.branding', ['branding' => branding::all()]);

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
        $new = new branding();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.branding'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\branding  $branding
     * @return \Illuminate\Http\Response
     */
    public function show(branding $branding)
    {
        $branding = branding::find($id);
        return view('services.branding', ['branding' => $branding]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\branding  $branding
     * @return \Illuminate\Http\Response
     */
    public function edit(branding $branding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\branding  $branding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, branding $branding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\branding  $branding
     * @return \Illuminate\Http\Response
     */
    public function destroy(branding $branding)
    {
        //
    }
}
