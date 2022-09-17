-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Sep 2022 pada 18.11
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sirt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_07_26_044002_pengajuan', 1),
(5, '2022_09_01_031153_proses_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `kendala` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evidence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `catatan1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal1` date DEFAULT NULL,
  `tanggal2` date DEFAULT NULL,
  `tanggal3` date DEFAULT NULL,
  `foto2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `nama`, `nip`, `alat`, `lokasi`, `tanggal`, `kendala`, `evidence`, `created_at`, `updated_at`, `catatan1`, `catatan2`, `catatan3`, `tanggal1`, `tanggal2`, `tanggal3`, `foto2`, `foto3`) VALUES
(3, 'Falyan Zuril', '123123567414313', 'jam dinding', 'Ruang PDHP', '2022-08-12', 'Kaki Kursi Patah', 'DSC02347.JPG', '2022-08-10 19:45:08', '2022-09-11 19:18:39', 'laporan ini sudah diterima akan segera dilanjut ke tahap pengerjaan', NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL),
(4, 'Sepdrian', '4345675675867768', 'Westafel', 'Ruang PDHP', '2022-08-18', 'Kaki Meja Patah', 'DSC02343.JPG', '2022-08-17 23:59:19', '2022-09-11 19:22:09', 'laporan ini sudah diterima akan segera dilanjut ke tahap pengerjaan', NULL, NULL, '2022-09-12', NULL, NULL, NULL, NULL),
(5, 'Falyan Zuril-1', '13456098765643209876', 'jam dinding', 'Ruang Keuangan', '2022-08-27', 'Westafel suka berisik, keran macet', 'DSC02350.JPG', '2022-08-17 23:59:43', '2022-09-11 20:08:41', 'laporan ini sudah diterima akan segera dilanjut ke tahap pengerjaan', NULL, NULL, '2022-09-12', NULL, NULL, NULL, NULL),
(6, 'Falyan Zuril-11233214', '123123567414313', 'jam dinding', 'Ruang Keuangan', '2022-08-19', 'Daya baterai jam dinding sudah lemah', 'DSC02352.JPG', '2022-08-18 00:00:03', '2022-08-18 00:00:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Falyan Zuril-1', '123123567414313', 'jam dinding', 'Ruang Keuangan', '2022-08-19', 'Daya baterai jam dinding sudah lemah', 'DSC02343.JPG', '2022-08-18 00:01:59', '2022-09-11 19:53:31', 'laporan ini sudah diterima akan segera dilanjut ke tahap pengerjaan', NULL, NULL, '2022-09-12', NULL, NULL, NULL, NULL),
(9, 'Falyan Zuril-1', '4345675675867768', 'Genset', 'Parkiran', '2022-08-18', 'Genset Meledak', 'DSC02351.JPG', '2022-08-18 19:33:30', '2022-08-18 19:33:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Sepdrian', '123123567414313', 'AC', 'Ruang Keuangan', '2022-08-22', 'Kurang Dingin', 'DSC02346.JPG', '2022-08-22 03:34:15', '2022-08-22 03:34:15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Falyan Zuril', NULL, 'jam dinding', 'Ruang PDHP', '2022-09-10', 'Kaki Kursi Patah', 'WhatsApp Image 2022-08-31 at 15.45.10.jpeg', '2022-08-31 20:15:50', '2022-08-31 20:15:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, 'jam dinding', NULL, NULL, NULL, NULL, '2022-08-31 23:44:55', '2022-08-31 23:44:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `proses`
--

CREATE TABLE `proses` (
  `id` int(10) UNSIGNED NOT NULL,
  `alat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tangga2` date DEFAULT NULL,
  `tangga3` date DEFAULT NULL,
  `foto1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `proses`
--
ALTER TABLE `proses`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `proses`
--
ALTER TABLE `proses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
