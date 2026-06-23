@extends('layouts.app')

@section('title', 'Pricing Plan - Rolepath')

@section('content')

    <!-- Page Header -->
    <section class="bg-gray-100 pt-32 md:pt-30 pb-12 md:pb-16 px-4 relative overflow-hidden">
        <div class="absolute right-0 top-0 h-full w-1/3 bg-[#0ABF35] opacity-[0.04] skew-x-[-12deg] translate-x-16"></div>
        <div class="max-w-6xl mx-auto relative">
            <div class="inline-block bg-[#0ABF35] text-gray-800 text-xs font-bold px-4 py-1.5 uppercase tracking-widest rounded-full mb-4">
                PAKET BELAJAR
            </div>
            <h1 class="text-3xl md:text-5xl font-bold text-gray-900 leading-tight">
                Pilih Paket Belajar<br>
                <span class="relative inline-block">
                    Sesuai Kebutuhanmu
                    <span class="absolute -bottom-1 left-0 w-full h-1 bg-[#0ABF35]"></span>
                </span>
            </h1>
            <p class="mt-6 text-base text-gray-500 max-w-2xl leading-relaxed">
                Investasi terbaik untuk masa depan digitalmu. Mulai gratis, tingkatkan ke profesional.
            </p>
        </div>
    </section>

    <!-- Pricing Cards -->
    <section class="bg-white py-12 md:py-16 px-4">
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">

            {{-- Monthly --}}
            <div class="relative bg-white border-2 border-gray-200 p-8 flex flex-col justify-between group hover:border-gray-400 hover:shadow-[6px_6px_0px_0px_#0ABF35] transition-all duration-300">
                <div class="absolute -top-3 left-6 bg-red-500 text-white text-[11px] font-bold px-3 py-1 uppercase rounded-full border-2 border-gray-800 z-10 tracking-wider">
                    LIMITED OFFER
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Monthly</h2>
                    <div class="mb-6">
                        <div class="flex items-baseline">
                            <span class="text-5xl font-bold text-gray-900">Rp 5.500</span>
                            <span class="text-gray-500 ml-2">/bulan</span>
                        </div>
                        <div class="mt-1.5 flex items-center gap-2">
                            <span class="text-base text-gray-400 line-through">Rp 9.900</span>
                            <span class="inline-block bg-red-500 text-white text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider">HEMAT 44%</span>
                        </div>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-gray-700">
                            <svg class="w-6 h-6 text-[#0ABF35] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                            Akses ke semua materi dasar
                        </li>
                        <li class="flex items-center text-gray-700">
                            <svg class="w-6 h-6 text-[#0ABF35] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                            Pembaruan konten bulanan
                        </li>
                        <li class="flex items-center text-gray-700">
                            <svg class="w-6 h-6 text-[#0ABF35] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                            Dukungan komunitas forum
                        </li>
                    </ul>
                </div>
                @auth
                    <a href="https://wa.me/6281717855832?text=Halo%20saya%20ingin%20berlangganan%20paket%20Monthly%20Rp%205.500" target="_blank" class="block w-full py-3 text-sm font-bold uppercase tracking-wider border-2 border-gray-300 text-gray-700 hover:bg-gray-800 hover:text-white hover:border-gray-800 transition-colors duration-200 text-center">
                        PILIH MONTHLY
                    </a>
                @else
                    <a href="{{ route('login') }}" class="block w-full py-3 text-sm font-bold uppercase tracking-wider border-2 border-gray-300 text-gray-700 hover:bg-gray-800 hover:text-white hover:border-gray-800 transition-colors duration-200 text-center">
                        PILIH MONTHLY
                    </a>
                @endauth
            </div>

            {{-- Yearly --}}
            <div class="relative bg-gray-800 text-white border-2 border-gray-800 p-8 shadow-[6px_6px_0px_0px_#0ABF35] flex flex-col justify-between group hover:shadow-[8px_8px_0px_0px_#0ABF35] transition-all duration-300">
                {{-- Badge --}}
                <div class="absolute -top-3 right-6 bg-[#0ABF35] text-gray-800 text-xs font-bold px-4 py-1.5 uppercase rounded-full border-2 border-gray-800 z-10 tracking-wider">
                    PALING HEMAT
                </div>

                <div>
                    <h2 class="text-3xl font-bold text-white mb-4">Yearly</h2>
                    <div class="mb-6 flex items-baseline">
                        <span class="text-5xl font-bold text-white">Rp 50.000</span>
                        <span class="text-gray-400 ml-2">/tahun</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-gray-300">
                            <svg class="w-6 h-6 text-[#0ABF35] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                            Akses ke semua materi lengkap
                        </li>
                        <li class="flex items-center text-gray-300">
                            <svg class="w-6 h-6 text-[#0ABF35] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                            Konsultasi mentor eksklusif
                        </li>
                        <li class="flex items-center text-gray-300">
                            <svg class="w-6 h-6 text-[#0ABF35] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                            Sertifikat kelulusan digital
                        </li>
                        <li class="flex items-center text-gray-300">
                            <svg class="w-6 h-6 text-[#0ABF35] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                            Akses offline course
                        </li>
                    </ul>
                </div>
                @auth
                    <a href="https://wa.me/6281717855832?text=Halo%20saya%20ingin%20berlangganan%20paket%20Yearly%20Rp%2050.000" target="_blank" class="block w-full py-3 text-sm font-bold uppercase tracking-wider bg-[#0ABF35] text-gray-800 border-2 border-[#0ABF35] hover:bg-opacity-90 transition-colors duration-200 text-center">
                        PILIH YEARLY
                    </a>
                @else
                    <a href="{{ route('login') }}" class="block w-full py-3 text-sm font-bold uppercase tracking-wider bg-[#0ABF35] text-gray-800 border-2 border-[#0ABF35] hover:bg-opacity-90 transition-colors duration-200 text-center">
                        PILIH YEARLY
                    </a>
                @endauth
            </div>

        </div>
    </section>

@endsection
