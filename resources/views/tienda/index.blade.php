@extends('plantilla')

@section('titulo', 'Tienda oficial del club')
@push('styles')
    @vite('resources/css/tienda.css')
@endpush
@section('contenido')

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

        <a href="{{ route('detalle_producto', 1) }}" class="producto_link">
        <article class="producto_card destacado">
            <div class="producto_imagen"></div>
            <div class="producto_info">
                <h2>Camiseta oficial 25/26</h2>
                <p class="precio">25,00€</p>
            </div>
        </article>
        </a>

        <a href="{{ route('detalle_producto', 2) }}" class="producto_link">
        <article class="producto_card">
            <div class="producto_imagen2"></div>
            <div class="producto_info">
                <h2>Balón de entrenar</h2>
                <p class="precio">20,00€</p>
            </div>
        </article>
        </a>

        <a href="{{ route('detalle_producto', 3) }}" class="producto_link">
        <article class="producto_card">
            <div class="producto_imagen3"></div>
            <div class="producto_info">
                <h2>Gorra del club firmada</h2>
                <p class="precio">22,00€</p>
            </div>
        </article>
        </a>

        <a href="{{ route('detalle_producto', 4) }}" class="producto_link">
        <article class="producto_card">
            <div class="producto_imagen4"></div>
            <div class="producto_info">
                <h2>Camiseta del club firmada</h2>
                <p class="precio">15,50€</p>
            </div>
        </article>
        </a>

        <a href="{{ route('detalle_producto', 5) }}" class="producto_link">
        <article class="producto_card">
            <div class="producto_imagen5"></div>
            <div class="producto_info">
                <h2>Mini canasta oficial del club</h2>
                <p class="precio">23,00€</p>
            </div>
        </article>
        </a>

        <a href="{{ route('detalle_producto', 6) }}" class="producto_link">
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

@endsection