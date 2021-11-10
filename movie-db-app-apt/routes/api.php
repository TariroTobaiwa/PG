<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieTestController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// For App REST API
Route :: get('/movies', [MovieController::class, 'index'])->name('home');
Route::prefix('/movie')->group(function (){
    Route :: post('/store', [MovieController::class, 'store'])->name('home');
    Route :: put('/{id}', [MovieController::class, 'update'])->name('home');
    Route :: get('/{id}', [MovieController::class, 'show'])->name('home');
    Route :: delete('/{id}', [MovieController::class, 'destroy'])->name('home');
});

// For Unit and Feature Tests
Route::prefix('/movie_test')->group(function (){
    Route :: post('/store', [MovieTestController::class, 'store'])->name('home');
    Route :: put('/{id}', [MovieTestController::class, 'update'])->name('home');
    Route :: get('/{id}', [MovieTestController::class, 'show'])->name('home');
    Route :: delete('/{id}', [MovieTestController::class, 'destroy'])->name('home');
});
