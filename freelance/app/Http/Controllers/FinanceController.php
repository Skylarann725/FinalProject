<?php

namespace App\Http\Controllers;

use App\finance;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.finance', ['finance' => finance::all()]);
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
        $new = new finance();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.finance'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function show(finance $finance)
    {
        $finance = finance::find($id);
        return view('services.finance', ['finance' => $finance]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function edit(finance $finance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, finance $finance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function destroy(finance $finance)
    {
        //
    }
}
