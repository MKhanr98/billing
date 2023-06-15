-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 10:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bill`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(4, 'mkhan', 'mk@gmail.com', 'mk12');

-- --------------------------------------------------------

--
-- Table structure for table `pkg`
--

CREATE TABLE `pkg` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `duration` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pkg`
--

INSERT INTO `pkg` (`id`, `name`, `duration`, `price`, `description`, `admin_id`) VALUES
(12, 'Daily Pro', '1', 100, '100 mb', 4),
(13, 'Weekly Max', '7', 420, '1GB', 4),
(14, 'monthly pro', '30', 900, '60 Gb ultra', 4);

-- --------------------------------------------------------

--
-- Table structure for table `subs`
--

CREATE TABLE `subs` (
  `id` int(11) NOT NULL,
  `pkg_id` int(11) NOT NULL,
  `sub_date` datetime NOT NULL DEFAULT current_timestamp(),
  `exp_date` datetime NOT NULL,
  `pay_method` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subs`
--

INSERT INTO `subs` (`id`, `pkg_id`, `sub_date`, `exp_date`, `pay_method`, `user_id`) VALUES
(34, 12, '2023-06-15 13:32:56', '2023-06-16 13:32:56', 'Credit Card', 17),
(35, 13, '2023-06-15 13:33:00', '2023-06-22 13:33:00', 'Credit Card', 17),
(36, 14, '2023-06-15 13:33:03', '2023-07-15 13:33:03', 'Credit Card', 17),
(37, 12, '2023-06-15 13:33:44', '2023-06-16 13:33:44', 'Credit Card', 19),
(38, 13, '2023-06-15 13:33:48', '2023-06-22 13:33:48', 'Easy Paisa', 19),
(39, 14, '2023-06-15 13:33:53', '2023-07-15 13:33:53', 'Jazz Cash', 19),
(40, 12, '2023-06-15 13:34:59', '2023-06-16 13:34:59', 'Easy Paisa', 19);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `name` text NOT NULL,
  `cnic` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `cnic`, `email`, `password`, `phone`) VALUES
(17, '101', 'Alisher', '17101-4294073-7', 'ali@gmail.com', 'ali12', 2147483647),
(19, '102', 'Ayub', '98409-2182382-3', 'ab@gmail.com', 'ab12', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pkg`
--
ALTER TABLE `pkg`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `subs`
--
ALTER TABLE `subs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pkg_id` (`pkg_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pkg`
--
ALTER TABLE `pkg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subs`
--
ALTER TABLE `subs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pkg`
--
ALTER TABLE `pkg`
  ADD CONSTRAINT `admin_id` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- Constraints for table `subs`
--
ALTER TABLE `subs`
  ADD CONSTRAINT `pkg_id` FOREIGN KEY (`pkg_id`) REFERENCES `pkg` (`id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
