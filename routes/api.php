<?php

use App\Http\Controllers\BillboardController;
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

// 公佈欄
Route::prefix('billboard')->group(function (){
    Route::post('/', [BillboardController::class, 'store']);
    Route::get('/', [BillboardController::class, 'index']);
    Route::get('/{id}', [BillboardController::class, 'show']);
    Route::put('/{id}', [BillboardController::class, 'update']);
    Route::delete('/{id}', [BillboardController::class, 'delete']);
});

