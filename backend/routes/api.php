<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/lorem', function () {
    return response()->json([
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
    ]);
});

// Route::post('/contact', [ContactController::class, 'contact']);