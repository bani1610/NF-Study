<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get("/", function () {
    return view("welcome");
});

Route::get("/dashboard", function () {
    return view("dashboard");
});

Route::get("/test-tailwind", function () {
    return view("test-tailwind");
});

Route::get("/profile", function () {
    return view("profil");
});
