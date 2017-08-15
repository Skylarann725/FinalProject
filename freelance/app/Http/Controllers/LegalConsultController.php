<?php

namespace App\Http\Controllers;

use App\legalconsult;
use Illuminate\Http\Request;

class LegalConsultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.legalconsult', ['legalconsult' => legalconsult::all()]);

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
        $new = new legalconsult();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.legalconsult'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\legalconsult  $legalconsult
     * @return \Illuminate\Http\Response
     */
    public function show(legalconsult $legalconsult)
    {
        $legalconsult = legalconsult::find($id);
        return view('services.legalconsult', ['legalconsult' => $legalconsult]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\legalconsult  $legalconsult
     * @return \Illuminate\Http\Response
     */
    public function edit(legalconsult $legalconsult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\legalconsult  $legalconsult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, legalconsult $legalconsult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\legalconsult  $legalconsult
     * @return \Illuminate\Http\Response
     */
    public function destroy(legalconsult $legalconsult)
    {
        //
    }
}
