<?php

namespace App\Http\Controllers;

use App\Day;
use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule = Schedule::all();
        $nines = Schedule::find([1,5,9,13]);
        $elevens = Schedule::find([2,6,10,14]);
        $ones = Schedule::find([3,7,11,15]);
        $threes = Schedule::find([4,8,12,16]);

        return view('delivery', compact('schedule', 'nines', 'elevens', 'ones', 'threes'));
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
    public function edit()
    {
        $nines = Schedule::find([1,5,9,13]);
        $elevens = Schedule::find([2,6,10,14]);
        $ones = Schedule::find([3,7,11,15]);
        $threes = Schedule::find([4,8,12,16]);

        return view('adminSchedule', compact('nines', 'elevens', 'ones', 'threes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $selectedDay = $request->input('days');
        $selectedHour = $request->input('hours');
        $selectedPlace = $request->input('place');

        $schedule = DB::table('schedule');

        // $updateSchedule = Schedule::where('days_id', $selectedDay && 'hours_id', $selectedHour)->update('place' => $selectedPlace);



        return redirect('adminSchedule')->with('success', 'Schedule Updated!');
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
