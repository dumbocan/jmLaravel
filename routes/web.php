<?php

use App\Http\Controllers\customersController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\materialController;
use App\Http\Controllers\projectController;
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

Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/customers', [customersController::class, 'index'])->name('customers');
Route::get('/projects', [projectController::class, 'index'])->name('projects');
Route::get('/materials', [materialController::class, 'index'])->name('materials');
