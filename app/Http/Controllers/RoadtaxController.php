<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bluecard;
use App\Insurance;
use App\Roadtax;
use App\User;

class RoadtaxController extends Controller
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

    public function reason()
    {
        $ic = auth()->user()->ic;
        $user = User::find($ic);

        return view('reason')->with('user', $user);
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
        $fillable = ['reason', 'price'];

        $this->validate($request, [
            'selectedBluecard' => 'required|integer|unique:roadtax',
            'selectedInsurance' => 'required|integer|unique:roadtax'
        ]);

        $roadtax = new Roadtax;
        $roadtax->user_ic = auth()->user()->ic;
        $roadtax->selectedBluecard = $request->input('selectedBluecard');
        $roadtax->selectedInsurance = $request->input('selectedInsurance');
        $roadtax->save();

        return redirect('dashboard')->with('success', 'Record Sent!');
    }

    protected $fillable = ['reason', 'price'];

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
        $insurances = Insurance::find($ic);

        return view('roadtax.show', compact('bluecards', 'user', 'insurances'));
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
        $roadtax = Roadtax::find($id);
        $roadtax->delete();

        $ic = auth()->user()->ic;
        $user = User::find($ic);

        return redirect('/dashboard')->with('success', 'Resubmit your Roadtax');
    }
}
