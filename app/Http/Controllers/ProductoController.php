<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
	//Métodos Vista (Retornan vistas).
	public function crearProducto()
	{
		//1. Establecer las variables necesarias para la vista.
		$categoria = new Categoria();
		$categorias = $categoria::all();
		
		//2. Retornar la vista con las variables.
		return view("models.producto.crear_producto", ["categorias" => $categorias]);
	}
	
	public function mostrarProductos()
	{
		//1. Establecer las variables necesarias para la vista.
		$producto = new Producto();
		$productos = $producto::all();
		
		//2. Retornar la vista con las variables.
		return view("models.producto.mostrar_productos", ["productos" => $productos]);
	}
	
	//Métodos Acción (Procesan datos desde formularios).
	public function save(Request $request)
	{ 
		$codigo = $request->input("codigo");
		$nombre = $request->input("nombre");
		$precio = $request->input("precio");
		$categoria = $request->input("categoria");

		$producto = new Producto();
		$producto->codigo = $codigo;
		$producto->nombre = $nombre;
		$producto->precio = $precio;
		$producto->categoria_id = $categoria;
		
		try {
			$producto->save();
			return redirect()->route("producto.vista.crearProducto")->with("mensaje", "Exitoso");
		} catch (\Exception $ex) {
			return redirect()->route("producto.vista.crearProducto")->with("mensaje", "Fallido");
		}
	}
}
