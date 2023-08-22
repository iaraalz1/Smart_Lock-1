<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Plantilla</title>
  <!-- Enlaza la hoja de estilos de Tailwind CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>


{{-- @section('content')
    @component('card')
        @slot('title')
            Título de la tarjeta
        @endslot

        Contenido de la tarjeta
    @endcomponent
@endsection --}}
{{-- probar esto para hacer plantillas reutilizables --}}


<body class="bg-gray-200">
  <header class="bg-white py-4">
    <div class="container mx-auto px-4">
      <!-- Contenedor del header -->
      <div class="flex justify-between items-center">
        <!-- Logo -->
        <h1 class="text-2xl font-bold">Mi Logo</h1>
        <!-- Buscador -->
        <input type="text" placeholder="Buscar" class="px-4 py-2 border border-gray-300 rounded">
      </div>
      <!-- Menú de navegación -->
      <nav class="flex justify-center mt-4">
        <a href="#" class="mr-4">Categorías</a>
        <a href="#" class="mr-4">Quiénes somos</a>
        <a href="#" class="mr-4">Contáctanos</a>
      </nav>
    </div>
  </header>
  
  <main class="container mx-auto px-4 py-8">
    <!-- Contenedor del contenido principal -->
    <h2 class="text-3xl font-bold mb-4">Contenido Principal</h2>
    <!-- Aquí va el contenido de la página -->
  </main>
  
  <footer class="bg-gray-900 text-white py-4">
    <div class="container mx-auto px-4">
      <!-- Contenedor del footer -->
      <p>&copy; {{ date('Y') }} Mi Empresa. Todos los derechos reservados.</p>
    </div>
  </footer>

  <!-- Incluye los scripts de Tailwind CSS y cualquier otro script que necesites -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
