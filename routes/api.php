<?php

use App\Http\Controllers\TasksController;
use App\Http\Controllers\AuthController;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function ($router) {
    Route::group(['prefix' => 'tasks'], function ($router) {
        Route::get('/', [TasksController::class, 'index']);
        Route::post('/', [TasksController::class, 'store']);
        Route::put('/{task}', [TasksController::class, 'update']);
        Route::delete('/{task}', [TasksController::class, 'destroy']);
    });

    Route::post('/logout', [AuthController::class, 'logout']);
});
