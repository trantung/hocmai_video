-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: 10.0.0.87
-- Generation Time: Sep 01, 2020 at 04:38 PM
-- Server version: 5.7.21-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hocmai`
--

-- --------------------------------------------------------

--
-- Table structure for table `mdl_city`
--

CREATE TABLE `mdl_city` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(45) NOT NULL DEFAULT '',
  `code` int(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mdl_city`
--

INSERT INTO `mdl_city` (`id`, `name`, `description`, `code`) VALUES
(1, 'Hà Nội', '', 4),
(2, 'Hồ Chí Minh', '', 8),
(3, 'Hải Phòng', '', 313),
(4, 'Đà Nẵng', '', 511),
(5, 'Hà Giang', '', 19),
(6, 'Cao Bằng', '', 26),
(7, 'Lai Châu', '', 23),
(8, 'Lào Cai', '', 20),
(9, 'Tuyên Quang', '', 27),
(10, 'Lạng Sơn', '', 25),
(11, 'Bắc Cạn', '', 281),
(12, 'Thái Nguyên', '', 280),
(13, 'Yên Bái', '', 29),
(14, 'Sơn La', '', 22),
(15, 'Phú Thọ', '', 210),
(16, 'Vĩnh Phúc', '', 211),
(17, 'Quảng Ninh', '', 33),
(18, 'Bắc Giang', '', 240),
(19, 'Bắc Ninh', '', 241),
(21, 'Hải Dương', '', 320),
(22, 'Hưng Yên', '', 321),
(23, 'Hoà Bình', '', 218),
(24, 'Hà Nam', '', 351),
(25, 'Nam Định', '', 350),
(26, 'Thái Bình', '', 36),
(27, 'Ninh Bình', '', 30),
(28, 'Thanh Hoá', '', 37),
(29, 'Nghệ An', '', 383),
(30, 'Hà Tĩnh', '', 39),
(31, 'Quảng Bình', '', 52),
(32, 'Quảng Trị', '', 53),
(33, 'Thừa Thiên-Huế', '', 54),
(34, 'Quảng Nam', '', 510),
(35, 'Quảng Ngãi', '', 55),
(36, 'Kon Tum', '', 60),
(37, 'Bình Định', '', 56),
(38, 'Gia Lai', '', 59),
(39, 'Phú Yên', '', 57),
(40, 'Đắk Lắk', '', 50),
(41, 'Khánh Hoà', '', 58),
(42, 'Lâm Đồng', '', 63),
(43, 'Bình Phước', '', 651),
(44, 'Bình Dương', '', 650),
(45, 'Ninh Thuận', '', 68),
(46, 'Tây Ninh', '', 66),
(47, 'Bình Thuận', '', 62),
(48, 'Đồng Nai', '', 613),
(49, 'Long An', '', 72),
(50, 'Đồng Tháp', '', 67),
(51, 'An Giang', '', 76),
(52, 'Bà Rịa-Vũng Tàu', '', 64),
(53, 'Tiền Giang', '', 73),
(54, 'Kiên Giang', '', 77),
(55, 'Cần Thơ', '', 71),
(56, 'Bến Tre', '', 75),
(57, 'Vĩnh Long', '', 70),
(58, 'Trà Vinh', '', 74),
(59, 'Sóc Trăng', '', 79),
(60, 'Bạc Liêu', '', 781),
(61, 'Cà Mau', '', 780),
(62, 'Điện Biên', '', 23),
(63, 'Đăk Nông', '', 50),
(64, 'Hậu Giang', '', 71);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mdl_city`
--
ALTER TABLE `mdl_city`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
