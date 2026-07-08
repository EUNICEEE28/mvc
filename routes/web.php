<?php 

use Lib\Route;

use App\Controllers\HomeController;

Route::get('/', [HomeController::class , 'index']);

Route::get('/contact', function () {
    return 'Hola desde la página contacto';
});

Route::get('/about', function () {
    return 'Hola desde la página acerca de';
});

Route::get('/courses/:slug', function($slug) {
    return 'Hola desde la página cursos de '. $slug;
});

Route::dispatch();