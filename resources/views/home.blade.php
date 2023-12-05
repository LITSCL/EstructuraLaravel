@extends('layouts.app')

@section('contenido')
	<h1>Estas en Index (Home)</h1>
	
	@if (Auth::check() && Auth::user()->tipo == "Administrador")
		<br><h1>Bienvenido Administrador</h1>
		<form action="{{ route('logout') }}" method="POST">
	 		@csrf
	 		
	 		<br/>
	 		<button type="submit">Deslogear</button>
		</form>
	@elseif (Auth::check() && Auth::user()->tipo == "Cliente")
		<br><h1>Bienvenido Cliente</h1>
		<form action="{{ route('logout') }}" method="POST">
	 		@csrf
	 		
	 		<br/>
	 		<button type="submit">Deslogear</button>
		</form>
	@else
		<br><h1>No hay sesiones activas</h1>
	@endif
@endsection
