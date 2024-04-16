<?php

namespace App\Http\Controllers;

use App\Models\Hour;
use App\Models\ScheduledTime;
use Illuminate\Http\Request;

class ScheduledTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $time = Hour::all();
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
        $data = [
            'disponibillity' => 1,
            'data' => NULL,
            'hour_id' => $request->hour_id
        ];

        ScheduledTime::create($data);
        return route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ScheduledTime $scheduledTime)
    {
        return view("scheduled.edit",['scheduledTime' => $scheduledTime]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $scheduledTime = ScheduledTime::find($id);
        $data = [
            "data" =>$request->data,
            "disponibillity" => $request->disponibillity,
            "hour_id" => $request->hour_id
        ];
        $scheduledTime->update($data);
        return redirect()->route("dashboard");

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
