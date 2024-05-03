-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 07:14 AM
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
  `date_of_marriage` varchar(255) NOT NULL,
  `requester` int(255) NOT NULL COMMENT '1 = Document Owner\r\n2 = Spouse\r\n3 = Parent\r\n4 = Sons / Daughter\r\n5 = Authorized Representative of the Owner',
  `purpose` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marriage_cert_request`
--

INSERT INTO `marriage_cert_request` (`mrg_id`, `husbands_last_name`, `husbands_first_name`, `husbands_middle_name`, `wifes_last_name`, `wifes_first_name`, `wifes_middle_name`, `place_of_marriage`, `date_of_marriage`, `requester`, `purpose`, `remarks`, `created_at`) VALUES
(1, 'Keith', 'Joel', 'Brody Pitts', 'Simpson', 'Wyatt', 'Florence Carpenter', 'Odit totam perspicia', '1998-05-28', 5, 'Doloremque ullam ali', 'Odio magnam enim nih', '2024-04-22 00:55:38'),
(2, 'Rich', 'Jeanette', 'Harding Washington', 'Bryan', 'Quynn', 'Roanna Cunningham', 'Eiusmod praesentium ', '1972-07-27', 2, 'Mollit aute cupidata', 'Dignissimos sint vo', '2024-04-22 07:59:06');

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
  MODIFY `mrg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
