@extends('plantilla')

@section('titulo', 'Detalle del producto')
@push('styles')
    @vite('resources/css/detalles_producto.css')
@endpush
@section('contenido')

<main>

    <section class="producto_detalle">

        <div class="producto_imagen_grande"></div>

        <div class="producto_info_detalle">
            <h1>Camiseta oficial 25/26</h1>

            <p class="precio">25,00€</p>

            <p class="descripcion">
                Camiseta oficial del Club Básquet Bellreguard para la temporada
                2025 / 2026. Tejido transpirable, ligera y cómoda para entrenamientos
                y partidos.
            </p>

            <ul class="caracteristicas">
                <li><strong>Material:</strong> Poliéster</li>
                <li><strong>Tallas:</strong> XS · S · M · L · XL</li>
                <li><strong>Color:</strong> Rojo y blanco</li>
            </ul>

            <button class="btn-comprar">Añadir al carrito</button>

            <a href="{{ route('tienda') }}" class="volver">Volver a la tienda</a>
        </div>

    </section>

</main>

@endsection