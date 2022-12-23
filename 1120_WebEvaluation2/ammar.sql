-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 11:31 AM
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
-- Database: `ammar`
--

-- --------------------------------------------------------

--
-- Table structure for table `20-1120`
--

CREATE TABLE `20-1120` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `reg` varchar(20) NOT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `20-1120`
--

INSERT INTO `20-1120` (`id`, `name`, `reg`, `class`) VALUES
(1, 'Ammar Raza', '20-NTU-CS-1120', 'SE'),
(2, 'Hussnaian Raza', '20-NTU-CS-1130', 'IT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `20-1120`
--
ALTER TABLE `20-1120`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `20-1120`
--
ALTER TABLE `20-1120`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
