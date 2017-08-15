<?php

namespace App\Http\Controllers;

use App\qa;
use Illuminate\Http\Request;

class QAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.qa', ['qa' => qa::all()]);

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
        $new = new qa();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.qa'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\qa  $qa
     * @return \Illuminate\Http\Response
     */
    public function show(qa $qa)
    {
        $qa = qa::find($id);
        return view('services.qa', ['qa' => $qa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\qa  $qa
     * @return \Illuminate\Http\Response
     */
    public function edit(qa $qa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\qa  $qa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, qa $qa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\qa  $qa
     * @return \Illuminate\Http\Response
     */
    public function destroy(qa $qa)
    {
        //
    }
}
