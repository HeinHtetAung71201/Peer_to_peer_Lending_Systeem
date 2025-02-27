-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2025 at 02:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pj`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE `borrower` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `interest_rate` float NOT NULL,
  `duration` int(11) NOT NULL,
  `borrow_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`id`, `name`, `email`, `address`, `phone`, `amount`, `interest_rate`, `duration`, `borrow_date`) VALUES
(1, 'MaThetMonHtwe', 'htethein609@gmail.com', 'Sagaing', '959-1234567', 50000.00, 0.5, 6, NULL),
(2, 'Hein Htet Aung', 'lender@123', 'Sagaing', '123123', 45600.00, 0.6, 9, NULL),
(3, 'MaThetMonHtwe', 'thetmon@134', 'Kalwin', '09456123', 50000.00, 0.6, 6, NULL),
(5, 'Nway Nway', 'nwe@564', 'Yangon', '09456789', 80000.00, 0.5, 4, NULL),
(6, 'kyaw thu', 'kyaw@134', 'Sagaing', '959-1234567', 80000.00, 0.6, 5, '2025-05-06'),
(8, 'May Thu Myint', 'may@00002', 'Monywa', '0940001564', 80000.00, 0.6, 5, '2025-05-14'),
(10, 'kyaw hetet hein', 'hein@hh', 'Sagaing', '123123', 80000.00, 0.6, 5, '2025-05-12'),
(14, 'kyaw hetet hein', 'hein789@hh', 'Sagaing', '123123', 80000.00, 0.6, 5, '2025-05-12'),
(15, 'Moe Moe', 'moe@1234', 'Katar', '03456789', 80000.00, 0.6, 5, '2021-05-22'),
(16, 'Moe Thu', 'thu@134', 'kalaw', '09785255', 50000.00, 0.3, 5, '2021-05-22'),
(18, 'Moe Thu', 'hha123@gmail.com', 'kalaw', '09785255', 50000.00, 0.3, 5, '2021-05-22'),
(19, 'Moe Thu', 'test123@gmail.com', 'kalaw', '09785255', 50000.00, 0.9, 5, '2021-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `creditsrec`
--

CREATE TABLE `creditsrec` (
  `id` int(11) NOT NULL,
  `lender_name` varchar(50) NOT NULL,
  `lender_email` varchar(100) NOT NULL,
  `loan_amt` decimal(10,2) NOT NULL,
  `rate` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `duration` int(20) NOT NULL,
  `interest` decimal(10,2) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `borrower_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `creditsrec`
--

INSERT INTO `creditsrec` (`id`, `lender_name`, `lender_email`, `loan_amt`, `rate`, `created_at`, `duration`, `interest`, `status`, `borrower_id`) VALUES
(22, 'thetmon', 'thetmon@gmail.com', 40000.00, 0.3, '2025-02-24 05:18:32', 3, 36000.00, 'Paid', 6),
(23, 'Ko Hein', 'kohein7122@gmail.com', 900000.00, 0.4, '2025-02-24 05:28:26', 7, 2520000.00, 'Paid', 4),
(24, 'heinhtet', 'htethein609@gmail.com', 60000.00, 0.2, '2025-02-24 09:39:30', 9, 108000.00, 'Paid', 4),
(25, 'Ko Hein', 'kohein7122@gmail.com', 900000.00, 0.4, '2025-02-24 10:12:36', 7, 2520000.00, 'borrowed', 4),
(26, 'heinhtet', 'htethein609@gmail.com', 50000.00, 0.2, '2025-02-24 13:59:51', 5, 50000.00, 'borrowed', 4),
(27, 'heinhtet', 'htethein609@gmail.com', 50000.00, 0.2, '2025-02-24 14:00:30', 5, 50000.00, 'borrowed', 4),
(28, 'heinhtet', 'htethein609@gmail.com', 50000.00, 0.2, '2025-02-24 14:01:00', 5, 50000.00, 'borrowed', 4),
(29, 'heinhtet', 'htethein609@gmail.com', 50000.00, 0.2, '2025-02-24 14:01:20', 5, 50000.00, 'borrowed', 4),
(30, 'heinhtet', 'htethein609@gmail.com', 600000.00, 0.3, '2025-02-25 07:02:32', 8, 1440000.00, 'borrowed', 4);

-- --------------------------------------------------------

--
-- Table structure for table `lender`
--

CREATE TABLE `lender` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `interest_rate` float NOT NULL,
  `duration` int(11) NOT NULL,
  `lender_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lender`
--

INSERT INTO `lender` (`id`, `name`, `email`, `address`, `phone`, `amount`, `interest_rate`, `duration`, `lender_date`) VALUES
(2, 'Htet Myat', 'htet@6777', 'Ya00', '09123333', 80000.00, 0.6, 5, NULL),
(3, 'Mon Htwe', 'mon@9090', 'Japan', '09654321', 80000.00, 0.6, 5, NULL),
(5, 'Ma Thet Mon Htwe', 'thetmon609@gmail.com', 'kalaw', '09785255', 100000.00, 0.3, 3, '0000-00-00'),
(6, 'heinhtet', 'htethein609@gmail.com', 'Monywa', '0912345678', 390000.00, 0.2, 3, NULL),
(10, 'heinhtet', 'htethein609@gmail.com', 'mandalay', '09333222333', 22222.00, 0.2, 2, NULL),
(11, 'thetmon', 'thetmon@gmail.com', 'Kawlin', '09999888777', 30000.00, 0.2, 3, NULL),
(12, 'thetmon', 'thetmon@gmail.com', 'Kawlin', '09999888777', 30000.00, 0.35, 3, NULL),
(13, 'thetmon', 'thetmon@gmail.com', 'mandalay', '09958169396', 40000.00, 0.5, 4, NULL),
(14, 'thetmon', 'thetmon@gmail.com', 'mandalay', '09958169396', 80000.00, 0.5, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `loan_id` int(11) NOT NULL,
  `borrower_id` int(11) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `interest_rate` float NOT NULL,
  `status` enum('pending','approved','repaid') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `duration` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `lender_id` int(20) DEFAULT NULL,
  `profit` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`loan_id`, `borrower_id`, `address`, `amount`, `interest_rate`, `status`, `created_at`, `duration`, `name`, `email`, `lender_id`, `profit`) VALUES
(33, 1, 'Monywa', 20000.00, 0.4, 'approved', '2025-02-24 05:17:53', 2, 'heinhtet', 'htethein609@gmail.com', 6, 0),
(34, 6, 'Monywa', 40000.00, 0.3, 'approved', '2025-02-24 05:18:19', 3, 'Ko Hein', 'kohein7122@gmail.com', 4, 0),
(35, 4, 'Mandalay', 900000.00, 0.4, 'approved', '2025-02-24 05:27:32', 7, 'thetmon', 'thetmon@gmail.com', 6, 0),
(36, 4, 'Monywa', 60000.00, 0.2, 'approved', '2025-02-24 09:33:56', 9, 'thetmon', 'thetmon@gmail.com', 1, 0),
(37, 8, 'Mogok', 200000.00, 0.2, 'pending', '2025-02-24 10:05:38', 5, 'Ma Myo Thin Zar', 'myo@123gmail.com', NULL, 0),
(38, 4, 'hhhh', 50000.00, 0.2, 'approved', '2025-02-24 13:58:58', 5, 'thetmon', 'thetmon@gmail.com', 1, 50000),
(39, 4, 'Monywa', 600000.00, 0.3, 'approved', '2025-02-25 07:01:20', 8, 'thetmon', 'thetmon@gmail.com', 1, 1440000);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `lender_id` int(11) NOT NULL,
  `borrower_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `interest_rate` decimal(5,2) NOT NULL,
  `duration` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `PASSWORD`) VALUES
(1, 'heinhtet', 'htethein609@gmail.com', 'heinhtet'),
(4, 'thetmon', 'thetmon@gmail.com', 'thetmon'),
(6, 'Ko Hein', 'kohein7122@gmail.com', 'heinhtetaung'),
(7, 'thetmonhtwe', 'thetmonhtwe@gmail.com', 'thetmon'),
(8, 'Ma Myo Thin Zar', 'myo@123gmail.com', 'myomyo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrower`
--
ALTER TABLE `borrower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creditsrec`
--
ALTER TABLE `creditsrec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lender`
--
ALTER TABLE `lender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrower`
--
ALTER TABLE `borrower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `creditsrec`
--
ALTER TABLE `creditsrec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `lender`
--
ALTER TABLE `lender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
