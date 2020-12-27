-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2020 pada 15.58
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendaftaran_lab_riset_esd`
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
(4, '2020_12_10_135255_create_uploadfile_table', 1);

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
-- Struktur dari tabel `uploadfile`
--

CREATE TABLE `uploadfile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `file_CV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_CV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_KSM` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_KSM` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_ML` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_ML` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_Personalities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_Personalities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extensi_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `uploadfile`
--

INSERT INTO `uploadfile` (`id`, `id_user`, `file_CV`, `path_CV`, `file_KSM`, `path_KSM`, `file_ML`, `path_ML`, `file_Personalities`, `path_Personalities`, `extensi_file`, `created_at`, `updated_at`) VALUES
(21, 6, 'CV_1202190254.pdf', 'public/document/fjufezq6aXvKdA4V6OtyBEE4J3AGw3T9JaHQgWOX.pdf', 'KSM_1202190254.pdf', 'public/document/Zx9Y8aR2Ydu8nSdzNp2fWXo3uTW0OyzOFVlsNkR2.pdf', 'ML_1202190254_ESD.pdf', 'public/document/zMh0hLUmZmCxKcAqeRgFPunsybb84u6biZZqWdWi.pdf', 'Personalities_1202190254.pdf', 'public/document/3wEuQBN5i6Hx9qfCTXdanyHTQvr0gYnVR8OK00GL.pdf', 'pdf', '2020-12-26 08:22:21', '2020-12-26 08:22:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` int(11) NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nim`, `nama_lengkap`, `kelas`, `jenis_kelamin`, `email`, `email_verified_at`, `isAdmin`, `password`, `nomor_telepon`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 1, 'Admin', 'None', 'None', 'admin@admin.com', NULL, 1, '$2y$10$uACGmM7bIVTJX4ViyeOypuitFyMhP4D441eYw6dxGxaNrzo65gDGa', '1', 'A', NULL, '2020-12-20 04:55:28', '2020-12-20 04:55:28'),
(6, 1202190254, 'Ahmad Fiqri', 'SI-43-02', 'Laki-Laki', 'ahmad@gmail.com', NULL, NULL, '$2y$10$w1HsLPITKBeYH06yqUsr3u8Wd6Eue7GGfzv1tvT1DHmQIAmeY2hbW', '082216136575', 'Sedang Diproses', NULL, '2020-12-22 00:34:12', '2020-12-25 21:23:10'),
(9, 1202194161, 'Izung Brilian', 'SI-43-02', 'Laki-Laki', 'izung@gmail.com', NULL, NULL, '$2y$10$LYX7zueHdzlSW0JlEWW7uePrMOxa5n66JKnMgALly.L2UY5XMFrSi', '082922818181', 'Tidak Diterima', NULL, '2020-12-23 08:14:59', '2020-12-23 08:17:53');

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
-- Indeks untuk tabel `uploadfile`
--
ALTER TABLE `uploadfile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uploadfile_id_user_foreign` (`id_user`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `uploadfile`
--
ALTER TABLE `uploadfile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `uploadfile`
--
ALTER TABLE `uploadfile`
  ADD CONSTRAINT `uploadfile_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
