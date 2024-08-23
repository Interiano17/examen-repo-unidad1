<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Agregar proveedor</title>
</head>
<body>

<div class="container">
  <center><h1>Agregar nuevo proveedor</h1></center> 
</div>

<div class="container">

        <form action="{{route('proveedor.guardar')}}" method="POST">
            @csrf
            <label for="idProveedor">ID</label>
            <input type="number" name="idProveedor" class="form-control" required>
            <label for="nombre" >Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            <label for="fechaRegistro" >Fecha de registro</label>
            <input type="date" name="fechaRegistro" class="form-control" required>
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" class="form-control" required>
            <label for="correo">Correo</label>
            <input type="email" name="correo" class="form-control" required>
            
            <button class="btn btn-primary">Guardar</button>
            <a href={{ route('proveedores.mostrar') }} class="btn btn-success">Regresar</a>
            
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
