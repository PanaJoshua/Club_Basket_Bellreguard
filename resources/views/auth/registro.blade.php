@extends('plantilla')

@section('titulo', 'Login')
@section('contenido')

<main class="acceso">

    <section class="acceso_contenedor acceso_unico">

        <section class="registro">
            <h1>Crear cuenta</h1>

            <form action="#" method="post" class="form_registro">

                <div class="campo">
                    <input type="text" name="nombre" placeholder="Nombre completo" required>
                </div>

                <div class="campo">
                    <input type="email" name="email" placeholder="Correo electrónico" required>
                </div>

                <div class="campo">
                    <input type="password" name="password" placeholder="Contraseña" required>
                </div>

                <a href="{{ route('login') }}" class="btn_principal">Registrarse</a>

                <a href="{{ route('login') }}" class="enlace">¿Ya tienes cuenta? Inicia sesión</a>

            </form>
        </section>

    </section>

    <section class="acceso_info">
        <p>
            Crea una cuenta para acceder a funcionalidades exclusivas del
            Club Básquet Bellreguard
        </p>
    </section>

</main>

@endsection