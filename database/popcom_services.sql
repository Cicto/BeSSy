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
-- Table structure for table `popcom_services`
--

CREATE TABLE `popcom_services` (
  `popcom_id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `birth_date` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `services` int(11) NOT NULL COMMENT '1 = Pre-Marriage Orientation\r\n2 = Nutrition Counseling\r\n3 = Micro Nutrient Powder',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `popcom_services`
--

INSERT INTO `popcom_services` (`popcom_id`, `last_name`, `first_name`, `middle_name`, `suffix`, `birth_date`, `age`, `gender`, `contact_number`, `address`, `country`, `zip_code`, `date`, `time`, `services`, `created_at`) VALUES
(1, 'Hamilton', 'Howard', 'Trevor Mckee', 'Dolores lorem sit s', 1999, 0, 'Female', '502', 'Irure esse eos eu n', 'Culpa tempore amet', 48986, '2002-04-16', '20:31:00', 0, '2024-04-22 05:24:23'),
(2, 'Bell', 'Christine', 'Louis West', 'Tempora enim volupta', 1973, 0, 'Male', '430', 'Rem sit voluptas dol', 'At et ut corrupti c', 74982, '1979-01-26', '13:24:00', 0, '2024-04-22 05:24:51'),
(3, 'Gordon', 'Eleanor', 'Nicole Prince', 'Quis distinctio Inc', 1991, 0, 'Male', '80', 'Et sint ex velit re', 'Minus ratione dolore', 24139, '1982-10-16', '05:33:00', 0, '2024-04-22 05:26:08'),
(4, 'Haynes', 'Evangeline', 'Leilani Duke', 'Iusto asperiores sap', 2011, 14, 'Male', '288', 'Nobis reiciendis vel', 'Laboriosam et omnis', 28291, '2018-05-23', '04:18:00', 0, '2024-04-22 05:28:42'),
(5, 'Gill', 'Levi', 'April Stephens', 'Quibusdam nesciunt ', 2008, 0, 'Female', '9610', 'Inventore qui pariat', 'Ut atque nemo conseq', 45247, '2009-06-29', '18:31:00', 0, '2024-04-22 05:37:19'),
(6, 'Murray', 'Shad', 'Ayanna Burns', 'Voluptatem Unde ull', 2014, 0, 'Female', '912', 'Dignissimos in quia ', 'Quis velit sequi odi', 35068, '1995-08-01', '00:40:00', 0, '2024-04-22 05:38:24'),
(7, 'Dotson', 'Alma', 'Nicholas Rhodes', 'Et repellendus Beat', 2000, 0, 'Female', '2120-000-0000', 'Quas esse assumenda', 'Accusantium commodo ', 85279, '2010-06-08', '06:03:00', 0, '2024-04-22 05:39:26'),
(8, 'Sampson', 'Alden', 'Nathaniel Oneill', 'Corrupti non Nam si', 1998, 0, 'Female', '7430-000-0000', 'Incididunt exercitat', 'Dolor iure dolore sa', 12352, '1986-03-21', '22:36:00', 0, '2024-04-22 05:40:57'),
(9, 'Ayala', 'Tanya', 'Driscoll Hines', 'Adipisci saepe quia ', 2018, 0, 'Male', '8290-000-0000', 'Dolorem ullam corpor', 'Quam sit nemo verita', 37381, '2006-07-13', '19:24:00', 0, '2024-04-22 05:41:51'),
(10, 'Durham', 'Michael', 'Xena Calhoun', 'Nisi est facilis ad ', 1986, 47, 'Male', '5740-000-0000', 'Rerum veniam non co', 'Quaerat sed sunt ea ', 52238, '2009-06-25', '19:46:00', 0, '2024-04-22 05:54:31'),
(11, 'Lewis', 'Carlos', 'Henry Sexton', 'Excepturi et dolor u', 2011, 0, 'Male', '3310-000-0000', 'Commodo in pariatur', 'Suscipit unde fugiat', 39166, '1975-11-09', '19:54:00', 1, '2024-04-22 06:23:26'),
(12, 'Holder', 'Hadley', 'Catherine Kim', 'Nihil dolor velit u', 2006, 0, 'Female', '0910-000-0000', 'Quae dolorem laborio', 'Odio harum fuga Arc', 98650, '1978-04-29', '18:38:00', 1, '2024-04-22 06:27:18'),
(13, 'Sykes', 'Hall', 'Ryan Noel', 'Qui porro cum libero', 1999, 0, 'Female', '5130-000-0000', 'Laborum Qui autem c', 'Ea in molestiae et f', 46692, '2012-01-08', '16:07:00', 2, '2024-04-22 06:32:09'),
(14, 'Moody', 'Jorden', 'Walter Beck', 'Nulla pariatur Itaq', 1989, 0, 'Female', '0990-000-0000', 'Velit ut nemo dolore', 'Autem rem aut et nes', 44132, '2010-09-28', '07:35:00', 1, '2024-04-22 08:05:04'),
(15, 'Lynn', 'Eagan', 'Zane Hickman', 'Similique et nihil l', 2018, 0, 'Female', '2610-000-0000', 'In dicta sunt labor', 'Maiores reprehenderi', 92810, '2020-10-08', '01:36:00', 2, '2024-04-22 08:07:57'),
(16, 'Vega', 'Cleo', 'Odessa Weber', 'Et sunt fuga Do de', 1997, 0, 'Male', '9860-000-0000', 'Rerum eiusmod itaque', 'Neque voluptatem bla', 27423, '2008-08-06', '23:19:00', 3, '2024-04-22 08:18:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `popcom_services`
--
ALTER TABLE `popcom_services`
  ADD PRIMARY KEY (`popcom_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `popcom_services`
--
ALTER TABLE `popcom_services`
  MODIFY `popcom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
