<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sitiocontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route :: get('/inicio', [sitiocontroller::class, 'index']);

Route::post('/inicio/store', [sitiocontroller::class, 'store'])->name('inicio.store');
