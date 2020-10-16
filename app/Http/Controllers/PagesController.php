<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function reason($ic){
        $user = User::find($ic);

        return view('pages.reason')->with('user', $user);
    }
}
