-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 04:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--
CREATE DATABASE IF NOT EXISTS `crud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `crud`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `address`) VALUES
(9, 'Jalal', 'Chowdhury', 'jalalc425@gmail.com', '01646705394', 'Sylhet'),
(10, 'Sumaiya Tabassum', 'Chowdhury', 'sumaiya95@gmail.com', '01788996654', 'Dhaka'),
(11, 'Jahirul Islam', 'Hridoy', 'hridoyahmed92@gmail.com', '01987346312', 'Sunamgang'),
(12, 'Misbah Uddin', 'Tareq', 'misbah12@gmail.com', '01388776655', 'Sylhet'),
(13, 'Ashab', 'Hussen', 'ashab777@gmail.com', '01677884531', 'Moulvi Bazar'),
(14, 'Mark Zukarburg', 'Zukarburg', 'Zukarburg854@gmail.com', '01877553324', 'Comilla'),
(15, 'Pranto', 'Das', 'prantodas7@gmail.com', '01646705397', 'Kulaura'),
(16, 'Prinka', 'paul', 'priyankapal1@gmail.com', '01677889923', 'Dhaka'),
(17, 'Nayeem', 'Ahmed', 'nayst@gmail.com', '01746705398', 'Sylhet'),
(18, 'Rajia', 'Khanom', 'rkhanom9@gmail.com', '01355667743', 'Moulvi Bazar'),
(19, 'Rakib', 'Chowdhury', 'rkib8@gmail.com', '01546705399', 'Sylhet'),
(20, 'Jamal', 'Ahmed', 'jamalcse1999@gmail.com', '01646705394', 'Shamsher nager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
