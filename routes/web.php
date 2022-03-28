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
    return view('portafolio-v1/pages/index');
})->name('inicio');
Route::get('/quienes-somos', function () {
    return view('portafolio-v1/pages/quienes-somos');
})->name('quienes-somos');
Route::get('/servicios', function () {
    return view('portafolio-v1/pages/servicios');
})->name('servicios');
Route::get('/casos-de-exito', function () {
    return view('portafolio-v1/pages/casos-exito');
})->name('casos-exito');
Route::get('/contacto', function () {
    return view('portafolio-v1/pages/contacto');
})->name('contacto');

Route::get('/lading', function () {
    return view('landing-pages/consejo-seguridad');
});
