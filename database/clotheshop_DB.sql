-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 14, 2020 lúc 07:52 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `clotheshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bannerpath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannerlink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `bannerpath`, `bannerlink`, `type`, `created_at`, `updated_at`) VALUES
(1, 'img/banner/banner_slide.jpg', 'https://google.com', 1, NULL, NULL),
(2, 'img/banner/banner_slide.jpg', 'https://google.com', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_mucs`
--

CREATE TABLE `danh_mucs` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_mucs`
--

INSERT INTO `danh_mucs` (`id`, `ten`) VALUES
(1, 'Áo Nam'),
(2, 'Áo Nữ'),
(3, 'Quần Nam'),
(4, 'Quần Nữ'),
(5, 'Mũ'),
(6, 'Đồ Cặp'),
(7, 'Giày Dép');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_resets_table', 1),
(31, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2020_07_02_040831_danh_muc', 1),
(34, '2020_07_02_182921_san_pham', 2),
(35, '2020_07_05_175255_create_tbl_admin_table', 2),
(36, '2020_07_07_085241_create_banners_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_phams`
--

CREATE TABLE `san_phams` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenSP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `idDM` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bigImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_phams`
--

INSERT INTO `san_phams` (`id`, `tenSP`, `gia`, `idDM`, `image`, `bigImage`) VALUES
(1, 'Áo gió nam', 234000, 1, 'img/thumbnail/sp1.jpg', 'img/thumbnail/sp2.jpg'),
(23, 'Váy nữ', 233000, 2, 'img/thumbnail/vaynu.jpg', 'img/poster/vaynu.jpg'),
(24, 'Váy nữ', 233000, 2, 'img/thumbnail/vaynu.jpg', 'img/poster/vaynu.jpg'),
(25, 'Váy nữ', 233000, 2, 'img/thumbnail/vaynu.jpg', 'img/poster/vaynu.jpg'),
(26, 'Váy nữ', 233000, 2, 'img/thumbnail/vaynu.jpg', 'img/poster/vaynu.jpg'),
(27, 'Váy nữ', 233000, 2, 'img/thumbnail/vaynu.jpg', 'img/poster/vaynu.jpg'),
(28, 'Váy nữ', 233000, 2, 'img/thumbnail/vaynu.jpg', 'img/poster/vaynu.jpg'),
(29, 'Váy nữ', 233000, 2, 'img/thumbnail/vaynu.jpg', 'img/poster/vaynu.jpg'),
(30, 'Váy nữ', 233000, 2, 'img/thumbnail/vaynu.jpg', 'img/poster/vaynu.jpg'),
(31, 'Váy nữ', 233000, 2, 'img/thumbnail/vaynu.jpg', 'img/poster/vaynu.jpg'),
(32, 'Vest nam', 343000, 1, 'img/thumbnail/vestnam.jpg', 'img/poster/vestnam.jpg'),
(33, 'Vest nam', 343000, 1, 'img/thumbnail/vestnam.jpg', 'img/poster/vestnam.jpg'),
(34, 'Vest nam', 343000, 1, 'img/thumbnail/vestnam.jpg', 'img/poster/vestnam.jpg'),
(35, 'Vest nam', 343000, 1, 'img/thumbnail/vestnam.jpg', 'img/poster/vestnam.jpg'),
(36, 'Vest nam', 343000, 1, 'img/thumbnail/vestnam.jpg', 'img/poster/vestnam.jpg'),
(37, 'Vest nam', 343000, 1, 'img/thumbnail/vestnam.jpg', 'img/poster/vestnam.jpg'),
(38, 'Vest nam', 343000, 1, 'img/thumbnail/vestnam.jpg', 'img/poster/vestnam.jpg'),
(39, 'Vest nam', 343000, 1, 'img/thumbnail/vestnam.jpg', 'img/poster/vestnam.jpg'),
(40, 'Vest nam', 343000, 1, 'img/thumbnail/vestnam.jpg', 'img/poster/vestnam.jpg'),
(41, 'Váy nữ', 343000, 2, 'img/thumbnail/vaynu.jpg', 'img/poster/vaynu.jpg'),
(42, 'Váy nữ', 343000, 2, 'img/thumbnail/vaynu.jpg', 'img/poster/vaynu.jpg'),
(46, 'Váy nữ', 343000, 2, 'img/thumbnail/vaynu.jpg', 'img/poster/vaynu.jpg'),
(47, 'Váy nữ', 343000, 2, 'img/thumbnail/vaynu.jpg', 'img/poster/vaynu.jpg'),
(48, 'Váy nữ', 233000, 2, 'img/thumbnail/vaynu.jpg', 'img/poster/vaynu.jpg'),
(49, 'Vest nam', 343000, 1, 'img/thumbnail/vestnam.jpg', 'img/poster/vestnam.jpg'),
(50, 'Vest nam', 343000, 1, 'img/thumbnail/vestnam.jpg', 'img/poster/vestnam.jpg'),
(51, 'Vest nam', 343000, 1, 'img/thumbnail/vestnam.jpg', 'img/poster/vestnam.jpg'),
(52, 'Váy nữ', 233000, 2, 'img/thumbnail/vaynu.jpg', 'img/poster/sp1.jpg'),
(53, 'Váy nữ', 2300000, 2, 'img/thumbnail/vaynu.jpg', 'img/poster/vaynu.jpg'),
(54, 'Váy nữ', 2300000, 2, 'img/thumbnail/vaynu.jpg', 'img/poster/vaynu.jpg'),
(55, 'Vest nam', 233000, 1, 'img/thumbnail/vestnam.jpg', 'img/poster/vestnam.jpg'),
(56, 'Vest nam', 233000, 1, 'img/thumbnail/vestnam.jpg', 'img/poster/vestnam.jpg'),
(57, 'Vest nam', 343000, 1, 'img/thumbnail/vestnam.jpg', 'img/poster/vestnam.jpg'),
(58, 'Vest nam', 343000, 1, 'img/thumbnail/vestnam.jpg', 'img/poster/vestnam.jpg'),
(59, 'Vest nam', 343000, 1, 'img/thumbnail/vestnam.jpg', 'img/poster/vestnam.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'Root', 9213, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danh_mucs`
--
ALTER TABLE `danh_mucs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `san_phams`
--
ALTER TABLE `san_phams`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `danh_mucs`
--
ALTER TABLE `danh_mucs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `san_phams`
--
ALTER TABLE `san_phams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
