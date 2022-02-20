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
-- Table structure for table `psychomotor`
--

CREATE TABLE `psychomotor` (
  `reg_no` varchar(100) NOT NULL,
  `a1` int(20) NOT NULL,
  `a2` int(20) NOT NULL,
  `a3` int(20) NOT NULL,
  `a4` int(20) NOT NULL,
  `a5` int(20) NOT NULL,
  `a6` int(20) NOT NULL,
  `a7` int(20) NOT NULL,
  `a8` int(20) NOT NULL,
  `a9` int(20) NOT NULL,
  `a10` int(20) NOT NULL,
  `fee` int(20) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `hremark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psychomotor`
--

INSERT INTO `psychomotor` (`reg_no`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `fee`, `remark`, `hremark`) VALUES
('MGIS/N/0103', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 10870, 'An Excellent Result', 'Outstanding performance. Keep it up'),
('MGIS/N/0105', 2, 1, 1, 1, 1, 1, 2, 1, 1, 1, 0, 'An Excellent Performance', 'Excellent result'),
('MGIS/N/0107', 1, 2, 1, 1, 1, 2, 1, 2, 1, 4, 21500, 'Excellent', 'Excellent performance'),
('MGIS/N/0110', 2, 2, 2, 2, 2, 2, 1, 2, 2, 2, 0, 'Excellent Result', 'An Excellent Performance. Keep it up'),
('MGIS/N/0113', 2, 1, 1, 2, 1, 4, 1, 4, 1, 5, 0, 'Excellent', 'Excellent performance '),
('MGIS/N/0114', 2, 2, 2, 1, 1, 2, 1, 2, 1, 4, 3820, 'Excellent result, but talks a lot', 'An excellent performance'),
('MGIS/N/0115', 4, 2, 1, 2, 2, 4, 5, 4, 4, 2, 0, 'He is coming up, will do better', 'Excellent Result'),
('MGIS/N/0116', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'Excellent result', 'Outstanding Performance. Keep it up'),
('MGIS/N/0117', 1, 1, 1, 2, 1, 1, 1, 2, 1, 2, 70000, 'A very sharp girl and eager to learn', 'Very Good Result'),
('MGIS/N/0118', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'Wonderful performance, keep it up', 'Very good result'),
('MGIS/P/0043', 2, 1, 1, 1, 1, 2, 1, 1, 1, 1, 0, 'Good result. But can do better', 'Excellent result. Well done'),
('MGIS/P/0050', 2, 2, 2, 2, 2, 2, 1, 2, 1, 2, 0, 'Good result. Need to improve in Reading & Writing', 'A good result'),
('MGIS/P/0054', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 8630, 'Excellent result. A bright Child', 'An excellent performance. Keep it up'),
('MGIS/P/0055', 2, 2, 2, 2, 2, 2, 1, 2, 1, 2, 0, 'Good result but need to improve on Reading & Spelling', 'A very good result'),
('MGIS/P/0064', 2, 2, 2, 2, 2, 2, 1, 2, 1, 2, 0, 'Good result', 'A very Good'),
('MGIS/P/0066', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 387100, 'A Brilliant Child', 'An Outstanding performance. Keep            It Up.'),
('MGIS/P/0067', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'Excellent result', 'An excellent performance. Keep it up.'),
('MGIS/P/0069', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'Good result', 'A very good performance. Well done'),
('MGIS/P/0070', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 70000, 'An intelligent and calm girl', 'An excellent result'),
('MGIS/P/0071', 1, 2, 2, 2, 2, 1, 1, 2, 1, 2, 138760, 'Good result. Can do better', 'A very good result. There is room for improvement'),
('MGIS/P/0073', 2, 1, 2, 2, 2, 2, 1, 2, 1, 2, 0, 'Put more effort on Reading & Spelling', 'A very good result. Well done'),
('MGIS/P/0074', 1, 2, 2, 2, 2, 1, 1, 2, 1, 2, 0, 'Need to improve on Reading $ Spelling', 'A very good result'),
('MGIS/P/0075', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'She need to improve in Reading & Spelling', 'A good result'),
('MGIS/P/0076', 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 0, 'A good result', 'A very good result. Well done'),
('MGIS/P/0077', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 570, 'An Excellent Result', 'An Excellent performance. Keep it up'),
('MGIS/P/0078', 3, 3, 3, 3, 3, 3, 3, 3, 1, 3, 0, 'Needs to improve', 'Average. Can do better'),
('MGIS/P/0081', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'An Excellent Result', 'An Excellent Performance. Keep it up'),
('MGIS/P/0082', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'Very                       good result', 'Excellent. Keep it up'),
('MGIS/P/0084', 2, 2, 2, 2, 2, 2, 1, 2, 1, 2, 0, 'Good result', 'A very good result'),
('MGIS/P/0085', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'Excellent result ', 'An Excellent performance. Well done'),
('MGIS/P/0086', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'An Excellent result. He is very good', 'Outstanding performance. Bravo'),
('MGIS/P/0087', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'Good result.                   you can do better', 'Very good result'),
('MGIS/P/0088', 2, 2, 1, 1, 4, 1, 1, 2, 1, 2, 0, 'Excellent result, she talks and plays too much', 'An excellent result'),
('MGIS/P/0089]', 1, 1, 2, 1, 1, 1, 1, 5, 1, 1, 0, 'An intelligent child,but plays alot', 'An excellent Result'),
('MGIS/P/0090', 5, 5, 5, 2, 2, 1, 1, 1, 3, 2, 0, 'There is great improvement but she fights a lot', 'A good result, try harder'),
('MGIS/P/0091', 3, 3, 3, 3, 3, 3, 3, 3, 2, 3, 0, 'He needs to work harder', 'He needs to work harder. Let\'s help him out'),
('MGIS/P/0092', 2, 1, 1, 1, 1, 1, 1, 1, 2, 1, 0, 'Excellent result.', 'An Excellent Performance. Keep it up.'),
('MGIS/P/0093', 1, 4, 2, 1, 1, 1, 1, 2, 2, 1, 0, 'A good performance ', 'A very good result'),
('MGIS/P/0095', 2, 2, 2, 2, 2, 2, 2, 2, 3, 2, 0, 'A good result. put more effort.', 'A good result. well done.'),
('[MGIS/P/0072', 2, 5, 1, 1, 1, 1, 1, 1, 1, 1, 0, 'Excellent result', 'An Excellent performance. Keep it up.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `psychomotor`
--
ALTER TABLE `psychomotor`
  ADD PRIMARY KEY (`reg_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
