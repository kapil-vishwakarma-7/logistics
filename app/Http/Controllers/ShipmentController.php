<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipment;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('showshipments');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shipment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $s = new Shipment;
        $s->sender_name = $request->sender_name;
        $s->sender_contact  = $request->sender_contact ;
        $s->receiver_name  = $request->receiver_name ;
        $s->receiver_contact  = $request->receiver_contact ;
        $s->assign_staff  = $request->assign_staff ;
        $s->airway_bill_no  = $request->airway_bill_no ;
        $s->sender_email  = $request->sender_email ;
        $s->receiver_email  = $request->receiver_email ;
        $s->sender_add  = $request->sender_add ;
        $s->receiver_add  = $request->receiver_add ;
        $s->sender_city  = $request->sender_city ;
        $s->receiver_city  = $request->receiver_city ;
        $s->total_weight  = $request->total_weight ;
        $s->shipment_type  = $request->shipment_type ;
        $s->delivery_date  = $request->delivery_date ;
        $s->delivery_time  = $request->delivery_time ;
        $s->pay_mode  = $request->pay_mode ;
        $s->total_fright  = $request->total_fright ;
        $s->booking_mode  = $request->booking_mode ;
        $s->insurance_status = $request->insurance_status ;
        $s->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $s = Shipment::find($id);   
        return view('showshipment',['shipment'=>$s]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     
        $s = Shipment::find($id);   
        return view('editshipment',['shipment'=>$s]);
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
        $s = Shipment::find($id);
        $s->sender_name = $request->sender_name;
        $s->sender_contact  = $request->sender_contact ;
        $s->receiver_name  = $request->receiver_name ;
        $s->receiver_contact  = $request->receiver_contact ;
        $s->assign_staff  = $request->assign_staff ;
        $s->airway_bill_no  = $request->airway_bill_no ;
        $s->sender_email  = $request->sender_email ;
        $s->receiver_email  = $request->receiver_email ;
        $s->sender_add  = $request->sender_add ;
        $s->receiver_add  = $request->receiver_add ;
        $s->sender_city  = $request->sender_city ;
        $s->receiver_city  = $request->receiver_city ;
        $s->total_weight  = $request->total_weight ;
        $s->shipment_type  = $request->shipment_type ;
        $s->delivery_date  = $request->delivery_date ;
        $s->delivery_time  = $request->delivery_time ;
        $s->pay_mode  = $request->pay_mode ;
        $s->total_fright  = $request->total_fright ;
        $s->booking_mode  = $request->booking_mode ;
        $s->insurance_status = $request->insurance_status ;
        $s->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Shipment::destroy($id);
    }
    public function filter(Request $request){

    }
}
