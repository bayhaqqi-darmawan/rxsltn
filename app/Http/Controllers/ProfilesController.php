<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bluecard;
use App\User;
Use App\Insurance;

class ProfilesController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $bluecards = Bluecard::find($ic_number);
        $insurances = Insurance::find($ic_number);
        $user = User::find($ic_number);

        // Check for correct user
        if(auth()->user()->ic_number !== $user->ic_number){
            return redirect()->back()->with('error', 'Unauthorized Page!');
        }

        return view('profiles.show')->with('bluecards', $bluecards)->with('insurances', $insurances);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ic_number)
    {
        $user = User::find($ic_number);

        // Check for correct user
        if(auth()->user()->ic_number !== $user->ic_number){
            return redirect()->back()->with('error', 'Unauthorized Page!');
        }

        return view('profiles.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ic_number)
    {
        $this-> validate($request, [
            'username' => 'required',
            'fullname' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
        ]);

        //Find the user

        $user = User::find($ic_number);
        $user->username = $request->input('username');
        $user->fullname = $request->input('fullname');
        $user->address = $request->input('address');
        $user->phone_number = $request->input('phone_number');
        $user-> save();

        return redirect('/dashboard')->with('success', 'Profile Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ic_number)
    {
        $user = User::find($ic_number);

        // Check for correct user
        if(auth()->user()->ic_number !== $user->ic_number){
            return redirect()->back()->with('error', 'Unauthorized Page!');
        }

        $user->delete();
        return redirect('/dashboard')->with('success', 'User Removed');
    }
}
