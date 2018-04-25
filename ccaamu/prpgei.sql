-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2017 at 03:05 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prpgei`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `form` int(11) DEFAULT NULL,
  `member` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `tel_std` varchar(20) NOT NULL,
  `fax` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `whatsapp_no` varchar(12) NOT NULL,
  `office_address` varchar(200) NOT NULL,
  `otel_std` varchar(20) NOT NULL,
  `ofax` int(20) NOT NULL,
  `oemail` varchar(20) NOT NULL,
  `omobile_no` varchar(12) NOT NULL,
  `dob` date NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `date_anni` date NOT NULL,
  `blood_gr` varchar(10) NOT NULL,
  `education` varchar(100) NOT NULL,
  `enroll_date` varchar(50) NOT NULL,
  `asso_enroll` varchar(50) NOT NULL,
  `pop` varchar(100) NOT NULL,
  `welfare_fund` varchar(50) NOT NULL,
  `org` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
