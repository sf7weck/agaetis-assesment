<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', [HomeController::class, 'index']);
Route::post('/employess', [HomeController::class, 'add']);
Route::put('/employess/{id}', [HomeController::class, 'edit']);
Route::delete('/employess/{id}', [HomeController::class, 'delete']);