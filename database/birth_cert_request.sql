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
-- Table structure for table `birth_cert_request`
--

CREATE TABLE `birth_cert_request` (
  `bc_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `birth_place` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `mothers_first_name` varchar(255) NOT NULL,
  `mothers_middle_name` varchar(255) NOT NULL,
  `mothers_last_name` varchar(255) NOT NULL,
  `fathers_first_name` varchar(255) NOT NULL,
  `fathers_middle_name` varchar(255) NOT NULL,
  `fathers_last_name` varchar(255) NOT NULL,
  `requester` int(11) NOT NULL COMMENT '1 = Document Owner 2 = Spouse 3 = Parent 4 = Sons / Daughters 5 = Authorized Representative of the Owner',
  `purpose` varchar(255) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `birth_cert_request`
--

INSERT INTO `birth_cert_request` (`bc_id`, `last_name`, `first_name`, `middle_name`, `birth_place`, `birth_date`, `mothers_first_name`, `mothers_middle_name`, `mothers_last_name`, `fathers_first_name`, `fathers_middle_name`, `fathers_last_name`, `requester`, `purpose`, `remarks`, `created_at`) VALUES
(1, 'Hyde', 'Chancellor', 'Camille Willis', 'Nemo reiciendis omni', '2004-05-04', 'Bruno', 'Otto Strickland', 'Mcdowell', 'Dai', 'Hedda Macias', 'Taylor', 0, 'Quis provident cill', 'Debitis accusamus se', '2024-04-18 06:26:17'),
(2, 'Harris', 'Alan', 'Joy Mercer', 'Aut non obcaecati re', '1992-03-21', 'Cheyenne', 'Caleb Gregory', 'Aguilar', 'Thomas', 'Callum Young', 'Bowen', 0, 'Aliquam sit nemo in ', 'Quia saepe praesenti', '2024-04-18 06:26:44'),
(3, 'Dalton', 'Cedric', 'Marvin Washington', 'Omnis in sint invent', '2020-05-16', 'Wilma', 'Mira Odom', 'Lowe', 'Pamela', 'Finn Mathis', 'Schultz', 4, 'Laborum molestias qu', 'Sit qui earum sit c', '2024-04-18 06:38:28'),
(4, 'Pearson', 'Zelda', 'Sydnee Grimes', 'Natus rem dolores cu', '1983-04-21', 'Adele', 'Jesse Goodman', 'Woodard', 'Sandra', 'Robert Parks', 'Mcpherson', 4, 'Earum sunt explicab', 'Velit et ipsam expli', '2024-04-18 06:53:05'),
(5, 'Wallace', 'Kellie', 'Ignatius Cannon', 'Impedit facere aute', '1986-04-17', 'Honorato', 'Chloe Raymond', 'Martin', 'Pearl', 'Talon Stark', 'Kennedy', 2, 'Velit sint ad dolori', 'Anim minim nostrud e', '2024-04-18 06:53:58'),
(6, 'Roberts', 'Jordan', 'Cullen Stewart', 'Sapiente aliqua Imp', '1972-05-27', 'Trevor', 'Jada Cotton', 'Huff', 'Dillon', 'Hedley Hess', 'Shannon', 3, 'At maiores natus ea ', 'Eius reprehenderit ', '2024-04-22 07:53:21'),
(7, 'Cruz', 'Tarik', 'Forrest Collins', 'Earum non et tempori', '2013-11-12', 'Nicole', 'Noble Sims', 'Wiley', 'Beau', 'Brynne Robertson', 'Mcknight', 1, 'Aliquip excepturi ex', 'Odio excepturi perfe', '2024-04-22 07:54:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birth_cert_request`
--
ALTER TABLE `birth_cert_request`
  ADD PRIMARY KEY (`bc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birth_cert_request`
--
ALTER TABLE `birth_cert_request`
  MODIFY `bc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
