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
-- Table structure for table `death_cert_request`
--

CREATE TABLE `death_cert_request` (
  `dc_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `place_of_death` varchar(255) NOT NULL,
  `date_of_death` date NOT NULL,
  `requester_name` varchar(255) NOT NULL,
  `relationship` int(11) NOT NULL COMMENT '1 = Document Owner\r\n2 = Spouse\r\n3 = Parent\r\n4 = Sons / Daughter',
  `purpose` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `datetime_accomplished` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `death_cert_request`
--

INSERT INTO `death_cert_request` (`dc_id`, `last_name`, `first_name`, `middle_name`, `place_of_death`, `date_of_death`, `requester_name`, `relationship`, `purpose`, `remarks`, `datetime_accomplished`) VALUES
(1, 'Knowles', 'Laith', 'Lysandra Mason', 'Cum nihil asperiores', '1980-09-25', 'Amber Duke', 4, 'Odio quo rerum rerum', 'Laboris molestiae sa', '2024-04-18 14:49:34'),
(2, 'Bryan', 'Luke', 'Jared Hutchinson', 'Quis est voluptates ', '1973-06-16', 'Quin Bauer', 1, 'Ut et libero enim iu', 'Illo facere laboris ', '2024-04-18 14:52:20'),
(3, 'Chase', 'Rahim', 'Keely Schmidt', 'Tenetur ut dolorem n', '2007-06-06', 'Rudyard Morse', 3, 'Dolore assumenda err', 'Commodo iste quibusd', '2024-04-18 14:52:28'),
(4, 'Vinson', 'Oscar', 'Chiquita Vincent', 'Debitis ipsum porro ', '1973-08-20', 'Castor Daugherty', 4, 'Earum fuga Sit et ', 'Ullam ea magna exped', '2024-04-22 15:57:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `death_cert_request`
--
ALTER TABLE `death_cert_request`
  ADD PRIMARY KEY (`dc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `death_cert_request`
--
ALTER TABLE `death_cert_request`
  MODIFY `dc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
