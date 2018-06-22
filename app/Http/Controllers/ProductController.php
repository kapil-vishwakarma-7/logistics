<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $p = Product::paginate($id);
        return view('showproducts',['products'=>$p]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newproducts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p = new Product;
        $p->product_name  = $request->product_name ;
        $p->weight  = $request->weight ;
        $p->quantity  = $request->quantity ;
        $p->each_cost  = $request->each_cost ;
        $p->total  = $request->total;
        $p->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $p = Product::find($id);
        return view('showproduct',['product'=>$p]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p = Product::find($id);
        return view('editproduct',['product'=>$p]);
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
        $p = Product::find($id);
        $p->product_name  = $request->product_name ;
        $p->weight  = $request->weight ;
        $p->quantity  = $request->quantity ;
        $p->each_cost  = $request->each_cost ;
        $p->total  = $request->total;
        $p->save();
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Product::find($id);
        $p->delete();
    }
    public function filter(){
        
    }
}
