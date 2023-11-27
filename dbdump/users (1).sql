-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 07:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `dial_code` int(10) NOT NULL DEFAULT 91,
  `phone` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `email`, `user_name`, `dial_code`, `phone`, `password`, `user_role`, `is_active`) VALUES
(1, 'admin', '', 'admin@jmi.com', '', 91, '', '202cb962ac59075b964b07152d234b70', 1, 1),
(2, 'RagulBuusha', '1', 'buusha.br@gmail.com', 'rebu2228', 91, '9092042198', '6674ca465dcb5b4b95aaa7bbc4d53d0c', 2, 1),
(7, 'Gowthyyy', '1', 'akil@smiksystems.com', 'Gott234', 1242, '9944847140', '6674ca465dcb5b4b95aaa7bbc4d53d0c', 2, 1),
(9, 'Hertyl Jackson', '1', 'user12@gmail.com', 'Jack56', 994, '8939423416', '6674ca465dcb5b4b95aaa7bbc4d53d0c', 2, 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
