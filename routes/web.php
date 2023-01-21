<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\addClientController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\materialController;
use App\Http\Controllers\projectController;
>>>>>>> parent of 6fdd902 (fallo en rutas, regreso atras)
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
    return view('auth.login');
});

Auth::routes();

<<<<<<< HEAD
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/addClient', [addClientController::class, 'addClient'])->name('addClient');
Route::get('/projects', [projectController::class, 'index'])->name('projects');
Route::get('/materials', [materialController::class, 'index'])->name('materials');
>>>>>>> parent of 6fdd902 (fallo en rutas, regreso atras)
