@extends('layouts.app')

@section('contenido')
	<h1>Listado de productos</h1>	
	<table border="5px">
		<tr>
			<th>Codigo</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Categoria</th>
		</tr>
	@foreach ($productos as $producto)
		<tr>
			<td>{{ $producto->codigo }}</td>
			<td>{{ $producto->nombre }}</td>
			<td>{{ $producto->precio }}</td>
			<td>{{ $producto->getCategoria->nombre }}</td>
		</tr>
	@endforeach
	</table>
@endsection