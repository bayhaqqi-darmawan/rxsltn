<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Bluecard;
use App\Insurance;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $bluecard_exp = Bluecard::all();
        $insurance_exp = Insurance::all();

        $user_ic = auth()->user()->ic_number;
        $bluecards = Bluecard::find($user_ic);
        $insurances = Insurance::find($user_ic);

        return view('admins.index', compact('bluecard_exp', 'insurance_exp', 'bluecards', 'insurances', 'users'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ic_number)
    {
        $user = User::find($ic_number);
        $bluecards = Bluecard::find($ic_number);
        $insurances = Insurance::find($ic_number);

        // // Check for correct user
        // if(auth()->user()->role !== "admin"){
        //     return redirect()->back()->with('error', 'Unauthorized Page!');
        // }

        return view('admins.show')->with('user', $user)->with('bluecards', $bluecards)->with('insurances', $insurances);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
