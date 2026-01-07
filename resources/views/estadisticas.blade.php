<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Estadísticas del Club Básquet Bellreguard">
    <title>Estadísticas | Club Básquet Bellreguard</title>
    <link rel="stylesheet" href="{{ asset('css/estadisticas.css') }}">
</head>
<body>

<header>
    <a href="#"><img src="{{ asset('img/estadisticas/logotipo.png') }}" alt="Logotipo del club"></a>
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Noticias</a></li>
        <li><a href="#">Equipos</a></li>
        <li><a href="#">Estadísticas</a></li>
        <li><a href="#">Calendario</a></li>
        <li><a href="#">Tienda</a></li>
    </ul>
    <a href="#"><img src="{{ asset('img/estadisticas/icono_de_perfil.png') }}" alt="Icono de perfil"></a>
</header>

<main>

    <section class="estadisticas_introduccion">
        <h1>Estadísticas del Club</h1>
        <p>
            Consulta los datos de jugadores, equipos y temporadas del 
            Club Básquet Bellreguard
        </p>
    </section>

    <section class="estadisticas_filtros">
        <form class="formulario" action="#" method="get">

            <div class="filtro">
                <select name="equipo" id="equipo">
                    <option value="">Seleccionar equipo</option>
                    <option value="senior">Senior</option>
                    <option value="junior">Junior</option>
                    <option value="cadete">Cadete</option>
                    <option value="infantil">Infantil</option>
                </select>
            </div>

            <div class="filtro">
                <select name="temporada" id="temporada">
                    <option value="">Seleccionar temporada</option>
                    <option value="25-26">2025 / 2026</option>
                    <option value="24-25">2024 / 2025</option>
                </select>
            </div>

            <button type="submit" class="btn-buscar">Buscar</button>

        </form>
    </section>

    <section class="estadisticas_resumen">
        <article class="resumen_card">
            <h2>Partidos jugados</h2>
            <p>24</p>
            <p>Temporada 25/26</p>
        </article>

        <article class="resumen_card">
            <h2>Puntos totales</h2>
            <p>845</p>
        </article>

        <article class="resumen_card">
            <h2>Rebotes</h2>
            <p>210</p>
        </article>

        <article class="resumen_card">
            <h2>Asistencias</h2>
            <p>176</p>
        </article>

    </section>

    <section class="estadisticas_tabla">

        <table>
            <thead>
                <tr>
                    <th>Jugador</th>
                    <th>Puntos</th>
                    <th>Tiros 2P</th>
                    <th>Tiros 3P</th>
                    <th>Rebotes</th>
                    <th>Asistencias</th>
                    <th>Robos</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>A. Torres</td>
                    <td>24</td>
                    <td>25</td>
                    <td>16</td>
                    <td>15</td>
                    <td>23</td>
                    <td>13</td>
                </tr>

                <tr>
                    <td>M. López</td>
                    <td>16</td>
                    <td>33</td>
                    <td>22</td>
                    <td>23</td>
                    <td>19</td>
                    <td>22</td>
                </tr>

                <tr>
                    <td>J. Carreño</td>
                    <td>11</td>
                    <td>33</td>
                    <td>18</td>
                    <td>23</td>
                    <td>11</td>
                    <td>12</td>
                </tr>

                <tr>
                    <td>T. García</td>
                    <td>11</td>
                    <td>33</td>
                    <td>18</td>
                    <td>23</td>
                    <td>11</td>
                    <td>12</td>
                </tr>
            </tbody>
        </table>

    </section>

</main>

<footer>
    <div class="footer-contenido">
        <div class="footer-columna">
            <h3>CLUB BÁSQUET BELLREGUARD</h3>
            <ul class="footer-links">
                <li><a href="#">Hazte patrocinador</a></li>
                <li><a href="#">Contacta con nosotros</a></li>
                <li><a href="https://basketcv.com/club/basquet-bellreguard">Más información del club</a></li>
            </ul>
        </div>

        <div class="footer-columna">
            <h3>REDES SOCIALES</h3>
            <div class="redes-sociales">
                <a href="#"><img src="{{ asset('img/estadisticas/facebook.png') }}" alt="Facebook"></a>
                <a href="https://www.instagram.com/basquetbellreguard/"><img src="{{ asset('img/estadisticas/instagram.png') }}" alt="Instagram"></a>
            </div>
        </div>
    </div>

    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard - Todos los derechos reservados</p>
    </div>
</footer>

</body>
</html>
