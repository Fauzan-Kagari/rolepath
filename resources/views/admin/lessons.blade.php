@extends('layouts.app')
@section('title', 'Kelola Materi - Rolepath')

@section('content')
<section class="bg-[#0A192F] pt-28 pb-16 px-4 min-h-screen">
    <div class="max-w-6xl mx-auto">
        
        <div class="mb-8 border-b border-white/10 pb-6">
            <a href="/admin/dashboard" class="text-[#00F5D4] text-sm font-bold mb-4 inline-block hover:underline">← KEMBALI KE KURSUS</a>
            <h1 class="text-3xl font-black text-white">Kelola Materi: {{ $course->title }}</h1>
        </div>

        @if(session('success'))
        <div class="bg-[#00F5D4]/20 border border-[#00F5D4] text-[#00F5D4] px-4 py-3 rounded mb-6 font-bold">
            {{ session('success') }}
        </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Form Tambah Materi -->
            <div class="lg:col-span-1 bg-black/50 border border-white/10 p-6 rounded-xl h-fit">
                <h2 class="text-xl font-bold text-white mb-4">+ Tambah Materi (Lesson)</h2>
                <form action="/admin/courses/{{ $course->id }}/lessons" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-sm text-[#00F5D4] font-bold mb-1">Nama Widget / Bab (Section Title)</label>
                        <input type="text" name="section_title" placeholder="Contoh: Intermediate HTML Concepts" required class="w-full bg-[#0A192F] border border-[#00F5D4]/50 text-white px-4 py-2 rounded focus:outline-none focus:border-[#00F5D4]">
                    </div>
                    
                    <div class="mb-4 mt-6">
                        <label class="block text-sm text-gray-400 mb-1">Judul Materi (Lesson Title)</label>
                        <input type="text" name="title" placeholder="Contoh: Emmet" required class="w-full bg-[#0A192F] border border-white/20 text-white px-4 py-2 rounded focus:outline-none focus:border-[#00F5D4]">
                    </div>
                    
                    <div class="mb-4">
                        <label class="block text-sm text-gray-400 mb-1">Link CodePen (Opsional)</label>
                        <input type="url" name="codepen_url" placeholder="https://codepen.io/..." class="w-full bg-[#0A192F] border border-white/20 text-white px-4 py-2 rounded focus:outline-none focus:border-[#00F5D4]">
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm text-gray-400 mb-1">Teks Materi Dasar</label>
                        <textarea name="content" rows="4" class="w-full bg-[#0A192F] border border-white/20 text-white px-4 py-2 rounded focus:outline-none focus:border-[#00F5D4]"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-[#00F5D4] text-[#0A192F] font-bold py-3 rounded hover:opacity-90 transition-opacity">
                        SIMPAN MATERI
                    </button>
                </form>
            </div>

            <div class="lg:col-span-2">
                <h2 class="text-xl font-bold text-white mb-4">Struktur Kursus</h2>
                
                <div class="space-y-6">
                    @forelse($groupedLessons as $sectionTitle => $lessons)
                        <div class="bg-white/5 border border-white/10 rounded-xl overflow-hidden">
                            <div class="bg-black/40 px-6 py-4 border-b border-white/10">
                                <h3 class="text-[#00F5D4] font-black text-lg tracking-wide uppercase">{{ $sectionTitle }}</h3>
                            </div>
                            
                            <div class="divide-y divide-white/5">
                                @foreach($lessons as $lesson)
                                    <div class="px-6 py-4 flex justify-between items-center hover:bg-white/5 transition-colors group">
                                        <div class="flex items-center gap-4">
                                            <div class="w-8 h-8 rounded-full bg-[#0A192F] flex items-center justify-center border border-white/20 text-xs font-bold text-gray-400">
                                                {{ $lesson->order_number }}
                                            </div>
                                            <p class="text-white font-medium">{{ $lesson->title }}</p>
                                        </div>

                                        <div class="flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                            <a href="/admin/lessons/{{ $lesson->id }}/edit" class="text-[#00F5D4] border border-[#00F5D4]/30 hover:bg-[#00F5D4]/10 px-3 py-1 text-xs rounded font-bold transition-colors">
                                                Edit
                                            </a>

                                            <form action="/admin/lessons/{{ $lesson->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus materi ini secara permanen?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-400 border border-red-400/30 hover:bg-red-400/10 px-3 py-1 text-xs rounded font-bold transition-colors">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-10 bg-black/30 rounded-xl border border-white/10 border-dashed">
                            <p class="text-gray-500">Belum ada materi di dalam kursus ini.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
@endsection