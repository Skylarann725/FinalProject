<?php

namespace App\Http\Controllers;

use App\accounting;
use Illuminate\Http\Request;

class AccountingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.accounting', ['accounting' => accounting::all()]);

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
        $new = new accounting();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.accounting'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function show(accounting $accounting)
    {
        $accounting = accounting::find($id);
        return view('services.accounting', ['accounting' => $accounting]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function edit(accounting $accounting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, accounting $accounting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\accounting  $accounting
     * @return \Illuminate\Http\Response
     */
    public function destroy(accounting $accounting)
    {
        //
    }
}
