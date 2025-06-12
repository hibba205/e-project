<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get("/", function () {
    return view("user.index");
});
Route::get("/movies", function () {
    return view("user.movies");
});
Route::get("/about", function () {
    return view("user.about");
});
Route::get("/contact", function () {
    return view("user.contact");
});
Route::get('/signIn', [AuthController::class, 'showLoginRegisterForm'])->name('login_register');
Route::post('/signIn', [AuthController::class, 'register'])->name('register');
Route::post('/sign_in', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', function () { return view('dashboard'); });

