<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order_product;
use App\Order;
use App\Reservation;
use App\Aerolinea;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\OrderConfirmation;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user=\Request::get(\Auth::id());
        $reservations=Reservation::where('client_id',\Auth::id())->get();
        return view('reservations.index',['reservations'=>$reservations]);
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
        $shopping_cart=\Session::get('cart.orderProduct');

        foreach ($shopping_cart as $products) {
          $reservation= new Reservation;
          $reservation->client_id=\Auth::id();
          $reservation->aerolinea_id=$products->aerolinea_id;
          $reservation->asientos=$products->qty;
          $reservation->pago=($products->precio*$products->qty);
            if($reservation->save()){

            }else{
                return redirect('/clients');
            }
        }
        //$sendTo=Auth::user()->email;
        //Mail::to($sendTo)->send(new OrderConfirmation($shopping_cart));
        //dd("enviado");
        \Session::forget('cart.orderProduct');
        return redirect('/reservations');
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
