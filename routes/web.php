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
    return view('menu1');
});

Route::get('/menu1', function () {
    return view('menu1');
});

Route::get('/menu2', function () {
    return view('menu2');
});

Route::get('/menu3', function () {
    return view('menu3');
});

Route::get('/menu4', function () {
    return view('menu4');
});
