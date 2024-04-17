-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2024 at 05:43 PM
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
-- Database: `film_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `filmID` int(10) UNSIGNED NOT NULL,
  `directorID` int(11) NOT NULL,
  `genreID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `rating` decimal(8,2) NOT NULL,
  `releasedatum` year(4) NOT NULL,
  `taalD` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `posterFile` varchar(255) NOT NULL,
  `videoFile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`filmID`, `directorID`, `genreID`, `title`, `rating`, `releasedatum`, `taalD`, `description`, `posterFile`, `videoFile`) VALUES
(1, 1, 0, 'The Beekeeper', 1.00, '0000', 1, 'test', 'poster_files/background.beekeeper.jpeg', 'movie_files/y2mate.com - THE BEEKEEPER  Official Restricted Trailer_480p.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`filmID`),
  ADD UNIQUE KEY `film_directorid_unique` (`directorID`),
  ADD UNIQUE KEY `film_genreid_unique` (`genreID`),
  ADD UNIQUE KEY `film_title_unique` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `filmID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
