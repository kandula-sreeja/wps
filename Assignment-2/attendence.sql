-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 07:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendence tracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `rollno` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `attendence1` text NOT NULL,
  `proctor hierarchy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`rollno`, `password`, `attendence1`, `proctor hierarchy`) VALUES
('1602-18-733-104', 'password', '8 out 10 classes are present', 'shashi->sunitha->vinay->Hod'),
('1602-18-733-102', 'sathvika', '10 out of 10 are present', 'sashi->sunitha->vinay->HOD'),
('1602-18-733-103', 'shivani', '6 out of 10 are present', 'shashi->sunitha->vinay->HOD'),
('1602-18-733-100', 'sana', '8 out of 10 are present', 'shashi->sunitha->vinay->HOD'),
('1602-18-733-106', 'sreeja', '10 out of 10 are present', 'shashi->sunitha->vinay->HOD');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
