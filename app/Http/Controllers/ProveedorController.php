<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function mostrarProveedores(){
        $proveedores = Proveedor::all();
        return view('verproveedores', compact('proveedores'));
    }

    public function crearProveedor(){
        return view('agregarproveedor');
    }

    public function guardarProveedor(Request $request){
        $nuevoProveedor = new Proveedor();
        $nuevoProveedor->idProveedor = $request->idProveedor;
        $nuevoProveedor->nombre = $request->nombre;
        $nuevoProveedor->fechaRegistro = $request->fechaRegistro;
        $nuevoProveedor->telefono = $request->telefono;
        $nuevoProveedor->correo = $request->correo;
        $nuevoProveedor->save();
        return redirect('/proveedores/mostrar');
    }
}
