-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 06:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblactivities`
--

CREATE TABLE `tblactivities` (
  `ActivityID` int(10) NOT NULL,
  `ActivityName` varchar(25) NOT NULL,
  `ActivityDescription` varchar(100) NOT NULL,
  `ActivityDate` date NOT NULL,
  `ActivityTime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblactivities`
--

INSERT INTO `tblactivities` (`ActivityID`, `ActivityName`, `ActivityDescription`, `ActivityDate`, `ActivityTime`) VALUES
(1, 'Elderly Yoga', 'Will be doing yoga to ensure flexibility and joint strength', '2023-04-28', '10:30:00.000000'),
(2, 'Board Games', 'Playing board games to work the mind with fun', '2023-05-02', '18:20:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `CustomerID` int(10) NOT NULL,
  `CFName` varchar(50) NOT NULL,
  `CLName` varchar(50) NOT NULL,
  `CPassword` varchar(40) NOT NULL,
  `CPNumber` varchar(15) NOT NULL,
  `CEmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblenrolled`
--

CREATE TABLE `tblenrolled` (
  `EnrolledID` int(10) NOT NULL,
  `CustomerID` int(10) NOT NULL,
  `EFName` varchar(50) NOT NULL,
  `ELName` varchar(40) NOT NULL,
  `EMedicalR` varchar(100) NOT NULL,
  `EAge` int(3) NOT NULL,
  `ERoomType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `StaffID` int(10) NOT NULL,
  `StaffFirstName` varchar(15) NOT NULL,
  `StaffLastName` varchar(15) NOT NULL,
  `StaffEmail` varchar(40) NOT NULL,
  `StaffPNumber` varchar(15) NOT NULL,
  `StaffQualification` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`StaffID`, `StaffFirstName`, `StaffLastName`, `StaffEmail`, `StaffPNumber`, `StaffQualification`) VALUES
(1, 'Madelyn', 'Gerrome', 'mjerrome0@alexa.com', '408-582-2396', '5 years as a live-in nurse.'),
(2, 'Justus', 'Zarb', 'jzarb1@time.com', '296-427-9548', 'Graduated from University of Care'),
(3, 'Fionna', 'Datte', 'fdatte2@guardian.co.uk', '132-118-7638', 'Graduated from University of Care, 3 years experience with elderly care.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblactivities`
--
ALTER TABLE `tblactivities`
  ADD PRIMARY KEY (`ActivityID`);

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `tblenrolled`
--
ALTER TABLE `tblenrolled`
  ADD PRIMARY KEY (`EnrolledID`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`StaffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblactivities`
--
ALTER TABLE `tblactivities`
  MODIFY `ActivityID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `CustomerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblenrolled`
--
ALTER TABLE `tblenrolled`
  MODIFY `EnrolledID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `StaffID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
