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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/item', [App\Http\Controllers\ItemController::class, 'addItem'])->name('item');
Route::post('/post', [App\Http\Controllers\ItemController::class, 'post'])->name('post');
Route::get('/view', [App\Http\Controllers\ItemController::class, 'viewItem'])->name('view');
Route::put('/itemupdate{id}', [App\Http\Controllers\ItemController::class, 'itemUpdate']);
Route::any('/edit{id}', [App\Http\Controllers\ItemController::class, 'updateItem']);
