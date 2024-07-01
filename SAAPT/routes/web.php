<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TouristPointController;
use App\Http\Controllers\UserController;
use App\Models\TouristPoint;

Route::get('/', [TouristPointController::class, 'index']);
Route::get('/touristPoint/create', [TouristPointController::class, 'create']);
Route::get('/touristPoint/show/{id}', [TouristPointController::class, 'show']);
Route::post('/touristPoint', [TouristPointController::class, 'store']);

