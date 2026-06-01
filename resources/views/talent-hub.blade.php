@extends('layouts.app')

@section('title', 'Talent Hub - Rolepath')

@section('content')

    <!-- ═══════════════════════════════════════════
         HEADER
    ════════════════════════════════════════════ -->
    <section class="bg-black pt-28 pb-14 px-4 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-1 bg-[#0ABF35]"></div>
        <!-- Grid overlay -->
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px); background-size: 60px 60px;"></div>
        <!-- Accent block -->
        <div class="absolute right-0 top-0 h-full w-2 bg-[#0ABF35] hidden lg:block"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8">
                <div>
                    <div class="inline-flex items-center gap-2 bg-[#0ABF35] text-black text-xs font-bold px-4 py-1.5 uppercase tracking-widest rounded-full mb-5 border border-black">
                        <span class="w-2 h-2 bg-black rounded-full animate-pulse"></span>
                        RECRUITER DASHBOARD
                    </div>
                    <h1 class="text-4xl md:text-6xl font-black text-white leading-[1.05] tracking-tight">
                        Temukan Talenta<br>
                        <span class="text-[#0ABF35]">Teknologi</span> Terbaik.
                    </h1>
                    <p class="text-gray-400 text-base mt-5 max-w-2xl leading-relaxed">
                        Jelajahi portofolio kandidat terbaik yang telah lulus dari kurikulum Rolepath. Filter berdasarkan keahlian teknis dan temukan aset baru untuk perusahaan Anda.
                    </p>
                </div>

                <!-- Stats -->
                <div class="flex gap-4 shrink-0">
                    <div class="border-2 border-gray-700 px-6 py-4 text-center">
                        <p class="text-3xl font-black text-[#0ABF35]">240+</p>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-gray-500 mt-1">Talenta Aktif</p>
                    </div>
                    <div class="border-2 border-[#0ABF35] px-6 py-4 text-center shadow-[4px_4px_0px_0px_#0ABF35]">
                        <p class="text-3xl font-black text-white">98%</p>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-gray-400 mt-1">Siap Kerja</p>
                    </div>
                </div>
            </div>

            <!-- Search Bar -->
            <div class="mt-10 flex gap-0 max-w-3xl">
                <div class="relative flex-1">
                    <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                    <input
                        type="text"
                        placeholder="Cari skill, nama, atau peran (contoh: Flutter, Laravel...)"
                        class="w-full bg-gray-900 border-2 border-gray-700 border-r-0 text-white pl-11 pr-5 py-4 text-sm placeholder-gray-600 focus:outline-none focus:border-[#0ABF35] transition-colors"
                    >
                </div>
                <button class="bg-[#0ABF35] text-black font-black px-8 py-4 border-2 border-[#0ABF35] hover:bg-black hover:text-[#0ABF35] transition-colors duration-200 tracking-widest uppercase text-sm shrink-0">
                    CARI
                </button>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
         FILTER + GRID
    ════════════════════════════════════════════ -->
    <section class="bg-gray-100 py-12 px-4 min-h-screen">
        <div class="max-w-7xl mx-auto">

            <!-- Filter Row -->
            <div class="flex flex-wrap items-center gap-3 mb-10 pb-8 border-b-2 border-gray-300">
                <span class="text-xs font-black text-black uppercase tracking-widest mr-2">Filter:</span>
                @foreach(['Semua', 'Laravel', 'Flutter', 'Python', 'React', 'Cybersecurity', 'UI/UX'] as $tag)
                    <button class="{{ $tag === 'Semua' ? 'bg-black text-white border-black' : 'bg-white text-gray-700 border-gray-300 hover:border-black hover:text-black' }} border-2 px-4 py-1.5 text-xs font-bold uppercase tracking-wider transition-colors duration-200">
                        {{ $tag }}
                    </button>
                @endforeach

                <div class="ml-auto flex items-center gap-2">
                    <span class="text-xs text-gray-400 font-medium">Menampilkan <strong class="text-black">3</strong> talenta</span>
                </div>
            </div>

            <!-- Talent Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- ── Card 1 ── -->
                <article class="bg-white border-2 border-gray-200 flex flex-col group hover:border-black hover:shadow-[6px_6px_0px_0px_#0ABF35] transition-all duration-300">
                    <!-- Card top bar -->
                    <div class="bg-black px-5 py-3 flex items-center justify-between">
                        <span class="text-[10px] font-black uppercase tracking-widest text-[#0ABF35]">Backend Developer</span>
                        <span class="bg-[#0ABF35] text-black text-[10px] font-black px-2.5 py-1 uppercase tracking-widest border border-black">TERSEDIA</span>
                    </div>

                    <!-- Card body -->
                    <div class="p-6 flex flex-col flex-1">
                        <!-- Avatar + Name -->
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-14 h-14 bg-black border-2 border-black flex items-center justify-center text-xl font-black text-[#0ABF35] shrink-0 shadow-[3px_3px_0px_0px_#0ABF35]">
                                R
                            </div>
                            <div>
                                <h3 class="text-black font-bold text-xl leading-none">Raihan</h3>
                                <div class="flex items-center gap-1.5 mt-1.5">
                                    <svg class="w-3.5 h-3.5 text-[#0ABF35]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Lulusan Rolepath</span>
                                </div>
                            </div>
                        </div>

                        <!-- Description -->
                        <p class="text-sm text-gray-500 leading-relaxed line-clamp-2 mb-5 flex-1">
                            Menguasai pembuatan API dan arsitektur database menggunakan Laravel & MySQL untuk sistem skala produksi.
                        </p>

                        <!-- Skills -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            @foreach(['PHP', 'Laravel', 'MySQL', 'REST API'] as $skill)
                                <span class="text-xs border-2 border-gray-200 text-gray-600 px-3 py-1 font-bold uppercase tracking-wide group-hover:border-gray-300 transition-colors">{{ $skill }}</span>
                            @endforeach
                        </div>

                        <!-- Meta row -->
                        <div class="flex items-center gap-4 text-xs text-gray-400 border-t border-gray-100 pt-4 mb-5">
                            <div class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                                <span>2 Tahun Exp.</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                <span>Remote / Hybrid</span>
                            </div>
                        </div>
                    </div>

                    <!-- CTA -->
                    <a href="#" class="block w-full bg-white text-black font-bold text-xs text-center py-3.5 uppercase tracking-widest border-t-2 border-gray-200 group-hover:bg-black group-hover:text-[#0ABF35] group-hover:border-black transition-all duration-300">
                        LIHAT PROFIL & CV →
                    </a>
                </article>

                <!-- ── Card 2 (Featured - Black) ── -->
                <article class="bg-black border-2 border-black flex flex-col shadow-[6px_6px_0px_0px_#0ABF35]">
                    <!-- Card top bar -->
                    <div class="bg-[#0ABF35] px-5 py-3 flex items-center justify-between border-b-2 border-black">
                        <span class="text-[10px] font-black uppercase tracking-widest text-black">Mobile Developer</span>
                        <span class="bg-black text-[#0ABF35] text-[10px] font-black px-2.5 py-1 uppercase tracking-widest border border-[#0ABF35]">TERSEDIA</span>
                    </div>

                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-14 h-14 bg-[#0ABF35] border-2 border-[#0ABF35] flex items-center justify-center text-xl font-black text-black shrink-0">
                                D
                            </div>
                            <div>
                                <h3 class="text-white font-bold text-xl leading-none">David</h3>
                                <div class="flex items-center gap-1.5 mt-1.5">
                                    <svg class="w-3.5 h-3.5 text-[#0ABF35]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                                    <span class="text-[10px] font-bold text-gray-500 uppercase tracking-wider">Lulusan Rolepath</span>
                                </div>
                            </div>
                        </div>

                        <p class="text-sm text-gray-400 leading-relaxed line-clamp-2 mb-5 flex-1">
                            Berpengalaman merancang aplikasi Android dan iOS yang responsif dan terintegrasi dengan Firebase.
                        </p>

                        <div class="flex flex-wrap gap-2 mb-6">
                            @foreach(['Flutter', 'Dart', 'Firebase', 'Android'] as $skill)
                                <span class="text-xs border-2 border-gray-700 text-gray-400 px-3 py-1 font-bold uppercase tracking-wide">{{ $skill }}</span>
                            @endforeach
                        </div>

                        <div class="flex items-center gap-4 text-xs text-gray-600 border-t border-gray-800 pt-4 mb-5">
                            <div class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                                <span>1 Tahun Exp.</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                <span>Remote</span>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="block w-full bg-[#0ABF35] text-black font-bold text-xs text-center py-3.5 uppercase tracking-widest border-t-2 border-[#0ABF35] hover:bg-white transition-colors duration-300">
                        LIHAT PROFIL & CV →
                    </a>
                </article>

                <!-- ── Card 3 ── -->
                <article class="bg-white border-2 border-gray-200 flex flex-col group hover:border-black hover:shadow-[6px_6px_0px_0px_#0ABF35] transition-all duration-300">
                    <div class="bg-black px-5 py-3 flex items-center justify-between">
                        <span class="text-[10px] font-black uppercase tracking-widest text-[#0ABF35]">Cybersecurity Analyst</span>
                        <span class="bg-[#0ABF35] text-black text-[10px] font-black px-2.5 py-1 uppercase tracking-widest border border-black">TERSEDIA</span>
                    </div>

                    <div class="p-6 flex flex-col flex-1">
                        <div class="flex items-center gap-4 mb-5">
                            <div class="w-14 h-14 bg-black border-2 border-black flex items-center justify-center text-xl font-black text-[#0ABF35] shrink-0 shadow-[3px_3px_0px_0px_#0ABF35]">
                                M
                            </div>
                            <div>
                                <h3 class="text-black font-bold text-xl leading-none">Maulana</h3>
                                <div class="flex items-center gap-1.5 mt-1.5">
                                    <svg class="w-3.5 h-3.5 text-[#0ABF35]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Lulusan Rolepath</span>
                                </div>
                            </div>
                        </div>

                        <p class="text-sm text-gray-500 leading-relaxed line-clamp-2 mb-5 flex-1">
                            Mampu melakukan identifikasi celah keamanan aplikasi, implementasi 2FA, dan sistem jaringan dasar menggunakan Linux.
                        </p>

                        <div class="flex flex-wrap gap-2 mb-6">
                            @foreach(['Kali Linux', 'Networking', 'Security', 'Wireshark'] as $skill)
                                <span class="text-xs border-2 border-gray-200 text-gray-600 px-3 py-1 font-bold uppercase tracking-wide group-hover:border-gray-300 transition-colors">{{ $skill }}</span>
                            @endforeach
                        </div>

                        <div class="flex items-center gap-4 text-xs text-gray-400 border-t border-gray-100 pt-4 mb-5">
                            <div class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                                <span>Fresh Graduate</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                <span>On-site / Remote</span>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="block w-full bg-white text-black font-bold text-xs text-center py-3.5 uppercase tracking-widest border-t-2 border-gray-200 group-hover:bg-black group-hover:text-[#0ABF35] group-hover:border-black transition-all duration-300">
                        LIHAT PROFIL & CV →
                    </a>
                </article>

            </div>

            <!-- Pagination -->
            <nav class="mt-12 flex justify-center">
                <div class="flex items-center gap-1.5">
                    <a href="#" class="w-9 h-9 flex items-center justify-center border-2 border-gray-300 text-sm text-gray-500 hover:border-black transition-colors">
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

        </div>
    </section>

@endsection