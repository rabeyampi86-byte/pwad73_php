-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2026 at 05:49 AM
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
-- Database: `pwad-73`
--

-- --------------------------------------------------------

--
-- Table structure for table `allstudents`
--

CREATE TABLE `allstudents` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allstudents`
--

INSERT INTO `allstudents` (`id`, `name`, `email`, `phone`) VALUES
(1, 'Rokon Mahmud', 'rokon@gmail.com', '01753031073'),
(2, 'Roni Hasan', 'roni@gmail.com', '10956238978'),
(3, 'Mahir', 'mahir@gmail.com', '01745128632'),
(4, 'Sumon', 'sumon12@gmail.com', '0189562314'),
(5, 'Sabbir', 'sabbir@gmail.com', '01978526341'),
(6, 'Rohmot', 'rohmot@gmail.com', '01315201036'),
(7, 'Rakib', 'rakib@gmail.com', '01315467520'),
(8, 'Rima', 'rima123@gmail.com', '015325698746'),
(9, 'Rani', 'rani34@gmail.com', '0126549801'),
(10, 'Modina', 'modina21@gmail.com', '01532165498'),
(17, 'ABC', 'abc@gmail.com', '01323451234'),
(18, 'AB', 'ab@gmail.com', '01323451231'),
(19, 'B', 'b@gmail.com', '015325658746'),
(20, 'Rima Sorkar', 'rima12@gmail.com', '015325698788'),
(21, 'Shema', 'shema12@gmail.com', '015325698789');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(15) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` char(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`, `Password`) VALUES
(1, 'Rabeya', 'rabeya3@gmail.com', 'c93ccd78b2076528346216b3b2f701e6'),
(2, 'Nijum', 'nijum3@gmail.com', '854eb7d2ff6620c30c85bbbd20349653'),
(3, 'Prova', 'prova3@gmail.com', 'e32ae4e0d9158c00684ec73ce7803ab1'),
(4, 'Mim', 'mim3@gmail.com', '92ee3d6713f92ddb4e890bafcf4be9ef'),
(5, 'Nuri', 'nuri3@gmail.com', 'nuri123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allstudents`
--
ALTER TABLE `allstudents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allstudents`
--
ALTER TABLE `allstudents`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
