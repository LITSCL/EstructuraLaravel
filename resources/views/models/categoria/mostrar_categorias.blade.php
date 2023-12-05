@extends('layouts.app')

@section('contenido')
	<h1>Listado de categorias</h1>	
	<table border="5px">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
		</tr>
	@foreach ($categorias as $categoria)
		<tr>
			<td>{{ $categoria->id }}</td>
			<td>{{ $categoria->nombre }}</td>
		</tr>
	@endforeach
	</table>
@endsection