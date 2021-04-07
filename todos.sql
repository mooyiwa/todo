-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2021 at 02:29 PM
-- Server version: 10.2.5-MariaDB-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todos`
--

-- --------------------------------------------------------

--
-- Table structure for table `cates`
--

CREATE TABLE `cates` (
  `id` int(11) NOT NULL,
  `cate` varchar(200) NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cates`
--

INSERT INTO `cates` (`id`, `cate`, `updated_at`) VALUES
(1, 'Soul', '2020-05-05 16:45:08'),
(6, 'Contemporary Jazz', '2020-05-05 16:41:18'),
(7, 'Hip Hop', '2020-05-05 16:41:46'),
(9, 'Afro', '2020-05-05 16:49:07'),
(11, 'House music', '2020-05-05 16:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `post_id` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `cate` varchar(200) NOT NULL,
  `short` text DEFAULT NULL,
  `post_img` varchar(150) DEFAULT NULL,
  `song_id` varchar(200) DEFAULT NULL,
  `auth` varchar(100) NOT NULL,
  `first` varchar(100) DEFAULT NULL,
  `last` varchar(100) DEFAULT NULL,
  `start` date NOT NULL,
  `finish` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(25) DEFAULT NULL,
  `accepted` varchar(5) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `post_id`, `title`, `cate`, `short`, `post_img`, `song_id`, `auth`, `first`, `last`, `start`, `finish`, `timestamp`, `status`, `accepted`, `updated_at`) VALUES
(63, '16401', 'Afro Beat 4 - Edit 3', 'Afro', 'Work on a verse 3 before Wednesday. Assign Jeen and D1<br>', NULL, NULL, 'teeto', NULL, NULL, '2021-04-07', '2021-05-07', '2021-04-07 12:50:01', 'Completed', 'Y', NULL),
(61, '13231', 'Jazz 12 Edits', 'Contemporary Jazz', 'Work on the modulation on vs 2<br>', NULL, NULL, 'teeto', NULL, NULL, '2021-04-07', '2021-05-07', '2021-04-07 13:50:21', 'Pending', 'Y', NULL),
(60, '27749', 'Work on the bridge - Song 32', 'Soul', 'Get Wale Drums and Saja to work a bridge on Song 32 this Friday.<br>', NULL, NULL, 'teeto', NULL, NULL, '2021-04-07', '2021-05-07', '2021-04-07 13:50:40', 'Completed', 'Y', '2021-04-07 12:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `txn`
--

CREATE TABLE `txn` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `wallet_id` varchar(25) NOT NULL,
  `item` varchar(255) NOT NULL,
  `cost` decimal(15,2) NOT NULL,
  `qty` varchar(25) NOT NULL,
  `cafe` varchar(255) NOT NULL,
  `txn_id` varchar(25) NOT NULL,
  `debit` decimal(15,2) NOT NULL,
  `credit` decimal(15,2) NOT NULL,
  `total` decimal(15,2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(25) NOT NULL,
  `paidstamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `paid_day` date NOT NULL,
  `auth` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `txn`
--

INSERT INTO `txn` (`id`, `username`, `wallet_id`, `item`, `cost`, `qty`, `cafe`, `txn_id`, `debit`, `credit`, `total`, `timestamp`, `status`, `paidstamp`, `paid_day`, `auth`) VALUES
(50, 'eatio', '41922', 'Dodo - One portion', '80.00', '2', 'Mixed Grills Tanke', '1151', '0.00', '0.00', '0.00', '2017-12-31 07:12:52', 'Pending', '0000-00-00 00:00:00', '0000-00-00', ''),
(54, 'eatio', '41922', 'Goat meat', '200.00', '4', 'Mixed Grills Tanke', '2651', '-800.00', '0.00', '-800.00', '2017-12-31 07:12:55', 'Paid', '2018-01-02 01:01:18', '2018-01-02', 'zteller'),
(56, 'eatio', '41922', 'Bottled Water', '100.00', '2', 'Mixed Grills Tanke', '2651', '-200.00', '0.00', '-200.00', '2017-12-31 07:12:03', 'Paid', '2018-01-02 01:01:18', '2018-01-02', 'zteller'),
(59, 'eatio', '41922', 'Jolof Rice - One portion', '100.00', '1', 'Mixed Grills Tanke', '4535', '-100.00', '0.00', '-100.00', '2017-12-31 08:12:35', 'Pending', '0000-00-00 00:00:00', '0000-00-00', ''),
(61, 'eatio', '41922', 'Goat meat', '200.00', '1', 'Mixed Grills Tanke', '4535', '-200.00', '0.00', '-200.00', '2017-12-31 08:12:46', 'Pending', '0000-00-00 00:00:00', '0000-00-00', ''),
(63, 'eatio', '41922', 'Bottled Water', '100.00', '1', 'Mixed Grills Tanke', '4535', '-100.00', '0.00', '-100.00', '2017-12-31 08:12:58', 'Pending', '0000-00-00 00:00:00', '0000-00-00', ''),
(64, 'eatio', '41922', 'Wallet Credit', '0.00', '', '', '1318', '0.00', '5000.00', '5000.00', '2018-01-02 02:01:13', 'Paid', '0000-00-00 00:00:00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `who` char(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passcode` varchar(10) DEFAULT NULL,
  `user_id` varchar(50) NOT NULL,
  `secret` varchar(25) NOT NULL,
  `hash_secret` varchar(255) NOT NULL,
  `first` varchar(100) DEFAULT NULL,
  `last` varchar(100) DEFAULT NULL,
  `sex` char(2) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` char(100) DEFAULT NULL,
  `bday` varchar(100) DEFAULT NULL,
  `me` text DEFAULT NULL,
  `fb` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `ig` varchar(100) DEFAULT NULL,
  `cate` varchar(100) DEFAULT NULL,
  `photo_id` varchar(255) DEFAULT NULL,
  `wallet` varchar(2) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `who`, `password`, `passcode`, `user_id`, `secret`, `hash_secret`, `first`, `last`, `sex`, `email`, `phone`, `bday`, `me`, `fb`, `twitter`, `ig`, `cate`, `photo_id`, `wallet`, `updated_at`) VALUES
(4554, 'abdul.saheed', 'user', '5f4dcc3b5aa765d61d8327deb882cf99', '', '56334', '', '', NULL, NULL, NULL, 'abd@aol.com', '7098898898', NULL, '', '', '', '', '', 'silasb_avatar.jpg', '0.', '2018-02-26 09:56:48'),
(2, 'admin1', 'admin1', '5f4dcc3b5aa765d61d8327deb882cf99', '', '', '', '', NULL, NULL, 'M', 'admin@aol.com', '7068895548', NULL, '', '', '', '', 'IT lane, BishopsOaks', '', '0.', '2018-02-26 09:56:48'),
(4616, 'teeto', 'user', 'e29af43754ebb2caecd0154f7768cc68', NULL, '24733', '178304', 'd0e03e07d7c342f699b28ec43721dab7', 'Tee', 'To', 'F', 'teeto@aol.com', '78888766', '1993-04-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4568, 'terry', 'user', '5f4dcc3b5aa765d61d8327deb882cf99', '88125', '25560', '406827', '3b13c858da155ca191aff01aec5ef5a7', 'Silas', 'Bamidele', NULL, 'trr@gmail.com', '8877899111', NULL, 'I am a Jazz artist from Ikeja.', 'terrymax', '@tmax', '@terrymax', 'Ajax Developer', '1520029910.jpg', '', '2020-05-09 09:30:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`title`,`cate`,`auth`,`start`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `txn`
--
ALTER TABLE `txn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`,`user_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `txn`
--
ALTER TABLE `txn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4617;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
