-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 05:47 PM
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
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `name` varchar(200) NOT NULL,
  `sub_id` char(50) NOT NULL,
  `max_score` int(11) NOT NULL,
  `avg_score` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`name`, `sub_id`, `max_score`, `avg_score`) VALUES
('Agric Science', 'agri', 100, 100),
('Basic Science', 'basi', 100, 100),
('Bible Knowledge', 'bibl', 100, 100),
('Civic Education', 'civi', 100, 100),
('Computer', 'com', 100, 100),
('Creative/Fine Arts', 'crea', 100, 100),
('Current Affairs', 'curr', 100, 100),
('English Language', 'engl', 100, 100),
('French', 'Fren', 100, 100),
('Hand Writing', 'hand', 100, 100),
('Health Habit', 'heal', 100, 100),
('Health Education', 'heed', 100, 100),
('History', 'hist', 100, 100),
('Home Economics', 'home', 100, 100),
('Language Arts', 'lang', 100, 100),
('Literature', 'lite', 100, 100),
('Mathematics', 'math', 100, 100),
('Morals', 'mora', 100, 100),
('Numeracy', 'nume', 100, 100),
('Phonics', 'phon', 100, 100),
('Phonetics', 'pont', 100, 100),
('Quantitative Reasoning', 'quan', 100, 100),
('Reading', 'read', 100, 100),
('Rhymes', 'rhym', 100, 100),
('Science', 'scie', 100, 100),
('Shapes & Colors', 'shap', 100, 100),
('Social Habit', 'soci', 100, 100),
('Social Studies', 'sost', 100, 100),
('Spelling & Dictation', 'spel', 100, 100),
('Verbal Reasoning', 'verb', 100, 100),
('Vocational Attitude', 'voca', 100, 100),
('Writing', 'writ', 100, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
