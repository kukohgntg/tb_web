-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2024 pada 02.01
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_web`
--
-- --------------------------------------------------------
--
-- Struktur dari tabel `books`
--
CREATE TABLE
  `books` (
    `id` bigint (20) UNSIGNED NOT NULL,
    `book_code` varchar(255) NOT NULL,
    `title` varchar(255) NOT NULL,
    `status` varchar(255) NOT NULL DEFAULT 'in stock',
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------
--
-- Struktur dari tabel `book_category`
--
CREATE TABLE
  `book_category` (
    `id` bigint (20) UNSIGNED NOT NULL,
    `book_id` bigint (20) UNSIGNED NOT NULL,
    `category_id` bigint (20) UNSIGNED NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------
--
-- Struktur dari tabel `categories`
--
CREATE TABLE
  `categories` (
    `id` bigint (20) UNSIGNED NOT NULL,
    `name` varchar(100) NOT NULL,
    `slug` varchar(255) DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    `deleted_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--
INSERT INTO
  `categories` (
    `id`,
    `name`,
    `slug`,
    `created_at`,
    `updated_at`,
    `deleted_at`
  )
VALUES
  (1, 'comic', 'comic', NULL, NULL, NULL),
  (2, 'novel', 'novel', NULL, NULL, NULL),
  (3, 'fantasy', 'fantasy', NULL, NULL, NULL),
  (4, 'fiction', 'fiction', NULL, NULL, NULL),
  (5, 'mystery', 'mystery', NULL, NULL, NULL),
  (6, 'horror', 'horror', NULL, NULL, NULL),
  (7, 'romance', 'romance', NULL, NULL, NULL),
  (8, 'western', 'western', NULL, NULL, NULL),
  (
    9,
    'test',
    'test',
    '2024-01-14 14:10:26',
    '2024-01-14 14:10:26',
    NULL
  ),
  (
    10,
    'add',
    'add',
    '2024-01-14 14:21:19',
    '2024-01-15 10:06:17',
    '2024-01-15 10:06:17'
  ),
  (
    11,
    'up',
    'up',
    '2024-01-14 14:26:48',
    '2024-01-15 17:01:57',
    '2024-01-15 17:01:57'
  ),
  (
    13,
    'test 4',
    'test-4',
    '2024-01-15 08:32:27',
    '2024-01-15 10:06:01',
    NULL
  );

-- --------------------------------------------------------
--
-- Struktur dari tabel `failed_jobs`
--
CREATE TABLE
  `failed_jobs` (
    `id` bigint (20) UNSIGNED NOT NULL,
    `uuid` varchar(255) NOT NULL,
    `connection` text NOT NULL,
    `queue` text NOT NULL,
    `payload` longtext NOT NULL,
    `exception` longtext NOT NULL,
    `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------
--
-- Struktur dari tabel `migrations`
--
CREATE TABLE
  `migrations` (
    `id` int (10) UNSIGNED NOT NULL,
    `migration` varchar(255) NOT NULL,
    `batch` int (11) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--
INSERT INTO
  `migrations` (`id`, `migration`, `batch`)
VALUES
  (1, '2014_10_12_000000_create_users_table', 1),
  (
    2,
    '2014_10_12_100000_create_password_reset_tokens_table',
    1
  ),
  (
    3,
    '2019_08_19_000000_create_failed_jobs_table',
    1
  ),
  (
    4,
    '2019_12_14_000001_create_personal_access_tokens_table',
    1
  ),
  (5, '2024_01_10_104848_create_roles_table', 1),
  (
    7,
    '2024_01_10_122101_add_role_colum_to_users_table',
    2
  ),
  (
    11,
    '2024_01_10_123149_create_categories_table',
    3
  ),
  (12, '2024_01_10_123333_create_books_table', 3),
  (
    13,
    '2024_01_10_123757_create_book_category_table',
    3
  ),
  (14, '2024_01_10_130322_create_rent_logs_table', 4),
  (
    15,
    '2024_01_15_151120_add_slug_colum_to_categories_table',
    5
  ),
  (
    16,
    '2024_01_15_152440_change_slug_column_into_nullable_in_categories_table',
    6
  ),
  (
    17,
    '2024_01_15_161312_add_soft_delete_column_to_categories_table',
    7
  );

-- --------------------------------------------------------
--
-- Struktur dari tabel `password_reset_tokens`
--
CREATE TABLE
  `password_reset_tokens` (
    `email` varchar(255) NOT NULL,
    `token` varchar(255) NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------
--
-- Struktur dari tabel `personal_access_tokens`
--
CREATE TABLE
  `personal_access_tokens` (
    `id` bigint (20) UNSIGNED NOT NULL,
    `tokenable_type` varchar(255) NOT NULL,
    `tokenable_id` bigint (20) UNSIGNED NOT NULL,
    `name` varchar(255) NOT NULL,
    `token` varchar(64) NOT NULL,
    `abilities` text DEFAULT NULL,
    `last_used_at` timestamp NULL DEFAULT NULL,
    `expires_at` timestamp NULL DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------
--
-- Struktur dari tabel `rent_logs`
--
CREATE TABLE
  `rent_logs` (
    `id` bigint (20) UNSIGNED NOT NULL,
    `user_id` bigint (20) UNSIGNED NOT NULL,
    `book_id` bigint (20) UNSIGNED NOT NULL,
    `rent_date` date NOT NULL,
    `return_date` date NOT NULL,
    `actual_return_date` date DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

-- --------------------------------------------------------
--
-- Struktur dari tabel `roles`
--
CREATE TABLE
  `roles` (
    `id` bigint (20) UNSIGNED NOT NULL,
    `name` varchar(100) NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--
INSERT INTO
  `roles` (`id`, `name`, `created_at`, `updated_at`)
VALUES
  (1, 'admin', NULL, NULL),
  (2, 'client', NULL, NULL);

-- --------------------------------------------------------
--
-- Struktur dari tabel `users`
--
CREATE TABLE
  `users` (
    `id` bigint (20) UNSIGNED NOT NULL,
    `username` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `phone` varchar(13) DEFAULT NULL,
    `address` text NOT NULL,
    `status` varchar(100) NOT NULL DEFAULT 'inactive',
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    `role_id` bigint (20) UNSIGNED NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--
INSERT INTO
  `users` (
    `id`,
    `username`,
    `password`,
    `phone`,
    `address`,
    `status`,
    `created_at`,
    `updated_at`,
    `role_id`
  )
VALUES
  (
    1,
    'admin',
    '$2y$10$4vCFY2CLMPdN5eptNP6DgeQaMoRO7V0au7QWNUiENeO.Im/AQOODy',
    NULL,
    'toko buku',
    'active',
    NULL,
    NULL,
    1
  ),
  (
    2,
    'kukohfr',
    '$2y$10$4vCFY2CLMPdN5eptNP6DgeQaMoRO7V0au7QWNUiENeO.Im/AQOODy',
    NULL,
    'Jl. Bylira No.222a, Tunggulwulung, Kec. Lowokwaru, Kota Malang, Jawa Timur 65143',
    'inactive',
    NULL,
    NULL,
    2
  ),
  (
    3,
    'test',
    '$2y$10$ZwInKRtKwK6U5wVumwHTJ.i7r641gZ403.pXyzriotnIe7Hn4wY.a',
    NULL,
    'test',
    'active',
    NULL,
    NULL,
    2
  ),
  (
    4,
    'test2',
    '$2y$12$/6WEem.vxrEwA0IQR0U1QO8izr9Xw9a1jpvs1SCFtgsJApAUYgFI6',
    '085850533743',
    'test',
    'inactive',
    '2024-01-12 10:24:37',
    '2024-01-12 10:24:37',
    2
  ),
  (
    5,
    'test3',
    '$2y$12$3blgJPVN6T/9Ip7Ys9kkJevePPYjjxDg8SwLxkqo6X5t0wXTWDSkm',
    '085850533743',
    'test',
    'inactive',
    '2024-01-12 10:36:15',
    '2024-01-12 10:36:15',
    2
  ),
  (
    6,
    'test4',
    '$2y$12$NWuDs8XZk8/5shdFlu2EFOOI8SUXczbKkocOQtIgmNJQ/EJsB7gIu',
    '085850533743',
    'test',
    'inactive',
    '2024-01-12 14:11:35',
    '2024-01-12 14:11:35',
    2
  ),
  (
    7,
    'test5',
    '$2y$12$GvQb9epqhq1aeXSqMzrR0Ok6CDzDBBUtp4i4U69xITkBoAYvkwfZK',
    '085850533743',
    'test',
    'inactive',
    '2024-01-12 15:04:49',
    '2024-01-12 15:04:49',
    2
  );

--
-- Indexes for dumped tables
--
--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books` ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `book_category`
--
ALTER TABLE `book_category` ADD PRIMARY KEY (`id`),
ADD KEY `book_category_book_id_foreign` (`book_id`),
ADD KEY `book_category_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories` ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs` ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations` ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens` ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens` ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`, `tokenable_id`);

--
-- Indeks untuk tabel `rent_logs`
--
ALTER TABLE `rent_logs` ADD PRIMARY KEY (`id`),
ADD KEY `rent_logs_user_id_foreign` (`user_id`),
ADD KEY `rent_logs_book_id_foreign` (`book_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles` ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users` ADD PRIMARY KEY (`id`),
ADD UNIQUE KEY `users_username_unique` (`username`),
ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--
--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books` MODIFY `id` bigint (20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `book_category`
--
ALTER TABLE `book_category` MODIFY `id` bigint (20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories` MODIFY `id` bigint (20) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 14;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs` MODIFY `id` bigint (20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations` MODIFY `id` int (10) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 18;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens` MODIFY `id` bigint (20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rent_logs`
--
ALTER TABLE `rent_logs` MODIFY `id` bigint (20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles` MODIFY `id` bigint (20) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users` MODIFY `id` bigint (20) UNSIGNED NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--
--
-- Ketidakleluasaan untuk tabel `book_category`
--
ALTER TABLE `book_category` ADD CONSTRAINT `book_category_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
ADD CONSTRAINT `book_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Ketidakleluasaan untuk tabel `rent_logs`
--
ALTER TABLE `rent_logs` ADD CONSTRAINT `rent_logs_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
ADD CONSTRAINT `rent_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users` ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;