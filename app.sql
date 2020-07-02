-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 10:46 PM
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
(1, '63857286', 0, 'Lesson', '', '2020-06-17 15:00:00', '2020-06-17 16:00:00', ''),
(2, '434358846', 0, 'Lesson', '', '2020-06-05 20:00:00', '2020-06-05 21:00:00', ''),
(3, '97506741', 0, 'Lesson', '', '2020-06-12 19:00:00', '2020-06-12 20:00:00', ''),
(4, '234273337', 0, 'Lesson', '', '2020-06-03 16:00:00', '2020-06-03 17:00:00', ''),
(5, '1337649116', 0, 'Lesson', '', '2020-06-07 18:00:00', '2020-06-07 19:00:00', ''),
(6, '872378698', 0, 'Lesson', '', '2020-06-18 19:00:00', '2020-06-18 20:00:00', ''),
(7, '655304694', 0, 'Lesson', '', '2020-06-15 20:00:00', '2020-06-15 21:00:00', ''),
(8, '140505062', 0, 'Lesson', '', '2020-06-01 12:00:00', '2020-06-01 13:00:00', ''),
(9, '395151309', 0, 'Lesson', '', '2020-07-08 16:00:00', '2020-07-08 17:00:00', '#EA2AB9'),
(10, '299784674', 0, 'Lesson', '', '2020-07-03 10:00:00', '2020-07-03 11:00:00', '#1BED1A'),
(11, '1678885559', 0, 'Lesson', '', '2020-07-13 16:00:00', '2020-07-13 17:00:00', '#C8D841'),
(12, '896590701', 0, 'Lesson', 'ggggggg', '2020-07-01 20:00:00', '2020-07-01 21:00:00', '#F1BC09'),
(13, '600078087', 0, 'Lesson', '', '2020-07-03 18:00:00', '2020-07-03 19:00:00', '#BA8534'),
(14, '36714246', 0, 'Lesson', '', '2020-07-03 18:00:00', '2020-07-03 19:00:00', '#CF622B'),
(15, '1201695796', 0, 'Lesson', '', '2020-07-03 18:00:00', '2020-07-03 19:00:00', '#3D3CBC'),
(16, '76328716', 0, 'Lesson', '', '2020-07-03 18:00:00', '2020-07-03 19:00:00', '#D1F687'),
(17, '1860007786', 0, 'Lesson', '', '2020-07-03 18:00:00', '2020-07-03 19:00:00', '#BF7EBC'),
(18, '957130454', 0, 'Lesson', '', '2020-07-03 17:00:00', '2020-07-03 18:00:00', '#0A8C05'),
(19, '1776086801', 0, 'Lesson', '', '2020-07-10 00:00:00', '2020-07-10 00:00:00', '#2072CA'),
(20, '1272653751', 0, 'Lesson', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '#1E1DE3'),
(21, '1241890434', 0, 'Lesson', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '#1700B5'),
(22, '721639701', 0, 'Lesson', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '#D9F4E2'),
(23, '333624072', 0, 'Lesson', '', '2020-07-04 20:00:00', '2020-07-04 21:00:00', '#D08C32'),
(24, '451002522', 0, 'Lesson', '', '2020-07-16 19:00:00', '2020-07-16 20:00:00', '#BB5373'),
(25, '1618226261', 0, 'Lesson', '', '2020-07-15 18:00:00', '2020-07-15 19:00:00', '#BA99C1'),
(26, '483062984', 0, 'Lesson', '', '2020-07-17 19:00:00', '2020-07-17 20:00:00', '#DD108B'),
(27, '1018869657', 0, 'Lesson', '', '2020-07-21 20:00:00', '2020-07-21 21:00:00', '#5B894C'),
(28, '790478238', 0, 'Lesson', '', '2020-07-22 19:00:00', '2020-07-22 20:00:00', '#067BCA'),
(29, '798140422', 0, 'Lesson', '', '2020-07-22 19:00:00', '2020-07-22 20:00:00', '#A1F4C3'),
(30, '1750395680', 0, 'Lesson', '', '2020-07-22 19:00:00', '2020-07-22 20:00:00', '#E4A7F7'),
(31, '738272110', 0, 'Lesson', '', '2020-07-23 16:00:00', '2020-07-23 17:00:00', '#EB808D'),
(32, '522822030', 0, 'Lesson', '', '2020-07-18 15:00:00', '2020-07-18 16:00:00', '#AD29C0'),
(33, '619562337', 0, 'Lesson', '', '2020-07-22 15:00:00', '2020-07-22 16:00:00', '#9D6D9C'),
(34, '1603086329', 0, 'Lesson', '', '2020-07-22 15:00:00', '2020-07-22 16:00:00', '#4531E8'),
(35, '1388121187', 0, 'Lesson', '', '2020-07-16 18:00:00', '2020-07-16 19:00:00', '#8D98CC'),
(36, '58850402', 0, 'Lesson', '', '2020-07-06 12:00:00', '2020-07-06 13:00:00', '#AA7486'),
(37, '786006335', 0, 'Lesson', '', '2020-07-06 15:00:00', '2020-07-06 16:00:00', '#9DE84E'),
(38, '825521515', 0, 'Lesson', '', '2020-07-07 19:00:00', '2020-07-07 20:00:00', '#EFDF87'),
(39, '19741516', 0, 'Lesson', '', '2020-07-20 19:00:00', '2020-07-20 20:00:00', '#50D995'),
(40, '355413329', 0, 'Lesson', '', '2020-07-24 00:00:00', '2020-07-24 00:00:00', '#25C900'),
(41, '1342276411', 0, 'Lesson', '', '2020-07-25 00:00:00', '2020-07-25 00:00:00', '#27D579'),
(42, '120917629', 0, 'Lesson', '', '2020-07-28 20:00:00', '2020-07-28 21:00:00', '#4F6879'),
(43, '1010717616', 0, 'Lesson', '', '2020-07-30 00:00:00', '2020-07-30 00:00:00', '#1038CE'),
(44, '1787479478', 0, 'Lesson', '', '2020-07-14 00:00:00', '2020-07-14 00:00:00', '#E9608E'),
(45, '1015378493', 0, 'Lesson', '', '2020-07-14 00:00:00', '2020-07-14 00:00:00', '#959413'),
(46, '19304269', 0, 'Lesson', '', '2020-07-05 00:00:00', '2020-07-05 00:00:00', '#DFFE32'),
(47, '941086896', 0, 'Lesson', '', '2020-07-05 00:00:00', '2020-07-05 00:00:00', '#5B5143'),
(48, '1650150564', 0, 'Lesson', '', '2020-07-05 00:00:00', '2020-07-05 00:00:00', '#A76F64'),
(49, '1846768513', 0, 'Lesson', '', '2020-07-05 00:00:00', '2020-07-05 00:00:00', '#F4FCA7'),
(50, '674738850', 0, 'Lesson', '', '2020-07-12 00:00:00', '2020-07-12 00:00:00', '#2E64A5'),
(51, '1873715920', 0, 'Lesson', '', '2020-07-31 12:00:00', '2020-07-31 13:00:00', '#8FE5BC'),
(52, '314981756', 0, 'Lesson', '', '2020-07-31 12:00:00', '2020-07-31 13:00:00', '#9892D5'),
(53, '834569474', 0, 'Lesson', '', '2020-07-26 17:00:00', '2020-07-26 18:00:00', '#3734C9'),
(54, '1172391204', 0, 'Lesson', '', '2020-07-27 20:00:00', '2020-07-27 21:00:00', '#40F677'),
(55, '1161909854', 0, 'Lesson', '', '2020-07-29 16:00:00', '2020-07-29 17:00:00', '#A38332'),
(56, '949053923', 0, 'Lesson', '', '2020-07-29 16:00:00', '2020-07-29 17:00:00', '#D15EB4'),
(57, '1731688615', 0, 'Lesson', '', '2020-07-09 13:00:00', '2020-07-09 14:00:00', '#3F4660'),
(58, '1403085465', 0, 'Lesson', '', '2020-07-09 13:00:00', '2020-07-09 14:00:00', '#A7DFAE'),
(59, '1704992277', 0, 'Lesson', '', '2020-07-09 13:00:00', '2020-07-09 14:00:00', '#6E8323'),
(60, '875927532', 0, 'Lesson', '', '2020-06-30 15:00:00', '2020-06-30 16:00:00', '#B2A89F'),
(61, '157895901', 0, 'Lesson', '', '2020-06-29 11:00:00', '2020-06-29 12:00:00', '#45B995'),
(62, '1738829029', 0, 'Lesson', '', '2020-08-01 13:00:00', '2020-08-01 14:00:00', '#469044'),
(63, '1606238689', 0, 'Lesson', '', '2020-06-28 16:00:00', '2020-06-28 17:00:00', '#E45C0E'),
(64, '1608769835', 0, 'Lesson', '', '2020-08-05 18:00:00', '2020-08-05 20:00:00', '#43D6CC'),
(65, '1312400658', 0, 'Lesson', '', '2020-07-02 00:00:00', '2020-07-02 00:00:00', '#39AA43'),
(66, '715802347', 0, 'Lesson', '', '2020-06-30 18:00:00', '2020-06-30 20:00:00', '#34240D'),
(67, '1465581303', 0, 'Lesson', '', '2020-07-01 13:00:00', '2020-07-01 14:00:00', '#E57812'),
(68, '309898673', 0, 'Lesson', '', '2020-06-29 12:00:00', '2020-06-29 13:00:00', '#EF3390'),
(69, '1569328529', 0, 'Lesson', '', '2020-06-30 16:00:00', '2020-06-30 17:00:00', '#83C2E3'),
(70, '1512940506', 0, 'Lesson', '', '2020-07-01 20:00:00', '2020-07-01 21:00:00', '#08E7A7'),
(71, '202608568', 0, 'Lesson', '', '2020-07-27 18:00:00', '2020-07-27 19:00:00', '#082ECB'),
(72, '1969892903', 0, 'Lesson', '', '2020-09-07 12:00:00', '2020-09-07 12:00:45', '#68F4E5'),
(73, '1105757617', 0, 'Lesson', '', '2020-08-06 16:00:00', '2020-08-06 16:45:00', '#A039A9');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
