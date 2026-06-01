# Product Requirements Document (PRD) - Rolepath

**Nama Produk:** Rolepath
**Status Dokumen:** Draft / Aktif
**Platform:** Web Application (Responsive)
**Tech Stack:** Laravel (PHP), Tailwind CSS, MySQL

---

## 1. Ringkasan Eksekutif (Executive Summary)
Rolepath adalah platform *edutech* inovatif yang dirancang untuk menjembatani kesenjangan antara kurikulum akademis dan kebutuhan industri teknologi. Dengan mengusung konsep *in-browser sandbox*, pengguna dapat langsung mempraktikkan kode tanpa perlu melakukan instalasi di komputer. Rolepath menghubungkan talenta digital (mahasiswa/pelajar) langsung dengan rekruter perusahaan melalui sistem portofolio otomatis.

## 2. Nilai Inti & Filosofi Produk (Formula 4K)
* **Keterbukaan:** Materi dasar dapat diakses dan dipelajari oleh siapa saja tanpa hambatan birokrasi (tanpa wajib *login* di awal).
* **Kepraktisan:** Sistem *sandbox* langsung di dalam browser. Belajar sambil langsung praktik (*learning by doing*).
* **Kesederhanaan:** UI/UX yang bersih, estetik (Tema: *Dark Navy* & *Neon Green*), dan tidak membingungkan pengguna pemula.
* **Kepercayaan:** Menyediakan talenta yang tervalidasi oleh sistem (*auto-grading*) sehingga rekruter percaya pada kualitas lulusan Rolepath.

## 3. Target Pengguna (User Personas)
1. **Student / Learner (B2C):** Mahasiswa IT, siswa SMK, atau *career-switcher* yang ingin belajar *coding* dengan terarah (*career path*) dengan *budget* pelajar.
2. **Recruiter / Company (B2B):** HRD atau perusahaan yang sedang mencari *talent* IT yang terbukti memiliki *skill* teknis, bukan sekadar teori.

## 4. Alur Pengguna Utama (User Journey)
* **Gaya Akses Terbuka (The Odin Project Style):** Pengguna tamu dapat melihat *Career Path* dan membaca/menonton materi dasar secara gratis tanpa harus membuat akun.
* **Cegatan Login (Login Friction):** Pengguna baru diminta untuk *Sign Up/Sign In* ketika mereka mencoba menjalankan kode di *Sandbox* dan mengklik tombol **"Submit Code"** agar progres belajar mereka bisa tersimpan.
* **Monetisasi:** Untuk mengakses *Career Path* tingkat lanjut (Premium), pengguna akan diarahkan ke pop-up pembayaran berlangganan (PRO) seharga Rp 9.900/bulan.
* **Penyaluran Kerja:** Pengguna yang menyelesaikan seluruh materi dan lulus evaluasi *Sandbox* akan mendapatkan sertifikat otomatis, dan kodenya akan masuk ke Portofolio yang tampil di halaman **Recruiter Hub**.

## 5. Ruang Lingkup Fitur Utama (Core Features)

### A. Modul Pembelajaran & Sandbox (Fitur Inti)
* **Career Path Navigation:** Katalog rute karir (misal: *Frontend Developer*, *Backend Developer*).
* **Lesson Viewer:** Halaman untuk menampilkan teks materi atau *embed* video.
* **Interactive Web Sandbox:** Editor kode terintegrasi di mana pengguna dapat mengetikkan kode dan sistem akan memberikan *Auto-Grading* (evaluasi output benar/salah secara instan).

### B. Modul Autentikasi & Langganan (Freemium)
* Pendaftaran dan Login (*User* dan *Recruiter*).
* Status Langganan (Free vs PRO).
* Gateway simulasi pembayaran untuk langganan PRO (Rp 9.900).

### C. Modul Portofolio & Recruiter Hub
* **User Dashboard:** Menampilkan progres belajar (*progress bar*), skor *sandbox*, dan sertifikat.
* **Recruiter Dashboard (Talent Hub):** Halaman khusus perusahaan untuk memfilter kandidat berdasarkan bahasa pemrograman atau skor, melihat hasil kode mahasiswa, dan tombol kontak ("Hubungi Kandidat").

## 6. Kebutuhan Non-Fungsional & Teknis
* **Hosting:** Shared Hosting Hostinger (Pakai PHP/MySQL standar).
* **Keamanan:** Proteksi terhadap *code injection* pada fitur Sandbox (dapat diakali dengan evaluasi *client-side* via JavaScript Worker untuk versi MVP).
* **Desain UI:** *Mobile-first approach* menggunakan Tailwind CSS dengan warna utama `#0A192F` (Dark Navy) dan `#00F5D4` (Neon Green).