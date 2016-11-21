-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2016 at 03:33 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`) VALUES
(3, 'rkr', 'fae0b27c451c728867a567e8c1bb4e53');

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `dob` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `firstname`, `lastname`, `username`, `password`, `gender`, `bloodgroup`, `location`, `distance`, `mob_no`, `yob`, `mob`, `dob`) VALUES
(2, 'harsh', 'desai', 'harshdesai97', '485699f06bb5253ed1ecc2458866f110', 'male', 'B+', 'vellore', 5, '9629765909', 1995, 12, 12),
(3, 'Ravi', 'kumar', 'Ravi', 'fae0b27c451c728867a567e8c1bb4e53', 'female', 'A+', 'yo', 10, '8950851028', 1995, 9, 1),
(6, 'aaaa', 'a', 'aaaaa', '0cc175b9c0f1b6a831c399e269772661', 'male', 'A+', '', 0, '1', 1994, 9, 15),
(7, 'hate', 'you', 'hate', '639bae9ac6b3e1a84cebb7b403297b79', 'male', 'A+', 'er', 1, '4', 1996, 7, 15),
(39, 'chetan', 'kumar', 'chetantulsyan', '202cb962ac59075b964b07152d234b70', 'male', 'O+', 'vellore', 10, '9629784320', 1993, 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `username`, `password`) VALUES
(3, 'chetan', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `allow` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `bloodgroup`, `age`, `day`, `month`, `year`, `units`, `mob_no`, `location`, `hospital`, `address`, `purpose`, `allow`) VALUES
(8, 'shikhar bajaj', 'A+', 56, 13, 10, 2017, 67, '7845866071', 'tygh', 'tgyh', 'k block,vit university', 'ghj', ''),
(9, 'ankush', 'A+', 7, 14, 10, 2017, 7, '8787654521', '3', 'tfyg', 'jh', 'tyf', ''),
(10, 'abcd', 'B+', 20, 3, 2, 2017, 7, '7776587432', '77', '7', '7', '7', 'yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
