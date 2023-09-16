<?php

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
    return $request->user();
});

Route::get('/productList', [DentalController::class, 'index']);
Route::get('/productShow', [DentalController::class, 'index']);
Route::get('/appointmentList', [DentalController::class, 'appointmentList']);
Route::get('/addproduct', [DentalController::class, 'addproduct']);