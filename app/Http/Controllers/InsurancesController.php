<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insurance;

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
        $this->validate($request, [
            'ins_exp' => 'required',
            'insurance_img' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('insurance_img')){
            $filename = $request->insurance_img->getClientOriginalName();
            $request->insurance_img->storeAs('insurance_imgs', $filename, 'public');
        }

         // Create New
         $insurances = new Insurance;
         $insurances->user_ic = auth()->user()->ic_number;
         $insurances->insurance_img = $filename;
         $insurances->ins_exp = $request->input('ins_exp');
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
        //
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