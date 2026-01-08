<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Landing Page del Club Basquet Bellreguard">
    <title>Club Basquet Bellreguard</title>
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
</head>
<body>
    <header>
        <a href="{{ route('inicio') }}"><img src="{{ asset('img/inicio/logotipo.png') }}" alt="Logotipo del club"></a>
        <ul>
            <li><a href="{{ route('inicio') }}">Inicio</a></li>
            <li><a href="{{ route('noticias') }}">Noticias</a></li>
            <li><a href="{{ route('equipos') }}">Equipos</a></li>
            <li><a href="{{ route('estadisticas') }}">Estadísticas</a></li>
            <li><a href="{{ route('calendario') }}">Calendario</a></li>
            <li><a href="{{ route('tienda') }}">Tienda</a></li>
        </ul>
        <a href="{{ route('login') }}"><img src="{{ asset('img/inicio/icono_de_perfil.png') }}" alt="Icono de perfil"></a>
    </header>

    <main>
        <div class="inicio_banner">
            <h1>Bienvenido al Club Básquet Bellreguard</h1>
            <a href="#">Ver próximos partidos</a>
        </div>

        <div id="tabular">
            <div class="noticias">
                <h2>Noticias destacadas</h2>
                
                <a href="#" class="noticia-link">
                    <div class="contenido-noticia">
                        <img src="{{ asset('img/inicio/pierna_rota.jpg') }}" alt="Pierna rota de un jugador">
                        <div class="texto-noticia">
                            <p>Lesión grave en el último partido</p>
                            <p>
                                El jugador Juan Pérez sufrió una fractura durante el partido
                                contra Valencia. Estará de baja 3 meses.
                            </p>
                        </div>
                    </div>
                </a>
                
                <a href="#" class="noticia-link">
                    <div class="contenido-noticia">
                        <img src="{{ asset('img/inicio/equipo_celebrando.jpg') }}" alt="Equipo celebrando victoria">
                        <div class="texto-noticia">
                            <p>Victoria histórica en la liga</p>
                            <p>Nuestro equipo senior consiguió una victoria por 95-78 contra el líder de la liga. ¡Gran actuación!</p>
                        </div>
                    </div>
                </a>
                
            </div>

            <div class="equipos">
                <p>Equipos destacados</p>

                <a href="#" class="equipo-item">
                    <img src="{{ asset('img/inicio/senior.png') }}" alt="Equipo senior">
                </a>

                <a href="#" class="equipo-item">
                    <img src="{{ asset('img/inicio/junior.png') }}" alt="Equipo junior">
                </a>

                <a href="#" class="equipo-item">
                    <img src="{{ asset('img/inicio/infantil.png') }}" alt="Equipo infantil">
                </a>
            </div>

        </div>

        <div id="patrocinadores">
            <p>Patrocinadores</p>
            <a href="https://www.nike.com" target="_blank" class="item-patrocinador">
                <img src="{{ asset('img/inicio/nike.png') }}" alt="Logo Nike" />
                <p><strong>NIKE</strong></p>
                <p>Patrocinador Oficial</p>
            </a>
            <a href="https://www.motorola.com" target="_blank" class="item-patrocinador">
                <img src="{{ asset('img/inicio/motorola.png') }}" alt="Logo Motorola" />
                <p><strong>MOTOROLA</strong></p>
                <p>Patrocinador Tecnológico</p>
            </a>
            <a href="https://valenciabasket.com" target="_blank" class="item-patrocinador">
                <img src="{{ asset('img/inicio/valencia basket.png') }}" alt="Logo Valencia Basket" />
                <p><strong>VALENCIA BASKET</strong></p>
                <p>Club Asociado</p>
            </a>
        </div>
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
                    <a href="#"><img src="{{ asset('img/inicio/facebook.png') }}" alt="Facebook"></a>
                    <a href="https://www.instagram.com/basquetbellreguard/"><img src="{{ asset('img/inicio/instagram.png') }}" alt="Instagram"></a>
                </div>
            </div>
        </div>
        
        <div class="footer-derechos">
            <p>© 2025 Club Básquet Bellreguard - Todos los derechos reservados</p>
        </div>
    </footer>
</body>
</html>