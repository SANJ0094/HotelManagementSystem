-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2017 at 01:43 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(6) NOT NULL,
  `menu_descrption` varchar(500) NOT NULL,
  `menu_price` float(7,2) DEFAULT NULL,
  `menu_status` smallint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_customer`
--

CREATE TABLE `restaurant_customer` (
  `restaurant_customerid` int(11) NOT NULL,
  `restaurant_customer_nic` varchar(10) NOT NULL,
  `restaurant_customer_name` varchar(45) DEFAULT NULL,
  `restaurant_customer_telephone` varchar(15) DEFAULT NULL,
  `restaurant_customer_email` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_order`
--

CREATE TABLE `restaurant_order` (
  `restaurant_order_id` int(6) NOT NULL,
  `restaurant_customer_nic` varchar(10) DEFAULT NULL,
  `order_menu_id` int(6) DEFAULT NULL,
  `order_des` varchar(500) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `order_status` smallint(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `restaurant_customer`
--
ALTER TABLE `restaurant_customer`
  ADD PRIMARY KEY (`restaurant_customerid`);

--
-- Indexes for table `restaurant_order`
--
ALTER TABLE `restaurant_order`
  ADD PRIMARY KEY (`restaurant_order_id`),
  ADD KEY `fk7_restaurant_order_menu_id_idx` (`order_menu_id`),
  ADD KEY `fk2_restaurant_order_customer_nic` (`restaurant_customer_nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `restaurant_customer`
--
ALTER TABLE `restaurant_customer`
  MODIFY `restaurant_customerid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `restaurant_order`
--
ALTER TABLE `restaurant_order`
  MODIFY `restaurant_order_id` int(6) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
