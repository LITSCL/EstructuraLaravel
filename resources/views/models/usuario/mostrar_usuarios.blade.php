@extends('layouts.app')

@section('contenido')
	<h1>Listado de usuarios</h1>
	<table border="5px">
		<tr>
			<th>Rut</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>Clave</th>
			<th>Tipo</th>
		</tr>
	@foreach ($usuarios as $usuario)
		<tr>
			<td>{{ $usuario->rut }}</td>
			<td>{{ $usuario->nombre }}</td>
			<td>{{ $usuario->apellido }}</td>
			<td>{{ $usuario->email }}</td>
			<td>{{ $usuario->clave }}</td>
			<td>{{ $usuario->tipo }}</td>
		</tr>
	@endforeach
	</table>
@endsection