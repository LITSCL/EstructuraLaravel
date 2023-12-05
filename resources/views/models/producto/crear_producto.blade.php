@extends('layouts.app')

@section('contenido')
	<h1>Estas en Crear Producto</h1>
	<form action="{{ route('producto.accion.save') }}" method="POST">
		@csrf
		
		<table border="5px">
			<tr>
				<td>Codigo</td>
				<td><input type="text" name="codigo" required/></td>
			</tr>
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="nombre" required/></td>
			</tr>
			<tr>
				<td>Precio</td>
				<td><input type="number" name="precio" required/></td>
			</tr>
			<tr>
				<td>Categoria</td>
				<td>
					<select name="categoria">
					@foreach ($categorias as $categoria)
						<option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
					@endforeach
					</select>
				</td>
			</tr>
		</table>
		<button type="submit">Crear</button>
	</form>
	
	@if (session("mensaje") && session("mensaje") == "Exitoso")
		<strong class="alerta-verde">Producto creado correctamente</strong>
	@elseif (session("mensaje") && session("mensaje") == "Fallido")
		<strong class="alerta-roja">Error al crear el producto</strong>
	@else
		{{""}}
	@endif
@endsection