@extends('layouts.app')

@section('title', 'About Us - Rolepath')

@section('content')

    <!-- Hero Section -->
    <section class="bg-gray-100 py-16 md:py-24 px-4 pt-28 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-72 h-72 bg-[#0ABF35] opacity-5 rounded-full translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-black opacity-5 rounded-full -translate-x-1/2 translate-y-1/2"></div>

        <div class="max-w-5xl mx-auto">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="flex-1 text-left">
                    <div class="inline-block bg-[#0ABF35] text-gray-800 text-xs font-bold px-4 py-1.5 uppercase tracking-widest rounded-full mb-6">
                        TENTANG KAMI
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold text-gray-900 leading-tight">
                        Kami Percaya <br>
                        <span class="relative inline-block">
                            Belajar Digital
                            <span class="absolute -bottom-1 left-0 w-full h-1 bg-[#0ABF35]"></span>
                        </span><br>
                        Harus Terjangkau.
                    </h1>
                    <p class="mt-6 text-lg text-gray-500 leading-relaxed max-w-lg">
                        Rolepath hadir untuk membantu siapa saja — dari pelajar hingga profesional — menemukan jalur karir digital mereka dengan panduan yang tepat dan biaya yang ramah di kantong.
                    </p>
                </div>

                <!-- Stats Block -->
                <div class="flex-shrink-0 grid grid-cols-2 gap-4 w-full md:w-auto">
                    <div class="bg-gray-800 text-white p-6 border-2 border-gray-800 shadow-[5px_5px_0px_0px_#0ABF35]">
                        <span class="text-4xl font-bold text-[#0ABF35]">10K+</span>
                        <p class="text-sm text-gray-400 mt-1 uppercase tracking-wider">Pengguna Aktif</p>
                    </div>
                    <div class="bg-white border-2 border-gray-200 p-6">
                        <span class="text-4xl font-bold text-gray-900">50+</span>
                        <p class="text-sm text-gray-500 mt-1 uppercase tracking-wider">Materi Kursus</p>
                    </div>
                    <div class="bg-white border-2 border-gray-200 p-6">
                        <span class="text-4xl font-bold text-gray-900">98%</span>
                        <p class="text-sm text-gray-500 mt-1 uppercase tracking-wider">Kepuasan User</p>
                    </div>
                    <div class="bg-white border-2 border-gray-200 p-6 hover:border-gray-400 transition-colors duration-300">
                        <span class="text-4xl font-bold text-[#0ABF35]">3+</span>
                        <p class="text-sm text-gray-500 mt-1 uppercase tracking-wider">Tahun Berdiri</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="bg-white py-16 md:py-20 px-4">
        <div class="max-w-5xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Mission -->
                <div class="bg-gray-800 text-white p-10 border-2 border-gray-800 shadow-[8px_8px_0px_0px_#0ABF35] flex flex-col gap-4">
                    <div class="w-12 h-12 bg-[#0ABF35] flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white uppercase tracking-wide">Misi Kami</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Menyediakan platform pembelajaran digital yang inklusif, terstruktur, dan terjangkau — sehingga setiap orang memiliki kesempatan yang sama untuk berkembang di era digital tanpa hambatan biaya.
                    </p>
                </div>

                <!-- Vision -->
                <div class="bg-white p-10 border-2 border-gray-200 flex flex-col gap-4 hover:border-gray-400 transition-colors duration-300">
                    <div class="w-12 h-12 bg-[#0ABF35] flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 uppercase tracking-wide">Visi Kami</h3>
                    <p class="text-gray-500 leading-relaxed">
                        Menjadi platform karir digital #1 di Asia Tenggara yang dipercaya oleh jutaan pelajar dan profesional dalam menemukan jalur karir digital yang tepat dan bermakna.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Why Rolepath -->
    <section class="bg-gray-100 py-16 md:py-20 px-4">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                    Kenapa Pilih <span class="text-[#0ABF35]">Rolepath</span>?
                </h2>
                <p class="mt-3 text-gray-500 text-lg">Kami beda dari yang lain.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Feature 1 -->
                <div class="bg-white p-8 border-2 border-gray-200 group hover:border-gray-400 hover:shadow-[6px_6px_0px_0px_#0ABF35] transition-all duration-300">
                    <div class="w-12 h-12 bg-[#0ABF35] flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2 uppercase tracking-wide">Materi Terstruktur</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">Kurikulum dirancang bersama praktisi industri, memastikan kamu belajar hal yang relevan dan langsung bisa diterapkan.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-gray-800 p-8 border-2 border-gray-800 shadow-[6px_6px_0px_0px_#0ABF35]">
                    <div class="w-12 h-12 bg-[#0ABF35] flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-white mb-2 uppercase tracking-wide">Mentor Berpengalaman</h4>
                    <p class="text-gray-400 text-sm leading-relaxed">Belajar langsung dari para profesional aktif di industri, bukan sekadar teori semata.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-8 border-2 border-gray-200 group hover:border-gray-400 hover:shadow-[6px_6px_0px_0px_#0ABF35] transition-all duration-300">
                    <div class="w-12 h-12 bg-[#0ABF35] flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2 uppercase tracking-wide">Sertifikat Diakui</h4>
                    <p class="text-gray-500 text-sm leading-relaxed">Dapatkan sertifikat digital yang dapat dibagikan ke LinkedIn dan diakui oleh ratusan perusahaan mitra kami.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="bg-white py-16 md:py-20 px-4">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Tim Di Balik Rolepath</h2>
                <p class="mt-3 text-gray-500 text-lg">Orang-orang yang berdedikasi untuk masa depan digitalmu.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

                <!-- Team Member 1 -->
                <div class="group text-center">
                    <div class="relative w-32 h-32 mx-auto mb-4">
                        <div class="w-full h-full bg-gray-200 border-2 border-gray-300 overflow-hidden group-hover:shadow-[5px_5px_0px_0px_#0ABF35] transition-all duration-300">
                            <img src="https://ui-avatars.com/api/?name=Andi+Pratama&background=0ABF35&color=333&bold=true&size=128" alt="Andi Pratama" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <h4 class="font-bold text-gray-900 text-lg">Andi Pratama</h4>
                    <p class="text-[#0ABF35] text-sm font-semibold uppercase tracking-wider">Co-Founder & CEO</p>
                    <p class="text-gray-500 text-sm mt-2">Berpengalaman 8 tahun di industri teknologi dan edukasi digital.</p>
                </div>

                <!-- Team Member 2 -->
                <div class="group text-center">
                    <div class="relative w-32 h-32 mx-auto mb-4">
                        <div class="w-full h-full bg-gray-200 border-2 border-gray-300 overflow-hidden group-hover:shadow-[5px_5px_0px_0px_#0ABF35] transition-all duration-300">
                            <img src="https://ui-avatars.com/api/?name=Sari+Dewi&background=E5E7EB&color=0ABF35&bold=true&size=128" alt="Sari Dewi" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <h4 class="font-bold text-gray-900 text-lg">Sari Dewi</h4>
                    <p class="text-[#0ABF35] text-sm font-semibold uppercase tracking-wider">Head of Curriculum</p>
                    <p class="text-gray-500 text-sm mt-2">Mantan Lead Instructor di beberapa bootcamp teknologi terkemuka.</p>
                </div>

                <!-- Team Member 3 -->
                <div class="group text-center">
                    <div class="relative w-32 h-32 mx-auto mb-4">
                        <div class="w-full h-full bg-gray-200 border-2 border-gray-300 overflow-hidden group-hover:shadow-[5px_5px_0px_0px_#0ABF35] transition-all duration-300">
                            <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=0ABF35&color=333&bold=true&size=128" alt="Budi Santoso" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <h4 class="font-bold text-gray-900 text-lg">Budi Santoso</h4>
                    <p class="text-[#0ABF35] text-sm font-semibold uppercase tracking-wider">CTO</p>
                    <p class="text-gray-500 text-sm mt-2">Full-stack engineer dengan passion membangun platform edukasi scalable.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-[#0ABF35] py-16 md:py-20 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">
                Siap Mulai Perjalananmu?
            </h2>
            <p class="text-white/90 text-lg mb-8 max-w-xl mx-auto">
                Bergabunglah dengan ribuan pelajar yang sudah menemukan karir digital impian mereka bersama Rolepath.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/pricing" class="inline-block px-8 py-4 bg-gray-800 text-white font-bold uppercase tracking-widest text-sm border-2 border-gray-800 hover:bg-white hover:text-gray-800 transition-colors duration-200 shadow-[5px_5px_0px_0px_rgba(0,0,0,0.15)]">
                    MULAI SEKARANG
                </a>
                <a href="/courses" class="inline-block px-8 py-4 bg-transparent text-white font-bold uppercase tracking-widest text-sm border-2 border-white hover:bg-white hover:text-gray-800 transition-colors duration-200">
                    LIHAT KURSUS
                </a>
            </div>
        </div>
    </section>

@endsection
