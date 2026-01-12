<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Panel de administración del Club Básquet Bellreguard">
    <title>Admin | Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin/dashboard.css') }}">
</head>
<body>

<header>
    <a href="{{ route('inicio') }}">
        <img src="{{ asset('img/admin/dashboard/logotipo.png') }}" alt="Logotipo del club">
    </a>

    <ul>
        <li><a href="{{ route('dashboard') }}">Panel de control</a></li>
        <li><a href="{{ route('admin.equipos') }}">Equipos</a></li>
        <li><a href="{{ route('admin.partidos') }}">Partidos</a></li>
        <li><a href="{{ route('admin.estadisticas') }}">Estadísticas</a></li>
    </ul>

    <a href="{{ route('perfil.usuario') }}">
        <img src="{{ asset('img/admin/dashboard/icono_de_perfil.png') }}" alt="Icono de perfil">
    </a>
</header>

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

<footer>
    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard · Panel de administración</p>
    </div>
</footer>

</body>
</html>
