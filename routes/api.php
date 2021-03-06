<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RutaController;
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
Route::post('register', [RegisterController::class, 'registro']);
Route::post('login', [RegisterController::class, 'login']);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Se accede a las apis mediante un token.
Route::middleware('auth:api')->group(function () {
    Route::get('/perfil', [ UserController::class, 'perfil']);
    Route::post('/obtenerruta', [RutaController::class, 'ruta']);

});
