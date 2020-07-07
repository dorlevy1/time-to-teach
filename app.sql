-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 07:58 PM
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
(27, 1, '27', 1, 'Lesson', '', '2020-07-15 16:00:00', '2020-07-15 17:00:00', '#289EE6'),
(28, 1, '28', 60, 'Lesson', '', '2020-07-08 15:00:00', '2020-07-08 16:30:00', '#91A54D'),
(29, 1, '29', 60, 'Lesson', '', '2020-07-09 16:00:00', '2020-07-09 17:00:00', '#5AE210'),
(30, 60, '30', 60, 'Lesson', '', '2020-07-16 16:00:00', '2020-07-16 17:00:00', '#D99BAD'),
(31, 1, '31', 60, 'Lesson', '', '2020-07-22 16:00:00', '2020-07-22 17:00:00', '#A57A7E'),
(32, 60, '32', 61, 'Lesson', '', '2020-07-21 00:00:00', '2020-07-21 00:00:00', '#058845'),
(33, 1, '33', 62, 'Lesson', '', '2020-07-08 16:00:00', '2020-07-08 17:00:00', '#BE67B4'),
(34, 1, '34', 62, 'Lesson', '', '2020-07-08 16:00:00', '2020-07-08 17:00:00', '#ACD20E'),
(35, 1, '35', 62, 'Lesson', '', '2020-07-08 16:00:00', '2020-07-08 17:00:00', '#671791'),
(36, 1, '36', 62, 'Lesson', '', '2020-07-09 16:00:00', '2020-07-09 17:00:00', '#DFF5F4'),
(37, 1, '37', 66, 'Lesson', 'dor', '2020-07-08 16:00:00', '2020-07-08 17:00:00', '#85364C');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `teacher_id`, `user_id`, `city`, `phone`, `age`, `birthday`) VALUES
(5, 1, 4, 'rishon', '0525938898', 15, '1995-05-10'),
(12, 1, 64, 'holon', '5555', 55, '1995-05-10'),
(13, 1, 0, '', '', 0, '0000-00-00'),
(14, 1, 66, 'bat-yam', '', 25, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_details`
--

CREATE TABLE `teacher_details` (
  `user_id` int(11) NOT NULL,
  `available_hours` varchar(255) NOT NULL,
  `class_option` varchar(255) NOT NULL,
  `available_days` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_details`
--

INSERT INTO `teacher_details` (`user_id`, `available_hours`, `class_option`, `available_days`, `phone`) VALUES
(1, '8,9,10,11,12,13,14,15,16,17,18,19,20', '1/2,3/4,1,1 1/2,2', 'Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', ''),
(2, '8,9,10,11,12,13,14,15,16,17,18,19,20', '1/2,3/4,1,1 1/2,2', 'Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', '');

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
(4, 1, 'Dor', 'Levy', 'ddd@dsdd.com', '$argon2id$v=19$m=65536,t=4,p=1$ZVNQalJKbk9GS215c2xscg$KaMmdBrrZtAs3GCTBhRp0qIr8pbqXUiCccnbGSZ8OwQ', '', 20, '1995-05-10'),
(63, 2, 'liad', 'levy', 'd2@l.com', '$argon2id$v=19$m=65536,t=4,p=1$dm81cjAxR1FMR2s0MlJQSg$P1qeH98qHrv8btmVqGGdU0J2uMwF9PcpVg5XYRnU3VQ', '', 0, '0000-00-00'),
(64, 2, 'dor', 'levy', 'ddl105095@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$Y2Y1NXlIMmxUL3M1QkhDeQ$1IEGniuGO8DA4GwrAIkGdsg+AZ/yys2XhXHlsVDE2C4', '', 25, '1995-05-10'),
(66, 2, 'dor', 'levy', 'd111@l.com', '$argon2id$v=19$m=65536,t=4,p=1$cE9MSHNGWnhKOURzREx3OA$L2fX77Ib/M3vyP1I3fpWXVRYg1gzaYUq1/Mj7D1c4Hk', '', 0, '0000-00-00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
