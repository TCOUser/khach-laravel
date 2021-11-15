<?php

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

Route::middleware('auth:api')->group(function (){
    Route::get('/user', [\App\Http\Controllers\UserController::class, 'show']);
    Route::patch('/edit', [\App\Http\Controllers\UserController::class, 'update']);
    Route::delete('user/delete', [\App\Http\Controllers\UserController::class, 'delete']);
    Route::post('products', [\App\Http\Controllers\ProductsController::class, 'postProducts']);
});

Route::post('user',[\App\Http\Controllers\UserController::class,'store']);
