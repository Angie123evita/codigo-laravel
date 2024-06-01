<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');
//ruta del controlador servicios 1
Route::get('servicios', 'App\Http\Controllers\Servicios2Controller@index')->name('servicios');
//Route::get('servicios', 'App\Http\Controllers\Servicios2Controller@index')->name('servicios');
Route::view('contacto', 'contacto')->name('contacto');
//Generar rutas de controlador servicios 2
//Route::resource('servicios','App\Http\Controllers\Servicios2Controller')->except('index','show');
//Generar rutas del controlador servicios 3
//Route::resource('servicios','App\Http\Controllers\ServiciosController');
