@extends('layouts.app')

@section('title', 'Rolepath - Your Tech Career Route')

@section('content')

    <!-- ═══════════════════════════════════════════
         MAINTENANCE NOTIFICATION
    ════════════════════════════════════════════ -->
    <div id="maintenance-notice" class="relative bg-gradient-to-r from-gray-900 via-black to-gray-900 border-b-2 border-[#0ABF35] px-4 py-3 mt-16">
        <div class="max-w-6xl mx-auto flex items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <span class="flex-shrink-0 w-8 h-8 bg-[#0ABF35] rounded-full flex items-center justify-center">
                    <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/>
                    </svg>
                </span>
                <div>
                    <p class="text-sm font-bold text-white">⚠️ Maintenance / Rebuild In Progress</p>
                    <p class="text-xs text-gray-400">Website sedang dalam masa pemeliharaan dan pengembangan. Beberapa fitur mungkin tidak dapat diakses untuk sementara waktu. Terima kasih atas pengertian Anda.</p>
                </div>
            </div>
            <button onclick="dismissNotice()" class="flex-shrink-0 w-7 h-7 flex items-center justify-center rounded-full bg-gray-800 hover:bg-gray-700 text-gray-400 hover:text-white transition-colors" aria-label="Tutup">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (localStorage.getItem('mnt_dismissed')) {
                var el = document.getElementById('maintenance-notice');
                if (el) el.style.display = 'none';
            }
        });
        function dismissNotice() {
            var el = document.getElementById('maintenance-notice');
            if (el) {
                el.style.display = 'none';
                localStorage.setItem('mnt_dismissed', '1');
            }
        }
    </script>

    <!-- ═══════════════════════════════════════════
         HERO SECTION
    ════════════════════════════════════════════ -->
    <section class="relative min-h-[90vh] flex items-center bg-black overflow-hidden">
        <!-- Background image -->
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2071&auto=format&fit=crop')] bg-cover bg-center opacity-20"></div>

        <!-- Decorative green bar top -->
        <div class="absolute top-0 left-0 w-full h-1 bg-[#0ABF35]"></div>

        <!-- Decorative grid overlay -->
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(#fff 1px, transparent 1px), linear-gradient(90deg, #fff 1px, transparent 1px); background-size: 60px 60px;"></div>

        <!-- Decorative right accent block -->
        <div class="absolute right-0 top-1/2 -translate-y-1/2 w-2 h-48 bg-[#0ABF35] hidden lg:block"></div>

        <div class="relative max-w-6xl mx-auto px-4 w-full pt-28 pb-20">
            <div class="max-w-3xl">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 bg-[#0ABF35] text-white text-xs font-bold px-4 py-1.5 uppercase tracking-widest rounded-full mb-7 border border-black">
                    <span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                    Platform Karir Digital #1
                </div>

                <!-- Headline -->
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-white leading-[1.05] tracking-tight">
                    Belajar Peran<br>
                    Teknologi.<br>
                    <span class="relative inline-block text-[#0ABF35]">
                        Dapatkan Karier
                        <span class="absolute -bottom-2 left-0 w-full h-1.5 bg-white opacity-30"></span>
                    </span><br>
                    Impian.
                </h1>

                <p class="mt-8 text-base md:text-lg text-gray-400 max-w-xl leading-relaxed">
                    Kurikulum berbasis peran yang dirancang bersama industri — mulai gratis, berkembang tanpa batas.
                </p>

                <!-- CTA Buttons -->
                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="{{ route('courses') }}" class="inline-block px-8 py-4 bg-[#0ABF35] text-white font-bold text-sm uppercase tracking-widest border-2 border-[#0ABF35] hover:bg-black hover:text-[#0ABF35] transition-colors duration-200 shadow-[5px_5px_0px_0px_#ffffff22]">
                        MULAI BELAJAR GRATIS →
                    </a>
                    <a href="{{ route('courses') }}" class="inline-block px-8 py-4 bg-transparent text-white font-bold text-sm uppercase tracking-widest border-2 border-white hover:bg-white hover:text-black transition-colors duration-200">
                        LIHAT SEMUA KURSUS
                    </a>
                </div>

                <!-- Social proof -->
                <div class="mt-12 flex flex-wrap items-center gap-6">
                    <div class="flex items-center gap-2">
                        <div class="flex -space-x-2">
                            <img class="w-8 h-8 rounded-full border-2 border-black object-cover" src="https://ui-avatars.com/api/?name=A&background=0ABF35&color=000&bold=true&size=32" alt="">
                            <img class="w-8 h-8 rounded-full border-2 border-black object-cover" src="https://ui-avatars.com/api/?name=B&background=111&color=0ABF35&bold=true&size=32" alt="">
                            <img class="w-8 h-8 rounded-full border-2 border-black object-cover" src="https://ui-avatars.com/api/?name=C&background=0ABF35&color=000&bold=true&size=32" alt="">
                        </div>
                        <p class="text-sm text-gray-400"><span class="font-bold text-white">10.000+</span> pelajar aktif</p>
                    </div>
                    <div class="h-4 w-px bg-gray-700 hidden md:block"></div>
                    <div class="flex items-center gap-1.5 text-sm text-gray-400">
                        <svg class="w-4 h-4 text-[#0ABF35]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <span><span class="font-bold text-white">4.9/5</span> rating kepuasan</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
         MARQUEE STRIP
    ════════════════════════════════════════════ -->
    <div class="bg-[#0ABF35] py-3 overflow-hidden">
        <div class="flex gap-8 animate-[marquee_20s_linear_infinite] whitespace-nowrap w-max">
            @foreach(['Cybersecurity', 'Data Science', 'Networking', 'AI & ML', 'Programming', 'Cloud Computing', 'DevOps', 'UI/UX Design', 'Cybersecurity', 'Data Science', 'Networking', 'AI & ML', 'Programming', 'Cloud Computing', 'DevOps', 'UI/UX Design'] as $tag)
                <span class="text-xs font-bold uppercase tracking-widest text-white flex items-center gap-3">
                    <span class="w-1.5 h-1.5 bg-white rounded-full inline-block"></span>
                    {{ $tag }}
                </span>
            @endforeach
        </div>
    </div>

    <!-- ═══════════════════════════════════════════
         WHY ROLEPATH — FEATURES
    ════════════════════════════════════════════ -->
    <section class="bg-gray-100 py-16 md:py-24 px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-14">
                <div>
                    <div class="inline-block bg-[#0ABF35] text-gray-800 text-xs font-bold px-4 py-1.5 uppercase tracking-widest rounded-full mb-4">
                        KENAPA ROLEPATH?
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                        Beda dari platform<br>belajar lainnya.
                    </h2>
                </div>
                <p class="text-sm text-gray-500 max-w-sm leading-relaxed md:text-right">
                    Kuasai keahlian spesifik industri melalui kurikulum berbasis peran. Mulai dengan dasar gratis, tingkatkan ke profesional.
                </p>
            </div>

            <!-- Feature Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $features = [
                        ['num' => '01', 'title' => 'Sertifikasi Industri', 'desc' => 'Dapatkan sertifikat yang diakui industri untuk membuktikan keahlianmu pada rekruter.', 'dark' => false],
                        ['num' => '02', 'title' => 'Kurikulum Komprehensif', 'desc' => 'Tingkatkan keterampilan teknis dengan kurikulum linear berbasis proyek nyata.', 'dark' => true],
                        ['num' => '03', 'title' => 'Pendidikan Inklusif', 'desc' => 'Materi dasar kami sepenuhnya gratis. Biaya tidak boleh menjadi penghalang.', 'dark' => false],
                        ['num' => '04', 'title' => 'Komunitas Besar', 'desc' => 'Bergabung dengan ribuan siswa, alumni, dan mentor dalam ekosistem belajar suportif.', 'dark' => false],
                    ];
                @endphp

                @foreach($features as $f)
                    <article class="{{ $f['dark'] ? 'bg-gray-800 text-white border-gray-800 shadow-[6px_6px_0px_0px_#0ABF35]' : 'bg-white text-gray-900 border-gray-200 hover:border-gray-400 hover:shadow-[6px_6px_0px_0px_#0ABF35]' }} border-2 p-7 flex flex-col gap-4 transition-all duration-300 group">
                        <span class="text-4xl font-black {{ $f['dark'] ? 'text-[#0ABF35]' : 'text-gray-200 group-hover:text-[#0ABF35]' }} transition-colors duration-300 leading-none">{{ $f['num'] }}</span>
                        <h3 class="font-bold text-lg {{ $f['dark'] ? 'text-white' : 'text-gray-900' }} leading-snug">{{ $f['title'] }}</h3>
                        <p class="text-sm {{ $f['dark'] ? 'text-gray-400' : 'text-gray-500' }} leading-relaxed flex-1">{{ $f['desc'] }}</p>
                        <div class="w-8 h-0.5 {{ $f['dark'] ? 'bg-[#0ABF35]' : 'bg-gray-200 group-hover:bg-[#0ABF35]' }} transition-colors duration-300"></div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
         PROCESS TIMELINE
    ════════════════════════════════════════════ -->
    <section class="bg-gray-50 py-16 md:py-24 px-4 relative overflow-hidden border-t border-gray-100">
        <div class="max-w-5xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16">
                <div class="inline-block bg-[#0ABF35] text-gray-800 text-xs font-bold px-4 py-1.5 uppercase tracking-widest rounded-full mb-5">
                    CARA KERJA
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                    Proses dalam tiga langkah mudah
                </h2>
            </div>

            <!-- Steps -->
            <div class="relative grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-6">
                <!-- Connector line -->
                <div class="hidden md:block absolute top-10 left-[calc(16.67%+1rem)] right-[calc(16.67%+1rem)] h-px bg-[#0ABF35] opacity-20 z-0"></div>

                @php
                    $steps = [
                        ['n' => '1', 'title' => 'Free Course Dasar', 'desc' => 'Mulai dengan kursus fondasi gratis. Bangun logika dasar koding tanpa biaya sepeser pun.'],
                        ['n' => '2', 'title' => 'Ikuti Jalur Karir', 'desc' => 'Pilih peran impianmu. Sistem kami menyusun peta jalan belajar yang terstruktur dan linear.'],
                        ['n' => '3', 'title' => 'Praktik Langsung', 'desc' => 'Pelajari dari ahlinya, lalu terapkan seketika dengan studi kasus nyata dari industri.'],
                    ];
                @endphp

                @foreach($steps as $step)
                    <div class="relative flex flex-col items-center text-center z-10">
                        <!-- Step number -->
                        <div class="w-20 h-20 bg-[#0ABF35] border-2 border-[#0ABF35] flex items-center justify-center text-gray-800 text-3xl font-black shadow-[5px_5px_0px_0px_rgba(0,0,0,0.08)] mb-6">
                            {{ $step['n'] }}
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 uppercase tracking-wide mb-3">{{ $step['title'] }}</h3>
                        <p class="text-sm text-gray-500 leading-relaxed max-w-[260px]">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
         POPULAR FREE COURSES
    ════════════════════════════════════════════ -->
    <section class="bg-gray-100 py-16 md:py-24 px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-10">
                <div>
                    <div class="inline-block bg-[#0ABF35] text-gray-800 text-xs font-bold px-4 py-1.5 uppercase tracking-widest rounded-full mb-4">
                        MULAI GRATIS
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                        Kursus <span class="text-[#0ABF35]">Gratis</span> Populer
                    </h2>
                </div>
                <a href="{{ route('courses') }}" class="self-start md:self-auto inline-block px-6 py-3 bg-white text-gray-800 font-bold text-xs uppercase tracking-widest border-2 border-gray-300 hover:bg-gray-800 hover:text-white transition-colors duration-200">
                    LIHAT SEMUA →
                </a>
            </div>

            <!-- Course Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $courses = [
                        ['title' => 'Introduction to HTML', 'duration' => '6 Hours', 'level' => 'Beginner'],
                        ['title' => 'Dasar-Dasar Networking', 'duration' => '8 Hours', 'level' => 'Beginner'],
                        ['title' => 'Python for Beginners', 'duration' => '10 Hours', 'level' => 'Beginner'],
                        ['title' => 'Linux Fundamentals', 'duration' => '7 Hours', 'level' => 'Beginner'],
                    ];
                @endphp

                @foreach($courses as $course)
                    <article class="bg-white border-2 border-gray-200 flex flex-col group hover:border-gray-400 hover:shadow-[6px_6px_0px_0px_#0ABF35] transition-all duration-300">
                        <!-- Thumbnail -->
                        <div class="relative overflow-hidden bg-gray-200">
                            <img src="https://placehold.co/400x240/0f172a/0ABF35?text={{ urlencode($course['title']) }}" alt="{{ $course['title'] }}" class="w-full h-40 object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-500">
                            <span class="absolute top-3 left-3 px-2.5 py-1 text-xs font-bold uppercase tracking-wider bg-[#0ABF35] text-gray-800 border border-[#0ABF35]">
                                GRATIS
                            </span>
                        </div>

                        <!-- Body -->
                        <div class="p-5 flex flex-col flex-1">
                            <span class="text-xs font-bold text-[#0ABF35] uppercase tracking-widest mb-1">Rolepath Course</span>
                            <h3 class="font-bold text-gray-900 text-base leading-snug flex-1">{{ $course['title'] }}</h3>
                            <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between text-xs text-gray-400">
                                <div class="flex items-center gap-1.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                                    <span class="font-medium">{{ $course['duration'] }}</span>
                                </div>
                                <span class="px-2.5 py-1 border border-gray-200 text-gray-500 text-xs font-medium uppercase tracking-wide">{{ $course['level'] }}</span>
                            </div>
                        </div>

                        <!-- CTA -->
                        <a href="{{ route('courses') }}" class="block w-full bg-[#0ABF35] text-gray-800 font-bold text-xs text-center py-3 uppercase tracking-widest border-t-2 border-[#0ABF35] group-hover:bg-gray-800 group-hover:text-white transition-colors duration-300">
                            MULAI BELAJAR →
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
         CTA BANNER
    ════════════════════════════════════════════ -->
    <section class="bg-[#0ABF35] py-16 md:py-20 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-5xl font-extrabold text-white leading-tight">
                Siap memulai karir<br>digital kamu?
            </h2>
            <p class="mt-4 text-white/90 text-base max-w-xl mx-auto">
                Bergabunglah dengan 10.000+ pelajar yang sudah menemukan jalur karir mereka bersama Rolepath. Gratis untuk memulai.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}" class="inline-block px-8 py-4 bg-gray-800 text-white font-bold text-sm uppercase tracking-widest border-2 border-gray-800 hover:bg-white hover:text-gray-800 transition-colors duration-200 shadow-[5px_5px_0px_0px_rgba(0,0,0,0.15)]">
                    DAFTAR GRATIS SEKARANG →
                </a>
                <a href="{{ route('courses') }}" class="inline-block px-8 py-4 bg-transparent text-white font-bold text-sm uppercase tracking-widest border-2 border-white hover:bg-white hover:text-gray-800 transition-colors duration-200">
                    LIHAT KURSUS
                </a>
            </div>
        </div>
    </section>

    <!-- Marquee animation -->
    <style>
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
    </style>

@endsection