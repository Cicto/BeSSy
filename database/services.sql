-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 07:15 AM
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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `service_alias` varchar(500) NOT NULL,
  `service_name` varchar(500) NOT NULL,
  `service_view` varchar(500) NOT NULL,
  `actor` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `dept_id`, `service_alias`, `service_name`, `service_view`, `actor`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 10, 'MYR CLRNC', 'Mayor\'s Clearance', 'mayors/mayorsClearance', 'Egie Santos', '2024-04-04 15:07:55', 1, NULL, NULL, NULL),
(2, 5, 'BRTH CRTFCT', 'Birth Certificate Request', 'lcr/birthCertificate', 'Kyle Balanay', '2024-04-18 13:55:25', 1, NULL, NULL, NULL),
(3, 5, 'DTH CRTFCT', 'Death Certificate Request', 'lcr/deathCertificate', 'Kyle Balanay', '2024-04-18 14:29:22', 1, NULL, NULL, NULL),
(4, 5, 'MRRG CRTFCT', 'Marriage Certificate Request', 'lcr/marriageCertificate', 'Kyle Balanay', '2024-04-22 08:34:18', 1, NULL, NULL, NULL),
(5, 14, 'PRE-MARRIAGE', 'Application for Pre-Marriage Orientation and Counseling Seminar', 'population/preMarriageOrientation', 'Kyle Balanay', '2024-04-22 09:08:35', 1, NULL, NULL, NULL),
(6, 14, 'NTRTN CNSLNG', 'Nutrition Counseling', 'population/nutritionCounseling', 'Kyle Balanay', '2024-04-22 14:11:38', 1, NULL, NULL, NULL),
(7, 14, 'MCR NTRNT PWDR', 'Micro Nutrient Powder Request', 'population/microNutrientPowder', 'Kyle Balanay', '2024-04-22 16:15:39', 1, NULL, NULL, NULL),
(8, 19, 'ZNNG PRMT', 'Zoning Permit', 'cpdc/zoningPermit', 'Kyle Balanay', '2024-04-23 11:31:33', 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
