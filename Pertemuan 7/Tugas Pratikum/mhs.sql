-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 17, 2024 at 10:15 AM
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
-- Database: `mhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` smallint(4) NOT NULL,
  `namadepan` varchar(50) DEFAULT NULL,
  `namabelakang` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `namadepan`, `namabelakang`, `email`) VALUES
(60, 'Dandyyyy', 'Tri Widianto', 'triwidiantoy@gmail.com'),
(61, 'Teresa', 'Inaya', 'niki@asdasd.com'),
(63, 'Wahyu', 'Mani', 'heartsound1992@aesop.rutgers.edu'),
(64, 'asd', 'asd', '233q@gmais.com'),
(65, 'asdwa', 'Kurniawan', 'kiki@gg.com'),
(66, 'Teresa', 'Kurniawan', 'niki@asdasd.com'),
(67, 'Wahyu', 'Kurniawan', 'kiki@gg.com'),
(68, 'sddas', 'asdasdas', 'sadasd@asda.com'),
(70, 'sadoihajdsa', 'iajdsjaijd', 'aksdkas@gmas.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
