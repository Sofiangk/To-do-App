<?php

use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Auth\AuthController;
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
Route::prefix('v1')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);

    Route::group(['middleware' => ['auth:sanctum']], function () {



    Route::prefix('tasks')->group(function () {
        Route::get('/task', [TaskController::class, 'index']);
        Route::post('/task', [TaskController::class, 'store']);
        Route::get('/task/{id}', [TaskController::class, 'show']);
        Route::put('/task/{id}', [TaskController::class, 'update']);
        Route::delete('/task/{id}', [TaskController::class, 'destroy']);

    });
    Route::prefix('projects')->group(function () {
        Route::get('/project', [ProjectController::class, 'index']);
        Route::post('/project', [ProjectController::class, 'store']);
        Route::get('/project/{id}', [ProjectController::class, 'show']);
        Route::put('/project/{id}', [ProjectController::class, 'update']);
        Route::delete('/project/{id}', [ProjectController::class, 'destroy']);

    });

    });
});

