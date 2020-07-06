-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 02:20 PM
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
  `teacher_id` int(11) NOT NULL,
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

INSERT INTO `classes` (`id`, `teacher_id`, `key_id`, `student_id`, `title`, `description`, `start_class`, `end_class`, `color_class`) VALUES
(26, 1, '26', 4, 'Lesson', 'dddd\n', '2020-07-22 15:00:00', '2020-07-22 16:00:00', '#2C3D24'),
(27, 1, '27', 1, 'Lesson', '', '2020-07-15 16:00:00', '2020-07-15 17:00:00', '#289EE6');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `teacher_id`, `user_id`, `city`) VALUES
(1, 1, 0, ''),
(2, 1, 0, ''),
(3, 1, 3, ''),
(4, 1, 0, ''),
(5, 1, 4, ''),
(6, 1, 0, ''),
(7, 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_details`
--

CREATE TABLE `teacher_details` (
  `user_id` int(11) NOT NULL,
  `available_hours` varchar(255) NOT NULL,
  `class_option` varchar(255) NOT NULL,
  `available_days` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_details`
--

INSERT INTO `teacher_details` (`user_id`, `available_hours`, `class_option`, `available_days`) VALUES
(1, '8,9,10,11,12,13,14,15,16,17,18,19,20', '1/2,3/4,1,1 1/2,2', 'Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday'),
(2, '8,9,10,11,12,13,14,15,16,17,18,19,20', '1/2,3/4,1,1 1/2,2', 'Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday');

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
(2, 1, 'Dor', 'Levy', 'ddd@ddd.com', '$argon2id$v=19$m=65536,t=4,p=1$ZVNQalJKbk9GS215c2xscg$KaMmdBrrZtAs3GCTBhRp0qIr8pbqXUiCccnbGSZ8OwQ', 'ins2020-07-0310-42-27.png', 20, '1995-05-10'),
(3, 2, 'dor', 'levy', 'ye2hu@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$LnlTNUJTSWRCN1FNMk9MUg$oxu5TR/M0x3jE9DTJ8Q5/+rSphYqITEs+4hiJzlmCLQ', '', 0, '0000-00-00'),
(4, 2, 'dor', 'levy', 'yehu@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$Um1RSzJqSFRYT0MvazZKRA$epDSUfCKaJQcbDGL/MnzMJ7tDaPiQYni+MoQ1AS7594', '', 0, '0000-00-00');

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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_details`
--
ALTER TABLE `teacher_details`
  ADD UNIQUE KEY `user_id` (`user_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
