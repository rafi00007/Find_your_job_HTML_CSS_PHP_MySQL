-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2019 at 03:05 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) NOT NULL,
  `password` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `job_position` varchar(100) NOT NULL,
  `requirement` varchar(100) NOT NULL,
  `experience` int(11) NOT NULL,
  `selary` int(11) NOT NULL,
  `vecancy` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `last_date` date NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`pid`, `company_name`, `password`, `address`, `area`, `job_position`, `requirement`, `experience`, `selary`, `vecancy`, `email`, `last_date`) VALUES
(2, 'GREENLAND GROUP', 123, 'gulsan,Dhaka', 'Dhaka', 'CEO', 'MBA', 1, 50000, 1, '', '2019-10-30'),
(3, 'TAKEOUT', 123, 'mohakhali,Dhaka', 'Dhaka', 'CTO', 'Msc', 2, 100000, 2, '', '2019-11-06'),
(4, 'SOFTIT', 123, 'jolersoritola,bogura', 'Bogura', 'Engineer', 'Bsc', 2, 50000, 2, '', '2019-10-13'),
(5, 'TIGER GROUP', 123, 'bonany,Bogura', 'Bogura', 'sales maneger', 'MA', 2, 36000, 3, '', '2019-10-24'),
(7, 'KG GROUP', 123, 'Rangpur', 'Rangpur', 'supervisor', 'BA', 3, 45000, 2, '', '2019-10-28'),
(8, 'IPDC ltd', 123, 'madaripur,Khulna', 'Khulna', 'CEO', 'MA', 5, 80000, 1, '', '2019-10-11'),
(9, 'BCSconfidence', 123, 'Khulna', 'Khulna', 'teacher', 'MA', 3, 45000, 2, '', '2019-10-21'),
(10, 'Udvas', 123, 'RUET mor', 'Rajshahi', 'teacher', 'Bsc ', 2, 50000, 4, '', '2019-10-25'),
(11, 'TMSS', 123, 'Thangamara,Bogura', 'Bogura', 'sales maneger', 'BA', 3, 37000, 2, '', '2019-11-14'),
(12, 'TMSS', 123, 'Thangamara,Bogura', 'Bogura', 'Engineer', 'Msc', 4, 90000, 3, '', '2019-11-26'),
(13, 'BSRM', 123, 'khulsi,Chattagram', 'Chattagram', 'supervisor', 'MBA', 3, 60000, 2, '', '2019-10-13'),
(15, 'IRC ltd', 123, 'cox bazar', 'Chattagram', 'CTO', 'Bsc', 3, 85000, 1, '', '2019-10-24'),
(16, 'IRC ltd', 123, 'cox bazar', 'Chattagram', 'sales maneger', 'BA', 2, 56000, 2, '', '2019-10-21'),
(17, 'ACF ltd', 123, 'cox bazar', 'Chattagram', 'sales maneger', 'MBA', 3, 60000, 1, '', '2019-10-13'),
(18, 'SBITS', 123, '22, Shantinagar, Dhaka', 'Shantinagar', 'Jr. Web Developer', 'Bsc', 2, 0, 1, '', '2019-10-08'),
(19, 'PRAN', 123, 'Rangpur', 'Rangpur', 'sales maneger', 'MBA', 1, 50000, 2, '', '2019-10-18'),
(20, 'BAUST', 123, 'Rangpur', 'Rangpur', 'teacher', 'Bsc', 2, 25000, 2, 'baust@gmail.com.bd', '2019-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(11) NOT NULL,
  `confirm_pass` int(11) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`rid`, `company_name`, `email`, `password`, `confirm_pass`) VALUES
(1, 'RFL', 'rfl@gmail.com', 123, 123),
(2, 'PRAN', 'pran@gmail.com', 123, 123),
(3, 'Greenland Group', 'greenlandgroup@gmail.com', 123, 123),
(4, 'Takeout LTD', 'takeoutltd@gmail.com', 123, 123),
(5, 'Soft it', 'softit@gmail.com', 123, 111),
(6, 'Tiger group', 'tiger@gmail.com', 123, 111),
(7, 'BAUST', 'baust@gmail.com.bd', 123, 111),
(8, 'KG group', 'kg@gmail.com', 123, 111),
(9, 'IPDC', 'ipdc@gmail.com', 123, 111),
(10, 'BCS confidence', 'bcs@gmail.com', 123, 111),
(11, 'TMSS', 'tmss@gmail.com', 123, 111),
(12, 'Udvas', 'udvas@gmail.com', 123, 123),
(13, 'BSRM', 'bsrm@gmail.com', 123, 123),
(14, 'IRC', 'irc@gmail.com', 123, 123),
(15, 'ACF', 'acf@gmail.com', 123, 123),
(16, 'MEL', 'mel@gmail.com', 123, 123),
(17, 'SBITS', 'info@sbitsbd.com', 123, 123),
(18, 'hf', 'hf@gmail.com', 1304045, 1304045);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(11) NOT NULL,
  `confirm_pass` int(11) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `full_name`, `phone`, `email`, `password`, `confirm_pass`) VALUES
(1, 'refat', 1764842633, 'refat@gmail.com', 111, 111),
(2, 'zannat', 121540240, 'haa@gmail.com', 1304045, 1304045);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
