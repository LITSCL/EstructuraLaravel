<?php const TIME_UPDATE_CSS = "22:10"?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css?' . TIME_UPDATE_CSS) }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/styles.css?' . TIME_UPDATE_CSS) }}" rel="stylesheet">
</head>
<body>
    <div id="app">
		<header>
			<nav>
				<ul>
					<li><a href="{{ route('home') }}">Inicio</a></li>
					<li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
					<li><a href="{{ route('register') }}">Crear Usuario</a></li>
					<li><a href="{{ route('producto.vista.crearProducto') }}">Crear Producto</a></li>
					<li><a href="{{ route('categoria.vista.crearCategoria') }}">Crear Categoria</a></li>
					<li><a href="{{ route('usuario.vista.mostrarUsuarios') }}">Mostrar Usuarios</a></li>
					<li><a href="{{ route('producto.vista.mostrarProductos') }}">Mostrar Productos</a></li>
					<li><a href="{{ route('categoria.vista.mostrarCategorias') }}">Mostrar Categorias</a></li>
					<li><a href="{{ route('usuario.vista.panelCliente') }}">Panel Cliente</a></li>
					<li><a href="{{ route('usuario.vista.panelAdministrador') }}">Panel Administrador</a></li>
				</ul>
			</nav>
		</header>
        <main class="py-4">
            @yield('contenido')
        </main>
    </div>
</body>
</html>
