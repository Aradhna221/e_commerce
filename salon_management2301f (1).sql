-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2024 at 10:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon_management2301f`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointdates`
--

CREATE TABLE `appointdates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointdates`
--

INSERT INTO `appointdates` (`id`, `date`, `time`, `category`, `created_at`, `updated_at`) VALUES
(1, '2024-01-27', '18:00', 'Spa & Massage ------- $30', '2024-01-27 03:13:32', '2024-01-27 03:13:32'),
(2, '2024-01-28', '09:00', 'Head Massage ------- $30', '2024-01-27 03:14:01', '2024-01-27 03:14:01'),
(3, '2024-01-27', '15:00', 'Body Massage ------- $30', '2024-01-27 03:15:01', '2024-01-27 03:15:01'),
(4, '2024-01-27', '19:00', 'Stone Massage ------- $30', '2024-01-27 03:15:29', '2024-01-27 03:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `First_name` varchar(200) NOT NULL,
  `Last_name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `Category` varchar(200) NOT NULL,
  `Date` varchar(200) NOT NULL,
  `Time` varchar(200) NOT NULL,
  `Status` varchar(200) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `First_name`, `Last_name`, `Email`, `Phone`, `Category`, `Date`, `Time`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'aradhna', 'kumari', 'aradhnakhatri2003@gmail.com', '03002505601', 'Head Massage ------- $30', '2024-01-27', '09:00', 'Pending', '2024-01-27 04:04:37', '2024-01-27 04:04:37'),
(2, 'madiha', 'muzammil', 'hello@aptechgdn.net', '03002505601', 'Body Massage ------- $30', '2024-01-27', '19:00', 'Pending', '2024-01-27 04:04:53', '2024-01-27 04:04:53'),
(3, 'musfirah', 'muzammil', 'hello@aptechgdn.net', '03002505601', 'Stone Massage ------- $30', '2024-01-27', '19:00', 'Pending', '2024-01-27 04:05:12', '2024-01-27 04:05:12'),
(4, 'aradhna', 'kumari', 'hello@aptechgdn.net', '03002505601', 'Spa & Massage ------- $30', '2024-01-27', '18:00', 'Pending', '2024-01-27 04:35:51', '2024-01-27 04:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Author` varchar(200) NOT NULL,
  `Category` varchar(200) NOT NULL,
  `Date` varchar(200) NOT NULL,
  `Blog_title` varchar(200) NOT NULL,
  `Blog_link` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `Author`, `Category`, `Date`, `Blog_title`, `Blog_link`, `Image`, `created_at`, `updated_at`) VALUES
(3, 'Spafinder', 'Spa & Massage', '2024-01-10', 'WHY COME TO THE BEAUTY ISLAND SANCTUARY', 'https://thebeautyisland.co.uk/why-come-to-the-beauty-island-sanctuary/', 'assets/images\\2003751683.blog_1_1.jpg', '2024-01-27 03:31:22', '2024-01-27 03:31:22'),
(4, 'Spafinder', 'Spa & Massage', '2024-01-27', 'WHAT IS RADIOFREQUENCY', 'https://thebeautyisland.co.uk/what-is-radiofrequency/', 'assets/images\\916433089.blog_1_2.jpg', '2024-01-27 03:32:24', '2024-01-27 03:32:24'),
(5, 'Spafinder', 'Spa & Massage', '2024-01-27', 'REGULAR MASSAGE AND SPA BENEFITS', 'https://thebeautyisland.co.uk/regular-massage-benefits/', 'assets/images\\1346377863.blog_1_3.jpg', '2024-01-27 03:34:08', '2024-01-27 03:34:08'),
(6, 'Spafinder', 'Spa & Massage', '2024-01-19', '12-WEEK WEDDING PREPARATION PLAN', 'https://thebeautyisland.co.uk/12-week-wedding-preparation-plan/', 'assets/images\\55753701.blog_1_4.jpg', '2024-01-27 03:35:02', '2024-01-27 03:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `checkins`
--

CREATE TABLE `checkins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `zipcode` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `Payment_method` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkins`
--

INSERT INTO `checkins` (`id`, `state`, `first_name`, `last_name`, `city`, `country`, `category`, `zipcode`, `email`, `phone`, `Payment_method`, `created_at`, `updated_at`) VALUES
(1, 'US', 'aradhna', 'kumari', 'karachi', 'Pakistan', 'Spa & Massage ------- $30', '676798', 'aradhnakhatri2003@gmail.com', '03002505601', 'on', '2024-01-27 04:06:24', '2024-01-27 04:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Number` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `Name`, `Email`, `Number`, `Gender`, `Message`, `created_at`, `updated_at`) VALUES
(1, 'aradhna', 'aradhna2301f@aptechgdn.net', '0300250501', 'Female', 'TEST', '2024-01-27 04:08:29', '2024-01-27 04:08:29'),
(2, 'MUSFIRAH', 'aru@email.com', '0300250501', 'Female', 'DEWECWEW', '2024-01-27 04:08:54', '2024-01-27 04:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(200) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `rating` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'aradhna', 'aradhnakhatri2003@gmail.com', 'test', '1star', '2024-01-27 04:03:16', '2024-01-27 04:03:16'),
(2, 'musfirah', 'hello@aptechgdn.net', 'test', '2star', '2024-01-27 04:03:29', '2024-01-27 04:03:29'),
(3, 'wdqwdqdwqd', 'aradhna2301f@aptechgdn.net', 'wdwedwe', '3star', '2024-01-27 04:03:43', '2024-01-27 04:03:43'),
(4, 'madiha', 'abc@gmail.com', 'edwewedwe', '4star', '2024-01-27 04:04:05', '2024-01-27 04:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Detail` varchar(200) NOT NULL,
  `Profile` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(200) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_12_14_175418_create_sessions_table', 1),
(7, '2023_12_26_085818_create_contacts_table', 1),
(8, '2023_12_26_143821_create_appointdates_table', 1),
(9, '2023_12_26_195920_create_appointments_table', 1),
(10, '2023_12_28_082657_create_feedback_table', 1),
(11, '2023_12_29_140939_create_services_table', 1),
(12, '2023_12_31_101143_create_products_table', 1),
(13, '2024_01_01_151621_create_receptionists_table', 1),
(14, '2024_01_01_153247_create_stylists_table', 1),
(15, '2024_01_03_112530_create_galleries_table', 1),
(16, '2024_01_06_111212_create_checkins_table', 1),
(17, '2024_01_08_134612_create_recproducts_table', 1),
(18, '2024_01_19_150006_create_blogs_table', 1),
(19, '2024_01_24_083120_create_stylistsalaries_table', 1),
(20, '2024_01_24_100105_create_receptionsalaries_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(200) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Quantity` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Details` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `receptionists`
--

CREATE TABLE `receptionists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Time` varchar(200) NOT NULL,
  `Shift` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Profile` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receptionists`
--

INSERT INTO `receptionists` (`id`, `Name`, `Email`, `Time`, `Shift`, `Password`, `Profile`, `created_at`, `updated_at`) VALUES
(1, 'Laurence', 'laurence@gmail.com', '15:00', 'Afternoon', '1234321', 'assets/images\\509948663.team_1_1.jpg', '2024-01-27 03:37:42', '2024-01-27 03:37:42'),
(2, 'Norman', 'norman@gmail.com', '13:00', 'Afternoon', '12345789', 'assets/images\\1122547059.team_1_2.jpg', '2024-01-27 03:38:42', '2024-01-27 03:38:42'),
(3, 'Elizabeth', 'Elizabeth@gmail.com', '19:00', 'Evening', '1234567', 'assets/images\\2044290756.team_1_3.jpg', '2024-01-27 03:39:22', '2024-01-27 03:39:22'),
(4, 'Dorothy', 'dorothy@gmail.com', '09:00', 'morning', '123454321', 'assets/images\\1713090747.team_1_4.jpg', '2024-01-27 03:40:37', '2024-01-27 03:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `receptionsalaries`
--

CREATE TABLE `receptionsalaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Salary` varchar(200) NOT NULL,
  `Date` varchar(200) NOT NULL,
  `Account_No` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receptionsalaries`
--

INSERT INTO `receptionsalaries` (`id`, `Name`, `Salary`, `Date`, `Account_No`, `created_at`, `updated_at`) VALUES
(1, 'Laurence', '25K', '2024-01-27', '123456789', '2024-01-27 04:09:37', '2024-01-27 04:09:37'),
(2, 'Norman', '25K', '2024-01-27', '123454321234', '2024-01-27 04:09:52', '2024-01-27 04:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `recproducts`
--

CREATE TABLE `recproducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Productid` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Quantity` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Details` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recproducts`
--

INSERT INTO `recproducts` (`id`, `Productid`, `Name`, `Quantity`, `Price`, `Type`, `Details`, `Image`, `created_at`, `updated_at`) VALUES
(1, '356355221', 'OPI NAIL POLISH', '4', '99$', 'BEAUTY PRODUCT', 'Cosmetic products are applied to the skin and various body parts to make them attractive, smooth, bright, and enhance their appeal.', 'assets/images\\517520779.product_1_1.jpg', '2024-01-27 04:19:35', '2024-01-27 04:19:35'),
(2, '1041699740', 'Sunscreen Lotion', '1', '$98', 'BEAUTY PRODUCT', 'Cosmetic products are applied to the skin and various body parts to make them attractive, smooth, bright, and enhance their appeal.', 'assets/images\\200688697.product_1_2.jpg', '2024-01-27 04:20:25', '2024-01-27 04:20:25'),
(3, '1796567246', 'Wholesale Liquid', '1', '$98', 'BEAUTY PRODUCT', 'Cosmetic products are applied to the skin and various body parts to make them attractive, smooth, bright, and enhance their appeal.', 'assets/images\\465568407.product_1_3.jpg', '2024-01-27 04:21:12', '2024-01-27 04:21:12'),
(4, '1415294717', 'Hair Dryers', '1', '$98', 'BEAUTY PRODUCT', 'Cosmetic products are applied to the skin and various body parts to make them attractive, smooth, bright, and enhance their appeal.', 'assets/images\\1738392717.product_1_4.jpg', '2024-01-27 04:21:46', '2024-01-27 04:21:46'),
(5, '1827046060', 'Argan Hair oil', '1', '$98', 'BEAUTY PRODUCT', 'Cosmetic products are applied to the skin and various body parts to make them attractive, smooth, bright, and enhance their appeal.', 'assets/images\\1517273130.product_1_5.jpg', '2024-01-27 04:25:05', '2024-01-27 04:25:05'),
(6, '1257330937', 'Amouage Perfume', '1', '$98', 'BEAUTY PRODUCT', 'Cosmetic products are applied to the skin and various body parts to make them attractive, smooth, bright, and enhance their appeal.', 'assets/images\\1144811033.product_1_6.jpg', '2024-01-27 04:25:31', '2024-01-27 04:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `service_detail` varchar(200) NOT NULL,
  `service_image` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_detail`, `service_image`, `created_at`, `updated_at`) VALUES
(5, 'Spa and massage', 'We Offer Full Body Massage Services.', 'assets/images\\1335529651.service_1_1.jpg', '2024-01-27 03:58:03', '2024-01-27 03:58:03'),
(6, 'Spa and massage', 'We Offer Full Body Massage Services.', 'assets/images\\980064926.service_1_2.jpg', '2024-01-27 03:58:20', '2024-01-27 03:58:20'),
(7, 'Spa and massage', 'We Offer Full Body Massage Services.', 'assets/images\\187637319.service_1_3.jpg', '2024-01-27 04:01:28', '2024-01-27 04:01:28'),
(8, 'Spa and massage', 'We Offer Full Body Massage Services.', 'assets/images\\76444492.service_1_4.jpg', '2024-01-27 04:01:36', '2024-01-27 04:01:36'),
(9, 'Spa and massage', 'We Offer Full Body Massage Services.', 'assets/images\\1999021702.service_2_5.jpg', '2024-01-27 04:02:00', '2024-01-27 04:02:00'),
(10, 'Spa and massage', 'We Offer Full Body Massage Services.', 'assets/images\\1723203781.service_details.jpg', '2024-01-27 04:02:19', '2024-01-27 04:02:19'),
(11, 'Spa and massage', 'We Offer Full Body Massage Services.', 'assets/images\\381408994.service_2_3.jpg', '2024-01-27 04:02:27', '2024-01-27 04:02:27'),
(12, 'Spa and massage', 'We Offer Full Body Massage Services.', 'assets/images\\655515188.service_2_4.jpg', '2024-01-27 04:02:36', '2024-01-27 04:02:36');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(200) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('mjs4JCOg6NiOnrs2yraH6uv5dKYubwfCG5jhyjNv', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicXIyMnJMMFI5VGQxQVVSVE83SFdCTUJSaUg4SHZkY0U3dmNZQXY3YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyY2hlY2siO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEyJGxUN25LTUtVMVJOVW5LNWMxdXZXeGV3QzJaWDBFU1B6TFcuSVlSbWd1c3MyUC5mQnladnRtIjt9', 1706348225);

-- --------------------------------------------------------

--
-- Table structure for table `stylists`
--

CREATE TABLE `stylists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Time` varchar(200) NOT NULL,
  `Shift` varchar(200) NOT NULL,
  `Profile` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stylists`
--

INSERT INTO `stylists` (`id`, `Name`, `Email`, `Password`, `Time`, `Shift`, `Profile`, `created_at`, `updated_at`) VALUES
(1, 'Law Roach.', 'lawroach@gmail.com', 'lawroach', '09:00', 'morning', 'assets/images\\791522132.team_2_1.jpg', '2024-01-27 03:41:58', '2024-01-27 03:41:58'),
(2, 'Kate Young.', 'kate@gmail.com', 'kate123', '12:00', 'afternoon', 'assets/images\\1962305189.team_2_2.jpg', '2024-01-27 03:42:39', '2024-01-27 03:42:39'),
(3, 'Leslie Fremar.', 'leslie@gmail.com', 'leslie123', '19:00', 'evening', 'assets/images\\1945278007.team_2_3.jpg', '2024-01-27 03:43:25', '2024-01-27 03:43:25'),
(4, 'Petra Flannery.', 'petra@gmail.com', 'petra123', '21:00', 'Night', 'assets/images\\1353240557.team_2_4.jpg', '2024-01-27 03:44:33', '2024-01-27 03:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `stylistsalaries`
--

CREATE TABLE `stylistsalaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Salary` varchar(200) NOT NULL,
  `Date` varchar(200) NOT NULL,
  `Account_No` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stylistsalaries`
--

INSERT INTO `stylistsalaries` (`id`, `Name`, `Salary`, `Date`, `Account_No`, `created_at`, `updated_at`) VALUES
(1, 'Leslie Fremar.', '25K', '2024-01-27', '123457789', '2024-01-27 04:10:10', '2024-01-27 04:10:10'),
(2, 'Leslie Fremar.', '25K', '2024-02-02', '123344567890987654345678', '2024-01-27 04:10:26', '2024-01-27 04:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 2,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'aradhna', 'aradhnakhatri2003@gmail.com', 1, '2024-01-27 07:44:38', '$2y$12$lT7nKMKU1RNUnK5c1uvWxewC2ZX0ESPzLW.IYRmguss2P.fByZvtm', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-27 02:42:51', '2024-01-27 02:42:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointdates`
--
ALTER TABLE `appointdates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkins`
--
ALTER TABLE `checkins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receptionists`
--
ALTER TABLE `receptionists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receptionsalaries`
--
ALTER TABLE `receptionsalaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recproducts`
--
ALTER TABLE `recproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `stylists`
--
ALTER TABLE `stylists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stylistsalaries`
--
ALTER TABLE `stylistsalaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointdates`
--
ALTER TABLE `appointdates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `checkins`
--
ALTER TABLE `checkins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receptionists`
--
ALTER TABLE `receptionists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `receptionsalaries`
--
ALTER TABLE `receptionsalaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recproducts`
--
ALTER TABLE `recproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stylists`
--
ALTER TABLE `stylists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stylistsalaries`
--
ALTER TABLE `stylistsalaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
