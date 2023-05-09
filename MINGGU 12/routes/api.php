<?php

use App\Http\Controllers\ApiPendidikanController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/api_pendidikan', [ApiPendidikanController::class, 'index']);
Route::get('/api_pendidikan/{id}', [ApiPendidikanController::class, 'show']);
Route::post('/api_pendidikan', [ApiPendidikanController::class, 'store']);
Route::put('/api_pendidikan/{id}', [ApiPendidikanController::class, 'update']);
Route::delete('/api_pendidikan/{id}', [ApiPendidikanController::class, 'destroy']);
