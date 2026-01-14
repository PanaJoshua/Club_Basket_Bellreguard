@extends('plantilla')

@section('titulo', 'Noticias')
@push('styles')
    @vite('resources/css/noticias.css')
@endpush
@section('contenido')

<main>

    <section class="noticias_introduccion">
        <h1>Noticias del Club</h1>
        <p>Mantente al día con las novedades, resultados y eventos del Club Básquet Bellreguard.</p>
    </section>

    <section class="noticias_busqueda">
        <form class="buscador">
            <input type="text" placeholder="Buscar noticia...">
            <button type="submit">🔍</button>
        </form>
    </section>

    <section class="noticias_filtros">
        <button class="activo">Todas</button>
        <button>Partidos</button>
        <button>Eventos</button>
        <button>Club</button>
        <button>Lesiones</button>
    </section>

    <section class="noticias_listado">

        <a href="{{ route('noticia_detalles', 1) }}" class="noticia_link">
            <article class="noticia_card">
                <div class="noticia_imagen1"></div>
                <div class="noticia_contenido">
                    <span class="tag lesion">Lesión</span>
                    <time>04/11/2025</time>
                    <h2>Lesión de un jugador del cadete</h2>
                    <p>El jugador A. Torres sufre una lesión grave durante el último encuentro.</p>
                </div>
            </article>
        </a>

        <a href="{{ route('noticia_detalles', 2) }}" class="noticia_link">
            <article class="noticia_card">
                <div class="noticia_imagen2"></div>
                <div class="noticia_contenido">
                    <span class="tag partido">Partido</span>
                    <time>01/11/2025</time>
                    <h2>El primer equipo gana el partido</h2>
                    <p>El equipo senior vence a Gandía con una gran actuación colectiva.</p>
                </div>
            </article>
        </a>

        <a href="{{ route('noticia_detalles', 3) }}" class="noticia_link">
            <article class="noticia_card">
                <div class="noticia_imagen3"></div>
                <div class="noticia_contenido">
                    <span class="tag evento">Evento</span>
                    <time>10/11/2025</time>
                    <h2>Próximo partido contra el rival X</h2>
                    <p>El club se prepara para un encuentro clave esta jornada.</p>
                </div>
            </article>
        </a>

        <a href="{{ route('noticia_detalles', 4) }}" class="noticia_link">
            <article class="noticia_card">
                <div class="noticia_imagen4"></div>
                <div class="noticia_contenido">
                    <span class="tag club">Club</span>
                    <time>04/12/2025</time>
                    <h2>Cambios recientes en cuanto a clubes</h2>
                    <p>El jugador A. Torres sufre una lesión grave durante el último encuentro.</p>
                </div>
            </article>
        </a>

        <a href="{{ route('noticia_detalles', 5) }}" class="noticia_link">
            <article class="noticia_card">
                <div class="noticia_imagen5"></div>
                <div class="noticia_contenido">
                    <span class="tag lesion">Lesión</span>
                    <time>04/11/2025</time>
                    <h2>Lesión de un jugador del cadete</h2>
                    <p>El jugador A. Torres sufre una lesión grave durante el último encuentro.</p>
                </div>
            </article>
        </a>

        <a href="{{ route('noticia_detalles', 6) }}" class="noticia_link">
            <article class="noticia_card">
                <div class="noticia_imagen6"></div>
                <div class="noticia_contenido">
                    <span class="tag evento">Evento</span>
                    <time>04/11/2025</time>
                    <h2>Lesión de un jugador del cadete</h2>
                    <p>El jugador A. Torres sufre una lesión grave durante el último encuentro.</p>
                </div>
            </article>
        </a>

    </section>

    <section class="noticias_mas">
        <button>Cargar más noticias</button>
    </section>

</main>

@endsection