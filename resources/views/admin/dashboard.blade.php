@extends('layouts.app')

@section('title', 'Admin Panel - Rolepath')

@section('content')

<div class="min-h-screen bg-gray-50">

    <!-- ═══════════════════════════════════════════
         TOP HEADER BAR
    ════════════════════════════════════════════ -->
    <div class="bg-gradient-to-r from-gray-900 to-gray-800 border-b-2 border-[#0ABF35] pt-20 pb-0">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 py-6">
                <div>
                    <div class="inline-flex items-center gap-2 bg-red-500 text-white text-xs font-black px-3 py-1.5 uppercase tracking-widest mb-3">
                        <span class="w-1.5 h-1.5 bg-white rounded-full animate-pulse"></span>
                        ADMINISTRATOR
                    </div>
                    <h1 class="text-3xl md:text-4xl font-black text-white leading-tight">
                        Admin <span class="text-[#0ABF35]">Panel</span>
                    </h1>
                    <p class="text-gray-400 text-sm mt-1">Kelola seluruh konten dan kursus Rolepath.</p>
                </div>

                <!-- Quick Stats -->
                <div class="flex gap-3 pb-1">
                    <div class="bg-white/10 backdrop-blur px-5 py-3 text-center border border-white/10">
                        <p class="text-2xl font-black text-[#0ABF35]">{{ $courses->count() }}</p>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-gray-400 mt-0.5">Total Kursus</p>
                    </div>
                    <div class="bg-[#0ABF35]/10 backdrop-blur px-5 py-3 text-center border border-[#0ABF35]/30">
                        <p class="text-2xl font-black text-white">Aktif</p>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-[#0ABF35] mt-0.5">Status</p>
                    </div>
                </div>
            </div>

            <!-- Tab Nav -->
            <div class="flex gap-0 mt-2">
                <button onclick="switchTab('kursus')" id="tab-btn-kursus" class="tab-btn px-6 py-3 text-xs font-black uppercase tracking-widest text-white bg-[#0ABF35]">
                    Kelola Kursus
                </button>
                <button onclick="switchTab('pengguna')" id="tab-btn-pengguna" class="tab-btn px-6 py-3 text-xs font-bold uppercase tracking-widest text-gray-400 border-t-2 border-x-2 border-gray-700 hover:text-white hover:border-gray-500 transition-colors">
                    Pengguna
                </button>
                <button onclick="switchTab('sertifikat')" id="tab-btn-sertifikat" class="tab-btn px-6 py-3 text-xs font-bold uppercase tracking-widest text-gray-400 border-t-2 border-x-2 border-gray-700 hover:text-white hover:border-gray-500 transition-colors">
                    Sertifikat
                </button>
            </div>
        </div>
    </div>

    <!-- ═══════════════════════════════════════════
         MAIN CONTENT
    ════════════════════════════════════════════ -->
    <div class="max-w-7xl mx-auto px-4 py-10">

        <!-- Success Alert -->
        @if(session('success'))
            <div class="flex items-center gap-3 bg-white border border-[#0ABF35] shadow-sm px-5 py-4 mb-8">
                <div class="w-8 h-8 bg-[#0ABF35] flex items-center justify-center shrink-0 rounded">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <p class="text-sm font-bold text-gray-900">{{ session('success') }}</p>
            </div>
        @endif

        <!-- ─────────────────────────────────
             TAB: KELOLA KURSUS
        ───────────────────────────────── -->
        <div id="tab-content-kursus" class="tab-content">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

                <!-- FORM — ADD COURSE -->
                <div class="lg:col-span-1">
                    <div class="bg-white border border-gray-200 shadow-lg shadow-gray-200/50">
                        <div class="bg-gradient-to-r from-[#0ABF35] to-emerald-500 px-6 py-4 flex items-center gap-3">
                            <div class="w-7 h-7 bg-white/20 flex items-center justify-center rounded">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            </div>
                            <h2 class="text-sm font-black text-white uppercase tracking-widest">Tambah Kursus Baru</h2>
                        </div>

                        <form action="/admin/courses" method="POST" class="p-6 space-y-5">
                            @csrf

                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-1.5">Judul Kursus</label>
                                <input type="text" name="title" placeholder="Masukkan judul kursus" required class="w-full border border-gray-300 bg-gray-50 text-gray-900 px-4 py-3 text-sm placeholder-gray-400 focus:border-[#0ABF35] focus:ring-1 focus:ring-[#0ABF35] focus:outline-none transition-colors">
                                @error('title')<p class="mt-1 text-xs text-red-500 font-medium">{{ $message }}</p>@enderror
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-1.5">Deskripsi</label>
                                <textarea name="description" rows="4" placeholder="Deskripsi singkat kursus..." required class="w-full border border-gray-300 bg-gray-50 text-gray-900 px-4 py-3 text-sm placeholder-gray-400 focus:border-[#0ABF35] focus:ring-1 focus:ring-[#0ABF35] focus:outline-none transition-colors resize-none"></textarea>
                                @error('description')<p class="mt-1 text-xs text-red-500 font-medium">{{ $message }}</p>@enderror
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-1.5">URL Gambar</label>
                                <input type="url" name="image_url" placeholder="https://..." class="w-full border border-gray-300 bg-gray-50 text-gray-900 px-4 py-3 text-sm placeholder-gray-400 focus:border-[#0ABF35] focus:ring-1 focus:ring-[#0ABF35] focus:outline-none transition-colors">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-1.5">Kategori</label>
                                <select name="category" class="w-full border border-gray-300 bg-gray-50 text-gray-900 px-4 py-3 text-sm focus:border-[#0ABF35] focus:ring-1 focus:ring-[#0ABF35] focus:outline-none transition-colors">
                                    <option value="">Pilih Kategori</option>
                                    <option value="cybersecurity">Cybersecurity</option>
                                    <option value="networking">Networking</option>
                                    <option value="programming">Programming</option>
                                    <option value="ai">AI & Data Science</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2">Tipe Akses</label>
                                <div class="flex gap-3">
                                    <label class="flex items-center gap-2 cursor-pointer group">
                                        <input type="radio" name="access" value="free" class="accent-[#0ABF35]" checked>
                                        <span class="text-xs font-bold text-[#0ABF35] border border-[#0ABF35] bg-[#0ABF35]/5 px-3 py-1 uppercase tracking-wide group-has-[:checked]:bg-[#0ABF35] group-has-[:checked]:text-white transition-colors cursor-pointer">GRATIS</span>
                                    </label>
                                    <label class="flex items-center gap-2 cursor-pointer group">
                                        <input type="radio" name="access" value="premium" class="accent-yellow-500">
                                        <span class="text-xs font-bold text-yellow-600 border border-yellow-500 bg-yellow-50 px-3 py-1 uppercase tracking-wide group-has-[:checked]:bg-yellow-500 group-has-[:checked]:text-white transition-colors cursor-pointer">PREMIUM</span>
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="w-full bg-[#0ABF35] text-white font-bold py-3.5 text-xs uppercase tracking-widest hover:bg-emerald-600 transition-colors duration-200 mt-2 shadow-sm">+ SIMPAN KURSUS</button>
                        </form>
                    </div>
                </div>

                <!-- COURSE LIST -->
                <div class="lg:col-span-2">

                    <div class="flex items-center justify-between mb-5">
                        <div class="flex items-center gap-3">
                            <span class="w-1 h-6 bg-[#0ABF35] inline-block"></span>
                            <h2 class="text-lg font-black text-black uppercase tracking-wide">Daftar Kursus</h2>
                        </div>
                    </div>

                    <div class="hidden md:grid grid-cols-12 gap-4 bg-gray-800 text-white px-5 py-3 rounded-t-lg text-[10px] font-bold uppercase tracking-widest">
                        <div class="col-span-5">Kursus</div>
                        <div class="col-span-3">Kategori</div>
                        <div class="col-span-2">Akses</div>
                        <div class="col-span-2 text-right">Aksi</div>
                    </div>

                    <div class="space-y-0 border-x border-b border-gray-200 rounded-b-lg overflow-hidden">
                        @forelse($courses as $course)
                            <div class="grid grid-cols-1 md:grid-cols-12 gap-4 bg-white px-5 py-4 border-b border-gray-100 last:border-b-0 hover:bg-gray-50 transition-colors group items-center">
                                <div class="md:col-span-5 flex items-center gap-3">
                                    <div class="w-10 h-10 bg-gray-100 flex items-center justify-center shrink-0 group-hover:bg-[#0ABF35]/10 transition-colors duration-200">
                                        <svg class="w-4 h-4 text-gray-400 group-hover:text-[#0ABF35] transition-colors duration-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                                    </div>
                                    <div class="min-w-0">
                                        <p class="font-bold text-gray-900 text-sm leading-snug">{{ $course->title }}</p>
                                        <p class="text-xs text-gray-400 line-clamp-1 mt-0.5">{{ $course->description }}</p>
                                    </div>
                                </div>
                                <div class="md:col-span-3">
                                    <span class="text-xs font-medium text-gray-500 bg-gray-100 px-2.5 py-1">{{ $course->category ?? 'Umum' }}</span>
                                </div>
                                <div class="md:col-span-2">
                                    <span class="text-[10px] font-bold uppercase tracking-widest px-2.5 py-1 {{ ($course->access ?? 'free') === 'premium' ? 'bg-yellow-100 text-yellow-700' : 'bg-[#0ABF35]/10 text-[#0ABF35]' }}">{{ ($course->access ?? 'free') === 'premium' ? 'PREMIUM' : 'GRATIS' }}</span>
                                </div>
                                <div class="md:col-span-2 flex items-center justify-end gap-2">
                                    <a href="/admin/courses/{{ $course->id }}/lessons" class="bg-[#0ABF35] text-white px-4 py-2 rounded text-sm font-bold hover:bg-emerald-600 transition-colors">Kelola Materi</a>
                                    <form action="/admin/courses/{{ $course->id }}" method="POST" onsubmit="return confirm('Hapus kursus ini?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="w-8 h-8 flex items-center justify-center border border-gray-200 text-gray-400 hover:border-red-400 hover:text-red-500 hover:bg-red-50 transition-colors rounded">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14H6L5 6"/><path d="M10 11v6M14 11v6"/><path d="M9 6V4h6v2"/></svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <div class="bg-white text-center py-16 px-4">
                                <div class="w-16 h-16 border-2 border-dashed border-gray-200 flex items-center justify-center mx-auto mb-4 rounded-lg">
                                    <svg class="w-7 h-7 text-gray-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                                </div>
                                <p class="text-sm font-bold text-gray-400 uppercase tracking-wider">Belum ada kursus</p>
                                <p class="text-xs text-gray-300 mt-1">Tambahkan kursus pertama melalui form di sebelah kiri.</p>
                            </div>
                        @endforelse
                    </div>

                    @if($courses->count() > 0)
                        <div class="mt-6 flex items-center justify-between">
                            <p class="text-xs text-gray-400">Menampilkan <strong class="text-gray-900">{{ $courses->count() }}</strong> kursus</p>
                        </div>
                    @endif

                </div>
            </div>
        </div>

        <!-- ─────────────────────────────────
             TAB: PENGGUNA
        ───────────────────────────────── -->
        <div id="tab-content-pengguna" class="tab-content hidden">

            <div class="flex items-center justify-between mb-5">
                <div class="flex items-center gap-3">
                    <span class="w-1 h-6 bg-[#0ABF35] inline-block"></span>
                    <h2 class="text-lg font-black text-black uppercase tracking-wide">Daftar Pengguna</h2>
                </div>
                <p class="text-xs text-gray-400">Total <strong class="text-gray-900">{{ $users->count() }}</strong> pengguna</p>
            </div>

            <div class="hidden md:grid grid-cols-12 gap-4 bg-gray-800 text-white px-5 py-3 rounded-t-lg text-[10px] font-bold uppercase tracking-widest">
                <div class="col-span-4">Nama</div>
                <div class="col-span-4">Email</div>
                <div class="col-span-2">Role</div>
                <div class="col-span-2 text-right">Aksi</div>
            </div>

            <div class="space-y-0 border-x border-b border-gray-200 rounded-b-lg overflow-hidden">
                @forelse($users as $user)
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 bg-white px-5 py-4 border-b border-gray-100 last:border-b-0 hover:bg-gray-50 transition-colors group items-center">
                        <div class="md:col-span-4 flex items-center gap-3">
                            <div class="w-9 h-9 bg-gray-200 flex items-center justify-center shrink-0 rounded-full">
                                <span class="text-xs font-black text-gray-500 uppercase">{{ substr($user->name, 0, 2) }}</span>
                            </div>
                            <p class="font-bold text-gray-900 text-sm">{{ $user->name }}</p>
                        </div>
                        <div class="md:col-span-4">
                            <p class="text-sm text-gray-500">{{ $user->email }}</p>
                        </div>
                        <div class="md:col-span-2">
                            @php
                                $roleColors = [
                                    'admin' => 'bg-red-100 text-red-700',
                                    'premium' => 'bg-yellow-100 text-yellow-700',
                                    'recruiter' => 'bg-blue-100 text-blue-700',
                                    'student' => 'bg-gray-100 text-gray-600',
                                ];
                                $roleColor = $roleColors[$user->role] ?? 'bg-gray-100 text-gray-600';
                            @endphp
                            <span class="text-[10px] font-bold uppercase tracking-widest px-2.5 py-1 {{ $roleColor }}">
                                {{ $user->role }}
                            </span>
                        </div>
                        <div class="md:col-span-2 flex items-center justify-end gap-2">
                            @if($user->role !== 'admin')
                                @if($user->role === 'premium')
                                    <form action="/admin/users/{{ $user->id }}/role" method="POST">
                                        @csrf @method('PUT')
                                        <input type="hidden" name="role" value="student">
                                        <button type="submit" class="text-[10px] font-bold uppercase tracking-widest px-3 py-2 border border-gray-300 text-gray-500 hover:border-gray-400 hover:text-gray-700 transition-colors">
                                            HAPUS PREMIUM
                                        </button>
                                    </form>
                                @else
                                    <form action="/admin/users/{{ $user->id }}/role" method="POST">
                                        @csrf @method('PUT')
                                        <input type="hidden" name="role" value="premium">
                                        <button type="submit" class="text-[10px] font-bold uppercase tracking-widest px-3 py-2 bg-yellow-500 text-white hover:bg-yellow-600 transition-colors">
                                            + PREMIUM
                                        </button>
                                    </form>
                                @endif
                            @else
                                <span class="text-[10px] text-gray-400 italic">—</span>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="bg-white text-center py-16 px-4">
                        <p class="text-sm font-bold text-gray-400 uppercase tracking-wider">Belum ada pengguna</p>
                    </div>
                @endforelse
            </div>
        </div>

        <!-- ─────────────────────────────────
             TAB: SERTIFIKAT (placeholder)
        ───────────────────────────────── -->
        <div id="tab-content-sertifikat" class="tab-content hidden">
            <div class="bg-white text-center py-16 px-4 border border-gray-200">
                <p class="text-sm font-bold text-gray-400 uppercase tracking-wider">Fitur sertifikat akan sehadir</p>
            </div>
        </div>
    </div>
</div>

<!-- Tab Switching -->
<script>
function switchTab(tab) {
    document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
    document.getElementById('tab-content-' + tab).classList.remove('hidden');

    document.querySelectorAll('.tab-btn').forEach(el => {
        el.classList.remove('bg-[#0ABF35]', 'text-white', 'font-black');
        el.classList.add('font-bold', 'text-gray-400', 'border-t-2', 'border-x-2', 'border-gray-700');
    });

    const btn = document.getElementById('tab-btn-' + tab);
    btn.classList.remove('font-bold', 'text-gray-400', 'border-t-2', 'border-x-2', 'border-gray-700');
    btn.classList.add('bg-[#0ABF35]', 'text-white', 'font-black');
}
</script>

@endsection