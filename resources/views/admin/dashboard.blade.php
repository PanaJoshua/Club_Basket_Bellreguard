@extends('plantilla_admin')

@section('titulo', 'Dashboard')
@section('contenido')

<main class="admin_dashboard">

    <section class="dashboard_intro">
        <h1>Panel de administración</h1>
        <p>Gestión interna del Club Básquet Bellreguard</p>
    </section>

    <section class="dashboard_resumen">

        <article class="resumen_card">
            <span class="icono">🏀</span>
            <h2>Equipos</h2>
            <p>8</p>
        </article>

        <article class="resumen_card">
            <span class="icono">📅</span>
            <h2>Partidos</h2>
            <p>24</p>
        </article>

        <article class="resumen_card">
            <span class="icono">👤</span>
            <h2>Jugadores</h2>
            <p>120</p>
        </article>

        <article class="resumen_card">
            <span class="icono">📊</span>
            <h2>Estadísticas</h2>
            <p>Registradas</p>
        </article>

    </section>

    <section class="dashboard_acciones">

        <a href="{{ route('admin.equipos') }}" class="accion_card">
            <h3>Gestionar equipos</h3>
            <p>Crear, editar o eliminar equipos</p>
        </a>

        <a href="{{ route('admin.partidos') }}" class="accion_card">
            <h3>Gestionar partidos</h3>
            <p>Registrar partidos y resultados</p>
        </a>

        <a href="{{ route('admin.estadisticas') }}" class="accion_card">
            <h3>Registrar estadísticas</h3>
            <p>Introducir estadísticas de jugadores</p>
        </a>

    </section>

</main>

@endsection