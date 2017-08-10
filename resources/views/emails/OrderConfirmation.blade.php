Tu pedido:
<table class="table table-hover">
	<thead>
		<tr>
			<th>Aerolinea</th>
			<th>Asientos</th>
			<th>Precio</th>
		</tr>
	</thead>
	<tbody>
		@foreach($shopping_cart as $product)
		<tr>
			<td>{{$product->name}}</td>
			<td>{{$product->precio}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
