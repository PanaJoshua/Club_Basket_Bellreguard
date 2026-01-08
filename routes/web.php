<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/noticias', function () {
    return view('noticias');
})->name('noticias');

Route::get('/noticias/{id}', function ($id) {
    return view('detalles_noticia');
})->name('noticia.detalle');

Route::get('/equipos', function () {
    return view('equipos');
})->name('equipos');

Route::get('/estadisticas', function () {
    return view('estadisticas');
})->name('estadisticas');

Route::get('/calendario', function () {
    return view('calendario');
})->name('calendario');

Route::get('/tienda', function () {
    return view('tienda');
})->name('tienda');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/patrocinadores', function () {
    return view('patrocinadores_colaboradores');
})->name('patrocinadores');