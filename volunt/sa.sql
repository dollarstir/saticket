-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 02, 2019 at 12:55 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Administrator', 'admin@sa.com', 'sa2019');

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

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `inv`, `name`, `level`, `contact`, `datesold`, `venue`, `do`, `status`) VALUES
(30, 'SA37132', 'Sammy Valco', 'sammy@gmail.com', '023678565654', '10', 'UG-LEGON', 'Apr 20th, 2019', 'Delivered'),
(31, 'SA83897', 'Kent Baidoo Bonsoe', 'purplesoftwares@gmail.com', '02020333424', '3', 'UNIVERSITY OF CAPE COAST-UCC', 'Apr 20th, 2019', 'Pending'),
(32, 'SA12675', 'Joshua Tetteh', 'kpin463@gmail.com', '044444', '231', 'KNUST-Kumasi', 'Apr 20th, 2019', 'Delivered'),
(33, 'SA29528', 'Kent Baidoo Bonsoe', 'purplesoftwares@gmail.com', '044444', '10', 'UCC-CAPE COST', 'Apr 20th, 2019', 'Delivered'),
(34, 'SA99006', 'Purple', 'purplesoftwares@gmail.com', '023678565654', '3', 'UCC-CAPE COST', 'Apr 20th, 2019', 'Delivered'),
(35, 'SAKT8169', 'Josh Pong', '200', '0556676471', '19/06/2019', 'knust', 'King Pin', 'pending'),
(36, 'SAUG58', 'Frederick Ennin', '100', '0240832452', '19/06/2019', 'legon', 'Dollarstir', 'pending');

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
  `status` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunter`
--

INSERT INTO `volunter` (`id`, `name`, `username`, `contact`, `stuid`, `hall`, `rno`, `location`, `dateadded`, `status`, `password`) VALUES
(1, 'Dollarstir', 'sa190556676471', '0556676471', 'DS/ADM/18/0019', 'Valco Hall', 'A012', 'legon', '19/06/19', 'active', 'sap4849'),
(2, 'King Pin', 'sa190556676477', '0556676477', 'DS/ADM/18/0019', 'Valco Hall', 'A012', 'legon', '19/06/19', 'active', 'sap1808'),
(3, 'King Pin', 'sa190556676479', '0556676479', 'DS/ADM/18/0010', 'Valco Hall', 'A012', 'knust', '19/06/19', 'active', 'sap2843');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `voucher` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `dateadded` varchar(200) NOT NULL,
  `datesold` varchar(200) NOT NULL,
  `soldby` varchar(200) NOT NULL,
  `volid` varchar(200) NOT NULL,
  `soldto` varchar(200) NOT NULL,
  `stcont` varchar(200) NOT NULL,
  `mop` varchar(200) NOT NULL,
  `momoRef` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `voucher`, `location`, `status`, `dateadded`, `datesold`, `soldby`, `volid`, `soldto`, `stcont`, `mop`, `momoRef`) VALUES
(1, 'SAUG58', 'legon', 'sold', '19/06/19', '19/06/2019', 'Dollarstir', '1', 'Frederick Ennin', '0240832452', 'cash', ''),
(2, 'SAUG4859', 'legon', 'Sold', '19/06/19', '', '', '', '', '', '', ''),
(3, 'SAUG2868', 'legon', 'Sold', '19/06/19', '', '', '', '', '', '', ''),
(4, 'SAUG4672', 'legon', 'Sold', '19/06/19', '', '', '', '', '', '', ''),
(5, 'SAUG6447', 'legon', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(6, 'SAUG7132', 'legon', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(7, 'SAUG5624', 'legon', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(8, 'SAUG8273', 'legon', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(11, 'SAUC2927', 'ucc', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(12, 'SAUC9546', 'ucc', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(13, 'SAUC7199', 'ucc', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(14, 'SAUC4294', 'ucc', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(15, 'SAUC5839', 'ucc', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(16, 'SAUC4062', 'ucc', 'Sold', '19/06/19', '', '', '', '', '', '', ''),
(17, 'SAKT8169', 'knust', 'sold', '19/06/19', '19/06/2019', 'King Pin', '3', 'Josh Pong', '0556676471', 'momo', '6093311858'),
(18, 'SAKT2482', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(19, 'SAKT1376', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(20, 'SAKT6901', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(21, 'SAKT1904', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(22, 'SAKT9004', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(23, 'SAKT3354', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(24, 'SAKT2956', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(25, 'SAKT5268', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(26, 'SAKT5941', 'knust', 'Sold', '19/06/19', '', '', '', '', '', '', ''),
(27, 'SAKT4897', 'knust', 'Sold', '19/06/19', '', '', '', '', '', '', ''),
(28, 'SAKT8185', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(29, 'SAKT5960', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(30, 'SAKT2644', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(31, 'SAKT6685', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(32, 'SAKT5075', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(33, 'SAKT5237', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(34, 'SAKT6797', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(35, 'SAKT1231', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(36, 'SAKT4053', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(37, 'SAKT9676', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(38, 'SAKT305', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(39, 'SAKT7059', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(40, 'SAKT1710', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', ''),
(41, 'SAKT8888', 'knust', 'Available', '19/06/19', '', '', '', '', '', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `volunter`
--
ALTER TABLE `volunter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
