@extends('layouts.app')

@section('title', 'Course Catalog - Rolepath')

@section('content')

    <!-- Page Header -->
    <section class="bg-gray-100 pt-32 md:pt-30 pb-12 md:pb-16 px-4 relative overflow-hidden">
        <div class="absolute right-0 top-0 h-full w-1/3 bg-[#0ABF35] opacity-[0.04] skew-x-[-12deg] translate-x-16"></div>
        <div class="max-w-6xl mx-auto relative">
            <div class="inline-block bg-[#0ABF35] text-white text-xs font-bold px-4 py-1.5 uppercase tracking-widest rounded-full mb-4">
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
                <div class="border-2 border-black p-6 shadow-[5px_5px_0px_0px_#0ABF35]">
                    <!-- Header -->
                    <div class="flex items-center gap-2 mb-6 pb-4 border-b-2 border-black">
                        <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path d="M22 3H2l8 9.46V19l4 2v-8.54L22 3z"/>
                        </svg>
                        <h3 class="font-bold text-black text-base uppercase tracking-widest">Filters</h3>
                    </div>

                    <!-- Subjects -->
                    <div class="mb-7">
                        <h4 class="text-xs font-bold text-black uppercase tracking-widest mb-4 flex items-center gap-2">
                            <span class="w-3 h-0.5 bg-[#0ABF35] inline-block"></span>
                            SUBJECTS
                        </h4>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 text-sm text-gray-700 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 accent-[#0ABF35] border-2 border-black rounded-none" />
                                <span class="group-hover:text-black transition-colors">Cybersecurity</span>
                            </label>
                            <label class="flex items-center gap-3 text-sm text-gray-700 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 accent-[#0ABF35] border-2 border-black rounded-none" />
                                <span class="group-hover:text-black transition-colors">Networking</span>
                            </label>
                            <label class="flex items-center gap-3 text-sm text-gray-700 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 accent-[#0ABF35] border-2 border-black rounded-none" />
                                <span class="group-hover:text-black transition-colors">AI & Data Science</span>
                            </label>
                            <label class="flex items-center gap-3 text-sm text-gray-700 cursor-pointer group">
                                <input type="checkbox" class="w-4 h-4 accent-[#0ABF35] border-2 border-black rounded-none" />
                                <span class="group-hover:text-black transition-colors">Programming</span>
                            </label>
                        </div>
                    </div>

                    <!-- Level -->
                    <div class="mb-7">
                        <h4 class="text-xs font-bold text-black uppercase tracking-widest mb-4 flex items-center gap-2">
                            <span class="w-3 h-0.5 bg-[#0ABF35] inline-block"></span>
                            LEVEL
                        </h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1.5 text-xs font-bold uppercase tracking-wider bg-black text-white border-2 border-black cursor-pointer">Semua</span>
                            <span class="px-3 py-1.5 text-xs font-bold uppercase tracking-wider border-2 border-gray-300 text-gray-600 bg-white cursor-pointer hover:border-black transition-colors">Beginner</span>
                            <span class="px-3 py-1.5 text-xs font-bold uppercase tracking-wider border-2 border-gray-300 text-gray-600 bg-white cursor-pointer hover:border-black transition-colors">Intermediate</span>
                        </div>
                    </div>

                    <!-- Akses -->
                    <div>
                        <h4 class="text-xs font-bold text-black uppercase tracking-widest mb-4 flex items-center gap-2">
                            <span class="w-3 h-0.5 bg-[#0ABF35] inline-block"></span>
                            AKSES
                        </h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1.5 text-xs font-bold uppercase tracking-wider bg-black text-white border-2 border-black cursor-pointer">Semua</span>
                            <span class="px-3 py-1.5 text-xs font-bold uppercase tracking-wider border-2 border-[#0ABF35] text-[#0ABF35] bg-white cursor-pointer hover:bg-[#0ABF35] hover:text-black transition-colors">Gratis</span>
                            <span class="px-3 py-1.5 text-xs font-bold uppercase tracking-wider border-2 border-yellow-500 text-yellow-600 bg-white cursor-pointer hover:bg-yellow-500 hover:text-black transition-colors">Premium</span>
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
                        class="w-full pl-11 pr-4 py-3.5 border-2 border-gray-300 text-sm text-gray-700 placeholder:text-gray-400 focus:outline-none focus:border-black transition-colors"
                    />
                </div>

                <!-- Results Count -->
                <div class="flex items-center justify-between mb-6">
                    <p class="text-sm text-gray-500"><span class="font-bold text-black">3</span> kursus ditemukan</p>
                    <select class="text-sm border-2 border-gray-300 px-3 py-1.5 text-gray-700 focus:outline-none focus:border-black transition-colors bg-white">
                        <option>Terbaru</option>
                        <option>Populer</option>
                        <option>A - Z</option>
                    </select>
                </div>

                <!-- Course Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

                    <!-- Card 1: GRATIS -->
                    <article class="bg-white border-2 border-gray-200 flex flex-col group hover:border-black hover:shadow-[6px_6px_0px_0px_#0ABF35] transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img
                                src="https://placehold.co/600x340/0f172a/0ABF35?text=Cybersecurity"
                                alt="Cybersecurity & SOC Analyst"
                                class="w-full h-44 object-cover group-hover:scale-105 transition-transform duration-500"
                            />
                            <span class="absolute top-3 left-3 px-3 py-1 text-xs font-bold uppercase tracking-wider bg-[#0ABF35] text-black border border-black">
                                GRATIS
                            </span>
                        </div>
                        <div class="p-5 flex flex-col flex-1">
                            <span class="text-xs font-bold uppercase tracking-widest text-[#0ABF35] mb-1">Cybersecurity</span>
                            <h3 class="font-bold text-gray-900 text-base leading-snug mb-2">Cybersecurity & SOC Analyst</h3>
                            <p class="text-sm text-gray-500 leading-relaxed line-clamp-3 flex-1">
                                Pelajari dasar-dasar keamanan siber, monitoring ancaman, dan respons insiden untuk menjadi SOC Analyst yang kompeten.
                            </p>
                            <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-400">
                                <div class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                                    <span class="font-medium">120 Hours</span>
                                </div>
                                <span class="px-2.5 py-1 border border-gray-200 text-gray-500 rounded text-xs font-medium uppercase tracking-wide">Beginner</span>
                            </div>
                        </div>
                        <a href="{{ route('courses') }}" class="block w-full bg-[#0ABF35] text-white font-bold text-xs text-center py-3.5 uppercase tracking-widest border-t-2 border-black group-hover:bg-black group-hover:text-[#0ABF35] transition-colors duration-300">
                            MULAI BELAJAR →
                        </a>
                    </article>

                    <!-- Card 2: PREMIUM -->
                    <article class="bg-black border-2 border-black flex flex-col shadow-[6px_6px_0px_0px_#0ABF35]">
                        <div class="relative overflow-hidden">
                            <img
                                src="https://placehold.co/600x340/0f172a/94a3b8?text=Junior+Analyst"
                                alt="Junior Cybersecurity Analyst"
                                class="w-full h-44 object-cover opacity-80 hover:opacity-100 hover:scale-105 transition-all duration-500"
                            />
                            <span class="absolute top-3 left-3 px-3 py-1 text-xs font-bold uppercase tracking-wider bg-yellow-400 text-black border border-black">
                                PREMIUM
                            </span>
                            <div class="absolute top-3 right-3 bg-black border border-[#0ABF35] px-2 py-1">
                                <svg class="w-4 h-4 text-[#0ABF35]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="p-5 flex flex-col flex-1">
                            <span class="text-xs font-bold uppercase tracking-widest text-[#0ABF35] mb-1">Cybersecurity</span>
                            <h3 class="font-bold text-white text-base leading-snug mb-2">Junior Cybersecurity Analyst</h3>
                            <p class="text-sm text-gray-400 leading-relaxed line-clamp-3 flex-1">
                                Program komprehensif untuk mempersiapkan karir sebagai Junior Cybersecurity Analyst dengan sertifikasi industri.
                            </p>
                            <div class="mt-4 pt-4 border-t border-gray-700 flex items-center justify-between text-xs text-gray-500">
                                <div class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                                    <span class="font-medium text-gray-400">80 Hours</span>
                                </div>
                                <span class="px-2.5 py-1 border border-gray-600 text-gray-400 text-xs font-medium uppercase tracking-wide">Intermediate</span>
                            </div>
                        </div>
                        <a href="{{ route('courses') }}" class="block w-full bg-[#0ABF35] text-white font-bold text-xs text-center py-3.5 uppercase tracking-widest border-t-2 border-[#0ABF35] hover:bg-opacity-80 transition-colors duration-300">
                            MULAI BELAJAR →
                        </a>
                    </article>

                    <!-- Card 3: GRATIS -->
                    <article class="bg-white border-2 border-gray-200 flex flex-col group hover:border-black hover:shadow-[6px_6px_0px_0px_#0ABF35] transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img
                                src="https://placehold.co/600x340/0f172a/0ABF35?text=CyberOps"
                                alt="CyberOps Associate"
                                class="w-full h-44 object-cover group-hover:scale-105 transition-transform duration-500"
                            />
                            <span class="absolute top-3 left-3 px-3 py-1 text-xs font-bold uppercase tracking-wider bg-[#0ABF35] text-black border border-black">
                                GRATIS
                            </span>
                        </div>
                        <div class="p-5 flex flex-col flex-1">
                            <span class="text-xs font-bold uppercase tracking-widest text-[#0ABF35] mb-1">Cybersecurity</span>
                            <h3 class="font-bold text-gray-900 text-base leading-snug mb-2">CyberOps Associate</h3>
                            <p class="text-sm text-gray-500 leading-relaxed line-clamp-3 flex-1">
                                Kuasai operasi keamanan siber, analisis ancaman, dan teknik mitigasi untuk melindungi infrastruktur digital.
                            </p>
                            <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-400">
                                <div class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                                    <span class="font-medium">100 Hours</span>
                                </div>
                                <span class="px-2.5 py-1 border border-gray-200 text-gray-500 rounded text-xs font-medium uppercase tracking-wide">Beginner</span>
                            </div>
                        </div>
                        <a href="{{ route('courses') }}" class="block w-full bg-[#0ABF35] text-white font-bold text-xs text-center py-3.5 uppercase tracking-widest border-t-2 border-black group-hover:bg-black group-hover:text-[#0ABF35] transition-colors duration-300">
                            MULAI BELAJAR →
                        </a>
                    </article>

                </div>

                <!-- Pagination -->
                <nav class="mt-10 flex justify-center" aria-label="Pagination">
                    <div class="flex items-center gap-1.5">
                        <a href="#" class="w-9 h-9 flex items-center justify-center border-2 border-gray-300 text-sm text-gray-600 hover:border-black transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 flex items-center justify-center text-sm font-bold bg-black text-white border-2 border-black shadow-[3px_3px_0px_0px_#0ABF35]">1</a>
                        <a href="#" class="w-9 h-9 flex items-center justify-center border-2 border-gray-300 text-sm text-gray-600 hover:border-black transition-colors">2</a>
                        <a href="#" class="w-9 h-9 flex items-center justify-center border-2 border-gray-300 text-sm text-gray-600 hover:border-black transition-colors">3</a>
                        <span class="w-9 h-9 flex items-center justify-center text-sm text-gray-400">...</span>
                        <a href="#" class="w-9 h-9 flex items-center justify-center border-2 border-gray-300 text-sm text-gray-600 hover:border-black transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                        </a>
                    </div>
                </nav>

            </main>
        </div>
    </section>

@endsection
