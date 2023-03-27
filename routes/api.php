<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Middleware\CheckUUID;

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

Route::post('users', [UserController::class, 'store'])->name('users.store');

Route::middleware([CheckUUID::class])->group(function(){
    Route::apiResource('users', UserController::class)->except(['store']);
    Route::apiResource('tasks', TaskController::class);
});