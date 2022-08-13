<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\BallController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\SetController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/players', [PlayerController::class, 'index']);
// Route::post('/players', [PlayerController::class, 'store']);
Route::get('/players/search/{name}', [PlayerController::class, 'search']);
Route::resource("players", PlayerController::class); 
Route::resource("sets", SetController::class); 
Route::resource("points", PointController::class); 
Route::resource("balls", BallController::class); 
