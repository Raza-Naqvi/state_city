-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2025 at 10:57 PM
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
-- Database: `country_state_city`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state`, `country`, `created_at`) VALUES
(1, 'Lahore', 'Punjab', 'Pakistan', '2025-11-26 21:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country`, `created_at`) VALUES
(2, 'Alabama', 'USA', '2025-11-26 21:53:04'),
(3, 'Alaska', 'USA', '2025-11-26 21:53:04'),
(4, 'Arizona', 'USA', '2025-11-26 21:53:04'),
(5, 'Arkansas', 'USA', '2025-11-26 21:53:04'),
(6, 'California', 'USA', '2025-11-26 21:53:04'),
(7, 'Colorado', 'USA', '2025-11-26 21:53:04'),
(8, 'Connecticut', 'USA', '2025-11-26 21:53:04'),
(9, 'Delaware', 'USA', '2025-11-26 21:53:04'),
(10, 'Florida', 'USA', '2025-11-26 21:53:04'),
(11, 'Georgia', 'USA', '2025-11-26 21:53:04'),
(12, 'Hawaii', 'USA', '2025-11-26 21:53:04'),
(13, 'Idaho', 'USA', '2025-11-26 21:53:04'),
(14, 'Illinois', 'USA', '2025-11-26 21:53:04'),
(15, 'Indiana', 'USA', '2025-11-26 21:53:04'),
(16, 'Iowa', 'USA', '2025-11-26 21:53:04'),
(17, 'Kansas', 'USA', '2025-11-26 21:53:04'),
(18, 'Kentucky', 'USA', '2025-11-26 21:53:04'),
(19, 'Louisiana', 'USA', '2025-11-26 21:53:04'),
(20, 'Maine', 'USA', '2025-11-26 21:53:04'),
(21, 'Maryland', 'USA', '2025-11-26 21:53:04'),
(22, 'Massachusetts', 'USA', '2025-11-26 21:53:04'),
(23, 'Michigan', 'USA', '2025-11-26 21:53:04'),
(24, 'Minnesota', 'USA', '2025-11-26 21:53:04'),
(25, 'Mississippi', 'USA', '2025-11-26 21:53:04'),
(26, 'Missouri', 'USA', '2025-11-26 21:53:04'),
(27, 'Montana', 'USA', '2025-11-26 21:53:04'),
(28, 'Nebraska', 'USA', '2025-11-26 21:53:04'),
(29, 'Nevada', 'USA', '2025-11-26 21:53:04'),
(30, 'New Hampshire', 'USA', '2025-11-26 21:53:04'),
(31, 'New Jersey', 'USA', '2025-11-26 21:53:04'),
(32, 'New Mexico', 'USA', '2025-11-26 21:53:04'),
(33, 'New York', 'USA', '2025-11-26 21:53:04'),
(34, 'North Carolina', 'USA', '2025-11-26 21:53:04'),
(35, 'North Dakota', 'USA', '2025-11-26 21:53:04'),
(36, 'Ohio', 'USA', '2025-11-26 21:53:04'),
(37, 'Oklahoma', 'USA', '2025-11-26 21:53:04'),
(38, 'Oregon', 'USA', '2025-11-26 21:53:04'),
(39, 'Pennsylvania', 'USA', '2025-11-26 21:53:04'),
(40, 'Rhode Island', 'USA', '2025-11-26 21:53:04'),
(41, 'South Carolina', 'USA', '2025-11-26 21:53:04'),
(42, 'South Dakota', 'USA', '2025-11-26 21:53:04'),
(43, 'Tennessee', 'USA', '2025-11-26 21:53:04'),
(44, 'Texas', 'USA', '2025-11-26 21:53:04'),
(45, 'Utah', 'USA', '2025-11-26 21:53:04'),
(46, 'Vermont', 'USA', '2025-11-26 21:53:04'),
(47, 'Virginia', 'USA', '2025-11-26 21:53:04'),
(48, 'Washington', 'USA', '2025-11-26 21:53:04'),
(49, 'West Virginia', 'USA', '2025-11-26 21:53:04'),
(50, 'Wisconsin', 'USA', '2025-11-26 21:53:04'),
(51, 'Wyoming', 'USA', '2025-11-26 21:53:04'),
(52, 'Alberta', 'Canada', '2025-11-26 21:53:04'),
(53, 'British Columbia', 'Canada', '2025-11-26 21:53:04'),
(54, 'Manitoba', 'Canada', '2025-11-26 21:53:04'),
(55, 'New Brunswick', 'Canada', '2025-11-26 21:53:04'),
(56, 'Newfoundland and Labrador', 'Canada', '2025-11-26 21:53:04'),
(57, 'Nova Scotia', 'Canada', '2025-11-26 21:53:04'),
(58, 'Ontario', 'Canada', '2025-11-26 21:53:04'),
(59, 'Prince Edward Island', 'Canada', '2025-11-26 21:53:04'),
(60, 'Quebec', 'Canada', '2025-11-26 21:53:04'),
(61, 'Saskatchewan', 'Canada', '2025-11-26 21:53:04'),
(62, 'Northwest Territories', 'Canada', '2025-11-26 21:53:04'),
(63, 'Nunavut', 'Canada', '2025-11-26 21:53:04'),
(64, 'Yukon', 'Canada', '2025-11-26 21:53:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
