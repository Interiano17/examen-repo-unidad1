<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Agregar Producto</title>
</head>
<body>

<div class="container">
  <center><h1>Agregar nuevo producto</h1></center> 
</div>

<div class="container">

        <form action="{{route('producto.guardar')}}" method="POST">
            @csrf
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" class="form-control" required>
            <label for="precio" >Precio</label>
            <input type="number" name="precio" class="form-control" required>
            <label for="stock" >Stock</label>
            <input type="number" name="stock" class="form-control" required>
            <label for="pagaIsv">ISV</label>
            <input type="number" name="pagaIsv" class="form-control" required>
            
            <button class="btn btn-primary">Guardar</button>
            <a href={{ route('productos.mostrar') }} class="btn btn-success">Regresar</a>
            
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
