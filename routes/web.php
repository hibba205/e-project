<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TheaterController;
use App\Http\Controllers\viewerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get("/", function () {
    return view("user.signIn");
});
Route::get("/home", function () {
    return view("user.index");
});
Route::get("/user/movies", function () {
    return view("user.movies");
});
Route::get("/about", function () {
    return view("user.about");
});
Route::get("/contact", function () {
    return view("user.contact");
});
// Route::get("/admin/dashboard", function () {
//     return view("admin.dashboard");
// });
// Route::get("/movies", function () {
//     return view("admin.movies");
// });
// Route::get("/theaters", function () {
//     return view("admin.theaters");
// });
Route::get("/viewers", function () {
    return view("admin.viewers");
});
Route::get('/signIn', [AuthController::class, 'registerForm'])->name('login_register');
Route::post('/signIn', [AuthController::class, 'register'])->name('register');
Route::post('/sign_in', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/dashboard', function () { return view('dashboard'); });

Route::get('/admin/dashboard', [AuthController::class, 'dashboard']);

Route::get('/user/index', [AuthController::class, 'home']);

Route::get('/admin/viewers', [AuthController::class, 'index'])->name('users');
// Route::get("/booking", function () {
//     return view("user.ticket-booking");
// });
// Route::get("/eticket", function () {
//     return view("user.eticket");
// });

Route::resource('/admin/theaters', TheaterController::class);
Route::get('/user/theaters', [TheaterController::class,'publicList'])->name('user.theaters');
Route::resource('/admin/movies', MovieController::class);
Route::get('/user/movies', [MovieController::class, 'publicList'])->name('user.movies');
Route::post('/feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/user/feedbacks', [FeedbackController::class, 'index'])->name('user.feedback');


// Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
// Route::get('/eticket/{id}', [BookingController::class, 'show'])->name('eticket.show');
// Route::get('/admin/booking', [BookingController::class, 'index'])->middleware('auth');

Route::get('/booking', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/eticket/{booking}', [BookingController::class, 'show'])->name('booking.show');
Route::get('admin/booking', [AdminController::class, 'bookings'])->name('admin.booking.index');

