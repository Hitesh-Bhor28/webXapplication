-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 10:44 AM
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
  `addressid` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `zipcode` int(25) NOT NULL,
  `ccid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`addressid`, `name`, `lastname`, `address`, `country`, `state`, `city`, `zipcode`, `ccid`) VALUES
(270, 'abc', 'zxc', 'azxc', 'India', 'Maharashtra', 'Mumbai', 422010, 0),
(271, 'abc', 'zxc', 'azxc', 'India', 'Maharashtra', 'Mumbai', 422010, 0),
(272, 'abc', 'zxc', 'azxc', 'India', 'Maharashtra', 'Mumbai', 422010, 0),
(273, 'abc', 'zxc', 'azxc', 'India', 'Maharashtra', 'Mumbai', 422010, 0),
(274, 'abc', 'zxc', 'azxc', 'India', 'Maharashtra', 'Mumbai', 422010, 0),
(275, 'abc', 'zxc', 'azxc', 'India', 'Maharashtra', 'Mumbai', 422010, 0),
(276, 'abc', 'zxc', 'azxc', 'India', 'Maharashtra', 'Mumbai', 422010, 0),
(277, 'abc', 'zxc', 'azxc', 'India', 'Maharashtra', 'Mumbai', 422010, 0),
(278, 'abc', 'zxc', 'azxc', 'India', 'Maharashtra', 'Mumbai', 422010, 0),
(279, 'abc', 'zxc', 'azxc', 'India', 'Maharashtra', 'Mumbai', 422010, 0),
(280, 'abc', 'zxc', 'azxc', 'India', 'Maharashtra', 'Mumbai', 422010, 0),
(281, 'abc', 'zxc', 'azxc', 'India', 'Maharashtra', 'Mumbai', 422010, 0);

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
  `images_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `cid`, `orderid`, `total`, `images_names`, `images_details`) VALUES
(13, 1, 'OID87677ID1', '200', '\"image/MasalaDosa.PNG,image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Masala Dosa,60,1,Uttapam,80,1,Idli,40,1,Vada,20,1\"'),
(15, 1, 'OID87677ID9', '100', '\"image/Uttapam.PNG,image/Idli.PNG,image/Vada.PNG\"', '\"Uttapam,80,1,Idli,40,1,Vada,20,1\"'),
(21, 1, 'OID62656ID1', '120', '\"image/Uttapam.PNG,image/Idli.PNG\"', '\"Uttapam,80,1,Idli,40,1\"');

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
(3, 'vrushali bhor', 'vrushalibh', 'vrushali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`addressid`),
  ADD UNIQUE KEY `addressid` (`addressid`),
  ADD KEY `ccid` (`ccid`);

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
  MODIFY `addressid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `signup` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
