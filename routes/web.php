<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/objetivos', function () {
    return view('objetivos');
});

Route::get('/contribuir', function () {
    return view('contribuir');
});

Route::get('/contato', function () {
    return view('contato');
});


