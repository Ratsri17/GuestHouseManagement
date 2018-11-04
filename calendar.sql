-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 04, 2018 at 07:11 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `title` varchar(10) NOT NULL,
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `VisName` text NOT NULL,
  `PosAddress` varchar(500) NOT NULL,
  `Category` text NOT NULL,
  `NumberRoom` int(1) NOT NULL,
  `Fname` text NOT NULL,
  `Designation` text NOT NULL,
  `Department` text NOT NULL,
  `Number` int(10) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `color` varchar(20) NOT NULL DEFAULT '#008000',
  `availability` varchar(20) NOT NULL DEFAULT 'Available',
  `Room_Avail` int(1) NOT NULL DEFAULT '3',
  `Room1` varchar(10) NOT NULL DEFAULT 'AVAILABLE',
  `Room2` varchar(10) NOT NULL DEFAULT 'AVAILABLE',
  `Room3` varchar(10) NOT NULL DEFAULT 'AVAILABLE',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`title`, `id`, `VisName`, `PosAddress`, `Category`, `NumberRoom`, `Fname`, `Designation`, `Department`, `Number`, `start`, `end`, `color`, `availability`, `Room_Avail`, `Room1`, `Room2`, `Room3`) VALUES
('', 1, 'd', 'ed', 'A', 1, 'efew', 'er', 'ssd', 1234567890, '2012-12-12 00:00:00', '2012-12-12 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
('', 2, 'sagar', 'Mishra Niwas, Kota', 'B', 1, 'Ratnesh', 'student', 'MCA', 12345678, '2018-09-07 00:00:00', '2018-09-08 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
('B', 3, 'sagar', 'Kota', 'A', 1, 'Ratnesh', 'student', 'MCA', 843592, '2019-01-02 00:00:00', '2019-01-03 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE'),
('A', 4, 'sagar', 'Kota', 'B', 2, 'Ratnesh', 'student', 'MCA', 84359, '2019-01-02 00:00:00', '2019-01-03 00:00:00', '#008000', 'Available', 3, 'AVAILABLE', 'AVAILABLE', 'AVAILABLE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
