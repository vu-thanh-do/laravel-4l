-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 06, 2024 lúc 03:35 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Category 1', 'path/to/category1.jpg', NULL, NULL),
(2, 'Category 2', 'path/to/category2.jpg', NULL, NULL),
(3, 'Category 3', 'path/to/category3.jpg', NULL, NULL),
(4, 'Category 4', 'path/to/category4.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_11_06_133411_create_categories_table', 2),
(6, '2024_11_06_133418_create_products_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`images`)),
  `size` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `images`, `size`, `color`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Product 1-1', '[\"https://plus.unsplash.com/premium_photo-1666900440561-94dcb6865554?q=80&w=3027&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D\", \"path/to/product1-1_image2.jpg\", \"path/to/product1-1_image3.jpg\", \"path/to/product1-1_image4.jpg\", \"path/to/product1-1_image5.jpg\"]', 'M', 'Red', 1, NULL, NULL),
(2, 'Product 1-2', '[\"https://plus.unsplash.com/premium_photo-1666900440561-94dcb6865554?q=80&w=3027&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D\", \"path/to/product1-2_image2.jpg\", \"path/to/product1-2_image3.jpg\", \"path/to/product1-2_image4.jpg\", \"path/to/product1-2_image5.jpg\"]', 'L', 'Blue', 1, NULL, NULL),
(3, 'Product 1-3', '[\"https://plus.unsplash.com/premium_photo-1666900440561-94dcb6865554?q=80&w=3027&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D\", \"path/to/product1-3_image2.jpg\", \"path/to/product1-3_image3.jpg\", \"path/to/product1-3_image4.jpg\", \"path/to/product1-3_image5.jpg\"]', 'S', 'Green', 1, NULL, NULL),
(4, 'Product 1-4', '[\"path/to/product1-4_image1.jpg\", \"path/to/product1-4_image2.jpg\", \"path/to/product1-4_image3.jpg\", \"path/to/product1-4_image4.jpg\", \"path/to/product1-4_image5.jpg\"]', 'M', 'Yellow', 1, NULL, NULL),
(5, 'Product 1-5', '[\"path/to/product1-5_image1.jpg\", \"path/to/product1-5_image2.jpg\", \"path/to/product1-5_image3.jpg\", \"path/to/product1-5_image4.jpg\", \"path/to/product1-5_image5.jpg\"]', 'XL', 'Black', 1, NULL, NULL),
(6, 'Product 2-1', '[\"path/to/product2-1_image1.jpg\", \"path/to/product2-1_image2.jpg\", \"path/to/product2-1_image3.jpg\", \"path/to/product2-1_image4.jpg\", \"path/to/product2-1_image5.jpg\"]', 'M', 'Red', 2, NULL, NULL),
(7, 'Product 2-2', '[\"path/to/product2-2_image1.jpg\", \"path/to/product2-2_image2.jpg\", \"path/to/product2-2_image3.jpg\", \"path/to/product2-2_image4.jpg\", \"path/to/product2-2_image5.jpg\"]', 'L', 'Blue', 2, NULL, NULL),
(8, 'Product 2-3', '[\"path/to/product2-3_image1.jpg\", \"path/to/product2-3_image2.jpg\", \"path/to/product2-3_image3.jpg\", \"path/to/product2-3_image4.jpg\", \"path/to/product2-3_image5.jpg\"]', 'S', 'Green', 2, NULL, NULL),
(9, 'Product 2-4', '[\"path/to/product2-4_image1.jpg\", \"path/to/product2-4_image2.jpg\", \"path/to/product2-4_image3.jpg\", \"path/to/product2-4_image4.jpg\", \"path/to/product2-4_image5.jpg\"]', 'M', 'Yellow', 2, NULL, NULL),
(10, 'Product 2-5', '[\"path/to/product2-5_image1.jpg\", \"path/to/product2-5_image2.jpg\", \"path/to/product2-5_image3.jpg\", \"path/to/product2-5_image4.jpg\", \"path/to/product2-5_image5.jpg\"]', 'XL', 'Black', 2, NULL, NULL),
(11, 'Product 3-1', '[\"path/to/product3-1_image1.jpg\", \"path/to/product3-1_image2.jpg\", \"path/to/product3-1_image3.jpg\", \"path/to/product3-1_image4.jpg\", \"path/to/product3-1_image5.jpg\"]', 'M', 'Red', 3, NULL, NULL),
(12, 'Product 3-2', '[\"path/to/product3-2_image1.jpg\", \"path/to/product3-2_image2.jpg\", \"path/to/product3-2_image3.jpg\", \"path/to/product3-2_image4.jpg\", \"path/to/product3-2_image5.jpg\"]', 'L', 'Blue', 3, NULL, NULL),
(13, 'Product 3-3', '[\"path/to/product3-3_image1.jpg\", \"path/to/product3-3_image2.jpg\", \"path/to/product3-3_image3.jpg\", \"path/to/product3-3_image4.jpg\", \"path/to/product3-3_image5.jpg\"]', 'S', 'Green', 3, NULL, NULL),
(14, 'Product 3-4', '[\"path/to/product3-4_image1.jpg\", \"path/to/product3-4_image2.jpg\", \"path/to/product3-4_image3.jpg\", \"path/to/product3-4_image4.jpg\", \"path/to/product3-4_image5.jpg\"]', 'M', 'Yellow', 3, NULL, NULL),
(15, 'Product 3-5', '[\"path/to/product3-5_image1.jpg\", \"path/to/product3-5_image2.jpg\", \"path/to/product3-5_image3.jpg\", \"path/to/product3-5_image4.jpg\", \"path/to/product3-5_image5.jpg\"]', 'XL', 'Black', 3, NULL, NULL),
(16, 'Product 4-1', '[\"path/to/product4-1_image1.jpg\", \"path/to/product4-1_image2.jpg\", \"path/to/product4-1_image3.jpg\", \"path/to/product4-1_image4.jpg\", \"path/to/product4-1_image5.jpg\"]', 'M', 'Red', 4, NULL, NULL),
(17, 'Product 4-2', '[\"path/to/product4-2_image1.jpg\", \"path/to/product4-2_image2.jpg\", \"path/to/product4-2_image3.jpg\", \"path/to/product4-2_image4.jpg\", \"path/to/product4-2_image5.jpg\"]', 'L', 'Blue', 4, NULL, NULL),
(18, 'Product 4-3', '[\"path/to/product4-3_image1.jpg\", \"path/to/product4-3_image2.jpg\", \"path/to/product4-3_image3.jpg\", \"path/to/product4-3_image4.jpg\", \"path/to/product4-3_image5.jpg\"]', 'S', 'Green', 4, NULL, NULL),
(19, 'Product 4-4', '[\"path/to/product4-4_image1.jpg\", \"path/to/product4-4_image2.jpg\", \"path/to/product4-4_image3.jpg\", \"path/to/product4-4_image4.jpg\", \"path/to/product4-4_image5.jpg\"]', 'M', 'Yellow', 4, NULL, NULL),
(20, 'Product 4-5', '[\"path/to/product4-5_image1.jpg\", \"path/to/product4-5_image2.jpg\", \"path/to/product4-5_image3.jpg\", \"path/to/product4-5_image4.jpg\", \"path/to/product4-5_image5.jpg\"]', 'XL', 'Black', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
