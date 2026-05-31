<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/courses', function () {
    return view('course');
})->name('courses');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [App\Http\Controllers\AuthController::class, 'storeRegister']);

Route::post('/login', [App\Http\Controllers\AuthController::class, 'authenticate']);

Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout']);

Route::get('/courses/junior-cybersecurity-analyst', function () {
    return view('course-detail');
})->name('courses.detail');

Route::get('/courses/junior-cybersecurity-analyst/apa-itu-cybersecurity', function () {
    return view('lesson');
})->name('lesson');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
