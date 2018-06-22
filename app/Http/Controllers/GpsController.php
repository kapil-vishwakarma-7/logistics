<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gps;

class GpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gps = Gps::paginate(10);
        return view('showgps',['gps'=>$gps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newgps');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $g = new Gps;
        $g->gps_status = $request->gps_status;
        $g->vendor = $request->vendor;
        $g->gps_date  = $request->gps_date ;
        $g->gps_time  = $request->gps_time ;
        $g->vehicle_no  = $request->vehicle_no ;
        $g->gps_no  = $request->gps_no ;
        $g->excepted_date  = $request->excepted_date ;
        $g->travel_mode  = $request->travel_mode ;
        $g->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $g = Gps::find($id);
        return view('show')
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
        $g = Gps::find($id);
        $g->gps_status = $request->gps_status;
        $g->vendor = $request->vendor;
        $g->gps_date  = $request->gps_date ;
        $g->gps_time  = $request->gps_time ;
        $g->vehicle_no  = $request->vehicle_no ;
        $g->gps_no  = $request->gps_no ;
        $g->excepted_date  = $request->excepted_date ;
        $g->travel_mode  = $request->travel_mode ;
        $g->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gps::destroy($id);
    }
}
