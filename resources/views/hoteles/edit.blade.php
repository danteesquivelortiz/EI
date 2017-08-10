@extends('layouts.app')
@section('content')
	{!! Form::open(['url' => '/hoteles/'.$hotel->id, 'method' => 'PATCH', 'class'=>'inline-block','files'=>true]) !!}
    <div class="conteiner">
    <div class="col-md-2"></div>
    <div class="col-md-8">
	Imagen del hotel:
	{!! Form::file('image') !!}

	Nombre del hotel:
	{{Form::text('name',$hotel->name,['class'=>'form-control'])  }}

	Nombre de la ciudad:
	{{Form::text('ciudad',$hotel->ciudad,['class'=>'form-control'])  }}

	Tipo de habitación:
	{{Form::text('habitacion',$hotel->habitacion,['class'=>'form-control'])  }}

	Descripción:
	{{Form::textarea('description',$hotel->description,['class'=>'form-control'])  }}

	Precio:
	{{Form::number('precio',$hotel->precio,['class'=>'form-control'])  }}

	<br><input type="submit" class="btn btn-success" value="Guardar">
	</div>
	</div>

	{!! Form::close() !!}
@endsection
