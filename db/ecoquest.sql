-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 05:48 PM
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
(0, 'Event a venir', 'Event a venir', 'Tunis', '2024-12-11', '24:37:28', '25:37:28', 'Individuele', '', ''),
(9, 'test 1', 'gfdgfd', 'gdffd', '2024-11-01', '07:31:00', '19:31:00', 'Teams', 'upcomming', '');

-- --------------------------------------------------------

--
-- Table structure for table `partenaires`
--

CREATE TABLE `partenaires` (
  `IDpartenaire` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `role` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `vertical` varchar(30) NOT NULL,
  `businessName` varchar(100) NOT NULL,
  `location` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `statue` enum('P','A','D') NOT NULL DEFAULT 'P',
  `dateapplication` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partenaires`
--

INSERT INTO `partenaires` (`IDpartenaire`, `firstname`, `lastname`, `role`, `email`, `password`, `username`, `vertical`, `businessName`, `location`, `tel`, `statue`, `dateapplication`, `message`) VALUES
(4, 'yassin', 'ben mosbeh', 'partner', 'wecab@gmail.com', '', '', 'Green Technology', 'WeCab', 'Mountain View California', '56650772', 'P', '2024-12-08 21:33:24', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `idevent` int(11) NOT NULL,
  `idutilsateur` int(11) NOT NULL,
  `dateparticipation` timestamp NOT NULL DEFAULT current_timestamp(),
  `team` enum('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`idevent`, `idutilsateur`, `dateparticipation`, `team`) VALUES
(9, 1, '2024-11-26 18:32:09', 'A'),
(9, 1, '2024-11-26 22:10:47', 'A'),
(9, 2, '2024-11-26 22:14:16', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `tel` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `role`, `Nom`, `username`, `Email`, `password`, `adresse`, `tel`) VALUES
(1, 'admin', 'yassin', 'yassin59189', 'yassin.59189@gmail.com', '59189', 'tunis', '56650772'),
(2, 'citoyen', 'isamil', 'ismail59189', 'yassine.msbs@gmail.com', '59189', 'ariena', '56650772'),
(4, 'citoyen', 'yassin ben mosbeh', 'yassin59189', 'msbs59189@gmail.com', '$2y$10$MLB/fw6dWs3a/hC9YfYBhefYitu0v4unGUswSwgNllLob7H/CNseC', 'tunis', '56650772');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `IDpartenaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
