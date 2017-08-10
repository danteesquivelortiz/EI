<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance. 
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /*public function __construct()
    {
        $this->middleware('Hoteles');
    } 

    public function __construct()
    {
        $this->middleware('Aerolineas');
    } 

    public function __construct()
    {
        $this->middleware('Viajero');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
}
