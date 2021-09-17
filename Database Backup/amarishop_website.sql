-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 08:40 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amarishop_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`) VALUES
(1, 'Man\'s Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `total_amount` int(11) DEFAULT NULL,
  `order_stage_id` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_stage`
--

CREATE TABLE `order_stage` (
  `order_stage_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `img_url` text DEFAULT NULL,
  `model` varchar(20) DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `product_discount` int(11) DEFAULT 0,
  `promo_code` varchar(20) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `img_url`, `model`, `brand`, `price`, `rating`, `product_discount`, `promo_code`, `category_id`, `created_at`) VALUES
(1, 'Ego Trendy Half Sleeve T-Shirt', 'Product details of Ego Trendy Half Sleeve T-Shirt For Men - Silver\r\nBrand Name : City Boy\r\nSleeve: Half Sleeve\r\nFabric: Polyester\r\nMain Materials: Polyester\r\nColor: Silver\r\nStyle : T-Shirt\r\n170 GSM\r\nSize- M L XL\r\nM - Length 27\" chest 37\"\r\nL - Length 28\" chest: 39\"\r\nXL - Length 29\" chest 41\",\r\nProduct Description: \r\nPremium quality jersey t-shirt with 100% qc product. It\'s very stylish and comfortable. This is slim fit t-shirt.  always works with trendy product. This is very trendy and stylish product. \r\nAbout City Boy:\r\nCity Boy is a trusted and reliable fashion brand in all over Bangladesh. City Boy manufactures and supplies quality products in all categories at a competitive price range from their own garments. City Boy always follow “Quality never compromised”. City Boy supply premium quality and 100% QC pass product. City Boy always believes a return customer is our business asset. ', 'https://image.made-in-china.com/202f0j00ULiGpoKPhbcn/China-Men-s-Summer-Fashion-T-Shirt-Splicing-Color-Breathable-Daily-Shirt.jpg', NULL, 'City Boy', 160, 5, 0, NULL, 1, '2021-09-17 12:37:57'),
(3, 'T-Shirt For Men - Silver', 'Dummy TexProduct details of Ego Trendy Half Sleeve T-Shirt For Men - Silver\r\nBrand Name : City Boy\r\nSleeve: Half Sleeve\r\nFabric: Polyester\r\nMain Materials: Polyester\r\nColor: Silver\r\nStyle : T-Shirt\r\n170 GSM\r\nSize- M L XL\r\nM - Length 27\" chest 37\"\r\nL - Length 28\" chest: 39\"\r\nXL - Length 29\" chest 41\",\r\nProduct Description: \r\nPremium quality jersey t-shirt with 100% qc product. It\'s very stylish and comfortable. This is slim fit t-shirt.  always works with trendy product. This is very trendy and stylish product. \r\nAbout City Boy:\r\nCity Boy is a trusted and reliable fashion brand in all over Bangladesh. City Boy manufactures and supplies quality products in all categories at a competitive price range from their own garments. City Boy always follow “Quality never compromised”. City Boy supply premium quality and 100% QC pass product. City Boy always believes a return customer is our business asset. t', 'https://image.made-in-china.com/202f0j00ULiGpoKPhbcn/China-Men-s-Summer-Fashion-T-Shirt-Splicing-Color-Breathable-Daily-Shirt.jpg', NULL, 'City Boy', 180, 5, 0, NULL, 1, '2021-09-17 12:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `phone`, `address`, `email`, `password`) VALUES
(45, 'Md. Fahim Rahman', '+8801615990017', 'Mym', '180204028@aust.edu', '$2y$12$l.nhvermebcaNEOzBY82WO29NWzKcgM9kR3oxpdlnLb7U75Z50oZC'),
(46, 'Md. Fahim Rahman', '0189322564', '7/1 Provatisenalen, Shankipara, Mymensingh', 'fahimpranto002@gmail.com', '$2y$12$7FqVl4woUXcqRkhweSd.fe8RDRV288JhSoWOfB8MuSe8QP8RMPTaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_stage_id` (`order_stage_id`);

--
-- Indexes for table `order_stage`
--
ALTER TABLE `order_stage`
  ADD PRIMARY KEY (`order_stage_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_stage`
--
ALTER TABLE `order_stage`
  MODIFY `order_stage_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`order_stage_id`) REFERENCES `order_stage` (`order_stage_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
