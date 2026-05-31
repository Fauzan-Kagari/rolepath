@extends('layouts.app')

@section('title', 'Apa itu Cybersecurity? - Rolepath')

@section('content')

<div class="flex min-h-screen bg-white pt-16">

    <!-- ═══════════════════════════════════════════
         LEFT SIDEBAR — CURRICULUM NAV
    ════════════════════════════════════════════ -->
    <aside id="sidebar" class="fixed top-16 left-0 h-[calc(100vh-4rem)] w-72 bg-black border-r-2 border-gray-800 overflow-y-auto z-40 -translate-x-full lg:translate-x-0 transition-transform duration-300">

        <!-- Course title -->
        <div class="px-5 py-5 border-b-2 border-gray-800">
            <a href="{{ route('courses') }}" class="flex items-center gap-2 text-xs text-gray-500 uppercase tracking-widest hover:text-[#0ABF35] transition-colors mb-3">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
                Kembali ke Kursus
            </a>
            <h2 class="text-sm font-bold text-white leading-snug">Junior Cybersecurity Analyst</h2>

            <!-- Progress -->
            <div class="mt-3">
                <div class="flex justify-between text-[10px] text-gray-500 mb-1">
                    <span class="uppercase tracking-wider">Progress</span>
                    <span class="font-bold text-[#0ABF35]">7%</span>
                </div>
                <div class="w-full h-1.5 bg-gray-800 border border-gray-700">
                    <div class="h-full bg-[#0ABF35]" style="width:7%"></div>
                </div>
            </div>
        </div>

        <!-- Curriculum list -->
        <nav class="py-3">

            <!-- Section 1 -->
            <div class="px-5 pt-4 pb-2">
                <p class="text-[10px] font-black text-[#0ABF35] uppercase tracking-[0.15em]">01 · Pengenalan Cybersecurity</p>
            </div>

            {{-- Completed --}}
            <a href="{{ route('lesson') }}" class="flex items-center gap-3 px-5 py-3 text-sm text-gray-300 hover:bg-gray-800 hover:text-white transition-colors group">
                <div class="w-5 h-5 bg-[#0ABF35] border border-black flex items-center justify-center shrink-0">
                    <svg class="w-3 h-3 text-black" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <span class="leading-snug line-through text-gray-500">CIA Triad</span>
            </a>

            {{-- ACTIVE --}}
            <a href="{{ route('lesson') }}" class="flex items-center gap-3 px-5 py-3 text-sm bg-gray-800 text-white border-l-2 border-[#0ABF35] group">
                <div class="w-5 h-5 border-2 border-[#0ABF35] bg-black flex items-center justify-center shrink-0">
                    <div class="w-1.5 h-1.5 bg-[#0ABF35] rounded-full"></div>
                </div>
                <span class="leading-snug font-semibold text-white">Apa itu Cybersecurity?</span>
            </a>

            {{-- Locked --}}
            <a href="{{ route('lesson') }}" class="flex items-center gap-3 px-5 py-3 text-sm text-gray-600 hover:bg-gray-800 hover:text-gray-400 transition-colors group">
                <div class="w-5 h-5 border-2 border-gray-700 flex items-center justify-center shrink-0"></div>
                <span class="leading-snug">Jenis Ancaman Siber</span>
            </a>

            <!-- Section 2 -->
            <div class="px-5 pt-5 pb-2">
                <p class="text-[10px] font-black text-gray-500 uppercase tracking-[0.15em]">02 · Jaringan Dasar</p>
            </div>

            <a href="{{ route('lesson') }}" class="flex items-center gap-3 px-5 py-3 text-sm text-gray-600 hover:bg-gray-800 hover:text-gray-400 transition-colors">
                <div class="w-5 h-5 border-2 border-gray-700 flex items-center justify-center shrink-0"></div>
                <span class="leading-snug">Topologi & Protokol</span>
            </a>
            <a href="{{ route('lesson') }}" class="flex items-center gap-3 px-5 py-3 text-sm text-gray-600 hover:bg-gray-800 hover:text-gray-400 transition-colors">
                <div class="w-5 h-5 border-2 border-gray-700 flex items-center justify-center shrink-0"></div>
                <span class="leading-snug">Praktik Port Scanning</span>
            </a>

            <!-- Section 3 — Locked -->
            <div class="px-5 pt-5 pb-2">
                <p class="text-[10px] font-black text-gray-700 uppercase tracking-[0.15em] flex items-center gap-1.5">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                    03 · Ethical Hacking
                </p>
            </div>
            <div class="px-5 py-2 text-xs text-gray-700 italic">Selesaikan seksi 2 untuk membuka.</div>

        </nav>
    </aside>

    <!-- ═══════════════════════════════════════════
         MAIN CONTENT
    ════════════════════════════════════════════ -->
    <main class="flex-1 lg:ml-72 min-w-0">

        <!-- Top bar -->
        <div class="sticky top-16 z-30 bg-white border-b-2 border-gray-200 px-6 py-3 flex items-center justify-between gap-4">
            <!-- Mobile sidebar toggle -->
            <button id="sidebar-toggle" class="lg:hidden flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-black border-2 border-black px-3 py-1.5 hover:bg-black hover:text-white transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                Kurikulum
            </button>

            <div class="flex items-center gap-2 text-xs text-gray-400 uppercase tracking-widest hidden md:flex">
                <span>Pengenalan Cybersecurity</span>
                <span>›</span>
                <span class="font-bold text-black">Apa itu Cybersecurity?</span>
            </div>

            <!-- Prev / Next nav -->
            <div class="flex items-center gap-2 ml-auto">
                <a href="{{ route('lesson') }}" class="flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-gray-500 border-2 border-gray-200 px-3 py-1.5 hover:border-black hover:text-black transition-colors">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
                    Prev
                </a>
                <a href="{{ route('lesson') }}" class="flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-black bg-[#0ABF35] border-2 border-[#0ABF35] px-3 py-1.5 hover:bg-black hover:text-[#0ABF35] transition-colors">
                    Next
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                </a>
            </div>
        </div>

        <!-- Lesson Content -->
        <article class="max-w-3xl mx-auto px-6 py-12">

            <!-- Lesson meta -->
            <div class="flex flex-wrap items-center gap-3 mb-6">
                <span class="inline-flex items-center gap-1.5 text-[10px] font-bold uppercase tracking-widest text-[#0ABF35] border border-[#0ABF35] px-2.5 py-1">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                    Bacaan
                </span>
                <span class="text-[10px] font-bold uppercase tracking-widest text-gray-400 border border-gray-200 px-2.5 py-1">~15 Menit</span>
                <span class="text-[10px] font-bold uppercase tracking-widest text-gray-400 border border-gray-200 px-2.5 py-1">Beginner</span>
            </div>

            <h1 class="text-3xl md:text-4xl font-extrabold text-black leading-tight mb-6">
                Apa itu Cybersecurity?
            </h1>

            <!-- Intro callout -->
            <div class="border-l-4 border-[#0ABF35] bg-green-50 px-5 py-4 mb-8">
                <p class="text-sm font-bold text-black mb-1">Tujuan Pelajaran</p>
                <ul class="text-sm text-gray-600 space-y-1 list-disc list-inside">
                    <li>Memahami definisi dan ruang lingkup Cybersecurity</li>
                    <li>Mengenal tiga pilar utama keamanan informasi (CIA Triad)</li>
                    <li>Memahami mengapa Cybersecurity penting di era digital</li>
                </ul>
            </div>

            <!-- Lesson body -->
            <div class="prose prose-sm md:prose max-w-none text-gray-700 leading-relaxed space-y-6">
                <h2 class="text-xl font-bold text-black border-b-2 border-gray-100 pb-2">Pengantar</h2>
                <p>
                    <strong>Cybersecurity</strong> adalah praktik melindungi sistem, jaringan, dan program dari serangan digital. Serangan siber ini biasanya bertujuan untuk mengakses, mengubah, atau menghancurkan informasi sensitif, memeras uang dari pengguna, atau mengganggu proses bisnis normal.
                </p>
                <p>
                    Menerapkan langkah-langkah keamanan siber yang efektif sangat menantang saat ini karena ada lebih banyak perangkat daripada manusia, dan para penyerang menjadi lebih inovatif.
                </p>

                <h2 class="text-xl font-bold text-black border-b-2 border-gray-100 pb-2">Mengapa Cybersecurity Penting?</h2>
                <p>
                    Pemerintah, militer, perusahaan, lembaga keuangan, rumah sakit, dan bisnis lainnya mengumpulkan, memproses, dan menyimpan data dalam jumlah besar di komputer dan perangkat lain. Sebagian besar data tersebut bisa berupa informasi sensitif.
                </p>

                <!-- Info box -->
                <div class="bg-black text-white border-2 border-black p-5 not-prose">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-[#0ABF35] flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-[#0ABF35] uppercase tracking-widest mb-1">Fakta Penting</p>
                            <p class="text-sm text-gray-300">Pada tahun 2023, biaya rata-rata pelanggaran data secara global mencapai <strong class="text-white">$4,45 juta</strong> — angka tertinggi sepanjang masa menurut laporan IBM.</p>
                        </div>
                    </div>
                </div>

                <h2 class="text-xl font-bold text-black border-b-2 border-gray-100 pb-2">CIA Triad</h2>
                <p>Tiga prinsip inti keamanan informasi yang harus kamu hafal:</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 not-prose">
                    <div class="border-2 border-black p-5 hover:shadow-[4px_4px_0px_0px_#0ABF35] transition-all duration-200">
                        <div class="text-2xl font-black text-[#0ABF35] mb-2">C</div>
                        <h4 class="font-bold text-black text-sm uppercase tracking-wide mb-2">Confidentiality</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Informasi hanya dapat diakses oleh orang yang berwenang.</p>
                    </div>
                    <div class="border-2 border-black p-5 bg-black hover:shadow-[4px_4px_0px_0px_#0ABF35] transition-all duration-200">
                        <div class="text-2xl font-black text-[#0ABF35] mb-2">I</div>
                        <h4 class="font-bold text-white text-sm uppercase tracking-wide mb-2">Integrity</h4>
                        <p class="text-xs text-gray-400 leading-relaxed">Informasi akurat dan tidak berubah tanpa izin.</p>
                    </div>
                    <div class="border-2 border-black p-5 hover:shadow-[4px_4px_0px_0px_#0ABF35] transition-all duration-200">
                        <div class="text-2xl font-black text-[#0ABF35] mb-2">A</div>
                        <h4 class="font-bold text-black text-sm uppercase tracking-wide mb-2">Availability</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Informasi tersedia saat dibutuhkan oleh pengguna yang berhak.</p>
                    </div>
                </div>

                <h2 class="text-xl font-bold text-black border-b-2 border-gray-100 pb-2">Rangkuman</h2>
                <ul class="list-disc list-inside space-y-1 text-sm">
                    <li>Cybersecurity melindungi sistem, jaringan, dan data dari ancaman digital</li>
                    <li>Serangan siber semakin canggih dan mahal dampaknya</li>
                    <li>CIA Triad (Confidentiality, Integrity, Availability) adalah fondasi keamanan informasi</li>
                </ul>
            </div>

            <!-- ─────────────────────────────────────
                 MARK COMPLETE & NAVIGATION
            ───────────────────────────────────── -->
            <div class="mt-14 pt-8 border-t-2 border-gray-200">

                <!-- Complete button -->
                <button class="w-full py-4 bg-[#0ABF35] text-black font-bold text-sm uppercase tracking-widest border-2 border-black hover:bg-black hover:text-[#0ABF35] transition-colors duration-200 mb-6">
                    ✓ TANDAI SELESAI & LANJUTKAN
                </button>

                <!-- Prev / Next full buttons -->
                <div class="grid grid-cols-2 gap-4">
                    <a href="{{ route('lesson') }}" class="group flex flex-col gap-1 border-2 border-gray-200 px-5 py-4 hover:border-black transition-colors duration-200">
                        <div class="flex items-center gap-1.5 text-[10px] font-bold uppercase tracking-wider text-gray-400 group-hover:text-black transition-colors">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
                            Pelajaran Sebelumnya
                        </div>
                        <p class="text-sm font-bold text-black leading-snug">CIA Triad</p>
                    </a>
                    <a href="{{ route('lesson') }}" class="group flex flex-col gap-1 border-2 border-black bg-black px-5 py-4 hover:bg-[#0ABF35] hover:border-[#0ABF35] transition-colors duration-200 text-right">
                        <div class="flex items-center justify-end gap-1.5 text-[10px] font-bold uppercase tracking-wider text-gray-400 group-hover:text-black transition-colors">
                            Pelajaran Berikutnya
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                        </div>
                        <p class="text-sm font-bold text-white group-hover:text-black leading-snug transition-colors">Jenis-Jenis Ancaman Siber</p>
                    </a>
                </div>

            </div>

        </article>
    </main>

</div>

<!-- Sidebar overlay (mobile) -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/60 z-30 hidden lg:hidden"></div>

<script>
    const sidebar = document.getElementById('sidebar');
    const toggle = document.getElementById('sidebar-toggle');
    const overlay = document.getElementById('sidebar-overlay');

    toggle?.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
    });
    overlay?.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });
</script>

@endsection
