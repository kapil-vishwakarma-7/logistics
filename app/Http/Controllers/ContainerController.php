<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Container;

class ContainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $c = Container::paginate(10)->get();
        return view('showcontainer',['containers'=>$c]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newcontainer');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c = new Container;
        $c->container_no = $request->container_no;
        $c->agent_name = $request->agent_name;
        $c->origin_port = $request->origin_port;
        $c->destination_port = $request->destination_port;
        $c->contact  = $request->contact;
        $c->passport  = $request->passport;
        $c->delivery_agent  = $request->delivery_agent;
        $c->delivery_contact  = $request->delivery_contact;
        $c->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Container::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $c = Container::find($id);
        return view('editcontainer',['container'=>$c]);
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
        $c = Container::find($id);
        $c->container_no = $request->container_no;
        $c->agent_name = $request->agent_name;
        $c->origin_port = $request->origin_port;
        $c->destination_port = $request->destination_port;
        $c->contact  = $request->contact;
        $c->passport  = $request->passport;
        $c->delivery_agent  = $request->delivery_agent;
        $c->delivery_contact  = $request->delivery_contact;
        $c->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Container::destroy($id);
    }

}
