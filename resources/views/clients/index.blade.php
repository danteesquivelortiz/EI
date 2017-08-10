@extends('layouts.app')
@section('content')
<div class="container">

	<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Carrito de compras</h4>
        </div>
        <div class="modal-body">
        	<table style="width: 100%">
		    	<tr>
				<td>Aerolinea: </td>
				<td>Origen: </td>
				<td>Destino: </td>
				<td>Precio</td>
				<td>Cantidad:</td>
				</tr>
				@foreach($shopping_cart as $product)
				<tr>
					<td>{{$product->name}}</td>
					<td>{{$product->origen}}</td>
					<td>{{$product->destino}}</td>
					<td>${{$product->precio}} </td>
					<td>{{$product->qty}}</td>
				</tr>
				<br>

				@endforeach
			</table>
			<br>
			Total a pagar: {{$total}}
		    <div class="col-xs-12">

		    </div>
		    <div class="col-xs-12">
			</div>

        </div>
        <div class="modal-footer">
        {!! Form::open(['url' => '/reservations/', 'method' => 'POST', 'class'=>'inline-block']) !!}
        <input type="submit" class="btn btn-success" value="Comprar">
				{!! Form::close() !!}
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>

    </div>
  </div>

</div>
<div class="container">
	{!! Form::open(['url' => '/clients/', 'method' => 'GET', 'class'=>'inline-block']) !!}
		<div class="conteiner">
			<div class="col-md-2">
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Ver Carrito</button>
			</div>
				<div class="col-md-8">


				Nombre de la ciudad de destino:
				{{Form::text('destino','',['class'=>'form-control'])  }}

			</div>
			<div class="col-md-2">
				<br><input type="submit" name="ciudad" class="btn btn-success" value="Buscar">
			</div>
		</div>

	{!! Form::close() !!}
	@if($aerolineas)

	<div class="col-md-6">
		<h3>Vuelos disponibles</h3>
		@foreach($aerolineas as $aerolinea)
		<div class="col-md-6">
			<img class="col-md-12" height="150px"  src="/images/aerolineas/{{$aerolinea->image}}" alt="img-responsive" />
			<h3>{{$aerolinea->name}}</h3>
			<p>Origen: {{$aerolinea->origen}}</p>
			<p>Destino: {{$aerolinea->destino}}</p>
			<p>Despege: {{$aerolinea->salida}}-{{$aerolinea->horario}}</p>
			<p>Asientos: {{$aerolinea->asientos}}</p>
			<p>Precio: ${{$aerolinea->precio}}</p>
			{!! Form::open(['url' => '/shopping_carts/', 'method' => 'POST', 'class'=>'inline-block']) !!}
			<input type="hidden" name="aerolinea_id" value="{{$aerolinea->id}}">
			<input type="hidden" name="aerolinea_name" value="{{$aerolinea->name}}">
			<input type="hidden" name="aerolinea_precio" value="{{$aerolinea->precio}}">
			<input type="hidden" name="aerolinea_origen" value="{{$aerolinea->origen}}">
			<input type="hidden" name="aerolinea_destino" value="{{$aerolinea->destino}}">
			<label>Cantidad:</label>
			<input type="number" min="1" name="qty" required>
			<input type="submit" class="col.xs-12 btn btn-success" name="" value="Agregar al carrito">
			<input type="submit" name="ciudad" class="btn btn-success" value="{{$aerolinea->destino}}" style="visibility: hidden">
			{!! Form::close() !!}
			<br>
		</div>
		@endforeach

	</div>
	<div class="col-md-6">
		<h3>Sugerencia de hoteles</h3>
		@foreach($hoteles as $hotel)
		<div class="col-md-6">
			<img class="col-md-12" height="200px"  src="/images/hotels/{{$hotel->image}}" alt="img-responsive" />
			<h3>{{$hotel->name}}</h3>
			<p>Ciudad: {{$hotel->ciudad}}</p>
			<p>Habitación: {{$hotel->habitacion}}</p>
			<p>{{$hotel->description}}</p>
			<p>Precio: ${{$hotel->precio}}</p>
		</div>
		@endforeach
	</div>
@else

@endif


</div>
@endsection
