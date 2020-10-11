<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Bluecard;
use App\Insurance;
use App\Roadtax;

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

        // Check for correct user
        if(auth()->user()->role !== "admin"){
            return redirect()->back()->with('error', 'Unauthorized Page!');
        }

        $ic = auth()->user()->ic;
        $bluecards = Bluecard::find($ic);
        $insurances = Insurance::find($ic);

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
    public function show($ic)
    {
        $user = User::find($ic); //this is the ic of the selected user
        $user_ic = $user->ic;
        $roadtaxes = Roadtax::where('user_ic', $user_ic)->get()->first();
        // $roadtaxes = $user->roadtax;
        if ($roadtaxes) {
            $r_bid = $roadtaxes->selectedBluecard;
            $r_iid = $roadtaxes->selectedInsurance;
            // dd($roadtaxes);
            $bluecards = Bluecard::find($r_bid);
            $insurances = Insurance::find($r_iid);

            return view('admins.show', compact('user', 'bluecards', 'insurances', 'roadtaxes'));
        }



        // Check for correct user
        if(auth()->user()->role !== "admin"){
            return redirect()->back()->with('error', 'Unauthorized Page!');
        }

        return view('admins.show', compact('user', 'roadtaxes'));
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approve($id)
    {
        $roadtax = Roadtax::find($id);
        dd($roadtax);
        $roadtax->approval = 'Approved';
        $roadtax-> save();

        return view('admins.index')->with('success', 'You have approved the record!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reject($id)
    {
        $roadtax = Roadtax::find($id);
        $roadtax->approval = 'Rejected';
        $roadtax-> save();

        return view('admins.index')->with('success', 'You have reject the record!');
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
