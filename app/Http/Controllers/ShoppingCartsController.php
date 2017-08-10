<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aerolinea;
use App\Order_product;

class ShoppingCartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $aerolinea= new Aerolinea;
        $aerolinea->aerolinea_id=$request->aerolinea_id;
        $aerolinea->name = $request->aerolinea_name;
        $aerolinea->precio= $request->aerolinea_precio;
        $aerolinea->origen= $request->aerolinea_origen;
        $aerolinea->destino= $request->aerolinea_destino;
        $aerolinea->qty= $request->qty;
        \Session::push('cart.orderProduct',$aerolinea);

        return redirect('/clients?destino='.$request->ciudad);
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
