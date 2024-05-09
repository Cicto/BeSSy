-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 08:21 AM
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
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 = Pending\r\n1 = Approved\r\n2 = Rejected',
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `actor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `service_id`, `application_id`, `status`, `created_by`, `created_at`, `actor`) VALUES
(27, 8, 19, 2, 12, '2024-04-30 07:08:38', 'Juan Dela Cruz'),
(28, 2, 11, 1, 12, '2024-04-30 07:37:27', 'Juan Dela Cruz'),
(29, 1, 22, 1, 12, '2024-04-30 07:37:57', 'Juan Dela Cruz'),
(30, 3, 5, 0, 12, '2024-04-30 08:27:19', 'Juan Dela Cruz'),
(31, 2, 12, 0, 12, '2024-04-30 08:54:07', 'Juan Dela Cruz'),
(32, 8, 20, 0, 12, '2024-05-02 02:53:03', 'Juan Dela Cruz'),
(33, 4, 3, 0, 12, '2024-05-02 03:04:10', 'Juan Dela Cruz'),
(34, 9, 7, 0, 12, '2024-05-02 03:10:37', 'Juan Dela Cruz'),
(35, 5, 17, 0, 12, '2024-05-02 03:21:08', 'Juan Dela Cruz'),
(36, 7, 18, 0, 12, '2024-05-02 05:26:46', 'Juan Dela Cruz'),
(37, 6, 19, 0, 12, '2024-05-02 05:33:44', 'Juan Dela Cruz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
