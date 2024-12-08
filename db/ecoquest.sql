-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 10:34 PM
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

--
-- Indexes for dumped tables
--

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
