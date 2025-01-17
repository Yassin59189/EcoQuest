-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2025 at 09:08 PM
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
  `eventImage` varchar(20) NOT NULL,
  `trash` float NOT NULL,
  `Googlemaps` text NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evenements`
--

INSERT INTO `evenements` (`IDevent`, `Nom`, `Description`, `Location`, `Date`, `startTime`, `endTime`, `eventType`, `Status`, `eventImage`, `trash`, `Googlemaps`) VALUES
(0, 'Game Jam', 'dsdssd', 'test', '2025-01-24', '23:28:00', '15:30:00', 'Team', 'done', '1736887488.PNG', 42.6, ''),
(1, 'Save Bougarnine ', 'Niché au cœur de sommets majestueux et de paysages verdoyants, le Mont Bogranin était autrefois un sanctuaire de beauté naturelle et un refuge pour une faune diversifiée. Cependant, l\'invasion de la pollution plastique a transformé cet écrin de sérénité en un territoire défiguré. Les ruisseaux scintillent sous le poids des bouteilles abandonnées, les prairies sont jonchées de déchets, et les animaux luttent pour survivre dans un environnement dégradé.<br/>\r\n\r\nCet événement réunit la communauté dans un effort commun pour redonner vie au Mont Bogranin. Ensemble, redonnez à cet écosystème fragile son éclat d\'antan, et découvrez la force de la nature lorsqu\'elle est soutenue par la volonté et l\'engagement humain.', 'Bougarnine gathering point', '2024-12-11', '23:41:00', '16:38:00', 'Team', 'done', '1737027946.jpg', 42.6, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.9812462993996!2d10.3407283432414!3d36.723011632553884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd492853767953%3A0xa8e8e6f1d414ac36!2sBougarnine%20gathering%20point!5e0!3m2!1sfr!2stn!4v1737054313038!5m2!1sfr!2stn'),
(9, 'test 1', 'gfdgfd', 'gdffd', '2024-11-01', '07:31:00', '19:31:00', 'Teams', 'upcomming', '1733872309.jpg', 30, '');


-- --------------------------------------------------------

--
-- Table structure for table `eventmaterials`
--

CREATE TABLE `eventmaterials` (
  `idcol` int(11) NOT NULL,
  `idmat` int(11) NOT NULL,
  `idevent` int(11) NOT NULL,
  `nommat` varchar(100) NOT NULL,
  `qty` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eventmaterials`
--

INSERT INTO `eventmaterials` (`idcol`, `idmat`, `idevent`, `nommat`, `qty`) VALUES
(31, 2, 0, 'Plastic', 10),
(32, 3, 0, 'Métal', 10),
(33, 4, 0, 'Papier et carton', 10),
(34, 5, 0, 'Verre', 10),
(35, 6, 0, 'Déchets organiques', 10),
(36, 2, 1, 'Plastic', 13),
(37, 3, 1, 'Métal', 40),
(38, 4, 1, 'Papier et carton', 4),
(39, 5, 1, 'Verre', 5),
(40, 6, 1, 'Déchets organiques', 3);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `idFAQ` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`idFAQ`, `question`, `answer`) VALUES
(1, 'question1: Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(2, 'question2: Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `banner` varchar(250) NOT NULL,
  `about` text NOT NULL,
  `aboutimg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `banner`, `about`, `aboutimg`) VALUES
(1, '', ' - Join us to make our planet cleaner and healthier. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nihil corporis soluta temporibus minus ea asperiores molestiae voluptate praesentium nesciunt voluptatibus, tempora veritatis autem repellendus sequi, maxime alias, numquam officia?', '1737030849.png');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `idmat` int(11) NOT NULL,
  `nommat` varchar(100) NOT NULL,
  `qty` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`idmat`, `nommat`, `qty`) VALUES
(2, 'Plastic', 23),
(3, 'Métal', 50),
(4, 'Papier et carton', 14),
(5, 'Verre', 15),
(6, 'Déchets organiques', 13);

-- --------------------------------------------------------

--
-- Table structure for table `partenaires`
--

CREATE TABLE `partenaires` (
  `IDpartenaire` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
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

INSERT INTO `partenaires` (`IDpartenaire`, `iduser`, `nom`, `email`, `businessName`, `location`, `tel`, `statue`, `dateapplication`, `message`) VALUES
(4, 1, 'yassin', 'wecab@gmail.com', 'WeCab', 'Mountain View California', '56650772', 'A', '2025-01-15 22:46:12', 'test'),
(5, 1, 'test', 'wecab@gmail.com', 'WeCab', 'Mountain View California', '56650772', 'A', '2025-01-15 22:46:12', 'test'),
(6, 1, 'testtt', 'wecab@gmail.com', 'WeCab', 'Mountain View California', '56650772', 'A', '2025-01-15 22:46:12', 'test'),
(7, 1, 'test', 'wecab@gmail.com', 'WeCab', 'Mountain View California', '56650772', 'D', '2025-01-15 22:46:12', 'testttt'),
(8, 1, 'yassin', 'lorem@gmail.com', 'fsdf', 'fsdfsd', '56650772', 'D', '2025-01-15 22:46:12', 'fdsfsd'),
(9, 1, 'yassin', 'lorem@gmail.com', 'fsdf', 'fsdfsd', '56650772', 'A', '2025-01-15 22:46:12', 'fdsfsd'),
(15, 1, 'yassin', 'wecab@gmail.com', 'wecab 2', 'tunis', '56650772', 'A', '2025-01-15 22:46:12', 'test test etst'),
(16, 1, 'yassin', 'wecab@gmail.com', 'wecab 2', 'tunis', '56650772', 'D', '2025-01-15 22:46:12', 'test test etst'),
(20, 6, 'Yassin Ben Mosbeh', 'yassin@gmail.com', 'yassinBusiness', 'tunis', '56650772', 'A', '2025-01-15 22:59:54', 'yassin ben mosbeh business');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `idparticipant` int(11) NOT NULL,
  `idevent` int(11) NOT NULL,
  `idutilsateur` int(11) NOT NULL,
  `dateparticipation` timestamp NOT NULL DEFAULT current_timestamp(),
  `team` enum('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`idparticipant`, `idevent`, `idutilsateur`, `dateparticipation`, `team`) VALUES
(1, 9, 1, '2024-11-26 18:32:09', 'A'),
(2, 9, 1, '2024-11-26 22:10:47', 'A'),
(3, 9, 2, '2024-11-26 22:14:16', 'A');

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
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `idsponsor` int(11) NOT NULL,
  `nomsponsor` varchar(100) NOT NULL,
  `imgsponsor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`idsponsor`, `nomsponsor`, `imgsponsor`) VALUES
(28, 'yassin', '1736971769.png'),
(29, 'ISAMM', '1736972135.png');

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
(6, 'partner', 'Yassin Ben Mosbeh', 'Yassin59189', 'Yassin@gmail.com', '$2y$10$wcnjRzuRjZc93KXY47gii.b9UOFJyII2bGTVEOJbsEYYpnOmOhbiS', 'tunis', '56650772');

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
-- Indexes for table `eventmaterials`
--
ALTER TABLE `eventmaterials`
  ADD PRIMARY KEY (`idcol`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`idFAQ`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`idmat`);

--
-- Indexes for table `partenaires`
--
ALTER TABLE `partenaires`
  ADD PRIMARY KEY (`IDpartenaire`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`idparticipant`);

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
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`idsponsor`);

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
-- AUTO_INCREMENT for table `eventmaterials`
--
ALTER TABLE `eventmaterials`
  MODIFY `idcol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `idFAQ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `idmat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `IDpartenaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `idparticipant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recompance`
--
ALTER TABLE `recompance`
  MODIFY `reco_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `requestrecompance`
--
ALTER TABLE `requestrecompance`
  MODIFY `idReqReco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `idsponsor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `partenaires`
--
ALTER TABLE `partenaires`
  ADD CONSTRAINT `partenaires_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `utilisateur` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
