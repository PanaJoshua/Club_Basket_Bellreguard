@extends('plantilla')

@section('titulo', 'Inicio')
@push('styles')
    @vite('resources/css/inicio.css')
@endpush
@section('contenido')
<main>

    <div class="inicio_banner">
        <h1>Bienvenido al Club Básquet Bellreguard</h1>
        <a href="{{ route('calendario') }}">Ver próximos partidos</a>
    </div>

    <section class="datos-club">
        <div class="dato">
            <p class="numero">25+</p>
            <p>Años de historia</p>
        </div>
        <div class="dato">
            <p class="numero">8</p>
            <p>Equipos</p>
        </div>
        <div class="dato">
            <p class="numero">120</p>
            <p>Jugadores</p>
        </div>
        <div class="dato">
            <p class="numero">15</p>
            <p>Títulos</p>
        </div>
    </section>

    <section class="proximo-partido">
        <h2>Próximo partido</h2>

        <div class="partido-card">
            <div class="equipos-partido">
                <p class="equipo">CB Bellreguard</p>
                <span>VS</span>
                <p class="equipo">Valencia Basket</p>
            </div>

            <div class="partido-info">
                <p>📅 Sábado 15 Febrero</p>
                <p>⏰ 18:30</p>
                <p>📍 Pabellón Municipal Bellreguard</p>
            </div>

            <a href="{{ route('calendario') }}">Ver calendario</a>
        </div>
    </section>

    <div id="tabular">

        <div class="noticias">
            <h2>Noticias destacadas</h2>

            <a href="{{ route('noticia_detalles', 1) }}" class="noticia-link">
                <div class="contenido-noticia">
                    <img src="{{ asset('img/inicio/pierna_rota.jpg') }}" alt="">
                    <div class="texto-noticia">
                        <p>Lesión grave en el último partido</p>
                        <p>Juan Pérez estará de baja 3 meses tras el partido contra Valencia.</p>
                    </div>
                </div>
            </a>

            <a href="{{ route('noticia_detalles', 2) }}" class="noticia-link">
                <div class="contenido-noticia">
                    <img src="{{ asset('img/inicio/equipo_celebrando.jpg') }}" alt="">
                    <div class="texto-noticia">
                        <p>Victoria histórica en la liga</p>
                        <p>Victoria por 95-78 contra el líder de la liga.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="equipos">
            <p>Equipos destacados</p>

            <a href="{{ route('equipos') }}" class="equipo-item">
                <img src="{{ asset('img/inicio/senior.png') }}" alt="">
            </a>

            <a href="{{ route('equipos') }}" class="equipo-item">
                <img src="{{ asset('img/inicio/junior.png') }}" alt="">
            </a>

            <a href="{{ route('equipos') }}" class="equipo-item">
                <img src="{{ asset('img/inicio/infantil.png') }}" alt="">
            </a>
        </div>

    </div>

    <div id="patrocinadores">
        <p>Patrocinadores</p>

        <a href="https://www.nike.com" target="_blank" class="item-patrocinador">
            <img src="{{ asset('img/inicio/nike.png') }}" alt="">
            <p><strong>NIKE</strong></p>
            <p>Patrocinador Oficial</p>
        </a>

        <a href="https://www.motorola.com" target="_blank" class="item-patrocinador">
            <img src="{{ asset('img/inicio/motorola.png') }}" alt="">
            <p><strong>MOTOROLA</strong></p>
            <p>Patrocinador Tecnológico</p>
        </a>

        <a href="https://valenciabasket.com" target="_blank" class="item-patrocinador">
            <img src="{{ asset('img/inicio/valencia basket.png') }}" alt="">
            <p><strong>VALENCIA BASKET</strong></p>
            <p>Club Asociado</p>
        </a>
    </div>

    <div class="noticias_mas">
        <a href="{{ route('patrocinadores') }}">Ver patrocinadores y colaboradores</a>
    </div>

</main>

@endsection