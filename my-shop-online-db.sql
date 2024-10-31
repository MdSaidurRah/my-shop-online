-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2024 at 10:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my-shop-online-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(11) NOT NULL,
  `shopId` int(11) DEFAULT NULL,
  `customerName` varchar(50) DEFAULT NULL,
  `referenceItem` varchar(100) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `date` date DEFAULT current_timestamp(),
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `shopId`, `customerName`, `referenceItem`, `amount`, `date`, `createdAt`) VALUES
(1, NULL, 'saidur@eduinntech.com', 'Diploma', 45, '2024-10-13', '2024-10-13 00:32:18'),
(2, NULL, 'hhhhhhhhh', 'uuuuuuuuuuuuu', 6666, '2024-10-13', '2024-10-13 00:32:50'),
(3, NULL, 'Diploma', 'tyt', 45, '2024-10-13', '2024-10-13 00:54:16'),
(4, NULL, 'asdfasdf', 'rt', 454, '2024-10-13', '2024-10-13 00:55:56'),
(5, NULL, 'gdfg', 'fg', 45, '2024-10-13', '2024-10-13 01:06:42'),
(6, NULL, 'fg', 'dfgdfg', 45, '2024-10-13', '2024-10-13 01:07:07'),
(7, NULL, 'fgd', 'fgdfg', 45, '2024-10-13', '2024-10-13 01:09:30'),
(8, NULL, 'saidur', 'fghgh', 5656, '2024-10-13', '2024-10-13 01:45:06'),
(9, NULL, 'dfggf', 'fgdfg', 4, '2024-10-13', '2024-10-13 01:46:43'),
(10, NULL, 'fdgdfg', 'fgh', 45, '2024-10-15', '2024-10-15 00:02:26'),
(11, NULL, 'dsfsfsd', 'fsdf', 4545, '2024-10-18', '2024-10-18 15:09:06');

-- --------------------------------------------------------

--
-- Table structure for table `copy_sales`
--

CREATE TABLE `copy_sales` (
  `id` int(11) NOT NULL,
  `shopId` int(11) DEFAULT NULL,
  `productName` varchar(50) DEFAULT NULL,
  `saleQuantity` int(11) DEFAULT NULL,
  `saleAmount` int(11) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `copy_sales`
--

INSERT INTO `copy_sales` (`id`, `shopId`, `productName`, `saleQuantity`, `saleAmount`, `date`, `createdAt`) VALUES
(1, NULL, 'Pen', NULL, NULL, '2024-10-12', '2024-10-12 17:34:39'),
(2, NULL, 'dfsdf sdf', NULL, NULL, '2024-10-12', '2024-10-12 20:14:23'),
(3, NULL, NULL, 45, 45, '2024-10-12', '2024-10-12 23:53:42'),
(4, NULL, NULL, 45, 78, '2024-10-12', '2024-10-12 23:53:49'),
(5, NULL, NULL, 78, 45, '2024-10-12', '2024-10-12 23:53:54'),
(6, NULL, NULL, 454, 78, '2024-10-12', '2024-10-12 23:54:55'),
(7, NULL, NULL, 12, 45, '2024-10-12', '2024-10-12 23:55:00'),
(8, NULL, NULL, 7878, 454, '2024-10-12', '2024-10-12 23:56:37'),
(9, NULL, NULL, 787, 78, '2024-10-12', '2024-10-12 23:56:43'),
(10, NULL, NULL, 7845, 45, '2024-10-13', '2024-10-13 00:54:37'),
(11, NULL, NULL, 457, 78, '2024-10-13', '2024-10-13 00:54:54'),
(12, NULL, NULL, 457, 78, '2024-10-13', '2024-10-13 00:56:10'),
(13, NULL, NULL, 45, 78, '2024-10-13', '2024-10-13 01:06:24'),
(14, NULL, NULL, NULL, NULL, '2024-10-13', '2024-10-13 01:22:56'),
(15, NULL, NULL, NULL, NULL, '2024-10-13', '2024-10-13 01:23:20'),
(16, NULL, NULL, NULL, NULL, '2024-10-13', '2024-10-13 01:23:48'),
(17, NULL, NULL, NULL, NULL, '2024-10-13', '2024-10-13 01:24:46'),
(18, NULL, NULL, 45, 45, '2024-10-13', '2024-10-13 01:30:12'),
(19, NULL, NULL, 56, 56, '2024-10-13', '2024-10-13 01:43:02'),
(20, NULL, NULL, 454, 454, '2024-10-13', '2024-10-13 01:46:28'),
(21, NULL, NULL, 4545, 4545, '2024-10-15', '2024-10-15 00:02:35'),
(22, NULL, NULL, 56, 56, '2024-10-18', '2024-10-18 15:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `due_payments`
--

CREATE TABLE `due_payments` (
  `id` int(11) NOT NULL,
  `shopId` int(11) DEFAULT NULL,
  `customerName` varchar(50) DEFAULT NULL,
  `referenceItem` varchar(100) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `due_payments`
--

INSERT INTO `due_payments` (`id`, `shopId`, `customerName`, `referenceItem`, `amount`, `date`, `createdAt`) VALUES
(6, NULL, 'asdfasdf', 'asdfasdf', 3333, '2024-10-13', '2024-10-13 00:21:22'),
(7, NULL, 'saidur@eduinntech.com', 'asdf', 435, '2024-10-13', '2024-10-13 00:22:33'),
(8, NULL, 'ghjghj', 'ghjghj', 67, '2024-10-13', '2024-10-13 00:23:23'),
(9, NULL, 'Diploma', 'Diploma', 454, '2024-10-13', '2024-10-13 00:31:14'),
(10, NULL, 'saidur@eduinntech.com', 'Diploma', 56, '2024-10-13', '2024-10-13 00:54:06'),
(11, NULL, 'hjk', 'hy', 54, '2024-10-13', '2024-10-13 01:06:33'),
(12, NULL, 'dfgd', 'fgdfg', 454, '2024-10-13', '2024-10-13 01:43:38'),
(13, NULL, 'fgdfgdfg', 'dfgdg', 545, '2024-10-13', '2024-10-13 01:46:36'),
(14, NULL, NULL, 'fgh', 5656, '2024-10-15', '2024-10-15 00:02:09'),
(15, NULL, 'fghdfghfdgh fgh', 'fg56', 56, '2024-10-18', '2024-10-18 15:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `shopId` int(11) DEFAULT NULL,
  `expenseHead` varchar(100) DEFAULT NULL,
  `expenseAmount` int(11) DEFAULT NULL,
  `date` date DEFAULT current_timestamp(),
  `createdAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `shopId`, `expenseHead`, `expenseAmount`, `date`, `createdAt`) VALUES
(5, NULL, 'Diploma', 1212, '2024-10-13', '2024-10-13 01:28:45'),
(6, NULL, 'Diploma', 4545, '2024-10-13', '2024-10-13 01:28:59'),
(7, NULL, 'sdfasdf sd fasdf', 4545, '2024-10-13', '2024-10-13 01:30:23'),
(8, NULL, 'ghd fg hdh dh', 5656, '2024-10-13', '2024-10-13 01:31:21'),
(9, NULL, 'Diploma', 34, '2024-10-13', '2024-10-13 01:39:29'),
(10, NULL, 'Diploma', 45, '2024-10-13', '2024-10-13 01:41:18'),
(11, NULL, 'Diploma', 76, '2024-10-13', '2024-10-13 01:43:08'),
(12, NULL, 'dfgsdfgsdfg', 4545, '2024-10-13', '2024-10-13 01:46:49'),
(13, NULL, 'dfgdfg', 45454, '2024-10-13', '2024-10-13 01:46:59'),
(14, NULL, NULL, 545, '2024-10-15', '2024-10-15 00:02:00'),
(15, NULL, 'sdfasdf asdfsd', 34, '2024-10-18', '2024-10-18 15:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jobs`
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
-- Table structure for table `job_batches`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_banking`
--

CREATE TABLE `mobile_banking` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `customer_number` varchar(11) DEFAULT NULL,
  `provider` varchar(10) DEFAULT NULL,
  `transactionType` varchar(15) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `createdBy` int(11) DEFAULT NULL,
  `updateAt` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobile_banking`
--

INSERT INTO `mobile_banking` (`id`, `shop_id`, `customer_number`, `provider`, `transactionType`, `amount`, `date`, `createdAt`, `createdBy`, `updateAt`, `updatedBy`) VALUES
(4, NULL, '3234', 'Nogod', 'Cash In', 152, '2024-10-31', '2024-10-31 13:54:54', NULL, '2024-10-31 13:54:54', NULL),
(5, NULL, '3234', 'Nogod', 'Cash Out', 152, '2024-10-31', '2024-10-31 13:55:34', NULL, '2024-10-31 13:55:34', NULL),
(6, NULL, '3234', 'Nogod', 'Cash Out', 152, '2024-10-31', '2024-10-31 13:56:30', NULL, '2024-10-31 13:56:30', NULL),
(7, NULL, '3234', 'Nogod', 'Cash In', 152, '2024-10-31', '2024-10-31 13:56:35', NULL, '2024-10-31 13:56:35', NULL),
(8, NULL, '1852456', 'BKash', 'Cash In', 4545, '2024-10-31', '2024-10-31 13:57:05', NULL, '2024-10-31 13:57:05', NULL),
(9, NULL, '1852456', 'BKash', 'Cash Out', 454544, '2024-10-31', '2024-10-31 13:57:11', NULL, '2024-10-31 13:57:11', NULL),
(10, NULL, '1852456', 'Rocket', 'Cash Out', 454544, '2024-10-31', '2024-10-31 13:57:27', NULL, '2024-10-31 13:57:27', NULL),
(11, NULL, NULL, 'BKash', 'Cash Out', 5454545, '2024-10-31', '2024-10-31 13:59:28', NULL, '2024-10-31 13:59:28', NULL),
(12, NULL, '43534', 'NOGOD', 'Cash Out', 152, '2024-10-31', '2024-10-31 14:12:38', NULL, '2024-10-31 14:12:38', NULL),
(13, NULL, NULL, 'BKASH', 'Account In', 800, '2024-10-31', '2024-10-31 14:55:21', NULL, '2024-10-31 14:55:21', NULL),
(14, NULL, '756765756', 'NOGOD', 'Account Out', 2000, '2024-10-31', '2024-10-31 14:58:01', NULL, '2024-10-31 14:58:01', NULL),
(15, NULL, '454545', 'NOGOD', 'Account Out', 2000, '2024-10-31', '2024-10-31 14:59:01', NULL, '2024-10-31 14:59:01', NULL),
(16, NULL, NULL, 'NOGOD', 'Account Out', 2000, '2024-10-31', '2024-10-31 15:00:12', NULL, '2024-10-31 15:00:12', NULL),
(17, NULL, NULL, 'NOGOD', 'Account In', 2000, '2024-10-31', '2024-10-31 15:00:41', NULL, '2024-10-31 15:00:41', NULL),
(18, NULL, NULL, 'NOGOD', 'Account In', 2000, '2024-10-31', '2024-10-31 15:00:57', NULL, '2024-10-31 15:00:57', NULL),
(19, NULL, NULL, 'BKASH', 'Account In', 4000, '2024-10-31', '2024-10-31 15:01:54', NULL, '2024-10-31 15:01:54', NULL),
(20, NULL, NULL, 'NOGOD', 'Account In', 3000, '2024-10-31', '2024-10-31 15:02:08', NULL, '2024-10-31 15:02:08', NULL),
(21, NULL, NULL, 'ROCKET', 'Account In', 600, '2024-10-31', '2024-10-31 15:02:34', NULL, '2024-10-31 15:02:34', NULL),
(22, NULL, NULL, 'NOGOD', 'Account In', 3000, '2024-10-31', '2024-10-31 15:02:49', NULL, '2024-10-31 15:02:49', NULL),
(23, NULL, NULL, 'BKASH', 'Account In', 1000, '2024-10-31', '2024-10-31 15:03:27', NULL, '2024-10-31 15:03:27', NULL),
(24, NULL, NULL, 'NOGOD', 'Account In', 3000, '2024-10-31', '2024-10-31 15:03:37', NULL, '2024-10-31 15:03:37', NULL),
(25, NULL, NULL, 'ROCKET', 'Account Out', 2000, '2024-10-31', '2024-10-31 15:03:50', NULL, '2024-10-31 15:03:50', NULL),
(26, NULL, NULL, 'ROCKET', 'Account In', 1000, '2024-10-31', '2024-10-31 15:04:06', NULL, '2024-10-31 15:04:06', NULL),
(27, NULL, NULL, 'BKASH', 'Account Out', 1000, '2024-10-31', '2024-10-31 15:04:21', NULL, '2024-10-31 15:04:21', NULL),
(28, NULL, NULL, 'NOGOD', 'Account Out', 5000, '2024-10-31', '2024-10-31 15:04:37', NULL, '2024-10-31 15:04:37', NULL),
(29, NULL, NULL, 'ROCKET', 'Account Out', 2000, '2024-10-31', '2024-10-31 15:04:54', NULL, '2024-10-31 15:04:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_banking_accounts`
--

CREATE TABLE `mobile_banking_accounts` (
  `id` int(11) NOT NULL,
  `providerNmae` varchar(30) DEFAULT NULL,
  `onlineAmount` int(11) DEFAULT NULL,
  `updatedAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobile_banking_accounts`
--

INSERT INTO `mobile_banking_accounts` (`id`, `providerNmae`, `onlineAmount`, `updatedAt`) VALUES
(1, 'BKASH', 10000, '2024-10-31 14:10:10'),
(2, 'NOGOD', 10000, '2024-10-31 14:10:10'),
(3, 'ROCKET', 5000, '2024-10-31 14:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `print_sales`
--

CREATE TABLE `print_sales` (
  `id` int(11) NOT NULL,
  `shopId` int(11) DEFAULT NULL,
  `productName` varchar(50) DEFAULT NULL,
  `saleQuantity` int(11) DEFAULT NULL,
  `saleAmount` int(11) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `print_sales`
--

INSERT INTO `print_sales` (`id`, `shopId`, `productName`, `saleQuantity`, `saleAmount`, `date`, `createdAt`) VALUES
(1, NULL, NULL, 45, 45, '2024-10-12', '2024-10-12 23:45:58'),
(2, NULL, NULL, 45, 45, '2024-10-12', '2024-10-12 23:46:14'),
(3, NULL, NULL, 457, 45, '2024-10-12', '2024-10-12 23:46:27'),
(4, NULL, NULL, 78, 45, '2024-10-12', '2024-10-12 23:46:39'),
(5, NULL, NULL, 24, NULL, '2024-10-12', '2024-10-12 23:54:01'),
(6, NULL, NULL, 45, 45, '2024-10-12', '2024-10-12 23:54:07'),
(7, NULL, NULL, 545, 787, '2024-10-12', '2024-10-12 23:54:47'),
(8, NULL, NULL, 78, NULL, '2024-10-12', '2024-10-12 23:55:12'),
(9, NULL, NULL, 4578, 78, '2024-10-12', '2024-10-12 23:56:32'),
(10, NULL, NULL, 787, 45, '2024-10-12', '2024-10-12 23:56:48'),
(11, NULL, NULL, 787, 45, '2024-10-13', '2024-10-13 00:54:32'),
(12, NULL, NULL, 546, 45, '2024-10-13', '2024-10-13 00:56:04'),
(13, NULL, NULL, 45, 78, '2024-10-13', '2024-10-13 00:56:15'),
(14, NULL, NULL, 12, 12, '2024-10-13', '2024-10-13 01:06:19'),
(15, NULL, NULL, 12, 45, '2024-10-13', '2024-10-13 01:09:48'),
(16, NULL, NULL, 78, 78, '2024-10-13', '2024-10-13 01:43:15'),
(17, NULL, NULL, 34, 34, '2024-10-13', '2024-10-13 01:43:28'),
(18, NULL, NULL, 545, 45, '2024-10-13', '2024-10-13 01:46:24'),
(19, NULL, NULL, 34, 3434, '2024-10-15', '2024-10-15 00:01:41'),
(20, NULL, NULL, 45, 12, '2024-10-18', '2024-10-18 09:37:40'),
(21, NULL, NULL, 45, 45, '2024-10-18', '2024-10-18 09:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `product_sales`
--

CREATE TABLE `product_sales` (
  `id` int(11) NOT NULL,
  `shopId` int(11) DEFAULT NULL,
  `productName` varchar(50) DEFAULT NULL,
  `saleQuantity` int(11) DEFAULT NULL,
  `saleAmount` int(11) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_sales`
--

INSERT INTO `product_sales` (`id`, `shopId`, `productName`, `saleQuantity`, `saleAmount`, `date`, `createdAt`) VALUES
(58, NULL, NULL, 34, 34, '2024-10-15', '2024-10-13 00:40:26'),
(59, NULL, NULL, 78, 7, '2024-10-15', '2024-10-13 00:42:23'),
(69, NULL, NULL, 34, 343, '2024-10-15', '2024-10-15 00:01:16'),
(70, NULL, 'saidur@eduinntech.com', 4334, 3434, '2024-10-16', '2024-10-16 02:04:43'),
(71, NULL, 'dfgfd', 445, 45, '2024-10-18', '2024-10-18 14:42:16'),
(72, NULL, 'ghfgh', 656, 56, '2024-10-18', '2024-10-18 14:42:24'),
(73, NULL, 'erwr', 34, 34, '2024-10-18', '2024-10-18 15:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
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
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('H2z6UsacBHpsWOlQDA5MtBQDcLZOofOYABNq9b89', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidWg5aWVzNGczTGFlR1FuRWMzajlGM2poZGpBbW5YYkJMVTFPajl1NyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1730357165),
('W6G3Zw8LoSVUCaH6FQhIYCFJq3Sz4XVWyLNr5cfs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ01TenFnRms4cm1UeTJoZlpyekpzVzI1SGZxZmRtMEJyR3REMmNEQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1730365602);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copy_sales`
--
ALTER TABLE `copy_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `due_payments`
--
ALTER TABLE `due_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_banking`
--
ALTER TABLE `mobile_banking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_banking_accounts`
--
ALTER TABLE `mobile_banking_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `print_sales`
--
ALTER TABLE `print_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sales`
--
ALTER TABLE `product_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `copy_sales`
--
ALTER TABLE `copy_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `due_payments`
--
ALTER TABLE `due_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mobile_banking`
--
ALTER TABLE `mobile_banking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `mobile_banking_accounts`
--
ALTER TABLE `mobile_banking_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `print_sales`
--
ALTER TABLE `print_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_sales`
--
ALTER TABLE `product_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
