-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 12:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

-- Database: `golddb`--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(4004) NOT NULL,
  `email` varchar(400) NOT NULL CHECK (`email` LIKE '%@%' AND `email` LIKE '%.%'),
  `contact` varchar(20) NOT NULL CHECK (LENGTH(`contact`) = 10),
  `message` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` ( `username`, `email`, `contact`, `message`) VALUES
('fghjk', 'dfghj@aol.com', '1234567890', 'kjshfsgd'),
('gfdgfd', 'sdgfdgd@aol.com', '0987654321', 'ryuiuyfghjk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

-- Table structure for table `users`
CREATE TABLE `users` (
  `userid` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL CHECK (`email` LIKE '%@%' AND `email` LIKE '%.%'),
  `gender` VARCHAR(10) NOT NULL,
  `contact` varchar(20) NOT NULL CHECK (LENGTH(`contact`) = 10),
  `password` VARCHAR(255) NOT NULL,
  `last_login_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

-- Inserting data for table `users`
INSERT INTO `users` (`username`, `email`, `gender`, `contact`, `password`, `last_login_date`) VALUES
('werewrwer', 'wqeqwe@emailasdsad.com', 'Male', '9847593485', '54adbc768978d9574b682470bd1f568f5a3f43da', CURRENT_TIMESTAMP),
('ihobhj', 'abc@email.com', 'Female', '1234567895', '7c4a8d09ca3762af61e59520943dc26494f8941b', CURRENT_TIMESTAMP),
('tarun', 'tarun@email.com', 'Male', '2165645685', '7c4a8d09ca3762af61e59520943dc26494f8941b', CURRENT_TIMESTAMP),
('lakshay', 'lakshay@email.com', 'Male', '8526341853', '7c4a8d09ca3762af61e59520943dc26494f8941b', CURRENT_TIMESTAMP),
('saima', 'saima@email.com', 'Female', '1234567892', '05a971c812297eca3250d85aa366526929d3d983', CURRENT_TIMESTAMP);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `trainer_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `mobile_no` varchar(20) NOT NULL CHECK (LENGTH(`mobile_no`) = 10),
  `email_id` varchar(255) NOT NULL CHECK (`email_id` LIKE '%@%' AND `email_id` LIKE '%.%'),
  `expertise` varchar(255) NOT NULL,
  `experience` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`name`, `mobile_no`, `email_id`, `expertise`, `experience`) VALUES
('John Doe', '9876543210', 'john@example.com', 'Strength and Conditioning', 8),
('Lisa Smith', '9123456789', 'lisa@example.com', 'Yoga and Wellness', 6),
('Alex King', '9988776655', 'alex@example.com', 'Personal Training', 5),
('Emma Taylor', '9876501234', 'emma@example.com', 'Pilates', 4);

