<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Productos</title>
</head>
<body>

<div class="container">
  <center><h1>Productos</h1></center> 
</div>

<div class="container">
    <center><a href={{ route('productos.crear') }}><button type="button" class="btn btn-primary">Agregar nuevo producto</button></a>
    <a href={{ route('empleados.mostrar') }}><button type="button" class="btn btn-info">Ver empleados</button></a>
    <a href={{ route('proveedores.mostrar') }}><button type="button" class="btn btn-success">Ver proveedores</button></a></center>
</div>

<div class="container">
    <table class="table">
        <thead>
            <th scope="col" name="codigo">ID</th>
            <th scope="col" name="nombre">Descripción</th>
            <th scope="col" name="tipoElectrodomestico">Precio</th>
            <th scope="col" name="tipoElectrodomestico">Stock</th>
            <th scope="col" name="tipoElectrodomestico">ISV</th>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td>{{ $producto->pagaIsv }}</td>
                </tr>
                @endforeach
        </tbody>
      
      </table>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
