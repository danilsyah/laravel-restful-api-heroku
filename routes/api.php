<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// import controller
use App\Http\Controllers\FootballerController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/footballers', [FootballerController::class, 'index'])->name('index.footballers');
Route::get('/footballers/{id}', [FootballerController::class, 'show'])->name('show.footballer');
