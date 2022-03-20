-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2021 at 09:49 AM
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
-- Table structure for table `size_guide_location`
--

CREATE TABLE `size_guide_location` (
  `sgl_id` int NOT NULL,
  `sgl_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sgl_name_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sgl_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `size_guide_location`
--

INSERT INTO `size_guide_location` (`sgl_id`, `sgl_name`, `sgl_name_key`, `sgl_date`) VALUES
(1, 'Noida', 'noida', '2021-07-28 17:56:33'),
(2, 'Gurugram', 'gurugram', '2021-07-28 17:56:33'),
(18, 'DELHI', 'delhi', '2021-08-11 12:13:43'),
(19, 'MUMBAI', 'mumbai', '2021-08-11 15:17:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `size_guide_location`
--
ALTER TABLE `size_guide_location`
  ADD PRIMARY KEY (`sgl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `size_guide_location`
--
ALTER TABLE `size_guide_location`
  MODIFY `sgl_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
