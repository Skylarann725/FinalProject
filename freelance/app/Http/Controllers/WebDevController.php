<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\webdev;

class WebDevController extends Controller
{
    public function webdev()
    {
        return view('services.webdev', ['webdev' => webdev::all()]);
    }

    public function store(Request $request)
    {
        $new = new webdev();
        $new->name = $request->get('name');
        $new->save();

        return redirect(route('services.webdev'));
    }

    public function show($id)
    {
        $webdev = webdev::find($id);
        return view('services.webdev', ['webdev' => $webdev]);
    }
}
