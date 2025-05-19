<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/',[MovieController::class, 'homepage']);

Route::get('/detail/{id}/{slug}', [MovieController::class, 'show']);

