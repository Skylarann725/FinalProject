<?php

namespace App\Http\Controllers;

use App\underwatervid;
use Illuminate\Http\Request;

class UnderwaterVidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.underwatervid', ['underwatervid' => underwatervid::all()]);

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
        $new = new underwatervid();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.underwatervid'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\underwatervid  $underwatervid
     * @return \Illuminate\Http\Response
     */
    public function show(underwatervid $underwatervid)
    {
        $underwatervid = underwatervid::find($id);
        return view('services.underwatervid', ['underwatervid' => $underwatervid]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\underwatervid  $underwatervid
     * @return \Illuminate\Http\Response
     */
    public function edit(underwatervid $underwatervid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\underwatervid  $underwatervid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, underwatervid $underwatervid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\underwatervid  $underwatervid
     * @return \Illuminate\Http\Response
     */
    public function destroy(underwatervid $underwatervid)
    {
        //
    }
}
