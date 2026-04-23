<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{book}', [BookController::class, 'show']);
Route::post('/books/add', [BookController::class, 'store']);
Route::delete('/books', [BookController::class, 'destroy']);

Route::get('/games', [GameController::class, 'index']);
Route::get('/games/{game}', [GameController::class, 'show']);
Route::post('/games/add', [GameController::class, 'store']);
Route::delete('/games', [GameController::class, 'destroy']);


Route::get('/tools', [ToolController::class, 'index']);
Route::get('/tools/{tool}', [ToolController::class, 'show']);
Route::post('/tools/add', [ToolController::class, 'store']);
Route::delete('/tools', [ToolController::class, 'destroy']);
