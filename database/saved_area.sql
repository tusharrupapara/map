-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2020 at 04:44 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `map`
--

-- --------------------------------------------------------

--
-- Table structure for table `saved_area`
--

CREATE TABLE `saved_area` (
  `id` int(11) NOT NULL,
  `area` varchar(200) NOT NULL,
  `lat` varchar(200) NOT NULL,
  `lon` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saved_area`
--

INSERT INTO `saved_area` (`id`, `area`, `lat`, `lon`, `city`, `month`, `time`) VALUES
(10, 'Rajkot, Gujarat, India', '22.3038945', '70.80215989999999', 'Mumbai', 'January', '05:30:00'),
(11, 'Rajahmundry, Andhra Pradesh, India', '17.0005383', '81.8040345', 'Mumbai', 'January', '21:15:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `saved_area`
--
ALTER TABLE `saved_area`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `saved_area`
--
ALTER TABLE `saved_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
