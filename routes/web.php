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
    return view('bienvenida');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/album', [App\Http\Controllers\AlbumController::class,'index']);
Route::get('/album/crear', [App\Http\Controllers\AlbumController::class,'getCrear']);
Route::post('/album/crear', [App\Http\Controllers\AlbumController::class,'postCrear']);
Route::get('/album/actualizar', [App\Http\Controllers\AlbumController::class,'getActualizar']);
Route::post('/album/actualizar', [App\Http\Controllers\AlbumController::class,'postActualizar']);
Route::get('/album/eliminar', [App\Http\Controllers\AlbumController::class,'getEliminar']);

Route::get('/album/fotos', [App\Http\Controllers\FotoController::class,'index']);
Route::get('/foto/crear', [App\Http\Controllers\FotoController::class,'getCrear']);
Route::post('/foto/crear', [App\Http\Controllers\FotoController::class,'postCrear']);
Route::get('/foto/actualizar', [App\Http\Controllers\FotoController::class,'getActualizar']);
Route::post('/foto/actualizar', [App\Http\Controllers\FotoController::class,'postActualizar']);
Route::get('/foto/eliminar', [App\Http\Controllers\FotoController::class,'postEliminar']);

Route::get('/usuario', [App\Http\Controllers\FotoController::class,'index']);
Route::get('/usuario/actualizar', [App\Http\Controllers\FotoController::class,'getActualizar']);
Route::post('/usuario/actualizar', [App\Http\Controllers\FotoController::class,'postActualizar']);