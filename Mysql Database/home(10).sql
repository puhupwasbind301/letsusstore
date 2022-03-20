-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 08:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letusstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `home_id` int(11) NOT NULL,
  `home_title_heading` varchar(255) DEFAULT NULL,
  `home_title` varchar(255) NOT NULL,
  `home_image` varchar(255) DEFAULT NULL,
  `home_link_name` varchar(255) DEFAULT NULL,
  `home_link` varchar(255) DEFAULT NULL,
  `home_desc` varchar(255) NOT NULL,
  `home_image_page` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`home_id`, `home_title_heading`, `home_title`, `home_image`, `home_link_name`, `home_link`, `home_desc`, `home_image_page`) VALUES
(24, NULL, 'asdfsda', 'uploads/home/file_611216c3c8b9e1628575427.jpg', NULL, NULL, 'sdafsdaf', 'meet-the-team'),
(25, NULL, 'Puhupwas', 'uploads/home/file_611217d5810c51628575701.jpg', NULL, NULL, 'sadfsadf', 'news-and-articles'),
(28, NULL, '', 'uploads/home/file_61121dfd1d85a1628577277.png', NULL, NULL, '', 'meet-the-team'),
(33, NULL, 'title1', 'uploads/home/file_61121e51519c51628577361.jpg', NULL, NULL, 'description 1', 'our-works'),
(34, NULL, 'title 2', 'uploads/home/file_61122641a85261628579393.jpg', NULL, NULL, 'asdfdsf', 'meet-the-team'),
(37, ' ', 'dgfdg', 'uploads/home/file_6112ba063464d1628617222.jpg', ' ', ' ', 'asdfadsf', 'our-works'),
(39, 'INTRODUCING WORKFLOW', 'INTRODUCING WORKFLOW India\'s Best Let Us Store Facility', 'uploads/home/file_6112baa4ddd8a1628617380.jpg', 'Contact Us', 'http://localhost/letusstore/home/contact-us', 'Access to adequate space, at home or office, is always an issue. Unused items tend to lie around and kill productivity. They also take up valuable space.', 'main-section'),
(40, 'ABOUT LET US STORE', 'The Thought Behind Let Us Store', 'uploads/home/file_6112bae8b6c121628617448.jpg', 'Benefits', 'http://localhost/letusstore/home/benefits', 'Our work and personal places are shrinking with each passing year and the clutter of our ever increasing “stuff” obstructs our ability to think clearly and enjoy the spaces in which we spend our time.\r\n\r\nwas created to solve the challenges of cluttering b', 'main-section');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
