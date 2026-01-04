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
        <a href="#"><img src="{{ asset('img/inicio/logotipo.png') }}" alt="Logotipo del club"></a>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Equipos</a></li>
            <li><a href="#">Estadisticas</a></li>
            <li><a href="#">Calendario</a></li>
            <li><a href="#">Tienda</a></li>
        </ul>
        <a href="#"><img src="{{ asset('img/inicio/icono_de_perfil.png') }}" alt="Icono de perfil"></a>
    </header>

    <main>
        <div class="inicio_banner">
            <h1>Bienvenido al Club Básquet Bellreguard</h1>
            <a href="#">Ver próximos partidos</a>
        </div>

        <div id="tabular">
            <div class="noticias">
                <p>Noticias destacadas</p>
                
                <div class="contenido-noticia">
                    <img src="{{ asset('img/inicio/pierna_rota.jpg') }}" alt="Pierna rota">
                    <div class="texto-noticia">
                        <p>Lesión grave en el último partido</p>
                        <p>El jugador Juan Pérez sufrió una fractura durante el partido contra Valencia. Estará de baja 3 meses.</p>
                    </div>
                </div>
                
                <div class="contenido-noticia">
                    <img src="{{ asset('img/inicio/equipo_celebrando.jpg') }}" alt="Equipo celebrando victoria">
                    <div class="texto-noticia">
                        <p>Victoria histórica en la liga</p>
                        <p>Nuestro equipo senior consiguió una victoria por 95-78 contra el líder de la liga. ¡Gran actuación!</p>
                    </div>
                </div>
                
            </div>

            <div class="equipos">
                <p>Equipos destacados</p>
                <img src="{{ asset('img/inicio/senior.png') }}" alt="Equipo senior">
                <img src="{{ asset('img/inicio/junior.png') }}" alt="Equipo junior">
                <img src="{{ asset('img/inicio/infantil.png') }}" alt="Equipo infantil">
            </div>
        </div>

        <div id="patrocinadores">
            <p>Patrocinadores</p>
            <div class="item-patrocinador">
                <img src="{{ asset('img/inicio/nike.png') }}" alt="Logo Nike" /><br/>
                <p> <strong>NIKE</strong></p>
                <p>Patrocinador Oficial</p>
            </div>
            <div class="item-patrocinador">
                <img src="{{ asset('img/inicio/motorola.png') }}" alt="Logo Motorola" /><br/>
                <p> <strong>MOTOROLA</strong></p>
                <p>Patrocinador Tecnológico</p>
            </div>
            <div class="item-patrocinador">
                <img src="{{ asset('img/inicio/valencia basket.png') }}" alt="Logo Valencia Basket" /><br/>
                <p> <strong>VALENCIA BASKET</strong></p>
                <p>Club Asociado</p>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-contenido">
            <div class="footer-columna">
                <h3>CLUB BÁSQUET BELLREGUARD</h3>
                <ul class="footer-links">
                    <li><a href="#">Hazte patrocinador</a></li>
                    <li><a href="#">Contacta con nosotros</a></li>
                </ul>
            </div>
            
            <div class="footer-columna">
                <h3>REDES SOCIALES</h3>
                <div class="redes-sociales">
                    <a href="#"><img src="{{ asset('img/inicio/facebook.png') }}" alt="Facebook"></a>
                    <a href="#"><img src="{{ asset('img/inicio/instagram.png') }}" alt="Instagram"></a>
                </div>
            </div>
        </div>
        
        <div class="footer-derechos">
            <p>© 2025 Club Básquet Bellreguard - Todos los derechos reservados</p>
        </div>
    </footer>
</body>
</html>