-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2020 at 05:07 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', 'Test@8768', '24-06-2020 03:56:48 PM');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(20) NOT NULL,
  `patient` varchar(25) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `timeslot` varchar(30) NOT NULL,
  `fees` int(10) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(70) NOT NULL,
  `disease` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `patient`, `doctor`, `date`, `timeslot`, `fees`, `contact`, `address`, `disease`) VALUES
(1, 'akramulali9723@gmail.com', 'Dr. Anjila Aneja', '2020-06-05', '11:00-12:00 a.m.', 1000, '8145220128', 'hii', 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `doctorName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `docFees` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `docEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'Cardiologist', 'Dr. Monaksh Shah', 'hii', '10000', 8145220125, 'akjjjjj@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-06-24 10:15:46', NULL),
(2, 'Cardiologist', 'akram', 'mumbai', '10000', 8145220125, 'akramul@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-06-24 10:21:38', NULL),
(3, 'Cardiologist', 'Dr. Monaksh Shah', 'MUMBAI', '10000', 8145220125, 'akramul6@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-06-25 10:50:40', NULL),
(4, 'DENTAL', 'akramul', 'mumbai', '10000', 8145220128, 'akramul67@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-06-25 14:02:19', NULL),
(5, 'DENTAL', 'akram', 'mumbai', '10000', 8145220125, 'akramul69@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-06-25 14:16:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctorsignup`
--

CREATE TABLE `doctorsignup` (
  `fullname` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorsignup`
--

INSERT INTO `doctorsignup` (`fullname`, `phonenumber`, `email`, `password`) VALUES
('Sk Akramul', '7045053487', 'akramulali8@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
('Sk Akramul Ali', '8145220128', 'akramulali97234@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(16, 'Cardiologist', '2020-06-25 10:49:35', '2020-06-25 10:49:35'),
(17, 'DENTAL', '2020-06-25 11:03:34', '2020-06-25 11:03:34'),
(18, 'DENTAList', '2020-06-25 14:01:40', '2020-06-25 14:01:40');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('male','female','others') NOT NULL,
  `birthday` date NOT NULL,
  `Height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `Marital` enum('Single','married','Divorced','Legally Separated','Widowed') NOT NULL,
  `textarea` varchar(50) NOT NULL,
  `f2name` varchar(20) NOT NULL,
  `Relationship` varchar(15) NOT NULL,
  `Contact2` varchar(15) NOT NULL,
  `Postal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`name`, `email`, `gender`, `birthday`, `Height`, `weight`, `Contact`, `Marital`, `textarea`, `f2name`, `Relationship`, `Contact2`, `Postal`) VALUES
('akram', 'technicalakramul7@gmail.com', 'male', '2020-05-06', '15', '15', '8145220128', 'Single', 'knkjbb', 'Sk akram', 'friend', '4542 555555', '400011'),
('Sk  Akramul Ali', 'akramulali8067@gmail.com', 'male', '2020-05-12', '15', '50', '8145220128', 'Single', 'mumbai 400011', 'SK Akramul ALi', 'fr', '', ''),
('Sk  Akramul Ali', 'akramulali8067@gmail.com', 'male', '2020-05-12', '15', '50', '8145220128', 'Single', 'mumbai 400011', 'SK Akramul ALi', 'friend', '7045053487', '400011'),
('Sk  Akramul Ali', 'akramulali8067@gmail.com', 'male', '2020-05-12', '15', '50', '8145220128', 'Single', 'mumbai 400011', 'SK Akramul ALi', 'friend', '7045053487', '400011'),
('akram', 'technicalakramul7@gmail.com', 'male', '2020-05-05', '15', '15', '8', 'Single', 'ss', 'kkl', 'inkk', 'knl', 'kml'),
('', '', 'male', '0000-00-00', '', '', '', '', '', '', '', '', ''),
('', '', 'male', '0000-00-00', '', '', '', '', '', '', '', '', ''),
('', '', 'male', '0000-00-00', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patientsignup`
--

CREATE TABLE `patientsignup` (
  `fullname` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientsignup`
--

INSERT INTO `patientsignup` (`fullname`, `phonenumber`, `email`, `password`) VALUES
('Sk Akramul Ali', '7045053487', 'akramulali8@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
('Sk Akramul', '8145220128', 'akramulali8067@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(' Akramul ali', '4562555582', 'akramulali97234@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
('akrama ali', '8452255622', 'akramulali9723@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `quickcontact`
--

CREATE TABLE `quickcontact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `textarea` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quickcontact`
--

INSERT INTO `quickcontact` (`name`, `email`, `textarea`) VALUES
('akramul', 'technicalakramul7@gmail.com', 'hiii'),
('akramul', 'technicalakramul7@gmail.com', 'hiii'),
('akramul', 'akramulali8@gmail.com', 'hiii'),
('Sk  Akramul Ali', 'akramulali8067@gmail.com', 'hi'),
('Sk  Akramul Ali', 'akramulali8067@gmail.com', 'hii'),
('Sk  Akramul Ali', 'technicalakramul7@gmail.com', 'hhi'),
('Sk  Akramul Ali', 'technicalakramul7@gmail.com', 'hhi'),
('akram', 'akramulali8067@gmail.com', 'gg'),
('Sk  Akramul Ali', 'akramulali8067@gmail.com', 'hiiii');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `ID` int(10) NOT NULL,
  `Docid` int(10) DEFAULT NULL,
  `PatientName` varchar(200) DEFAULT NULL,
  `PatientContno` bigint(10) DEFAULT NULL,
  `PatientEmail` varchar(200) DEFAULT NULL,
  `PatientGender` varchar(50) DEFAULT NULL,
  `PatientAdd` mediumtext DEFAULT NULL,
  `PatientAge` int(10) DEFAULT NULL,
  `PatientMedhis` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`ID`, `Docid`, `PatientName`, `PatientContno`, `PatientEmail`, `PatientGender`, `PatientAdd`, `PatientAge`, `PatientMedhis`, `CreationDate`) VALUES
(1, 1, 'akramul', 8145220128, 'akramulali8@gmail.com', 'male', 'hii', 21, 'nothing', '2020-06-24 10:17:55'),
(2, 1, 'akramul', 8145220128, 'akramulali8@gmail.com', 'male', 'hi', 21, 'nothing', '2020-06-24 10:20:33'),
(3, 1, 'akramul', 8145220128, 'akramulali8@gmail.com', 'male', 'MUMBAI', 21, 'NOTHING', '2020-06-25 10:51:26'),
(4, 1, 'akramul ali', 8145220128, 'akramulali88@gmail.com', 'male', 'mumbai', 21, 'nothing', '2020-06-25 14:03:15'),
(5, 1, 'akramul ali sk', 8145220128, 'akramulali8@gmail.com', 'male', 'mumbai', 21, 'mumbai', '2020-06-25 14:10:57'),
(6, 1, 'sk akramul ali', 8145220128, 'akramulali8@gmail.com', 'male', 'mumbai', 21, 'nothing', '2020-06-25 14:17:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
