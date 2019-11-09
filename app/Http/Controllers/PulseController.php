<?php

namespace App\Http\Controllers;

use App\Charts\PulseChart;
use App\Pulse;
use Illuminate\Http\Request;

class PulseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pulses = Pulse::orderBy('created_at', 'desc')->get();

        $data = collect([]);
        $data2 = collect([]);

        foreach ($pulses as $puls){
            $data->push($puls->value);
            $data2->push(date("d F Y", strtotime($puls->created_at)));
        }


        $chart = new PulseChart;
        $chart->labels($data2);
        $chart->dataset('My Best', 'line', collect($data));

        return view('index', compact('pulses', 'chart'));
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
     * @param  \App\Pulse  $pulse
     * @return \Illuminate\Http\Response
     */
    public function show(Pulse $pulse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pulse  $pulse
     * @return \Illuminate\Http\Response
     */
    public function edit(Pulse $pulse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pulse  $pulse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pulse $pulse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pulse  $pulse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pulse $pulse)
    {
        //
    }
}
