-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2019 at 02:57 PM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sahar20`
--
CREATE DATABASE IF NOT EXISTS `sahar20` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sahar20`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Cust_ID` int(30) NOT NULL AUTO_INCREMENT,
  `F_Name` varchar(20) NOT NULL,
  `L_Name` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(26) NOT NULL,
  `Gendar` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  PRIMARY KEY (`Cust_ID`),
  UNIQUE KEY `ID` (`Cust_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_ID`, `F_Name`, `L_Name`, `Email`, `password`, `Gendar`, `DOB`) VALUES
(1, 'Mozart ', 'Mozart Mirozi', 'symphony.mozart@hotmail.com', 'Mozareu7y', 'Male', '1994-04-25'),
(2, 'Chereny', 'Chereny ', 'chereny.Hun@gmail.com', 'Chertnoidu89743bhfiu', 'Male', '1992-01-15'),
(3, 'Ludwig  Van', ' Beethoven ', ' Van_Beethoven@gmail.com', 'Chegjsdoifyew', 'Male', '1770-03-02'),
(4, 'Shahed ', 'ahmadi', 'shahed.123@hormail.co.uk', 'shahedamdi99999', 'Male', '1991-03-11'),
(5, 'Frederic ', 'Chopin ', 'Chopin.Man_pianist@gmail.com', 'pianist63hdsj8928347Piano', 'Male', '1810-10-20'),
(6, 'Alinematch', 'chareh', 'alinematch@hormail.co.uk', 'Saharnazesh6175', 'Male', '1995-05-12'),
(7, 'Robert ', 'Schumann', 'Schumann_Robert@hotmail.com', 'Hojksdhf994e39', 'Male', '0000-00-00'),
(8, 'Joseph Haydn', 'Haydn', 'Joseph Haydn@hotmail.com', 'Holabb98237', 'Male', '1732-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Email` varchar(40) NOT NULL,
  `password` varchar(49) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `piano_price`
--

CREATE TABLE IF NOT EXISTS `piano_price` (
  `ID_piano` varchar(20) NOT NULL,
  `Price` int(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Barcode_no` int(11) NOT NULL,
  `Cust_ID` int(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Types_of_Pianos` varchar(30) NOT NULL,
  `Styles` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_piano`),
  KEY `ID` (`Cust_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `piano_price`
--

INSERT INTO `piano_price` (`ID_piano`, `Price`, `Name`, `Barcode_no`, `Cust_ID`, `Email`, `Types_of_Pianos`, `Styles`) VALUES
('Casio CdP130', 0, 'Casio', 3, 1, 'isnsideout@hotmail.com', 'Upright Pianos', 'Spinet Pianos. Console Pianos');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `F_Name` varchar(42) NOT NULL,
  `L_Name` varchar(42) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `password` varchar(38) NOT NULL,
  `Gender` varchar(31) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Register Client PLz here ';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `piano_price`
--
ALTER TABLE `piano_price`
  ADD CONSTRAINT `piano_price_ibfk_1` FOREIGN KEY (`Cust_ID`) REFERENCES `customer` (`Cust_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
