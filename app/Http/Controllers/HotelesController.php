<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
class HotelesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hoteles= Hotel::paginate(6);
        return view('hoteles.index',['hoteles'=>$hoteles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hoteles.create');
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
        $hotel= new Hotel;
        $hotel->name=$request->name;
        $hotel->ciudad=$request->ciudad;
        $hotel->habitacion=$request->habitacion;
        $hotel->description=$request->description;
        $hotel->precio=$request->precio;
        if($hotel->save()){
            return redirect('/hoteles');
        }else{
            return view('hoteles.create');
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
        $hotel= Hotel::find($id);
        return view('hoteles.edit',['hotel'=>$hotel]);
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
        $hotel= Hotel::find($id);
        $hotel->name=$request->name;
        $hotel->ciudad=$request->ciudad;
        $hotel->habitacion=$request->habitacion;
        $hotel->description=$request->description;
        $hotel->precio=$request->precio;

        if($request->file('image')){
          $file=$request->file('image');
          $name=$hotel->id.'_'.time().'.'.$file->getClientOriginalExtension();
          $path=public_path().'/images/hotels';
          $file->move($path,$name);
          $hotel->image=$name;
        }

        if($hotel->save()){
            return redirect('/hoteles');
        }else{
            return view('hoteles.edit',['hotel'=>$hotel]);
        }
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
        Hotel::destroy($id);
        return redirect('/hoteles');
    }
}
