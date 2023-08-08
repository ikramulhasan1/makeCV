-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2023 at 12:30 PM
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
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `eid` int(100) NOT NULL,
  `etitle` varchar(100) NOT NULL,
  `eversity` varchar(100) NOT NULL,
  `epassyear` varchar(100) NOT NULL,
  `elanguage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`eid`, `etitle`, `eversity`, `epassyear`, `elanguage`) VALUES
(1, '', '', '', 'Select');

-- --------------------------------------------------------

--
-- Table structure for table `jobrequred`
--

CREATE TABLE `jobrequred` (
  `jobid` int(100) NOT NULL,
  `jobskill` varchar(100) NOT NULL,
  `jobcareer` text NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `jobsubtitle` varchar(100) DEFAULT NULL,
  `jobexperience` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobrequred`
--

INSERT INTO `jobrequred` (`jobid`, `jobskill`, `jobcareer`, `jobtitle`, `jobsubtitle`, `jobexperience`) VALUES
(1, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `personalinfo`
--

CREATE TABLE `personalinfo` (
  `pid` int(100) NOT NULL,
  `pfname` varchar(100) NOT NULL,
  `plname` varchar(100) NOT NULL,
  `pemail` varchar(100) NOT NULL,
  `pphone` varchar(100) NOT NULL,
  `pdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personalinfo`
--

INSERT INTO `personalinfo` (`pid`, `pfname`, `plname`, `pemail`, `pphone`, `pdate`) VALUES
(1, 'Ikramul', 'Hasan', 'hasanikramul926@gmail.com', '01638846367', '0000-00-00'),
(2, 'Ikramul', 'Hasan', 'hasanikramul926@gmail.com', '01638846367', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `jobrequred`
--
ALTER TABLE `jobrequred`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `personalinfo`
--
ALTER TABLE `personalinfo`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `eid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobrequred`
--
ALTER TABLE `jobrequred`
  MODIFY `jobid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personalinfo`
--
ALTER TABLE `personalinfo`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
