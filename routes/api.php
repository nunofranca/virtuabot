<?php

use App\Http\Controllers\DuelsController;
use App\Http\Controllers\ScoreboardsController;
use App\Http\Controllers\SignalsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/duel',[DuelsController::class, 'store']);

Route::get('/signal/{id}', [SignalsController::class, 'getById']);

Route::post('/scoreboards', [ScoreboardsController::class, 'store']);
