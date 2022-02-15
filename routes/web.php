<?php

use App\Http\Controllers\GameController;
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



Route::controller(GameController::class)->group(function () {
    Route::get('/games', 'index')->name('games.index');
    Route::get('/games/create', 'create');
    Route::post('/games', 'store');
    Route::get('/games/edit/{id}', 'edit');
    Route::get('/games/delete/{id}', 'delete');
});



