<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Proveedores</title>
</head>
<body>

<div class="container">
  <center><h1>Proveedores</h1></center> 
</div>

<div class="container">
    <center>
        <a href={{ route('proveedores.crear') }}><button type="button" class="btn btn-primary">Agregar nuevo proveedor</button></a>
        <a href={{ route('productos.mostrar') }}><button type="button" class="btn btn-danger">Ver productos</button></a>
        <a href={{ route('empleados.mostrar') }}><button type="button" class="btn btn-info">Ver empleados</button></a></center>
    </center> 
  </div>

<div class="container">
    <table class="table">
        <thead>
            <th scope="col" name="codigo">ID</th>
            <th scope="col" name="nombre">Nombre</th>
            <th scope="col" name="tipoElectrodomestico">Fecha de registro</th>
            <th scope="col" name="tipoElectrodomestico">Teléfono</th>
            <th scope="col" name="tipoElectrodomestico">Correo</th>
        <tbody>
            @foreach ($proveedores as $proveedor)
                <tr>
                    <td>{{ $proveedor->idProveedor }}</td>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>{{ $proveedor->fechaRegistro }}</td>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->correo }}</td>
                </tr>
                @endforeach
        </tbody>
      
      </table>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
