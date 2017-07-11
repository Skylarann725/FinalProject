<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class ProfileController extends Controller
{
    public function viewSettings()
    {
        return view('user.settings', [
            'user' => User::find(Auth::user()->id)
        ]);
    }

    public function saveSettings(Requests\SettingsUpdateRequest $request)
    {
        $user = User::find(Auth::user()->id);
        $user->profile_image_url = $request->input('profile_image_url');
        $user->first_name = $request->input('first_name');
        $user->last_initial = $request->input('last_initial');
        $user->profile_title = $request->input('profile_title');
        $user->hourly_amount = $request->input('hourly_amount');
        $user->location_city = $request->input('location_city');
        $user->location_state = $request->input('location_state');
        $user->skills = $request->input('skills');
        $user->profile_summary = $request->input('profile_summary');
        $user->save();
        return Redirect('/profile/'.Auth::user()->id);


    }

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
