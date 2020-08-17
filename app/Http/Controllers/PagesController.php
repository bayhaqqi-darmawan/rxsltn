<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function services(){
        $data = array(
            'services' => ['Web Design', 'SQL', 'PHP']
        );
        return view('pages.services')->with($data);
    }
}
