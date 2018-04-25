-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2017 at 09:13 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbn`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadministrator`
--

CREATE TABLE `tbadministrator` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbadministrator`
--

INSERT INTO `tbadministrator` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbmember_registration`
--

CREATE TABLE `tbmember_registration` (
  `serial_no` int(10) NOT NULL,
  `registration` varchar(50) NOT NULL,
  `reg_date` date NOT NULL,
  `name` varchar(200) NOT NULL,
  `country` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `landline_no` varchar(20) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `birth_date` date NOT NULL,
  `ekda` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `trade_type` varchar(50) NOT NULL,
  `trade_name` varchar(200) NOT NULL,
  `nature_of_business` varchar(500) NOT NULL,
  `specific_details` varchar(1000) NOT NULL,
  `trade_address` varchar(500) NOT NULL,
  `trade_location` varchar(150) NOT NULL,
  `trade_pincode` varchar(10) NOT NULL,
  `trade_designation` varchar(20) NOT NULL,
  `trade_mobile_1` varchar(12) NOT NULL,
  `trade_mobile_2` varchar(12) NOT NULL,
  `trade_email` varchar(100) NOT NULL,
  `trade_website` varchar(100) NOT NULL,
  `trade_description` varchar(1000) NOT NULL,
  `ref_name_1` varchar(100) NOT NULL,
  `ref_mob_1` varchar(12) NOT NULL,
  `ref_name_2` varchar(100) NOT NULL,
  `area_admin` varchar(70) NOT NULL,
  `fill_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbself_invitee`
--

CREATE TABLE `tbself_invitee` (
  `reg_date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_no` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbself_invitee`
--

INSERT INTO `tbself_invitee` (`reg_date`, `name`, `mobile_no`) VALUES
('2017-02-02', 'ed', '1234567890'),
('2017-02-02', 'ed', '1234567890'),
('2017-02-02', 'ed', '1234567890'),
('2017-02-02', 'd', '1234567890'),
('2017-02-02', 'd', '1234567890'),
('2017-02-02', 'g', '1234567890'),
('2017-02-02', 'g', '1234567890'),
('2017-02-02', '', ''),
('2017-02-02', '', ''),
('2017-02-02', '', ''),
('2017-02-02', '', ''),
('2017-02-02', '', ''),
('2017-02-02', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ekda`
--

CREATE TABLE `tb_ekda` (
  `ekda` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ekda`
--

INSERT INTO `tb_ekda` (`ekda`) VALUES
('Modasa'),
('Nadiad'),
('Umreth'),
('Ekvish Gaam'),
('Ter Gaam'),
('Rajpipla'),
('Saurashtra'),
('Atasan'),
('Nandarbar'),
('Janod'),
('Vejalpur'),
('Haldervas'),
('Mandi Revar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
