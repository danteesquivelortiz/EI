@extends('layouts.app')
@section('content')
	{!! Form::open(['url' => '/aerolineas/', 'method' => 'POST', 'class'=>'inline-block']) !!}
    <div class="conteiner">
    <div class="col-md-2"></div>
    <div class="col-md-8">
	Nombre de la aerolinea:
	{{Form::text('name','',['class'=>'form-control'])  }}

	Origen del vuelo:
	{{Form::text('origen','',['class'=>'form-control'])  }}

	Destino del vuelo:
	{{Form::text('destino','',['class'=>'form-control'])  }}

	Fecha de salida:
	{{Form::date('salida','',['class'=>'form-control'])  }}

	Hora de salida:
	{{Form::text('horario','',['class'=>'form-control'])  }}

	Asientos disponibles:
	{{Form::text('asientos','',['class'=>'form-control'])  }}

	Precio del vuelo:
	{{Form::number('precio','',['class'=>'form-control'])  }}
	<br><input type="submit" class="btn btn-success" value="Guardar">
	</div>
	</div>
	
	{!! Form::close() !!}
@endsection 