-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 09:02 AM
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
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `account` int(11) NOT NULL,
  `amount` float NOT NULL,
  `currency` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `via` varchar(100) NOT NULL,
  `website_account_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `details_admin` text NOT NULL,
  `details_user` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `account`, `amount`, `currency`, `type`, `via`, `website_account_id`, `status`, `details_admin`, `details_user`, `created_at`, `updated_at`) VALUES
(21, 2, 75, 1, 'withdraw', 'coinbase', 123, 2, 'admin', 'admin', '2023-11-21', '2023-11-21'),
(22, 4, 100, 2, 'deposite', 'bank_wire', 123, 2, 'admin', 'admin', '2023-11-21', '2023-11-21'),
(23, 1, 100, 1, 'deposite', 'coinbase', 321, 1, 'admin', 'admin', '2023-11-21', '2023-11-21'),
(24, 1, 100, 2, 'deposite', 'bank_wire', 123, 1, 'gg', 'gg', '2023-11-21', '2023-11-21'),
(25, 2, 555, 4, 'deposite', 'bank_wire', 321, 1, 'gg', 'admin', '2023-11-21', '2023-11-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forign key` (`account`),
  ADD KEY `fk_currency_id_new` (`currency`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `fk_currency_id_new` FOREIGN KEY (`currency`) REFERENCES `currency` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
