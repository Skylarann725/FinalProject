<?php

namespace App\Http\Controllers;

use App\models;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.models', ['models' => models::all()]);

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
        $new = new models();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.models'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model  $model
     * @return \Illuminate\Http\Response
     */
    public function show(models $models)
    {
        $models = models::find($id);
        return view('services.models', ['models' => $models]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model  $model
     * @return \Illuminate\Http\Response
     */
    public function edit(models $models)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model  $model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, models $models)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model  $model
     * @return \Illuminate\Http\Response
     */
    public function destroy(models $models)
    {
        //
    }
}
