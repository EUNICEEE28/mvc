<?php

use Lib\Route;

Route::get('', function() {
    return [
        'message' => 'hola desde la página principal',
        'status' => 200
    ];
});

Route::get('/contact', function() {
    return "hola desde la página contacto";
});

Route::get('/about', function() {
    return "hola desde la página acerca de";
});

Route::get('/courses/prueba', function() {
    return "hola desde la página cursos de prueba";
});

Route::get('/courses/:slug', function($slug) {
    return "El curso es: " . $slug;
});



Route::dispatch();
