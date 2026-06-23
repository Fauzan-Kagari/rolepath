@extends('layouts.app')

@section('title', 'Dashboard - Rolepath')

@section('content')

    <!-- HERO: WELCOME & STATS -->
    <section class="bg-gray-900 pt-28 pb-12 px-4 border-b-2 border-[#0ABF35] relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-1 bg-[#0ABF35]"></div>
        <div class="absolute right-0 top-0 h-full w-64 bg-[#0ABF35] opacity-[0.03]"></div>

        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-10">
                <div>
                    <div class="inline-block bg-[#0ABF35] text-gray-800 text-xs font-bold px-4 py-1.5 uppercase tracking-widest rounded-full mb-4">
                        DASHBOARD
                    </div>
                    <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight">
                        Selamat datang, <span class="text-[#0ABF35]">{{ Auth::user()->name }}</span>
                    </h1>
                    <p class="mt-2 text-gray-400 text-sm">Siap untuk meningkatkan skill hari ini?</p>
                </div>
                <a href="{{ route('courses') }}" class="self-start md:self-auto inline-block px-6 py-3 bg-[#0ABF35] text-gray-800 font-bold text-xs uppercase tracking-widest border-2 border-[#0ABF35] hover:bg-gray-800 hover:text-white transition-colors duration-200">
                    + TAMBAH KURSUS
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white border-2 border-gray-200 p-6 flex items-center gap-5 hover:border-black transition-colors duration-300">
                    <div class="w-12 h-12 bg-[#0ABF35] flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-gray-500 uppercase tracking-widest">Kursus Tersedia</p>
                        <p class="text-4xl font-black text-black mt-0.5">{{ $totalCourses }}</p>
                    </div>
                </div>

                <div class="bg-white border-2 border-gray-200 p-6 flex items-center gap-5 hover:border-black transition-colors duration-300">
                    <div class="w-12 h-12 bg-black flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-[#0ABF35]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-gray-500 uppercase tracking-widest">Pelajaran Terselesaikan</p>
                        <p class="text-4xl font-black text-black mt-0.5">{{ $totalCompletedLessons }}</p>
                    </div>
                </div>

                <div class="bg-white border-2 border-gray-200 p-6 flex items-center gap-5 hover:border-black transition-colors duration-300">
                    <div class="w-12 h-12 bg-[#0ABF35] flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-gray-500 uppercase tracking-widest">Sertifikat Diraih</p>
                        <p class="text-4xl font-black text-black mt-0.5">{{ $completedCoursesCount }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTINUE LEARNING -->
    <section class="bg-gray-50 py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <span class="w-1 h-6 bg-[#0ABF35] inline-block"></span>
                <h2 class="text-lg font-bold text-gray-900 uppercase tracking-wide">Lanjutkan Belajar</h2>
            </div>

            @if($continueCourse)
                <div class="bg-white border-2 border-black flex flex-col md:flex-row overflow-hidden group hover:shadow-[8px_8px_0px_0px_#0ABF35] transition-all duration-300">
                    <div class="w-full md:w-80 lg:w-96 bg-gray-200 flex-shrink-0 relative overflow-hidden">
                        <img src="{{ $continueCourse->image_url ?? 'https://placehold.co/600x340/0f172a/0ABF35?text=' . urlencode($continueCourse->title) }}" alt="{{ $continueCourse->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700 aspect-video md:aspect-auto">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 bg-[#0ABF35] flex items-center justify-center shadow-[4px_4px_0px_0px_rgba(0,0,0,0.2)]">
                                <svg class="w-8 h-8 text-gray-800 ml-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 flex flex-col justify-center flex-1">
                        <span class="text-xs font-bold text-[#0ABF35] uppercase tracking-widest mb-1">{{ strtoupper($continueCourse->category ?? 'KURSUS') }}</span>
                        <h3 class="text-2xl font-bold text-gray-900 leading-tight">{{ $continueCourse->title }}</h3>
                        @if($continueLastLesson)
                            <p class="text-base text-gray-500 mt-2">Modul {{ $continueLastLesson->section_title ?? 'Utama' }}: {{ $continueLastLesson->title }}</p>
                        @endif

                        <div class="mt-6">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-xs text-gray-400 font-bold uppercase tracking-widest">Progress Kursus</span>
                                <span class="text-sm font-black text-gray-900">{{ $continueProgress }}%</span>
                            </div>
                            <div class="bg-gray-100 h-4 w-full border-2 border-black overflow-hidden">
                                <div class="bg-[#0ABF35] h-full transition-all duration-1000" style="width: {{ $continueProgress }}%"></div>
                            </div>
                        </div>

                        <a href="{{ route('courses.show', $continueCourse) }}" class="inline-block mt-8 bg-gray-800 text-white font-bold text-xs uppercase tracking-widest px-8 py-4 w-max border-2 border-gray-800 hover:bg-white hover:text-gray-800 transition-colors duration-200">
                            LANJUTKAN BELAJAR →
                        </a>
                    </div>
                </div>
            @else
                <div class="bg-white border-2 border-dashed border-gray-300 text-center py-16 px-4 hover:border-gray-400 transition-colors duration-300">
                    <div class="w-16 h-16 mx-auto mb-4 bg-gray-100 flex items-center justify-center">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <p class="text-base font-bold text-gray-400 uppercase tracking-widest mb-1">Belum Ada Aktivitas</p>
                    <p class="text-sm text-gray-400 mb-6">Mulai kursus pertama kamu sekarang!</p>
                    <a href="{{ route('courses') }}" class="inline-block px-6 py-3 bg-[#0ABF35] text-gray-800 font-bold text-xs uppercase tracking-widest border-2 border-[#0ABF35] hover:bg-gray-800 hover:text-white transition-colors duration-200">
                        MULAI BELAJAR →
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- MY COURSES -->
    <section class="bg-white py-16 px-4 border-t-2 border-gray-100">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-10">
                <span class="w-1 h-6 bg-[#0ABF35] inline-block"></span>
                <h2 class="text-lg font-bold text-gray-900 uppercase tracking-wide">Kursus Saya</h2>
            </div>

            @if($enrolledCourses->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($enrolledCourses as $course)
                        @php $progress = $course->progressPercentage(auth()->id()); @endphp
                        <div class="bg-white border-2 border-gray-200 flex flex-col group hover:border-black hover:shadow-[6px_6px_0px_0px_#0ABF35] transition-all duration-300">
                            <div class="relative overflow-hidden bg-gray-200">
                                <img src="{{ $course->image_url ?? 'https://placehold.co/600x340/0f172a/0ABF35?text=' . urlencode($course->title) }}" alt="{{ $course->title }}" class="w-full aspect-video object-cover group-hover:scale-105 transition-all duration-500">
                                <span class="absolute top-3 left-3 px-2.5 py-1 text-xs font-bold uppercase tracking-wider {{ $course->access === 'premium' ? 'bg-yellow-400 text-gray-800' : 'bg-[#0ABF35] text-gray-800' }} border border-black">
                                    {{ strtoupper($course->access ?? 'GRATIS') }}
                                </span>
                            </div>
                            <div class="p-5 flex flex-col flex-1">
                                <span class="text-xs font-bold text-[#0ABF35] uppercase tracking-widest mb-1">{{ strtoupper($course->category ?? 'KURSUS') }}</span>
                                <h3 class="font-bold text-gray-900 text-base leading-snug flex-1">{{ $course->title }}</h3>
                                <div class="mt-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-xs text-gray-400 uppercase tracking-widest font-bold">Progress</span>
                                        <span class="text-xs font-black text-gray-900">{{ $progress }}%</span>
                                    </div>
                                    <div class="bg-gray-100 h-3 w-full border border-gray-200 overflow-hidden">
                                        <div class="bg-[#0ABF35] h-full transition-all duration-500" style="width: {{ $progress }}%"></div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('courses.show', $course) }}" class="block w-full bg-[#0ABF35] text-gray-800 font-bold text-xs text-center py-3 uppercase tracking-widest border-t-2 border-[#0ABF35] group-hover:bg-gray-800 group-hover:text-white transition-colors duration-300">
                                {{ $progress >= 100 ? 'LIHAT SERTIFIKAT →' : 'LANJUTKAN →' }}
                            </a>
                        </div>
                    @endforeach

                    <div class="border-2 border-dashed border-gray-300 flex flex-col items-center justify-center p-8 text-center hover:border-gray-400 hover:bg-gray-50 transition-all duration-300 min-h-[320px] group">
                        <div class="w-16 h-16 bg-gray-100 border-2 border-gray-200 flex items-center justify-center mb-5 group-hover:bg-[#0ABF35] group-hover:border-black transition-all duration-300">
                            <svg class="w-8 h-8 text-gray-400 group-hover:text-gray-800 transition-colors duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                            </svg>
                        </div>
                        <p class="text-base font-bold text-gray-400 uppercase tracking-widest group-hover:text-black transition-colors duration-300">Tambah Kursus Baru</p>
                        <a href="{{ route('courses') }}" class="mt-3 text-sm text-[#0ABF35] font-bold hover:underline underline-offset-4 transition-colors">Lihat Katalog →</a>
                    </div>
                </div>
            @else
                <div class="bg-gray-50 border-2 border-dashed border-gray-300 text-center py-16 px-4">
                    <div class="w-16 h-16 mx-auto mb-4 bg-white flex items-center justify-center border-2 border-gray-200">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <p class="text-base font-bold text-gray-400 uppercase tracking-widest mb-1">Belum Ada Kursus</p>
                    <p class="text-sm text-gray-400 mb-6">Kamu belum terdaftar di kursus manapun.</p>
                    <a href="{{ route('courses') }}" class="inline-block px-6 py-3 bg-[#0ABF35] text-gray-800 font-bold text-xs uppercase tracking-widest border-2 border-[#0ABF35] hover:bg-gray-800 hover:text-white transition-colors duration-200">
                        JELAJAHI KURSUS →
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- CERTIFICATES -->
    <section class="bg-gray-50 py-16 px-4 border-t-2 border-gray-100">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <span class="w-1 h-6 bg-[#0ABF35] inline-block"></span>
                <h2 class="text-lg font-bold text-gray-900 uppercase tracking-wide">Sertifikat & Portofolio</h2>
            </div>

            @php
                $completedCourses = $enrolledCourses->filter(function ($course) {
                    return $course->progressPercentage(auth()->id()) >= 100;
                });
            @endphp

            @if($completedCourses->count() > 0)
                <div class="space-y-6">
                    @foreach($completedCourses as $course)
                        <div class="bg-white border-2 border-black p-6 md:p-8 flex items-center justify-between flex-wrap gap-6 hover:shadow-[6px_6px_0px_0px_#0ABF35] transition-all duration-300">
                            <div class="flex items-center gap-6">
                                <div class="w-16 h-16 bg-black flex items-center justify-center flex-shrink-0">
                                    <svg class="w-8 h-8 text-[#0ABF35]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xl font-bold text-gray-900">{{ $course->title }}</p>
                                    <p class="text-sm text-gray-500 font-bold mt-1 uppercase tracking-wider">Telah diselesaikan — {{ $course->totalLessonsCount() }} Pelajaran</p>
                                </div>
                            </div>
                            <button class="bg-[#0ABF35] text-gray-800 font-bold text-sm uppercase tracking-widest px-8 py-4 border-2 border-[#0ABF35] hover:bg-gray-800 hover:text-white transition-all duration-200">
                                UNDUH PDF →
                            </button>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white border-2 border-dashed border-gray-300 text-center py-16 px-4">
                    <div class="w-16 h-16 mx-auto mb-4 bg-gray-100 flex items-center justify-center">
                        <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <p class="text-base font-bold text-gray-400 uppercase tracking-widest mb-1">Belum Ada Sertifikat</p>
                    <p class="text-sm text-gray-400 mb-6">Selesaikan kursus untuk mendapatkan sertifikat.</p>
                    <a href="{{ route('courses') }}" class="inline-block px-6 py-3 bg-[#0ABF35] text-gray-800 font-bold text-xs uppercase tracking-widest border-2 border-[#0ABF35] hover:bg-gray-800 hover:text-white transition-colors duration-200">
                        LIHAT KURSUS →
                    </a>
                </div>
            @endif
        </div>
    </section>

@endsection