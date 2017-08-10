@extends('layouts.app')
@section('content')
<div class="container">
	@foreach($aerolineas as $aerolinea)
	<div class="col-md-4">
		<img class="col-xs-12" height="200px"  src="/images/aerolineas/{{$aerolinea->image}}" alt="" />
		<h3>{{$aerolinea->name}}</h3>
		<p>Origen: {{$aerolinea->origen}}</p>
		<p>Destino: {{$aerolinea->destino}}</p>
		<p>Fecha de salida: {{$aerolinea->salida}}-{{$aerolinea->horario}}</p>
		<p>Asientos: {{$aerolinea->asientos}}</p>
		<p>Precio: ${{$aerolinea->precio}}</p>

		<input type="hidden" name="aerolinea_id" value="{{$aerolinea->id}}">
		<input type="hidden" name="aerolinea_name" value="{{$aerolinea->name}}">
		<input type="hidden" name="aerolinea_origen" value="{{$aerolinea->origen}}">
		<input type="hidden" name="aerolinea_destino" value="{{$aerolinea->destino}}">
		<input type="hidden" name="aerolinea_salida" value="{{$aerolinea->salida}}">
		<input type="hidden" name="aerolinea_horario" value="{{$aerolinea->horario}}">
		<input type="hidden" name="aerolinea_asientos" value="{{$aerolinea->asientos}}">
		<input type="hidden" name="aerolinea_precio" value="{{$aerolinea->precio}}">
		<a onclick ="eliminarAerolinea({{$aerolinea->id}})" class="btn btn-danger">Eliminar</a>
		<a href="{{url('/aerolineas/'.$aerolinea->id.'/edit')}}" class="btn btn-warning">Editar</a>
	</div>
	@endforeach
	<div class="col-xs-12">
		{{$aerolineas->links()}}
	</div>
</div>
@endsection
