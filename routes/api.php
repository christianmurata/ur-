<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController, UrlController};

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

Route::get('/', function () { return 'API ur-l'; });

Route::get('/urls', [UrlController::class, 'index']);
Route::get('/urls/{url}', [UrlController::class, 'show']);
Route::post('/urls', [UrlController::class, 'store']);
Route::patch('/urls/{url}', [UrlController::class, 'update']);
Route::delete('/urls/{url}', [UrlController::class, 'destroy']);

Route::get('/users', [UserController::class, 'index']);
