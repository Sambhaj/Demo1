-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2018 at 09:34 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advisor`
--

-- --------------------------------------------------------

--
-- Table structure for table `india`
--

CREATE TABLE `india` (
  `entity` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cnumber` varchar(200) NOT NULL,
  `irnumber` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `person` varchar(200) NOT NULL,
  `gnumber` varchar(200) NOT NULL,
  `pnumber` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `fconfirm` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `india`
--

INSERT INTO `india` (`entity`, `name`, `cnumber`, `irnumber`, `address`, `person`, `gnumber`, `pnumber`, `email`, `password`, `user`, `phone`, `fconfirm`) VALUES
('Company', 'sambhaji', '555555', '55555', 'fgdfgdfg', 'fsdfsdf', '3243434', '34324', 'sdfsdfsd', 'sdfsdf', 'sfsdf', '3423434234', '3423434'),
('Other', 'scasccs', 'asdsad', 'sadsa', 'sadsad', 'asdasd', 'asdsad', 'ssasd', 'saasd', 'asdas', 'sadsad', 'sads', 'sadsd');

-- --------------------------------------------------------

--
-- Table structure for table `world`
--

CREATE TABLE `world` (
  `entity` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `rnumber` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `person` varchar(200) NOT NULL,
  `f_confirm` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `world`
--

INSERT INTO `world` (`entity`, `name`, `address`, `rnumber`, `email`, `password`, `user`, `phone`, `person`, `f_confirm`) VALUES
('Individual', 'sambhai', 'aurabgabad', '334443', 'sambhaji@sednainfosystems.com', '223123', '123213', '1232132', '123232', '1232133');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
