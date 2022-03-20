-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2021 at 09:58 AM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `letusstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `size_guide`
--

CREATE TABLE `size_guide` (
  `sg_id` int NOT NULL,
  `sg_total_size` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sg_cat_id` int NOT NULL,
  `sg_name_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sg_item` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sg_flat_size` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sg_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `size_guide`
--

INSERT INTO `size_guide` (`sg_id`, `sg_total_size`, `sg_cat_id`, `sg_name_key`, `sg_item`, `sg_flat_size`, `sg_date_created`) VALUES
(62, '51 to 68', 2, '', 'Mattress, sofa, kitchen table, bicycles, small boxes and other similar items.', 'Suitable for small one-bedroom flat', '2021-08-11 13:29:02'),
(63, '51 to 70', 18, '', 'Mattress, sofa, kitchen table, bicycles, small boxes and other similar items.', 'Suitable', '2021-08-11 13:29:17'),
(64, '51 to 75', 2, '', 'Mattress, sofa, kitchen table, bicycles, small boxes and other similar items.', 'Suitable for small one-bedroom flat', '2021-08-11 14:56:28'),
(65, '51 to 80', 1, '', 'Mattress, sofa, kitchen table, bicycles, small boxes and other similar items.', 'Suitable for small one-bedroom flat', '2021-08-11 15:17:41'),
(66, '51 to 88', 2, '', 'Mattress, sofa, kitchen table, bicycles, small boxes and other similar items.', 'Suitable for small one-bedroom flat', '2021-08-11 15:18:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `size_guide`
--
ALTER TABLE `size_guide`
  ADD PRIMARY KEY (`sg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `size_guide`
--
ALTER TABLE `size_guide`
  MODIFY `sg_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
