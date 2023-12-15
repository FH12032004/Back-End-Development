-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 03:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alphanous`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `aID` int(11) NOT NULL,
  `DateTime` datetime NOT NULL,
  `sID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`aID`, `DateTime`, `sID`) VALUES
(551, '2023-12-15 00:00:00', 111),
(552, '2023-12-04 00:00:00', 112),
(553, '2023-12-08 00:00:00', 111);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `cID` int(11) NOT NULL,
  `ClassNumber` int(11) NOT NULL,
  `ClassRoom` int(11) NOT NULL,
  `ClassCapacity` int(11) NOT NULL,
  `sID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`cID`, `ClassNumber`, `ClassRoom`, `ClassCapacity`, `sID`) VALUES
(331, 11, 12, 19, 112),
(332, 11, 20, 18, 112);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `pID` int(11) NOT NULL,
  `pName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `PhoneNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`pID`, `pName`, `email`, `PhoneNumber`) VALUES
(221, 'Faris', 'Faris@gmail.com', 97443982),
(222, 'John', 'john@gmail.com', 124231221),
(223, 'Ben', 'ben@gmail.com', 312343134);

-- --------------------------------------------------------

--
-- Table structure for table `studnet`
--

CREATE TABLE `studnet` (
  `sID` int(11) NOT NULL,
  `sName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `medical_infromation` varchar(255) NOT NULL,
  `Grades` int(11) NOT NULL,
  `pID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studnet`
--

INSERT INTO `studnet` (`sID`, `sName`, `email`, `medical_infromation`, `Grades`, `pID`) VALUES
(111, 'James', 'james@gmail.com', 'Has breathing difficulty', 8, 222),
(112, 'Greg', 'Greg@gmail.com', 'nothing', 11, 222),
(113, 'Kane', 'Kane@gmail.com', 'has a leg injury', 5, 222);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tID` int(11) NOT NULL,
  `tName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `AnnualSalary` int(11) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `BackgroundCheck` varchar(255) NOT NULL,
  `cID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tID`, `tName`, `Address`, `email`, `AnnualSalary`, `PhoneNumber`, `BackgroundCheck`, `cID`) VALUES
(223, 'Harry', 'L45 6MD', 'Harry@gmail.com', 11, 312343134, 'From England, London', 332),
(225, 'Kane', 'L45 6MD', 'kane@gmail.com', 11, 312343134, 'From England, London', 332),
(226, 'Greg', 'L45 6MD', 'Greg@gmail.com', 12, 312343134, 'From England, London', 332);

-- --------------------------------------------------------

--
-- Table structure for table `teachingassistance`
--

CREATE TABLE `teachingassistance` (
  `taID` int(11) NOT NULL,
  `taName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `AnualSalary` int(11) NOT NULL,
  `BackgroundCheck` varchar(255) NOT NULL,
  `tID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachingassistance`
--

INSERT INTO `teachingassistance` (`taID`, `taName`, `Address`, `Email`, `Telephone`, `AnualSalary`, `BackgroundCheck`, `tID`) VALUES
(443, 'Gwen', 'M66 7JI', 'gwen@gmail.com', 34343443, 15, 'from England, Manchester', 223);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `CreateDatatime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `email`, `password`, `CreateDatatime`) VALUES
(1, 'Faris', 'Faris@gmail.com', '5c1a58227fbd101e7bd31251ceb7b6b6', '2023-12-14 15:10:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`aID`),
  ADD KEY `sID` (`sID`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`cID`),
  ADD KEY `sID` (`sID`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`pID`);

--
-- Indexes for table `studnet`
--
ALTER TABLE `studnet`
  ADD PRIMARY KEY (`sID`),
  ADD KEY `pID` (`pID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tID`),
  ADD KEY `cID` (`cID`);

--
-- Indexes for table `teachingassistance`
--
ALTER TABLE `teachingassistance`
  ADD PRIMARY KEY (`taID`),
  ADD KEY `tID` (`tID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`sID`) REFERENCES `studnet` (`sID`);

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`sID`) REFERENCES `studnet` (`sID`);

--
-- Constraints for table `studnet`
--
ALTER TABLE `studnet`
  ADD CONSTRAINT `studnet_ibfk_1` FOREIGN KEY (`pID`) REFERENCES `parent` (`pID`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`cID`) REFERENCES `class` (`cID`);

--
-- Constraints for table `teachingassistance`
--
ALTER TABLE `teachingassistance`
  ADD CONSTRAINT `teachingassistance_ibfk_1` FOREIGN KEY (`tID`) REFERENCES `teacher` (`tID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
