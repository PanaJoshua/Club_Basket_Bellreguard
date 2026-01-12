<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Detalle del partido del Club Básquet Bellreguard">
    <title>Detalle del Partido | Club Básquet Bellreguard</title>
    <link rel="stylesheet" href="{{ asset('css/detalle_partido.css') }}">
</head>
<body>

<header>
    <a href="{{ route('inicio') }}">
        <img src="{{ asset('img/detalles_partido/logotipo.png') }}" alt="Logotipo del club">
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
        <img src="{{ asset('img/detalles_partido/icono_de_perfil.png') }}" alt="Icono de perfil">
    </a>
</header>

<main>

    <!-- CABECERA PARTIDO -->
    <section class="partido_cabecera">
        <span class="fecha">12 de enero de 2026</span>

        <div class="equipos_resultado">
            <span class="equipo local">Bellreguard</span>
            <span class="resultado">78 - 65</span>
            <span class="equipo visitante">Gandía</span>
        </div>

        <span class="categoria">Senior Masculino · Liga Autonómica</span>
    </section>

    <!-- INFO GENERAL -->
    <section class="partido_info">
        <div class="info_item">
            <strong>Lugar:</strong> Pabellón Municipal de Bellreguard
        </div>
        <div class="info_item">
            <strong>Condición:</strong> Local
        </div>
        <div class="info_item">
            <strong>Estado:</strong> Finalizado
        </div>
    </section>

    <!-- RESUMEN -->
    <section class="partido_resumen">
        <h2>Resumen del partido</h2>
        <p>
            El Club Básquet Bellreguard se impuso con autoridad en casa en un partido
            muy sólido tanto en defensa como en ataque, destacando el acierto en los
            tiros exteriores y el control del rebote.
        </p>
    </section>

    <!-- ESTADÍSTICAS -->
    <section class="partido_estadisticas">
        <h2>Estadísticas del partido</h2>

        <table>
            <thead>
                <tr>
                    <th>Jugador</th>
                    <th>Puntos</th>
                    <th>2P</th>
                    <th>3P</th>
                    <th>Rebotes</th>
                    <th>Asist.</th>
                    <th>Robos</th>
                </tr>
            </thead>
            <tbody>
                <tr class="destacado">
                    <td>A. Torres ⭐</td>
                    <td>24</td>
                    <td>8</td>
                    <td>4</td>
                    <td>7</td>
                    <td>6</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>M. López</td>
                    <td>16</td>
                    <td>6</td>
                    <td>2</td>
                    <td>9</td>
                    <td>4</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>J. Carreño</td>
                    <td>11</td>
                    <td>5</td>
                    <td>1</td>
                    <td>6</td>
                    <td>3</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- VOLVER -->
    <section class="volver">
        <a href="{{ route('partidos') }}" class="btn-volver">Volver a partidos</a>
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
                <a href="#"><img src="{{ asset('img/detalles_partido/facebook.png') }}"></a>
                <a href="#"><img src="{{ asset('img/detalles_partido/instagram.png') }}"></a>
            </div>
        </div>
    </div>

    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard</p>
    </div>
</footer>

</body>
</html>
