@extends('layouts.app')
@section('content')
<div class="container">
	@foreach($orders as $order)
	<div class="col-md-4">
		<p>Cliente: {{$order->user_id}}</p>>
		<p>Estado: {{$order->stauts}}</p>
 
		{!! Form::open(['url' => '/shopping_carts/', 'method' => 'POST', 'class'=>'inline-block']) !!}
		<!--<input type="hidden" name="category_id" value="{{$category->id}}">
		<input type="hidden" name="category_name" value="{{$category->name}}">
		<input type="hidden" name="category_description" value="{{$category->description}}">
		<!--<input type="number" name="qty">
		<input type="submit" class="col.xs-12 btn btn-success" name="" value="Agregar al carrito">-->
		{!! Form::close() !!}
	</div>
	@endforeach
	<div class="col-xs-12">
		{{$orders->links()}}
	</div>
</div>
@endsection
