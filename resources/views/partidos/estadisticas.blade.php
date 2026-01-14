@extends('plantilla')

@section('titulo', 'Estadisticas del partido')
@section('contenido')

<main>

    <section class="estadisticas_introduccion">
        <h1>Estadísticas del Club</h1>
        <p>Estadísticas del equipo Senior · Temporada 2025 / 2026</p>
    </section>

    <section class="estadisticas_filtros">
        <form class="formulario" action="#" method="get">

            <div class="filtro">
                <select name="equipo">
                    <option value="">Seleccionar equipo</option>
                    <option value="senior">Senior</option>
                    <option value="junior">Junior</option>
                    <option value="cadete">Cadete</option>
                    <option value="infantil">Infantil</option>
                </select>
            </div>

            <div class="filtro">
                <select name="temporada">
                    <option value="">Seleccionar temporada</option>
                    <option value="25-26">2025 / 2026</option>
                    <option value="24-25">2024 / 2025</option>
                </select>
            </div>

            <button type="submit" class="btn-buscar">Buscar</button>

        </form>
    </section>

    <section class="estadisticas_resumen">

        <article class="resumen_card">
            <span class="icono">🏀</span>
            <h2>Partidos jugados</h2>
            <p>24</p>
            <small>Temporada 25/26</small>
        </article>

        <article class="resumen_card">
            <span class="icono">🔥</span>
            <h2>Puntos</h2>
            <p>845</p>
        </article>

        <article class="resumen_card">
            <span class="icono">🧱</span>
            <h2>Rebotes</h2>
            <p>210</p>
        </article>

        <article class="resumen_card">
            <span class="icono">🎯</span>
            <h2>Asistencias</h2>
            <p>176</p>
        </article>

    </section>

    <section class="jugador_destacado">
        <h2>⭐ Jugador destacado</h2>

        <div class="jugador_card">
            <img src="{{ asset('img/estadisticas/lebron.jpg') }}" alt="Jugador destacado">
            <div class="jugador_info">
                <h3>A. Torres</h3>
                <p>Posición: Escolta</p>
                <p><strong>Media:</strong> 18.4 puntos por partido</p>
            </div>
        </div>
    </section>

    <section class="estadisticas_tabla">
        <table>
            <thead>
                <tr>
                    <th>Jugador</th>
                    <th>Puntos</th>
                    <th>2P</th>
                    <th>3P</th>
                    <th>Rebotes</th>
                    <th>Asistencias</th>
                    <th>Robos</th>
                </tr>
            </thead>
            <tbody>
                <tr class="destacado">
                    <td>A. Torres ⭐</td>
                    <td>24</td>
                    <td>25</td>
                    <td>16</td>
                    <td>15</td>
                    <td>23</td>
                    <td>13</td>
                </tr>
                <tr>
                    <td>M. López</td>
                    <td>16</td>
                    <td>33</td>
                    <td>22</td>
                    <td>23</td>
                    <td>19</td>
                    <td>22</td>
                </tr>
                <tr>
                    <td>J. Carreño</td>
                    <td>11</td>
                    <td>33</td>
                    <td>18</td>
                    <td>23</td>
                    <td>11</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td>J. Fernandez</td>
                    <td>11</td>
                    <td>33</td>
                    <td>18</td>
                    <td>23</td>
                    <td>11</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td>L. Dias</td>
                    <td>11</td>
                    <td>33</td>
                    <td>18</td>
                    <td>23</td>
                    <td>11</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td>A. Morata</td>
                    <td>11</td>
                    <td>33</td>
                    <td>18</td>
                    <td>23</td>
                    <td>11</td>
                    <td>12</td>
                </tr>
            </tbody>
        </table>
    </section>

</main>

@endsection