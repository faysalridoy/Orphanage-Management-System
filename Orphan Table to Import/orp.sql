-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 03:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` varchar(5) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `password`) VALUES
('1', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `adopt`
--

CREATE TABLE `adopt` (
  `userid` varchar(100) NOT NULL,
  `orphanid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adopt`
--

INSERT INTO `adopt` (`userid`, `orphanid`) VALUES
('', ''),
('', ''),
('', ''),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donarId` varchar(30) NOT NULL,
  `donarName` varchar(20) NOT NULL,
  `donarAge` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `occupation` varchar(40) NOT NULL,
  `annualIncome` varchar(20) NOT NULL,
  `donateAmount` varchar(40) NOT NULL,
  `contactInfo` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donarId`, `donarName`, `donarAge`, `dob`, `sex`, `occupation`, `annualIncome`, `donateAmount`, `contactInfo`, `address`) VALUES
('2', 'Hazzaz Hossain', '29', '1992-01-21', 'on', 'Business', '10,000-30,000', '5200', '015330228', 'Nikunja-2,Dhaka Bangladesh'),
('3', 'Adiba Hossain', '22', '1998-08-21', 'on', 'Student', 'Less than 10,000', '1500', '01789446541', 'Uttara,Dhaka-1229'),
('4', 'Josna Hossain', '40', '1982-01-27', 'on', 'Housewife', 'More than 60,000', '3000', '01521330998', 'Kha-162,Dhaka-1229'),
('5', 'Nupur', '29', '1988-01-13', 'on', 'Manager', '30,000-60,000', '9000', '01521330664', 'Banani,Dhaka'),
('6', 'Ridoy Ahmed', '25', '1995-05-08', 'on', 'Student', 'Less than 10,000', '300', '01722123456', 'Rampura,Dhaka'),
('7', 'Jerin', '28', '1992-12-28', 'on', 'Housewife', 'Less than 10,000', '400', '01654248970', 'Azimpur,Road no:03,Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `orphan`
--

CREATE TABLE `orphan` (
  `orphanid` varchar(100) NOT NULL,
  `orphanname` varchar(30) NOT NULL,
  `orphanAge` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `doj` date NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orphan`
--

INSERT INTO `orphan` (`orphanid`, `orphanname`, `orphanAge`, `dob`, `sex`, `doj`, `contact`, `address`) VALUES
('2', 'Taposhi Rahman', '3', '2019-01-27', 'female', '2021-04-25', '01756894472', 'Kha-164,Road no:02,R'),
('3', 'Karim Kapoor', '6', '2017-01-01', 'male', '2021-04-25', '01987456128', 'Kha-1465,Chadpur'),
('4', 'Maliha', '4', '2018-01-01', 'female', '2021-05-19', '01859594478', 'London road,Rajshahi'),
('6', 'Warsi', '3', '2013-01-27', 'male', '2021-05-28', '0198745621', 'Kasim,12,Gopalgonj'),
('7', 'Raju', '1', '2021-05-02', 'male', '2021-05-27', '01987456125', 'Dhaka,Bangladesh'),
('5', 'Mina Akhter', '3', '2019-05-28', 'female', '2021-05-27', '01956894478', 'Rajshahi,Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `email`, `password`) VALUES
('1', 'adiba21hossain@gmail.com', '123'),
('2', '21adibahossain@gmail.com', 'adiba'),
('adiba', '2017-2-60-109@std.ewubd.edu', 'adiba'),
('5', '5@gmail.com', '543'),
('Adiba Hossain', 'adibahossain@gmail.com', 'adiba'),
('Adiba', 'adiba21hossain@gmail.com', 'adiba123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
