@extends('layouts.app')

@section('contenido')
	<h1>Estas en Crear Usuario (Auth -> register.blade.php)</h1>
	
	<form action="{{ route('register') }}" method="POST">
		@csrf
		
		<table border="5px">
			<tr>
				<td>Rut</td>
				<td><input type="text" name="rut" placeholder="19.757.106-3" required/></td>
			</tr>
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="nombre" required/></td>
			</tr>
			<tr>
				<td>Apellido</td>
				<td><input type="text" name="apellido" required/></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" required/></td>
			</tr>
			<tr>
				<td>Clave</td>
				<td><input type="password" name="clave" required/></td>
			</tr>
			<tr>
				<td>Tipo</td>
				<td><input type="text" name="tipo" required/></td>
			</tr>
		</table>
		<button type="submit">Crear</button>
	</form>

	@if (session("mensaje") && session("mensaje") == "Exitoso")
		<strong class="alerta-verde">Usuario creado correctamente</strong>
	@elseif (session("mensaje") && session("mensaje") == "Fallido")
		<strong class="alerta-roja">Error al crear el usuario</strong>
	@else
		{{""}}
	@endif
	
	{{ session(['mensaje' => '']) }} <!-- Se anula la sesión generada desde el controlador "RegisterController". -->
@endsection
