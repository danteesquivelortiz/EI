@extends('layouts.app')
@section('content')
	{!! Form::open(['url' => '/clients/', 'method' => 'POST', 'class'=>'inline-block']) !!}
    <div class="conteiner">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      
	Fecha de nacimiento:
	{{Form::date('nacimiento','',['class'=>'form-control'])  }}

  Dirección:
	{{Form::text('direccion','',['class'=>'form-control'])  }}

	<br><input type="submit" class="btn btn-success" value="Guardar">
	</div>
	</div>

	{!! Form::close() !!}
@endsection
