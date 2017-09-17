-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2017 at 09:00 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nfq_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `surname`, `email`, `phone`, `subscription`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'William', 'Goodloe', 'WilliamEGoodloe@jourrapide.com', '361-574-6038', 'Monthly', NULL, '2017-09-17 15:35:56', '2017-09-17 15:35:56'),
(2, 'Kimberly', 'Shankle', 'LindaSRojas@dayrep.com', '084 973 7020', 'Monthly', NULL, '2017-09-17 15:37:01', '2017-09-17 15:37:01'),
(3, 'Brenda', 'Hubbard', 'brendaDHubbard@gmail.com', '705-752-3663', 'Monthly', NULL, '2017-09-17 15:38:40', '2017-09-17 15:38:40'),
(4, 'Anthony', 'McGriff', 'AnthonyVMcGriff@dayrep.com', '403-721-8518', 'Monthly', NULL, '2017-09-17 15:40:27', '2017-09-17 15:40:27'),
(5, 'Jason', 'Glessner', 'JasonDGlessner@jourrapide.com', '250-367-7635', 'Monthly', NULL, '2017-09-17 15:40:56', '2017-09-17 15:40:56'),
(6, 'James', 'Thomas', 'JamesGThomas@armyspy.com', '519-348-6421', 'Monthly', NULL, '2017-09-17 15:41:18', '2017-09-17 15:41:18'),
(7, 'Douglas', 'Brown', 'DouglasKBrown@rhyta.com', '613-736-4590', 'Yearly', NULL, '2017-09-17 15:41:56', '2017-09-17 15:41:56'),
(8, 'Marilyn', 'O\'Connor', 'MarilynWOConnor@dayrep.com', '709-458-6497', 'Yearly', NULL, '2017-09-17 15:42:29', '2017-09-17 15:42:29'),
(9, 'Michael', 'Powell', 'MichaelJPowell@armyspy.com', '403-466-5196', 'Monthly', NULL, '2017-09-17 15:42:55', '2017-09-17 15:42:55'),
(10, 'Matthew', 'Pierce', 'MatthewCPierce@armyspy.com', '250-497-6002', 'Yearly', '1505673848AnnRegulAvatar.jpg', '2017-09-17 15:44:08', '2017-09-17 15:44:08'),
(11, 'Don', 'Jordan', 'DonMJordan@jourrapide.com', '250-336-4013', 'Monthly', '1505673877H357yaH.jpg', '2017-09-17 15:44:37', '2017-09-17 15:44:37'),
(12, 'Mark', 'Hillenbrand', 'MarkEHillenbrand@teleworm.us', '403-845-1018', 'Yearly', NULL, '2017-09-17 15:45:02', '2017-09-17 15:45:02'),
(13, 'Hugh', 'Jones', 'HughIJones@jourrapide.com', '514-217-2984', 'Monthly', '1505673926avatar1.jpg', '2017-09-17 15:45:26', '2017-09-17 15:45:26'),
(14, 'Claude', 'McCurdy', 'ClaudeMMcCurdy@rhyta.com', '613-221-4230', 'Yearly', NULL, '2017-09-17 15:45:51', '2017-09-17 15:45:51'),
(15, 'Gary', 'Griffin', 'GaryJGriffin@teleworm.us', '070 0458 3908', 'Yearly', NULL, '2017-09-17 15:46:18', '2017-09-17 15:46:18'),
(16, 'Jeffrey', 'Bair', 'JeffreyBBair@armyspy.com', '070 8415 9990', 'Monthly', NULL, '2017-09-17 15:46:43', '2017-09-17 15:46:43'),
(17, 'James', 'Smith', 'JamesTSmith@jourrapide.com', '077 8019 5052', 'Yearly', NULL, '2017-09-17 15:47:04', '2017-09-17 15:47:04'),
(18, 'Richard', 'Koehler', 'RichardDKoehler@dayrep.com', '077 1681 0204', 'Yearly', '1505674044avatar1.jpg', '2017-09-17 15:47:24', '2017-09-17 15:47:24'),
(19, 'Peter', 'Cooper', 'PeterHCooper@jourrapide.com', '079 7517 0477', 'Yearly', NULL, '2017-09-17 15:47:40', '2017-09-17 15:47:40'),
(20, 'Eugene', 'Glover', 'EugeneCGlover@teleworm.us', '070 8207 0570', 'Yearly', NULL, '2017-09-17 15:47:59', '2017-09-17 15:47:59'),
(21, 'Harold', 'Johnson', 'HaroldTJohnson@rhyta.com', '077 6885 7720', 'Monthly', NULL, '2017-09-17 15:48:19', '2017-09-17 15:48:19'),
(22, 'Jackie', 'Baillie', 'JackieOBaillie@dayrep.com', '078 0327 1696', 'Monthly', NULL, '2017-09-17 15:48:41', '2017-09-17 15:48:41'),
(23, 'Billy', 'Tran', 'BillyKTran@armyspy.com', '070 6652 2970', 'Monthly', '1505674141H357yaH.jpg', '2017-09-17 15:49:01', '2017-09-17 15:49:01'),
(24, 'Richard', 'Bauman', 'RichardABauman@armyspy.com', '079 6494 4216', 'Yearly', NULL, '2017-09-17 15:49:27', '2017-09-17 15:49:27'),
(25, 'William', 'Ross', 'WilliamKRoss@armyspy.com', '070 3489 0661', 'Yearly', '1505674191avatar1.jpg', '2017-09-17 15:49:51', '2017-09-17 15:49:51'),
(26, 'Frederick', 'Bell', 'FrederickBBell@teleworm.us', '077 0476 9989', 'Yearly', NULL, '2017-09-17 15:51:04', '2017-09-17 15:51:04'),
(27, 'Forrest', 'Glover', 'ForrestGGlover@armyspy.com', '070 8426 8553', 'Monthly', NULL, '2017-09-17 15:51:22', '2017-09-17 15:51:22'),
(28, 'Jeff', 'Criss', 'JeffMCriss@jourrapide.com', '078 7605 1670', 'Yearly', '1505674301AnnRegulAvatar.jpg', '2017-09-17 15:51:41', '2017-09-17 15:51:41'),
(29, 'Johnny', 'Camden', 'JohnnyJCamden@armyspy.com', '078 7440 5447', 'Monthly', NULL, '2017-09-17 15:52:00', '2017-09-17 15:52:00'),
(30, 'Damon', 'Flickinger', 'DamonTFlickinger@armyspy.com', '070 3620 4741', 'Yearly', '1505674339H357yaH.jpg', '2017-09-17 15:52:19', '2017-09-17 15:52:19'),
(31, 'Reuben', 'Tulley', 'ReubenCTulley@armyspy.com', '070 6101 7921', 'Monthly', NULL, '2017-09-17 15:52:36', '2017-09-17 15:52:36'),
(32, 'George', 'Guzman', 'GeorgeTGuzman@jourrapide.com', '077 3208 8986', 'Yearly', NULL, '2017-09-17 15:53:03', '2017-09-17 15:53:03'),
(33, 'Arthur', 'Gregory', 'ArthurAGregory@teleworm.us', '077 7711 0377', 'Yearly', NULL, '2017-09-17 15:53:21', '2017-09-17 15:53:21'),
(34, 'Milton', 'Matthews', 'MiltonCMatthews@dayrep.com', '070 6220 4029', 'Yearly', NULL, '2017-09-17 15:53:40', '2017-09-17 15:53:40'),
(35, 'Thomas', 'Deines', 'ThomasVDeines@rhyta.com', '070 2719 5212', 'Yearly', NULL, '2017-09-17 15:53:57', '2017-09-17 15:53:57'),
(36, 'Glenn', 'Dejesus', 'GlennMDejesus@jourrapide.com', '077 3371 8443', 'Monthly', NULL, '2017-09-17 15:54:16', '2017-09-17 15:54:16'),
(37, 'Matthew', 'Heilig', 'MatthewPHeilig@teleworm.us', '070 1278 5381', 'Monthly', NULL, '2017-09-17 15:54:38', '2017-09-17 15:54:38'),
(38, 'Jonathon', 'Wright', 'JonathonBWright@dayrep.com', '070 8328 1762', 'Monthly', NULL, '2017-09-17 15:55:00', '2017-09-17 15:55:00'),
(39, 'Alexander', 'Luna', 'AlexanderLLuna@teleworm.us', '078 1316 2593', 'Monthly', NULL, '2017-09-17 15:55:17', '2017-09-17 15:55:17'),
(40, 'Philip', 'Stuart', 'PhilipMStuart@armyspy.com', '077 5690 5012', 'Yearly', NULL, '2017-09-17 15:55:34', '2017-09-17 15:55:34'),
(41, 'Aaron', 'Krebs', 'AaronDKrebs@armyspy.com', '078 3422 2608', 'Monthly', '1505674552AnnRegulAvatar.jpg', '2017-09-17 15:55:52', '2017-09-17 15:55:52'),
(42, 'John', 'Heuser', 'JohnDHeuser@rhyta.com', '079 8359 7532', 'Monthly', '1505674576AnnRegulAvatar.jpg', '2017-09-17 15:56:16', '2017-09-17 15:56:16'),
(43, 'Paul', 'Hebert', 'PaulAHebert@rhyta.com', '078 8355 2688', 'Monthly', NULL, '2017-09-17 15:56:41', '2017-09-17 15:56:41'),
(44, 'Leon', 'Spencer', 'LeonJSpencer@dayrep.com', '078 0266 1421', 'Monthly', NULL, '2017-09-17 15:57:01', '2017-09-17 15:57:01'),
(45, 'Michael', 'Hall', 'MichaelLHall@jourrapide.com', '078 5542 4222', 'Monthly', NULL, '2017-09-17 15:57:24', '2017-09-17 15:57:24'),
(46, 'Brian', 'Thomas', 'BrianFThomas@rhyta.com', '078 8407 2409', 'Monthly', NULL, '2017-09-17 15:57:39', '2017-09-17 15:57:39'),
(47, 'Francis', 'Cole', 'FrancisCCole@rhyta.com', '079 7428 4558', 'Monthly', NULL, '2017-09-17 15:57:57', '2017-09-17 15:57:57'),
(48, 'Derek', 'Kelly', 'DerekCKelly@rhyta.com', '077 7628 1374', 'Yearly', NULL, '2017-09-17 15:58:15', '2017-09-17 15:58:15'),
(49, 'Stephen', 'Lapierre', 'StephenRLapierre@rhyta.com', '079 6689 0014', 'Yearly', NULL, '2017-09-17 15:58:35', '2017-09-17 15:58:35'),
(50, 'Dwayne', 'Teachout', 'DwayneATeachout@jourrapide.com', '070 7319 3170', 'Monthly', NULL, '2017-09-17 15:58:55', '2017-09-17 15:58:55'),
(51, 'Charles', 'Tarbell', 'CharlesLTarbell@armyspy.com', '070 4947 9365', 'Yearly', NULL, '2017-09-17 15:59:13', '2017-09-17 15:59:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
