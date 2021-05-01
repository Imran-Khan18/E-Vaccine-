-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 30, 2021 at 05:47 AM
-- Server version: 10.3.28-MariaDB-log-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rubycstz_tm`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulances`
--

CREATE TABLE `ambulances` (
  `id` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambulances`
--

INSERT INTO `ambulances` (`id`, `area`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 500, '2021-04-28 04:59:49', '2021-04-28 04:59:49'),
(2, 'Rangpur', 5000, '2021-04-27 23:12:22', '2021-04-27 23:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `ambulance_requests`
--

CREATE TABLE `ambulance_requests` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `payment` varchar(500) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ambulance_requests`
--

INSERT INTO `ambulance_requests` (`id`, `name`, `age`, `phone`, `address`, `contact`, `payment`, `created_at`, `updated_at`) VALUES
(1, 'Monir chowdhury', 32, '5454564', 'Dhaka, Bangladesh', '458555', 'test payment', '2021-04-24 16:46:23', '2021-04-24 16:46:23'),
(2, 'Rokshana Ferdous Mazumder', 32, '515454', 'Dhaka, Bangladesh', '458555', 'test payment', '2021-04-24 16:47:38', '2021-04-24 16:47:38'),
(8, 'MD Rubyat Islam', 12, '01722891000', 'H# 36, R# 2/1,', '575783', '263424', '2021-04-25 19:48:42', '2021-04-25 19:48:42'),
(9, 'onik', 28, '1858121999', 'Address 32 Abul Hasanath Road Bongshal', '018582121999', '500', '2021-04-26 08:38:51', '2021-04-26 08:38:51'),
(10, 'Mohammad Imran Ali Ali', 28, '01858121999', 'Address 32 Abul Hasanath Road Bongshal', '018582121999', '500', '2021-04-26 08:41:35', '2021-04-26 08:41:35'),
(11, 'Mohammad Imran Ali Ali', 28, '01858121999', 'Address 32 Abul Hasanath Road Bongshal', '018582121999', '500', '2021-04-26 08:42:01', '2021-04-26 08:42:01'),
(12, 'Mohammad Imran Ali Ali', 28, '01858121999', 'Address 32 Abul Hasanath Road Bongshal', '018582121999', '500', '2021-04-26 09:02:16', '2021-04-26 09:02:16'),
(13, 'rupok', 21, '01858121999', 'Address 32 Abul Hasanath Road Bongshal', '018582121999', '7008', '2021-04-26 14:34:45', '2021-04-26 14:34:45'),
(14, 'imran khan', 28, '01858121999', 'Address 32 Abul Hasanath Road Bongshal', '018582121999', '2000', '2021-04-27 13:48:55', '2021-04-27 13:48:55'),
(15, 'MD Rubyat Islam', 12, '01722891000', 'H# 36, R# 2/1,', '575783', '1', '2021-04-27 20:19:21', '2021-04-27 20:19:21'),
(16, 'MD Rubyat Islam', 12, '01722891000', 'H# 36, R# 2/1,', '575783', '2', '2021-04-27 20:19:34', '2021-04-27 20:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_date` date NOT NULL,
  `department_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `appointment_date`, `department_id`, `doctor_id`, `comment`, `created_at`, `updated_at`) VALUES
(6, 'MD Rubyat Islam', 'rubyat.ais@gmail.com', '01722891000', '2021-04-26', 1, 3, 'date', '2021-04-25 13:13:03', '2021-04-25 13:13:03'),
(7, 'MD Rubyat Islam', 'rubyat.ais@gmail.com', '01722891000', '2021-04-27', 1, 2, NULL, '2021-04-25 13:21:41', '2021-04-25 13:21:41'),
(8, 'MD Rubyat Islam', 'rubyat.ais@gmail.com', '01722891000', '2021-04-14', 2, 3, 'wfrge', '2021-04-25 13:36:37', '2021-04-25 13:36:37'),
(9, 'dsfsd', 'dsf@dsfds.fhfg', 'dsfsdf', '2021-04-13', 1, 2, 'dsfsdfdsfds', '2021-04-26 00:37:20', '2021-04-26 00:37:20'),
(10, 'Mohammad Imran Ali Ali', '1000820@daffodil.ac', '01858121999', '2021-04-26', 3, 9, 'serious patient', '2021-04-26 13:25:48', '2021-04-26 13:25:48'),
(11, 'zamil2', 'zamil@aci-bd.com', '4545454', '2021-04-29', 2, 10, 'bhjhg', '2021-04-28 14:53:52', '2021-04-28 14:53:52');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(500) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(3, 'fdgdg', 'dgfd@sdfsd.com', 'dsfsdff', 'sfsdff', '2021-04-25', '2021-04-25'),
(4, 'MD Rubyat Islam', 'rubyat.ais@gmail.com', 'I can\'t change the nameserve of laridfashionspark.com', 'erger', '2021-04-25', '2021-04-25'),
(5, 'MD Rubyat Islam', 'rubyat.ais@gmail.com', 'I can\'t change the nameserve of laridfashionspark.com', 'erger', '2021-04-25', '2021-04-25'),
(6, 'MD Rubyat Islam', 'rubyat.ais@gmail.com', 'I can\'t change the nameserve of laridfashionspark.com', 'ggr', '2021-04-25', '2021-04-25'),
(7, 'MD Rubyat Islam', 'rubyat.ais@gmail.com', NULL, 'ggere', '2021-04-25', '2021-04-25'),
(8, 'MD Rubyat Islam', 'rubyat.ais@gmail.com', NULL, 'gege', '2021-04-25', '2021-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `department`, `created_at`, `updated_at`) VALUES
(1, 'zxczxc', 'zxczxc', '2021-04-25 08:18:45', '2021-04-25 08:18:45'),
(2, '22', 'ddd', '2021-04-25 08:40:08', '2021-04-25 08:41:27'),
(3, 'Cardiac', 'by pass', '2021-04-26 13:24:20', '2021-04-26 13:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `speciality`, `created_at`, `updated_at`) VALUES
(10, 'DR. ISTIYAK ONIK', 'CARDIAC', '2021-04-27 16:06:48', '2021-04-27 16:06:48'),
(11, 'test', 'ttttt', '2021-04-28 14:56:45', '2021-04-28 15:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `graves`
--

CREATE TABLE `graves` (
  `id` int(11) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `patient` varchar(255) NOT NULL,
  `graveyard` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `graves`
--

INSERT INTO `graves` (`id`, `hospital`, `patient`, `graveyard`, `created_at`, `updated_at`) VALUES
(1, 'test', '145', 'kolabagan', '2021-04-25 20:20:04', '2021-04-25 20:20:04'),
(2, 'azgor ali', '2397933363', 'Azimpur', '2021-04-26 08:42:45', '2021-04-26 08:42:45'),
(3, 'azgor ali', '2397933363', 'Mirpur', '2021-04-26 08:53:47', '2021-04-26 08:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalzed_request`
--

CREATE TABLE `hospitalzed_request` (
  `id` int(11) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `doctor` varchar(255) DEFAULT NULL,
  `cabin` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitalzed_request`
--

INSERT INTO `hospitalzed_request` (`id`, `hospital`, `doctor`, `cabin`, `created_at`, `updated_at`) VALUES
(1, 'test', NULL, NULL, '2021-04-25 19:45:52', '2021-04-25 19:45:52'),
(2, 'test', 'doc', 'dfe', '2021-04-25 19:46:43', '2021-04-25 19:46:43'),
(3, 'test', 'doc', NULL, '2021-04-25 19:48:50', '2021-04-25 19:48:50'),
(4, 'azgor ali', 'ashad', '2021', '2021-04-26 08:39:24', '2021-04-26 08:39:24'),
(5, 'azgor ali', 'Istiyak Onik', '2021', '2021-04-26 08:52:53', '2021-04-26 08:52:53'),
(6, 'test', 'doc', 'dfe', '2021-04-27 20:19:44', '2021-04-27 20:19:44'),
(7, 'test', 'doc', 'dfe', '2021-04-27 20:19:56', '2021-04-27 20:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2021_04_15_094327_create_departments_table', 1),
(6, '2021_04_15_094616_create_doctors_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `father_name` varchar(500) DEFAULT NULL,
  `mother_name` varchar(500) DEFAULT NULL,
  `dob` date NOT NULL,
  `contact` varchar(500) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `father_name`, `mother_name`, `dob`, `contact`, `nid`, `email`, `created_at`, `updated_at`) VALUES
(7, 'khan', 'sorifuddin.com', 'farida', '2021-04-27', '018582121999.', '2397933363', '1000820@daffodil.ac', '2021-04-27', '2021-04-27'),
(8, 'onik', 'rasel', 'joe', '1991-02-12', '018582121999', '2397933363', '1000820@daffodil.ac', '2021-04-27', '2021-04-27'),
(9, 'Mohammad Imran Ali Ali', 'sorifuddin', 'farida', '1991-04-14', '018582121999', '2397933363', 'imran.bd.18@gmail.com', '2021-04-27', '2021-04-27'),
(10, 'Mohammad Imran Ali Ali', 'sorifuddin', 'farida', '1991-04-14', '018582121999', '2397933363', 'imran.bd.18@gmail.com', '2021-04-27', '2021-04-27'),
(11, 'Mohammad Imran Ali Ali', 'sorifuddin', 'farida', '1991-04-14', '018582121999', '2397933363', '1000820@daffodil.ac', '2021-04-28', '2021-04-28'),
(12, 'sawon', 'manowar', 'putul', '1989-11-02', '01670790560', '2397933362', 'sawon.bd.18@gmail.com', '2021-04-28', '2021-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_date` date NOT NULL,
  `second_date` date NOT NULL,
  `preferred_time` varchar(255) NOT NULL,
  `certificate` varchar(255) NOT NULL,
  `appointment_for` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`id`, `name`, `email`, `first_date`, `second_date`, `preferred_time`, `certificate`, `appointment_for`, `created_at`, `updated_at`) VALUES
(1, 'MD Rubyat Islam', 'rubyat.ais@gmail.com', '2021-04-28', '2021-04-30', '9:00 to 10:00', '1234', 'Service#3', '2021-04-25 20:05:49', '2021-04-25 20:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$qou.p6nySBchoKS6UjrAKO6jj0G.ChMZoxQuayUKbkeHNK9j8dlgG', NULL, '2021-04-24 12:30:15', '2021-04-24 12:30:15'),
(2, 'imran khan', 'imran.bd.18@gmail.com', NULL, '$2y$10$7IOw/XaHMbj0j4bB05XzWej3OCU1l4gYPwwG8zNeYr/6hDz7Bs3DG', NULL, '2021-04-26 12:49:56', '2021-04-26 12:49:56'),
(3, 'admin', 'admin@admin.com', NULL, '$2y$10$Tr14DDxXHpPIXN7bJodrzO0UfdH7exPB.cZcUHAvtA3cZDEtNUmPG', NULL, '2021-04-27 14:36:07', '2021-04-27 14:36:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambulances`
--
ALTER TABLE `ambulances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ambulance_requests`
--
ALTER TABLE `ambulance_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graves`
--
ALTER TABLE `graves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitalzed_request`
--
ALTER TABLE `hospitalzed_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambulances`
--
ALTER TABLE `ambulances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ambulance_requests`
--
ALTER TABLE `ambulance_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `graves`
--
ALTER TABLE `graves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hospitalzed_request`
--
ALTER TABLE `hospitalzed_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
