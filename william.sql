-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2018 at 05:00 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `osms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(128) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `adminthumbnails` varchar(300) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`, `adminthumbnails`) VALUES
(1, 'James', 'Muriira', 'admin', 'admin', 'uploads/admin.jpg'),
(2, 'admin', 'admin', 'master', '1234', 'images/NO-IMAGE-AVAILABLE.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE IF NOT EXISTS `apply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first` text NOT NULL,
  `last` text NOT NULL,
  `U_Name` varchar(200) NOT NULL,
  `P_Word` varchar(200) NOT NULL,
  `gender` text NOT NULL,
  `Age` int(50) NOT NULL,
  `Telephone` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Address` int(12) NOT NULL,
  `Town` varchar(100) DEFAULT NULL,
  `subcounty` text NOT NULL,
  `Ward` text NOT NULL,
  `Village` text NOT NULL,
  `S_Name` text NOT NULL,
  `Arrears` int(10) DEFAULT NULL,
  `School` text NOT NULL,
  `Photograph` varchar(500) DEFAULT NULL,
  `settled` int(11) NOT NULL,
  `file` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `first`, `last`, `U_Name`, `P_Word`, `gender`, `Age`, `Telephone`, `email`, `Address`, `Town`, `subcounty`, `Ward`, `Village`, `S_Name`, `Arrears`, `School`, `Photograph`, `settled`, `file`) VALUES
(3, 'Kithinji', 'Godfrey', 'king', '1212', 'Male', 2000, 3442323, 'godkith19@gmail.com', 0, 'hth', 'IGEMBE SOUTH', 'MAUA', 'tht', 'terhte', 23000, 'County', 'DSC09646.JPG', 23000, '17-30Romero.pdf'),
(4, 'SAMWEL', 'OGETO', '118', '118', '', 0, 0, '', 0, NULL, '', '', '', '', NULL, '', NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE IF NOT EXISTS `donate` (
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Email_ID` varchar(30) NOT NULL,
  `Phone_number` int(15) NOT NULL,
  `Amount` int(10) NOT NULL,
  `student_Fname` varchar(200) DEFAULT NULL,
  `student_Lname` varchar(200) DEFAULT NULL,
  `school` varchar(200) DEFAULT NULL,
  `level` varchar(200) DEFAULT NULL,
  `bank` varchar(35) NOT NULL,
  `code` varchar(35) NOT NULL,
  PRIMARY KEY (`Email_ID`,`Phone_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`First_Name`, `Last_Name`, `Email_ID`, `Phone_number`, `Amount`, `student_Fname`, `student_Lname`, `school`, `level`, `bank`, `code`) VALUES
('ABEL', 'ONDIEKI', 'abeli@yahoo.com', 709234543, 23120, 'RACHAEL', 'KANANA', 'KAAGA GIRLS', 'EXTRA COUNTY', 'KENYA COMMERCIAL BANK', 'YUYKGMG234'),
('ANTONY', 'KIRIMI', 'anto@yahoo.com', 723767443, 20000, 'JAMES', 'MURIIRA', 'MWITERIS MIXED', 'DISTRICT', 'NATIONAL BANK OF KENYA', '45657456'),
('DENI', 'KIRIMI', 'denni@gmail.com', 7894755, 15000, 'JEREMIAH ', 'KIBUI', 'MIATHENE BOYS', 'DISTRICT', 'NATIONAL BANK OF KENYA', '906764'),
('DENNIS ', 'KIRIMI', 'denno@gmail.com', 711444555, 90000, 'DOROTHY', 'MWENDWA', 'KAAGA GIRLS', 'EXTRA COUNTY', 'NATIONAL BANK OF KENYA', '34576'),
('KEN', 'nn', 'hhjj@yagg', 45326373, 32000, 'ALEX', 'MUTWIRI', 'KUNENE', 'EXTRA COUNTY', 'NATIONAL BANK OF KENYA', '234567'),
('JAMES', 'MURIIRA', 'james.muriira@yahoo.com', 72354555, 25000, 'GODFREY', 'KITHINJI', 'KAAGA', 'NATIONAL', 'NATIONAL BANK OF KENYA', '3454464'),
('JOHN', 'MUNENE', 'jjohn@yahoo.com', 712757578, 40000, 'DOROTHY', 'MWENDWA', 'KAAGA GIRLS', 'NATIONAL', 'NATIONAL BANK OF KENYA', '2445473'),
('KEN', 'MWITHALIE', 'kenmwi@yahoo.com', 72846464, 32000, 'ALEX', 'MUTWIRI', 'KUNENE', 'DISTRICT', 'KENYA COMMERCIAL BANK', '46737575'),
('KEN', 'JUMA', 'kken@yahoo', 723785656, 20000, 'JAMES', 'MURIIRA', 'MWITERIA MIXED', 'DISTRICT', 'KENYA COMMERCIAL BANK', '56866454'),
('KEN', 'JUMA', 'kkeyn@yahoo', 723785656, 20000, 'JAMES', 'MURIIRA', 'MWITERIA MIXED', 'DISTRICT', 'KENYA COMMERCIAL BANK', '56866454'),
('KEN', 'JUMA', 'kkkeyn@yahoo', 723785656, 20000, 'JAMES', 'MURIIRA', 'MWITERIA MIXED', 'DISTRICT', 'KENYA COMMERCIAL BANK', '56866454'),
('MIRIAM', 'MUTWIRI', 'mirrie@gmail.com', 7845672, 29000, 'KAREN', 'KINYA', 'ST. MARYS IGOJI', 'NATIONAL', 'NATIONAL BANK OF KENYA', '6543');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `donor_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `Applicant_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `mpesa` varchar(255) DEFAULT NULL,
  `amount` bigint(30) DEFAULT NULL,
  PRIMARY KEY (`donor_id`),
  UNIQUE KEY `mpesa` (`mpesa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `fname`, `email`, `id_no`, `phone`, `location`, `gender`, `Applicant_id`, `status`, `mpesa`, `amount`) VALUES
(1, 'kithinji Godfrey', 'godkith19@gmail.com', 12345, 2323, 'kiana', 'Male', 38, 'Confirmed', 'bgdffd', 23000),
(2, 'kithinji Godfrey', 'gn0nn@ymail.com', 11111, 3212, 'fret', 'Male', 1, 'Confirmed', 'rgrg', 23000),
(3, 'justin Muriungi', 'godkith@gmail.com', 1111, 9999999, 'malawi', 'Male', 3, 'Confirmed', 'adaaa', 23000),
(4, 'rty', 'bvcgfz@gmail.com', 0, 0, 'sdfgh', 'Female', 0, 'Confirmed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) NOT NULL,
  `STATUS` varchar(10) NOT NULL,
  `DEADLINE` date NOT NULL,
  PRIMARY KEY (`notification_id`),
  UNIQUE KEY `NAME` (`NAME`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `NAME`, `STATUS`, `DEADLINE`) VALUES
(2, 'Regular', 'Open', '2018-08-02'),
(3, '2018 CDF', 'Open', '2018-07-30'),
(4, '2018 County', 'Open', '2018-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(128) NOT NULL AUTO_INCREMENT,
  `username` varchar(300) NOT NULL,
  `Name` varchar(300) DEFAULT NULL,
  `Form` varchar(128) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contacts` varchar(200) DEFAULT NULL,
  `post_address` varchar(200) DEFAULT NULL,
  `Postal_code` varchar(200) DEFAULT NULL,
  `Date_of_Birth` int(11) DEFAULT NULL,
  `Place_of_Birth` varchar(200) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `contact_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
