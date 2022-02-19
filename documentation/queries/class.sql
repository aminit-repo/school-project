-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 05:49 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mc_genia`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `name` varchar(100) NOT NULL,
  `total` int(40) NOT NULL,
  `class_id` char(50) NOT NULL,
  `cat_1` varchar(50) NOT NULL DEFAULT 'xxx',
  `cat_2` varchar(50) NOT NULL DEFAULT 'xxx'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`name`, `total`, `class_id`, `cat_1`, `cat_2`) VALUES
('Nursery 1', 2, 'n1', 'Sapphire', ''),
('Nursery 2', 5, 'n2', 'Emerald', ''),
('Primary 1', 7, 'p1', 'Daisy', ''),
('Primary 2', 6, 'p2', 'Tulip', ''),
('Primary 3', 7, 'p3', 'Iris', ''),
('Primary 4', 6, 'p4', 'Aster', ''),
('Primary5', 4, 'p5', 'Gladiolus', ''),
('Primary 6', 0, 'p6', 'Chrysanthemum', ''),
('Pre-Nursery', 3, 's1', 'Diamond', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
