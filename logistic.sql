-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2018 at 06:54 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistic`
--

-- --------------------------------------------------------

--
-- Table structure for table `container`
--

CREATE TABLE `container` (
  `id` int(11) NOT NULL,
  `container_no` varchar(200) NOT NULL,
  `agent_name` varchar(200) NOT NULL,
  `origin_port` varchar(200) NOT NULL,
  `destination_port` varchar(200) NOT NULL,
  `contact` bigint(15) NOT NULL,
  `passport` varchar(150) NOT NULL,
  `delivery_agent` varchar(200) NOT NULL,
  `delivery_contact` bigint(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gps`
--

CREATE TABLE `gps` (
  `id` int(11) NOT NULL,
  `gps_status` varchar(200) NOT NULL,
  `vendor` varchar(200) NOT NULL,
  `gps_date` date NOT NULL,
  `gps_time` varchar(200) NOT NULL,
  `vehicle_no` varchar(200) NOT NULL,
  `gps_no` varchar(200) NOT NULL,
  `excepted_date` date NOT NULL,
  `travel_mode` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `weight` decimal(10,4) NOT NULL,
  `quantity` int(11) NOT NULL,
  `each_cost` decimal(10,4) NOT NULL,
  `total` decimal(10,4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` int(11) NOT NULL,
  `sender_name` varchar(200) NOT NULL,
  `sender_contact` bigint(15) NOT NULL,
  `receiver_name` varchar(200) NOT NULL,
  `receiver_contact` bigint(15) NOT NULL,
  `assign_staff` varchar(200) NOT NULL,
  `airway_bill_no` varchar(200) NOT NULL,
  `sender_email` varchar(200) NOT NULL,
  `receiver_email` varchar(200) NOT NULL,
  `sender_add` varchar(200) NOT NULL,
  `receiver_add` varchar(200) NOT NULL,
  `sender_city` varchar(200) NOT NULL,
  `receiver_city` varchar(200) NOT NULL,
  `total_weight` decimal(10,4) NOT NULL,
  `shipment_type` varchar(200) NOT NULL,
  `booking_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_time` varchar(200) NOT NULL,
  `pay_mode` varchar(200) NOT NULL,
  `total_fright` double(10,4) DEFAULT NULL,
  `booking_mode` varchar(100) DEFAULT NULL,
  `insurance_status` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `container`
--
ALTER TABLE `container`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gps`
--
ALTER TABLE `gps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `container`
--
ALTER TABLE `container`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gps`
--
ALTER TABLE `gps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
