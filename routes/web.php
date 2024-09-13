<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\exampleController;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, "showCorrectHomepage"]);

Route::get('/loginPage', [exampleController::class, "loginPage"]);

Route::post('/login', [UserController::class, "login"]);

Route::post('/signup', [UserController::class, "signup"]);

