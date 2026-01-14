@extends('plantilla')

@section('titulo', 'Partidos')
@push('styles')
    @vite('resources/css/detalle_partido.css')
@endpush
@section('contenido')

<main>

    <section class="partido_cabecera">
        <span class="fecha">12 de enero de 2026</span>

        <div class="equipos_resultado">
            <span class="equipo local">Bellreguard</span>
            <span class="resultado">78 - 65</span>
            <span class="equipo visitante">Gandía</span>
        </div>

        <span class="categoria">Senior Masculino · Liga Autonómica</span>
    </section>

    <section class="partido_info">
        <div class="info_item">
            <strong>Lugar:</strong> Pabellón Municipal de Bellreguard
        </div>
        <div class="info_item">
            <strong>Condición:</strong> Local
        </div>
        <div class="info_item">
            <strong>Estado:</strong> Finalizado
        </div>
    </section>

    <section class="partido_resumen">
        <h2>Resumen del partido</h2>
        <p>
            El Club Básquet Bellreguard se impuso con autoridad en casa en un partido
            muy sólido tanto en defensa como en ataque, destacando el acierto en los
            tiros exteriores y el control del rebote.
        </p>
    </section>

    <section class="partido_estadisticas">
        <h2>Estadísticas del partido</h2>

        <table>
            <thead>
                <tr>
                    <th>Jugador</th>
                    <th>Puntos</th>
                    <th>2P</th>
                    <th>3P</th>
                    <th>Rebotes</th>
                    <th>Asist.</th>
                    <th>Robos</th>
                </tr>
            </thead>
            <tbody>
                <tr class="destacado">
                    <td>A. Torres ⭐</td>
                    <td>24</td>
                    <td>8</td>
                    <td>4</td>
                    <td>7</td>
                    <td>6</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>M. López</td>
                    <td>16</td>
                    <td>6</td>
                    <td>2</td>
                    <td>9</td>
                    <td>4</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>J. Carreño</td>
                    <td>11</td>
                    <td>5</td>
                    <td>1</td>
                    <td>6</td>
                    <td>3</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="volver">
        <a href="{{ route('partidos') }}" class="btn-volver">Volver a partidos</a>
    </section>

</main>

@endsection