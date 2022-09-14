<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::apiResource('admin-user', AdminUserController::class) -> only('store');
