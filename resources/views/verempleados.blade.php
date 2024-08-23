<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Empleados</title>
</head>
<body>

<div class="container">
  <center><h1>Empleados</h1></center> 
</div>

<div class="container">
    <center>
        <a href={{ route('empleados.crear') }}><button type="button" class="btn btn-primary">Agregar nuevo empleado</button></a>
        <a href={{ route('productos.mostrar') }}><button type="button" class="btn btn-danger">Ver productos</button></a>
        <a href={{ route('proveedores.mostrar') }}><button type="button" class="btn btn-success">Ver proveedores</button></a></center>
    </center> 
  </div>

<div class="container">
    <table class="table">
        <thead>
            <th scope="col" name="codigo">ID</th>
            <th scope="col" name="nombre">Nombre</th>
            <th scope="col" name="tipoElectrodomestico">Apellido</th>
            <th scope="col" name="tipoElectrodomestico">Fecha de ingreso</th>
            <th scope="col" name="tipoElectrodomestico">Salario</th>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->idPrestamo }}</td>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->apellido }}</td>
                    <td>{{ $empleado->fechaIngreso }}</td>
                    <td>{{ $empleado->salario }}</td>
                </tr>
                @endforeach
        </tbody>
      
      </table>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
