-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2016 at 06:57 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`) VALUES
(1, 'shikhar16', 'd4b79858508069a83e2a50f97092ff2d');

-- --------------------------------------------------------

--
-- Table structure for table `donated`
--

CREATE TABLE IF NOT EXISTS `donated` (
  `id` int(11) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `points` int(4) NOT NULL,
  `allow` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donated`
--

INSERT INTO `donated` (`id`, `feedback`, `points`, `allow`) VALUES
(2, '', 2, 'yes'),
(3, '', 5, 'yes'),
(6, '', 2, 'yes'),
(14, '454ert', 1, ''),
(29, 'i feel happy', 0, ''),
(30, 'edrtyjkl', 1, ''),
(32, 'sc', 0, ''),
(31, '', 3, 'yes'),
(36, 'rtyguhi', 0, ''),
(38, 'bjacjkacf', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `distance` int(10) NOT NULL,
  `mob_no` varchar(15) NOT NULL,
  `yob` int(5) NOT NULL,
  `mob` int(3) NOT NULL,
  `dob` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `firstname`, `lastname`, `username`, `password`, `gender`, `bloodgroup`, `location`, `distance`, `mob_no`, `yob`, `mob`, `dob`) VALUES
(2, 'harsh', 'desai', 'harshdesai97', '485699f06bb5253ed1ecc2458866f110', 'male', 'B+', 'vellore', 5, '9629765909', 1995, 12, 12),
(3, 'tanvi', 'vij', 'tanvi', '32250170a0dca92d53ec9624f336ca24', 'female', 'A+', 'yo', 10, '8950851028', 1995, 9, 1),
(6, 'aaaa', 'a', 'aaaaa', '0cc175b9c0f1b6a831c399e269772661', 'male', 'A+', '', 0, '1', 1994, 9, 15),
(7, 'hate', 'you', 'hate', '639bae9ac6b3e1a84cebb7b403297b79', 'male', 'A+', 'er', 1, '4', 1996, 7, 15),
(8, '1', '1', 'GU', 'c4ca4238a0b923820dcc509a6f75849b', 'male', 'A+', '1', 1, '1', 1997, 11, 19),
(14, 'shikhar', 'bajaj', 'shikhar', 'd4b79858508069a83e2a50f97092ff2d', 'male', 'A+', 'w', 1, '1', 1980, 1, 1),
(17, 'shikhar', 'bajaj', 'l,', '2db95e8e1a9267b7a1188556b2013b33', 'male', 'A+', 'l', 0, 'l', 1980, 1, 1),
(18, 'phaniram', 'chaudri', 'phani', '32250170a0dca92d53ec9624f336ca24', 'male', 'BOMBAY BLOOD GROUP', 'k block vit university', 6, '9898765678', 1996, 7, 16),
(19, 'akash', 'arora', 'arash', '32250170a0dca92d53ec9624f336ca24', 'male', 'A+', 'yufu', 2, '3', 1980, 1, 1),
(25, 'sanno', 'di', 'sanno', 'c4ca4238a0b923820dcc509a6f75849b', 'male', 'A+', 'efghj', 8, '1', 1950, 1, 1),
(29, 'sb', 'bajaj', 'sb', 'd4b79858508069a83e2a50f97092ff2d', 'male', 'O+', 'nsdk', 111, '+917845866071', 1964, 11, 17),
(30, 'avnish', 'kapur', 'avnish', '6512bd43d9caa6e02c990b0a82652dca', 'male', 'B+', 'drftghuj', 878, '878', 1951, 3, 3),
(31, 'harsh', 'desai', 'hd97', 'd4b79858508069a83e2a50f97092ff2d', 'male', 'B-', 'dfeaax', 123, '345678', 1962, 9, 14),
(32, 'uday', 's', 'uday', 'd4b79858508069a83e2a50f97092ff2d', 'female', 'A+', '13', 23, '56567', 1964, 2, 13),
(33, '7868', '6867', '68678', 'c4ca4238a0b923820dcc509a6f75849b', 'male', 'A+', '7897', 7987, '798', 1967, 9, 8),
(34, 'huhuhu', 'hu', 'huhuhu', '18bd9197cb1d833bc352f47535c00320', 'male', 'A+', 'hu', 0, 'hu', 1950, 1, 1),
(35, 'q', 'q', 'q', '7694f4a66316e53c8cdd9d9954bd611d', 'male', 'A+', 'q', 0, '4', 1961, 7, 15),
(36, 'parto', 'patro', 'patro', '64248456926f71110ac0db8cd6a03031', 'male', 'A+', 'edrftgh', 56, '4567', 1964, 10, 16),
(37, 'tcfv', 'yvg', 't', 'e358efa489f58062f10dd7316b65649e', 'male', 'A+', 't', 0, 't', 1968, 12, 19),
(38, 'sir', 'sir', 'sir', 'dcff57c9a964f83fbf81cc75ec2e413a', 'male', 'B-', 'fytf', 666, '78', 1966, 12, 17);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `username`, `password`) VALUES
(1, 'shikhar_bajaj', 'd4b79858508069a83e2a50f97092ff2d'),
(2, 'vivek_sanodiya', 'd4b79858508069a83e2a50f97092ff2d');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `bloodgroup` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `day` int(3) NOT NULL,
  `month` int(3) NOT NULL,
  `year` int(5) NOT NULL,
  `units` int(10) NOT NULL,
  `mob_no` varchar(15) NOT NULL,
  `location` varchar(200) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `purpose` varchar(500) NOT NULL,
  `allow` varchar(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `bloodgroup`, `age`, `day`, `month`, `year`, `units`, `mob_no`, `location`, `hospital`, `address`, `purpose`, `allow`) VALUES
(8, 'shikhar bajaj', 'A+', 56, 13, 10, 2017, 67, '+917845866071', 'tygh', 'tgyh', 'k block,vit university', 'ghj', 'yes'),
(9, 'ankush', 'A+', 7, 14, 10, 2017, 7, '87', '3', 'tfyg', 'jh', 'tyf', ''),
(10, 'abcd', 'B+', 20, 3, 2, 2016, 7, '777', '77', '7', '7', '7', 'yes'),
(11, 'sir', 'A-', 20, 14, 12, 2016, 5, '67', 'uughu', 'th', 'jgj', 'hmv', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
