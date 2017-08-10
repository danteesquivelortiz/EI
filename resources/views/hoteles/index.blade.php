@extends('layouts.app')
@section('content')
<div class="container">
	@foreach($hoteles as $hotel)
	<div class="col-md-4">
		<img class="col-xs-12" height="300px"  src="/images/hotels/{{$hotel->image}}" alt="" />
		<h3>{{$hotel->name}}</h3>
		<p>Ciudad: {{$hotel->ciudad}}</p>
		<p>Habitación: {{$hotel->habitacion}}</p>
		<p>{{$hotel->description}}</p>
		<p>Precio: ${{$hotel->precio}}</p>

		<input type="hidden" name="hotel_id" value="{{$hotel->id}}">
		<input type="hidden" name="hotel_name" value="{{$hotel->name}}">
		<input type="hidden" name="hotel_ciudad" value="{{$hotel->ciudad}}">
		<input type="hidden" name="hotel_habitacion" value="{{$hotel->habitacion}}">
		<input type="hidden" name="hotel_description" value="{{$hotel->description}}">
		<input type="hidden" name="hotel_precio" value="{{$hotel->precio}}">
		<a onclick ="eliminarHotel({{$hotel->id}})" class="btn btn-danger">Eliminar</a>
		<a href="{{url('/hoteles/'.$hotel->id.'/edit')}}" class="btn btn-warning">Editar</a>
	</div>
	@endforeach
	<div class="col-xs-12">
		{{$hoteles->links()}}
	</div>
</div>
@endsection
