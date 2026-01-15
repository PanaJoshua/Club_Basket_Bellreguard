<header>
    <a href="{{ route('admin.dashboard') }}">
        <img src="{{ asset('img/plantilla/logotipo.png') }}" alt="Logotipo del club">
    </a>

    <ul>
        <li><a href="{{ route('admin.dashboard') }}">Panel de control</a></li>
        <li><a href="{{ route('admin.equipos') }}">Equipos</a></li>
        <li><a href="{{ route('admin.partidos') }}">Partidos</a></li>
        <li><a href="{{ route('admin.estadisticas') }}">Estadísticas</a></li>
    </ul>

    <a href="{{ route('perfil.usuario') }}">
        <img src="{{ asset('img/plantilla/icono_de_perfil.png') }}" alt="Icono de perfil">
    </a>
</header>