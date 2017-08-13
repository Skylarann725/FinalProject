<?php

namespace App\Http\Controllers;

use App\Ecommerce;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('services.ecommerce', ['ecommerce' => ecommerce::all()]);

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
        $new = new ecommerce();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.ecommerce'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ecommerce  $ecommerce
     * @return \Illuminate\Http\Response
     */
    public function show(Ecommerce $ecommerce)
    {
        $ecommerce = ecommerce::find($id);
        return view('services.ecommerce', ['ecommerce' => $ecommerce]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ecommerce  $ecommerce
     * @return \Illuminate\Http\Response
     */
    public function edit(Ecommerce $ecommerce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ecommerce  $ecommerce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ecommerce $ecommerce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ecommerce  $ecommerce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ecommerce $ecommerce)
    {
        //
    }
}
