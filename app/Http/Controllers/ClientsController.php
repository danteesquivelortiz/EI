<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Aerolinea;
use App\Client;
use App\Order_product;
class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $shopping_cart=\Session::get('cart.orderProduct');
        if($shopping_cart){
          $total=Order_product::total();
          $subtotal=$total;
          $productSize=Order_product::productSize();
        }else{
          $total=0;
          $subtotal=0;
          $productSize=0;
          $shopping_cart=array();
        }
        $ciudad=\Request::get('destino');
        $destino=\Request::get('destino');
        $hoteles=Hotel::where('ciudad',$ciudad)->get();
        $aerolineas=Aerolinea::where('destino',$destino)->get();
        return view('clients.index',['hoteles'=>$hoteles,'aerolineas'=>$aerolineas,'shopping_cart'=>$shopping_cart,'total'=>$total,'productSize'=>$productSize,'subtotal'=>$subtotal]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clients.create');
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
        $client= new Client;
        $client->user_id=\Auth::id();;
        $client->nacimiento=$request->nacimiento;
        $client->direccion=$request->direccion;


        if($client->save()){
            return redirect('/clients');
        }else{
            return view('clients.create');
        }
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
