<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Noticias del Club Básquet Bellreguard">
    <title>Calendario | Club Básquet Bellreguard</title>
    <link rel="stylesheet" href="{{ asset('css/calendario.css') }}">
</head>
<body>

<header>
    <a href="{{ route('inicio') }}"><img src="{{ asset('img/calendario/logotipo.png') }}" alt="Logotipo del club"></a>
        <ul>
            <li><a href="{{ route('inicio') }}">Inicio</a></li>
            <li><a href="{{ route('noticias') }}">Noticias</a></li>
            <li><a href="{{ route('equipos') }}">Equipos</a></li>
            <li><a href="{{ route('estadisticas') }}">Estadísticas</a></li>
            <li><a href="{{ route('calendario') }}">Calendario</a></li>
            <li><a href="{{ route('tienda') }}">Tienda</a></li>
        </ul>
    <a href="{{ route('login') }}"><img src="{{ asset('img/calendario/icono_de_perfil.png') }}" alt="Icono de perfil"></a>
</header>

<main>

    <section class="calendario_introduccion">
        <h1>Calendario de Partidos y Entrenamientos</h1>
        <p>
            Consulta la fecha de partidos, entrenamientos y eventos del
            Club Básquet Bellreguard
        </p>
    </section>

    <section class="calendario_filtros">
        <form class="formulario_calendario" action="#" method="get">

            <div class="filtro">
                <select name="equipo">
                    <option value="">Equipo</option>
                    <option value="senior">Senior</option>
                    <option value="junior">Junior</option>
                    <option value="cadete">Cadete</option>
                    <option value="infantil">Infantil</option>
                </select>
            </div>

            <div class="filtro">
                <select name="tipo">
                    <option value="">Tipo</option>
                    <option value="partido">Partido</option>
                    <option value="entrenamiento">Entrenamiento</option>
                    <option value="evento">Evento</option>
                </select>
            </div>

            <div class="filtro">
                <select name="mes">
                    <option value="">Mes</option>
                    <option value="enero">Enero</option>
                    <option value="febrero">Febrero</option>
                    <option value="marzo">Marzo</option>
                </select>
            </div>

            <button type="submit" class="btn-buscar">Buscar</button>

        </form>
    </section>

    <div class="calendario_leyenda">
    <span class="leyenda partido">Partido</span>
    <span class="leyenda entrenamiento">Entrenamiento</span>
    </div>

    <section class="calendario">

        <div class="calendario_dias">
            <div>L</div>
            <div>M</div>
            <div>X</div>
            <div>J</div>
            <div>V</div>
            <div>S</div>
            <div>D</div>
        </div>

        <div class="calendario_grid">

            <div class="dia">1</div>
            <div class="dia">2</div>
            <div class="dia">3</div>
            <div class="dia">4</div>
            <div class="dia">5</div>
            <div class="dia hoy">6</div>
            <div class="dia">7</div>

            <div class="dia">8</div>
            <div class="dia">9</div>
            <div class="dia evento partido">
                <span class="numero">10</span>
                <span class="texto">Partido</span>
            </div>
            <div class="dia">11</div>
            <div class="dia">12</div>
            <div class="dia">13</div>
            <div class="dia">14</div>

            <div class="dia">15</div>
            <div class="dia">16</div>
            <div class="dia">17</div>
            <div class="dia">18</div>
            <div class="dia">19</div>
            <div class="dia evento partido">
                <span class="numero">20</span>
                <span class="texto">Partido</span>
            </div>
            <div class="dia">21</div>

            <div class="dia evento entrenamiento">
                <span class="numero">22</span>
                <span class="texto">Entrenar</span>
            </div>
            <div class="dia">23</div>
            <div class="dia">24</div>
            <div class="dia evento entrenamiento">
                <span class="numero">25</span>
                <span class="texto">Entrenar</span>
            </div>
            <div class="dia">26</div>
            <div class="dia">27</div>
            <div class="dia">28</div>

            <div class="dia">29</div>
            <div class="dia">30</div>
            <div class="dia">31</div>

        </div>

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
                    <a href="#"><img src="{{ asset('img/calendario/facebook.png') }}" alt="Facebook"></a>
                    <a href="https://www.instagram.com/basquetbellreguard/"><img src="{{ asset('img/calendario/instagram.png') }}" alt="Instagram"></a>
                </div>
        </div>
    </div>
        
        <div class="footer-derechos">
            <p>© 2025 Club Básquet Bellreguard - Todos los derechos reservados</p>
        </div>
    </footer>
</body>
</html>
