<?php

namespace App\Http\Controllers;

use App\User;
use App\Bluecard;
use App\Insurance;
use App\Roadtax;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ic = auth()->user()->ic;
        $user = User::find($ic);
        $bluecards = Bluecard::find($ic);
        $insurances = Insurance::find($ic);
        $roadtax = Roadtax::find($ic);

        return view('dashboard', [
            'user' => $user,
            'bluecards' => $bluecards,
            'insurances' => $insurances,
            'roadtax' => $roadtax
        ]);
    }
}
