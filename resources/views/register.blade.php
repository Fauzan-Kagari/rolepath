@extends('layouts.app')

@section('title', 'Daftar - Rolepath')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4 pt-24 pb-12">

    <!-- Decorative background blobs -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-[#0ABF35] opacity-[0.05] rounded-full -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-black opacity-[0.04] rounded-full translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

    <div class="w-full max-w-md relative">

        <!-- Top Label -->
        <div class="flex justify-center mb-5">
            <span class="inline-block bg-[#0ABF35] text-black text-xs font-bold px-4 py-1.5 uppercase tracking-widest rounded-full border border-black">
                BUAT AKUN BARU
            </span>
        </div>

        <!-- Heading -->
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                Mulai Perjalanan<br>
                <span class="relative inline-block">
                    Karirmu
                    <span class="absolute -bottom-1 left-0 w-full h-1 bg-[#0ABF35]"></span>
                </span>
            </h1>
            <p class="mt-4 text-sm text-gray-500">Buat akun Rolepath dan temukan jalur karir digitalmu.</p>
        </div>

        <!-- Card -->
        <div class="bg-white border-2 border-black shadow-[8px_8px_0px_0px_#0ABF35] px-8 py-10">

            <form class="space-y-5" method="POST" action="{{ url('/register') }}">
                @csrf

                <!-- Nama Lengkap -->
                <div>
                    <label for="name" class="block text-xs font-bold text-black uppercase tracking-widest mb-1.5">
                        Nama Lengkap
                    </label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        autocomplete="name"
                        placeholder="Masukkan nama lengkap"
                        required
                        class="block w-full border-2 border-gray-300 px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:border-black focus:outline-none transition-colors duration-200"
                    >
                    @error('name')
                        <p class="mt-1.5 text-xs text-red-500 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-xs font-bold text-black uppercase tracking-widest mb-1.5">
                        Alamat Email
                    </label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        autocomplete="email"
                        placeholder="email@contoh.com"
                        required
                        class="block w-full border-2 border-gray-300 px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:border-black focus:outline-none transition-colors duration-200"
                    >
                    @error('email')
                        <p class="mt-1.5 text-xs text-red-500 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Kata Sandi -->
                <div>
                    <label for="password" class="block text-xs font-bold text-black uppercase tracking-widest mb-1.5">
                        Kata Sandi
                    </label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        autocomplete="new-password"
                        placeholder="Minimal 8 karakter"
                        required
                        class="block w-full border-2 border-gray-300 px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:border-black focus:outline-none transition-colors duration-200"
                    >
                    @error('password')
                        <p class="mt-1.5 text-xs text-red-500 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Konfirmasi Kata Sandi -->
                <div>
                    <label for="password_confirmation" class="block text-xs font-bold text-black uppercase tracking-widest mb-1.5">
                        Konfirmasi Kata Sandi
                    </label>
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        autocomplete="new-password"
                        placeholder="Ulangi kata sandi"
                        required
                        class="block w-full border-2 border-gray-300 px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:border-black focus:outline-none transition-colors duration-200"
                    >
                </div>

                <!-- Submit -->
                <div class="pt-2">
                    <button
                        type="submit"
                        class="w-full bg-[#0ABF35] text-black font-bold py-3.5 text-sm uppercase tracking-widest border-2 border-black hover:bg-black hover:text-[#0ABF35] transition-colors duration-200"
                    >
                        DAFTAR SEKARANG →
                    </button>
                </div>

            </form>

            <!-- Divider -->
            <div class="flex items-center gap-3 my-6">
                <span class="flex-1 h-px bg-gray-200"></span>
                <span class="text-xs text-gray-400 uppercase tracking-wider">atau</span>
                <span class="flex-1 h-px bg-gray-200"></span>
            </div>

            <!-- Login Link -->
            <p class="text-center text-sm text-gray-500">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="font-bold text-black underline underline-offset-2 hover:text-[#0ABF35] transition-colors duration-200">
                    Masuk di sini
                </a>
            </p>

        </div>

    </div>
</div>

@endsection
