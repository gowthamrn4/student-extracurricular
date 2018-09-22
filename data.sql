-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2017 at 12:38 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `name`) VALUES
('cpa@', 'cpa', 'C.P.A.College');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `time` varchar(50) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`no`, `username`, `msg`, `time`, `sender`, `status`) VALUES
(1, 'gm@', 'ghgh', '5 3   2017, at 9.52 pm', 'cpa@', 0),
(2, 'gm@', 'bvb', '5 3   2017, at 9.53 pm', 'cpa@', 0),
(3, 'gm@', 'hi da', '5 3   2017, at 11.14 pm', 'cpa@', 0),
(4, 'gm@', 'hi da', '5 3   2017, at 11.27 pm', 'cpa@', 1),
(5, 'gm@', 'hi da', '5 3   2017, at 11.29 pm', 'cpa@', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ncc`
--

CREATE TABLE IF NOT EXISTS `ncc` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `rollno` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `class` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `joind` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ncc`
--


-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `news` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`no`, `username`, `news`, `time`, `status`) VALUES
(1, 'cpa@', 'hi', '5 3   2017, at 11.24 pm', 0),
(2, 'cpa@', 'hi', '5 3   2017, at 11.24 pm', 0),
(3, 'cpa@', 'hi', '5 3   2017, at 11.24 pm', 0),
(4, 'cpa@', 'hi', '5 3   2017, at 11.25 pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nss`
--

CREATE TABLE IF NOT EXISTS `nss` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `rollno` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `class` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `joind` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `nss`
--

INSERT INTO `nss` (`no`, `name`, `rollno`, `image`, `class`, `email`, `phone`, `joind`, `address`) VALUES
(10, 'gm', '45454', 'upload/IMG_20161219_105257_HDR.jpg', 'Bsc Chem 3rd Year', 'trr', 'jgh', 'g', 'h'),
(9, '', '', 'upload/', 'Bsc Cs 1st Year', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE IF NOT EXISTS `sport` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `rollno` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `class` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `joind` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`no`, `name`, `rollno`, `image`, `class`, `type`, `email`, `phone`, `joind`, `address`) VALUES
(6, '', '', 'upload/', 'Bsc Cs 1st Year', 'Cricket', '', '', '', ''),
(7, '', '', 'upload/', 'Bsc Cs 1st Year', 'Athlete', '', '', '', ''),
(8, '', '', 'upload/', 'Bsc Cs 1st Year', 'Athlete', '', '', '', ''),
(9, '', '', 'upload/', 'Bsc Cs 1st Year', 'Athlete', '', '', '', ''),
(12, 'hmy', 'ty', 'upload/IMG_20161219_105420_HDR.jpg', 'Bsc Cs 1st Year', 'Cricket', 'y', 'ty', 'ty', 't');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `email`, `phone`, `image`) VALUES
('gm@', 'gm', 'Gowtham', 'gowthamrn4@gmail.com', '8682919578', 'upload/gmm (3).jpg'),
('gm@', 'gm', 'Gowtham', 'gowthamrn4@gmail.com', '8682919578', '../upload/gmm (3).jpg'),
('yu', 'yu', 'yu', 'yu', 'yu', '../upload/gmm (3).jpg'),
('gm@', '', 'C.P.A.College', '', '', '../upload/'),
('gm@', '', 'C.P.A.College', '', '', '../upload/'),
('gm@', '', 'C.P.A.College', '', '', '../upload/');
