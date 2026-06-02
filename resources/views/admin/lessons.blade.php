@extends('layouts.app')
@section('title', 'Kelola Materi - Rolepath')

@section('content')
<div class="min-h-screen bg-gray-50">

    <!-- Top Header Bar -->
    <div class="bg-gradient-to-r from-gray-900 to-gray-800 border-b-2 border-[#0ABF35] pt-20">
        <div class="max-w-6xl mx-auto px-4 py-6">
            <a href="/admin/dashboard" class="inline-flex items-center gap-2 text-xs font-bold text-gray-400 uppercase tracking-widest hover:text-[#0ABF35] transition-colors mb-4">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
                KEMBALI KE KURSUS
            </a>
            <div class="flex items-end justify-between gap-4">
                <div>
                    <div class="inline-block bg-red-500 text-white text-xs font-black px-3 py-1.5 uppercase tracking-widest mb-3">
                        ADMINISTRATOR
                    </div>
                    <h1 class="text-3xl md:text-4xl font-black text-white leading-tight">
                        Kelola Materi: <span class="text-[#0ABF35]">{{ $course->title }}</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="px-4 py-10">
        <div class="max-w-6xl mx-auto">

            @if(session('success'))
                <div class="flex items-center gap-3 bg-white border border-[#0ABF35] shadow-sm px-5 py-4 mb-8">
                    <div class="w-8 h-8 bg-[#0ABF35] flex items-center justify-center shrink-0 rounded">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <p class="text-sm font-bold text-gray-900">{{ session('success') }}</p>
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

                <!-- Left Sidebar -->
                <div class="lg:col-span-1 space-y-6">

                    <!-- Edit Kursus -->
                    <div class="bg-white border border-gray-200 shadow-lg shadow-gray-200/50">
                        <div class="bg-gradient-to-r from-gray-800 to-gray-700 px-6 py-4 flex items-center gap-3">
                            <div class="w-7 h-7 bg-white/20 flex items-center justify-center rounded">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                            </div>
                            <h2 class="text-sm font-black text-white uppercase tracking-widest">Edit Kursus</h2>
                        </div>

                        <form action="/admin/courses/{{ $course->id }}" method="POST" class="p-6 space-y-4">
                            @csrf
                            @method('PUT')

                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-1.5">Judul Kursus</label>
                                <input type="text" name="title" value="{{ $course->title }}" required class="w-full border border-gray-300 bg-gray-50 text-gray-900 px-4 py-3 text-sm placeholder-gray-400 focus:border-[#0ABF35] focus:ring-1 focus:ring-[#0ABF35] focus:outline-none transition-colors">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-1.5">Deskripsi</label>
                                <textarea name="description" rows="3" required class="w-full border border-gray-300 bg-gray-50 text-gray-900 px-4 py-3 text-sm placeholder-gray-400 focus:border-[#0ABF35] focus:ring-1 focus:ring-[#0ABF35] focus:outline-none transition-colors resize-none">{{ $course->description }}</textarea>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-1.5">URL Gambar</label>
                                <input type="url" name="image_url" value="{{ $course->image_url }}" placeholder="https://..." class="w-full border border-gray-300 bg-gray-50 text-gray-900 px-4 py-3 text-sm placeholder-gray-400 focus:border-[#0ABF35] focus:ring-1 focus:ring-[#0ABF35] focus:outline-none transition-colors">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-1.5">Kategori</label>
                                <select name="category" class="w-full border border-gray-300 bg-gray-50 text-gray-900 px-4 py-3 text-sm focus:border-[#0ABF35] focus:ring-1 focus:ring-[#0ABF35] focus:outline-none transition-colors">
                                    <option value="">Pilih Kategori</option>
                                    <option value="cybersecurity" {{ $course->category === 'cybersecurity' ? 'selected' : '' }}>Cybersecurity</option>
                                    <option value="networking" {{ $course->category === 'networking' ? 'selected' : '' }}>Networking</option>
                                    <option value="programming" {{ $course->category === 'programming' ? 'selected' : '' }}>Programming</option>
                                    <option value="ai" {{ $course->category === 'ai' ? 'selected' : '' }}>AI & Data Science</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Tipe Akses</label>
                                <div class="flex gap-3">
                                    <label class="flex items-center gap-2 cursor-pointer group">
                                        <input type="radio" name="access" value="free" class="accent-[#0ABF35]" {{ ($course->access ?? 'free') === 'free' ? 'checked' : '' }}>
                                        <span class="text-xs font-bold text-[#0ABF35] border border-[#0ABF35] bg-[#0ABF35]/5 px-3 py-1 uppercase tracking-wide transition-colors cursor-pointer">GRATIS</span>
                                    </label>
                                    <label class="flex items-center gap-2 cursor-pointer group">
                                        <input type="radio" name="access" value="premium" class="accent-yellow-500" {{ ($course->access ?? 'free') === 'premium' ? 'checked' : '' }}>
                                        <span class="text-xs font-bold text-yellow-600 border border-yellow-500 bg-yellow-50 px-3 py-1 uppercase tracking-wide transition-colors cursor-pointer">PREMIUM</span>
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="w-full bg-gray-800 text-white font-bold py-3 text-xs uppercase tracking-widest hover:bg-gray-700 transition-colors duration-200 shadow-sm">
                                SIMPAN PERUBAHAN KURSUS
                            </button>
                        </form>
                    </div>

                    <!-- Form Tambah Materi -->
                    <div class="bg-white border border-gray-200 shadow-lg shadow-gray-200/50">
                        <div class="bg-gradient-to-r from-[#0ABF35] to-emerald-500 px-6 py-4 flex items-center gap-3">
                            <div class="w-7 h-7 bg-white/20 flex items-center justify-center rounded">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                            <h2 class="text-sm font-black text-white uppercase tracking-widest">Tambah Materi</h2>
                        </div>

                        <form action="/admin/courses/{{ $course->id }}/lessons" method="POST" class="p-6 space-y-5">
                            @csrf

                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-1.5">Nama Widget / Bab</label>
                                <input type="text" name="section_title" placeholder="Contoh: Intermediate HTML Concepts" required class="w-full border border-gray-300 bg-gray-50 text-gray-900 px-4 py-3 text-sm placeholder-gray-400 focus:border-[#0ABF35] focus:ring-1 focus:ring-[#0ABF35] focus:outline-none transition-colors">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-1.5">Judul Materi</label>
                                <input type="text" name="title" placeholder="Contoh: Emmet" required class="w-full border border-gray-300 bg-gray-50 text-gray-900 px-4 py-3 text-sm placeholder-gray-400 focus:border-[#0ABF35] focus:ring-1 focus:ring-[#0ABF35] focus:outline-none transition-colors">
                            </div>

                            <button type="submit" class="w-full bg-[#0ABF35] text-white font-bold py-3.5 text-xs uppercase tracking-widest hover:bg-emerald-600 transition-colors duration-200 shadow-sm">
                                + SIMPAN MATERI
                            </button>
                        </form>
                    </div>

                    <!-- Form Tambah Widget Baru -->
                    <div class="bg-white border border-gray-200 shadow-lg shadow-gray-200/50">
                        <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 px-6 py-4 flex items-center gap-3">
                            <div class="w-7 h-7 bg-white/20 flex items-center justify-center rounded">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
                            </div>
                            <h2 class="text-sm font-black text-white uppercase tracking-widest">Tambah Widget Baru</h2>
                        </div>

                        <form action="/admin/courses/{{ $course->id }}/lessons" method="POST" class="p-6 space-y-5">
                            @csrf
                            <input type="hidden" name="title" value="-">

                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-1.5">Nama Widget / Bab</label>
                                <input type="text" name="section_title" placeholder="Contoh: Pengenalan CSS Dasar" required class="w-full border border-gray-300 bg-gray-50 text-gray-900 px-4 py-3 text-sm placeholder-gray-400 focus:border-[#0ABF35] focus:ring-1 focus:ring-[#0ABF35] focus:outline-none transition-colors">
                                <p class="text-[10px] text-gray-400 mt-1">Widget baru akan muncul sebagai bab di struktur kursus. Judul materi akan diisi otomatis.</p>
                            </div>

                            <button type="submit" class="w-full bg-emerald-600 text-white font-bold py-3.5 text-xs uppercase tracking-widest hover:bg-emerald-700 transition-colors duration-200 shadow-sm">
                                + TAMBAH WIDGET BARU
                            </button>
                        </form>
                    </div>

                </div>

                <!-- Struktur Kursus -->
                <div class="lg:col-span-2">

                    <div class="flex items-center gap-3 mb-5">
                        <span class="w-1 h-6 bg-[#0ABF35] inline-block"></span>
                        <h2 class="text-lg font-bold text-gray-900 uppercase tracking-wide">Struktur Kursus</h2>
                    </div>

                    <div class="space-y-6">
                        @forelse($groupedLessons as $sectionTitle => $lessons)
                            <div class="bg-white border border-gray-200 shadow-sm">
                                <div class="bg-gray-800 px-6 py-4">
                                    <h3 class="text-white font-bold text-base uppercase tracking-wide">{{ $sectionTitle }}</h3>
                                </div>

                                <div class="divide-y divide-gray-100">
                                    @foreach($lessons as $lesson)
                                        <div class="px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition-colors group">
                                            <div class="flex items-center gap-4">
                                                <div class="w-8 h-8 bg-gray-100 flex items-center justify-center text-xs font-bold text-gray-500 shrink-0">
                                                    {{ $lesson->order_number }}
                                                </div>
                                                <p class="text-gray-900 font-medium text-sm">{{ $lesson->title }}</p>
                                            </div>

                                            <div class="flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                <a href="/admin/lessons/{{ $lesson->id }}/edit" class="text-xs font-bold uppercase tracking-wider px-3 py-1.5 bg-[#0ABF35] text-white hover:bg-emerald-600 transition-colors shadow-sm">
                                                    Edit
                                                </a>

                                                <form action="/admin/lessons/{{ $lesson->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus materi ini secara permanen?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="w-8 h-8 flex items-center justify-center border border-gray-200 text-gray-400 hover:border-red-400 hover:text-red-500 hover:bg-red-50 transition-colors rounded">
                                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14H6L5 6"/><path d="M10 11v6M14 11v6"/><path d="M9 6V4h6v2"/></svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @empty
                            <div class="bg-white text-center py-16 px-4 border border-gray-200">
                                <div class="w-16 h-16 border-2 border-dashed border-gray-200 flex items-center justify-center mx-auto mb-4 rounded-lg">
                                    <svg class="w-7 h-7 text-gray-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                                </div>
                                <p class="text-sm font-bold text-gray-400 uppercase tracking-wider">Belum ada materi</p>
                                <p class="text-xs text-gray-300 mt-1">Tambahkan materi pertama melalui form di sebelah kiri.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
