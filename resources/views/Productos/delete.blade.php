<!-- resources/views/delete.blade.php -->

<h1>Eliminar Producto</h1>

<p>¿Estás seguro de que deseas eliminar el producto?</p>

<form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">Eliminar</button>
</form>

<a href="{{ route('productos.index') }}">Volver al listado de productos</a>

{{-- ya no es necesaria esta vista, pero la dejamos por las dudas --}}