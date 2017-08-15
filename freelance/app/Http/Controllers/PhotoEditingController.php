<?php

namespace App\Http\Controllers;

use App\photoediting;
use Illuminate\Http\Request;

class PhotoEditingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.photoediting', ['photoediting' => photoediting::all()]);

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
        $new = new photoediting();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.photoediting'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\photoediting  $photoediting
     * @return \Illuminate\Http\Response
     */
    public function show(photoediting $photoediting)
    {
        $photoediting = photoediting::find($id);
        return view('services.photoediting', ['photoediting' => $photoediting]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\photoediting  $photoediting
     * @return \Illuminate\Http\Response
     */
    public function edit(photoediting $photoediting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\photoediting  $photoediting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, photoediting $photoediting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\photoediting  $photoediting
     * @return \Illuminate\Http\Response
     */
    public function destroy(photoediting $photoediting)
    {
        //
    }
}
