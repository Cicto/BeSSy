-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 09:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `building_permit_applications`
--

CREATE TABLE `building_permit_applications` (
  `bpa_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `application_description` varchar(500) DEFAULT NULL,
  `current_department` varchar(255) NOT NULL DEFAULT 'bplo',
  `rejected_at` datetime DEFAULT NULL,
  `finished_at` datetime DEFAULT NULL,
  `actor` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `building_permit_applications`
--

INSERT INTO `building_permit_applications` (`bpa_id`, `first_name`, `middle_name`, `last_name`, `contact_number`, `application_description`, `current_department`, `rejected_at`, `finished_at`, `actor`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES
(1, 'Juan', 'Bautista', 'Dela Cruz', '0900-000-0000', '', 'fire-department', '2024-04-18 08:44:51', NULL, '', '2024-04-17 14:34:34', 0, NULL, 0, NULL),
(2, 'Jason', 'Tasha Montoya', 'Young', '0952-9__-____', 'Rerum et ut esse labore \"\'quibusdam voluptatibus aut eveniet sunt voluptas magni rerum', 'bplo', NULL, NULL, '', '2024-04-17 14:37:12', 0, '2024-04-18 15:15:39', 2, NULL),
(3, 'Odessa', 'Lester Parks', 'Oliver', '0912-5__-____', 'Quibusdam error provident sequi aliquam aut ducimus rerum', 'finished', NULL, '2024-04-18 15:02:35', '', '2024-04-17 14:38:37', 0, '2024-04-18 15:02:35', 2, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `building_permit_applications`
--
ALTER TABLE `building_permit_applications`
  ADD PRIMARY KEY (`bpa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `building_permit_applications`
--
ALTER TABLE `building_permit_applications`
  MODIFY `bpa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
