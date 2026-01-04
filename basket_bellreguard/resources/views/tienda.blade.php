<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joshua Iván Fernández Chávez">
    <meta name="description" content="Tienda oficial del Club Básquet Bellreguard">
    <title>Tienda | Club Básquet Bellreguard</title>
    <link rel="stylesheet" href="{{ asset('css/tienda.css') }}">
</head>
<body>

<header>
    <a href="#"><img src="{{ asset('img/tienda/logotipo.png') }}" alt="Logotipo del club"></a>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Equipos</a></li>
            <li><a href="#">Estadísticas</a></li>
            <li><a href="#">Calendario</a></li>
            <li><a href="#">Tienda</a></li>
        </ul>
    </nav>
    <a href="#"><img src="{{ asset('img/tienda/icono_de_perfil.png') }}" alt="Icono de perfil"></a>
</header>

<main>

    <section class="tienda_introduccion">
        <h1>Tienda Oficial del Club Básquet Bellreguard</h1>
        <p>Adquiere nuestros productos y apoya al club</p>
    </section>

    <section class="tienda_filtros">
        <form class="formulario_tienda" action="#" method="get">

            <div class="buscador">
                <input type="text" name="buscar" placeholder="Buscar producto...">
                <button type="submit" aria-label="Buscar">🔍</button>
            </div>

        </form>
    </section>

    <section class="tienda_productos">

        <article class="producto_card">
            <div class="producto_imagen"></div>
            <div class="producto_info">
                <h2>Camiseta oficial 25/26</h2>
                <p class="precio">25,00€</p>
            </div>
        </article>

        <article class="producto_card">
            <div class="producto_imagen"></div>
            <div class="producto_info">
                <h2>Balón de entrenar</h2>
                <p class="precio">20,00€</p>
            </div>
        </article>

        <article class="producto_card">
            <div class="producto_imagen"></div>
            <div class="producto_info">
                <h2>Gorra del club firmada</h2>
                <p class="precio">22,00€</p>
            </div>
        </article>

        <article class="producto_card">
            <div class="producto_imagen"></div>
            <div class="producto_info">
                <h2>Nombre</h2>
                <p class="precio">Precio</p>
            </div>
        </article>

        <article class="producto_card">
            <div class="producto_imagen"></div>
            <div class="producto_info">
                <h2>Nombre</h2>
                <p class="precio">Precio</p>
            </div>
        </article>

        <article class="producto_card">
            <div class="producto_imagen"></div>
            <div class="producto_info">
                <h2>Nombre</h2>
                <p class="precio">Precio</p>
            </div>
        </article>

    </section>

    <section class="tienda_mas">
        <button class="btn-mas">Ver más productos</button>
    </section>

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
                <a href="#"><img src="{{ asset('img/tienda/facebook.png') }}" alt="Facebook"></a>
                <a href="#"><img src="{{ asset('img/tienda/instagram.png') }}" alt="Instagram"></a>
            </div>
        </div>
    </div>

    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard - Todos los derechos reservados</p>
    </div>
</footer>

</body>
</html>