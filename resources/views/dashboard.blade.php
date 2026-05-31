@extends('layouts.app')

@section('title', 'Dashboard - Rolepath')

@section('content')

    <!-- Section 1: Welcome & Quick Stats -->
    <section class="bg-black pt-36 md:pt-44 pb-12 px-4 relative overflow-hidden">
        <!-- Decorative -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-[#0ABF35] opacity-[0.04] rounded-full translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 left-1/2 w-64 h-1 bg-[#0ABF35] opacity-20"></div>

        <div class="max-w-7xl mx-auto">
            <!-- Greeting -->
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-10">
                <div>
                    <div class="inline-block bg-[#0ABF35] text-white text-xs font-bold px-4 py-1.5 uppercase tracking-widest rounded-full mb-3 border border-black">
                        DASHBOARD
                    </div>
                    <h1 class="text-3xl md:text-5xl font-black text-white leading-tight">
                        Selamat datang, <span class="text-[#0ABF35]">{{ Auth::user()->name }}</span>
                    </h1>
                    <p class="mt-2 text-gray-400 text-sm">Siap untuk meningkatkan skill hari ini?</p>
                </div>
                <a href="{{ route('courses') }}" class="self-start md:self-auto inline-block px-6 py-3 bg-[#0ABF35] text-white font-bold text-xs uppercase tracking-widest border-2 border-black hover:bg-black hover:text-[#0ABF35] transition-colors duration-200 shadow-[4px_4px_0px_0px_rgba(255,255,255,0.1)]">
                    + TAMBAH KURSUS
                </a>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <article class="bg-white border-2 border-black p-6 flex items-center gap-5 shadow-[6px_6px_0px_0px_#0ABF35]">
                    <div class="w-12 h-12 bg-[#0ABF35] border-2 border-black flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-gray-500 uppercase tracking-widest">Kursus Aktif</p>
                        <p class="text-4xl font-black text-black mt-0.5">2</p>
                    </div>
                </article>

                <article class="bg-[#0ABF35] border-2 border-black p-6 flex items-center gap-5 shadow-[6px_6px_0px_0px_#fff]">
                    <div class="w-12 h-12 bg-black flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-[#0ABF35]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-white uppercase tracking-widest opacity-80">Jam Belajar</p>
                        <p class="text-4xl font-black text-white mt-0.5">15</p>
                    </div>
                </article>

                <article class="bg-white border-2 border-black p-6 flex items-center gap-5 shadow-[6px_6px_0px_0px_#0ABF35]">
                    <div class="w-12 h-12 bg-black flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-[#0ABF35]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-gray-500 uppercase tracking-widest">Sertifikat Diraih</p>
                        <p class="text-4xl font-black text-black mt-0.5">1</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Section 2: Continue Learning -->
    <section class="bg-gray-50 py-16 px-4 border-y-2 border-black">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <span class="w-2 h-8 bg-[#0ABF35] inline-block border border-black"></span>
                <h2 class="text-2xl md:text-3xl font-black text-black uppercase tracking-tight">Lanjutkan Belajar</h2>
            </div>

            <article class="bg-white border-2 border-black shadow-[10px_10px_0px_0px_#0ABF35] flex flex-col md:flex-row overflow-hidden group hover:shadow-[14px_14px_0px_0px_#0ABF35] transition-all duration-300">
                <!-- Thumbnail -->
                <div class="w-full md:w-80 lg:w-96 bg-black flex-shrink-0 relative overflow-hidden">
                    <img src="https://placehold.co/600x340/0f172a/0ABF35?text=SOC+Analyst" alt="Course Thumbnail" class="w-full h-full object-cover opacity-60 group-hover:opacity-80 group-hover:scale-105 transition-all duration-700 aspect-video md:aspect-auto">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-16 h-16 bg-[#0ABF35] border-2 border-black flex items-center justify-center shadow-[4px_4px_0px_0px_#000]">
                            <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Info -->
                <div class="p-8 flex flex-col justify-center flex-1">
                    <span class="text-xs font-bold text-[#0ABF35] uppercase tracking-widest mb-1">Cybersecurity</span>
                    <h3 class="text-2xl font-black text-black leading-tight">Cybersecurity & SOC Analyst</h3>
                    <p class="text-base text-gray-500 mt-2">Modul 4: Network Scanning & Vulnerability Analysis</p>

                    <!-- Progress -->
                    <div class="mt-6">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs text-gray-400 font-bold uppercase tracking-widest">Progress Kursus</span>
                            <span class="text-sm font-black text-black">65%</span>
                        </div>
                        <div class="bg-gray-100 h-4 w-full border-2 border-black overflow-hidden">
                            <div class="bg-[#0ABF35] w-[65%] h-full border-r-2 border-black transition-all duration-1000"></div>
                        </div>
                    </div>

                    <a href="{{ route('courses') }}" class="inline-block mt-8 bg-black text-[#0ABF35] font-bold text-xs uppercase tracking-widest px-8 py-4 w-max border-2 border-black hover:bg-white hover:text-black transition-colors duration-200">
                        LANJUTKAN BELAJAR →
                    </a>
                </div>
            </article>
        </div>
    </section>

    <!-- Section 3: My Courses -->
    <section class="bg-white py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-10">
                <span class="w-2 h-8 bg-[#0ABF35] inline-block border border-black"></span>
                <h2 class="text-2xl md:text-3xl font-black text-black uppercase tracking-tight">Kursus Saya</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Course Card 1 -->
                <article class="bg-white border-2 border-gray-200 flex flex-col group hover:border-black hover:shadow-[8px_8px_0px_0px_#0ABF35] transition-all duration-300">
                    <div class="relative overflow-hidden bg-black">
                        <img src="https://placehold.co/600x340/0f172a/94a3b8?text=Junior+Analyst" alt="Junior Cybersecurity Analyst" class="w-full aspect-video object-cover opacity-60 group-hover:opacity-90 group-hover:scale-105 transition-all duration-500">
                        <span class="absolute top-4 left-4 px-3 py-1 text-xs font-bold uppercase tracking-wider bg-yellow-400 text-black border-2 border-black shadow-[3px_3px_0px_0px_#000]">PREMIUM</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <span class="text-xs font-bold text-[#0ABF35] uppercase tracking-widest mb-1">Cybersecurity</span>
                        <h3 class="text-lg font-bold text-black leading-snug">Junior Cybersecurity Analyst</h3>
                        <div class="mt-6">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-xs text-gray-400 uppercase tracking-widest font-bold">Progress</span>
                                <span class="text-xs font-black text-black">30%</span>
                            </div>
                            <div class="bg-gray-100 h-3 w-full border-2 border-black overflow-hidden">
                                <div class="bg-[#0ABF35] w-[30%] h-full transition-all duration-500"></div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('courses') }}" class="block w-full bg-[#0ABF35] text-white font-bold text-xs text-center py-4 uppercase tracking-widest border-t-2 border-black group-hover:bg-black group-hover:text-[#0ABF35] transition-colors duration-300">
                        LANJUTKAN →
                    </a>
                </article>

                <!-- Course Card 2 -->
                <article class="bg-white border-2 border-gray-200 flex flex-col group hover:border-black hover:shadow-[8px_8px_0px_0px_#0ABF35] transition-all duration-300">
                    <div class="relative overflow-hidden bg-black">
                        <img src="https://placehold.co/600x340/0f172a/0ABF35?text=CyberOps" alt="CyberOps Associate" class="w-full aspect-video object-cover opacity-60 group-hover:opacity-90 group-hover:scale-105 transition-all duration-500">
                        <span class="absolute top-4 left-4 px-3 py-1 text-xs font-bold uppercase tracking-wider bg-[#0ABF35] text-white border-2 border-black shadow-[3px_3px_0px_0px_#000]">GRATIS</span>
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                        <span class="text-xs font-bold text-[#0ABF35] uppercase tracking-widest mb-1">Cybersecurity</span>
                        <h3 class="text-lg font-bold text-black leading-snug">CyberOps Associate</h3>
                        <div class="mt-6">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-xs text-gray-400 uppercase tracking-widest font-bold">Progress</span>
                                <span class="text-xs font-black text-black">15%</span>
                            </div>
                            <div class="bg-gray-100 h-3 w-full border-2 border-black overflow-hidden">
                                <div class="bg-[#0ABF35] w-[15%] h-full transition-all duration-500"></div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('courses') }}" class="block w-full bg-[#0ABF35] text-white font-bold text-xs text-center py-4 uppercase tracking-widest border-t-2 border-black group-hover:bg-black group-hover:text-[#0ABF35] transition-colors duration-300">
                        LANJUTKAN →
                    </a>
                </article>

                <!-- Add New Course CTA Card -->
                <article class="border-2 border-dashed border-gray-300 flex flex-col items-center justify-center p-8 text-center hover:border-black hover:bg-gray-50 transition-all duration-300 min-h-[300px] group relative">
                    <div class="w-16 h-16 bg-gray-100 border-2 border-gray-200 flex items-center justify-center mb-5 group-hover:bg-[#0ABF35] group-hover:border-black group-hover:shadow-[4px_4px_0px_0px_#000] transition-all duration-300">
                        <svg class="w-8 h-8 text-gray-400 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                        </svg>
                    </div>
                    <p class="text-base font-bold text-gray-400 uppercase tracking-widest group-hover:text-black transition-colors duration-300">Tambah Kursus Baru</p>
                    <a href="{{ route('courses') }}" class="mt-3 text-sm text-[#0ABF35] font-bold hover:underline underline-offset-4 transition-colors">Lihat Katalog →</a>
                </article>

            </div>
        </div>
    </section>

    <!-- Section 4: Certificates -->
    <section class="bg-gray-50 py-16 px-4 border-t-2 border-black">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-3 mb-8">
                <span class="w-2 h-8 bg-[#0ABF35] inline-block border border-black"></span>
                <h2 class="text-2xl md:text-3xl font-black text-black uppercase tracking-tight">Sertifikat & Portofolio</h2>
            </div>

            <article class="bg-white border-2 border-black shadow-[8px_8px_0px_0px_#0ABF35] p-8 flex items-center justify-between flex-wrap gap-6 hover:shadow-[12px_12px_0px_0px_#0ABF35] transition-all duration-300">
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 bg-black flex items-center justify-center flex-shrink-0 border-2 border-black shadow-[4px_4px_0px_0px_#0ABF35]">
                        <svg class="w-8 h-8 text-[#0ABF35]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-xl font-black text-black">Sertifikat Dasar Networking</p>
                        <p class="text-sm text-gray-500 font-bold mt-1 uppercase tracking-wider">Diterbitkan 15 Januari 2026</p>
                    </div>
                </div>
                <button class="bg-[#0ABF35] text-white font-bold text-sm uppercase tracking-widest px-8 py-4 border-2 border-black hover:bg-black hover:text-[#0ABF35] transition-all duration-200 shadow-[4px_4px_0px_0px_rgba(0,0,0,0.1)]">
                    UNDUH PDF →
                </button>
            </article>

        </div>
    </section>

@endsection
