@extends('layouts.app')

@section('title', $course->title . ' - Rolepath')

@section('content')

    <!-- ═══════════════════════════════════════════
         COURSE HEADER
    ════════════════════════════════════════════ -->
    <section class="bg-black pt-28 pb-12 px-4 border-b-2 border-[#0ABF35] relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-1 bg-[#0ABF35]"></div>
        <div class="absolute right-0 top-0 h-full w-64 bg-[#0ABF35] opacity-[0.03]"></div>

        <div class="max-w-5xl mx-auto">
            <!-- Breadcrumb -->
            <div class="flex items-center gap-2 text-xs text-gray-500 uppercase tracking-widest mb-6 font-medium">
                <a href="{{ route('courses') }}" class="hover:text-[#0ABF35] transition-colors">Kursus</a>
                <span>›</span>
                <span class="text-[#0ABF35]">{{ $course->title }}</span>
            </div>

            <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-8">
                <div class="flex-1">
                    <div class="inline-block bg-[#0ABF35] text-black text-xs font-bold px-3 py-1 uppercase tracking-widest rounded-full mb-4">
                        {{ strtoupper($course->category ?? 'UMUM') }}
                    </div>
                    <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight">
                        {{ $course->title }}
                    </h1>
                    <p class="text-gray-400 mt-4 max-w-xl leading-relaxed text-sm">
                        {{ $course->description }}
                    </p>

                    <!-- Meta -->
                    <div class="mt-6 flex flex-wrap items-center gap-5 text-xs text-gray-400">
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-[#0ABF35]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                            <span class="font-medium">80 Jam Belajar</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-[#0ABF35]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 5v14a2 2 0 002 2h12a2 2 0 002-2V5"/><path d="M8 3v4M16 3v4M8 9h8M8 13h6"/></svg>
                            <span class="font-medium">{{ $course->lessons->count() }} Pelajaran</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-[#0ABF35]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                            <span class="font-medium">Sertifikat Tersedia</span>
                        </div>
                        <span class="px-3 py-1 border {{ ($course->access ?? 'free') === 'premium' ? 'border-yellow-500 text-yellow-400' : 'border-[#0ABF35] text-[#0ABF35]' }} font-bold uppercase">{{ strtoupper($course->access ?? 'GRATIS') }}</span>
                    </div>
                </div>

                <!-- CTA -->
                <div class="shrink-0 flex flex-col items-start md:items-end gap-3">
                    <a href="{{ $course->lessons->count() ? route('courses.show', $course) . '#kurikulum' : '#' }}" class="inline-block bg-[#0ABF35] text-black font-bold text-sm px-8 py-4 border-2 border-[#0ABF35] hover:bg-black hover:text-[#0ABF35] transition-colors duration-200 tracking-widest uppercase shadow-[5px_5px_0px_0px_rgba(255,255,255,0.1)]">
                        MULAI KURSUS →
                    </a>
                    <p class="text-xs text-gray-500">{{ $course->lessons->count() }} pelajaran tersedia</p>
                </div>
            </div>

            <!-- Global Progress Bar -->
            <div class="mt-8">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-xs font-bold text-gray-400 uppercase tracking-wider">Progress Keseluruhan</span>
                    <span class="text-xs font-bold text-white">7% <span class="text-gray-500 font-normal">(1 dari 15 Pelajaran)</span></span>
                </div>
                <div class="w-full h-2.5 bg-gray-800 border border-gray-700">
                    <div class="h-full bg-[#0ABF35] transition-all duration-700" style="width: 7%"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
         CURRICULUM BODY
    ════════════════════════════════════════════ -->
    <section id="kurikulum" class="bg-gray-50 min-h-screen px-4 py-12">
        <div class="max-w-5xl mx-auto">

            <div class="flex items-center gap-3 mb-8">
                <span class="w-1 h-6 bg-[#0ABF35] inline-block"></span>
                <h2 class="text-lg font-bold text-gray-900 uppercase tracking-wide">Kurikulum</h2>
            </div>

            <div class="space-y-6">
                @forelse($lessons as $sectionTitle => $sectionLessons)
                    <div class="bg-white border border-gray-200 shadow-sm">
                        <div class="bg-gray-800 px-6 py-4">
                            <h3 class="text-white font-bold text-base uppercase tracking-wide">{{ $sectionTitle }}</h3>
                            <p class="text-xs text-gray-400 mt-0.5">{{ $sectionLessons->count() }} pelajaran</p>
                        </div>

                        <div class="divide-y divide-gray-100">
                            @foreach($sectionLessons as $lesson)
                                <a href="{{ route('courses.lesson', [$course, $lesson]) }}" class="flex items-center justify-between px-6 py-4 hover:bg-gray-50 transition-colors group">
                                    <div class="flex items-center gap-4">
                                        <div class="w-8 h-8 bg-gray-100 flex items-center justify-center text-xs font-bold text-gray-500 shrink-0">
                                            {{ $lesson->order_number ?? $loop->iteration }}
                                        </div>
                                        <p class="text-gray-900 font-medium text-sm">{{ $lesson->title }}</p>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-300 group-hover:text-[#0ABF35] transition-colors shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @empty
                    <div class="bg-white text-center py-16 px-4 border border-gray-200">
                        <div class="w-16 h-16 border-2 border-dashed border-gray-200 flex items-center justify-center mx-auto mb-4 rounded-lg">
                            <svg class="w-7 h-7 text-gray-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                        </div>
                        <p class="text-sm font-bold text-gray-400 uppercase tracking-wider">Belum ada materi</p>
                        <p class="text-xs text-gray-300 mt-1">Admin sedang menyiapkan materi terbaik untukmu!</p>
                    </div>
                @endforelse
            </div>

        </div>
    </section>

@endsection
