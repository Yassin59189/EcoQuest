-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 10:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id_Donation` int(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id_Donation`, `nom`, `prenom`, `email`, `amount`) VALUES
(1, 'ismail', 'Turki', 'turkiismail07@gmail.com', 700),
(6, 'ismail', 'Turki', 'ismailturki.dev@bebouncy.com', 700),
(7, 'h', 'h', 'turkiismail07@gmail.com', 800);

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
(0, 4, '2024-12-10 17:27:36', 'A'),
(0, 0, '2024-12-10 17:54:44', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `recompance`
--

CREATE TABLE `recompance` (
  `reco_ID` int(11) NOT NULL,
  `reco_title` varchar(30) NOT NULL,
  `reco_partnerID` int(11) NOT NULL,
  `reco_quantity` int(11) NOT NULL,
  `reco_Discription` varchar(250) NOT NULL,
  `partenaireName` varchar(30) NOT NULL,
  `recoPicture` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recompance`
--

INSERT INTO `recompance` (`reco_ID`, `reco_title`, `reco_partnerID`, `reco_quantity`, `reco_Discription`, `partenaireName`, `recoPicture`) VALUES
(9, 'vr', 0, 30, 'vrvr', 'ismailturki', '1733765110.jpg'),
(10, 'bracelet', 0, 30, 'lether organic material', 'ismailturki', '1733850354.png'),
(11, 'glasses', 0, 12, 'Organic glasses are polymers w', 'ismailturki', '1733850472.png'),
(12, 'Snacker Gift Box', 0, 10, 'For the loved ones we care for', 'ismailturki', '1733850646.png'),
(13, 'Snacker Gift Box', 0, 10, 'For the loved ones we care for and the health frea', 'ismailturki', '1733850646.png');

-- --------------------------------------------------------

--
-- Table structure for table `requestrecompance`
--

CREATE TABLE `requestrecompance` (
  `idReqReco` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `picture` varchar(20) NOT NULL,
  `IDpartner` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requestrecompance`
--

INSERT INTO `requestrecompance` (`idReqReco`, `title`, `quantity`, `description`, `picture`, `IDpartner`, `status`) VALUES
(1, 'vr', 30, 'vrvr', '1733765110.jpg', 0, 'accepted'),
(2, 'bracelet', 30, 'lether organic material', '1733850354.png', 0, 'accepted'),
(3, 'glasses', 12, 'Organic glasses are polymers with an irregular seq', '1733850472.png', 0, 'accepted'),
(4, 'Snacker Gift Box', 10, 'For the loved ones we care for and the health frea', '1733850646.png', 0, 'accepted');

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
(4, 'citoyen', 'yassin ben mosbeh', 'yassin59189', 'msbs59189@gmail.com', '$2y$10$MLB/fw6dWs3a/hC9YfYBhefYitu0v4unGUswSwgNllLob7H/CNseC', 'tunis', '56650772'),
(5, 'citoyen', 'ismailturki', 'ismail', 'turkiismail08@gmail.com', '$2y$10$QMFbNIbl7vr/r.M3eZ2KZu2bRxn0JZzAZYDj3VlGIZto2iicnJHsq', 'ariana', '93199900'),
(6, 'citoyen', 'ines mlaouhi', 'mlew7i', 'ines.mlaouhi.pro@gmail.com', '$2y$10$QVEuXJb.ssFXQoTvtYjZnuBqrZ3Ka4og/YqvP7/zGPzCByG4XToci', 'rawed', '52997792');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citoyen`
--
ALTER TABLE `citoyen`
  ADD PRIMARY KEY (`IDcitoyen`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id_Donation`);

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
-- Indexes for table `recompance`
--
ALTER TABLE `recompance`
  ADD PRIMARY KEY (`reco_ID`);

--
-- Indexes for table `requestrecompance`
--
ALTER TABLE `requestrecompance`
  ADD PRIMARY KEY (`idReqReco`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id_Donation` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `IDpartenaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recompance`
--
ALTER TABLE `recompance`
  MODIFY `reco_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `requestrecompance`
--
ALTER TABLE `requestrecompance`
  MODIFY `idReqReco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
