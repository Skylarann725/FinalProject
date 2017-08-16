<?php

namespace App\Http\Controllers;

use App\translators;
use Illuminate\Http\Request;

class TranslatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.translators', ['translators' => translators::all()]);

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
        $new = new translators();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.translators'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\translators  $translators
     * @return \Illuminate\Http\Response
     */
    public function show(translators $translators)
    {
        $translators = translators::find($id);
        return view('services.translators', ['translators' => $translators]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\translators  $translators
     * @return \Illuminate\Http\Response
     */
    public function edit(translators $translators)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\translators  $translators
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, translators $translators)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\translators  $translators
     * @return \Illuminate\Http\Response
     */
    public function destroy(translators $translators)
    {
        //
    }
}
