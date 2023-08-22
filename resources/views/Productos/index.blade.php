<!DOCTYPE html>
<html>
<head>
    <title>ECOMERCE</title>

    <link href="{{ asset('/css/estilos.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="images/carrito.png">
    <link href="https://cdn.tailwindcss.com/2.2.16/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('layouts.header')
    <div class="w-fit m-auto">
    <h1 class="text-3xl">Vistazo General</h1>
    </div>

    <div class="card-container">
        @foreach($productos as $producto)
        <div class="card">
            <img src="{{ asset($producto->foto) }}" alt="Imagen del producto" class="card-image">
            <div class="card-content">
                <h2 class="card-title">{{ $producto->nombre }}</h2>
                <p class="card-description">{{ $producto->descripcion }}</p>
                <div class="card-buttons">
                    <a href="{{ route('productos.edit', $producto->id) }}" class="edit-button">Editar</a>
                    <a href="#" class="delete-button" data-id="{{ $producto->id }}">Eliminar</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="w-fit m-auto pt-0.5 mt-5 mb-5 no-underline">
        {{ $productos->links() }}
    </div>

    <div id="modal" class="modal">  
        <div class="modal-content">
            <span class="close">&times;</span>
            <h1>Eliminar Producto</h1>
            <p>¿Estás seguro de que deseas eliminar el producto?</p>
            <form id="delete-form" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-0.5 py-0.5 text-zinc-50 .bg-danger.bg-gradient">Eliminar</button>
            </form>
        </div>
    </div>

    @include('layouts.footer')

    <script src="{{ asset('/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
