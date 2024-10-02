<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Usercontroller;

Route::middleware('auth:sanctum')->get('/user', function 
(Request $request) {
    return $request->user();
});
Route::middleware('auth:api')->get('/user', function 
(Request $request) {
    return $request->user();
});

Route::post('register', [Usercontroller::class, 'register']);