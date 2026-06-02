@extends('layouts.app')

@section('title', $lesson->title . ' - ' . $course->title)

@section('content')

<div class="flex min-h-screen bg-gray-50 pt-16">

    <!-- LEFT SIDEBAR - CURRICULUM NAV -->
    <aside id="sidebar" class="fixed top-16 left-0 h-[calc(100vh-4rem)] w-72 bg-gray-900 border-r border-gray-200 overflow-y-auto z-40 -translate-x-full transition-transform duration-300">

        <!-- Header -->
        <div class="flex items-center justify-between px-5 py-5 border-b border-gray-200">
            <div class="min-w-0 flex-1">
                <a href="{{ route('courses.show', $course) }}" class="flex items-center gap-2 text-xs text-gray-400 uppercase tracking-widest hover:text-[#0ABF35] transition-colors mb-3">
                    <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
                    Kembali ke Kursus
                </a>
                <h2 class="text-sm font-bold text-white leading-snug truncate">{{ $course->title }}</h2>
            </div>
            <button id="sidebar-close" class="shrink-0 ml-3 text-gray-400 hover:text-white transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12"/></svg>
            </button>
        </div>

        <!-- Progress -->
        <div class="px-5 py-4 border-b border-gray-200">
            <div class="flex justify-between text-[10px] text-gray-400 mb-1">
                <span class="uppercase tracking-wider">Progress</span>
                <span class="font-bold text-[#0ABF35]">{{ $progress }}%</span>
            </div>
            <div class="w-full h-1.5 bg-gray-700">
                <div class="h-full bg-[#0ABF35]" style="width:{{ $progress }}%"></div>
            </div>
        </div>

        <!-- Curriculum list -->
        <nav class="py-3">
            @foreach($groupedLessons as $sectionTitle => $sectionLessons)
                @php
                    $hasActive = $sectionLessons->contains('id', $lesson->id);
                @endphp
                <div class="section-group">
                    <button class="section-toggle flex items-center justify-between w-full px-5 py-3 text-left transition-colors hover:bg-gray-800 {{ $hasActive ? 'bg-gray-800' : '' }}">
                        <span class="text-[10px] font-bold {{ $hasActive ? 'text-[#0ABF35]' : 'text-gray-500' }} uppercase tracking-wider flex items-center gap-1.5">
                            <svg class="w-3.5 h-3.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                            {{ $sectionTitle }}
                        </span>
                        <svg class="chevron w-3.5 h-3.5 text-gray-500 transition-transform duration-200 {{ $hasActive ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
                    </button>

                    <div class="section-lessons overflow-hidden transition-all duration-200 {{ $hasActive ? '' : 'hidden' }}">
                        @foreach($sectionLessons as $l)
                            @php
                                $isActive = $l->id === $lesson->id;
                                $isCompleted = in_array($l->id, $completedIds);
                            @endphp
                            <a href="{{ route('courses.lesson', [$course, $l]) }}"
                               class="flex items-center gap-3 px-5 py-3 text-sm transition-colors group
                                      {{ $isActive ? 'bg-gray-800 text-white border-l-2 border-[#0ABF35]' : 'text-gray-400 hover:bg-gray-800 hover:text-gray-300' }}">
                                @if($isCompleted)
                                    <svg class="w-5 h-5 text-[#0ABF35] shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 16l-4-4m0 0l-2-2m2 2l2-2m4 4l6-6"/><path d="M20 12v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4"/></svg>
                                @else
                                    <div class="w-5 h-5 {{ $isActive ? 'border-2 border-[#0ABF35] bg-gray-900' : 'border-2 border-gray-600' }} flex items-center justify-center shrink-0">
                                        @if($isActive)
                                            <div class="w-1.5 h-1.5 bg-[#0ABF35] rounded-full"></div>
                                        @endif
                                    </div>
                                @endif
                                <span class="leading-snug {{ $isActive ? 'font-semibold text-white' : ($isCompleted ? 'text-gray-300' : '') }} truncate">{{ $l->title }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 min-w-0">

        <!-- Top bar -->
        <div class="sticky top-16 z-30 bg-white border-b border-gray-200 px-6 py-3 flex items-center justify-between gap-4">
            <button id="sidebar-toggle" class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-gray-700 border-2 border-gray-300 px-3 py-1.5 hover:bg-gray-100 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                Kurikulum
            </button>

            <div class="flex items-center gap-2 text-xs text-gray-400 uppercase tracking-widest hidden md:flex">
                <span>{{ $lesson->section_title }}</span>
                <span>›</span>
                <span class="font-medium text-gray-700">{{ $lesson->title }}</span>
            </div>

            @php
                $allLessonsFlat = $course->lessons()->orderBy('order_number')->get();
                $currentIndex = $allLessonsFlat->search(fn($l) => $l->id === $lesson->id);
                $prevLesson = $currentIndex > 0 ? $allLessonsFlat[$currentIndex - 1] : null;
                $nextLesson = $currentIndex < $allLessonsFlat->count() - 1 ? $allLessonsFlat[$currentIndex + 1] : null;
            @endphp
            <div class="flex items-center gap-2 ml-auto">
                @if($prevLesson)
                    <a href="{{ route('courses.lesson', [$course, $prevLesson]) }}" class="flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-gray-500 border-2 border-gray-200 px-3 py-1.5 hover:border-gray-400 hover:text-gray-700 transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
                        Prev
                    </a>
                @endif
                @if($nextLesson)
                    <a href="{{ route('courses.lesson', [$course, $nextLesson]) }}" class="flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-gray-800 bg-[#0ABF35] border-2 border-[#0ABF35] px-3 py-1.5 hover:bg-gray-700 hover:border-gray-700 hover:text-white transition-colors">
                        Next
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                    </a>
                @endif
            </div>
        </div>

        <!-- Lesson Content -->
        <article class="max-w-3xl mx-auto px-6 py-12">

            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight mb-6">
                {{ $lesson->title }}
            </h1>

            @if($lesson->codepen_url)
                @php $cpEmbed = str_replace('/pen/', '/embed/', $lesson->codepen_url); @endphp
                <div class="mb-8 not-prose border border-gray-200 bg-gray-100">
                    <iframe class="w-full" height="400" src="{{ $cpEmbed }}" frameborder="no" loading="lazy" allowtransparency="true" allowfullscreen="true"></iframe>
                </div>
            @endif

            <!-- Lesson body -->
            <div class="prose prose-sm md:prose max-w-none text-gray-600 leading-relaxed space-y-6">
                @php $blocks = json_decode($lesson->content, true) ?? []; @endphp
                @foreach($blocks as $block)
                    @if($block['type'] === 'text')
                        @php $isHtml = $block['value'] !== strip_tags($block['value']); @endphp
                        @if($isHtml)
                            <div class="leading-relaxed">{!! $block['value'] !!}</div>
                        @else
                            <p>{!! nl2br(e($block['value'])) !!}</p>
                        @endif
                    @elseif($block['type'] === 'image')
                        <img src="{{ $block['value'] }}" alt="" class="not-prose w-full border border-gray-200">
                    @elseif($block['type'] === 'youtube')
                        @php
                            $ytId = '';
                            if (preg_match('/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/))([a-zA-Z0-9_-]{11})/', $block['value'], $m)) {
                                $ytId = $m[1];
                            }
                            $ytEmbed = $ytId ? "https://www.youtube.com/embed/$ytId" : $block['value'];
                        @endphp
                        <div class="not-prose aspect-video border border-gray-200 bg-gray-100">
                            <iframe class="w-full h-full" src="{{ $ytEmbed }}" frameborder="0" allowfullscreen loading="lazy"></iframe>
                        </div>
                    @elseif($block['type'] === 'codepen')
                        @php $cpEmbed = str_replace('/pen/', '/embed/', $block['value']); @endphp
                        <div class="not-prose border border-gray-200 bg-gray-100">
                            <iframe class="w-full" height="400" src="{{ $cpEmbed }}" frameborder="no" loading="lazy" allowtransparency="true" allowfullscreen="true"></iframe>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- MARK COMPLETE & NAVIGATION -->
            <div class="mt-14 pt-8 border-t border-gray-200">

                <!-- Complete form -->
                <form id="complete-form" action="{{ route('courses.lesson.complete', [$course, $lesson]) }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full py-4 bg-[#0ABF35] text-gray-800 font-bold text-sm uppercase tracking-widest border-2 border-[#0ABF35] hover:bg-gray-800 hover:border-gray-800 hover:text-white transition-colors duration-200 mb-6">
                        ✓ TANDAI SELESAI & LANJUTKAN
                    </button>
                </form>

                @php
                    $allLessonsFlat = $course->lessons()->orderBy('order_number')->get();
                    $currentIndex = $allLessonsFlat->search(fn($l) => $l->id === $lesson->id);
                    $prevLesson = $currentIndex > 0 ? $allLessonsFlat[$currentIndex - 1] : null;
                    $nextLesson = $currentIndex < $allLessonsFlat->count() - 1 ? $allLessonsFlat[$currentIndex + 1] : null;
                @endphp
                <div class="grid grid-cols-2 gap-4">
                    @if($prevLesson)
                        <a href="{{ route('courses.lesson', [$course, $prevLesson]) }}" class="group flex flex-col gap-1 border border-gray-200 px-5 py-4 hover:border-gray-400 transition-colors duration-200">
                            <div class="flex items-center gap-1.5 text-[10px] font-bold uppercase tracking-wider text-gray-400 group-hover:text-gray-600 transition-colors">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
                                Pelajaran Sebelumnya
                            </div>
                            <p class="text-sm font-semibold text-gray-800 leading-snug">{{ $prevLesson->title }}</p>
                        </a>
                    @else
                        <div></div>
                    @endif
                    @if($nextLesson)
                        <a href="{{ route('courses.lesson', [$course, $nextLesson]) }}" class="group flex flex-col gap-1 border border-gray-300 bg-gray-50 px-5 py-4 hover:bg-gray-100 hover:border-gray-400 transition-colors duration-200 text-right">
                            <div class="flex items-center justify-end gap-1.5 text-[10px] font-bold uppercase tracking-wider text-gray-400 group-hover:text-gray-600 transition-colors">
                                Pelajaran Berikutnya
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                            </div>
                            <p class="text-sm font-semibold text-gray-800 group-hover:text-gray-900 leading-snug transition-colors">{{ $nextLesson->title }}</p>
                        </a>
                    @endif
                </div>

            </div>

        </article>
    </main>

</div>

<!-- Sidebar overlay -->
<div id="sidebar-overlay" class="fixed inset-0 bg-gray-900/50 z-30 hidden"></div>

<script>
    (function() {
        const sidebar = document.getElementById('sidebar');
        const toggle = document.getElementById('sidebar-toggle');
        const close = document.getElementById('sidebar-close');
        const overlay = document.getElementById('sidebar-overlay');
        const completeForm = document.getElementById('complete-form');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        toggle?.addEventListener('click', openSidebar);
        close?.addEventListener('click', closeSidebar);
        overlay?.addEventListener('click', closeSidebar);

        // Section dropdown toggles
        document.querySelectorAll('.section-toggle').forEach(btn => {
            btn.addEventListener('click', function() {
                const group = this.closest('.section-group');
                const lessons = group.querySelector('.section-lessons');
                const chevron = this.querySelector('.chevron');

                lessons.classList.toggle('hidden');
                chevron.classList.toggle('rotate-180');
                this.classList.toggle('bg-gray-800');
            });
        });

        // Complete form: submit and redirect to next lesson
        @if($nextLesson)
        completeForm?.addEventListener('submit', function(e) {
            e.preventDefault();
            fetch(this.action, { method: 'POST', body: new FormData(this) })
                .then(() => { window.location.href = '{{ route('courses.lesson', [$course, $nextLesson]) }}'; })
                .catch(() => { this.submit(); });
        });
        @endif
    })();
</script>

@endsection
