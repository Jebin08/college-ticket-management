-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2024 at 06:59 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `fullname` varchar(255) default NULL,
  `mobilenumber` bigint(20) default NULL,
  `email` varchar(255) default NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` datetime default NULL,
  `updationDate` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `mobilenumber`, `email`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', NULL, NULL, 'admin', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `id` int(11) NOT NULL auto_increment,
  `block` varchar(255) default NULL,
  `creationDate` timestamp NULL default NULL,
  `updationDate` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`id`, `block`, `creationDate`, `updationDate`) VALUES
(1, 'finance', '2024-06-26 09:33:22', '2024-06-26 09:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL auto_increment,
  `departmentName` varchar(255) default NULL,
  `departmentDescription` tinytext,
  `postingDate` datetime default NULL,
  `updationDate` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `departmentName`, `departmentDescription`, `postingDate`, `updationDate`) VALUES
(1, 'computer', 'all computer lab control', '2024-06-01 09:34:18', '2024-06-01 09:34:18'),
(2, 'u', '7', '2024-06-28 10:48:44', '2024-06-28 10:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL auto_increment,
  `location` varchar(255) default NULL,
  `creationDate` timestamp NULL default NULL,
  `updationDate` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location`, `creationDate`, `updationDate`) VALUES
(1, 'chennai', '2024-06-01 09:39:55', '2024-06-01 09:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL auto_increment,
  `fullname` varchar(60) NOT NULL,
  `mobilenumber` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL,
  `location` varchar(60) NOT NULL,
  `block` varchar(60) NOT NULL,
  `creationDate` varchar(60) NOT NULL,
  `updationDate` varchar(60) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fullname`, `mobilenumber`, `email`, `username`, `password`, `department`, `location`, `block`, `creationDate`, `updationDate`) VALUES
(1, 'jegan', '9894918800', 'jebinp08@gmail.com', 'jegan', 'jegan', 'computer', 'chennaivvv', 'A', '2024-06-01 12:47:47', '2024-06-01 12:47:47'),
(2, 'kk', '9894918800', 'jebinp08@gmail.com', 'kkk', 'kkk', 'computer', 'chennai', 'finance', '2024-06-26 09:36:22', '2024-06-26 09:36:22');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomplaints`
--

CREATE TABLE `tblcomplaints` (
  `complaintNumber` int(11) NOT NULL auto_increment,
  `userId` int(11) default NULL,
  `location` varchar(255) default NULL,
  `department` varchar(255) default NULL,
  `block` varchar(255) default NULL,
  `complaint_category` varchar(40) NOT NULL,
  `complaintDetails` mediumtext,
  `roon_no` varchar(50) NOT NULL,
  `regDate` varchar(100) default NULL,
  `status` varchar(50) default NULL,
  `updesc` varchar(1000) NOT NULL,
  `lastUpdationDate` varchar(100) default NULL,
  PRIMARY KEY  (`complaintNumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tblcomplaints`
--

INSERT INTO `tblcomplaints` (`complaintNumber`, `userId`, `location`, `department`, `block`, `complaint_category`, `complaintDetails`, `roon_no`, `regDate`, `status`, `updesc`, `lastUpdationDate`) VALUES
(2, 4, 'chennai', 'computer', 'A', '', 'no compaint', '', '2024-06-01 16:55:58', 'Your complaint has been resolved', '', NULL),
(5, 4, 'chennai', 'computer', 'A', '', 'nn', '', '2024-06-03 14:54:00', 'Your complaint has been resolved', 'finished', '2024-06-03 17:33:43'),
(6, 4, 'chennai', 'computer', 'finance', '', 'no compliants', '', '2024-06-26 09:38:26', 'Complaint Submitted', '', NULL),
(7, 4, 'chennai', 'computer', 'finance', '', 'no', '', '2024-06-26 09:44:13', 'Complaint Submitted', '', NULL),
(8, 4, 'chennai', 'computer', 'finance', '', 'nnn', '', '2024-06-26 09:45:16', 'Complaint Submitted', '', NULL),
(9, 4, 'chennai', 'computer', 'finance', '', 'ffff', '', '2024-06-26 09:46:51', 'Complaint Submitted', '', NULL),
(10, 4, 'chennai', 'computer', 'finance', '', 'mmmm', '', '2024-06-26 09:48:07', 'Complaint Submitted', '', NULL),
(11, 4, 'chennai', 'computer', 'finance', '', 'gg', '', '2024-06-26 09:49:09', 'Complaint Submitted', '', NULL),
(12, 4, 'chennai', 'computer', 'finance', '', 'kk', '', '2024-06-26 09:49:52', 'Complaint Submitted', '', NULL),
(13, 4, 'chennai', 'computer', 'finance', '', 'll', '', '2024-06-26 09:52:03', 'Complaint Submitted', '', NULL),
(14, 4, 'chennai', 'computer', 'finance', '', 'cccccc', '', '2024-06-26 09:53:44', 'Complaint Submitted', '', NULL),
(15, 4, 'chennai', 'computer', 'finance', '', 'nnnnnnn', '', '2024-06-26 09:56:08', 'Complaint Submitted', '', NULL),
(16, 4, 'chennai', 'computer', 'finance', '', 'nnnnnnn', '', '2024-06-26 09:56:08', 'Complaint Submitted', '', NULL),
(17, 4, 'chennai', 'computer', 'finance', '', 'bbbbbb', '', '2024-06-26 09:57:20', 'Complaint Submitted', '', NULL),
(18, 4, 'chennai', 'computer', 'finance', '', 'bdfsaa', '', '2024-06-26 09:58:35', 'Complaint Submitted', '', NULL),
(19, 4, 'chennai', 'computer', 'finance', '', 'bfghfgg', '', '2024-06-26 09:59:43', 'Complaint Submitted', '', NULL),
(20, 4, 'chennai', 'computer', 'finance', '', 'ggggg', '', '2024-06-26 10:01:00', 'Complaint Submitted', '', NULL),
(21, 4, 'chennai', 'computer', 'finance', '', 'hfdsttgd', '', '2024-06-26 10:02:11', 'Complaint Submitted', '', NULL),
(22, 4, 'chennai', 'computer', 'finance', '', 'hhhhfdr', '', '2024-06-26 10:04:33', 'Complaint Submitted', '', NULL),
(23, 4, 'chennai', 'computer', 'finance', '', 'hhhfedrr', '', '2024-06-26 10:05:08', 'Complaint Submitted', '', NULL),
(24, 4, 'chennai', 'computer', 'finance', '', 'gghegff', '', '2024-06-26 10:05:44', 'Complaint Submitted', '', NULL),
(25, 4, 'chennai', 'computer', 'finance', '', 'fggewsasd', '', '2024-06-26 10:06:26', 'Complaint Submitted', '', NULL),
(26, 4, 'chennai', 'computer', 'finance', '', 'hrturwe', '', '2024-06-26 10:07:24', 'Complaint Submitted', '', NULL),
(27, 4, 'chennai', 'computer', 'finance', '', 'jjjjj', '', '2024-06-26 10:08:02', 'Complaint Submitted', '', NULL),
(28, 4, 'chennai', 'computer', 'finance', 'Speciality', 'not good,Complaint Submitted Complaint Submitted	Complaint Submitted	Complaint Submitted	Complaint Submitted	Complaint Submitted	Complaint Submitted	Complaint Submitted	Complaint Submitted	Complaint Submitted	Complaint Submitted	Complaint Submitted	', '', '2024-07-06 09:45:01', 'Complaint Submitted', '', NULL),
(29, 4, 'chennai', 'computer', 'finance', 'Speciality', 'noonn', '12', '2024-07-06 10:19:20', 'Complaint Submitted', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `fullName` varchar(255) default NULL,
  `userEmail` varchar(255) default NULL,
  `password` varchar(255) default NULL,
  `contactNo` bigint(20) default NULL,
  `address` tinytext,
  `department` varchar(255) default NULL,
  `country` varchar(255) default NULL,
  `pincode` int(6) default NULL,
  `userImage` varchar(255) default NULL,
  `regDate` varchar(100) default NULL,
  `updationDate` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `status` int(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `userEmail`, `password`, `contactNo`, `address`, `department`, `country`, `pincode`, `userImage`, `regDate`, `updationDate`, `status`) VALUES
(4, 'jebin', 'jebinp08@gmail.com', '1234', 9894918800, 'trichy', 'computer', 'india', 628001, '', '2024-05-31 12:54:01', '2024-05-31 12:54:01', 1);
