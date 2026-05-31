@extends('layouts.app')

@section('title', 'Junior Cybersecurity Analyst - Rolepath')

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
                <span class="text-[#0ABF35]">Junior Cybersecurity Analyst</span>
            </div>

            <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-8">
                <div class="flex-1">
                    <div class="inline-block bg-[#0ABF35] text-black text-xs font-bold px-3 py-1 uppercase tracking-widest rounded-full mb-4">
                        JALUR KARIR · CYBERSECURITY
                    </div>
                    <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight">
                        Junior Cybersecurity<br>Analyst
                    </h1>
                    <p class="text-gray-400 mt-4 max-w-xl leading-relaxed text-sm">
                        Pelajari dasar-dasar keamanan jaringan, ethical hacking, dan cara melindungi sistem dari serangan siber.
                    </p>

                    <!-- Meta -->
                    <div class="mt-6 flex flex-wrap items-center gap-5 text-xs text-gray-400">
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-[#0ABF35]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                            <span class="font-medium">80 Jam Belajar</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-[#0ABF35]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 5v14a2 2 0 002 2h12a2 2 0 002-2V5"/><path d="M8 3v4M16 3v4M8 9h8M8 13h6"/></svg>
                            <span class="font-medium">15 Pelajaran</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-[#0ABF35]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                            <span class="font-medium">Sertifikat Tersedia</span>
                        </div>
                        <span class="px-3 py-1 border border-yellow-500 text-yellow-400 font-bold uppercase">PREMIUM</span>
                    </div>
                </div>

                <!-- CTA -->
                <div class="shrink-0 flex flex-col items-start md:items-end gap-3">
                    <a href="{{ route('lesson') }}" class="inline-block bg-[#0ABF35] text-black font-bold text-sm px-8 py-4 border-2 border-[#0ABF35] hover:bg-black hover:text-[#0ABF35] transition-colors duration-200 tracking-widest uppercase shadow-[5px_5px_0px_0px_rgba(255,255,255,0.1)]">
                        MULAI KURSUS →
                    </a>
                    <p class="text-xs text-gray-500">1 pelajaran telah diselesaikan</p>
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
    <section class="bg-gray-100 min-h-screen px-4 py-12">
        <div class="max-w-5xl mx-auto">

            <div class="flex items-center gap-3 mb-8">
                <span class="w-1 h-6 bg-[#0ABF35] inline-block"></span>
                <h2 class="text-xl font-bold text-black uppercase tracking-wide">Kurikulum</h2>
            </div>

            <!-- ─────────────────────────────────────
                 SECTION 1
            ───────────────────────────────────── -->
            <div class="mb-8">
                <div class="flex items-center gap-4 bg-black text-white px-6 py-4 border-2 border-black">
                    <span class="text-2xl font-black text-[#0ABF35] leading-none">01</span>
                    <div class="flex-1">
                        <h3 class="font-bold text-base uppercase tracking-wide">Pengenalan Cybersecurity</h3>
                        <p class="text-xs text-gray-400 mt-0.5">3 pelajaran · ~4 jam</p>
                    </div>
                    <div class="text-xs font-bold text-[#0ABF35] uppercase tracking-wider">1/3 Selesai</div>
                </div>

                <div class="border-2 border-t-0 border-black overflow-hidden bg-white">

                    <a href="{{ route('lesson') }}" class="flex items-center gap-4 px-6 py-4 border-b border-gray-100 bg-[#f0fff4] hover:bg-green-50 transition group">
                        <div class="w-7 h-7 bg-[#0ABF35] border-2 border-black flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5 text-black" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-black group-hover:text-[#0ABF35] transition-colors leading-snug">Prinsip Keamanan Informasi (CIA Triad)</p>
                        </div>
                        <div class="flex items-center gap-1.5 shrink-0">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                            <span class="text-[10px] font-bold uppercase tracking-wider text-gray-400">Bacaan</span>
                        </div>
                        <svg class="w-4 h-4 text-gray-300 group-hover:text-[#0ABF35] transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                    </a>

                    <a href="{{ route('lesson') }}" class="flex items-center gap-4 px-6 py-4 border-b border-gray-100 hover:bg-gray-50 transition group">
                        <div class="w-7 h-7 border-2 border-gray-300 bg-white flex items-center justify-center shrink-0 group-hover:border-black transition-colors">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-700 group-hover:text-black transition-colors leading-snug">Apa itu Cybersecurity?</p>
                        </div>
                        <div class="flex items-center gap-1.5 shrink-0">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                            <span class="text-[10px] font-bold uppercase tracking-wider text-gray-400">Bacaan</span>
                        </div>
                        <svg class="w-4 h-4 text-gray-300 group-hover:text-[#0ABF35] transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                    </a>

                    <a href="{{ route('lesson') }}" class="flex items-center gap-4 px-6 py-4 hover:bg-gray-50 transition group">
                        <div class="w-7 h-7 border-2 border-gray-300 bg-white flex items-center justify-center shrink-0 group-hover:border-black transition-colors">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-700 group-hover:text-black transition-colors leading-snug">Jenis-Jenis Ancaman Siber</p>
                        </div>
                        <div class="flex items-center gap-1.5 shrink-0">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                            <span class="text-[10px] font-bold uppercase tracking-wider text-gray-400">Bacaan</span>
                        </div>
                        <svg class="w-4 h-4 text-gray-300 group-hover:text-[#0ABF35] transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                    </a>

                </div>
            </div>

            <!-- ─────────────────────────────────────
                 SECTION 2
            ───────────────────────────────────── -->
            <div class="mb-8">
                <div class="flex items-center gap-4 bg-black text-white px-6 py-4 border-2 border-black">
                    <span class="text-2xl font-black text-[#0ABF35] leading-none">02</span>
                    <div class="flex-1">
                        <h3 class="font-bold text-base uppercase tracking-wide">Jaringan Dasar (Networking)</h3>
                        <p class="text-xs text-gray-400 mt-0.5">2 pelajaran · ~3 jam</p>
                    </div>
                    <div class="text-xs font-bold text-gray-500 uppercase tracking-wider">0/2 Selesai</div>
                </div>

                <div class="border-2 border-t-0 border-black overflow-hidden bg-white">
                    <a href="{{ route('lesson') }}" class="flex items-center gap-4 px-6 py-4 border-b border-gray-100 hover:bg-gray-50 transition group">
                        <div class="w-7 h-7 border-2 border-gray-300 bg-white flex items-center justify-center shrink-0 group-hover:border-black transition-colors"></div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-700 group-hover:text-black transition-colors leading-snug">Topologi Jaringan & Protokol</p>
                        </div>
                        <div class="flex items-center gap-1.5 shrink-0">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                            <span class="text-[10px] font-bold uppercase tracking-wider text-gray-400">Bacaan</span>
                        </div>
                        <svg class="w-4 h-4 text-gray-300 group-hover:text-[#0ABF35] transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                    <a href="{{ route('lesson') }}" class="flex items-center gap-4 px-6 py-4 hover:bg-gray-50 transition group">
                        <div class="w-7 h-7 border-2 border-gray-300 bg-white flex items-center justify-center shrink-0 group-hover:border-black transition-colors"></div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-700 group-hover:text-black transition-colors leading-snug">Praktik Port Scanning</p>
                        </div>
                        <div class="flex items-center gap-1.5 shrink-0">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="4 17 10 11 4 5"/><line x1="12" y1="19" x2="20" y2="19"/></svg>
                            <span class="text-[10px] font-bold uppercase tracking-wider text-gray-500">Praktek</span>
                        </div>
                        <svg class="w-4 h-4 text-gray-300 group-hover:text-[#0ABF35] transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                </div>
            </div>

            <!-- ─────────────────────────────────────
                 SECTION 3 (Locked)
            ───────────────────────────────────── -->
            <div class="mb-8 opacity-60">
                <div class="flex items-center gap-4 bg-gray-400 text-white px-6 py-4 border-2 border-gray-400">
                    <span class="text-2xl font-black text-white/50 leading-none">03</span>
                    <div class="flex-1">
                        <h3 class="font-bold text-base uppercase tracking-wide">Ethical Hacking Dasar</h3>
                        <p class="text-xs text-white/60 mt-0.5">3 pelajaran · ~6 jam</p>
                    </div>
                    <div class="flex items-center gap-1.5 text-xs font-bold text-white/70 uppercase tracking-wider">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        TERKUNCI
                    </div>
                </div>
                <div class="border-2 border-t-0 border-gray-300 bg-gray-50 px-6 py-5 text-center">
                    <p class="text-sm text-gray-400">Selesaikan seksi sebelumnya untuk membuka bagian ini.</p>
                </div>
            </div>

        </div>
    </section>

@endsection
