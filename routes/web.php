<?php

use Illuminate\Support\Facades\Route;
use App\Models\Course;

Route::get('/', function () {
    $freeCourses = Course::where('access', 'free')->latest()->take(4)->get();
    return view('welcome', compact('freeCourses'));
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

Route::get('/auth/google', [App\Http\Controllers\GoogleAuthController::class, 'redirect'])->name('google.login');
Route::get('/auth/google/callback', [App\Http\Controllers\GoogleAuthController::class, 'callback']);

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
    $user = auth()->user();
    $totalCourses = Course::count();

    $enrolledCourses = Course::whereHas('lessons.completedByUsers', function ($q) use ($user) {
        $q->where('user_id', $user->id);
    })->get();

    $totalCompletedLessons = $user->completedLessons()->count();

    $lastCompletedLesson = $user->completedLessons()
        ->with('course')
        ->orderBy('lesson_user.completed_at', 'desc')
        ->first();

    $continueCourse = null;
    $continueProgress = 0;
    $continueLastLesson = null;

    if ($lastCompletedLesson && $lastCompletedLesson->course) {
        $continueCourse = $lastCompletedLesson->course;
        $continueProgress = $continueCourse->progressPercentage($user->id);
        $continueLastLesson = $lastCompletedLesson;
    }

    $completedCoursesCount = 0;
    foreach ($enrolledCourses as $course) {
        if ($course->progressPercentage($user->id) >= 100) {
            $completedCoursesCount++;
        }
    }

    return view('dashboard', compact(
        'totalCourses',
        'enrolledCourses',
        'totalCompletedLessons',
        'continueCourse',
        'continueProgress',
        'continueLastLesson',
        'completedCoursesCount'
    ));
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

    // --- Rute Kelola Pengguna ---
    Route::put('/admin/users/{id}/role', [App\Http\Controllers\AdminController::class, 'updateUserRole']);
});
