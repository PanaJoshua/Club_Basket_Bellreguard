@extends('plantilla')

@section('titulo', 'Equipos')
@section('contenido')

    <main>
        <section class="equipos_introduccion">
            <h1>Nuestros Equipos</h1>
            <p>Consulta la información de cada categoría y sus jugadores</p>
        </section>

        <section class="equipos_filtros">
            <button class="activo">Todos</button>
            <button>Infantil</button>
            <button>Cadete</button>
            <button>Junior</button>
            <button>Senior</button>
        </section>

        <section class="equipos_listado">

            <article class="equipo_card">
                <div class="equipo_imagen1"></div>
                <div class="equipo_info">
                    <span class="tag senior">Senior</span>
                    <h2>Senior Masculino</h2>
                    <p><strong>Entrenador:</strong> J. Martínez</p>
                    <p class="equipo-datos">👥 12 jugadores · 🏆 Liga Autonómica</p>
                    <a href="{{ route('plantilla_jugadores', 1) }}" class="btn-equipo">Ver plantilla</a>
                </div>
            </article>

            <article class="equipo_card">
                <div class="equipo_imagen2"></div>
                <div class="equipo_info">
                    <span class="tag junior">Junior</span>
                    <h2>Junior Masculino</h2>
                    <p><strong>Entrenador:</strong> J. Martínez</p>
                    <p class="equipo-datos">👥 12 jugadores · 🏆 Liga Autonómica</p>
                    <a href="{{ route('plantilla_jugadores', 2) }}" class="btn-equipo">Ver plantilla</a>
                </div>
            </article>

            <article class="equipo_card">
                <div class="equipo_imagen3"></div>
                <div class="equipo_info">
                    <span class="tag cadete">Cadete</span>
                    <h2>Cadete Masculino</h2>
                    <p><strong>Entrenador:</strong> J. Martínez</p>
                    <p class="equipo-datos">👥 12 jugadores · 🏆 Liga Autonómica</p>
                    <a href="{{ route('plantilla_jugadores', 3) }}" class="btn-equipo">Ver plantilla</a>
                </div>
            </article>

            <article class="equipo_card">
                <div class="equipo_imagen4"></div>
                <div class="equipo_info">
                    <span class="tag infantil">Infantil</span>
                    <h2>Infantil Masculino</h2>
                    <p><strong>Entrenador:</strong> J. Martínez</p>
                    <p class="equipo-datos">👥 12 jugadores · 🏆 Liga Autonómica</p>
                    <a href="{{ route('plantilla_jugadores', 4) }}" class="btn-equipo">Ver plantilla</a>
                </div>
            </article>

            <article class="equipo_card">
                <div class="equipo_imagen5"></div>
                <div class="equipo_info">
                    <span class="tag senior">Senior</span>
                    <h2>Senior Femenino</h2>
                    <p><strong>Entrenador:</strong> J. Martínez</p>
                    <p class="equipo-datos">👥 12 jugadores · 🏆 Liga Autonómica</p>
                    <a href="{{ route('plantilla_jugadores', 5) }}" class="btn-equipo">Ver plantilla</a>
                </div>
            </article>

            <article class="equipo_card">
                <div class="equipo_imagen6"></div>
                <div class="equipo_info">
                    <span class="tag junior">Junior</span>
                    <h2>Junior Femenino</h2>
                    <p><strong>Entrenador:</strong> J. Martínez</p>
                    <p class="equipo-datos">👥 12 jugadores · 🏆 Liga Autonómica</p>
                    <a href="{{ route('plantilla_jugadores', 6) }}" class="btn-equipo">Ver plantilla</a>
                </div>
            </article>

        </section>
    </main>

@endsection