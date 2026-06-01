# Rolepath - Development Task Tracker

Dokumen ini berisi daftar tugas (To-Do List) untuk mengembangkan platform Rolepath dari tahap persiapan hingga peluncuran (deployment).

## Fase 1: Persiapan & Konfigurasi Lingkungan (✅ SELESAI)
- [x] Instalasi Laragon (Server Lokal PHP & MySQL).
- [x] Instalasi Laravel via Composer (`composer create-project`).
- [x] Instalasi & Konfigurasi Tailwind CSS + Vite.
- [x] Konfigurasi file `.env` (Setup APP_KEY, ubah Session driver).
- [x] Inisialisasi Git & Push repositori pertama ke GitHub.
- [x] Pembuatan dokumen PRD (`PRD.md`) dan Blueprint UI (`agent.md`).

---

## Fase 2: Frontend Slicing - Landing Page (🚧 SEDANG DIKERJAKAN)
*Referensi Desain: `agent.md` & Figma.*
- [ ] **Task 2.1: Master Layout**
  - [ ] Buat file `resources/views/layouts/app.blade.php`.
  - [ ] Buat komponen **Navbar** (Logo, Menu Navigasi, Dropdown User, Tombol CTA).
  - [ ] Buat komponen **Footer** dasar.
- [ ] **Task 2.2: Hero Section (`welcome.blade.php`)**
  - [ ] Ekstensi/Panggil layout `app.blade.php`.
  - [ ] Tambahkan *background image* dengan *dark overlay*.
  - [ ] Tambahkan Headline (H1) dan dua tombol CTA ("Start Learning" & "Explor Subject").
- [ ] **Task 2.3: Features Section (Kenapa Rolepath?)**
  - [ ] Buat grid layout 4 kolom.
  - [ ] Masukkan 4 kartu (Sertifikasi, Kurikulum, Pendidikan Inklusif, Komunitas).
- [ ] **Task 2.4: Process Section (Langkah Belajar)**
  - [ ] Buat *background* hijau penuh.
  - [ ] Buat *timeline layout* horizontal dengan node melingkar (Step 1, 2, dan 3).

---

## Fase 3: Struktur Database & Backend (ERD Implementation)
- [ ] **Task 3.1: Konfigurasi Database**
  - [ ] Buat database `rolepath_db` di Laragon (phpMyAdmin/HeidiSQL).
  - [ ] Hubungkan kredensial database di file `.env` Laravel.
- [ ] **Task 3.2: Migration & Models**
  - [ ] Buat file *Migration* untuk tabel `users` (tambahkan kolom role & subscription).
  - [ ] Buat file *Migration* untuk tabel `career_paths` & `courses`.
  - [ ] Buat file *Migration* untuk tabel `lessons` & `user_progress`.
  - [ ] Buat file *Migration* untuk tabel `portfolios` & `certificates`.
  - [ ] Setup relasi di file Model (HasMany, BelongsTo).

---

## Fase 4: Core Features (Fitur Utama)
- [ ] **Task 4.1: Autentikasi (Breeze/UI)**
  - [ ] Buat halaman Login & Register.
  - [ ] Implementasi pengalihan (*redirect*) berdasarkan Role (Admin, Student, Recruiter).
- [ ] **Task 4.2: Dashboard Student & Course Viewer**
  - [ ] Buat UI halaman daftar *Career Path* (Freemium logic).
  - [ ] Buat pop-up pembayaran (Payment Gateway mock) Rp 9.900 untuk kelas PRO.
- [ ] **Task 4.3: Interactive Sandbox (The Core Engine)**
  - [ ] Buat UI ruang belajar (Kiri: Materi, Kanan: Editor Kode).
  - [ ] Implementasi JavaScript sederhana di sisi klien (*client-side*) untuk menangkap kode dan mengevaluasi output (*Auto-grading*).
  - [ ] Simpan progress ke database jika kode benar.
- [ ] **Task 4.4: Recruiter Hub**
  - [ ] Buat UI halaman pencarian mahasiswa untuk *Role Recruiter*.
  - [ ] Tampilkan kartu portofolio dan sertifikat mahasiswa lulusan.

---

## Fase 5: Testing & Deployment (Hostinger)
- [ ] **Task 5.1: Final Review**
  - [ ] Uji coba alur dari tamu -> daftar akun -> langganan -> kerjakan sandbox -> lulus.
  - [ ] Perbaiki *bug* UI/UX di mode *mobile* (responsif).
- [ ] **Task 5.2: Production Build**
  - [ ] Jalankan `npm run build` untuk mengkompilasi Tailwind CSS secara final.
  - [ ] ZIP semua folder (kecuali `node_modules`).
- [ ] **Task 5.3: Upload ke Hostinger**
  - [ ] Ekstrak ZIP di hPanel Hostinger.
  - [ ] Import database SQL dari Laragon ke phpMyAdmin Hostinger.
  - [ ] Sesuaikan file `.env` (koneksi database produksi & URL domain `rolepath.online`).