<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
	//Métodos Vista (Retornan vistas).
	public function crearCategoria()
	{
		return view("models.categoria.crear_categoria");
	}
	
	public function mostrarCategorias()
	{
		//1. Establecer las variables necesarias para la vista.
		$categoria = new Categoria();	
		$categorias = $categoria::all();
		
		//2. Retornar la vista con las variables.
		return view("models.categoria.mostrar_categorias", ["categorias" => $categorias]);
	}
	
	//Métodos Acción (Procesan datos desde formularios).
	public function save(Request $request)
	{
		$nombre = $request->input("nombre");

		$categoria = new Categoria();
		$categoria->nombre = $nombre;
		
		try {
			$categoria->save();
			return redirect()->route("categoria.vista.crearCategoria")->with("mensaje", "Exitoso");
		} catch (\Exception $ex) {
			return redirect()->route("categoria.vista.crearCategoria")->with("mensaje", "Fallido");
		}	
	}
}
