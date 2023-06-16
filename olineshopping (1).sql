-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 08:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olineshopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_ID` varchar(10) NOT NULL,
  `Cat_Name` varchar(30) NOT NULL,
  `Cat_Des` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_ID`, `Cat_Name`, `Cat_Des`) VALUES
('C001', 'Shoes', 'Shoes'),
('C002', 'Shorts', 'Short'),
('C003', 'Tshirt', 'Tshirt');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `CustName` varchar(30) NOT NULL,
  `gender` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CusDate` int(11) NOT NULL,
  `CusMonth` int(11) NOT NULL,
  `CusYear` int(11) NOT NULL,
  `SSN` varchar(10) DEFAULT NULL,
  `ActiveCode` varchar(100) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Username`, `Password`, `CustName`, `gender`, `Address`, `telephone`, `email`, `CusDate`, `CusMonth`, `CusYear`, `SSN`, `ActiveCode`, `state`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 0, 'admin', '1234567890', 'admin@gmail.com', 3, 3, 2000, '', '', 1),
('KH01Th', 'e10adc3949ba59abbe56e057f20f883e', 'BuiThao', 0, '160/4 30/4', '1234567890', '123@gmail.com', 1, 3, 1970, '', '', 0),
('KH02Th', '25f9e794323b453885f5181f1b624d0b', 'BuiThao', 0, '160/4 30/4', '0123456789', 'locnbgcc18053@fpt.edu.vn', 30, 3, 2000, '', '', 0),
('KH03TH', 'e10adc3949ba59abbe56e057f20f883e', 'BuiThao', 0, '160/4 30/4 12311231', '0123456789', '123@gmail.commmm', 3, 4, 1971, '', '', 0),
('KH04TH', 'e10adc3949ba59abbe56e057f20f883e', 'Butha', 0, '160/4 30/4', '0123456789', '456@gmail.com', 1, 2, 1970, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` varchar(6) NOT NULL,
  `OrderDate` datetime NOT NULL,
  `DeliveryDate` datetime NOT NULL,
  `Delivery_loca` varchar(200) NOT NULL,
  `Payment` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Product_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `OrderDetail_ID` int(11) NOT NULL,
  `Product_ID` varchar(10) NOT NULL,
  `Order_ID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` varchar(10) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Price` bigint(20) NOT NULL,
  `oldPrice` decimal(12,2) NOT NULL,
  `SmallDesc` varchar(1000) NOT NULL,
  `DetailDesc` text NOT NULL,
  `ProDate` datetime NOT NULL,
  `Pro_qty` int(11) NOT NULL,
  `Pro_image` varchar(200) NOT NULL,
  `Cat_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Price`, `oldPrice`, `SmallDesc`, `DetailDesc`, `ProDate`, `Pro_qty`, `Pro_image`, `Cat_ID`) VALUES
('AB001', 'Tshirt 1201', 20, '0.00', 'The Tshirt have red color and short hand.', '', '2022-12-18 04:42:54', 3, 'download (9).jpg', 'C003'),
('BFS001', 'Tshirt HaNoi', 15, '0.00', 'The Tshirt printed in the tshirt some picture about HaNoi.', '', '2022-12-18 04:45:22', 5, 'download (7).jpg', 'C003'),
('ED01', 'Jacket 1002', 55, '0.00', 'The Jacket have long hand and so warm.', '', '2022-12-18 04:46:35', 7, 'images (9).jpg', 'C003'),
('EJ001', 'Jacket Pink 1A', 67, '0.00', 'The Jacket have long hand, it is suitable for girl.', '', '2022-12-18 04:48:15', 5, 'download (13).jpg', 'C003'),
('EON01', 'Jacket Black 1B', 35, '0.00', 'The Jacket have black color and long hand.', '', '2022-12-18 04:49:35', 5, 'download (14).jpg', 'C003'),
('EYB01', 'Dress Pink 110', 50, '0.00', 'The Dress have pink color, it quite long.', '', '2022-12-18 04:51:12', 4, 'images (3).jpg', 'C003'),
('LIB001', 'Dress Red 11M', 50, '0.00', 'The Dress have red color, it quite long.', '', '2022-12-18 04:52:02', 6, 'download (10).jpg', 'C003'),
('MJCA001', 'Baby Doll', 15, '0.00', 'The Baby Doll is suitable for children.', '', '2022-12-18 05:01:28', 3, 'images (2).jpg', 'C003'),
('MJV001', 'Shorts Grown', 20, '0.00', 'The Short have grown color, it quite long hand.', '', '2022-12-18 04:53:11', 7, 'download (12).jpg', 'C002'),
('MMT001', 'Shorts Black', 30, '0.00', 'The Short have black color and long hand.', '', '2022-12-18 04:53:59', 7, 'images (5).jpg', 'C002'),
('PF001', 'Sneaker 1A2', 70, '0.00', 'The Sneaker have yellow, white color.', '', '2022-12-18 12:21:10', 6, 'download (17).jpg', 'C001'),
('PF002', 'Sneaker White 1A', 70, '0.00', 'The Sneaker have white, it is so comfortable.', '', '2022-12-18 04:56:32', 7, 'download (18).jpg', 'C001'),
('PF003', 'Shoes Pink 12A', 50, '0.00', 'The Shoes have pink and so hight.', '', '2022-12-18 04:57:18', 8, 'images (19).jpg', 'C001'),
('Q001', 'Shoes Black 11Q', 50, '0.00', 'The Shoes have black color and so hight.', '', '2022-12-18 04:58:04', 8, 'images (21).jpg', 'C001'),
('Q002', 'Jacket 2nd', 50, '0.00', 'The Jacket have black color full.', '', '2022-12-18 04:59:13', 5, 'download (16).jpg', 'C003'),
('Q003', 'Tshirt Blue 1A', 20, '0.00', 'The Tshirt have blue color and short hand.', '', '2022-12-18 05:00:14', 2, 'images (1).jpg', 'C003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `username` (`username`),
  ADD KEY `Product_ID` (`Product_ID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`OrderDetail_ID`),
  ADD KEY `Product_ID` (`Product_ID`),
  ADD KEY `Order_ID` (`Order_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Cat_ID` (`Cat_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `OrderDetail_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`Username`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`Product_ID`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`Order_ID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`Product_ID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Cat_ID`) REFERENCES `category` (`Cat_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
