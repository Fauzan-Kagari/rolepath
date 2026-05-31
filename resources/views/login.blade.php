@extends('layouts.app')

@section('title', 'Masuk - Rolepath')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4 pt-24 pb-12">

    <!-- Decorative background -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-[#0ABF35] opacity-[0.05] rounded-full translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-black opacity-[0.04] rounded-full -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

    <div class="w-full max-w-md relative">

        <!-- Top Label -->
        <div class="flex justify-center mb-5">
            <span class="inline-block bg-black text-[#0ABF35] text-xs font-bold px-4 py-1.5 uppercase tracking-widest rounded-full border border-black">
                SELAMAT DATANG KEMBALI
            </span>
        </div>

        <!-- Heading -->
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                Masuk ke
                <span class="relative inline-block">
                    Rolepath
                    <span class="absolute -bottom-1 left-0 w-full h-1 bg-[#0ABF35]"></span>
                </span>
            </h1>
            <p class="mt-4 text-sm text-gray-500">Lanjutkan perjalanan karir digitalmu hari ini.</p>
        </div>

        <!-- Card -->
        <div class="bg-white border-2 border-black shadow-[8px_8px_0px_0px_#0ABF35] px-8 py-10">

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
                    <label for="email" class="block text-xs font-bold text-black uppercase tracking-widest mb-1.5">
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
                        class="block w-full border-2 border-gray-300 px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:border-black focus:outline-none transition-colors duration-200 @error('email') border-red-400 @enderror"
                    >
                    @error('email')
                        <p class="mt-1.5 text-xs text-red-500 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Kata Sandi -->
                <div>
                    <div class="flex items-center justify-between mb-1.5">
                        <label for="password" class="block text-xs font-bold text-black uppercase tracking-widest">
                            Kata Sandi
                        </label>
                        <a href="#" class="text-xs font-semibold text-gray-500 hover:text-[#0ABF35] transition-colors duration-200 underline underline-offset-2">
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
                        class="block w-full border-2 border-gray-300 px-4 py-3 text-sm text-gray-900 placeholder-gray-400 focus:border-black focus:outline-none transition-colors duration-200 @error('password') border-red-400 @enderror"
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
                        class="w-full bg-black text-[#0ABF35] font-bold py-3.5 text-sm uppercase tracking-widest border-2 border-black hover:bg-[#0ABF35] hover:text-black transition-colors duration-200"
                    >
                        MASUK SEKARANG →
                    </button>
                </div>

            </form>

            <!-- Divider -->
            <div class="flex items-center gap-3 my-6">
                <span class="flex-1 h-px bg-gray-200"></span>
                <span class="text-xs text-gray-400 uppercase tracking-wider">atau</span>
                <span class="flex-1 h-px bg-gray-200"></span>
            </div>

            <!-- Register Link -->
            <p class="text-center text-sm text-gray-500">
                Belum punya akun?
                <a href="{{ route('register') }}" class="font-bold text-black underline underline-offset-2 hover:text-[#0ABF35] transition-colors duration-200">
                    Daftar di sini
                </a>
            </p>

        </div>

    </div>
</div>

@endsection
