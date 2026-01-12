<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Partidos del Club Básquet Bellreguard">
    <title>Partidos | Club Básquet Bellreguard</title>
    <link rel="stylesheet" href="{{ asset('css/partidos.css') }}">
</head>
<body>

<header>
    <a href="{{ route('inicio') }}">
        <img src="{{ asset('img/partidos/logotipo.png') }}" alt="Logotipo del club">
    </a>
    <nav>
        <ul>
            <li><a href="{{ route('inicio') }}">Inicio</a></li>
            <li><a href="{{ route('noticias') }}">Noticias</a></li>
            <li><a href="{{ route('equipos') }}">Equipos</a></li>
            <li><a href="{{ route('partidos') }}">Partidos</a></li>
            <li><a href="{{ route('calendario') }}">Calendario</a></li>
            <li><a href="{{ route('tienda') }}">Tienda</a></li>
        </ul>
    </nav>
    <a href="{{ route('login') }}">
        <img src="{{ asset('img/partidos/icono_de_perfil.png') }}" alt="Icono de perfil">
    </a>
</header>

<main>

    <!-- INTRO -->
    <section class="partidos_introduccion">
        <h1>Partidos del Club</h1>
        <p>Consulta los resultados y próximos encuentros del Club Básquet Bellreguard</p>
    </section>

    <!-- FILTROS -->
    <section class="partidos_filtros">
        <form class="formulario_partidos">

            <div class="filtro">
                <select>
                    <option>Equipo</option>
                    <option>Senior</option>
                    <option>Junior</option>
                    <option>Cadete</option>
                    <option>Infantil</option>
                </select>
            </div>

            <div class="filtro">
                <select>
                    <option>Temporada</option>
                    <option>2025 / 2026</option>
                    <option>2024 / 2025</option>
                </select>
            </div>

            <button type="submit" class="btn-buscar">Buscar</button>

        </form>
    </section>

    <!-- LISTADO -->
    <section class="partidos_listado">

        <article class="partido_card">
            <div class="partido_fecha">12 / 01 / 2026</div>

            <div class="partido_equipos">
                <span class="equipo local">Bellreguard</span>
                <span class="resultado">78 - 65</span>
                <span class="equipo visitante">Gandía</span>
            </div>

            <div class="partido_info">
                <span class="etiqueta local">Local</span>
                <a href="{{ route('detalles_partido') }}" class="btn-detalle">Ver partido</a>
            </div>
        </article>

        <article class="partido_card">
            <div class="partido_fecha">19 / 01 / 2026</div>

            <div class="partido_equipos">
                <span class="equipo local">Alzira</span>
                <span class="resultado pendiente">-</span>
                <span class="equipo visitante">Bellreguard</span>
            </div>

            <div class="partido_info">
                <span class="etiqueta visitante">Visitante</span>
                <a href="{{ route('detalles_partido') }}" class="btn-detalle">Próximo partido</a>
            </div>
        </article>

        <article class="partido_card">
            <div class="partido_fecha">26 / 01 / 2026</div>

            <div class="partido_equipos">
                <span class="equipo local">Bellreguard</span>
                <span class="resultado">64 - 71</span>
                <span class="equipo visitante">Denia</span>
            </div>

            <div class="partido_info">
                <span class="etiqueta local">Local</span>
                <a href="{{ route('detalles_partido') }}" class="btn-detalle">Ver partido</a>
            </div>
        </article>

    </section>

</main>

<footer>
    <div class="footer-contenido">
        <div class="footer-columna">
            <h3>CLUB BÁSQUET BELLREGUARD</h3>
            <ul class="footer-links">
                <li><a href="#">Contacta con nosotros</a></li>
                <li><a href="https://basketcv.com/club/basquet-bellreguard">Más información</a></li>
            </ul>
        </div>

        <div class="footer-columna">
            <h3>REDES SOCIALES</h3>
            <div class="redes-sociales">
                <a href="#"><img src="{{ asset('img/partidos/facebook.png') }}"></a>
                <a href="#"><img src="{{ asset('img/partidos/instagram.png') }}"></a>
            </div>
        </div>
    </div>

    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard</p>
    </div>
</footer>

</body>
</html>
