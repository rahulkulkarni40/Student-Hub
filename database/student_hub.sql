-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 03:38 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Id` varchar(15) NOT NULL,
  `Fullname` text NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(24) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Fullname`, `Address`, `Contact`, `Email`, `Username`, `Password`) VALUES
('102', 'abhi', 'abcd', '123', '123@g.com', 'xyz', '123'),
('104', 'Rahul', 'Tilakwadi\r\n104', '09036869578', 'rahul.kulkarni1994@gmail.com', 'rahul', 'rahul040'),
('admin02', 'admin', 'jkhhuh', '1234567890', 'admin@admin.com', '123', 'admin02'),
('admin10', 'rahul', 'bangalore', '1234567890', 'rahul.kulkarni1994@gmail.com', '123', 'admin10'),
('xyzz', 'aaaa', 'sgfiusgiufugisg', '1234567890', 'a@a.c', '123', 'admin03');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `Faculty_Id` varchar(15) NOT NULL,
  `Faculty_Name` varchar(50) NOT NULL,
  `Lastname` varchar(15) NOT NULL,
  `Password` varchar(24) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`Faculty_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Faculty_Id`, `Faculty_Name`, `Lastname`, `Password`, `Department`, `Contact`, `Email`) VALUES
('007', 'Shreyas', '', '', 'MUFC', '8197154816', 'shreyastatachar@gmail.com'),
('011', 'Rahul', '', 'rahul', 'mca', '9036869578', 'rahul.kulkarni1994@gmail.com'),
('dsatm01', 'rahul', '', '123', 'mca', '7894561230', 'rahul.kulkarni1994@gmail.com'),
('dsatm02', 'Sateesh', '', 'sateesh', 'mca', '1234567890', 'sateesh@dsatm.co.in');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Student_Id` varchar(15) NOT NULL,
  `Faculty_Name` varchar(25) NOT NULL,
  `Feedback` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Student_Id`, `Faculty_Name`, `Feedback`) VALUES
(2, '1dt14mca27', 'Rahul', 'xyzzz'),
(3, '1dt14mca27', 'Rahul', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `questioning`
--

CREATE TABLE IF NOT EXISTS `questioning` (
  `Q_id` int(11) NOT NULL AUTO_INCREMENT,
  `Question` mediumtext NOT NULL,
  `Student_Id` varchar(15) NOT NULL,
  `Faculty_id` varchar(15) NOT NULL,
  `Date` datetime NOT NULL,
  `Answer` mediumtext NOT NULL,
  PRIMARY KEY (`Q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `questioning`
--

INSERT INTO `questioning` (`Q_id`, `Question`, `Student_Id`, `Faculty_id`, `Date`, `Answer`) VALUES
(2, 'hello??', '1dt14mca27', 'dsatm01', '2016-05-15 12:59:31', 'ygiuxgcvshdosih'),
(4, 'ada impo ???', '1dt14mca27', 'dsatm01', '2016-05-27 19:56:29', '3 times'),
(5, 'when is project exam??', '1dt14mca27', 'dsatm01', '2016-05-28 15:50:15', '28 may');

-- --------------------------------------------------------

--
-- Table structure for table `question_papers`
--

CREATE TABLE IF NOT EXISTS `question_papers` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `sem` int(11) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Year` int(11) NOT NULL,
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `question_papers`
--

INSERT INTO `question_papers` (`pid`, `sem`, `Subject`, `Year`, `id`, `name`) VALUES
(1, 1, 'c programming', 2011, 'dsatm01', '‘C’  Programming Lan'),
(2, 4, 'java', 2016, 'dsatm01', 'd.php');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `Regno` varchar(15) NOT NULL,
  `Fullname` varchar(25) NOT NULL,
  `Fathers_Name` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(24) NOT NULL,
  PRIMARY KEY (`Regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Regno`, `Fullname`, `Fathers_Name`, `Lastname`, `Branch`, `Semester`, `Address`, `Contact`, `Email`, `Password`) VALUES
('001', 'Shreyas', 'B', 'S', 'cs', 8, '44', '9845021477', 'shr@gmail.com', '123456'),
('010', 'Wayne', 'Mark', 'Rooney', 'MUFC', 0, 'shreyas', '9845021477', 'waynerooney@gmail.com', 'mufc'),
('1001', 'anthony', 'mark', 'martial', 'mca', 6, 'manchestr', '1234567890', 'shr@gmail.com', 'shreyas'),
('1dt14mca27', 'rahul', 'r', 'kulkarni', 'mca', 3, 'bangalore', '7894561230', 'rahul.kulkarni1994@gmail.com', 'rahul'),
('1dt14mca35', 'Shreyas', 'B', 'S', 'mca', 4, 'Bangalore', '1234567890', 'shreyastatachar@gmail.com', 'mufc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
