<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class UsuarioController extends Controller
{
	//Métodos Vista (Retornan vistas).
	public function mostrarUsuarios()
	{
		//1. Establecer las variables necesarias para la vista.
		$usuario = new Usuario();
		$usuarios = $usuario::all();
		
		//2. Retornar la vista con las variables.
		return view("models.usuario.mostrar_usuarios", ["usuarios" => $usuarios]);
	}
	
	public function panelAdministrador()
	{
		$usuario = Auth::user();
		
		if ($usuario->tipo == "Administrador") { //Verificando que el usuario loegeado sea de tipo "Administrador".
			return view("models.usuario.panel_administrador");
		}
		else {
			return view("home");
		}	
	}
	
	public function panelCliente()
	{
		$usuario = Auth::user();
		
		if ($usuario->tipo == "Cliente") { //Verificando que el usuario loegeado sea de tipo "Cliente".
			return view("models.usuario.panel_cliente");
		}
		else {
			return view("home");
		}	
	}
}
