<?php

namespace App\Http\Controllers;

use App\taxprep;
use Illuminate\Http\Request;

class TaxPrepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.taxprep', ['taxprep' => taxprep::all()]);

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
        $new = new taxprep();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.taxprep'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\taxprep  $taxprep
     * @return \Illuminate\Http\Response
     */
    public function show(taxprep $taxprep)
    {
        $taxprep = taxprep::find($id);
        return view('services.taxprep', ['taxprep' => $taxprep]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\taxprep  $taxprep
     * @return \Illuminate\Http\Response
     */
    public function edit(taxprep $taxprep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\taxprep  $taxprep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, taxprep $taxprep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\taxprep  $taxprep
     * @return \Illuminate\Http\Response
     */
    public function destroy(taxprep $taxprep)
    {
        //
    }
}
