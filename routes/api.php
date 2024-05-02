<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::prefix('/products')->group(function () {
    Route::get('', [ProductController::class, 'search']);
    Route::get('/id/{id}', [ProductController::class, 'findById']);
    Route::get('/search', [ProductController::class, 'search']);
    Route::post('/create', [ProductController::class, 'store'])->middleware('auth:sanctum');
});

Route::prefix("/tasks")->group(function (){
   Route::get("",[TaskController::class,"index"]);
    Route::get('/id/{id}', [TaskController::class, 'show']);
    Route::get('/search', [TaskController::class, 'search']);
});

Route::prefix("/user")->group(function (){
    Route::post("/create",[\App\Http\Controllers\UserController::class,"store"]);
    Route::post("/login",[LoginController::class,"authenticate"]);
});
