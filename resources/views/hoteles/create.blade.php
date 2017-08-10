@extends('layouts.app')
@section('content')
	{!! Form::open(['url' => '/hoteles/', 'method' => 'POST', 'class'=>'inline-block']) !!}
    <div class="conteiner">
    <div class="col-md-2"></div>
    <div class="col-md-8">

	Nombre del hotel:
	{{Form::text('name','',['class'=>'form-control'])  }}

	Nombre de la ciudad:
	{{Form::text('ciudad','',['class'=>'form-control'])  }}

	Tipo de habitación:
	{{Form::text('habitacion','',['class'=>'form-control'])  }}

	Descripción:
	{{Form::textarea('description','',['class'=>'form-control'])  }}

	Precio:
	{{Form::number('precio','',['class'=>'form-control'])  }}

	<br><input type="submit" class="btn btn-success" value="Guardar">
	</div>
	</div>
	
	{!! Form::close() !!}
@endsection 