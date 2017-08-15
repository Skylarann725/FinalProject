<?php

namespace App\Http\Controllers;

use App\analysts;
use Illuminate\Http\Request;

class AnalystsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.analysts', ['analysts' => analysts::all()]);

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
        $new = new analysts();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.analysts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\analysts  $analysts
     * @return \Illuminate\Http\Response
     */
    public function show(analysts $analysts)
    {
        $analysts = analysts::find($id);
        return view('services.analysts', ['analysts' => $analysts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\analysts  $analysts
     * @return \Illuminate\Http\Response
     */
    public function edit(analysts $analysts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\analysts  $analysts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, analysts $analysts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\analysts  $analysts
     * @return \Illuminate\Http\Response
     */
    public function destroy(analysts $analysts)
    {
        //
    }
}
