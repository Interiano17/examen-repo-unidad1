<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function mostrarEmpleados(){
        $empleados = Empleado::all();
        return view('verempleados', compact('empleados'));
    }

    public function crearEmpleado(){
        return view('agregarempleado');
    }

    public function guardarEmpleado(Request $request){
        $nuevoEmpleado = new Empleado();
        $nuevoEmpleado->idPrestamo = $request->idPrestamo;
        $nuevoEmpleado->nombre = $request->nombre;
        $nuevoEmpleado->apellido = $request->apellido;
        $nuevoEmpleado->fechaIngreso = $request->fechaIngreso;
        $nuevoEmpleado->salario = $request->salario;
        $nuevoEmpleado->save();
        return redirect('/empleados/mostrar');
    }
}
