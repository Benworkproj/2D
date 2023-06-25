-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 11:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumnidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adID` int(11) NOT NULL,
  `adName` varchar(40) NOT NULL,
  `adUser` varchar(30) NOT NULL,
  `adPass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adID`, `adName`, `adUser`, `adPass`) VALUES
(1, 'Admin', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `ArticleID` int(25) NOT NULL,
  `ArticleName` varchar(70) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `ArDate` date NOT NULL,
  `ArImg` blob NOT NULL,
  `ArText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedbackID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Year` int(10) NOT NULL,
  `Feedback` text NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackID`, `Name`, `Course`, `Year`, `Feedback`, `Date`, `Status`) VALUES
(1, 'Aaa', 'BSIT', 2098, 'malupwet', '2023-06-19', ''),
(2, 'Aaa', 'BSIT', 2098, 'malupwet', '2023-06-19', ''),
(3, '', '', 0, 'a', '2023-06-19', ''),
(4, 'Jonell Jefferson', 'BSIT', 2022, 'dhvia 4i5 sdjdia dgahsk rnahfbt eur;am', '2023-06-19', 'Unread');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(100) NOT NULL,
  `StudentID` int(100) NOT NULL,
  `Name` varchar(70) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `Year` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `StudentID`, `Name`, `Password`, `Course`, `Year`) VALUES
(1, 202110020, 'Arianne Gail Villaluz', '1234', 'BSIT', 2025),
(2, 202110036, 'Alyson Samson', '123', 'BSIT', 2025),
(4, 202110018, 'Jonell Jefferson Fial III', '123', 'BSPSYCH', 2025),
(5, 202110009, 'Don Johnson Santiago ', '123', 'BSIT', 2006),
(6, 201911046, 'Lhiam Ryan Costelo', '123', 'BSIT', 2021),
(11, 202110025, 'Joric Jay Castro', '', 'BSIT', 2025);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adID`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ArticleID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedbackID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `StudentID` (`StudentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `ArticleID` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
