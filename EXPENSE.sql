-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2022 at 03:23 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `EXPENSE`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Empid` varchar(100) NOT NULL,
  `Empname` varchar(100) NOT NULL,
  `Dept` varchar(100) NOT NULL,
  `Quali` varchar(100) NOT NULL,
  `Design` varchar(100) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Empid`, `Empname`, `Dept`, `Quali`, `Design`, `Mobile`, `Email`) VALUES
('nanda', 'nanda', 'Development', 'cse', 'manager', '9629595205', 'nandapoy@gmail.com'),
('ravi', 'ravi', 'Accounts', 'mca', 'ass managet', '9003502338', 'ravi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE IF NOT EXISTS `expense` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Dt` varchar(100) NOT NULL,
  `Expense` varchar(100) NOT NULL,
  `Descr` varchar(100) NOT NULL,
  `Amt` varchar(100) NOT NULL,
  `Modeofpay` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `Dt`, `Expense`, `Descr`, `Amt`, `Modeofpay`) VALUES
(2, '02/04/2022', 'Salary', 'Salary for all employee', '50000', 'Cash'),
(3, '02/10/2022', 'Rent', 'Rent office', '20000', 'Check');

-- --------------------------------------------------------

--
-- Table structure for table `expensemas`
--

CREATE TABLE IF NOT EXISTS `expensemas` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Expens` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `expensemas`
--

INSERT INTO `expensemas` (`id`, `Expens`) VALUES
(2, 'Salary'),
(3, 'Rent'),
(4, 'Phone Bill');
