<?php

use App\Http\Controllers\ExampleApiController;
use App\Http\Controllers\UsuController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/fakultas", [ExampleApiController::class, 'fakultas']);
Route::get("/program-studi", [ExampleApiController::class, 'programStudi']);
Route::get("/akreditas", [ExampleApiController::class, 'akreditas']);

Route::get('/create', [UsuController::class, 'create']);
