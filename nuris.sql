-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2025 pada 06.54
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nuris`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerpt` text DEFAULT NULL,
  `content` longtext NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `published_at` datetime DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `excerpt`, `content`, `featured_image`, `author`, `category`, `views`, `is_published`, `published_at`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'test', 'test', 'articles/0wYZns1IYHJOnlmnvDkMPZqu9wZ7yY1kzNzLd9gU.png', 'test', 'test', 7, 1, '2025-12-17 05:39:06', 'test', 'test', '2025-12-16 20:40:38', '2025-12-20 01:31:08'),
(2, 'testtttt', 't4sttttt', 'etstst', 'ttessstt', 'articles/m6O4nr2riEbdrEk0gU9gyF3oXIHBdM3cOiO4sFeL.jpg', 'bos andi', 'testtt', 4, 1, '2025-12-20 04:09:54', 'test', 'test', '2025-12-19 20:59:03', '2025-12-20 05:36:26'),
(3, 'fasdfadf', 'sdfgafg', 'ASDJF', 'ADFASD', 'articles/5yUFPsTwtPq5EaZfEaQ96J3mIUGaEV6TN9bzCKQg.png', 'bos andi', 'adfia', 3, 1, '2025-12-20 04:13:17', 'TEST', 'TSTAS', '2025-12-19 21:13:17', '2025-12-20 01:30:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `event_date` datetime NOT NULL,
  `event_end_date` datetime DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `organizer` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `published_at` datetime DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` enum('photo','video') NOT NULL DEFAULT 'photo',
  `description` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `video_embed_code` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `slug`, `type`, `description`, `image_path`, `video_url`, `video_embed_code`, `order`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'Nuris', 'nuris', 'video', NULL, NULL, 'https://youtu.be/q3pGQKSlvXE', NULL, 1, 1, '2025-12-21 19:52:09', '2025-12-21 20:32:38'),
(2, 'Guru & Karyawan', 'guru-karyawan-1766372744-0', 'photo', NULL, 'galleries/1766372731_N1uvCgYnmz.jpg', NULL, NULL, 2, 1, '2025-12-21 20:05:44', '2025-12-21 20:05:44'),
(3, 'Guru & Karyawan', 'guru-karyawan-1766372753-1', 'photo', NULL, 'galleries/1766372744_q7TXxFglA5.jpg', NULL, NULL, 3, 1, '2025-12-21 20:05:53', '2025-12-21 20:05:53'),
(4, 'Guru', 'guru-1766373116', 'photo', NULL, 'galleries/1766373116_QrK32iERQo.jpg', NULL, NULL, 4, 1, '2025-12-21 20:11:56', '2025-12-21 20:12:19'),
(5, 'Profil', 'profil', 'video', NULL, NULL, 'https://www.youtube.com/watch?v=cVxd_qeJQAI&t=1139s', NULL, 5, 1, '2025-12-21 20:50:03', '2025-12-21 20:50:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery_items`
--

CREATE TABLE `gallery_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gallery_items`
--

INSERT INTO `gallery_items` (`id`, `gallery_id`, `image_path`, `order`, `created_at`, `updated_at`) VALUES
(1, 4, 'galleries/1766373116_QrK32iERQo.jpg', 0, '2025-12-21 20:11:57', '2025-12-21 20:11:57'),
(2, 4, 'galleries/1766373117_s4sPPXJ4Pw.jpg', 1, '2025-12-21 20:12:06', '2025-12-21 20:12:06'),
(3, 4, 'galleries/1766373126_ipDZ5qSxzN.jpg', 2, '2025-12-21 20:12:19', '2025-12-21 20:12:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'page',
  `url` varchar(255) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `icon` varchar(255) DEFAULT NULL,
  `target` varchar(255) NOT NULL DEFAULT '_self',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `title`, `slug`, `type`, `url`, `route`, `parent_id`, `order`, `is_active`, `icon`, `target`, `created_at`, `updated_at`) VALUES
(1, 'Beranda', 'beranda', 'page', NULL, '', NULL, 1, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33'),
(2, 'Tentang Nuris', 'tentang-nuris', 'dropdown', NULL, NULL, NULL, 2, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33'),
(3, 'Profil Pengasuh', 'profil-pengasuh', 'page', NULL, 'profil-pengasuh', 2, 1, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33'),
(4, 'Sekilas PP. Nurul Islam', 'sekilas-nuris', 'page', NULL, 'sekilas-nuris', 2, 2, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33'),
(5, 'Visi, Misi, Tujuan, Motto', 'visi-misi', 'page', NULL, 'visi-misi', 2, 3, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33'),
(6, 'Makna Logo', 'makna-logo', 'page', NULL, 'makna-logo', 2, 4, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33'),
(7, 'Struktur Organisasi', 'struktur-organisasi', 'dropdown', NULL, NULL, 2, 5, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33'),
(8, 'Pengurus Yayasan', 'pengurus-yayasan', 'page', NULL, 'pengurus-yayasan', 7, 1, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33'),
(9, 'Pengurus Pesantren', 'pengurus-pesantren', 'page', NULL, 'pengurus-pesantren', 7, 2, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33'),
(10, 'Dewan Pengurus Pusat', 'dewan-pengurus-pusat', 'page', NULL, 'dewan-pengurus-pusat', 7, 3, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33'),
(11, 'Pengurus Unit', 'pengurus-unit', 'page', NULL, 'pengurus-unit', 7, 4, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33'),
(12, 'Data Guru & Karyawan', 'data-guru-karyawan', 'page', NULL, 'data-guru-karyawan', 2, 6, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33'),
(13, 'Informasi', 'informasi', 'dropdown', NULL, NULL, NULL, 3, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33'),
(14, 'Fasilitas', 'fasilitas', 'page', NULL, 'fasilitas', 13, 1, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33'),
(15, 'Unit Pendidikan', 'unit-pendidikan', 'dropdown', NULL, NULL, NULL, 4, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33'),
(16, 'Unit Khidmah', 'unit-khidmah', 'dropdown', NULL, NULL, NULL, 5, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33'),
(17, 'Nuris Medika', 'nuris-medika', 'page', NULL, 'nuris-medika', 16, 1, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33'),
(18, 'Program Unggulan', 'program-unggulan', 'dropdown', NULL, NULL, NULL, 6, 1, NULL, '_self', '2025-12-16 03:08:33', '2025-12-16 03:08:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_12_14_095306_create_sessions_table', 1),
(5, '2025_12_16_095006_add_role_to_users_table', 2),
(6, '2025_12_16_095016_create_pages_table', 2),
(7, '2025_12_16_100500_create_menus_table', 3),
(8, '2025_12_17_031325_create_articles_table', 4),
(9, '2025_12_17_031330_create_events_table', 4),
(10, '2025_12_18_070009_create_galleries_table', 5),
(11, '2025_12_20_025516_create_slideshows_table', 6),
(12, '2025_12_20_030235_create_staff_table', 7),
(14, '2025_12_20_031214_add_fields_to_staff_table', 8),
(15, '2025_12_20_034407_change_tmt_to_string_in_staff_table', 8),
(16, '2025_12_20_042022_create_facilities_table', 9),
(17, '2025_12_20_051549_create_schedules_table', 10),
(19, '2025_12_20_062710_create_site_settings_table', 11),
(20, '2025_12_20_071650_create_pengurus_yayasans_table', 12),
(21, '2025_12_20_073328_create_pengurus_pesantrens_table', 13),
(22, '2025_12_20_073333_create_pengurus_dewan_pusats_table', 13),
(23, '2025_12_20_073336_create_pengurus_units_table', 13),
(24, '2025_12_21_123750_add_video_fields_to_slideshows_table', 14),
(25, '2025_12_21_125636_make_title_nullable_in_slideshows_table', 15),
(26, '2025_12_22_020500_create_unit_khidmahs_table', 16),
(27, '2025_12_22_021846_add_image_to_unit_khidmahs_table', 17),
(28, '2025_12_22_030807_create_gallery_items_table', 18),
(29, '2025_12_22_035720_create_program_unggulans_table', 19),
(30, '2025_12_22_053743_create_system_updates_table', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus_dewan_pusats`
--

CREATE TABLE `pengurus_dewan_pusats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `jabatan_lengkap` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus_pesantrens`
--

CREATE TABLE `pengurus_pesantrens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `jabatan_lengkap` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus_units`
--

CREATE TABLE `pengurus_units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `jabatan_lengkap` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus_yayasans`
--

CREATE TABLE `pengurus_yayasans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `jabatan_lengkap` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengurus_yayasans`
--

INSERT INTO `pengurus_yayasans` (`id`, `nama`, `jabatan`, `jabatan_lengkap`, `foto`, `kategori`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Dr. KH. Ahmad Siddiq, SE., MM.', 'Ketua', 'Ketua Yayasan Nurul Islam', NULL, 'Utama', 1, 1, '2025-12-20 00:27:19', '2025-12-20 00:27:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_unggulans`
--

CREATE TABLE `program_unggulans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video_url` text DEFAULT NULL,
  `video_id` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `intro_text` text DEFAULT NULL,
  `tujuan` text DEFAULT NULL,
  `materi` text DEFAULT NULL,
  `durasi` text DEFAULT NULL,
  `sasaran` text DEFAULT NULL,
  `benefit` text DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `pendaftaran_info` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `program_unggulans`
--

INSERT INTO `program_unggulans` (`id`, `slug`, `title`, `subtitle`, `description`, `image`, `video_url`, `video_id`, `content`, `intro_text`, `tujuan`, `materi`, `durasi`, `sasaran`, `benefit`, `contact_email`, `contact_phone`, `pendaftaran_info`, `meta_title`, `meta_description`, `is_active`, `order`, `created_at`, `updated_at`) VALUES
(1, 'expert-classes', 'Expert Classes', 'Program Kelas Ahli', NULL, 'program-unggulan/7gLLETCIZdDa28pooKE5AH49VTBINlmCsERDZ6dX.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2025-12-21 21:03:51', '2025-12-21 21:03:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('daily','weekly') NOT NULL DEFAULT 'daily',
  `day` varchar(255) DEFAULT NULL,
  `time` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `notes` text DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `schedules`
--

INSERT INTO `schedules` (`id`, `type`, `day`, `time`, `activity`, `notes`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'daily', NULL, '03.00-04.00', 'Qiyamul Lail dan Persiapan Shalat Shubuh Berjama\'ah', NULL, 1, 1, '2025-12-19 22:19:14', '2025-12-19 22:19:14'),
(2, 'daily', NULL, '04.00-04.45', 'Shalat Shubuh Berjama\'ah dan Wiridan', NULL, 2, 1, '2025-12-19 22:19:14', '2025-12-19 22:19:14'),
(3, 'daily', NULL, '04.45-05.30', 'Madrasah Al-Qur\'an dan Tafsir Jalalain', NULL, 3, 1, '2025-12-19 22:19:14', '2025-12-19 22:19:14'),
(4, 'daily', NULL, '05.30-07.00', 'Ro\'an, Makan Pagi dan Persiapan Sekolah Formal', NULL, 4, 1, '2025-12-19 22:19:14', '2025-12-19 22:19:14'),
(5, 'daily', NULL, '07.30-10.05', 'KBM Formal', NULL, 5, 1, '2025-12-19 22:19:14', '2025-12-19 22:19:14'),
(6, 'daily', NULL, '10.05-10.50', 'Istirahat & Sholat Dhuha Berjama\'ah', NULL, 6, 1, '2025-12-19 22:19:14', '2025-12-19 22:19:14'),
(7, 'daily', NULL, '10.50-12.15', 'KBM Formal', NULL, 7, 1, '2025-12-19 22:19:14', '2025-12-19 22:19:14'),
(8, 'daily', NULL, '12.15-13.45', 'Sholat Dhuhur berjama\'ah, Makan Siang, Istirahat & Mandi untuk Persiapan Diniyah', NULL, 8, 1, '2025-12-19 22:19:15', '2025-12-19 22:19:15'),
(9, 'daily', NULL, '13.45-15.00', 'KBM Madrasah Diniyah Salafiyah', NULL, 9, 1, '2025-12-19 22:19:15', '2025-12-19 22:19:15'),
(10, 'daily', NULL, '15.00-15.15', 'Lalaran Nadzom', NULL, 10, 1, '2025-12-19 22:19:15', '2025-12-19 22:19:15'),
(11, 'daily', NULL, '15.15-15.45', 'Istirahat dan Shalat Ashar Berjama\'ah', NULL, 11, 1, '2025-12-19 22:19:15', '2025-12-19 22:19:15'),
(12, 'daily', NULL, '15.45-17.00', 'KBM Madrasah Diniyah Salafiyah', NULL, 12, 1, '2025-12-19 22:19:15', '2025-12-19 22:19:15'),
(13, 'daily', NULL, '17.00-17.30', 'Ro\'an Sore dan Persiapan Shalat Magrib Berjama\'ah', NULL, 13, 1, '2025-12-19 22:19:15', '2025-12-19 22:19:15'),
(14, 'daily', NULL, '17.30-18.00', 'Shalat Magrib Berjama\'ah', NULL, 14, 1, '2025-12-19 22:19:15', '2025-12-19 22:19:15'),
(15, 'daily', NULL, '18.00-19.00', 'Makan Malam dan Persiapan Shalat Isya\'', NULL, 15, 1, '2025-12-19 22:19:15', '2025-12-19 22:19:15'),
(16, 'daily', NULL, '19.00-19.45', 'Shalat Isya Berjama\'ah', NULL, 16, 1, '2025-12-19 22:19:15', '2025-12-19 22:19:15'),
(17, 'daily', NULL, '19.45-21.00', 'Ilqo\' Mufrodat + Taqror', NULL, 17, 1, '2025-12-19 22:19:15', '2025-12-19 22:19:15'),
(18, 'daily', NULL, '21.00-03.00', 'Istirahat/tidur', NULL, 18, 1, '2025-12-19 22:19:15', '2025-12-19 22:19:15'),
(19, 'weekly', 'Kamis', '19.30-20.30', 'Shalawat Ad Diba\'i', NULL, 1, 1, '2025-12-19 22:19:15', '2025-12-19 22:19:15'),
(20, 'weekly', 'Sabtu', '07.00-10.00', 'Esktrakulikuler', NULL, 2, 1, '2025-12-19 22:19:15', '2025-12-19 22:19:15'),
(21, 'weekly', 'Sabtu', '19.30-21.00', 'Syawir', 'Sabtu I + III', 3, 1, '2025-12-19 22:19:15', '2025-12-19 22:19:15'),
(22, 'weekly', 'Sabtu', '19.30-21.00', 'Muhadhoroh', 'Sabtu II + IV', 4, 1, '2025-12-19 22:19:15', '2025-12-19 22:19:15'),
(23, 'weekly', 'Ahad', '16.00-17.15', 'Ta\'lim Muta\'allim & Arba\' Ar Rosail', 'Nuris 1', 5, 1, '2025-12-19 22:19:15', '2025-12-19 22:19:15'),
(24, 'weekly', 'Ahad', '18.00-19.15', 'Ta\'lim Muta\'allim & Arba\' Ar Rosail', 'Nuris II', 6, 1, '2025-12-19 22:19:15', '2025-12-19 22:19:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('RJB9g0vh80aPoqqOVwZMV9OsVts9VakoLHCKNrfQ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidFJCZDY3WU9xaHVsN01zemM5Um5JMkJjWElFNTlmQlJPTWt1MlVtaCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czoxMToicGFnZXMuaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1766382780);

-- --------------------------------------------------------

--
-- Struktur dari tabel `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `site_settings`
--

INSERT INTO `site_settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'PP. Nurul Islam', '2025-12-19 23:30:35', '2025-12-19 23:30:35'),
(2, 'site_description', 'Pondok Pesantren Nurul Islam Mojokerto - Mendidik generasi unggul dengan nilai-nilai Islam yang rahmatan lil alamin', '2025-12-19 23:30:35', '2025-12-19 23:30:35'),
(3, 'hero_logo', NULL, '2025-12-19 23:30:35', '2025-12-19 23:30:35'),
(4, 'favicon', 'storage/site-settings/Z9LaDWNrOOtJqIwo51KFV4FHAnUVv30GiY3mxUb3.png', '2025-12-19 23:30:35', '2025-12-20 06:26:52'),
(5, 'og_image', NULL, '2025-12-19 23:30:35', '2025-12-19 23:30:35'),
(6, 'og_title', 'PP. Nurul Islam - Pondok Pesantren Nurul Islam Mojokerto', '2025-12-19 23:30:35', '2025-12-19 23:30:35'),
(7, 'og_description', 'Pondok Pesantren Nurul Islam Mojokerto - Mendidik generasi unggul dengan nilai-nilai Islam yang rahmatan lil alamin', '2025-12-19 23:30:35', '2025-12-19 23:30:35'),
(8, 'og_url', 'https://kynlee-unvenomous-unspaciously.ngrok-free.dev', '2025-12-19 23:30:35', '2025-12-19 23:30:35'),
(9, 'twitter_card', 'summary_large_image', '2025-12-19 23:30:35', '2025-12-19 23:30:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slideshows`
--

CREATE TABLE `slideshows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `slide_type` enum('image','video') NOT NULL DEFAULT 'image',
  `button_text` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `slideshows`
--

INSERT INTO `slideshows` (`id`, `title`, `subtitle`, `description`, `background_image`, `video_url`, `slide_type`, `button_text`, `button_link`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Pondok Pesantren Nuris', 'Nuris', 'Nuris', 'slideshows/U0aWNUOQRS1JGaDVdB8QC0XAmXvBGRdVb0ZMubRF.jpg', NULL, 'image', NULL, NULL, 2, 1, '2025-12-20 06:48:26', '2025-12-20 07:04:11'),
(2, 'Pondok Pesantren Nuirs', 'Official Website Ponpen Nuris', 'Nurul Islam', 'slideshows/gIbD0rmo7yxiJ5SNOqpT6kW9pJA5i4uSbYlh1Ee2.jpg', NULL, 'image', NULL, NULL, 3, 1, '2025-12-20 06:50:55', '2025-12-20 07:02:10'),
(3, 'Pondok Pesantren Nuris', 'Ponpes Nuris', 'Mencetak Generasi Unggul', 'slideshows/YnUoL0cfQUsWnSjZTwGB4RR5cT9IK5ocUl2N8PQJ.jpg', NULL, 'image', NULL, NULL, 1, 1, '2025-12-20 06:57:48', '2025-12-20 07:03:59'),
(4, NULL, NULL, NULL, NULL, 'https://youtu.be/3AXgX-36-Ag', 'video', NULL, NULL, 4, 1, '2025-12-21 05:46:30', '2025-12-21 06:02:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `tmt` varchar(10) DEFAULT NULL,
  `tempat_tanggal_lahir` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `pendidikan_terakhir` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `status` enum('Guru','Karyawan') NOT NULL DEFAULT 'Guru',
  `email` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id`, `nama`, `nip`, `tmt`, `tempat_tanggal_lahir`, `alamat`, `pendidikan_terakhir`, `jabatan`, `unit`, `status`, `email`, `no_hp`, `foto`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Dr. KH Ahmad Siddiq, S.E., M.M.', '1', '2010', 'Lamongan, 01 Juli 1973', 'Jabontegal - Pungging - Mojokerto', 'S3 Ekonomi Syariah - Universitas Islam Negeri Sunan Ampel Surabaya - Ekonomi Sariah', NULL, NULL, 'Guru', NULL, '081336654858', NULL, 1, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(2, 'H. Muhammad Ikhsan, S.Pd, S.Kom, M.M.', '2', '2010', 'Mojokerto, 22 Juli 1988', 'Jabontegal - Pungging - Mojokerto', 'S2 Manajemen - Universitas Trunojoyo Madura', NULL, NULL, 'Guru', NULL, '085755562232', NULL, 2, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(3, 'M. Ikmaluddin Alfi Hidayat, S.M.', '3', '2021', 'Lamongan, 25 Maret 2000', 'Jabontegal - Pungging - Mojokerto', 'S1 Manajemen - UIN Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '085157793719', NULL, 3, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(4, 'M. Nizardi Samudra Arungan, S.Ag.', '4', '2020', 'Sidoarjo, 8 Juli 2002', 'Klantingsari - Tarik - Sidoarjo', 'S1 Tafsir - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '088234485202', NULL, 4, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(5, 'H. Abdul Kafi, L.c, M.Pd.', '5', '2010', 'Malang, 12 September 1974', 'Jatilangkung - Pungging - Mojokerto', 'S2 Pend. Agama Islam - IAI Al Khoziny Sidoarjo', NULL, NULL, 'Guru', NULL, '081230113316', NULL, 5, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(6, 'M. Ibda\'us Shulhi, M.Pd.', '6', '2016', 'Kediri, 27 Desember 1982', 'Jabontegal - Pungging - Mojokerto', 'S2 Pend. Bahasa Indonesia - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '086790806548', NULL, 6, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(7, 'Sulistyowati, S.Pd, M.H.', '7', '2010', 'Mojokerto, 22 Juni 1982', 'Jabontegal - Pungging - Mojokerto', 'S2 Hukum Tata Negara - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '085649731658', NULL, 7, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(8, 'Alim Mustofa, M.Pd.', '8', '2017', 'Mojokerto, 29 Juli 1992', 'Jatijejer - Trawas - Mojokerto', 'S2 Pend. Ekonomi - STKIP PGRI Jombang', NULL, NULL, 'Guru', NULL, '087852881207', NULL, 8, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(9, 'Muhammad Ikmal Nashruddin, L.c.', '9', '2021', 'Sidoarjo, 15 Desember 1994', 'Jl. Gajah Magersari - Sidoarjo', 'S1 Syariah - Universitas  Al Azhar Mesir', NULL, NULL, 'Guru', NULL, '081314682358', NULL, 9, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(10, 'Maria Ulfa, M.Pd.', '10', '2011', 'Mojokerto, 06 Desember 1988', 'Jabontegal - Pungging - Mojokerto', 'S2 Pend. Bahasa Inggris - STKIP PGRI Sidoarjo', NULL, NULL, 'Guru', NULL, '085700112202', NULL, 10, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(11, 'Rois Rahmawan, M.Pd.', '11', '2022', 'Jombang, 30 Januari 1987', 'Krembangan - Gudo - Jombang', 'S2 Pend. Bahasa Inggris - Universitas Islam Malang', NULL, NULL, 'Guru', NULL, '081559531800', NULL, 11, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(12, 'Ahmad Fajar Efendy, S.M.', '12', '2014', 'Mojokerto, 06 April 1995', 'Jabontegal - Pungging - Mojokerto', 'S1 Manajemen - Universitas Islam Majapahit', NULL, NULL, 'Guru', NULL, '081216877627', NULL, 12, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(13, 'Zuhdiana El Ummah Fendayanti. S.E.', '13', '2022', 'Mojokerto, 14 Mei 1999', 'Banjaragung - Puri - Mojokerto', 'S1 Ekonomi Islam - Universitas Darussalam Gontor', NULL, NULL, 'Guru', NULL, '081212885356', NULL, 13, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(14, 'Sri Wahyuni, S.Pd.', '14', '2014', 'Mojokerto, 10 Juli 1985', 'Tunggalpager-Pungging-Mojokerto', 'S1 Pend. Matematika - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '08165442754', NULL, 14, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(15, 'Elva Qurrotul Afifah, S.Pd.', '15', '2017', 'Mojokerto, 16 Maret 1994', 'Warugunung - Pacet - Mojokerto', 'S1 Kimia - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '085748366402', NULL, 15, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(16, 'M. Alfian Salafie, S.H.', '16', '2023', 'Sidoarjo, 06 Oktober 1997', 'Ngoro - Ngoro - Mojokerto', 'S1 Hukum Keluarga - Universitas Kyai Abdullah Faqih Gresik', NULL, NULL, 'Guru', NULL, '081217324509', NULL, 16, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(17, 'Ahmad Khoirul Anwar, S.Pd.I.', '17', '2011', 'Blora, 03 Oktober 1993', 'Jabontegal - Pungging - Mojokerto', 'S1 Pend. Agama Islam - STAI Ar-Rosyid Surabaya', NULL, NULL, 'Guru', NULL, '085852389520', NULL, 17, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(18, 'M. Fakhrudin Naufal, S.Pd.', '18', '2019', 'Mojokerto, 20 Agustus 2001', 'Singkalan - Balung bendo - Sda', 'S1 Pend. Bahasa Inggris - STKIP PGRI Sidoarjo', NULL, NULL, 'Guru', NULL, '0881036537676', NULL, 18, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(19, 'Muh. Syafiun Nuroyn, S.Pd.', '19', '2016', 'Mojokerto, 15 Maret 1998', 'Srigading - Ngoro - Mojokerto', 'S1 Pend. Agama Islam - STIT Raden Wijaya Mojokerto', NULL, NULL, 'Guru', NULL, '081234953728', NULL, 19, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(20, 'Reni Santika, S.Pd.', '20', '2022', 'Blora, 02 Maret 2001', 'Pilang - Randublatung - Blora', 'S1 Pend. Bahasa Arab - IAIN Kediri', NULL, NULL, 'Guru', NULL, '085708324761', NULL, 20, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(21, 'Doni Andriansyah, M,Pd.', '21', '2018', 'Blora, 31 Agustus 2000', 'Pilang - Randublatung - Blora', 'S2 Pend. Agama Islam - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '082131828289', NULL, 21, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(22, 'Maftuhatun Nafi\'ah, M.Pd.', '22', '2016', 'Blora, 10 Mei 1999', 'Pilang - Randublatung - Blora', 'S2 Pend. Agama Islam - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '081249277969', NULL, 22, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(23, 'Elis Ainiyatul Muhibbah, S.Pd.', '23', '2020', 'Mojokerto, 13 Mei 2002', 'Peterongan - Bangsal - Mojokerto', 'S1 Pend. Matematika - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '082139245511', NULL, 23, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(24, 'Gusti Agung Cahyono, S.Sos., M.H.', '24', '2019', 'Mojokerto, 27 Mei 1997', 'Kesemen - Ngoro - Mojokerto', 'S2 Hukum Tata Negara - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '085748612557', NULL, 24, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(25, 'M. Qoolili Zailani, M.Pd.', '25', '2016', 'Sidoarjo, 12 Desember 1997', 'Kajeksan - Tulangan - Sidoarjo', 'S2 Pend. Agama Islam - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '082244733145', NULL, 25, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(26, 'Tofan Adityawan, M.Pd.', '26', '2020', 'Blitar, 8 Desember 1991', 'Kenanten - Puri - Mojokerto', 'S2 Pend. Matematika - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '085755742600', NULL, 26, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(27, 'Lucky Al Hafizy, M.Pd.', '27', '2020', 'Pasuruan, 23 Februari 1996', 'Candi Wates - Prigen - Pasuruan', 'S2 Pend. Ekonomi - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '0895395002810', NULL, 27, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(28, 'Yuniar Fathiyyatur Rosyida, M.E.', '28', '2023', 'Magetan, 27 Juni 1997', 'Klurahan - Kartoharjo - Magetan', 'S2 Perbankan Syariah - IAIN Ponorogo', NULL, NULL, 'Guru', NULL, '081556468557', NULL, 28, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(29, 'Muhammad Dzul Fadli, M.H.', '29', '2018', 'Sidoarjo, 24 Oktober 1999', 'Terik - Krian - Sidoarjo', 'S2 Hukum Tata Negara - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '087784792839', NULL, 29, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(30, 'Afizena, S.Pd.', '30', '2021', 'Sidoarjo, 14 Januari 2003', 'Katerungan - Krian - Sidoarjo', 'S1 Pend. Ekonomi - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '082132265704', NULL, 30, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(31, 'Mochammad Ghufron, S.Pd.', '31', '2010', 'Mojokerto, 02 Agustus 1988', 'Jabontegal - Pungging - Mojokerto', 'S1 Pend. Olahraga - Universitas PGRI Kediri', NULL, NULL, 'Guru', NULL, '08970867516', NULL, 31, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(32, 'Fadhil Muhammad', '32', '2022', 'Mojokerto, 6 Desember 2003', 'KembangRinggit - Pungging - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '087753414161', NULL, 32, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(33, 'Makhrus Ali, S.Pd.', '33', '2019', 'Pacitan, 08 Oktober 2001', 'Tlogo - Klesem - Pacitan', 'S1 Pend. Matematika - STKIP PGRI Sidoarjo', NULL, NULL, 'Guru', NULL, '081217487344', NULL, 33, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(34, 'M. Ricko Ajisaputro, M.Pd.', '34', '2020', 'Lamongan, 20 Juni 1996', 'Jl. Suromarukan - Kota Mojokerto', 'S2 Pend. Bahasa Indonesia - Universitas Dr Soetomo Surabaya', NULL, NULL, 'Guru', NULL, '085606148637', NULL, 34, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(35, 'Robbi Maulana, S.M.', '35', '2018', 'Sidoarjo, 02 Maret 2000', 'Terik - Krian - Sidoarjo', 'S1 Manajemen - Universitas Islam Majapahit', NULL, NULL, 'Guru', NULL, '083830710453', NULL, 35, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(36, 'M. Ivan Ubaidillah, S.Pd.', '36', '2020', 'Mojokerto, 28 Oktober 2001', 'Jabontegal - Pungging - Mojokerto', 'S1 Pend. Matematika - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '085655230383', NULL, 36, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(37, 'Fauzan Alim', '37', '2014', 'Mojokerto, 11 Desember 1984', 'Kepuhpandak - Kutorejo - Mojokerto', 'PP. Nurul Hidayah Al - Falah', NULL, NULL, 'Guru', NULL, '085852477225', NULL, 37, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(38, 'Muhammad Afifuddin, S.Sos.', '38', '2019', 'Mojokerto, 26 Desember 1996', 'Jedong - Ngoro - Mojokerto', 'S1 Sosiologi - Universitas Trunojoyo Madura', NULL, NULL, 'Guru', NULL, '081336291950', NULL, 38, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(39, 'Laksono Wibowo', '39', '2021', 'Tuban, 28 Agustus 2022', 'Sembungin - Bancar - Tuban', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '0881027495317', NULL, 39, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(40, 'Moh. Syafi’I, S.Pd.', '40', '2020', 'Mojokerto, 08 Oktober 2002', 'Kutogirang - Ngoro - Mojokerto', 'S1 Pend. Ekonomi - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '081358472591', NULL, 40, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(41, 'Ahmat Rifai, S.Pd.', '41', '2016', 'Blora, 27 November 1997', 'Sumber - Kradenan - Blora', 'S1 Pend. Agama Islam - STIT Raden Wijaya Mojokerto', NULL, NULL, 'Guru', NULL, '081290648220', NULL, 41, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(42, 'Warsan, S.Pd.', '42', '2013', 'Tuban, 17 Maret 1995', 'Jabontegal - Pungging - Mojokerto', 'S1 Pend. Bahasa Indonesia - Universitas Islam Majapahit', NULL, NULL, 'Guru', NULL, '088805102272', NULL, 42, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(43, 'Arif Mutamakin, S.Ag.', '43', '2016', 'Mojokerto, 29 Februari1996', 'Wates Umpak - Trowulan - Mojokerto', 'S1 Tafsir - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '085600606066', NULL, 43, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(44, 'Santi Istiqomah, S. Hum., M.Pd.', '44', '2020', 'Jombang, 7 Oktober 1995', 'Jabontegal - Pungging - Mojokerto', 'S2 Pend. Bahasa Inggris - IAIN Kediri', NULL, NULL, 'Guru', NULL, '085730787838', NULL, 44, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(45, 'Yahya Sabrawi, S.Pd.', '45', '2016', 'Lamongan, 26 Februari 1988', 'Kembangringgit - Pungging - Mojokerto', 'S1 Pend. Bahasa dan Sastra Indonesia - Univ Darul Ulum Lamongan', NULL, NULL, 'Guru', NULL, '085604054335', NULL, 45, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(46, 'Nur Jamilah, M.Pd.', '46', '2023', 'Mojokerto, 21 Januari 1988', 'Mojotamping - Bangsal - Mojokerto', 'S2 Pend. Bahasa Inggris - Universitas Islam Malang', NULL, NULL, 'Guru', NULL, '085730956621', NULL, 46, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(47, 'Dian Devina, S.Or.', '47', '2013', 'Mojokerto. 31 Januari 1990', 'Jabontegal - Pungging - Mojokerto', 'S1 Olahraga - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '085735680245', NULL, 47, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(48, 'Mohammad Anang Syahroni, S.Pd.', '48', '2020', 'Mojokerto, 12 Juni 1992', 'Tempuran - Pungging - Mojokerto', 'S1 - UM Malang', NULL, NULL, 'Guru', NULL, '085967217458', NULL, 48, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(49, 'Rina Oktafia, S.Pd.', '49', '2021', 'Sidoarjo, 13 Oktober 1997', 'Balong Macekan - Tarik - Sidoarjo', 'S1 Pend. Fisika - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '085707576910', NULL, 49, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(50, 'Dr. H. M. Amir Sholehuddin, M.Pd.I.', '50', '2024', 'Mojokerto, 7 Maret 1967', 'Kedungmalang - Sooko - Mojokerto', 'S3 Ilmu Ekonomi - UNTAG Surabaya', NULL, NULL, 'Guru', NULL, '085648256855', NULL, 50, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(51, 'Wahyuning Istikhomah, S.Pd.', '51', '2014', 'Mojokerto, 14 Juni 1982', 'Pacing - Bangsal - Mojokerto', 'S1 Pendidikan Bahasa dan Sastra Indonesia dan Daerah - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '085648644390', NULL, 51, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(52, 'Dyta Argianti, S.Pd.', '52', '2020', 'Sidoarjo, 16 Februari 1993', 'Purwojati - Ngoro - Mojokerto`', 'S1 Pend. SAINS - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '087866111018', NULL, 52, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(53, 'Fatakur Rochmah, S.Pd.', '53', '2020', 'Sidoarjo, 27 April 1997', 'Kedung Sugo - Prambon - Sidoarjo', 'S1 Pendidikan Bahasa dan Sastra Indonesia - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '08563513457', NULL, 53, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(54, 'Devi Anita Sari, S.Pd.', '54', '2021', 'Mojokerto, 24 Mei 1998', 'Balongmasin - Pungging - Mojokerto', 'S1 Pendidikan Pancasila dan Kewarganegaraan - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '085856415677', NULL, 54, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(55, 'Selina Rahmawati, S.Pd., S.Ag., M.Pd', '55', '2023', 'Mojokerto, 9 Februari 1998', 'Sekargadung - Pungging - Mojokerto', 'S2 Pend. Agama Islam - UIN Maulana Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '085604490399', NULL, 55, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(56, 'H. Moh. Yahya Hambali', '56', '2014', 'Pasuruan, 04 Oktober 1963', 'Kauman - Mojosari - Mojokerto', 'MA Salafiyah Pasuruan', NULL, NULL, 'Guru', NULL, '081235916557', NULL, 56, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(57, 'Nur Rif\'atus Sholichah, S.Pd.', '57', '2020', 'Sidoarjo, 13 Mei 2001', 'Seketi - Balongbendo - Sidoarjo', 'S1 Pend. Bahasa Inggris - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '088216993273', NULL, 57, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(58, 'Mohammad Salman Alfarizi, S.Ak., M.E.', '58', '2022', 'Surabaya, 10 Februari 1998', 'Jemursari - Wonocolo - Surabaya', 'S2 Ekonomi Syariah - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '085855756629', NULL, 58, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(59, 'Muhammad Anshori Hidayat, S.Pd.', '59', '2019', 'Mojokerto, 26 November 2000', 'Jabontegal - Pungging - Mojokerto', 'S1 Pend. Matematika - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '081230326895', NULL, 59, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(60, 'Dwi Andini Putri, S.Pd.', '60', '2020', 'Mojokerto, 10 Agustus 2001', 'Jabontegal - Pungging - Mojokerto', 'S1 Pend. Matematika - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '087857085034', NULL, 60, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(61, 'Moch. Hasan Bisri, S.M.', '61', '2023', 'Sidoarjo, 29 November 1997', 'Jenggot - Krembung - Sidoarjo', 'S1 Manajemen Ekonomi - STIKK Annur 2 Malang', NULL, NULL, 'Guru', NULL, '081459159372', NULL, 61, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(62, 'Muhammad Slamet, S.Pd.I.', '62', '2020', 'Pasuruan, 22 Agustus 1979', 'Sumber Rejo - Pandaan - Pasuruan', 'S1 Pend. Agama Islam - STAI Salahudin Pasuruan', NULL, NULL, 'Guru', NULL, '085755882346', NULL, 62, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(63, 'Firman Ade Saputra, S.Pd.', '63', '2020', 'Mojokerto, 11 Februari 2002', 'Bangsal - Bangsal - Mojokerto', 'S1 Pend. Ekonomi - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '08970898726', NULL, 63, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(64, 'Siti Lailatul Isnaini, S.Pd.', '64', '2021', 'Mojokerto, 6 Desember 1999', 'Kedunguneng - Bangsal - Mojokerto', 'S1 Pend. Bahasa Arab - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '085645145182', NULL, 64, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(65, 'Solikhan', '65', '2024', 'Tuban, 1 Agustus 1993', 'Modangan - Sooko - Mojokerto', 'MA Nurul Ulum', NULL, NULL, 'Guru', NULL, '081252318690', NULL, 65, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(66, 'Nurul Hidayatul Jannah, S.Pd.', '66', '2018', 'Sidoarjo, 17 Agustus 2000', 'Sumbangsri - Ngoro - Mojokerto', 'S1 Pend. Matematika - STKIP PGRI Sidaorajo', NULL, NULL, 'Guru', NULL, '082338276867', NULL, 66, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(67, 'Dian Riski Adiatama, M.Si.', '67', '2021', 'Mojokerto, 8 Desember 1994', 'Kecapangan - Ngoro - Mojokerto', 'S2 Biologi - Universitas Brawijaya Malang', NULL, NULL, 'Guru', NULL, '085791416896', NULL, 67, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(68, 'Muhammad Ajyad Jihadiy, M.Pd.', '68', '2024', 'Sidoarjo, 19 April 1996', 'Mancat - Peterongan - Jombang', 'S2 Pendidikan Bahasa Arab - Universitas Islam Negeri Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '085806802317', NULL, 68, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(69, 'Ghulam Muhammad Ridho, S.Pd.', '69', '2023', 'Lamongan, 31 juli 1997', 'Mojodadi - Kedungpring - Lamongan', 'S1 Pend. Bahasa Arab - UIN Maulana Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '081358942641', NULL, 69, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(70, 'Mohamad Zahrudin Sahri, M.E.', '70', '2023', 'Tegal, 25 Oktober 1993', 'Mintaragen - Tegal Timur - Tegal', 'S2 - UIN Sunan Kalijogo Yogyakarta', NULL, NULL, 'Guru', NULL, '085156675303', NULL, 70, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(71, 'Indra Jayantie, S.Pd.', '71', '2013', 'Mojokerto, 07 Januari 1989', 'Mojosulur - Mojosari - Mojokerto', 'S1 Pendidikan Bahasa dan Sastra Indonesia - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '081249667773', NULL, 71, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(72, 'Misbahul Anam, S.Pd.', '72', '2019', 'Mojokerto, 06 Maret 1991', 'Purworejo - Pungging - Mojokerto', 'S1 Pendidikan Jasmani Kesehatan dan Rekreasi - Univ Nusantara PGRI Kediri', NULL, NULL, 'Guru', NULL, '085733851310', NULL, 72, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(73, 'Alfi Sukriyanto Putra R., S.Pd.', '73', '2020', 'Surabaya, 9 Oktober 1991', 'Tanjungsari - Sukomanunggal - Mojokerto', 'S1 Pend. Ekonomi - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '085645637511', NULL, 73, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(74, 'Moch. Hisbul Ansor, S.Pd.', '74', '2022', 'Tulungagung, 28 Mei 2000', 'Griya Jetis Permai - Jetis - Mojokerto', 'S1 Pend. Matematika - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '08983882397', NULL, 74, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(75, 'Wijayanto, S.Pd.', '75', '2019', 'Blora, 23 Juni 2000', 'Pilang - Randublatung - Blora', 'S1 Pend. Matematika - STKIP PGRI Sidoarjo', NULL, NULL, 'Guru', NULL, '0881036505340', NULL, 75, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(76, 'Ainun Najih, M.Pd.', '76', '2021', 'Lamongan, 13 Juli 1995', 'Tawangrejo - Turi - Lamongan', 'S2 - Universiyas Negeri Yogyakarta', NULL, NULL, 'Guru', NULL, '081226467723', NULL, 76, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(77, 'Setiawan Budi, M.Pd.', '77', '2019', 'Gresik, 30 November 1993', 'Tunggalpager - Pungging - Mojokerto', 'S2 - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '085815812434', NULL, 77, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(78, 'Niki Laila Sari, M.Pd.', '78', '2021', 'Mojokerto, 11 Oktober 1995', 'Wonodadi - Kutorejo - Mojokerto', 'S2 - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '081251366797', NULL, 78, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(79, 'M. Naufal Fahmi, M.Pd.', '79', '2021', 'Mojokerto, 8 Juni 1996', 'Kepuhpandak - Kutorejo - Mojokerto', 'S2 - Universitas Negeri Yogyakarta', NULL, NULL, 'Guru', NULL, '085708008090', NULL, 79, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(80, 'Rifatuz Zumroh Ning Tyas, S.Pd.', '80', '2016', 'Mojokerto, 7 Juni 1998', 'Jabontegal - Pungging - Mojokerto', 'S1 Pend. Agama Islam - STIT Raden Wijaya Mojokerto', NULL, NULL, 'Guru', NULL, '085657275582', NULL, 80, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(81, 'Firda Nur Alfiyanti, S.Pd.', '81', '2020', 'Mojokerto, 01 Juli 2002', 'Mojosulur - Mojosari - Mojokerto', 'S1 - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '083847807085', NULL, 81, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(82, 'Silpi Nur Laili, S.Pd.', '82', '2019', 'Mojokerto, 17 Januari 2001', 'Jabontegal - Pungging - Mojokerto', 'S1 Pend. Matematika - STKIP PGRI Sidoarjo', NULL, NULL, 'Guru', NULL, '081216322842', NULL, 82, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(83, 'Wulanita Firdaus, S.Pd.', '83', '2020', 'Jombang, 2 Agustus 2001', 'Terik - Krian - Sidoarjo', 'S1 - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '088230534121', NULL, 83, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(84, 'Ana Fidyanti Aulia, S.Pd.', '84', '2020', 'Mojokerto, 9 Oktober 1995', 'Jabontegal - Pungging - Mojokerto', 'S1 Pend. Agama Islam - STIT Raden Wijaya Mojokerto', NULL, NULL, 'Guru', NULL, '085850792457', NULL, 84, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(85, 'Prasetyo Suhariyanto, S.Ak.', '85', '2022', 'Sidoarjo, 18 Juli 1998', 'Kedung Bocok - Tarik - Sidoarjo', 'S1 Akuntansi - Universitas Trunojoyo Madura', NULL, NULL, 'Guru', NULL, '085792743316', NULL, 85, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(86, 'M. Khamim Ghozali, S.Pd.', '86', '2020', 'Mojokerto, 12 April 2002', 'Ngestemi - Bangsal - Mojokerto', 'S1 Pend. Matematika - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '088989987668', NULL, 86, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(87, 'Suwindri Novita Sari, S.Pd.', '87', '2021', 'Blora, 25 Januari 2004', 'Pilang - Randublatung - Blora', 'S1 Pend. Ekonomi - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '081232717292', NULL, 87, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(88, 'Imroatus Salamah, S.Pd.', '88', '2020', 'Sidoarjo, 14 Oktober 2001', 'Terik - Krian - Sidoarjo', 'S1 Pend. Bahasa Inggris - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '0881026004431', NULL, 88, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(89, 'M. Ainur Rokhman Wahid, S.Pd.', '89', '2020', 'Mojokerto, 8 Mei 2001', 'Kutogirang - Ngoro - Mojokerto', 'S1 Pend. Matematika - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '085895728715', NULL, 89, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(90, 'M. Umar Faruq, S.Pd.', '90', '2019', 'Mojokerto, 01 Agustus 2000', 'Ngastemi - Bangsal - Mojokerto', 'S1 Pend. Matematika - STKIP PGRI Sidoarjo', NULL, NULL, 'Guru', NULL, '08819527321', NULL, 90, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(91, 'M. Firdaus, S.Pd.', '91', '2021', 'Jombang, 22 April 2003', 'Plosokerep - Sumobito - Jombang', 'S1 Pend. Matematika - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '081232717707', NULL, 91, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(92, 'Aji Rizki Agung, S.Pd.', '92', '2017', 'Sidoarjo, 01 Oktober 1998', 'Cemandi - Sedati - Sidoarjo', 'S1 Pend. Agama Islam - STIT Raden Wijaya Mojokerto', NULL, NULL, 'Guru', NULL, '08133779308', NULL, 92, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(93, 'Fahmi Arrijal Baihaqi, S.Pd.', '93', '2021', 'Surabaya, 29 Maret 2003', 'Gebang - Sidoarjo - Sidoarjo', 'S1 Pend. Matematika - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '081252842582', NULL, 93, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(94, 'Subata Nasriyah, S.Pd.', '94', '2020', 'Mojokerto, 13 September 2001', 'Brangkal - Suko - Mojokerto', 'S1 Pend. Bahasa Inggris - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '085232491249', NULL, 94, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(95, 'M. Ja\'far Shodiq', '95', '2022', 'Mojokerto, 07 Mei 2004', 'Brangkal - Sooko - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081231287636', NULL, 95, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(96, 'Fuat Dedi Hermawan, S.Kom.', '96', '2017', 'Surabaya, 02 Juni 1985', 'Magersari - Kota Mojokerto', 'S1 Teknik Informatika - Universitas 17 Agustus Surabaya', NULL, NULL, 'Guru', NULL, '085790979993', NULL, 96, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(97, 'Ery Ferdianto, S.Pd.', '97', '2021', 'Sidoarjo, 8 Februari 2022', 'Bendotretek - Prambon - Sidoarjo', 'S1 Pend. Ekonomi - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '0881036146066', NULL, 97, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(98, 'Mochammad Elca Ciko Norcahyo, S.Pd.', '98', '2021', 'Sidoarjo, 02 Juli 2003', 'Janti - Tarik - Sidoarjo', 'S1 Pend. Bahasa Inggris - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '0882009848811', NULL, 98, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(99, 'H. Ahmad Hakiki khoirul Anwar, S.Pd.', '99', '2017', 'Sidoarjo, 28 Juli 1999', 'Terik - Krian - Sidoarjo', 'S1 Pend. Matematika - STKIP PGRI Sidoarjo', NULL, NULL, 'Guru', NULL, '085155214343', NULL, 99, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(100, 'M. Maulana Rizky, S.Pd.', '100', '2022', 'Kediri, 29 Mei 2003', 'Kramatjegu - Taman - Sidoarjo', 'S1 Pend. Ekonomi - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '089612037020', NULL, 100, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(101, 'Widya Febriyanti, S.Pd.', '101', '2010', 'Mojokerto, 14 Februari 1987', 'Seduri - Mojosari - Mojokerto', 'S1 Pend. Fisika - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '085755547474', NULL, 101, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(102, 'Fera Puji Rahayu, S.Pd.', '102', '2021', 'Mojokerto, 25 Februari 1989', 'Pacet Barat - Pacet - Mojokerto', 'S1 Pend. SAINS - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '081331620255', NULL, 102, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(103, 'Sita Fatimah Zahro, S.Pd.', '103', '2021', 'Sidoarjo, 02 Juli 1999', 'Tanjungsari - Taman - Sidoarjo', 'S1 Pend. Kimia - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '081554820940', NULL, 103, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(104, 'M. Wildani Futukhi, A.Md.', '104', '2020', 'Mojokerto, 25 September 1990', 'Sampangagung - Kutorejo - Mojokerto', 'D3 Komputer Multimedia - STT STIKMA Malang', NULL, NULL, 'Guru', NULL, '081357072741', NULL, 104, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(105, 'Sari Rahma Putri, S.Pd.', '105', '2017', 'Pasuruan, 23 November 1992', 'Balongmasin - Pungging - Mojokerto', 'S1 Pend. Biologi - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '081336704484', NULL, 105, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(106, 'Nimatul Ulya, S.S.', '106', '2022', 'Peninjauan, 12 Juni 1992', 'Cempokolimo - Pacet - Mojokerto', 'S1 Sastra Inggris - Universitas Islam Negeri Malang', NULL, NULL, 'Guru', NULL, '085755660563', NULL, 106, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(107, 'Rohmatun Alifiyatuz Zahro, S.Pd.', '107', '2022', 'Sidoarjo, 9 April 2004', 'Kepadangan - Tulangan - Sidoarjo', 'S1 Pend. Bahasa Inggris - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '08819527193', NULL, 107, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(108, 'Wilda Qonita,S.Pd, M.Pd.', '108', '2019', 'Surabaya, 09 Oktober 1991', 'Belahantengah - Mojosari - Mojokerto', 'S2 Pend. Matematika - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '085792736216', NULL, 108, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(109, 'Febricha Paramitha, S.Pd.', '109', '2022', 'Sidoarjo, 21 Februari 1998', 'Perum GKR - Krian - Sidoarjo', 'S1 Pendidikan Bahasa dan Sastra Indonesia - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '085707060267', NULL, 109, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(110, 'Tarissa Ulfi Maulina, Lc.', '110', '2024', 'Sidoarjo, 19 Januari 2001', 'Barengkrajan - Krian - Sidoarjo', 'S1 Syariah Islamiyyah - Universitas Al-Azhar Kairo Mesir', NULL, NULL, 'Guru', NULL, '0856 0712 4429', NULL, 110, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(111, 'Mochamat Rouf Harianto, S.Pd.', '111', '2015', 'Mojokerto, 30 Mei 1991', 'Kembangsri - Ngoro - Mojokerto', 'S1 Pend. Matematika - Universitas Kanjuruan Malang', NULL, NULL, 'Guru', NULL, '085755198259', NULL, 111, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(112, 'Vinny Dhenada Kautsar, S.Pd.', '112', '2019', 'Mojokerto, 30 April 1994', 'Kembangringgit - Pungging - Mojokerto', 'S1 Pend. Sejarah - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '082339945185', NULL, 112, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(113, 'Dewi Anita, S.Pd.', '113', '2021', 'Mojokerto, 6 Maret 2002', 'Tambakagung - Puri - Mojokerto', 'S1 Pend. Matematika - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '0881036137682', NULL, 113, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(114, 'M. Adi Purnomo, S.Pd.I.', '114', '2011', 'Mojokerto, 25 Januari 1993', 'Jabontegal - Pungging - Mojokerto', 'S1 Pend. Agama Islam - Universitas Islam Mojopahit', NULL, NULL, 'Guru', NULL, '085334621616', NULL, 114, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(115, 'Siti Kholifatur Rosidah, S.Pd.', '115', '2019', 'Sidoarjo, 30 Mei 2000', 'Gedang Rowo - Prambon - Sidoarjo', 'S1 Pend. Sejarah - STKIP PGRI Sidoarjo', NULL, NULL, 'Guru', NULL, '082331060982', NULL, 115, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(116, 'Sendri Setya Budi, S.Pd.', '116', '2020', 'Gresik, 17 Juni 1997', 'Tenaru - Driyorejo - Gresik', 'S1 Pend. Matematika - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '081230211389', NULL, 116, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(117, 'Madinatuz Zahro, S.Pd.', '117', '2021', 'Mojokerto, 16 Juni 2002', 'Srigading -Ngoro - Mojokerto', 'S1 Pend. Matematika - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '082142040132', NULL, 117, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(118, 'Arifatu Musyayadah, S.Pd.', '118', '2020', 'Mojokerto, 06 Agustus 2001', 'Pekukuhan - Mojosari - Mojokerto', 'S1 Pend. Ekonomi - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '085646529586', NULL, 118, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(119, 'Asmaul Khoiria, S.Pd.', '119', '2020', 'Sidoarjo, 3 November 2001', 'Sukodani - Balongbendo - Sidoarjo', 'S1 Pend. Matematika - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '088289113029', NULL, 119, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(120, 'Khotimatul Fauziyah Darsono', '120', '2022', 'Mojokerto, 7 April 2004', 'Kutogirang - Ngoro - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085748325318', NULL, 120, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(121, 'Rizki Nur Saputri, S.Pd.', '121', '2021', 'Mojokerto, 18 September 2002', 'Mojorejo - Pungging - Mojokerto', 'S1 Pend. Bahasa Inggris - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '082140728386', NULL, 121, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(122, 'Abdul Najib Tantowi, S.Pd.I.', '122', '2021', 'Mojokerto, 12 Maret 1984', 'Jabontegal - Pungging - Mojokerto', 'S1 Pend. Agama Islam - Universitas Yudharta Pasuruan', NULL, NULL, 'Guru', NULL, '085290655555', NULL, 122, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(123, 'Yusril Fahmi, M.Pd.', '123', '2018', 'Mojokerto, 10 Oktober 1999', 'Brangkal - Sooko - Mojokerto', 'S2 Pend. Agama Islam - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '082231942642', NULL, 123, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(124, 'Lailatul Musyarofah, S.Pd.', '124', '2016', 'Mojokerto, 23 Januari 1998', 'Jabontegal - Pungging - Mojokerto', 'S1 Pend. Agama Islam - STIT Raden Wijaya Mojokerto', NULL, NULL, 'Guru', NULL, '082228177769', NULL, 124, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(125, 'Shofiyatul Udroh Sugiarto, S.Pd.', '125', '2020', 'Sidoarjo, 23 November 2001', 'Terik - Krian - Sidoarjo', 'S1 Pend. Ekonomi - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '088989987935', NULL, 125, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(126, 'M. Ifan Nur Ramadhani', '126', '2022', 'Mojokerto, 23 November 2003', 'Gununggangsir - Beji - Pasuruan', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, '082331223854', NULL, 126, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(127, 'Naufal Ahmad Al Farizi', '127', '2024', 'Sidoarjo, 8 Januari 2006', 'Ponokawan - Krian - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, '085649553796', NULL, 127, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(128, 'M. Toyibu, S.Pd.I.', '128', '2020', 'Sidoarjo, 03 Februari 1978', 'Kramatjegu - Taman - Sidoarjo', 'S1 Pend. Madrasah Ibtidaiyah - IAIN Surabaya', NULL, NULL, 'Guru', NULL, '0895621138153', NULL, 128, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(129, 'H. Abdul Wahib, ST.', '129', '2024', 'Sidoarjo, 12 April 1967', 'Terik - Krian - Sidoarjo', 'S1 Teknik - Universitas Terbuka', NULL, NULL, 'Guru', NULL, '081939039383', NULL, 129, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(130, 'dr. H. Rohmatun Naja, M. Kes.', '130', '2021', 'Gresik, 17 Agustus 1982', 'Griya Pekukuhan - Mojosari - Mojokerto', 'S2 - Manajemen Rumah Sakit', NULL, NULL, 'Guru', NULL, '081332261631', NULL, 130, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(131, 'Nanang Fauzi, S.E.', '131', '2021', 'Mojokerto, 17 April 1980', 'Kauman - Mojosari - Mojokerto', 'S1 - Manajemen', NULL, NULL, 'Guru', NULL, '08746593597', NULL, 131, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(132, 'Anang Fatkhurrozi, M.Pd.', '132', '2021', 'Jombang, 27 Januari 1984', 'Pejangkungan - Prambon - Sidoarjo', 'S2 Pend. Bahasa Inggris - Universitas Islam Malang', NULL, NULL, 'Guru', NULL, '085655585541', NULL, 132, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(133, 'Muhammad Bagus Afifudin', '133', '2022', 'Sidoarjo, 7 Maret 2004', 'Sebani - Tarik - Sidoarjo', 'SMK Nurul Islam', NULL, NULL, 'Guru', NULL, '08977488024', NULL, 133, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(134, 'Hafizh Hilmy Ramadhany, S.Pd.', '134', '2021', 'Mojokerto, 3 November 2003', 'Belahantengah - Mojosari - Mojokerto', 'S1 Pend. Matematika - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '081233978226', NULL, 134, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(135, 'Khotibul Umam', '135', '2022', 'Bangkalan, 12 Desember 2003', 'Gempol Joyo - Gempol - Pasuruan', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085850620015', NULL, 135, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(136, 'Ahmad Hilmi Mujtaba, S.Pd.', '136', '2021', 'Sidoarjo, 1 Maret 2003', 'Kedungcangkring - Jabon - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081374739263', NULL, 136, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(137, 'Akmal Fadhili, S.Pd.', '137', '2019', 'Pacitan, 30 September 2000', 'Klesem - Kebon Agung - Pacitan', 'S1 Pend. Sejarah - STKIP PGRI Sidoarjo', NULL, NULL, 'Guru', NULL, '081357271094', NULL, 137, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(138, 'Siti Afrina Afifatul Mawardah, S.Pd.', '138', '2021', 'Blora, 15 Juli 2005', 'Pilang - Randublatung - Blora', 'S1 Pend. Bahasa Inggris - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '081252836672', NULL, 138, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(139, 'M. Faiz Nasrulloh, S.Pd.', '139', '2020', 'Sidoarjo, 30 Maret 2002', 'Tulangan - Tulangan - Sidoarjo', 'S1 Pend. Ekonomi - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '088804942824', NULL, 139, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(140, 'Achmad Maulana Hanafi', '140', '2023', 'Magetan, 16 Juli 2004', 'Milangasri - Panekat - Magetan', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '082139189821', NULL, 140, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(141, 'M. Arwani Majid', '141', '2024', 'Mojokerto, 1 Maret 2006', 'Ngastemi - Bangsal - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 141, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(142, 'Yones Putra Herlambang', '142', '2025', 'Mojokerto, 15 Mei 2006', 'Ngastemi - Bangsal - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 142, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(143, 'dr. Uswatun Hasanah', '143', '2023', 'Mojokerto, 4 September 1993', 'Tempuran - Pungging - Mojokerto', 'Profesi Dokter Umum', NULL, NULL, 'Guru', NULL, '081252089093', NULL, 143, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(144, 'drg. Tegaryanti Ik Fitria', '144', '2022', 'Mojokerto, 15 April 1991', 'Modopuro - Mojosari - Mojokerto', 'Profesi Dokter Gigi', NULL, NULL, 'Guru', NULL, '081235347646', NULL, 144, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(145, 'Wartini, A.Md. Kep.', '145', '2023', 'Mojokerto  3 Januari 1983', 'Kuripan - Pacet - Mojokerto', 'D3 Keperawatan', NULL, NULL, 'Guru', NULL, '085856182017', NULL, 145, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(146, 'Nurul Istifaiyah S.Kep., Ners', '146', '2022', 'Mojokerto, 10 Januari 1997', 'Purworejo - Pungging - Mojokerto', 'Profesi Ners', NULL, NULL, 'Guru', NULL, '0816599391', NULL, 146, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(147, 'Moh Aminuddin Aziz, Skep.,Ners', '147', '2021', 'Mojokerto, 30 April 1978', 'Seduri - Mojosari - Mojokerto', 'S1 Keperawatan', NULL, NULL, 'Guru', NULL, '08121764055', NULL, 147, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(148, 'Sastro Rujiono Skep.,Ners', '148', '2021', 'Mojokerto, 21 Januari 1981', 'Jelak - Pungging - Mojokerto', 'S1 Keperawatan', NULL, NULL, 'Guru', NULL, '082244574081', NULL, 148, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(149, 'Sri Wahyu Indah, A.Md.Kep', '149', '2021', 'Mojokerto, 03 Juli 1996', 'Balongmasin - Pungging - Mojokerto', 'D3 Keperawatan', NULL, NULL, 'Guru', NULL, '085785196366', NULL, 149, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(150, 'Aji Prasojo Gunawan, Skep.,Ners', '150', '2025', 'Mojokerto, 16 Maret 2000', 'Menanggal - Mojosari - Mojokerto', 'S1 Keperawatan', NULL, NULL, 'Guru', NULL, '082139149410', NULL, 150, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(151, 'Yulinah, S.Si., M.Pd.', '151', '2018', 'Mojokerto, 28 Februari 1982', 'Kedungmungal - Pungging - Mojokerto', 'S2 - STKIP PGRI Jombang', NULL, NULL, 'Guru', NULL, '082337420080', NULL, 151, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(152, 'Masobihul Abror, M.Pd.', '152', '2019', 'Mojokerto, 11 Februari 1990', 'Belahantengah - Mojosari - Mojokerto', 'S2 - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '085730043199', NULL, 152, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(153, 'Irene Rosalina, M.Pd.', '153', '2021', 'Mojokerto, 24 Februari 1987', 'Gempolkerep - Gedeg - Mojokerto', 'S2 - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '085791409514', NULL, 153, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(154, 'Nisak Nirmala Rosy, M.Pd.', '154', '2022', 'Nganjuk, 22 Desember 1990', 'Perum CSE - Kota Mojokerto', 'S2 - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '085852383469', NULL, 154, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(155, 'Ahmadah Faasichah, M.Pd.', '155', '2022', 'Sidoarjo, 8 Maret 1992', 'Sekargadung - Pungging - Mojokerto', 'S2 - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '085706481645', NULL, 155, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(156, 'Nabila Zatadini, SE., M.H.', '156', '2022', 'Surabaya, 30 Januari 1996', 'Griya Permata - Candi - Sidoarjo', 'S2 - Universitas Darussalam Gontor', NULL, NULL, 'Guru', NULL, '081238585101', NULL, 156, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(157, 'M. Dendi Abdul Nasir, M.E.', '157', '2022', 'Jombang, 23 Januari 1998', 'Tengaran - Peterongan - Jombang', 'S2 - UIN Sunan Kalijogo Yogyakarta', NULL, NULL, 'Guru', NULL, '081615813328', NULL, 157, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(158, 'Hamidah Salam, M.Sc., TESOL.', '158', '2022', 'Martapura, 27 Maret 1997', 'Sooko - Sooko - Mojokerto', 'S2 - University of Glasgow Scotland', NULL, NULL, 'Guru', NULL, '085790255242', NULL, 158, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(159, 'M. Hasan. S. R. S.Sos., M.P.A.', '159', '2022', 'Mojokerto, 6 Juli 1995', 'Dinoyo - Jatirejo - Mojokerto', 'S2 - Universitas Gajah Mada', NULL, NULL, 'Guru', NULL, '085607505599', NULL, 159, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(160, 'Ashif Jauhar Winarto, M.E.', '160', '2023', 'Lamongan, 3 Juli 1998', 'Sido Kumpul - Lamongan', 'S2 - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '085862965140', NULL, 160, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(161, 'Arfi Wahyu Nur Karim, M.Pd.', '161', '2023', 'Pasuruan, 9 Juli 1990', 'Kebonrejo - Grati - Pasuruan', 'S2 - Universitas Surabaya', NULL, NULL, 'Guru', NULL, '085899994258', NULL, 161, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(162, 'Azhar Kholifah, M.Pd.', '162', '2023', 'Ponorogo, 14 November 1997', 'Gunungsari - Mlarak - Ponorogo', 'S2 - UIN Sunan Kalijogo Yogyakarta', NULL, NULL, 'Guru', NULL, '081939182553', NULL, 162, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(163, 'Ani Tuti Aswati, M.Pd.', '163', '2023', 'Jombang, 16 Agustus 1992', 'Bakalan Rayung - Kudu - Jombang', 'S2 - UNHASY Jombang', NULL, NULL, 'Guru', NULL, '085736340726', NULL, 163, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(164, 'Iffana Fitrotul Aaidati, M.Pd.', '164', '2023', 'Tuban, 19 Maret 1996', 'Bancar - Bancar - Tuban', 'S2 - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '081213408922', NULL, 164, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(165, 'M. Marjuki Duwila, M.Pd.', '165', '2023', 'Sanana, 1 April 1993', 'Sumbermulyo - Jogoroto - Jombang', 'S2 - UIN Sunan Kalijogo Yogyakarta', NULL, NULL, 'Guru', NULL, '085220041647', NULL, 165, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(166, 'Ahmad Basuni, M.M.', '166', '2023', 'Mojokerto, 8 Februari 1976', 'Jotangan - Mojosari - Mojokerto', 'S2 - STIE Mahardika Surabaya', NULL, NULL, 'Guru', NULL, '085648110900', NULL, 166, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(167, 'Errina Usman, M.Pd.', '167', '2023', 'Sidoarjo, 19 Januari 1995', 'Kebonsari - Candi - Sidoarjo', 'S2 - UIN Walisongo Semarang', NULL, NULL, 'Guru', NULL, '085732305737', NULL, 167, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(168, 'Tya Asih Dayu Purwitasari, M.Hum.', '168', '2023', 'Mojokerto, 17 Januari 1996', 'Sadartengah - Mojoanyar - Mojokerto', 'S2 - UGM Yogyakarta', NULL, NULL, 'Guru', NULL, '085655800887', NULL, 168, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(169, 'Nurus Syamsiah Furotun, S.S., M.Pd.', '169', '2023', 'Mojokerto, 13 Juli 1995', 'Belahantengah - Mojosari - Mojokerto', 'S2 - Universitas Islam Malang', NULL, NULL, 'Guru', NULL, '085648908666', NULL, 169, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(170, 'Dr. H. Masruchan, M.Pd.I.', '170', '2024', 'Mojokerto, 16 Juli 1969', 'Banjaragung - Puri - Mojokerto', 'S3 Pend. Agama Islam - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, NULL, NULL, 170, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(171, 'Moh. Ikhya Ulumuddin Al Hikam, M.Ag.', '171', '2025', 'Pasuruan, 22 Juli 1999', 'Winong - Gempol - Pasuruan', 'S2 IAT - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '082231302730', NULL, 171, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(172, 'Isnaini Maulidatu Nisa\', M.E.', '172', '2025', 'Lamongan, 19 Juni 2000', 'Gintungan - Kembangbahu - Lamongan', 'S2 Ekonomi Syariah - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '081326596643', NULL, 172, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(173, 'Fanidaus Sholikhah Hari Pristyandini, M.E.', '173', '2025', 'Sidoarjo, 28 Juni 1997', 'Gununggangsir - Beji - Pasuruan', 'S2 Perbankan Syariah - UIN Syarif Hidayatullah Jakarta', NULL, NULL, 'Guru', NULL, '085733992124', NULL, 173, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(174, 'Ratna Sari, M.E.', '174', '2025', 'Magetan, 9 November 1998', 'Gulun -  Maospati - Magetan', 'S2 Ekonomi Syariah - UIN Sunan Kalijaga Yogyakarta', NULL, NULL, 'Guru', NULL, '0895329234289', NULL, 174, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(175, 'Basri Mustofa, S.Pd.', '175', '2010', 'Mojokerto, 20 Juni 1984', 'Sukorejo - Ngoro - Mojokerto', 'S1 Pend. Agama Islam - STIT Raden Wijaya Mojokerto', NULL, NULL, 'Guru', NULL, '0895354788886', NULL, 175, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(176, 'Abdul Majid, S.Pd.', '176', '2010', 'Mojokerto, 17 Juni 1974', 'Jabontegal - Pungging - Mojokerto', 'S1 Pend. Agama Islam - Universitas Darul Ulum Jombang', NULL, NULL, 'Guru', NULL, '082336647569', NULL, 176, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(177, 'Miftahul Irfan, S.Pd.', '177', '2012', 'Malang, 29 Juli 1985', 'Jabontegal - Pungging - Mojokerto', 'S1 Pend. Agama Islam - Universitas Raden Rahmat Malang', NULL, NULL, 'Guru', NULL, '081234999414', NULL, 177, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(178, 'Rizki Estu Amelia, S.Pd', '178', '2015', 'Mojokerto, 30 Oktober 1993', 'Sumbertanggul - Mojosari - Mojokerto', 'S1 Pend. Matematika - Universitas Muhammadiyah Malang', NULL, NULL, 'Guru', NULL, '085655292952', NULL, 178, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(179, 'M. Saiful, S.Kom.', '179', '2016', 'Sidoarjo, 2 Februari 1994', 'Krikilan - Driyorejo - Gersik', 'S1 Teknik Informatika - UNDAR Jombang', NULL, NULL, 'Guru', NULL, '085730621969', NULL, 179, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(180, 'Dwi Yulianti, S.Pd.', '180', '2017', 'Mojokerto, 29 Juli 1991', 'Watukenongo - Punggingg - Mojokerto', 'S1 Pend. Bahasa Inggris - Universitas Kanjuruan Malang', NULL, NULL, 'Guru', NULL, '082131717073', NULL, 180, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(181, 'Maya Lailatul Fitriah, S.Kom.', '181', '2017', 'Mojokerto, 17 Maret 1993', 'Ngembeh - Dlanggu - Mojokerto', 'S1 Teknik Informatika - UNDAR Jombang', NULL, NULL, 'Guru', NULL, '085869236502', NULL, 181, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(182, 'Maylinda Nurfadilah, S.Pd.', '182', '2017', 'Mojokerto, 21 Desember 1994', 'Kembangringgit - Pungging - Mojokerto', 'S1 Pend. IPS - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '081584648494', NULL, 182, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(183, 'Mokhamad Syafi’il Anam, S.Pd.', '183', '2017', 'Mojokerto, 3 Juli 1991', 'Jatilangkung - Pungging - Mojokerto', 'S1 Pend. Geografi - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '082225716100', NULL, 183, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(184, 'Silvia Umala, S.Pd.', '184', '2017', 'Sidoarjo, 14 Juni 1993', 'Seduri - Balongbendo - Sidoarjo', 'S1 Pend. Matematika - Universitas Jember', NULL, NULL, 'Guru', NULL, '085731487301', NULL, 184, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(185, 'Siti Nur Saidah, S.Pd.I.', '185', '2017', 'Mojokerto, 21 Juli 1986', 'Kaligoro - Kutorejo - Mojokerto', 'S1 Pend. Agama Islam - STIT Uluwiyah Mojosari', NULL, NULL, 'Guru', NULL, '083839007798', NULL, 185, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(186, 'Yuly Diyan Nur Fajriyah, S.Pd.', '186', '2017', 'Gresik, 1 Juli 1993', 'Awang Awang - Mojosari - Mojokerto', 'S1 Pend. Biologi - Universitas Negeri Jember', NULL, NULL, 'Guru', NULL, '089522146999', NULL, 186, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(187, 'Ahmad Taudinu. S.Pd.', '187', '2018', 'Blora, 05 Juni 2000', 'Pilang - Randublatung - Blora', 'S1 Pend. Sejarah - STKIP PGRI Sidoarjo', NULL, NULL, 'Guru', NULL, '085334057675', NULL, 187, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(188, 'Iwan Budianto, S.Pd.', '188', '2018', 'Mojokerto, 21 Februari 1999', 'Watesumpak - Trowulan - Mojokerto', 'S1 Pend. Sejarah - STKIP PGRI Sidoarjo', NULL, NULL, 'Guru', NULL, '089680787400', NULL, 188, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(189, 'Titin Hamidah, S.Pd.', '189', '2018', 'Gresik, 23 September 1993', 'Karangrejo - Ujungpangkah - Gresik', 'S1 Pend. Agama Islam - IAI Qomaruddin Gresik', NULL, NULL, 'Guru', NULL, '085815964293', NULL, 189, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(190, 'M. Masrukhan, S.Si.', '190', '2019', NULL, 'Terik - Krian - Sidoarjo', 'S1 Biologi - Universitas Adibuana Surabaya', NULL, NULL, 'Guru', NULL, NULL, NULL, 190, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(191, 'A. Mussabich Magfuron, S.Pd.', '191', '2019', 'Mojokerto, 28 Juli 2000', 'Jerukgamping - Krian - Mojokerto', 'S1 Pend. Matematika - STKIP PGRI Sidoarjo', NULL, NULL, 'Guru', NULL, '082330678401', NULL, 191, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(192, 'Aam Arrahman Ikhramsyah, S.Pd.', '192', '2019', 'Mojokerto, 26 Agustus 1994', 'Jatilangkung - Pungging - Mojokerto', 'S1 Pend. Bahasa Inggris - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '089677744873', NULL, 192, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(193, 'Abdullah Nashir, S.Pd.', '193', '2019', 'Blora, 20 November 2001', 'Pilang - Randublatung - Blora', 'S1 Pend. Matematika - STKIP PGRI Sidoarjo', NULL, NULL, 'Guru', NULL, '0882009658558', NULL, 193, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(194, 'Fitri Rahayu, S.Pd.', '194', '2019', 'Blora, 18 November 2001', 'Pilang - Randublatung - Blora', 'S1 Pend. Matematika - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '081334750662', NULL, 194, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(195, 'Muhammad Yusuf, S.Pd.', '195', '2019', 'Mojokerto, 14 Januari 1994', 'Kauman - Mojosari - Mojokerto', 'S1 Pend. Sejarah - STKIP PGRI Sidoarjo', NULL, NULL, 'Guru', NULL, '08885199919', NULL, 195, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41');
INSERT INTO `staff` (`id`, `nama`, `nip`, `tmt`, `tempat_tanggal_lahir`, `alamat`, `pendidikan_terakhir`, `jabatan`, `unit`, `status`, `email`, `no_hp`, `foto`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(196, 'Rizky Diah Safitri, S.Pd.', '196', '2019', 'Mojokerto, 19 Juli 1996', 'Gedangan - Kutorejo - Mojokerto', 'S1 Pend. Bahasa Inggris - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '085781246202', NULL, 196, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(197, 'Bella Citra Dwi Antika, S.Pd.', '197', '2020', 'Mojokerto, 31 Oktober 2001', 'Jabontegal - Pungging - Mojokerto', 'S1 Pend. Ekonomi - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '085707014067', NULL, 197, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(198, 'Dinda Ayu Lia Amilia, S.Pd.', '198', '2020', 'Mojokerto, 21 Juli 2001', 'Wonokusumo - Mojosari - Mojokerto', 'S1 Pend. Matematika - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '0881036120452', NULL, 198, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(199, 'Fety Yulia Windasari, S.S.', '199', '2020', 'Mojokerto, 23 Juli 1995', 'Tunggalpager - Pungging - Mojokerto', 'S1 Bahasa dan Sastra Inggris - Universitas Jember', NULL, NULL, 'Guru', NULL, '082143339258', NULL, 199, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(200, 'Lailis Eptiq Wahna, S.Pd.', '200', '2020', 'Mojokerto, 1 September 1996', 'Purwojati - Ngoro - Mojokerto', 'S1 Pend. Bahasa Arab - UIN Maliki Malang', NULL, NULL, 'Guru', NULL, '085856593767', NULL, 200, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(201, 'Lilis Shoviyatul Izzah, S.Pd.', '201', '2020', 'Sidoarjo, 10 April 2002', 'Tulangan - Tulangan - Sidoarjo', 'S1 Pend. Bahasa Inggris - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '085731090978', NULL, 201, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(202, 'M. Ridho Al Muqorobi, S.Pd.', '202', '2020', 'Mojokerto, 10 Maret 2001', 'Panggerman - Pungging - Mojokerto', 'S1 Pend. Ekonomi - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '088216986155', NULL, 202, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(203, 'Mohammad Al Ghofiqi Nasrullah, S.Si.', '203', '2020', 'Surabaya, 26 Maret 1994', 'Jemurwonosari - Wonocolo - Surabaya', 'S1 Ilmu Kelautan - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '082139195968', NULL, 203, 1, '2025-12-19 20:50:41', '2025-12-19 20:50:41'),
(204, 'Niken Anatasya Kusuma, S.Pd.', '204', '2020', 'Mojokerto, 8 April 1994', 'Glatik - Ngoro - Mojokerto', 'S1 Pend. Sejarah - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '085755733801', NULL, 204, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(205, 'Niken Meriana Huda, S.Pd.', '205', '2020', 'Sidoarjo, 15 Maret 2001', 'Prambon - Prambon - Sidoarjo', 'S1 Pend. Ekonomi - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '085707463208', NULL, 205, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(206, 'Ranita Aindi Rizkiyah, S.Pd.', '206', '2020', 'Sidoarjo, 24 Maret 2002', 'Ganting - Gedangan - Sidoarjo', 'S1 Pend. Ekonomi - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '085330698783', NULL, 206, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(207, 'Rievera Oktavia Cahyasari, S.Pd.', '207', '2020', 'Mojokerto, 30 Oktober 1997', 'Seduri -  Mojosari - Mojokerto', 'S1 Pend. Bahasa Inggris - Universitas Brawijaya Malang', NULL, NULL, 'Guru', NULL, '085856360561', NULL, 207, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(208, 'Siti Annur Halimatus Sa\'diyah, S.Pd.', '208', '2020', 'Mojokerto, 10 Juli 2002', 'Kedungmungal - Pungging - Mojokerto', 'S1 Pend. Ekonomi - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '081515667100', NULL, 208, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(209, 'Siti Nur Annisa, S.Pd.', '209', '2020', 'Sidoarjo, 19 April 2002', 'Singkalan - Balongbendo - Sidoarjo', 'S1 Pend. Ekonomi - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '085732059441', NULL, 209, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(210, 'Vivi Arlinda Sari, S.Pd.', '210', '2020', 'Mojokerto, 8 April 2002', 'Kesemen - Ngoro - Mojokerto', 'S1 Pend. Ekonomi - STKIP PGRI Nganjuk', NULL, NULL, 'Guru', NULL, '08819565131', NULL, 210, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(211, 'Afiyatuz Zulfaning Tyas, S.Pd.', '211', '2021', 'Mojokerto, 26 November 1989', 'Mojorejo - Pungging - Mojokerto', 'S1 Pend. Matematika - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '082336289566', NULL, 211, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(212, 'Cyndi Eka Widyawati, M.Pd.', '212', '2021', 'Sidoarjo, 9 September 1996', 'Tunggalpager - Pungging - Mojokerto', 'S2 Pend. Ekonomi - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '082335496210', NULL, 212, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(213, 'Didit Nazarudin, S.E.', '213', '2021', 'Sidoarjo, 28 Juni 1994', 'Ngrame - Pungging - Mojokerto', 'S1 Ekonomi Islam - Universitas Darussalam Gontor', NULL, NULL, 'Guru', NULL, '085745505483', NULL, 213, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(214, 'Indri Putri Yulia , S.Pd', '214', '2021', 'Gresik, 30 Maret 1995', 'Sumengko - Wringinanom - Gresik', 'S1 Pend. Bahasa Inggris - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '081556640692', NULL, 214, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(215, 'Lia Cahyanti, S.Pd.', '215', '2021', 'Wonogiri, 19 Agustus 1997', 'Tunggalpager - Pungging - Mojokerto', 'S1 Pendidikan Bahasa dan Sastra Indonesia dan Daerah - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '085704216277', NULL, 215, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(216, 'Lukman Hakim, S.Pd.I.', '216', '2021', 'Mojokerto,5 September 1982', 'Wringinanom - Mojorejo - Mojokerto', 'S1 Pend. Agama Islam - STIT Raden Wijaya Mojokerto', NULL, NULL, 'Guru', NULL, '085735277798', NULL, 216, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(217, 'Muhammad Shobirin', '217', '2021', 'Mojokerto, 9 November 1974', 'Balongmasin - Pungging - Mojokerto', 'MA Nurul Hidayah', NULL, NULL, 'Guru', NULL, '089637708202', NULL, 217, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(218, 'Ngabdul Mungid', '218', '2021', 'Blora, 3 November 1993', 'Gedebek - Ngawen - Blora', 'PP. Al Anwar Sarang', NULL, NULL, 'Guru', NULL, '085747901163', NULL, 218, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(219, 'Putri Aulia Enan Dina, S.Pd.', '219', '2021', 'Mojokerto, 2 Mei 1997', 'Japan - Sooko - Mojokerto', 'S1 Pendidikan IPS - Universitas Islam Negeri Malang', NULL, NULL, 'Guru', NULL, '087875174830', NULL, 219, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(220, 'Ragel Agustina, S.Pd.', '220', '2021', 'Sidoarjo, 14 Agustus 1996', 'Tambak Rejo - Krembung - Sidoarjo', 'S1 Pendidikan IPA - Universitas Trunojoyo Madura', NULL, NULL, 'Guru', NULL, '085711053661', NULL, 220, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(221, 'Ratna Wulandari, S.Pd.', '221', '2021', 'Mojokerto, 1 Mei 1996', 'Mojosulur - Mojosari - Mojokerto', 'S1 Pend. Bahasa Arab - Universitas Hasyim Asyari Jombang', NULL, NULL, 'Guru', NULL, '085932630450', NULL, 221, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(222, 'Rokhmat Sugianto, S.Sos.', '222', '2021', 'Mojokerto, 8 April 1998', 'Mojorejo - Pungging - Mojokerto', 'S1 Sosiologi - UIN Tulungagung', NULL, NULL, 'Guru', NULL, '081246492526', NULL, 222, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(223, 'Shelli Dwi Novita Sari, S.Pd.', '223', '2021', 'Mojokerto, 16 Juni 1991', 'Jotangan - Mojosari - Mojokerto', 'S1 Pend. Bahasa Inggris - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '081234545100', NULL, 223, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(224, 'Zainal Arifin', '224', '2021', 'Mojokerto, 20 Juni 1972', 'Seduri - Mojosari - Mojokerto', 'PP. Al Falah Ploso Kediri', NULL, NULL, 'Guru', NULL, '085231298077', NULL, 224, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(225, 'Achmad Fathoni, S.Pd.', '225', '2021', 'Malang, 30 Oktober 2003', 'Urek Urek - Gondanglegi - Malang', 'S1 Pend. Matematika - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '081231286443', NULL, 225, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(226, 'Alfi Sholikhatin Nisa, S.Pd.', '226', '2021', 'Mojokerto, 10 Mei 2003', 'Jabontegal - Pungging - Mojokerto', 'S1 Pend. Ekonomi - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '081336673063', NULL, 226, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(227, 'Aufa Luthfikal Karim, S.Pd.', '227', '2021', 'Pati, 18 Juli 2002', 'Rungkut Kidul - Rungkut - Surabaya', 'S1 Pend. Ekonomi - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '0895339838300', NULL, 227, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(228, 'Ayuk Nurhayati, S.Pd.', '228', '2021', 'Blora, 15 April 2003', 'Pilang - Randublatung - Blora', 'S1 Pend. Matematika - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '0882003658954', NULL, 228, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(229, 'Choirun Nisa\', S.Pd.', '229', '2021', 'Tarakan, 03 Juli 2002', 'Tarakan - Kalimantan', 'S1 Pend. Matematika - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '081257156355', NULL, 229, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(230, 'Fachrudin Bisri, S.Pd.', '230', '2021', 'Sidoarjo, 20 Februari 2003', 'Gedangrowo - Prambon - Sidoarjo', 'S1 Pend. Matematika - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '0859171664184', NULL, 230, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(231, 'Fatimatuz Zahro, S.Pd.', '231', '2021', 'Malang, 31 Januari 2003', 'Tawangargo - Karangploso - Malang', 'S1 Pend. Ekonomi - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '08814386477', NULL, 231, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(232, 'Fatakhul Alim, S.Pd.', '232', '2021', 'Mojokerto, 31 Oktober 2002', 'Sumbertanggul - Mojosari - Mojokerto', 'S1 Pend. Matematika - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '085655824870', NULL, 232, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(233, 'Herrangga Vito Aleansyah, S.Pd.', '233', '2021', 'Mojokerto, 27 Januari 2003', 'Kebondalem - Mojosari - Mojokerto', 'S1 Pend. Bahasa Inggris - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '081217712715', NULL, 233, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(234, 'Jamilatul Fitriani, S.Pd.', '234', '2021', 'Mojokerto, 22 Juni 2003', 'Jotangan - Mojosari - Mojokerto', 'S1 Pend. Ekonomi - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '087742150449', NULL, 234, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(235, 'M. Alif Wira Firdiana, S.Pd.', '235', '2021', 'Pasuruan, 20 September 2002', 'Kepulungan - Gempol - Pasuruan', 'S1 Pend. Ekonomi - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '085336307116', NULL, 235, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(236, 'M. Kelvin Fikriansyah, S.Pd.', '236', '2021', 'Pasuruan, 6 Desember 2002', 'Ngerong - Gempol - Pasuruan', 'S1 Pend. Ekonomi - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '083834397832', NULL, 236, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(237, 'M. Mufid Aulia Rahman, S.Pd.', '237', '2021', 'Jombang, 24 Januari 2003', 'Sumbersari - Tarokan - Kediri', 'S1 Pend. Ekonomi - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '081216322934', NULL, 237, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(238, 'Maslahatun Nisa\', S.Pd.', '238', '2021', 'Surabaya, 13 Juni 2003', 'Wringin Anom - Gresik', 'S1 Pend. Bahasa Inggris - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '089664383800', NULL, 238, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(239, 'Miftakul Jannah, S.Pd. (nana)', '239', '2021', 'Mojokerto, 3 Desember 2002', 'Kecapangan - Ngoro - Mojokerto', 'S1 Pend. Bahasa Inggris - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '081362303825', NULL, 239, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(240, 'Muhammad Rifqy Maulana Shafa, S.Pd.', '240', '2021', 'Mojokerto, 18 Agustus 2003', 'Purwojati - Ngoro - Mojokerto', 'S1 Pend. Bahasa Inggris - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '081252844512', NULL, 240, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(241, 'Muhyiddin Muhtaromi, S.Pd.', '241', '2021', 'Sidoarjo, 31 Mei 2003', 'Simogirang - Prambon - Sidoarjo', 'S1 Pend. Matematika - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '085692337068', NULL, 241, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(242, 'Redita Putri Amelia, S.Pd.', '242', '2021', 'Sidoarjo, 15 Juni 2002', 'Candinegoro - Wonoayu - Sidoarjo', 'S1 Pend. Matematika - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '085606917382', NULL, 242, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(243, 'Siti Nikhlatuz Zakiyah, S.Pd.', '243', '2021', 'Sidoarjo, 26 September 2002', 'Jati Alun Alun - Prambon - Sidoarjo', 'S1 Pend. Matematika - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '081216322936', NULL, 243, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(244, 'Tri Ma\'rufatin, S.Pd.', '244', '2021', 'Tarakan, 17 Oktober 2002', 'Markoni Dalam - Tarakan', 'S1 Pend. Matematika - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '087753334343', NULL, 244, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(245, 'Yusuful Mutaqqin, S.Pd.', '245', '2021', 'Mojokerto, 28 Desember 2003', 'Watesumpak - Trowulan - Mojokerto', 'S1 Pend. Ekonomi - STKIP Nganjuk', NULL, NULL, 'Guru', NULL, '0881036886043', NULL, 245, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(246, 'Abdul Hafidz', '246', '2022', 'Mojokerto, 17 Juli 1973', 'Pesanggrahan - Kutorejo - Mojokerto', 'PP. Al Falah Ploso Kediri', NULL, NULL, 'Guru', NULL, '085791553269', NULL, 246, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(247, 'Adinda Laili Nur Faridah', '247', '2022', 'Mojokerto, 04 April 2000', 'Jatilangkung - Jatilangkung - Mojokerto', 'MA Bidayatul Hidayah Mojokerto', NULL, NULL, 'Guru', NULL, '082130313915', NULL, 247, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(248, 'Afifa Putri Ratnasari, S.H.', '248', '2022', 'Mojokerto, 6 September 1997', 'Balongmasin - Pungging - Mojokerto', 'S1 Hukum Tata Negara - Uin Sunan Kalijaga Yogyakarta', NULL, NULL, 'Guru', NULL, '085732015171', NULL, 248, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(249, 'Ahmad Faiz Ali Perdana, S. S.', '249', '2022', 'Jember, 21 Desember 1989', 'Tempuran - Pungging - Mojokerto', 'S1 Sastra Indonesia - Universitas Negeri Jember', NULL, NULL, 'Guru', NULL, '085645767857', NULL, 249, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(250, 'Ahmad Muhyiddin, S.Ars.', '250', '2022', 'Mojokerto, 2 Januari 1995', 'Bedagas - Pungging - Mojokerto', 'S1 Teknik Arsitektur - UIN Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '0815-5445-5525', NULL, 250, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(251, 'Artika Giovani, S.Pd.', '251', '2022', 'Sidoarjo, 13 Maret 2000', 'Kedungsugo - Prambon - Sidoarjo', 'S1 Pend. Kimia - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '087856645474', NULL, 251, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(252, 'Didik Ade Irawan, S.Pd.', '252', '2022', 'Mojokerto, 23 April 1995', 'Warugunung - Pacet - Mojokerto', 'S1 Pendidikan Pancasila dan Kewarganegaraan - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '085748102886', NULL, 252, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(253, 'Fatur Rahmat Rasyid, S.Pd.', '253', '2022', 'Sidoarjo, 18 Januari 2000', 'Bogempinggir - Balongbendo - Sidoarjo', 'S1 Pend. Bahasa Inggris - Universitas Adi Buana Surabaya', NULL, NULL, 'Guru', NULL, '085707737243', NULL, 253, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(254, 'Fitria Ayu Lestari, S.Pd.', '254', '2022', 'Mojokerto, 28 November 1998', 'Ngoro - Ngoro - Mojokerto', 'S1 Pend. Biologi - Universitas Negeri Jember', NULL, NULL, 'Guru', NULL, '083833601656', NULL, 254, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(255, 'Hendy Ardianto, S.Pd.', '255', '2022', 'Semarang, 12 Agustus 1989', 'Kebonagung - Sukodono - Sidoarjo', 'S1 Pend. Teknik Bangunan - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '085731577462', NULL, 255, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(256, 'Hesti Risma Andini, S.Pd.', '256', '2022', 'Sidoarjo, 31 Maret 2000', 'Tarik - Tarik - Sidoarjo', 'S1 Pend. PKn - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '081554299342', NULL, 256, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(257, 'Laili Faidati, S.Pd.', '257', '2022', 'Kediri, 29 November 1996', 'Kepadangan - Tulangan - Sidoarjo', 'S1 Pend. Matematika - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '0881036629969', NULL, 257, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(258, 'M. Linggar Eka Prasetya, S.Pd.', '258', '2022', 'Sidoarjo, 3 April 1999', 'Plumbon - Porong - Sidoarjo', 'S1 - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '082264360568', NULL, 258, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(259, 'Miftahul Jannah, S.Pd.', '259', '2022', 'Ngawi, 8 Agustus 1999', 'Lemahputih - Wringinanom - Gersik', 'S1 - Universitas Muhammadiyah Sidoarjo', NULL, NULL, 'Guru', NULL, '083849372587', NULL, 259, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(260, 'Mukhamad Muhorrobin, S.Or.', '260', '2022', 'Sidoarjo, 15 Februari 1991', 'Ngrame - Pungging - Mojokerto', 'S1 Ilmu Keolahragaan - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '085733487696', NULL, 260, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(261, 'Rendra Dwi Fitriawan, S.Pd.', '261', '2022', 'Mojokerto, 1 Juni 1987', 'Wonokusumo - Mojosari - Mojokerto', 'S1 Pendidikan Jasmani, Kesehatan, dan Rekreasi - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '085735203339', NULL, 261, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(262, 'Revi Sulistiani Wulandhari, S.Pd.', '262', '2022', 'Mojokerto, 8 Agustus 1998', 'Tunggalpager - Pungging - Mojokerto', 'S1 Pendidikan Bahasa dan Sastra Indonesia - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '085772293482', NULL, 262, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(263, 'Selamet Riyadi, S.Pd.', '263', '2022', 'Surabaya, 23 September 1985', 'Bulu Gedangan - Kutorejo - Mojokerto', 'S1 Pend. Matematika - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '085645139441', NULL, 263, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(264, 'Septi Murni Khasanah, S.Pd.', '264', '2022', 'Sidoarjo, 20 September 1996', 'Kejapanan - Gempol - Pasuruan', 'S1 Pend. Fisika - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '089614099955', NULL, 264, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(265, 'Serly Dwi Marlisa, S.Pd.', '265', '2022', 'Mojokerto, 28 Maret 1999', 'Jabontegal - Pungging - Mojokerto', 'S1 Pendidikan Pancasila dan Kewarganegaraan - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '087795491529', NULL, 265, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(266, 'Siti Khumrotin, S.Pd.', '266', '2022', 'Mojokerto, 29 Juli 1976', 'Bangun - Pungging - Mojokerto', 'S1 Pend. Bahasa Inggris - Universitas Negeri Jember', NULL, NULL, 'Guru', NULL, '08128528693', NULL, 266, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(267, 'Ubaidillah, S.Pd.', '267', '2022', 'Mojokerto, 28 Desember 1994', 'Wonosari - Ngoro - Mojokerto', 'S1 Sastra Inggris - UIN Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '085730912695', NULL, 267, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(268, 'Vita Fitria Ningrum, S.Si., M.Pd.', '268', '2022', 'Pekalongan, 19 Juli 1982', 'Brongkos - Kesamben - Blitar', 'S2 Pendidikan IPA - Universitas Negeri Semarang', NULL, NULL, 'Guru', NULL, '085865036894', NULL, 268, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(269, 'Wenda Yulian Rizki, S.Pd.', '269', '2022', 'Mojokerto, 21 Juli 1996', 'Medali - Puri - Mojokerto', 'S1 Pend. Matematika - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '08563556951', NULL, 269, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(270, 'A. Syahrur Romadhon', '270', '2022', 'Blora, 17 Oktober 2004', 'Pilang - Randublatung - Blora', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085695075928', NULL, 270, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(271, 'Achmad Alif Choiry', '271', '2022', 'Mojokerto, 25 Mei 2003', 'Srigading - Ngoro - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085231318322', NULL, 271, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(272, 'Amaliatus Solihah', '272', '2022', 'Sidoarjo, 3 November 2004', 'Wonoayu - Gempol - Pasuruan', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085648598116', NULL, 272, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(273, 'Andre Aksana Kurniawan', '273', '2022', 'Sidoarjo, 28 Oktober 2004', 'Randegansari - Driyorejo - Gresik', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081252921378', NULL, 273, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(274, 'Arma Novita', '274', '2022', 'Blora, 17 November 2005', 'Pilang - Randublatung - Blora', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '0882003724011', NULL, 274, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(275, 'Ayu Fitriya', '275', '2022', 'Gresik, 29 November 2003', 'Tanjung - Wringinanom - Gresik', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081232717461', NULL, 275, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(276, 'Dava Putra Nur Rizqillah', '276', '2022', 'Mojokerto, 26 April 2004', 'Mojogeneng - Jatirejo - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085953778672', NULL, 276, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(277, 'Devita Puji Purnamawati', '277', '2022', 'Blora, 14 Maret 2005', 'Pilang - Randublatung - Blora', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081216334356', NULL, 277, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(278, 'Dina Kholifatur Rosyida', '278', '2022', 'Sidoarjo, 13 Juli 2003', 'Keret - Krembung - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081333779661', NULL, 278, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(279, 'Dinda Putri Lestari', '279', '2022', 'Mojokerto, 23 Maret 2004', 'Wonodadi - Kutorejo - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081252826265', NULL, 279, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(280, 'Durrotus Sofwa', '280', '2022', 'Sidoarjo, O4 November 2003', 'Tambak Kalisogo - Jabon - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085704867915', NULL, 280, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(281, 'Fahad Araby', '281', '2022', 'Sidoarjo, 12 Juni 2004', 'Balongtani-Jabon-Sidoarjo', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, '0895383166790', NULL, 281, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(282, 'Farhan Diky Ramanda', '282', '2022', 'Sidoarjo, 9 Juli 2003', 'Kalimati - Tarik - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081232717665', NULL, 282, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(283, 'Halimah Febriantini', '283', '2022', 'Mojokerto, 14 Februari 2004', 'Sawotratap - Gedangan - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081232717459', NULL, 283, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(284, 'Hana Khanifa', '284', '2022', 'Sidoarjo, 4 April 2004', 'Candinegoro - Wonoayu - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081228648676', NULL, 284, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(285, 'Khaidar Muzakki', '285', '2022', 'Sidoarjo, 1 Oktober 2003', 'Balongbendo - Sidoarjo', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, '0895341336968', NULL, 285, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(286, 'Lailatul Qomariah', '286', '2022', 'Sidoarjo, 8 April 2004', 'Jabaran - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081216554691', NULL, 286, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(287, 'Laili Nur Rochmah', '287', '2022', 'Mojokerto,17 Desember 2003', 'Purwojati - Ngoro - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081359270250', NULL, 287, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(288, 'Linda Alkoma', '288', '2022', 'Sidoarjo, 2 Mei 2004', 'Bulang - Prambon - Sidoarjo', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, '081252844512', NULL, 288, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(289, 'M. Alwi Mubarok', '289', '2022', 'Mojokerto, 20 November 2003', 'Lebaksono - Pungging - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081336173076', NULL, 289, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(290, 'M. Aqil Dzulfikar', '290', '2022', 'Mojokerto, 27 April 2003', 'Mojorejo - Pungging - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '087849261357', NULL, 290, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(291, 'M. Ibnu Fadhil', '291', '2022', 'Tugumulyo, 11 Agustus 2003', 'Tugumulyo - Lempuing - Lampung', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '082137225899', NULL, 291, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(292, 'M. Septian Aditya Pratama', '292', '2022', 'Surabaya, 7 September 2003', 'Jabaran - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085784990053', NULL, 292, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(293, 'Mas Agam Juli Riyanto', '293', '2022', 'Jombang, 04 Juli 2003', 'Tawang Sari - Kletek - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '0895631761407', NULL, 293, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(294, 'Moch. Roqi Armadanur Qirom', '294', '2022', 'Sidoarjo, 20 November 2003', 'Ploso - Wonoayu - Sidoarjo', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, '08819804655', NULL, 294, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(295, 'Mochammad Rizky Habibullah', '295', '2022', 'Sidoarjo, 27 Januari 2004', 'Pagerngumbuk - Wonoayu - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '0895417352931', NULL, 295, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(296, 'Moh. Rosyid', '296', '2022', 'Blora, 22 November 2004', 'Pilang - Randublatung - Blora', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081335710147', NULL, 296, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(297, 'Muhammad Arif Syaifuddin', '297', '2022', 'Mojokerto, 3 September 2003', 'Windurejo- Kutorejo- Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '083854872810', NULL, 297, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(298, 'Muhammad Naufal Maulana', '298', '2022', 'Mojokerto, 11 Juli 2004', 'Padangasri - Jatirejo - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '087857085034', NULL, 298, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(299, 'Muhammad Rizal Satria Tama', '299', '2022', 'Mojokerto, 15 Maret 2004', 'Brangkal - Sooko - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081216322240', NULL, 299, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(300, 'Muthoharoh', '300', '2022', 'Mojokerto, 24 Februari 2003', 'Purwojati - Ngoro - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081232716974', NULL, 300, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(301, 'Nabila Nur\'izzati', '301', '2022', 'Bontang, 25 Oktober 2003', 'Bontang Utara - Bontang - Kaltim', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '0881036388066', NULL, 301, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(302, 'Nabilun Naufal', '302', '2022', 'Surabaya, 29 Juni 2004', 'Keramat Jegu- Taman - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081252964435', NULL, 302, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(303, 'Nadia Eka Nur Octavia', '303', '2022', 'Mojokerto, 4 Oktober 2003', 'Modopuro - Mojosari - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '082139245488', NULL, 303, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(304, 'Nur Afidah Khoiriyah', '304', '2022', 'Sidoarjo, 16 Mei 2004', 'Plaosan - Wonoayu - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '088991187469', NULL, 304, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(305, 'Nur Hadiati Zahri', '305', '2022', 'Sidoarjo, 01 Oktober 2003', 'Seketi - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085852909975', NULL, 305, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(306, 'Qalqasanda Tsabyta Khudlory', '306', '2022', 'Sidoarjo, 5 Juni 2004', 'Krajan - Krian - Sidoarjo', 'SMK Nurul Islam', NULL, NULL, 'Guru', NULL, '085864980683', NULL, 306, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(307, 'Qiroatul Fadhilah', '307', '2022', 'Sidoarjo, 12 Agustus 2004', 'Kajeksan - Tulangan - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '0888989360248', NULL, 307, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(308, 'Qofan Naufatas Salma', '308', '2022', 'Mojokerto, 23 Juni 2004', 'Srigading - Ngoro - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085784991023', NULL, 308, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(309, 'Rafella Razkha Fahriza', '309', '2022', 'Gresik, 15 Maret 2005', 'Banjaran - Driyorejo - Gresik', 'SMK Nurul Islam', NULL, NULL, 'Guru', NULL, '0895808011234', NULL, 309, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(310, 'Rahma Miftakhu Dina', '310', '2022', 'Nganjuk, 20 Maret 2004', 'Krikilan - Driyorejo - Gresik', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085808873533', NULL, 310, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(311, 'Rakay Achmad Khusnul Huda', '311', '2022', 'Sidoarjo, 30 Januari 2003', 'Wonokasian - Wonoayu - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081234517897', NULL, 311, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(312, 'Rifatul Mukarromah', '312', '2022', 'Pasuruan, 3 Maret 2004', 'Wonosari - Gempol - Pasuruan', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081216929577', NULL, 312, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(313, 'Sajidah Zulvia Andini', '313', '2022', 'Sidoarjo, 31 Agustus 2003', 'Pamotan - Porong - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085649908733', NULL, 313, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(314, 'Shanti Asvita Restu Achmad', '314', '2022', 'Sidoarjo, 11 Oktober 2004', 'Tambak Cemandi - Sedati - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081231584675', NULL, 314, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(315, 'Siti Ayu Nur Wanda Sari', '315', '2022', 'Blora, 7 Maret 2004', 'Pilang - Randublatung - Blora', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '0882009902156', NULL, 315, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(316, 'Siti Nur Azizah', '316', '2022', 'Sidoarjo, 21 Juni 2004', 'Sawahan - Porong - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081216554458', NULL, 316, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(317, 'Wahyu Nur Laila', '317', '2022', 'Sidoarjo, 5 Februari 2004', 'Jabaran - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085785812788', NULL, 317, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(318, 'Wanda Isnandari', '318', '2022', 'Gresik, 12 Agustus 2004', 'Kesamben Kulon - Wringin Anom - Gresik', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '083831131167', NULL, 318, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(319, 'Widayatu Salamah', '319', '2022', 'Malang, 9 Februari 2004', 'Karangbesuki - Sukun - Malang', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '-', NULL, 319, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(320, 'Yeny Dwi Amala', '320', '2022', 'Sidoarjo, 04 Januari 2004', 'Klantingsari - Tarik - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081216705926', NULL, 320, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(321, 'Ahmad Shofiyuddin, S.E.', '321', '2023', 'Mojokerto, 29 Juli 1996', 'Mojorejo - Pungging - Mojokerto', 'S1', NULL, NULL, 'Guru', NULL, '089525000749', NULL, 321, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(322, 'Annaka Sukma, S.Pd.', '322', '2023', 'Probolinggo, 22 November 1993', 'Kembangringgit - Pungging - Mojokerto', 'S1 Pendidikan Pancasila dan Kewarganegaraan Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '085730467741', NULL, 322, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(323, 'Arief Dwi Kurniawan, S.S.', '323', '2023', 'Bondowoso, 24 April 2023', 'Jl. Sekar Abang no. 8 Kota Mojokerto', 'S1 Ilmu Sejarah - Universitas Airlangga Surabaya', NULL, NULL, 'Guru', NULL, '089654427514', NULL, 323, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(324, 'Bayhaqi Al Khowwasy, S.Pd.', '324', '2023', 'Sidoarjo, 8 Juli 1999', 'Prambon - Sidoarjo', 'S1 Pendidikan Agama Islam', NULL, NULL, 'Guru', NULL, '085791881616', NULL, 324, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(325, 'Charisma Firadiba, S.Pd.', '325', '2023', 'Mojokerto, 5 Desember 1998', 'Randubangu - Mojosari - Mojokerto', 'S1 Pendidikan Bahasa Inggris', NULL, NULL, 'Guru', NULL, '085942949880', NULL, 325, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(326, 'Dwika Lailiyah, S.Pd', '326', '2023', 'Sidoarjo, 30 Januari 2000', 'Gang-gang Panjang, Tanggulangin-Sidoarjo', 'S1 Pendidikan Bahasa dan Sastra Indonesia', NULL, NULL, 'Guru', NULL, '081330514202', NULL, 326, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(327, 'Fatmawatul Laili, S.Pd', '327', '2023', 'Jember, 13 April 1996', 'Jabon Tegal - Pungging - Mojokerto', 'S1', NULL, NULL, 'Guru', NULL, '085704943100', NULL, 327, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(328, 'Hari Fitraningrum Kusumawardhani, S.Kom.', '328', '2023', 'Sidoarjo, 18 Januari 1999', 'Simoketawang - Wonoayu - Sidoarjo', 'S1 Teknik Informatika - Universitas Trunojoyo', NULL, NULL, 'Guru', NULL, '081936668009', NULL, 328, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(329, 'Khoiron Husen, S.Pd.', '329', '2023', 'Pasuruan, 09 September 1992', 'Bendotretek - Prambon - Sidoarjo', 'S1 Pendidikan Agama Islam', NULL, NULL, 'Guru', NULL, '081234493003', NULL, 329, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(330, 'M. Nasir Hendry', '330', '2023', NULL, NULL, NULL, NULL, NULL, 'Guru', NULL, NULL, NULL, 330, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(331, 'Mochammad Taufiq Hidayat, S.Pd.', '331', '2023', 'Sidoarjo, 09 Februari 1994', 'Sidorejo - Krian - Sidoarjo', 'S1 Pendidikan Kepelatian Olahraga - Universitas PGRI Adibuana Surabaya', NULL, NULL, 'Guru', NULL, '082244472072', NULL, 331, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(332, 'Muchammad Ifan Nur Yulianto, S.Pd.', '332', '2023', 'Mojokerto, 5 November 1998', 'Gelang - Mojosulur - Mojosari', 'S1 - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '085730026231', NULL, 332, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(333, 'Muhammad Islahul Anam S.Ag.', '333', '2023', 'Blora, 11 Maret 1998', 'Sumberjo - Randublatung - Blora', 'S1 Tafsir - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '085161550398', NULL, 333, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(334, 'Munip, S.Pd.I.', '334', '2023', 'Pasuruan, 18 Januari 1980', 'Klampisrejo - Kraton - Pasuruan', 'S1 PAI', NULL, NULL, 'Guru', NULL, '082331057792', NULL, 334, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(335, 'Nabila Ayu Azzahra, S.Pd', '335', '2023', 'Sidoarjo, 5 Maret 2002', 'Kemangsen - Balongbendo - Sidoarjo', 'S1 Universitas Jember', NULL, NULL, 'Guru', NULL, '082143665626', NULL, 335, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(336, 'Nanda Rahma Priyanti, S.Pd.', '336', '2023', 'Sidoarjo, 30 November 2000', 'Watesari - Balongbendo - Sidoarjo', 'S1 Pendidikan Matematika', NULL, NULL, 'Guru', NULL, '082132101250', NULL, 336, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(337, 'Nur Kholis, S.Pd.', '337', '2023', 'Mojokerto, 03 Agustus 1988', 'Watukenongo - Punggingg - Mojokerto', 'S1 UNDAR Jombang', NULL, NULL, 'Guru', NULL, '082131730419', NULL, 337, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(338, 'Rizky Mabrury, S.Ag.', '338', '2023', 'Malang, 29 Januari 1997', 'Sarirejo - Mojosari - Mojokerto', 'S1 -', NULL, NULL, 'Guru', NULL, '082334979571', NULL, 338, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(339, 'Rovilia Qurrota Aini, S.Pd.', '339', '2023', 'Mojokerto, 10 September 2000', 'Awang Awang - Mojosari - Mojokerto', 'S1 Pendidikan Bahasa Arab', NULL, NULL, 'Guru', NULL, '085707162347', NULL, 339, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(340, 'Salsadela Andini, S.Pd.', '340', '2023', 'Mojokerto, 21 April 2000', 'Tunggalpager - Pungging - Mojokerto', 'S1 Pendidikan Kimia UNESA', NULL, NULL, 'Guru', NULL, '085704793111', NULL, 340, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(341, 'Sih Wahyuni Raharjeng, M.Pd.', '341', '2023', 'Sidoarjo, 23 Desember 1988', 'Keboharan - Krian - Sidoarjo', 'S2', NULL, NULL, 'Guru', NULL, '085785702002', NULL, 341, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(342, 'Siti Fatimatul Luthfia, S.Pd', '342', '2023', 'Sidoarjo, 22 Februari 2001', 'Wangkal - Krembung - Sidoarjo', 'S1 Pendidikan Matematika', NULL, NULL, 'Guru', NULL, '085606900240', NULL, 342, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(343, 'Yulistia Wulandari, S.S', '343', '2023', 'Mojokerto, 17 Juli 1999', 'Dinoyo - Jatirejo - Mojokerto', 'S1 Pendidikan Bahasa Inggris', NULL, NULL, 'Guru', NULL, '085806966215', NULL, 343, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(344, 'Achmad Aldian Daryl Diksa', '344', '2023', 'Mojokerto, 15 Desember 2004', 'Banjartanggul - Pungging-Mojokerto', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, '082334527509', NULL, 344, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(345, 'Achmad Fais Achnafi', '345', '2023', 'Sidoarjo, 26 Desember 2004', 'Watesari - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081252965753', NULL, 345, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(346, 'Ahmad Rifky Ferdiansyah', '346', '2023', 'Sidoarjo, 29 Juli 2004', 'Kedungbocok - Tarik - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '0859106575046', NULL, 346, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(347, 'Aizatun Ni`mah', '347', '2023', 'Mojokerto, 18 Agustus 2004', 'Mojosulur - Mojosari - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081231847088', NULL, 347, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(348, 'Amy Nur Rohmah Zasqya', '348', '2023', 'Mojokerto, 15 Januari 2005', 'Sugeng - Trawas - Mojokerto', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, '081217318419', NULL, 348, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(349, 'Anastasya Putri Mualidyah', '349', '2023', 'Sidoarjo, 4 Mei 2005', 'Tlasih - Tulangan - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '082141863036', NULL, 349, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(350, 'Andi Daegal Saputra', '350', '2023', 'Sidoarjo, 25 Maret 2005', 'Klantingsari - Tarik - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081232837473', NULL, 350, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(351, 'Anggie Fitria Wardhanie', '351', '2023', 'Mojokerto, 6 November 2005', 'Kembang Ringgit - Pungging - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '082332347597', NULL, 351, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(352, 'Anis Faricha Ulin Nuha', '352', '2023', 'Mojokerto, 10 Juni 2005', 'Jabaran - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085790281782', NULL, 352, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(353, 'Arum Kurniawati', '353', '2023', 'Ngawi, 15 September 2004', 'Tempel - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '089621111089', NULL, 353, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(354, 'Azzrul Ariel Ardiansyah', '354', '2023', 'Gresik, 12 Juli 2005', 'Karang Semanding - Balongpanggang - Gresik', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '088803027175', NULL, 354, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(355, 'Bela Anastasya', '355', '2023', 'Pasuruan, 14 September 2004', 'Ngerong - Gempol - Pasuruan', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '089515731075', NULL, 355, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(356, 'Faza Aisyiah Salsabilla', '356', '2023', 'Sidoarjo, 7 Juli 2005', 'Kajeksan - Tulangan - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '083833033905', NULL, 356, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(357, 'Firda Berlianti', '357', '2023', 'Ngawi, 27 September 2004', 'Sambiroto - Padas - Ngawi', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '089616976546', NULL, 357, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(358, 'Fitri Syalsabil', '358', '2023', 'Mojokerto, 16 Oktober 2004', 'Srigading - Ngoro - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '082229870980', NULL, 358, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(359, 'Gita Abidatus Solicha', '359', '2023', 'Sidoarjo, 30 Mei 2005', 'Maduretno - Taman - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '0895366700602', NULL, 359, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(360, 'Halimatul Mukaromah', '360', '2023', 'Sidoarjo, 30 Juli 2004', 'Jeruk Gamping - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '-', NULL, 360, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(361, 'Harir Robiatul Adawiyah', '361', '2023', 'Malang, 28 April 2005', 'Tawang Argo - Karang Ploso - Malang', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '082194945458', NULL, 361, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(362, 'Imroatus Solichah', '362', '2023', 'Sidoarjo, 9 Oktober 2004', 'Kepunten - Tulangan - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081249232664', NULL, 362, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(363, 'Izza Soraya', '363', '2023', 'Surabaya, 1 Januari 2006', 'Jagir - Wonokromo - Surabaya', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085339226172', NULL, 363, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(364, 'Khafidatul Adawiyah', '364', '2023', 'Sidoarjo, 11 Juni 2005', 'Jeruk Legi - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '0895324173064', NULL, 364, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(365, 'Khoiril Abdul Nasir', '365', '2023', 'Mojokerto, 14 Maret 2005', 'Srigading - Ngoro - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081357242468', NULL, 365, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(366, 'M. Imam Muklasin', '366', '2023', 'Mojokerto, 31 Desember 2004', 'Sumber Tanggul - Mojosari - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085336343479', NULL, 366, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(367, 'M. Wildan Arifian Al Faraby', '367', '2023', 'Lamongan, 5 September 2005', 'Driyorejo - Driyorejo - Gresik', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '089528916700', NULL, 367, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(368, 'Mafaaza Zulfa Zanjabiilla', '368', '2023', 'Mojokerto, 8 Januari 2005', 'Watesnegoro - Ngoro - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '0881026146600', NULL, 368, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(369, 'Moch. Shoffi Yullah', '369', '2023', 'Sidoarjo, 20 Oktober 2004', 'Ketajen - Gedangan - Sidoarjo', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, '087846092548', NULL, 369, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(370, 'Mochammad Andra Nuwa Sifaur R.', '370', '2023', 'Sidoarjo, 14 April 2005', 'Jerukgamping - Krian - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081230203637', NULL, 370, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(371, 'Mochammad Fauzi Ismail', '371', '2023', 'Sidoarjo, 14 April 2004', 'Candinegoro - Wonoayu - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085787541542', NULL, 371, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(372, 'Mohammad Sihabul Irfan Arief', '372', '2023', 'Gresik, 20 Mei 2005', 'Belahanrejo - Kedamaian - Gresik', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081249671988', NULL, 372, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(373, 'Muchammad Fajrul Falah', '373', '2023', 'Sidoarjo, 7 Oktober 2004', 'Kalijaten - Taman - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '087815917365', NULL, 373, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(374, 'Muhammad Aji Winata', '374', '2023', 'Jombang, 13 Desember 2004', 'Dukuh Dimoro - Mojoagung - Jombang', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '08814948162', NULL, 374, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(375, 'Muhammad Fikri Amirullah', '375', '2023', 'Mojokerto, 22 November 2004', 'Balongmojo - Puri - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '0881027534633', NULL, 375, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(376, 'Muhammad Hafid Al Farizi Annir', '376', '2023', 'Mojokerto, 20 Februari 2005', 'Pacing - Bangsal - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081227036858', NULL, 376, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(377, 'Muhammad Iqbal Fuadi', '377', '2023', 'Sidoarjo, 5 April 2005', 'Watesari - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085648688295', NULL, 377, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(378, 'Muhammad Irfan', '378', '2023', 'Mojokerto, 23 Januari 2005', 'Kutogirang - Ngoro - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '0881036792078', NULL, 378, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(379, 'Muhammad Muhajir', '379', '2023', 'Sidoarjo, 6 Mei 2005', 'Kemangsen - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '0881027678115', NULL, 379, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(380, 'Muhammad Rizqi Pratama', '380', '2023', 'Sidoarjo, 26 Agustus 2004', 'Junwangi - Krian - Sidoarjo', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, '083840836090', NULL, 380, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(381, 'Nauval Arsya Albani', '381', '2023', 'Sidoarjo, 4 Mei 2005', 'Semawut - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085940353436', NULL, 381, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(382, 'Nazwa Erliza Fauziah', '382', '2023', 'Surabaya, 13 Februari 2005', 'Taman - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081216417860', NULL, 382, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(383, 'Nazwa Rahma Aulia', '383', '2023', 'Mojokerto, 18 September 2005', 'Purwojati - Ngoro - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '089521420818', NULL, 383, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(384, 'Hj. Nila Aulia Rohmah', '384', '2023', 'Mojokerto, 19 Desember 2004', 'Mojorejo - Beringin - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085704897131', NULL, 384, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(385, 'Novena Aliviyanda Lusianina', '385', '2023', 'Sidoarjo, 23 November 2004', 'Klantingsari - Tarik - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '089687937281', NULL, 385, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(386, 'Nur Ida Ayu Sa`adah', '386', '2023', 'Mojokerto, 10 Juni 2004', 'Jabontegal - Pungging - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '082233198299', NULL, 386, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(387, 'Nurul Angelia', '387', '2023', 'Mojokerto, 29 April 2005', 'Wonokoyo - Mojosari - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '087866731746', NULL, 387, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(388, 'Nurul Islamiyah', '388', '2023', 'Sidoarjo, 14 September 2005', 'Dukuhsari - Jabon - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '08813112609', NULL, 388, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(389, 'Rif`atul Fuadah', '389', '2023', 'Sidoarjo, 21 April 2005', 'Terungkulon - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '083869712724', NULL, 389, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(390, 'Sabitha Zuliani Ramadhania', '390', '2023', 'Surabaya,', 'Nginden - Sukolilo - Surabaya', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '087794163161', NULL, 390, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(391, 'Salsabillah Nur Jannah', '391', '2023', 'Sidoarjo, 22 Mei 2004', 'Sawohan -Buduran - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081232234128', NULL, 391, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(392, 'Silmi Fikrani Azizah', '392', '2023', 'Mojokerto, 2 Desember 2004', 'Warugunung - Pacet - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085732293698', NULL, 392, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(393, 'Siti Masruroh', '393', '2023', 'Jombang, 1 Februari 2005', 'Plosokerep - Sumobito - Jombang', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '0882009388650', NULL, 393, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(394, 'Siti Nur Wiana Hidayanti', '394', '2023', 'Blora, 9 Agustus 2005', 'Pilang - Randublatung - Blora', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '08813846261', NULL, 394, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(395, 'Sofia Elok Riqiyah Hafidzah', '395', '2023', 'Sidoarjo, 16 Juli 2005', 'Watestanjung - Wringinanom - Gresik', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '089515393731', NULL, 395, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(396, 'Tanti Dwi Nadia', '396', '2023', 'Mojokerto, 7 Mei 2005', 'Mojorejo - Pungging - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081234075724', NULL, 396, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(397, 'Thalitha Safa Azarin', '397', '2023', 'Pasuruan, 1 Desember 2004', 'Ngerong - Gempol - Pasuruan', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '085706289074', NULL, 397, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(398, 'Wahyu Tri Susilo Saputro', '398', '2023', 'Mojokerto, 5 September 2004', 'Mojorejo - Pungging - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '-', NULL, 398, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(399, 'Yulia Rista Aprilia', '399', '2023', 'Mojokerto, 4 April 2005', 'Kutogirang - Ngoro - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081249751277', NULL, 399, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(400, 'Zaynah Naurisy Syifa', '400', '2023', 'Surabaya, 20 Desember 2005', 'Jagir - Wonokromo - Surabaya', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '083133737669', NULL, 400, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(401, 'Zukhrufa Akbar Ramadhan', '401', '2023', 'Mojokerto, 14 November 2004', 'Bandarasri - Ngoro - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '0895366465012', NULL, 401, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(402, 'Abd. Ro\'uf, Lc.', '402', '2024', 'Sumenep, 08 April 1992', 'Janti - Tarik - Sidoarjo', 'S1 Universitas Al-Ahgaff Yaman', NULL, NULL, 'Guru', NULL, '082289146869', NULL, 402, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42');
INSERT INTO `staff` (`id`, `nama`, `nip`, `tmt`, `tempat_tanggal_lahir`, `alamat`, `pendidikan_terakhir`, `jabatan`, `unit`, `status`, `email`, `no_hp`, `foto`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(403, 'Abdul Hamid, S.Ag.', '403', '2024', 'Jember, 14 Juni 1995', 'Balongwono - Trowulan - Mojokerto', 'S1 Ma\'had Aly Lirboyo - Fiqh dan Ushul Fiqh', NULL, NULL, 'Guru', NULL, '+62 878-0940-9785', NULL, 403, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(404, 'Adella Ira Wanti, M.Pd.', '404', '2024', 'Sidoarjo, 26 April 1997', 'Sumokembangsri - Balongbendo - Sidoarjo', 'S2 Pendidikan Bahasa Arab - Universitas Islam Negeri Maulana Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '0881 0260 90910', NULL, 404, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(405, 'Agus Purwanto, M.Pd.', '405', '2024', 'Mojokerto, 25 April 1995', 'Kaligoro - Kutorejo - Mojokerto', 'S2 Pendidikan Bahasa Arab - Universitas Islam Negeri Maulana Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '0815 5969 5425', NULL, 405, 1, '2025-12-19 20:50:42', '2025-12-19 20:50:42'),
(406, 'Akhmad Saifudin, S.Pd.', '406', '2024', 'Mojokerto, 7 Oktober 1996', 'Kepuhpandak - Kutorejo - Mojokerto', 'S1 PAI', NULL, NULL, 'Guru', NULL, '085608411185', NULL, 406, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(407, 'Anis Fitri Alviana, S.Pd.', '407', '2024', 'Sidoarjo, 12 Januari 2000', 'Bakung Pringgodani - Balongbendo - Sidoarjo', 'S1 Pendidikan Pancasila dan Kewarganegaraan - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '0817 7997 7992', NULL, 407, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(408, 'Anjar Sari, S.Pd.', '408', '2024', 'Jombang, 4 Mei 1990', 'Kaligoro - Kutorejo - Mojokerto', 'S1 IAI Uluwiyah Mojokerto - Pend. Agama Islam', NULL, NULL, 'Guru', NULL, '+62 895-2850-2970', NULL, 408, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(409, 'Athiyah Nabila Maimunah, S.Si', '409', '2024', 'Sidoarjo, 16 September 2000', 'Gedangrowo - Prambon - Sidoarjo', 'S1 Biologi - Universitas Islam Negeri Maulana Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '0858 5289 1861', NULL, 409, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(410, 'Bastian Suryo Prayugo, S.Sn.', '410', '2024', 'Mojokerto, 30 Oktober 1997', 'Sawahan - Mojosari - Mojokerto', 'S-1 Televisi dan Film - Universitas Jember', NULL, NULL, 'Guru', NULL, '0857 4822 1145', NULL, 410, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(411, 'Desi Janiarti, S.Pd.', '411', '2024', 'Mojokerto, 20 Juni 2000', 'Bandarasri - Ngoro - Mojokerto', 'S1 Pendidikan Pancasila dan Kewarganegaraan - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '0813 9369 1026', NULL, 411, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(412, 'Devani Amanda Artamefya Buldan, S.Pd.', '412', '2024', 'Kediri, 27 November 2000', 'Junwangi - Krian - Sidoarjo', 'S1 Tadris Bahasa Inggris - UIN Sayyid Ali Rahmatullah Tulungagung', NULL, NULL, 'Guru', NULL, '0882 1787 6836', NULL, 412, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(413, 'Dewi Irine Jayanti Faizun, S. S., M. Pd.', '413', '2024', 'Tulungagung, 9 Juni 1991', 'Menanggal - Mojosari - Mojokerto', 'S2 Pendidikan Bahasa Inggris - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '0813 3288 9809', NULL, 413, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(414, 'Diah Lailil Rahmawati, S.Si.', '414', '2024', 'Sidoarjo, 02 September 1997', 'Tunggalpager - Pungging - Mojokerto', 'S1 Biologi -  Universitas Islam Negeri Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '0857 3328 8490', NULL, 414, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(415, 'Etna Liafitroh Falabibah, S.Mat.', '415', '2024', 'Mojokerto, 7 Desember 2001', 'Tunggalpager - Pungging - Mojokerto', 'S1 Matematika - UIN Maulana Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '083894355604', NULL, 415, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(416, 'Faisal Sani Zakariyah, S.Pd.', '416', '2024', 'Mojokerto, 27 Juni 1997', 'Bangun - Pungging - Mojokerto', 'S1 STIT Raden Wijaya - Pend. Agama Islam', NULL, NULL, 'Guru', NULL, '+62 857-9967-7666', NULL, 416, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(417, 'Fatimah Zahro Amika, S.Sos.', '417', '2024', 'Pasuruan, 5 Januari 1997', 'Dodokan - Taman - Sidoarjo', 'S1 Sosiologi - Universitas Islam Negeri Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '0831 2917 6544', NULL, 417, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(418, 'Febry Adi Susmianto, S.Pd.', '418', '2024', 'Mojokerto, 02 Februari 1998', 'Kepuhpandak - Kutorejo - Mojokerto', 'S1 Pendidikan Sejarah - Universitas Negeri Malang', NULL, NULL, 'Guru', NULL, '0895 4104 73496', NULL, 418, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(419, 'Fira Ainur Rahmah, S.Pd.', '419', '2024', 'Mojokerto, 12 Agustus 1999', 'Bangun - Pungging- Mojokerto', 'S1 Pendidikan Bahasa dan Sastra Indonesia - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '0895 6270 93360', NULL, 419, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(420, 'Firdaus Yoga Praptama, S.Pd.', '420', '2024', 'Tuban, 8 Juni 1998', 'Mojoroto - Kota Kediri', 'S1 Pendidikan Bahasa Arab - IAIN Kediri', NULL, NULL, 'Guru', NULL, '0822 6472 6710', NULL, 420, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(421, 'Fitri Damayanti, S.Pd.', '421', '2024', 'Surabaya, 20 Desember 1999', 'Krian Sejahtera Indah Regency -  Krian -  Sidoarjo', 'S1 Biologi - Universitas Surabaya', NULL, NULL, 'Guru', NULL, '0857 8429 3817', NULL, 421, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(422, 'Fulaivila Faizatun Naili, S.Hum.', '422', '2024', 'Sidoarjo, 8 Januari 1996', 'Leminggir - Mojosari - Mojokerto', 'S1 Sastra Arab - Universitas Indonesia', NULL, NULL, 'Guru', NULL, '0857 8156 5530', NULL, 422, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(423, 'Ibrizatus Syarifah, S.E., M.A.', '423', '2024', 'Jember, 19 April 1983', 'Kebondalem - Mojosari - Mojokerto', 'S2 Sosiologi - Universitas Gajah Mada', NULL, NULL, 'Guru', NULL, '0815  5378 2967', NULL, 423, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(424, 'Ika Nur Aieni, S. Kom.', '424', '2024', 'Sidoarjo, 26 November 2002', 'Gedang Pulut - Prambon - Sidoarjo', 'S1 Informatika - Universitas Muhamadiyah Sidoarjo', NULL, NULL, 'Guru', NULL, '0857 3049 5404', NULL, 424, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(425, 'Ilyas Nasyiruddin, S.Pd.', '425', '2024', 'Mojokerto, 27 Mei 1990', 'Pucuk - Dawarblandong - Mojokerto', 'S1 Ma\'had Aly Lirboyo', NULL, NULL, 'Guru', NULL, '085855159927', NULL, 425, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(426, 'Iman Syaichudin, S.Pd.', '426', '2024', 'Pasuruan, 29 Oktober 1989', 'Sumberejo - Pandaan - Pasuruan', 'S1 PAI - STIT Raden Wijaya Mojokerto', NULL, NULL, 'Guru', NULL, '085606072015', NULL, 426, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(427, 'Inayatu Khoirul Maghfiroh, M.Pd.', '427', '2024', 'Blitar, 1 Januari 1992', 'Gamping - Krian - Sidoarjo', 'S2 Pendidikan Ilmu Pengetahuan Sosial - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '0857 3200 2995', NULL, 427, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(428, 'Izzat Zaini, S.Ag.', '428', '2024', 'Banyuwangi, 18 Agustus 1998', 'Randubango - Mojosari - Mojokerto', 'S1 PTIQ Jakarta', NULL, NULL, 'Guru', NULL, '089677197329', NULL, 428, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(429, 'Kurnia Manggali Utamaningrum, S.Kom.', '429', '2024', 'Lamongan, 14 April 1994', 'Nggrowo - Bangsal - Mojokerto', 'S1 Teknik Informatika - Universitas Muhammadiyah Malang', NULL, NULL, 'Guru', NULL, '0822 4456 8600', NULL, 429, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(430, 'Lailatul Mafula, L.c.', '430', '2024', 'Sidoarjo, 7 Februari 1997', 'Janti - Tarik - Sidoarjo', 'S1 Universitas Al Ahgaff Yaman - Dirosah Islamiyyah', NULL, NULL, 'Guru', NULL, '+62 857-4955-5670', NULL, 430, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(431, 'M. Arif Fatwan, S.Ag.', '431', '2024', 'Mojokerto, 6 Juli 1989', 'Sumberejo - Wonoayu - Sidoarjo', 'S1 IAI Darullughoh Wadda\'wah - Akwal As Syakhsiyah', NULL, NULL, 'Guru', NULL, '+62 813-2290-9904', NULL, 431, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(432, 'M. Fikri Almaliki, S.Pd.', '432', '2024', 'Probolinggo, 15 Februari 2002', 'Sidodadi - Paiton - Probolinggo', 'S1 Pendidikan Bahasa Arab - IAIN Kediri', NULL, NULL, 'Guru', NULL, '0822 2842 7337', NULL, 432, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(433, 'M. Iqbal Khabid, S.E.', '433', '2024', 'Mojokerto, 27 September 2001', 'Purworejo - Pungging - Mojokerto', 'S1 STIES Riyadlul Jannah - Manajemen Bisnis Syariah', NULL, NULL, 'Guru', NULL, '+62 815-5990-9381', NULL, 433, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(434, 'M. Iqbal Nasrulloh, S.Pd.', '434', '2024', 'Mojokerto, 13 Mei 1999', 'Wunut - Mojoanyar - Mojokerto', 'S1 IKHAC Mojokerto - Manajemen Pendidikan Islam', NULL, NULL, 'Guru', NULL, '+62 821-3172-1546', NULL, 434, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(435, 'M. Syafiudin Al-Haq, S.Sos.', '435', '2024', 'Mojokerto, 11 September 2001', 'Mojosulur - Mojosari - Mojokerto', 'S1 KPI - IKHAC Pacet Mojokerto', NULL, NULL, 'Guru', NULL, '089620101137', NULL, 435, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(436, 'Maisa Alfat, S.Pd.', '436', '2024', 'Lamongan, 23 September 1995', 'Lembor - Brondong - Lamongan', 'S1 IAIN Kediri - Pendidikan Bahasa Arab', NULL, NULL, 'Guru', NULL, NULL, NULL, 436, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(437, 'Maulida Fajriyah, M.Si.', '437', '2024', 'Pasuruan, 8 April 1995', 'Durensewu - Pandaan - Pasuruan', 'S2 Ilmu Kimia - Universitas Padjadjaran', NULL, NULL, 'Guru', NULL, '0821 1930 1210', NULL, 437, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(438, 'Mega Dewi Lukyadiana, S.Pd.', '438', '2024', 'Jombang, 6 Januari 1989', 'Padangasri - Jatirejo - Mojokerto', 'S1 Pendidikan Bahasa Inggris - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '0857 4657 7277', NULL, 438, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(439, 'Miftahur Ridho Albaihaqi, S.Pd.', '439', '2024', 'Mojokerto, 20 Agustus 1995', 'Wonokusumo - Mojosari - Mojokerto', 'S1 Pendidikan Agama Islam - IAIN Kediri', NULL, NULL, 'Guru', NULL, '0812 1768 7578', NULL, 439, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(440, 'Mita Ayunda, S.Si.', '440', '2024', 'Mojokerto, 13 Juli 1999', 'Kebondalem - Mojosari - Mojokerto', 'S1 Biologi - Universitas Islam Negeri Maulana Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '0815 5308 6787', NULL, 440, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(441, 'Mochammad Nuril Misbach, M.S.E.I.', '441', '2024', 'Mojokerto, 28 Agustus 1992', 'Tawangsari - Trowulan - Mojokerto', 'S2 Sains Ekonomi Syariah - Universitas Airlangga', NULL, NULL, 'Guru', NULL, '0856 0706 2170', NULL, 441, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(442, 'Moh. Mas\'ud, S.Pd.', '442', '2024', 'Mojokerto, 16 Juni 1985', 'Medali - Puri - Mojokerto', 'S1 STIT Raden Wijaya Mojokerto', NULL, NULL, 'Guru', NULL, '085856366576', NULL, 442, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(443, 'Mufidatul Asniya, S.H.', '443', '2024', 'Gresik, 4 April 2000', 'Klotok - Balongpanggang - Gresik', 'S1 Institut Keislaman Abdullah Faqih Manyar Gresik - Hukum Keluarga Islam', NULL, NULL, 'Guru', NULL, '+62 813-3465-0859', NULL, 443, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(444, 'Muhammad Chasan Chalimi, S.T.', '444', '2024', 'Sidoarjo, 24 Juli 1998', 'Pungging - Pungging - Mojokerto', 'S1 Teknik Sipil - Universitas Yudharta Pasuruan', NULL, NULL, 'Guru', NULL, '0858 5198 5024', NULL, 444, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(445, 'Muhammad Nuril Ibad, S.Ag.', '445', '2024', 'Mojokerto, 21 Juni 1996', 'Gayaman - Mojoanyar - Mojokerto', 'S1 Ma\'had Aly Al Falah Kediri - Marhalah Ula', NULL, NULL, 'Guru', NULL, NULL, NULL, 445, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(446, 'Muhammad Saifi Amin, S.Pd.', '446', '2024', 'Pasuruan, 13 Juli 1997', 'Wrati - Kejayan - Pasuruan', 'S1 STAI Salahuddin Pasuruan - Pend. Agama Islam', NULL, NULL, 'Guru', NULL, '+62 857-5567-3789', NULL, 446, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(447, 'Nova Khoirun Nisa\', S.Si.', '447', '2024', 'Mojokerto, 2 November 1991', 'Petak - Pacet - Mojokerto', 'S1 Matematika - Universitas Islam Negeri Maulana Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '0856 0666 2423', NULL, 447, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(448, 'Nur Wahyuni Agustina, S.Pd.', '448', '2024', 'Pasuruan, 11 Agustus 1999', 'Bandulan - Gempol - Pasuruan', 'S1 Pendidikan Bahasa Inggris - Universitaas Negeri Malang', NULL, NULL, 'Guru', NULL, '0878 6249 1785', NULL, 448, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(449, 'Nurul Fitriyah, S.Pd.', '449', '2024', 'Sidoarjo, 28 Februari 2000', 'Tempel - Krian - Sidoarjo', 'S1 Pendidikan Ilmu Pengetahuan Alam - Universitas Islam Negeri Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '0895 3353 61113', NULL, 449, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(450, 'Nurul Kholifah May Sari, S.Pd.', '450', '2024', 'Lamongan, 21 Mei 1997', 'Wonosari - Ngoro - Mojokerto', 'S1 Pendidikan Bahasa dan Sastra Indonesia - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '0878 4719 2050', NULL, 450, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(451, 'Nurul Musyarofah, S.Pd.', '451', '2024', 'Mojokerto, 18 September 2000', 'Tunggalpager - Pungging - Mojokerto', 'S1 STAI Al Akbar Surabaya - PGMI', NULL, NULL, 'Guru', NULL, NULL, NULL, 451, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(452, 'Nurun Na\'im', '452', '2024', 'Tuban. 17 Agustus 1988', 'Pesanggrahan - Kutorejo - Mojokerto', 'PP. Ploso Kediri', NULL, NULL, 'Guru', NULL, NULL, NULL, 452, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(453, 'Raden Ayu Nur Khalima Sahada, S.Pd.', '453', '2024', 'Mojokerto, 29 Januari 2001', 'Kedungbocok Wetan - Tarik- Sidoarjo', 'S1 Tadris Bahasa Indonesia - UIN Sayyid Ali Rahmatullah Tulungagung', NULL, NULL, 'Guru', NULL, '0857 3166 5377', NULL, 453, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(454, 'Ryan Dwi Mulyo Raharjo, S.Pd.', '454', '2024', 'Mojokerto, 30 November 1991', 'Blooto - Prajurit Kulon - Mojokerto', 'S1 Pendidikan Bahasa dan Sastra Indonesia - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '0859 2327 0458', NULL, 454, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(455, 'Siti Muqoddimah, S.Pd.', '455', '2024', 'Mojokerto, 25 Maret 1996', 'Sedati - Ngoro - Mojokerto', 'S1 IAI Uluwiyah Mojokerto - Pend. Agama Islam', NULL, NULL, 'Guru', NULL, '+62 856-0718-6007', NULL, 455, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(456, 'Sovia Fahraini, S.Pd.', '456', '2024', 'Mojokerto, 29 Maret 2001', 'Ketapanrame - Trawas - Mojokerto', 'S1 Pendidikan Bahasa Arab - IAIN Kediri', NULL, NULL, 'Guru', NULL, '0812 3184 2541', NULL, 456, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(457, 'Syihab Ahmad Proyogo, S.E.', '457', '2024', 'Sidoarjo, 8 Juni 1998', 'Kemantren - Tulangan - Sidoarjo', 'S1 STIE Widya Dharma Malang - Manajemen Ekonomi', NULL, NULL, 'Guru', NULL, '+62 851-5500-1137', NULL, 457, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(458, 'Zaki Firmansyah, S. Mat.', '458', '2024', 'Mojokerto. 11 Januari 1999', 'Pesanggrahan - Kutorejo - Mojokerto', 'S1 Matematika - Universitas Islam Negeri Maulana Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '0856 0488 1419', NULL, 458, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(459, 'A. fadli Lutfi Al Ghiyats', '459', '2024', 'Mojokerto, 26 Mei 2006', 'Mojotamping - Bangsal - Mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 459, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(460, 'A. Faizal Afiqih', '460', '2024', 'Sidoarjo, 7 mei 2006', 'sidomulyo-krian-sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 460, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(461, 'A. Fatihul Ihsan', '461', '2024', 'Pasuruan, 13 November 2005', 'kejapanan-gempol-pasuruan', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 461, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(462, 'A. Syahril Fauzil Adzim', '462', '2024', 'Surabaya, 30 Mei 2005', 'Wonokromo - Wonokromo - Surabaya', 'SMK UBP Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 462, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(463, 'A. Syaifuddin', '463', '2024', 'Blora, 20 Mei 2005', 'Tawangrejo - Sumber - Blora', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 463, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(464, 'Abdi Syahid Marzuki', '464', '2024', 'Sidoarjo, 22 Desember 2005', 'Jeruk - Krian Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 464, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(465, 'Abdul Jabbar Hafizhuddin', '465', '2024', 'Mojokerto, 21 Oktober 2005', 'Pakuniran - Glagah - Probolinggo', 'SMK UBP Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 465, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(466, 'Adelia Khoiru Ummatin', '466', '2024', 'Mojokerto, 28 November 2005', 'Jabontegal - Pungging - Mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 466, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(467, 'Adella Putri Sofianah', '467', '2024', 'Sidoarjo, 12  juli 2005', 'kajartenguli-prambon-sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 467, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(468, 'Ahmad Naufaldi Fatma', '468', '2024', 'sidoarjo,16 desember 2005', 'kasak-krian-sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 468, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(469, 'Aisyah Rodhiyah', '469', '2024', 'Sidoarjo, 24 Agustus 2006', 'Kramat Jegu - Taman - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 469, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(470, 'Alfionita Bifanti Putri', '470', '2024', 'Sidoarjo, 8 Mei 2006', 'Peneleh - Genteng - Surabaya', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 470, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(471, 'Alif Zalfa Safana Putri', '471', '2024', 'Sidoarjo,7 februari 2006', 'kemangsen-balong bendo-sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 471, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(472, 'Alvina Nur Fauziah', '472', '2024', 'Mojokerto, 26 Desember 2006', 'Ngarjo-Mojoanyar-Mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 472, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(473, 'Aninta Nur Qolbiyah', '473', '2024', 'Mojokerto, 15 Oktober 2005', 'Jabontegal - Pungging - Mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 473, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(474, 'Ayyul Khizbaini', '474', '2024', 'jombang, 23 mei 2005', 'mentaos-gudo-jombang', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 474, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(475, 'Azimatul Khoirot', '475', '2024', 'Mojokerto, 19 juni 2006', 'Mojotamping - Bangsal - Mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 475, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(476, 'Bintang Bagus Prasetya', '476', '2024', 'Sidoarjo,15 juli 2005', 'Magersari-Tarik-Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 476, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(477, 'Cesa Nizam Priandik', '477', '2024', 'Sidoarjo, 9 april 2006', 'jabaran-balongbendo-sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 477, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(478, 'Cholidaziyah', '478', '2024', 'Sidoarjo, 1 Agustus 2006', 'Pesawahan - Porong - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 478, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(479, 'Dani Fathurrohman', '479', '2024', 'Tuban, 21 Mei 2005', 'Kecapangan - Ngoro - Ngoro', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 479, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(480, 'Dinda Aulia Rahma', '480', '2024', 'Sidoarjo, 8 Juni 2005', 'Seketi - Balongbendo - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 480, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(481, 'Eka Afifuddin Al Fikri', '481', '2024', 'Sidoarjo, 25 Agustus 2005', 'Kepadangan - Tulangan - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 481, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(482, 'Eka Elistiyanah', '482', '2024', 'Sidoarjo, 15 Maret 2005', 'Gamping - Krian - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 482, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(483, 'Eka Rofika Fajri Aini', '483', '2024', 'Mojokerto, 2 Maret 2006', 'Ngastemi-Bangsal-Mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 483, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(484, 'Faiqotunnisak Kandhita', '484', '2024', 'probolingo, 23 juni 2006', 'lemahkembar-sumberasih-probolingo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 484, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(485, 'Fajriyatul Mukhlisah', '485', '2024', 'Sidoarjo, 24 juli 2005', 'kemangsen-balong bendo-sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 485, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(486, 'Farel Revan Febriansyah', '486', '2024', 'Sidoarjo, 22 Februari 2006', 'Pejangkungan - Prambon - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 486, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(487, 'Fatchiyah Qorin', '487', '2024', 'Mojokerto, 3 Desember 2005', 'Srigading - Ngoro - Mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 487, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(488, 'Fatimah Zahroh', '488', '2024', 'Mojokerto, 23 april 2006', 'janti - Pungging - Mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 488, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(489, 'Felisa Dwi Ningrum', '489', '2024', 'Sidoarjo, 4 Mei 2005', 'Kedungbocok - Tarik - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 489, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(490, 'Galih Satya Prabakti', '490', '2024', 'Mojokerto, 17 Maret 2006', 'Terusan - Gedeg - Mojokerto', 'SMK UBP Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 490, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(491, 'Ghulam Jauhari Rahman', '491', '2024', 'Mojokerto, 22 november 2005', 'terusan-gedeg-mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 491, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(492, 'Hawwa Salsabila Rost', '492', '2024', 'Surabaya, 1 Desember 2005', 'Bendotretek - Prambon - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 492, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(493, 'Helen Gadis Cantik', '493', '2024', 'Sidoarjo, 23 september 2005', 'kajeksan-tulangan-sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 493, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(494, 'Ika Apriliah Hidayah', '494', '2024', 'Sidoarjo, 9 april 2006', 'kemangsen-balong bendo-sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 494, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(495, 'Ikhya\' Ulumuddin', '495', '2024', 'Sidoarjo, 21 November 2005', 'Janti Alun-Alun - Prambon - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 495, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(496, 'Ilfi Nur Diana', '496', '2024', 'Pasuruan, 5 Februari 2006', 'Wonokoyo - Beji - Pasuruan', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 496, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(497, 'Irsanudin Akmal', '497', '2024', 'Sidoarjo, 30 Desember 2005', 'Jedongcangkring - Prambon - Sidoarjo', 'SMK UBP Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 497, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(498, 'Issat', '498', '2024', 'Sidoarjo, 7 Juli 2006', 'Jeruk Gamping - Krian - Sidoarjo', 'SMK UBP Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 498, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(499, 'Jessy Nadzla', '499', '2024', 'Samarinda, 29 Mei 2006', 'Pungging - Pungging - Mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 499, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(500, 'Khala Fran Hafizar', '500', '2024', 'Mojokerto, 14 Juni 2006', 'Kupang - Jetis - Mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 500, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(501, 'Latifatuz Zahroh', '501', '2024', 'Sidoarjo, 5 Mei 2006', 'Seketi - Balongbendo - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 501, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(502, 'Lutfi Ainur Rohmah', '502', '2024', 'Sidoarjo, 14 Juli 2006', 'Pasinan Lemahputih - Wringinanom - Gresik', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 502, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(503, 'Luthfiana Anis farichah', '503', '2024', 'Sidoarjo, 12 Desember 2005', 'Kepatihan - Tulangan Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 503, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(504, 'M. Faisal Alfariski', '504', '2024', 'Sidoarjo, 8 April 2005', 'Penambangan - Balongbendo - Sidoarjo', 'SMK UBP Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 504, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(505, 'M. Faza Kafabih', '505', '2024', 'Mojokerto, 21 september 2006', 'kuripansari-pacet-mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 505, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(506, 'M. Futuhal Arifin', '506', '2024', 'pasuruan, 13 november 2005', 'kejapanan-gempol-pasuruan', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 506, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(507, 'M. Irfaillah', '507', '2024', 'Mojokerto, 12 mei 2005', 'Balongmojo-puri-mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 507, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(508, 'M. Javier Navaro Al hafidz', '508', '2024', 'Sidoarjo, 24 April 2006', 'Candinegoro - Wonoayu - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 508, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(509, 'M. Nafis Al Haromain', '509', '2024', 'Sidoarjo, 10 Januari 2006', 'Dukuhsari-Jabon-Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 509, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(510, 'M. Rakha Ashfano', '510', '2024', 'Sidoarjo,23 April 2006', 'Jabaran - Balongbendo - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 510, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(511, 'M. Raya Rambu Anarki', '511', '2024', 'Mojokerto, 30 april 2006', 'sawo-jetis-mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 511, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(512, 'M. Rizal Alviansyah', '512', '2024', 'Sidoarjo, 1 Agustus 2005', 'Simo Angin Angin - Wonoayu - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 512, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(513, 'M. Rizal As-Shiddiqie', '513', '2024', 'Sidoarjo, 6 Juni 2006', 'Wonokarang - Balongbendo - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 513, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(514, 'M. Roykhan Alamsyah', '514', '2024', 'Pasuruan, 11 November 2005', 'Japanan - Gempol - Pasuruan', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 514, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(515, 'M.Ali Ridho', '515', '2024', 'Sidoarjo, 17 Juli 2006', 'Kepuhsari - Balongbendo - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 515, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(516, 'M.Ferdianto', '516', '2024', 'sidoarjo,13 mei 2005', 'terik-krian-sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 516, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(517, 'M.Feza Ikhlasul Amal', '517', '2024', 'Kediri, 20 November 2005', 'Ngerong - Gempol - Pasuruan', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 517, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(518, 'M.Habibi Syifaul Qolbi', '518', '2024', 'Sidoarjo, 29 maret 2006', 'Gampingrowo-tarik-krian', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 518, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(519, 'M.Ilham Abdillah', '519', '2024', 'Mojokerto, 28 November 2005', 'Mojosari - Mojosari - Mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 519, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(520, 'M.Istanto Zaki', '520', '2024', 'Pasuruan, 20 Oktober 2005', 'Ngerong - Gempol - Pasuruan', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 520, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(521, 'M.Kahfi Taufiqurrohman', '521', '2024', 'sidoarjo, 14 januari 2006', 'magosari-tarik sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 521, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(522, 'Marshanda Rista wahyu', '522', '2024', 'Mojokerto, 19 Maret 2006', 'Jabontegal - Pungging - Mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 522, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(523, 'Marshindi Risti Wahyu', '523', '2024', 'Mojokerto, 19 Maret 2006', 'Jabontegal - Pungging - Mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 523, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(524, 'Mayrene Vanezha Putri', '524', '2024', 'Pasuruan, 25 Mei 2006', 'Sumbersuko - Gempol - Pasuruan', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 524, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(525, 'Meytha Al Hanisa', '525', '2024', 'Sidoarjo, 9 mei 2006', 'taman-taman-sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 525, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(526, 'Moh. Rizki', '526', '2024', 'Sampang, 20 Maret 2005', 'Lemujut - Krembung - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 526, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(527, 'Muhammad Taufiq', '527', '2024', 'Pasuruan, 02 April 2006', 'Ponokawan - Krian - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 527, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(528, 'Naila Manzilatil Husna', '528', '2024', 'Sidoarjo, 15 Januari 2006', 'Tempel - Krian - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 528, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(529, 'Najwa Izzah Nabila', '529', '2024', 'Mojokerto,20 oktober 2005', 'seduri-mojosari-mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 529, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(530, 'Natasya Aulia Salsabila', '530', '2024', 'Sidoarjo, 19 September 2005', 'Tulangan - Tulangan - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 530, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(531, 'Nia Eliana Paramitha', '531', '2024', 'Sidoarjo, 18 Juni 2005', 'Kedungbocok - Tarik - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 531, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(532, 'Nisrina Mufidah Rif\'at', '532', '2024', 'Sidoarjo, 1 juni 2005', 'Terung wetan-krian-sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 532, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(533, 'Novita Dwi Livia', '533', '2024', 'Mojokerto, 26 juli 2006', 'Mojosulur - Mojosari - Mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 533, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(534, 'Nur Mas Adatul Maghfiroh', '534', '2024', 'Sidoarjo, 14 maret 2006', 'Kanigoro-Krian-Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 534, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(535, 'Putra Cahya Fadhilah', '535', '2024', 'Sidoarjo,, 22 juni 2006', 'Telasih-Tulangan-Sidoarjo', 'SMK UBP Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 535, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(536, 'Revina Rizkie Naurora', '536', '2024', 'Sidoarjo,, 9 maret 2006', 'suko-sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 536, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(537, 'Rivaldi Febri Afianto', '537', '2024', 'Sidoarjo, 1 mei 2006', 'kepuhkemiri-tulangan-sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 537, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(538, 'Rofi\'atan Aliyah', '538', '2024', 'Blora, 16 Februari 2005', 'Pilang - Randublatung - Blora', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 538, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(539, 'Seila Febrianti Putri', '539', '2024', 'Bunga Mayang, 6 Februari 2005', 'KH. A. Dahlan - Tulangan - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 539, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(540, 'Tsaqif Fahami', '540', '2024', 'Mojokerto, 10 januari 2006', 'Sampangagung-Kutorejo-Mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 540, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(541, 'Umi Qulsum', '541', '2024', 'Madiun, 13 November 2005', 'Kalirungkut - Rungkut - Surabaya', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 541, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(542, 'Weny Mandalena', '542', '2024', 'Gresik,11 desember 2005', 'banjaran-driyorejo-Gresik', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 542, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(543, 'Yuke Agustin', '543', '2024', 'Sidoarjo, 4 maret 2005', 'Ketimang - Wonoayu - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 543, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(544, 'Zabrina Indraningtyas', '544', '2024', 'Sidoarjo, 25 Juli 2005', 'Jabaran - Balongbendo - Sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 544, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(545, 'Zainiyatul Ilmiah', '545', '2024', 'Sidoarjo, 20 juni 2006', 'suwaluh-balongbendo-sidoarjo', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 545, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(546, 'Zukhrufa Nabila', '546', '2024', 'Mojokerto, 17 Oktober 2005', 'Mojorejo - Pungging - Mojokerto', 'MA Nurul Islam Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 546, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(547, 'Abdul Haris, S.H.I.', '547', '2025', 'Mojokerto, 1 November 1990', 'Sumberkembar - Pacet - Mojokerto', 'S1 Ahwal Al Syakhsiyah - UNIPDU Jombang', NULL, NULL, 'Guru', NULL, NULL, NULL, 547, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(548, 'Abdul Khamid Bashori, S.Pd.', '548', '2025', 'Mojokerto, 23 Agustus 1998', 'Kembangringgit - Pungging - Mojokerto', NULL, NULL, NULL, 'Guru', NULL, '085779225933', NULL, 548, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(549, 'Achmad Hidayat, S.Ag.', '549', '2025', 'Mojokerto, 30 November 1997', 'Menanggal - Mojosari - Mojokerto', 'S1 Tassawuf - Mahad Aly Tarbiyatunnasyi\'in', NULL, NULL, 'Guru', NULL, NULL, NULL, 549, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(550, 'Adis Aditya Nuzulia Rohmah, S.Pd.', '550', '2025', 'Jombang, 30 Desember 2002', 'Kedungpapar - Sumobito - Jombang', 'S1 Pendidikan Geografi - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '0858 5049 8760', NULL, 550, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(551, 'Aida Tazkiah Arum, S.Pd.', '551', '2025', 'Mojokerto, 26 September 2000', 'Tunggalpager - Pungging - Mojokerto', 'S1 Pendidikan IPA - UIN KH. Achmad Siddiq Jember', NULL, NULL, 'Guru', NULL, '0838 3750 1510', NULL, 551, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(552, 'Akmal Sajed, S.Pd.', '552', '2025', 'Mojokerto, 11 Desember 2000', 'Menanggal - Mojosari - Mojokerto', NULL, NULL, NULL, 'Guru', NULL, '085706309164', NULL, 552, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(553, 'Amirah Nur Hidayati Jannah, S.H.', '553', '2025', 'Surabaya, 20 April 2002', 'Jumeneng - Mojoanyar - Mojokerto', 'S1 Hukum Keluarga - Universitas Hasyim Asyari Jombang', NULL, NULL, 'Guru', NULL, '0838 5700 3831', NULL, 553, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(554, 'Asa Nury Fariha, S.Pd.', '554', '2025', 'Sidoarjo, 6 Maret 2002', 'Bringinbendo - Taman - Sidoarjo', 'S1 Pend. Sejarah - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '0822 1329 9807', NULL, 554, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(555, 'Aufa Ema Pradini, S.Pd.', '555', '2025', 'Mojokerto, 5 Juni 2003', 'Tanjangrono - Ngoro - Mojokerto', NULL, NULL, NULL, 'Guru', NULL, '0895332300742', NULL, 555, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(556, 'Auly Muftikha Nurfauziah, M.Pd.', '556', '2025', 'Banyuwangi, 18 Desember 1996', 'Sooko, Wringinanom, Gresik', 'S2 Pendidikan Bahasa Arab - UIN Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '0856 0766 1217', NULL, 556, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(557, 'Dhani Aulia Rochman, S.Pd.', '557', '2025', 'Lamongan, 8 Juli 2001', 'Brengkok - Brondong - Lamongan', 'S1 PAI - Universitas Kiai Abdulloh Faqih Gresik', NULL, NULL, 'Guru', NULL, '087855914092', NULL, 557, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(558, 'Divani Mutiara, S.Pd.', '558', '2025', 'Mojokerto, 30 Desember 2002', 'Belahantengah - Mojosari - Mojokerto', 'S1 Pendidikan IPA - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '0856 0704 7793', NULL, 558, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(559, 'Fatimatuzzahro, S.Pd.', '559', '2025', 'Mojokerto, 22 Juli 2002', 'Kalipuro - Pungging - Mojokerto', 'S1 Pend. IPS - UIN Maulana Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '088297289117', NULL, 559, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(560, 'Findah Lestari, S.Pd.', '560', '2025', 'Mojokerto, 25 Maret 1991', 'Watukenongo - Pungging - Mojokerto', 'S1 Pendidikan Matematika - Universitas Wisnuwardhana Malang', NULL, NULL, 'Guru', NULL, '0857 3022 7383', NULL, 560, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(561, 'Fitri Anis Wati, S.Pd.', '561', '2025', 'Sidoarjo, 19 September 2000', 'Gedangrowo - Prambon - Sidoarjo', NULL, NULL, NULL, 'Guru', NULL, '085730330151', NULL, 561, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(562, 'Fitria Ari Noviyanti, S.Pd.', '562', '2025', 'Mojokerto, 25 November 2002', 'Claket - Pacet - Mojokerto', 'S1 Pend. IPA - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '0857 0447 4510', NULL, 562, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(563, 'Habibati Firdausy, S.Pd.', '563', '2025', 'Sidoarjo, 15 April 1999', 'Krembangan - Taman - Sidoarjo', 'S1 Pend. Geografi - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '0819 4339 6559', NULL, 563, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(564, 'Hasan Al Banna, M.Pd.', '564', '2025', 'Lamongan, 19 Desember 1995', 'Kalipuro - Pungging - Mojokerto', 'S2 Pend. Agama Islam - Universitas Islam Malang', NULL, NULL, 'Guru', NULL, '0812 3438 5149', NULL, 564, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(565, 'Hasanul Mutawakkilin, M.Pd.', '565', '2025', 'Jombang, 21 Juli 1999', 'Betek - Mojoagung - Jombang', 'S1 Pend. Bahasa Arab - UIN Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '0813 3529 5061', NULL, 565, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(566, 'Ike Fibriari Wahyu, S.Pd., Gr.', '566', '2025', 'Mojokerto, 2 Februari 1984', 'Gunung Gedangan - Magersari - Mojokerto', NULL, NULL, NULL, 'Guru', NULL, '085749474004', NULL, 566, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(567, 'Ilham Bahri, S.Ag.', '567', '2025', 'Mojokerto, 12 Juni 2003', 'Balongmasin - Pungging - Mojokerto', 'S1 Ilmu Hadits - Ma\'had Aly KH. Maimoen Zubair Sarang', NULL, NULL, 'Guru', NULL, '0857 8516 6331', NULL, 567, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(568, 'Inayatul Mubarokah, S.Ag.', '568', '2025', 'Mojokerto, 13 Agustus 2002', 'Pesanggrahan - Kutorejo - Mojokerto', 'S1 IAT - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '0858 5954 2163', NULL, 568, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(569, 'Indi Izzah Makhfudloh, M.Pd.', '569', '2025', 'Sidoarjo, 8 Juni 2001', 'Jemirahan - Jabon - Sidoarjo', 'S2 Pend. MIPA - Universitas Jember', NULL, NULL, 'Guru', NULL, '0878 5888 5551', NULL, 569, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(570, 'Izzatul Milla Rifa\'i, S.Pd.', '570', '2025', 'Bojonegoro, 4 April 2002', 'Sukowati - Kapas - Bojonegoro', 'S1 Pend. Geografi - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '0895 6059 65024', NULL, 570, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(571, 'Kamalul Musthofa, S.Pd.', '571', '2025', 'Pasuruan, 11 April 2001', 'Oro-oro Ombowetan - Rembang - Pasuruan', 'S1 Pend. Bahasa Arab - IAIN Kediri', NULL, NULL, 'Guru', NULL, NULL, NULL, 571, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(572, 'M. Azwar Annas, S.Ag.', '572', '2025', 'Sidoarjo, 30 April 1993', 'Pejangkungan - Prambon - Sidoarjo', 'S1 Ahwal Al Syakhsiyah - INKAFA', NULL, NULL, 'Guru', NULL, '085179595599', NULL, 572, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(573, 'M. Malik Ibrohim, S.Pd.', '573', '2025', 'Sidoarjo 15 juli 1993', 'Manduro - Ngoro - Mojokerto', 'S1 Bimbingan dan Konseling - Universitas Darul Ulum Jombang', NULL, NULL, 'Guru', NULL, '0895404927167', NULL, 573, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(574, 'M. Mustaqul Khaqqil Yaqin, Lc.', '574', '2025', 'Mojokerto, 15 Februari 1997', 'Belik - Trawas - Mojokerto', NULL, NULL, NULL, 'Guru', NULL, '0895321338200', NULL, 574, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(575, 'Madinatul Ilmi, S.Pd.', '575', '2025', 'Sidoarjo, 3 Oktober 2001', 'Glagaharum - Porong - Sidoarjo', 'S1 Pend. Bahasa Arab - UIN Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '0857 5552 2335', NULL, 575, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(576, 'Mas As\'ad Alwi Abdillah, S.H.', '576', '2025', 'Surabaya, 11 Februari 1999', 'Rungkut Kidul - Rungkut - Surabaya', NULL, NULL, NULL, 'Guru', NULL, '085536886428', NULL, 576, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(577, 'Moch. Afifuddin, S.Sos.', '577', '2025', 'Kediri, 23 Februari 1983', 'Manduro - Ngoro - Mojokerto', NULL, NULL, NULL, 'Guru', NULL, '089637705483', NULL, 577, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(578, 'Moch. Jawahirul Hisni, S.Pd.', '578', '2025', 'Jember, 4 November 2000', 'Selotapak - Trawas - Mojokerto', 'S1 Pend. Bhs Arab - Universitas Al Falah As-Sunniyyah Jember', NULL, NULL, 'Guru', NULL, '0817 1758 6217', NULL, 578, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(579, 'Moh. Syaiful Ulum, S.Pd.', '579', '2025', 'Sidoarjo, 7 November 1993', 'Kebaron - Tulangan - Sidoarjo', 'S1 PAI - Universitas Majapahit Mojokerto', NULL, NULL, 'Guru', NULL, '085852202408', NULL, 579, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(580, 'Mohammad Nizar Khalimi, S.Pd.', '580', '2025', 'Mojokerto, 11 Januari 2003', 'Sidoharjo - Gedeg - Mojokerto', 'S1 PAI - UIN Sayyid Tulungagung', NULL, NULL, 'Guru', NULL, '08989759878', NULL, 580, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(581, 'Muhammad Abdul Basith, S.Ag.', '581', '2025', 'Sidoarjo, 16 Desember 1998', 'Juwet Kenongo, Porong, Sidoarjo', 'S1 IAT - Sekolah Tinggi Kulliyatul Qur’an ( STKQ ) Depok', NULL, NULL, 'Guru', NULL, '0858 5577 7313', NULL, 581, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(582, 'Muhammad Abdul Ghoni, S.Pd.', '582', '2025', 'Gresik, 15 April 2001', 'Pacuh - Balongpanggang - Gresik', 'S1 Pend. Bahasa Arab - IKHAC Mojokerto', NULL, NULL, 'Guru', NULL, NULL, NULL, 582, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(583, 'Muhammad Rizqi Mubarok, S.Ag.', '583', '2025', 'Mojokerto, 26 Februari 2000', 'Ngabar - Jetis - Mojokerto', 'S1 Ilmu Hadits - Ma\'had Aly Hasyim Asyari Jombang', NULL, NULL, 'Guru', NULL, '085706668533', NULL, 583, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(584, 'Nafilatun Nadhiroh, M.Pd.', '584', '2025', 'Mojokerto, 19 November 1998', 'Leminggir - Mojosari - Mojokerto', 'S2 PAI - UNHASYI Jombang', NULL, NULL, 'Guru', NULL, NULL, NULL, 584, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(585, 'Novi Herlina, S.Pd.', '585', '2025', 'Sidoarjo, 24 November 2001', 'Kedungboto - Porong - Sidoarjo', NULL, NULL, NULL, 'Guru', NULL, '085748951932', NULL, 585, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(586, 'Nur Setianingsih, M.Si.', '586', '2025', 'Sidoarjo, 8 Juli 1997', 'Kedungbocok - Tarik - Sidoarjo', 'S2 Biologi - Universitas Airlangga Surabaya', NULL, NULL, 'Guru', NULL, '0819 3888 7208', NULL, 586, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(587, 'Richa Cahya Wulandari, S. Ag.', '587', '2025', 'Sidoarjo, 20 Juni 2000', 'Kalimati - Tarik - Sidoarjo', 'S1 IAT - IAI Al Khoziny Sidoarjo', NULL, NULL, 'Guru', NULL, '0857 4634 8257', NULL, 587, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(588, 'Riza Aulia Anwar, S.S.', '588', '2025', 'Sidoarjo, 16 September 2002', 'Kemuning - Tarik - Sidoarjo', NULL, NULL, NULL, 'Guru', NULL, '085733801830', NULL, 588, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(589, 'Riza Zulfi Rahmatillah, S.Pd.', '589', '2025', 'Sidoarjo, 16 Mei 2002', 'Karangpuri - Wonoayu - Sidoarjo', 'S1 Pendidikan IPA - Universitas Trunojoyo Madura', NULL, NULL, 'Guru', NULL, '0858 5986 5906', NULL, 589, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(590, 'Rizkika Zukiyatu Sholikhah, S.Ars.', '590', '2025', 'Sidoarjo, 19 Juli 2001', 'Bogem Pinggir - Balongbendo - Sidoarjo', 'S1 Teknik Arsitektur - UIN Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '0857 3220 5892', NULL, 590, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(591, 'Rosikhotul Ilmi, S.Pd.', '591', '2025', 'Sidoarjo, 22 Februari 2003', 'Krembangan - Taman - Sidoarjo', 'S1 Pend. Fisika - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '085334644729', NULL, 591, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(592, 'Safinatun Najah, S.Pd.', '592', '2025', 'Mojokerto, 30 Desember 1999', 'Ngabar - Jetis - Mojokerto', NULL, NULL, NULL, 'Guru', NULL, '081943244686', NULL, 592, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(593, 'Salman Alfarizi, S.Pd.', '593', '2025', 'Mojokerto, 11 Agustus 1999', 'Ketapanrame - Trawas - Mojokerto', 'S1 Pend. Teknologi Informasi - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '0857 4872 8515', NULL, 593, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(594, 'Selfia Felinda, S.Si.', '594', '2025', 'Bojonegoro, 14 Februari 1998', 'Tunggalpager - Pungging - Mojokerto', 'S1 Biologi - UIN Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '0858 5727 1047', NULL, 594, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(595, 'Siti Ainun Nasyiroh, S.Pd.', '595', '2025', 'Mojokerto, 7 Januari 2001', 'Temon - Trowulan - Mojokerto', 'S1 Pend. Sejarah - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '0822 2945 3512', NULL, 595, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(596, 'Siti Farichatun Nisa\', S.Ag.', '596', '2025', 'Sidoarjo, 9 Agustus 2001', 'Sebani - Tarik - Sidoarjo', NULL, NULL, NULL, 'Guru', NULL, '081293856909', NULL, 596, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(597, 'Siti Fathimatuz Zuhroh Kusumaningrum, S.Pd.', '597', '2025', 'Sidoarjo, 13 April 2000', 'Gampingrowo-tarik-krian', 'S1 Pend. Bahasa Arab - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '088996914226', NULL, 597, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(598, 'Syafa\'at Annas, M.Hum.', '598', '2025', 'Pasuruan, 9 November 1998', 'Sebani - Gadingrejo - Pasuruan', 'S2 Bahasa dan Sastra Arab - UIN Malik Ibrahim Malang', NULL, NULL, 'Guru', NULL, '0857 8484 7847', NULL, 598, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(599, 'Tabah Gilang Abdillah, Lc.', '599', '2025', 'Jakarta, 23 Januari 2002', 'Bandarasri - Ngoro - Mojokerto', 'D3 Bahasa Arab - Al Ahgaff Yaman', NULL, NULL, 'Guru', NULL, '0878 2428 6163', NULL, 599, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(600, 'Tarisya Ayuni Wulandari, S.Pd.', '600', '2025', 'Mojokerto, 23 Juni 2002', 'Awang-awang - Mojosari - Mojokerto', 'S1 Pendidikan IPA - Universitas Negeri Surabaya', NULL, NULL, 'Guru', NULL, '0857 3652 6958', NULL, 600, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(601, 'Uly Dina, M.Pd.', '601', '2025', 'Jombang, 21 Juli 1999', 'Jatirejo - Diwek - Jombang', 'S2 Pend. Agama Islam - Universitas KH. Abdul Chalim Mojokerto', NULL, NULL, 'Guru', NULL, '0813 6249 0852', NULL, 601, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(602, 'Umi Hanifah, S.Pd.', '602', '2025', 'Malang, 25 Desember 2002', 'Kraton - Krian - Sidoarjo', 'S1 Pend. Bahasa Arab - UIN Sunan Ampel Surabaya', NULL, NULL, 'Guru', NULL, '0857 0474 8390', NULL, 602, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(603, 'Zakiya Fikri, S.M.', '603', '2025', 'Nganjuk, 24 September 1991', 'Mojosulur - Mojosari - Mojokerto', 'S1 Manajemen - Universitas Majapahit Mojokerto', NULL, NULL, 'Guru', NULL, '0895529044556', NULL, 603, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(604, 'Abdul Rochim', '604', '2025', 'Sidoarjo, 15 Juli 2006', 'Katerungan - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 604, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43'),
(605, 'Achmad Fadhlan Ali Nuh', '605', '2025', 'Sidoarjo, 31 Agustus 2006', 'Jabaran - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 605, 1, '2025-12-19 20:50:43', '2025-12-19 20:50:43');
INSERT INTO `staff` (`id`, `nama`, `nip`, `tmt`, `tempat_tanggal_lahir`, `alamat`, `pendidikan_terakhir`, `jabatan`, `unit`, `status`, `email`, `no_hp`, `foto`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
(606, 'Achmad Muzakky Al Habzy', '606', '2025', 'Mojokerto, 5 Mei 2007', 'Mojotamping - Bangsal - Mojokerto', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 606, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(607, 'Achmad Nizar Habiburrohman', '607', '2025', 'Sidoarjo, 16 April 2007', 'Terik - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 607, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(608, 'Achmad Rafly Rakhasiwi Yoharin Putra', '608', '2025', 'Mojokerto, 9 Juni 2006', 'Bandarasri - Ngoro - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 608, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(609, 'Adinda Dwi Irwandani', '609', '2025', 'Sidoarjo, 26 Februari 2007', 'Sawahan - Porong - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 609, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(610, 'Adn Daffa Mahkota Anindya', '610', '2025', 'Mojokerto, 03 Mei 2007', 'Jumeneng - Mojoanyar - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 610, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(611, 'Ahmad Al Hariry Fajrus Surur', '611', '2025', 'Mojokerto, 13 Maret 2007', 'Modopuro - Mojosari - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 611, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(612, 'Ahmad Arya Rafiansyah Al Ghiffary', '612', '2025', 'Sidoarjo, 26 Oktober 2006', 'Sugihwaras - Candi - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 612, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(613, 'Ahmad Haikal Mursyid', '613', '2025', 'Sidoarjo, 30 April 2007', 'Kedungdoro - Tegalsari - Surabaya', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 613, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(614, 'Ahmad Ibrahim', '614', '2025', 'Jombang, 22 Mei 2007', 'Janti - Waru - Sidoarjo', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 614, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(615, 'Ahmad Ibrahim Ishari', '615', '2025', 'Mojokerto, 12 Juni 2007', 'Karang Kedawang - Sooko - Mojokerto', NULL, NULL, NULL, 'Guru', NULL, NULL, NULL, 615, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(616, 'Ahmad Rendy Pratama', '616', '2025', 'Sidoarjo, 20 Mei 2006', 'Terik - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 616, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(617, 'Ainur Nafiatus Solikh', '617', '2025', 'Mojokerto, 07 Februari 2007', 'Tinggar - Bangsal - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 617, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(618, 'Akhmad Nur Fadhil', '618', '2025', 'Mojokerto, 10 Februari 2007', 'Tambakagung - Puri - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 618, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(619, 'Akhmad Rizki Efendi', '619', '2025', 'Sidoarjo, 10 April 2007', 'Kramat Jegu - Taman - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 619, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(620, 'Aliffia Rachmad', '620', '2025', 'Jakarta, 25 Januari 2007', 'Banjarsari - Jetis - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 620, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(621, 'Alin Natul Ramadani', '621', '2025', 'Sidoarjo, 22 September 2006', 'Kedungwonokerto - Prambon - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 621, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(622, 'Aliyah Salwa', '622', '2025', 'Sidoarjo, 08 November 2006', 'Kraton - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 622, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(623, 'Alya Nur Azkiyah', '623', '2025', 'Sidoarjo, 10 Juni 2007', 'Kramat Jegu - Taman - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 623, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(624, 'Anggraini Tri Lestyiawati', '624', '2025', 'Sidoarjo, 18 Mei 2006', 'Ketajen - Gedangan - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 624, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(625, 'Anggun Feby Septianti', '625', '2025', 'Sidoarjo, 3 September 2006', 'Terik - Krian - Sidoarjo', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 625, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(626, 'Anis Bela Safira El Haq', '626', '2025', 'Sidoarjo, 06 September 2007', 'Janti - Tulangan - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 626, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(627, 'Ardhani Rifda Salila', '627', '2025', 'Sidoarjo, 7 Januari 2005', 'Karangtengah - Winongan - Sidoarjo', NULL, NULL, NULL, 'Guru', NULL, NULL, NULL, 627, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(628, 'Arifah Husfi Qothrun Nada', '628', '2025', 'Sidoarjo, 29 April 2007', 'Bangsri - Sukodono - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 628, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(629, 'A\'zhamil Mu\'abbad', '629', '2025', 'Sidoarjo, 30 Januari 2007', 'Junwangi - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 629, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(630, 'Azkia Fadhilatul Fasya Al - Hakim', '630', '2025', 'Mojokerto, 6 Maret 2006', 'Kemasantani - Gondang - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 630, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(631, 'Azra Muzza Setyani', '631', '2025', 'Mojokerto, 24 November 2007', 'Pekukuhan - Mojosari - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 631, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(632, 'Brilliant Al Fariz', '632', '2025', 'Mojokerto, 10 Maret 2007', 'Ketapanrame - Trawas - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 632, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(633, 'Citra Anggun Cahyani', '633', '2025', 'Mojokerto, 04 Juni 2007', 'Awang Awang - Mojosari - Mojokerto', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 633, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(634, 'Dedik Setiawan', '634', '2025', 'Mojokerto, 28 Februari 2007', 'Sumbertanggul - Mojosari - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 634, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(635, 'Dikrul Faizin', '635', '2025', 'Mojokerto, 13 April 2006', 'Seloliman - Trawas - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 635, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(636, 'Dwi Hesti Arum Niswari', '636', '2025', 'Blora, 06 April 2008', 'Bulakan - Randublatung - Blora', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 636, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(637, 'Eka Sri Ariani Ningsih', '637', '2025', 'Sidoarjo, 07 Februari 2007', 'Terik - Krian - Sidoarjo', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 637, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(638, 'Elga Saputra', '638', '2025', 'Sidoarjo, 29 April 2007', 'Penambangan - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 638, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(639, 'Erlicya Karunia Mar\'atus Solihah', '639', '2025', 'Mojokerto, 5 Maret 2007', 'Tunggalpager - Pungging - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 639, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(640, 'Ersya Putri Apriliya Salsabela', '640', '2025', 'Blora, 12 April 2007', 'Sumberejo - Randublatung - Blora', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 640, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(641, 'Faizatus Silvia Dewi', '641', '2025', 'Sidoarjo, 09 Maret 2007', 'Watugolong - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 641, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(642, 'Farel Firmansyah', '642', '2025', 'Sidoarjo, 25 Juli 2007', 'Krembangan - Taman - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 642, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(643, 'Firda Rizqy Amalya', '643', '2025', 'Gresik, 21 November 2007', 'Sedengan Mijen - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 643, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(644, 'Fithrotul Laili Hanifah', '644', '2025', 'Mojokerto, 18 Juni 2006', 'Ngrowo - Bangsal - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 644, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(645, 'Fitri Puji Lestari', '645', '2025', 'Sidoarjo, 26 April 2006', 'Terik - Krian - Sidoarjo', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 645, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(646, 'Fitriani Dewi Andini', '646', '2025', 'Sidoarjo, 3 Oktober 2006', 'Lajuk - Porong - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 646, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(647, 'Habib Husain Mahrus', '647', '2025', 'Sidoarjo, 28 November 2006', 'Wonokasian - Wonoayu - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 647, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(648, 'Habibah Al Kibtiyah', '648', '2025', 'Sidoarjo, 16 Mei 2007', 'Banjaran - Driyorejo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 648, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(649, 'Hafiz Putra Permana', '649', '2025', 'Sidoarjo, 4 April 2007', 'Cangkingsari - Sukodono - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 649, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(650, 'Hamka Dwi Pratama Sukma', '650', '2025', 'Jakarta, 25 Mei 2007', 'Kapuk - Cengkareng - Jakarta Barat', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 650, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(651, 'Irfania Nur Aula', '651', '2025', 'Mojokerto, 8 April 2005', 'Putat Jaya - Sawahan - Surabaya', NULL, NULL, NULL, 'Guru', NULL, NULL, NULL, 651, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(652, 'Irsyad Faridz Ratna Habibi', '652', '2025', 'Surabaya, 15 Maret 2007', 'Baratajaya - Gubeng - Surabaya', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 652, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(653, 'Izzatin Nisa', '653', '2025', 'Sidoarjo, 23 Mei 2007', 'Kebaron - Tulangan - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 653, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(654, 'Jhida Ulul Azmi', '654', '2025', 'Sidoarjo, 27 Juni 2006', 'Terik - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 654, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(655, 'Jihan Nila Ayu Safanti', '655', '2025', 'Sidoarjo, 28 Januari 2007', 'Terungwetan - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 655, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(656, 'Khoirotun Nadhiroh', '656', '2025', 'Sidoarjo, 20 April 2006', 'Turi - Prambon - Sidoarjo', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 656, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(657, 'Lailatul Andiyah', '657', '2025', 'Mojokerto, 19 Juli 2007', 'Kebondalem - Mojosari - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 657, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(658, 'Lailatus Sya\'bani Syarifa', '658', '2025', 'Sidoarjo, 02 September 2007', 'Taman - Taman - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 658, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(659, 'Lukman Hakim', '659', '2025', 'Sidoarjo, 13 Oktober 2006', 'Keraton - Krian - Sidoarjo', 'SMA Raden Rahmat Balongbendo', NULL, NULL, 'Guru', NULL, NULL, NULL, 659, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(660, 'M. Alif Arafat', '660', '2025', 'Pasuruan, 11 Maret 2006', 'Kepulungan - Gempol - Pasuruan', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 660, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(661, 'M. Bahrus Salam', '661', '2025', 'Malang, 22 Februari 2006', 'Krajan - Gondang Legi - Malang', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 661, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(662, 'M. Fahmi Mubarok', '662', '2025', 'Sidoarjo, 15 Maret 2007', 'Wonoayu - Gempol - Pasuruan', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 662, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(663, 'M. Faiqur Rusdi Ubaidillah', '663', '2025', 'Sidoarjo, 13 September 2006', 'Terungkulon - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 663, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(664, 'M. Fawwas Khabiburrocman', '664', '2025', 'Sidoarjo, 24 November 2006', 'Trosobo - Taman - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 664, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(665, 'M. Jifani Maula Z.', '665', '2025', 'Sidoarjo, 11 Juli 2007', 'Banjarsari - Buduran - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 665, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(666, 'M. Nurul Fahmi', '666', '2025', 'Mojokerto, 5 September 2006', 'Kedungudi - Trawas - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 666, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(667, 'M. Rajib Maulana', '667', '2025', 'Sidoarjo, 12 Agustus 2006', 'Segodo Bancang - Tarik - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 667, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(668, 'M. Rico Syaifulloh', '668', '2025', 'Sidoarjo, 24 Desember 2006', 'Seketi - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 668, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(669, 'M. Sirojuddin Khasani', '669', '2025', 'Sidoarjo, 24 Mei 2007', 'Bebekan - Taman - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 669, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(670, 'M. Zaim Dzul Fauz', '670', '2025', 'Kendal, 15 Desember 2008', 'Poncorejo - Gemuh - Kendal', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 670, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(671, 'M. Zidan Naf\'an S.', '671', '2025', 'Sidoarjo, 24 Juni 2006', 'Candinegoro - Wonoayu - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 671, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(672, 'Marsa Nur Abidah', '672', '2025', 'Mojokerto, 19 September 2006', 'Mojorejo - Pungging - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 672, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(673, 'Milania Karimatus Solikhah', '673', '2025', 'Mojokerto, 30 Agustus 2006', 'Purwojati - Ngoro - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 673, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(674, 'Moch. Iqbal Dimas Aryanto', '674', '2025', 'Sidoarjo, 14 Mei 2006', 'Grabagan - Tulangan - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 674, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(675, 'Mochamad Nafis Al-Dafi', '675', '2025', 'Mojokerto, 14 September 2006', 'Sumput - Sidoarjo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 675, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(676, 'Mochammad Yoga Sundawa', '676', '2025', 'Mojokerto, 02 Agustus 2007', 'Sumbertebu - Bangsal - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 676, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(677, 'Moh. Farhan', '677', '2025', 'Sidoarjo, 8 April 2006', 'Seketi - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 677, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(678, 'Mohamad Ilham Nasrulloh', '678', '2025', 'Sidoarjo, 13 Desember 2006', 'Kepadangan - Tulangan - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 678, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(679, 'Mohamad Noval Hidayatulloh', '679', '2025', 'Mojokerto, 29 Agustus 2006', 'Mojorejo - Pungging - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 679, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(680, 'Moza Maulina Fanansa', '680', '2025', 'Sidoarjo, 22 Maret 2007', 'Sumput - Driyorejo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 680, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(681, 'Muh. Alfan Nurullah', '681', '2025', 'Surabaya, 12 Maret 2006', 'Lontar - Sambikerep - Surabaya', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 681, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(682, 'Muh. Farid Fahrurrozi', '682', '2025', 'Klaten, 29 Juni 2007', 'Klantingsari -  Tarik - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 682, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(683, 'Muhammad Abdillah Agustian', '683', '2025', 'Pasuruan, 12 Agustus 2006', 'Kebon Waris - Pandaan - Pasuruan', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 683, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(684, 'Muhammad Ainur Rofiq', '684', '2025', 'Gresik, 9 Desember 2006', 'Mojosarirejo - Driyorejo - Gresik', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 684, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(685, 'Muhammad Akbar Aulia Nur', '685', '2025', 'Pekalongan, 19 Januari 2007', 'Ngagel Rejo - Wonokromo - Surabaya', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 685, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(686, 'Muhammad Andika Fikri Haidari', '686', '2025', 'Sidoarjo, 01 Januari 2006', 'Bligo - Candi - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 686, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(687, 'Muhammad Dhani Prisanto', '687', '2025', 'Mojokerto, 15 Mei 2007', 'Purwojati - Ngoro - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 687, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(688, 'Muhammad Faizin', '688', '2025', 'Pasuruan, 17 September 2007', 'Ngerong - Gempol - Pasuruan', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 688, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(689, 'Muhammad Hisyam Maulana', '689', '2025', 'Surabaya, 03 Januari 2007', 'Paninan Lemah Putih - Wringinanom - Gresik', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 689, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(690, 'Muhammad Iqbal Maulana Ishaq', '690', '2025', 'Sidoarjo, 2 Februari 2007', 'Krembangan - Taman - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 690, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(691, 'Muhammad Ja\'far Shodiq', '691', '2025', 'Mojokerto, 09 Desember 2006', 'Kwatu - Mojoanyar - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 691, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(692, 'Muhammad Nafis Ramadhani', '692', '2025', 'Sidoarjo, 28 September 2006', 'Sidodadi - Taman - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 692, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(693, 'Muhammad Rafli Akbar', '693', '2025', 'Mojokerto, 27 Desember 2006', 'Awang Awang - Mojosari - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 693, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(694, 'Muhammad Ridik Zakaria', '694', '2025', 'Sidoarjo, 27 September 2006', 'Tanggul - Wonoayu - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 694, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(695, 'Nabila Qolby Nurani', '695', '2025', 'Sidoarjo, 25 Juni 2006', 'Tempel - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 695, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(696, 'Nadhifatul Ainiyah', '696', '2025', 'Sidoarjo, 1 Agustus 2006', 'Pager Ngumbuk - Wonoayu - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 696, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(697, 'Nadhira Chalita Putri', '697', '2025', 'Surabaya, 8 Januari 2007', 'Ngaresrejo - Sukodono - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 697, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(698, 'Nadin Nur Masruroh', '698', '2025', 'Lamongan, 09 Februari 2007', 'Tambakploso - Turi - Lamongan', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 698, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(699, 'Nafisa Ad Dzikra', '699', '2025', 'Sidoarjo, 30 Maret 2007', 'Lajuk - Porong - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 699, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(700, 'Nailah Azzah Syuraih', '700', '2025', 'Malang, 25 Juli 2006', 'Wonodadi - Kutorejo - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 700, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(701, 'Nandito Maulana', '701', '2025', 'Surabaya, 15 Juni 2007', 'Terik - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 701, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(702, 'Nasya Rahmadiana', '702', '2025', 'Ciamis, 13 Maret 2007', 'Jenggot - Krembung - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 702, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(703, 'Natasya Nur Ameliatus Solikhah', '703', '2025', 'Pasuruan, 31 Desember 2006', 'Bulusari - Gempol - Pasuruan', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 703, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(704, 'Ni\'matus Sya\'dhiyah', '704', '2025', 'Sidoarjo, 30 April 2007', 'Tlasih - Tulangan - Sidoarjo', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 704, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(705, 'Njut Prio Nughroho', '705', '2025', 'Wonogiri, 22 April 2007', 'Ngrompak - Jatisrono - Wonogiri', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 705, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(706, 'Nofia Rifdah Yanti', '706', '2025', 'Sidoarjo, 27 Agustus 2006', 'Wonokarang - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 706, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(707, 'Nudialis Sholikhah', '707', '2025', 'Sidoarjo, 27 April 2007', 'Jatikalang - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 707, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(708, 'Nur Aini Faramayanti', '708', '2025', 'Sidoarjo, 30 April 2007', 'Kedungrawan - Krembung - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 708, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(709, 'Nur Khoirun Nisak', '709', '2025', 'Sidoarjo, 4 Desember 2006', 'Seketi - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 709, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(710, 'Nur Muhammad Hasbi', '710', '2025', 'Mojokerto, 02 April 2007', 'Tamiajeng - Trawas - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 710, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(711, 'Nur Mukhibbatul Amelia', '711', '2025', 'Sidoarjo, 01 Mei 2007', 'Seketi - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 711, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(712, 'Nurul Aisyah', '712', '2025', 'Sidoarjo, 1 Juni 2007', 'Simpang - Prambon - Sidoarjo', NULL, NULL, NULL, 'Guru', NULL, NULL, NULL, 712, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(713, 'Nurul Hidayati', '713', '2025', 'Sidoarjo, 12 Februari 2007', 'Tempel - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 713, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(714, 'Nurul Rifah', '714', '2025', 'Mojokerto, 25 Agustus 2007', 'Tunggalpager - Pungging - Mojokerto', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 714, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(715, 'Nurun Alfira Aulia Nisa\'', '715', '2025', 'Sidoarjo, 3 Mei 2007', 'Wonokarang - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 715, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(716, 'Octavia Dwi Fitria', '716', '2025', 'Sidoarjo, 28 Oktober 2006', 'Kebaron - Tulangan - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 716, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(717, 'Putri Nur Ilmiyah', '717', '2025', 'Mojokerto, 3 Maret 2007', 'Randegan - Tanggulangin - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 717, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(718, 'Rachmad Sholichudin Amri', '718', '2025', 'Sidoarjo, 22 Februari 2007', 'Kepadangan - Tulangan - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 718, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(719, 'Radinda Ayuba Mar\'atus Solicha', '719', '2025', 'Sidoarjo, 09 Juli 2007', 'Bogem Pinggir - Balongbendo - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 719, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(720, 'Rahma Nur Isnani Fitriyani', '720', '2025', 'Mojokerto, 30 Oktober 2006', 'Jabontegal - Pungging - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 720, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(721, 'Rahmat Arrobi', '721', '2025', 'Sidoarjo, 11 November 2006', 'Popoh - Wonoayu - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 721, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(722, 'Raihan Shabbah Al Farizy', '722', '2025', 'Sidoarjo, 20 Desember 2006', 'Ganting - Gedangan - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 722, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(723, 'Raju Anggun Nadzifa', '723', '2025', 'Mojokerto, 25 Agustus 2006', 'Seduri - Mojosari - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 723, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(724, 'Rey Hanun Niha Azkiyah', '724', '2025', 'Sidoarjo, 24 Juli 2006', 'Jogosatru - Sukodono - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 724, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(725, 'Risalatul Muawwanah', '725', '2025', 'Mojokerto, 12 September 2007', 'Kemiri - Pacet - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 725, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(726, 'Riyan Ardiansah', '726', '2025', 'Gresik, 07 Desember 2006', 'Wringinanom - Wringinanom - Gresik', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 726, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(727, 'Sakina Azalia', '727', '2025', 'Mojokerto, 30 Mei 2007', 'Balongmojo - Puri - Mojokerto', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 727, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(728, 'Sarah Alya Mukhbita', '728', '2025', 'Surabaya, 22 November 2006', 'Grabagan - Tulangan - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 728, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(729, 'Shalahudin Yusuf Askar', '729', '2025', 'Sidoarjo, 15 Oktober 2006', 'Sidomulyo - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 729, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(730, 'Silvia Zaenab', '730', '2025', 'Sidoarjo, 24 Agustus 2004', 'Watugolong - Krian - Sidoarjo', NULL, NULL, NULL, 'Guru', NULL, NULL, NULL, 730, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(731, 'Sisca Amaditya', '731', '2025', 'Sidoarjo, 19 April 2007', 'Simogirang - Prambon - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 731, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(732, 'Siti Fadhilatul Munawwaroh', '732', '2025', 'Lumajang, 30 Juni 2006', 'Tempel - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 732, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(733, 'Siti Uluwil Himmah', '733', '2025', 'Sidoarjo, 17 Mei 2006', 'Junwangi - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 733, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(734, 'Siti Uswatun Khasanah', '734', '2025', 'Mojokerto, 11 Januari 2007', 'Mojokumpul - Kemlagi - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 734, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(735, 'Stanley Hans Kartaradjasa IX', '735', '2025', 'Mojokerto, 10 Oktober 2007', 'Singowangi - Kutorejo - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 735, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(736, 'Sulikah', '736', '2025', 'Gresik, 13 Desember 2005', 'Larangan - Driyorejo - Gresik', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 736, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(737, 'Syifa Sa\'idah', '737', '2025', 'Jakarta, 15 Juli 2007', 'Wangkal - Krembung - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 737, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(738, 'Taufiq Syahrul Prasetyo', '738', '2025', 'Sidoarjo, 22 April 2006', 'Kalimati - Tarik - Sidoarjo', 'SMK UBP Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 738, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(739, 'Titik Nur Azizah', '739', '2025', 'Mojokerto, 03 Oktober 2006', 'Peterongan - Bangsal - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 739, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(740, 'Ussy Nuzulah', '740', '2025', 'Mojokerto, 12 April 2007', 'Karangdiyeng - Kutorejo - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 740, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(741, 'Violetta Kartika Putri', '741', '2025', 'Sidoarjo, 02 Agustus 2006', 'Terik - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 741, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(742, 'Virza Aulia', '742', '2025', 'Mojokerto, 17 Juli 2006', 'Bandarasri - Ngoro - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 742, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(743, 'Yanuar Rifqi Al Ghifary', '743', '2025', 'Sidoarjo, 10 Januari 2007', 'Tulangan - Tulangan - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 743, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(744, 'Zakky Ahmad Firdaus', '744', '2025', 'Kediri, 22 Desember 2006', 'Sidodadi - Taman - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 744, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(745, 'Zaskia Nur Halimah', '745', '2025', 'Sidoarjo, 21 Januari 2007', 'Watugolong - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 745, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(746, 'Dewi Setyaningsih, S.H.I.', '746', '2020', 'Mojokerto, 4 September 1981', 'Wates - Magersari - Mojokerto', 'S1 - UINSA Surabaya', NULL, NULL, 'Guru', NULL, '081235238389', NULL, 746, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(747, 'Wiwin Winarsih', '747', '2020', 'Jombang, 9 Februari 1984', 'Wates - Magersari - Kota Mjk', 'SMA', NULL, NULL, 'Guru', NULL, '081230431656', NULL, 747, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(748, 'Khoirunnisa', '748', '2020', 'Mojokerto,1 Desember 1991', 'Mlirip - Jetis - Mojokerto', 'SMA', NULL, NULL, 'Guru', NULL, '081216826584', NULL, 748, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(749, 'Siti Suwaibah', '749', '2018', 'Mojokerto, 21 Mei 1967', 'Jabontegal - Pungging - Mojokerto', 'SD/ sederajat', NULL, NULL, 'Guru', NULL, '085231260349', NULL, 749, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(750, 'Sumainah', '750', '2018', 'Mojokerto, 3 Oktober 1963', 'Jabontegal - Pungging - Mojokerto', 'SD/ sederajat', NULL, NULL, 'Guru', NULL, '-', NULL, 750, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(751, 'Umrotul Amanah', '751', '2024', 'Sidoarjo, 25 Oktober 1980', 'Gamping - Krian - Sidoarjo', '-', NULL, NULL, 'Guru', NULL, '0881026132904', NULL, 751, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(752, 'Lulus Sukasih', '752', '2025', 'Mojokerto, 6 September 1974', 'Seduri - Mojosari - Mojokerto', '-', NULL, NULL, 'Guru', NULL, '082334103397', NULL, 752, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(753, 'Kuliyati', '753', '2025', 'Mojokerto, 3 Juli 1969', 'Jabontegal - Pungging - Mojokerto', '-', NULL, NULL, 'Guru', NULL, '085604403622', NULL, 753, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(754, 'Fenni Farisa', '754', '2025', 'Mojokerto, 12 Maret 1989', 'Windurejo - Kutogirang - Sidoarjo', '-', NULL, NULL, 'Guru', NULL, '085233294944', NULL, 754, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(755, 'Dewi Rahmawati', '755', '2025', 'Mojokerto,13 Oktober 1988', 'Mojorejo - Pungging - Mojokerto', '-', NULL, NULL, 'Guru', NULL, '085785708986', NULL, 755, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(756, 'Winarti', '756', '2025', 'Sidoarjo, 9 Mei 1979', 'Pejangkungan - Prambon - Sidoarjo', '-', NULL, NULL, 'Guru', NULL, '085607303371', NULL, 756, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(757, 'Siti Niami', '757', '2025', 'Mojokerto, 17 April 1971', 'Leminggir - Mojosari - Mojokerto', '-', NULL, NULL, 'Guru', NULL, '087719613774', NULL, 757, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(758, 'Linda Retno Ambarwati', '758', '2025', 'Mojokerto, 18 Juni 1993', 'Jabontegal - Pungging - Mojokerto', '-', NULL, NULL, 'Guru', NULL, '089654617013', NULL, 758, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(759, 'Iroh Wati', '759', '2025', 'Sidoarjo, 7 Juli 1985', 'Kedungboco - Tarik -Sidoarjo', '-', NULL, NULL, 'Guru', NULL, '085746938499', NULL, 759, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(760, 'Nur Sholikhah', '760', '2025', 'Mojokerto, 31 Mei 19990', 'Lebalsono - Pungging - Mojokerto', '-', NULL, NULL, 'Guru', NULL, '085748142066', NULL, 760, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(761, 'Dwi Asmarawati', '761', '2025', 'Mojokerto.14 Oktober 1987', 'Jabontegal - Pungging - Mojokerto', '-', NULL, NULL, 'Guru', NULL, '085800246993', NULL, 761, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(762, 'Rusmawati', '762', '2025', 'Mojokerto, 1 Januari 1987', 'Jabontegal - Pungging - Mojokerto', '-', NULL, NULL, 'Guru', NULL, '085706488732', NULL, 762, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(763, 'Wahyu Prihatin', '763', '2025', 'Sidoarjo, 15 Mei 1987', 'Kedungwonokerto - Prambon - Sidoarjo', '-', NULL, NULL, 'Guru', NULL, '082125471475', NULL, 763, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(764, 'Lilik Yaumi', '764', '2025', 'Mojokerto, 1 Mei 1981', 'Watukenongo - Pungging - Mojokerto', '-', NULL, NULL, 'Guru', NULL, '081333517390', NULL, 764, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(765, 'Sri Handayani', '765', '2025', 'Mojokerto, 3 Januari 1977', 'Leminggir - Mojosari - Mojokerto', '-', NULL, NULL, 'Guru', NULL, '085700838441', NULL, 765, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(766, 'Heni Listyowati', '766', '2025', 'Mojokerto, 6 Juni 1980', 'Ngimbangan - Mojosari - Mojokerto', '-', NULL, NULL, 'Guru', NULL, '085814674731', NULL, 766, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(767, 'Supami', '767', '2025', 'Mojokerto, 28 September 1984', 'Segunung - Dlanggu - Mojokerto', '-', NULL, NULL, 'Guru', NULL, '08553235409', NULL, 767, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(768, 'Dewi Masyithoh', '768', '2025', 'Mojokerto, 23 Juni 1989', 'Jabontegal - Pungging - Mojokerto', '-', NULL, NULL, 'Guru', NULL, '085236625553', NULL, 768, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(769, 'Sriati', '769', '2025', 'Mojokerto, 31 Desember 1964', 'Jabontegal - Pungging - Mojokerto', '-', NULL, NULL, 'Guru', NULL, '081217570608', NULL, 769, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(770, 'Neni Khusnaini', '770', '2025', 'Mojokerto, 16 November 1990', 'Wonokusumo - Mojosari - Mojokerto', '-', NULL, NULL, 'Guru', NULL, '081615339908', NULL, 770, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(771, 'Mustopo', '771', '2020', 'Mojokerto, 12 Juli 1965', 'Jabontegal - Pungging - Mojokerto', 'SMA', NULL, NULL, 'Guru', NULL, '081333519597', NULL, 771, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(772, 'Muchtar', '772', '2024', 'Mojokerto, 7 Mei 1974', 'Srigading - Ngoro - Mojokerto', '-', NULL, NULL, 'Guru', NULL, '085230462363', NULL, 772, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(773, 'Iman Nuvi Alfian Budi Utomo, ST.', '773', '2021', 'Lamongan, 9 Juni 1990', 'Pataan - Sambeng - Lamongan', 'S1', NULL, NULL, 'Guru', NULL, '085232463890', NULL, 773, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(774, 'Akhmad Indra Setiawan', '774', '2024', 'Mojokerto, 6 April 1999', 'Balongmojo - Puri - Mojokerto', NULL, NULL, NULL, 'Guru', NULL, '085791296604', NULL, 774, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(775, 'Mukhamad Sholeh', '775', '2021', 'Mojokerto, 3 juli 1970', 'Jabontegal - Pungging - Mojokerto', 'STM', NULL, NULL, 'Guru', NULL, '085730495255', NULL, 775, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(776, 'Suparno', '776', '2013', 'Magetan, 14 Maret 1977', 'Jabontegal - Pungging - Mojokerto', 'SLTA', NULL, NULL, 'Guru', NULL, '081232928608', NULL, 776, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(777, 'Muhammad Adi Purnomo, S.Pd.I.', '777', '2023', 'Mojokerto, 25 Januari 1993', 'Jabontegal - Pungging - Mojokerto', NULL, NULL, NULL, 'Guru', NULL, NULL, NULL, 777, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(778, 'Siyami', '778', '2019', 'Mojokerto, 17 Agustus 1974', 'Jabontegal - Pungging - Mojokerto', 'SMP', NULL, NULL, 'Guru', NULL, '-', NULL, 778, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(779, 'Rofiah', '779', '2020', 'Mojokerto, 1 April 1968', 'Ngimbangan - Mojosari - Mojokerto', 'SLTA (1986/1987)', NULL, NULL, 'Guru', NULL, '085921992306', NULL, 779, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(780, 'Moh. Yusril Amri, S.Kom.', '780', '2023', 'Sidoarjo, 25 April 1997', 'Balongtani - Jabon - Sidoarjo', NULL, NULL, NULL, 'Guru', NULL, '085808321921', NULL, 780, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(781, 'Moh. Basori', '781', '2016', 'Mojokerto, 14 Desember 1971', 'Ngoro - Ngoro - Mojokerto', 'SLTP', NULL, NULL, 'Guru', NULL, '085855707096', NULL, 781, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(782, 'Mahfud Ghozali', '782', '2020', 'Mojokerto, 27 Juli 1986', 'Jedong - Ngoro - Mojokerto', 'SMA (2005)', NULL, NULL, 'Guru', NULL, '08125939595', NULL, 782, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(783, '(H. Abd. Khayat) Syaiful Kahfi', '783', '2023', 'Sidoarjo, 30 Desember 1969', 'Tropodo - Krian - Sidoarjo', NULL, NULL, NULL, 'Guru', NULL, NULL, NULL, 783, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(784, 'Muhamad Fauji', '784', '2022', 'Sidoarjo,23 Juli 1997', 'Jabontegal - Pungging - Mojokerto', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, '081233545195', NULL, 784, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(785, 'Alvi Risqi', '785', '2020', 'Mojokerto, 21 Mei 2001', 'Randuarjo - Pungging - Mojokerto', 'SMK', NULL, NULL, 'Guru', NULL, '087762534720', NULL, 785, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(786, 'Muhammad Ifan Amirudin', '786', '2023', 'Sidoarjo, 7 Januari 2003', 'Terik - Krian - Sidoarjo', 'MA Nurul Islam', NULL, NULL, 'Guru', NULL, NULL, NULL, 786, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44'),
(787, 'Harry Koencoro Sulistrijono', '787', '2025', 'Surabaya, 12 April 1969', 'Sambilulu - Taman - Sidoarjo', NULL, NULL, NULL, 'Guru', NULL, '082132136943', NULL, 787, 1, '2025-12-19 20:50:44', '2025-12-19 20:50:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `system_updates`
--

CREATE TABLE `system_updates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` int(11) NOT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by_name` varchar(255) DEFAULT NULL,
  `status` enum('success','error','partial') NOT NULL DEFAULT 'success',
  `has_error` tinyint(1) NOT NULL DEFAULT 0,
  `steps_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`steps_data`)),
  `errors_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`errors_data`)),
  `output_data` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_khidmahs`
--

CREATE TABLE `unit_khidmahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video_url` text DEFAULT NULL,
  `video_id` text DEFAULT NULL,
  `narasi` longtext DEFAULT NULL,
  `intro_text` text DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `operational_hours` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('superadmin','admin','user') NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'ndiandie@gmail.com', 'superadmin', NULL, '$2y$12$ze/X3gaSU1IuUezVKDlInOzA/P2Fcz3PShjwTp44XH9p/Ysea1G/C', NULL, '2025-12-16 02:53:56', '2025-12-16 02:53:56'),
(2, 'Admin', 'admin@nuris.id', 'admin', NULL, '$2y$12$VUxUgHPtmGAtF20XHsJb7ODfOsE1k6VHc8j5N9KlFCVZn1d9UXUE2', NULL, '2025-12-16 02:53:56', '2025-12-16 02:53:56'),
(3, 'User', 'user@nuris.id', 'user', NULL, '$2y$12$h2mk0RzpQumVmAbTDAg63.K3HBWioIWwTo/VTcmzzy3rLjJxgIJGq', NULL, '2025-12-16 02:53:56', '2025-12-16 02:53:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_slug_unique` (`slug`);

--
-- Indeks untuk tabel `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `galleries_slug_unique` (`slug`);

--
-- Indeks untuk tabel `gallery_items`
--
ALTER TABLE `gallery_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_items_gallery_id_foreign` (`gallery_id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_slug_unique` (`slug`),
  ADD KEY `menus_parent_id_foreign` (`parent_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pengurus_dewan_pusats`
--
ALTER TABLE `pengurus_dewan_pusats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengurus_pesantrens`
--
ALTER TABLE `pengurus_pesantrens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengurus_units`
--
ALTER TABLE `pengurus_units`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengurus_yayasans`
--
ALTER TABLE `pengurus_yayasans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `program_unggulans`
--
ALTER TABLE `program_unggulans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `program_unggulans_slug_unique` (`slug`);

--
-- Indeks untuk tabel `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `site_settings_key_unique` (`key`);

--
-- Indeks untuk tabel `slideshows`
--
ALTER TABLE `slideshows`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `system_updates`
--
ALTER TABLE `system_updates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `system_updates_version_unique` (`version`),
  ADD KEY `system_updates_updated_by_foreign` (`updated_by`);

--
-- Indeks untuk tabel `unit_khidmahs`
--
ALTER TABLE `unit_khidmahs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unit_khidmahs_slug_unique` (`slug`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `gallery_items`
--
ALTER TABLE `gallery_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengurus_dewan_pusats`
--
ALTER TABLE `pengurus_dewan_pusats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengurus_pesantrens`
--
ALTER TABLE `pengurus_pesantrens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengurus_units`
--
ALTER TABLE `pengurus_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengurus_yayasans`
--
ALTER TABLE `pengurus_yayasans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `program_unggulans`
--
ALTER TABLE `program_unggulans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `slideshows`
--
ALTER TABLE `slideshows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=788;

--
-- AUTO_INCREMENT untuk tabel `system_updates`
--
ALTER TABLE `system_updates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `unit_khidmahs`
--
ALTER TABLE `unit_khidmahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gallery_items`
--
ALTER TABLE `gallery_items`
  ADD CONSTRAINT `gallery_items_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `system_updates`
--
ALTER TABLE `system_updates`
  ADD CONSTRAINT `system_updates_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
