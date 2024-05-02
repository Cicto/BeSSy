-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 07:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baliwagc_bessy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `field_inspection_request`
--

CREATE TABLE `field_inspection_request` (
  `fir_id` int(11) NOT NULL,
  `nature_of_request` int(11) NOT NULL COMMENT '1 = Reclassification of Land / Building\r\n2 New Declaration\r\n3 = Destroyed / Demolished\r\n4 = Re-assessment\r\n5 = New Discovery\r\n6 = Cancellation\r\n7 = Others',
  `others` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_request` date NOT NULL,
  `telephone_number` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `lot_number` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `property_location` varchar(255) NOT NULL,
  `baranggay` varchar(255) NOT NULL,
  `representative_first_name` varchar(255) NOT NULL,
  `representative_middle_name` varchar(255) NOT NULL,
  `representative_last_name` varchar(255) NOT NULL,
  `representative_address` varchar(255) NOT NULL,
  `representative_contact_number` varchar(255) NOT NULL,
  `kind_of_property` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `field_inspection_request`
--

INSERT INTO `field_inspection_request` (`fir_id`, `nature_of_request`, `others`, `first_name`, `middle_name`, `last_name`, `address`, `date_request`, `telephone_number`, `contact_number`, `lot_number`, `area`, `property_location`, `baranggay`, `representative_first_name`, `representative_middle_name`, `representative_last_name`, `representative_address`, `representative_contact_number`, `kind_of_property`, `created_at`) VALUES
(7, 6, '', 'Caryn', 'Oren Strong', 'Eaton', 'Possimus inventore ', '2011-05-12', '+1 (389) 354-1469', '157', 904, '25', 'Sint in numquam labo', 'Et repellendus Nobi', 'Christine', 'Jessamine Nicholson', 'Vaughan', 'In anim voluptatum s', '278', 'Land', '2024-05-02 03:17:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `field_inspection_request`
--
ALTER TABLE `field_inspection_request`
  ADD PRIMARY KEY (`fir_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `field_inspection_request`
--
ALTER TABLE `field_inspection_request`
  MODIFY `fir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
