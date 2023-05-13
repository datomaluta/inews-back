<?php

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
Route::get('news/{id}', [NewsController::class, 'getNews']);
