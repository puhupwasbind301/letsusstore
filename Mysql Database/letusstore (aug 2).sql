-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2021 at 07:07 PM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

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
-- Table structure for table `about_ceo`
--

CREATE TABLE `about_ceo` (
  `ac_id` int NOT NULL,
  `ac_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ac_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ac_desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about_ceo`
--

INSERT INTO `about_ceo` (`ac_id`, `ac_title`, `ac_image`, `ac_desc`) VALUES
(53, 'About CEO title', 'uploads/about_ceo/file_6107d4796a5691627903097.png', 'sdfljls'),
(54, 'About CEO title3', 'uploads/about_ceo/file_6107d663d542a1627903587.png', '111111');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_session_key` varchar(255) NOT NULL,
  `admin_remember_me_token` varchar(255) DEFAULT NULL,
  `admin_public_ip` varchar(255) DEFAULT NULL,
  `admin_lockscreen` tinyint(1) DEFAULT '0' COMMENT '0 - false, 1- true',
  `admin_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_session_key`, `admin_remember_me_token`, `admin_public_ip`, `admin_lockscreen`, `admin_img`) VALUES
(1, 'admin', '$2y$10$EJ041.Jp4b9HyEGr4nLC.eTB86Mva0PDKgG72GNzysmBhom2955ZS', 'iAmAuthAdmin', '15e068459ce7961efe0480fbaaadcf32debe1e3e', '::1', 0, 'http://localhost/portfolio/uploads/admin_image/profileImage07092019023233716.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `allocated_work`
--

CREATE TABLE `allocated_work` (
  `allocated_work_id` int NOT NULL,
  `allocated_work_shift_type` varchar(50) DEFAULT NULL,
  `allocated_work_staff` int DEFAULT NULL,
  `allocated_work_machines` int DEFAULT NULL,
  `allocated_work_beam` int DEFAULT NULL,
  `allocated_work_meters_used` decimal(20,2) DEFAULT NULL,
  `allocated_work_cone_given` decimal(20,2) DEFAULT NULL,
  `allocated_work_wastage` decimal(20,2) NOT NULL DEFAULT '0.00',
  `allocated_work_current_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `allocated_work_raw_material_weight` double(20,2) DEFAULT NULL,
  `allocated_work_raw_material_id` int DEFAULT NULL,
  `allocated_work_raw_material_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `allocated_work`
--

INSERT INTO `allocated_work` (`allocated_work_id`, `allocated_work_shift_type`, `allocated_work_staff`, `allocated_work_machines`, `allocated_work_beam`, `allocated_work_meters_used`, `allocated_work_cone_given`, `allocated_work_wastage`, `allocated_work_current_date`, `allocated_work_raw_material_weight`, `allocated_work_raw_material_id`, `allocated_work_raw_material_name`) VALUES
(1, 'night', 2, 1, 3, '10.00', NULL, '999.00', '2021-07-23 00:00:00', 1000.00, 1, 'raw one'),
(2, 'night', 3, 1, 2, '200.00', NULL, '980.00', '2021-07-23 00:00:00', NULL, NULL, NULL),
(3, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(4, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(5, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(6, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(7, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(8, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(9, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(10, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(11, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(12, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(13, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(14, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(15, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(16, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(17, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(18, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(19, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(20, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(21, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(22, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(23, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(24, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(25, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(26, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(27, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(28, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(29, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(30, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(31, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(32, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(33, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(34, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(35, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(36, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(37, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(38, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(39, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(40, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(41, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(42, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(43, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(44, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(45, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(46, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(47, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(48, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(49, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(50, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(51, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(52, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(53, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(54, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(55, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(56, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(57, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(58, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(59, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(60, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(61, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(62, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(63, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(64, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(65, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(66, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(67, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(68, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(69, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(70, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(71, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(72, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(73, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(74, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(75, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(76, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(77, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(78, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(79, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(80, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(81, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(82, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(83, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(84, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(85, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(86, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(87, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(88, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(89, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(90, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(91, 'night', 2, 1, 3, '10.00', NULL, '99.00', '2021-07-22 00:00:00', NULL, NULL, NULL),
(92, 'night', 2, 1, 3, '10.00', NULL, '999.00', '2021-07-23 00:00:00', NULL, NULL, NULL),
(93, 'day', 2, 1, 2, '30.00', NULL, '30.00', '2021-07-23 00:00:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendace_id` int NOT NULL,
  `attendance_staff` int NOT NULL,
  `attendance_date` varchar(255) NOT NULL,
  `attendance_status` int NOT NULL COMMENT '1- present, 2-absent, 3-leave',
  `attendance_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `attendance_time_in` varchar(255) DEFAULT NULL,
  `attendance_time_out` varchar(255) DEFAULT NULL,
  `attendance_hours` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendace_id`, `attendance_staff`, `attendance_date`, `attendance_status`, `attendance_timestamp`, `attendance_time_in`, `attendance_time_out`, `attendance_hours`) VALUES
(1, 1, '2021-04-05', 1, '2021-04-05 05:28:24', '10:56 AM', '08:56 PM', '10'),
(2, 2, '2021-04-05', 2, '2021-04-05 05:28:24', '', '', '0'),
(3, 3, '2021-04-05', 3, '2021-04-05 05:28:24', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `beam`
--

CREATE TABLE `beam` (
  `beam_id` int NOT NULL,
  `beam_machine_id` int DEFAULT NULL,
  `beam_install_date` date DEFAULT NULL,
  `beam_length` decimal(25,2) DEFAULT NULL,
  `beam_length_red` decimal(25,2) DEFAULT NULL,
  `beam_weight` decimal(25,2) DEFAULT NULL,
  `beam_weight_red` decimal(25,2) DEFAULT NULL,
  `beam_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Beam_Created`
--

CREATE TABLE `Beam_Created` (
  `beamC_id` int NOT NULL,
  `beamC_weight` decimal(11,2) NOT NULL,
  `beamC_length` decimal(11,2) NOT NULL,
  `beamC_name` varchar(255) NOT NULL,
  `beamC_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `beamC_machine_id` int NOT NULL,
  `beamC_usedStatus` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `Beam_Created`
--

INSERT INTO `Beam_Created` (`beamC_id`, `beamC_weight`, `beamC_length`, `beamC_name`, `beamC_time`, `beamC_machine_id`, `beamC_usedStatus`) VALUES
(1, '250.00', '250.00', 'beam one', '2021-04-05 00:00:00', 1, 1),
(2, '250.00', '250.00', 'beam two', '2021-04-05 00:00:00', 1, 1),
(3, '250.00', '250.00', 'beam three', '2021-04-05 00:00:00', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `beam_in_machines`
--

CREATE TABLE `beam_in_machines` (
  `bim_id` int NOT NULL,
  `bim_machine_id` int NOT NULL,
  `bim_beam_id` int NOT NULL,
  `bim_beam_length_left` decimal(20,2) NOT NULL,
  `bim_beam_weight_left` decimal(20,2) NOT NULL,
  `bim_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coating`
--

CREATE TABLE `coating` (
  `coating_id` int NOT NULL,
  `coating_roll_name` varchar(255) NOT NULL,
  `coating_roll_id` int NOT NULL,
  `coating_roll_weight` decimal(25,2) NOT NULL,
  `coating_roll_length` decimal(25,2) NOT NULL,
  `coating_roll_weight_after_coating` decimal(25,2) DEFAULT NULL,
  `coating_chemical` decimal(25,2) DEFAULT NULL,
  `coating_color` decimal(25,2) DEFAULT NULL,
  `coating_status` int NOT NULL DEFAULT '0' COMMENT '0 - unused, 1 - used',
  `coating_status_cutting` int NOT NULL DEFAULT '0' COMMENT '0 - not ready, 1 - ready',
  `coating_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `coating_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `coating_allocate`
--

CREATE TABLE `coating_allocate` (
  `coating_allocate_id` int NOT NULL,
  `coating_allocate_shift` varchar(50) DEFAULT NULL,
  `coating_allocate_staff_id` int DEFAULT NULL,
  `coating_allocate_machine_id` int DEFAULT NULL,
  `allocated_work_beam` int DEFAULT NULL,
  `allocated_work_meters_used` decimal(20,2) DEFAULT NULL,
  `allocated_work_cone_given` decimal(20,2) DEFAULT NULL,
  `allocated_work_wastage` decimal(20,2) NOT NULL DEFAULT '0.00',
  `coating_allocate_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `allocated_work_raw_material_weight` double(20,2) DEFAULT NULL,
  `allocated_work_raw_material_id` int DEFAULT NULL,
  `allocated_work_raw_material_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `coating_allocate`
--

INSERT INTO `coating_allocate` (`coating_allocate_id`, `coating_allocate_shift`, `coating_allocate_staff_id`, `coating_allocate_machine_id`, `allocated_work_beam`, `allocated_work_meters_used`, `allocated_work_cone_given`, `allocated_work_wastage`, `coating_allocate_date`, `allocated_work_raw_material_weight`, `allocated_work_raw_material_id`, `allocated_work_raw_material_name`) VALUES
(5, 'on', 3, 2, NULL, NULL, NULL, '0.00', '2021-07-02 12:00:00', NULL, NULL, NULL),
(6, 'on', 3, 2, NULL, NULL, NULL, '0.00', '2021-07-02 12:00:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coating_machine`
--

CREATE TABLE `coating_machine` (
  `id` int NOT NULL,
  `couting_machine_name` varchar(255) NOT NULL,
  `couting_machine_description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coating_machine`
--

INSERT INTO `coating_machine` (`id`, `couting_machine_name`, `couting_machine_description`) VALUES
(1, 'sdfdsf', 'asdfdsf'),
(2, 'couting machine 1', 'couting machine description 1');

-- --------------------------------------------------------

--
-- Table structure for table `coating_OutputRolls`
--

CREATE TABLE `coating_OutputRolls` (
  `coating_OutputRolls_id` int NOT NULL,
  `coating_OutputRolls_output_type_f_u` varchar(100) DEFAULT NULL,
  `coating_OutputRolls_roll_type_id` int DEFAULT NULL,
  `coating_OutputRolls_roll_length` varchar(100) DEFAULT NULL,
  `coating_OutputRolls_roll_weight` varchar(100) DEFAULT NULL,
  `coating_OutputRolls_roll_name` varchar(100) DEFAULT NULL,
  `coating_OutputRolls_allocate_id` int DEFAULT NULL,
  `cutting_coating_roll_name_status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `coating_OutputRolls`
--

INSERT INTO `coating_OutputRolls` (`coating_OutputRolls_id`, `coating_OutputRolls_output_type_f_u`, `coating_OutputRolls_roll_type_id`, `coating_OutputRolls_roll_length`, `coating_OutputRolls_roll_weight`, `coating_OutputRolls_roll_name`, `coating_OutputRolls_allocate_id`, `cutting_coating_roll_name_status`) VALUES
(5, 'finish', 1, '100', '50', 'CRollF1', 5, 0),
(6, 'unfinish', 1, NULL, '100', 'CRollU1', 5, 1),
(7, 'finish', 1, '200', '50', 'CRollF2', 6, 1),
(8, 'unfinish', 1, NULL, '50', 'CRollU2', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `coating_raw_material_consumed`
--

CREATE TABLE `coating_raw_material_consumed` (
  `coating_raw_material_consumed_id` int NOT NULL,
  `coating_rmc_raw_material_type` varchar(255) DEFAULT NULL,
  `coating_rmc_raw_material_type_of_type` varchar(255) DEFAULT NULL,
  `coating_rmc_weight` varchar(255) DEFAULT NULL,
  `coating_rmc_weight_substration` varchar(255) DEFAULT NULL,
  `coating_rmc_allocate_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `coating_raw_material_consumed`
--

INSERT INTO `coating_raw_material_consumed` (`coating_raw_material_consumed_id`, `coating_rmc_raw_material_type`, `coating_rmc_raw_material_type_of_type`, `coating_rmc_weight`, `coating_rmc_weight_substration`, `coating_rmc_allocate_id`) VALUES
(2, 'Chemicals', '3', '2950.00', '50', 5),
(3, 'Chemicals', '3', '2900.00', '50', 6);

-- --------------------------------------------------------

--
-- Table structure for table `coating_rolls`
--

CREATE TABLE `coating_rolls` (
  `coating_rolls_id` int NOT NULL,
  `coating_rolls_allocate_id` int NOT NULL,
  `new_roll_typef` varchar(50) DEFAULT NULL,
  `couting_rolls_type` int DEFAULT NULL,
  `new_roll_length` decimal(20,2) DEFAULT NULL,
  `couting_rolls_name` varchar(255) DEFAULT NULL,
  `new_roll_weight` decimal(20,2) NOT NULL,
  `new_roll_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `coating_roll_name_status` int NOT NULL DEFAULT '0' COMMENT '0:not went for coating'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `coating_rolls`
--

INSERT INTO `coating_rolls` (`coating_rolls_id`, `coating_rolls_allocate_id`, `new_roll_typef`, `couting_rolls_type`, `new_roll_length`, `couting_rolls_name`, `new_roll_weight`, `new_roll_created_date`, `coating_roll_name_status`) VALUES
(14, 5, NULL, 1, NULL, '3', '0.00', '2021-07-02 14:51:40', 0),
(15, 6, NULL, 2, NULL, '2', '0.00', '2021-07-02 17:58:49', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `cp_id` int NOT NULL,
  `cp_title` varchar(255) NOT NULL,
  `cp_image` varchar(255) NOT NULL,
  `cp_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`cp_id`, `cp_title`, `cp_image`, `cp_desc`) VALUES
(78, 'Company Profile 1', 'uploads/company_profile/file_6107c5fa8f6b91627899386.png', '232323'),
(79, 'Company Profile 5', 'uploads/company_profile/file_6107c95ddfd941627900253.png', '8'),
(81, 'cm1', '', 'sdf'),
(82, 'cm1', '', 'sdf'),
(83, 'cm1', '', 'sdf'),
(84, 'Company Profile 1', '', 'sadf'),
(85, 'Company Profile 1', '', 'sadf'),
(86, 'Company Profile 1', '', 'sadf'),
(87, 'Company Profile 1', '', 'sadf'),
(88, 'Company Profile 1', '', 'sadf'),
(89, 'Company Profile 1', '', 'sadf'),
(90, 'Company Profile 3', '', 'sadf'),
(91, 'Company Profile 3', '', 'sadf'),
(92, 'Company Profile 32', '', 'asdf'),
(93, 'Company Profile 32', '', 'asdf'),
(94, 'Company Profile 32', '', 'asdf'),
(95, 'Company Profile 32', '', 'asdf'),
(96, 'Company Profile 32', '', 'asdf'),
(97, 'Company Profile 32', '', 'asdf'),
(98, 'Company Profile 32', '', 'asdf'),
(99, 'Company Profile 32', '', 'asdf'),
(100, 'Company Profile 32', '', 'asdf'),
(101, 'Company Profile 32', '', 'asdf'),
(102, 'Company Profile 32', '', 'asdf'),
(103, 'Company Profile 32', '', 'asdf'),
(104, 'Company Profile 32', '', 'asdf'),
(105, 'Company Profile 32', '', 'asdf'),
(106, 'Company Profile 3', '', '23'),
(107, 'Company Profile 123', '', '2'),
(108, 'Company Profile 132', 'uploads/company_profile/file_6107cfe0096751627901920.png', 'sadf');

-- --------------------------------------------------------

--
-- Table structure for table `corpoate_responsibility_initiative`
--

CREATE TABLE `corpoate_responsibility_initiative` (
  `cri_id` int NOT NULL,
  `cri_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cri_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cri_desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `corpoate_responsibility_initiative`
--

INSERT INTO `corpoate_responsibility_initiative` (`cri_id`, `cri_title`, `cri_image`, `cri_desc`) VALUES
(63, 'Company Profile 1', 'uploads/corpoate_responsibility_initiative/file_6107f4b282eb31627911346.png', 'asdfasdff');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_location` varchar(255) DEFAULT NULL,
  `customer_number` varchar(15) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_description` mediumtext,
  `customer_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cutting`
--

CREATE TABLE `cutting` (
  `cutting_id` int NOT NULL,
  `cutting_roll_name` varchar(255) NOT NULL,
  `cutting_coating_roll_id` int NOT NULL,
  `cutting_roll_weight` decimal(25,2) NOT NULL,
  `cutting_roll_length` decimal(25,2) NOT NULL,
  `cutting_weight_deduct` decimal(25,2) NOT NULL,
  `cutting_length_deduct` decimal(25,2) NOT NULL,
  `cutting_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `cutting_allocate`
--

CREATE TABLE `cutting_allocate` (
  `cutting_allocate_id` int NOT NULL,
  `cutting_allocate_shift` varchar(50) DEFAULT NULL,
  `cutting_allocate_staff_id` int DEFAULT NULL,
  `cutting_allocate_machine_id` int DEFAULT NULL,
  `allocated_work_beam` int DEFAULT NULL,
  `allocated_work_meters_used` decimal(20,2) DEFAULT NULL,
  `allocated_work_cone_given` decimal(20,2) DEFAULT NULL,
  `allocated_work_wastage` decimal(20,2) NOT NULL DEFAULT '0.00',
  `cutting_allocate_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `allocated_work_raw_material_weight` double(20,2) DEFAULT NULL,
  `allocated_work_raw_material_id` int DEFAULT NULL,
  `allocated_work_raw_material_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `cutting_allocate`
--

INSERT INTO `cutting_allocate` (`cutting_allocate_id`, `cutting_allocate_shift`, `cutting_allocate_staff_id`, `cutting_allocate_machine_id`, `allocated_work_beam`, `allocated_work_meters_used`, `allocated_work_cone_given`, `allocated_work_wastage`, `cutting_allocate_date`, `allocated_work_raw_material_weight`, `allocated_work_raw_material_id`, `allocated_work_raw_material_name`) VALUES
(4, 'on', 3, 11, NULL, NULL, NULL, '0.00', '2021-07-02 20:17:08', NULL, NULL, NULL),
(5, 'on', 3, 11, NULL, NULL, NULL, '0.00', '2021-07-02 12:00:00', NULL, NULL, NULL),
(6, 'on', 3, 11, NULL, NULL, NULL, '0.00', '2021-07-02 12:00:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cutting_machine`
--

CREATE TABLE `cutting_machine` (
  `id` int NOT NULL,
  `cutting_machine_name` varchar(255) NOT NULL,
  `cutting_machine_description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cutting_machine`
--

INSERT INTO `cutting_machine` (`id`, `cutting_machine_name`, `cutting_machine_description`) VALUES
(6, 'Cutting Machine 1', 'Cutting Machine 1 Description'),
(11, 'Cutting Machine 23', 'Cutting Machine 2 D\r\nDescription');

-- --------------------------------------------------------

--
-- Table structure for table `cutting_OutputRolls`
--

CREATE TABLE `cutting_OutputRolls` (
  `cutting_OutputRolls_id` int NOT NULL,
  `cutting_OutputRolls_output_type_f_u` varchar(100) DEFAULT NULL,
  `cutting_OutputRolls_roll_type_id` int DEFAULT NULL,
  `cutting_OutputRolls_roll_length` varchar(100) DEFAULT NULL,
  `cutting_OutputRolls_roll_weight` varchar(100) DEFAULT NULL,
  `cutting_OutputRolls_roll_name` varchar(100) DEFAULT NULL,
  `cutting_OutputRolls_allocate_id` int DEFAULT NULL,
  `cutting_coating_roll_name_status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cutting_OutputRolls`
--

INSERT INTO `cutting_OutputRolls` (`cutting_OutputRolls_id`, `cutting_OutputRolls_output_type_f_u`, `cutting_OutputRolls_roll_type_id`, `cutting_OutputRolls_roll_length`, `cutting_OutputRolls_roll_weight`, `cutting_OutputRolls_roll_name`, `cutting_OutputRolls_allocate_id`, `cutting_coating_roll_name_status`) VALUES
(3, 'finish', 1, '100', '50', 'CuRollF1', 4, 0),
(4, 'unfinish', 1, NULL, '100', 'CuRollU1', 4, 0),
(5, 'finish', 1, '20', '20', 'CuRollF2', 5, 0),
(6, 'unfinish', 1, NULL, '30', 'CuRollU2', 5, 0),
(7, 'finish', 3, '300', '400', 'CuRollF3', 6, 0),
(8, 'unfinish', 1, NULL, '200', 'CuRollU3', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cutting_raw_material_consumed`
--

CREATE TABLE `cutting_raw_material_consumed` (
  `cutting_raw_material_consumed_id` int NOT NULL,
  `cutting_rmc_raw_material_type` varchar(255) DEFAULT NULL,
  `cutting_rmc_raw_material_type_of_type` varchar(255) DEFAULT NULL,
  `cutting_rmc_weight` varchar(255) DEFAULT NULL,
  `cutting_rmc_weight_substration` varchar(255) DEFAULT NULL,
  `cutting_rmc_allocate_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cutting_raw_material_consumed`
--

INSERT INTO `cutting_raw_material_consumed` (`cutting_raw_material_consumed_id`, `cutting_rmc_raw_material_type`, `cutting_rmc_raw_material_type_of_type`, `cutting_rmc_weight`, `cutting_rmc_weight_substration`, `cutting_rmc_allocate_id`) VALUES
(1, 'Chemicals', '3', '2850.00', '50', 4),
(2, 'Chemicals', '3', '2800.00', '50', 5),
(3, 'Chemicals', '3', '2750.00', '50', 6);

-- --------------------------------------------------------

--
-- Table structure for table `cutting_rolls`
--

CREATE TABLE `cutting_rolls` (
  `cutting_rolls_id` int NOT NULL,
  `cutting_rolls_allocate_id` int NOT NULL,
  `cutting_roll_output` varchar(50) DEFAULT NULL,
  `cutting_rolls_type` int DEFAULT NULL,
  `cutting_roll_category` varchar(255) DEFAULT NULL,
  `cutting_rolls_name` varchar(255) DEFAULT NULL,
  `new_roll_weight` decimal(20,2) NOT NULL,
  `new_roll_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `coating_roll_name_status` int NOT NULL DEFAULT '0' COMMENT '0:not went for coating'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `cutting_rolls`
--

INSERT INTO `cutting_rolls` (`cutting_rolls_id`, `cutting_rolls_allocate_id`, `cutting_roll_output`, `cutting_rolls_type`, `cutting_roll_category`, `cutting_rolls_name`, `new_roll_weight`, `new_roll_created_date`, `coating_roll_name_status`) VALUES
(3, 4, 'unfinished', 1, '0.00', '6', '0.00', '2021-07-02 19:44:51', 0),
(4, 5, 'unfinished', 1, '0.00', '8', '0.00', '2021-07-02 20:20:01', 0),
(5, 6, 'finished', 1, 'coating', '7', '0.00', '2021-07-02 20:24:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `finishedgoods_stock`
--

CREATE TABLE `finishedgoods_stock` (
  `finishedgoods_stock_id` int NOT NULL COMMENT 'table unique id',
  `finisged_goods_id` int DEFAULT NULL COMMENT 'finished id from table goods',
  `fnished_goods_qty` int DEFAULT NULL,
  `retinv_unique_fgoods` int NOT NULL COMMENT 'unique id from  table returninventory',
  `finished_goods_created_on` date NOT NULL,
  `finished_goods_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `finished_cut_roll`
--

CREATE TABLE `finished_cut_roll` (
  `fcr_id` int NOT NULL,
  `fcr_roll_name` varchar(255) NOT NULL,
  `fcr_coating_id` int NOT NULL,
  `fcr_cutting_id` int NOT NULL,
  `fcr_weight` decimal(25,2) NOT NULL,
  `fcr_length` decimal(25,2) NOT NULL,
  `fcr_wastage` decimal(25,2) DEFAULT NULL,
  `fcr_timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `goods_id` int NOT NULL,
  `goods_name` varchar(255) DEFAULT NULL,
  `goods_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_cat`
--

CREATE TABLE `inventory_cat` (
  `inventory_cat_id` int NOT NULL,
  `inventory_category` varchar(255) DEFAULT NULL,
  `inventory_cat_desc` text,
  `inventory_cat_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Inward`
--

CREATE TABLE `Inward` (
  `inward_id` int NOT NULL,
  `inward_type` varchar(50) NOT NULL,
  `inward_type_of_type` varchar(255) NOT NULL,
  `inward_weight` decimal(11,2) NOT NULL,
  `inward_no_of_cartons` decimal(11,2) DEFAULT NULL,
  `inward_avg_weight` decimal(11,2) DEFAULT NULL,
  `inward_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `Inward`
--

INSERT INTO `Inward` (`inward_id`, `inward_type`, `inward_type_of_type`, `inward_weight`, `inward_no_of_cartons`, `inward_avg_weight`, `inward_date`) VALUES
(1, 'Yarn', 'yarn type one', '-6751.00', '500.00', '10.00', '2021-04-05 00:00:00'),
(2, 'Yarn', 'yarn type Two', '-5366.00', '20.00', '25.00', '2021-04-05 00:00:00'),
(3, 'Chemicals', 'yarn type one', '475.00', NULL, NULL, '2021-07-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `inward_excess_raw_material`
--

CREATE TABLE `inward_excess_raw_material` (
  `inward_id` int NOT NULL,
  `inward_type` varchar(50) NOT NULL,
  `inward_type_of_type` varchar(255) NOT NULL,
  `inward_weight` decimal(11,2) NOT NULL,
  `inward_no_of_cartons` decimal(11,2) DEFAULT NULL,
  `inward_avg_weight` decimal(11,2) DEFAULT NULL,
  `inward_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `inward_wastage_raw_material`
--

CREATE TABLE `inward_wastage_raw_material` (
  `inward_id` int NOT NULL,
  `inward_type` varchar(50) NOT NULL,
  `inward_type_of_type` varchar(255) NOT NULL,
  `inward_weight` decimal(11,2) NOT NULL,
  `inward_no_of_cartons` decimal(11,2) DEFAULT NULL,
  `inward_avg_weight` decimal(11,2) DEFAULT NULL,
  `inward_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int NOT NULL,
  `item_vendor_id` int NOT NULL,
  `item_purchase_order_id` int DEFAULT NULL,
  `item_type` int DEFAULT NULL COMMENT '1 - Consummable, 2 - Non-consummable',
  `item_inv_cat` int DEFAULT NULL,
  `item_inventory` varchar(255) DEFAULT NULL,
  `item_quantity` varchar(255) DEFAULT NULL,
  `item_re_order` varchar(255) DEFAULT NULL,
  `item_free` varchar(255) DEFAULT NULL,
  `item_discount` varchar(255) DEFAULT NULL,
  `item_mrp` varchar(255) DEFAULT NULL,
  `item_rate` varchar(255) DEFAULT NULL,
  `item_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `letusstore.about_ceo`
--

CREATE TABLE `letusstore.about_ceo` (
  `cp_id` int NOT NULL,
  `cp_title` varchar(255) NOT NULL,
  `cp_image` varchar(255) NOT NULL,
  `cp_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `letusstore.about_ceo`
--

INSERT INTO `letusstore.about_ceo` (`cp_id`, `cp_title`, `cp_image`, `cp_desc`) VALUES
(1, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(2, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(3, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(4, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(5, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(6, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(7, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(8, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(9, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(10, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(11, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(12, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(13, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(14, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(15, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(16, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(17, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(18, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(19, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(20, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(21, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(22, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(23, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(24, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(25, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(26, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(27, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(28, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(29, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(30, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(31, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(32, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(33, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(34, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(35, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(36, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(37, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(38, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd'),
(39, 'dFile Examddsdfsdfdddddd', '', 'asfsadfsdddsfsdfsddfddfdddd');

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `machine_id` int NOT NULL,
  `machine_model` varchar(255) DEFAULT NULL,
  `machine_title` varchar(255) DEFAULT NULL,
  `machine_dop` date DEFAULT NULL,
  `machine_type` int DEFAULT NULL COMMENT '1 - Automatic, 2 - Manual',
  `machine_amount` varchar(255) DEFAULT NULL,
  `machine_dec` text,
  `machine_consumption_type` int DEFAULT NULL COMMENT '1 - Electric, 2 - Manual',
  `machine_unit` float DEFAULT NULL,
  `machine_beam_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `machinestatus`
--

CREATE TABLE `machinestatus` (
  `machinestatus_id` int NOT NULL,
  `mstatus_machine_id` int NOT NULL,
  `mstatus_date` date DEFAULT NULL,
  `mstatus_stop_time` varchar(255) DEFAULT NULL,
  `mstatus_start_time` varchar(255) DEFAULT NULL,
  `mstatus_reason` int DEFAULT NULL COMMENT '1 - Maintenance, 2 - Power Off',
  `mstatus_part` text,
  `mstatus_qty` text,
  `mstatus_amount` text,
  `mstatus_shift` int DEFAULT NULL COMMENT '1 - Day, 2 - Night',
  `mstatus_work_id` int DEFAULT NULL,
  `mstatus_machine_closed` decimal(25,2) DEFAULT NULL,
  `mstatus_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Machine_details`
--

CREATE TABLE `Machine_details` (
  `Machine_details_id` int NOT NULL,
  `Machine_id` int NOT NULL,
  `Present_weight` decimal(11,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `Machine_details`
--

INSERT INTO `Machine_details` (`Machine_details_id`, `Machine_id`, `Present_weight`) VALUES
(1, 1, '510.00'),
(2, 2, '250.00');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturing_work_allocate_inwards_used`
--

CREATE TABLE `manufacturing_work_allocate_inwards_used` (
  `id` int NOT NULL,
  `inward_id` int NOT NULL,
  `inward_weight` decimal(11,2) NOT NULL DEFAULT '0.00',
  `manufacturing_work_allocate_id` int NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `manufacturing_work_allocate_inwards_used`
--

INSERT INTO `manufacturing_work_allocate_inwards_used` (`id`, `inward_id`, `inward_weight`, `manufacturing_work_allocate_id`, `created`) VALUES
(1, 3, '123.00', 2, '2021-05-19 19:18:52'),
(2, 2, '950.00', 2, '2021-05-19 19:18:52'),
(3, 1, '10.00', 3, '2021-05-20 00:09:42'),
(4, 2, '5.00', 3, '2021-05-20 00:09:42'),
(5, 1, '7.00', 4, '2021-06-22 12:24:08'),
(6, 1, '7.00', 5, '2021-06-22 12:28:10'),
(7, 2, '20.00', 47, '2021-07-21 17:26:00'),
(8, 1, '11.00', 47, '2021-07-21 17:26:00'),
(9, 1, '11.00', 47, '2021-07-21 17:26:00'),
(10, 1, '11.00', 47, '2021-07-21 17:26:00'),
(11, 1, '11.00', 47, '2021-07-21 17:26:00'),
(12, 2, '11.00', 47, '2021-07-21 17:26:00'),
(13, 1, '11.00', 47, '2021-07-21 17:26:00'),
(14, 1, '11.00', 47, '2021-07-21 17:26:00'),
(15, 1, '10.00', 81, '2021-07-22 10:16:13'),
(16, 0, '20.00', 85, '2021-07-22 11:36:45'),
(17, 0, '20.00', 86, '2021-07-22 12:06:12'),
(18, 3, '20.00', 86, '2021-07-22 12:06:12'),
(19, 0, '20.00', 87, '2021-07-22 12:17:34'),
(20, 0, '20.00', 88, '2021-07-22 15:59:31'),
(21, 0, '10.00', 89, '2021-07-22 16:28:17'),
(22, 0, '20.00', 90, '2021-07-22 16:42:06'),
(23, 0, '23.00', 91, '2021-07-22 16:44:48'),
(24, 1, '60.00', 93, '2021-07-23 16:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `new_beam`
--

CREATE TABLE `new_beam` (
  `beam_id` int NOT NULL,
  `beam_weight` decimal(20,2) NOT NULL,
  `beam_length` decimal(20,2) NOT NULL,
  `beam_wastage` decimal(20,2) NOT NULL DEFAULT '0.00',
  `beam_name` varchar(255) DEFAULT NULL,
  `beam_used_status` tinyint(1) NOT NULL DEFAULT '0',
  `beam_length_red` decimal(20,2) DEFAULT NULL,
  `beam_weight_red` decimal(20,2) NOT NULL,
  `beam_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `New_Machines`
--

CREATE TABLE `New_Machines` (
  `mac_id` int NOT NULL,
  `mac_name` varchar(255) NOT NULL,
  `mac_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `New_Machines`
--

INSERT INTO `New_Machines` (`mac_id`, `mac_name`, `mac_date`) VALUES
(1, 'Machine one', '2021-04-05 13:32:11'),
(2, 'Machine two', '2021-04-05 13:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `new_manufacturing_machines`
--

CREATE TABLE `new_manufacturing_machines` (
  `machine_id` int NOT NULL,
  `machine_model` varchar(255) DEFAULT NULL,
  `machine_title` varchar(255) DEFAULT NULL,
  `machine_dop` date DEFAULT NULL,
  `machine_type` int DEFAULT NULL COMMENT '1 - Automatic, 2 - Manual',
  `machine_amount` varchar(255) DEFAULT NULL,
  `machine_dec` text,
  `machine_consumption_type` int DEFAULT NULL COMMENT '1 - Electric, 2 - Manual',
  `machine_unit` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_manufacturing_machines`
--

INSERT INTO `new_manufacturing_machines` (`machine_id`, `machine_model`, `machine_title`, `machine_dop`, `machine_type`, `machine_amount`, `machine_dec`, `machine_consumption_type`, `machine_unit`) VALUES
(1, 'manufacturing machine one', 'manufacturing machine one title', '2021-04-05', 1, '50000', '', 1, 20),
(2, 'manufacturing machine two', 'manufacturing machine two', '2021-04-05', 2, '30000', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `new_rolls_created`
--

CREATE TABLE `new_rolls_created` (
  `new_roll_id` int NOT NULL,
  `new_roll_allocated_work_id` int NOT NULL,
  `new_roll_typef` varchar(50) DEFAULT NULL,
  `new_roll_type` int DEFAULT NULL,
  `new_roll_length` decimal(20,2) DEFAULT NULL,
  `new_roll_name` varchar(255) DEFAULT NULL,
  `new_roll_weight` decimal(20,2) NOT NULL,
  `new_roll_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `coating_roll_name_status` int NOT NULL DEFAULT '0' COMMENT '0:not went for coating'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `new_rolls_created`
--

INSERT INTO `new_rolls_created` (`new_roll_id`, `new_roll_allocated_work_id`, `new_roll_typef`, `new_roll_type`, `new_roll_length`, `new_roll_name`, `new_roll_weight`, `new_roll_created_date`, `coating_roll_name_status`) VALUES
(1, 2, 'finished', 2, '368.00', '5&&Roll nameF one', '214.00', '2021-04-05 14:30:12', 0),
(2, 1, 'finished', 1, '50.00', 'Roll nameF one', '50.00', '2021-04-05 14:30:12', 1),
(3, 1, 'finished', 1, '50.00', 'Roll nameF one', '50.00', '2021-04-05 14:30:12', 1),
(4, 1, 'finished', 1, '50.00', 'Roll nameF one', '50.00', '2021-04-05 14:30:12', 0),
(5, 2, 'finished', 2, '560.00', '5&&Roll nameF one', '12.00', '2021-05-19 19:18:52', 0),
(6, 2, 'finished', 2, '560.00', '5&&Roll nameF one', '12.00', '2021-05-19 19:18:52', 0),
(7, 3, 'finished', 3, '20.00', 'Roll nameF one', '10.00', '2021-05-20 00:09:42', 0),
(8, 3, 'unfinished', 2, NULL, 'Roll Name U one', '23.00', '2021-05-20 00:09:42', 0),
(9, 4, 'finished', 3, '10.00', 'Roll nameF one', '19.00', '2021-06-22 12:24:08', 0),
(10, 5, 'finished', 3, '10.00', 'Roll nameF one', '19.00', '2021-06-22 12:28:10', 0),
(11, 11, 'finished', 2, '10.00', 'finished _roll', '10.00', '2021-07-21 17:12:41', 0),
(12, 2, 'finished', 1, '560.00', '5&&Roll nameF one', '0.00', '2021-07-21 17:12:41', 0),
(13, 12, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 17:15:54', 0),
(14, 12, 'unfinished', 2, NULL, 'roll_name_unfinished', '10.00', '2021-07-21 17:15:54', 0),
(15, 13, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 17:15:58', 0),
(16, 13, 'unfinished', 2, NULL, 'roll_name_unfinished', '10.00', '2021-07-21 17:15:58', 0),
(17, 14, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 17:15:58', 0),
(18, 14, 'unfinished', 2, NULL, 'roll_name_unfinished', '10.00', '2021-07-21 17:15:59', 0),
(19, 15, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 17:15:59', 0),
(20, 15, 'unfinished', 2, NULL, 'roll_name_unfinished', '10.00', '2021-07-21 17:15:59', 0),
(21, 16, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 17:15:59', 0),
(22, 2, 'finished', 2, '560.00', '5&&Roll nameF one', '0.00', '2021-07-21 17:15:59', 0),
(23, 2, 'finished', 2, '560.00', '5&&Roll nameF one', '0.00', '2021-07-21 17:16:00', 0),
(24, 17, 'unfinished', 2, NULL, 'roll_name_unfinished', '10.00', '2021-07-21 17:16:00', 0),
(25, 18, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 17:16:00', 0),
(26, 18, 'unfinished', 2, NULL, 'roll_name_unfinished', '10.00', '2021-07-21 17:16:00', 0),
(27, 19, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 17:16:00', 0),
(28, 19, 'unfinished', 2, NULL, 'roll_name_unfinished', '10.00', '2021-07-21 17:16:00', 0),
(29, 20, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 17:16:00', 0),
(30, 20, 'unfinished', 2, NULL, 'roll_name_unfinished', '10.00', '2021-07-21 17:16:01', 0),
(31, 21, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 17:16:09', 0),
(32, 21, 'unfinished', 2, NULL, 'roll_name_unfinished', '10.00', '2021-07-21 17:16:09', 0),
(33, 22, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 17:16:09', 0),
(34, 22, 'unfinished', 2, NULL, 'roll_name_unfinished', '10.00', '2021-07-21 17:16:10', 0),
(35, 23, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 17:16:10', 0),
(36, 23, 'unfinished', 2, NULL, 'roll_name_unfinished', '10.00', '2021-07-21 17:16:10', 0),
(37, 24, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 17:16:11', 0),
(38, 24, 'unfinished', 2, NULL, 'roll_name_unfinished', '10.00', '2021-07-21 17:16:11', 0),
(39, 25, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 17:16:11', 0),
(40, 25, 'unfinished', 2, NULL, 'roll_name_unfinished', '10.00', '2021-07-21 17:16:11', 0),
(41, 26, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 17:16:13', 0),
(42, 26, 'unfinished', 2, NULL, 'roll_name_unfinished', '10.00', '2021-07-21 17:16:13', 0),
(43, 27, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 17:16:14', 0),
(44, 27, 'unfinished', 2, NULL, 'roll_name_unfinished', '10.00', '2021-07-21 17:16:14', 0),
(45, 28, 'finished', 2, '10.00', 'roll_name', '10.00', '2021-07-21 17:18:19', 0),
(46, 28, 'unfinished', 2, NULL, 'roll_name_unfinished', '210.00', '2021-07-21 17:18:19', 0),
(47, 29, 'finished', 2, '10.00', 'roll_name', '10.00', '2021-07-21 17:18:19', 0),
(48, 29, 'unfinished', 2, NULL, 'roll_name_unfinished', '210.00', '2021-07-21 17:18:19', 0),
(49, 30, 'finished', 2, '10.00', 'roll_name', '10.00', '2021-07-21 17:18:19', 0),
(50, 30, 'unfinished', 2, NULL, 'roll_name_unfinished', '210.00', '2021-07-21 17:18:19', 0),
(51, 31, 'finished', 2, '10.00', 'roll_name', '10.00', '2021-07-21 17:18:20', 0),
(52, 31, 'unfinished', 2, NULL, 'roll_name_unfinished', '210.00', '2021-07-21 17:18:20', 0),
(53, 32, 'finished', 2, '10.00', 'roll_name', '10.00', '2021-07-21 17:18:20', 0),
(54, 32, 'unfinished', 2, NULL, 'roll_name_unfinished', '210.00', '2021-07-21 17:18:20', 0),
(55, 33, 'finished', 2, '10.00', 'roll_name', '10.00', '2021-07-21 17:18:20', 0),
(56, 33, 'unfinished', 2, NULL, 'roll_name_unfinished', '210.00', '2021-07-21 17:18:21', 0),
(57, 34, 'finished', 2, '10.00', 'roll_name', '10.00', '2021-07-21 17:18:21', 0),
(58, 34, 'unfinished', 2, NULL, 'roll_name_unfinished', '210.00', '2021-07-21 17:18:21', 0),
(59, 35, 'finished', 2, '10.00', 'roll_name', '10.00', '2021-07-21 17:18:21', 0),
(60, 35, 'unfinished', 2, NULL, 'roll_name_unfinished', '210.00', '2021-07-21 17:18:21', 0),
(61, 36, 'finished', 2, '10.00', 'roll_name', '10.00', '2021-07-21 17:18:41', 0),
(62, 36, 'unfinished', 2, NULL, 'roll_name_unfinished', '210.00', '2021-07-21 17:18:41', 0),
(63, 37, 'finished', 2, '10.00', 'roll_name', '10.00', '2021-07-21 17:18:41', 0),
(64, 37, 'unfinished', 2, NULL, 'roll_name_unfinished', '210.00', '2021-07-21 17:18:41', 0),
(65, 38, 'finished', 2, '10.00', 'roll_name', '10.00', '2021-07-21 17:18:41', 0),
(66, 38, 'unfinished', 2, NULL, 'roll_name_unfinished', '210.00', '2021-07-21 17:18:42', 0),
(67, 39, 'finished', 2, '10.00', 'roll_name', '10.00', '2021-07-21 17:18:42', 0),
(68, 39, 'unfinished', 2, NULL, 'roll_name_unfinished', '210.00', '2021-07-21 17:18:42', 0),
(69, 40, 'finished', 2, '10.00', 'roll_name', '10.00', '2021-07-21 17:18:43', 0),
(70, 40, 'unfinished', 2, NULL, 'roll_name_unfinished', '210.00', '2021-07-21 17:18:43', 0),
(71, 41, 'finished', 2, '10.00', 'roll_name', '10.00', '2021-07-21 17:18:43', 0),
(72, 41, 'unfinished', 2, NULL, 'roll_name_unfinished', '210.00', '2021-07-21 17:18:43', 0),
(73, 42, 'finished', 2, '10.00', 'roll_name', '10.00', '2021-07-21 17:18:43', 0),
(74, 42, 'unfinished', 2, NULL, 'roll_name_unfinished', '210.00', '2021-07-21 17:18:43', 0),
(75, 43, 'finished', 3, '11.00', 'roll_name_finished', '12.00', '2021-07-21 17:20:31', 0),
(76, 43, 'unfinished', 2, NULL, '12', '12.00', '2021-07-21 17:20:31', 0),
(77, 44, 'finished', 3, '11.00', 'roll_name_finished', '12.00', '2021-07-21 17:20:31', 0),
(78, 44, 'unfinished', 2, NULL, '12', '12.00', '2021-07-21 17:20:32', 0),
(79, 45, 'finished', 3, '11.00', 'roll_name_finished', '12.00', '2021-07-21 17:20:32', 0),
(80, 45, 'unfinished', 2, NULL, '12', '12.00', '2021-07-21 17:20:32', 0),
(81, 46, 'finished', 3, '11.00', 'roll_name_finished', '12.00', '2021-07-21 17:20:32', 0),
(82, 46, 'unfinished', 2, NULL, '12', '12.00', '2021-07-21 17:20:32', 0),
(83, 47, 'finished', 2, '10.00', 'roll_name_finished', '20.00', '2021-07-21 17:26:00', 0),
(84, 48, 'finished', 1, '10.00', 'sd', '10.00', '2021-07-21 17:44:08', 0),
(85, 48, 'unfinished', 3, NULL, 'roll_name_unfinished', '12.00', '2021-07-21 17:44:08', 0),
(86, 49, 'finished', 1, '10.00', 'sd', '10.00', '2021-07-21 17:44:10', 0),
(87, 49, 'unfinished', 3, NULL, 'roll_name_unfinished', '12.00', '2021-07-21 17:44:10', 0),
(88, 50, 'finished', 2, '10.00', 'sd', '10.00', '2021-07-21 17:44:34', 0),
(89, 50, 'finished', 2, '12.00', 'roll_name_finished', '21.00', '2021-07-21 17:44:34', 0),
(90, 50, 'unfinished', 2, NULL, 'roll_name_unfinishe', '12.00', '2021-07-21 17:44:34', 0),
(91, 51, 'finished', 2, '10.00', 'sd', '10.00', '2021-07-21 17:44:47', 0),
(92, 51, 'finished', 2, '12.00', 'roll_name_finished', '21.00', '2021-07-21 17:44:47', 0),
(93, 51, 'unfinished', 2, NULL, 'roll_name_unfinishe', '12.00', '2021-07-21 17:44:47', 0),
(94, 52, 'finished', 2, '10.00', 'sd', '10.00', '2021-07-21 17:44:47', 0),
(95, 52, 'finished', 2, '12.00', 'roll_name_finished', '21.00', '2021-07-21 17:44:47', 0),
(96, 52, 'unfinished', 2, NULL, 'roll_name_unfinishe', '12.00', '2021-07-21 17:44:47', 0),
(97, 53, 'finished', 2, '10.00', 'sd', '10.00', '2021-07-21 17:44:47', 0),
(98, 53, 'finished', 2, '12.00', 'roll_name_finished', '21.00', '2021-07-21 17:44:47', 0),
(99, 53, 'unfinished', 2, NULL, 'roll_name_unfinishe', '12.00', '2021-07-21 17:44:47', 0),
(100, 54, 'finished', 2, '10.00', 'sd', '10.00', '2021-07-21 17:44:48', 0),
(101, 54, 'finished', 2, '12.00', 'roll_name_finished', '21.00', '2021-07-21 17:44:48', 0),
(102, 54, 'unfinished', 2, NULL, 'roll_name_unfinishe', '12.00', '2021-07-21 17:44:48', 0),
(103, 55, 'finished', 2, '10.00', 'sd', '10.00', '2021-07-21 17:44:48', 0),
(104, 55, 'finished', 2, '12.00', 'roll_name_finished', '21.00', '2021-07-21 17:44:48', 0),
(105, 55, 'unfinished', 2, NULL, 'roll_name_unfinishe', '12.00', '2021-07-21 17:44:49', 0),
(106, 56, 'finished', 2, '10.00', 'sd', '10.00', '2021-07-21 17:44:49', 0),
(107, 56, 'finished', 2, '12.00', 'roll_name_finished', '21.00', '2021-07-21 17:44:49', 0),
(108, 56, 'unfinished', 2, NULL, 'roll_name_unfinishe', '12.00', '2021-07-21 17:44:49', 0),
(109, 57, 'finished', 2, '10.00', 'sd', '10.00', '2021-07-21 17:44:49', 0),
(110, 57, 'finished', 2, '12.00', 'roll_name_finished', '21.00', '2021-07-21 17:44:49', 0),
(111, 57, 'unfinished', 2, NULL, 'roll_name_unfinishe', '12.00', '2021-07-21 17:44:49', 0),
(112, 58, 'finished', 3, '10.00', 'roll_name', '10.00', '2021-07-21 17:52:48', 0),
(113, 59, 'finished', 3, '10.00', 'roll_name', '10.00', '2021-07-21 17:52:51', 0),
(114, 60, 'finished', 3, '10.00', 'roll_name', '10.00', '2021-07-21 17:53:07', 0),
(115, 61, 'finished', 3, '10.00', 'roll_name', '10.00', '2021-07-21 17:53:08', 0),
(116, 62, 'finished', 3, '10.00', 'roll_name', '10.00', '2021-07-21 17:53:08', 0),
(117, 63, 'finished', 3, '10.00', 'roll_name', '10.00', '2021-07-21 17:53:08', 0),
(118, 64, 'finished', 3, '10.00', 'roll_name', '10.00', '2021-07-21 17:53:08', 0),
(119, 65, 'finished', 3, '10.00', 'roll_name', '10.00', '2021-07-21 17:53:09', 0),
(120, 66, 'finished', 3, '10.00', 'roll_name', '10.00', '2021-07-21 17:53:09', 0),
(121, 67, 'finished', 3, '10.00', 'roll_name', '10.00', '2021-07-21 17:55:53', 0),
(122, 68, 'finished', 3, '10.00', 'roll_name', '10.00', '2021-07-21 17:55:54', 0),
(123, 69, 'finished', 3, '10.00', 'roll_name', '10.00', '2021-07-21 17:55:54', 0),
(124, 70, 'finished', 3, '10.00', 'roll_name', '10.00', '2021-07-21 17:55:54', 0),
(125, 71, 'finished', 3, '10.00', 'roll_name_finished', '10.00', '2021-07-21 18:40:05', 0),
(126, 72, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 18:41:45', 0),
(127, 73, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 18:43:01', 0),
(128, 74, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 18:43:05', 0),
(129, 75, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-21 18:43:07', 0),
(130, 76, 'finished', 2, '12.00', 'roll_name_finished', '21.00', '2021-07-21 18:46:02', 0),
(131, 77, 'finished', 1, '10.00', 'roll_name_finished', '10.00', '2021-07-21 18:59:29', 0),
(132, 78, 'finished', 1, '10.00', 'roll_name_finished', '10.00', '2021-07-21 18:59:44', 0),
(133, 79, 'finished', 1, '10.00', 'roll_name_finished', '10.00', '2021-07-21 19:03:49', 0),
(134, 80, 'finished', 1, '10.00', 'roll_name_finished', '10.00', '2021-07-21 19:05:24', 0),
(135, 81, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-22 10:16:13', 0),
(136, 82, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-22 10:17:19', 0),
(137, 83, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-22 11:04:54', 0),
(138, 85, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-22 11:36:45', 0),
(139, 85, 'finished', 2, '10.00', 'roll_name_finished', '12.00', '2021-07-22 11:36:45', 0),
(140, 86, 'finished', 2, '10.00', 'roll_name_finished', '10.00', '2021-07-22 12:06:12', 0),
(141, 87, 'finished', 1, '20.00', 'roll_name_finished', '30.00', '2021-07-22 12:17:34', 0),
(142, 88, 'finished', 2, '30.00', 'roll_name_finished', '30.00', '2021-07-22 15:59:31', 0),
(143, 89, 'finished', 2, '20.00', 'roll_name_finished', '30.00', '2021-07-22 16:28:17', 0),
(144, 90, 'finished', 3, '2.00', 'roll_name_finished', '12.00', '2021-07-22 16:42:06', 0),
(145, 91, 'finished', 2, '23.00', 'roll_name_finished', '32.00', '2021-07-22 16:44:48', 0),
(146, 2, 'finished', 2, '560.00', '5&&Roll nameF one', '12.00', '2021-07-23 11:05:41', 0),
(147, 2, 'finished', 2, '560.00', '5&&Roll nameF one', '12.00', '2021-07-23 11:20:25', 0),
(148, 92, 'finished', 1, '50.00', 'Roll nameF one', '50.00', '2021-07-23 13:07:51', 0),
(149, 93, 'finished', 3, '30.00', 'roll_name_finished', '80.00', '2021-07-23 16:34:10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `other_stock`
--

CREATE TABLE `other_stock` (
  `other_stock_id` int NOT NULL,
  `other_stock_name` varchar(255) NOT NULL,
  `other_stock_qty` int NOT NULL,
  `other_stock_weight` decimal(25,2) DEFAULT NULL,
  `other_stock_lenght` decimal(25,2) DEFAULT NULL,
  `other_stock_description` longtext,
  `other_stock_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_rec`
--

CREATE TABLE `purchase_rec` (
  `pr_id` int NOT NULL,
  `pr_invoice_no` int NOT NULL,
  `pr_vendor_id` int NOT NULL,
  `pr_purchaseorder_id` int NOT NULL,
  `pr_payment_mode` varchar(255) DEFAULT NULL,
  `pr_invtotalamount` decimal(25,2) DEFAULT NULL,
  `pr_paid_amount` decimal(25,2) NOT NULL,
  `pr_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `raw_materials`
--

CREATE TABLE `raw_materials` (
  `raw_mat_id` int NOT NULL,
  `weight` double(20,2) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `inward_type` varchar(50) NOT NULL,
  `inward_type_of_type` varchar(50) NOT NULL,
  `machine_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raw_materials`
--

INSERT INTO `raw_materials` (`raw_mat_id`, `weight`, `name`, `time`, `inward_type`, `inward_type_of_type`, `machine_id`) VALUES
(1, 980.00, 'raw one', '2021-04-05 00:00:00', 'Yarn', 'yarn type one', 1),
(2, 500.00, 'raw two', '2021-04-05 00:00:00', 'Yarn', 'yarn type one', 2),
(3, 10.00, 'Company', '2021-04-01 00:00:00', 'Yarn', 'yarn type one', 1);

-- --------------------------------------------------------

--
-- Table structure for table `returninventory`
--

CREATE TABLE `returninventory` (
  `retinv_id` int NOT NULL,
  `retinv_stck_issued_id` int DEFAULT NULL,
  `retinv_inventory_cat` int DEFAULT NULL,
  `retinv_item_id` int DEFAULT NULL,
  `retinv_return_qty` int DEFAULT NULL,
  `retinv_remarks` varchar(255) DEFAULT NULL,
  `retinv_issdate` date DEFAULT NULL,
  `retinv_wastage` int DEFAULT NULL,
  `retinv_used` int DEFAULT NULL,
  `retinv_fgood_id` int DEFAULT NULL,
  `retinv_goods_qty` int DEFAULT NULL,
  `unique_id_fgoods` int NOT NULL DEFAULT '1',
  `retinv_return_date` date DEFAULT NULL,
  `retinv_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roll`
--

CREATE TABLE `roll` (
  `roll_id` int NOT NULL,
  `roll_work_asign_id` int NOT NULL,
  `roll_machine_id` int NOT NULL,
  `roll_beam_id` int NOT NULL,
  `roll_staff_id` int NOT NULL,
  `roll_name` varchar(255) NOT NULL,
  `roll_length` decimal(25,2) NOT NULL,
  `roll_weight` decimal(25,2) NOT NULL,
  `roll_made_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `roll_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `roll_status` int NOT NULL DEFAULT '0',
  `roll_sales_status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Roll_Types`
--

CREATE TABLE `Roll_Types` (
  `roll_types_id` int NOT NULL,
  `roll_types_name` varchar(255) NOT NULL,
  `roll_types_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `Roll_Types`
--

INSERT INTO `Roll_Types` (`roll_types_id`, `roll_types_name`, `roll_types_created`) VALUES
(1, 'Roll type one', '2021-04-05 13:39:33'),
(2, 'Roll type two', '2021-04-05 13:39:37'),
(3, 'Roll type three', '2021-04-05 13:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int NOT NULL,
  `sales_roll_type` varchar(50) NOT NULL,
  `sales_roll_id` int NOT NULL,
  `sales_company_id` int NOT NULL,
  `sales_price` decimal(25,2) NOT NULL,
  `sales_qty` int NOT NULL,
  `sales_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_member`
--

CREATE TABLE `staff_member` (
  `staff_id` int NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `staff_mobile` varchar(255) DEFAULT NULL,
  `staff_email` varchar(255) DEFAULT NULL,
  `staff_gender` varchar(255) DEFAULT NULL,
  `staff_doj` date DEFAULT NULL,
  `staff_addr` varchar(255) DEFAULT NULL,
  `staff_desc` text,
  `staff_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_member`
--

INSERT INTO `staff_member` (`staff_id`, `staff_name`, `staff_mobile`, `staff_email`, `staff_gender`, `staff_doj`, `staff_addr`, `staff_desc`, `staff_timestamp`) VALUES
(1, 'Debasish', '7678192082', 'deb_bhatt200811@yahoo.com', 'Male', '2021-04-05', 'dwarka sec7, DELHI', 'This is me.', '2021-04-05 05:24:38'),
(2, 'Deepak', '9996557284', 'debbhatt200811@yahoo.com', 'Male', '2021-04-05', 'dwarka\r\ndwara', '', '2021-04-05 05:25:16'),
(3, 'Puphwas', '9954657284', 'debasish@xcrino.com', 'Male', '2021-04-05', 'dwarka', '', '2021-04-05 05:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `stockissues`
--

CREATE TABLE `stockissues` (
  `stckissue_id` int UNSIGNED NOT NULL,
  `stck_staff_id` int UNSIGNED DEFAULT NULL,
  `stck_inventory_cat_id` int NOT NULL,
  `stck_item_id` int DEFAULT NULL,
  `stck_quantity` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `stck_discount` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `stck_remarks` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `stck_total` decimal(25,2) DEFAULT NULL,
  `stck_receipt_no` int DEFAULT NULL,
  `stck_status` tinyint(1) NOT NULL DEFAULT '1',
  `stck_created_by` int UNSIGNED DEFAULT NULL,
  `stck_created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `stck_updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `storage_calculator`
--

CREATE TABLE `storage_calculator` (
  `sc_id` int NOT NULL,
  `sc_name` varchar(255) NOT NULL,
  `sc_cat_id` int NOT NULL,
  `sc_name_key` varchar(255) NOT NULL,
  `sc_name_price` varchar(255) NOT NULL,
  `sc_image` varchar(255) NOT NULL,
  `sc_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `storage_calculator`
--

INSERT INTO `storage_calculator` (`sc_id`, `sc_name`, `sc_cat_id`, `sc_name_key`, `sc_name_price`, `sc_image`, `sc_date_created`) VALUES
(4, 'Side Table', 1, 'side_table', '0.5', '', '2021-07-29 12:23:01'),
(5, 'Single bed', 1, 'single_bed', '7.5', '', '2021-07-29 16:12:09'),
(6, 'Queen size bed', 1, 'queen_size_bed', '12.5', '', '2021-07-29 16:12:09'),
(7, 'King Size Bed', 1, 'king_size_bed', '15', '', '2021-07-29 16:12:09'),
(8, 'Almirah chest', 1, 'almirah_chest', '5', '', '2021-07-29 16:12:09'),
(9, 'Chest of drawers (3)', 1, 'chest_of_drawers_3', '2.5', '', '2021-07-29 16:12:09'),
(10, 'Almirah', 1, 'almirah', '5', '', '2021-07-29 16:12:09'),
(11, 'Almirah Big', 1, 'almirah_big', '4.5', '', '2021-07-29 16:12:09'),
(12, 'Dressing Table', 1, 'dressing_table', '3.75', '', '2021-07-29 16:12:09'),
(13, 'Plastic Chairs', 2, 'plastic_chairs', '0.50', '', '2021-07-29 16:26:09'),
(14, 'Plastic Stools', 2, 'plastic_stools', '0.50', '', '2021-07-29 16:26:09'),
(15, 'Center Table', 2, 'center_table', '2.5', '', '2021-07-29 16:26:09'),
(16, 'TV', 2, 'tv', '1.875', '', '2021-07-29 16:26:09'),
(17, 'Tv unit Wooden', 2, 'tv_unit_wooden', '2.5', '', '2021-07-29 16:26:09'),
(18, 'Gas Stove', 3, 'gas_stove', '0.75', '', '2021-07-29 17:25:36'),
(19, 'Water Purifier/Dispenser', 3, 'water_purifier_dispenser', '1.125', '', '2021-07-29 17:25:36'),
(20, 'Mixture', 3, 'mixture', '0.25', '', '2021-07-29 17:25:36'),
(21, 'OTG small size', 3, 'otg_small_size', '0.625', '', '2021-07-29 17:25:36'),
(22, 'OTG big size', 3, 'otg_big_size', '1.25', '', '2021-07-29 17:25:36'),
(23, 'Microwave', 3, 'microwave', '0.375', '', '2021-07-29 17:25:36'),
(24, 'Double Door Fridge', 3, 'double_door_fridge', '3.5', '', '2021-07-29 17:25:36'),
(25, 'Small Box (1x1x1ft)', 4, 'small_box_1x1x1ft', '0.125', '', '2021-07-29 17:43:09'),
(26, 'Medium Box (1×1.5x1ft)', 4, 'medium_box_1151ft', '0.1875', '', '2021-07-29 17:43:09'),
(27, 'Large Box (1.5x2x1.5ft)', 4, 'large_box_15215ft', '0.5625', '', '2021-07-29 17:43:09'),
(28, 'Extra Large Box (2x3x2ft)', 4, 'extra_large_box_232ft', '1.5', '', '2021-07-29 17:45:21'),
(29, 'Filing Cabinet', 5, 'filing_cabinet', '4', '', '2021-07-29 17:51:57'),
(30, 'Office chair', 5, 'office_chair', '3.5', '', '2021-07-29 17:51:57'),
(31, 'Study Lamp', 5, 'study_lamp', '0.25', '', '2021-07-29 17:54:28'),
(32, 'Study Table', 5, 'study_table', '3.75', '', '2021-07-29 17:54:28'),
(33, 'Camp/Tent', 6, 'camp_tent', '2.5', '', '2021-07-29 18:00:15'),
(34, 'Porch Swing', 6, 'porch_swing', '50', '', '2021-07-29 18:00:15'),
(35, '2 Wheeler', 7, '2_wheeler', '50', '', '2021-07-29 18:06:18'),
(36, 'Bicycle', 7, 'bicycle', '3.75', '', '2021-07-29 18:06:18'),
(37, 'Air purifier', 8, 'air_purifier', '0.625', '', '2021-07-29 18:16:31'),
(38, 'Room heater', 8, 'room_heater', '0.625', '', '2021-07-29 18:16:31'),
(39, 'Vacuum Cleaner', 8, 'vacuum_cleaner', '1.25', '', '2021-07-29 18:16:31'),
(45, 'Storage calculator 4', 15, 'storage_calculator_4', '50', '', '2021-08-02 12:14:00'),
(46, 'Storage calculator 13', 17, 'storage_calculator_13', '20', '', '2021-08-02 12:16:13'),
(47, 'Storage Calculator 11', 15, 'storage_calculator_11', '15', '', '2021-08-02 17:15:40'),
(48, 'Storage Calculator 11', 15, 'storage_calculator_11', '15', '', '2021-08-02 17:15:53'),
(49, 'Company Profile 1', 15, 'company_profile_1', '15', '', '2021-08-02 17:20:52'),
(50, 'Storage calculator 1', 15, 'storage_calculator_1', '15', '', '2021-08-02 17:23:33'),
(51, 'Storage calculator 23', 15, 'storage_calculator_23', '50', '', '2021-08-02 17:28:50'),
(54, 'Storage calculator 27', 16, 'storage_calculator_27', '33', 'uploads/storage_calculator/file_6107e606dbf841627907590.png', '2021-08-02 17:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `storage_calculator_categories`
--

CREATE TABLE `storage_calculator_categories` (
  `scc_id` int NOT NULL,
  `scc_name` varchar(255) NOT NULL,
  `scc_name_key` varchar(255) NOT NULL,
  `scc_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `storage_calculator_categories`
--

INSERT INTO `storage_calculator_categories` (`scc_id`, `scc_name`, `scc_name_key`, `scc_date`) VALUES
(1, 'BEDROOM', 'bedroom', '2021-07-28 17:56:33'),
(2, 'LIVING ROOM', 'living-room', '2021-07-28 17:56:33'),
(3, 'KITCHEN/DINING', 'kitchen-dining', '2021-07-28 17:56:33'),
(4, 'BOXES', 'boxes', '2021-07-28 17:56:33'),
(5, 'OFFICE', 'office', '2021-07-28 17:56:33'),
(6, 'OUTDOOR', 'outdoor', '2021-07-28 17:56:33'),
(7, 'VEHICLE', 'vehicle', '2021-07-28 17:56:33'),
(8, 'MISCELLANEOUS', 'miscellaneous', '2021-07-28 17:56:33'),
(15, 'STORAGE CATEGORY 1', 'storage-category-1', '2021-08-02 10:34:51'),
(16, 'STORAGE CATEGORY 2', 'storage-category-2', '2021-08-02 10:35:01'),
(17, 'STORAGE CATEGORY 3', 'storage-category-3', '2021-08-02 12:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` int NOT NULL,
  `vendor_comp_name` varchar(255) DEFAULT NULL,
  `vendor_comp_phone` varchar(255) DEFAULT NULL,
  `vendor_comp_email` varchar(255) DEFAULT NULL,
  `vendor_comp_addr` varchar(255) DEFAULT NULL,
  `vendor_comp_country` varchar(255) DEFAULT NULL,
  `vendor_comp_state` varchar(255) DEFAULT NULL,
  `vendor_comp_city` varchar(255) DEFAULT NULL,
  `vendor_comp_pincode` varchar(255) DEFAULT NULL,
  `vendor_name` varchar(255) DEFAULT NULL,
  `vendor_phone` varchar(255) DEFAULT NULL,
  `vendor_addr` varchar(255) DEFAULT NULL,
  `vendor_bank_name` varchar(255) DEFAULT NULL,
  `vendor_branch_name` varchar(255) DEFAULT NULL,
  `vendor_account_no` varchar(255) DEFAULT NULL,
  `vendor_ifsc_code` varchar(255) DEFAULT NULL,
  `vendor_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vend_purchase_order`
--

CREATE TABLE `vend_purchase_order` (
  `vpo_id` int NOT NULL,
  `vpo_vendor_id` int NOT NULL,
  `vpo_category` varchar(255) DEFAULT NULL,
  `vpo_date` date DEFAULT NULL,
  `vpo_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_ceo`
--
ALTER TABLE `about_ceo`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_session_key` (`admin_session_key`),
  ADD UNIQUE KEY `admin_name` (`admin_name`);

--
-- Indexes for table `allocated_work`
--
ALTER TABLE `allocated_work`
  ADD PRIMARY KEY (`allocated_work_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendace_id`),
  ADD KEY `attendance_staff` (`attendance_staff`);

--
-- Indexes for table `beam`
--
ALTER TABLE `beam`
  ADD PRIMARY KEY (`beam_id`),
  ADD KEY `beam_machine_id` (`beam_machine_id`);

--
-- Indexes for table `Beam_Created`
--
ALTER TABLE `Beam_Created`
  ADD PRIMARY KEY (`beamC_id`);

--
-- Indexes for table `beam_in_machines`
--
ALTER TABLE `beam_in_machines`
  ADD PRIMARY KEY (`bim_id`);

--
-- Indexes for table `coating`
--
ALTER TABLE `coating`
  ADD PRIMARY KEY (`coating_id`);

--
-- Indexes for table `coating_allocate`
--
ALTER TABLE `coating_allocate`
  ADD PRIMARY KEY (`coating_allocate_id`);

--
-- Indexes for table `coating_machine`
--
ALTER TABLE `coating_machine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coating_OutputRolls`
--
ALTER TABLE `coating_OutputRolls`
  ADD PRIMARY KEY (`coating_OutputRolls_id`);

--
-- Indexes for table `coating_raw_material_consumed`
--
ALTER TABLE `coating_raw_material_consumed`
  ADD PRIMARY KEY (`coating_raw_material_consumed_id`);

--
-- Indexes for table `coating_rolls`
--
ALTER TABLE `coating_rolls`
  ADD PRIMARY KEY (`coating_rolls_id`);

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`cp_id`);

--
-- Indexes for table `corpoate_responsibility_initiative`
--
ALTER TABLE `corpoate_responsibility_initiative`
  ADD PRIMARY KEY (`cri_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `cutting`
--
ALTER TABLE `cutting`
  ADD PRIMARY KEY (`cutting_id`);

--
-- Indexes for table `cutting_allocate`
--
ALTER TABLE `cutting_allocate`
  ADD PRIMARY KEY (`cutting_allocate_id`);

--
-- Indexes for table `cutting_machine`
--
ALTER TABLE `cutting_machine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cutting_OutputRolls`
--
ALTER TABLE `cutting_OutputRolls`
  ADD PRIMARY KEY (`cutting_OutputRolls_id`);

--
-- Indexes for table `cutting_raw_material_consumed`
--
ALTER TABLE `cutting_raw_material_consumed`
  ADD PRIMARY KEY (`cutting_raw_material_consumed_id`);

--
-- Indexes for table `cutting_rolls`
--
ALTER TABLE `cutting_rolls`
  ADD PRIMARY KEY (`cutting_rolls_id`);

--
-- Indexes for table `finishedgoods_stock`
--
ALTER TABLE `finishedgoods_stock`
  ADD PRIMARY KEY (`finishedgoods_stock_id`);

--
-- Indexes for table `finished_cut_roll`
--
ALTER TABLE `finished_cut_roll`
  ADD PRIMARY KEY (`fcr_id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `inventory_cat`
--
ALTER TABLE `inventory_cat`
  ADD PRIMARY KEY (`inventory_cat_id`);

--
-- Indexes for table `Inward`
--
ALTER TABLE `Inward`
  ADD PRIMARY KEY (`inward_id`);

--
-- Indexes for table `inward_excess_raw_material`
--
ALTER TABLE `inward_excess_raw_material`
  ADD PRIMARY KEY (`inward_id`);

--
-- Indexes for table `inward_wastage_raw_material`
--
ALTER TABLE `inward_wastage_raw_material`
  ADD PRIMARY KEY (`inward_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_vendor_id` (`item_vendor_id`),
  ADD KEY `item_purchase_order_id` (`item_purchase_order_id`);

--
-- Indexes for table `letusstore.about_ceo`
--
ALTER TABLE `letusstore.about_ceo`
  ADD PRIMARY KEY (`cp_id`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`machine_id`);

--
-- Indexes for table `machinestatus`
--
ALTER TABLE `machinestatus`
  ADD PRIMARY KEY (`machinestatus_id`),
  ADD KEY `mstatus_machine_id` (`mstatus_machine_id`),
  ADD KEY `mstatus_work_id` (`mstatus_work_id`);

--
-- Indexes for table `Machine_details`
--
ALTER TABLE `Machine_details`
  ADD PRIMARY KEY (`Machine_details_id`);

--
-- Indexes for table `manufacturing_work_allocate_inwards_used`
--
ALTER TABLE `manufacturing_work_allocate_inwards_used`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_beam`
--
ALTER TABLE `new_beam`
  ADD PRIMARY KEY (`beam_id`);

--
-- Indexes for table `New_Machines`
--
ALTER TABLE `New_Machines`
  ADD PRIMARY KEY (`mac_id`);

--
-- Indexes for table `new_manufacturing_machines`
--
ALTER TABLE `new_manufacturing_machines`
  ADD PRIMARY KEY (`machine_id`);

--
-- Indexes for table `new_rolls_created`
--
ALTER TABLE `new_rolls_created`
  ADD PRIMARY KEY (`new_roll_id`);

--
-- Indexes for table `other_stock`
--
ALTER TABLE `other_stock`
  ADD PRIMARY KEY (`other_stock_id`);

--
-- Indexes for table `purchase_rec`
--
ALTER TABLE `purchase_rec`
  ADD PRIMARY KEY (`pr_id`),
  ADD KEY `pr_vendor_id` (`pr_vendor_id`),
  ADD KEY `pr_purchaseorder_id` (`pr_purchaseorder_id`);

--
-- Indexes for table `raw_materials`
--
ALTER TABLE `raw_materials`
  ADD PRIMARY KEY (`raw_mat_id`);

--
-- Indexes for table `returninventory`
--
ALTER TABLE `returninventory`
  ADD PRIMARY KEY (`retinv_id`);

--
-- Indexes for table `roll`
--
ALTER TABLE `roll`
  ADD PRIMARY KEY (`roll_id`);

--
-- Indexes for table `Roll_Types`
--
ALTER TABLE `Roll_Types`
  ADD PRIMARY KEY (`roll_types_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `staff_member`
--
ALTER TABLE `staff_member`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `stockissues`
--
ALTER TABLE `stockissues`
  ADD PRIMARY KEY (`stckissue_id`);

--
-- Indexes for table `storage_calculator`
--
ALTER TABLE `storage_calculator`
  ADD PRIMARY KEY (`sc_id`);

--
-- Indexes for table `storage_calculator_categories`
--
ALTER TABLE `storage_calculator_categories`
  ADD PRIMARY KEY (`scc_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `vend_purchase_order`
--
ALTER TABLE `vend_purchase_order`
  ADD PRIMARY KEY (`vpo_id`),
  ADD KEY `vpo_vendor_id` (`vpo_vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_ceo`
--
ALTER TABLE `about_ceo`
  MODIFY `ac_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allocated_work`
--
ALTER TABLE `allocated_work`
  MODIFY `allocated_work_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendace_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beam`
--
ALTER TABLE `beam`
  MODIFY `beam_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Beam_Created`
--
ALTER TABLE `Beam_Created`
  MODIFY `beamC_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beam_in_machines`
--
ALTER TABLE `beam_in_machines`
  MODIFY `bim_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coating`
--
ALTER TABLE `coating`
  MODIFY `coating_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coating_allocate`
--
ALTER TABLE `coating_allocate`
  MODIFY `coating_allocate_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coating_machine`
--
ALTER TABLE `coating_machine`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coating_OutputRolls`
--
ALTER TABLE `coating_OutputRolls`
  MODIFY `coating_OutputRolls_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `coating_raw_material_consumed`
--
ALTER TABLE `coating_raw_material_consumed`
  MODIFY `coating_raw_material_consumed_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coating_rolls`
--
ALTER TABLE `coating_rolls`
  MODIFY `coating_rolls_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `cp_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `corpoate_responsibility_initiative`
--
ALTER TABLE `corpoate_responsibility_initiative`
  MODIFY `cri_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cutting`
--
ALTER TABLE `cutting`
  MODIFY `cutting_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cutting_allocate`
--
ALTER TABLE `cutting_allocate`
  MODIFY `cutting_allocate_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cutting_machine`
--
ALTER TABLE `cutting_machine`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cutting_OutputRolls`
--
ALTER TABLE `cutting_OutputRolls`
  MODIFY `cutting_OutputRolls_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cutting_raw_material_consumed`
--
ALTER TABLE `cutting_raw_material_consumed`
  MODIFY `cutting_raw_material_consumed_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cutting_rolls`
--
ALTER TABLE `cutting_rolls`
  MODIFY `cutting_rolls_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `finishedgoods_stock`
--
ALTER TABLE `finishedgoods_stock`
  MODIFY `finishedgoods_stock_id` int NOT NULL AUTO_INCREMENT COMMENT 'table unique id';

--
-- AUTO_INCREMENT for table `finished_cut_roll`
--
ALTER TABLE `finished_cut_roll`
  MODIFY `fcr_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `goods_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory_cat`
--
ALTER TABLE `inventory_cat`
  MODIFY `inventory_cat_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Inward`
--
ALTER TABLE `Inward`
  MODIFY `inward_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inward_excess_raw_material`
--
ALTER TABLE `inward_excess_raw_material`
  MODIFY `inward_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inward_wastage_raw_material`
--
ALTER TABLE `inward_wastage_raw_material`
  MODIFY `inward_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `letusstore.about_ceo`
--
ALTER TABLE `letusstore.about_ceo`
  MODIFY `cp_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
  MODIFY `machine_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `machinestatus`
--
ALTER TABLE `machinestatus`
  MODIFY `machinestatus_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Machine_details`
--
ALTER TABLE `Machine_details`
  MODIFY `Machine_details_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manufacturing_work_allocate_inwards_used`
--
ALTER TABLE `manufacturing_work_allocate_inwards_used`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `new_beam`
--
ALTER TABLE `new_beam`
  MODIFY `beam_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `New_Machines`
--
ALTER TABLE `New_Machines`
  MODIFY `mac_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `new_manufacturing_machines`
--
ALTER TABLE `new_manufacturing_machines`
  MODIFY `machine_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `new_rolls_created`
--
ALTER TABLE `new_rolls_created`
  MODIFY `new_roll_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `other_stock`
--
ALTER TABLE `other_stock`
  MODIFY `other_stock_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_rec`
--
ALTER TABLE `purchase_rec`
  MODIFY `pr_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `raw_materials`
--
ALTER TABLE `raw_materials`
  MODIFY `raw_mat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `returninventory`
--
ALTER TABLE `returninventory`
  MODIFY `retinv_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roll`
--
ALTER TABLE `roll`
  MODIFY `roll_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Roll_Types`
--
ALTER TABLE `Roll_Types`
  MODIFY `roll_types_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_member`
--
ALTER TABLE `staff_member`
  MODIFY `staff_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stockissues`
--
ALTER TABLE `stockissues`
  MODIFY `stckissue_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `storage_calculator`
--
ALTER TABLE `storage_calculator`
  MODIFY `sc_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `storage_calculator_categories`
--
ALTER TABLE `storage_calculator_categories`
  MODIFY `scc_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vend_purchase_order`
--
ALTER TABLE `vend_purchase_order`
  MODIFY `vpo_id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beam`
--
ALTER TABLE `beam`
  ADD CONSTRAINT `beam_ibfk_1` FOREIGN KEY (`beam_machine_id`) REFERENCES `machines` (`machine_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`item_vendor_id`) REFERENCES `vendors` (`vendor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`item_purchase_order_id`) REFERENCES `vend_purchase_order` (`vpo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase_rec`
--
ALTER TABLE `purchase_rec`
  ADD CONSTRAINT `purchase_rec_ibfk_1` FOREIGN KEY (`pr_vendor_id`) REFERENCES `vendors` (`vendor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_rec_ibfk_2` FOREIGN KEY (`pr_purchaseorder_id`) REFERENCES `vend_purchase_order` (`vpo_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
