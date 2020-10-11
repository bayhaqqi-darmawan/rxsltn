<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bluecard;
use App\User;
Use App\Insurance;
use Illuminate\Support\Facades\Auth;

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
    public function show($ic)
    {
        $user = User::find($ic);
        $bluecards = Bluecard::find($ic);
        // $user_ic = auth()->user()->ic;
        // $bluecards = Bluecard::find($user_ic);
        $insurances = Insurance::find($ic);

        // if ($bluecards) {
        //     $bid = $bluecards->id;
        //     $bluecards_id = Bluecard::find($bid);
        //     dd($bluecards_id);

        //     return view('profiles.show', compact('user', 'bluecards', 'bluecards_id', 'insurances'));
        // };

        // // Check for correct user
        // if(auth()->user()->ic !== $user->ic){
        //     return redirect()->back()->with('error', 'Unauthorized Page!');
        // }

        return view('profiles.show', compact('user', 'bluecards', 'insurances'));

        // return view('profiles.show')->with('$user', $user);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ic)
    {
        $user = User::find($ic);

        // Check for correct user
        if(auth()->user()->ic !== $user->ic){
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
    public function update(Request $request, $ic)
    {
        $this-> validate($request, [
            'username' => 'required',
            'fullname' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
        ]);

        //Find the user
        $user = User::find($ic);
        $user->username = $request->input('username');
        $user->fullname = $request->input('fullname');
        $user->address = $request->input('address');
        $user->phone_number = $request->input('phone_number');
        $user-> save();

        return redirect('dashboard')->with('success', 'Profile Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ic)
    {
        $user = User::find($ic);

        // Check for correct user
        if(auth()->user()->ic !== $user->ic){
            return redirect()->back()->with('error', 'Unauthorized Page!');
        }

        $user->delete();
        return redirect('/dashboard')->with('success', 'User Removed');
    }
}
