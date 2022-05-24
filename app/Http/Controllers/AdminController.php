<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type_product = Product::where('type_id',1)->get();
        $type_product2 = Product::where('type_id',2)->get();
        $type_product3 = Product::where('type_id',3)->get();
        $type_product4 = Product::where('type_id',4)->get();

            $CountFruit =  count($type_product);
            $CountVegatables = count($type_product2);
            $CountJuices  = count($type_product3);
            $CountDried = count($type_product4);
            return view('admin.index',['CountFruit'=>$CountFruit,'CountVegatables'=>$CountVegatables,'CountJuices'=>$CountJuices,'CountDried'=>$CountDried]);
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
    public function store()
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
