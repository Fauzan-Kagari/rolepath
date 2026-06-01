<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rolepath - Your Tech Career Route')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-900">

    <!-- Navbar -->
    <header class="fixed top-0 left-0 w-full bg-black z-50">
        <div class="max-w-6xl mx-auto px-4 h-16 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('images/Rolepath logo.png') }}" alt="Rolepath" class="h-25 w-auto" />
            </a>

            <nav class="hidden md:flex items-center gap-8 text-sm">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-white font-bold' : 'text-gray-300 hover:text-white transition' }}">Home</a>
                <a href="{{ route('pricing') }}" class="{{ request()->routeIs('pricing') ? 'text-white font-bold' : 'text-gray-300 hover:text-white transition' }}">Pricing Plan</a>
                <a href="{{ route('courses') }}" class="{{ request()->routeIs('courses') ? 'text-white font-bold' : 'text-gray-300 hover:text-white transition' }}">Course</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-white font-bold' : 'text-gray-300 hover:text-white transition' }}">About us</a>
            </nav>

            <div class="flex items-center gap-2">

                @guest
                    <a href="{{ url('/login') }}" class="hidden md:inline-block text-sm text-gray-300 hover:text-white border border-gray-700 hover:border-white px-4 py-2 transition-colors">Masuk</a>
                    <a href="{{ url('/register') }}" class="bg-[#0ABF35] text-black px-5 py-2 text-sm font-bold hover:bg-white transition-colors">Daftar</a>
                @endguest

                @auth
                    <div class="relative group">
                        <div class="flex items-center gap-1.5 text-sm text-gray-300 cursor-pointer hover:text-white transition-colors border border-gray-700 hover:border-white px-3 py-1.5">
                            <svg class="w-4 h-4 text-[#0ABF35]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="w-3 h-3 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </div>
                        <div class="absolute right-0 top-full mt-1 w-48 bg-white border-2 border-black shadow-[4px_4px_0px_0px_#0ABF35] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <a href="{{ url('/dashboard') }}" class="flex items-center gap-2 px-4 py-2.5 text-sm text-gray-800 hover:bg-gray-100 border-b border-gray-100">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                                Dashboard
                            </a>
                            <a href="{{ url('/logout') }}" class="flex items-center gap-2 px-4 py-2.5 text-sm text-red-600 hover:bg-red-50">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                                Keluar
                            </a>
                        </div>
                    </div>
                @endauth

                <a href="#" class="hidden md:inline-flex items-center gap-1.5 text-sm text-[#0ABF35] border-2 border-[#0ABF35] px-4 py-1.5 font-bold hover:bg-[#0ABF35] hover:text-black transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Hubungi Kami
                </a>

                <button class="md:hidden w-9 h-9 flex items-center justify-center border border-gray-700 hover:border-white transition-colors" aria-label="Menu">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#0A192F] text-white">
        <div class="max-w-6xl mx-auto px-4 py-12 flex flex-col md:flex-row justify-between items-center md:items-start gap-6">
            <div class="text-center md:text-left">
                <span class="text-2xl font-extrabold tracking-tight">
                    <span class="text-[#0ABF35]">ROLE</span><span class="text-white">PATH</span>
                </span>
                <p class="text-xs text-gray-400 mt-1 tracking-widest">YOUR DIRECT ROUTE TO TECH ROLES</p>
            </div>
            <div class="flex items-center gap-3">
                <a href="#" class="w-9 h-9 rounded-full bg-slate-700 flex items-center justify-center hover:bg-[#0ABF35] transition" aria-label="YouTube">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.5 6.19a3.02 3.02 0 0 0-2.12-2.14C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.38.55A3.02 3.02 0 0 0 .5 6.19 31.6 31.6 0 0 0 0 12a31.6 31.6 0 0 0 .5 5.81 3.02 3.02 0 0 0 2.12 2.14c1.88.55 9.38.55 9.38.55s7.5 0 9.38-.55a3.02 3.02 0 0 0-2.12-2.14A31.6 31.6 0 0 0 24 12a31.6 31.6 0 0 0-.5-5.81zM9.55 15.57V8.43L15.82 12l-6.27 3.57z" /></svg>
                </a>
                <a href="#" class="w-9 h-9 rounded-full bg-slate-700 flex items-center justify-center hover:bg-[#0ABF35] transition" aria-label="Facebook">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" /></svg>
                </a>
                <a href="#" class="w-9 h-9 rounded-full bg-slate-700 flex items-center justify-center hover:bg-[#0ABF35] transition" aria-label="Instagram">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z" /></svg>
                </a>
                <a href="#" class="w-9 h-9 rounded-full bg-slate-700 flex items-center justify-center hover:bg-[#0ABF35] transition" aria-label="LinkedIn">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" /></svg>
                </a>
                <a href="#" class="w-9 h-9 rounded-full bg-slate-700 flex items-center justify-center hover:bg-[#0ABF35] transition" aria-label="X / Twitter">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" /></svg>
                </a>
            </div>
        </div>

        <hr class="border-gray-700 max-w-6xl mx-auto">

        <div class="max-w-6xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
            <div>
                <ul class="space-y-3">
                    <li><a href="#" class="text-sm text-gray-300 hover:text-white transition">Learning Catalog</a></li>
                    <li><a href="#" class="text-sm text-gray-300 hover:text-white transition">Find Course</a></li>
                </ul>
            </div>
            <div>
                <ul class="space-y-3">
                    <li><a href="#" class="text-sm text-gray-300 hover:text-white transition">Support</a></li>
                    <li><a href="#" class="text-sm text-gray-300 hover:text-white transition">About Us</a></li>
                </ul>
            </div>
            <div>
                <ul class="space-y-3">
                    <li><a href="#" class="text-sm text-gray-300 hover:text-white transition">Partner With Us</a></li>
                </ul>
            </div>
        </div>

        <div class="bg-black/30 py-4 px-4">
            <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-3 text-xs text-gray-400">
                <span>&copy; 2026 Rolepath . All Right Reserved</span>
                <div class="flex flex-wrap justify-center gap-x-4 gap-y-1">
                    <a href="#" class="hover:text-white transition">Terms and Conditions</a>
                    <a href="#" class="hover:text-white transition">Privacy Statement</a>
                    <a href="#" class="hover:text-white transition">Cookie Policy</a>
                    <a href="#" class="hover:text-white transition">Data Protection</a>
                    <a href="#" class="hover:text-white transition">TradeMakers</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
