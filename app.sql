-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 10:43 AM
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
(1, '2025448525', 0, 'Lesson', '', '2020-07-02 00:00:00', '2020-07-02 00:00:00', '#9CCF7E'),
(2, '1814139232', 0, 'Lesson', '', '2020-07-03 13:00:00', '2020-07-03 13:00:00', '#833EEA'),
(3, '1241142796', 0, 'Lesson', '', '2020-07-08 13:00:00', '2020-07-08 14:00:00', '#A72A36'),
(4, '874082064', 0, 'Lesson', '', '2020-07-09 13:00:00', '2020-07-09 13:30:00', '#B5F4A8'),
(5, '1765222184', 0, 'Lesson', '', '2020-07-09 16:00:00', '2020-07-09 16:45:00', '#3356B4'),
(6, '647092206', 0, 'Lesson', '', '2020-07-09 15:00:00', '2020-07-09 16:00:00', '#F78ADE'),
(7, '751188275', 0, 'Lesson', '', '2020-07-09 13:00:00', '2020-07-09 14:30:00', '#22D528'),
(8, '1922761517', 0, 'Lesson', '', '2020-07-09 16:00:00', '2020-07-09 18:00:00', '#963A66'),
(9, '808531070', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#1408A1'),
(10, '1038886339', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#28FD21'),
(11, '176704167', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#01FFE1'),
(12, '379721498', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#6914B6'),
(13, '636382013', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#14F20C'),
(14, '300976455', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#AAAD94'),
(15, '1843299258', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#7675D1'),
(16, '427364077', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#E16FA1'),
(17, '2126733832', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#14473F'),
(18, '2140398318', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#F44D29'),
(19, '931743903', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#72A00E'),
(20, '1033936489', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#A5F991'),
(21, '511925359', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#E5AD2E'),
(22, '189367237', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#1732E4'),
(23, '292762127', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#3DA0EF'),
(24, '1168454677', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#F66BA9'),
(25, '1677470557', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#30DB53'),
(26, '1910537436', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#B5E6DE'),
(27, '1455590356', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#A8EF87'),
(28, '1022679566', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#705A49'),
(29, '295240190', 0, 'Lesson', '', '2020-07-15 13:00:00', '2020-07-15 14:00:00', '#F74176'),
(30, '336158250', 0, 'Lesson', '', '2020-07-08 00:00:00', '2020-07-08 00:00:00', '#4DFA9F'),
(31, '340904296', 0, 'Lesson', '', '2020-07-14 20:00:00', '2020-07-14 20:45:00', '#85668D'),
(32, '1754473421', 0, 'Lesson', '', '2020-07-14 20:00:00', '2020-07-14 20:45:00', '#7A4C10'),
(33, '212493674', 0, 'Lesson', '', '2020-07-14 20:00:00', '2020-07-14 20:45:00', '#C781C7'),
(34, '961313975', 0, 'Lesson', '', '2020-07-14 20:00:00', '2020-07-14 20:45:00', '#F3BD20'),
(35, '1661450449', 0, 'Lesson', '', '2020-07-14 20:00:00', '2020-07-14 20:45:00', '#993A27'),
(36, '530545036', 0, 'Lesson', '', '2020-07-10 13:00:00', '2020-07-10 14:30:00', '#04B608'),
(37, '916484998', 0, 'Lesson', '', '2020-07-07 09:00:00', '2020-07-07 10:00:00', '#8F5138'),
(38, '667395107', 0, 'Lesson', '', '2020-07-22 09:00:00', '2020-07-22 10:00:00', '#238DD4'),
(39, '4pmrffmqkh693c9rhf1hh22pts_20220528T160000Z', 0, 'Google I/O 2015', '', '2022-05-28 19:00:00', '2022-05-29 03:00:00', ''),
(45, '4pmrffmqkh693c9rhf1hh22pts_20220529T160000Z', 0, 'Google I/O 2015', '', '2022-05-29 19:00:00', '2022-05-30 03:00:00', ''),
(46, '6thedt424l2ombevl09ja8gmra', 0, 'hj', '', '2027-05-28 14:00:00', '2027-05-28 15:00:00', ''),
(47, '1i8arc7p9vpasigecsqm6if3u4_20270528T160000Z', 0, 'Google I/O 2015', '', '2027-05-28 19:00:00', '2027-05-29 03:00:00', ''),
(48, '31l5esnn2te764egtc1o85itqk_20270528T160000Z', 0, 'Dor Levy', '', '2027-05-28 19:00:00', '2027-05-29 03:00:00', ''),
(49, '335pl2l51cbhqf0mo0jfctir28_20270528T160000Z', 0, 'Google I/O 2015', '', '2027-05-28 19:00:00', '2027-05-29 03:00:00', ''),
(50, '3as99g9gljiv7b9gcbalfqqe5c_20270528T160000Z', 0, 'Google I/O 2015', '', '2027-05-28 19:00:00', '2027-05-29 03:00:00', ''),
(51, '6vd9vaukgmp2oqqot8h72ojpak_20270528T160000Z', 0, 'Google I/O 2015', '', '2027-05-28 19:00:00', '2027-05-29 03:00:00', ''),
(52, '87q4lk1u1o1aoje8hovt2olgok_20270528T160000Z', 0, 'Google I/O 2015', '', '2027-05-28 19:00:00', '2027-05-29 03:00:00', ''),
(53, '8i0c9pmt68mftek9sl5et616mc_20270528T160000Z', 0, 'Google I/O 2015', '', '2027-05-28 19:00:00', '2027-05-29 03:00:00', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
