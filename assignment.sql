-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 10:01 AM
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
(1, 'Gibbie Gocher', 'transform innovative architectures', '2023-04-28', '00:45:00.000000'),
(2, 'Avram Tirone', 'extend impactful interfaces', '2022-08-13', '06:22:00.000000'),
(3, 'Stefania McGerraghty', 'facilitate B2B models', '2023-06-13', '00:00:00.000000'),
(4, 'Lurette Burg', 'aggregate interactive web-readiness', '2022-10-29', '00:00:00.000000'),
(5, 'Ulric Segebrecht', 'brand world-class infrastructures', '2023-06-02', '00:00:00.000000');

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
(1, 'Madelyn', 'Jerrome', 'mjerrome0@alexa.com', '408-582-2396', 'enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non'),
(2, 'Justus', 'Zarb', 'jzarb1@time.com', '296-427-9548', 'montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque'),
(3, 'Fionna', 'Datte', 'fdatte2@guardian.co.uk', '132-118-7638', 'quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu '),
(4, 'Ashleigh', 'Frome', 'afrome3@fotki.com', '895-615-2816', 'odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet era'),
(5, 'Kacie', 'Taber', 'ktaber4@ifeng.com', '731-452-3333', 'donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis'),
(6, 'Griswold', 'Somes', 'gsomes5@uol.com.br', '213-643-8110', 'ultrices mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla pede ullamcorper'),
(24, 'Neeto', 'Eatto', 'Meatto@met.com', '744-744-7444', 'aksdjakfjagadgjsdgnjsodngosgosjigsgsgsgsgsgg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblactivities`
--
ALTER TABLE `tblactivities`
  ADD PRIMARY KEY (`ActivityID`);

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
  MODIFY `ActivityID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `StaffID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
