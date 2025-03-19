-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2025 at 06:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_capstone_project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Daily Customer', 'mohamedahshan0056@gmail.com', 'PHP', 'jkhjkkjhj'),
(2, 'Ahshan', 'mohamedahshan0056@gmail.com', 'PHP', 'jkhjkkjhj'),
(3, 'Mohamed Ahshan', 'mohamedahshan0056@gmail.com', 'for testing mail', 'For Testing'),
(4, 'Mohamed Muaath', 'mohamedahshan0056@gmail.com', 'this is subject part', 'this is messge part'),
(5, 'Mohamed Muaath', 'mohamedahshan0056@gmail.com', 'this is subject part', 'this is messge part');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `facebook_link` varchar(100) NOT NULL,
  `instagram_link` varchar(100) NOT NULL,
  `linkedin_link` varchar(100) DEFAULT NULL,
  `twitter_link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `subject`, `description`, `facebook_link`, `instagram_link`, `linkedin_link`, `twitter_link`, `image`) VALUES
(24, 'Mohamed Ahshan', 'PHP', 'I Want to Show this Details to Website', 'https://marazin.lk/', 'https://marazin.lk/', 'https://marazin.lk/', 'https://marazin.lk/', '1742314310_sunset-2983614_1280.jpg'),
(25, 'Muath', 'PHP', 'This details will show on the website ', 'https://marazin.lk/', 'https://marazin.lk/', 'https://marazin.lk/', 'https://marazin.lk/', '1742314250_sunset-2983614_1280.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Ahshan', 'mohamedahshan0056@gmail.com', '$2y$10$8nw3WkiiTNWsWfpFRyF3kOc1Z1ya5es3cIz00isJV9gGbzvwMnfZq'),
(2, 'Muath', 'muath@gmail.com', '$2y$10$XfzXfjkMIRmxIwC4vI7wqu//tmvKFYYb3MNlMHoe/BmgOWRQ01c66'),
(3, 'vijay', 'vijay@gmail.com', '$2y$10$ssuK3ITcBBkfolxt5oKqdep1E9RCYM./ZPVbPITaYCqJIpah0.JKa'),
(4, 'pareeshan', 'pareshan@gmail.com', '$2y$10$rWGai0zUyMOh6jXbqys.L.8g9HPQml1ESUQMHJuH3O2NOTaTIQEpK'),
(5, 'testing', 'testing@gmail.com', '$2y$10$kIvr9rz5AlU99zTZY2RrUOt/e4rxAAwMPryz2TMhrk9GA8EevRc5i'),
(6, 'kenisiya', 'kenisia@gmail.com', '$2y$10$f9mXRKeQqHZUsrRz6xoXr.mxOoEPXZdFj2Vhc.VnNEKfMbsNJB1k2'),
(7, 'matheen', 'matheen@gmail.com', '$2y$10$x.W7sLetzbICerWugUpe6eS3V2kAbBReJ.z.iARRBAoUBGTwe6LXu'),
(8, 'abs', 'abs@gmail.com', '$2y$10$hRlmBMJyX6wHBPQlvT355uwU8a4n07w7PO1hWH9Fm6dXLZlm2QJVK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
