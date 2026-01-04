<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/equipos', function () {
    return view('equipos');
});

Route::get('/noticias', function () {
    return view('noticias');
});

Route::get('/detalles_noticia', function () {
    return view('detalles_noticia');
});

Route::get('/estadisticas', function () {
    return view('estadisticas');
});

Route::get('/calendario', function () {
    return view('calendario');
});

Route::get('/patrocinadores_colaboradores', function () {
    return view('patrocinadores_colaboradores');
});

Route::get('/tienda', function () {
    return view('tienda');
});

Route::get('/login', function () {
    return view('login');
});