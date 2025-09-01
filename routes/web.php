<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;

// Route bawaan Laravel
Route::get('/', function () {
    return view('welcome');
});

// Route tambahan untuk tugas
Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'time'   => now()->toISOString(),
    ]);
});

// Route untuk clubs
Route::get('/clubs', [ClubController::class, 'index']);
