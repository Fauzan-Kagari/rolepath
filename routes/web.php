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
    $completedIds = auth()->check()
        ? auth()->user()->completedLessons()->pluck('lesson_id')->toArray()
        : [];
    $progress = auth()->check() ? $course->progressPercentage(auth()->id()) : 0;
    $completedCount = auth()->check() ? $course->completedLessonsCount(auth()->id()) : 0;
    $totalLessons = $course->lessons()->count();
    return view('course-detail', compact('course', 'lessons', 'completedIds', 'progress', 'completedCount', 'totalLessons'));
})->name('courses.show');

Route::get('/courses/{course}/lessons/{lesson}', function (Course $course, $lessonId) {
    $lesson = $course->lessons()->findOrFail($lessonId);
    $groupedLessons = $course->lessons()->orderBy('order_number')->get()->groupBy('section_title');
    $completedIds = auth()->check()
        ? auth()->user()->completedLessons()->pluck('lesson_id')->toArray()
        : [];
    $progress = auth()->check() ? $course->progressPercentage(auth()->id()) : 0;
    return view('lesson', compact('course', 'lesson', 'groupedLessons', 'completedIds', 'progress'));
})->name('courses.lesson');

Route::post('/courses/{course}/lessons/{lesson}/complete', function (Course $course, $lessonId) {
    $lesson = $course->lessons()->findOrFail($lessonId);
    auth()->user()->completedLessons()->syncWithoutDetaching([$lesson->id => ['completed_at' => now()]]);
    return back();
})->middleware('auth')->name('courses.lesson.complete');

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
    Route::put('/admin/courses/{course}', [App\Http\Controllers\AdminController::class, 'updateCourse']);
    Route::delete('/admin/courses/{course}', [App\Http\Controllers\AdminController::class, 'destroyCourse']);

    // --- Rute Edit dan Hapus Materi ---
    Route::get('/admin/lessons/{id}/edit', [App\Http\Controllers\AdminController::class, 'editLesson']);
    Route::put('/admin/lessons/{id}', [App\Http\Controllers\AdminController::class, 'updateLesson']);
    Route::delete('/admin/lessons/{id}', [App\Http\Controllers\AdminController::class, 'deleteLesson']);
});
