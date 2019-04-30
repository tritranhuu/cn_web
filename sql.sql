-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 30, 2019 lúc 10:30 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `clothes_shop`
--
CREATE DATABASE IF NOT EXISTS `clothes_shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `clothes_shop`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `accID` int(8) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(128) NOT NULL,
  `address` varchar(150) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `created` varchar(11) DEFAULT NULL,
  `admin` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`accID`, `username`, `password`, `name`, `address`, `phone`, `created`, `admin`) VALUES
(1, 'tritranhuu', '123456', 'Tri', '1 Hoang Mai', '123456', '20/4/2019', 1),
(2, 'duytien241', '123456', 'Phạm Duy Tiên', 'Nam Định', '0326541515', '30-04-2019', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `accID` int(11) NOT NULL,
  `optID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_product`
--

CREATE TABLE `comment_product` (
  `accID` int(11) NOT NULL,
  `proID` int(11) NOT NULL,
  `content` varchar(300) NOT NULL,
  `created` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `comment_product`
--

INSERT INTO `comment_product` (`accID`, `proID`, `content`, `created`) VALUES
(2, 200, 'Đây là nội dung test', '30-04-2019'),
(2, 200, 'Đây là nội dung test', '30-04-2019'),
(2, 201, 'Đây là nội dung test', '30-04-2019'),
(2, 201, 'Đây là nội dung test', '30-04-2019');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

CREATE TABLE `company` (
  `companyID` int(10) NOT NULL,
  `companyName` varchar(50) DEFAULT NULL,
  `created` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `company`
--

INSERT INTO `company` (`companyID`, `companyName`, `created`) VALUES
(1, 'Adidas', '3'),
(2, 'Nike', '2'),
(3, 'Owen', '10'),
(4, 'JUNO', '10'),
(5, 'Top4man', '10'),
(6, '4men', '10'),
(7, 'Việt Tiến', '10'),
(8, 'An Phước', '20'),
(9, 'Bluxury', '5'),
(10, 'Merriman', '8'),
(11, 'Novelty', '10'),
(12, 'May 10', '20'),
(13, 'Calvin Klein', '10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_order`
--

CREATE TABLE `detail_order` (
  `orderID` int(11) NOT NULL,
  `proID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `img`
--

CREATE TABLE `img` (
  `proID` int(11) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `img`
--

INSERT INTO `img` (`proID`, `url`) VALUES
(1, '/images/product/1_0.jpg'),
(1, '/images/product/1_1.jpg'),
(2, '/images/product/2_0.jpg'),
(3, '/images/product/3_0.jpg'),
(4, '/images/product/4_0.jpg'),
(5, '/images/product/5_0.jpg'),
(6, '/images/product/6_0.jpg'),
(7, '/images/product/7_0.jpg'),
(8, '/images/product/8_0.jpg'),
(9, '/images/product/9_0.jpg'),
(10, '/images/product/10_0.jpg'),
(11, '/images/product/11_0.jpg'),
(12, '/images/product/12_0.jpg'),
(13, '/images/product/13_0.jpg'),
(14, '/images/product/14_0.jpg'),
(14, '/images/product/14_1.jpg'),
(14, '/images/product/14_2.jpg'),
(14, '/images/product/14_3.jpg'),
(15, '/images/product/15_0.jpg'),
(15, '/images/product/15_1.jpg'),
(15, '/images/product/15-2.jpg'),
(15, '/images/product/15_3.jpg'),
(16, '/images/product/16_0.jpg'),
(16, '/images/product/16_1.jpg'),
(17, '/images/product/17_0.jpg'),
(17, '/images/product/17_1.jpg'),
(17, '/images/product/17_2.jpg'),
(17, '/images/product/17_3.jpg'),
(18, '/images/product/18_0.jpg'),
(18, '/images/product/18_1.jpg'),
(18, '/images/product/18_2.jpg'),
(18, '/images/product/18_3.jpg'),
(24, '/images/product/24_0.jpg'),
(25, '/images/product/25_0.jpg'),
(26, '/images/product/26_0.jpg'),
(27, '/images/product/27_0.jpg'),
(28, '/images/product/28_0.jpg'),
(29, '/images/product/29_0.jpg'),
(30, '/images/product/30_0.jpg'),
(31, '/images/product/31_0.jpg'),
(32, '/images/product/32_0.jpg'),
(33, '/images/product/33_0.jpg'),
(34, '/images/product/34_0.jpg'),
(35, '/images/product/35_0.jpg'),
(36, '/images/product/36_0.jpg'),
(37, '/images/product/37_0.jpg'),
(38, '/images/product/38_0.jpg'),
(39, '/images/product/39_0.jpg'),
(40, '/images/product/40_0.jpg'),
(41, '/images/product/41_0.jpg'),
(42, '/images/product/42_0.jpg'),
(43, '/images/product/43_0.jpg'),
(44, '/images/product/44_0.jpg'),
(45, '/images/product/45_0.jpg'),
(46, '/images/product/46_0.jpg'),
(47, '/images/product/47_0.jpg'),
(48, '/images/product/48_0.jpg'),
(49, '/images/product/49_0.jpg'),
(50, '/images/product/50_0.jpg'),
(51, '/images/product/51_0.jpg'),
(52, '/images/product/52_0.jpg'),
(53, '/images/product/53_0.jpg'),
(54, '/images/product/54_0.jpg'),
(55, '/images/product/55_0.jpg'),
(56, '/images/product/56_0.jpg'),
(57, '/images/product/57_0.jpg'),
(58, '/images/product/58_0.jpg'),
(59, '/images/product/59_0.jpg'),
(60, '/images/product/60_0.jpg'),
(61, '/images/product/61_0.jpg'),
(62, '/images/product/62_0.jpg'),
(63, '/images/product/63_0.jpg'),
(65, '/images/product/65_0.jpg'),
(66, '/images/product/66_0.jpg'),
(67, '/images/product/67_0.jpg'),
(68, '/images/product/68_0.jpg'),
(69, '/images/product/69_0.jpg'),
(70, '/images/product/70_0.jpg'),
(71, '/images/product/71_0.jpg'),
(72, '/images/product/72_0.jpg'),
(73, '/images/product/73_0.jpg'),
(74, '/images/product/74_0.jpg'),
(75, '/images/product/75_0.jpg'),
(76, '/images/product/76_0.jpg'),
(77, '/images/product/77_0.jpg'),
(78, '/images/product/78_0.jpg'),
(79, '/images/product/79_0.jpg'),
(80, '/images/product/80_0.jpg'),
(81, '/images/product/81_0.jpg'),
(82, '/images/product/82_0.jpg'),
(83, '/images/product/83_0.jpg'),
(84, '/images/product/84_0.jpg'),
(85, '/images/product/85_0.jpg'),
(86, '/images/product/86_0.jpg'),
(87, '/images/product/87_0.jpg'),
(88, '/images/product/88_0.jpg'),
(89, '/images/product/89_0.jpg'),
(89, '/images/product/89_1.jpg'),
(89, '/images/product/89_2.jpg'),
(90, '/images/product/90_0.jpg'),
(90, '/images/product/90_1.jpg'),
(91, '/images/product/91_0.jpg'),
(91, '/images/product/91_1.jpg'),
(92, '/images/product/92_0.jpg'),
(92, '/images/product/92_1.jpg'),
(93, '/images/product/93_0.jpg'),
(94, '/images/product/94_0.jpg'),
(94, '/images/product/94_1.jpg'),
(94, '/images/product/94_2.jpg'),
(95, '/images/product/95_0.jpg'),
(96, '/images/product/96_0.jpg'),
(96, '/images/product/96_1.jpg'),
(96, '/images/product/96_2.jpg'),
(97, '/images/product/97_0.jpg'),
(97, '/images/product/97_1.jpg'),
(98, '/images/product/98_0.jpg'),
(99, '/images/product/99_0.jpg'),
(100, '/images/product/100_0.jpg'),
(102, '/images/product/102_0.jpg'),
(103, '/images/product/103_0.jpg'),
(104, '/images/product/104_0.jpg'),
(105, '/images/product/105_0.jpg'),
(106, '/images/product/106_0.jpg'),
(107, '/images/product/107_0.jpg'),
(108, '/images/product/108_0.jpg'),
(1, '/images/product/1_0.jpg'),
(1, '/images/product/1_1.jpg'),
(2, '/images/product/2_0.jpg'),
(3, '/images/product/3_0.jpg'),
(4, '/images/product/4_0.jpg'),
(5, '/images/product/5_0.jpg'),
(6, '/images/product/6_0.jpg'),
(7, '/images/product/7_0.jpg'),
(8, '/images/product/8_0.jpg'),
(9, '/images/product/9_0.jpg'),
(10, '/images/product/10_0.jpg'),
(11, '/images/product/11_0.jpg'),
(12, '/images/product/12_0.jpg'),
(13, '/images/product/13_0.jpg'),
(14, '/images/product/14_0.jpg'),
(14, '/images/product/14_1.jpg'),
(14, '/images/product/14_2.jpg'),
(14, '/images/product/14_3.jpg'),
(15, '/images/product/15_0.jpg'),
(15, '/images/product/15_1.jpg'),
(15, '/images/product/15-2.jpg'),
(15, '/images/product/15_3.jpg'),
(16, '/images/product/16_0.jpg'),
(16, '/images/product/16_1.jpg'),
(17, '/images/product/17_0.jpg'),
(17, '/images/product/17_1.jpg'),
(17, '/images/product/17_2.jpg'),
(17, '/images/product/17_3.jpg'),
(18, '/images/product/18_0.jpg'),
(18, '/images/product/18_1.jpg'),
(18, '/images/product/18_2.jpg'),
(18, '/images/product/18_3.jpg'),
(24, '/images/product/24_0.jpg'),
(25, '/images/product/25_0.jpg'),
(26, '/images/product/26_0.jpg'),
(27, '/images/product/27_0.jpg'),
(28, '/images/product/28_0.jpg'),
(29, '/images/product/29_0.jpg'),
(30, '/images/product/30_0.jpg'),
(31, '/images/product/31_0.jpg'),
(32, '/images/product/32_0.jpg'),
(33, '/images/product/33_0.jpg'),
(34, '/images/product/34_0.jpg'),
(35, '/images/product/35_0.jpg'),
(36, '/images/product/36_0.jpg'),
(37, '/images/product/37_0.jpg'),
(38, '/images/product/38_0.jpg'),
(39, '/images/product/39_0.jpg'),
(40, '/images/product/40_0.jpg'),
(41, '/images/product/41_0.jpg'),
(42, '/images/product/42_0.jpg'),
(43, '/images/product/43_0.jpg'),
(44, '/images/product/44_0.jpg'),
(45, '/images/product/45_0.jpg'),
(46, '/images/product/46_0.jpg'),
(47, '/images/product/47_0.jpg'),
(48, '/images/product/48_0.jpg'),
(49, '/images/product/49_0.jpg'),
(50, '/images/product/50_0.jpg'),
(51, '/images/product/51_0.jpg'),
(52, '/images/product/52_0.jpg'),
(53, '/images/product/53_0.jpg'),
(54, '/images/product/54_0.jpg'),
(55, '/images/product/55_0.jpg'),
(56, '/images/product/56_0.jpg'),
(57, '/images/product/57_0.jpg'),
(58, '/images/product/58_0.jpg'),
(59, '/images/product/59_0.jpg'),
(60, '/images/product/60_0.jpg'),
(61, '/images/product/61_0.jpg'),
(62, '/images/product/62_0.jpg'),
(63, '/images/product/63_0.jpg'),
(65, '/images/product/65_0.jpg'),
(66, '/images/product/66_0.jpg'),
(67, '/images/product/67_0.jpg'),
(68, '/images/product/68_0.jpg'),
(69, '/images/product/69_0.jpg'),
(70, '/images/product/70_0.jpg'),
(71, '/images/product/71_0.jpg'),
(72, '/images/product/72_0.jpg'),
(73, '/images/product/73_0.jpg'),
(74, '/images/product/74_0.jpg'),
(75, '/images/product/75_0.jpg'),
(76, '/images/product/76_0.jpg'),
(77, '/images/product/77_0.jpg'),
(78, '/images/product/78_0.jpg'),
(79, '/images/product/79_0.jpg'),
(80, '/images/product/80_0.jpg'),
(81, '/images/product/81_0.jpg'),
(82, '/images/product/82_0.jpg'),
(83, '/images/product/83_0.jpg'),
(84, '/images/product/84_0.jpg'),
(85, '/images/product/85_0.jpg'),
(86, '/images/product/86_0.jpg'),
(87, '/images/product/87_0.jpg'),
(88, '/images/product/88_0.jpg'),
(89, '/images/product/89_0.jpg'),
(89, '/images/product/89_1.jpg'),
(89, '/images/product/89_2.jpg'),
(90, '/images/product/90_0.jpg'),
(90, '/images/product/90_1.jpg'),
(91, '/images/product/91_0.jpg'),
(91, '/images/product/91_1.jpg'),
(92, '/images/product/92_0.jpg'),
(92, '/images/product/92_1.jpg'),
(93, '/images/product/93_0.jpg'),
(94, '/images/product/94_0.jpg'),
(94, '/images/product/94_1.jpg'),
(94, '/images/product/94_2.jpg'),
(95, '/images/product/95_0.jpg'),
(96, '/images/product/96_0.jpg'),
(96, '/images/product/96_1.jpg'),
(96, '/images/product/96_2.jpg'),
(97, '/images/product/97_0.jpg'),
(97, '/images/product/97_1.jpg'),
(98, '/images/product/98_0.jpg'),
(99, '/images/product/99_0.jpg'),
(100, '/images/product/100_0.jpg'),
(102, '/images/product/102_0.jpg'),
(103, '/images/product/103_0.jpg'),
(104, '/images/product/104_0.jpg'),
(105, '/images/product/105_0.jpg'),
(106, '/images/product/106_0.jpg'),
(107, '/images/product/107_0.jpg'),
(108, '/images/product/108_0.jpg'),
(200, '/images/product/N1_0.jpg'),
(200, '/images/product/N1_1.jpg'),
(201, '/images/product/N2_0.jpg'),
(201, '/images/product/N2_1.jpg'),
(201, '/images/product/N2_2.jpg'),
(201, '/images/product/N2_3.jpg'),
(201, '/images/product/N2_4.jpg'),
(202, '/images/product/N3_0.jpg'),
(202, '/images/product/N3_1.jpg'),
(202, '/images/product/N3_2.jpg'),
(202, '/images/product/N3_3.jpg'),
(203, '/images/product/N4_0.jpg'),
(203, '/images/product/N4_1.jpg'),
(203, '/images/product/N4_2.jpg'),
(203, '/images/product/N4_3.jpg'),
(204, '/images/product/N5_0.jpg'),
(204, '/images/product/N5_1.jpg'),
(204, '/images/product/N5_2.jpg'),
(205, '/images/product/N6_0.jpg'),
(205, '/images/product/N6_1.jpg'),
(205, '/images/product/N6_2.jpg'),
(206, '/images/product/N7_0.jpg'),
(206, '/images/product/N7_1.jpg'),
(206, '/images/product/N7_2.jpg'),
(207, '/images/product/N8_0.jpg'),
(207, '/images/product/N8_1.jpg'),
(207, '/images/product/N8_2.jpg'),
(208, '/images/product/N9_0.jpg'),
(208, '/images/product/N9_1.jpg'),
(208, '/images/product/N9_2.jpg'),
(209, '/images/product/N10_0.jpg'),
(209, '/images/product/N10_1.jpg'),
(209, '/images/product/N10_2.jpg'),
(210, '/images/product/N11_0.jpg'),
(210, '/images/product/N11_1.jpg'),
(210, '/images/product/N11_2.jpg'),
(211, '/images/product/N12_0.jpg'),
(211, '/images/product/N12_1.jpg'),
(211, '/images/product/N12_2.jpg'),
(212, '/images/product/N13_0.jpg'),
(212, '/images/product/N13_1.jpg'),
(213, '/images/product/N14_0.jpg'),
(213, '/images/product/N14_1.jpg'),
(213, '/images/product/N14_2.jpg'),
(214, '/images/product/N15_0.jpg'),
(214, '/images/product/N15_1.jpg'),
(214, '/images/product/N15_2.jpg'),
(215, '/images/product/N16_0.jpg'),
(215, '/images/product/N16_1.jpg'),
(215, '/images/product/N16_2.jpg'),
(216, '/images/product/N18_0.jpg'),
(216, '/images/product/N18_1.jpg'),
(216, '/images/product/N18_2.jpg'),
(217, '/images/product/N19_0.jpg'),
(217, '/images/product/N19_1.jpg'),
(217, '/images/product/N19_2.jpg'),
(218, '/images/product/N20_0.jpg'),
(218, '/images/product/N20_1.jpg'),
(218, '/images/product/N20_2.jpg'),
(219, '/images/product/N21_0.jpg'),
(219, '/images/product/N21_1.jpg'),
(219, '/images/product/N21_2.jpg'),
(220, '/images/product/N22_0.jpg'),
(220, '/images/product/N22_1.jpg'),
(220, '/images/product/N22_2.jpg'),
(221, '/images/product/N17_0.jpg'),
(221, '/images/product/N17_1.jpg'),
(221, '/images/product/N17_2.jpg'),
(222, '/images/product/N23_0.jpg'),
(222, '/images/product/N23_1.jpg'),
(222, '/images/product/N23_2.jpg'),
(223, '/images/product/N24_0.jpg'),
(223, '/images/product/N24_1.jpg'),
(223, '/images/product/N24_2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_product`
--

CREATE TABLE `order_product` (
  `orderID` int(8) NOT NULL,
  `accID` int(11) NOT NULL,
  `status_order` bit(1) DEFAULT b'0',
  `name` varchar(128) NOT NULL,
  `address_user` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `amount` int(11) NOT NULL,
  `message_user` varchar(250) DEFAULT NULL,
  `created` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `proID` int(8) NOT NULL,
  `proName` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(30) DEFAULT 'NONE',
  `created` varchar(12) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `material` varchar(200) DEFAULT NULL,
  `companyID` int(11) DEFAULT NULL,
  `viewed` int(11) DEFAULT '0',
  `gender` varchar(20) DEFAULT NULL,
  `import_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`proID`, `proName`, `price`, `type`, `created`, `description`, `material`, `companyID`, `viewed`, `gender`, `import_price`) VALUES
(1, 'Ao1', 200000, 'Ao ngan tay', '3', 'Ao ngan tay ke soc cuc ki dep', 'cotton', 1, 0, 'M', NULL),
(2, 'Ao2', 150000, 'Ao ngan tay', '3', 'Ao ngan tay tron cuc ki dep ', 'cotton', 1, 0, 'M', NULL),
(3, 'Quan1', 250000, 'Quan short', '3', 'Quan dui cuc ki dep', 'kaki', 1, 0, 'M', NULL),
(4, 'Áo phông nam', 150000, 'Áo ngắn tay', '2', 'Dáng thông thường\r\nCổ tròn, tay cộc', 'cotton', 5, 0, 'M', NULL),
(5, 'Áo phông nam', 200000, 'Áo ngắn tay', '3', 'Dáng thông thường\r\nCổ tròn, tay cộc', 'Cotton', 5, 0, 'M', NULL),
(6, 'Áo phông nam', 250000, 'Áo ngắn tay', '3', 'Dáng thông thường\r\nCổ tròn, tay cộc', 'Cotton', 5, 0, 'M', NULL),
(7, 'Áo phông nam', 200000, 'Áo ngắn tay', '3', 'Dáng thông thường\r\nCổ tròn, tay cộc', 'Cotton', 5, 0, 'M', NULL),
(8, 'Áo phông nam', 150000, 'Áo ngắn tay', '3', 'Dáng thông thường\r\nCổ tròn, tay cộc', 'Cotton', 5, 0, 'M', NULL),
(9, 'Áo phông nam', 200000, 'Áo ngắn tay', '2', 'Dáng thông thường\r\nCổ tròn, tay cộc', 'Cotton', 5, 0, 'M', NULL),
(10, 'Áo phông nam', 200000, 'Áo ngắn tay', '3', 'Dáng thông thường\r\nCổ tròn, tay cộc', 'Cotton', 5, 0, 'M', NULL),
(11, 'Áo phông nam', 250000, 'Áo ngắn tay', '2', 'Dáng thông thường\r\nCổ tròn, tay cộc', 'Cotton', 5, 0, 'M', NULL),
(12, 'Áo phông nam', 150000, 'Áo ngắn tay', '3', 'Dáng thông thường\r\nCổ tròn, tay cộc', 'Cotton', 5, 0, 'M', NULL),
(13, 'Áo phông nam', 200000, 'Áo ngắn tay', '3', 'Dáng thông thường\r\nCổ tròn, tay cộc', 'Cotton', 5, 0, 'M', NULL),
(14, 'Áo polo nam', 250000, 'Áo ngắn tay', '2', 'Dáng thông thường\r\nPolo, tay cộc', 'Cotton', 6, 0, 'M', NULL),
(15, 'Áo polo nam', 250000, 'Áo ngắn tay', '2', 'Dáng thông thường\r\nPolo, tay cộc', 'Cotton', 6, 0, 'M', NULL),
(16, 'Áo polo nam', 350000, 'Áo ngắn tay', '2', 'Dáng thông thường\r\nPolo, tay cộc\r\nChất liệu mềm mại, co giãn, thấm hút mồ hôi tốt', 'Cotton', 6, 0, 'M', NULL),
(17, 'Áo polo nam', 300000, 'Áo ngắn tay', '2', 'Dáng thông thường\r\nPolo, tay cộc', 'Cotton', 6, 0, 'M', NULL),
(18, 'Áo polo nam', 250000, 'Áo ngắn tay', '2', 'Dáng thông thường\r\nPolo, tay cộc\r\nChất liệu mềm mại, co giãn, thấm hút mồ hôi tốt', 'Cotton', 6, 0, 'M', NULL),
(24, 'Áo sơ mi ', 150000, 'Áo dài tay', '2', 'Dáng thông thường\r\nCổ đức, tay dài', 'Cotton', 7, 0, 'M', NULL),
(25, 'Áo sơ mi ', 150000, 'Áo ngắn tay', '2', 'Dáng thông thường\r\nCổ đức, tay cộc', 'Cotton', 7, 0, 'M', NULL),
(26, 'Áo sơ mi kẻ', 200000, 'Áo dài tay', '2', 'Dáng ôm\r\nCổ đức, tay dài', 'Cotton', 7, 0, 'M', NULL),
(27, 'Áo sơ mi ', 250000, 'Áo dài tay', '2', 'Dáng ôm\r\nCổ đức, tay dài', 'Cotton', 7, 0, 'M', NULL),
(28, 'Áo sơ mi ', 200000, 'Áo dài tay', '2', 'Dáng thông thường\r\nCổ đức, tay dài', 'Cotton', 7, 0, 'M', NULL),
(29, 'Áo sơ mi ', 300000, 'Áo dài tay', '2', 'Dáng thông thường\r\nCổ đức, tay dài', 'Cotton', 7, 0, 'M', NULL),
(30, 'Áo sơ mi ', 250000, 'Áo dài tay', '2', 'Dáng thông thường\r\nCổ đức, tay dài', 'Cotton', 7, 0, 'M', NULL),
(31, 'Áo sơ mi ', 200000, 'Áo dài tay', '2', 'Dáng ôm\r\nCổ đức, tay dài', 'Cotton', 7, 0, 'M', NULL),
(32, 'Áo sơ mi ', 150000, 'Áo dài tay', '2', 'Dáng ôm\r\nCổ đức, tay dài', 'Cotton', 7, 0, 'M', NULL),
(33, 'Áo sơ mi ', 250000, 'Áo dài tay', '2', 'Dáng ôm\r\nCổ đức, tay dài', 'Cotton', 7, 0, 'M', NULL),
(34, 'Áo khoác nam', 400000, 'Áo khoác', '3', 'Dáng thông thường', 'Nylon', 12, 0, 'M', NULL),
(35, 'Áo khoác nam', 400000, 'Áo khoác', '3', 'Dáng thông thường', 'Kaki', 12, 0, 'M', NULL),
(36, 'Áo khoác nam', 500000, 'Áo khoác', '3', 'Dáng thông thường', 'Kaki', 12, 0, 'M', NULL),
(37, 'Áo khoác nam', 450000, 'Áo khoác', '3', 'Dáng thông thường', 'Kaki', 12, 0, 'M', NULL),
(38, 'Áo khoác nam', 500000, 'Áo khoác', '3', 'Dáng thông thường', 'Kaki', 12, 0, 'M', NULL),
(39, 'Áo khoác nam', 600000, 'Áo khoác', '3', 'Dáng thông thường', 'Kaki', 12, 0, 'M', NULL),
(40, 'Áo khoác nam', 550000, 'Áo khoác', '3', 'Dáng thông thường', 'Kaki', 12, 0, 'M', NULL),
(41, 'Áo khoác nam', 450000, 'Áo khoác', '3', 'Dáng thông thường', 'Kaki', 12, 0, 'M', NULL),
(42, 'Áo khoác nam', 400000, 'Áo khoác', '3', 'Dáng ôm', 'Vải', 12, 0, 'M', NULL),
(43, 'Áo khoác nam', 600000, 'Áo khoác', '3', 'Dáng thông thường', 'Cotton', 12, 0, 'M', NULL),
(44, 'Áo len nam', 350000, 'Áo len', '3', 'Dáng thông thường\r\nCổ tròn, tay dài\r\nSản phẩm ấm, nhẹ, mềm', 'Wool', 8, 0, 'M', NULL),
(45, 'Áo len nam', 250000, 'Áo len', '3', 'Dáng thông thường\r\nCổ tròn, tay dài\r\nSản phẩm ấm, nhẹ, mềm', 'Wool', 8, 0, 'M', NULL),
(46, 'Áo len nam', 250000, 'Áo len', '3', 'Dáng thông thường\r\nCổ tròn, tay dài\r\nSản phẩm ấm, nhẹ, mềm', 'Wool', 8, 0, 'M', NULL),
(47, 'Áo len nam', 250000, 'Áo len', '3', 'Dáng thông thường\r\nCổ tròn, tay dài\r\nSản phẩm ấm, nhẹ, mềm', 'Wool', 8, 0, 'M', NULL),
(48, 'Áo len nam', 250000, 'Áo len', '3', 'Dáng thông thường\r\nCổ tròn, tay dài\r\nSản phẩm ấm, nhẹ, mềm', 'Wool', 8, 0, 'M', NULL),
(49, 'Áo len nam', 250000, 'Áo len', '3', 'Dáng thông thường\r\nCổ tròn, tay dài\r\nSản phẩm ấm, nhẹ, mềm', 'Wool', 8, 0, 'M', NULL),
(50, 'Áo len nam', 250000, 'Áo len', '3', 'Dáng thông thường\r\nCổ tròn, tay dài\r\nSản phẩm ấm, nhẹ, mềm', 'Wool', 8, 0, 'M', NULL),
(51, 'Áo len nam', 250000, 'Áo len', '3', 'Dáng thông thường\r\nCổ tròn, tay dài\r\nSản phẩm ấm, nhẹ, mềm', 'Wool', 8, 0, 'M', NULL),
(52, 'Áo len nam', 250000, 'Áo len', '3', 'Dáng thông thường\r\nCổ tròn, tay dài\r\nSản phẩm ấm, nhẹ, mềm', 'Wool', 8, 0, 'M', NULL),
(53, 'Áo len nam', 450000, 'Áo len', '3', 'Dáng thông thường\r\nCổ tròn, tay dài\r\nSản phẩm ấm, nhẹ, mềm', 'Wool', 8, 0, 'M', NULL),
(54, 'Áo hoodies nam', 200000, 'Áo dài tay', '3', 'Dáng thông thường\r\nCó mũ, tay dài', 'Cotton, polyester', 4, 0, 'M', NULL),
(55, 'Áo hoodies nam', 200000, 'Áo dài tay', '3', 'Dáng thông thường\r\nCó mũ, tay dài', 'Cotton, polyester', 4, 0, 'M', NULL),
(56, 'Áo hoodies nam', 150000, 'Áo dài tay', '3', 'Dáng thông thường\r\nCó mũ, tay dài', 'Cotton, polyester', 4, 0, 'M', NULL),
(57, 'Áo hoodies nam', 250000, 'Áo dài tay', '3', 'Dáng thông thường\r\nCó mũ, tay dài', 'Cotton, polyester', 4, 0, 'M', NULL),
(58, 'Áo nỉ nam', 250000, 'Áo dài tay', '3', 'Dáng thông thường\r\nKhông mũ, tay dài', 'Cotton, polyester', 4, 0, 'M', NULL),
(59, 'Áo nỉ nam', 200000, 'Áo dài tay', '3', 'Dáng thông thường\r\nKhông mũ, tay dài', 'Cotton, polyester', 4, 0, 'M', NULL),
(60, 'Áo nỉ nam', 250000, 'Áo dài tay', '3', 'Dáng thông thường\r\nKhông mũ, tay dài', 'Cotton, polyester', 4, 0, 'M', NULL),
(61, 'Áo nỉ nam', 300000, 'Áo dài tay', '3', 'Dáng thông thường\r\nKhông mũ, tay dài', 'Cotton, polyester', 4, 0, 'M', NULL),
(62, 'Áo nỉ nam', 300000, 'Áo dài tay', '3', 'Dáng thông thường\r\nKhông mũ, tay dài', 'Cotton, polyester', 4, 0, 'M', NULL),
(63, 'Áo nỉ nam', 300000, 'Áo dài tay', '3', 'Dáng thông thường\r\nKhông mũ, tay dài', 'Cotton, polyester', 4, 0, 'M', NULL),
(65, 'Bộ mặc nhà nam', 350000, 'Bộ', '2', 'Kẻ caro, ngắn tay\r\nQuần cạp chun chắc chắn, co giãn thoải mái\r\nChất liệu mềm mại, thấm hút mồ hôi tốt', 'Cotton', 9, 0, 'M', NULL),
(66, 'Bộ mặc nhà nam', 350000, 'Bộ', '2', 'Kẻ caro, ngắn tay\r\nQuần cạp chun chắc chắn, co giãn thoải mái\r\nChất liệu mềm mại, thấm hút mồ hôi tốt', 'Cotton', 9, 0, 'M', NULL),
(67, 'Bộ mặc nhà nam', 350000, 'Bộ', '2', 'Kẻ caro, dài tay\r\nQuần cạp chun chắc chắn, co giãn thoải mái\r\nChất liệu mềm mại, thấm hút mồ hôi tốt', 'Cotton', 9, 0, 'M', NULL),
(68, 'Bộ mặc nhà nam', 350000, 'Bộ', '2', 'Kẻ caro, dài tay\r\nQuần cạp chun chắc chắn, co giãn thoải mái\r\nChất liệu mềm mại, thấm hút mồ hôi tốt', 'Cotton', 9, 0, 'M', NULL),
(69, 'Bộ mặc nhà nam', 300000, 'Bộ', '2', 'Dáng thường, cổ tròn, tay dài\r\nChất liệu mềm mại, thấm hút mồ hôi tốt', 'Cotton', 9, 0, 'M', NULL),
(70, 'Bộ bóng đá nam', 400000, 'Quần áo thể thao', '3', 'Bộ bóng đá nam', 'Polyester', 10, 0, 'M', NULL),
(71, 'Bộ bóng đá nam', 300000, 'Quần áo thể thao', '3', 'Bộ bóng đá nam', 'Polyester', 10, 0, 'M', NULL),
(72, 'Bộ bóng đá nam', 450000, 'Quần áo thể thao', '3', 'Bộ bóng đá nam', 'Polyester', 10, 0, 'M', NULL),
(73, 'Bộ bóng đá nam', 350000, 'Quần áo thể thao', '3', 'Bộ bóng đá nam', 'Polyester', 10, 0, 'M', NULL),
(74, 'Bộ bóng đá nam', 300000, 'Quần áo thể thao', '3', 'Bộ bóng đá nam', 'Polyester', 10, 0, 'M', NULL),
(75, 'Bộ bóng đá nam', 400000, 'Quần áo thể thao', '3', 'Bộ bóng đá nam', 'Polyester', 10, 0, 'M', NULL),
(76, 'Bộ bóng đá nam', 450000, 'Quần áo thể thao', '3', 'Bộ bóng đá nam', 'Polyester', 10, 0, 'M', NULL),
(77, 'Bộ bóng đá nam', 500000, 'Quần áo thể thao', '3', 'Bộ bóng đá nam ', 'Polyester', 10, 0, 'M', NULL),
(78, 'Quần jeans', 350000, 'Quần dài', '3', 'Dáng ôm', 'Cotton', 13, 0, 'M', NULL),
(79, 'Quần jeans', 350000, 'Quần dài', '3', 'Dáng ôm', 'Cotton', 13, 0, 'M', NULL),
(80, 'Quần jeans', 450000, 'Quần dài', '3', 'Dáng ôm', 'Cotton', 13, 0, 'M', NULL),
(81, 'Quần jeans', 350000, 'Quần dài', '3', 'Dáng ôm', 'Cotton', 13, 0, 'M', NULL),
(82, 'Quần jeans', 350000, 'Quần dài', '3', 'Dáng ôm', 'Cotton', 13, 0, 'M', NULL),
(83, 'Quần jeans', 350000, 'Quần dài', '3', 'Dáng ôm', 'Cotton', 13, 0, 'M', NULL),
(84, 'Quần jeans', 300000, 'Quần dài', '3', 'Dáng ôm', 'Cotton', 13, 0, 'M', NULL),
(85, 'Quần jeans', 350000, 'Quần dài', '3', 'Dáng ôm', 'Cotton', 13, 0, 'M', NULL),
(86, 'Quần jeans', 350000, 'Quần dài', '3', 'Dáng ôm', 'Cotton', 13, 0, 'M', NULL),
(87, 'Quần jeans', 350000, 'Quần dài', '3', 'Dáng ôm', 'Cotton', 13, 0, 'M', NULL),
(88, 'Quần shorts jeans nam', 30000, 'Quần shorts', '2', 'Dáng ôm\r\nQuần lửng', 'Cotton, spandex', 3, 0, 'M', NULL),
(89, 'Quần shorts nam họa tiết', 35000, 'Quần shorts', '2', 'Dáng ôm\r\nQuần lửng', 'Cotton, spandex', 3, 0, 'M', NULL),
(90, 'Quần shorts nam họa tiết', 25000, 'Quần shorts', '2', 'Dáng ôm\r\nQuần lửng', 'Cotton', 3, 0, 'M', NULL),
(91, 'Quần shorts nam họa tiết', 30000, 'Quần shorts', '2', 'Dáng ôm\r\nQuần lửng', 'Cotton, spandex', 3, 0, 'M', NULL),
(92, 'Quần shorts jeans nam', 25000, 'Quần shorts', '2', 'Dáng ôm\r\nQuần lửng', 'Cotton, spandex', 3, 0, 'M', NULL),
(93, 'Quần shorts jeans nam', 30000, 'Quần shorts', '2', 'Dáng ôm\r\nQuần lửng', 'Cotton, spandex', 3, 0, 'M', NULL),
(94, 'Quần shorts nam kẻ', 20000, 'Quần shorts', '2', 'Họa tiết kẻ caro nhiều màu\r\nQuần lửng', 'Cotton', 3, 0, 'M', NULL),
(95, 'Quần shorts nam', 35000, 'Quần shorts', '2', 'Dáng ôm\r\nQuần lửng', 'Cotton, spandex', 3, 0, 'M', NULL),
(96, 'Quần shorts nam', 35000, 'Quần shorts', '2', 'Dáng ôm\r\nQuần lửng', 'Cotton, spandex', 3, 0, 'M', NULL),
(97, 'Quần shorts nam', 35000, 'Quần shorts', '2', 'Dáng ôm\r\nQuần lửng', 'Cotton, spandex', 3, 0, 'M', NULL),
(98, 'Quần nam Quickdry', 500000, 'Quần dài', '', 'Quần nam Quickdry', 'Cotton', 11, 0, 'M', NULL),
(99, 'Quần nỉ nam', 200000, 'Quần dài', '', 'Dáng jogger', 'Cotton, Polyester', 11, 0, 'M', NULL),
(100, 'Quần nỉ nam', 200000, 'Quần dài', '', 'Dáng jogger', 'Cotton, Polyester', 11, 0, 'M', NULL),
(102, 'Quần âu', 300000, 'Quần dài', '', 'Quần vải nam, dáng thông thường ', 'Cotton', 11, 0, 'M', NULL),
(103, 'Quần âu', 350000, 'Quần dài', '', 'Quần vải nam, dáng thông thường ', 'Cotton', 11, 0, 'M', NULL),
(104, 'Quần âu', 400000, 'Quần dài', '', 'Quần vải nam, dáng thông thường ', 'Cotton', 11, 0, 'M', NULL),
(105, 'Quần âu', 350000, 'Quần dài', '', 'Quần vải nam, dáng thông thường ', 'Cotton', 11, 0, 'M', NULL),
(106, 'Quần âu', 300000, 'Quần dài', '', 'Quần vải nam, dáng thông thường ', 'Cotton', 11, 0, 'M', NULL),
(107, 'Quần âu', 450000, 'Quần dài', '', 'Quần vải nam, dáng thông thường ', 'Cotton', 11, 0, 'M', NULL),
(108, 'Quần âu', 500000, 'Quần dài', '', 'Quần vải nam, dáng thông thường ', 'Cotton', 11, 0, 'M', NULL),
(200, 'Áo phông nữ họa tiết kẻ', 249000, 'Áo phông', '26-04-2019', 'Áo phông nữ họa tiết kẻ phong cách trẻ trung', 'cotton', 5, 0, 'F', NULL),
(201, 'Áo phông nữ in to ', 249000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '100%;Cotton US;Không sử dụng hóa chất tẩy', 5, 0, 'F', NULL),
(202, 'Áo phông nữ mickey', 249000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '100%;Cotton US;Không sử dụng hóa chất tẩy', 5, 0, 'F', NULL),
(203, 'Áo phông nữ', 249000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '56% rayon 44% polyester', 5, 0, 'F', NULL),
(204, 'Áo phông nữ mickey v2', 299000, 'Áo phông', '26-04-2019', 'Áo phông nữ họa tiết kẻ phong cách trẻ trung', '64%polyester 33%tencel 3% spandex', 5, 0, 'F', NULL),
(205, 'Áo phông nữ', 249000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '100%;Cotton US;Không sử dụng hóa chất tẩy', 5, 0, 'F', NULL),
(206, 'Áo phông nữ cổ tim', 249000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '100%;Cotton US;Không sử dụng hóa chất tẩy', 5, 0, 'F', NULL),
(207, 'Áo phông nữ cổ to', 200000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '56% rayon 44% polyester', 5, 0, 'F', NULL),
(208, 'Áo phông nữ cơ bản cổ tim', 249000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '56% rayon 44% polyester', 4, 0, 'F', NULL),
(209, 'Áo phông nữ tay chờm', 249000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '56% rayon 44% polyester', 5, 0, 'F', NULL),
(210, 'Áo phông nữ họa tiết', 200000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '56% rayon 44% polyester', 5, 0, 'F', NULL),
(211, 'Áo phông nữ in chữ', 249000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '56% rayon 44% polyester', 4, 0, 'F', NULL),
(212, 'Áo phông nữ họa tiết kẻ', 249000, 'Áo phông', '26-04-2019', 'Áo phông nữ họa tiết kẻ phong cách trẻ trung', 'cotton', 5, 0, 'F', NULL),
(213, 'Áo phông nữ in to ', 249000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '100%;Cotton US;Không sử dụng hóa chất tẩy', 5, 0, 'F', NULL),
(214, 'Áo phông nữ mickey', 249000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '100%;Cotton US;Không sử dụng hóa chất tẩy', 5, 0, 'F', NULL),
(215, 'Áo phông nữ', 249000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '56% rayon 44% polyester', 5, 0, 'F', NULL),
(216, 'Áo phông nữ mickey v2', 299000, 'Áo phông', '26-04-2019', 'Áo phông nữ họa tiết kẻ phong cách trẻ trung', '64%polyester 33%tencel 3% spandex', 5, 0, 'F', NULL),
(217, 'Áo phông nữ', 249000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '100%;Cotton US;Không sử dụng hóa chất tẩy', 5, 0, 'F', NULL),
(218, 'Áo phông nữ cổ tim', 249000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '100%;Cotton US;Không sử dụng hóa chất tẩy', 5, 0, 'F', NULL),
(219, 'Áo phông nữ cổ to', 200000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '56% rayon 44% polyester', 5, 0, 'F', NULL),
(220, 'Áo phông nữ cơ bản cổ tim', 249000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '56% rayon 44% polyester', 4, 0, 'F', NULL),
(221, 'Áo phông nữ tay chờm', 249000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '56% rayon 44% polyester', 5, 0, 'F', NULL),
(222, 'Áo phông nữ họa tiết', 200000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '56% rayon 44% polyester', 5, 0, 'F', NULL),
(223, 'Áo phông nữ in chữ', 249000, 'Áo phông', '26-04-2019', 'Dáng thông thường (regular);Cổ tròn, tay cộc', '56% rayon 44% polyester', 4, 0, 'F', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_option`
--

CREATE TABLE `product_option` (
  `optID` int(11) NOT NULL,
  `proID` int(11) NOT NULL,
  `size` varchar(2) NOT NULL,
  `color` varchar(20) NOT NULL DEFAULT 'Black',
  `stock_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product_option`
--

INSERT INTO `product_option` (`optID`, `proID`, `size`, `color`, `stock_quantity`) VALUES
(1, 1, 'S', 'Red', 2),
(2, 1, 'M', 'Red', 3),
(3, 1, 'L', 'Red', 4),
(4, 1, 'XL', 'Red', 4),
(6, 1, 'S', 'Black', 2),
(7, 1, 'M', 'Black', 2),
(8, 1, 'L', 'Black', 2),
(9, 1, 'XL', 'Black', 2),
(10, 2, 'S', 'Black', 4),
(11, 2, 'M', 'Black', 6),
(12, 2, 'L', 'Black', 5),
(13, 2, 'XL', 'Black', 7),
(14, 2, 'S', 'Gray', 4),
(15, 2, 'M', 'Gray', 5),
(16, 2, 'L', 'Gray', 4),
(17, 2, 'XL', 'Gray', 7),
(18, 3, 'S', 'Black', 4),
(19, 3, 'M', 'Black', 6),
(20, 3, 'L', 'Black', 5),
(21, 3, 'XL', 'Black', 7),
(22, 3, 'S', 'Gray', 4),
(23, 3, 'M', 'Gray', 6),
(24, 3, 'L', 'Gray', 5),
(25, 3, 'XL', 'Gray', 7),
(26, 200, 'S', 'ke_den', 20),
(27, 200, 'M', 'ke_den', 20),
(28, 200, 'L', 'ke_den', 20),
(29, 200, 'S', 'ke_do', 20),
(30, 200, 'M', 'ke_do', 20),
(31, 200, 'L', 'ke_do', 20),
(32, 200, 'XL', 'ke_do', 20),
(33, 201, 'S', 'Yellow', 20),
(34, 201, 'M', 'Yellow', 20),
(35, 201, 'L', 'Yellow', 20),
(36, 201, 'XL', 'Yellow', 20),
(37, 201, 'S', 'Pink', 20),
(38, 201, 'M', 'Pink', 20),
(39, 201, 'L', 'Pink', 20),
(40, 201, 'XL', 'Pink', 20),
(41, 201, 'S', 'Red', 20),
(42, 201, 'M', 'Red', 20),
(43, 201, 'L', 'Red', 20),
(44, 201, 'XL', 'Red', 20),
(45, 202, 'S', 'Red', 20),
(46, 202, 'M', 'Red', 20),
(47, 202, 'L', 'Red', 20),
(48, 202, 'XL', 'Red', 20),
(49, 202, 'S', 'White', 20),
(50, 202, 'M', 'White', 20),
(51, 202, 'L', 'White', 20),
(52, 202, 'XL', 'White', 20),
(53, 202, 'S', 'Yellow', 20),
(54, 202, 'M', 'Yellow', 20),
(55, 202, 'L', 'Yellow', 20),
(56, 202, 'XL', 'Yellow', 20),
(57, 203, 'S', 'White', 20),
(58, 203, 'M', 'White', 20),
(59, 203, 'L', 'White', 20),
(60, 203, 'XL', 'White', 20),
(61, 203, 'S', 'Black', 20),
(62, 203, 'M', 'Black', 20),
(63, 203, 'L', 'Black', 20),
(64, 203, 'XL', 'Black', 20),
(65, 203, 'S', 'White', 20),
(66, 203, 'M', 'White', 20),
(67, 203, 'L', 'White', 20),
(68, 203, 'XL', 'White', 20),
(69, 204, 'S', 'Black', 20),
(70, 204, 'M', 'Black', 20),
(71, 204, 'L', 'Black', 20),
(72, 204, 'S', 'Red', 20),
(73, 204, 'M', 'Red', 20),
(74, 204, 'L', 'Red', 20),
(75, 204, 'XL', 'Red', 20),
(76, 204, 'S', 'White', 20),
(77, 204, 'M', 'White', 20),
(78, 204, 'L', 'White', 20),
(79, 204, 'XL', 'White', 20),
(80, 205, 'S', 'Black', 20),
(81, 205, 'M', 'Black', 20),
(82, 205, 'L', 'Black', 20),
(83, 205, 'S', 'Pink', 20),
(84, 205, 'M', 'Pink', 20),
(85, 205, 'L', 'Pink', 20),
(86, 206, 'S', 'Red', 20),
(87, 206, 'M', 'Red', 20),
(88, 206, 'L', 'Red', 20),
(89, 206, 'XL', 'Red', 20),
(90, 206, 'S', 'White', 20),
(91, 206, 'M', 'White', 20),
(92, 206, 'L', 'White', 20),
(93, 206, 'XL', 'White', 20),
(94, 206, 'S', 'Black', 20),
(95, 206, 'M', 'Black', 20),
(96, 206, 'L', 'Black', 20),
(97, 206, 'XL', 'Black', 20),
(98, 206, 'S', 'Pink', 20),
(99, 206, 'M', 'Pink', 20),
(100, 206, 'L', 'Pink', 20),
(101, 206, 'XL', 'Pink', 20),
(102, 207, 'S', 'White', 20),
(103, 207, 'M', 'White', 20),
(104, 207, 'L', 'White', 20),
(105, 207, 'XL', 'White', 20),
(106, 207, 'S', 'Black', 20),
(107, 207, 'M', 'Black', 20),
(108, 207, 'L', 'Black', 20),
(109, 207, 'XL', 'Black', 20),
(110, 208, 'S', 'Red', 20),
(111, 208, 'M', 'Red', 20),
(112, 208, 'L', 'Red', 20),
(113, 208, 'XL', 'Red', 20),
(114, 208, 'S', 'White', 20),
(115, 208, 'M', 'White', 20),
(116, 208, 'L', 'White', 20),
(117, 208, 'XL', 'White', 20),
(118, 208, 'S', 'Black', 20),
(119, 208, 'M', 'Black', 20),
(120, 208, 'L', 'Black', 20),
(121, 208, 'XL', 'Black', 20),
(122, 208, 'S', 'Pink', 20),
(123, 208, 'M', 'Pink', 20),
(124, 208, 'L', 'Pink', 20),
(125, 208, 'XL', 'Pink', 20),
(126, 209, 'S', 'Sky', 20),
(127, 209, 'M', 'Sky', 20),
(128, 209, 'L', 'Sky', 20),
(129, 209, 'XL', 'Sky', 20),
(130, 209, 'S', 'White', 20),
(131, 209, 'M', 'White', 20),
(132, 209, 'L', 'White', 20),
(133, 209, 'XL', 'White', 20),
(134, 209, 'S', 'Black', 20),
(135, 209, 'M', 'Black', 20),
(136, 209, 'L', 'Black', 20),
(137, 209, 'XL', 'Black', 20),
(138, 209, 'S', 'Pink', 20),
(139, 209, 'M', 'Pink', 20),
(140, 209, 'L', 'Pink', 20),
(141, 209, 'XL', 'Pink', 20),
(142, 210, 'S', 'Sky', 20),
(143, 210, 'M', 'Sky', 20),
(144, 210, 'L', 'Sky', 20),
(145, 210, 'XL', 'Sky', 20),
(146, 210, 'S', 'White', 20),
(147, 210, 'M', 'White', 20),
(148, 210, 'L', 'White', 20),
(149, 210, 'XL', 'White', 20),
(150, 210, 'S', 'Black', 20),
(151, 210, 'M', 'Black', 20),
(152, 210, 'L', 'Black', 20),
(153, 210, 'XL', 'Black', 20),
(154, 210, 'S', 'Pink', 20),
(155, 210, 'M', 'Pink', 20),
(156, 210, 'L', 'Pink', 20),
(157, 210, 'XL', 'Pink', 20),
(158, 210, 'XL', 'Pink', 20),
(159, 211, 'S', 'Sky', 20),
(160, 211, 'M', 'Sky', 20),
(161, 211, 'L', 'Sky', 20),
(162, 211, 'XL', 'Sky', 20),
(163, 211, 'S', 'White', 20),
(164, 211, 'M', 'White', 20),
(165, 211, 'L', 'White', 20),
(166, 211, 'XL', 'White', 20),
(167, 211, 'S', 'Black', 20),
(168, 211, 'M', 'Black', 20),
(169, 211, 'L', 'Black', 20),
(170, 211, 'XL', 'Black', 20),
(171, 211, 'S', 'Pink', 20),
(172, 211, 'M', 'Pink', 20),
(173, 211, 'L', 'Pink', 20),
(174, 211, 'XL', 'Pink', 20),
(175, 212, 'S', 'ke_nau', 20),
(176, 212, 'M', 'ke_nau', 20),
(177, 212, 'L', 'ke_nau', 20),
(178, 212, 'S', 'ke_do', 20),
(179, 212, 'M', 'ke_do', 20),
(180, 212, 'L', 'ke_do', 20),
(181, 212, 'XL', 'ke_do', 20),
(182, 213, 'S', 'Yellow', 20),
(183, 213, 'M', 'Yellow', 20),
(184, 213, 'L', 'Yellow', 20),
(185, 213, 'XL', 'Yellow', 20),
(186, 213, 'S', 'Pink', 20),
(187, 213, 'M', 'Pink', 20),
(188, 213, 'L', 'Pink', 20),
(189, 213, 'XL', 'Pink', 20),
(190, 213, 'S', 'Red', 20),
(191, 213, 'M', 'Red', 20),
(192, 213, 'L', 'Red', 20),
(193, 213, 'XL', 'Red', 20),
(194, 214, 'S', 'Red', 20),
(195, 214, 'M', 'Red', 20),
(196, 214, 'L', 'Red', 20),
(197, 214, 'XL', 'Red', 20),
(198, 214, 'S', 'White', 20),
(199, 214, 'M', 'White', 20),
(200, 214, 'L', 'White', 20),
(201, 214, 'XL', 'White', 20),
(202, 214, 'S', 'Yellow', 20),
(203, 214, 'M', 'Yellow', 20),
(204, 214, 'L', 'Yellow', 20),
(205, 214, 'XL', 'Yellow', 20),
(206, 215, 'S', 'White', 20),
(207, 215, 'M', 'White', 20),
(208, 215, 'L', 'White', 20),
(209, 215, 'XL', 'White', 20),
(210, 215, 'S', 'Black', 20),
(211, 215, 'M', 'Black', 20),
(212, 215, 'L', 'Black', 20),
(213, 215, 'XL', 'Black', 20),
(214, 215, 'S', 'White', 20),
(215, 215, 'M', 'White', 20),
(216, 215, 'L', 'White', 20),
(217, 215, 'XL', 'White', 20),
(218, 216, 'S', 'Black', 20),
(219, 216, 'M', 'Black', 20),
(220, 216, 'L', 'Black', 20),
(221, 216, 'S', 'Red', 20),
(222, 216, 'M', 'Red', 20),
(223, 216, 'L', 'Red', 20),
(224, 216, 'XL', 'Red', 20),
(225, 216, 'S', 'ke_nau', 20),
(226, 216, 'M', 'ke_nau', 20),
(227, 216, 'L', 'ke_nau', 20),
(228, 216, 'XL', 'ke_nau', 20),
(229, 217, 'S', 'Black', 20),
(230, 217, 'M', 'Black', 20),
(231, 217, 'L', 'Black', 20),
(232, 217, 'S', 'Pink', 20),
(233, 217, 'M', 'Pink', 20),
(234, 217, 'L', 'Pink', 20),
(235, 218, 'S', 'Red', 20),
(236, 218, 'M', 'Red', 20),
(237, 218, 'L', 'Red', 20),
(238, 218, 'XL', 'Red', 20),
(239, 218, 'S', 'White', 20),
(240, 218, 'M', 'White', 20),
(241, 218, 'L', 'White', 20),
(242, 218, 'XL', 'White', 20),
(243, 218, 'S', 'Black', 20),
(244, 218, 'M', 'Black', 20),
(245, 218, 'L', 'Black', 20),
(246, 218, 'XL', 'Black', 20),
(247, 218, 'S', 'Pink', 20),
(248, 218, 'M', 'Pink', 20),
(249, 218, 'L', 'Pink', 20),
(250, 218, 'XL', 'Pink', 20),
(251, 219, 'S', 'White', 20),
(252, 219, 'M', 'White', 20),
(253, 219, 'L', 'White', 20),
(254, 219, 'XL', 'White', 20),
(255, 219, 'S', 'Black', 20),
(256, 219, 'M', 'Black', 20),
(257, 219, 'L', 'Black', 20),
(258, 219, 'XL', 'Black', 20),
(259, 220, 'S', 'Red', 20),
(260, 220, 'M', 'Red', 20),
(261, 220, 'L', 'Red', 20),
(262, 220, 'XL', 'Red', 20),
(263, 220, 'S', 'White', 20),
(264, 220, 'M', 'White', 20),
(265, 220, 'L', 'White', 20),
(266, 220, 'XL', 'White', 20),
(267, 220, 'S', 'Black', 20),
(268, 220, 'M', 'Black', 20),
(269, 220, 'L', 'Black', 20),
(270, 220, 'XL', 'Black', 20),
(271, 220, 'S', 'Pink', 20),
(272, 220, 'M', 'Pink', 20),
(273, 220, 'L', 'Pink', 20),
(274, 220, 'XL', 'Pink', 20),
(275, 221, 'S', 'Sky', 20),
(276, 221, 'M', 'Sky', 20),
(277, 221, 'L', 'Sky', 20),
(278, 221, 'XL', 'Sky', 20),
(279, 221, 'S', 'White', 20),
(280, 221, 'M', 'White', 20),
(281, 221, 'L', 'White', 20),
(282, 221, 'XL', 'White', 20),
(283, 221, 'S', 'Black', 20),
(284, 221, 'M', 'Black', 20),
(285, 221, 'L', 'Black', 20),
(286, 221, 'XL', 'Black', 20),
(287, 221, 'S', 'Pink', 20),
(288, 221, 'M', 'Pink', 20),
(289, 221, 'L', 'Pink', 20),
(290, 221, 'XL', 'Pink', 20),
(291, 222, 'XL', 'Pink', 20),
(292, 222, 'S', 'Sky', 20),
(293, 222, 'M', 'Sky', 20),
(294, 222, 'L', 'Sky', 20),
(295, 222, 'XL', 'Sky', 20),
(296, 222, 'S', 'White', 20),
(297, 222, 'M', 'White', 20),
(298, 222, 'L', 'White', 20),
(299, 222, 'XL', 'White', 20),
(300, 222, 'S', 'Black', 20),
(301, 222, 'M', 'Black', 20),
(302, 222, 'L', 'Black', 20),
(303, 222, 'XL', 'Black', 20),
(304, 222, 'S', 'Pink', 20),
(305, 222, 'M', 'Pink', 20),
(306, 222, 'L', 'Pink', 20),
(307, 222, 'XL', 'Pink', 20),
(308, 223, 'S', 'Sky', 20),
(309, 223, 'M', 'Sky', 20),
(310, 223, 'L', 'Sky', 20),
(311, 223, 'XL', 'Sky', 20),
(312, 223, 'S', 'White', 20),
(313, 223, 'M', 'White', 20),
(314, 223, 'L', 'White', 20),
(315, 223, 'XL', 'White', 20),
(316, 223, 'S', 'Black', 20),
(317, 223, 'M', 'Black', 20),
(318, 223, 'L', 'Black', 20),
(319, 223, 'XL', 'Black', 20),
(320, 223, 'S', 'Pink', 20),
(321, 223, 'M', 'Pink', 20),
(322, 223, 'L', 'Pink', 20),
(323, 223, 'XL', 'Pink', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rate_product`
--

CREATE TABLE `rate_product` (
  `accID` int(11) NOT NULL,
  `proID` int(11) NOT NULL,
  `point` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `rate_product`
--

INSERT INTO `rate_product` (`accID`, `proID`, `point`) VALUES
(2, 200, 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accID`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`accID`,`optID`),
  ADD KEY `optID` (`optID`);

--
-- Chỉ mục cho bảng `comment_product`
--
ALTER TABLE `comment_product`
  ADD KEY `accID` (`accID`),
  ADD KEY `proID` (`proID`);

--
-- Chỉ mục cho bảng `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyID`);

--
-- Chỉ mục cho bảng `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`orderID`,`proID`),
  ADD KEY `Fk_do_p` (`proID`);

--
-- Chỉ mục cho bảng `img`
--
ALTER TABLE `img`
  ADD KEY `proID` (`proID`);

--
-- Chỉ mục cho bảng `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `accID` (`accID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`proID`),
  ADD KEY `companyID` (`companyID`);

--
-- Chỉ mục cho bảng `product_option`
--
ALTER TABLE `product_option`
  ADD PRIMARY KEY (`optID`),
  ADD KEY `proID` (`proID`);

--
-- Chỉ mục cho bảng `rate_product`
--
ALTER TABLE `rate_product`
  ADD PRIMARY KEY (`accID`,`proID`),
  ADD KEY `FKey2` (`proID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `accID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `company`
--
ALTER TABLE `company`
  MODIFY `companyID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `order_product`
--
ALTER TABLE `order_product`
  MODIFY `orderID` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `proID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT cho bảng `product_option`
--
ALTER TABLE `product_option`
  MODIFY `optID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`accID`) REFERENCES `account` (`accID`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`optID`) REFERENCES `product_option` (`optID`);

--
-- Các ràng buộc cho bảng `comment_product`
--
ALTER TABLE `comment_product`
  ADD CONSTRAINT `comment_product_ibfk_1` FOREIGN KEY (`accID`) REFERENCES `account` (`accID`),
  ADD CONSTRAINT `comment_product_ibfk_2` FOREIGN KEY (`proID`) REFERENCES `product` (`proID`);

--
-- Các ràng buộc cho bảng `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `Fk_do_od` FOREIGN KEY (`orderID`) REFERENCES `order_product` (`orderID`),
  ADD CONSTRAINT `Fk_do_p` FOREIGN KEY (`proID`) REFERENCES `product` (`proID`);

--
-- Các ràng buộc cho bảng `img`
--
ALTER TABLE `img`
  ADD CONSTRAINT `img_ibfk_1` FOREIGN KEY (`proID`) REFERENCES `product` (`proID`);

--
-- Các ràng buộc cho bảng `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`accID`) REFERENCES `account` (`accID`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`companyID`) REFERENCES `company` (`companyID`);

--
-- Các ràng buộc cho bảng `product_option`
--
ALTER TABLE `product_option`
  ADD CONSTRAINT `product_option_ibfk_1` FOREIGN KEY (`proID`) REFERENCES `product` (`proID`);

--
-- Các ràng buộc cho bảng `rate_product`
--
ALTER TABLE `rate_product`
  ADD CONSTRAINT `FKey` FOREIGN KEY (`accID`) REFERENCES `account` (`accID`),
  ADD CONSTRAINT `FKey2` FOREIGN KEY (`proID`) REFERENCES `product` (`proID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
