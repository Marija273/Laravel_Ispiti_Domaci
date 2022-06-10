<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\KatedraKontroler;
use App\Http\Controllers\API\ProfesorKontroler;
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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('katedra', [KatedraKontroler::class, 'index']);
    Route::get('katedra/{katedra}', [KatedraKontroler::class, 'show']);
    Route::put('katedra/{katedra}', [KatedraKontroler::class, 'update']);
    Route::get('profesor', [ProfesorKontroler::class, 'index']);
    Route::get('profesor/{profesor}', [ProfesorKontroler::class, 'show']);
    Route::delete('profesor/{profesor}', [ProfesorKontroler::class, 'destroy']);
    Route::post('logout', [AuthController::class, 'logout']);
});
