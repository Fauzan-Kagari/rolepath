<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    private function checkAdmin()
    {
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Akses Ditolak. Anda bukan Admin.');
        }
    }

    public function index()
    {
        $this->checkAdmin();

        $courses = Course::latest()->get();
        
        return view('admin.dashboard', compact('courses'));
    }

    public function storeCourse(Request $request)
    {
        $this->checkAdmin();

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'nullable|url',
        ]);

        Course::create($request->only(['title', 'description', 'image_url']));

        return back()->with('success', 'Kursus baru berhasil ditambahkan!');
    }

    public function manageLessons($id)
    {
        if (Auth::user()->role !== 'admin') abort(403);

        $course = Course::findOrFail($id);

        $lessons = $course->lessons()->orderBy('id', 'asc')->get();

        $groupedLessons = $lessons->groupBy('section_title');

        return view('admin.lessons', compact('course', 'groupedLessons'));
    }

    public function storeLesson(Request $request, $id)
    {
        if (Auth::user()->role !== 'admin') abort(403);

        $request->validate([
            'section_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'codepen_url' => 'nullable|url',
        ]);

        $lessonTitle = $request->title === '-'
            ? 'Materi ' . (Lesson::where('course_id', $id)->where('section_title', $request->section_title)->count() + 1)
            : $request->title;

        Lesson::create([
            'course_id' => $id,
            'section_title' => $request->section_title,
            'title' => $lessonTitle,
            'content' => $request->content,
            'codepen_url' => $request->codepen_url,
            'order_number' => Lesson::where('course_id', $id)->count() + 1,
        ]);

        return back()->with('success', 'Materi berhasil ditambahkan ke dalam Widget!');
    }

    public function editLesson($id)
    {
        if (Auth::user()->role !== 'admin') abort(403);

        $lesson = Lesson::findOrFail($id);
        return view('admin.edit-lesson', compact('lesson'));
    }

    public function updateLesson(Request $request, $id)
    {
        if (Auth::user()->role !== 'admin') abort(403);

        $request->validate([
            'section_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'codepen_url' => 'nullable|url',
        ]);

        $lesson = Lesson::findOrFail($id);
        $lesson->update([
            'section_title' => $request->section_title,
            'title' => $request->title,
            'content' => $request->content,
            'codepen_url' => $request->codepen_url,
        ]);

        return redirect('/admin/courses/' . $lesson->course_id . '/lessons')->with('success', 'Materi berhasil diperbarui!');
    }

    public function updateCourse(Request $request, $id)
    {
        if (Auth::user()->role !== 'admin') abort(403);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'nullable|url',
            'category' => 'nullable|string|max:255',
            'access' => 'nullable|string|max:255',
        ]);

        $course = Course::findOrFail($id);
        $course->update($request->only(['title', 'description', 'image_url', 'category', 'access']));

        return back()->with('success', 'Kursus berhasil diperbarui!');
    }

    public function destroyCourse($id)
    {
        if (Auth::user()->role !== 'admin') abort(403);

        $course = Course::findOrFail($id);
        $course->delete();

        return back()->with('success', 'Kursus berhasil dihapus!');
    }

    public function deleteLesson($id)
    {
        if (Auth::user()->role !== 'admin') abort(403);

        $lesson = Lesson::findOrFail($id);
        $course_id = $lesson->course_id;
        $lesson->delete();

        return redirect('/admin/courses/' . $course_id . '/lessons')->with('success', 'Materi berhasil dihapus permanen!');
    }
}