<?php

use App\Http\Controllers\ArticleController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/articles',[ArticleController::class, 'index']);
Route::get('/articles/{id}',[ArticleController::class, 'view']);
Route::post('/articles/{id}/comment',[CommentController::class, 'store']);
Route::post('/articles/{id}/like',[LikeController::class, 'store']);
Route::get('/articles/{id}/view',[ViewController::class, 'viewers']);

// •	Url article directory: /articles
// •	Url article page: /articles/{id}
// •	Url article comment: /articles/{id}/comment
// •	Url article like: /articles/{id}/like
// •	Url article views: /articles/{id}/view

