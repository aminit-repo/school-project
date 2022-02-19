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
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `reg_no` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `other_name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `grade` char(5) NOT NULL,
  `total_score` double NOT NULL,
  `attendance` int(11) NOT NULL,
  `class` char(50) NOT NULL,
  `gender` char(10) NOT NULL,
  `class_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`reg_no`, `first_name`, `other_name`, `surname`, `grade`, `total_score`, `attendance`, `class`, `gender`, `class_cat`) VALUES
('MGIS/N/0103', 'Abigail', '', 'Lucky-Nwenu', 'x', 0, 120, 'n2', 'm', 'Emerald'),
('MGIS/N/0105', 'Excel', '', 'Jiachi', 'x', 0, 96, 'n2', 'f', 'Emerald'),
('MGIS/N/0107', 'Shedrach', '', 'Chukwu', 'x', 0, 100, 'n1', 'm', 'Sapphire'),
('MGIS/N/0110', 'Chisom', '', 'Innocent', 'x', 0, 118, 'n2', 'f', 'Emerald'),
('MGIS/N/0113', 'Ikechukwu', '', 'Obed-Umelo', 'x', 0, 90, 'n1', 'm', 'Sapphire'),
('MGIS/N/0114', 'Flourish', '', 'Adebua', 'x', 0, 93, 'n2', 'f', 'Emerald'),
('MGIS/N/0115', 'Chukwuka', '', 'Innocent', 'x', 0, 118, 's1', 'm', 'Diamond'),
('MGIS/N/0116', 'Uriel U. K', '', 'Udoh', 'x', 0, 118, 'n2', 'm', 'Emerald'),
('MGIS/N/0117', 'Princess', '', 'Ugochukwu', 'x', 0, 90, 's1', 'f', 'Diamond'),
('MGIS/N/0118', 'Pearl', '', 'Jiachi', 'x', 0, 98, 's1', 'f', 'Diamond'),
('MGIS/P/0043', 'Munachi', '', 'Dike', 'x', 0, 106, 'p5', 'f', 'Gladiolus'),
('MGIS/P/0050', 'Joseph', '', 'Koredegha', 'x', 0, 118, 'p5', 'm', 'Gladiolus'),
('MGIS/P/0054', 'Blessing', '', 'Olatunde', 'x', 0, 108, 'p5', 'f', 'Gladiolus'),
('MGIS/P/0055', 'David', '', 'Hezekiah', 'x', 0, 118, 'p5', 'm', 'Gladiolus'),
('MGIS/P/0064', 'Success', '', 'Gbenegbara', 'x', 0, 120, 'p4', 'f', 'Aster'),
('MGIS/P/0066', 'Deborah', '', 'Adebola', 'x', 0, 118, 'p4', 'f', 'Aster'),
('MGIS/P/0067', 'Esther', '', 'Adebola', 'x', 0, 118, 'p4', 'f', 'Aster'),
('MGIS/P/0069', 'Divine', '', 'Innocent', 'x', 0, 118, 'p4', 'f', 'Aster'),
('MGIS/P/0070', 'Praise', '', 'Ugochukwu', 'x', 0, 114, 'p4', 'f', 'Aster'),
('MGIS/P/0071', 'Biola', '', 'Oladipupo', 'x', 0, 108, 'p4', 'm', 'Aster'),
('MGIS/P/0072', 'Miracle', '', 'Chukwu', 'x', 0, 98, 'p3', 'f', 'Iris'),
('MGIS/P/0073', 'Ihuoma', '', 'Dike', 'x', 0, 106, 'p3', 'm', 'Iris'),
('MGIS/P/0074', 'Anita', '', 'Koredegha', 'x', 0, 118, 'p3', 'f', 'Iris'),
('MGIS/P/0075', 'Divine-Favour', '', 'Sunny', 'x', 0, 106, 'p3', 'f', 'Iris'),
('MGIS/P/0076', 'Tehila', '', 'Oyibo', 'x', 0, 118, 'p3', 'f', 'Iris'),
('MGIS/P/0077', 'Miracle', '', 'Obed-Umelo', 'x', 0, 96, 'p3', 'm', 'Iris'),
('MGIS/P/0078', 'Eniola', '', 'Oladipupo', 'x', 0, 106, 'p3', 'm', 'Iris'),
('MGIS/P/0081', 'Success', '', 'Innocent', 'x', 0, 118, 'p2', 'f', 'Tulip'),
('MGIS/P/0082', 'Chisom', '', 'Iloka', 'x', 0, 120, 'p2', 'f', 'Tulip'),
('MGIS/P/0084', 'Blessing', '', 'Sunny', 'x', 0, 106, 'p2', 'm', 'Tulip'),
('MGIS/P/0085', 'Grace', '', 'Olatunde', 'x', 0, 108, 'p2', 'f', 'Tulip'),
('MGIS/P/0086', 'Joseph', '', 'Lucky-Nwenu', 'x', 0, 120, 'p2', 'm', 'Tulip'),
('MGIS/P/0087', 'Mirabel', '', 'Offorma', 'x', 0, 120, 'p2', 'f', 'Tulip'),
('MGIS/P/0088', 'Sonia', '', 'Chukwu', 'x', 0, 98, 'p1', 'f', 'Daisy'),
('MGIS/P/0089', 'Kelvin', '', 'Hezekiah', 'x', 0, 118, 'p1', 'm', 'Daisy'),
('MGIS/P/0090', 'Rejoice', '', 'Ugochukwu', 'x', 0, 114, 'p1', 'f', 'Daisy'),
('MGIS/P/0091', 'Damola', '', 'Oladipupo', 'x', 0, 106, 'p1', 'm', 'Daisy'),
('MGIS/P/0092', 'Nmesomachi', '', 'Obed-Umelo', 'x', 0, 96, 'p1', 'f', 'Daisy'),
('MGIS/P/0093', 'Munachimso', '', 'Iloka', 'x', 0, 120, 'p1', 'm', 'Daisy'),
('MGIS/P/0095', 'Jesse', '', 'Oyibo', 'x', 0, 118, 'p1', 'm', 'Daisy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
