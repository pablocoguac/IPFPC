<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FPCController;
use App\Http\Controllers\OpsController;

Route::get('/hello', function () {
    return response()->json(['message' => 'Hello, world!']);
});
Route::get('/first-team', [FPCController::class, 'FirsTeam']);
Route::get('/first-match', [FPCController::class, 'MatchFirstQuarter']);

Route::get('/sum', [OpsController::class, 'Sum']);
Route::get('/subs', [OpsController::class, 'Subs']);
Route::get('/mult', [OpsController::class, 'Mult']);
Route::get('/div', [OpsController::class, 'Div']);
Route::get('/pow', [OpsController::class, 'Pow']);
Route::get('/cub', [OpsController::class, 'Cub']);
