-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 15, 2021 at 03:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cedcab`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(250) NOT NULL,
  `location_distance` varchar(250) NOT NULL,
  `is_availabel` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`, `location_distance`, `is_availabel`) VALUES
(1, 'Indira Nagar', '20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ride`
--

CREATE TABLE `ride` (
  `ride_id` int(11) NOT NULL,
  `ride_date` date NOT NULL DEFAULT current_timestamp(),
  `pickup` varchar(250) NOT NULL,
  `drop_point` varchar(250) NOT NULL,
  `total_distance` varchar(250) NOT NULL,
  `luggage` varchar(250) NOT NULL,
  `total_fare` varchar(250) NOT NULL,
  `ride_status` int(11) NOT NULL,
  `cab_type` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ride`
--

INSERT INTO `ride` (`ride_id`, `ride_date`, `pickup`, `drop_point`, `total_distance`, `luggage`, `total_fare`, `ride_status`, `cab_type`, `id`) VALUES
(25, '2021-01-08', 'Charbag', 'BBD', '30', '5', '605', 0, 'CedMini', 8),
(26, '2021-01-08', 'Charbag', 'BBD', '30', '5', '605', 0, 'CedMini', 8),
(27, '2021-01-08', 'BBD', 'Barabanki', '30', '5', '685', 0, 'CedRoyal', 8),
(28, '2021-01-08', 'BBD', 'Barabanki', '30', '5', '685', 0, 'CedRoyal', 8),
(29, '2021-01-08', 'Charbag', 'BBD', '30', '', '425', 2, 'CedMicro', 8),
(30, '2021-01-08', 'Charbag', 'BBD', '30', '', '425', 2, 'CedMicro', 8),
(31, '2021-01-08', 'Barabanki', 'BBD', '30', '5', '685', 2, 'CedRoyal', 10),
(32, '2021-01-08', 'Barabanki', 'BBD', '30', '5', '685', 0, 'CedRoyal', 10),
(33, '2021-01-08', 'Basti', 'Barabanki', '90', '4', '1331', 0, 'CedMini', 10),
(34, '2021-01-08', 'Basti', 'Barabanki', '90', '4', '1331', 2, 'CedMini', 10),
(36, '2021-01-08', 'Barabanki', 'Goarkhpur', '150', '3', '2003', 0, 'CedMini', 11),
(37, '2021-01-08', 'Indira Nagar', 'BBD', '20', '13', '595', 2, 'CedRoyal', 11),
(38, '2021-01-08', 'Indira Nagar', 'BBD', '20', '13', '595', 0, 'CedRoyal', 11),
(39, '2021-01-08', 'Charbag', 'Faizabad', '100', '5', '1793', 0, 'CedSUV', 11),
(40, '2021-01-08', 'Charbag', 'Faizabad', '100', '5', '1793', 0, 'CedSUV', 11),
(41, '2021-01-08', 'BBD', 'Faizabad', '70', '', '887', 0, 'CedMicro', 11),
(42, '2021-01-08', 'BBD', 'Faizabad', '70', '', '887', 0, 'CedMicro', 11),
(43, '2021-01-09', 'Faizabad', 'BBD', '70', '9', '1227', 1, 'CedRoyal', 11),
(44, '2021-01-09', 'Faizabad', 'BBD', '70', '9', '1227', 1, 'CedRoyal', 11),
(45, '2021-01-09', 'Indira Nagar', 'Barabanki', '50', '6', '965', 1, 'CedRoyal', 11),
(46, '2021-01-09', 'Indira Nagar', 'Barabanki', '50', '6', '965', 1, 'CedRoyal', 11),
(47, '2021-01-09', 'Faizabad', 'BBD', '70', '4', '1227', 1, 'CedRoyal', 11),
(48, '2021-01-09', 'Faizabad', 'BBD', '70', '4', '1227', 1, 'CedRoyal', 11),
(49, '2021-01-09', 'Faizabad', 'BBD', '70', '4', '1227', 1, 'CedRoyal', 11),
(50, '2021-01-09', 'Faizabad', 'BBD', '70', '4', '1227', 1, 'CedRoyal', 11),
(51, '2021-01-09', 'Faizabad', 'BBD', '70', '4', '1227', 1, 'CedRoyal', 11),
(52, '2021-01-09', 'Faizabad', 'BBD', '70', '4', '1227', 2, 'CedRoyal', 11),
(53, '2021-01-09', 'Faizabad', 'BBD', '70', '4', '1227', 0, 'CedRoyal', 11),
(54, '2021-01-09', 'Faizabad', 'BBD', '70', '4', '1227', 1, 'CedRoyal', 11),
(55, '2021-01-09', 'Faizabad', 'BBD', '70', '4', '1227', 1, 'CedRoyal', 11),
(56, '2021-01-09', 'Indira Nagar', 'Barabanki', '50', '', '665', 1, 'CedMicro', 11),
(57, '2021-01-09', 'Barabanki', 'Basti', '90', '16', '1381', 1, 'CedMini', 11),
(58, '2021-01-09', 'Indira Nagar', 'BBD', '20', '10', '475', 2, 'CedMini', 13),
(59, '2021-01-09', 'Goarkhpur', 'Basti', '60', '5', '1105', 1, 'CedRoyal', 13),
(60, '2021-01-09', 'BBD', 'Basti', '120', '35', '1987', 1, 'CedRoyal', 13),
(61, '2021-02-06', 'Charbag', 'Indira Nagar', '10', '4', '345', 1, 'CedMini', 11),
(62, '2021-02-06', 'Indira Nagar', 'Barabanki', '50', '', '665', 1, 'CedMicro', 11);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `signup_date` date NOT NULL DEFAULT current_timestamp(),
  `mobile_no` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `password` varchar(250) NOT NULL,
  `admin_or_not` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `email_id`, `name`, `signup_date`, `mobile_no`, `status`, `password`, `admin_or_not`) VALUES
(1, 'admin@gmail.com', 'admin', '2021-01-06', '8601197689', 1, '1234', 1),
(8, 'ashutoshay2505@gmail.com', 'Ashu', '2021-01-08', '8601197690', 1, '1234', 0),
(9, 'ashutoshay2505@gmail.com', 'Ashu', '2021-01-08', '8601197690', 0, '1234', 0),
(10, 'garvr@gmail.com', 'Gaurav', '2021-01-08', '7688987546', 1, '123', 0),
(11, 'Khan@gmail.com', 'Sher', '2021-01-08', '9578687456', 1, '234', 0),
(12, 'Khan@gmail.com', 'Sher', '2021-01-08', '9578687456', 1, '234', 0),
(13, 'abzer@gmail.com', 'Abzer', '2021-01-09', '5678976634', 1, '7890', 0),
(14, 'ashutoshay2505@gmail.com', 'Ashu', '2021-02-06', '9140545989', 1, '12345', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `ride`
--
ALTER TABLE `ride`
  ADD PRIMARY KEY (`ride_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ride`
--
ALTER TABLE `ride`
  MODIFY `ride_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ride`
--
ALTER TABLE `ride`
  ADD CONSTRAINT `ride_ibfk_1` FOREIGN KEY (`id`) REFERENCES `signup` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
