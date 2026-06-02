@extends('layouts.app')

@section('title', 'Course Catalog - Rolepath')

@section('content')

    <!-- Page Header -->
    <section class="bg-gray-100 pt-32 md:pt-30 pb-12 md:pb-16 px-4 relative overflow-hidden">
        <div class="absolute right-0 top-0 h-full w-1/3 bg-[#0ABF35] opacity-[0.04] skew-x-[-12deg] translate-x-16"></div>
        <div class="max-w-6xl mx-auto relative">
            <div class="inline-block bg-[#0ABF35] text-gray-800 text-xs font-bold px-4 py-1.5 uppercase tracking-widest rounded-full mb-4">
                KATALOG KURSUS
            </div>
            <h1 class="text-3xl md:text-5xl font-bold text-gray-900 leading-tight">
                Katalog Kurikulum<br>
                <span class="relative inline-block">
                    Berbasis Peran
                    <span class="absolute -bottom-1 left-0 w-full h-1 bg-[#0ABF35]"></span>
                </span>
            </h1>
            <p class="mt-6 text-base text-gray-500 max-w-2xl leading-relaxed">
                Tingkatkan keahlian teknis Anda dengan kurikulum yang dirancang khusus untuk memenuhi standar industri. Mulai perjalanan karir Anda hari ini.
            </p>
        </div>
    </section>

    <!-- Main Content: Sidebar + Course Grid -->
    <section class="bg-white py-10 md:py-14 px-4">
        <div class="max-w-6xl mx-auto flex flex-col lg:flex-row gap-10">

            <!-- Sidebar (Filters) -->
            <aside class="w-full lg:w-64 shrink-0">
                <div class="border-2 border-gray-300 p-6">
                    <div class="flex items-center gap-2 mb-6 pb-4 border-b-2 border-gray-300">
                        <svg class="w-5 h-5 text-gray-800" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z"/>
                        </svg>
                        <h3 class="font-bold text-gray-800 text-base uppercase tracking-widest">Filters</h3>
                    </div>

                    <div class="mb-7">
                        <h4 class="text-xs font-bold text-gray-800 uppercase tracking-widest mb-4 flex items-center gap-2">
                            <span class="w-3 h-0.5 bg-[#0ABF35] inline-block"></span>
                            SUBJECTS
                        </h4>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 text-sm text-gray-700 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 accent-[#0ABF35] border-2 border-gray-400 rounded-none" />
                                <span class="group-hover:text-gray-900 transition-colors">Cybersecurity</span>
                            </label>
                            <label class="flex items-center gap-3 text-sm text-gray-700 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 accent-[#0ABF35] border-2 border-gray-400 rounded-none" />
                                <span class="group-hover:text-gray-900 transition-colors">Networking</span>
                            </label>
                            <label class="flex items-center gap-3 text-sm text-gray-700 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 accent-[#0ABF35] border-2 border-gray-400 rounded-none" />
                                <span class="group-hover:text-gray-900 transition-colors">AI & Data Science</span>
                            </label>
                            <label class="flex items-center gap-3 text-sm text-gray-700 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 accent-[#0ABF35] border-2 border-gray-400 rounded-none" />
                                <span class="group-hover:text-gray-900 transition-colors">Programming</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-7">
                        <h4 class="text-xs font-bold text-gray-800 uppercase tracking-widest mb-4 flex items-center gap-2">
                            <span class="w-3 h-0.5 bg-[#0ABF35] inline-block"></span>
                            LEVEL
                        </h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1.5 text-xs font-bold uppercase tracking-wider bg-gray-800 text-white border-2 border-gray-800 cursor-pointer">Semua</span>
                            <span class="px-3 py-1.5 text-xs font-bold uppercase tracking-wider border-2 border-gray-400 text-gray-700 bg-white cursor-pointer hover:border-gray-600 transition-colors">Beginner</span>
                            <span class="px-3 py-1.5 text-xs font-bold uppercase tracking-wider border-2 border-gray-400 text-gray-700 bg-white cursor-pointer hover:border-gray-600 transition-colors">Intermediate</span>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-xs font-bold text-gray-800 uppercase tracking-widest mb-4 flex items-center gap-2">
                            <span class="w-3 h-0.5 bg-[#0ABF35] inline-block"></span>
                            AKSES
                        </h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1.5 text-xs font-bold uppercase tracking-wider bg-gray-800 text-white border-2 border-gray-800 cursor-pointer">Semua</span>
                            <span class="px-3 py-1.5 text-xs font-bold uppercase tracking-wider border-2 border-[#0ABF35] text-[#0ABF35] bg-white cursor-pointer hover:bg-[#0ABF35] hover:text-gray-800 transition-colors">Gratis</span>
                            <span class="px-3 py-1.5 text-xs font-bold uppercase tracking-wider border-2 border-yellow-500 text-yellow-600 bg-white cursor-pointer hover:bg-yellow-500 hover:text-gray-800 transition-colors">Premium</span>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Main Content -->
            <main class="flex-1 min-w-0">

                <!-- Search Bar -->
                <div class="relative mb-8">
                    <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/>
                    </svg>
                    <input
                        type="text"
                        placeholder="Cari kursus, jalur karir, atau materi..."
                        class="w-full pl-11 pr-4 py-3.5 border-2 border-gray-300 text-sm text-gray-700 placeholder:text-gray-400 focus:outline-none focus:border-gray-400 transition-colors"
                    />
                </div>

                <!-- Results Count -->
                <div class="flex items-center justify-between mb-6">
                    <p class="text-sm text-gray-500"><span class="font-bold text-gray-800">{{ $courses->count() }}</span> kursus ditemukan</p>
                    <select class="text-sm border-2 border-gray-300 px-3 py-1.5 text-gray-700 focus:outline-none focus:border-gray-400 transition-colors bg-white">
                        <option>Terbaru</option>
                        <option>Populer</option>
                        <option>A - Z</option>
                    </select>
                </div>

                <!-- Course Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

                    @forelse($courses as $course)
                        <article class="bg-white border-2 border-gray-200 flex flex-col group hover:border-gray-400 hover:shadow-md transition-all duration-300">
                            <div class="relative overflow-hidden">
                                <img
                                    src="{{ $course->image_url ?? 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=2070&auto=format&fit=crop' }}"
                                    alt="{{ $course->title }}"
                                    class="w-full h-44 object-cover group-hover:scale-105 transition-transform duration-500"
                                />
                                <span class="absolute top-3 left-3 px-3 py-1 text-xs font-bold uppercase tracking-wider bg-[#0ABF35] text-gray-800 border border-[#0ABF35]">
                                    {{ ($course->access ?? 'free') === 'premium' ? 'PREMIUM' : 'GRATIS' }}
                                </span>
                            </div>
                            <div class="p-5 flex flex-col flex-1">
                                <span class="text-xs font-bold uppercase tracking-widest text-[#0ABF35] mb-1">{{ $course->category ?? 'Umum' }}</span>
                                <h3 class="font-bold text-gray-900 text-base leading-snug mb-2">{{ $course->title }}</h3>
                                <p class="text-sm text-gray-500 leading-relaxed line-clamp-3 flex-1">
                                    {{ $course->description }}
                                </p>
                                <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-400">
                                    <div class="flex items-center gap-1.5">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                                        <span class="font-medium">Online</span>
                                    </div>
                                    <span class="px-2.5 py-1 border border-gray-200 text-gray-500 rounded text-xs font-medium uppercase tracking-wide">
                                        {{ ($course->access ?? 'free') === 'premium' ? 'Intermediate' : 'Beginner' }}
                                    </span>
                                </div>
                            </div>
                            <a href="{{ route('courses.show', $course) }}" class="block w-full bg-[#0ABF35] text-gray-800 font-bold text-xs text-center py-3.5 uppercase tracking-widest border-t border-gray-200 hover:bg-gray-800 hover:text-white transition-colors duration-300">
                                MULAI BELAJAR →
                            </a>
                        </article>
                    @empty
                        <div class="col-span-full text-center py-20 bg-white border-2 border-dashed border-gray-300">
                            <svg class="w-12 h-12 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                            <p class="text-gray-400 font-bold mb-1">Belum ada kursus yang tersedia.</p>
                            <p class="text-sm text-gray-400">Admin sedang menyiapkan materi terbaik untukmu!</p>
                        </div>
                    @endforelse

                </div>

                <!-- Pagination -->
                <nav class="mt-10 flex justify-center" aria-label="Pagination">
                    <div class="flex items-center gap-1.5">
                        <a href="#" class="w-9 h-9 flex items-center justify-center border-2 border-gray-300 text-sm text-gray-600 hover:border-gray-400 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 flex items-center justify-center text-sm font-bold bg-gray-800 text-white border-2 border-gray-800 shadow-sm">1</a>
                        <a href="#" class="w-9 h-9 flex items-center justify-center border-2 border-gray-300 text-sm text-gray-600 hover:border-gray-400 transition-colors">2</a>
                        <a href="#" class="w-9 h-9 flex items-center justify-center border-2 border-gray-300 text-sm text-gray-600 hover:border-gray-400 transition-colors">3</a>
                        <span class="w-9 h-9 flex items-center justify-center text-sm text-gray-400">...</span>
                        <a href="#" class="w-9 h-9 flex items-center justify-center border-2 border-gray-300 text-sm text-gray-600 hover:border-gray-400 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                        </a>
                    </div>
                </nav>

            </main>
        </div>
    </section>

@endsection
