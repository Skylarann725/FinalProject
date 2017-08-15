<?php

namespace App\Http\Controllers;

use App\editors;
use Illuminate\Http\Request;

class EditorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.editors', ['editors' => editors::all()]);

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
        $new = new editors();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.editors'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\editors  $editors
     * @return \Illuminate\Http\Response
     */
    public function show(editors $editors)
    {
        $editors = editors::find($id);
        return view('services.editors', ['editors' => $editors]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\editors  $editors
     * @return \Illuminate\Http\Response
     */
    public function edit(editors $editors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\editors  $editors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, editors $editors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\editors  $editors
     * @return \Illuminate\Http\Response
     */
    public function destroy(editors $editors)
    {
        //
    }
}
