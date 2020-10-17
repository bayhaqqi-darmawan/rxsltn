<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bluecard;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class BluecardsController extends Controller
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
        $bluecards = Bluecard::all();
        $ic = auth()->user()->ic;
        $user = User::find($ic);

        return view('bluecards.index', compact('bluecards', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bluecards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> validate($request, [
            'plate' => ['required', 'max:3'],
            'number' => ['required', 'max:4'],
            'plate_number' => ['max:7', 'unique:bluecards'],
            'exp' => 'required',
        ]);

        // Handle File Upload
        if($request->hasFile('upload_img')){
            $filename = $request->upload_img->getClientOriginalName();
            $request->upload_img->storeAs('upload_imgs', $filename, 'public');
        }

         // Create New
         $bluecards = new Bluecard;
         $bluecards->user_ic = auth()->user()->ic;
         $bluecards->upload_img = $filename;
         $bluecards->exp = $request->input('exp');
         $bluecards->plate = Str::upper($request->input('plate'));
         $bluecards->number = $request->input('number');
         $bluecards->plate_number = Str::upper($request->input('plate')).$request->input('number');
         $bluecards->save();

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
        $bluecard = Bluecard::find($id);

        return view('bluecards.show')->with('bluecard', $bluecard);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bluecard = Bluecard::find($id);
        $user = User::find($id);

        return view('bluecards.edit', compact('bluecard', 'user'));
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
            'exp' => 'required',
        ]);

        //Find the user

        $bluecard = Bluecard::find($id);
        $bluecard->plate = Str::upper($request->input('plate'));
        $bluecard->number = $request->input('number');
        $bluecard->plate_number = Str::upper($request->input('plate')).$request->input('number');
        $bluecard->exp = $request->input('exp');
        $bluecard-> save();

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
        $bluecard = Bluecard::find($id);
        $bluecard->delete();

        $ic = auth()->user()->ic;
        $user = User::find($ic);

        return view('/dashboard', compact('user'))->with('success', 'Digital Bluecard Removed');
    }
}
