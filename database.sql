-- ==============================================================
-- Database: gunung
-- Proyek: Website Booking & Informasi Pendakian Gunung Merbabu
-- Kelompok 9 (UAS Desain Web)
-- ==============================================================

CREATE DATABASE IF NOT EXISTS `gunung` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `gunung`;

-- --------------------------------------------------------
-- Struktur Tabel `pendaki`
-- Digunakan untuk menampung formulir pendaftaran calon pendaki
-- --------------------------------------------------------

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
