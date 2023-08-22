<!DOCTYPE html>
<html>
<head>
    <title>Editar producto</title>
</head>
<body>
    <h1>Editar producto</h1>

    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Campos del formulario -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}"><br>

        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" value="{{ $producto->marca }}"><br>

        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" value="{{ $producto->modelo }}"><br>

        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" value="{{ $producto->precio }}"><br>

        <label for="stock">Stock:</label>
        <input type="text" id="stock" name="stock" value="{{ $producto->stock }}"><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion">{{ $producto->descripcion }}</textarea><br>

        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto"><br>

        @if ($producto->foto)
    <img src="{{ asset($producto->foto) }}" alt="Imagen actual del producto" width="200">
    @endif

        <button type="submit">Guardar cambios</button>
    </form>
</body>
</html>
