-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 05:16 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guesthouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) DEFAULT 'Prof.',
  `VisName` text,
  `PosAddress` varchar(500) DEFAULT NULL,
  `Category` text,
  `NumberRoom` int(1) DEFAULT NULL,
  `Fname` text,
  `Designation` text,
  `Department` text,
  `Number` int(10) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `color` varchar(20) NOT NULL DEFAULT '#008000',
  `availability` varchar(20) NOT NULL DEFAULT 'Available',
  `Room_Avail` int(1) NOT NULL DEFAULT '3',
  `Room1` varchar(10) NOT NULL DEFAULT 'AVAILABLE',
  `Room2` varchar(10) NOT NULL DEFAULT 'AVAILABLE',
  `Room3` varchar(10) NOT NULL DEFAULT 'AVAILABLE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `VisName`, `PosAddress`, `Category`, `NumberRoom`, `Fname`, `Designation`, `Department`, `Number`, `start`, `end`, `color`, `availability`, `Room_Avail`, `Room1`, `Room2`, `Room3`) VALUES
(16, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-01 00:00:00', '2019-01-02 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(17, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-02 00:00:00', '2019-01-03 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(18, 'Dr', 'Abc', 'raipur', 'B', 3, 'Abcdef', 'Student', 'MCA', 234546, '2019-01-03 00:00:00', '2019-01-04 00:00:00', 'red', 'NOT AVAILABLE', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(19, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-04 00:00:00', '2019-01-05 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(20, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-05 00:00:00', '2019-01-06 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(21, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-06 00:00:00', '2019-01-07 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(22, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-07 00:00:00', '2019-01-08 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(23, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-08 00:00:00', '2019-01-09 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(24, 'Mr', 'hfhg', 'jgkjh', 'B', 1, 'Ratnesh', 'Student', 'MCA', 67587567, '2019-01-09 00:00:00', '2019-01-10 00:00:00', 'red', 'NOT AVAILABLE', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(45, 'Mr', 'sagar', 'raipur', 'A', 1, 'Ratnesh', 'Student', 'MCA', 2147483647, '2019-01-10 00:00:00', '2019-01-11 00:00:00', 'red', 'NOT AVAILABLE', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(47, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-11 00:00:00', '2019-01-12 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(48, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-12 00:00:00', '2019-01-13 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(49, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-13 00:00:00', '2019-01-14 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(50, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-14 00:00:00', '2019-01-15 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(51, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-15 00:00:00', '2019-01-16 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(52, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-16 00:00:00', '2019-01-17 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(53, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-17 00:00:00', '2019-01-18 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(54, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-18 00:00:00', '2019-01-19 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(55, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-19 00:00:00', '2019-01-20 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(56, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-20 00:00:00', '2019-01-21 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(57, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-21 00:00:00', '2019-01-22 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(58, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-22 00:00:00', '2019-01-23 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(59, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-23 00:00:00', '2019-01-24 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(60, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-24 00:00:00', '2019-01-25 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(61, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-25 00:00:00', '2019-01-26 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(62, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-26 00:00:00', '2019-01-27 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(63, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-27 00:00:00', '2019-01-28 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(64, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-28 00:00:00', '2019-01-29 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(65, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-29 00:00:00', '2019-01-30 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(66, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-30 00:00:00', '2019-01-31 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
(67, 'Prof.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-31 00:00:00', '2019-02-01 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE');

-- --------------------------------------------------------

--
-- Table structure for table `facultydetails`
--

CREATE TABLE IF NOT EXISTS `facultydetails` (
  `username` text NOT NULL,
  `facultyid` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` text NOT NULL,
  `designation` text NOT NULL,
  `mobile` int(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `cpassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultydetails`
--

INSERT INTO `facultydetails` (`username`, `facultyid`, `email`, `department`, `designation`, `mobile`, `password`, `cpassword`) VALUES
('Saumya', 'qwerty1234', 'saumyakushwaha26@gmail.com', 'maths', 'prof', 1234465555, '12345', '12345'),
('rtfht', 'grtr', 'ratsri@gmail', 'festes', 'gseg', 83540342, '12345', '12345'),
('rtfht', 'grtr', 'ratsri@gmail', 'festes', 'gseg', 83540342, '12345', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
