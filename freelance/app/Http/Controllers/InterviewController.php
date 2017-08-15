<?php

namespace App\Http\Controllers;

use App\interview;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.interview', ['interview' => interview::all()]);

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
        $new = new interview();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.interview'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function show(interview $interview)
    {
        $interview = interview::find($id);
        return view('services.interview', ['interview' => $interview]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function edit(interview $interview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, interview $interview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function destroy(interview $interview)
    {
        //
    }
}
