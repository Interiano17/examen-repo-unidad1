<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function mostrarProductos(){
        $productos = Producto::all();
        return view('verproductos', compact('productos'));
    }

    public function crearProducto(){
        return view('agregarproducto');
    }

    public function guardarProducto(Request $request){
        $nuevoProducto = new Producto();
        $nuevoProducto->descripcion = $request->descripcion;
        $nuevoProducto->precio = $request->precio;
        $nuevoProducto->stock = $request->stock;
        $nuevoProducto->pagaIsv = $request->pagaIsv;
        $nuevoProducto->save();
        return redirect('/productos/mostrar');
    }
}
