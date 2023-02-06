<?php

use App\Http\Controllers\DatesController;
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

Route::get('today', [DatesController::class, 'today']);
Route::get('tomorrow', [DatesController::class, 'tomorrow']);
Route::get('yesterday', [DatesController::class, 'yesterday']);
Route::get('this-year', [DatesController::class, 'thisYear']);
Route::get('next-year', [DatesController::class, 'nextYear']);
Route::get('last-year', [DatesController::class, 'lastYear']);
Route::get('this-month', [DatesController::class, 'thisMonth']);
Route::get('next-month', [DatesController::class, 'nextMonth']);
Route::get('last-month', [DatesController::class, 'lastMonth']);
Route::get('timestamp', [DatesController::class, 'timestamp']);
