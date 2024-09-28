-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2024 at 03:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `v_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_sale`
--

CREATE TABLE `item_sale` (
  `id` int(11) NOT NULL,
  `item_code` varchar(6) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` decimal(10,0) NOT NULL,
  `expried_date` date NOT NULL,
  `note` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `item_sale`
--

INSERT INTO `item_sale` (`id`, `item_code`, `item_name`, `quantity`, `expried_date`, `note`) VALUES
(51, 'quan', 'quandoan21', 456, '2024-09-27', 'quandaon21'),
(52, 'asd', 'quandoan21', 123, '2024-09-12', 'dasdas'),
(53, 'asd', 'quandoan21', 123, '2024-09-12', 'dasdas'),
(54, 'lmao', 'lmao', 321, '1999-10-20', 'lmao'),
(55, 'qundon', 'lmao lmao lmao ', 12312, '2123-03-12', 'lmao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_sale`
--
ALTER TABLE `item_sale`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_sale`
--
ALTER TABLE `item_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
