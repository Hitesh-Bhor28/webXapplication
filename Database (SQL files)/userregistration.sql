-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 02:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `address_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `zipcode` int(25) NOT NULL,
  `signup_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`address_id`, `name`, `lastname`, `address`, `country`, `state`, `city`, `zipcode`, `signup_id`) VALUES
(137, 'abc', 'zxc', 'azxc', 'India', 'Maharashtra', 'Mumbai', 422010, 1),
(138, 'sdsd', 'zxc', 'azxc', 'India', 'Maharashtra', 'Mumbai', 422010, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `pw` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `pw`) VALUES
(1, 'hitesh', 'aa'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(25) NOT NULL,
  `cid` int(11) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `images_names` varchar(255) NOT NULL,
  `images_details` varchar(255) NOT NULL,
  `statuss` varchar(25) NOT NULL,
  `txnid` int(8) NOT NULL,
  `dt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `cid`, `orderid`, `total`, `images_names`, `images_details`, `statuss`, `txnid`, `dt`) VALUES
(284, 7, 'OID65073ID7', '650', '\"image/ChocolateCakeDelight.png,image/ChocolateCakeWithChocolateMountains.png,image/ChocolateCakeWithChocolateSprinkles.png\"', '\"Chocolate Cake Delight,220,1,Chocolate Mountain,250,1,Chocolate Sprinkles,190,1\"', 'processed', 65297, '2023-09-14'),
(285, 7, 'OID16716ID7', '660', '\"image/ChocolateCakeDelight.png,image/ChocolateCakeWithChocolateMountains.png,image/ChocolateCakeWithChocolateSprinkles.png\"', '\"Chocolate Cake Delight,220,1,Chocolate Mountain,250,1,Chocolate Sprinkles,190,1\"', 'processed', 60897, '2023-09-14'),
(286, 1, 'OID33866ID1', '870', '\"image/ChocolateCakeDelight.png,image/ChocolateCakeWithChocolateMountains.png,image/ChocolateCakeWithChocolateSprinkles.png\"', '\"Chocolate Cake Delight,440,2,Chocolate Mountain,250,1,Chocolate Sprinkles,190,1\"', 'processed', 53139, '2023-09-14'),
(287, 1, 'OID33866ID1', '870', '\"image/ChocolateCakeDelight.png,image/ChocolateCakeWithChocolateMountains.png,image/ChocolateCakeWithChocolateSprinkles.png\"', '\"Chocolate Cake Delight,440,2,Chocolate Mountain,250,1,Chocolate Sprinkles,190,1\"', 'processed', 69107, '2023-09-14'),
(288, 1, 'OID15606ID1', '430', '\"image/ChocolateCakeWithChocolateMountains.png,image/ChocolateCakeWithChocolateSprinkles.png\"', '\"Chocolate Mountain,250,1,Chocolate Sprinkles,190,1\"', 'processed', 27758, '2023-09-14'),
(289, 1, 'OID61231ID1', '600', '\"image/cake.PNG,image/ChocolateCakeDelight.png,image/ChocolateCakeWithChocolateSprinkles.png\"', '\"Chocolate Cake,200,1,Chocolate Cake Delight,220,1,Chocolate Sprinkles,190,1\"', 'processed', 97687, '2023-09-18'),
(290, 1, 'OID81485ID1', '820', '\"image/ChocolateCakeDelight.png,image/ChocolateCakeWithChocolateMountains.png,image/CreamWhiteForest.png,image/IceCreamMangoCake.png,image/FiveCupcakes.png\"', '\"Chocolate Cake Delight,220,1,Chocolate Mountain,250,1,Cream White Forest,150,1,Ice Cream Mango Cake,150,1,Cupcake(Pack of 5),60,1\"', 'processed', 10424, '2023-09-21'),
(291, 1, 'OID59042ID1', '650', '\"image/ChocolateCakeDelight.png,image/ChocolateCakeWithChocolateMountains.png,image/ChocolateCakeWithChocolateSprinkles.png\"', '\"Chocolate Cake Delight,220,1,Chocolate Mountain,250,1,Chocolate Sprinkles,190,1\"', 'processed', 75684, '2023-11-02'),
(292, 1, 'OID92297ID1', '500', '\"image/VegBurgerPepsi.png,image/ClassicDuoNonVeg.png,image/CrispyVegBurger.png\"', '\"Veg Burger+Pepsi,150,1,Classic Duo(Non-Veg),200,1,Crispy Veg Burger,150,1\"', 'processed', 35116, '2023-11-02'),
(293, 1, 'OID92297ID1', '500', '\"image/VegBurgerPepsi.png,image/ClassicDuoNonVeg.png,image/CrispyVegBurger.png\"', '\"Veg Burger+Pepsi,150,1,Classic Duo(Non-Veg),200,1,Crispy Veg Burger,150,1\"', 'processed', 99594, '2023-11-02'),
(294, 1, 'OID92297ID1', '500', '\"image/VegBurgerPepsi.png,image/ClassicDuoNonVeg.png,image/CrispyVegBurger.png\"', '\"Veg Burger+Pepsi,150,1,Classic Duo(Non-Veg),200,1,Crispy Veg Burger,150,1\"', 'processed', 70372, '2023-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `pass`) VALUES
(1, 'av', 'av', 'av'),
(2, 'asa', 'asa', 'asa'),
(6, 'qq', 'qq', 'qq'),
(7, 'zz', 'zz', 'zz'),
(69, 'admin', 'admin@admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `signup_id` (`signup_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`),
  ADD UNIQUE KEY `oid` (`oid`),
  ADD KEY `cid_fk` (`cid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`signup_id`) REFERENCES `signup` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `signup` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
