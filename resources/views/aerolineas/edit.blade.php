@extends('layouts.app')
@section('content')
	{!! Form::open(['url' => '/aerolineas/'.$aerolinea->id, 'method' => 'PATCH', 'class'=>'inline-block','files'=>true]) !!}
    <div class="conteiner">
    <div class="col-md-2"></div>
    <div class="col-md-8">
	Imagen de la aerolinea:	
	{!! Form::file('image') !!}

	Nombre de la aerolinea:
	{{Form::text('name',$aerolinea->name,['class'=>'form-control'])  }}

	Origen del vuelo:
	{{Form::text('origen',$aerolinea->origen,['class'=>'form-control'])  }}

	Destino del vuelo:
	{{Form::text('destino',$aerolinea->destino,['class'=>'form-control'])  }}

	Fecha de salida:
	{{Form::date('salida',$aerolinea->salida,['class'=>'form-control'])  }}

	Hora de salida:
	{{Form::text('horario',$aerolinea->horario,['class'=>'form-control'])  }}

	Asientos disponibles:
	{{Form::text('asientos',$aerolinea->asientos,['class'=>'form-control'])  }}

	Precio del vuelo:
	{{Form::number('precio',$aerolinea->precio,['class'=>'form-control'])  }}

	<br><input type="submit" class="btn btn-success" value="Guardar">
	</div>
	</div>

	{!! Form::close() !!}
@endsection
