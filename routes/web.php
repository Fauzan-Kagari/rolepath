<?php

use Illuminate\Support\Facades\Route;
use App\Models\Course;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/courses', function () {
    $courses = Course::latest()->get();
    return view('course', compact('courses'));
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

Route::get('/courses/{course}', function (Course $course) {
    $lessons = $course->lessons()->orderBy('order_number')->get()->groupBy('section_title');
    return view('course-detail', compact('course', 'lessons'));
})->name('courses.show');

Route::get('/courses/{course}/lessons/{lesson}', function (Course $course, $lessonId) {
    $lesson = $course->lessons()->findOrFail($lessonId);
    $groupedLessons = $course->lessons()->orderBy('order_number')->get()->groupBy('section_title');
    return view('lesson', compact('course', 'lesson', 'groupedLessons'));
})->name('courses.lesson');

Route::get('/dashboard', function () {
    $totalCourses = Course::count();
    return view('dashboard', compact('totalCourses'));
})->middleware('auth')->name('dashboard');

Route::get('/talent-hub', function () {
    return view('talent-hub');
})->middleware('auth')->name('talent-hub');

// --- Rute Khusus Admin ---
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/courses', [App\Http\Controllers\AdminController::class, 'storeCourse']);

    Route::get('/admin/courses/{course}/lessons', [App\Http\Controllers\AdminController::class, 'manageLessons']);
    Route::post('/admin/courses/{course}/lessons', [App\Http\Controllers\AdminController::class, 'storeLesson']);

    // --- Rute Edit dan Hapus Materi ---
    Route::get('/admin/lessons/{id}/edit', [App\Http\Controllers\AdminController::class, 'editLesson']);
    Route::put('/admin/lessons/{id}', [App\Http\Controllers\AdminController::class, 'updateLesson']);
    Route::delete('/admin/lessons/{id}', [App\Http\Controllers\AdminController::class, 'deleteLesson']);
});
