-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2016 at 01:07 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gov`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`Admin_ID` int(30) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `Admin_Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Email_ID`, `Admin_Name`, `Password`) VALUES
(1, 'suraj@sednainfosystems.com', 'abc', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `circulars`
--

CREATE TABLE IF NOT EXISTS `circulars` (
  `Circular_ID` int(2) NOT NULL,
  `Headlines` varchar(1000) NOT NULL,
  `Details` mediumtext NOT NULL,
  `Upload_Doc` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_entry`
--

CREATE TABLE IF NOT EXISTS `data_entry` (
  `Mailing_List_ID` varchar(20) NOT NULL,
  `Membership_No` varchar(20) NOT NULL,
  `Organization_Name` varchar(100) NOT NULL,
  `Address_1` varchar(500) NOT NULL,
  `Address_2` varchar(500) NOT NULL,
  `Address_3` varchar(500) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Postal_Code` varchar(10) NOT NULL,
  `Home_Phone` varchar(50) NOT NULL,
  `Work_Phone` varchar(50) NOT NULL,
  `Mobile_Phone` varchar(50) NOT NULL,
  `Fax_Number` varchar(50) NOT NULL,
  `Alternative_Phone` varchar(50) NOT NULL,
  `Email_Address` varchar(100) NOT NULL,
  `Emrgcy_Contact_Name` varchar(50) NOT NULL,
  `Emrgcy_Contact_Phone` varchar(50) NOT NULL,
  `Website` varchar(500) NOT NULL,
  `Major_Deal_In` varchar(500) NOT NULL,
  `Date_Updated` varchar(50) NOT NULL,
  `Membership_Status` varchar(50) NOT NULL,
  `Date_Joined` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_entry`
--

INSERT INTO `data_entry` (`Mailing_List_ID`, `Membership_No`, `Organization_Name`, `Address_1`, `Address_2`, `Address_3`, `City`, `Postal_Code`, `Home_Phone`, `Work_Phone`, `Mobile_Phone`, `Fax_Number`, `Alternative_Phone`, `Email_Address`, `Emrgcy_Contact_Name`, `Emrgcy_Contact_Phone`, `Website`, `Major_Deal_In`, `Date_Updated`, `Membership_Status`, `Date_Joined`) VALUES
('FM', 'FM001', 'MANILAL SANGHVI (BOMBAY)', '158/160, NARAYAN DHURU STREET,', 'MUMBAI 400 003.', '', 'MUMBAI', '400 003', '23694524', '23401271/23414890', '98202 24925', '23447415', '', 'info@msbindia.co.in', 'Mr.HARSHIL SANGHVI', '98201 91403', '', '', '29-07-2001', 'COMMITTEE MEMBER', '29-07-2001'),
('FM', 'FM002', 'DIWAN BROTHERS', '51, NAGDEVI STREET,', 'MUMBAI 400 003', '', 'MUMBAI', '400 003', '26186750', '23421361/2031920', '98204 77174', '23421361', '', 'diwanbrothers@hotmail.com', 'Mr.JIGNESH DIWAN', '', '', '', '29-07-2001', 'SECRETARY', '29-07-2001'),
('FM', 'FM003', 'MADAN SALES CORPORATION', '502, ANAANT DEEP CHAMBERS,273/77,', 'NARSHI NATHA ST,MUMBAI-400009', '', 'MUMBAI', '400 009', '25106337', '23756661/23756664', '93232 06661', '23756569', '', 'madan3@mtnl.net.in', 'MR.RAJARAM KATARUKA', '', '', '', '29-07-2001', 'PRESIDENT', '29-07-2001'),
('FM', 'FM004', 'MADAN TRANSMISSION PVT LTD', '502,ANANT DEEP CHAMBERS,273/77,', 'NAESHI NATHA ST,MUMBAI-400009', '', 'MUMBAI', '400 009', '25106337', '23756661/23756664', '93232 06661', '23756569', '', 'madan3@mtnl.net.in', 'MR.SAMEER KATARUKA', '9821094350', '', '', '29-07-2001', 'FOUNDER MEMBER', '29-07-2001'),
('FM', 'FM005', 'V.N.MEHTA', '71, NARAYAN DHURU STREET,', 'MUMBAI-400003', '', 'MUMBAI', '400 003', '4022852/4024778/4163464', '23421185/23400067/3440823', '99879 13079', '23435852', '', 'vnmehta@vsnl.com', 'MR.BHARAT MEHTA', '98200 52916', '', '', '29-07-2001', 'Jt SECRETARY', '29-07-2001'),
('FM', 'FM006', 'ASHISH ENTERPRISE', '214,YUSUF MEHERALLI ROAD,', 'MUMBAI-400003', '', 'MUMBAI', '400 003', '26289239', '23437744/23447155', '98200 37744', '23447155', '', 'ashish99@mtnl.net.in', 'MR.HARSAD OZA', '9322262452', '', '', '29-07-2001', 'FOUNDER MEMBER', '29-07-2001'),
('FM', 'FM007', 'MAHAVIR MILL STORES', '168,NAGDEVI STREET,', 'MUMBAI-400003', '', 'MUMBAI', '400 003', '4094462', '23426672/23436811', '98211 65822', '3438814', '', 'mahavirmill@hotmail.com', 'MR.CHANDUBHAI T. SHAH', '9821165822', '', '', '29-07-2001', 'FOUNDER MEMBER', '29-07-2001'),
('FM', 'FM008', 'MILAN TUBE TOOLS CORPORATION', '116,Nagdevi Street,', 'MUMBAI-400003', '', 'MUMBAI', '400 003', '3641019/3690677', '23446030/23447924', '98200 31777', '23438873', '', 'mitul_2411@yahoo.com', 'MR.DEEPAK B. SHAH', '9870416333', '', '', '29-07-2001', 'FOUNDER MEMBER', '29-07-2001'),
('FM', 'FM009', 'KALPESH TRADERS', '71,NAGDEVI CROSS LANE,', 'MUMBAI-400003', '', 'MUMBAI', '400 003', '3884332/3869466', '23428471/23447147/3407217/PN*217', '98200 47081', '3448002', '', 'pratix@bom5.vsnl.net.in', 'MR.PRATEEKSH N. SHAH', '98200 47081', '', '', '29-07-2001', 'COMMITTEE MEMBER', '29-07-2001'),
('FM', 'FM010', 'ROYAL HARDWARE MART', '108, NAGDEVI STREET,', 'MUMBAI-400003', '', 'MUMBAI', '400 003', '23851140', '23425221/23423464', '98200 43456', '23412313', '', 'royalhardware@hotmail.com', 'MR.JATIN MEHTA', '', '', '', '29-07-2001', 'COMMITTEE MEMBER', '29-07-2001'),
('FM', 'FM011', 'MOTILAL KALIANDAS & CO', '80,Nagdevi Street,', 'MUMBAI-400003', '', 'MUMBAI', '400 003', '6483787', '23415604/23423502', '98211 42358', '23441211', '', 'motilalk@vsnl.net', 'MR.NIRAJ RANDERY', '', '', '', '29-07-2001', 'FOUNDER MEMBER', '29-07-2001'),
('FM', 'FM012', 'MEHTA BROTHERS', 'B-3, Kailas Esplande, Opp. SHREYAS CINEMA', 'L.B.S. MARG. GHATKOPAR (W),', 'MUMBAI-400086', 'MUMBAI', '400 086', '250000558', '25002020/25001393', '98200 92052', '25002020', '', 'mehtabrothersmst@yahoo.co.in', 'MR. BHARAT V. MEHTA', '', '', '', '29-07-2001', 'FOUNDER MEMBER', '29-07-2001'),
('FM', 'FM013', 'PHOENIX TRADING. CO', '1170/21 B, SHIVAJI NAGAR,', 'RAJGURU BUILDING,', 'PUNE-411005', 'PUNE', '411 005', '32911229', '020-25535111/25531093', '93255 35111', '25530376', '', 'ptcpune@rediffmail.com', 'MR.DILIPBHAI PANDYA', '9325535111', '', '', '29-07-2001', 'FOUNDER MEMBER', '29-07-2001'),
('FM', 'FM014', 'H.M.COMMISARIAT & CO', '7/10 BOTAWAL BLDG,GROUND FLOORr,', 'HORNIMAN CIRCLE, MUMBAI 400 023', '', 'MUMBAI', '400 023', '23675654', '22661402/22663618', '', '2705673', '', '', 'MR.GIRISHBHAI UPADHYAY', '', '', '', '29-07-2001', 'FOUNDER MEMBER', '29-07-2001'),
('FM', 'FM015', 'EMBEKON ENGINEERS (INDIA)', '144,NAGDEVI STREET,', 'MUMBAI-400003', '', 'MUMBAI', '400 003', '22154276', '23423468/66347674', '98200 34215', '23423468', '', 'enabearing@rediffmail.com', 'MR.MOHMODI E. MUKADAM', '', '', '', '29-07-2001', 'COMMITTEE MEMBER', '29-07-2001'),
('FM', 'FM016', 'SAURASHTRA MILL STORES', '157/159, NARAYAN DHURU STREET', 'MUMBAI-400003', '', 'MUMBAI', '400 003', '23693252', '23422428/23117854', '93231 22428', '23412740', '', 'saurashtramill@rediffmail.com', 'MR.BHARAT SANGHVI', '9323122428', '', '', '29-07-2001', 'FOUNDER MEMBER', '29-07-2001'),
('FM', 'FM017', 'ELECTRO STEEL ENGINEERING CO', '38,NAGDEVI CROSS LANE,', 'MUMBAI-400003', '', 'MUMBAI', '400 003', '', '23435361/23438876', '93222 96812', '23412111', '', 'tanaygupta@hotmail.com', 'MR.YOGESH S. GUPTA', '9322296812', '', '', '29-07-2001', 'FOUNDER MEMBER', '29-07-2001'),
('FM', 'FM018', 'P. RATILAL & CO', 'A 9, NEW SONAL IND. ESTATE,', 'SAKI VIHAR ROAD,', 'MUMBAI 400 072.', 'MUMBAI', '400 072', '26202004', '28575318/28575319, 20', '98203 52901', '28575321', '', 'sales@belcon.co.in', 'MR.HARSHADBHAI MEHTA', '9820352901', '', '', '29-07-2001', 'FOUNDER MEMBER', '29-07-2001'),
('FM', 'FM019', 'N.MOHANLAL & CO', '124, NAGDEVI STREET', 'MUMBAI  400003', '', 'MUMBAI', '400 003', '23806955', '23422545/23890904', '98200 34464', '23422545', '', '', 'MR.SHAILESH SHAH', '', '', '', '29-07-2001', 'FOUNDER MEMBER', '29-07-2001'),
('FM', 'FM020', 'MINAL INDUSTRIES', '51/53, NAGDEVI CROSS LANE,', 'MUMBAI-400003', '', 'MUMBAI', '400 003', '26205729', '23443593/23436423', '93231 43593', '23443593', '', 'minalindustries@yahoo.com', 'MR.NAVINBHAI DESAI', '9323143593', '', '', '29-07-2001', 'COMMITTEE MEMBER', '29-07-2001'),
('FM', 'FM021', 'SHREENATH ENTERPRISE', '214, MASJID BUNDER ROAD,', 'MUMBAI-400003', '', 'MUMBAI', '400 003', '3073685', '23401281/23407092/TF:7092', '98191 87879', '3440020', '', 'kunal219@yahoo.com', 'MR.MUKESH SHAH', '9819187879', '', '', '29-07-2001', 'COMMITTEE MEMBER', '29-07-2001'),
('FM', 'FM022', 'INDUSTRIAL BUSINESS CORPORATION', '23/25,Tawa Lane, Ground Fl,', 'MUMBAI-400003', '', 'MUMBAI', '400 003', '25112007', '23401283', '99209 21142', '23401283', '', 'rajivkanan@in.com', 'MR.JASVANTBHAI SHAH', '9920921140', '', '', '29-07-2001', 'TREASURER', '29-07-2001'),
('FM', 'FM023', 'DUNUNG BROTHERS', '441, STATION ROAD,', 'P.O.KOLHAPUR 416001.', '', 'KOLHAPUR', '416 001', '0231-2667481', '0231-265801', '93721 01039', '0231-2662605', '', '', 'MR.JAYKUMAR DUNUNG', '', '', '', '29-07-2001', 'FOUNDER MEMBER', '29-07-2001'),
('FM', 'FM024', 'BELT CENTRE', '105/107,ABDUL REHMAN STREET,', '2nd FL, MUMBAI 400 003.', '', 'MUMBAI', '400 003', '26129422', '23421676/23438739', '98208 38303', '23421676', '', 'kripaint@yahoo.com', 'MR.DINESHBHAI SANGHVI', '9320838303', '', '', '29-07-2001', 'FOUNDER MEMBER', '29-07-2001'),
('FM', 'FM025', 'KASHMIRA ENTERPRISE', '98/100, V.V.Chandan Street,', 'S. A. Ramkrupa Bldg,', 'Masjid Bunder, MUMBAI 400003', 'MUMBAI', '400 003', '', '23454502/23474503', '98210 93380', '26209455, 26254503', '', 'vlinehydraulic@gmail.com', 'MR.DEEPAK GANDHI', '', '', '', '29-07-2001', 'FOUNDER MEMBER', '29-07-2001'),
('FM', 'FM026', 'M.J.TRADING CO', '132, NARAYAN DHURU STREET,', 'MUMBAI-400003', '', 'MUMBAI', '400 003', '22692557', '23425061/23446807', '98211 59159', '', '', '', 'MR.MAHESH SHAH', '98211 59159', '', '', '29-07-2001', 'FOUNDER MEMBER', '29-07-2001'),
('FM', 'FM027', 'BHAVIK ENTERPRISES', '122, Narayan Dhuru Street, 1st Floor', 'Shop No.3, Shreeji Bhuvan,', 'MUMBAI 400 003.', 'MUMBAI', '400 003', '25134887', '23453827/2312760', '98203 57070', '23461137', '', 'bhavikenterprise@hotmail.com', 'MR.KAMLESH SHETH', '9820357070', '', '', '29-07-2001', 'COMMITTEE MEMBER', '29-07-2001'),
('', 'HM001', 'ARVINDBHAI THAKKER', 'B-15, Sun & Sea Picnic Cottage,', 'Versova Road, Andheri (W),', 'MUMBAI-400061', 'MUMBAI', '400 061', '', '26319646', '', '', '', '', '', '', '', '', '28-11-2001', 'HONARARY MEMBER', ''),
('LM', 'LM001', 'KING AGENCY', '103, NARAYAN DHURU STREET,', 'MUMBAI-40003', '', 'MUMBAI', '400 003', '26131660', '23117641/23469374', '98691 24405', '26131660', '', 'kinghoseclamps@yahoo.com', 'Mr.PRAKASH S.SINGHANIA', '9820881659', '', '', '28-11-2001', 'LIFE MEMBER', '17-10-2001'),
('LM', 'LM002', 'COMPOSITE HOSES & HYDRAULICS P.LTD', '116/118, P.D''MELLO ROAD,', 'MANIAR BLDG.,CARNAC BUNDERr,', 'MASJID (E), MUMBAI 400 009.', 'MUMBAI', '400 009', '', '23481022/66376915', '98201 49588', '23483175', '', 'comhose@hotmail.com', 'ZOHER Y. DIWAN,MURTUZA Y.DIWAN', '9820149588', '', '', '28-11-2001', 'LIFE MEMBER', '17-10-2001'),
('LM', 'LM003', 'SUKETU ENTERPRISE', '44, NAGDEVI X LANE, 3RD FLOOR', 'MUMBAI-400003', '', 'MUMBAI', '400 003', '26146301,6288260', '23445847/23466565', '98206 60001', '23411583', '', 'deveshmaniar@yahoo.com', 'MRS.JAYLATA P. MANIAR', '', '', '', '28-11-2001', 'LIFE MEMBER', '17-10-2001'),
('LM', 'LM004', 'PERFECT HYDRAULIC''S', '189, Palia Bldg, Next to Dena Bank', 'Ground Fl, Nagdevi Street,', 'MUMBAI-400003', 'MUMBAI', '400 003', '23860050', '23451344/23451327', '98200 44643', '23451327', '', 'perfecthydraulic@rediffmail.com', 'MOHSIN DHARIWALA', '9820044643', '', '', '28-11-2001', 'LIFE MEMBER', '17-10-2001'),
('LM', 'LM005', 'ANILKUMAR BHATIA', 'C/O CONTINENTAL HOSE (INDIA).', '1ST FLOOR, RAPID HOUSE,', '36/38,NARAYAN DHURU STREET,MUMBAI- 3', 'MUMBAI', '400 003', '25580208', '23413437', '98200 50641', '', '', 'akbhatia@yahoo.net', 'ANILKUMAR BHATIA', '', '', '', '28-11-2001', 'LIFE MEMBER', '28-11-2001'),
('LM', 'LM006', 'R. DINKARRAI & CO', '46,NAGDEVI STREET, 1ST FLOOR,', 'MUMBAI-400003', '', 'MUMBAI', '400 003', '24024465', '23433012/23422891', '93222 33720', '', '', '', 'DINKAR J. SHAH', '', '', '', '28-11-2001', 'LIFE MEMBER', '28-11-2001'),
('LM', 'LM007', 'DHANESH ENTERPRISE', '85/87, NAGDEVI STREET,', '1ST FLOOR, MUMBAI-400003', '', 'MUMBAI', '400 003', '25706610,5797400', '23449694/23451177', '', '', '', '', 'ARVIND S. SHAH', '', '', '', '28-11-2001', 'LIFE MEMBER', '28-11-2001'),
('LM', 'LM008', 'VINIT ENTERPRISES', 'Twins Heritage, Room No.8,', 'Plot No.79 A/B, Sector 19,', 'Nerul, Navi Mumbai', 'NAVI MUMBAI', '', '27706974', '27706974', '93229 78787', '27706974', '', 'tarun_sr@rediffmail.com', 'RAMPRASAD TIWARI', '9322978787', '', '', '28-11-2001', 'LIFE MEMBER', '28-11-2001'),
('LM', 'LM009', 'H.A.PARDAWALA & SONS', '110, NAGDEVI STREET,', 'MUMBAI-400003', '', 'MUMBAI', '400 003', '', '23445109/66373917', '93222 74847', '', '', '', 'MANSOOR H.PARDAWALA', '', '', '', '28-11-2001', 'LIFE MEMBER', '28-11-2001'),
('LM', 'LM010', 'SANGHVI M ILL STORES', '44, NAGDEVI STREET, COMMERCE', 'CHAMBERS, 2ND FLOOR, R NO-14', 'NAGDEVI X LANE, MUMBAI-400003', 'MUMBAI', '400 003', '24071454', '23428625/40228625', '98211 67321', '23428625', '', 'sanghvimillstores@hotmail.com', 'RAHUL SANGHVI', '', '', '', '28-11-2001', 'LIFE MEMBER', '28-11-2001'),
('LM', 'LM011', 'JYOTI MILL STORES', '12, BIBIJAN STREET,', 'OFF- NAGDEVI-STREET,', 'MUMBAI-400003', 'MUMBAI', '400 003', '25684677,5620804', '23423820/23422898/23430375', '98202 25497', '23430375', '', 'jyotimill@mtnl.net.in', 'JASWANTRAI C. SHAH.', '9820659607', '', '', '28-11-2001', 'LIFE MEMBER', '28-11-2001'),
('LM', 'LM012', 'PARADISE RUBBERS P. LTD', '4A, ALI CHAMBERS,', 'HOMI MODI X St. No-2, FOUNTAIN,', 'MUMBAI-400023', 'MUMBAI', '400 023', '22616718,2693869', '22653976/22658784', '', '22650788', '', 'paradise_rubbers@vsnl.com', 'VIRESH N.LALIWALA', '', '', '', '31-12-2001', 'LIFE MEMBER', '31-12-2001'),
('LM', 'LM013', 'VIKRAM & COMPANY', '41,OLYMPUS,4th FLOOR,', '179,PERIN NARIMAN ST.,', 'FORT, MUMBAIi-400001', 'MUMBAI', '400 001', '23691766', '22625883/22642302', '98201 37163', '22625883', '', 'vikramandco@mtnl.net.in', 'HARSHAD C. MEHTA,ARVIND C.MEHA,MEHUL A. MEHTA', '9820137163', '', '', '20-09-2005', 'LIFE MEMBER', '31-12-2001'),
('LM', 'LM014', 'VIKRAM HOSE CORPORATION', '11/112, Khatua Appartment,', '243, Walkeshwar Road, MUMBAI 400 006', 'C/O- 201 Nagdevi Strret, 2nd floor', 'MUMBAI', '400 006', '23641684', '23413771', '98211 31667', '23413770', '', 'vhc11@hotmail.com', 'DEEPAK J.MEHTA, VIKRAM J.MEHTA', '9821131667', '', '', '31-12-2001', 'LIFE MEMBER', '31-12-2001'),
('LM', 'LM015', 'OLYMPIC  ENTERPRISE', '73, Dafodil, Gleandale CHS Ltd.,', 'Gladysalvares Road, Off Pokhran Road No.2,', 'Opp LOK Hospital, THANE (W), 400610', 'THANE', '400 610', '21715776', '', '98208 70311', '', '', 'olympicvijay@yahoo.co.in', 'VIJAYKUMAR M.SHAH', '', '', '', '31-12-2001', 'LIFE MEMBER', '31-12-2001'),
('LM', 'LM016', 'HASMUKH TRADING CORPN', '3A, Diamond Ind Estate,', 'Opp-Virwani Ind Estate, Goregaon (e),', 'Mumbai-400063', 'MUMBAI', '400 063', '28747488', '29275998', '98673 27400', '29275872', '', 'hasmukhtradingcorporation@gmail.com', 'HASMUKH H.SHAH,VAIBHAMEH.MEHTA', '9820587400', '', '', '31-12-2001', 'LIFE MEMBER', '31-12-2001'),
('LM', 'LM017', 'SHAIL INTERNATIONAL PVT.LTD', 'Flat,4/A,Bldg.B, Wing ''A",', 'Shiv Sagar Apt, S.V.Road, Nr.AToZ Shopping ,', 'Borivali(W), Mumbai 400 092', 'MUMBAI', '400 092', '28055468', '28014433/28655501', '', '28062838', '', 'shailneha@hotmail.com', 'SURESH SOMANI', '', '', '', '31-12-2001', 'LIFE MEMBER', '31-12-2001'),
('LM', 'LM018', 'V.RASIKLAL & CO.', 'C-10, Dalia Industrial Estate, Modi Houese,', 'Off  Link Road, Opp. Laxmi Ind.Estate,', 'Andheri (W), MUMBAI 400 053.', 'MUMBAI', '400 053', '26242353', '40518888/40518818', '98200 85677', '40518899', '', 'belts@vsnl.com', 'Mr. CHURCHILL R. SHAH', '9820085677', '', '', '31-12-2001', 'LIFE MEMBER', '31-12-2001'),
('LM', 'LM019', 'BELTING ENTERPRISES', 'A-21,Nand Bhuwan Industrial Estate,', 'Mahakall Caves Road,', 'Andheri (E), Mumbai 400 093.', 'MUMBAI', '400 093', '26251635', '28373354', '', '28372456', '', 'belent@vsnl.com', 'DINDAYAL SANWAL,LALIT SANWAL', '', '', '', '31-12-2001', 'LIFE MEMBER', '31-12-2001'),
('LM', 'LM020', 'K.PATEL & CO.', 'Bharat Chamber Premises CHS, No. B1 + B2/A,', 'Baroda Street, MUMBAI 400 009.', '', 'MUMBAI', '400 009', '079-26859599', '23488487/65988794', '98240 26712', '23482673', '', 'kpatel581@icenet.net', 'Mr.KAUSHIK M.PATEL', '', '', '', '20-09-2005', 'LIFE MEMBER', '31-12-2001'),
('LM', 'LM021', 'PRECIOUS MACHINE TOOLS', '11, Janmabhoomi Marg, Vatsa House,', 'Ground Floor, Fort,', 'MUMBAI 400 001.', 'MUMBAI', '400 001', '23633596, 3633597', '22872449/22871855', '98200 86909', '22873597', '', 'wiper.vardhman@gmail.com', 'Mr.JINESH HIRALAL SHAH', '', '', '', '31-12-2001', 'LIFE MEMBER', '31-12-2001'),
('LM', 'LM022', 'TRANSEQUIP', '68, Nagdevi Cross Lane,', 'MUMBAI 400 003.', '', 'MUMBAI', '400 003', '28723173', '23448585/23112295', '98210 53311', '23442585', '', 'trans.lovejoy@gmail.com', 'Mr. HAREN SHAH', '9870018585', '', '', '31-12-2001', 'LIFE MEMBER', '31-12-2001'),
('LM', 'LM023', 'K.P.CORPORATION', '184, Samuel Street,  2nd floor,', '18, Hazira Mansion,Mandvi Chambers,', 'MUMBAI 400 009', 'MUMBAI', '400 009', '28070018', '23466076/223465213', '93200 28814', '', '', '', 'Mr.DHARMENDRA DOSHI', '9320028814', '', '', '10-04-2002', 'LIFE MEMBER', '31-03-2002'),
('LM', 'LM024', 'HINDUSTAN BELTINGS (SILVASA)', '1, Janki Centre,', 'Off Veera Desai Road,', 'Andheri(W), MUMBAI', 'MUMBAI', '', '', '31086222/36916262', '', '', '', '', 'VIPIN KALRA', '', '', '', '', 'LIFE MEMBER', '08-03-2002'),
('LM', 'LM025', 'S.K.ENTERPRISES', '7/8, Corporate Avenue,', 'Sonawala Road, Goregaon (E),', 'MUMBAI', 'MUMBAI', '400 063', '28723717', '26850948/26853353', '98206 36062', '', '', 'jts_2020@yahoo.com', 'Mr.JATIN T.SHAH', '9820636062', '', '', '14-10-2002', 'LIFE MEMBER', '14-10-2002'),
('LM', 'LM026', 'K.G.ENTERPRISES', 'Shop No. A-3, Sheetal Shopping Center,', 'B P Cross Road No-2, Near SaiBaba Temple,', 'Bhayender ?, Thane - 401 105.', 'MUMBAI', '401 105', '28100934', '32534895', '98206 66408', '', '', '', 'Mr.CHANDER MOHAN KAPOOR', '98206 66408', '', '', '01-01-2003', 'LIFE MEMBER', '01-01-2003'),
('LM', 'LM027', 'TECHNICS (INDIA)', 'Room No.301, 3rd floor, 34, Nagdevi Street,', 'MUMBAI 400 003', '', 'MUMBAI', '400 003', '23517275', '23410304', '98212 41827', '23517275', '', 'moditushar90@gmail.com', 'Mr.TUSHAR M. MODI', '', '', '', '20-09-2005', 'COMMITTEE MEMBER', '15-09-2005'),
('LM', 'LM028', 'BELTING INTERNATIONAL', 'B-101, BYCULLA SERVICE INDUSTRIES,', 'DADOJI KONDDEO CROSS MARG,', 'BYCULLA, MUMBAI 400 027.', 'MUMBAI', '400 027', '', '23734499/23745319', '', '', '', 'beltinginternational@yahoo.com', 'SURESH KHAIRANJANI', '9323234499', '', '', '20-09-2005', 'LIFE MEMBER', '15-09-2005'),
('LM', 'LM029', 'LIBRAFLEX', 'B-309,Sussex Industrial Estate,', 'D.K. CROSS LANE, BYCULLA(E),', 'MUMBAI 400 027.', 'MUMBAI', '400 027', '25550024', '37723073/23753792', '92232 61134', '23716043', '', 'libraflex@vsnl.com', 'Mr.NARAIN P.KAKU', '92232 61134', '', '', '24-09-2005', 'LIFE MEMBER', '24-09-2005'),
('LM', 'LM030', 'FARGO SALES CORPORATION', '116, Chimna Buther Street, Parda Cottage,', 'Near Null Bazar, MUMBAI 400 003.', '', 'MUMBAI', '400 003', '23734564', '23462685/23475301', '98928 71676', '', '', 'y_shikari@yahoo.co.in', 'Mr. MOHAMMED S.SHIKARI', '', '', '', '24-09-2005', 'LIFE MEMBER', '24-09-2005'),
('LM', 'LM031', 'SURENDRA ENGINEERING CORPORATION', '1,JAITIRTH MANSION, 6-A, BARRACK ROAD,', 'BEHIND METRO ADLAB,', 'MUMBAI 400 020.', 'MUMBAI', '400 020', '23512415', '22002626', '98200 28850', '22000777', '', 'surendra@surendraengg.com', 'Mr.SURENDRA R.PARIKH', '', '', '', '24-09-2005', 'LIFE MEMBER', '24-09-2005'),
('LM', 'LM032', 'MAYUR CORPORATION', '125/127, NARAYAN DHURU STREET,', '4/A. Trade Centre, Ground Fl,', 'MUMBAI 400 003.', 'MUMBAI', '400 003', '25064825', '23422335/23400596', '98202 31337', '23400596', '', 'mayurcorpn@yahoo.co.in', 'Mr.MAYUR N.MERVANA', '9820231337', '', '', '24-09-2005', 'LIFE MEMBER', '24-09-2005'),
('LM', 'LM033', 'V.M.TRADERS', '46, NAGDEVI STREET,', 'No.24, 3rd FLOOR,', 'MUMBAI 400 003', 'MUMBAI', '400 003', '25060467', '23117927', '98191 13312', '', '', '', 'Mr.DHARAMSHI L.PANDITPUTRA', '', '', '', '24-09-2005', 'LIFE MEMBER', '24-09-2005'),
('LM', 'LM034', 'N.P.BELTING CO.', '102, Udyog Kshetra,', 'L.B.S.Marg, Mulund (W),', 'MUMBAI 400 080.', 'MUMBAI', '400 080', '', '25670326/25693134', '98690 89899', '25677552', '', 'satyashiv_np123@rediff.com', 'Mr.HARISHANKAR A.SINGH', '98690 89899', '', '', '24-09-2005', 'LIFE MEMBER', '24-09-2005'),
('LM', 'LM035', 'KAN POWER RUBBER INDUSTRIES', '82/86, NARAYAN DHURU STREET,', 'ROOM No:5, MEZANINE FLOR,', 'MUMBAI 400 003.', 'MUMBAI', '400 003', '66938856', '23430157/23112967', '98200 94374', '23451259', '', 'kanpowerrubber@rediffmail.com', 'Mr.NORTAN JAIN', '98200 94374', '', '', '24-09-2005', 'LIFE MEMBER', '24-09-2005'),
('LM', 'LM036', 'MONTANA INTERNATIONAL', '71/73, NAGDEVI STREET,', '2nd FLOOR, MUMBAI 400 003', '', 'MUMBAI', '400 003', '26231246', '32964884/23464768', '93225 05685', '66335927', '', 'montanainternational.sales@gmail.com', 'Mr.KEYUR D.SANGHAVI', '9322505685', '', '', '24-09-2005', 'LIFE MEMBER', '24-09-2005'),
('LM', 'LM037', 'A.M.A.HUSSAIN & CO.', '29, NAGDEVI STREET,', 'MUMBAI 400 003.', '', 'MUMBAI', '400 003', '23099895', '23441991/23439563', '', '56368270', '', 'amah@vsnl.com', 'Mr.SAIFUDDIN A.LOKHANDWALA', '', '', '', '24-09-2005', 'LIFE MEMBER', '24-09-2005'),
('LM', 'LM038', 'SRI SWATI WEAVING WORKS', 'Room No:4, SOHANSINGH CHAWL,', 'KHOTWADI, SANTACRUZ (W),', 'mumbai 400 054', 'MUMBAI', '400 054', '26163064', '26182798', '98671 49536', '26182798', '', '', 'Mr.P.V.S.NAGESWARARAO', '9820199684', '', '', '28-10-2005', 'LIFE MEMBER', '24-09-2005'),
('LM', 'LM039', 'VORA INDUSTRIAL CORPORATION', '64, Nagdevi Street,', 'MUMBAI 400 003.', 'TEMP ADD - 177, Nagdevi Street, 1st Fl', 'MUMBAI', '400 003', '2801606', '23425798', '98201 20410', '23447838', '', 'asiaticvbelt@hotmail.com', 'Mr.NAVIN S.VORA', '9820120410', '', '', '24-12-2005', 'LIFE MEMBER', '24-09-2005'),
('LM', 'LM040', 'M.KAMAL MILL STORES', 'Shop No.104, 1st Fl, Tilsons Shopping Centre,', 'Kalyan Ambernath Road, Nr Bharat Cinema', 'ULHASNAGAR - 421 003', 'ULHASNAGAR', '421 003', '95251-2546959', '95251-2550965, 2551965', '94226 63065', '95251-2550965', '', 'm.kamalmillstores_hyp@rediffmail.com', 'Mr.SRICHAND MULCHANDANI', '9322685597', '', '', '27-09-2006', 'LIFE MEMBER', '22-07-2006'),
('LM', 'LM041', 'INDO TRADE AGENCY', '163, Narayan Dhuru Street,', 'Office No.18, 2nd floor,', 'MUMBAI 400003', 'MUMBAI', '400 003', '24021732', '23429695', '98202 44676', '23429695', '', 'indotradeagency@gmail.com', 'Mr. CHANDUBHAI (AXAD)', '98191 72014', '', '', '27-09-2006', 'LIFE MEMBER', '22-07-2006'),
('LM', 'LM042', 'ANUPAM BELTING CO.', '145/2, Narayan Dhuru Street,', '2nd floor, MUMBAI 400003', '', 'MUMBAI', '400 003', '25104662', '23433382, 23457813', '98211 25246', '', '', '', 'Mr.SHASHIKANT R.MEHTA', '', '', '', '27-09-2006', 'LIFE MEMBER', '22-07-2006'),
('LM', 'LM043', 'ADITYA ENGINEERING CORPORATION', 'C-507, SHIRIN SOHRAB PALACE,', '225, NARIMAN ROAD, VILE PARLE (E),', 'MUMBAI 400 057.', 'MUMBAI', '400 057', '26150683', '26144099', '93232 13276', '26144099', '9324250683', 'asitdesai11@hotmail.com', 'Mr.ASIT DESAI', '9967911600', '', '', '03-03-2007', 'LIFE MEMBER', '23-02-2007'),
('LM', 'LM044', 'INDIA FLEX INDUSTRIES P. LTD.', 'A-574, TTC Industrial Area, MIDC,', 'Mahape, Navi Mumbai 400 701', '', 'NAVI MUMBAI', '400 701', '', '23711826/27782917', '98200 00805', '27782916', '', 'ifiptld@vsnl.net', 'Mr. IFTEKHAR KHAN', '', '', '', '03-03-2007', 'LIFE MEMBER', '23-02-2007'),
('LM', 'LM045', 'LUCKY MILL STORES', '39, NAGDEVI CROSS LANE,', 'MUMBAI 400003', '', 'MUMBAI', '400 003', '23451691', '23441684/23459975', '98672 16142', '', '', '', 'CHANDRAPRAKASH CHAURASIYA', '98672 16142', '', '', '01-10-2008', 'LIFE MEMBER', '01-10-2008'),
('LM', 'LM046', 'SEEMA CONVEYOR BELTS & SYSTEMS P L', 'A/2001, Station Plaza, Station Road,', 'Bhandup (W), MUMBAI 400078', '', 'MUMBAI', '400 078', '', '25663872', '93222 97811', '25663872', '', 'seemaenterprises@rediff.com', '', '', '', '', '31-07-2009', 'LIFE MEMBER', '31-07-2009'),
('OM', 'LM047', 'BHARAT INDUSTRIAL & HARDWARE MART', 'SHOP No.8, SAHYADRI, PERU BAUG,', 'AAREY ROAD, GOREGAON (E),', 'MUMBAI 400 067', 'MUMBAI', '400 067', '28010633/8617242', '26860434/26868360', '98202 80853', '26868360', '', 'dcshah@vsnl.net', 'Mr.DIVYESH C. SHAH', '9820280853', '', '', '25-07-2005', 'LIFE MEMBER(CONVERTED)', '10-04-2002'),
('OM', 'LM048', 'BOMBAY PULLEY ENGINEERING CO.', 'G-2, ABHISHEK, Gr. Floor,', '303-307, Samuel Street,', 'MUMBAI 400 003.', 'MUMBAI', '400 003', '', '23427224/23443231', '98191 04777', '23413113', '', 'bombaypulley47@rediffmail.com', 'Mr.KANCHAN', '9820039121', '', '', '25-07-2005', 'LIFE MEMBER(CONVERTED)', '18-10-2003'),
('OM', 'LM049', 'GIRSONS RUBBER INDUSTRIES', 'Razat Plaza I, Ghat Road, Block No.1,', 'Opp. Union Bank of India,', 'NAGPUR 400 018.', 'NAGPUR', '400 018', '0712-2427347', '0712-2020978/2734683', '98222 02362', '0712-2734683', '', 'hitechmarketinginc@gmail.com', 'Mr.Mohan R. Agrawal', '', '', '', '25-07-2005', 'LIFE MEMBER(CONVERTED)', '20-04-2004'),
('LM', 'LM050', 'VIVEN TRANSMISIONS', 'Plot No.205, Manoshi Complex, ''C'' Wing,', 'Plot No. 5/6, Sector-3, Ghansoli,', 'Navi Mumbai 400 701.', 'NAVI MUMBAI', '400 701', '', '64188064', '98190 28088', '227551625', '', 'valerine1978@yahoo.com', 'Mr. Valerine F. Menezes', '', '', '', '01-09-2009', 'LIFE MEMBER', '01-09-2009'),
('LM', 'LM051', 'S.M.B. TRADING CO', '12A, Bibijan Street,', 'MUMBAI 400003', '', 'MUMBAI', '400 003', '23451521', '23116714', '99670 51520', '', '', 'smbtradingco@gmail.com', 'Mr. MURTUZA M. ALIASGAR', '', '', '', '06-10-2009', 'LIFE MEMBER', '01-10-2009'),
('LM', 'LM052', 'ELECTRO STEEL POWER TRANSMISSION CO.', '94/96/99, Nagdevi Street, 3rd floor,', 'MUMBAI 400003.', '', 'MUMBAI', '400 003', '23078344', '23438200/23457780', '93225 94938', '23074418', '', 'sanjugupta@hotmail.com', 'Mr.SWADESH S. GUPTA', '', '', '', '06-10-2009', 'COMMITTEE MEMBER', '01-10-2009'),
('OM', 'LM053', 'NOMANBHAI HEPTULLABHAI', '27, Main Road,', 'Nasik City  422001', '', 'NASHIK', '422 001', '2500631', '0253-2506285/2505177', '98230 58606', '2599524', '', 'nbhb@sify.com', 'Mr.HUSAIN NOMANBHAI VORA,NOMAN HOLIMBHAI MERCHANT', '', '', '', '25-07-2005', 'LIFE MEMBER(CONVERTED)', '17-10-2001'),
('LM', 'LM054', 'LAXMI MILL STORES', '111, Nagdevi Street,', 'MUMBAI 400003', '', 'MUMBAI', '400 003', '', '23443487/23117964', '98202 74902', '23443487', '', '', 'Mr. NILESH V. SOLANKI', '', '', '', '14-10-2009', 'LIFE MEMBER', '12-10-2009'),
('LM', 'LM055', 'VASHI ELECTRICALS PVT. LTD.', 'Sagar Ratan Industrial Premises,', 'Plot No.D-265, M.I.D.C., TTC, TURBHE,', 'NAVI MUMBAI - 405705', 'MUMBAI', '400 705', '', '27626300-50', '98200 45685', '27681977', '', 'mohand@vashielectricals.com', 'Mr. MADAN B. DODEJA', '', '', '', '30-10-2009', 'LIFE MEMBER', '31-10-2009'),
('LM', 'LM056', 'SHRI SALASAR POLYFAB P LTD', '43, NAGDEVI CROSS LANE, 1st Floor,', 'LAXMI BUILDING, MUMBAI 400 003.', '', 'MUMBAI', '400 003', '32441225', '66343402', '97696 39535', '23117703', '', 'goenkamukesh@yahoo.co.in', 'Mr. MUKESH GOENKA', '97696 39535', '', '', '28-07-2011', 'LIFE MEMBER', '27-07-2011'),
('LM', 'LM057', 'FENNER INDIA LTD.', '105, 1st floor, Gauri Complex,', 'Sector 11, CBD Belapur, Navi Mumbai 400 614.', '', 'NAVI MUMBAI', '400 614', '', '27560985/27580236', '', '27563330', '', 'mum@fennermail.com', 'Mr. RAVICHANDRAN', '', '', '', '22-09-2011', 'LIFE MEMBER', '22-09-2011'),
('LM', 'LM058', 'UDAY AGENCY', '18/183,?Shankar Smruti?, Phadke Building,', 'Industrial Area, ICHALKARANJI 416115.', '', 'ICHALKARANJI', '413 115', '', '0230/24244430', '94238 60641', '', '9145403557', 'udayagency@hotmail.com', 'Yashwant Phadke', '', '', '', '14-03-2012', 'LIFE MEMBER', '14-03-2012'),
('LM', 'LM059', 'JIGNA SALES CORPORATION', '39, Nagdevi Cross Lane,', 'MUMBAI 400 003', '', 'MUMBAI', '400 003', '28919472', '23401179', '97697 87555', '', '', 'keyur@polydrive.in', 'KEYUR FOTARIA', '97697 87555', '', '', '03-04-2015', 'LIFE MEMBER', '03-04-2015'),
('LM', 'LM060', 'BALL BEARING HOUSE', '50, Bibijan Street, 1st floor,', 'MUMBAI 400 003', '', 'MUMBAI', '400 003', '27660062', '23436245/23436246', '98190 37624', '', '', 'ballbearinghouse@hotmail.com', 'PRAVESH TREHAN', '9819037624', '', '', '03-04-2015', 'LIFE MEMBER', '03-04-2015'),
('LM', 'LM061', 'INDUSTRIAL SALES & SERVICE', '244, Yusuf Mererali Road,', 'Ground Floor, MUMBAI 400 003', '', 'MUMBAI', '400 003', '23679108', '23423604/23439587', '98190 96446', '', '', 'iss244.ym@gmail.com', 'YASHODHAN MUNDRA', '9819096446', '', '', '03-04-2015', 'LIFE MEMBER', '03-04-2015'),
('LM', 'LM062', 'M N ENTERPRISE', 'B 2/44, TECHNOCROT, TWIN TOWER LANE,', 'PRABHADEVI, MUMBAI 400 025', '', 'MUMBAI', '400 025', '24222617', '40518817', '98200 46194', '', '', 'mnenterprise10@yahoo.com', 'RAJU R SHAH', '9820046194', '', '', '29-04-2015', 'LIFE MEMBER', '29-04-2015'),
('LM', 'LM063', 'DAYAL MARKETING SERVICES', '686/2, Adarsh Colony II, Manda,', 'Titwala ?, Dist - THANE  421 605', '', 'THANE', '421 605', '9029870575', '0251-2381939', '98203 45674', '', '', 'dmservicesshukla#gmail.com', 'Mr. HARIKANT SHUKLA', '9820345674', '', '', '31-10-2015', 'LIFE MEMBER', '29-10-2015'),
('OM', 'OM002', 'DEEP JYOTI PLASTIC ENTERPRISE', '71/73, NAGDEVI STREET,', 'OPP-UNION BANK OF INDIA,1ST FLOOR,', 'MUMBAI-400003', 'MUMBAI', '400 003', '25918955', '23438143/23434894', '', '23412381', '', '', 'NAGINDAS SHAH.', '', '', '', '25-07-2005', 'YEARLY MEMBER', '28-11-2001');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE IF NOT EXISTS `list` (
`ID` int(5) NOT NULL,
  `Member_ID` varchar(5) NOT NULL,
  `Organization_Name` varchar(100) NOT NULL,
  `Filename` varchar(200) NOT NULL,
  `Upload_Doc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`News_ID` int(2) NOT NULL,
  `Headlines` varchar(1000) NOT NULL,
  `Details` mediumtext NOT NULL,
  `Image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `Image_ID` int(10) NOT NULL,
  `Image_Path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`Image_ID`, `Image_Path`) VALUES
(1000, 'img/8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `circulars`
--
ALTER TABLE `circulars`
 ADD PRIMARY KEY (`Circular_ID`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`News_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `Admin_ID` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `News_ID` int(2) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
