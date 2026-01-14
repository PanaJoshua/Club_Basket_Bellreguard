@extends('plantilla_admin')

@section('titulo', 'Perfil de usuario')
@section('contenido')

<main>

    <section class="perfil_introduccion">
        <h1>Mi perfil</h1>
        <p>Gestiona tu información personal y preferencias</p>
    </section>

    <section class="perfil_contenedor">

        <article class="perfil_card">

            <div class="perfil_avatar">
                <img src="{{ asset('img/perfil/jugador1.png') }}" alt="Avatar usuario">
            </div>

            <h2>Joshua Fernández</h2>
            <p class="rol">Usuario registrado</p>

            <ul class="perfil_datos">
                <li><strong>Email:</strong> joshua@email.com</li>
                <li><strong>Miembro desde:</strong> 2024</li>
            </ul>

        </article>

        <article class="perfil_opciones">

            <h3>Opciones de cuenta</h3>

            <a href="#" class="opcion">Editar perfil</a>
            <a href="#" class="opcion">Cambiar contraseña</a>
            <a href="{{ route('inicio') }}" class="opcion cerrar">Cerrar sesión</a>

        </article>

    </section>

</main>

@endsection