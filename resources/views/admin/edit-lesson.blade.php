@extends('layouts.app')
@section('title', 'Edit Materi - Rolepath')

@section('content')
<link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
<div class="min-h-screen bg-gray-50">

    <!-- Top Header Bar -->
    <div class="bg-gradient-to-r from-gray-900 to-gray-800 border-b-2 border-[#0ABF35] pt-20">
        <div class="max-w-4xl mx-auto px-4 py-6">
            <a href="/admin/courses/{{ $lesson->course_id }}/lessons" class="inline-flex items-center gap-2 text-xs font-bold text-gray-400 uppercase tracking-widest hover:text-[#0ABF35] transition-colors mb-4">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
                BATAL & KEMBALI
            </a>
            <div class="flex items-end justify-between gap-4">
                <div>
                    <div class="inline-block bg-red-500 text-white text-xs font-black px-3 py-1.5 uppercase tracking-widest mb-3">
                        ADMINISTRATOR
                    </div>
                    <h1 class="text-3xl md:text-4xl font-black text-white leading-tight">
                        Edit Materi <span class="text-[#0ABF35]">Block Builder</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="px-4 py-10">
        <div class="max-w-4xl mx-auto">

            <div class="bg-white border border-gray-200 shadow-lg shadow-gray-200/50">

                <!-- Card Header -->
                <div class="bg-gradient-to-r from-[#0ABF35] to-emerald-500 px-6 py-4 flex items-center gap-3">
                    <div class="w-7 h-7 bg-white/20 flex items-center justify-center rounded">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                    </div>
                    <h2 class="text-sm font-black text-white uppercase tracking-widest">Susun Konten Materi</h2>
                </div>

                <form id="lessonForm" action="/admin/lessons/{{ $lesson->id }}" method="POST" class="p-6 md:p-8">
                    @csrf
                    @method('PUT')

                    <!-- Section Title & Lesson Title -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-8">
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-1.5">
                                Nama Widget / Bab
                            </label>
                            <input
                                type="text"
                                name="section_title"
                                value="{{ $lesson->section_title }}"
                                required
                                class="w-full border border-gray-300 bg-gray-50 text-gray-900 px-4 py-3 text-sm focus:border-[#0ABF35] focus:ring-1 focus:ring-[#0ABF35] focus:outline-none transition-colors"
                            >
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-1.5">
                                Judul Materi
                            </label>
                            <input
                                type="text"
                                name="title"
                                value="{{ $lesson->title }}"
                                required
                                class="w-full border border-gray-300 bg-gray-50 text-gray-900 px-4 py-3 text-sm focus:border-[#0ABF35] focus:ring-1 focus:ring-[#0ABF35] focus:outline-none transition-colors"
                            >
                        </div>
                    </div>

                    <!-- Hidden content input -->
                    <input type="hidden" name="content" id="content_input">

                    <!-- Block Editor Area -->
                    <div class="mb-6">
                        <div class="flex items-center gap-3 mb-4 pb-3 border-b border-gray-200">
                            <span class="w-1 h-5 bg-[#0ABF35] inline-block"></span>
                            <label class="text-xs font-bold text-gray-700 uppercase tracking-widest">Konten Materi</label>
                            <span class="text-xs text-gray-400 font-medium">Disusun berurutan dari atas ke bawah</span>
                        </div>

                        <!-- Blocks render here -->
                        <div id="blocks-container" class="space-y-4 mb-6"></div>

                        <!-- Add Block Buttons -->
                        <div class="flex flex-wrap gap-3 p-5 bg-gray-50 border border-dashed border-gray-300">
                            <span class="text-xs font-bold text-gray-700 uppercase tracking-widest w-full mb-1">TAMBAH BLOK BARU:</span>
                            <button type="button" onclick="addBlock('text')"
                                class="flex items-center gap-2 bg-white border border-gray-300 text-gray-600 px-4 py-2 text-xs font-bold uppercase tracking-wide hover:border-[#0ABF35] hover:text-[#0ABF35] transition-all duration-200">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
                                Teks Panjang
                            </button>
                            <button type="button" onclick="addBlock('image')"
                                class="flex items-center gap-2 bg-white border border-gray-300 text-gray-600 px-4 py-2 text-xs font-bold uppercase tracking-wide hover:border-[#0ABF35] hover:text-[#0ABF35] transition-all duration-200">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                                Gambar (URL)
                            </button>
                            <button type="button" onclick="addBlock('youtube')"
                                class="flex items-center gap-2 bg-white border border-gray-300 text-gray-600 px-4 py-2 text-xs font-bold uppercase tracking-wide hover:border-red-400 hover:text-red-500 transition-all duration-200">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.5 6.19a3.02 3.02 0 0 0-2.12-2.14C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.38.55A3.02 3.02 0 0 0 .5 6.19 31.6 31.6 0 0 0 0 12a31.6 31.6 0 0 0 .5 5.81 3.02 3.02 0 0 0 2.12 2.14c1.88.55 9.38.55 9.38.55s7.5 0 9.38-.55a3.02 3.02 0 0 0 2.12-2.14A31.6 31.6 0 0 0 24 12a31.6 31.6 0 0 0-.5-5.81zM9.55 15.57V8.43L15.82 12l-6.27 3.57z"/></svg>
                                Video YouTube
                            </button>
                            <button type="button" onclick="addBlock('codepen')"
                                class="flex items-center gap-2 bg-white border border-gray-300 text-gray-600 px-4 py-2 text-xs font-bold uppercase tracking-wide hover:border-yellow-500 hover:text-yellow-600 transition-all duration-200">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                                CodePen Embed
                            </button>
                        </div>
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="w-full bg-[#0ABF35] text-white font-bold py-4 text-sm uppercase tracking-widest hover:bg-emerald-600 transition-colors duration-200 mt-4 shadow-sm">
                        SIMPAN PERUBAHAN MATERI
                    </button>

                </form>
            </div>

        </div>
    </section>
</div>

<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
<script>
    let rawContent = {!! json_encode($lesson->content ?? '') !!};
    let blocksData = [];

    try {
        blocksData = JSON.parse(rawContent);
        if(!Array.isArray(blocksData)) throw "Bukan array";
    } catch(e) {
        if(rawContent.trim() !== "") {
            blocksData = [ { type: 'text', value: rawContent } ];
        }
    }

    const container = document.getElementById('blocks-container');

    function createBlockHTML(type, value = '') {
        let blockUi = document.createElement('div');
        blockUi.className = "block-item bg-white border border-gray-200 relative group hover:border-gray-300 transition-all duration-200";
        blockUi.setAttribute('data-type', type);

        let deleteBtn = `<button type="button" onclick="this.parentElement.remove()" class="absolute top-3 right-3 w-7 h-7 flex items-center justify-center border border-gray-200 text-gray-400 hover:border-red-400 hover:text-red-500 hover:bg-red-50 transition-all font-bold text-xs">X</button>`;

        let topBar = '';
        let inputField = '';

        if(type === 'text') {
            topBar = `<div class="flex items-center gap-2 px-4 py-2.5 border-b border-gray-100 bg-gray-50">
                <span class="text-xs font-bold uppercase tracking-widest text-gray-700">Teks dengan Editor</span>
                <span class="text-xs text-gray-400 ml-auto">Bold, Heading, List tersedia</span>
            </div>`;
            inputField = `<div class="p-4">
                <div class="block-value quill-editor" style="min-height: 180px;">${value}</div>
            </div>`;
        }
        else if(type === 'image') {
            topBar = `<div class="flex items-center gap-2 px-4 py-2.5 border-b border-gray-100 bg-gray-50">
                <span class="text-xs font-bold uppercase tracking-widest text-gray-700">Blok Gambar</span>
            </div>`;
            inputField = `<div class="p-4"><input type="url" class="block-value w-full border border-gray-200 bg-white text-gray-900 px-4 py-3 text-sm focus:border-[#0ABF35] focus:outline-none transition-colors" placeholder="Masukkan Link URL Gambar (contoh: https://images.unsplash.com/...)" value="${value}"></div>`;
        }
        else if(type === 'youtube') {
            topBar = `<div class="flex items-center gap-2 px-4 py-2.5 border-b border-gray-100 bg-gray-50">
                <span class="text-xs font-bold uppercase tracking-widest text-gray-700">Blok Video YouTube</span>
            </div>`;
            inputField = `<div class="p-4"><input type="url" class="block-value w-full border border-gray-200 bg-white text-gray-900 px-4 py-3 text-sm focus:border-[#0ABF35] focus:outline-none transition-colors" placeholder="Masukkan Link Video (contoh: https://www.youtube.com/watch?v=...)" value="${value}"></div>`;
        }
        else if(type === 'codepen') {
            topBar = `<div class="flex items-center gap-2 px-4 py-2.5 border-b border-gray-100 bg-gray-50">
                <span class="text-xs font-bold uppercase tracking-widest text-gray-700">Blok CodePen</span>
            </div>`;
            inputField = `<div class="p-4"><input type="url" class="block-value w-full border border-gray-200 bg-white text-gray-900 px-4 py-3 text-sm focus:border-[#0ABF35] focus:outline-none transition-colors" placeholder="Masukkan link browser CodePen (contoh: https://codepen.io/username/pen/xyz) — otomatis dikonversi ke /embed/" value="${value}"></div>`;
        }

        blockUi.innerHTML = deleteBtn + topBar + inputField;
        return blockUi;
    }

    function initQuillEditor(el) {
        if (el._quill) return;
        let quill = new Quill(el, {
            theme: 'snow',
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'size': ['small', false, 'large', 'huge'] }],
                    [{ 'header': [false, 1, 2, 3] }],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    [{ 'indent': '-1' }, { 'indent': '+1' }],
                    [{ 'align': [] }],
                    ['clean']
                ]
            }
        });
        el._quill = quill;
    }

    function addBlock(type) {
        let newBlock = createBlockHTML(type, '');
        container.appendChild(newBlock);
        if (type === 'text') {
            let qEl = newBlock.querySelector('.quill-editor');
            if (qEl) initQuillEditor(qEl);
        }
    }

    blocksData.forEach(block => {
        let existingBlock = createBlockHTML(block.type, block.value);
        container.appendChild(existingBlock);
    });

    document.querySelectorAll('.quill-editor').forEach(el => initQuillEditor(el));

    document.getElementById('lessonForm').addEventListener('submit', function(e) {
        let finalData = [];
        let blockElements = document.querySelectorAll('.block-item');

        blockElements.forEach(item => {
            let type = item.getAttribute('data-type');
            let val;

            if (type === 'text') {
                let editor = item.querySelector('.quill-editor');
                if (editor && editor._quill) {
                    val = editor._quill.root.innerHTML;
                    if (val === '<p><br></p>') val = '';
                } else {
                    val = editor ? editor.innerHTML : '';
                }
            } else {
                let input = item.querySelector('.block-value');
                val = input ? input.value : '';
            }

            if (val.trim() !== "") {
                finalData.push({ type: type, value: val });
            }
        });

        document.getElementById('content_input').value = JSON.stringify(finalData);
    });
</script>
@endsection