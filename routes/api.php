<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavBaritemController;
use App\Http\Controllers\SummaryCardController;
use App\Http\Controllers\CarouselBoardController;


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
Route::get('/navbaritems', [NavBaritemController::class, 'NavBaritems']);
Route::get('/SummaryCards', [SummaryCardController::class, 'SummaryCard']);
Route::get('/CarouselBoard', [CarouselBoardController::class, 'CarouselBoard']);

