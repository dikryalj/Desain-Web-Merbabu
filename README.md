# 🏔️ Desain Web Objek Wisata & Booking Online Pendakian Gunung Merbabu

[![PHP Version](https://img.shields.io/badge/PHP-8.2%20%7C%208.3%20(Recommended)-777bb4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![Database](https://img.shields.io/badge/Database-MySQL%20%2F%20MariaDB-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Architecture](https://img.shields.io/badge/Architecture-MVC%20OOP-orange?style=for-the-badge)](#arsitektur-sistem)
[![License](https://img.shields.io/badge/License-Academic%20Project-green?style=for-the-badge)](#)

Aplikasi web interaktif untuk pariwisata, panduan informasi jalur, serta sistem pendaftaran (*online booking*) pendakian **Taman Nasional Gunung Merbabu** (3.142 mdpl), Jawa Tengah. Proyek ini dikembangkan sebagai pemenuhan Tugas UAS Desain Web / Web 2.0 oleh **Kelompok 9**.

---

## 👥 Tim Pengembang (Kelompok 9)

Proyek ini dirancang dan dikembangkan bersama oleh:

| Nama Anggota | NIM / Identitas | Peran / Kontribusi |
| :--- | :---: | :--- |
| **Dikry Al J** | 577 | Front-End Layout, Peta Interaktif Leaflet, Alur Booking & Desain UI |
| **Adam** | 561 | Form Interaktif, Validasi Input, Animasi UI |
| **Luky S** | 559 | Informasi Jalur Pendakian, FAQ Section & Pengolahan Data |

---

## ✨ Fitur Utama

### 1. 🌐 Landing Page Interaktif (`index.php`)
- **Hero Section Dinamis:** Animasi efek mengetik (*typing text effect*) otomatis pada judul sambutan.
- **Peta Interaktif Merbabu:** Integrasi peta digital menggunakan **Leaflet.js** untuk memetakan titik basecamp dan kawasan Gunung Merbabu.
- **Informasi 5 Jalur Resmi Pendakian:**
  - *Jalur Selo* (Boyolali)
  - *Jalur Suwanting* (Magelang)
  - *Jalur Wekas* (Magelang)
  - *Jalur Cuntel* (Semarang)
  - *Jalur Thekelan* (Semarang)
- **Edukasi & SOP Pendakian:** Aturan keselamatan, larangan pendakian, panduan perlengkapan, serta informasi perkiraan cuaca.
- **FAQ Interaktif:** Tanya jawab seputar perizinan, kuota, dan syarat pendakian.
- **Profil Pengembang Interaktif:** Tampilan kartu profil tim dengan efek transisi 3D hover.

### 2. 📝 Sistem Pendaftaran & Booking Online Berbasis MVC (`public/index.php`)
- **Pola Desain MVC (Model-View-Controller):** Struktur kode terpisah rapi antara logika database (`models/`), kontroler alur (`controllers/`), dan tampilan pengguna (`views/`).
- **Multi-step Registration Form:**
  - **Langkah 1 (`views/buku/create.php`):** Pengisian data calon pendaki (kewarganegaraan, jenis kelamin, nama lengkap, usia, email, provinsi, dan kota/kabupaten).
  - **Langkah 2 (`views/buku/step2.php`):** Pemilihan tanggal pendakian dan jalur pendakian yang dituju.
- **Koneksi Database Aman:** Menggunakan **PHP Data Objects (PDO)** untuk fleksibilitas dan keandalan query.
- **Struk Digital & Cetak PDF Otomatis (`views/buku/struk.php`):**
  - Tampilan struk bukti pendaftaran dengan *thermal-receipt style*.
  - Pembuatan **QR Code dinamis** otomatis berdasarkan data pendaki.
  - Fitur **Download / Cetak PDF** langsung dari browser menggunakan pustaka `html2pdf.js`.

---

## ⚙️ Spesifikasi Lingkungan & Versi PHP

### Status Versi PHP
| Kategori | Versi | Catatan |
| :--- | :---: | :--- |
| **Versi Teruji Saat Pengembangan** | **PHP 8.2 (8.2.12)** | Teruji stabil, seluruh fungsi dan PDO berjalan optimal |
| **Versi Minimum** | **PHP 7.4+** | Membutuhkan fitur *Null Coalescing Operator* (`??`) dan PDO |
| **Versi Rekomendasi (Terbaik)** | **PHP 8.2 atau PHP 8.3** | **Sangat direkomendasikan** untuk performa terbaik dan dukungan keamanan aktif |

### 💡 Mengapa Direkomendasikan PHP 8.2 / 8.3?
1. **Keamanan Maksimal:** Versi PHP 7.x dan PHP 8.0 sudah mencapai status *End-of-Life (EOL)* sehingga tidak lagi menerima patch keamanan resmi. Menggunakan PHP 8.2/8.3 menjamin perlindungan server dari kerentanan terbaru.
2. **Performa Tinggi:** PHP 8.2/8.3 memiliki optimasi mesin Zend Engine dan compiler JIT (*Just-In-Time*) yang memproses query dan rendering halaman lebih cepat hingga 25-30% dibanding versi 7.x.
3. **Kompatibilitas PDO Modern:** Driver `pdo_mysql` pada PHP 8.2+ lebih ketat dalam penanganan tipe data (*strict typing*) dan *prepared statements*, meminimalisir celah injeksi SQL.
4. **Pembaruan Berkelanjutan:** Memudahkan pemeliharaan kode jika di masa depan proyek ingin ditingkatkan menggunakan Composer atau framework modern (seperti Laravel atau Slim).

### 📦 Ekstensi PHP yang Wajib Aktif
Pastikan ekstensi berikut telah diaktifkan pada berkas `php.ini` Anda:
- `pdo`
- `pdo_mysql`
- `session`
- `json`
- `mbstring`

---

## 🗂️ Struktur Direktori Proyek

```text
TugasUAS(K9)/
├── asset/                   # Aset tampilan antarmuka
│   ├── css/                 # Berkas stylesheet (all.min.css, style.css, kelompok9.css, dll)
│   ├── js/                  # Berkas JavaScript (mapmerbabu.js, script.js, cuasa.js)
│   ├── animasi.php          # Komponen animasi UI
│   ├── card.php             # Komponen kartu pilihan jalur
│   ├── cardinfo.php         # Halaman informasi SOP & aturan pendakian
│   ├── col.php              # Komponen grafis
│   ├── faq.php              # Komponen Frequently Asked Questions
│   ├── foto.php             # Komponen profil anggota Kelompok 9
│   └── informasi.php        # Informasi detail objek wisata
├── config/
│   └── Database.php         # Konfigurasi koneksi database MySQL via PDO
├── controllers/
│   └── pendaftaranController.php  # Kontroler alur registrasi & booking
├── models/
│   └── Daftar.php           # Model untuk manipulasi dan penyimpanan data pendaki
├── views/
│   └── buku/                # Tampilan antarmuka alur pendaftaran
│       ├── create.php       # Form input data diri pendaki (Step 1)
│       ├── kelompok9.php    # Beranda web versi integrasi views
│       ├── printout.php     # Template cetak data
│       ├── step2.php        # Form pemilihan tanggal & jalur (Step 2)
│       └── struk.php        # Tampilan struk registrasi + unduh PDF + QR Code
├── public/
│   └── index.php            # Entry point utama untuk alur sistem MVC
├── pendakian/               # Halaman detail rute masing-masing jalur (Selo, Wekas, dll)
├── proses/                  # Skrip pemrosesan request lama (AJAX JSON)
├── fromlama/                # Arsip berkas form versi sebelumnya
├── img/                     # Galeri gambar, icon, logo, dan foto pendakian
├── adamuas561.php           # Halaman pengujian formulir
├── catat.txt                # Catatan perencanaan alur dan fitur proyek
├── database.sql             # Skrip SQL untuk inisialisasi database dan tabel
├── index.php                # Landing page utama website (One-page portal)
├── jquery-3.7.1.min.js      # Pustaka jQuery v3.7.1
└── README.md                # Dokumentasi lengkap proyek
```

---

## 🚀 Panduan Instalasi & Menjalankan Proyek

### Prasyarat
- Web Server lokal: **XAMPP** (disarankan paket PHP 8.2 / 8.3) atau **Laragon**.
- Database Server: **MySQL / MariaDB**.
- Web Browser modern (Chrome, Edge, Firefox).

---

### Langkah 1: Unduh / Clone Repositori
Clone repositori ke dalam direktori server lokal Anda (misal `C:\xampp\htdocs\`):
```bash
cd C:\xampp\htdocs
git clone https://github.com/dikryalj/Desain-Web-Merbabu.git
```

---

### Langkah 2: Setup Database
1. Buka browser dan akses **phpMyAdmin** (`http://localhost/phpmyadmin`).
2. Buat database baru bernama `gunung` (atau biarkan skrip SQL membuatnya otomatis).
3. Pilih tab **Import**, lalu pilih berkas `database.sql` yang berada di dalam folder proyek ini.
4. Klik tombol **Import / Go**.

> **Skema SQL Manual (jika diperlukan):**
```sql
CREATE DATABASE IF NOT EXISTS `gunung` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `gunung`;

CREATE TABLE IF NOT EXISTS `pendaki` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `jenis_kewarganegaraan` VARCHAR(50) NOT NULL,
  `jenis_kelamin` VARCHAR(20) NOT NULL,
  `nama_lengkap` VARCHAR(150) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `usia` INT(11) NOT NULL,
  `provinsi` VARCHAR(100) NOT NULL,
  `kota_kabupaten` VARCHAR(100) NOT NULL,
  `tanggal` DATE DEFAULT NULL,
  `jalur` VARCHAR(100) DEFAULT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

---

### Langkah 3: Konfigurasi Database (Jika Ada Perubahan Kredensial)
Buka berkas `config/Database.php` dan sesuaikan pengaturan akun database lokal Anda jika berbeda:
```php
class Database {
    private $host = "localhost";
    private $db_name = "gunung";
    private $username = "root";
    private $password = ""; // Isi jika MySQL Anda memiliki password
    public $conn;
    ...
```

---

### Langkah 4: Menjalankan Aplikasi

#### Opsi A: Menggunakan XAMPP / Laragon (Web Server Apache)
1. Nyalakan modul **Apache** dan **MySQL** pada control panel XAMPP / Laragon.
2. Akses melalui browser:
   - **Landing Page & Informasi Pendakian:**
     ```
     http://localhost/Desain-Web-Merbabu/index.php
     ```
   - **Aplikasi Booking Online (Alur MVC):**
     ```
     http://localhost/Desain-Web-Merbabu/public/index.php
     ```

#### Opsi B: Menggunakan PHP Built-in Server (Tanpa XAMPP)
Jika PHP sudah terpasang di sistem PATH Anda, jalankan perintah berikut di terminal:
```bash
cd d:\program\01\web2.0\TugasUAS(K9)
php -S localhost:8000
```
Buka browser dan buka:
- Landing Page: `http://localhost:8000/index.php`
- Sistem Booking: `http://localhost:8000/public/index.php`

---

## 🛠️ Rekomendasi Pembaruan Proyek (*Next Improvements*)

Agar proyek ini semakin sempurna untuk skala produksi maupun tugas lanjutan:
1. **Penyimpanan Tanggal & Jalur ke Database:**
   Pada berkas `models/Daftar.php`, perbarui query penyimpanan agar kolom `tanggal` dan `jalur` dari Form Step 2 turut disimpan ke dalam tabel `pendaki`:
   ```php
   $query = "INSERT INTO pendaki SET 
       jenis_kewarganegaraan=:jenis_kewarganegaraan, 
       jenis_kelamin=:jenis_kelamin,
       nama_lengkap=:nama_lengkap, 
       email=:email, 
       usia=:usia, 
       provinsi=:provinsi,
       kota_kabupaten=:kota_kabupaten,
       tanggal=:tanggal,
       jalur=:jalur";
   ```
2. **Dashboard Admin & Autentikasi:**
   Mengembangkan modul login khusus admin untuk memantau grafik pendaki, mengelola ketersediaan kuota jalur, serta mengekspor data laporan harian pendaki.
3. **Validasi & Keamanan Input:**
   Menambahkan validasi format email (`filter_var`), proteksi CSRF token pada setiap form, dan pengamanan sanitasi input data.
4. **Pembersihan Kode Lama:**
   Mengonsolidasikan berkas eksperimen/lama pada folder `fromlama/` ke dalam struktur MVC resmi agar repositori lebih bersih dan terorganisir.

---

## 📄 Lisensi & Hak Cipta

Proyek ini dibuat dan didistribusikan untuk keperluan akademik dan pembelajaran:
- **Mata Kuliah:** Web 2.0 / Desain Web
- **Kelompok:** 9
- Dikelola oleh repositori: [dikryalj/Desain-Web-Merbabu](https://github.com/dikryalj/Desain-Web-Merbabu.git)
