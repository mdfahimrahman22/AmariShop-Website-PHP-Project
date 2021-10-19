-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2021 at 03:59 PM
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
-- Table structure for table `advertise`
--

CREATE TABLE `advertise` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `img` text NOT NULL,
  `bg_color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertise`
--

INSERT INTO `advertise` (`id`, `title`, `subtitle`, `img`, `bg_color`) VALUES
(1, 'Women', 'Worlds Best Brands', 'static/images/women_fashion1.png', '#f5c5d1'),
(2, 'Summer', 'Worlds Best Brands', 'static/images/boys_fashion1.png', '#a1d1df'),
(3, 'Boys', 'Worlds Best Brands', 'static/images/winter_fashion1.png', '#e5bc00');

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
(1, 'Man\'s Fashion'),
(2, 'Women\'s Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `sale_off` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `banner_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `sale_off`, `title`, `banner_img`) VALUES
(1, '70%', 'Summer Vibes\r\nMode On', 'static/images/boys_fashion1.png');

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
-- Table structure for table `our_service`
--

CREATE TABLE `our_service` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE `our_team` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(300) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `twitter_link` varchar(200) DEFAULT NULL,
  `linkedin_link` varchar(200) DEFAULT NULL,
  `fb_link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_team`
--

INSERT INTO `our_team` (`id`, `name`, `description`, `image`, `email`, `twitter_link`, `linkedin_link`, `fb_link`) VALUES
(1, 'Fahim Rahman', 'CSE Graduate, AUST', 'https://scontent.fdac116-1.fna.fbcdn.net/v/t1.6435-9/57080046_2306341292917474_9039001060911349760_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=174925&_nc_ohc=iwWs9xkKau8AX8NhXvy&_nc_ht=scontent.fdac116-1.fna&oh=ab76916f4fb8ed4b065460db0fdefa90&oe=617C4B01', 'fahimpranto002@gmail.com', 'https://twitter.com/FahimRa06316691', 'https://www.linkedin.com/in/md-fahim-rahman-313bab1a0/', 'https://www.facebook.com/fahim.rahman.9678'),
(2, 'Amlan Chakraborty', 'CSE Graduate, AUST', 'https://scontent.fdac116-1.fna.fbcdn.net/v/t1.6435-9/80319163_666979023706166_2561339747385475072_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=ojwnhhZ0XXkAX9j4RQ_&_nc_ht=scontent.fdac116-1.fna&oh=cd57535de44d6837dc55959210360311&oe=617D25A1', '#', '#', '#', '#');

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
(3, 'T-Shirt For Men ', 'Dummy TexProduct details of Ego Trendy Half Sleeve T-Shirt For Men - Silver\r\nBrand Name : City Boy\r\nSleeve: Half Sleeve\r\nFabric: Polyester\r\nMain Materials: Polyester\r\nColor: Silver\r\nStyle : T-Shirt\r\n170 GSM\r\nSize- M L XL\r\nM - Length 27\" chest 37\"\r\nL - Length 28\" chest: 39\"\r\nXL - Length 29\" chest 41\",\r\nProduct Description: \r\nPremium quality jersey t-shirt with 100% qc product. It\'s very stylish and comfortable. This is slim fit t-shirt.  always works with trendy product. This is very trendy and stylish product. \r\nAbout City Boy:\r\nCity Boy is a trusted and reliable fashion brand in all over Bangladesh. City Boy manufactures and supplies quality products in all categories at a competitive price range from their own garments. City Boy always follow “Quality never compromised”. City Boy supply premium quality and 100% QC pass product. City Boy always believes a return customer is our business asset. t', 'https://assetscdn1.paytm.com/images/catalog/product/A/AP/APPAMPLE-MEN-KIKHAL1070621AA374474/1562997954268_0..jpg', NULL, 'City Boy', 180, 5, 0, NULL, 1, '2021-09-17 12:37:57'),
(5, 'Men Shirt Demo', 'Men Shirt Demo', 'https://static-01.daraz.com.bd/p/f624b4b2ae1018ef2b096842a3f5071a.jpg', NULL, NULL, 200, 5, 0, NULL, 1, '2021-09-18 22:02:05'),
(7, 'Men Jeans', 'Men Jeans', 'https://5.imimg.com/data5/UR/ER/MY-10139824/19-500x500.jpg', NULL, NULL, 800, 4, 0, NULL, 1, '2021-09-18 22:03:49'),
(9, 'Shatkahon Saree', 'Product Type: Saree\r\nMain Material: pleax satkahon\r\nGender: Women\r\nLong : 13 hat\r\nVery comfortable to use in any weather\r\nSaree is a very common dress in this sub-continental area like Bangladesh. Women look very gorgeous in colorful sarees, and so they love to wear and have luxurious and colorful sarees for different social and cultural functions. A young lady to an elderly person - every woman is fascinated about sarees just because of our culture . Daraz has a massive collection of different types of quality sarees to be sold all the year-round to make the buyers happy. ', 'https://static-01.daraz.com.bd/p/0a4cae99c9a08c088b6061c0f8944dc6.jpg', NULL, NULL, 499, 5, 0, NULL, 2, '2021-09-18 22:22:33'),
(12, 'Multicolor Georgette Kurti', 'Product Type: Kurti\r\nColor: Dark Green\r\nGender: Women\r\nMain Material: Georgette\r\nCountry Of Origin: Bangladesh\r\nAbout Shalwar Kameez\r\nKameez also spelled salwar kameez or Kameez is a traditional outfit originating in the subcontinent. It is a generic term used to describe different styles of dress. kameez can be worn by women. kameez are two garments which are combinekameez.', 'https://static-01.daraz.com.bd/p/8466f0590b967b90f7458b1dd2097af3.jpg', NULL, NULL, 549, 4, 0, NULL, 2, '2021-09-18 22:28:34'),
(13, 'Fashionable Ladies Hand Bag', 'Product Type: Hand Bag,Shoulder Bag\r\nColour: Black, Orange,Yellow ,Ash,Rose etc\r\nBoby Material : Artificial Leather\r\nInside Material : Waterproof Fabric\r\nGender: Girl\r\nInterior: No Pocket\r\nClosure Type: zipper\r\nStyle: Casual\r\nExterior: Open Pocket\r\nHardness: SOFT\r\nSize: Length 10, Height 7 Inch, Width 4.5 Inch\r\nLight Weight, Durable, Long Lasting and Everything in Your Budget\r\nSpecifications of 2021 New Model Hand Bag For Girls /Stylish And Fashionable Ladies Shoulder/ Hand Bag/\r\nBrandNo BrandSKU169542533_BD-1104266893Outside MaterialPU Leather', 'https://static-01.daraz.com.bd/p/f7b8429cea63b7995bebdbc8768ae8dc.jpg_720x720q75.jpg_.webp', NULL, NULL, 199, 4, 0, NULL, 2, '2021-09-18 22:32:27');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `testimonial` text NOT NULL,
  `image` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `testimonial`, `image`, `rating`) VALUES
(1, 'Sabila Nur', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, fugiat labore. Veritatis et omnis consequatur.', 'https://celebritynewsbd.com/wp-content/uploads/2017/09/Sabila-Nur-1280x720.jpg', 4),
(2, 'Afran Nisho', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, fugiat labore. Veritatis et omnis consequatur\r\n', 'https://pbs.twimg.com/media/ExZx_yUU4AIbPAL.jpg', 5),
(3, 'Farhan Ahmed Jovan', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, fugiat labore. Veritatis et omnis consequatur.', 'https://wikistarbio.com/wp-content/uploads/2020/11/Farhan-Ahmed-Jovan-Wiki-Height-Family-Biography-Wife-More.jpg', 4);

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
(45, 'Md. Fahim Rahman', '+8801615990017', 'Mym 2', '180204028@aust.edu', '$2y$12$l.nhvermebcaNEOzBY82WO29NWzKcgM9kR3oxpdlnLb7U75Z50oZC'),
(48, 'Rahim', '01234567890', 'Jamalkhan Road, Chittagong', 'rahim@gmail.com', '$2y$12$HH8uLWVbuyxQWqXHRIIt6uKA5UPjep7obKGjj4.YP.16lMYJNdB3K'),
(49, 'Md. Fahim Rahman', '01615990017', 'Dhaka', 'f1@gmail.com', '$2y$12$hSGe2ZHFBb/DenEgQvu.8OXdwWmfjiR6GLzOn4lV7zMdrs7pKfbaK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertise`
--
ALTER TABLE `advertise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `our_service`
--
ALTER TABLE `our_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `advertise`
--
ALTER TABLE `advertise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `our_service`
--
ALTER TABLE `our_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
