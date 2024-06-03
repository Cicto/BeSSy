-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 04:58 AM
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
-- Table structure for table `marriage_cert_request`
--

CREATE TABLE `marriage_cert_request` (
  `mrg_id` int(11) NOT NULL,
  `husbands_last_name` varchar(255) NOT NULL,
  `husbands_first_name` varchar(255) NOT NULL,
  `husbands_middle_name` varchar(255) NOT NULL,
  `wifes_last_name` varchar(255) NOT NULL,
  `wifes_first_name` varchar(255) NOT NULL,
  `wifes_middle_name` varchar(255) NOT NULL,
  `place_of_marriage` varchar(255) NOT NULL,
  `date_of_marriage` date NOT NULL,
  `requester` int(255) NOT NULL COMMENT '1 = Document Owner\r\n2 = Spouse\r\n3 = Parent\r\n4 = Sons / Daughter\r\n5 = Authorized Representative of the Owner',
  `authorized_person` varchar(255) DEFAULT NULL,
  `req_filename` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marriage_cert_request`
--
ALTER TABLE `marriage_cert_request`
  ADD PRIMARY KEY (`mrg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marriage_cert_request`
--
ALTER TABLE `marriage_cert_request`
  MODIFY `mrg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
