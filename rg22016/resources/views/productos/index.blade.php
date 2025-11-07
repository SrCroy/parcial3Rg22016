<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
  </head>
</head>
<body class="container">
    <h1>Informe de productos</h1>
    <a href="{{ route('producto.create') }}">Agregar</a>
   <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">nombre</th>
        <th scope="col">predio</th>
        <th scope="col">categoria</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <th scope="row">{{ $producto->id }}</th>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->idCategoria->nombre }}</td>
            <td>
                <a href="{{ route('producto.edit', $producto->id )}}">Editar</a>
                <form action="{{ route('producto.destroy', $producto->id )}}" method="post"></form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>