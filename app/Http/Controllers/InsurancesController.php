<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insurance;
use App\User;
use Illuminate\Support\Str;

class InsurancesController extends Controller
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
        return view('insurances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nextyear = date('2021-01-01');
        
        $this->validate($request, [
            'ins_exp' => 'required|after_or_equal:'.$nextyear,
            'plate' => ['required', 'max:3'],
            'number' => ['required', 'max:4'],
            'plate_number' => ['max:7', 'unique:users'],
            'insurance_img' => 'image|required|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('insurance_img')){
            $filename = $request->insurance_img->getClientOriginalName();
            $request->insurance_img->storeAs('insurance_imgs', $filename, 'public');
        }

         // Create New
         $insurances = new Insurance;
         $insurances->user_ic = auth()->user()->ic;
         $insurances->insurance_img = $filename;
         $insurances->ins_exp = $request->input('ins_exp');
         $insurances->plate = Str::upper($request->input('plate'));
         $insurances->number = $request->input('number');
         $insurances->plate_number = Str::upper($request->input('plate')).$request->input('number');
         $insurances->save();

         return redirect('/dashboard')->with('success', 'File Uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $insurance = Insurance::find($id);

        return view('insurances.show')->with('insurance', $insurance);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insurance = Insurance::find($id);
        $user = User::find($id);

        return view('insurances.edit', compact('insurance', 'user'));
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
        $this-> validate($request, [
            'plate' => ['required', 'max:3'],
            'number' => ['required', 'max:4'],
            'plate_number' => ['max:7', 'unique'],
            'ins_exp' => 'required|after_or_equal:'.date('2020-01-01'),
        ]);

        //Find the user

        $insurance = Insurance::find($id);
        $insurance->plate = Str::upper($request->input('plate'));
        $insurance->number = $request->input('number');
        $insurance->plate_number = Str::upper($request->input('plate')).$request->input('number');
        $insurance->ins_exp = $request->input('ins_exp');
        $insurance-> save();

        $ic = auth()->user()->ic;
        $user = User::find($ic);

        return view('/dashboard', compact('user'))->with('success', 'Bluecard Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $insurance = Insurance::find($id);
        $insurance->delete();

        $ic = auth()->user()->ic;
        $user = User::find($ic);

        return view('/dashboard', compact('user'))->with('success', 'Insurance Removed');
    }
}
