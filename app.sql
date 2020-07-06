-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 06:52 AM
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
  `description` text NOT NULL,
  `start_class` datetime NOT NULL,
  `end_class` datetime NOT NULL,
  `color_class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `key_id`, `student_id`, `title`, `description`, `start_class`, `end_class`, `color_class`) VALUES
(1, '1', 0, 'Lesson', 'test by me', '2020-07-07 12:00:00', '2020-07-07 13:30:00', '#265DE8'),
(2, '2', 0, 'Lesson', 'i would like to', '2020-07-01 15:00:00', '2020-07-01 16:30:00', '#A8B9FC'),
(3, '3', 0, 'Lesson', 'ddd', '2020-07-08 16:00:00', '2020-07-08 17:00:00', '#D15480'),
(4, '4', 0, 'Lesson', 'ddd', '2020-07-10 12:00:00', '2020-07-10 13:00:00', '#0CCD0A'),
(5, '5', 0, 'Lesson', '', '2020-07-24 16:00:00', '2020-07-24 17:00:00', '#8767C3'),
(6, '6', 0, 'Lesson', 'sss', '2020-07-02 20:00:00', '2020-07-02 21:00:00', '#F46094'),
(7, '7', 0, 'Lesson', '', '2020-07-04 12:00:00', '2020-07-04 13:30:00', '#E2555F'),
(8, '8', 0, 'Lesson', 'sssss', '2020-07-18 16:00:00', '2020-07-18 17:00:00', '#07A9DC'),
(9, '9', 0, 'Lesson', 'fd', '2020-07-15 15:00:00', '2020-07-15 16:00:00', '#459BC5'),
(10, '10', 0, 'Lesson', 'f', '2020-07-21 18:00:00', '2020-07-21 19:00:00', '#D9E637');

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
(1, 1, 'dor', 'levy', 'd@l.com', '$argon2id$v=19$m=65536,t=4,p=1$Mnk5RG9iNWFuZDNPcTdyWg$p+bg7k999QdhQj9EZMaVfjQerTAPyR0KI9smOS2K40c', 'wha2020-06-2016-25-08.png', 20, '2020-06-20'),
(2, 1, 'Dor', 'Levy', 'ddd@ddd.com', '$argon2id$v=19$m=65536,t=4,p=1$ZVNQalJKbk9GS215c2xscg$KaMmdBrrZtAs3GCTBhRp0qIr8pbqXUiCccnbGSZ8OwQ', 'ins2020-07-0310-42-27.png', 20, '1995-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `available_hours` varchar(255) NOT NULL,
  `class_option` varchar(255) NOT NULL,
  `available_days` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `available_hours`, `class_option`, `available_days`) VALUES
(1, '8,9,10,11,12,13,14,15,16,17,18,19,20', '1/2,3/4,1,1 1/2,2', 'Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday'),
(2, '8,9,10,11,12,13,14,15,16,17,18,19,20', '1/2,3/4,1,1 1/2,2', 'Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday');

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
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
