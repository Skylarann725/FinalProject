<?php

namespace App\Http\Controllers;

use App\weddingvid;
use Illuminate\Http\Request;

class WeddingVidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.weddingvid', ['weddingvid' => weddingvid::all()]);

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
        $new = new weddingvid();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.weddingvid'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\weddingvid  $weddingvid
     * @return \Illuminate\Http\Response
     */
    public function show(weddingvid $weddingvid)
    {
        $weddingvid = weddingvid::find($id);
        return view('services.weddingvid', ['weddingvid' => $weddingvid]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\weddingvid  $weddingvid
     * @return \Illuminate\Http\Response
     */
    public function edit(weddingvid $weddingvid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\weddingvid  $weddingvid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, weddingvid $weddingvid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\weddingvid  $weddingvid
     * @return \Illuminate\Http\Response
     */
    public function destroy(weddingvid $weddingvid)
    {
        //
    }
}
