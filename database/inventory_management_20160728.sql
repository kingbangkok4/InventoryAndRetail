-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2016 at 09:49 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `address` text CHARACTER SET utf8,
  `mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `line` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id`, `name`, `address`, `mobile`, `line`, `email`) VALUES
(10, 'view village', '19/27', '899999999', 'adada', 'view128@hotmail.com'),
(12, 'dfasfds dfsdf', 'fsfs', '2222222222', '555555', 'ddf@wwwww'),
(13, 'dfasdf fads', 'dasfds', '4444444444', 'dfasdf', 'ggsfggf@fsadfad'),
(14, 'asfads ffdaads', 'dfa', '4444444444', 'dfaf', 'ggd@fdfadsfad'),
(15, 'adffa dafad', 'fadf', '7777777777', 'dfasfa', 'df@ooooo'),
(16, 'xdasdasd adasd', 'adasd', '7777777777', 'asdad', 'hhdd@88888'),
(17, 'ssss sss', 'hfhdhd', '9999999999', 'sdddd', 'dfsdfs@flgkf'),
(18, 'dafads fdsaf', 'fdafadsf', '3034043333', 'fdasfas', 'fds@pppppp'),
(19, 'adfadfsd dafd', 'fafdaf', '4444444444', 'sasdfasfa', 'gggg%/@f4f44d'),
(22, '667748 666', '66666', '6464444444', 'hffgdfg', 'hhh@9999'),
(23, 'zxczcz nvnvb', 'nnvbv', '5555555555', 'czczbnbvn', 'gvdk@gohoh'),
(24, 'fafda afadfa', 'fafafd', '0000000999', 'afaf', 'gssgsgh@eee'),
(25, 'ada ddsa', 'sada', '4555555444', 'sssd', 'fddd@sssss');

-- --------------------------------------------------------

--
-- Table structure for table `tb_employee`
--

CREATE TABLE `tb_employee` (
  `id` int(11) NOT NULL,
  `fullname` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_ref` int(11) DEFAULT NULL,
  `province` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_employee`
--

INSERT INTO `tb_employee` (`id`, `fullname`, `mobile`, `email`, `address`, `title`, `user_ref`, `province`) VALUES
(9, 'ผู้ดูแล ระบบ', '0555555555', 'admin@gmail.com', '																																														88/989																																												', 'นางสาว', 3, 'กาฬสินธุ์'),
(13, 'aaa bb', '8888888888', 'aaa@bbb.net', '					12334/534636																																																											', 'นาย', 20, 'กรุงเทพมหานคร'),
(16, 'd d', '0999999999', 'oil_takashi@hotmail.com', 'dd', 'นาย', 23, 'กระบี่'),
(17, 'dd dd', '0444444444', 'oil_takashi@hotmail.com', 'd', 'นาย', 24, 'กระบี่'),
(18, 'v v', '0899999999', 'oil_takashi@hotmail.com', 'gkkh\r\n', 'นาย', 25, 'กระบี่');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `order_no` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Order','Paid','Pack','Post') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Order',
  `total_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`order_no`, `customer_id`, `user_id`, `order_date`, `status`, `total_price`) VALUES
(1, 0, 0, '0000-00-00 00:00:00', '', '0'),
(2, 0, 0, '0000-00-00 00:00:00', '', '0'),
(3, 0, 0, '0000-00-00 00:00:00', '', '0'),
(4, 0, 0, '0000-00-00 00:00:00', '', '0'),
(5, 0, 0, '0000-00-00 00:00:00', '', '0'),
(6, 0, 0, '0000-00-00 00:00:00', '', '0'),
(7, 0, 0, '0000-00-00 00:00:00', '', '0'),
(8, 0, 0, '0000-00-00 00:00:00', '', '0'),
(9, 0, 0, '0000-00-00 00:00:00', '', '0'),
(10, 0, 0, '0000-00-00 00:00:00', '', '0'),
(11, 0, 0, '2016-07-28 13:57:44', 'Order', '0'),
(12, 0, 0, '2016-07-28 13:58:52', 'Order', '0'),
(13, 0, 0, '2016-07-28 13:59:55', 'Order', '0'),
(14, 0, 0, '2016-07-28 13:59:59', 'Order', '0'),
(15, 0, 0, '2016-07-28 14:00:39', 'Order', '0'),
(16, 0, 0, '2016-07-28 14:03:42', 'Order', '0'),
(17, 25, 3, '2016-07-28 14:04:08', 'Order', '1090'),
(18, 25, 3, '2016-07-28 14:24:56', 'Order', '1090'),
(19, 25, 3, '2016-07-28 14:25:41', 'Order', '1090'),
(20, 25, 3, '2016-07-28 14:26:15', 'Order', '1090'),
(21, 25, 3, '2016-07-28 14:28:31', 'Order', '1090'),
(22, 25, 3, '2016-07-28 14:29:37', 'Order', '0'),
(23, 25, 3, '2016-07-28 14:31:46', 'Order', '3250'),
(24, 25, 3, '2016-07-28 14:33:28', 'Order', '1752'),
(25, 25, 3, '2016-07-28 14:39:49', 'Order', '1740'),
(26, 25, 3, '2016-07-28 14:42:57', 'Order', '2950'),
(27, 25, 3, '2016-07-28 14:44:09', 'Order', '590'),
(28, 25, 3, '2016-07-28 14:45:42', 'Order', '650'),
(29, 25, 3, '2016-07-28 14:46:08', 'Order', '500'),
(30, 25, 3, '2016-07-28 14:47:08', 'Order', '1000'),
(31, 25, 3, '2016-07-28 14:48:28', 'Order', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(11) NOT NULL,
  `product_id` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_unit` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_cost` int(11) NOT NULL,
  `product_price` int(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `low_quantity` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `product_id`, `product_name`, `product_unit`, `product_cost`, `product_price`, `quantity`, `low_quantity`, `status`, `timestamp`) VALUES
(1, '001', 'ยาลดน้ำหนักระดับ1', 'ชุด', 5, 12, 20, 40, 1, '2016-03-06 11:04:17'),
(2, '002', 'ยาลดสูตร1 ลดช่วงล่าง ขา น่อง', 'ซอง', 0, 500, 50, 10, 1, '2016-03-06 11:04:17'),
(5, '003', 'ยาลดสูตร2 ยาลดแขน ปีกหลัง พุง', 'ซอง', 0, 500, 50, 100, 1, '2016-03-08 15:35:56'),
(6, '004', 'ยาลดน้ำหนักระดับ2', 'ชุด', 0, 650, 3, 5, 1, '2016-03-08 15:40:10'),
(7, '005', 'บล็อกสลายไขมัน', 'ซอง', 0, 500, 40, 0, 1, '2016-03-08 15:40:48'),
(8, '006', 'สมุนไพรทลายพุง', 'ซอง', 0, 120, 30, 0, 1, '2016-03-08 15:42:35'),
(10, '007', 'Super Detoxify', 'กระปุก', 0, 590, 30, 50, 1, '2016-03-08 15:45:55'),
(11, '008', 'Box Set Slim ระดับ 1', 'กล่อง', 0, 1800, 30, 0, 1, '2016-03-11 08:10:25'),
(12, '009', 'Box Set Slim ระดับ 2', 'กล่อง', 0, 2600, 20, 0, 1, '2016-03-11 08:11:44'),
(13, '010', 'FOMEYA', 'กล่อง', 0, 500, 30, 0, 1, '2016-03-11 08:23:59'),
(14, '011', 'ยาหยุด', 'ชุด', 0, 450, 30, 0, 1, '2016-03-11 10:05:35'),
(15, '012', 'สมุนไพรทลายพุง', 'กระปุก', 0, 350, 20, 0, 1, '2016-03-11 10:09:56'),
(16, '012', 'ยาดม', 'ตะหลับ', 0, 10, 8, 0, 1, '2016-03-26 16:28:39'),
(17, '005', 'ยาดม', 'ตะหลับ', 0, 4, 2, 0, 1, '2016-03-26 16:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_productin`
--

CREATE TABLE `tb_productin` (
  `id` int(11) NOT NULL,
  `product_id` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `productin_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_productin`
--

INSERT INTO `tb_productin` (`id`, `product_id`, `quantity`, `productin_date`, `user`) VALUES
(2, '001', 10, '2016-03-20 10:53:56', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_productout`
--

CREATE TABLE `tb_productout` (
  `id` int(11) NOT NULL,
  `product_id` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `productout_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pay_status` tinyint(1) NOT NULL DEFAULT '0',
  `user` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_productout`
--

INSERT INTO `tb_productout` (`id`, `product_id`, `quantity`, `productout_date`, `pay_status`, `user`) VALUES
(2, '001', 20, '2016-03-20 11:09:23', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_province`
--

CREATE TABLE `tb_province` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

--
-- Dumping data for table `tb_province`
--

INSERT INTO `tb_province` (`id`, `name`) VALUES
(1, 'กระบี่'),
(2, 'กรุงเทพมหานคร'),
(3, 'กาญจนบุรี'),
(4, 'กาฬสินธุ์'),
(5, 'กำแพงเพชร'),
(6, 'ขอนแก่น'),
(7, 'จันทบุรี'),
(8, 'ฉะเชิงเทรา'),
(9, 'ชลบุรี'),
(10, 'ชัยนาท'),
(11, 'ชัยภูมิ'),
(12, 'ชุมพร'),
(13, 'เชียงราย'),
(14, 'เชียงใหม่'),
(15, 'ตรัง'),
(16, 'ตราด'),
(17, 'ตาก'),
(18, 'นครนายก'),
(19, 'นครปฐม'),
(20, 'นครพนม'),
(21, 'นครราชสีมา'),
(22, 'นครศรีธรรมราช'),
(23, 'นครสวรรค์'),
(24, 'นนทบุรี'),
(25, 'นราธิวาส'),
(26, 'น่าน'),
(27, 'บุรีรัมย์'),
(28, 'ปทุมธานี'),
(29, 'ประจวบคีรีขันธ์'),
(30, 'ปราจีนบุรี'),
(31, 'ปัตตานี'),
(32, 'พระนครศรีอยุธยา'),
(33, 'พะเยา'),
(34, 'พังงา'),
(35, 'พัทลุง'),
(36, 'พิจิตร'),
(37, 'พิษณุโลก'),
(38, 'เพชรบุรี'),
(39, ' เพชรบูรณ์'),
(40, 'แพร่'),
(41, 'ภูเก็ต'),
(42, 'มหาสารคาม'),
(43, 'มุกดาหาร'),
(44, 'แม่ฮ่องสอน'),
(45, 'ยโสธร'),
(46, 'ยะลา'),
(47, 'ร้อยเอ็ด'),
(48, 'ระนอง'),
(49, 'ระยอง'),
(50, 'ราชบุรี'),
(51, 'ลพบุรี'),
(52, 'ลำปาง'),
(53, 'ลำพูน'),
(54, 'เลย'),
(55, 'ศรีสะเกษ'),
(56, 'สกลนคร'),
(57, 'สงขลา'),
(58, 'สตูล'),
(59, 'สมุทรปราการ'),
(60, 'สมุทรสงคราม'),
(61, 'สมุทรสาคร'),
(62, 'สระแก้ว'),
(63, 'สระบุรี'),
(64, 'สิงห์บุรี'),
(65, 'สุโขทัย'),
(66, 'สุพรรณบุรี'),
(67, 'สุราษฎร์ธานี'),
(68, 'สุรินทร์'),
(69, 'หนองคาย'),
(70, 'หนองบัวลำภู'),
(71, 'อ่างทอง'),
(72, 'อำนาจเจริญ'),
(73, 'อุดรธานี'),
(74, 'อุตรดิตถ์'),
(75, 'อุทัยธานี'),
(76, 'อุบลราชธานี');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sell`
--

CREATE TABLE `tb_sell` (
  `sale_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `product_price` decimal(10,0) NOT NULL DEFAULT '0',
  `sum_price` decimal(11,0) NOT NULL,
  `order_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_sell`
--

INSERT INTO `tb_sell` (`sale_id`, `product_id`, `qty`, `product_price`, `sum_price`, `order_no`) VALUES
(1, 5, 0, '0', '0', 21),
(2, 7, 0, '0', '0', 21),
(3, 4, 0, '0', '0', 23),
(4, 9, 0, '0', '0', 23),
(5, 7, 0, '0', '0', 24),
(6, 4, 0, '0', '0', 24),
(7, 2, 0, '0', '0', 24),
(8, 1, 0, '0', '0', 24),
(9, 4, 1, '0', '650', 25),
(10, 7, 2, '0', '1180', 25),
(11, 5, 3, '0', '1500', 25),
(12, 5, 1, '0', '500', 30),
(13, 5, 1, '0', '500', 30),
(14, 5, 1, '500', '500', 31),
(15, 5, 1, '500', '500', 31),
(16, 5, 1, '500', '500', 31);

-- --------------------------------------------------------

--
-- Table structure for table `tb_unit`
--

CREATE TABLE `tb_unit` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_unit`
--

INSERT INTO `tb_unit` (`id`, `name`) VALUES
(1, 'ชุด'),
(2, 'เซ็ต'),
(3, 'กล่อง'),
(4, 'ซอง'),
(5, 'กระปุก'),
(6, 'หลอด');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `type`) VALUES
(3, 'admin', '1234', 'Admin'),
(20, 'aa', 'aaa', 'ไม่เป็นสมาชิกแล้ว'),
(23, 'd', 'd', 'สมาชิก'),
(24, 'fdfdd', 'ddd', 'สมาชิก'),
(25, 'v', 'v', 'สมาชิก');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_employee`
--
ALTER TABLE `tb_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_productin`
--
ALTER TABLE `tb_productin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_productout`
--
ALTER TABLE `tb_productout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_province`
--
ALTER TABLE `tb_province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sell`
--
ALTER TABLE `tb_sell`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `tb_unit`
--
ALTER TABLE `tb_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_employee`
--
ALTER TABLE `tb_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_productin`
--
ALTER TABLE `tb_productin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_productout`
--
ALTER TABLE `tb_productout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_province`
--
ALTER TABLE `tb_province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `tb_sell`
--
ALTER TABLE `tb_sell`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_unit`
--
ALTER TABLE `tb_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
