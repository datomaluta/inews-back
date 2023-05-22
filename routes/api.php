<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
	return $request->user();
});

Route::middleware('auth:sanctum')->group(
	function () {
		Route::post('/create', [NewsController::class, 'create']);
		Route::put('news/{id}', [NewsController::class, 'update']);
		Route::delete('news/{id}', [NewsController::class, 'destroy']);
		Route::get('/logout', [UserController::class, 'logout']);
	}
);

Route::middleware('guest')->group(
	function () {
		Route::post('/register', [UserController::class, 'register']);
		Route::post('/login', [UserController::class, 'login']);
	}
);

Route::get('/news', [NewsController::class, 'getAllNews']);
Route::get('/news/{category}/{count}', [NewsController::class, 'newsByCategory']);
Route::get('/news/three-for-home', [NewsController::class, 'threeNewsForHome']);
Route::get('news/{id}', [NewsController::class, 'getNews']);
Route::get('/test', [NewsController::class, 'test']);
Route::get('/categories', [CategoryController::class, 'getAllCategories']);
Route::get('/allnews/{category}', [NewsController::class, 'getAllNewsByCategoryForEachPage']);
