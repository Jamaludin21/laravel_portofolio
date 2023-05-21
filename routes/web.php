<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/ecommerce', function () {
    return view('Portofolio/sensa');
});

Route::get('/raport', function () {
    return view('Portofolio/raport');
});

Route::get('/kampus_gratis', function () {
    return view('Portofolio/kg');
});

Route::get('/perpustakaan', function () {
    return view('Portofolio/perpus');
});