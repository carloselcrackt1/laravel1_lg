<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // laravel busca en la carpeta de views la vista de welcome
});


Route::resource("project", ProyectoController::class);
