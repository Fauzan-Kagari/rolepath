@extends('layouts.app')

@section('title', $lesson->title . ' - ' . $course->title)

@section('content')

<div class="flex min-h-screen bg-white pt-16">

    <!-- ═══════════════════════════════════════════
         LEFT SIDEBAR — CURRICULUM NAV
    ════════════════════════════════════════════ -->
    <aside id="sidebar" class="fixed top-16 left-0 h-[calc(100vh-4rem)] w-72 bg-black border-r-2 border-gray-800 overflow-y-auto z-40 -translate-x-full lg:translate-x-0 transition-transform duration-300">

        <!-- Course title -->
        <div class="px-5 py-5 border-b-2 border-gray-800">
            <a href="{{ route('courses.show', $course) }}" class="flex items-center gap-2 text-xs text-gray-500 uppercase tracking-widest hover:text-[#0ABF35] transition-colors mb-3">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
                Kembali ke Kursus
            </a>
            <h2 class="text-sm font-bold text-white leading-snug">{{ $course->title }}</h2>

            <!-- Progress -->
            <div class="mt-3">
                <div class="flex justify-between text-[10px] text-gray-500 mb-1">
                    <span class="uppercase tracking-wider">Progress</span>
                    <span class="font-bold text-[#0ABF35]">7%</span>
                </div>
                <div class="w-full h-1.5 bg-gray-800 border border-gray-700">
                    <div class="h-full bg-[#0ABF35]" style="width:7%"></div>
                </div>
            </div>
        </div>

        <!-- Curriculum list -->
        <nav class="py-3">
            @foreach($groupedLessons as $sectionTitle => $sectionLessons)
                <div class="px-5 pt-4 pb-2">
                    <p class="text-[10px] font-black {{ $sectionLessons->contains('id', $lesson->id) ? 'text-[#0ABF35]' : 'text-gray-500' }} uppercase tracking-[0.15em]">
                        {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }} · {{ $sectionTitle }}
                    </p>
                </div>

                @foreach($sectionLessons as $l)
                    @php $isActive = $l->id === $lesson->id; @endphp
                    <a href="{{ route('courses.lesson', [$course, $l]) }}"
                       class="flex items-center gap-3 px-5 py-3 text-sm transition-colors group
                              {{ $isActive ? 'bg-gray-800 text-white border-l-2 border-[#0ABF35]' : 'text-gray-600 hover:bg-gray-800 hover:text-gray-400' }}">
                        <div class="w-5 h-5 {{ $isActive ? 'border-2 border-[#0ABF35] bg-black' : 'border-2 border-gray-700' }} flex items-center justify-center shrink-0">
                            @if($isActive)
                                <div class="w-1.5 h-1.5 bg-[#0ABF35] rounded-full"></div>
                            @endif
                        </div>
                        <span class="leading-snug {{ $isActive ? 'font-semibold text-white' : '' }}">{{ $l->title }}</span>
                    </a>
                @endforeach
            @endforeach
        </nav>
    </aside>

    <!-- ═══════════════════════════════════════════
         MAIN CONTENT
    ════════════════════════════════════════════ -->
    <main class="flex-1 lg:ml-72 min-w-0">

        <!-- Top bar -->
        <div class="sticky top-16 z-30 bg-white border-b-2 border-gray-200 px-6 py-3 flex items-center justify-between gap-4">
            <!-- Mobile sidebar toggle -->
            <button id="sidebar-toggle" class="lg:hidden flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-black border-2 border-black px-3 py-1.5 hover:bg-black hover:text-white transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                Kurikulum
            </button>

            <div class="flex items-center gap-2 text-xs text-gray-400 uppercase tracking-widest hidden md:flex">
                <span>{{ $lesson->section_title }}</span>
                <span>›</span>
                <span class="font-bold text-black">{{ $lesson->title }}</span>
            </div>

            @php
                $allLessonsFlat = $course->lessons()->orderBy('order_number')->get();
                $currentIndex = $allLessonsFlat->search(fn($l) => $l->id === $lesson->id);
                $prevLesson = $currentIndex > 0 ? $allLessonsFlat[$currentIndex - 1] : null;
                $nextLesson = $currentIndex < $allLessonsFlat->count() - 1 ? $allLessonsFlat[$currentIndex + 1] : null;
            @endphp
            <!-- Prev / Next nav -->
            <div class="flex items-center gap-2 ml-auto">
                @if($prevLesson)
                    <a href="{{ route('courses.lesson', [$course, $prevLesson]) }}" class="flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-gray-500 border-2 border-gray-200 px-3 py-1.5 hover:border-black hover:text-black transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
                        Prev
                    </a>
                @endif
                @if($nextLesson)
                    <a href="{{ route('courses.lesson', [$course, $nextLesson]) }}" class="flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-black bg-[#0ABF35] border-2 border-[#0ABF35] px-3 py-1.5 hover:bg-black hover:text-[#0ABF35] transition-colors">
                        Next
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                @endif
            </div>
        </div>

        <!-- Lesson Content -->
        <article class="max-w-3xl mx-auto px-6 py-12">

            <h1 class="text-3xl md:text-4xl font-extrabold text-black leading-tight mb-6">
                {{ $lesson->title }}
            </h1>

            @if($lesson->codepen_url)
                <div class="mb-8 not-prose">
                    <iframe height="400" style="width: 100%;" scrolling="no" src="{{ $lesson->codepen_url }}" frameborder="no" loading="lazy" allowtransparency="true" allowfullscreen="true"></iframe>
                </div>
            @endif

            <!-- Lesson body -->
            <div class="prose prose-sm md:prose max-w-none text-gray-700 leading-relaxed space-y-6">
                @php $blocks = json_decode($lesson->content, true) ?? []; @endphp
                @foreach($blocks as $block)
                    @if($block['type'] === 'text')
                        <p>{{ $block['value'] }}</p>
                    @elseif($block['type'] === 'image')
                        <img src="{{ $block['value'] }}" alt="" class="not-prose w-full border-2 border-gray-200">
                    @elseif($block['type'] === 'youtube')
                        <div class="not-prose aspect-video border-2 border-gray-200">
                            <iframe class="w-full h-full" src="{{ $block['value'] }}" frameborder="0" allowfullscreen></iframe>
                        </div>
                    @elseif($block['type'] === 'codepen')
                        <div class="not-prose">
                            <iframe height="400" style="width: 100%;" scrolling="no" src="{{ $block['value'] }}" frameborder="no" loading="lazy" allowtransparency="true" allowfullscreen="true"></iframe>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- ─────────────────────────────────────
                 MARK COMPLETE & NAVIGATION
            ───────────────────────────────────── -->
            <div class="mt-14 pt-8 border-t-2 border-gray-200">

                <!-- Complete button -->
                <button class="w-full py-4 bg-[#0ABF35] text-black font-bold text-sm uppercase tracking-widest border-2 border-black hover:bg-black hover:text-[#0ABF35] transition-colors duration-200 mb-6">
                    ✓ TANDAI SELESAI & LANJUTKAN
                </button>

                @php
                    $allLessonsFlat = $course->lessons()->orderBy('order_number')->get();
                    $currentIndex = $allLessonsFlat->search(fn($l) => $l->id === $lesson->id);
                    $prevLesson = $currentIndex > 0 ? $allLessonsFlat[$currentIndex - 1] : null;
                    $nextLesson = $currentIndex < $allLessonsFlat->count() - 1 ? $allLessonsFlat[$currentIndex + 1] : null;
                @endphp
                <div class="grid grid-cols-2 gap-4">
                    @if($prevLesson)
                        <a href="{{ route('courses.lesson', [$course, $prevLesson]) }}" class="group flex flex-col gap-1 border-2 border-gray-200 px-5 py-4 hover:border-black transition-colors duration-200">
                            <div class="flex items-center gap-1.5 text-[10px] font-bold uppercase tracking-wider text-gray-400 group-hover:text-black transition-colors">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
                                Pelajaran Sebelumnya
                            </div>
                            <p class="text-sm font-bold text-black leading-snug">{{ $prevLesson->title }}</p>
                        </a>
                    @else
                        <div></div>
                    @endif
                    @if($nextLesson)
                        <a href="{{ route('courses.lesson', [$course, $nextLesson]) }}" class="group flex flex-col gap-1 border-2 border-black bg-black px-5 py-4 hover:bg-[#0ABF35] hover:border-[#0ABF35] transition-colors duration-200 text-right">
                            <div class="flex items-center justify-end gap-1.5 text-[10px] font-bold uppercase tracking-wider text-gray-400 group-hover:text-black transition-colors">
                                Pelajaran Berikutnya
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                            </div>
                            <p class="text-sm font-bold text-white group-hover:text-black leading-snug transition-colors">{{ $nextLesson->title }}</p>
                        </a>
                    @endif
                </div>

            </div>

        </article>
    </main>

</div>

<!-- Sidebar overlay (mobile) -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/60 z-30 hidden lg:hidden"></div>

<script>
    const sidebar = document.getElementById('sidebar');
    const toggle = document.getElementById('sidebar-toggle');
    const overlay = document.getElementById('sidebar-overlay');

    toggle?.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
    });
    overlay?.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    });
</script>

@endsection
