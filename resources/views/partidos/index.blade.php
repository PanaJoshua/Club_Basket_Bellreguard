@extends('plantilla')

@section('titulo', 'Partidos')
@section('contenido')

<main>
    <section class="partidos_introduccion">
        <h1>Partidos del Club</h1>
        <p>Consulta los resultados y próximos encuentros del Club Básquet Bellreguard</p>
    </section>

    <section class="partidos_filtros">
        <form class="formulario_partidos">

            <div class="filtro">
                <select>
                    <option>Equipo</option>
                    <option>Senior</option>
                    <option>Junior</option>
                    <option>Cadete</option>
                    <option>Infantil</option>
                </select>
            </div>

            <div class="filtro">
                <select>
                    <option>Temporada</option>
                    <option>2025 / 2026</option>
                    <option>2024 / 2025</option>
                </select>
            </div>

            <button type="submit" class="btn-buscar">Buscar</button>

        </form>
    </section>

    <section class="partidos_listado">

        <article class="partido_card">
            <div class="partido_fecha">12 / 01 / 2026</div>

            <div class="partido_equipos">
                <span class="equipo local">Bellreguard</span>
                <span class="resultado">78 - 65</span>
                <span class="equipo visitante">Gandía</span>
            </div>

            <div class="partido_info">
                <span class="etiqueta local">Local</span>
                <a href="{{ route('detalles_partido', 1) }}" class="btn-detalle">Ver partido</a>
            </div>
        </article>

        <article class="partido_card">
            <div class="partido_fecha">19 / 01 / 2026</div>

            <div class="partido_equipos">
                <span class="equipo local">Alzira</span>
                <span class="resultado pendiente">-</span>
                <span class="equipo visitante">Bellreguard</span>
            </div>

            <div class="partido_info">
                <span class="etiqueta visitante">Visitante</span>
                <a href="{{ route('detalles_partido', 2) }}" class="btn-detalle">Próximo partido</a>
            </div>
        </article>

        <article class="partido_card">
            <div class="partido_fecha">26 / 01 / 2026</div>

            <div class="partido_equipos">
                <span class="equipo local">Bellreguard</span>
                <span class="resultado">64 - 71</span>
                <span class="equipo visitante">Denia</span>
            </div>

            <div class="partido_info">
                <span class="etiqueta local">Local</span>
                <a href="{{ route('detalles_partido', 3) }}" class="btn-detalle">Ver partido</a>
            </div>
        </article>

    </section>

</main>

@endsection