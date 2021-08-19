<?php

use App\Http\Controllers\StepController;
use App\Http\Controllers\TodolistController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/todolist', TodolistController::class);
Route::get('/todolist/{search}/search',[ TodolistController::class, 'search']);

Route::resource('/step', StepController::class);
Route::get('/step/{id}/getByTodolistId', [StepController::class, 'getByTodolistId']);
Route::get('/step/{id}/{search}', [StepController::class, 'search']);