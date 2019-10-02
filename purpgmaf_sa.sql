-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 02, 2019 at 06:57 AM
-- Server version: 10.1.41-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `purpgmaf_sa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `contact`, `password`) VALUES
(1, 'Administrator', '0241231234', 'SAsaa2019');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `inv` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `datesold` varchar(200) NOT NULL,
  `venue` varchar(200) NOT NULL,
  `do` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subadmin`
--

CREATE TABLE `subadmin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `stuid` varchar(200) NOT NULL,
  `hall` varchar(200) NOT NULL,
  `rno` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `dateadded` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'Active',
  `password` varchar(200) NOT NULL,
  `team` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subadmin`
--

INSERT INTO `subadmin` (`id`, `name`, `username`, `contact`, `stuid`, `hall`, `rno`, `location`, `dateadded`, `status`, `password`, `team`) VALUES
(1, 'Prince Boateng', 'sa190204716974', '0204716974', 'SB/FIN/16/0115', 'Charis Hostel', 'A5', 'ucc', '08/09/2019', 'Active', 'sap5715', ''),
(2, 'Emmanuel Gurah Graham ', 'sa190557041780', '0557041780', 'SB/ACC/16/0051', 'Lords Landing Apartment', 'A6', 'ucc', '08/09/2019', 'Active', 'sap4581', '');

-- --------------------------------------------------------

--
-- Table structure for table `volunter`
--

CREATE TABLE `volunter` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `stuid` varchar(200) NOT NULL,
  `hall` varchar(200) NOT NULL,
  `rno` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `dateadded` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'Active',
  `password` varchar(200) NOT NULL,
  `team` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunter`
--

INSERT INTO `volunter` (`id`, `name`, `username`, `contact`, `stuid`, `hall`, `rno`, `location`, `dateadded`, `status`, `password`, `team`) VALUES
(1, 'Aminata Ibrahim', 'sa190570353648', '0570353648', 'SB/ACC/18/0291', 'The Nest Hostel', 'B Block A9', 'ucc', '08/09/2019', 'Active', 'sap7309', ''),
(2, 'Purple Softwares', 'sa190001231234', '0001231234', 'PS/CSC/18/0000', 'KNH', 'G011', 'ucc', '08/09/2019', 'Active', 'sap4505', ''),
(3, 'Samuel Osae Bledu', 'sa190201418352', '0201418352', 'SS/BSS/17/0353', 'KNH', 'G014', 'ucc', '09/09/2019', 'Active', 'sap9841', ''),
(4, 'Michael Atter', 'sa190554797767', '0554797767', 'EH/ACT/18/0007', 'Grace Hostel', '07', 'ucc', '09/09/2019', 'Active', 'sap7508', ''),
(5, 'Salma Shaibu', 'sa190553095530', '0553095530', 'BS/DMS/16/0013', 'Russian Lodge', 'C12', 'ucc', '09/09/2019', 'Active', 'sap1302', ''),
(6, 'Anita Akosua Owusu', 'sa190540442020', '0540442020', 'SB/FIN/18/0038', 'SRC', 'D15', 'ucc', '09/09/2019', 'Active', 'sap6488', ''),
(7, 'George Fiifi Danso', 'sa190240603447', '0240603447', 'SB/PCM/19/0017', 'KNH', 'G112', 'ucc', '09/09/2019', 'Active', 'sap3460', ''),
(8, 'Ceasar Agbezuhlor', 'sa190542908736', '0542908736', 'SB/FIN/16/0048', 'Charis Hostel', 'A5', 'ucc', '09/09/2019', 'Active', 'sap1464', ''),
(9, 'Doris Adzokatse', 'sa190555268870', '0555268870', 'SB/ACC/19/0042', 'Valco', 'A21', 'ucc', '09/09/2019', 'Active', 'sap4030', ''),
(10, 'Prince Yeboah', 'sa190542854170', '0542854170', 'SB/ACC/16/0044', 'CASFORD', '246', 'ucc', '10/09/2019', 'Active', 'sap8185', ''),
(11, 'Daniel Akowuah', 'sa190554823050', '0554823050', 'SB/FIN/17/0135', 'KNH', 'G214', 'ucc', '10/09/2019', 'Active', 'sap3444', ''),
(12, 'Seth Lenteh', 'sa190558847180', '0558847180', 'AR/BAA/17/0137', 'Jopak', '6', 'ucc', '10/09/2019', 'Active', 'sap6111', ''),
(13, 'Dominic Agbesi', 'sa190547256932', '0547256932', 'SB/ADM/18/0045', 'KNH', 'G014', 'ucc', '10/09/2019', 'Active', 'sap7578', ''),
(14, 'Albert Sefa Amankwah', 'sa190559276067', '0559276067', 'SB/ACC/18/0128', 'Oguaa', 'D20', 'ucc', '10/09/2019', 'Active', 'sap9285', ''),
(15, 'Osborn Botwe', 'sa190544891160', '0544891160', 'SB/ACC/18/0096', 'Jornel', '3', 'ucc', '10/09/2019', 'Active', 'sap3969', ''),
(17, 'Sylvester Oduro', 'sa190548518314', '0548518314', 'SB/ACC/18/0177', 'Oguaa', 'D15', 'ucc', '10/09/2019', 'Active', 'sap6964', ''),
(18, 'Prosper Mettle', 'sa190271999597', '0271999597', 'SB/FIN/19/0050', 'CASFORD', '60A', 'ucc', '10/09/2019', 'Active', 'sap7320', ''),
(19, 'Clara Z. Shaibu-Waale', 'sa190553990566', '0553990566', 'EH/BSS/18/0110', 'Superannuation ', 'F121', 'ucc', '10/09/2019', 'Active', 'sap1467', ''),
(20, 'Irene Adu', 'sa190551473049', '0551473049', 'ET/EVT/18/0080', 'Executive Hostel', '6', 'ucc', '10/09/2019', 'Active', 'sap5187', ''),
(21, 'Rhoda Osei Asuming', 'sa190263119509', '0263119509', 'SB/HRM/19/0075', 'Adehye', '302', 'ucc', '11/09/2019', 'Active', 'sap5476', ''),
(22, 'Emmanuel Gurah Graham', 'sa190557041780', '0557041780', 'SB/ACC/16/0051', 'Lords Landing Apartment', 'A5', 'ucc', '11/09/2019', 'Active', 'sap9701', ''),
(23, 'Prince Boateng', 'sa190204716974', '0204716974', 'SB/FIN/16/0115', 'Charis Hostel', 'A5', 'ucc', '11/09/2019', 'Active', 'sap2202', ''),
(24, 'Mariama Quarshie', 'sa190550291667', '0550291667', 'SB/FIN/18/0058', 'Russian Lodge', 'B6', 'ucc', '15/09/2019', 'Active', 'sap9761', ''),
(25, 'Belinda Annan Acquah', 'sa190278414284', '0278414284', 'SB/FIN/18/0102', 'Oguaa Hall', 'C38', 'ucc', '15/09/2019', 'Active', 'sap2192', ''),
(26, 'Jeremiah Akwasi Obeng', 'sa190278456768', '0278456768', 'SB/ACC/18/0038', 'KNH', 'A313', 'ucc', '15/09/2019', 'Active', 'sap8338', ''),
(27, 'Amoah Esther', 'sa190545966860', '0545966860', 'SB/ACC/18/0124', 'Albertfred Royal Hostel', '3', 'ucc', '15/09/2019', 'Active', 'sap7928', ''),
(28, 'Sonia Tackie', 'sa190275902241', '0275902241', 'SB/PCM/19/0060', 'Adehye', '305', 'ucc', '15/09/2019', 'Active', 'sap7385', ''),
(29, 'Gideon Lartey', 'sa190559411186', '0559411186', 'SB/ACC/19/0310', 'Casford', 'B145', 'ucc', '15/09/2019', 'Active', 'sap1320', ''),
(30, 'Vida Adefi', 'sa190557915865', '0557915865', 'SB/FIN/18/0030', 'SRC', 'E46', 'ucc', '15/09/2019', 'Active', 'sap1734', ''),
(31, 'Albert Oppong', 'sa190246317931', '0246317931', 'SS/GRP/17/0039', 'Diaspora', 'Unknown', 'ucc', '15/09/2019', 'Active', 'sap1591', ''),
(32, 'Papa Kofi Boye Acquah', 'sa190560356429', '0560356429', 'SB/ADM/16/0016', 'Diaspora', 'Unknown', 'ucc', '15/09/2019', 'Active', 'sap3926', ''),
(33, 'Rita Owell', 'sa190276528417', '0276528417', 'SB/ACC/16/0057', 'Russian Lodge', 'B17', 'ucc', '15/09/2019', 'Active', 'sap3380', ''),
(34, 'Sarkodie Samuella Darkwah', 'sa190552579782', '0552579782', 'ET/EVT/18/0081', 'Diaspora', 'Unknown', 'ucc', '15/09/2019', 'Active', 'sap1539', ''),
(35, 'Samuel Nii Nortey', 'sa190246223114', '0246223114', 'EH/BSS/17/0139', 'BB HOSTEL', '3', 'ucc', '21/09/2019', 'Active', 'sap2122', '');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `voucher` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `dateadded` varchar(200) NOT NULL,
  `datesold` varchar(200) NOT NULL,
  `volid` varchar(200) NOT NULL,
  `soldby` varchar(200) NOT NULL,
  `soldto` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `stlevel` varchar(5) NOT NULL,
  `stcont` varchar(200) NOT NULL,
  `mop` varchar(200) NOT NULL,
  `momoRef` varchar(200) NOT NULL,
  `attendStatus` varchar(50) NOT NULL DEFAULT 'absent',
  `attendStatus2` varchar(100) NOT NULL DEFAULT 'absent'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `voucher`, `type`, `location`, `status`, `dateadded`, `datesold`, `volid`, `soldby`, `soldto`, `gender`, `stlevel`, `stcont`, `mop`, `momoRef`, `attendStatus`, `attendStatus2`) VALUES
(4, 'SAUCC452866', '20', 'ucc', 'sold', '09/09/2019', '15/09/2019', '22', 'Emmanuel Gurah Graham', 'Atanboh Rebecca', 'female', '', '0545371841', 'cash', '', 'absent', 'absent'),
(5, 'SAUCC653831', '20', 'ucc', 'sold', '09/09/2019', '15/09/2019', '22', 'Emmanuel Gurah Graham', 'Sandra Amoah', 'female', '', '0557079160', 'cash', '', 'absent', 'absent'),
(6, 'SAUCC869298', '20', 'ucc', 'sold', '09/09/2019', '16/09/2019', '3', 'Samuel Osae Bledu', 'Calistus Doma-Uuro', 'male', '', '0241319258', 'cash', '', 'absent', 'absent'),
(7, 'SAUCC707566', '20', 'ucc', 'sold', '09/09/2019', '16/09/2019', '3', 'Samuel Osae Bledu', 'Emmanuel Offeh Harrison', 'male', '', '0546950907', 'cash', '', 'absent', 'absent'),
(8, 'SAUCC333297', '20', 'ucc', 'sold', '09/09/2019', '20/09/2019', '15', 'Osborn Botwe', 'Emmanuella Danquah ', 'female', '', '0277706602', 'cash', '', 'absent', 'absent'),
(9, 'SAUCC765542', '20', 'ucc', 'sold', '09/09/2019', '20/09/2019', '1', 'Aminata Ibrahim', 'Margaret Nyave Abena Kumi', 'female', '', '0556936328', 'cash', '', 'absent', 'absent'),
(10, 'SAUCC785922', '20', 'ucc', 'sold', '09/09/2019', '13/09/2019', '19', 'Clara Z. Shaibu-Waale', '', 'male', '', '', 'momo', '395', 'absent', 'absent'),
(11, 'SAUCC52093', '20', 'ucc', 'sold', '20/09/2019', '20/09/2019', '1', 'Aminata Ibrahim', 'Benjamin Adu', 'male', '', '0555787207', 'cash', '', 'absent', 'absent'),
(12, 'SAUCC451814', '20', 'ucc', 'sold', '20/09/2019', '22/09/2019', '15', 'Osborn Botwe', 'Juliet kuwornu', 'female', '', '0546869679', 'cash', '', 'absent', 'absent'),
(13, 'SAUCC312278', '20', 'ucc', 'sold', '20/09/2019', '22/09/2019', '15', 'Osborn Botwe', 'Juliet kuwornu', 'female', '', '0546869679', 'cash', '', 'absent', 'absent'),
(14, 'SAUCC124766', '20', 'ucc', 'sold', '20/09/2019', '22/09/2019', '15', 'Osborn Botwe', 'Bayor Ayisha', 'female', '', '0554456938', 'cash', '', 'absent', 'absent'),
(15, 'SAUCC472366', '20', 'ucc', 'sold', '20/09/2019', '22/09/2019', '15', 'Osborn Botwe', 'Abalori Christiana', 'female', '', '0548049505', 'cash', '', 'absent', 'absent'),
(16, 'SAUCC6731710', '20', 'ucc', 'sold', '20/09/2019', '22/09/2019', '15', 'Osborn Botwe', 'Olivia Oduro Mensah', 'female', '', '0570522810', 'cash', '', 'absent', 'absent'),
(17, 'SAUCC637332', '20', 'ucc', 'sold', '20/09/2019', '22/09/2019', '15', 'Osborn Botwe', 'Victoria Alorzuke', 'female', '', '0544709397', 'cash', '', 'absent', 'absent'),
(18, 'SAUCC5608110', '20', 'ucc', 'sold', '20/09/2019', '22/09/2019', '22', 'Emmanuel Gurah Graham', 'Jemimah Yeboah Amadi', 'female', '', '0200913146', 'cash', '', 'absent', 'absent'),
(19, 'SAUCC686281', '20', 'ucc', 'sold', '20/09/2019', '22/09/2019', '8', 'Ceasar Agbezuhlor', 'Abatori Christiana', 'female', '', '0548049405', 'cash', '', 'absent', 'absent'),
(20, 'SAUCC795661', '20', 'ucc', 'sold', '20/09/2019', '23/09/2019', '22', 'Emmanuel Gurah Graham', 'Hannah Otubia Acquah', 'female', '', '0208475539', 'cash', '', 'absent', 'absent'),
(21, 'SAUCC3819810', '20', 'ucc', 'sold', '20/09/2019', '23/09/2019', '3', 'Samuel Osae Bledu', 'Katherine Smith', 'female', '', '0245049384', 'cash', '', 'absent', 'absent'),
(22, 'SAUCC980099', '20', 'ucc', 'sold', '20/09/2019', '24/09/2019', '22', 'Emmanuel Gurah Graham', 'Sandra Aidoo', 'female', '', '0574675029', 'cash', '', 'absent', 'absent'),
(23, 'SAUCC2445610', '20', 'ucc', 'sold', '20/09/2019', '24/09/2019', '22', 'Emmanuel Gurah Graham', 'Monique Acquah', 'female', '', '0557671505', 'cash', '', 'absent', 'absent'),
(24, 'SAUCC864049', '20', 'ucc', 'sold', '20/09/2019', '24/09/2019', '22', 'Emmanuel Gurah Graham', 'Vera Aganu', 'female', '', '0206234373', 'cash', '', 'absent', 'absent'),
(25, 'SAUCC401139', '20', 'ucc', 'sold', '20/09/2019', '24/09/2019', '22', 'Emmanuel Gurah Graham', 'Theresah Agyapomaa', 'female', '', '0242031693', 'cash', '', 'absent', 'absent'),
(26, 'SAUCC758028', '20', 'ucc', 'sold', '20/09/2019', '24/09/2019', '22', 'Emmanuel Gurah Graham', 'Abigail Amponsah Prah', 'female', '', '0571812380', 'cash', '', 'absent', 'absent'),
(27, 'SAUCC879222', '20', 'ucc', 'sold', '20/09/2019', '24/09/2019', '22', 'Emmanuel Gurah Graham', 'Richard Agyei', 'male', '', '0547742724', 'cash', '', 'absent', 'absent'),
(28, 'SAUCC812412', '20', 'ucc', 'sold', '20/09/2019', '24/09/2019', '22', 'Emmanuel Gurah Graham', 'Esther Adjei', 'female', '', '0506097358', 'cash', '', 'absent', 'absent'),
(29, 'SAUCC920943', '20', 'ucc', 'sold', '20/09/2019', '24/09/2019', '22', 'Emmanuel Gurah Graham', 'Conscience Darkenor Tetteh', 'female', '', '0249704694', 'cash', '', 'absent', 'absent'),
(30, 'SAUCC345143', '20', 'ucc', 'sold', '20/09/2019', '24/09/2019', '31', 'Albert Oppong', 'Martin Ampoma Owusu', 'male', '', '0246129315', 'cash', '', 'absent', 'absent'),
(31, 'SAUCC223024', '20', 'ucc', 'sold', '20/09/2019', '24/09/2019', '31', 'Albert Oppong', 'Gloria Narh', 'female', '', '0545053272', 'cash', '', 'absent', 'absent'),
(32, 'SAUCC897475', '20', 'ucc', 'sold', '20/09/2019', '24/09/2019', '3', 'Samuel Osae Bledu', 'Rabiatu Ali Ahmed', 'female', '', '0275154315', 'cash', '', 'absent', 'absent'),
(33, 'SAUCC6315510', '20', 'ucc', 'sold', '20/09/2019', '25/09/2019', '10', 'Prince Yeboah', 'Francisca Agyapong', 'female', '', '0240917509', 'cash', '', 'absent', 'absent'),
(34, 'SAUCC177549', '20', 'ucc', 'sold', '20/09/2019', '25/09/2019', '10', 'Prince Yeboah', 'Dorothy Amponsah', 'male', '', '0553245305', 'cash', '', 'absent', 'absent'),
(35, 'SAUCC157122', '20', 'ucc', 'sold', '20/09/2019', '25/09/2019', '8', 'Ceasar Agbezuhlor', 'Patrick Nda-Arizie Jr', 'male', '', '0505547580', 'cash', '', 'absent', 'absent'),
(36, 'SAUCC949184', '20', 'ucc', 'sold', '20/09/2019', '25/09/2019', '1', 'Aminata Ibrahim', 'ISSAH HALIMATU SAADIA', 'female', '', '0558084965', 'cash', '', 'absent', 'absent'),
(37, 'SAUCC604981', '20', 'ucc', 'sold', '20/09/2019', '25/09/2019', '8', 'Ceasar Agbezuhlor', 'Theresah Buah', 'female', '', '0551554545', 'cash', '', 'absent', 'absent'),
(38, 'SAUCC394595', '20', 'ucc', 'sold', '20/09/2019', '25/09/2019', '22', 'Emmanuel Gurah Graham', 'Edem Efua Mawutor Segbor', 'female', '', '0505896945', 'cash', '', 'absent', 'absent'),
(39, 'SAUCC629193', '20', 'ucc', 'sold', '20/09/2019', '25/09/2019', '22', 'Emmanuel Gurah Graham', 'Gloria Dzogbenyuie', 'female', '', '0543704874', 'cash', '', 'absent', 'absent'),
(40, 'SAUCC591556', '20', 'ucc', 'sold', '20/09/2019', '25/09/2019', '22', 'Emmanuel Gurah Graham', 'Agyapomaa Fatayatu', 'female', '', '0570065887', 'cash', '', 'absent', 'absent'),
(41, 'SAUCC132825', '20', 'ucc', 'sold', '20/09/2019', '26/09/2019', '23', 'Prince Boateng', 'Rexford Ofosu', 'male', '', '0246051215', 'cash', '', 'absent', 'absent'),
(42, 'SAUCC916312', '20', 'ucc', 'sold', '20/09/2019', '26/09/2019', '22', 'Emmanuel Gurah Graham', 'Michael Appiah Junior', 'male', '', '0274489982', 'cash', '', 'absent', 'absent'),
(43, 'SAUCC405409', '20', 'ucc', 'sold', '20/09/2019', '27/09/2019', '23', 'Prince Boateng', 'Ama Adjeiwaa Asante', 'female', '', '0274839829', 'cash', '', 'absent', 'absent'),
(44, 'SAUCC802588', '20', 'ucc', 'sold', '20/09/2019', '27/09/2019', '8', 'Ceasar Agbezuhlor', 'Linda Quaye', 'female', '', '0271163666', 'cash', '', 'absent', 'absent'),
(45, 'SAUCC787943', '20', 'ucc', 'sold', '20/09/2019', '28/09/2019', '23', 'Prince Boateng', 'Solomon Adjatey Tetteh', 'male', '', '0543425887', 'cash', '', 'absent', 'absent'),
(46, 'SAUCC860382', '20', 'ucc', 'sold', '20/09/2019', '28/09/2019', '23', 'Prince Boateng', 'Esther Armstrong-Mensah', 'female', '', '0506008954', 'cash', '', 'absent', 'absent'),
(47, 'SAUCC833276', '20', 'ucc', 'sold', '20/09/2019', '28/09/2019', '23', 'Prince Boateng', 'Ashong Tracy Tetteh', 'female', '', '0246489164', 'cash', '', 'absent', 'absent'),
(48, 'SAUCC628245', '20', 'ucc', 'sold', '20/09/2019', '28/09/2019', '23', 'Prince Boateng', 'Ruth Adjei Asante', 'female', '', '0543560008', 'cash', '', 'absent', 'absent'),
(49, 'SAUCC917401', '20', 'ucc', 'sold', '20/09/2019', '29/09/2019', '15', 'Osborn Botwe', 'Selorm Dzikun', 'male', '', '0506583912', 'cash', '', 'absent', 'absent'),
(50, 'SAUCC157822', '20', 'ucc', 'sold', '20/09/2019', '29/09/2019', '15', 'Osborn Botwe', 'Stephen Okine', 'male', '', '0275849818', 'cash', '', 'absent', 'absent'),
(51, 'SAUCC807604', '20', 'ucc', 'sold', '20/09/2019', '29/09/2019', '23', 'Prince Boateng', 'Linda Awusi Harrison ', 'female', '', '0278468399', 'cash', '', 'absent', 'absent'),
(52, 'SAUCC445323', '20', 'ucc', 'sold', '20/09/2019', '29/09/2019', '23', 'Prince Boateng', 'Emmanuel Acquah Duku', 'male', '', '0556310398', 'cash', '', 'absent', 'absent'),
(53, 'SAUCC252558', '20', 'ucc', 'sold', '20/09/2019', '29/09/2019', '15', 'Osborn Botwe', 'Okyere Evans Aposi', 'male', '', '0547767304', 'cash', '', 'absent', 'absent'),
(54, 'SAUCC610669', '20', 'ucc', 'sold', '20/09/2019', '29/09/2019', '7', 'George Fiifi Danso', 'Amponsah Akwesi Moses', 'male', '', '0547514574', 'cash', '', 'absent', 'absent'),
(55, 'SAUCC289284', '20', 'ucc', 'sold', '20/09/2019', '29/09/2019', '15', 'Osborn Botwe', 'Andoh Emmanuel', 'male', '', '0554502582', 'cash', '', 'absent', 'absent'),
(56, 'SAUCC213742', '20', 'ucc', 'sold', '20/09/2019', '29/09/2019', '23', 'Prince Boateng', 'Moris Adonle-Nweah', 'male', '', '0554652010', 'cash', '', 'absent', 'absent'),
(57, 'SAUCC219055', '20', 'ucc', 'sold', '20/09/2019', '29/09/2019', '23', 'Prince Boateng', 'Stanley Afful', 'male', '', '0242044702', 'cash', '', 'absent', 'absent'),
(58, 'SAUCC136545', '20', 'ucc', 'sold', '20/09/2019', '29/09/2019', '31', 'Albert Oppong', 'Glenys Cofie ', 'female', '', '0507277086', 'cash', '', 'absent', 'absent'),
(59, 'SAUCC166543', '20', 'ucc', 'sold', '20/09/2019', '30/09/2019', '7', 'George Fiifi Danso', 'Cosmos Nabonadam', 'male', '', '0553349407', 'cash', '', 'absent', 'absent'),
(60, 'SAUCC861198', '20', 'ucc', 'sold', '20/09/2019', '30/09/2019', '22', 'Emmanuel Gurah Graham', 'Abigail Nyarko', 'female', '', '0242478684', 'cash', '', 'absent', 'absent'),
(61, 'SAUCC996077', '20', 'ucc', 'sold', '20/09/2019', '30/09/2019', '8', 'Ceasar Agbezuhlor', 'Abigail Odoom', 'female', '', '0542787421', 'cash', '', 'absent', 'absent'),
(62, 'SAUCC336408', '20', 'ucc', 'sold', '20/09/2019', '30/09/2019', '8', 'Ceasar Agbezuhlor', 'Abigail Odoom', 'female', '', '0542787421', 'cash', '', 'absent', 'absent'),
(63, 'SAUCC786989', '20', 'ucc', 'sold', '20/09/2019', '30/09/2019', '7', 'George Fiifi Danso', 'Joshua Addae', 'male', '', '0241823609', 'cash', '', 'absent', 'absent'),
(64, 'SAUCC479476', '20', 'ucc', 'sold', '20/09/2019', '30/09/2019', '8', 'Ceasar Agbezuhlor', 'Mumuni Sule', 'male', '', '0247200452', 'cash', '', 'absent', 'absent'),
(65, 'SAUCC831338', '20', 'ucc', 'sold', '20/09/2019', '30/09/2019', '8', 'Ceasar Agbezuhlor', 'Evans Asante', 'male', '', '0546297784', 'cash', '', 'absent', 'absent'),
(66, 'SAUCC123708', '20', 'ucc', 'sold', '20/09/2019', '30/09/2019', '1', 'Aminata Ibrahim', 'Docia Donbo Degunah', 'female', '', '0559466732', 'cash', '', 'absent', 'absent'),
(67, 'SAUCC661468', '20', 'ucc', 'sold', '20/09/2019', '28/09/2019', '15', 'Osborn Botwe', 'Appah Gideon Yeboah', 'male', '', '0202760412', 'cash', '', 'absent', 'absent'),
(68, 'SAUCC997402', '20', 'ucc', 'sold', '20/09/2019', '30/09/2019', '5', 'Salma Shaibu', 'George Stephens Ganu', 'male', '', '0248981548', 'cash', '', 'absent', 'absent'),
(69, 'SAUCC161977', '20', 'ucc', 'sold', '20/09/2019', '30/09/2019', '5', 'Salma Shaibu', 'Joyous Ocran', 'male', '', '0571764221', 'cash', '', 'absent', 'absent'),
(70, 'SAUCC8184810', '20', 'ucc', 'sold', '20/09/2019', '30/09/2019', '5', 'Salma Shaibu', 'Amanda Efua Gyesi', 'female', '', '0204041859', 'cash', '', 'absent', 'absent'),
(71, 'SAUCC2356810', '20', 'ucc', 'sold', '20/09/2019', '30/09/2019', '22', 'Emmanuel Gurah Graham', 'Dorcas Tia ', 'female', '', '0200706435', 'cash', '', 'absent', 'absent'),
(72, 'SAUCC152077', '20', 'ucc', 'sold', '20/09/2019', '30/09/2019', '15', 'Osborn Botwe', 'Dorcas Jacinta Sulley', 'female', '', '0545148104', 'cash', '', 'absent', 'absent'),
(73, 'SAUCC226318', '20', 'ucc', 'sold', '20/09/2019', '30/09/2019', '23', 'Prince Boateng', 'Tepson Jackline', 'female', '', '0279613205', 'cash', '', 'absent', 'absent'),
(74, 'SAUCC468539', '20', 'ucc', 'sold', '20/09/2019', '30/09/2019', '7', 'George Fiifi Danso', 'Marifa N. Dramani', 'male', '', '0545405651', 'cash', '', 'absent', 'absent'),
(75, 'SAUCC748212', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '23', 'Prince Boateng', 'Martey Jonas', 'male', '', '0554106080', 'cash', '', 'absent', 'absent'),
(76, 'SAUCC698553', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '15', 'Osborn Botwe', 'Owusu Nyanta Eugenia ( Complementary)', 'female', '', '0240681928', 'cash', '', 'absent', 'absent'),
(77, 'SAUCC354679', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '15', 'Osborn Botwe', 'Dadzie Priscilla', 'female', '', '0543577328', 'cash', '', 'absent', 'absent'),
(78, 'SAUCC251459', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '15', 'Osborn Botwe', 'Jennifer Duah (complementary)', 'female', '', '0274773111', 'cash', '', 'absent', 'absent'),
(79, 'SAUCC624339', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '15', 'Osborn Botwe', 'Martey Jonas Nii Odam', 'male', '', '0554106080', 'cash', '', 'absent', 'absent'),
(80, 'SAUCC223814', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '15', 'Osborn Botwe', 'Nora Nartey', 'female', '', '0548393850', 'cash', '', 'absent', 'absent'),
(81, 'SAUCC584998', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '15', 'Osborn Botwe', 'Adogo Eugenia', 'female', '', '0554133023', 'cash', '', 'absent', 'absent'),
(82, 'SAUCC950587', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '15', 'Osborn Botwe', 'Mary Eyram Kpodo', 'female', '', '0240695988', 'cash', '', 'absent', 'absent'),
(83, 'SAUCC522223', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '15', 'Osborn Botwe', 'Seshie Peace Enyo (Complementary))', 'female', '', '0545489134', 'cash', '', 'absent', 'absent'),
(84, 'SAUCC174095', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '15', 'Osborn Botwe', 'Obeng A. Lina (complementary)', 'male', '', '0549149810', 'cash', '', 'absent', 'absent'),
(85, 'SAUCC139726', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '15', 'Osborn Botwe', 'Enoch Mensah (complementary )', 'male', '', '0555510893', 'cash', '', 'absent', 'absent'),
(86, 'SAUCC352588', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '15', 'Osborn Botwe', 'Annor Elsie Anala ( complementary)', 'female', '', '0556524516', 'cash', '', 'absent', 'absent'),
(87, 'SAUCC887046', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '15', 'Osborn Botwe', 'Nathaniel Anaman ( complementary)', 'male', '', '0240758247', 'cash', '', 'absent', 'absent'),
(88, 'SAUCC350144', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '15', 'Osborn Botwe', 'Solace Dede Agbeko ( complementary)', 'female', '', '0554683651', 'cash', '', 'absent', 'absent'),
(89, 'SAUCC677063', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '15', 'Osborn Botwe', 'Fredrick Inkoom Sam', 'male', '', '0502990057', 'cash', '', 'absent', 'absent'),
(90, 'SAUCC288734', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '22', 'Emmanuel Gurah Graham', 'Pearl Ama Dick', 'female', '', '0205017201', 'cash', '', 'absent', 'absent'),
(91, 'SAUCC871314', '20', 'ucc', 'sold', '20/09/2019', '25/09/2019', '10', 'Prince Yeboah', 'Mary Quainoo', 'male', '', '0547611537', 'cash', '', 'absent', 'absent'),
(92, 'SAUCC852443', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '23', 'Prince Boateng', 'Djaba Mawuse Lillian', 'female', '', '0246862811', 'cash', '', 'absent', 'absent'),
(93, 'SAUCC434651', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '23', 'Prince Boateng', 'Abigail Cudjoe', 'female', '', '0546814260', 'cash', '', 'absent', 'absent'),
(94, 'SAUCC605365', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '19', 'Clara Z. Shaibu-Waale', 'Sabina', 'female', '', '0549981110', 'cash', '', 'absent', 'absent'),
(95, 'SAUCC7621510', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '19', 'Clara Z. Shaibu-Waale', 'Shiprah', 'female', '', '0554858281', 'cash', '', 'absent', 'absent'),
(96, 'SAUCC2479110', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '23', 'Prince Boateng', 'Louisa Acquah', 'female', '', '0554805300', 'cash', '', 'absent', 'absent'),
(97, 'SAUCC256356', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '19', 'Clara Z. Shaibu-Waale', 'Ophelia', 'female', '', '0541827305', 'cash', '', 'absent', 'absent'),
(98, 'SAUCC994283', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '23', 'Prince Boateng', 'Viona Osei', 'female', '', '0505622656', 'cash', '', 'absent', 'absent'),
(99, 'SAUCC989058', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '19', 'Clara Z. Shaibu-Waale', 'Theophilus', 'female', '', '0541390993', 'cash', '', 'absent', 'absent'),
(100, 'SAUCC512033', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '19', 'Clara Z. Shaibu-Waale', 'Marion ', 'female', '', '0557523307', 'cash', '', 'absent', 'absent'),
(101, 'SAUCC656327', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '15', 'Osborn Botwe', 'Kudzordzinawo Joseph ( complementary)', 'male', '', '0553877013', 'cash', '', 'absent', 'absent'),
(102, 'SAUCC257534', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '5', 'Salma Shaibu', 'Joycelyn Ohene Agyekum', 'female', '', '0201683184', 'cash', '', 'absent', 'absent'),
(103, 'SAUCC130497', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '19', 'Clara Z. Shaibu-Waale', 'Thelma', 'female', '', '0542689310', 'cash', '', 'absent', 'absent'),
(104, 'SAUCC800519', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '1', 'Aminata Ibrahim', 'Derek Dwomor Sarpong', 'male', '', '0559671237', 'cash', '', 'absent', 'absent'),
(105, 'SAUCC246294', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '1', 'Aminata Ibrahim', 'Osekre Albertina', 'female', '', '0560128748', 'cash', '', 'absent', 'absent'),
(106, 'SAUCC982397', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '31', 'Albert Oppong', 'Adjei Boadi Christabel ', 'female', '', '0541778494', 'cash', '', 'absent', 'absent'),
(107, 'SAUCC321669', '10', 'ucc', 'sold', '20/09/2019', '01/10/2019', '2', 'Purple Softwares', 'Purple Software', 'male', '', '1234567890', 'cash', '', 'absent', 'absent'),
(108, 'SAUCC7998610', 'complimentary', 'ucc', 'sold', '20/09/2019', '01/10/2019', '22', 'Emmanuel Gurah Graham', 'Isaac Osei', 'male', '', '0541982590', 'cash', '', 'absent', 'absent'),
(109, 'SAUCC468327', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '23', 'Prince Boateng', 'Solomon Afetor', 'male', '', '0547232281', 'cash', '', 'absent', 'absent'),
(110, 'SAUCC472509', '20', 'ucc', 'sold', '20/09/2019', '01/10/2019', '19', 'Clara Z. Shaibu-Waale', 'Josephine Awaafo', 'female', '', '0558170691', 'cash', '', 'absent', 'absent'),
(111, 'SAUCC42938', 'complimentary', 'ucc', 'sold', '01/10/2019', '01/10/2019', '22', 'Emmanuel Gurah Graham', 'Tony Chartey Teye', 'male', '', '0260768077', 'cash', '', 'absent', 'absent'),
(112, 'SAUCC265759', '10', 'ucc', 'sold', '01/10/2019', '01/10/2019', '23', 'Prince Boateng', 'Akukor Perfect ', 'female', '', '0552316160', 'cash', '', 'absent', 'absent'),
(113, 'SAUCC136828', '20', 'ucc', 'sold', '01/10/2019', '01/10/2019', '18', 'Prosper Mettle', 'Faustina Shitor', 'female', '', '0548744762', 'cash', '', 'absent', 'absent'),
(114, 'SAUCC447792', '20', 'ucc', 'sold', '01/10/2019', '01/10/2019', '18', 'Prosper Mettle', 'Selina Sakyi', 'female', '', '0570404700', 'cash', '', 'absent', 'absent'),
(115, 'SAUCC243742', '10', 'ucc', 'sold', '01/10/2019', '02/10/2019', '31', 'Albert Oppong', 'Elizabeth Osei', 'female', '', '0200807428', 'cash', '', 'absent', 'absent'),
(116, 'SAUCC745875', '10', 'ucc', 'sold', '01/10/2019', '02/10/2019', '31', 'Albert Oppong', 'Priscilla Nuamah Yeboah', 'female', '', '0551221653', 'cash', '', 'absent', 'absent'),
(117, 'SAUCC955626', 'complimentary', 'ucc', 'sold', '01/10/2019', '02/10/2019', '31', 'Albert Oppong', 'Mary Kabukie kabutey', 'female', '', '0262070466', 'cash', '', 'absent', 'absent'),
(118, 'SAUCC562449', 'complimentary', 'ucc', 'sold', '01/10/2019', '02/10/2019', '31', 'Albert Oppong', 'Winnifred Adjei Boadi', 'female', '', '0547365086', 'cash', '', 'absent', 'absent'),
(119, 'SAUCC413799', '10', 'ucc', 'sold', '01/10/2019', '02/10/2019', '23', 'Prince Boateng', 'Roger Atsu', 'male', '', '0243974697', 'cash', '', 'absent', 'absent'),
(120, 'SAUCC352293', 'complimentary', 'ucc', 'sold', '01/10/2019', '02/10/2019', '23', 'Prince Boateng', 'Prosper Chiantey', 'male', '', '0555783148', 'cash', '', 'absent', 'absent'),
(121, 'SAUCC592389', 'complimentary', 'ucc', 'sold', '01/10/2019', '02/10/2019', '23', 'Prince Boateng', 'Stephen Debrah', 'male', '', '0558276543', 'cash', '', 'absent', 'absent'),
(122, 'SAUCC653558', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(123, 'SAUCC7674110', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(124, 'SAUCC249251', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(125, 'SAUCC348127', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(126, 'SAUCC716635', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(127, 'SAUCC806317', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(128, 'SAUCC996047', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(129, 'SAUCC326129', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(130, 'SAUCC330522', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(131, 'SAUCC874504', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(132, 'SAUCC809408', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(133, 'SAUCC252926', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(134, 'SAUCC274135', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(135, 'SAUCC846016', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(136, 'SAUCC344979', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(137, 'SAUCC607953', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(138, 'SAUCC802436', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(139, 'SAUCC698058', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(140, 'SAUCC185636', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(141, 'SAUCC953195', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(142, 'SAUCC968772', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(143, 'SAUCC664826', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(144, 'SAUCC519136', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(145, 'SAUCC961968', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(146, 'SAUCC739319', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(147, 'SAUCC711866', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(148, 'SAUCC216386', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(149, 'SAUCC248193', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(150, 'SAUCC786928', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(151, 'SAUCC397022', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(152, 'SAUCC973332', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(153, 'SAUCC361679', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(154, 'SAUCC557834', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(155, 'SAUCC579178', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(156, 'SAUCC434171', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(157, 'SAUCC871324', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(158, 'SAUCC905124', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(159, 'SAUCC296409', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(160, 'SAUCC749525', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(161, 'SAUCC777474', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(162, 'SAUCC738341', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(163, 'SAUCC618445', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(164, 'SAUCC829409', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(165, 'SAUCC196029', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(166, 'SAUCC5805110', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(167, 'SAUCC891617', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(168, 'SAUCC352797', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(169, 'SAUCC256993', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(170, 'SAUCC517866', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(171, 'SAUCC139835', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(172, 'SAUCC449589', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(173, 'SAUCC218776', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(174, 'SAUCC152501', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(175, 'SAUCC903912', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(176, 'SAUCC762111', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(177, 'SAUCC307179', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(178, 'SAUCC513665', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(179, 'SAUCC290484', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(180, 'SAUCC187842', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(181, 'SAUCC467675', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(182, 'SAUCC792602', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(183, 'SAUCC2139110', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(184, 'SAUCC711601', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(185, 'SAUCC656625', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(186, 'SAUCC760891', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(187, 'SAUCC898224', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(188, 'SAUCC365902', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(189, 'SAUCC196403', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(190, 'SAUCC875663', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(191, 'SAUCC1739710', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(192, 'SAUCC136666', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(193, 'SAUCC399605', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(194, 'SAUCC778028', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(195, 'SAUCC278261', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(196, 'SAUCC545229', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(197, 'SAUCC860571', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(198, 'SAUCC626492', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(199, 'SAUCC723371', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(200, 'SAUCC670312', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(201, 'SAUCC309714', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(202, 'SAUCC537955', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(203, 'SAUCC351661', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(204, 'SAUCC224891', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(205, 'SAUCC563945', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(206, 'SAUCC874393', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(207, 'SAUCC2030310', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(208, 'SAUCC899386', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(209, 'SAUCC480434', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent'),
(210, 'SAUCC504065', '', 'ucc', 'Available', '01/10/2019', '', '', '', '', '', '', '', '', '', 'absent', 'absent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subadmin`
--
ALTER TABLE `subadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunter`
--
ALTER TABLE `volunter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `voucher` (`voucher`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subadmin`
--
ALTER TABLE `subadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `volunter`
--
ALTER TABLE `volunter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
