-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2010 at 01:55 AM
-- Server version: 5.1.32
-- PHP Version: 5.2.9-1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stp_online_libray_db`
--
CREATE DATABASE `stp_online_libray_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `stp_online_libray_db`;

-- --------------------------------------------------------

--
-- Table structure for table `book_order_request`
--

CREATE TABLE IF NOT EXISTS `book_order_request` (
  `Order_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Book_item_code` double DEFAULT NULL,
  `Member_ID` varchar(15) DEFAULT NULL,
  `Order_date` date DEFAULT NULL,
  `Confirmation_date` date DEFAULT NULL,
  `Status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Order_ID`),
  KEY `Book_item_code` (`Book_item_code`),
  KEY `Member_ID` (`Member_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `book_order_request`
--

INSERT INTO `book_order_request` (`Order_ID`, `Book_item_code`, `Member_ID`, `Order_date`, `Confirmation_date`, `Status`) VALUES
(2, 2, 'santos', '2009-12-30', '2009-12-30', 'pending'),
(3, 10, 'santos', '2009-12-30', '2009-12-30', 'pending'),
(4, 10, 'santos', '2009-12-30', '2009-12-30', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `contactusinfo`
--

CREATE TABLE IF NOT EXISTS `contactusinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(25) NOT NULL,
  `Lastname` varchar(25) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `Message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contactusinfo`
--

INSERT INTO `contactusinfo` (`id`, `Firstname`, `Lastname`, `Email`, `Address`, `Message`) VALUES
(1, 'Gautam', 'shrestha', 'gautam@something.com', '12 shelve street', 'hi, i want to return my books after two days.\r\nplease do consider.\r\nregards\r\ngautam'),
(2, 'Gautam', 'shrestha', 'gautam@something.com', '12 shelve street', 'hi, i want to return my books after two days.\r\nplease do consider.\r\nregards\r\ngautam'),
(3, 'Gautam', 'shrestha', 'gautam@something.com', '12 shelve street', 'hi, i want to return my books after two days.\r\nplease do consider.\r\nregards\r\ngautam'),
(4, 'Gautam', 'shrestha', 'gautam@something.com', '12 shelve street', 'hi, i want to return my books after two days.\r\nplease do consider.\r\nregards\r\ngautam'),
(5, 'Gautam', 'shrestha', 'gautam@something.com', '12 shelve street', 'hi, i want to return my books after two days.\r\nplease do consider.\r\nregards\r\ngautam'),
(6, 'Gautam', 'shrestha', 'gautam@something.com', '12 shelve street', 'hi, i want to return my books after two days.\r\nplease do consider.\r\nregards\r\ngautam'),
(7, 'Mr.Santos', 'Gurung', 'santos_grg@hotmail.com', 'london', 'I need to book.');

-- --------------------------------------------------------

--
-- Table structure for table `lib_book`
--

CREATE TABLE IF NOT EXISTS `lib_book` (
  `Book_ID` int(11) NOT NULL,
  `Book_item_code` double NOT NULL,
  `Allow_status` varchar(10) DEFAULT NULL,
  `Additional_info` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Book_ID`),
  KEY `Book_item_code` (`Book_item_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib_book`
--

INSERT INTO `lib_book` (`Book_ID`, `Book_item_code`, `Allow_status`, `Additional_info`) VALUES
(1, 10, 'Available', NULL),
(2, 6, 'Available', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lib_book_categories`
--

CREATE TABLE IF NOT EXISTS `lib_book_categories` (
  `Category_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Category_name` varchar(50) DEFAULT NULL,
  `Category_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Category_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lib_book_categories`
--

INSERT INTO `lib_book_categories` (`Category_ID`, `Category_name`, `Category_description`) VALUES
(1, 'Science & Technology', 'Related to science and technology'),
(2, 'Physology', 'Its related to brain and understanding it.'),
(3, 'History', 'Related to history.');

-- --------------------------------------------------------

--
-- Table structure for table `lib_book_details`
--

CREATE TABLE IF NOT EXISTS `lib_book_details` (
  `Book_item_code` double NOT NULL,
  `Title` varchar(150) DEFAULT NULL,
  `Authors` varchar(300) DEFAULT NULL,
  `Publisher` varchar(150) DEFAULT NULL,
  `Published_year` int(11) DEFAULT NULL,
  `Edition` varchar(20) DEFAULT NULL,
  `ISBN` varchar(20) DEFAULT NULL,
  `ISSN` varchar(20) DEFAULT NULL,
  `Category_ID` int(11) NOT NULL,
  `Price` double DEFAULT NULL,
  `ContainsCD` varchar(5) DEFAULT NULL,
  `Additional_info` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`Book_item_code`,`Category_ID`),
  KEY `Category_ID` (`Category_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib_book_details`
--

INSERT INTO `lib_book_details` (`Book_item_code`, `Title`, `Authors`, `Publisher`, `Published_year`, `Edition`, `ISBN`, `ISSN`, `Category_ID`, `Price`, `ContainsCD`, `Additional_info`) VALUES
(1, 'Java Programming', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(2, 'Basic Java concept', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(3, 'Visual Basic', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(4, 'Beginners To Java', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL),
(5, 'Programmers Guide to Java', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL),
(6, 'Beginners to Visual Basic', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL),
(7, 'The Web Design cookbook', 'William Horton , Lee Taylor , Arthur Ignacio, Nancy L.Hoft', 'John Wiley & sons, Inc', 1996, NULL, '0-471-13039-7', NULL, 1, 22, 'yes', 'All the ingredients you need to create 5star  website.'),
(8, 'The Good website guide 2007', 'Graham Edmonds', 'HarpercollinsPublishers', 2007, NULL, '0-00-722515-6', NULL, 1, 6.99, 'no', 'The completely revised, Best-Selling guide to over 5000 sites'),
(9, 'Website Engineering- Beyond web page design', 'Thomas A.Powell et al.', 'Prentice Hall PTR', 1998, NULL, '013650920-7', NULL, 1, 20, 'No', NULL),
(10, 'Rapid Development- Taming Wild Software Schedules', 'Steve McConnell', 'Microsoft Press', 1996, NULL, '1-55615-900-5', NULL, 1, 32.49, 'No', 'Computer Software development');

-- --------------------------------------------------------

--
-- Table structure for table `lib_issue`
--

CREATE TABLE IF NOT EXISTS `lib_issue` (
  `Issue_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Book_ID` int(11) NOT NULL,
  `Issued_date` date DEFAULT NULL,
  `Issued_by` varchar(15) DEFAULT NULL,
  `issued_for` varchar(15) DEFAULT NULL,
  `Expiry_date` date DEFAULT NULL,
  PRIMARY KEY (`Issue_ID`),
  KEY `Book_ID` (`Book_ID`),
  KEY `Issued_by` (`Issued_by`),
  KEY `issued_for` (`issued_for`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lib_issue`
--

INSERT INTO `lib_issue` (`Issue_ID`, `Book_ID`, `Issued_date`, `Issued_by`, `issued_for`, `Expiry_date`) VALUES
(1, 1, '2009-12-30', 'santos', '7', '2010-02-14'),
(2, 2, '2009-12-30', 'santos', '8', '2010-02-18'),
(3, 1, '2009-12-31', 'santos', '4', '2010-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `lib_reservation`
--

CREATE TABLE IF NOT EXISTS `lib_reservation` (
  `Reservatiion_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Member_ID` varchar(15) DEFAULT NULL,
  `Book_item_code` double DEFAULT NULL,
  `Reservation_date` date DEFAULT NULL,
  `Expected_date` date DEFAULT NULL,
  PRIMARY KEY (`Reservatiion_ID`),
  KEY `Member_ID` (`Member_ID`),
  KEY `Book_item_code` (`Book_item_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lib_reservation`
--

INSERT INTO `lib_reservation` (`Reservatiion_ID`, `Member_ID`, `Book_item_code`, `Reservation_date`, `Expected_date`) VALUES
(1, 'santos', 10, '2009-12-30', '2010-12-30'),
(2, 'santos', 10, '2009-12-30', '2009-12-30'),
(3, 'santos', 5, '2009-12-30', '2009-12-30'),
(4, '', 2, '2009-12-30', '2009-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `member_details`
--

CREATE TABLE IF NOT EXISTS `member_details` (
  `id` double NOT NULL AUTO_INCREMENT,
  `title` varchar(4) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `familyname` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `houseno` int(3) DEFAULT NULL,
  `streetname` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `mobileno` int(11) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_joined` date NOT NULL,
  `user_level_code` varchar(15) NOT NULL,
  PRIMARY KEY (`id`,`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `member_details`
-- Disclaimer: This details are not real details. It doesnt belong to real people.

INSERT INTO `member_details` (`id`, `title`, `firstname`, `familyname`, `dob`, `gender`, `houseno`, `streetname`, `country`, `postcode`, `mobileno`, `telephone`, `email`, `username`, `password`, `date_joined`, `user_level_code`) VALUES
(1, 'Mr.', 'Santos', 'Gurung', '1986-12-13', 'Male', 2, 'one way', 'Surrey', 'Se25 4JL', 7000000, 203211000, 'santos_grg@hotmail.com', 'admin', '6fd742a61bd034804c00c49b18045020', '2009-10-19', 'superadmin'),
(2, 'Mr.', 'Simon', 'Gurung', '2008-01-01', 'Male', 1, 'Oxford street', 'Surrey', 'se23 9lk', 70000000, 20000000, 'simon@hotmail.com', 'simon', '87d9bb400c0634691f0e3baaf1e2fd0d', '2009-11-25', 'Member'),
(3, 'Miss', 'Sophiya', 'Gurung', '1992-02-14', 'Female', 12, 'Green Street', 'Essex', 'ne25 u87', 70000000, 20000000, 'sophiya@something.com', 'sophie', '5d283bcf11ecf2b6a2a94ca59ed6d354', '2009-11-25', 'Member'),
(4, 'Miss', 'Cindy', 'Gurung', '1990-07-01', 'Female', 12, 'Daron Street', 'Surrey', 'Se21 Mn', 7000000, 2000000, 'cindy@something.com', 'cindy', '6fd742a61bd034804c00c49b18045020', '2009-11-25', 'Member'),
(5, 'Mr.', 'Sujan', 'Chettri', '1986-01-01', 'Male', 21, 'Wadden Street', 'Croydon', 'se23 9lk', 70000000, 20000000, 'sujan@something.com', 'sujan', '6fd742a61bd034804c00c49b18045020', '2009-11-25', 'Member'),
(6, 'Miss', 'Shradha', 'Gurung', '1994-01-01', 'Female', 21, 'Oxford street', 'Croydon', 'se23 ji', 7000000, 2000000, 'shradha@something.com', 'shradha', '6fd742a61bd034804c00c49b18045020', '2009-11-25', 'Member'),
(7, 'Mrs.', 'Sophie', 'Gurung', '1985-12-20', 'Female', 87, 'woodend', 'middlesex', 'rr55ff', 2147483647, 34847098, 'sophie@something.com', 'Sophie', '87d9bb400c0634691f0e3baaf1e2fd0d', '2009-11-25', 'Member'),
(8, 'Miss', 'Shubu', 'Gurung', '1984-02-01', 'Female', 12, 'Oxford Street', 'United Kingdom', 'NE24 U78', 7000000, 2000000, 'shubu@something.com', 'shubu', '6fd742a61bd034804c00c49b18045020', '2009-12-16', 'Member'),
(9, 'Mr.', 'Santos', 'Gurung', '2008-01-01', 'male', 1, 'Oxford Street', 'United Kingdom', 'NE24 U78', 7000000, 2000000, 'santohs_grg@hotmail.com', 'santoshgurung', '6fd742a61bd034804c00c49b18045020', '2010-01-02', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `Log_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Member_ID` double NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `IP_address` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Log_ID`),
  KEY `Member_ID` (`Member_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`Log_ID`, `Member_ID`, `Date`, `Time`, `IP_address`) VALUES
(1, 0, NULL, NULL, NULL);
