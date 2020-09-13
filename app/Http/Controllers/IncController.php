<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;

class IncController extends Controller
{
    public function navbar(){

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        
        $profile = Profile::find($id);
        return view('profile.show')->with('profile', $profile);
    }
}
