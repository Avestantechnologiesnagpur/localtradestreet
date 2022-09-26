-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 26, 2022 at 07:24 AM
-- Server version: 10.5.16-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u570873310_localtrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `oname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `oname`, `email`, `subject`, `message`) VALUES
(4, 'gdhefrskjyhri', '270pranaymeshram@gamail.com', '4drieujf8ru', 'erstiuk'),
(6, 'PRANAY MESHRAM', '270pranaymeshram@gmail.com', 'Hello From India', 'Hihihihihihihih'),
(8, 'Pranay Meshram', '270pranaymeshram@gmail.com', 'ok ok', 'Hajdfshfhkj sjchdf dsjjxhd jzuehx'),
(10, 'PRANAY MESHRAM', '270pranaymeshram@gamail.com', '4drieujf8ru', 'xdgjbgef'),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, '', '', '', ''),
(27, '', '', '', ''),
(28, '', '', '', ''),
(29, '', '', '', ''),
(30, '', '', '', ''),
(31, '', '', '', ''),
(32, '', '', '', ''),
(33, '', '', '', ''),
(34, '', '', '', ''),
(36, '', '', '', ''),
(37, '', '', '', ''),
(38, '', '', '', ''),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, '', '', '', ''),
(43, '', '', '', ''),
(44, '', '', '', ''),
(45, '', '', '', ''),
(46, '', '', '', ''),
(47, '', '', '', ''),
(48, '', '', '', ''),
(49, '', '', '', ''),
(50, '', '', '', ''),
(51, '', '', '', ''),
(52, '', '', '', ''),
(53, '', '', '', ''),
(54, '', '', '', ''),
(55, 'Pzdhjjshd', 'gmail@hamjd.com', '4drieujf8ru', 'szchdyn'),
(56, '', '', '', ''),
(57, 'PRANAY meshahahha', 'Prany@gmail.com', 'skjdhsjhsdhj', 'djfkhjcxhfvjh'),
(58, '', '', '', ''),
(59, '', '', '', ''),
(60, '', '', '', ''),
(61, '', '', '', ''),
(62, '', '', '', ''),
(63, '', '', '', ''),
(64, '', '', '', ''),
(65, '', '', '', ''),
(66, '', '', '', ''),
(67, '', '', '', ''),
(68, '', '', '', ''),
(69, '', '', '', ''),
(70, '', '', '', ''),
(71, '', '', '', ''),
(72, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `leavecontact`
--

CREATE TABLE `leavecontact` (
  `id` int(200) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leavecontact`
--

INSERT INTO `leavecontact` (`id`, `name`, `email`, `web`, `message`) VALUES
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(6, '', '', '', ''),
(8, 'Pranay Meshram', '270pranaymeshram@gmail.com', 'htpps://www.pranay.com', 'Hello Pranay'),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, 'PRANAY MESHRAM', '270pranaymeshram@gamail.com', 'htpp://www.gdfshgj.com', 'xkijcrnydujoicruhuhhur'),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, '', '', '', ''),
(27, '', '', '', ''),
(28, '', '', '', ''),
(29, '', '', '', ''),
(30, '', '', '', ''),
(31, '', '', '', ''),
(32, '', '', '', ''),
(33, '', '', '', ''),
(34, '', '', '', ''),
(35, '', '', '', ''),
(36, '', '', '', ''),
(37, '', '', '', ''),
(38, '', '', '', ''),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, '', '', '', ''),
(43, '', '', '', ''),
(44, '', '', '', ''),
(45, '', '', '', ''),
(46, 'Pzdhjjshd', 'Prany@gmail.com', 'https://www.shital.comsir', 'Shital sir'),
(47, 'Pzdhjjshd', 'avestantechnology@gmail.com', 'https://www.xom', 'exjacrhbvkrnychxuiwaj'),
(48, 'Pzdhjjshd', 'gdycyesbufynue@gmail.com', 'https://dwegxbyweyre.com', 'wxjebycbyexn'),
(49, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `servicenextdata`
--

CREATE TABLE `servicenextdata` (
  `subcategory` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mondaystart` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mondayend` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuestart` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tueend` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wedstart` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wedend` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thustart` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thusend` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fristart` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `friend` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stastart` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staend` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunstart` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunend` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locality` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicenextdata`
--

INSERT INTO `servicenextdata` (`subcategory`, `mondaystart`, `mondayend`, `tuestart`, `tueend`, `wedstart`, `wedend`, `thustart`, `thusend`, `fristart`, `friend`, `stastart`, `staend`, `sunstart`, `sunend`, `logo`, `banner`, `description`, `service`, `locality`) VALUES
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `submitlist`
--

CREATE TABLE `submitlist` (
  `id` int(200) NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobno` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landline` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leavecontact`
--
ALTER TABLE `leavecontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submitlist`
--
ALTER TABLE `submitlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `leavecontact`
--
ALTER TABLE `leavecontact`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `submitlist`
--
ALTER TABLE `submitlist`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
