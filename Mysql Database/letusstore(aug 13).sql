-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 13, 2021 at 06:50 PM
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
-- Table structure for table `about_ceo`
--

CREATE TABLE `about_ceo` (
  `ac_id` int NOT NULL,
  `ac_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ac_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ac_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about_ceo`
--

INSERT INTO `about_ceo` (`ac_id`, `ac_title`, `ac_image`, `ac_desc`) VALUES
(56, 'About The CEO', 'uploads/about_ceo/file_610939ad2b1af1627994541.jpg', 'James Anderson is the CEO of Let Us Store, a Let Us Store facility with two state-of-the-art facilities in Noida, Gurugram and plans to expand into PAN India.\r\n\r\nJames has a Ph.D. in Analytical Chemistry from the University of California, Davis, and has worked in the pharmaceutical sector in Canada. After living in multiple countries in North America, the Middle and the Far East, he moved to New Delhi in 2012; however, settling in and growing roots seemed like a challenging task.'),
(57, 'The new direction:', 'uploads/about_ceo/file_610939dae152c1627994586.jpg', 'He decided to take matters into her own hands and start a Let Us Store facility. He had her storage issues to resolve and was sure that other expatriates and non-resident Indians who were coming back to India had them too.\r\n\r\nThus started another new phase - getting a business off the ground as a woman in India. The initial days were challenging. The men he dealt with didn\'t take her seriously and insisted on doing things their set way. He soon realized that he would have to practice putting her foot down; or else her vision wouldn\'t come to life.\r\n\r\nHe also realized the nature of the market he was currently dealing with: a population made up of hoarders who preferred to store things at their own homes or with family members until they reached a breaking point. Changing the majority population\'s mindset was going to be difficult. In a metropolis like Delhi, James Anderson had anticipated that Let Us Store facilities would soon be required.'),
(58, 'The 6 Demand Drivers are:', 'uploads/about_ceo/file_61093a07418971627994631.jpg', 'Density - leading to an increase in rent\r\n\r\nDownsizing - moving into a smaller home due to retirement, an empty nest, or an ability to pay current rent or mortgage\r\n\r\nDislocation - due to marriage, for a new job, taking a gap year or renovating\r\n\r\nDivorce- moving stuff into one place until problems have been sorted out\r\n\r\nDisaster- building back a life while storing the remaining belongings at a temporary facility\r\n\r\nDeath- because family members need time to sort through their loved one\'s belongings while grieving\r\n\r\nAware of the presence of these six demand drivers in the capital city of Delhi, he forged ahead and brought her idea to life. The design has now manifested into two locations in the Delhi-NCR region and is all set to grow in other Indian cities as well.\r\n\r\nWith a keen eye for the needs of the people combined with her international exposure and business acumen, James Anderson is confident that Let Us Store will grow onto become the answer that no one was seeking but everyone needed in India.');

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
-- Table structure for table `banner_image`
--

CREATE TABLE `banner_image` (
  `bi_id` int NOT NULL,
  `bi_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `bi_image_page` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `banner_image`
--

INSERT INTO `banner_image` (`bi_id`, `bi_image`, `bi_image_page`) VALUES
(2, 'uploads/banner_image/file_61110ab9405e61628506809.jpg', 'company-profile'),
(3, 'uploads/banner_image/file_61110e7e599101628507774.jpg', 'about-ceo'),
(6, 'uploads/banner_image/file_611113b3560aa1628509107.jpg', 'covid-precautions'),
(7, 'uploads/banner_image/file_6111144da9c101628509261.jpg', 'private-rooms'),
(8, 'uploads/banner_image/file_6111148ad6e0d1628509322.jpg', 'box-storage'),
(9, 'uploads/banner_image/file_611114c9d26e61628509385.jpg', 'utility-locker'),
(10, 'uploads/banner_image/file_61111512d09a71628509458.jpg', 'bike-storage'),
(11, 'uploads/banner_image/file_61111580089681628509568.jpg', 'benefits'),
(12, 'uploads/banner_image/file_611115d6183681628509654.png', 'testimonial'),
(13, 'uploads/banner_image/file_6111161d3eabe1628509725.jpg', 'blogs'),
(14, 'uploads/banner_image/file_6111164dbef321628509773.jpg', 'gallery'),
(15, 'uploads/banner_image/file_611116887b09b1628509832.jpg', 'size-guide'),
(16, 'uploads/banner_image/file_611116c42148e1628509892.png', 'faqs'),
(17, 'uploads/banner_image/file_611117b2a42441628510130.jpg', 'privacy-policy'),
(18, 'uploads/banner_image/file_611117bad555d1628510138.jpg', 'news'),
(19, 'uploads/banner_image/file_611117c38388e1628510147.jpg', 'contact-us'),
(20, 'uploads/banner_image/file_61111e55b11ea1628511829.png', 'terms-and-conditions'),
(21, 'uploads/banner_image/file_61166170e56811628856688.jpg', 'cri');

-- --------------------------------------------------------

--
-- Table structure for table `benefits`
--

CREATE TABLE `benefits` (
  `benefit_id` int NOT NULL,
  `benefit_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `benefit_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `benefit_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `benefits`
--

INSERT INTO `benefits` (`benefit_id`, `benefit_title`, `benefit_image`, `benefit_desc`) VALUES
(56, 'About The CEO', 'uploads/about_ceo/file_610939ad2b1af1627994541.jpg', 'James Anderson is the CEO of Let Us Store, a Let Us Store facility with two state-of-the-art facilities in Noida, Gurugram and plans to expand into PAN India.\r\n\r\nJames has a Ph.D. in Analytical Chemistry from the University of California, Davis, and has worked in the pharmaceutical sector in Canada. After living in multiple countries in North America, the Middle and the Far East, he moved to New Delhi in 2012; however, settling in and growing roots seemed like a challenging task.'),
(57, 'The new direction:', 'uploads/about_ceo/file_610939dae152c1627994586.jpg', 'He decided to take matters into her own hands and start a Let Us Store facility. He had her storage issues to resolve and was sure that other expatriates and non-resident Indians who were coming back to India had them too.\r\n\r\nThus started another new phase - getting a business off the ground as a woman in India. The initial days were challenging. The men he dealt with didn\'t take her seriously and insisted on doing things their set way. He soon realized that he would have to practice putting her foot down; or else her vision wouldn\'t come to life.\r\n\r\nHe also realized the nature of the market he was currently dealing with: a population made up of hoarders who preferred to store things at their own homes or with family members until they reached a breaking point. Changing the majority population\'s mindset was going to be difficult. In a metropolis like Delhi, James Anderson had anticipated that Let Us Store facilities would soon be required.'),
(58, 'The 6 Demand Drivers are:', 'uploads/about_ceo/file_61093a07418971627994631.jpg', 'Density - leading to an increase in rent\r\n\r\nDownsizing - moving into a smaller home due to retirement, an empty nest, or an ability to pay current rent or mortgage\r\n\r\nDislocation - due to marriage, for a new job, taking a gap year or renovating\r\n\r\nDivorce- moving stuff into one place until problems have been sorted out\r\n\r\nDisaster- building back a life while storing the remaining belongings at a temporary facility\r\n\r\nDeath- because family members need time to sort through their loved one\'s belongings while grieving\r\n\r\nAware of the presence of these six demand drivers in the capital city of Delhi, he forged ahead and brought her idea to life. The design has now manifested into two locations in the Delhi-NCR region and is all set to grow in other Indian cities as well.\r\n\r\nWith a keen eye for the needs of the people combined with her international exposure and business acumen, James Anderson is confident that Let Us Store will grow onto become the answer that no one was seeking but everyone needed in India.');

-- --------------------------------------------------------

--
-- Table structure for table `bike_storage`
--

CREATE TABLE `bike_storage` (
  `bks_id` int NOT NULL,
  `bks_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `bks_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `bks_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bike_storage`
--

INSERT INTO `bike_storage` (`bks_id`, `bks_title`, `bks_image`, `bks_desc`) VALUES
(54, 'Bike Storage', 'uploads/bike_storage/file_610a8b133d45d1628080915.jpg', 'The street isn’t the best place to store your bike. Someone could steal your precious possession, or overexposure to outside weather can damage it profusely. Rather than leave your motorcycle unattended on the street, a wiser decision would be to keep it safely at a Let Us Storewarehouse.'),
(55, 'Why Bike Storage with us', '', 'Let Us Store’s Bike Storage facility is ideal not just to keep your motorcycle but also accessories like helmets, jackets, and much more. An ideal storage area for one bike is 50 Sq ft, but if you want to keep more belongings, our larger sized units can accommodate your needs.\r\n\r\nFor safety, we do not permit the storage of inflammable items. Before moving in, we require you to empty your fuel tank. As a precautionary measure, we also request you to pull out your battery to prevent it from discharging and depleting, overinflate the tires or prop it on the center stand, put a tarp or sheet over it to avoid dust and settlements, and cover the exhaust pipe.\r\n\r\nOur storage rooms are also convenient for cycle enthusiasts. Instead of exposing your bike to harsh weather as well as unwanted attention from birds, lock it up safely in our Let Us Store unit. Our advice is to inflate your tire to prevent dead spots and lubricate the cables before you leave. Additionally, bike hooks can be another great option to prop it on the wall. Not only do they prevent the dead spot but also clear out space for other items.');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int NOT NULL,
  `blog_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `blog_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `blog_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_image`, `blog_desc`) VALUES
(61, 'Benefits of storing your bike in Let Us Store’s Bike Storage Facility', 'uploads/blogs/file_610a4687770281628063367.jpg', 'adasdsad'),
(62, 'How box storage can make more space for your needs', 'uploads/blogs/file_610a46c2615381628063426.jpg', 'sas'),
(63, 'Preserving Your Comic Collection With Let Us Store', 'uploads/blogs/file_610a470d354551628063501.jpg', 'sdas'),
(64, 'How Let Us Store can Help You in the New Covid-19 Reality', 'uploads/blogs/file_610a4728972f91628063528.png', 'asf');

-- --------------------------------------------------------

--
-- Table structure for table `box_storage`
--

CREATE TABLE `box_storage` (
  `bs_id` int NOT NULL,
  `bs_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `bs_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `bs_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `box_storage`
--

INSERT INTO `box_storage` (`bs_id`, `bs_title`, `bs_image`, `bs_desc`) VALUES
(58, 'Box Storage', 'uploads/box_storage/file_610a76ac5c6951628075692.jpg', 'Unused items in our homes or offices tend to make their way into boxes that then take up valuable living space. Instead of stacking boxes in the corners of your rooms or against the walls, why not get yourself a dedicated box storage unit? It is convenient and handy when it comes to figuring out a way to store them till the time you need them back.\r\n\r\nOur homes tend to see a lot of movement over time. As more things come into our possession, the easiest way to make way is by collecting all the older items in boxes and keeping them away. Not only do these start accumulating over time, but they also create a hindrance to normal life. They also take away the beauty of your home aesthetic. This is where Let Us Store can ease things for you.\r\n\r\nYou might wonder what exactly is box storage, and why should it matter to me? Imagine this. What if your home could be clear of all those filled up boxes that have been piling up? Wouldn’t it be more spacious and clean? What if you could find a way to safely store your boxes safely and access them when you like?\r\n\r\nNow that we’ve got your interest, let’s introduce you to Let Us Store. As India’s oldest and leading provider of Let Us Store service, we are the name you can bank upon when it comes to storage. If you need a unit to place your parcels, we have enough space in our Noida and Gurugram warehouses.\r\n\r\nOur box storage units are ideal if you wish to keep boxes. Customers generally bring boxes of old antiques, festive or decorate items, old and unused toys, precious gifts, extra appliances or equipment, old files and folders, extra office stationery, etc. However, it’s upon you to decide what you want to keep. All we request is that you do not store any perishable or inflammable items.'),
(59, 'Let Us Store’s Box Storage', '', 'When you rent a unit with us, you get access to 3 feet x 3 feet of storage area. This space is enough to store anywhere between five to 15 boxes of varying sizes. You can check out the room and accordingly decide what kind of boxes you would like to keep.\r\n\r\nWith the right stacking techniques, you will be able to make the most of the unit. Most people tend to store things horizontally, but you can expand your storage size to include more boxes by using vertical stacking methods.'),
(60, '', 'uploads/box_storage/file_610a7e5f81da51628077663.jpg', '1. Place heavy boxes at the bottom\r\nWeigh all the boxes you have and ensure that the heaviest ones stay at the bottom. Then arrange the rest in descending order of weight with the lightest on the top. If you keep heavier boxes above the lighter ones, the ones below will get crushed by the weight. If you’ve got expensive or delicate items in the lower compartments, you are risking damage too.\r\n\r\n2.The correct height\r\nNow that the heavy boxes at the bottom and the light ones on top, you may be tempted to keep going as high as possible. Know that you could damage the heavy boxes at the bottom if you stack more than eight feet tall. If you stack any higher than that, the tower of boxes could come crashing down.'),
(61, '', 'uploads/box_storage/file_610a7ea5cc2111628077733.jpg', '3.Keep the corners empty\r\nWe know it can be tempting to use up every inch of your storage space. But for your benefit, it’s better to keep the corners clear of anything. This will ensure that you have room to walk around and shift the boxes if you need to readjust.\r\n\r\n4.Use boxes of only two sizes\r\nWhile you can keep boxes of any size, to make the most of stacking, using just two sizes is ideal. Not only will your corners be aligned, but they will also bear the weight equally. You can use towels and newspapers inside boxes to secure the items.');

-- --------------------------------------------------------

--
-- Table structure for table `chennai`
--

CREATE TABLE `chennai` (
  `c_id` int NOT NULL,
  `c_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `c_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `c_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `chennai`
--

INSERT INTO `chennai` (`c_id`, `c_title`, `c_image`, `c_desc`) VALUES
(60, 'Chennai', '', 'The concept of Let Us Store is not new in western countries. But in India, not many people were aware of the idea. Finding this niche, Let Us Store launched in the country a few years ago. Making the capital our center, we made it possible for people to easily find reliable and economical Let Us Store in Pune.\r\n\r\nLet Us Store’s journey started with the vibrant and bustling city of Pune. The first Let Us Store in Chennaiwas set up in Gurugram. Since then, we have grown into a huge family of three big warehouses and thousands of happy customers.\r\n\r\nTwo warehouses are located in Gurugram and one is in Noida. The latest addition was the second Gurugram Let Us Store in Pune. As we witnessed a burgeoning demand for Let Us Store during the Covid-19 lockdown, we were able to fulfill people’s needs for extra storage.\r\n\r\nAny home or business that’s looking for Let Us Store in Pune can find a solution within our range of over 400 Let Us Store rooms.'),
(61, 'Locations of Let Us Store in Chennai', '', 'All of Let Us Store’s warehouses are located in convenient spots that are easily accessible across the greater Pune region. They are located in prime localities and alongside major roadways so that you can find and visit them effortlessly.\r\n\r\nOur warehouses in Gurugram are located in prime locations, one in Udyog Vihar and the other adjacent to the National Highway at Honda Chowk. They both boast over 100 dedicated rooms in varying sizes in each location. Residents in and around Gurugram and nearby New Pune will have no trouble locating and accessing these two facilities. Our units are created with the needs of both individuals and businesses in mind.\r\n\r\nThe third warehouse in Noida is close to Wave City Metro. If you are considering visiting our Noida warehouse, you can choose from over 150 Let Us Store units. Located inside a bustling complex, this Let Us Store in Pune is your perfect choice.');

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `cp_id` int NOT NULL,
  `cp_title` varchar(255) NOT NULL,
  `cp_image` varchar(255) NOT NULL,
  `cp_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`cp_id`, `cp_title`, `cp_image`, `cp_desc`) VALUES
(109, 'Helping you De-Clutter your Home and Office', 'uploads/company_profile/file_6108e29e1efae1627972254.png', 'Access to adequate space, at home or office, is always an issue. Unused items tend to lie around and kill productivity. They also take up valuable space. Let Us Store was created with the idea of putting an end to all this.\r\n\r\nLet Us Store was born out of'),
(110, 'Let Us Store History', 'uploads/company_profile/file_6108e308ce3821627972360.png', 'It was in 2013 that we launched our service in India. We aimed to be a one-stop solution for any space-related needs that businesses and individuals were after.\r\n\r\nWe targeted the capital, New Delhi, first and set up our warehouses in Gurugram and Noida. '),
(111, 'What does Let Us Store Offer', 'uploads/company_profile/file_6108e3282ae4e1627972392.png', 'Let Us Store offers flexibility and convenience when you pick a storage option. Your items stay secure, and you can access them whenever you like. There are restrictions on who can get access to your storage space so that you can stay worry-free.\r\n\r\nWe ha');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `cu_id` int NOT NULL,
  `cu_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cu_phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cu_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cu_working_hours` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`cu_id`, `cu_address`, `cu_phone`, `cu_email`, `cu_working_hours`) VALUES
(59, 'Ramphal Chowk Rd, Sector 7 Dwarka, New Delhi, Delhi 110077', '(+99) - 8512313213 | (+99) - 8512313213', 'info@letusstore  \r\ncontact@letusstore\r\n\r\n', 'Sunday - Friday \r\n8:00AM - 8:00PM');

-- --------------------------------------------------------

--
-- Table structure for table `corpoate_responsibility_initiative`
--

CREATE TABLE `corpoate_responsibility_initiative` (
  `cri_id` int NOT NULL,
  `cri_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cri_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cri_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `corpoate_responsibility_initiative`
--

INSERT INTO `corpoate_responsibility_initiative` (`cri_id`, `cri_title`, `cri_image`, `cri_desc`) VALUES
(64, 'Corporate Responsibility Initiative', 'uploads/corpoate_responsibility_initiative/file_61094530f123e1627997488.png', 'The environment needs the attention of humans today. As a responsible company, Let Us Store is committed to creating a better environment and a better world for the future. Corporate Responsibility Initiative is one of our key areas to ensure that we are contributing positively to the world we live in. Our company takes pride in being cautious about the impact we have on the environment. Our company leaders actively work to ensure that we leave a positive footprint behind us.'),
(65, 'Corporate Responsibility Initiative Philosophy', 'uploads/corpoate_responsibility_initiative/file_6109454b8652e1627997515.png', 'At Let Us Store, we believe that it is each individual and company’s duty to make positive contributions to society. Our philosophy is to create more space in your homes and offices by offering a convenient storage alternative at our warehouses. Similarly, our environmental CRI initiatives are geared towards creating a healthier atmosphere.\r\n\r\nAdditionally, we also work with partners who have dedicated themselves to the cause of creating a better environment. Over the course of our company’s progress, we aim to:\r\n\r\nContribute to activities that can benefit the society and community\r\n\r\nPlan and execute more efficient CRI initiatives\r\n\r\nAlign our CRI activities with local laws\r\n\r\nCreate a positive change in the mindset of our employees as well as surroundings'),
(66, 'Environmental Corporate Responsibility Initiative (CRI) Initiatives', '', 'One Plant for Every Room Rented\r\nBoth our warehouses are currently located around New Delhi. The city ranks as one of the most polluted cities in the world and needs urgent care. Hence, as our way to make the city better, we decided that for every room taken on rent, Let Us Store will contribute one plant in our surroundings. This will be undertaken by the company and the client will not be charged anything for it.'),
(67, 'Environmental Corporate Responsibility Initiative (CRI) Initiatives', '', 'One Plant for Every Room Rented\r\nBoth our warehouses are currently located around New Delhi. The city ranks as one of the most polluted cities in the world and needs urgent care. Hence, as our way to make the city better, we decided that for every room taken on rent, Let Us Store will contribute one plant in our surroundings. This will be undertaken by the company and the client will not be charged anything for it.'),
(68, 'Environmental Corporate Responsibility Initiative (CRI) Initiatives', '', 'One Plant for Every Room Rented\r\nBoth our warehouses are currently located around New Delhi. The city ranks as one of the most polluted cities in the world and needs urgent care. Hence, as our way to make the city better, we decided that for every room taken on rent, Let Us Store will contribute one plant in our surroundings. This will be undertaken by the company and the client will not be charged anything for it.'),
(69, 'Environmental Corporate Responsibility Initiative (CRI) Initiatives', '', 'One Plant for Every Room Rented\r\nBoth our warehouses are currently located around New Delhi. The city ranks as one of the most polluted cities in the world and needs urgent care. Hence, as our way to make the city better, we decided that for every room taken on rent, Let Us Store will contribute one plant in our surroundings. This will be undertaken by the company and the client will not be charged anything for it.'),
(70, 'Environmental Corporate Responsibility Initiative (CRI) Initiatives', '', 'One Plant for Every Room Rented\r\nBoth our warehouses are currently located around New Delhi. The city ranks as one of the most polluted cities in the world and needs urgent care. Hence, as our way to make the city better, we decided that for every room taken on rent, Let Us Store will contribute one plant in our surroundings. This will be undertaken by the company and the client will not be charged anything for it.'),
(71, 'Environmental Corporate Responsibility Initiative (CRI) Initiatives', '', 'One Plant for Every Room Rented\r\nBoth our warehouses are currently located around New Delhi. The city ranks as one of the most polluted cities in the world and needs urgent care. Hence, as our way to make the city better, we decided that for every room taken on rent, Let Us Store will contribute one plant in our surroundings. This will be undertaken by the company and the client will not be charged anything for it.'),
(72, 'Environmental Corporate Responsibility Initiative (CRI) Initiatives', '', 'One Plant for Every Room Rented\r\nBoth our warehouses are currently located around New Delhi. The city ranks as one of the most polluted cities in the world and needs urgent care. Hence, as our way to make the city better, we decided that for every room taken on rent, Let Us Store will contribute one plant in our surroundings. This will be undertaken by the company and the client will not be charged anything for it.'),
(73, 'Environmental Corporate Responsibility Initiative (CRI) Initiatives', '', 'One Plant for Every Room Rented\r\nBoth our warehouses are currently located around New Delhi. The city ranks as one of the most polluted cities in the world and needs urgent care. Hence, as our way to make the city better, we decided that for every room taken on rent, Let Us Store will contribute one plant in our surroundings. This will be undertaken by the company and the client will not be charged anything for it.'),
(74, 'Environmental Corporate Responsibility Initiative (CRI) Initiatives', '', 'One Plant for Every Room Rented\r\nBoth our warehouses are currently located around New Delhi. The city ranks as one of the most polluted cities in the world and needs urgent care. Hence, as our way to make the city better, we decided that for every room taken on rent, Let Us Store will contribute one plant in our surroundings. This will be undertaken by the company and the client will not be charged anything for it.'),
(75, 'Environmental Corporate Responsibility Initiative (CRI) Initiatives', '', 'One Plant for Every Room Rented\r\nBoth our warehouses are currently located around New Delhi. The city ranks as one of the most polluted cities in the world and needs urgent care. Hence, as our way to make the city better, we decided that for every room taken on rent, Let Us Store will contribute one plant in our surroundings. This will be undertaken by the company and the client will not be charged anything for it.'),
(76, 'Environmental Corporate Responsibility Initiative (CRI) Initiatives', '', 'One Plant for Every Room Rented\r\nBoth our warehouses are currently located around New Delhi. The city ranks as one of the most polluted cities in the world and needs urgent care. Hence, as our way to make the city better, we decided that for every room taken on rent, Let Us Store will contribute one plant in our surroundings. This will be undertaken by the company and the client will not be charged anything for it.'),
(77, 'Environmental Corporate Responsibility Initiative (CRI) Initiatives', '', 'One Plant for Every Room Rented\r\nBoth our warehouses are currently located around New Delhi. The city ranks as one of the most polluted cities in the world and needs urgent care. Hence, as our way to make the city better, we decided that for every room taken on rent, Let Us Store will contribute one plant in our surroundings. This will be undertaken by the company and the client will not be charged anything for it.'),
(78, 'Environmental Corporate Responsibility Initiative (CRI) Initiatives', '', 'One Plant for Every Room Rented\r\nBoth our warehouses are currently located around New Delhi. The city ranks as one of the most polluted cities in the world and needs urgent care. Hence, as our way to make the city better, we decided that for every room taken on rent, Let Us Store will contribute one plant in our surroundings. This will be undertaken by the company and the client will not be charged anything for it.'),
(79, 'Environmental Corporate Responsibility Initiative (CRI) Initiatives', 'uploads/corpoate_responsibility_initiative/file_6109463b7aebf1627997755.jpg', 'One Plant for Every Room Rented\r\nBoth our warehouses are currently located around New Delhi. The city ranks as one of the most polluted cities in the world and needs urgent care. Hence, as our way to make the city better, we decided that for every room taken on rent, Let Us Store will contribute one plant in our surroundings. This will be undertaken by the company and the client will not be charged anything for it.'),
(80, 'Creatives for Air Pollution', '', 'Care for Air is a not-for-profit organization that aims to create awareness about air pollution. Let Us Store partnered with Care for Air in its endeavor to spread the message about rising air pollution and ways to tackle it. Care for Air undertakes creative, awareness-building strategies. Let Us Store provided the NGO with creatives that can help its progress. These were targeted to New Delhi in order to address the city’s need to be free of pollution.'),
(81, 'Creatives for Air Pollution', 'uploads/corpoate_responsibility_initiative/file_610946a6ca24d1627997862.jpg', 'Care for Air is a not-for-profit organization that aims to create awareness about air pollution. Let Us Store partnered with Care for Air in its endeavor to spread the message about rising air pollution and ways to tackle it. Care for Air undertakes creative, awareness-building strategies. Let Us Store provided the NGO with creatives that can help its progress. These were targeted to New Delhi in order to address the city’s need to be free of pollution.'),
(82, 'Storage calculator 1sdafsadf', 'uploads/corpoate_responsibility_initiative/file_61164581132bb1628849537.png', 'asdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `covid_precautions`
--

CREATE TABLE `covid_precautions` (
  `cp_id` int NOT NULL,
  `cp_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cp_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cp_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `covid_precautions`
--

INSERT INTO `covid_precautions` (`cp_id`, `cp_title`, `cp_image`, `cp_desc`) VALUES
(78, 'Covid-19 Precautionary Measures', '', 'The Covid-19 pandemic has thrown life out of gear for everyone in this world. Now, more than ever, the health and wellness of everyone are of utmost priority. As a responsible company committed to the welfare of the country, and to serve our customers, Let Us Store has been carefully monitoring and tracking the Covid-19 situation. We have taken the utmost care at our facilities and have been active in providing preventive measures right from the beginning of lockdown.\r\n\r\nSocial distancing, sanitation, hygiene, and no-contact methods are now essential aspects of everyone’s lives. Now is the time when not just individuals but also companies step up their act to ensure that guidelines from the World Health Organization (WHO) as well as government and public health authorities are followed.\r\n\r\nWe realize the seriousness of the situation and understand that many of our customers and those in the supply chain may be impacted because of the outcome of Covid-19. However, we would like to reassure you that Let Us Store has been at the front of ensuring that every guideline and precautionary measure is being actively taken and provided. As and when the guidelines change, we ensure that we comply with all necessary requirements.'),
(85, 'Message from the CEO - James Anderson', 'uploads/covid_precautions/file_610a6329dface1628070697.jpg', '“These are definitely unprecedented times. As much as you are anxious about the pandemic, we are also deeply troubled by it. But, we want you to know that we are with you through this. No matter what worry you may have, we are here to help you. Difficult times come and go, but human relations are what last. For us, our relation with our customers and employees is of utmost importance. We shall get through this, too, together and emerge successful on the other side.\r\n\r\n“We would like to ease your worries by providing our customers and partners with an update on what we have been doing.”'),
(86, 'Steps taken to Support Employees', '', 'Our employees are the core of what makes Let Us Store run effortlessly. All employees are our family. There is no compromise in their physical and psychological health. Therefore, our first step was to ensure that their health and safety is given top priority. Everyone has been asked to work from home and minimize their outdoor activities.\r\n\r\nWe regularly get updates from our employees regarding their health, safety, and whether they have enough food in stock. Additionally, there are frequent sessions where we talk to them individually to understand the state of their mind and allay any fears they may have about the ongoing crisis or the company.\r\n\r\nThose stationed at the warehouses have to undergo frequently use hand sanitizer or washing their hands with soap for at least 20 seconds, wear a mask at all times as well as maintaining distance from other employees. We’ve also taken special care to ensure that not too many people are present at once. A shift system has been put in place to maintain an adequate time gap between people. The warehouses are also sanitized regularly to ensure hygiene levels are maintained.\r\n\r\nThis is an unprecedented situation, and everyone is in it together. This is the time to show love and support.'),
(87, 'Extra Care for Customers', '', 'It is natural that you would hesitate to undertake a visit. But, we would like to assure you that your safety and requirements are at the forefront right now. All our resources have been re-aligned to ensure that proper hygiene and cleanliness are undertaken at all places in the warehouse.\r\n\r\nOur clients are an integral part of the Let Us Store family too. As per government instructions, our warehouse will open for clients. Whenever a customer would like to visit his or her storage room or locker, there will be a thorough process followed.\r\n\r\nWhenever a customer shows his interest in visiting his unit, a sanitization process is undertaken before the visit. Once he has concluded his visit, a secondary sanitation process takes place. This process is religiously followed for every customer, with no exceptions. We have put in place dedicated staff to take care of the hygiene of the whole area.\r\n\r\nWe would also request you to adhere to our protocols and come prepared when you pay a visit. This includes wearing a mask at all times when you are on the premises and sanitizing your hands. When you encounter another member on the premises, we advise you to keep a distance of two meters from them. If you feel unwell or have cough or difficulty breathing, we advise you to stay home rather than coming to the warehouse.\r\n\r\nWe are as committed to keeping you safe, healthy, and content as you are. That is why, during these difficult times, the company is taking extra steps so that no customer is inconvenienced or finds any fault in our sanitization process. We assure you that there isn’t any need to fear.\r\n\r\nAs far as the warehouse premises are concerned, the hygiene process that we follow ensures that every corner of the place is well cleaned with a disinfectant. This especially includes places that may be frequently visited or touched, such as doorknobs, handles, lifts, staircases, etc.'),
(88, 'Contactless Move-In Facility Available', 'uploads/covid_precautions/file_610a63b26478a1628070834.jpg', 'There is, of course, certain anxiety in stepping out of the home, and we understand that. That is why there is no need to pay a visit unless it is absolutely urgent. Our contactless move-in facility can be availed if you’re looking to shift something to our storage room. In this way, you can stay safe inside your home and still look for options.\r\n\r\nYou can email us or call us for reservations, book and make payments online, and even speak to the manager over call in case you have any queries. If you’re looking to shift something into a Let Us Store facility, you have to merely opt for one of these options and book your place. You can simply skip the hassle of visiting the counter at our office or at the warehouse.\r\n\r\nOur pick-up and drop-off facility may also be available. We request our customers to check in with the company representatives to clarify working hours, availability of staff, as well as other service requirements before they pay a visit. Online payments are highly encouraged since it minimizes the need to visit the ATM and withdraw money as well as come into contact with someone else by travelling to make the payment.\r\n\r\nThis will ensure that all your demands are met without having to leave your home and without interacting with any other person. It is important that each one of us takes as much effort as we can to maintain social distancing and keep away from public places.\r\n\r\nWe do request that our customers bear with us. Working with a reduced staff may lead to a slight delay in our responses, but we will ensure we connect with you as soon as possible.\r\n\r\nIf you have any other questions, you can even reach out to us via one of our social media handles. We will continue to monitor the progress of the pandemic. Our safety and hygiene requirements will also be updated as and when we get instructions from health authorities.\r\n\r\nWe request everyone who visits our warehouse to please cooperate with the Let Us Store staff for all necessary checks and follow our protocols. This is for the benefit of everyone involved. It may feel like a hassle but it is crucial that these important steps are not ignored. All our staff and employees have been trained to understand the situation, and accordingly act and behave with customers.\r\n\r\nMost importantly, we urge you to stay calm, stay safe, practice good hygiene habits, maintain social distancing and lockdown rules, keep away from outdoor activities as much as possible, and play your best role in ensuring this pandemic is brought into control. A little precaution can go a long way in staying healthy and safe.');

-- --------------------------------------------------------

--
-- Table structure for table `delhi_mundka`
--

CREATE TABLE `delhi_mundka` (
  `dm_id` int NOT NULL,
  `dm_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dm_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dm_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `delhi_mundka`
--

INSERT INTO `delhi_mundka` (`dm_id`, `dm_title`, `dm_image`, `dm_desc`) VALUES
(60, 'Delhi-Mundka', '', 'The concept of Let Us Store is not new in western countries. But in India, not many people were aware of the idea. Finding this niche, Let Us Store launched in the country a few years ago. Making the capital our center, we made it possible for people to easily find reliable and economical Let Us Store in Delhi.\r\n\r\nLet Us Store’s journey started with the vibrant and bustling city of Delhi. The first Let Us Store in Delhi-Mundka was set up in Gurugram. Since then, we have grown into a huge family of three big warehouses and thousands of happy customers.\r\n\r\nTwo warehouses are located in Gurugram and one is in Noida. The latest addition was the second Gurugram Let Us Store in Delhi. As we witnessed a burgeoning demand for Let Us Store during the Covid-19 lockdown, we were able to fulfill people’s needs for extra storage.\r\n\r\nAny home or business that’s looking for Let Us Store in Delhi can find a solution within our range of over 400 Let Us Store rooms.'),
(61, 'Locations of Let Us Store in Delhi-Mundka', '', 'All of Let Us Store’s warehouses are located in convenient spots that are easily accessible across the greater Delhi region. They are located in prime localities and alongside major roadways so that you can find and visit them effortlessly.\r\n\r\nOur warehouses in Gurugram are located in prime locations, one in Udyog Vihar and the other adjacent to the National Highway at Honda Chowk. They both boast over 100 dedicated rooms in varying sizes in each location. Residents in and around Gurugram and nearby New Delhi will have no trouble locating and accessing these two facilities. Our units are created with the needs of both individuals and businesses in mind.\r\n\r\nThe third warehouse in Noida is close to Wave City Metro. If you are considering visiting our Noida warehouse, you can choose from over 150 Let Us Store units. Located inside a bustling complex, this Let Us Store in Delhi is your perfect choice.'),
(62, 'sdfsdf', 'uploads/delhi_mundka/file_610cc7e3e072f1628227555.png', 'sadff');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `f_id` int NOT NULL,
  `f_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `f_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`f_id`, `f_title`, `f_desc`) VALUES
(60, 'Where can I find a Let Us Store Warehouse in Delhi NCR?', 'We are conveniently located in the heart of Gurugram and Noida’s busy Business hubs'),
(61, 'What is the process of renting space ?', 'We are conveniently located in the heart of Gurugram and Noida’s busy Business hubs');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int NOT NULL,
  `gallery_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_image`) VALUES
(60, 'uploads/gallery/file_610d31d001faa1628254672.jpg'),
(61, 'uploads/gallery/file_610d31ddd099b1628254685.jpg'),
(62, 'uploads/gallery/file_610d3202c146e1628254722.jpg'),
(63, 'uploads/gallery/file_61165a2045c1d1628854816.png'),
(64, 'uploads/gallery/file_611659524dbb81628854610.png'),
(65, 'uploads/gallery/file_61165a2926d9f1628854825.png');

-- --------------------------------------------------------

--
-- Table structure for table `goa`
--

CREATE TABLE `goa` (
  `g_id` int NOT NULL,
  `g_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `g_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `g_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `goa`
--

INSERT INTO `goa` (`g_id`, `g_title`, `g_image`, `g_desc`) VALUES
(60, 'Goa', '', 'The concept of Let Us Store is not new in western countries. But in India, not many people were aware of the idea. Finding this niche, Let Us Store launched in the country a few years ago. Making the capital our center, we made it possible for people to easily find reliable and economical Let Us Store in Pune.\r\n\r\nLet Us Store’s journey started with the vibrant and bustling city of Pune. The first Let Us Store in Goa was set up in Gurugram. Since then, we have grown into a huge family of three big warehouses and thousands of happy customers.\r\n\r\nTwo warehouses are located in Gurugram and one is in Noida. The latest addition was the second Gurugram Let Us Store in Pune. As we witnessed a burgeoning demand for Let Us Store during the Covid-19 lockdown, we were able to fulfill people’s needs for extra storage.\r\n\r\nAny home or business that’s looking for Let Us Store in Pune can find a solution within our range of over 400 Let Us Store rooms.'),
(61, 'Locations of Let Us Store in Goa', '', 'All of Let Us Store’s warehouses are located in convenient spots that are easily accessible across the greater Pune region. They are located in prime localities and alongside major roadways so that you can find and visit them effortlessly.\r\n\r\nOur warehouses in Gurugram are located in prime locations, one in Udyog Vihar and the other adjacent to the National Highway at Honda Chowk. They both boast over 100 dedicated rooms in varying sizes in each location. Residents in and around Gurugram and nearby New Pune will have no trouble locating and accessing these two facilities. Our units are created with the needs of both individuals and businesses in mind.\r\n\r\nThe third warehouse in Noida is close to Wave City Metro. If you are considering visiting our Noida warehouse, you can choose from over 150 Let Us Store units. Located inside a bustling complex, this Let Us Store in Pune is your perfect choice.');

-- --------------------------------------------------------

--
-- Table structure for table `gurgaon_hondachowk`
--

CREATE TABLE `gurgaon_hondachowk` (
  `ghc_id` int NOT NULL,
  `ghc_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ghc_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ghc_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `gurgaon_hondachowk`
--

INSERT INTO `gurgaon_hondachowk` (`ghc_id`, `ghc_title`, `ghc_image`, `ghc_desc`) VALUES
(60, 'Gurgaon- Honda chowk', '', 'Finding a spacious house around Delhi NCR is a luxury. For most, homes turn out to be small and possessions too big. But with a trustworthy Let Us Store in Gurgaon- Honda chowk, you will not have to worry at all.\r\n\r\nLet Us Stores can help you in many ways, from increasing your room area to giving you a secured location to store your items. You can store away things you do not need or even those you find too valuable to keep at home.\r\n\r\nIt is beneficial to even commercial centers or businesses that need extra storage space. An additional area can always come in handy when a business plan calls for it, whether that is a sudden demand for more items or a safe area to keep your furniture when shifting out.\r\n\r\nIf you have been looking for reliable Let Us Store in Gurgaon- Honda chowk, then look no further. Let Us Store Warehouse India can help provide you with the right solution for your problem. As India’s oldest and leading Let Us Store company, we cover the entire Delhi NCR region.'),
(61, 'Where Can I Find a Let Us Store in Gurgaon- Honda chowk', '', 'Let Us Store Warehouse India’s Gurgaon- Honda chowk warehouse is one out of three gigantic facilities that we operate for the residents of Delhi NCR. Our immaculately clean Let Us Store in Gurgaon- Honda chowk is conveniently located close to the Wave City metro station and sits amidst Gurgaon- Honda chowk’s new abode for most businesses.'),
(62, 'Who Can Rent a Let Us Store in Gurgaon- Honda chowk', '', 'Let Us Store are perfect for anyone looking for more storage space. You could be someone shifting homes or relocating, or renovating your office, or maybe you are just tired of things taking up excessive space in your rooms. Maybe you are now working from home and are finding it difficult to focus with clutter at home. Whatever be the case, our Let Us Store in Gurgaon- Honda chowk can help you out.\r\n\r\nIf you are a Gurgaon- Honda chowk based business or you operate in another city but need to store inventory here, our Let Us Store warehouse is ideal for your requirement. Businesses around Delhi NCR can benefit from this unit’s location and storage facilities.\r\n\r\nEven residents living in the vicinity of Delhi NCR, Faridabad, Ghaziabad, and Greater Gurgaon- Honda chowk, who are looking for extra storage space, can head to our Let Us Store unit.'),
(63, 'Benefits of Renting a Let Us Store in Gurgaon- Honda chowk', '', 'Renting your Let Us Store unit is unlike a regular warehouse storage experience. This is your personalized space with added benefits. When you pick our Let Us Store in Gurgaon- Honda chowk, you get ample features so that you can relax peacefully.');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `home_id` int NOT NULL,
  `home_title_heading` varchar(255) DEFAULT NULL,
  `home_title` varchar(255) NOT NULL,
  `home_image` varchar(255) DEFAULT NULL,
  `home_link_name` varchar(255) DEFAULT NULL,
  `home_link` varchar(255) DEFAULT NULL,
  `home_desc` varchar(255) NOT NULL,
  `home_image_page` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
(40, 'ABOUT LET US STORE', 'The Thought Behind Let Us Store', 'uploads/home/file_6112bae8b6c121628617448.jpg', 'Benefits', 'http://localhost/letusstore/home/benefits', 'Our work and personal places are shrinking with each passing year and the clutter of our ever increasing “stuff” obstructs our ability to think clearly and enjoy the spaces in which we spend our time.\r\n\r\nwas created to solve the challenges of cluttering b', 'main-section'),
(41, 'Title main', 'title ', NULL, 'link1', 'google.com', 'This is the description of the  Titlemain', 'main-section'),
(42, 'Title maind', 'title ', 'uploads/home/file_61164121eb99e1628848417.png', 'link1', 'google.com', 'This is the description of the  Titlemain', 'main-section');

-- --------------------------------------------------------

--
-- Table structure for table `hyderabad`
--

CREATE TABLE `hyderabad` (
  `h_id` int NOT NULL,
  `h_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `h_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `h_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hyderabad`
--

INSERT INTO `hyderabad` (`h_id`, `h_title`, `h_image`, `h_desc`) VALUES
(62, 'Hyderabad', '', 'The concept of Let Us Store is not new in western countries. But in India, not many people were aware of the idea. Finding this niche, Let Us Store launched in the country a few years ago. Making the capital our center, we made it possible for people to easily find reliable and economical Let Us Store in Pune.\r\n\r\nLet Us Store’s journey started with the vibrant and bustling city of Pune. The first Let Us Store in Hyderabad was set up in Gurugram. Since then, we have grown into a huge family of three big warehouses and thousands of happy customers.\r\n\r\nTwo warehouses are located in Gurugram and one is in Noida. The latest addition was the second Gurugram Let Us Store in Pune. As we witnessed a burgeoning demand for Let Us Store during the Covid-19 lockdown, we were able to fulfill people’s needs for extra storage.\r\n\r\nAny home or business that’s looking for Let Us Store in Pune can find a solution within our range of over 400 Let Us Store rooms.'),
(63, 'Locations of Let Us Store in Hyderabad', '', 'All of Let Us Store’s warehouses are located in convenient spots that are easily accessible across the greater Pune region. They are located in prime localities and alongside major roadways so that you can find and visit them effortlessly.\r\n\r\nOur warehouses in Gurugram are located in prime locations, one in Udyog Vihar and the other adjacent to the National Highway at Honda Chowk. They both boast over 100 dedicated rooms in varying sizes in each location. Residents in and around Gurugram and nearby New Pune will have no trouble locating and accessing these two facilities. Our units are created with the needs of both individuals and businesses in mind.\r\n\r\nThe third warehouse in Noida is close to Wave City Metro. If you are considering visiting our Noida warehouse, you can choose from over 150 Let Us Store units. Located inside a bustling complex, this Let Us Store in Pune is your perfect choice.');

-- --------------------------------------------------------

--
-- Table structure for table `kolkatta`
--

CREATE TABLE `kolkatta` (
  `k_id` int NOT NULL,
  `k_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `k_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `k_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kolkatta`
--

INSERT INTO `kolkatta` (`k_id`, `k_title`, `k_image`, `k_desc`) VALUES
(60, 'Kolkatta', '', 'The concept of Let Us Store is not new in western countries. But in India, not many people were aware of the idea. Finding this niche, Let Us Store launched in the country a few years ago. Making the capital our center, we made it possible for people to easily find reliable and economical Let Us Store in Pune.\r\n\r\nLet Us Store’s journey started with the vibrant and bustling city of Pune. The first Let Us Store in Kolkatta was set up in Gurugram. Since then, we have grown into a huge family of three big warehouses and thousands of happy customers.\r\n\r\nTwo warehouses are located in Gurugram and one is in Noida. The latest addition was the second Gurugram Let Us Store in Pune. As we witnessed a burgeoning demand for Let Us Store during the Covid-19 lockdown, we were able to fulfill people’s needs for extra storage.\r\n\r\nAny home or business that’s looking for Let Us Store in Pune can find a solution within our range of over 400 Let Us Store rooms.'),
(61, 'Locations of Let Us Store in Kolkatta', '', 'All of Let Us Store’s warehouses are located in convenient spots that are easily accessible across the greater Pune region. They are located in prime localities and alongside major roadways so that you can find and visit them effortlessly.\r\n\r\nOur warehouses in Gurugram are located in prime locations, one in Udyog Vihar and the other adjacent to the National Highway at Honda Chowk. They both boast over 100 dedicated rooms in varying sizes in each location. Residents in and around Gurugram and nearby New Pune will have no trouble locating and accessing these two facilities. Our units are created with the needs of both individuals and businesses in mind.\r\n\r\nThe third warehouse in Noida is close to Wave City Metro. If you are considering visiting our Noida warehouse, you can choose from over 150 Let Us Store units. Located inside a bustling complex, this Let Us Store in Pune is your perfect choice.');

-- --------------------------------------------------------

--
-- Table structure for table `letusstore.about_ceo`
--

CREATE TABLE `letusstore.about_ceo` (
  `cp_id` int NOT NULL,
  `cp_title` varchar(255) NOT NULL,
  `cp_image` varchar(255) NOT NULL,
  `cp_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
-- Table structure for table `mumbai`
--

CREATE TABLE `mumbai` (
  `m_id` int NOT NULL,
  `m_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `m_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `m_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mumbai`
--

INSERT INTO `mumbai` (`m_id`, `m_title`, `m_image`, `m_desc`) VALUES
(60, 'Mumbai', '', 'The concept of Let Us Store is not new in western countries. But in India, not many people were aware of the idea. Finding this niche, Let Us Store launched in the country a few years ago. Making the capital our center, we made it possible for people to easily find reliable and economical Let Us Store in Pune.\r\n\r\nLet Us Store’s journey started with the vibrant and bustling city of Pune. The first Let Us Store in Mumbai was set up in Gurugram. Since then, we have grown into a huge family of three big warehouses and thousands of happy customers.\r\n\r\nTwo warehouses are located in Gurugram and one is in Noida. The latest addition was the second Gurugram Let Us Store in Pune. As we witnessed a burgeoning demand for Let Us Store during the Covid-19 lockdown, we were able to fulfill people’s needs for extra storage.\r\n\r\nAny home or business that’s looking for Let Us Store in Pune can find a solution within our range of over 400 Let Us Store rooms.'),
(61, 'Locations of Let Us Store in Mumbai', '', 'All of Let Us Store’s warehouses are located in convenient spots that are easily accessible across the greater Pune region. They are located in prime localities and alongside major roadways so that you can find and visit them effortlessly.\r\n\r\nOur warehouses in Gurugram are located in prime locations, one in Udyog Vihar and the other adjacent to the National Highway at Honda Chowk. They both boast over 100 dedicated rooms in varying sizes in each location. Residents in and around Gurugram and nearby New Pune will have no trouble locating and accessing these two facilities. Our units are created with the needs of both individuals and businesses in mind.\r\n\r\nThe third warehouse in Noida is close to Wave City Metro. If you are considering visiting our Noida warehouse, you can choose from over 150 Let Us Store units. Located inside a bustling complex, this Let Us Store in Pune is your perfect choice.');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int NOT NULL,
  `news_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `news_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `news_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy`
--

CREATE TABLE `privacy_policy` (
  `pp_id` int NOT NULL,
  `pp_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pp_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pp_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `privacy_policy`
--

INSERT INTO `privacy_policy` (`pp_id`, `pp_title`, `pp_image`, `pp_desc`) VALUES
(60, 'Types of Data we Collect and Use', '', 'We may collect personal identification information from Users in a variety of ways, including, but not limited to, when Users visit our site, subscribe to the newsletter, fill out a form, and in connection with other activities, services, features or resources we make available on our Site. Users may be asked for, as appropriate, name, email address, mailing address, phone number, company name. We will collect personal identification information from Users only if they voluntarily consent such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities.'),
(61, 'Collection of Information', '', 'This site is provided by Noke. Noke collects information in several ways from different parts of this site.\r\n\r\n1. Complimentary ground shipping within 1 to 7 business days\r\n2. In-store collection available within 1 to 7 business days\r\n3. Next-day and Express delivery options also available\r\n4. Purchases are delivered in an orange box tied with a Bolduc ribbon, with the exception of certain items\r\n5. See the delivery FAQs for details on shipping methods, costs and delivery times'),
(62, 'Payment Methods', '', 'Noke accepts the following payment methods:\r\n\r\nCredit Card: Visa, MasterCard, Discover, American Express, JCB, Visa Electron. The total will be charged to your card when the order is shipped.\r\nNoke features a Fast Checkout option, allowing you to securely save your credit card details so that you don\'t have to re-enter them for future purchases.\r\nPayPal: Shop easily online without having to enter your credit card details on the website.Your account will be charged once the order is completed. To register for a PayPal account, visit the website paypal.com.'),
(63, 'Exchanges, Returns and Refunds', '', 'Items returned within 14 days of their original shipment date in same as new condition will be eligible for a full refund or store credit. Refunds will be charged back form of payment used for purchase. Customer is responsible for shipping charges when making returns and shipping/handling fees of original purchase is non-refundable.');

-- --------------------------------------------------------

--
-- Table structure for table `private_rooms`
--

CREATE TABLE `private_rooms` (
  `pr_id` int NOT NULL,
  `pr_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pr_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pr_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `private_rooms`
--

INSERT INTO `private_rooms` (`pr_id`, `pr_title`, `pr_image`, `pr_desc`) VALUES
(58, 'Dedicated Private Rooms', '', 'Many events in our lives call for reorganization, such as moving into a new home, renovations, making room for a new member in the house. These are all stressful activities. You need to change the whole structure and move around things. Sometimes, you may not have enough space to adjust. Instead of cramming the existing area with more items, Let Us Store’s private rooms are what you need.\r\n\r\nWhether you’re an individual looking for home solutions or an organization with corporate-level requirements, getting your own Let Us Store private rooms can free up not only your living area but also your mind.\r\n\r\nExtra space is something we all crave for. We offer the ideal way for you to safely store your items and live your life. While your goods are under our care and watch, you can experience life to the fullest.'),
(59, 'What Can You Store in Private Rooms', 'uploads/private_rooms/file_610a74bb1cf721628075195.jpg', 'Whether you need to store furniture, precious items, valuables, documents, delicate items, machines, equipment, etc., you can enjoy a hassle-free experience when you rent private rooms with us. These rooms are spacious and secured so that you can forget all your stress once you drop your items and leave.\r\n\r\nDepending on your needs, you can decide how you want to use it. If your home is undergoing a temporary renovation, you can lease a room. If you wish to keep a room to yourself as a secondary storage room, we have long-term plans.'),
(60, 'Benefits of Renting Private Rooms', '', 'Renting with us comes with a host of benefits. Let Us Store’s attempts are at providing the best Let Us Store experience for you. We offer several services that will convince you of how seriously we take our job.'),
(61, '24/7 Security', '', 'The security of the premises is one of our main goals. We never compromise on security. Guards, at all times, vigilantly patrol the warehouse. We also have CCTV cameras to monitor the area.'),
(62, 'Restricted Access', '', 'Access to our warehouse is tightly controlled. When you sign your agreement, you will be requested to nominate another person who can enter the room. Only you and your nominee will be provided entry.'),
(63, 'Insurance', '', 'Let Us Store also provides complimentary insurance when you rent private rooms. Your stock is insured against fire risk, RSMD risk, earthquakes, and burglary.');

-- --------------------------------------------------------

--
-- Table structure for table `pune_ranjangaon`
--

CREATE TABLE `pune_ranjangaon` (
  `prg_id` int NOT NULL,
  `prg_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prg_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prg_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pune_ranjangaon`
--

INSERT INTO `pune_ranjangaon` (`prg_id`, `prg_title`, `prg_image`, `prg_desc`) VALUES
(60, 'Pune-Ranjangaon', '', 'The concept of Let Us Store is not new in western countries. But in India, not many people were aware of the idea. Finding this niche, Let Us Store launched in the country a few years ago. Making the capital our center, we made it possible for people to easily find reliable and economical Let Us Store in Pune.\r\n\r\nLet Us Store’s journey started with the vibrant and bustling city of Pune. The first Let Us Store in Pune-Ranjangaon was set up in Gurugram. Since then, we have grown into a huge family of three big warehouses and thousands of happy customers.\r\n\r\nTwo warehouses are located in Gurugram and one is in Noida. The latest addition was the second Gurugram Let Us Store in Pune. As we witnessed a burgeoning demand for Let Us Store during the Covid-19 lockdown, we were able to fulfill people’s needs for extra storage.\r\n\r\nAny home or business that’s looking for Let Us Store in Pune can find a solution within our range of over 400 Let Us Store rooms.'),
(61, 'Locations of Let Us Store in Pune-Ranjangaon', '', 'All of Let Us Store’s warehouses are located in convenient spots that are easily accessible across the greater Pune region. They are located in prime localities and alongside major roadways so that you can find and visit them effortlessly.\r\n\r\nOur warehouses in Gurugram are located in prime locations, one in Udyog Vihar and the other adjacent to the National Highway at Honda Chowk. They both boast over 100 dedicated rooms in varying sizes in each location. Residents in and around Gurugram and nearby New Pune will have no trouble locating and accessing these two facilities. Our units are created with the needs of both individuals and businesses in mind.\r\n\r\nThe third warehouse in Noida is close to Wave City Metro. If you are considering visiting our Noida warehouse, you can choose from over 150 Let Us Store units. Located inside a bustling complex, this Let Us Store in Pune is your perfect choice.');

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
(19, 'MUMBAI', 'mumbai', '2021-08-11 15:17:47'),
(20, 'GAO', 'gao', '2021-08-13 17:12:46');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `storage_calculator`
--

INSERT INTO `storage_calculator` (`sc_id`, `sc_name`, `sc_cat_id`, `sc_name_key`, `sc_name_price`, `sc_image`, `sc_date_created`) VALUES
(4, 'Side Table', 1, 'side_table', '0.5', '', '2021-07-29 12:23:01'),
(5, 'Single bed', 1, 'single_bed', '7.5', '', '2021-07-29 16:12:09'),
(6, 'Queen size bed', 1, 'queen_size_bed', '12.5', '', '2021-07-29 16:12:09'),
(7, 'King Size Bed', 1, 'king_size_bed', '15', '', '2021-07-29 16:12:09'),
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
(47, 'Storage Calculator 11', 15, 'storage_calculator_11', '15', '', '2021-08-02 17:15:40'),
(48, 'Storage Calculator 11', 15, 'storage_calculator_11', '15', '', '2021-08-02 17:15:53'),
(49, 'Company Profile 1', 15, 'company_profile_1', '15', '', '2021-08-02 17:20:52'),
(50, 'Storage calculator 1', 15, 'storage_calculator_1', '15', '', '2021-08-02 17:23:33'),
(55, 'Mattress (Single Bed)', 1, 'mattress__single_bed_', '1.25', 'uploads/storage_calculator/file_6108c5ff7f63e1627964927.png', '2021-08-03 09:58:47'),
(56, 'Mattress (Queen Bed)', 1, 'mattress__queen_bed_', '1', 'uploads/storage_calculator/file_6108c6bb254331627965115.png', '2021-08-03 10:01:54'),
(57, 'Mattress (King Bed)', 1, 'mattress__king_bed_', '15', 'uploads/storage_calculator/file_6108c6df6fcee1627965151.png', '2021-08-03 10:02:31'),
(58, 'Almirah chest', 1, 'almirah_chest', '5', 'uploads/storage_calculator/file_6108c74cba83c1627965260.png', '2021-08-03 10:04:20'),
(59, 'Product 1', 15, 'product_1', '1.50', '', '2021-08-03 18:42:24'),
(60, 'Product 1', 15, 'product_1', '1.50', 'uploads/storage_calculator/file_610940d1189a41627996369.png', '2021-08-03 18:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `storage_calculator_categories`
--

CREATE TABLE `storage_calculator_categories` (
  `scc_id` int NOT NULL,
  `scc_name` varchar(255) NOT NULL,
  `scc_name_key` varchar(255) NOT NULL,
  `scc_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `tac_id` int NOT NULL,
  `tac_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tac_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tac_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `terms_and_conditions`
--

INSERT INTO `terms_and_conditions` (`tac_id`, `tac_title`, `tac_image`, `tac_desc`) VALUES
(60, 'Procedure for Renting Space', 'uploads/terms_and_conditions/file_610d32c6ea96f1628254918.jpg', 'Upon confirmation, a signed Lease Agreement (in person), one month\'s rent with Tax (also referred to as the “ Total Rent ”) and the Security Deposit ( First Installation ). The Security deposit is refundable at the end of the lease term and requires a 30-day notice in writing. It is equivalent to three months of the Total Rent. Taxes are subject as per law, currently at 18%.'),
(61, 'Please note:', '', 'Once a storage space is reserved, we can only guarantee the availability of the selected storage space for a period of 24 hours\r\nThe lease term is for eleven months\r\nThe lease agreement is standard, and no part of it can be changed\r\n30-day notice (in writing) is required to break the duration of the lease period.'),
(62, 'Payment Process:', '', 'We encourage 10 Post Dated Cheques, to avoid late fees, with the first installation . You may also make monthly payments before the 6 th of every month. Note: Let Us Store does not send monthly reminder emails or monthly invoices.'),
(63, 'Documentation:', '', 'Two current colour photographs and one ID proof (International passport with supporting visa, Driving License, Aadhar card or Voter ID) for both the primary and nominated Tenant.');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `t_id` int NOT NULL,
  `t_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `t_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `t_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`t_id`, `t_title`, `t_image`, `t_desc`) VALUES
(70, 'sadf', 'uploads/testimonial/file_610d2bef1a9fb1628253167.mp4', 'sadfsad');

-- --------------------------------------------------------

--
-- Table structure for table `user_contact_details`
--

CREATE TABLE `user_contact_details` (
  `ucd_id` int NOT NULL,
  `ucd_name` varchar(255) DEFAULT NULL,
  `ucd_storage` varchar(255) DEFAULT NULL,
  `ucd_number` varchar(255) DEFAULT NULL,
  `ucd_email` varchar(255) NOT NULL,
  `ucd_storage_list` varchar(255) NOT NULL,
  `ucd_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
(26, 'Puhupwas', 'option1', '196149894', 'puhupwasdeveloper@gmail.com', 'sldjff ssalffjsl aslffjdslf lfjdsl sfds', '2021-08-11 11:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `user_square_feet_detail`
--

CREATE TABLE `user_square_feet_detail` (
  `usfc_id` int NOT NULL,
  `usfc_username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `usfc_email` varchar(255) NOT NULL,
  `usfc_mobile_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `usfc_square_feet` varchar(255) NOT NULL,
  `usfc_user_cal_detail` varchar(255) NOT NULL,
  `usfc_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_square_feet_detail`
--

INSERT INTO `user_square_feet_detail` (`usfc_id`, `usfc_username`, `usfc_email`, `usfc_mobile_number`, `usfc_square_feet`, `usfc_user_cal_detail`, `usfc_created_date`) VALUES
(9, 'puhupwas', 'opsufkls@LJFLDSFS', '4646549654', '112.75-132.75', '[{\"calName\":\"Mattress (Single Bed)\",\"sqFeet\":\"3\"},{\"calName\":\"Mattress (Queen Bed)\",\"sqFeet\":\"4\"},{\"calName\":\"Mattress (King Bed)\",\"sqFeet\":\"7\"}]', '2021-08-13 11:03:59'),
(10, 'Dheeraj', 'puhupwas@sdf', '98484646163', '96-116', '[{\"calName\":\"Mattress (Queen Bed)\",\"sqFeet\":\"6\"},{\"calName\":\"Mattress (King Bed)\",\"sqFeet\":\"6\"}]', '2021-08-13 11:41:18'),
(11, 'Puhupwas', 'Puhupwas@adfsdf', '8161651631', '0-20', '[]', '2021-08-13 11:51:31'),
(12, 'sdsfsdf', 'Puhupwas@adfsdf', '1232', '9-29', '[{\"calName\":\"Mattress (Single Bed)\",\"sqFeet\":\"4\"},{\"calName\":\"Mattress (Queen Bed)\",\"sqFeet\":\"4\"}]', '2021-08-13 11:55:23'),
(13, 'sdafsdfds', 'sonu@gmail.com', '98666654654', '5.75-25.75', '[{\"calName\":\"Mattress (Single Bed)\",\"sqFeet\":\"3\"},{\"calName\":\"Mattress (Queen Bed)\",\"sqFeet\":\"2\"}]', '2021-08-13 11:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `utility_locker`
--

CREATE TABLE `utility_locker` (
  `ul_id` int NOT NULL,
  `ul_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ul_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ul_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `utility_locker`
--

INSERT INTO `utility_locker` (`ul_id`, `ul_title`, `ul_image`, `ul_desc`) VALUES
(63, 'Secure Utility Lockers', 'uploads/utility_locker/file_610a876068b0e1628079968.jpg', 'For the ultimate safety and protection of your personal belongings, trust our Utility lockers. The sturdy cabinets are built with steel and have ideal space (16” X 18” X 24”), and can store up to 30 business files or the equivalent of a business briefcase. Our safe and secure short / long term storage solutions also have the facility to receive mail & packages on behalf of our clients.\r\n\r\nStore your confidential and important documents conveniently in a safe, reasonably sized, and secure location without the need to roll or fold as in a bank locker. Whether you are a Managing Director or Business Owner, rest assured your documents are safe from prying eyes. We keep a vigilant eye on our utility lockers and do not allow any solicitation on our premises. We safeguard your valuable documents as we would our own. Our utility lockers have a built-in mail drop, allowing you to receive confidential mail in your very own individual Let Us Store mail-box. Moreover, we value your privacy and our corporate policy is not to disclose our clients’ personal information without prior written permission.');

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
-- Indexes for table `chennai`
--
ALTER TABLE `chennai`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`cp_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`cu_id`);

--
-- Indexes for table `corpoate_responsibility_initiative`
--
ALTER TABLE `corpoate_responsibility_initiative`
  ADD PRIMARY KEY (`cri_id`);

--
-- Indexes for table `covid_precautions`
--
ALTER TABLE `covid_precautions`
  ADD PRIMARY KEY (`cp_id`);

--
-- Indexes for table `delhi_mundka`
--
ALTER TABLE `delhi_mundka`
  ADD PRIMARY KEY (`dm_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `goa`
--
ALTER TABLE `goa`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `gurgaon_hondachowk`
--
ALTER TABLE `gurgaon_hondachowk`
  ADD PRIMARY KEY (`ghc_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `hyderabad`
--
ALTER TABLE `hyderabad`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `kolkatta`
--
ALTER TABLE `kolkatta`
  ADD PRIMARY KEY (`k_id`);

--
-- Indexes for table `letusstore.about_ceo`
--
ALTER TABLE `letusstore.about_ceo`
  ADD PRIMARY KEY (`cp_id`);

--
-- Indexes for table `mumbai`
--
ALTER TABLE `mumbai`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

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
-- Indexes for table `pune_ranjangaon`
--
ALTER TABLE `pune_ranjangaon`
  ADD PRIMARY KEY (`prg_id`);

--
-- Indexes for table `size_guide`
--
ALTER TABLE `size_guide`
  ADD PRIMARY KEY (`sg_id`);

--
-- Indexes for table `size_guide_location`
--
ALTER TABLE `size_guide_location`
  ADD PRIMARY KEY (`sgl_id`);

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
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  ADD PRIMARY KEY (`tac_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`t_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_ceo`
--
ALTER TABLE `about_ceo`
  MODIFY `ac_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_image`
--
ALTER TABLE `banner_image`
  MODIFY `bi_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `benefits`
--
ALTER TABLE `benefits`
  MODIFY `benefit_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `bike_storage`
--
ALTER TABLE `bike_storage`
  MODIFY `bks_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `box_storage`
--
ALTER TABLE `box_storage`
  MODIFY `bs_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `chennai`
--
ALTER TABLE `chennai`
  MODIFY `c_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `cp_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `cu_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `corpoate_responsibility_initiative`
--
ALTER TABLE `corpoate_responsibility_initiative`
  MODIFY `cri_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `covid_precautions`
--
ALTER TABLE `covid_precautions`
  MODIFY `cp_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `delhi_mundka`
--
ALTER TABLE `delhi_mundka`
  MODIFY `dm_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `f_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `goa`
--
ALTER TABLE `goa`
  MODIFY `g_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `gurgaon_hondachowk`
--
ALTER TABLE `gurgaon_hondachowk`
  MODIFY `ghc_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `hyderabad`
--
ALTER TABLE `hyderabad`
  MODIFY `h_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `kolkatta`
--
ALTER TABLE `kolkatta`
  MODIFY `k_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `letusstore.about_ceo`
--
ALTER TABLE `letusstore.about_ceo`
  MODIFY `cp_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `mumbai`
--
ALTER TABLE `mumbai`
  MODIFY `m_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  MODIFY `pp_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `private_rooms`
--
ALTER TABLE `private_rooms`
  MODIFY `pr_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `pune_ranjangaon`
--
ALTER TABLE `pune_ranjangaon`
  MODIFY `prg_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `size_guide`
--
ALTER TABLE `size_guide`
  MODIFY `sg_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `size_guide_location`
--
ALTER TABLE `size_guide_location`
  MODIFY `sgl_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `storage_calculator`
--
ALTER TABLE `storage_calculator`
  MODIFY `sc_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `storage_calculator_categories`
--
ALTER TABLE `storage_calculator_categories`
  MODIFY `scc_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `tac_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `t_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `user_contact_details`
--
ALTER TABLE `user_contact_details`
  MODIFY `ucd_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_square_feet_detail`
--
ALTER TABLE `user_square_feet_detail`
  MODIFY `usfc_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `utility_locker`
--
ALTER TABLE `utility_locker`
  MODIFY `ul_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
