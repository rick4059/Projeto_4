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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index',])->name('home');
Route::get('/departamentos', [App\Http\Controllers\DepartamentosController::class, 'index',])->name('departamentos');
Route::post('/departamentos/delete', [App\Http\Controllers\DepartamentosController::class, 'delete'])->name('ControllerDelete');
Route::post('/departamentos/add', [App\Http\Controllers\DepartamentosController::class, 'add'])->name('ControllerAdd');
Route::post('/departamentos/addToDB', [App\Http\Controllers\DepartamentosController::class, 'addToDB'])->name('ControllerAddToDB');
Route::post('/departamentos/update', [App\Http\Controllers\DepartamentosController::class, 'update'])->name('ControllerUpdate');
Route::post('/departamentos/updateToDB', [App\Http\Controllers\DepartamentosController::class, 'updateToDB'])->name('ControllerUpdateToDB');
