<?php

namespace App\Http\Controllers;

use App\Models\TrackCounter;
use Illuminate\Http\Request;

class TrackCounterController extends Controller
{

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trackers = TrackCounter::get();
        return view('dashboard.trackers.trackers', compact('trackers'));
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
     * @param  \App\Models\TrackCounter  $trackCounter
     * @return \Illuminate\Http\Response
     */
    public function show(TrackCounter $trackCounter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrackCounter  $trackCounter
     * @return \Illuminate\Http\Response
     */
    public function edit(TrackCounter $trackCounter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrackCounter  $trackCounter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrackCounter $trackCounter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrackCounter  $trackCounter
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrackCounter $trackCounter)
    {
        //
    }
}
