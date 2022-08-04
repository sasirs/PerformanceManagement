-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 07:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perform`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `adminID` int(20) NOT NULL,
  `apswd` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `dept` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `adminID`, `apswd`, `email`, `mobileno`, `dept`) VALUES
('sasi', 1234, '1234', 'sasi@gmail.com', 2147483647, 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `classid` int(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `section` varchar(1) NOT NULL,
  `incharge` varchar(20) NOT NULL,
  `sub1` varchar(50) NOT NULL,
  `sub2` varchar(50) NOT NULL,
  `sub3` varchar(50) NOT NULL,
  `sub4` varchar(50) NOT NULL,
  `sub5` varchar(50) NOT NULL,
  `sub6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `classid`, `dept`, `section`, `incharge`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`) VALUES
(23, 101, '3/CSE', 'A', 'SASI', 'data ', 'ooad', 'st', 'maths', 'english', 'pqt'),
(24, 102, '3/IT', 'A', 'MANI', 'BB', 'B', 'D', 'R', 'R', 'SDW'),
(25, 103, '2/it', 'a', 'hff', 'tr6', 'ur', 'r', 'utr', 'utr', 'u');

-- --------------------------------------------------------

--
-- Table structure for table `perfomence`
--

CREATE TABLE `perfomence` (
  `roll` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sub1` varchar(2) NOT NULL,
  `sub2` varchar(2) NOT NULL,
  `sub3` varchar(2) NOT NULL,
  `sub4` varchar(2) NOT NULL,
  `sub5` varchar(2) NOT NULL,
  `sub6` varchar(2) NOT NULL,
  `workday` int(5) NOT NULL,
  `preday` int(5) NOT NULL,
  `percentage` varchar(5) NOT NULL,
  `feedback` varchar(10) NOT NULL,
  `sn1` varchar(20) NOT NULL,
  `sn2` varchar(20) NOT NULL,
  `sn3` varchar(20) NOT NULL,
  `sn4` varchar(20) NOT NULL,
  `sn5` varchar(20) NOT NULL,
  `sn6` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perfomence`
--

INSERT INTO `perfomence` (`roll`, `name`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `workday`, `preday`, `percentage`, `feedback`, `sn1`, `sn2`, `sn3`, `sn4`, `sn5`, `sn6`) VALUES
(11, 'mohan', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 13, 131, '98%', 'VeryGood', 'data ', 'ooad', 'st', 'maths', 'english', 'pqt');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `roll` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `mobileno` int(10) NOT NULL,
  `sem` int(1) NOT NULL,
  `dept` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `roll`, `name`, `email`, `dob`, `mobileno`, `sem`, `dept`) VALUES
(24, 87, 'sarath', 'hggigi', '2001-07-20', 87877, 6, '3/it'),
(26, 2147483647, 'sasilkumar', 'sasi@gmail.com', '2001-07-20', 2147483647, 6, '3/cse'),
(27, 11, 'mohan', 'sasi@gmail.com', '1111-11-11', 2147483647, 6, '3/cse'),
(28, 32, 'sasikiran', 'sasikiran@gmail.com', '2001-04-24', 578995999, 6, '3/cse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`apswd`),
  ADD UNIQUE KEY `adminid` (`adminID`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perfomence`
--
ALTER TABLE `perfomence`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
