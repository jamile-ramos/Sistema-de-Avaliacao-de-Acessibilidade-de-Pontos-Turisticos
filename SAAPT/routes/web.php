<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TouristPointController;
use App\Http\Controllers\UserController;

Route::get('/', [TouristPointController::class, 'index']);

Route::get('/cadastrarPontoTuristico', [TouristPointController::class, 'TouristPoint']);

Route::get('/cadastrarUsuario', [UserController::class, 'user']);


