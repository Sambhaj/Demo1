-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 04, 2014 at 05:40 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbdescription`
--

-- --------------------------------------------------------

--
-- Table structure for table `suvichar`
--

CREATE TABLE IF NOT EXISTS `suvichar` (
  `suvichar` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suvichar`
--

INSERT INTO `suvichar` (`suvichar`) VALUES
('ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन..');

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE IF NOT EXISTS `tbadmin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tbbirth_death`
--

CREATE TABLE IF NOT EXISTS `tbbirth_death` (
  `news_id` int(5) NOT NULL,
  `headline` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_date` varchar(20) NOT NULL,
  `submitted_by` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `birth_death` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbbirth_death`
--

INSERT INTO `tbbirth_death` (`news_id`, `headline`, `news`, `image`, `create_date`, `submitted_by`, `birth_death`) VALUES
(1, 'ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन..', 'ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन..ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन..ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन..ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन..ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन..ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन..', '', '02/18/2014', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbgotra`
--

CREATE TABLE IF NOT EXISTS `tbgotra` (
  `MAIN KUL` varchar(30) NOT NULL,
  `SUB-KUL OR SURNAME` varchar(40) NOT NULL,
  `VANSH` varchar(30) NOT NULL,
  `GOTRA` varchar(30) NOT NULL,
  `KULDAIVAT` varchar(30) NOT NULL,
  `KULDAIVATA` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbgotra`
--

INSERT INTO `tbgotra` (`MAIN KUL`, `SUB-KUL OR SURNAME`, `VANSH`, `GOTRA`, `KULDAIVAT`, `KULDAIVATA`) VALUES
('AHIRRAO', 'CHARPE', 'SURYA', 'BHARDAUJ', 'UMA-MAHESHWAR', 'TULJA-BHAVANI'),
('INGALE', 'CHIMOTE', 'CHANDRA', 'BHARDAUJ', 'BHRAMA-MAYA', 'LAXMI-KOLHAPUR'),
('KOKATE', 'DHOLE', 'SURYA', 'KASHAYAP', 'JWALAMUKHI', 'TULJA-BHAVANI\r\n'),
('JAGTAP', 'KORDE', 'CHANDRA', 'MANDAVYA', 'CHMUNDESHWARI', 'TULJA-BHAVANI'),
('DHAWALE', 'BURANGE', 'CHANDRA', 'BHARDAUJ', 'UMA-MAHESHWAR', 'TULJA-BHAVANI'),
('GAIKWAD\r\n', 'SATANGE\r\n', 'CHANDRA\r\n', 'GOUTAM\r\n', 'CHMUNDESHWARI\r\n', 'TULJA-BHAVANI\r\n'),
('DHEKALE', 'TATTE', 'CHANDRA', 'VASTSA', 'UMA-MAHESHWAR', 'TULJA-BHAVANI'),
('NIKAM', 'SABLE', 'SURYA', 'PARASHAR', 'UMA-MAHESHWAR', 'TULJA-BHAVANI'),
('VICHARE', 'DOD', 'SURYA', 'SHAUNAK', 'MAHADEO', 'TULJA-BHAVANI'),
('PANSARE', 'DAPURKAR', 'CHANDRA', 'KASHAYAP', 'KATUAYANI', 'TULJA-BHAVANI'),
('PANDHARE', 'GHATE', 'CHANDRA', 'LOMASHA', 'UMA-MAHESHWAR', 'TULJA-BHAVANI'),
('VICHARE', 'BHUSKATE', 'SURYA', 'SHAUNAK', 'MAHADEO', 'TULJA-BHAVANI'),
('PALWAY', 'GHULAXE ', 'SURYA', 'BHARDAUJ', 'UMA-MAHESHWAR', 'TULJA-BHAVANI'),
('PINGALE', 'KHAPRE', 'CHANDRA', 'BHARDAUJ', 'UMA-MAHESHWAR', 'TULJA-BHAVANI'),
('PISAL', 'BHURKANDE', 'SURYA', 'KAUSHIK', 'SURYA', 'JAGADAMBA-DEVI'),
('FAKADE', 'SHETE', 'SURYA', 'VISHWAMITRA', 'SURYA', 'JAGADAMBA-DEVI'),
('BHOGALE', 'BOHURUPI', 'SURYA', 'KAUSHIK', 'MAHADEO', 'TULJA-BHAVANI'),
('MADHURE', 'MATE', 'SURYA', 'VISHNU', 'MAHADEO', 'MAHALAXMI'),
('MALUSARE', 'ZUDPE', 'SURYA', 'KASHAYAP', 'KATUAYANI', 'TULJA-BHAVANI'),
('MOHETE', 'BHORE', 'CHANDRA', 'GARGHAU', 'UMA-MAHESHWAR', 'TULJA-BHAVANI'),
('HANDE', 'SHAHANE', 'SURYA', 'VISHNU', 'MAHADEO', 'MAHALAXMI'),
('HARFALE', 'DUGANE', 'CHANDRA', 'KAUSHIK', 'UMA-MAHESHWAR', 'TULJA-BHAVANI'),
('PALADH', 'UMBERKAR', 'SURYA', 'SHUNALYA', 'MAHAKALESHWAR', 'MAHUR-RENUKA'),
('PALADH', 'KHUJE', 'SURYA', 'SHUNALYA', 'MAHAKALESHWAR', 'MAHUR-RENUKA'),
('PALADH', 'KHORGADE', 'SURYA', 'SHUNALYA', 'MAHAKALESHWAR', 'MAHUR-RENUKA'),
('PALADH', 'SHEKAPURE', 'SURYA', 'SHUNALYA', 'MAHAKALESHWAR', 'MAHUR-RENUKA'),
('PAWAR', 'KALASKAR', 'SURYA', 'VASISETHA', 'MAHADEO', 'TULJA-BHAVANI'),
('PAWAR', 'NALKANDE', 'SURYA', 'VASISETHA', 'MAHADEO', 'TULJA-BHAVANI'),
('PAWAR', 'LANDGE', 'SURYA', 'VASISETHA', 'MAHADEO', 'TULJA-BHAVANI'),
('BHGWAT', 'DHULDHAR', 'SURYA', 'KASHAYAP', 'KATUAYANI', 'TULJA-BHAVANI'),
('BHGWAT', 'HOOD', 'SURYA', 'KASHAYAP', 'KATUAYANI', 'TULJA-BHAVANI'),
('SHIRSAGAR', 'KAKADE', 'SURYA', 'VASISETHA', 'MAHADEO', 'TULJA-BHAVANI'),
('SHIRSAGAR', 'GADGE', 'SURYA', 'VASISETHA', 'MAHADEO', 'TULJA-BHAVANI'),
('SHIRSAGAR', 'WANKHADE', 'SURYA', 'VASISETHA', 'MAHADEO', 'TULJA-BHAVANI'),
('GAWHANE', 'ANDE', 'CHANDRA', 'KAUSHIK', 'UMA-MAHESHWAR', 'TULJA-BHAVANI'),
('GAWHANE', 'TEKODE', 'CHANDRA', 'KAUSHIK', 'UMA-MAHESHWAR', 'TULJA-BHAVANI');

-- --------------------------------------------------------

--
-- Table structure for table `tblatest_news`
--

CREATE TABLE IF NOT EXISTS `tblatest_news` (
  `news_id` int(5) NOT NULL,
  `headline` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `news` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(20) NOT NULL,
  `create_date` varchar(20) NOT NULL,
  `submitted_by` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblatest_news`
--

INSERT INTO `tblatest_news` (`news_id`, `headline`, `news`, `image`, `create_date`, `submitted_by`) VALUES
(1, 'ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन, न्यायशास्त्र, सनातन धर्मग्रथांचा अभ्यास यात त्या', 'ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन, न्यायशास्त्र, सनातन धर्मग्रथांचा अभ्यास यात त्यांचा हातखंडा होता. टिळक मुंबईत ज्या मित्राकडे राहात होते तो वैदकशास्त्र शिकत होता त्याच्या घरी बसून हेही वैदक शास्त्रात घुसले आणि एकदा डिसेक्शनसाठी बैलाचे ह्रदय घेवून आले. त्यांच्या मित्रानाने या घटनेनंतर त्यांना गणितातच व्यासंग करण्याचा प्रेमळ सल्ला दिला. टिळकांनी ग्रीक संस्कृतीचा अभ्यास केला ज्युपीटर देवाच्या स्मरणार्थ भरवले जाणारे ऑलिंपिक खेळ विविध ग्रीक राज्यांना एकत्र आणण्यात यश्स्वी ठरले. याच धर्तीवर त्यांनी प्रस्थापित गणेशोत्सावावे पुनरुज्जीवन केले. हिंदु धर्मातील ऎकोपा वाढीस लागावा म्हणुन गणेशोत्सवाला दहा दिवस चालणाऱ्या सार्वजनिक उत्सवाचे स्वरु', '', '02/10/2014', 'ता त्याशिवाय राजकारण, तत्वज्ञा'),
(2, 'ent persons of the world much closure to each other for their exchange of views for various things. ', 'ent persons of the world much closure to each other for their exchange of views for various things. Whole of the life style, social customs, business relations, education systems are changing in a new way of living. Almost all the persons of the different societies are adopting the new chang', '', '02/03/2014', 'ent persons of the world much '),
(3, 'ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन..', 'ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन..ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन..ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन..ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन..ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन..ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन..', '', '02/17/2014', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbmessage`
--

CREATE TABLE IF NOT EXISTS `tbmessage` (
  `message_id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `message` varchar(150) NOT NULL,
  `message_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmessage`
--

INSERT INTO `tbmessage` (`message_id`, `username`, `message`, `message_date`) VALUES
(1, 'komal', 'change with the change otherwise change will change you', '2014-01-13'),
(2, 'komal', 'sdf', '2014-01-14'),
(3, 'amol', 'sdfdf', '2014-01-22'),
(4, 'mukesh', 'sdf', '2014-01-22'),
(5, 'mukesh', 'sdf', '2014-01-23'),
(6, 'mukesh', 'd', '2014-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbregistration`
--

CREATE TABLE IF NOT EXISTS `tbregistration` (
  `member_id` int(3) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `current_status` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `landline_no` varchar(15) NOT NULL,
  `taluka` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `age` varchar(3) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `height` varchar(17) NOT NULL,
  `birth_date` varchar(15) NOT NULL,
  `native` varchar(20) NOT NULL,
  `complex` varchar(20) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `uncle_name` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `caste` varchar(50) NOT NULL,
  `sub_caste` varchar(50) NOT NULL,
  `gotra` char(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `current_job_profile` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `work_experience` varchar(5) NOT NULL,
  `service_type` varchar(50) NOT NULL,
  `service_location` varchar(50) NOT NULL,
  `annual_income` varchar(10) NOT NULL,
  `other_remark` varchar(10) NOT NULL,
  `expectation` varchar(10) NOT NULL,
  `expection_job` varchar(100) NOT NULL,
  `image_1` varchar(15) NOT NULL,
  `image_2` varchar(15) NOT NULL,
  `image_3` varchar(15) NOT NULL,
  `image_4` varchar(15) NOT NULL,
  `image_5` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `send_sms` tinyint(1) NOT NULL,
  `promotional_offer` tinyint(1) NOT NULL,
  `activate` tinyint(1) NOT NULL,
  `verified` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbregistration`
--

INSERT INTO `tbregistration` (`member_id`, `first_name`, `father_name`, `surname`, `created_by`, `current_status`, `address`, `mobile_no`, `landline_no`, `taluka`, `district`, `country`, `age`, `gender`, `height`, `birth_date`, `native`, `complex`, `mname`, `uncle_name`, `religion`, `caste`, `sub_caste`, `gotra`, `qualification`, `degree`, `current_job_profile`, `company`, `work_experience`, `service_type`, `service_location`, `annual_income`, `other_remark`, `expectation`, `expection_job`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `username`, `password`, `email`, `send_sms`, `promotional_offer`, `activate`, `verified`) VALUES
(1, 'kumar', 'sahebrao', 'shaha', 'Father', 'unmarried', 'Radha nagar, panchvati square, Amravati', '9833444433', '072122345', 'Amravati', 'NA', 'India', '27', 'M', '5.7', '01/30/2014', 'Achalpur', 'NA', 'Mamta khadse', 'Ramesh khadse', 'Hindu', 'Hindu', 'Jadhav', 'NA', 'BE', 'NA', 'Software engineer', 'sedna Infosystems', '7', 'Private', 'Amravati', 'NA', 'NA', 'graduate', 'NA', '', 'NA', 'NA', 'NA', 'NA', 'shaha', '1234', 'am@gmail.com', 0, 1, 0, 0),
(2, 'mukesh', 'kk', 'kumar', 'Admin', 'Divorce', 'Amravti', '345345435', '9898798', 'morshi', 'NA', 'India', '24-', 'M', '5-5', '23-0887', 'Other', 'Wheatish', 'mmma', 'mmm', 'hindu', 'Hindu', 'Jadhav', 'b', 'ME', 'Electronics', 'Trainee', 'sdf', '3', 'Semi-Govt', 'amt', '2-3', 'na', 'more', 'Working', '1.jpg', 'NA', 'NA', 'NA', 'NA', 'mukesh', '1234', 'mn@rediffmail,com', 0, 1, 0, 0),
(10, 'Lankesh', 'Harihar', 'Ramnathe', 'Self', 'Single', 'Shimbhora coloney', '9754654564', '3242324534', 'Morshi', 'Amravati', 'India', '24-', 'M', 'NA', '01/30/2014', 'NA', 'Fair', 'anita', 'kahate', 'hindu', 'Hindu', 'Jadhav', 'b', '12th & Not Pursuing Graduation', 'Agriculture', 'Trainee', 'sedna Infosystems', '3', 'Government', 'Amravati', '2-3', 'NA', 'graduate', 'Working', '', '', '', '', '', 'lankesh1', '1234', 'am@gmail.com', 1, 1, 1, 1),
(9, 'Lankesh', 'Harihar', 'Ramnathe', 'Self', 'Single', 'Shimbhora coloney', '9754654564', '3242324534', 'Morshi', 'Amravati', 'India', '24-', 'M', '4-4', '01/24/2014', 'sdf', 'Fair', 'anita', 'kahate', 'hindu', 'Hindu', 'Jadhav', 'b', '12th & Not Pursuing Graduation', 'Agriculture', 'Trainee', 'sedna Infosystems', '3', 'Government', 'Amravati', '2-3', 'NA', 'graduate', 'Working', '', '', '', '', '', 'lankesh', '1234', 'am@gmail.com', 1, 1, 1, 1),
(8, 'Harish', 'kisho', 'kalmakar', 'Parents', 'Single', 'Shimbhora coloney', '9754654564', '3242324534', 'Morshi', 'Amravati', '', '24-', 'M', '5-5', '12/09/1987', 'ridhapur', 'Wheatish', 'anita', 'kahate', 'hindu', '', '', 'a', 'B.Lib.Sc. (Library Sciences)', '', 'Trainee', 'sedna Infosystems', '3', 'Private', 'Amravati', '1-1.5', 'NA', 'graduate', 'Working', '', 'NA', 'NA', 'NA', 'NA', 'kishordfg', 'dfg', 'kishor@gmail.com', 1, 1, 1, 1),
(7, 'Harish', 'kisho', 'kalmakar', 'Parents', 'Single', 'Shimbhora coloney', '9754654564', '3242324534', 'Morshi', 'Aurangabad', 'India', '27-', 'M', 'NA', '12/09/1987', 'kkk', 'Wheatish', 'anita', 'kahate', 'hindu', 'Hindu', 'Jadhav', 'a', 'NA', 'NA', 'Trainee', 'sedna Infosystems', '3', 'Private', 'Amravati', '1-1.5', 'NA', 'graduate', 'Working', '', 'NA', 'NA', 'NA', 'NA', 'kishor11', '1232132', 'kishor@gmail.com', 1, 1, 1, 1),
(6, 'suhas', 'lokesh', 'johare', 'NA', 'NA', 'Amravati', '8999798798', '98798798798', 'AMravati', '', '', '20-', 'M', '4-4', '01/08/2014', 'NA', 'Fair', '', '', '', '', '', 'NA', 'NA', 'NA', 'NA', '', 'NA', 'NA', '', 'NA', '', '', 'NA', '', 'NA', 'NA', 'NA', 'NA', 'suhas', '1234', 'amoljain108@rediffmail.com', 1, 0, 0, 1),
(11, 'Harish', 'kisho', 'kalmakar', 'Parents', 'Divorce', 'dfg', '8999798798', '123123', 'fg', 'Ahmednagar', 'India', '24-', 'F', '4 feet 1 inches', '12/09/1987', 'sdf', 'Fair', 'anita', 'kahate', 'Hindu', 'Hindu', 'Jadhav', 'KASHAYAP', 'B.Arch. (Architecture)', 'Anthropology', 'Trainee,Class II', 'sedna Infosystems', '3', 'Government', 'amt', '2-3', 'na', '', 'HouseWife', '', '', '', '', '', 'kishor', '1234abcd', 'amoljain108@gmail.com', 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbsansmaran`
--

CREATE TABLE IF NOT EXISTS `tbsansmaran` (
  `smid` int(5) NOT NULL,
  `smtext` text NOT NULL,
  `smimage` varchar(30) NOT NULL,
  `smdate` varchar(30) NOT NULL,
  `submitedby` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsansmaran`
--

INSERT INTO `tbsansmaran` (`smid`, `smtext`, `smimage`, `smdate`, `submitedby`) VALUES
(1, 'aaaaaaaaaaaaaaaaaaaaaa', '', '03/11/2014', 'ad');

-- --------------------------------------------------------

--
-- Table structure for table `tbtoppers`
--

CREATE TABLE IF NOT EXISTS `tbtoppers` (
  `news_id` int(5) NOT NULL,
  `headline` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `create_date` varchar(30) NOT NULL,
  `submitted_by` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbtoppers`
--

INSERT INTO `tbtoppers` (`news_id`, `headline`, `news`, `image`, `create_date`, `submitted_by`) VALUES
(1, 'ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन..', 'ता त्याशिवाय राजकारण, तत्वज्ञान, खगोलशास्त्र, लेखन..', '', '02/05/2014', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbusermessage`
--

CREATE TABLE IF NOT EXISTS `tbusermessage` (
  `message_id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL,
  `message_date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbusermessage`
--

INSERT INTO `tbusermessage` (`message_id`, `username`, `message`, `message_date`) VALUES
(1, 'amol', 'sdfds', '2014/01/22'),
(2, 'amol', 'sdfdsf', '2014/01/22'),
(3, 'amol', 'sdfdsf', '2014/01/22'),
(4, '', 'sdf', '2014/01/23'),
(5, 'amol', 'dfg', '2014/01/23'),
(6, 'amol', 'dfgfdg', '2014/01/23'),
(7, 'amol', 'sdf', '2014/01/23'),
(8, 'amol', 'sdfsdf', '2014/01/27'),
(9, 'amol', 'sdf', '2014/01/27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
