<?php

use App\Http\Controllers\AuthenticationApiController;
use App\Http\Controllers\DentalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    Route::get('/products', [DentalController::class, 'index']);
    Route::post('/products', [DentalController::class, 'store']);
    Route::get('/products/{product}', [DentalController::class, 'show']);
    Route::put('/products/{product}', [DentalController::class, 'update']);
    Route::patch('/products/{product}', [DentalController::class, 'update']);
    Route::delete('/products/{product}', [DentalController::class, 'destroy']);

    Route::post('/login', [AuthenticationApiController::class, 'login']);
    Route::get('/users', [AuthenticationApiController::class, 'index']);
});

