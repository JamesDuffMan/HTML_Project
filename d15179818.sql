-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2019 at 05:22 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.0.33-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d15179818`
--

-- --------------------------------------------------------

--
-- Table structure for table `Matches`
--

CREATE TABLE `Matches` (
  `MatchID` int(11) NOT NULL,
  `UserID1` int(11) NOT NULL,
  `UserDI2` int(11) NOT NULL,
  `MatchDate` date NOT NULL,
  `MatchStatus` binary(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Messages`
--

CREATE TABLE `Messages` (
  `MessagesID` int(11) NOT NULL,
  `UserID1` int(11) NOT NULL,
  `UserID2` int(11) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Preferences`
--

CREATE TABLE `Preferences` (
  `PreferencesID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `SeekingGender` enum('Male','Female','Other') NOT NULL,
  `SeekingBeard` enum('Thick','Clean-Shaved','Curly','Straight','Long','Medium','Short') NOT NULL,
  `SeekingRelType` enum('Committed','Playing-Around') NOT NULL,
  `AgeLower` int(11) NOT NULL,
  `AgeUpper` int(11) NOT NULL,
  `DistanceLower` int(11) NOT NULL,
  `DistanceUpper` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Profile`
--

CREATE TABLE `Profile` (
  `UserID` int(11) NOT NULL,
  `Forename` varchar(26) NOT NULL,
  `Surname` varchar(26) NOT NULL,
  `Age` int(3) NOT NULL,
  `Gender` enum('Male','Female','Other') NOT NULL,
  `Beard` enum('Thick','Clean-Shaven','Curly','Straight','Long','Medium','Short') NOT NULL,
  `RelType` enum('Committed','Playing-Around') NOT NULL,
  `Description` blob NOT NULL,
  `Banned` binary(1) NOT NULL,
  `Admin` binary(1) NOT NULL,
  `Photo1` varchar(255) NOT NULL,
  `Photo2` varchar(255) NOT NULL,
  `Photo3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `UserID` int(11) NOT NULL,
  `Email` varchar(52) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Matches`
--
ALTER TABLE `Matches`
  ADD PRIMARY KEY (`MatchID`),
  ADD UNIQUE KEY `UserID1` (`UserID1`),
  ADD UNIQUE KEY `UserDI2` (`UserDI2`);

--
-- Indexes for table `Messages`
--
ALTER TABLE `Messages`
  ADD PRIMARY KEY (`MessagesID`),
  ADD UNIQUE KEY `UserID1` (`UserID1`),
  ADD UNIQUE KEY `UserID2` (`UserID2`);

--
-- Indexes for table `Preferences`
--
ALTER TABLE `Preferences`
  ADD PRIMARY KEY (`PreferencesID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- Indexes for table `Profile`
--
ALTER TABLE `Profile`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UserID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Matches`
--
ALTER TABLE `Matches`
  ADD CONSTRAINT `Matches_ibfk_1` FOREIGN KEY (`UserID1`) REFERENCES `Users` (`UserID`);

--
-- Constraints for table `Messages`
--
ALTER TABLE `Messages`
  ADD CONSTRAINT `Messages_ibfk_1` FOREIGN KEY (`UserID1`) REFERENCES `Users` (`UserID`);

--
-- Constraints for table `Preferences`
--
ALTER TABLE `Preferences`
  ADD CONSTRAINT `Preferences_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `Users` (`UserID`);

--
-- Constraints for table `Profile`
--
ALTER TABLE `Profile`
  ADD CONSTRAINT `Profile_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `Users` (`UserID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
