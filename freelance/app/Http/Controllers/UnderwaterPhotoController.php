<?php

namespace App\Http\Controllers;

use App\underwaterphoto;
use Illuminate\Http\Request;

class UnderwaterPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.underwaterphoto', ['underwaterphoto' => underwaterphoto::all()]);

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
        $new = new underwaterphoto();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.underwaterphoto'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\underwaterphoto  $underwaterphoto
     * @return \Illuminate\Http\Response
     */
    public function show(underwaterphoto $underwaterphoto)
    {
        $underwaterphoto = underwaterphoto::find($id);
        return view('services.underwaterphoto', ['underwaterphoto' => $underwaterphoto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\underwaterphoto  $underwaterphoto
     * @return \Illuminate\Http\Response
     */
    public function edit(underwaterphoto $underwaterphoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\underwaterphoto  $underwaterphoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, underwaterphoto $underwaterphoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\underwaterphoto  $underwaterphoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(underwaterphoto $underwaterphoto)
    {
        //
    }
}
