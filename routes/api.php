<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Article Api's
Route::get('/articles',[ArticleController::class,'index']);
Route::post('/articles',[ArticleController::class,'store'])->middleware('auth:sanctum');
Route::get('/articles/{article}',[ArticleController::class,'show']);
Route::delete('/articles/{article}',[ArticleController::class,'destroy'])->middleware('auth:sanctum');

// Authentication Api's
Route::post('/register',[AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'login']);
Route::post('/logout',[AuthController::class, 'logout'])->middleware('auth:sanctum');



// Route -> Controller 