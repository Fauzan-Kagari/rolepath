@extends('layouts.app')

@section('title', 'Masuk - Rolepath')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4 pt-24 pb-12">

    <!-- Decorative background -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-[#0ABF35] opacity-[0.04] rounded-full translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#0ABF35] opacity-[0.03] rounded-full -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

    <div class="w-full max-w-md relative">

        <!-- Top Label -->
        <div class="flex justify-center mb-5">
            <span class="inline-block bg-[#0ABF35] text-gray-800 text-xs font-bold px-4 py-1.5 uppercase tracking-widest rounded-full">
                SELAMAT DATANG KEMBALI
            </span>
        </div>

        <!-- Heading -->
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                Masuk ke
                <span class="relative inline-block">
                    Rolepath
                    <span class="absolute -bottom-1 left-0 w-full h-1 bg-[#0ABF35] opacity-50"></span>
                </span>
            </h1>
            <p class="mt-4 text-sm text-gray-500">Lanjutkan perjalanan karir digitalmu hari ini.</p>
        </div>

        <!-- Card -->
        <div class="bg-white border-2 border-gray-200 shadow-[6px_6px_0px_0px_#0ABF35] px-8 py-10 hover:shadow-[8px_8px_0px_0px_#0ABF35] transition-shadow duration-300">

            <!-- Session Error -->
            @if(session('error'))
                <div class="mb-5 border-2 border-red-500 bg-red-50 px-4 py-3 text-sm text-red-600 font-medium">
                    {{ session('error') }}
                </div>
            @endif

            <form class="space-y-5" method="POST" action="{{ url('/login') }}">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-xs font-bold text-gray-800 uppercase tracking-widest mb-1.5">
                        Alamat Email
                    </label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        autocomplete="email"
                        placeholder="email@contoh.com"
                        value="{{ old('email') }}"
                        required
                        class="block w-full border-2 border-gray-200 px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:border-[#0ABF35] focus:outline-none transition-colors duration-200 @error('email') border-red-400 @enderror"
                    >
                    @error('email')
                        <p class="mt-1.5 text-xs text-red-500 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Kata Sandi -->
                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="password" class="block text-xs font-bold text-gray-800 uppercase tracking-widest">
                            Kata Sandi
                        </label>
                        <a href="#" class="text-xs font-semibold text-gray-400 hover:text-[#0ABF35] transition-colors duration-200 underline underline-offset-2">
                            Lupa kata sandi?
                        </a>
                    </div>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        autocomplete="current-password"
                        placeholder="Masukkan kata sandi"
                        required
                        class="block w-full border-2 border-gray-200 px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:border-[#0ABF35] focus:outline-none transition-colors duration-200 @error('password') border-red-400 @enderror"
                    >
                    @error('password')
                        <p class="mt-1.5 text-xs text-red-500 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="flex items-center gap-2.5">
                    <input
                        type="checkbox"
                        name="remember"
                        id="remember"
                        class="w-4 h-4 accent-[#0ABF35]"
                    >
                    <label for="remember" class="text-sm text-gray-600 cursor-pointer select-none">
                        Ingat saya selama 30 hari
                    </label>
                </div>

                <!-- Submit -->
                <div class="pt-2">
                    <button
                        type="submit"
                        class="w-full bg-[#0ABF35] text-white font-bold py-3.5 text-sm uppercase tracking-widest border-2 border-[#0ABF35] hover:bg-gray-800 hover:border-gray-800 transition-colors duration-200"
                    >
                        MASUK SEKARANG →
                    </button>
                </div>

            </form>

            <!-- Google Login -->
            <div class="mt-6">
                <a href="{{ route('google.login') }}"
                   class="w-full flex items-center justify-center gap-3 bg-white border-2 border-gray-200 text-gray-700 font-bold py-3 px-4 text-sm uppercase tracking-widest hover:border-gray-400 hover:shadow-[4px_4px_0px_0px_#0ABF35] transition-all duration-200">
                    <svg class="w-5 h-5 flex-shrink-0" viewBox="0 0 24 24">
                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z"/>
                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>
                    Masuk dengan Google
                </a>
            </div>

            <!-- Divider -->
            <div class="flex items-center gap-3 my-6">
                <span class="flex-1 h-px bg-gray-200"></span>
                <span class="text-xs text-gray-400 uppercase tracking-wider">atau</span>
                <span class="flex-1 h-px bg-gray-200"></span>
            </div>

            <!-- Register Link -->
            <p class="text-center text-sm text-gray-500">
                Belum punya akun?
                <a href="{{ route('register') }}" class="font-bold text-gray-800 underline underline-offset-2 hover:text-[#0ABF35] transition-colors duration-200">
                    Daftar di sini
                </a>
            </p>

        </div>

    </div>
</div>

@endsection
