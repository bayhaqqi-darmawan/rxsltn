<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Bluecard;
use App\Insurance;

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
        $ic_number = auth()->user()->ic_number;
        $users = User::find($ic_number);
        $bluecards = Bluecard::find($ic_number);
        $insurances = Insurance::find($ic_number);

        return view('dashboard', [
            'users' => $users,
            'bluecards' => $bluecards,
            'insurances' => $insurances
        ]);
    }
}
