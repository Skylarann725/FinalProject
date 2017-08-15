<?php

namespace App\Http\Controllers;

use App\weddingphoto;
use Illuminate\Http\Request;

class WeddingPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.weddingphoto', ['weddingphoto' => weddingphoto::all()]);

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
        $new = new weddingphoto();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.weddingphoto'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\weddingphoto  $weddingphoto
     * @return \Illuminate\Http\Response
     */
    public function show(weddingphoto $weddingphoto)
    {
        $weddingphoto = weddingphoto::find($id);
        return view('services.weddingphoto', ['weddingphoto' => $weddingphoto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\weddingphoto  $weddingphoto
     * @return \Illuminate\Http\Response
     */
    public function edit(weddingphoto $weddingphoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\weddingphoto  $weddingphoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, weddingphoto $weddingphoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\weddingphoto  $weddingphoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(weddingphoto $weddingphoto)
    {
        //
    }
}
