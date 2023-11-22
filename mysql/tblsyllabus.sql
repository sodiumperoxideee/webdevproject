-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 03:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbschedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblsyllabus`
--

CREATE TABLE `tblsyllabus` (
  `Syllabus_ID` int(11) NOT NULL,
  `Subject_ID` int(11) DEFAULT NULL,
  `Syllabus_Code` varchar(100) NOT NULL,
  `Syllabus_Author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblsyllabus`
--
ALTER TABLE `tblsyllabus`
  ADD PRIMARY KEY (`Syllabus_ID`),
  ADD KEY `fksyllabus` (`Subject_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblsyllabus`
--
ALTER TABLE `tblsyllabus`
  MODIFY `Syllabus_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblsyllabus`
--
ALTER TABLE `tblsyllabus`
  ADD CONSTRAINT `fksyllabus` FOREIGN KEY (`Subject_ID`) REFERENCES `tblsubjects` (`Subject_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
