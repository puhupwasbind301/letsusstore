-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2022 at 04:59 PM
-- Server version: 5.7.36
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letsusst_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_ceo`
--

CREATE TABLE `about_ceo` (
  `ac_id` int(11) NOT NULL,
  `ac_title` varchar(255) NOT NULL,
  `ac_image` varchar(255) NOT NULL,
  `ac_desc` text NOT NULL,
  `ac_meta_title` varchar(255) NOT NULL,
  `ac_meta_keyword` varchar(255) NOT NULL,
  `ac_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_ceo`
--

INSERT INTO `about_ceo` (`ac_id`, `ac_title`, `ac_image`, `ac_desc`, `ac_meta_title`, `ac_meta_keyword`, `ac_meta_description_desc`) VALUES
(56, 'About The CEO', 'uploads/about_ceo/file_610939ad2b1af1627994541.jpg', 'James Anderson is the CEO of Let Us Store, a Let Us Store facility with two state-of-the-art facilities in Noida, Gurugram and plans to expand into PAN India.\r\n\r\nJames has a Ph.D. in Analytical Chemistry from the University of California, Davis, and has worked in the pharmaceutical sector in Canada. After living in multiple countries in North America, the Middle and the Far East, he moved to New Delhi in 2012; however, settling in and growing roots seemed like a challenging task.', '', '', ''),
(57, 'The new direction:', 'uploads/about_ceo/file_610939dae152c1627994586.jpg', 'He decided to take matters into her own hands and start a Let Us Store facility. He had her storage issues to resolve and was sure that other expatriates and non-resident Indians who were coming back to India had them too.\r\n\r\nThus started another new phase - getting a business off the ground as a woman in India. The initial days were challenging. The men he dealt with didn\'t take her seriously and insisted on doing things their set way. He soon realized that he would have to practice putting her foot down; or else her vision wouldn\'t come to life.\r\n\r\nHe also realized the nature of the market he was currently dealing with: a population made up of hoarders who preferred to store things at their own homes or with family members until they reached a breaking point. Changing the majority population\'s mindset was going to be difficult. In a metropolis like Delhi, James Anderson had anticipated that Let Us Store facilities would soon be required.', '', '', ''),
(58, 'The 6 Demand Drivers are:', 'uploads/about_ceo/file_61093a07418971627994631.jpg', 'Density - leading to an increase in rent\r\n\r\nDownsizing - moving into a smaller home due to retirement, an empty nest, or an ability to pay current rent or mortgage\r\n\r\nDislocation - due to marriage, for a new job, taking a gap year or renovating\r\n\r\nDivorce- moving stuff into one place until problems have been sorted out\r\n\r\nDisaster- building back a life while storing the remaining belongings at a temporary facility\r\n\r\nDeath- because family members need time to sort through their loved one\'s belongings while grieving\r\n\r\nAware of the presence of these six demand drivers in the capital city of Delhi, he forged ahead and brought her idea to life. The design has now manifested into two locations in the Delhi-NCR region and is all set to grow in other Indian cities as well.\r\n\r\nWith a keen eye for the needs of the people combined with her international exposure and business acumen, James Anderson is confident that Let Us Store will grow onto become the answer that no one was seeking but everyone needed in India.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
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
(1, 'admin', '$2y$10$zZiRls6uP9NbdJsrFcasyOjmy7.bM/d1KcCmBRvg.Dvb0tiRSWC3G', 'iAmAuthAdmin', '15e068459ce7961efe0480fbaaadcf32debe1e3e', '::1', 0, 'http://localhost/portfolio/uploads/admin_image/profileImage07092019023233716.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner_image`
--

CREATE TABLE `banner_image` (
  `bi_id` int(11) NOT NULL,
  `bi_image` varchar(255) DEFAULT NULL,
  `bi_image_page` varchar(255) DEFAULT NULL,
  `bi_meta_title` varchar(255) NOT NULL,
  `bi_meta_keyword` varchar(255) NOT NULL,
  `bi_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner_image`
--

INSERT INTO `banner_image` (`bi_id`, `bi_image`, `bi_image_page`, `bi_meta_title`, `bi_meta_keyword`, `bi_meta_description_desc`) VALUES
(38, 'uploads/banner_image/file_61dc04cbe492a1641809099.jpg', 'warehouse', '', '', ''),
(39, 'uploads/banner_image/file_61dc0df2c90d61641811442.jpg', 'shed', '', '', ''),
(40, 'uploads/banner_image/file_61dc1120e99d41641812256.jpg', 'rcc', '', '', ''),
(41, 'uploads/banner_image/file_61dc12c2a52481641812674.jpg', 'bts', '', '', ''),
(46, 'uploads/banner_image/file_61dc1eb23408b1641815730.jpg', 'land', '', '', ''),
(47, 'uploads/banner_image/file_61dc1f1ce564c1641815836.jpg', 'three_pl', '', '', ''),
(48, 'uploads/banner_image/file_61dc1f30dd0701641815856.jpg', 'waste_management', '', '', ''),
(49, 'uploads/banner_image/file_61dc2ba499b2f1641819044.jpg', 'manpower', '', '', ''),
(50, 'uploads/banner_image/file_61dc2bbc9002f1641819068.jpg', 'loaders', '', '', ''),
(51, 'uploads/banner_image/file_61dc2be78621f1641819111.jpg', 'pickers_and_packers', '', '', ''),
(52, 'uploads/banner_image/file_61dc2c109ff091641819152.jpg', 'security', '', '', ''),
(62, 'uploads/banner_image/file_61dc2d193a0831641819417.jpg', 'deo', '', '', ''),
(63, 'uploads/banner_image/file_61dc2d498bc901641819465.jpg', 'supervisor', '', '', ''),
(64, 'uploads/banner_image/file_61dc2d7c68e301641819516.jpg', 'material_handling', '', '', ''),
(66, 'uploads/banner_image/file_61dc2e078c2d51641819655.jpg', 'forklift', '', '', ''),
(67, 'uploads/banner_image/file_61dc2e2f5ee7a1641819695.jpg', 'clamper', '', '', ''),
(68, 'uploads/banner_image/file_61dc2e48260ef1641819720.jpg', 'hpt', '', '', ''),
(69, 'uploads/banner_image/file_61dc2e5f61b9a1641819743.jpg', 'stackers', '', '', ''),
(70, 'uploads/banner_image/file_61dc2e5f9bb251641819743.jpg', 'stackers', '', '', ''),
(71, 'uploads/banner_image/file_61dc2e77426c31641819767.png', 'technology', '', '', ''),
(72, 'uploads/banner_image/file_61dc2e9add7071641819802.jpg', 'hardware', '', '', ''),
(73, 'uploads/banner_image/file_61dc2eb87f1251641819832.png', 'software', '', '', ''),
(74, 'uploads/banner_image/file_61dc2ed8d3a871641819864.jpg', 'distribution_services', '', '', ''),
(75, 'uploads/banner_image/file_61dc2ef5e18b01641819893.jpg', 'primary_service', '', '', ''),
(76, 'uploads/banner_image/file_61dc2f0bf13591641819915.jpg', 'secondary_service', '', '', ''),
(77, 'uploads/banner_image/file_61dc2f355acaa1641819957.jpg', 'd2c_services', '', '', ''),
(78, 'uploads/banner_image/file_61dd642d0c0111641899053.png', 'terms-and-conditions', '', '', ''),
(79, 'uploads/banner_image/file_61dd64c71c9be1641899207.jpg', 'privacy-policy', '', '', ''),
(80, 'uploads/banner_image/file_61dd836e02bce1641907054.jpg', 'investor', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `benefits`
--

CREATE TABLE `benefits` (
  `benefit_id` int(11) NOT NULL,
  `benefit_title` varchar(255) NOT NULL,
  `benefit_image` varchar(255) NOT NULL,
  `benefit_desc` text NOT NULL,
  `benefit_meta_title` varchar(255) NOT NULL,
  `benefit_meta_keyword` varchar(255) NOT NULL,
  `benefit_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `benefits`
--

INSERT INTO `benefits` (`benefit_id`, `benefit_title`, `benefit_image`, `benefit_desc`, `benefit_meta_title`, `benefit_meta_keyword`, `benefit_meta_description_desc`) VALUES
(56, 'About The CEO', 'uploads/about_ceo/file_610939ad2b1af1627994541.jpg', 'James Anderson is the CEO of Let Us Store, a Let Us Store facility with two state-of-the-art facilities in Noida, Gurugram and plans to expand into PAN India.\r\n\r\nJames has a Ph.D. in Analytical Chemistry from the University of California, Davis, and has worked in the pharmaceutical sector in Canada. After living in multiple countries in North America, the Middle and the Far East, he moved to New Delhi in 2012; however, settling in and growing roots seemed like a challenging task.', '', '', ''),
(57, 'The new direction:', 'uploads/about_ceo/file_610939dae152c1627994586.jpg', 'He decided to take matters into her own hands and start a Let Us Store facility. He had her storage issues to resolve and was sure that other expatriates and non-resident Indians who were coming back to India had them too.\r\n\r\nThus started another new phase - getting a business off the ground as a woman in India. The initial days were challenging. The men he dealt with didn\'t take her seriously and insisted on doing things their set way. He soon realized that he would have to practice putting her foot down; or else her vision wouldn\'t come to life.\r\n\r\nHe also realized the nature of the market he was currently dealing with: a population made up of hoarders who preferred to store things at their own homes or with family members until they reached a breaking point. Changing the majority population\'s mindset was going to be difficult. In a metropolis like Delhi, James Anderson had anticipated that Let Us Store facilities would soon be required.', '', '', ''),
(58, 'The 6 Demand Drivers are:', 'uploads/about_ceo/file_61093a07418971627994631.jpg', 'Density - leading to an increase in rent\r\n\r\nDownsizing - moving into a smaller home due to retirement, an empty nest, or an ability to pay current rent or mortgage\r\n\r\nDislocation - due to marriage, for a new job, taking a gap year or renovating\r\n\r\nDivorce- moving stuff into one place until problems have been sorted out\r\n\r\nDisaster- building back a life while storing the remaining belongings at a temporary facility\r\n\r\nDeath- because family members need time to sort through their loved one\'s belongings while grieving\r\n\r\nAware of the presence of these six demand drivers in the capital city of Delhi, he forged ahead and brought her idea to life. The design has now manifested into two locations in the Delhi-NCR region and is all set to grow in other Indian cities as well.\r\n\r\nWith a keen eye for the needs of the people combined with her international exposure and business acumen, James Anderson is confident that Let Us Store will grow onto become the answer that no one was seeking but everyone needed in India.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bike_storage`
--

CREATE TABLE `bike_storage` (
  `bks_id` int(11) NOT NULL,
  `bks_title` varchar(255) NOT NULL,
  `bks_image` varchar(255) NOT NULL,
  `bks_desc` text NOT NULL,
  `bks_meta_title` varchar(255) NOT NULL,
  `bks_meta_keyword` varchar(255) NOT NULL,
  `bks_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bike_storage`
--

INSERT INTO `bike_storage` (`bks_id`, `bks_title`, `bks_image`, `bks_desc`, `bks_meta_title`, `bks_meta_keyword`, `bks_meta_description_desc`) VALUES
(56, 'Document Storage', '', 'Our document management speeds the retrieval and access of paper documents so that staff can answer questions faster and warehouse inventory can move quicker.  With our document storage, you can restrict access as necessary and often find out who has viewed or modified a document at any time.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_meta_title` varchar(255) NOT NULL,
  `blog_meta_keyword` varchar(255) NOT NULL,
  `blog_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_image`, `blog_desc`, `blog_meta_title`, `blog_meta_keyword`, `blog_meta_description_desc`) VALUES
(61, 'Benefits of storing your bike in Let Us Store’s Bike Storage Facility', 'uploads/blogs/file_610a4687770281628063367.jpg', '', '', '', ''),
(62, 'How box storage can make more space for your needs', 'uploads/blogs/file_610a46c2615381628063426.jpg', '', '', '', ''),
(63, 'Preserving Your Comic Collection With Let Us Store', 'uploads/blogs/file_610a470d354551628063501.jpg', '', '', '', ''),
(64, 'How Let Us Store can Help You in the New Covid-19 Reality', 'uploads/blogs/file_610a4728972f91628063528.png', '', '', '', ''),
(67, 'Company Profile 1sdfsdafas', 'uploads/blogs/file_611656c3db3051628853955.png', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `box_storage`
--

CREATE TABLE `box_storage` (
  `bs_id` int(11) NOT NULL,
  `bs_title` varchar(255) NOT NULL,
  `bs_image` varchar(255) NOT NULL,
  `bs_desc` text NOT NULL,
  `bs_meta_title` varchar(255) NOT NULL,
  `bs_meta_keyword` varchar(255) NOT NULL,
  `bs_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `box_storage`
--

INSERT INTO `box_storage` (`bs_id`, `bs_title`, `bs_image`, `bs_desc`, `bs_meta_title`, `bs_meta_keyword`, `bs_meta_description_desc`) VALUES
(62, 'Box Storages', '', '<p>We offer self-storage wooden boxes, seaworthy packing boxes, Cargo boxes, Heavy Machinery Packaging boxes,etc .</p>', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bts`
--

CREATE TABLE `bts` (
  `b_id` int(11) NOT NULL,
  `b_title` varchar(255) NOT NULL,
  `b_image` varchar(255) NOT NULL,
  `b_desc` text NOT NULL,
  `b_meta_title` varchar(255) NOT NULL,
  `b_meta_keyword` varchar(255) NOT NULL,
  `b_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bts`
--

INSERT INTO `bts` (`b_id`, `b_title`, `b_image`, `b_desc`, `b_meta_title`, `b_meta_keyword`, `b_meta_description_desc`) VALUES
(117, 'BTS', 'uploads/bts/file_61dc3946b78cb1641822534.jpg', 'We understand that every client is different and has different needs. So, we offer our BTS service where we construct the warehouse that is exactly suitable for your business needs. Based on the clients\' requirements, we develop a warehouse that perfectly accommodates a client’s business.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clamper`
--

CREATE TABLE `clamper` (
  `c_id` int(11) NOT NULL,
  `c_title` varchar(255) NOT NULL,
  `c_image` varchar(255) NOT NULL,
  `c_desc` text NOT NULL,
  `c_meta_title` varchar(255) NOT NULL,
  `c_meta_keyword` varchar(255) NOT NULL,
  `c_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clamper`
--

INSERT INTO `clamper` (`c_id`, `c_title`, `c_image`, `c_desc`, `c_meta_title`, `c_meta_keyword`, `c_meta_description_desc`) VALUES
(117, 'Clamper', 'uploads/clamper/file_61dd13e0c9b3b1641878496.jpg', 'It is a  forklift attachment  device that attaches to a forklift It may be used to carry and pick up box-shaped loads. Clamp handling saves time by reducing human effort and allowing for faster loading and unloading of trucks. These cargoes, which are usually floor loaded and consolidated, are either manually emptied by hand, which is a time-consuming procedure or mechanically unloaded by a clamp truck. We also provide good quality clampers in terms of hardware for warehouse management.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `cu_id` int(11) NOT NULL,
  `cu_address` varchar(255) NOT NULL,
  `cu_phone` varchar(255) NOT NULL,
  `cu_email` varchar(255) NOT NULL,
  `cu_working_hours` varchar(100) NOT NULL,
  `cu_brochure` varchar(255) NOT NULL,
  `cu_meta_title` varchar(255) NOT NULL,
  `cu_meta_keyword` varchar(255) NOT NULL,
  `cu_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`cu_id`, `cu_address`, `cu_phone`, `cu_email`, `cu_working_hours`, `cu_brochure`, `cu_meta_title`, `cu_meta_keyword`, `cu_meta_description_desc`) VALUES
(86, '<ul>\r\n	<li>Mundka </li>\r\n	<li>Delhi-110081</li>\r\n</ul>\r\n', '9810298454|9888863160', 'Ccare@letsusstore.com', 'Monday-Friday\r\n09:00Am- 06:00Pm', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `d2c_services`
--

CREATE TABLE `d2c_services` (
  `d_id` int(11) NOT NULL,
  `d_title` varchar(255) NOT NULL,
  `d_image` varchar(255) NOT NULL,
  `d_desc` text NOT NULL,
  `d_meta_title` varchar(255) NOT NULL,
  `d_meta_keyword` varchar(255) NOT NULL,
  `d_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `d2c_services`
--

INSERT INTO `d2c_services` (`d_id`, `d_title`, `d_image`, `d_desc`, `d_meta_title`, `d_meta_keyword`, `d_meta_description_desc`) VALUES
(117, 'D2C Services', 'uploads/d2c_services/file_61dd1dad888cc1641881005.jpg', 'D2C Services (DIRECT-TO-CUSTOMER) helps our customers with\r\n• Increased control over brand messaging and consumer engagement.\r\n• Direct access to customers and their data.\r\n• Gain higher margins.\r\n• Stronger brand loyalty.\r\n• Expands market opportunities.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `deo`
--

CREATE TABLE `deo` (
  `d_id` int(11) NOT NULL,
  `d_title` varchar(255) NOT NULL,
  `d_image` varchar(255) NOT NULL,
  `d_desc` text NOT NULL,
  `d_meta_title` varchar(255) NOT NULL,
  `d_meta_keyword` varchar(255) NOT NULL,
  `d_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deo`
--

INSERT INTO `deo` (`d_id`, `d_title`, `d_image`, `d_desc`, `d_meta_title`, `d_meta_keyword`, `d_meta_description_desc`) VALUES
(117, 'Data Entry Operators(DEO)', 'uploads/deo/file_61dd33a5a27a41641886629.jpg', 'DEO’s have a vital role in the organization since they prepare the day\'s schedule, assign work to workers, and monitor their progress. We provide professional staff especially for DEO so that inaccuracies should not create any problem in the smooth functioning of a warehouse.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `distribution_services`
--

CREATE TABLE `distribution_services` (
  `d_id` int(11) NOT NULL,
  `d_title` varchar(255) NOT NULL,
  `d_image` varchar(255) NOT NULL,
  `d_desc` text NOT NULL,
  `d_meta_title` varchar(255) NOT NULL,
  `d_meta_keyword` varchar(255) NOT NULL,
  `d_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `distribution_services`
--

INSERT INTO `distribution_services` (`d_id`, `d_title`, `d_image`, `d_desc`, `d_meta_title`, `d_meta_keyword`, `d_meta_description_desc`) VALUES
(117, 'Distribution Services', 'uploads/distribution_services/file_61dd1979f17b81641879929.jpg', 'Our Distribution Services encompass almost all the destinations’ network distribution for the ease of our clients. Our clients will benefit from a wide range of value-added services which include but are not limited to: stock management, bar-coding, co-packing, customization services, pricing/labelling, procurement process, trans-loading & transportation, perpetual inventory management, physical flow/goods flow analysis, post-production services, and domestic transport networks.\r\n\r\nComplete supply change management\r\nPick and Pack\r\nRepacking and other services\r\nReal time inventory visibility\r\nIn time delivery\r\nOrder fulfilment\r\nWell maintained distribution logistics\r\nQuality check and control , etc.', '', '', ''),
(118, 'Primary Service', '', 'Our primary services consists of\r\n\r\nInterstate transportation\r\nPort to plant movement\r\nPort & terminal to interstate warehouses\r\nAbility to deploy any size of vehicle as per the consignment', '', '', ''),
(119, 'Secondary Services', '', 'Our secondary services have\r\n\r\nPlant to distributor point.\r\nDistributor to further stockiest & retailers.\r\nWarehouse to various remote location & on site delivery.\r\nIntra circle & state transportation.\r\n', '', '', ''),
(120, 'D2C Services', '', '(DIRECT-TO-CUSTOMER) helps our customers with\r\n\r\nIncreased control over brand messaging and consumer engagement.\r\nDirect access to customers and their data.\r\nGain higher margins.\r\nStronger brand loyalty.\r\nExpands market opportunities.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `forklift`
--

CREATE TABLE `forklift` (
  `f_id` int(11) NOT NULL,
  `f_title` varchar(255) NOT NULL,
  `f_image` varchar(255) NOT NULL,
  `f_desc` text NOT NULL,
  `f_meta_title` varchar(255) NOT NULL,
  `f_meta_keyword` varchar(255) NOT NULL,
  `f_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forklift`
--

INSERT INTO `forklift` (`f_id`, `f_title`, `f_image`, `f_desc`, `f_meta_title`, `f_meta_keyword`, `f_meta_description_desc`) VALUES
(117, 'Forklifts ', 'uploads/forklift/file_61dd12d742b7e1641878231.jpg', 'Forklifts are used to transfer and transport large cargoes, from delivery trucks to dockside storage areas to ships. We offer forklift services for efficient warehouse management.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hardware`
--

CREATE TABLE `hardware` (
  `h_id` int(11) NOT NULL,
  `h_title` varchar(255) NOT NULL,
  `h_image` varchar(255) NOT NULL,
  `h_desc` text NOT NULL,
  `h_meta_title` varchar(255) NOT NULL,
  `h_meta_keyword` varchar(255) NOT NULL,
  `h_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hardware`
--

INSERT INTO `hardware` (`h_id`, `h_title`, `h_image`, `h_desc`, `h_meta_title`, `h_meta_keyword`, `h_meta_description_desc`) VALUES
(117, 'Coming Soon...', '', '<p>hiii&nbsp;</p>\r\n', 'meta title', 'meta keyword', '<p>meta descripotn</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `home_id` int(11) NOT NULL,
  `home_title_heading` varchar(255) NOT NULL,
  `home_title` varchar(255) NOT NULL,
  `home_image` varchar(255) NOT NULL,
  `home_link_name` varchar(255) NOT NULL,
  `home_link` varchar(255) NOT NULL,
  `home_desc` varchar(255) NOT NULL,
  `home_meta_title` varchar(255) NOT NULL,
  `home_meta_keyword` varchar(255) NOT NULL,
  `home_meta_description_desc` text NOT NULL,
  `home_image_page` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`home_id`, `home_title_heading`, `home_title`, `home_image`, `home_link_name`, `home_link`, `home_desc`, `home_meta_title`, `home_meta_keyword`, `home_meta_description_desc`, `home_image_page`) VALUES
(2, 'INTRODUCING WORKFLOW', 'India Best Letsusstore Facility', 'uploads/home/file_61debe30a2bcf1641987632.jpg', 'Benefits', 'http://letsusstore.com/home/benefits', '<p>Welcome to the Letsusstore, we are the best company that offers a broad range of warehousing solutions. Right from storage to logistics and transportation, we have got you covered with our premium warehousing services especially in the metro cities whi', '', '', '', 'main-section'),
(3, '  ', 'Thought behind Letsusstore', 'uploads/home/file_61debe7c7818f1641987708.jpg', 'Contact', 'http://letsusstore.com/home/contact-us', 'The idea behind Letsusstore is to strengthen the business management in the country by strengthening the supply chain management by providing premium warehousing and logistics services at a genuine price. \r\n', '', '', '', 'main-section'),
(4, '   ', 'Why Letsusstore?', 'uploads/home/file_61cbf9274d64d1640757543.jpg', 'Benefits', 'http://letsusstore.com/home/benefits', 'By choosing us, you get freedom from the stress concerning the storage, movement and safety, and security of goods in transit. You remain stress-free with regard to the warehousing and logistics services.\r\n', '', '', '', 'main-section'),
(5, ' ', 'Let Us Store', 'uploads/home/file_61cbf96ac97be1640757610.jpg', ' ', ' ', 'Let Us Stores', '', '', '', 'our-works'),
(6, ' ', 'High Security', 'uploads/home/file_61cbf9b8af3041640757688.jpg', ' ', ' ', 'Let Us Store', '', '', '', 'our-works'),
(8, ' ', 'CCTV CAMERA SETUP', 'uploads/home/file_61cbfaf3855041640758003.jpg', ' ', ' ', 'Let Us Store', '', '', '', 'our-works'),
(9, ' ', 'Christopher Lindsey', 'uploads/home/file_61cbfb5e02a321640758110.jpg', ' ', ' ', 'Founder, CEO', '', '', '', 'meet-the-team'),
(10, ' ', 'Mary K. Austin', 'uploads/home/file_61cbfb97bed771640758167.jpg', ' ', ' ', 'HR, Specialist', '', '', '', 'meet-the-team'),
(11, ' ', 'Shelley Percy', 'uploads/home/file_61cbfc18cdfde1640758296.jpg', ' ', ' ', 'Some Important Rules To Start a New Business', '', '', '', 'news-and-articles'),
(12, ' ', 'Stevn Smith', 'uploads/home/file_61cbfc2f3555c1640758319.png', ' ', ' ', 'Why Would You Need Some New Business', '', '', '', 'news-and-articles'),
(13, ' ', 'David Warner', 'uploads/home/file_61cbfc4429b231640758340.jpg', ' ', ' ', 'Know Top Ten Rules For Corporate Business', '', '', '', 'news-and-articles'),
(19, ' ', 'News and Articlles', 'uploads/home/file_61cbfc830c9831640758403.jpg', ' ', ' ', '', '', '', '', 'news-and-articles');

-- --------------------------------------------------------

--
-- Table structure for table `hpt`
--

CREATE TABLE `hpt` (
  `h_id` int(11) NOT NULL,
  `h_title` varchar(255) NOT NULL,
  `h_image` varchar(255) NOT NULL,
  `h_desc` text NOT NULL,
  `h_meta_title` varchar(255) NOT NULL,
  `h_meta_keyword` varchar(255) NOT NULL,
  `h_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hpt`
--

INSERT INTO `hpt` (`h_id`, `h_title`, `h_image`, `h_desc`, `h_meta_title`, `h_meta_keyword`, `h_meta_description_desc`) VALUES
(117, 'Hand Pallet Trucks(HPT)', 'uploads/hpt/file_61dd1424ba2941641878564.jpg', 'A hand pallet truck is a device that is used to lift and move pallets. It aids in the movement of items inside the warehouse\'s limits. Pallet trucks are often referred to as pallet pumps, pump trucks, and pallet jacks. This is a warehouse tool that is used to lift and move pallets. We use high-quality machines for the smooth functioning of the warehouse.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `investor`
--

CREATE TABLE `investor` (
  `i_id` int(11) NOT NULL,
  `i_title` varchar(255) NOT NULL,
  `i_image` varchar(255) NOT NULL,
  `i_desc` longtext NOT NULL,
  `i_meta_title` varchar(255) NOT NULL,
  `i_meta_keyword` varchar(255) NOT NULL,
  `i_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `investor`
--

INSERT INTO `investor` (`i_id`, `i_title`, `i_image`, `i_desc`, `i_meta_title`, `i_meta_keyword`, `i_meta_description_desc`) VALUES
(118, 'Land', 'uploads/investor/file_61dd4f3e8940b1641893694.jpg', '<p>We offer our warehouse development service. We bridge the gap by bringing reputed builders closer to the land owners for the purpose of the construction of warehouse. The landowners get assured rental income from the developed warehouse. We welcome interested property developers and land owners to grab this exciting deal. Our dedicated team of professional is ready to assist you in the complete process under our land services.</p>\r\n', 'meta title', 'meta keyword', '<p>meta descripotin</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `l_id` int(11) NOT NULL,
  `l_title` varchar(255) NOT NULL,
  `l_image` varchar(255) NOT NULL,
  `l_desc` text NOT NULL,
  `l_meta_title` varchar(255) NOT NULL,
  `l_meta_keyword` varchar(255) NOT NULL,
  `l_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`l_id`, `l_title`, `l_image`, `l_desc`, `l_meta_title`, `l_meta_keyword`, `l_meta_description_desc`) VALUES
(118, 'Land', 'uploads/land/file_61dc39f0c2aa21641822704.jpeg', 'We offer our warehouse development service. We bridge the gap by bringing reputed builders closer to the land owners for the purpose of the construction of warehouse. The landowners get assured rental income from the developed warehouse. We welcome interested property developers and land owners to grab this exciting deal.\r\n\r\nOur dedicated team of professional is ready to assist you in the complete process under our land services.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `letusstore.about_ceo`
--

CREATE TABLE `letusstore.about_ceo` (
  `cp_id` int(11) NOT NULL,
  `cp_title` varchar(255) NOT NULL,
  `cp_image` varchar(255) NOT NULL,
  `cp_desc` varchar(255) NOT NULL,
  `cp_meta_title` varchar(255) NOT NULL,
  `cp_meta_keyword` varchar(255) NOT NULL,
  `cp_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `letusstore.about_ceo`
--

INSERT INTO `letusstore.about_ceo` (`cp_id`, `cp_title`, `cp_image`, `cp_desc`, `cp_meta_title`, `cp_meta_keyword`, `cp_meta_description_desc`) VALUES
(1, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(2, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(3, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(4, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(5, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(6, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(7, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(8, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(9, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(10, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(11, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(12, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(13, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(14, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(15, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(16, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(17, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(18, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(19, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(20, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(21, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(22, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(23, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(24, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(25, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(26, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(27, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(28, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(29, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(30, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(31, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(32, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(33, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(34, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(35, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(36, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(37, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(38, 'File Examddsdfsdfd', '', 'asfsadfsdddsfsdfsdd', '', '', ''),
(39, 'dFile Examddsdfsdfdddddd', '', 'asfsadfsdddsfsdfsddfddfdddd', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `loaders`
--

CREATE TABLE `loaders` (
  `l_id` int(11) NOT NULL,
  `l_title` varchar(255) NOT NULL,
  `l_image` varchar(255) NOT NULL,
  `l_desc` text NOT NULL,
  `l_meta_title` varchar(255) NOT NULL,
  `l_meta_keyword` varchar(255) NOT NULL,
  `l_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaders`
--

INSERT INTO `loaders` (`l_id`, `l_title`, `l_image`, `l_desc`, `l_meta_title`, `l_meta_keyword`, `l_meta_description_desc`) VALUES
(117, 'Loaders', 'uploads/loaders/file_61dd0f41ee59d1641877313.jpg', 'Loaders are important to load and unload trucks, trailers, and shipping containers to prepare outbound cargo and receive incoming commodities. They have to be very professional to handle all the goods with utmost care. We provide expert professional loaders who are smartly handle all the cargo movements.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `manpower`
--

CREATE TABLE `manpower` (
  `m_id` int(11) NOT NULL,
  `m_title` varchar(255) NOT NULL,
  `m_image` varchar(255) NOT NULL,
  `m_desc` longtext NOT NULL,
  `m_meta_title` varchar(255) NOT NULL,
  `m_meta_keyword` varchar(255) NOT NULL,
  `m_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manpower`
--

INSERT INTO `manpower` (`m_id`, `m_title`, `m_image`, `m_desc`, `m_meta_title`, `m_meta_keyword`, `m_meta_description_desc`) VALUES
(117, 'Manpower', 'uploads/manpower/file_61dc3cb1315c01641823409.png', 'We can meet all of your workforce requirements, whether it\'s manpower supply or manpower consultancy. Our manpower services are second to none. Our team of specialists is dedicated to providing our clients with the finest possible experience.\r\n\r\nOnly those agents who have completed all of the training and skill development examinations are hired by our employed agency, which is a manpower agency. We\'re concentrating on talent acquisition because it allows us to focus on long-term human resource planning and finding suitable applicants for the roles that demand a very particular set of abilities. We place a high value on our employees\' performance to serve our clients in the best possible manner.\r\n\r\nPeople, procedures, and technology are all important to us. We assist our clients in releasing the hidden value of information and resources currently in place, allowing processes to perform at peak efficiency. These key process indicators become far more than operational goals in the competitive marketplace; they become a customer-focused competitive advantage.\r\n\r\nTo guarantee that our clients enjoy a smooth and \'hassle-free\' business experience, we do rigorous background checks and keep up-to-date records on all of the people we hire. We also conduct personality development and grooming training to guarantee that our staff is \'employment-ready.\' The staff we employ are known for their high commitment standards, pleasant manner, and consistent performance.', '', '', ''),
(118, 'Loaders', '', 'Loaders are important to load and unload trucks, trailers, and shipping containers to prepare outbound cargo and receive incoming commodities. They have to be very professional to handle all the goods with utmost care. We provide expert professional loaders who are smartly handle all the cargo movements.', '', '', ''),
(119, 'Pickers and Packers', '', 'Pickers and Packers are crucial personnel in managing a warehouse as they are generally in charge of completing delivery orders. They perform various tasks such as collecting the clients\' purchase forms, verifying that the products are in stock, getting the items from their storage facilities, constructing the order, checking for accuracy and completeness, and wrapping the box securely before releasing it to the delivery employees. So, we provide professional pickers and packers to manage a warehouse facility.', '', '', ''),
(120, 'Security', '', 'Security is an essential thing for warehouse management to ensure the safety of goods stored in warehouse. We offer a wide range of security solutions in terms of technical and Human Resource perspectives. Our security services include CCTV Cameras, Protected Softwares, and Security Personnel.', '', '', ''),
(121, 'Supervisors', '', 'Supervisors are also available who are important to achieve high levels of customer satisfaction by receiving, identifying, dispatching, and guaranteeing the quality of items.', '', '', ''),
(122, 'DEO’s ( Data entry operators)', '', 'DEO’s have a vital role in the organization since they prepare the day\'s schedule, assign work to workers, and monitor their progress. We provide professional staff especially for DEO so that inaccuracies should not create any problem in the smooth functioning of a warehouse.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `material_handling`
--

CREATE TABLE `material_handling` (
  `m_id` int(11) NOT NULL,
  `m_title` varchar(255) NOT NULL,
  `m_image` varchar(255) NOT NULL,
  `m_desc` longtext NOT NULL,
  `m_meta_title` varchar(255) NOT NULL,
  `m_meta_keyword` varchar(255) NOT NULL,
  `m_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `material_handling`
--

INSERT INTO `material_handling` (`m_id`, `m_title`, `m_image`, `m_desc`, `m_meta_title`, `m_meta_keyword`, `m_meta_description_desc`) VALUES
(117, 'Material Handling', 'uploads/material_handling/file_61dd12792ee381641878137.jpg', 'At our company, we employ a variety of material handling technologies. Forklifts, carts, pallets, conveyors, conveyance robots, sorters, picking systems, and automated warehouses are examples of material handling equipments. At our warehouse and logistics organization, there is a lot of heavy work involved, such as loading, unloading, and transporting freight. The phrase \"material handling device\" refers to the machines that are used to make logistics more efficient. Moving raw materials, operating in the process, and producing goods are all jobs that these machines accomplish.\r\n\r\nLet\'s take a closer look at the most important material handling equipment:', '', '', ''),
(118, 'Forklifts ', '', 'Forklifts are used to transfer and transport large cargoes, from delivery trucks to dockside storage areas to ships. We offer forklift services for efficient warehouse management.', '', '', ''),
(119, 'Clamper', '', 'It is a  forklift attachment  device that attaches to a forklift It may be used to carry and pick up box-shaped loads. Clamp handling saves time by reducing human effort and allowing for faster loading and unloading of trucks. These cargoes, which are usually floor loaded and consolidated, are either manually emptied by hand, which is a time-consuming procedure or mechanically unloaded by a clamp truck. We also provide good quality clampers in terms of hardware for warehouse management.', '', '', ''),
(120, 'HPT (Hand pallet trucks)', '', 'A hand pallet truck is a device that is used to lift and move pallets. It aids in the movement of items inside the warehouse\'s limits. Pallet trucks are often referred to as pallet pumps, pump trucks, and pallet jacks. This is a warehouse tool that is used to lift and move pallets. We use high-quality machines for the smooth functioning of the warehouse.', '', '', ''),
(121, 'Stackers', '', '<p>A warehouse stacker, which is a specialized gadget for lifting and moving pallets around a warehouse, is also available. They&#39;re perfect for small warehouses where workers need to load things onto racks for storage or into cars for transport. We also provide premium quality stackers contributing to the efficient management of a warehouse.</p>\r\n', 'meta title', 'meta keyword', '<p>meta description</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `mumbai`
--

CREATE TABLE `mumbai` (
  `m_id` int(11) NOT NULL,
  `m_title` varchar(255) NOT NULL,
  `m_image` varchar(255) NOT NULL,
  `m_desc` text NOT NULL,
  `m_meta_title` varchar(255) NOT NULL,
  `m_meta_keyword` varchar(255) NOT NULL,
  `m_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mumbai`
--

INSERT INTO `mumbai` (`m_id`, `m_title`, `m_image`, `m_desc`, `m_meta_title`, `m_meta_keyword`, `m_meta_description_desc`) VALUES
(60, 'Mumbai', '', 'The concept of Let Us Store is not new in western countries. But in India, not many people were aware of the idea. Finding this niche, Let Us Store launched in the country a few years ago. Making the capital our center, we made it possible for people to easily find reliable and economical Let Us Store in Pune.\r\n\r\nLet Us Store’s journey started with the vibrant and bustling city of Pune. The first Let Us Store in Mumbai was set up in Gurugram. Since then, we have grown into a huge family of three big warehouses and thousands of happy customers.\r\n\r\nTwo warehouses are located in Gurugram and one is in Noida. The latest addition was the second Gurugram Let Us Store in Pune. As we witnessed a burgeoning demand for Let Us Store during the Covid-19 lockdown, we were able to fulfill people’s needs for extra storage.\r\n\r\nAny home or business that’s looking for Let Us Store in Pune can find a solution within our range of over 400 Let Us Store rooms.', '', '', ''),
(61, 'Locations of Let Us Store in Mumbai', '', 'All of Let Us Store’s warehouses are located in convenient spots that are easily accessible across the greater Pune region. They are located in prime localities and alongside major roadways so that you can find and visit them effortlessly.\r\n\r\nOur warehouses in Gurugram are located in prime locations, one in Udyog Vihar and the other adjacent to the National Highway at Honda Chowk. They both boast over 100 dedicated rooms in varying sizes in each location. Residents in and around Gurugram and nearby New Pune will have no trouble locating and accessing these two facilities. Our units are created with the needs of both individuals and businesses in mind.\r\n\r\nThe third warehouse in Noida is close to Wave City Metro. If you are considering visiting our Noida warehouse, you can choose from over 150 Let Us Store units. Located inside a bustling complex, this Let Us Store in Pune is your perfect choice.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pickers_and_packers`
--

CREATE TABLE `pickers_and_packers` (
  `p_id` int(11) NOT NULL,
  `p_title` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_desc` text NOT NULL,
  `p_meta_title` varchar(255) NOT NULL,
  `p_meta_keyword` varchar(255) NOT NULL,
  `p_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pickers_and_packers`
--

INSERT INTO `pickers_and_packers` (`p_id`, `p_title`, `p_image`, `p_desc`, `p_meta_title`, `p_meta_keyword`, `p_meta_description_desc`) VALUES
(118, 'Pickers and Packers', 'uploads/pickers_and_packers/file_61dd0ffb18a731641877499.png', 'Pickers and Packers are crucial personnel in managing a warehouse as they are generally in charge of completing delivery orders. They perform various tasks such as collecting the clients\' purchase forms, verifying that the products are in stock, getting the items from their storage facilities, constructing the order, checking for accuracy and completeness, and wrapping the box securely before releasing it to the delivery employees. So, we provide professional pickers and packers to manage a warehouse facility.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `primary_service`
--

CREATE TABLE `primary_service` (
  `p_id` int(11) NOT NULL,
  `p_title` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_desc` text NOT NULL,
  `p_meta_title` varchar(255) NOT NULL,
  `p_meta_keyword` varchar(255) NOT NULL,
  `p_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `primary_service`
--

INSERT INTO `primary_service` (`p_id`, `p_title`, `p_image`, `p_desc`, `p_meta_title`, `p_meta_keyword`, `p_meta_description_desc`) VALUES
(117, 'Primary Service', 'uploads/primary_service/file_61dd1a99337741641880217.jpg', 'Primary Service : Our primary services consists of\r\n• Interstate transportation\r\n• Port to plant movement\r\n• Port & terminal to interstate warehouses\r\n• Ability to deploy any size of vehicle as per the consignment', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy`
--

CREATE TABLE `privacy_policy` (
  `pp_id` int(11) NOT NULL,
  `pp_title` varchar(255) NOT NULL,
  `pp_image` varchar(255) NOT NULL,
  `pp_desc` text NOT NULL,
  `pp_meta_title` varchar(255) NOT NULL,
  `pp_meta_keyword` varchar(255) NOT NULL,
  `pp_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `privacy_policy`
--

INSERT INTO `privacy_policy` (`pp_id`, `pp_title`, `pp_image`, `pp_desc`, `pp_meta_title`, `pp_meta_keyword`, `pp_meta_description_desc`) VALUES
(63, 'Privacy Policy', '', '<p>Customer information will be used to provide information such as delivery status of the product and to update the customer through e- mails, sms . And service provider will get the feedback from the customer about their satisfaction and experience regarding to service provider. If you are interested and want to get more information then please visit our website&hellip;.<br />\r\n&nbsp;</p>\r\n', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `private_rooms`
--

CREATE TABLE `private_rooms` (
  `pr_id` int(11) NOT NULL,
  `pr_title` varchar(255) NOT NULL,
  `pr_image` varchar(255) NOT NULL,
  `pr_desc` text NOT NULL,
  `pr_meta_title` varchar(255) NOT NULL,
  `pr_meta_keyword` varchar(255) NOT NULL,
  `pr_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `private_rooms`
--

INSERT INTO `private_rooms` (`pr_id`, `pr_title`, `pr_image`, `pr_desc`, `pr_meta_title`, `pr_meta_keyword`, `pr_meta_description_desc`) VALUES
(64, 'Private Rooms', '', 'Our private self-storage rooms are positioned in prime area , they offer safety, security, and cleanliness. Our Self-storage private rooms are best for all your business storage requirements.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rcc`
--

CREATE TABLE `rcc` (
  `r_id` int(11) NOT NULL,
  `r_title` varchar(255) NOT NULL,
  `r_image` varchar(255) NOT NULL,
  `r_desc` text NOT NULL,
  `r_meta_title` varchar(255) NOT NULL,
  `r_meta_keyword` varchar(255) NOT NULL,
  `r_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rcc`
--

INSERT INTO `rcc` (`r_id`, `r_title`, `r_image`, `r_desc`, `r_meta_title`, `r_meta_keyword`, `r_meta_description_desc`) VALUES
(118, 'RCC', 'uploads/rcc/file_61dc38d85030c1641822424.jpg', 'Our RCC services are best-in-class when it comes to premium quality construction for buildings, especially the warehouse. Our service adds more strength to the concrete that contributes towards the strong construction of the warehouse. You can bank upon us for complete assurance about the safety of the constructed building.\r\n\r\n', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `r_id` int(255) NOT NULL,
  `r_user_id` int(11) DEFAULT NULL,
  `r_info` varchar(255) DEFAULT NULL,
  `r_description` text,
  `r_user_name` varchar(255) DEFAULT NULL,
  `r_user_address` text,
  `r_user_city` varchar(255) DEFAULT NULL,
  `r_user_state` varchar(255) DEFAULT NULL,
  `r_user_zip` varchar(50) DEFAULT NULL,
  `r_user_email` varchar(255) NOT NULL,
  `r_mobile` varchar(255) NOT NULL,
  `r_status` enum('accepted','pending','rejected') NOT NULL DEFAULT 'pending',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`r_id`, `r_user_id`, `r_info`, `r_description`, `r_user_name`, `r_user_address`, `r_user_city`, `r_user_state`, `r_user_zip`, `r_user_email`, `r_mobile`, `r_status`, `created_date`) VALUES
(24, 25, 'Distribution Service', '', 'Puhupwas', 'Address', 'City', 'State', '242342', 'puhupwasbind301@gmail.com', '2434234234', 'rejected', '2021-12-28 17:22:20'),
(25, 25, 'Distribution Service', '', 'Puhupwas', 'Address', 'City', 'State', '242342', 'puhupwasbind301@gmail.com', '2434234234', 'rejected', '2021-12-28 17:22:20'),
(26, 25, 'Distribution Service', '', 'Puhupwas', 'Address', 'City', 'State', '242342', 'puhupwasbind301@gmail.com', '2434234234', 'pending', '2021-12-28 17:22:20'),
(27, 25, 'Distribution Service', '', 'Puhupwas', 'Address', 'City', 'State', '242342', 'puhupwasbind301@gmail.com', '2434234234', 'pending', '2021-12-28 17:22:20'),
(28, 25, 'Distribution Service', '', 'Puhupwas', 'Address', 'City', 'State', '242342', 'puhupwasbind301@gmail.com', '2434234234', 'pending', '2021-12-28 17:22:20'),
(29, 25, 'Distribution Service', '', 'Puhupwas', 'Address', 'City', 'State', '242342', 'puhupwasbind301@gmail.com', '2434234234', 'pending', '2021-12-28 17:22:20'),
(30, 25, 'Distribution Service', '', 'Puhupwas', 'Address', 'City', 'State', '242342', 'puhupwasbind301@gmail.com', '2434234234', 'pending', '2021-12-28 17:22:20'),
(31, 25, 'Distribution Service', '', 'Puhupwas', 'Address', 'City', 'State', '242342', 'puhupwasbind301@gmail.com', '2434234234', 'pending', '2021-12-28 17:22:20'),
(32, 25, 'Distribution Service', '', 'Puhupwas', 'Address', 'City', 'State', '242342', 'puhupwasbind301@gmail.com', '2434234234', 'pending', '2021-12-28 17:22:20'),
(33, 25, 'Distribution Service', '', 'Puhupwas', 'Address', 'City', 'State', '242342', 'puhupwasbind301@gmail.com', '2434234234', 'pending', '2021-12-28 17:22:20'),
(34, 25, 'Distribution Service', '', 'Puhupwas', 'Address', 'City', 'State', '242342', 'puhupwasbind301@gmail.com', '2434234234', 'pending', '2021-12-28 17:22:20'),
(35, 25, 'Distribution Service', '', 'Puhupwas', 'Address', 'City', 'State', '242342', 'puhupwasbind301@gmail.com', '2434234234', 'pending', '2021-12-28 17:22:20'),
(36, 25, 'Distribution Service', '', 'Puhupwas', 'Address', 'City', 'State', '242342', 'puhupwasbind301@gmail.com', '2434234234', 'pending', '2021-12-28 17:22:20'),
(37, 25, 'Distribution Service', '', 'Puhupwas', 'Address', 'City', 'State', '242342', 'puhupwasbind301@gmail.com', '2434234234', 'pending', '2021-12-28 17:22:20'),
(38, 25, 'Distribution Service', '', 'Puhupwas', 'Address', 'City', 'State', '242342', 'puhupwasbind301@gmail.com', '2434234234', 'pending', '2021-12-28 17:22:20'),
(39, 25, 'Distribution Service', '', 'Puhupwas', 'Address', 'City', 'State', '242342', 'puhupwasbind301@gmail.com', '2434234234', 'pending', '2021-12-28 17:22:20'),
(40, 42, 'Manpower', 'Req Description', 'Puhupwas', 'Address', 'city', 'state', '242422', 'puhupwasbind301@gmail.com', '2349237423', 'pending', '2021-12-29 12:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `request_invoice`
--

CREATE TABLE `request_invoice` (
  `ri_id` int(11) NOT NULL,
  `ri_user_id` int(11) DEFAULT NULL,
  `ri_no` int(11) DEFAULT NULL,
  `ri_name` varchar(255) DEFAULT NULL,
  `ri_quantity` int(11) DEFAULT NULL,
  `ri_price` varchar(255) DEFAULT NULL,
  `ri_total` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_invoice`
--

INSERT INTO `request_invoice` (`ri_id`, `ri_user_id`, `ri_no`, `ri_name`, `ri_quantity`, `ri_price`, `ri_total`, `created_date`) VALUES
(60, 25, 26, 'Distribution Service', 12, '1', '12', '2022-01-04 17:42:07');

-- --------------------------------------------------------

--
-- Table structure for table `secondary_service`
--

CREATE TABLE `secondary_service` (
  `s_id` int(11) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `s_image` varchar(255) NOT NULL,
  `s_desc` text NOT NULL,
  `s_meta_title` varchar(255) NOT NULL,
  `s_meta_keyword` varchar(255) NOT NULL,
  `s_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `secondary_service`
--

INSERT INTO `secondary_service` (`s_id`, `s_title`, `s_image`, `s_desc`, `s_meta_title`, `s_meta_keyword`, `s_meta_description_desc`) VALUES
(117, 'Secondary Services', 'uploads/secondary_service/file_61dd1c017a8fa1641880577.jpg', 'Secondary Services: Our secondary services have\r\n\r\nPlant to distributor point.\r\nDistributor to further stockiest & retailers.\r\nWarehouse to various remote location & on site delivery.\r\nIntra circle & state transportation.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `s_id` int(11) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `s_image` varchar(255) NOT NULL,
  `s_desc` text NOT NULL,
  `s_meta_title` varchar(255) NOT NULL,
  `s_meta_keyword` varchar(255) NOT NULL,
  `s_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`s_id`, `s_title`, `s_image`, `s_desc`, `s_meta_title`, `s_meta_keyword`, `s_meta_description_desc`) VALUES
(117, 'Security', 'uploads/security/file_61dd1049367321641877577.jpg', 'Security is an essential thing for warehouse management to ensure the safety of goods stored in warehouse. We offer a wide range of security solutions in terms of technical and Human Resource perspectives. Our security services include CCTV Cameras, Protected Softwares, and Security Personnel.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `s_id` int(11) NOT NULL,
  `service_name` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`s_id`, `service_name`, `created_date`) VALUES
(1, 'Warehouse', '2021-12-21 13:28:39'),
(2, 'Land', '2021-12-21 13:28:39'),
(3, 'Manpower', '2021-12-28 15:28:16'),
(4, 'Material Handling', '2021-12-28 15:28:16'),
(5, 'Technology', '2021-12-28 15:28:59'),
(6, 'Distribution Service', '2021-12-28 15:28:59'),
(7, 'Storage', '2021-12-28 15:29:07'),
(8, '3PL', '2021-12-29 12:49:11'),
(9, 'Waste Management', '2021-12-30 23:53:29');

-- --------------------------------------------------------

--
-- Table structure for table `shed`
--

CREATE TABLE `shed` (
  `s_id` int(11) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `s_image` varchar(255) NOT NULL,
  `s_desc` text NOT NULL,
  `s_meta_title` varchar(255) NOT NULL,
  `s_meta_keyword` varchar(255) NOT NULL,
  `s_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shed`
--

INSERT INTO `shed` (`s_id`, `s_title`, `s_image`, `s_desc`, `s_meta_title`, `s_meta_keyword`, `s_meta_description_desc`) VALUES
(118, 'Shed', 'uploads/shed/file_61dc38283960a1641822248.jpg', '<p>The roof is equivalently important for the building like a foundation to provide security. We provide good quality stainless steel shed for roofing purposes for the warehouse. Our shed is strong and rustproof and lasts for a long time. We offer premium quality sheds at a genuine price.</p>\r\n', 'meta title', 'meta keyword', '<p>meta description</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `s_id` int(11) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `s_image` varchar(255) NOT NULL,
  `s_desc` text NOT NULL,
  `s_meta_title` varchar(255) NOT NULL,
  `s_meta_keyword` varchar(255) NOT NULL,
  `s_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`s_id`, `s_title`, `s_image`, `s_desc`, `s_meta_title`, `s_meta_keyword`, `s_meta_description_desc`) VALUES
(117, 'Software', 'uploads/software/file_61dd1714d679b1641879316.jpg', 'Warehousing management system (WMS) : WMS is the software solution through which we check the visibility into a business’s entire inventory and manage supply chain fulfillment operations from the distribution centre to the store shelf. By WMS we additionally enable companies to maximize their labour and space utilization and equipment investments by coordinating and optimizing resource usage and material flows. We use WMS to support the needs of an entire supply chain, including distribution, manufacturing, asset-intensive, and service businesses.\r\n\r\nInventory management system : we use the inventory management system for  the process by which we track your goods throughout your entire supply chain, from purchasing to production to end sales. It is what helps us governs how you approach inventory management for your business.\r\n\r\nInventory management software: The software system we use for tracking inventory levels, orders, sales and deliveries', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stackers`
--

CREATE TABLE `stackers` (
  `s_id` int(11) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `s_image` varchar(255) NOT NULL,
  `s_desc` text NOT NULL,
  `s_meta_title` varchar(255) NOT NULL,
  `s_meta_keyword` varchar(255) NOT NULL,
  `s_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stackers`
--

INSERT INTO `stackers` (`s_id`, `s_title`, `s_image`, `s_desc`, `s_meta_title`, `s_meta_keyword`, `s_meta_description_desc`) VALUES
(117, 'Stackers', 'uploads/stackers/file_61dd147a1d9e31641878650.png', 'A warehouse stacker, which is a specialized gadget for lifting and moving pallets around a warehouse, is also available. They\'re perfect for small warehouses where workers need to load things onto racks for storage or into cars for transport. We also provide premium quality stackers contributing to the efficient management of a warehouse.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `s_id` int(11) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `s_image` varchar(255) NOT NULL,
  `s_desc` text NOT NULL,
  `s_meta_title` varchar(255) NOT NULL,
  `s_meta_keyword` varchar(255) NOT NULL,
  `s_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`s_id`, `s_title`, `s_image`, `s_desc`, `s_meta_title`, `s_meta_keyword`, `s_meta_description_desc`) VALUES
(117, 'Storage', 'uploads/storage/file_61de8235d6d2d1641972277.jpg', '<p>At Letusstore storage is one of the most essential components and that is what helps us in smooth functioning. Our warehouse facility is a safe storage option in Delhi , with Delhi being the hub of many big companies helps our clients with easy trading and also save a business a Great Deal of Money.</p>\r\n\r\n<p>We have a cold storage unit too that lowers the deterioration rate of perishable products.</p>\r\n\r\n<p>For safe storage we have services like</p>\r\n\r\n<p>Pickup from Door Step<br />\r\nFire management<br />\r\nCCTV observance<br />\r\n24/7 Security ,etc.</p>\r\n', '', '', ''),
(118, 'Private Rooms', '', '<p>Inventory management system Our private self-storage rooms are positioned in prime area , they offer safety, security, and cleanliness. Our Self-storage private rooms are best for all your business storage requirements.</p>\r\n', '', '', ''),
(119, 'Box Stroges', '', '<p>We offer self-storage wooden boxes, seaworthy packing boxes, Cargo boxes, Heavy Machinery Packaging boxes,etc .</p>\r\n', '', '', ''),
(120, 'Utility Lockers', '', '<p>For the ultimate safety and protection of your belongings trust our Utility lockers. The sturdy cabinets are built with steel and have ideal space.</p>\r\n', '', '', ''),
(121, 'Document Storage', '', '<p>Our document management speeds the retrieval and access of paper documents so that staff can answer questions faster and warehouse inventory can move quicker. &nbsp;With our document storage, you can restrict access as necessary and often find out who has viewed or modified a document at any time.</p>\r\n', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `s_id` int(11) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `s_image` varchar(255) NOT NULL,
  `s_desc` text NOT NULL,
  `s_meta_title` varchar(255) NOT NULL,
  `s_meta_keyword` varchar(255) NOT NULL,
  `s_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`s_id`, `s_title`, `s_image`, `s_desc`, `s_meta_title`, `s_meta_keyword`, `s_meta_description_desc`) VALUES
(117, 'Supervisors ', 'uploads/supervisor/file_61dd10c245faa1641877698.jpg', 'Supervisors are also available who are important to achieve high levels of customer satisfaction by receiving, identifying, dispatching, and guaranteeing the quality of items.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_products`
--

CREATE TABLE `supplier_products` (
  `sp_id` int(11) NOT NULL,
  `sp_user_id` int(11) DEFAULT NULL,
  `sp_name` varchar(255) DEFAULT NULL,
  `sp_type` varchar(255) DEFAULT NULL,
  `sp_price` varchar(255) DEFAULT NULL,
  `sp_image` varchar(255) DEFAULT NULL,
  `sp_desc` text,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier_products`
--

INSERT INTO `supplier_products` (`sp_id`, `sp_user_id`, `sp_name`, `sp_type`, `sp_price`, `sp_image`, `sp_desc`, `created_date`) VALUES
(3, 20, 'Almirah 2', 'sale', '343', 'uploads/supplier_products/file_61c5966edd8891640339054.jpg', '<p>sds</p>\r\n', '2021-12-24 15:14:14'),
(4, 20, 'Almirah 2', 'sale', '343', 'uploads/supplier_products/file_61c98eade51401640599213.jpg', '<p>sds</p>\r\n', '2021-12-24 15:14:39'),
(5, 20, 'Almirah', 'rent', '34', 'uploads/supplier_products/file_61c59866846841640339558.jpg', '<p>s</p>\r\n', '2021-12-24 15:14:55'),
(6, 20, 'Almirah', 'rent', '34', 'uploads/supplier_products/file_61c59873cdb431640339571.jpg', '<p>s</p>\r\n', '2021-12-24 15:15:03'),
(8, 20, 'Single Bed', 'warehouse', '2324', 'uploads/supplier_products/file_61c98a4d92b261640598093.jpg', '<p>This is the single bed description</p>\r\n', '2021-12-27 15:11:33'),
(9, 20, 'Single Bed', 'warehouse', '2324', 'uploads/supplier_products/file_61c98a71e58781640598129.jpg', '<p>This is the single bed description</p>\r\n', '2021-12-27 15:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE `technology` (
  `t_id` int(11) NOT NULL,
  `t_title` varchar(255) NOT NULL,
  `t_image` varchar(255) NOT NULL,
  `t_desc` text NOT NULL,
  `t_meta_title` varchar(255) NOT NULL,
  `t_meta_keyword` varchar(255) NOT NULL,
  `t_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`t_id`, `t_title`, `t_image`, `t_desc`, `t_meta_title`, `t_meta_keyword`, `t_meta_description_desc`) VALUES
(117, 'Technology', 'uploads/technology/file_61dd166fa606c1641879151.jpg', 'At Letusstore we use the following software and hardware technologies to assure smooth functioning and  organise warehouses more efficiently', '', '', ''),
(118, 'Software', '', 'Warehousing management system (WMS): WMS is the software solution through which we check the visibility into a business’s entire inventory and manage supply chain fulfillment operations from the distribution centre to the store shelf. By WMS we additionally enable companies to maximize their labour and space utilization and equipment investments by coordinating and optimizing resource usage and material flows. We use WMS to support the needs of an entire supply chain, including distribution, manufacturing, asset-intensive, and service businesses.\r\n\r\nInventory management system : we use the inventory management system for  the process by which we track your goods throughout your entire supply chain, from purchasing to production to end sales. It is what helps us governs how you approach inventory management for your business.\r\n\r\nInventory management software: The software system we use for tracking inventory levels, orders, sales and deliveries', '', '', ''),
(119, 'Hardware', '', 'Last mile delivery : We track a product\'s journey from a warehouse to the doorstep of the endcustomer, and this last step of the delivery process is most critical and well managed for the speedy shipping.\r\n\r\nThese technologies are easy to run live websites with varying stock levels and help plan for stock replenishment. Through these technologies, we can help you accurately forecast the demand.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `tac_id` int(11) NOT NULL,
  `tac_title` varchar(255) NOT NULL,
  `tac_image` varchar(255) NOT NULL,
  `tac_desc` text NOT NULL,
  `tac_meta_title` varchar(255) NOT NULL,
  `tac_meta_keyword` varchar(255) NOT NULL,
  `tac_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `terms_and_conditions`
--

INSERT INTO `terms_and_conditions` (`tac_id`, `tac_title`, `tac_image`, `tac_desc`, `tac_meta_title`, `tac_meta_keyword`, `tac_meta_description_desc`) VALUES
(68, 'Preface', '', '<p>Letsusstore company deals in logistics. While accessing this website, users must understand and accept the terms and the conditions of company which gets revised with time and website itself reserves all the rights to change terms and conditions without any prior information and it is up to the users to look for the changes.<br />\r\n&nbsp;</p>\r\n', '', '', ''),
(69, 'T&Cs', '', '<p><strong>Rights of Company Holders</strong><br />\r\nThe company will not allow any outsider to do any kind of alteration and manipulation. Letsusstore has been copyrighted by law in order to comply with all its rules properly. Whatever be the rules or copyright in this website, everything is licensed by the company. Whatever changes or promotions happen in this website are done by the company itself. The company has also kept its rights with itself. Letsusstore reserves all rights in its own right which cannot be tampered with or changed by any outsider.<br />\r\n&nbsp;</p>\r\n', '', '', ''),
(70, 'Clause', '', '<p>On Letsusstore website you will find information related to warehouse and logistics services. This company is very clear about all its clauses from day one. All types of information is available on website. Only after being satisfied according to your need, you can take further action.<br />\r\nThe most important thing about this company is that whatever information is given here by the consumer. This type of work done is a positive step for a better future of any company. But on the basis of information, no legal decisions can be done. The right of any kind of action will come under the jurisdiction of the company only. This company is a registered trademark company. Company holders has all type of decisions like&hellip; trademarks, company names or logos, product name or any other type of decisions or changes.<br />\r\nThe company will not be responsible for damage of any kind.<br />\r\nIf the company feels that some changes should be made in the company, then the company can do it without any permission.<br />\r\nEven if any law comes into force, it will be decided by the Delhi Jurisdiction, which will be the final decision and the same will be valid, the decision of any other jurisdiction will not be valid.<br />\r\n&nbsp;</p>\r\n', '', '', ''),
(71, 'Approach', '', '<p>If you approach the company through our website, we will contact you via mail. When you are satisfied with everything about the company in every way, then further action is taken in writing.<br />\r\n&nbsp;</p>\r\n', '', '', ''),
(72, 'Website Recommendation, User Reviews and User Generated Content', '', '<p>Since this company has taken the copyright of every method. Company has the right that it can make any user&rsquo;s review for the promotion of the company. It comes under the jurisdiction of the company, for which the company does not need to give any clarification to anyone. But along with this, one more right has been kept by the company &nbsp;that if anyone has written anything on its website which is not beneficial for the company, then the company has the right to punish it. The company has not given this right to anyone.&nbsp;<br />\r\n&nbsp;</p>\r\n', '', '', ''),
(73, 'Privacy Policy', '', '<p>Customer information will be used to provide information such as delivery status of the product and to update the customer through e- mails, sms . And service provider will get the feedback from the customer about their satisfaction and experience regarding to service provider. If you are interested and want to get more information then please visit our website&hellip;.<br />\r\n&nbsp;</p>\r\n', '', '', ''),
(74, 'Cookie Policy', '', '<p>We use cookies on our website for analytics and advertising purpose, it helps us improve the functionality and user experience. By accepting this message, you consent to our cookie policy on this device unless you decline it.<br />\r\n&nbsp;</p>\r\n', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `three_pl`
--

CREATE TABLE `three_pl` (
  `t_id` int(11) NOT NULL,
  `t_title` varchar(255) NOT NULL,
  `t_image` varchar(255) NOT NULL,
  `t_desc` longtext NOT NULL,
  `t_meta_title` varchar(255) NOT NULL,
  `t_meta_keyword` varchar(255) NOT NULL,
  `t_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `three_pl`
--

INSERT INTO `three_pl` (`t_id`, `t_title`, `t_image`, `t_desc`, `t_meta_title`, `t_meta_keyword`, `t_meta_description_desc`) VALUES
(117, 'Land', 'uploads/three_pl/file_61dc3a7cbf0a51641822844.jpg', 'We are a well-developed Third-party logistics business with a specialization in many industries, operations (such as groupage transport, warehousing, and parcel distribution), and geographic locations. Furthermore, our knowledgeable team advises both big and small businesses on how to reduce the expenses of managing supply chains in the Indian market.\r\n\r\nOur logistics company has a large member base, years of expertise, and an in-depth understanding of Indian logistics, we are here to help and assist you in all your logistics needs. Letsusstore provides the greatest logistical supply chain solutions for your company, regardless of what industry you operate in or what product or service you provide.\r\n\r\nWe are a reputable Indian logistics company that offers the finest 3pl logistics services, such as Live Tracking & Notifications (customers can monitor their products at any time), First, Middle, and Last-Mile Delivery (customers can track their packages at any time), and Multi-modal segments that are seamlessly connected, LTL and Truckload transportation designed for maximum asset utilization, and many other services that benefit you.\r\n\r\nOur transportation network provides a variety of products transportation services, such as general and priority package delivery, courier, and full-truckload services.\r\n\r\nWe commit to adapt to new developments throughout time in order to meet changing client demands and to do everything we can to give them an amazing service experience. We make sure that our logistics are supported by advanced analytics, smart technology, and lean operations, and that every shipment is carefully tracked and delivered.', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_company_name` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_vendor_type` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_country` varchar(255) DEFAULT NULL,
  `user_mobile` varchar(255) DEFAULT NULL,
  `user_session_key` varchar(255) DEFAULT NULL,
  `user_remember_me_token` varchar(255) DEFAULT NULL,
  `user_public_ip` varchar(255) DEFAULT NULL,
  `user_lockscreen` tinyint(1) DEFAULT '0' COMMENT '0 - false, 1- true',
  `user_img` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_company_name`, `user_name`, `user_password`, `user_vendor_type`, `user_email`, `user_country`, `user_mobile`, `user_session_key`, `user_remember_me_token`, `user_public_ip`, `user_lockscreen`, `user_img`, `created_date`) VALUES
(20, 'Xcrino Pvt Ltd', 'Puhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Supplier', 'puhupwasbind301@gmail.com', 'United States of America', '2809824', NULL, NULL, NULL, 0, NULL, '2021-12-27 13:33:01'),
(24, 'Xcrino Pvt Ltd', 'Puhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Agent', 'puhupwasnewagent@gmail.com', 'United States of America', '3423423', NULL, NULL, NULL, 0, NULL, '2021-12-27 13:33:01'),
(25, 'Xcrino Pvt Ltd', 'Puhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Customer', 'puhupwasnewcustomer@gmail.com', 'United Kingdom', '98423', NULL, NULL, NULL, 0, NULL, '2021-12-27 13:33:01'),
(26, 'Xcrino Pvt Ltd', 'Neeraj', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Customer', 'neeraj@gmail.com', NULL, '234234234', NULL, NULL, NULL, 0, NULL, '2021-12-27 13:33:01'),
(27, 'Xcrino Pvt Ltd', 'Puhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'puhupwasnewinvestor@gmail.com', NULL, '49237494', NULL, NULL, NULL, 0, NULL, '2021-12-27 13:33:01'),
(28, 'Xcrino Pvt Ltd', 'Puhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'puhupwasnewinvestor2@gmail.com', NULL, '2342443', NULL, NULL, NULL, 0, NULL, '2021-12-27 13:33:01'),
(29, 'Xcrino Pvt Ltd', 'Puhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'puhupwasnewinvestor4@gmail.com', NULL, '2342', NULL, NULL, NULL, 0, NULL, '2021-12-27 13:33:01'),
(30, 'Xcrino Pvt Ltd', 'Puhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'puhupwasnewinvestor5@gmail.com', NULL, '234', NULL, NULL, NULL, 0, NULL, '2021-12-27 13:33:01'),
(31, 'Xcrino Pvt Ltd', 'Puhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'puhupwasnewnvestor6@gmail.com', NULL, '34', NULL, NULL, NULL, 0, NULL, '2021-12-27 13:33:01'),
(32, 'Xcrino Pvt Ltd', 'Puhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'puhupwasnewinvestor7@gmail.com', NULL, '234', NULL, NULL, NULL, 0, NULL, '2021-12-27 13:33:01'),
(33, 'Xcrino Pvt Ltd', 'Puhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'puhupwasnewcustomer2@gmail.com', NULL, '7657', NULL, NULL, NULL, 0, NULL, '2021-12-27 13:33:01'),
(34, 'Xcrino Pvt Ltd', 'Puhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'puhupwasnewcustomer3@gmail.com', NULL, '7657', NULL, NULL, NULL, 0, NULL, '2021-12-27 13:33:01'),
(43, 'Infosys Pvt Limited', 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'spuhupwasnew@gmail.com', NULL, '2342342', NULL, NULL, NULL, 0, NULL, '2021-12-29 16:38:00'),
(44, 'Infosys Pvt Limited', 'PUhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'puhupwasinvesttor23@gmailcom', NULL, '2342342', NULL, NULL, NULL, 0, NULL, '2021-12-29 16:50:30'),
(45, 'Infosys Pvt Limited', 'PUhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'pushupwasinvesttor23@gmailcom', NULL, '2342342', NULL, NULL, NULL, 0, NULL, '2021-12-29 16:51:00'),
(46, 'Google ltd', 'Puhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'psfdfuhupwasnew@gmail.com', NULL, '345454353', NULL, NULL, NULL, 0, NULL, '2021-12-29 16:53:20'),
(47, 'Google ltd', 'Puhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'dpsfdfuhupwasnew@gmail.com', NULL, '345454353', NULL, NULL, NULL, 0, NULL, '2021-12-29 16:56:00'),
(48, 'Infosys Pvt Limited', 'Neeraj', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'neerajinvestor@gmail.com', NULL, '234324', NULL, NULL, NULL, 0, NULL, '2021-12-29 16:57:36'),
(49, 'Infosys Pvt Limited', 'Neeraj', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Customer', 'neerajincust@gmail.com', NULL, '234324', NULL, NULL, NULL, 0, NULL, '2021-12-29 16:58:08'),
(50, 'Infosys Pvt Limited', 'Neeraj', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Supplier', 'neerajidncust@gmail.com', NULL, '234324', NULL, NULL, NULL, 0, NULL, '2021-12-29 16:58:51'),
(51, 'LPO', 'PUhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Customer', 'asdf@gamil.com', NULL, '7979', NULL, NULL, NULL, 0, NULL, '2021-12-29 17:28:26'),
(52, 'LPO', 'asdf', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Customer', 'asfdfjl@gmail.com', NULL, '72749224', NULL, NULL, NULL, 0, NULL, '2021-12-29 17:29:40'),
(53, 'xcrind', 'Puhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Customer', 'puhupwascu@gmail.com', NULL, '24792847', NULL, NULL, NULL, 0, NULL, '2021-12-29 17:33:12'),
(54, 'xljdl', 'dlfj', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'sd@gad', NULL, '2423423', NULL, NULL, NULL, 0, NULL, '2021-12-29 17:35:06'),
(55, 'XYZ', 'Puhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'puhupwasbind30112@gmail.com', NULL, '2423432', NULL, NULL, NULL, 0, NULL, '2022-01-01 15:03:54'),
(56, 'Xcrino Pvt Ltd', 'Puhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'puhupwasnew2@gmail.com', NULL, '757657', NULL, NULL, NULL, 0, NULL, '2022-01-08 10:38:09'),
(57, 'Xcrino Pvt Ltd', 'Puhupwas', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Investor', 'puhupwa5snew2@gmail.com', NULL, '757657', NULL, NULL, NULL, 0, NULL, '2022-01-08 10:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_contact_details`
--

CREATE TABLE `user_contact_details` (
  `ucd_id` int(11) NOT NULL,
  `ucd_name` varchar(255) DEFAULT NULL,
  `ucd_storage` varchar(255) DEFAULT NULL,
  `ucd_number` varchar(255) DEFAULT NULL,
  `ucd_email` varchar(255) NOT NULL,
  `ucd_storage_list` varchar(255) NOT NULL,
  `ucd_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_contact_details`
--

INSERT INTO `user_contact_details` (`ucd_id`, `ucd_name`, `ucd_storage`, `ucd_number`, `ucd_email`, `ucd_storage_list`, `ucd_created_date`) VALUES
(2, 'Puhupwas', 'option2', '196149894', 'puhupwas@gmail@mailG.com', 'asdf', '2021-08-10 16:56:43'),
(3, 'puhupwas', 'option2', '8510062896', 'puhupwasbind301@lfjdslf', 'lsjdflsflsdafsfs', '2021-08-10 18:08:18'),
(4, 'puhupwas', 'option2', '8510062896', 'puhupwasbind301@lfjdslf', 'lsjdflsflsdafsfs', '2021-08-10 18:10:20'),
(5, 'Puhupwas', 'option2', '196149894', 'puhupwas@gmail@mailG.com', 'sadffsadfasdf sfsdfsdf', '2021-08-10 18:11:01'),
(6, 'asdfjlsfjsl', 'option2', '8516166446', 'puhupwasdeveloper@gmail.com', 'aslfsdlfjsdflsdafsdfs', '2021-08-10 18:22:13'),
(7, 'Puhupwas', 'option2', '196149894', 'puhupwas@gmail@mailG.com', 'asdfsdafsa', '2021-08-10 18:27:38'),
(8, 'phupwasffljl', 'option2', '9465164646', 'puhupwas@gmail@mailG.com', 'slfjsadlf lsjdflsdaslj lsdf', '2021-08-10 18:29:18'),
(9, 'phupwasffljl', 'option2', '9465164646', 'puhupwas@gmail@mailG.com', 'slfjsadlf lsjdflsdaslj lsdf', '2021-08-10 18:37:06'),
(10, 'phupwasffljl', 'option2', '9465164646', 'puhupwas@gmail@mailG.com', 'slfjsadlf lsjdflsdaslj lsdf', '2021-08-10 18:37:48'),
(11, 'phupwasffljl', 'option2', '9465164646', 'puhupwas@gmail@mailG.com', 'slfjsadlf lsjdflsdaslj lsdf', '2021-08-10 18:39:04'),
(12, 'phupwasffljl', 'option2', '9465164646', 'puhupwas@gmail@mailG.com', 'slfjsadlf lsjdflsdaslj lsdf', '2021-08-10 18:50:10'),
(13, 'phupwasffljl', 'option2', '9465164646', 'puhupwas@gmail@mailG.com', 'asdfsd sfsdds sadfdfsdfas', '2021-08-10 18:50:19'),
(14, 'puhupwas', 'option2', '9465164646', 'puhupwasdeveloper@gmail.com', 'asdfsd sfsdds sadfdfsdfas', '2021-08-10 18:51:16'),
(15, 'puhupwas', 'option2', '9465164646', 'puhupwasdeveloper@gmail.com', 'asdfsd sfsdds sadfdfsdfas', '2021-08-10 18:53:41'),
(16, 'Puhupwas', 'option2', '9213791237912', 'puhupwasdeveloper@gmail.com', 'let us store list', '2021-08-10 18:54:42'),
(17, 'Puhupwas', 'option2', '196149894', 'puhupwasdeveloper@gmail.com', 'asdfsda sfsdfsdfsd', '2021-08-10 18:56:13'),
(18, 'Puhupwas', 'option2', '196149894', 'puhupwasdeveloper@gmail.com', 'asdfsda sfsdfsdfsd', '2021-08-10 18:59:19'),
(19, 'Puhupwas', 'option2', '196149894', 'puhupwasdeveloper@gmail.com', 'asdfsda sfsdfsdfsd', '2021-08-10 19:04:50'),
(20, 'Puhupwas', 'option2', '496465465', 'puhupwasdeveloper@gmail.com', 'lsdjdfls lsadfljsdlfjsdfsdfsd ', '2021-08-10 19:05:10'),
(21, 'Puhupwas', 'option2', '196149894', 'puhupwasdeveloper@gmail.com', 'sladfj saldfjlsdsa sadlfjls jsafsd dfs', '2021-08-10 19:05:53'),
(22, 'Puhupwas', 'option2', '196149894', 'puhupwasdeveloper@gmail.com', 'sladfj saldfjlsdsa sadlfjls jsafsd dfs', '2021-08-10 19:09:53'),
(23, 'let us store', 'option2', '196149894', 'puhupwasdeveloper@gmail.com', 'sladfj saldfjlsdsa sadlfjls jsafsd dfs', '2021-08-10 19:10:25'),
(24, 'Puhupwas', 'option1', '196149894', 'puhupwasdeveloper@gmail.com', 'Storage 1 , Storage 2, Storage 3', '2021-08-10 19:11:52'),
(25, 'Puhupwas', 'option1', '85131321466', 'puhupwasdeveloper@gmail.com', 'sdljf asldfjl slfjsdlf ', '2021-08-10 19:32:04'),
(26, 'Puhupwas', 'option1', '98789165464', 'puhupwasdeveloper@gmail.com', 'fljsad assfljlf safldjflsad sdflsdlfsda', '2021-08-11 11:23:39'),
(27, 'Puhupwas', 'option1', '196149894', 'puhupwasdeveloper@gmail.com', 'sdlfj assddflj ssdlafj sadlfj ssf', '2021-08-11 11:30:44'),
(28, 'Puhupwas', 'option2', '196149894', 'puhupwasdeveloper@gmail.com', 'aslfjsl lsajfl asddlfj lasdf jsdlfsf', '2021-08-11 11:36:09'),
(29, 'Puhupwas', 'option2', '656546546', 'puhupwasdeveloper@gmail.com', 'ldffjs lsdjfl sdldfjl ddff', '2021-08-11 15:29:24'),
(30, 'Puhupwas', 'option1', '4985161', 'puhupwasdeveloper@gmail.com', 'sfsdf sdfsd sdfdfsdfsa sfdf', '2021-08-11 15:30:44'),
(31, 'Puhupwas', 'option1', '4985161', 'puhupwasdeveloper@gmail.com', 'sdfs ssfdsfsd sfsdf dff', '2021-08-11 15:31:10'),
(32, 'Puhupwas', 'option1', '984614616', 'puhupwasdeveloper@gmail.com', 'sdlf sadflj asdflsadj', '2021-08-11 15:44:24'),
(33, 'Puhupwas', 'option1', '6765654', 'puhupwasdeveloper@gmail.com', 'aslddfj slddfj dfas', '2021-08-11 15:49:13'),
(34, 'Test', 'option1', '+918009610334', 'puhupwasdeveloper@gmail.com', 'asf slfjds sddfsd sdf', '2021-08-11 15:51:38'),
(35, 'Test', 'option1', '+918009610334', 'puhupwasdeveloper@gmail.com', 'asf slfjds sddfsd sdf', '2021-08-11 15:53:19'),
(36, 'Test', 'option1', '+918009610334', 'puhupwasdeveloper@gmail.com', 'asdlfjsf asdlfjfs sfsldaj sadfsd', '2021-08-11 15:53:39'),
(37, 'Test', 'option1', '+918009610334', 'puhupwasdeveloper@gmail.com', 'asdlfjsf asdlfjfs sfsldaj sadfsd', '2021-08-11 15:55:48'),
(38, 'Puhupwas', 'option1', '196149894', 'puhupwasdeveloper@gmail.com', 'asaslfjsa sldfjsl asdfljdfsad saddf', '2021-08-11 15:56:14'),
(39, 'Puhupwas', 'option1', '196149894', 'puhupwasdeveloper@gmail.com', 'asaslfjsa sldfjsl asdfljdfsad saddf', '2021-08-11 15:57:23'),
(40, 'Test', 'option2', '+918009610334', 'puhupwasdeveloper@gmail.com', 'afljsd sljf sddfl sdf ljsdf sldjf dflsdd ddls', '2021-08-11 15:58:05'),
(41, 'PUhupwas', 'option2', '1232132131', 'puhupwasdeveloper@gmail.com', 'sflj slfjl slddfjsd fsdf', '2021-08-11 16:10:51'),
(42, 'Puhupwas', 'option2', '12321321321', 'puhupwasdeveloper@gmail.com', 'dsddflfj sdfljf sadfsd sdfd', '2021-08-11 16:12:14'),
(43, 'Puhupwas', 'option2', '12321321321', 'puhupwasdeveloper@gmail.com', 'dsddflfj sdfljf sadfsd sdfd', '2021-08-11 16:13:07'),
(44, 'Puhupwas', 'option2', '12321321321', 'puhupwasdeveloper@gmail.com', 'dsddflfj sdfljf sadfsd sdfd', '2021-08-11 16:13:29'),
(45, 'Puhupwas ', 'option2', '8465465465', 'puhupwasbind301@gmail.com', 'asdf saflsaj sadfsd', '2021-08-11 16:13:57'),
(46, 'Puhupwas', NULL, '464646546', 'puhupwasdeveloper@gmail.com', 'ljsadl sadfljsld sadf', '2021-08-11 16:15:22'),
(47, 'Test', 'option2', '+918009610334', 'puhupwasdeveloper@gmail.com', 'sfsdd sasdfsdaf sadsfsdafsda ', '2021-08-11 16:26:54'),
(48, 'Test', 'option1', '+918009610334', 'puhupwasdeveloper@gmail.com', 'sfsdasa safsda sadfsdf asfsa', '2021-08-11 16:31:03'),
(49, 'Puhupwas', 'option1', '196149894', 'puhupwasdeveloper@gmail.com', 'aslfsd saddfljsda asdfsd sadfsd sadf', '2021-08-11 16:31:51'),
(50, 'Test', NULL, '+918009610334', 'puhupwasdeveloper@gmail.com', 'slfd sdflj dsfds sfds sdf', '2021-08-11 16:32:44'),
(51, 'Test', 'option1', '+918009610334', 'puhupwasdeveloper@gmail.com', 'safsdfasdf', '2021-08-11 16:36:22'),
(52, 'Test', 'option1', '+918009610334', 'puhupwasdeveloper@gmail.com', ' 846 464 6464 ', '2021-08-11 19:03:08'),
(53, 'Test', 'option1', '+918009610334', 'puhupwasbind301@gmail.com', 'salfjsldafsadf', '2021-08-11 19:09:56'),
(54, 'Test', 'option2', '+918009610334', 'test@gmail.com', 'sf', '2021-08-11 19:12:36'),
(55, 'Test', 'option1', '+918009610334', 'test@gmail.com', 'asdfsd sfsdds sadfdfsdfas', '2021-08-11 19:13:34'),
(56, 'Puhupwas', 'option2', '455454664', 'puhupwasbind301@gmail.com', 'sdfdsfsdsd sdffsd', '2021-08-11 22:53:49'),
(57, 'Puhupwas', 'option2', '455454664', 'puhupwasbind301@gmail.com', 'sdfdsfsdsd sdffsd', '2021-08-11 22:56:03'),
(58, 'Puhupwas', 'option1', '23424232342', 'puhupwasbind301@gmail.com', 'sdfdsf', '2021-08-11 23:01:14'),
(59, 'Puhupwas', 'option1', '23424232342', 'puhupwasbind301@gmail.com', 'sdfdsf', '2021-08-11 23:04:28'),
(60, 'guh', 'option1', '23424232342', 'admin@mail.com', 'ftygy7', '2021-08-11 23:06:04'),
(61, 'warping machine 2 gas cylinder', 'option1', '23424232342', 'puhupwsasbind301@gmail.com', 'dsfsdf fd', '2021-08-11 23:07:13'),
(62, 'PuhupwasNeeraj', 'option1', '23424232342', 'puhupwsasbind301@gmail.com', 'sdf asddfsf sfs dsfdsf ', '2021-08-11 23:54:55'),
(63, 'Puhupwas', 'option1', 'ads', 'sdf', 'sdf', '2021-08-11 23:58:34'),
(64, 'Puhupwas', 'option1', '23424232342', 'patanjaybind@gmail.com', 'sdf', '2021-08-11 23:59:44'),
(65, 'Puhupwas', 'option1', '23424232342', 'root@gmail.com', 'dsgdf dfg dsfgd dfg', '2021-08-12 00:04:07'),
(66, 'Puhupwas', 'option1', '23424232342', 'sonu@gmail.com', 'sdffgh gfghf ', '2021-08-12 00:11:57'),
(67, 'Puhupwas', 'option1', '23424232342', 'sonu@gmail.com', 'sdffgh gfghf ', '2021-08-12 00:13:48'),
(68, 'puhup', 'option2', '23424232342', 'puhupwasbind301@gmail.com', 'df', '2021-08-12 00:14:15'),
(69, 'sdf', NULL, '', 'sdf', 'sdf', '2021-08-12 00:16:27'),
(70, 'warping machine 2 gas cylinder', 'option1', '23424232342', 'dsf', 'sdf', '2021-08-12 00:34:39'),
(71, 'Puhupwas Neeraj', 'option1', '3223432 ', 'puhupwasbind301@gmail.com', 'sdfsdfdsf', '2021-08-12 00:49:35'),
(72, 'puhup', 'option2', '23432', 'sonu@gmail.com', 'dsfds sdf sdfsdf', '2021-08-12 00:55:49'),
(73, 'Sonu', 'option2', '123123213', 'puhupwasdeveloper@gmail.com', 'fsdjl sdfds dsf', '2021-08-12 01:01:40'),
(74, 'Patanjay', 'option1', '34232342', 'patanjaybind@gmail.com', 'sdfdsf', '2021-08-12 01:04:33'),
(75, 'Sonu', 'option2', '2321321321', 'sonu@gmail.com', 'sdlfj sdfdsfs', '2021-08-12 01:11:23'),
(76, 'Puhupwas', 'option2', '4564654646', 'puhupwasdeveloper@gmail.com', 'sddfsdf sdfds sdf', '2021-08-13 00:14:32'),
(77, 'Puhupwas', 'option2', '4564654646', 'puhupwasdeveloper@gmail.com', 'sddfsdf sdfds sdf', '2021-08-13 00:15:54'),
(78, 'Puhupwas', 'option2', '4564654646', 'puhupwasdeveloper@gmail.com', 'sddfsdf sdfds sdf', '2021-08-13 00:17:56'),
(79, 'Puhupwas', 'option2', '4564654646', 'puhupwasdeveloper@gmail.com', 'sddfsdf sdfds sdf', '2021-08-13 00:18:05'),
(80, 'Puhupwas', 'option2', '4564654646', 'puhupwasdeveloper@gmail.com', 'sddfsdf sdfds sdf', '2021-08-13 00:22:20'),
(81, 'Puhupwas', 'option2', '4564654646', 'puhupwasdeveloper@gmail.com', 'sddfsdf sdfds sdf', '2021-08-13 00:26:54'),
(82, 'Puhupwas', 'option2', '4564654646', 'puhupwasdeveloper@gmail.com', 'sddfsdf sdfds sdf', '2021-08-13 00:27:26'),
(83, 'Puhupwas', 'option2', '4564654646', 'puhupwasdeveloper@gmail.com', 'sddfsdf sdfds sdf', '2021-08-13 00:29:45'),
(84, 'Puhupwas', 'option2', '64564564', 'puhupwasbind301@gmail.com', 'sdfd dfdsf dsf', '2021-08-13 00:39:24'),
(85, 'Puhupwas', 'option2', '64564564', 'puhupwasbind301@gmail.com', 'sdfd dfdsf dsf', '2021-08-13 00:53:24'),
(86, 'Puhupwas', 'option2', '64564564', 'puhupwasbind301@gmail.com', 'sdfd dfdsf dsf', '2021-08-13 00:53:43'),
(87, 'Puhupwas', 'option2', '64564564', 'puhupwasbind301@gmail.com', 'sdfd dfdsf dsf', '2021-08-13 00:56:39'),
(88, 'Puhupwas', 'option2', '64564564', 'puhupwasbind301@gmail.com', 'sdfd dfdsf dsf', '2021-08-13 01:00:47'),
(89, 'Puhupwas', 'option2', '64564564', 'puhupwasbind301@gmail.com', 'sdfd dfdsf dsf', '2021-08-13 01:02:23'),
(90, 'Puhupwas', 'option2', '64564564', 'puhupwasbind301@gmail.com', 'sdfd dfdsf dsf', '2021-08-13 01:03:41'),
(91, 'Puhupwas', 'option2', '64564564', 'puhupwasbind301@gmail.com', 'sdfd dfdsf dsf', '2021-08-13 01:05:37'),
(92, 'Puhupwas', 'option2', '64564564', 'puhupwasbind301@gmail.com', 'sdfd dfdsf dsf', '2021-08-13 01:07:10'),
(93, 'Puhupwas', 'option2', '64564564', 'puhupwasbind301@gmail.com', 'sdfd dfdsf dsf', '2021-08-13 01:09:55'),
(94, 'Puhupwas', 'option2', '64564564', 'puhupwasbind301@gmail.com', 'sdfd dfdsf dsf', '2021-08-13 01:13:35'),
(95, 'Puhupwas', 'option2', '64564564', 'puhupwasbind301@gmail.com', 'sdfd dfdsf dsf', '2021-08-13 01:15:05'),
(96, 'Puhupwas', 'option2', '64564564', 'puhupwasbind301@gmail.com', 'sdfd dfdsf dsf', '2021-08-13 01:17:16'),
(97, 'Puhupwas', 'option2', '64564564', 'puhupwasbind301@gmail.com', 'sdfd dfdsf dsf', '2021-08-13 01:19:22'),
(98, 'Puhupwas', 'option2', '98981496', 'Puhupwas@adfsdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 12:19:10'),
(99, 'Puhupwas', 'option2', '98981496', 'Puhupwas@adfsdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 12:19:45'),
(100, 'Puhupwas', 'option2', '98981496', 'Puhupwas@adfsdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 12:26:44'),
(101, 'Puhupwas', 'option2', '98981496', 'sdfsdaf@dafsdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 12:27:19'),
(102, 'Puhupwas', 'option2', '4651614', 'fsdfjlsdf@safsd', '65sfsdf df', '2021-08-13 12:35:28'),
(103, 'Puhupwas', 'option2', '98981496', 'Puhupwas@adfsdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 12:35:48'),
(104, 'Puhupwas', 'option2', '98981496', 'Puhupwas@adfsdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 12:35:48'),
(105, 'Puhupwas', 'option2', '98981496', 'Puhupwas@adfsdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 12:35:48'),
(106, 'Puhupwas', 'option2', '98981496', 'Puhupwas@adfsdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 12:35:48'),
(107, 'Puhupwas', 'option2', '98981496', 'Puhupwas@adfsdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 12:35:48'),
(108, 'Puhupwas', 'option2', '98981496', 'Puhupwas@adfsdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 12:35:48'),
(109, 'Puhupwas', 'option2', '98981496', 'Puhupwas@adfsdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 12:35:48'),
(110, 'Puhupwas', 'option2', '98981496', 'Puhupwas@adfsdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 12:35:48'),
(111, 'Puhupwas', 'option2', '98981496', 'Puhupwas@adfsdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 12:35:48'),
(112, 'Puhupwas', 'option1', '98981496', 'pusoadlfjlsdf@asf', 'sdafsdfs', '2021-08-13 12:36:08'),
(113, 'Puhupwas', 'option1', '98981496', 'pusoadlfjlsdf@asf', 'sdafsdfs', '2021-08-13 12:39:27'),
(114, 'Puhupwas', 'option1', '98981496', 'pusoadlfjlsdf@asf', 'sdafsdfs', '2021-08-13 12:40:21'),
(115, 'Puhupwas', 'option1', '98981496', 'pusoadlfjlsdf@asf', 'sdafsdfs', '2021-08-13 12:41:00'),
(116, 'Puhupwas', 'option1', '98981496', 'pusoadlfjlsdf@asf', 'sdafsdfs', '2021-08-13 12:43:03'),
(117, 'Puhupwas', 'option1', '98981496', 'pusoadlfjlsdf@asf', 'sdafsdfs', '2021-08-13 12:43:47'),
(118, 'Puhupwas', 'option1', '98981496', 'pusoadlfjlsdf@asf', 'sdafsdfs', '2021-08-13 12:45:22'),
(119, 'Puhupwas', 'option2', '98981496', 'sdfsdaf@dafsdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 12:46:49'),
(120, 'Puhupwas', 'option2', '98981496', 'sdfsdaf@dafsdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 12:52:19'),
(121, 'Puhupwas', 'option1', '98981496', 'pusoadlfjlsdf@asf', 'sdafsdfs', '2021-08-13 12:52:24'),
(122, 'Puhupwas', 'option1', '98981496', 'puhupwas@sdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 12:54:03'),
(123, 'Puhupwas', 'option1', '98981496', 'puhupwas@sdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 13:03:25'),
(124, 'Puhupwas', 'option1', '98981496', 'puhupwas@sdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 13:07:20'),
(125, 'Puhupwas', 'option1', '98981496', 'puhupwas@sdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 13:08:27'),
(126, 'Puhupwas', 'option1', '98981496', 'puhupwas@sdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 13:13:07'),
(127, 'Puhupwas', 'option1', '98981496', 'puhupwas@sdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 13:20:36'),
(128, 'Puhupwas', 'option1', '98981496', 'puhupwas@sdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 13:21:57'),
(129, 'Puhupwas', 'option1', '98981496', 'puhupwas@sdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 13:22:54'),
(130, 'Puhupwas', 'option1', '98981496', 'puhupwas@sdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 13:25:23'),
(131, 'Puhupwas', 'option1', '98981496', 'sdfsdaf@dafsdf', 'sdff sfldj lsadff lsdfjlsd sdf', '2021-08-13 13:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `user_square_feet_detail`
--

CREATE TABLE `user_square_feet_detail` (
  `usfc_id` int(11) NOT NULL,
  `usfc_username` varchar(255) DEFAULT NULL,
  `usfc_email` varchar(255) DEFAULT NULL,
  `usfc_mobile_number` varchar(255) DEFAULT NULL,
  `usfc_square_feet` varchar(255) DEFAULT NULL,
  `usfc_user_cal_detail` varchar(255) NOT NULL,
  `usfc_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_square_feet_detail`
--

INSERT INTO `user_square_feet_detail` (`usfc_id`, `usfc_username`, `usfc_email`, `usfc_mobile_number`, `usfc_square_feet`, `usfc_user_cal_detail`, `usfc_created_date`) VALUES
(4, 'Puhupwas', 'Puhupwas@adfsdf', '1232', '64-84', '[{\"calName\":\"Mattress (Queen Bed)\",\"sqFeet\":\"8\"},{\"calName\":\"Mattress (King Bed)\",\"sqFeet\":\"5\"},{\"calName\":\"Almirah chest\",\"sqFeet\":\"6\"}]', '2021-08-13 11:11:17'),
(5, 'Puhupwas', 'Puhupwas@adfsdf', '1232', '122.5-142.5', '[{\"calName\":\"Almirah Big\",\"sqFeet\":\"5\"},{\"calName\":\"Mattress (Queen Bed)\",\"sqFeet\":\"8\"},{\"calName\":\"Mattress (King Bed)\",\"sqFeet\":\"11\"},{\"calName\":\"Almirah chest\",\"sqFeet\":\"6\"}]', '2021-08-13 11:12:46'),
(6, 'Puhupwas', 'puhupwas@gmail.com', '798496464', '15.75-35.75', '[{\"calName\":\"Mattress (Single Bed)\",\"sqFeet\":\"3\"},{\"calName\":\"Mattress (Queen Bed)\",\"sqFeet\":\"2\"},{\"calName\":\"Office chair\",\"sqFeet\":\"3\"},{\"calName\":\"Study Lamp\",\"sqFeet\":\"2\"}]', '2021-08-16 11:33:20'),
(7, 'Sonu', 'puhupwas@gmail.com', '46546546564', '83-103', '[{\"calName\":\"Mattress (Queen Bed)\",\"sqFeet\":\"3\"},{\"calName\":\"Storage calculator 13\",\"sqFeet\":\"5\"}]', '2021-08-17 11:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `utility_locker`
--

CREATE TABLE `utility_locker` (
  `ul_id` int(11) NOT NULL,
  `ul_title` varchar(255) NOT NULL,
  `ul_image` varchar(255) NOT NULL,
  `ul_desc` text NOT NULL,
  `ul_meta_title` varchar(255) NOT NULL,
  `ul_meta_keyword` varchar(255) NOT NULL,
  `ul_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utility_locker`
--

INSERT INTO `utility_locker` (`ul_id`, `ul_title`, `ul_image`, `ul_desc`, `ul_meta_title`, `ul_meta_keyword`, `ul_meta_description_desc`) VALUES
(64, 'Utility Lockers', '', '<p>For the ultimate safety and protection of your belongings trust our Utility lockers. The sturdy cabinets are built with steel and have ideal space</p>\r\n', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` int(11) NOT NULL,
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
  `vpo_id` int(11) NOT NULL,
  `vpo_vendor_id` int(11) NOT NULL,
  `vpo_category` varchar(255) DEFAULT NULL,
  `vpo_date` date DEFAULT NULL,
  `vpo_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `w_id` int(11) NOT NULL,
  `w_title` varchar(255) NOT NULL,
  `w_image` varchar(255) NOT NULL,
  `w_desc` text NOT NULL,
  `w_meta_title` varchar(255) NOT NULL,
  `w_meta_keyword` varchar(255) NOT NULL,
  `w_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`w_id`, `w_title`, `w_image`, `w_desc`, `w_meta_title`, `w_meta_keyword`, `w_meta_description_desc`) VALUES
(117, 'Warehouse', 'uploads/warehouse/file_61dc08a1456251641810081.jpg', 'Are you seeking for the ideal location to store your merchandise? With superior warehouse and logistics services and effective inventory management? If that\'s the case, you\'ve come to the correct spot. Letsusstore is the best place to go for Custom Warehouse Solutions that will meet your shipping needs. We have trained manpower to help and manage warehouses .\r\n\r\nWe provide warehouses on rent ,you can also rent a godownwith us.\r\nWe provide PanIndia warehousing services that are of the highest quality and take the utmost care of your assets.Our services are strengthened by a team of highly experienced experts. Our extensive industry knowledge, in-depth market research, and continuous dedication to quality have resulted in timely and efficient shipping across the country. We\'re also dedicated to providing you with safe and secure services, including 24-hour security, fire extinguisher, and hydrant, CCTV monitoring, a convenient location, and customer service.\r\n\r\nWe pledge that we will not make any inaccuracies! With precise and effective inventory management, essential activities and correct handling of goods, optimum selection of items with the best space usage, we will take care of your treasures. We will do all possible to protect and care for your belongings. We have warehouses in a variety of cities, and warehouses near me will show you the closest one to your home.', '', '', ''),
(120, 'Shed', '', 'The roof is equivalently important for the building like a foundation to provide security. We provide good quality stainless steel shed for roofing purposes for the warehouse. Our shed is strong and rustproof and lasts for a long time. We offer premium quality sheds at a genuine price.', '', '', ''),
(122, 'RCC', '', 'Our RCC services are best-in-class when it comes to premium quality construction for buildings, especially the warehouse. Our service adds more strength to the concrete that contributes towards the strong construction of the warehouse. You can bank upon us for complete assurance about the safety of the constructed building.', '', '', ''),
(123, 'BTS', '', '<p>We understand that every client is different and has different needs. So, we offer our BTS service where we construct the warehouse that is exactly suitable for your business needs. Based on the clients&#39; requirements, we develop a warehouse that perfectly accommodates a client&rsquo;s business.</p>\r\n', 'meta title', 'meta keyword', '<p>meta description</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `waste_management`
--

CREATE TABLE `waste_management` (
  `w_id` int(11) NOT NULL,
  `w_title` varchar(255) NOT NULL,
  `w_image` varchar(255) NOT NULL,
  `w_desc` text NOT NULL,
  `w_meta_title` varchar(255) NOT NULL,
  `w_meta_keyword` varchar(255) NOT NULL,
  `w_meta_description_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `waste_management`
--

INSERT INTO `waste_management` (`w_id`, `w_title`, `w_image`, `w_desc`, `w_meta_title`, `w_meta_keyword`, `w_meta_description_desc`) VALUES
(117, 'Waste Management', 'uploads/waste_management/file_61dc3b08231e01641822984.jpg', 'We are an environmental responsible company and also offers waste management services. We pick up e-waste and packed food waste from various business units such as factory, offices and warehouse. After waste collection we recycle the e-waste for its further usage. We do the waste management in the best possible manner so that the generated waste does not cause any harm to the environment.', '', '', '');

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
-- Indexes for table `banner_image`
--
ALTER TABLE `banner_image`
  ADD PRIMARY KEY (`bi_id`);

--
-- Indexes for table `benefits`
--
ALTER TABLE `benefits`
  ADD PRIMARY KEY (`benefit_id`);

--
-- Indexes for table `bike_storage`
--
ALTER TABLE `bike_storage`
  ADD PRIMARY KEY (`bks_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `box_storage`
--
ALTER TABLE `box_storage`
  ADD PRIMARY KEY (`bs_id`);

--
-- Indexes for table `bts`
--
ALTER TABLE `bts`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `clamper`
--
ALTER TABLE `clamper`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`cu_id`);

--
-- Indexes for table `d2c_services`
--
ALTER TABLE `d2c_services`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `deo`
--
ALTER TABLE `deo`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `distribution_services`
--
ALTER TABLE `distribution_services`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `forklift`
--
ALTER TABLE `forklift`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `hardware`
--
ALTER TABLE `hardware`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `hpt`
--
ALTER TABLE `hpt`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `investor`
--
ALTER TABLE `investor`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `letusstore.about_ceo`
--
ALTER TABLE `letusstore.about_ceo`
  ADD PRIMARY KEY (`cp_id`);

--
-- Indexes for table `loaders`
--
ALTER TABLE `loaders`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `manpower`
--
ALTER TABLE `manpower`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `material_handling`
--
ALTER TABLE `material_handling`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `mumbai`
--
ALTER TABLE `mumbai`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `pickers_and_packers`
--
ALTER TABLE `pickers_and_packers`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `primary_service`
--
ALTER TABLE `primary_service`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  ADD PRIMARY KEY (`pp_id`);

--
-- Indexes for table `private_rooms`
--
ALTER TABLE `private_rooms`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `rcc`
--
ALTER TABLE `rcc`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `request_invoice`
--
ALTER TABLE `request_invoice`
  ADD PRIMARY KEY (`ri_id`);

--
-- Indexes for table `secondary_service`
--
ALTER TABLE `secondary_service`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `shed`
--
ALTER TABLE `shed`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `stackers`
--
ALTER TABLE `stackers`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `supplier_products`
--
ALTER TABLE `supplier_products`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  ADD PRIMARY KEY (`tac_id`);

--
-- Indexes for table `three_pl`
--
ALTER TABLE `three_pl`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `admin_session_key` (`user_session_key`);

--
-- Indexes for table `user_contact_details`
--
ALTER TABLE `user_contact_details`
  ADD PRIMARY KEY (`ucd_id`);

--
-- Indexes for table `user_square_feet_detail`
--
ALTER TABLE `user_square_feet_detail`
  ADD PRIMARY KEY (`usfc_id`);

--
-- Indexes for table `utility_locker`
--
ALTER TABLE `utility_locker`
  ADD PRIMARY KEY (`ul_id`);

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
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`w_id`);

--
-- Indexes for table `waste_management`
--
ALTER TABLE `waste_management`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_ceo`
--
ALTER TABLE `about_ceo`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_image`
--
ALTER TABLE `banner_image`
  MODIFY `bi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `benefits`
--
ALTER TABLE `benefits`
  MODIFY `benefit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `bike_storage`
--
ALTER TABLE `bike_storage`
  MODIFY `bks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `box_storage`
--
ALTER TABLE `box_storage`
  MODIFY `bs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `bts`
--
ALTER TABLE `bts`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `clamper`
--
ALTER TABLE `clamper`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `cu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `d2c_services`
--
ALTER TABLE `d2c_services`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `deo`
--
ALTER TABLE `deo`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `distribution_services`
--
ALTER TABLE `distribution_services`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `forklift`
--
ALTER TABLE `forklift`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `hardware`
--
ALTER TABLE `hardware`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hpt`
--
ALTER TABLE `hpt`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `investor`
--
ALTER TABLE `investor`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `land`
--
ALTER TABLE `land`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `letusstore.about_ceo`
--
ALTER TABLE `letusstore.about_ceo`
  MODIFY `cp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `loaders`
--
ALTER TABLE `loaders`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `manpower`
--
ALTER TABLE `manpower`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `material_handling`
--
ALTER TABLE `material_handling`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `mumbai`
--
ALTER TABLE `mumbai`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `pickers_and_packers`
--
ALTER TABLE `pickers_and_packers`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `primary_service`
--
ALTER TABLE `primary_service`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  MODIFY `pp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `private_rooms`
--
ALTER TABLE `private_rooms`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `rcc`
--
ALTER TABLE `rcc`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `r_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `request_invoice`
--
ALTER TABLE `request_invoice`
  MODIFY `ri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `secondary_service`
--
ALTER TABLE `secondary_service`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shed`
--
ALTER TABLE `shed`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `stackers`
--
ALTER TABLE `stackers`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `supplier_products`
--
ALTER TABLE `supplier_products`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `technology`
--
ALTER TABLE `technology`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `tac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `three_pl`
--
ALTER TABLE `three_pl`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `user_contact_details`
--
ALTER TABLE `user_contact_details`
  MODIFY `ucd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `user_square_feet_detail`
--
ALTER TABLE `user_square_feet_detail`
  MODIFY `usfc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `utility_locker`
--
ALTER TABLE `utility_locker`
  MODIFY `ul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vend_purchase_order`
--
ALTER TABLE `vend_purchase_order`
  MODIFY `vpo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `waste_management`
--
ALTER TABLE `waste_management`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
