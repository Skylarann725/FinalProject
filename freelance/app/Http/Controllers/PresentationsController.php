<?php

namespace App\Http\Controllers;

use App\presentations;
use Illuminate\Http\Request;

class PresentationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.presentations', ['presentations' => presentations::all()]);

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
        $new = new presentations();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.presentations'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\presentations  $presentations
     * @return \Illuminate\Http\Response
     */
    public function show(presentations $presentations)
    {
        $presentations = presentations::find($id);
        return view('services.presentations', ['presentations' => $presentations]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\presentations  $presentations
     * @return \Illuminate\Http\Response
     */
    public function edit(presentations $presentations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\presentations  $presentations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, presentations $presentations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\presentations  $presentations
     * @return \Illuminate\Http\Response
     */
    public function destroy(presentations $presentations)
    {
        //
    }
}
