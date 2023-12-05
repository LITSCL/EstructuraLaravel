@extends('layouts.app')

@section('contenido')
	<h1>Iniciar sesión (Auth -> login.blade.php)</h1>	
	
	<form action="{{ route('login') }}" method="POST">
		@csrf
		
		<table>
			<tr>
				<td>Rut</td>
				<td><input type="text" name="rut" required/></td>
			</tr>
			<tr>
				<td>Contraseña</td>
				<td><input type="password" name="password" required/></td>
			</tr>
		</table>
		<button>Login</button>
	</form>
@endsection
