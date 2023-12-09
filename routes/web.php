<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get("/", [App\Http\Controllers\HomeController::class, "home"])->name("home");

Route::get("/usuario/mostrar-usuarios", [App\Http\Controllers\UsuarioController::class, "mostrarUsuarios"])->name("usuario.vista.mostrarUsuarios");
Route::get("/usuario/panel-administrador", [App\Http\Controllers\UsuarioController::class, "panelAdministrador"])->name("usuario.vista.panelAdministrador")->middleware("auth"); //Solo se puede acceder a este método si se esta logeado.
Route::get("/usuario/panel-cliente", [App\Http\Controllers\UsuarioController::class, "panelCliente"])->name("usuario.vista.panelCliente")->middleware("auth"); //Solo se puede acceder a este método si se esta logeado.

Route::get("/categoria/crear-categoria", [App\Http\Controllers\CategoriaController::class, "crearCategoria"])->name("categoria.vista.crearCategoria");
Route::get("/categoria/mostrar-categorias", [App\Http\Controllers\CategoriaController::class, "mostrarCategorias"])->name("categoria.vista.mostrarCategorias");
Route::post("/categoria/crear", [App\Http\Controllers\CategoriaController::class, "save"])->name("categoria.accion.save");

Route::get("/producto/producto-categoria", [App\Http\Controllers\ProductoController::class, "crearProducto"])->name("producto.vista.crearProducto");
Route::get("/producto/mostrar-productos", [App\Http\Controllers\ProductoController::class, "mostrarProductos"])->name("producto.vista.mostrarProductos");
Route::post("/producto/crear", [App\Http\Controllers\ProductoController::class, "save"])->name("producto.accion.save");
