<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FPCController;

Route::get('/hello', function () {
    return response()->json(['message' => 'Hello, world!']);
});
Route::get('/first-team', [FPCController::class, 'FirsTeam']);