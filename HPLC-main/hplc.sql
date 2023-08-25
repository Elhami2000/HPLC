-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2023 at 06:33 PM
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
-- Database: `hplc`
--

-- --------------------------------------------------------

--
-- Table structure for table `divation_details`
--

CREATE TABLE `divation_details` (
  `id` int(11) NOT NULL,
  `date_of_receipt` date DEFAULT NULL,
  `serial_number` varchar(50) DEFAULT NULL,
  `column_dimension` varchar(50) DEFAULT NULL,
  `internal_column_id` varchar(50) DEFAULT NULL,
  `column_make` varchar(50) DEFAULT NULL,
  `register_by` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divation_details`
--

INSERT INTO `divation_details` (`id`, `date_of_receipt`, `serial_number`, `column_dimension`, `internal_column_id`, `column_make`, `register_by`, `position`, `date`, `time`, `comments`) VALUES
(1, '2023-08-26', '12345678', '20cm', '100', 'Product', 'Elhami', 'Senior Scientist', '2023-08-25', '19:20:00', 'No comment');

-- --------------------------------------------------------

--
-- Table structure for table `print_textarea_data`
--

CREATE TABLE `print_textarea_data` (
  `id` int(11) NOT NULL,
  `sr_no` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `batch_no` varchar(50) DEFAULT NULL,
  `test_performed` varchar(100) DEFAULT NULL,
  `in_house_no` varchar(50) DEFAULT NULL,
  `running_time` time DEFAULT NULL,
  `no_of_injections` varchar(50) DEFAULT NULL,
  `cumulative_no_of_injection` varchar(50) DEFAULT NULL,
  `analyzed_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `print_textarea_data`
--

INSERT INTO `print_textarea_data` (`id`, `sr_no`, `date`, `product_name`, `batch_no`, `test_performed`, `in_house_no`, `running_time`, `no_of_injections`, `cumulative_no_of_injection`, `analyzed_by`) VALUES
(1, '12345', '2023-08-25', 'Pills', '123456', 'Some kind of test', '1234567', '21:41:00', '24', '12345678', 'Elhami'),
(3, '12345', '2023-08-31', 'Pills', '123456', 'Some kind of test', '1234567', '20:42:00', '24', '12345678', 'Elhami'),
(4, '12345', '2023-08-31', 'Pills', '123456', 'Some kind of test', '1234567', '20:42:00', '24', '12345678', 'Elhami');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `position` varchar(50) DEFAULT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `position`, `role`) VALUES
(2, 'Elhami', '12345678', '', 0),
(11, 'Elham', '123456789', 'Scientist', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divation_details`
--
ALTER TABLE `divation_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `print_textarea_data`
--
ALTER TABLE `print_textarea_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divation_details`
--
ALTER TABLE `divation_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `print_textarea_data`
--
ALTER TABLE `print_textarea_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
