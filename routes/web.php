<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SignalsController;
use App\Http\Controllers\StrategiesController;
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
Route::get('/login', [LoginController::class, 'formLogin'])->name('login');
Route::get('/', [LoginController::class, 'formLogin']);

Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

Route::middleware('auth')->prefix('painel')->group(function (){
    Route::get('/', DashboardController::class)->name('dashboard');

    Route::controller(SignalsController::class)->prefix('sinais')
        ->name('signals.')
        ->group(function (){
            Route::get('/', 'index')->name('index');
            Route::post('/', 'store')->name('post');
            Route::put('/{id}', 'update')->name('update');
            Route::get('/{id}/edit', 'edit')->name('edit');
        });
    Route::controller(StrategiesController::class)->prefix('estrategia')
        ->name('strategies.')
        ->group(function (){
            Route::get('/', 'index')->name('index');
            Route::post('/', 'store')->name('post');
            Route::get('/{id}', 'show')->name('show');
        });
});


