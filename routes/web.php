<?php

use App\Http\Controllers\viewerController;
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
Route::get("/dashboard", function () {
    return view("admin.dashboard");
});
Route::get("/movie", function () {
    return view("admin.movie");
});
Route::get("/theaters", function () {
    return view("admin.theaters");
});
Route::get("/viewers", function () {
    return view("admin.viewers");
});
Route::get('/signIn', [AuthController::class, 'registerForm'])->name('login_register');
Route::post('/signIn', [AuthController::class, 'register'])->name('register');
Route::post('/sign_in', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/dashboard', function () { return view('dashboard'); });

Route::get('/admin/dashboard', [AuthController::class, 'dashboard']);

Route::get('/user/index', [AuthController::class, 'dashboard']);

Route::get('/admin/viewers', [AuthController::class, 'index'])->name('users');
Route::get("/booking", function () {
    return view("user.ticket-booking");
});