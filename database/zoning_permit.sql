-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 02:47 AM
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
-- Table structure for table `zoning_permit`
--

CREATE TABLE `zoning_permit` (
  `zp_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `applicant_address` varchar(255) NOT NULL,
  `business_address` varchar(255) NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `project_nature` varchar(255) NOT NULL,
  `project_nature_others` varchar(255) DEFAULT NULL,
  `project_location` varchar(255) NOT NULL,
  `project_area` varchar(255) NOT NULL,
  `build_imp` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `agri_specify` varchar(255) NOT NULL,
  `land_use_others` varchar(255) NOT NULL,
  `project_cost` varchar(255) NOT NULL,
  `written_notice` varchar(255) NOT NULL,
  `hlrs_officers` varchar(255) DEFAULT NULL,
  `hlrs_dateNotice` date DEFAULT NULL,
  `request_indicated` varchar(255) DEFAULT NULL,
  `project_applied` varchar(255) NOT NULL,
  `hlrs_office` varchar(255) DEFAULT NULL,
  `hlrs_date` date DEFAULT NULL,
  `hlrs_action` varchar(255) DEFAULT NULL,
  `mode` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zoning_permit`
--

INSERT INTO `zoning_permit` (`zp_id`, `last_name`, `first_name`, `middle_name`, `company_name`, `applicant_address`, `business_address`, `project_type`, `project_nature`, `project_nature_others`, `project_location`, `project_area`, `build_imp`, `site`, `agri_specify`, `land_use_others`, `project_cost`, `written_notice`, `hlrs_officers`, `hlrs_dateNotice`, `request_indicated`, `project_applied`, `hlrs_office`, `hlrs_date`, `hlrs_action`, `mode`, `created_at`) VALUES
(1, 'Nguyen', 'Courtney', 'Oren Franklin', 'Oneil and Cannon Co', 'Tenetur eum amet fa', 'Est est qui dolore i', 'Obcaecati corrupti ', 'New Development', '', 'Amet omnis sed cupi', 'Et dolores quaerat e', 'Adipisicing consequa', 'Institutional', 'Laudantium id iste', 'Praesentium atque do', 'Aute ut esse enim re', 'no', '', '0000-00-00', '', 'no-similar-app', '', '0000-00-00', '', 'Applicant', '2024-04-23 08:45:36'),
(2, 'Bartlett', 'Tanek', 'Michelle Craig', 'Manning Conway Traders', 'Repudiandae quis con', 'Blanditiis eius exer', 'Nihil adipisicing qu', 'New Development', '', 'Odio eiusmod eum rep', 'Officia laborum quae', 'Sint magna architect', 'Commercial', 'Veritatis quod hic o', 'Dolores consectetur', 'Amet tempore ut qu', 'no', '', '0000-00-00', '', 'Yes', 'Cum cumque ipsum ex', '2000-11-04', 'In labore beatae sit', 'Pick-up', '2024-04-23 08:47:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zoning_permit`
--
ALTER TABLE `zoning_permit`
  ADD PRIMARY KEY (`zp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zoning_permit`
--
ALTER TABLE `zoning_permit`
  MODIFY `zp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
