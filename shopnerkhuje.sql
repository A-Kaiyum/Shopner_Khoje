-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 09:11 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopnerkhuje`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `donation` int(15) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `address`, `email`, `phone`, `donation`, `updated_at`) VALUES
(1, 'Srabon', 'Mymensingh', 'srabon@gmail.com', '01753265885', 200000, '2020-03-30 19:13:08'),
(2, 'Bappi', 'Narail', 'bappi@gamil.com', '01753265885', 50000, '2020-03-30 19:39:54'),
(4, 'Bappi', 'Dhaka', 'shotaz@gmail.com', '01753265885', 5000, '2020-04-01 07:00:43'),
(5, 'samira', 'Mymensingh', 'samira@gmail.com', '01753265885', 5000, '2020-04-01 07:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `status` enum('Active','Inactive','','') NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `address`, `email`, `phone`, `designation`, `status`, `updated_at`) VALUES
(1, 'Srabon', 'Dhaka', 'srabon@gmail.com', '01753265885', 'President', 'Active', '2020-03-30 15:11:45'),
(3, 'Shotez', 'Narail', 'shotaz@gmail.com', '0123654788', 'VC', 'Active', '2020-03-30 16:56:56'),
(4, 'Srabon', 'Narail', 'srabon@gmail.com', '01753265885', 'President', 'Active', '2020-04-01 04:31:13'),
(5, 'Bappi', 'Mymensingh', 'bappi@gamil.com', '01256562352', 'VC', 'Active', '2020-04-01 04:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `peoples`
--

CREATE TABLE `peoples` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peoples`
--

INSERT INTO `peoples` (`id`, `name`, `address`, `phone`, `created_at`) VALUES
(1, 'Bappi', 'Mymensingh', '01753265885', '2020-03-31 18:30:47'),
(3, 'Shotez', 'Narail', '01753265885', '2020-03-31 18:33:25'),
(4, 'Shotez', 'Narail', '01753265885', '2020-04-01 07:00:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_type` enum('Admin','Manager','Staff','') NOT NULL,
  `status` enum('Active','Inactive','','') NOT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `user_type`, `status`, `updated_at`) VALUES
(1, 'Admin', 'admin@estore.com', 'e10adc3949ba59abbe56e057f20f883e', '0198823747', 'Admin', 'Active', 0),
(12, 'Fahmida Robaet', 'fahmida@gmail.com', '202cb962ac59075b964b07152d234b70', '01987654321', 'Manager', 'Active', NULL),
(15, 'Borsha', 'Borsha@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01236549874', 'Admin', 'Active', NULL),
(16, 'Srabon', 'srabon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01753265885', 'Manager', 'Active', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peoples`
--
ALTER TABLE `peoples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peoples`
--
ALTER TABLE `peoples`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
