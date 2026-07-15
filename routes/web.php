<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/signup', function () {
    return view('pages.createuser');
});

Route::post('/users',[UserController::class,'store'])->name('users.store');