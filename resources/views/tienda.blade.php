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
    <a href="{{ route('inicio') }}"><img src="{{ asset('img/tienda/logotipo.png') }}" alt="Logotipo del club"></a>
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
    <a href="{{ route('login') }}"><img src="{{ asset('img/tienda/icono_de_perfil.png') }}" alt="Icono de perfil"></a>
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

        <a href="{{ route('detalle_producto') }}" class="producto_link">
        <article class="producto_card destacado">
            <div class="producto_imagen"></div>
            <div class="producto_info">
                <h2>Camiseta oficial 25/26</h2>
                <p class="precio">25,00€</p>
            </div>
        </article>
        </a>

        <a href="{{ route('detalle_producto') }}" class="producto_link">
        <article class="producto_card">
            <div class="producto_imagen2"></div>
            <div class="producto_info">
                <h2>Balón de entrenar</h2>
                <p class="precio">20,00€</p>
            </div>
        </article>
        </a>

        <a href="{{ route('detalle_producto') }}" class="producto_link">
        <article class="producto_card">
            <div class="producto_imagen3"></div>
            <div class="producto_info">
                <h2>Gorra del club firmada</h2>
                <p class="precio">22,00€</p>
            </div>
        </article>
        </a>

        <a href="{{ route('detalle_producto') }}" class="producto_link">
        <article class="producto_card">
            <div class="producto_imagen4"></div>
            <div class="producto_info">
                <h2>Camiseta del club firmada</h2>
                <p class="precio">15,50€</p>
            </div>
        </article>
        </a>

        <a href="{{ route('detalle_producto') }}" class="producto_link">
        <article class="producto_card">
            <div class="producto_imagen5"></div>
            <div class="producto_info">
                <h2>Mini canasta oficial del club</h2>
                <p class="precio">23,00€</p>
            </div>
        </article>
        </a>

        <a href="{{ route('detalle_producto') }}" class="producto_link">
        <article class="producto_card">
            <div class="producto_imagen6"></div>
            <div class="producto_info">
                <h2>Camiseta oficial del club</h2>
                <p class="precio">60,00€</p>
            </div>
        </article>
        </a>

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
                <li><a href="#">Contacta con nosotros</a></li>
                <li><a href="https://basketcv.com/club/basquet-bellreguard">Más información del club</a></li>
            </ul>
        </div>

        <div class="footer-columna">
            <h3>REDES SOCIALES</h3>
            <div class="redes-sociales">
                <a href="#"><img src="{{ asset('img/tienda/facebook.png') }}" alt="Facebook"></a>
                <a href="https://www.instagram.com/basquetbellreguard/"><img src="{{ asset('img/tienda/instagram.png') }}" alt="Instagram"></a>
            </div>
        </div>
    </div>

    <div class="footer-derechos">
        <p>© 2025 Club Básquet Bellreguard - Todos los derechos reservados</p>
    </div>
</footer>

</body>
</html>
