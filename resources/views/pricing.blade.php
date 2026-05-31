@extends('layouts.app')

@section('title', 'Pricing Plan - Rolepath')

@section('content')

    <!-- Header -->
    <section class="bg-gray-100 py-16 md:py-20 px-4 pt-28">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-5xl font-bold text-gray-900">
                Pilih Paket Belajar Kamu
            </h1>
            <p class="mt-4 text-lg text-gray-500">
                Investasi terbaik untuk masa depan digitalmu.
            </p>
        </div>
    </section>

    <!-- Pricing Cards -->
    <section class="bg-white py-12 md:py-16 px-4">
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">

            {{-- Monthly --}}
            <div class="bg-white border-2 border-gray-200 p-8 flex flex-col justify-between">
                <div>
                    <h2 class="text-3xl font-bold text-black mb-4">Monthly</h2>
                    <div class="mb-6 flex items-baseline">
                        <span class="text-5xl font-bold text-black">Rp 9.900</span>
                        <span class="text-gray-500 ml-2">/bulan</span>
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
                <button class="w-full py-3 text-sm font-bold uppercase tracking-wider text-[#0ABF35] border-2 border-[#0ABF35] hover:bg-[#0ABF35] hover:text-black transition-colors duration-200">
                    PILIH MONTHLY
                </button>
            </div>

            {{-- Yearly --}}
            <div class="relative bg-black text-white p-8 border-2 border-[#0ABF35] shadow-[8px_8px_0px_0px_#0ABF35] flex flex-col justify-between">
                {{-- Badge --}}
                <div class="absolute -top-3 right-6 bg-[#0ABF35] text-black text-xs font-bold px-4 py-1.5 uppercase rounded-full border-2 border-black z-10 tracking-wider">
                    PALING HEMAT
                </div>

                <div>
                    <h2 class="text-3xl font-bold text-white mb-4">Yearly</h2>
                    <div class="mb-6 flex items-baseline">
                        <span class="text-5xl font-bold text-white">Rp 50.000</span>
                        <span class="text-gray-400 ml-2">/tahun</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-white">
                            <svg class="w-6 h-6 text-[#0ABF35] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                            Akses ke semua materi lengkap
                        </li>
                        <li class="flex items-center text-white">
                            <svg class="w-6 h-6 text-[#0ABF35] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                            Konsultasi mentor eksklusif
                        </li>
                        <li class="flex items-center text-white">
                            <svg class="w-6 h-6 text-[#0ABF35] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                            Sertifikat kelulusan digital
                        </li>
                        <li class="flex items-center text-white">
                            <svg class="w-6 h-6 text-[#0ABF35] mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                            </svg>
                            Akses offline course
                        </li>
                    </ul>
                </div>
                <button class="w-full py-3 text-sm font-bold uppercase tracking-wider bg-[#0ABF35] text-black hover:bg-opacity-80 transition-colors duration-200">
                    PILIH YEARLY
                </button>
            </div>

        </div>
    </section>

@endsection
