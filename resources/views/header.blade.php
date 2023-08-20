<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu desplegable</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <nav class="menu">
        <section class="menu__container">
            <div class="logo_img_text">
                <img class="menu_logo_img" src="assets/img/logo_smartlock.png" alt="">
                <h1 class="menu_logo_text">Smart <span>Lock</span></h1>
            </div>
            <ul class="menu__links">
                <li class="menu__item">
                    <a href="{{ route('index') }}" class="menu__link">Home</a>
                </li>

                <li class="menu__item menu__item--show">
                    <a href="#" class="menu__link">Perfil <img src="assets/arrow.svg" class="menu__arrow"></a>

                    <ul class="menu__nesting">
                        @guest
                        <li class="menu__inside">
                            <a href="{{ route('login') }}" class="menu__link menu__link--inside">Iniciar Sesión</a>
                        </li>
                        <li class="menu__inside">
                            <a href="{{ route('register') }}" class="menu__link menu__link--inside">Crear Cuenta</a>
                        </li>
                        @else
                        <li class="menu__inside">
                            <a href="{{ route('dashboard') }}" class="menu__link menu__link--inside">Panel De Administracion</a>
                        </li>
                        <li class="menu__inside">
                            <a href="{{ route('profile.show', ['user' => Auth::user()->id]) }}" class="menu__link menu__link--inside">
                                @if (Auth::check())
                                    Mi Perfil
                                @else
                                    Mi Cuenta
                                @endif
                            </a>
                        </li>
                        <li class="menu__inside">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="menu__link menu__link--inside menu__inside" style="background: none; border: none; cursor: pointer; color: #your-color-here;">Cerrar Sesión</button>
                            </form>
                        </li>
                        @endguest
                    </ul>
                </li>

                <li class="menu__item  menu__item--show">
                    <a href="#" class="menu__link">Projects  <img src="assets/arrow.svg" class="menu__arrow"></a>

                    <ul class="menu__nesting">
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">Projects 1</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">Projects 2</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">Projects 3</a>
                        </li>
                    </ul>
                </li>

                <li class="menu__item">
                    <a href="#" class="menu__link">Contact</a>
                </li>

            </ul>

            <div class="menu__hamburguer">
                <img src="assets/menu.svg" class="menu__img">
            </div>
        </section>
    </nav>

    <script src="js/app.js"></script>
</body>
</html>
