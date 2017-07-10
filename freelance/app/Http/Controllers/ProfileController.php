<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class ProfileController extends Controller
{
    public function viewProfile($userId = null)
    {
        $user = null;
        if($userId != null)
        {
            $user = User::find($userId);
        } else {
            $user = User::find(Auth::user()->id);
        }
        return view('user.profile', [
            'user' => $user
        ]);

    }
}
