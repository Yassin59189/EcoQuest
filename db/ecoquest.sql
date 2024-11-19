-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 11:35 PM
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
-- Database: `ecoquest`
--

-- --------------------------------------------------------

--
-- Table structure for table `citoyen`
--

CREATE TABLE `citoyen` (
  `IDcitoyen` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Tel` varchar(8) NOT NULL,
  `Gouvernorat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evenements`
--

CREATE TABLE `evenements` (
  `IDevent` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `eventType` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `eventImage` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evenements`
--

INSERT INTO `evenements` (`IDevent`, `Nom`, `Description`, `Location`, `Date`, `startTime`, `endTime`, `eventType`, `Status`, `eventImage`) VALUES
(2, 'test3', 'yassin ben mosbeh :(', 'ariana', '2024-11-12', '05:42:00', '17:42:00', 'Solo', 'upcomming', '');

-- --------------------------------------------------------

--
-- Table structure for table `partenaires`
--

CREATE TABLE `partenaires` (
  `IDpartenaire` int(11) NOT NULL,
  `role` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `typepartenaire` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `statue` tinyint(1) NOT NULL,
  `dateapplication` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partenaires`
--

INSERT INTO `partenaires` (`IDpartenaire`, `role`, `email`, `password`, `username`, `typepartenaire`, `location`, `tel`, `statue`, `dateapplication`) VALUES
(2, 'partenaire', 'partenaire@test.com', 'test', 'partner', 'ONG', 'kef', '9991779', 0, '2024-11-19 22:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `role`, `Nom`, `username`, `Email`, `password`) VALUES
(1, 'admin', 'yassin', 'yassin59189', 'yassin.59189@gmail.c', '59189');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citoyen`
--
ALTER TABLE `citoyen`
  ADD PRIMARY KEY (`IDcitoyen`);

--
-- Indexes for table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`IDevent`);

--
-- Indexes for table `partenaires`
--
ALTER TABLE `partenaires`
  ADD PRIMARY KEY (`IDpartenaire`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citoyen`
--
ALTER TABLE `citoyen`
  MODIFY `IDcitoyen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `IDevent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `IDpartenaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
