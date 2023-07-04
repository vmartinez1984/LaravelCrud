<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        return view("productos.index");
    }

    public function detalles($id){
        return view("productos.detalles", ['productoId'=> $id]);
    }

    public function agregar(){
        return view("productos.agregar");
    }

    public function guardar(Request $request){
        echo "<pre>";
        print_r($request->all());
        echo "</pre>";
    }

    public function editar($id){
        return view("productos.editar", ['id'=> $id]);
    }

    public function actualizar(Request $request, $id){
        echo "<pre>";
        echo $id;
        print_r($request->all());
        echo "</pre>";
    }

    public function borrar($id){
        return view("productos.borrar", ['id'=> $id]);
    }

    public function borrarConfirmado($id){
        return view("productos.borrarConfirmado",['id'=>$id]);
    }
}
