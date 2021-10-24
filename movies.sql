-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 06:54 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database1`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_name` varchar(100) NOT NULL,
  `actor` varchar(25) NOT NULL,
  `actress` varchar(20) NOT NULL,
  `year_of_release` date NOT NULL,
  `director` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_name`, `actor`, `actress`, `year_of_release`, `director`) VALUES
('Birbal', 'Srinivas', 'Rukmini', '2019-01-18', 'MG Srinivas'),
('Forensic', 'Tovino Thomas', 'Mamta Mohandas', '2020-02-28', 'Akhil Paul'),
('Mission Mangal', 'Akshay Kumar', 'Vidhya balan', '2019-08-13', 'Jagan Shakti'),
('Prithvi', 'Punith Rajkumar', 'Parvathy', '2010-04-23', 'jacob Varghese'),
('The Conjuring', 'Patrick Wilson', 'Vera Farmiga', '2013-07-15', 'James Wan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
