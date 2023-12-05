@extends('layouts.app')

@section('contenido')
	<h1>Estas en Crear Categoria</h1>
	<form action="{{ route('categoria.accion.save') }}" method="POST">
		@csrf
		
		<table border="5px">
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="nombre" required/></td>
			</tr>
		</table>
		<button type="submit">Crear</button>
	</form>
	
	@if (session("mensaje") && session("mensaje") == "Exitoso")
		<strong class="alerta-verde">Categoria creada correctamente</strong>
	@elseif (session("mensaje") && session("mensaje") == "Fallido")
		<strong class="alerta-roja">Error al crear la categoria</strong>
	@else
		{{""}}
	@endif
@endsection