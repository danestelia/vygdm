<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\PageController;
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\user\LoginController;
use App\Http\Controllers\admin\AdminController;

/* ==== Rutas para páginas del sitio ==== */
Route::controller(PageController::class)->group(function () {
  Route::get('/', 'index')->name('index');
  Route::get('/inicio', 'inicio')->name('inicio');
  Route::get('/sobre-nosotros', 'about')->name('page.nosotros');
  Route::get('/servicios', 'services')->name('page.servicios');
  Route::get('/galeria-trabajos', 'gallery')->name('page.galeria');
  Route::get('/blog', 'blog')->name('page.blog');
  Route::get('/contacto', 'contact')->name('page.contacto');
});

/* ==== Rutas para adminsitracion del usuario ==== */
Route::controller(UserController::class)->group(function () {
  Route::get('/create-user', 'create')->name('create.user');
  Route::post('/store-user', 'store')->name('store.user');
});

Route::controller(LoginController::class)->group(function () {
  Route::get('/login', 'login')->name('login');
  Route::post('/authenticate', 'authenticate')->name('authenticate');
});

Route::controller(AdminController::class)->middleware('auth')->group(function () {
  Route::get('/admin', 'index')->name('index.admin');
  Route::get('/admin/logout', 'logout')->name('logout.admin');
});
