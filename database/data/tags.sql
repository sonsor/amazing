-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2019 at 11:22 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amazing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `order`, `created_at`, `updated_at`) VALUES
(2, 'Animals', 'animals', 0, '2019-10-15 05:02:58', '2019-10-15 05:02:58'),
(3, 'Accessibility', 'accessibility', 0, '2019-10-15 04:59:16', '2019-10-15 04:59:16'),
(4, 'All', 'all', 0, '2019-10-15 05:28:14', '2019-10-15 05:28:14'),
(5, 'Alert', 'alert', 0, '2019-10-15 05:29:35', '2019-10-15 05:29:35'),
(6, 'Ammunition', 'ammunition', 0, '2019-10-15 05:40:11', '2019-10-15 05:40:11'),
(7, 'Arrows', 'arrows', 0, '2019-10-12 18:32:42', '2019-10-15 05:53:23'),
(8, 'Audio Video', 'audio-video', 0, '2019-10-15 05:04:36', '2019-10-15 05:04:36'),
(9, 'Automotive', 'automotive', 0, '2019-10-15 05:06:37', '2019-10-15 05:06:37'),
(10, 'Autumn', 'autumn', 0, '2019-10-15 05:10:12', '2019-10-15 05:10:12'),
(11, 'Badge Award', 'badge award', 0, '2019-10-15 06:03:34', '2019-10-15 06:03:34'),
(12, 'Beverage', 'beverage', 0, '2019-10-15 05:11:58', '2019-10-15 05:11:58'),
(13, 'Brands', 'brands', 0, '2019-10-12 23:47:05', '2019-10-12 23:47:05'),
(14, 'Business', 'business', 0, '2019-10-15 05:05:06', '2019-10-15 05:05:06'),
(15, 'Buildings', 'buildings', 0, '2019-10-15 05:14:03', '2019-10-15 05:14:03'),
(16, 'Camping', 'camping', 0, '2019-10-15 04:52:36', '2019-10-15 04:52:36'),
(17, 'Chat', 'chat', 0, '2019-10-15 05:04:50', '2019-10-15 05:04:50'),
(18, 'Chart', 'chart', 0, '2019-10-15 05:27:46', '2019-10-15 05:27:46'),
(19, 'Charity', 'charity', 0, '2019-10-15 05:35:35', '2019-10-15 05:35:35'),
(20, 'Childhood', 'childhood', 0, '2019-10-15 05:13:33', '2019-10-15 05:13:33'),
(21, 'Clothing', 'clothing', 0, '2019-10-15 05:43:50', '2019-10-15 05:43:50'),
(22, 'Code', 'code', 0, '2019-10-15 05:22:28', '2019-10-15 05:22:28'),
(23, 'Computers', 'computers', 0, '2019-10-15 05:28:54', '2019-10-15 05:28:54'),
(24, 'Communication', 'communication', 0, '2019-10-15 05:00:09', '2019-10-15 05:00:09'),
(25, 'Construction', 'construction', 0, '2019-10-15 05:08:29', '2019-10-15 05:08:29'),
(26, 'Currency', 'currency', 0, '2019-10-15 05:26:45', '2019-10-15 05:26:45'),
(27, 'Date & time', 'date-and-time', 0, '2019-10-15 05:02:12', '2019-10-15 05:02:12'),
(28, 'Design', 'design', 0, '2019-10-15 05:00:52', '2019-10-15 05:00:52'),
(29, 'Editors', 'editors', 0, '2019-10-15 05:24:36', '2019-10-15 05:24:36'),
(30, 'Education', 'education', 0, '2019-10-15 05:02:26', '2019-10-15 05:02:26'),
(31, 'Emoji', 'emoji', 0, '2019-10-15 05:38:21', '2019-10-15 05:38:21'),
(32, 'Energy', 'energy', 0, '2019-10-15 05:08:11', '2019-10-15 05:08:11'),
(33, 'File', 'file', 0, '2019-10-15 05:22:48', '2019-10-15 05:22:48'),
(34, 'Finance', 'finance', 0, '2019-10-15 05:18:14', '2019-10-15 05:18:14'),
(35, 'Fitness', 'fitness', 0, '2019-10-15 05:19:23', '2019-10-15 05:19:23'),
(36, 'Food', 'food', 0, '2019-10-15 05:12:27', '2019-10-15 05:12:27'),
(37, 'Games', 'games', 0, '2019-10-15 05:19:11', '2019-10-15 05:19:11'),
(38, 'Genders', 'genders', 0, '2019-10-15 06:06:11', '2019-10-15 06:06:11'),
(39, 'Hand', 'hand', 0, '2019-10-15 05:00:28', '2019-10-15 05:00:28'),
(40, 'Halloween', 'halloween', 0, '2019-10-15 05:03:58', '2019-10-15 05:03:58'),
(41, 'Health', 'health', 0, '2019-10-15 04:59:32', '2019-10-15 04:59:32'),
(42, 'Hotel', 'hotel', 0, '2019-10-15 05:07:49', '2019-10-15 05:07:49'),
(43, 'Household', 'household', 0, '2019-10-15 05:20:19', '2019-10-15 05:20:19'),
(44, 'Images', 'images', 0, '2019-10-15 05:01:07', '2019-10-15 05:01:07'),
(45, 'Interfaces', 'interfaces', 0, '2019-10-15 05:01:28', '2019-10-15 05:01:28'),
(46, 'Landmark', 'landmark', 0, '2019-10-15 05:21:01', '2019-10-15 05:21:01'),
(47, 'Logistics', 'logistics', 0, '2019-10-15 05:08:44', '2019-10-15 05:08:44'),
(48, 'Mathematics', 'mathematics', 0, '2019-10-15 05:23:26', '2019-10-15 05:23:26'),
(49, 'Marketing', 'marketing', 0, '2019-10-15 05:24:05', '2019-10-15 05:24:05'),
(50, 'Maritime', 'maritime', 0, '2019-10-15 05:10:56', '2019-10-15 05:10:56'),
(51, 'Medical', 'medical', 0, '2019-10-15 05:07:06', '2019-10-15 05:07:06'),
(52, 'Menu', 'menu', 0, '2019-10-12 18:32:42', '2019-10-12 18:32:42'),
(53, 'Maps', 'maps', 0, '2019-10-15 05:18:43', '2019-10-15 05:18:43'),
(54, 'Other', 'other', 0, '2019-10-13 00:11:40', '2019-10-13 00:11:40'),
(55, 'Science Fiction', 'science-fiction', 0, '2019-10-15 05:44:30', '2019-10-15 05:44:30'),
(56, 'Shopping', 'shopping', 0, '2019-10-15 05:27:00', '2019-10-15 05:27:00'),
(57, 'Social', 'social', 0, '2019-10-15 06:13:02', '2019-10-15 06:13:02'),
(58, 'Status', 'status', 0, '2019-10-15 06:09:22', '2019-10-15 06:09:22'),
(59, 'Travel', 'travel', 0, '2019-10-15 05:12:16', '2019-10-15 05:12:16'),
(60, 'Users', 'users', 0, '2019-10-15 05:50:35', '2019-10-15 05:50:35'),
(61, 'Users & People', 'users & people', 0, '2019-10-15 05:21:56', '2019-10-15 05:21:56');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
