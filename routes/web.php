<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\Controller;


Route::get("/", function () {
    return view('web.login');
});

Route::post("/user-register", [Controller::class, "register"])->name("user.register");
Route::post("/user-login", [Controller::class, "login"])->name("user.login");

Route::prefix('web')->name('web.')->group(function () {
    Route::get("/", function () {
        echo "User Login Success";
    })->name("login");
});
