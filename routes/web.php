<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class, 'index']);

Route::get('cursos/create',[CursoController::class, 'create'] );

Route::get('cursos/{cursos}',[CursoController::class, 'show'] );



