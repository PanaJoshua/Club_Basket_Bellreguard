@extends('plantilla')

@section('titulo', 'Plantilla de jugadores')
@push('styles')
    @vite('resources/css/plantilla_jugadores.css')
@endpush
@section('contenido')

<main>

    <section class="plantilla_introduccion">
        <h1>Plantilla del Equipo</h1>
        <p>Jugadores del equipo · Temporada 2025 / 2026</p>
    </section>

    <section class="plantilla_grid">

        <article class="jugador_card">
            <div class="jugador_foto1"></div>
            <h2>A. Torres</h2>
            <p><strong>Posición:</strong> Escolta</p>
            <p><strong>Dorsal:</strong> 7</p>
            <p><strong>Edad:</strong> 19</p>
        </article>

        <article class="jugador_card">
            <div class="jugador_foto2"></div>
            <h2>M. López</h2>
            <p><strong>Posición:</strong> Base</p>
            <p><strong>Dorsal:</strong> 4</p>
            <p><strong>Edad:</strong> 20</p>
        </article>

        <article class="jugador_card">
            <div class="jugador_foto3"></div>
            <h2>J. Carreño</h2>
            <p><strong>Posición:</strong> Alero</p>
            <p><strong>Dorsal:</strong> 12</p>
            <p><strong>Edad:</strong> 18</p>
        </article>

        <article class="jugador_card">
            <div class="jugador_foto4"></div>
            <h2>T. García</h2>
            <p><strong>Posición:</strong> Pívot</p>
            <p><strong>Dorsal:</strong> 15</p>
            <p><strong>Edad:</strong> 21</p>
        </article>

    </section>

    <section class="volver_equipos">
        <a href="{{ route('equipos') }}">Volver a equipos</a>
    </section>

</main>

@endsection