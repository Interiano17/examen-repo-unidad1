<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProveedorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos/mostrar', [ProductoController::class, 'mostrarProductos'])->name('productos.mostrar');

Route::get('/productos/crear', [ProductoController::class, 'crearProducto'])->name('productos.crear');

Route::post('/producto/guardar', [ProductoController::class, 'guardarProducto'])->name('producto.guardar');





Route::get('/empleados/mostrar', [EmpleadoController::class, 'mostrarEmpleados'])->name('empleados.mostrar');

Route::get('/empleados/crear', [EmpleadoController::class, 'crearEmpleado'])->name('empleados.crear');

Route::post('/empleado/guardar', [EmpleadoController::class, 'guardarEmpleado'])->name('empleado.guardar');





Route::get('/proveedores/mostrar', [ProveedorController::class, 'mostrarProveedores'])->name('proveedores.mostrar');

Route::get('/proveedores/crear', [ProveedorController::class, 'crearProveedor'])->name('proveedores.crear');

Route::post('/proveedor/guardar', [ProveedorController::class, 'guardarProveedor'])->name('proveedor.guardar');