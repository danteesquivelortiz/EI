@extends('layouts.app')
@section('content')
<div class="container">
		<h3>Compras realizadas</h3>
    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th>Folio</th>
    			<th>Asientos</th>
    			<th>Pago</th>
    		</tr>
    	</thead>
    	<tbody>
    		@foreach($reservations as $reservation)
    		<tr>
    			<td>{{$reservation->id}}</td>
    			<td>{{$reservation->asientos}}</td>
          <td>${{$reservation->pago}}</td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>
</div>
@endsection
