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
-- Table structure for table `mayors_clearance_application`
--

CREATE TABLE `mayors_clearance_application` (
  `mca_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `purpose_of_request` varchar(255) NOT NULL,
  `type_of_request` tinyint(1) NOT NULL COMMENT '0 = New\r\n1 = Renewal',
  `company` varchar(255) DEFAULT NULL,
  `position_applied` varchar(255) DEFAULT NULL,
  `starting_date` date DEFAULT NULL,
  `present_position` varchar(255) DEFAULT NULL,
  `date_of_renewal` date DEFAULT NULL,
  `police_nbi_number` varchar(255) NOT NULL,
  `police_nbi_date` date DEFAULT NULL,
  `police_nbi_place` varchar(255) NOT NULL,
  `ctc_number` int(11) NOT NULL,
  `ctc_date` date DEFAULT NULL,
  `ctc_place` varchar(255) NOT NULL,
  `or_no` int(255) NOT NULL,
  `datetime_accomplished` datetime DEFAULT NULL,
  `released_by` varchar(255) DEFAULT NULL,
  `time_released` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mayors_clearance_application`
--

INSERT INTO `mayors_clearance_application` (`mca_id`, `last_name`, `first_name`, `middle_name`, `address`, `purpose_of_request`, `type_of_request`, `company`, `position_applied`, `starting_date`, `present_position`, `date_of_renewal`, `police_nbi_number`, `police_nbi_date`, `police_nbi_place`, `ctc_number`, `ctc_date`, `ctc_place`, `or_no`, `datetime_accomplished`, `released_by`, `time_released`) VALUES
(16, 'Dixon', 'Summer', 'Daryl Bolton', 'Et amet iste evenie', 'Porro veniam rerum ', 0, 'Abbott Sargent Plc', 'Odio officia archite', '1997-04-12', '', '0000-00-00', 'Quidem non labore lo', '2004-11-22', 'Consectetur eos ali', 782, '1979-09-24', 'Dolores sit quaerat ', 153, '2024-04-17 15:15:25', NULL, NULL),
(17, 'Hess', 'Erich', 'Amethyst Weiss', 'Quae quia non dolor ', 'Explicabo Earum eni', 1, 'Stanton Bowman Inc', '', '0000-00-00', 'Consequatur Dolor v', '1986-01-26', 'Perferendis alias do', '1979-03-06', 'Ut aspernatur et eli', 572, '1993-07-07', 'Consequatur Omnis t', 458, '2024-04-17 15:16:14', NULL, NULL),
(18, 'Fields', 'Giselle', 'Angelica Rich', 'Est rerum ea error q', 'Nostrum officia et i', 0, 'Cannon Levine Trading', 'Facere ipsam laborum', '1970-04-03', '', '0000-00-00', 'Ut itaque fugiat di', '1988-09-17', 'Quis ea tempor ducim', 947, '1989-04-02', 'Omnis aut iusto dolo', 618, '2024-04-17 15:41:17', NULL, NULL),
(19, 'Nielsen', 'Michelle', 'Katelyn Herring', 'Facere et do itaque ', 'Consectetur et nesc', 1, 'Martinez and Bishop Inc', '', '0000-00-00', 'Quas quia dignissimo', '1999-08-09', 'Velit laboriosam su', '2001-07-24', 'Ducimus commodo adi', 914, '1980-08-03', 'Exercitation lorem n', 923, '2024-04-18 10:49:51', NULL, NULL),
(20, 'Adkins', 'Willa', 'Nina Rose', 'Alias at quia quo vo', 'Dignissimos voluptas', 0, 'Collier Webb LLC', 'Veritatis neque pari', '1975-08-31', '', '0000-00-00', '74', '1970-06-29', 'Est quasi dicta vol', 866, '2019-06-22', 'Expedita voluptatibu', 152, '2024-04-22 15:10:10', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mayors_clearance_application`
--
ALTER TABLE `mayors_clearance_application`
  ADD PRIMARY KEY (`mca_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mayors_clearance_application`
--
ALTER TABLE `mayors_clearance_application`
  MODIFY `mca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
