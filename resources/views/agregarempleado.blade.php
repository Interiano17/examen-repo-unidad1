<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Agregar empleado</title>
</head>
<body>

<div class="container">
  <center><h1>Agregar nuevo empleado</h1></center> 
</div>

<div class="container">

        <form action="{{route('empleado.guardar')}}" method="POST">
            @csrf
            <label for="idPrestamo">ID</label>
            <input type="number" name="idPrestamo" class="form-control" required>
            <label for="nombre" >Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            <label for="apellido" >Apellido</label>
            <input type="text" name="apellido" class="form-control" required>
            <label for="fechaIngreso">Fecha de Ingreso</label>
            <input type="date" name="fechaIngreso" class="form-control" required>
            <label for="salario">Salario</label>
            <input type="number" name="salario" class="form-control" required>
            
            <button class="btn btn-primary">Guardar</button>
            <a href={{ route('empleados.mostrar') }} class="btn btn-success">Regresar</a>
            
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
