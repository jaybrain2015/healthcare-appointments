<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Health check endpoint
Route::get('/health', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'Healthcare API is running!',
        'timestamp' => now(),
        'database' => DB::connection()->getPdo() ? 'connected' : 'disconnected'
    ]);
});

// Get all users (we'll protect this later)
Route::get('/users', function () {
    return response()->json([
        'users' => \App\Models\User::all()
    ]);
});
