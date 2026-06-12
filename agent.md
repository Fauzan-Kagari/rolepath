# Rolepath Landing Page - UI/UX Slicing Blueprint

**Target:** Create a responsive landing page using Laravel Blade templating and Tailwind CSS based on the provided Figma design.
**Theme Colors:**
- Primary/Background Navbar: Dark Navy (approx `#0A192F` or standard black/dark gray as per image)
- Accent/Buttons: Neon Green (approx `#00F5D4` or standard Tailwind green-500/600)
- Backgrounds: White and Light Gray.

## 1. Navigation Bar (Navbar)
*   **Background:** Dark (Black / Dark Navy).
*   **Text Color:** White.
*   **Logo (Left):** Text "ROLEPATH" (Bold) with a small tagline underneath.
*   **Navigation Links (Center):** 
    *   Home (Active/Bold)
    *   Pricing Plan
    *   Course
    *   Abous us
*   **User Actions (Right):**
    *   Search Icon (Magnifying glass).
    *   User Dropdown: "Fauzan-Kagari" with a downward arrow.
    *   CTA Button: "Hubungi Kami" (Background: Green, Text: Black/Dark).

## 2. Hero Section
*   **Background:** Full-width image of people studying/collaborating with a dark overlay to make text readable.
*   **Main Headline (H1):** "Belajar Peran Teknologi. Dapatkan Karier Impian." (Color: White, Large, Left-aligned).
*   **Call to Action Buttons (Below Headline):**
    *   Button 1: "Start Learning" (Background: Green, Text: Black/Dark).
    *   Button 2: "Explor Subject" (Background: White, Text: Black/Dark).

## 3. Introduction & Features Section
*   **Background:** Light Gray / White.
*   **Sub-headline (Center):** "Kuasai keahlian spesifik industri melalui kurikulum berbasis peran. Mulai dengan dasar gratis, tingkatkan ke profesional."
*   **Section Title (Center):** "Kenapa belajar dengan Rolepath?" (Bold).
*   **Feature Cards (Grid Layout - 4 Columns):**
    *   **Card 01:**
        *   Number: "01"
        *   Image: Person typing on a laptop.
        *   Title: "Sertifikasi Industri"
        *   Description: "Dapatkan sertifikat yang diakui industri untuk membuktikan keahlianmu pada rekruter."
    *   **Card 02:**
        *   Number: "02"
        *   Image: Woman studying with a laptop and glasses.
        *   Title: "Kurikulum Komprehensif"
        *   Description: "Tingkatkan keterampilan teknis dengan kurikulum linear berbasis proyek nyata."
    *   **Card 03:**
        *   Number: "03"
        *   Image: Two women having a discussion.
        *   Title: "Pendidikan Inklusif"
        *   Description: "Materi dasar kami sepenuhnya gratis. Kami percaya biaya tidak boleh menjadi penghalang."
    *   **Card 04:**
        *   Number: "04"
        *   Image: Woman and child reading/studying.
        *   Title: "Komunitas Besar"
        *   Description: "Bergabunglah dengan ribuan siswa, alumni, dan mentor dalam ekosistem belajar yang suportif."

## 4. Process/Steps Section
*   **Background:** Solid Green.
*   **Text Color:** White.
*   **Section Title (Center):** "Proses kami dalam empat langkah mudah" *(Note: Design currently shows 3 steps).*
*   **Steps Layout:** A horizontal timeline/connecting line with circular numbered nodes.
    *   **Step 1:**
        *   Node: Circle with number "1" (Background: Light/White, Text: Dark).
        *   Title: "Free Course Dasar"
        *   Description: "Mulai perjalananmu dengan kursus fondasi gratis (HTML, CSS, JS, atau Python). Bangun logika dasar koding tanpa biaya sepeser pun"
    *   **Step 2:**
        *   Node: Circle with number "2" (Background: Light/White, Text: Dark).
        *   Title: "Ikuti Jalur (Roadmap)"
        *   Description: "Pilih peran spesialisasi impianmu (Cybersecurity, Data, atau Network). Sistem kami akan menyusun peta jalan belajar yang terstruktur dan linear."
    *   **Step 3:**
        *   Node: Circle with number "3" (Background: Light/White, Text: Dark).
        *   Title: "Praktik Langsung"
        *   Description: "Belajar langsung dari ahlinya melalui video penjelasan singkat, lalu terapkan ilmunya seketika dengan sebuah contoh study case"
IMPORTANT FOR HOSTINGER DEPLOYMENT

This project is hosted on Hostinger Business Hosting.

The web root is:
public_html

NOT:
public_html/public

After every deployment:

1. Copy public/index.php to public_html/index.php
2. Copy public/.htaccess to public_html/.htaccess
3. Copy public/build to public_html/build
4. Run php artisan optimize:clear

Never remove:
- public_html/index.php
- public_html/.htaccess
- public_html/build