-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 10:06 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `key_id` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_class` datetime NOT NULL,
  `end_class` datetime NOT NULL,
  `color_class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `key_id`, `student_id`, `title`, `start_class`, `end_class`, `color_class`) VALUES
(1, '63857286', 0, 'Lesson', '2020-06-17 15:00:00', '2020-06-17 16:00:00', ''),
(2, '434358846', 0, 'Lesson', '2020-06-05 20:00:00', '2020-06-05 21:00:00', ''),
(3, '97506741', 0, 'Lesson', '2020-06-12 19:00:00', '2020-06-12 20:00:00', ''),
(4, '234273337', 0, 'Lesson', '2020-06-03 16:00:00', '2020-06-03 17:00:00', ''),
(5, '1337649116', 0, 'Lesson', '2020-06-07 18:00:00', '2020-06-07 19:00:00', ''),
(6, '872378698', 0, 'Lesson', '2020-06-18 19:00:00', '2020-06-18 20:00:00', ''),
(7, '655304694', 0, 'Lesson', '2020-06-15 20:00:00', '2020-06-15 21:00:00', ''),
(8, '140505062', 0, 'Lesson', '2020-06-01 12:00:00', '2020-06-01 13:00:00', ''),
(9, '395151309', 0, 'Lesson', '2020-07-08 16:00:00', '2020-07-08 17:00:00', '#EA2AB9'),
(10, '299784674', 0, 'Lesson', '2020-07-03 10:00:00', '2020-07-03 11:00:00', '#1BED1A'),
(11, '1678885559', 0, 'Lesson', '2020-07-13 16:00:00', '2020-07-13 17:00:00', '#C8D841'),
(12, '896590701', 0, 'Lesson', '2020-07-01 20:00:00', '2020-07-01 21:00:00', '#F1BC09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `namefile` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `first_name`, `last_name`, `email`, `password`, `namefile`, `age`, `birthday`) VALUES
(1, 1, 'dor', 'levy', 'd@l.com', '$argon2id$v=19$m=65536,t=4,p=1$Mnk5RG9iNWFuZDNPcTdyWg$p+bg7k999QdhQj9EZMaVfjQerTAPyR0KI9smOS2K40c', 'wha2020-06-2016-25-08.png', 20, '2020-06-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key_id` (`key_id`);

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
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
