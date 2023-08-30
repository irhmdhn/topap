-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jul 2023 pada 19.12
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
-- Database: `db_topap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `cust_id` bigint(20) UNSIGNED NOT NULL,
  `cust_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_gameid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_email`, `cust_phone`, `cust_gameid`, `created_at`, `updated_at`) VALUES
(1, NULL, '082351357305', '5103529692', '2023-07-28 06:17:21', '2023-07-28 06:17:21'),
(2, NULL, '081245120098', '5103529692', '2023-07-28 06:22:54', '2023-07-28 06:22:54'),
(3, NULL, '081627726638', 'Y29PVQPC0', '2023-07-28 06:27:38', '2023-07-28 06:27:38'),
(4, NULL, '089718836663', '4014813759994862560', '2023-07-28 06:30:51', '2023-07-28 06:30:51'),
(5, NULL, '087625553637', '116502997', '2023-07-28 06:32:41', '2023-07-28 06:32:41'),
(6, NULL, '081525563019', '120729358-2622', '2023-07-28 06:35:53', '2023-07-28 06:35:53'),
(7, NULL, '01233482334', '510329692', '2023-07-28 06:38:30', '2023-07-28 06:38:30'),
(8, NULL, '38583', '45343', '2023-07-28 13:30:06', '2023-07-28 13:30:06'),
(9, NULL, '132213312', '231123', '2023-07-28 13:37:41', '2023-07-28 13:37:41'),
(10, NULL, '457474', '54745', '2023-07-28 13:40:31', '2023-07-28 13:40:31'),
(11, NULL, '123213', '1212312', '2023-07-28 13:41:16', '2023-07-28 13:41:16'),
(12, NULL, '2344234233', '2342234', '2023-07-28 14:37:44', '2023-07-28 14:37:44'),
(13, NULL, '4564564', '123321345', '2023-07-28 14:41:27', '2023-07-28 14:41:27'),
(14, NULL, '64645656', '12312499', '2023-07-28 15:24:58', '2023-07-28 15:24:58'),
(15, NULL, '64645656', '12312499', '2023-07-28 15:26:06', '2023-07-28 15:26:06'),
(16, NULL, '64645656', '12312499', '2023-07-28 15:27:49', '2023-07-28 15:27:49'),
(17, NULL, '64645656', '12312499', '2023-07-28 15:28:13', '2023-07-28 15:28:13'),
(18, NULL, '64645656', '12312499', '2023-07-28 15:29:15', '2023-07-28 15:29:15'),
(19, NULL, '64645656', '12312499', '2023-07-28 15:29:53', '2023-07-28 15:29:53'),
(20, NULL, '64645656', '12312499', '2023-07-28 15:30:14', '2023-07-28 15:30:14'),
(21, NULL, '64645656', '12312499', '2023-07-28 15:32:18', '2023-07-28 15:32:18'),
(22, NULL, '64645656', '12312499', '2023-07-28 15:35:43', '2023-07-28 15:35:43'),
(23, NULL, '556789000', '124680', '2023-07-28 15:36:55', '2023-07-28 15:36:55'),
(24, NULL, '1234567', '976543456789', '2023-07-28 16:49:08', '2023-07-28 16:49:08'),
(25, NULL, '8535745', '346436346', '2023-07-28 17:03:11', '2023-07-28 17:03:11'),
(26, NULL, '8535745', '346436346', '2023-07-28 17:05:02', '2023-07-28 17:05:02'),
(27, NULL, '22464434', '4364353', '2023-07-28 17:07:13', '2023-07-28 17:07:13');

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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_28_132132_create_products_table', 1),
(6, '2023_05_29_144205_create_product_prices_table', 1),
(7, '2023_06_04_085009_create_customers_table', 1),
(8, '2023_06_04_085403_create_transactions_table', 1),
(9, '2023_07_28_232756_create_jobs_table', 2),
(11, '2023_07_29_233509_create_page_slideshows_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `page_slideshows`
--

CREATE TABLE `page_slideshows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_status` enum('inactive','active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `page_slideshows`
--

INSERT INTO `page_slideshows` (`id`, `banner_img`, `banner_status`, `created_at`, `updated_at`) VALUES
(1, 'page/banner/6S4cSgxevUYEteehQoTCACE5yscU41mmNyAa35Q7.png', 'active', '2023-07-30', '2023-07-30'),
(2, 'page/banner/JkruP0oZkTSQKpdlPM0VWJu0gsHFXLVM1ebTobrG.png', 'active', '2023-07-30', '2023-07-30'),
(3, 'page/banner/kvdeUc1yuxBdNFjgYvDeRjXWncAZCkl1lRh8bbjJ.png', 'active', '2023-07-31', '2023-07-31');

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `prd_id` bigint(20) UNSIGNED NOT NULL,
  `prd_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prd_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prd_dev` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prd_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prd_category` enum('Game','Pulsa','Voucher','Joki') COLLATE utf8mb4_unicode_ci NOT NULL,
  `prd_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prd_item_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prd_item_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prd_status` enum('Inactive','Active') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`prd_id`, `prd_name`, `prd_slug`, `prd_dev`, `prd_desc`, `prd_category`, `prd_img`, `prd_item_name`, `prd_item_img`, `prd_status`, `created_at`, `updated_at`) VALUES
(1, 'PUBG Mobile', 'pubg-mobile', 'Tencent Games', 'PUBG Mobile adalah game mobile yang memiliki 100 pemain berparasut ke pulau terpencil sejauh 8x8 km untuk pertarungan battle royal. Pemain harus menemukan dan mencari senjata, kendaraan, dan persediaan mereka sendiri, dan mengalahkan setiap pemain di medan pertempuran yang apik secara grafis dan taktik yang memaksa pemain ke zona bermain yang menyusut. Bersiaplah untuk mendarat, menjarah, dan melakukan apa pun untuk bertahan dan menjadi orang terakhir yang bertahan!', 'Game', 'product_img/B1vFBlHbaMEu8NJdxXuUajbr6ckNlJ2jNcZZFuXV.webp', 'UC', 'product_img_item/TCT7OBvUTejjuAqsOJTBMTXSfTiELoWNM1B7NdXQ.webp', 'Active', '2023-07-28 05:55:11', '2023-07-28 06:15:34'),
(2, 'Mobile Legend', 'mobile-legend', 'Moonton', 'abcde', 'Game', 'product_img/HwbepHZgMxkBaHuXB8bAupfQmZZPud20aYO2y2nk.webp', 'Diamond', 'product_img_item/aHNi5iXmmgYQno1yBQrndlAKeusSPoMJF0IylDtv.webp', 'Active', '2023-07-28 05:59:00', '2023-07-28 06:11:43'),
(3, 'COD Mobile', 'cod-mobile', 'Garena', 'garenaa', 'Game', 'product_img/8VikGLoRNt7j1O0JEM0iscc9t5GKtGLXaAGrbLyl.webp', 'CP', 'product_img_item/mHa33CViLdC2npEkCdgmY0IvD2cfMZGkVEGJyiQk.webp', 'Active', '2023-07-28 06:01:12', '2023-07-28 06:11:56'),
(4, 'Clash of Clans', 'clash-of-clans', 'Supercell', 'COCOCOCOC', 'Game', 'product_img/L2q7bjxTBvez8r8bQA76fD6bYucCYWUV0vhgUUoi.webp', 'Gems', 'product_img_item/xFe07CIlG05wzqbu9VaiVRv4bsXk7b9ArNN2fT1G.webp', 'Active', '2023-07-28 06:03:15', '2023-07-28 06:12:05'),
(5, 'Clash Royale', 'clash-royale', 'Supercell', 'Clash Royale', 'Game', 'product_img/3XxWufqpcS85nzg832APbE8mYBHEALxaqFDadph3.webp', 'Gems', 'product_img_item/2RvkhL7DPrUF5TOelPje85ILmUI3sdm2bSvl6VXC.webp', 'Active', '2023-07-28 06:04:55', '2023-07-28 06:12:14'),
(6, 'Free Fire', 'free-fire', 'Garena', 'epepepepeep', 'Game', 'product_img/eUtjDVjSZ8akfJjfWbcXuCe2V87clwtYH8ILckEW.webp', 'Diamond', 'product_img_item/qWPrRzKDofMVZXkEeaOnA7743IWuoUbZKEnYIzAa.webp', 'Active', '2023-07-28 06:07:47', '2023-07-28 06:12:23'),
(7, 'Genshin Impact', 'genshin-impact', 'HoYoverse', 'Genshin Impact wibuu', 'Game', 'product_img/rv7tLYcwMbX4U8XYPf2wviLIuCWb5whxqzfZailG.webp', 'Genesis Crystals', 'product_img_item/6ZdxKml6dYHvZ2cCdaZV41ZHHBU8S2bcwPWaSz55.webp', 'Active', '2023-07-28 06:09:49', '2023-07-28 06:12:41'),
(8, 'Arena of Valor', 'arena-of-valor', 'Garena', 'Arena of Valor cakk', 'Game', 'product_img/HcX2FLcz34bSDdv98CoGIV0MMCAk6MgUpphyuixj.webp', 'Voucher', 'product_img_item/U0GIj6IBR7rdmTQ01OtIDAANExGfkJKfsgMxaXON.webp', 'Active', '2023-07-28 06:11:32', '2023-07-28 06:12:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_prices`
--

CREATE TABLE `product_prices` (
  `prd_prc_id` bigint(20) UNSIGNED NOT NULL,
  `prd_id` bigint(20) UNSIGNED DEFAULT NULL,
  `prd_prc_vol` int(11) DEFAULT NULL,
  `prd_prc` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `product_prices`
--

INSERT INTO `product_prices` (`prd_prc_id`, `prd_id`, `prd_prc_vol`, `prd_prc`, `created_at`, `updated_at`) VALUES
(1, 1, 30, 6000, '2023-07-28 05:55:11', '2023-07-28 06:15:34'),
(2, 2, 5, 1500, '2023-07-28 05:59:00', '2023-07-28 06:11:43'),
(3, 2, 19, 5700, '2023-07-28 05:59:00', '2023-07-28 06:11:43'),
(4, 2, 36, 11000, '2023-07-28 05:59:00', '2023-07-28 06:11:43'),
(5, 3, 32, 5000, '2023-07-28 06:01:12', '2023-07-28 06:11:56'),
(6, 3, 62, 9500, '2023-07-28 06:01:12', '2023-07-28 06:11:56'),
(7, 3, 127, 19500, '2023-07-28 06:01:12', '2023-07-28 06:11:56'),
(8, 4, 80, 13500, '2023-07-28 06:03:15', '2023-07-28 06:12:05'),
(9, 4, 500, 68000, '2023-07-28 06:03:15', '2023-07-28 06:12:05'),
(10, 4, 1200, 137000, '2023-07-28 06:03:15', '2023-07-28 06:12:05'),
(11, 5, 80, 13500, '2023-07-28 06:04:55', '2023-07-28 06:12:14'),
(12, 5, 500, 68000, '2023-07-28 06:04:55', '2023-07-28 06:12:14'),
(13, 5, 1200, 137000, '2023-07-28 06:04:55', '2023-07-28 06:12:14'),
(14, 6, 5, 900, '2023-07-28 06:07:47', '2023-07-28 06:12:23'),
(15, 6, 20, 3500, '2023-07-28 06:07:47', '2023-07-28 06:12:23'),
(16, 6, 50, 7000, '2023-07-28 06:07:47', '2023-07-28 06:12:23'),
(17, 6, 70, 9500, '2023-07-28 06:07:47', '2023-07-28 06:12:23'),
(18, 6, 140, 18500, '2023-07-28 06:07:47', '2023-07-28 06:12:23'),
(19, 7, 60, 12000, '2023-07-28 06:09:49', '2023-07-28 06:12:41'),
(20, 7, 300, 62000, '2023-07-28 06:09:49', '2023-07-28 06:12:41'),
(21, 7, 1000, 190000, '2023-07-28 06:09:49', '2023-07-28 06:12:41'),
(22, 8, 40, 9500, '2023-07-28 06:11:32', '2023-07-28 06:12:50'),
(23, 8, 90, 19000, '2023-07-28 06:11:32', '2023-07-28 06:12:50'),
(24, 8, 230, 47000, '2023-07-28 06:11:32', '2023-07-28 06:12:50'),
(25, 1, 60, 5500, '2023-07-28 06:15:34', '2023-07-28 06:15:34'),
(26, 1, 300, 67000, '2023-07-28 06:15:34', '2023-07-28 06:15:34'),
(27, 1, 600, 130000, '2023-07-28 06:15:34', '2023-07-28 06:15:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `ts_id` bigint(20) UNSIGNED NOT NULL,
  `ts_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_id` bigint(20) UNSIGNED NOT NULL,
  `prd_id` bigint(20) UNSIGNED NOT NULL,
  `prd_prc_id` bigint(20) UNSIGNED NOT NULL,
  `ts_method` enum('QR','vBank') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ts_status` enum('Process','Success','Failed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Process',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`ts_id`, `ts_code`, `cust_id`, `prd_id`, `prd_prc_id`, `ts_method`, `ts_status`, `created_at`, `updated_at`) VALUES
(2, 'TA_YWG5KTIV0Y37', 2, 1, 25, 'QR', 'Success', '2023-07-26 06:22:54', '2023-07-26 06:22:54'),
(3, 'TA_6RWY6YIL78F8', 3, 4, 9, 'QR', 'Success', '2023-07-26 06:27:38', '2023-07-26 06:27:38'),
(4, 'TA_Q8JAC3BGRPRQ', 4, 3, 7, 'QR', 'Success', '2023-07-26 06:30:51', '2023-07-26 06:30:51'),
(5, 'TA_BQ7EZ5IELDHQ', 5, 6, 15, 'QR', 'Success', '2023-07-26 06:32:41', '2023-07-26 06:32:41'),
(6, 'TA_IR0DGCS1IP8K', 6, 2, 4, 'QR', 'Success', '2023-07-26 06:35:53', '2023-07-26 06:35:53'),
(7, 'TA_EPY7K8XPLAEG', 7, 1, 27, 'vBank', 'Success', '2023-07-26 06:38:30', '2023-07-26 06:38:30'),
(8, 'TA_U9YJLQ1II44E', 8, 1, 26, 'QR', 'Success', '2023-07-28 13:30:06', '2023-07-28 13:30:06'),
(9, 'TA_9VE2LT1KK2AD', 9, 1, 25, 'QR', 'Success', '2023-07-28 13:37:41', '2023-07-28 13:37:41'),
(10, 'TA_O6WB94HCTFEO', 10, 1, 1, 'QR', 'Success', '2023-07-28 13:40:31', '2023-07-28 13:40:31'),
(11, 'TA_H8RLFPUHDHJM', 11, 1, 1, 'QR', 'Success', '2023-07-28 13:41:16', '2023-07-28 13:43:16'),
(12, '1Z3BR4TXU0DG', 12, 2, 4, 'QR', 'Success', '2023-07-28 14:37:44', '2023-07-28 14:38:44'),
(13, 'TA_NT107PUS1KDP', 13, 2, 3, 'QR', 'Success', '2023-07-28 14:41:27', '2023-07-31 16:52:59'),
(14, 'TA_QX4594TA52G8', 14, 5, 11, 'QR', 'Success', '2023-07-28 15:24:58', '2023-07-28 15:25:58'),
(15, 'TA_FV849073QM2B', 15, 5, 11, 'QR', 'Success', '2023-07-28 15:26:06', '2023-07-28 15:27:06'),
(16, 'TA_2KI2WODEN01K', 16, 5, 11, 'QR', 'Success', '2023-07-28 15:27:49', '2023-07-28 15:28:49'),
(17, 'TA_Q5MSYJF2MXR5', 17, 5, 11, 'QR', 'Success', '2023-07-28 15:28:13', '2023-07-28 15:29:13'),
(18, 'TA_IHHBPNXYTFX1', 18, 5, 11, 'QR', 'Success', '2023-07-28 15:29:15', '2023-07-28 15:30:15'),
(19, 'TA_N2GIC5LAU73J', 19, 5, 11, 'QR', 'Success', '2023-07-28 15:29:53', '2023-07-28 15:30:53'),
(20, 'TA_AMANFUS8IXOJ', 20, 5, 11, 'QR', 'Success', '2023-07-28 15:30:14', '2023-07-28 15:31:14'),
(21, 'TA_WBSOYYUZXPBS', 21, 5, 11, 'QR', 'Success', '2023-07-28 15:32:18', '2023-07-28 15:33:18'),
(22, 'TA_BZT11IVL8O6D', 22, 5, 11, 'QR', 'Failed', '2023-07-28 15:35:43', '2023-07-28 15:35:43'),
(23, 'TA_V6SIIKHF19I7', 23, 8, 24, 'QR', 'Failed', '2023-07-28 15:36:55', '2023-07-28 15:36:55'),
(24, 'TA_EAH9LRLFWZ1G', 24, 8, 24, 'QR', 'Success', '2023-07-28 16:49:08', '2023-07-28 16:50:08'),
(25, 'TA_XL2A6XI9NXSB', 25, 7, 20, 'QR', 'Success', '2023-07-28 17:03:11', '2023-07-28 17:04:11'),
(26, 'TA_QADQLB00A1TW', 26, 7, 20, 'QR', 'Success', '2023-07-28 17:05:02', '2023-07-28 17:06:02'),
(27, 'TA_QCA9RKOTVMB0', 27, 7, 21, 'QR', 'Success', '2023-07-28 17:07:13', '2023-07-28 17:08:13');

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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@topap.com', '2023-07-28 05:55:11', '$2y$10$u3ZP8E2VXeJCHE93RK37MODHil5iuHF44I53aRI6D3yPO2fw.rrnG', NULL, '2023-07-28 05:55:11', '2023-07-28 05:55:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `page_slideshows`
--
ALTER TABLE `page_slideshows`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prd_id`),
  ADD UNIQUE KEY `products_prd_slug_unique` (`prd_slug`);

--
-- Indeks untuk tabel `product_prices`
--
ALTER TABLE `product_prices`
  ADD PRIMARY KEY (`prd_prc_id`),
  ADD KEY `product_prices_prd_id_foreign` (`prd_id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`ts_id`),
  ADD UNIQUE KEY `transactions_ts_code_unique` (`ts_code`),
  ADD KEY `transactions_cust_id_foreign` (`cust_id`),
  ADD KEY `transactions_prd_id_foreign` (`prd_id`),
  ADD KEY `transactions_prd_prc_id_foreign` (`prd_prc_id`);

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
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `page_slideshows`
--
ALTER TABLE `page_slideshows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `prd_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `product_prices`
--
ALTER TABLE `product_prices`
  MODIFY `prd_prc_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `ts_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `product_prices`
--
ALTER TABLE `product_prices`
  ADD CONSTRAINT `product_prices_prd_id_foreign` FOREIGN KEY (`prd_id`) REFERENCES `products` (`prd_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_cust_id_foreign` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`cust_id`),
  ADD CONSTRAINT `transactions_prd_id_foreign` FOREIGN KEY (`prd_id`) REFERENCES `products` (`prd_id`),
  ADD CONSTRAINT `transactions_prd_prc_id_foreign` FOREIGN KEY (`prd_prc_id`) REFERENCES `product_prices` (`prd_prc_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
