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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/* Posts CRUD APIs */
Route::post('posts', [App\Http\Controllers\PostController::class, 'create']);
Route::put('posts/{id}', [App\Http\Controllers\PostController::class, 'update']);
Route::get('posts', [App\Http\Controllers\PostController::class, 'index']);
Route::get('posts/{id}', [App\Http\Controllers\PostController::class, 'show']);
Route::delete('posts/{id}', [App\Http\Controllers\PostController::class, 'delete']);
/* Comments CRUD APIs */
Route::post('comments', [App\Http\Controllers\CommentController::class, 'create']);
Route::put('comments/{id}', [App\Http\Controllers\CommentController::class, 'update']);
Route::get('comments', [App\Http\Controllers\CommentController::class, 'index']);
Route::get('comments/{id}', [App\Http\Controllers\CommentController::class, 'show']);
Route::delete('comments/{id}', [App\Http\Controllers\CommentController::class, 'delete']);

