<?php

use Illuminate\Support\Facades\Route;
use \App\Livewire\Back\Inicio;
use \App\Livewire\Back\SubirImagen;
use \App\Http\Controllers\admin\ImagesController;
use \App\Http\Controllers\user\LoginController;


Route::middleware('auth')->group(function () {
  /* Rutas protegidas para administradores*/
  Route::get('/', Inicio::class)->name('back.inicio');
  Route::get('/subir-imagen', SubirImagen::class)->name('back.subir-imagen');
  Route::post('/guardar-imagen', [ImagesController::class, 'store'])->name('back.guardar-imagen');
});
