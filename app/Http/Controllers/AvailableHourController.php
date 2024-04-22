<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\AvailableHours;
use App\Models\Hour;
use App\Models\ScheduledTime;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AvailableHourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $times = ScheduledTime::all();
        $availables = AvailableHours::where("user_id",Auth::id())->where('hidden',0)->get();


        $entrou = false;

        if (count($availables) != 0) {

            if(count($times) != count($availables) ){

                $tohidden = AvailableHours::where("user_id",Auth::id())->get('id');
                AvailableHourController::hidden($tohidden,Auth::user()->id, $times);
                AvailableHourController::create();

            }else{
                AvailableHourController::reative($availables);
                return view('my.index', ['entrou' => $entrou, 'availables' => $availables, "teste" =>$teste->format("Y-m-d")]);
            }
        }else{

            AvailableHourController::create();
        }

    }
    public function reative ($availables) {
        $date = new DateTime(" yesterday");
        foreach ($availables as $available) {
            if ( $available->data == $date->format('Y-m-d')){
                $disponibility = AvailableHours::find($available->id);
                $data = ["disponibility" => 1];
                $disponibility->update($data);
            }
        }
    }

    public function hidden($availables,$auth,){
        foreach ($availables as $key) {
            // dump($auth,$scheduled_id);
            $update = AvailableHours::find($key->id);
            $data = [
                "data" => null,
                "disponibility" => 1,
                "hidden" => 1

            ];
            $update->update($data);
        }

    }

    public function store($auth,$scheduled_id)
    {

        $data = [
            'user_id' => $auth,
            'scheduled_time_id' =>$scheduled_id,
            "data" => null,
            "disponibility" => 1,
            "hidden" => 0,

        ];



        AvailableHours::create($data);
         return redirect()->route("my.index");


    }

    public function create()
    {
        $hours = ScheduledTime::all();
        $availables =  AvailableHours::where("user_id",Auth::id())->where('hidden',0)->get();

        if( $availables == null || count($availables) == 0  ){

            foreach ($hours as $hour) {
                $this->store(Auth::user()->id,$hour->id);
            }
            return redirect()->route("my.index");
        }else{
            return redirect()->route("my.index");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


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
    public function edit($id,Request $request)
    {
        $update = AvailableHours::find($id);
        $data = [
            "data" => $request->date,
            "disponibility" => 0,
            "hidden" => 0

        ];
        $update->update($data);
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
