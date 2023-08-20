<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil | "{{ $user->name }}"</title>
    <link href="{{ asset('/css/estilos.css') }}" rel="stylesheet">
</head>

<body>
    @include('header')
    <div class="container mt-n1">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Perfil de "{{ $user->name }}"</div>

                    <div class="card-body">
                        <!-- Formulario para editar el nombre y el email -->
                        <form method="POST" action="{{ route('profile.update') }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ $user->name }}" required autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ $user->email }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">
                                Guardar Cambios
                            </button>
                        </form>

                        <hr>

                        <h4>Cambiar contraseña</h4>
                        <form method="POST" action="{{ route('profile.updatePassword') }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña
                                    actual</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="new_password" class="col-md-4 col-form-label text-md-right">Nueva
                                    contraseña</label>

                                <div class="col-md-6">
                                    <input id="new_password" type="password"
                                        class="form-control @error('new_password') is-invalid @enderror"
                                        name="new_password" required autocomplete="new-password">

                                    @error('new_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="new_password_confirmation"
                                    class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>

                                <div class="col-md-6">
                                    <input id="new_password_confirmation" type="password" class="form-control"
                                        name="new_password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Actualizar contraseña
                                    </button>
                                </div>
                            </div>
                        </form>

                        <hr>


                        <h4>Eliminar cuenta</h4>
                        <form method="POST" action="{{ route('profile.delete') }}"
                            onsubmit="return confirm('¿Estás seguro de que quieres eliminar tu cuenta? Esta acción no se puede deshacer.')">
                            <p>Una vez su cuenta sea borrada, todos sus recursos y datos se eliminarán de forma
                                permanente. Antes de borrar su cuenta, por favor descargue cualquier dato o información
                                que desee conservar.</p>
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Eliminar cuenta</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <a href="{{ route('index') }}" class="btn btn-primary">volver</a>
</body>

</html>
