<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('productos', function(){
//     return view("productos.index");
// });
Route::get('productos', [ProductosController::class, 'index']);
Route::get('productos/agregar', [ProductosController::class, 'agregar']);
Route::get('productos/{id}', [ProductosController::class, 'detalles']);
Route::post('productos', [ProductosController::class, 'guardar']);
Route::get('productos/{id}/editar', [ProductosController::class, 'editar']);
Route::put('productos/{id}', [ProductosController::class, 'actualizar']);
Route::get('productos/{id}/borrar', [ProductosController::class, 'borrar']);
Route::delete('productos/{id}', [ProductosController::class, 'borrarConfirmado']);

// Route::get('productos/{id}', function($id){
//     return "Producto $id";
// });
//Route::get('productos/{id}', [ProductosController::class, 'show']);


// Route::get('clientes/{id?}', function ($id = 0) {
//     return "Cliente $id";
// });
Route::resource("clientes",ClientesController::class);

Route::get("usuarios",[UsuariosController::class,'index']);