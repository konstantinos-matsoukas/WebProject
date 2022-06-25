-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 11:43 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data1`
--

-- --------------------------------------------------------

--
-- Table structure for table `fill`
--

CREATE TABLE `fill` (
  `id` int(11) NOT NULL,
  `questionbef` varchar(40) NOT NULL,
  `answer` varchar(11) NOT NULL,
  `questionaft` varchar(40) NOT NULL,
  `points` int(30) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fill`
--

INSERT INTO `fill` (`id`, `questionbef`, `answer`, `questionaft`, `points`, `level`) VALUES
(1, 'The 2 main categories of hackers are ', 'blackhats', 'and White Hats', 5, 1),
(2, 'Fill the ', 'gap', 'with the word \"gap\"', 10, 2),
(3, 'Fill the ', 'placeholder', 'with the word \"placeholder\"', 15, 3);

-- --------------------------------------------------------

--
-- Table structure for table `modq`
--

CREATE TABLE `modq` (
  `id` int(11) NOT NULL,
  `type` varchar(40) NOT NULL,
  `question` varchar(40) NOT NULL,
  `answer` varchar(40) NOT NULL,
  `a1` varchar(40) NOT NULL,
  `a2` varchar(40) NOT NULL,
  `a3` varchar(40) NOT NULL,
  `a4` varchar(40) NOT NULL,
  `aftergap` varchar(40) NOT NULL,
  `level` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modq`
--

INSERT INTO `modq` (`id`, `type`, `question`, `answer`, `a1`, `a2`, `a3`, `a4`, `aftergap`, `level`) VALUES
(2, 'fill', '', '', '', '', '', '', '', 0),
(3, 'truefalse', 'test true', 'true', '', '', '', '', '', 0),
(4, 'fill', 'before', 'gap', '', '', '', '', 'after', 0),
(5, 'multiple', 'How many hours in a day', ',corrent,2,3,4', 'corrent+', '2', '3', '4', '', 0),
(12, 'fill', 'test', 'asd', '', '', '', '', 'test', 0),
(17, 'truefalse', 'test', 'true', '', '', '', '', '', 3),
(18, 'fill', 'bef', 'answer', '', '', '', '', 'after', 3),
(19, 'single', 'How many hours in a day', ',corrent', 'corrent+', 'asd', 'sd', '5', '', 3),
(20, 'single', 'hard', ',test', 'test+', '2', '3', '4', '', 3),
(21, 'single', 'How many hours in a day', ',t2', '2', 't2+', '4', 'asd', '', 3),
(22, 'multiple', 'changed question', '2', 'change2', 'change', '24+', 'd', '', 0),
(23, 'truefalse', '', '', '', '', '', '', '', 3),
(24, 'single', 'How many hours in a day', '24', '24+', '3', '2', '1', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `multiple`
--

CREATE TABLE `multiple` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `points` int(30) NOT NULL,
  `level` int(11) NOT NULL,
  `a1` varchar(40) NOT NULL,
  `a2` varchar(40) NOT NULL,
  `a3` varchar(40) NOT NULL,
  `a4` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `multiple`
--

INSERT INTO `multiple` (`id`, `question`, `answer`, `points`, `level`, `a1`, `a2`, `a3`, `a4`) VALUES
(1, 'Which programm/s is/are used for network monitoring', 'nmap,wpscan,wireshark', 5, 1, 'Nmap', 'John The Ripper', 'WPScan', 'WireShark'),
(2, 'test', 'correct,t2', 15, 3, 'corrent+', 't2+', 'sd', 'asd'),
(3, 'Which programm/s isn\'t/aren\'t used for passsword cracking', 'correct', 10, 2, 'correct', 'false1', 'false2', 'false3'),
(4, 'How many hours in a day', 'correct', 5, 1, '24', '3', '11', '2');

-- --------------------------------------------------------

--
-- Table structure for table `profileimg`
--

CREATE TABLE `profileimg` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profileimg`
--

INSERT INTO `profileimg` (`id`, `userid`, `status`) VALUES
(6, 31, 0),
(7, 32, 0),
(9, 34, 1),
(13, 36, 0),
(22, 45, 0),
(23, 46, 1);

-- --------------------------------------------------------

--
-- Table structure for table `single`
--

CREATE TABLE `single` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `points` int(30) NOT NULL,
  `level` int(11) NOT NULL,
  `a1` varchar(40) NOT NULL,
  `a2` varchar(40) NOT NULL,
  `a3` varchar(40) NOT NULL,
  `a4` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `single`
--

INSERT INTO `single` (`id`, `question`, `answer`, `points`, `level`, `a1`, `a2`, `a3`, `a4`) VALUES
(1, 'Which programm/s is/are used for passsword cracking', 'JohnTheRipper', 5, 1, 'BEef', 'John The Ripper', 'MetaSploit', 'WireShark'),
(2, 'Which programm/s is/are used for network monitoring', 'nmap', 10, 2, 'false1', 'Nmap', 'false2', 'false3'),
(4, 'Placeholder', 'correct', 15, 3, 'false1', 'false4', 'correct', 'false3');

-- --------------------------------------------------------

--
-- Table structure for table `truefalse`
--

CREATE TABLE `truefalse` (
  `id` int(11) NOT NULL,
  `question` varchar(40) NOT NULL,
  `answer` varchar(11) NOT NULL,
  `points` int(30) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `truefalse`
--

INSERT INTO `truefalse` (`id`, `question`, `answer`, `points`, `level`) VALUES
(1, 'Spam is NOT a type of cybercrime', 'false', 5, 1),
(3, 'Spam is a type of cybercrime', 'true', 15, 3),
(4, 'A day has 24 hours', 'true', 10, 2),
(34, 'Checkingmod', 'true', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` date NOT NULL,
  `pic` blob NOT NULL,
  `username` varchar(60) NOT NULL,
  `score` int(100) NOT NULL,
  `role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `password`, `gender`, `email`, `age`, `pic`, `username`, `score`, `role`) VALUES
(34, 'ad', 'ad', '1234567', 'female', 'test@hotmail.com', '2021-04-01', '', 'admin', 0, '3'),
(36, 'Kostas', '123', '1234567', 'male', 'kostismats@gmail.com', '2021-04-01', '', 'k12', 0, '2'),
(45, 'giwrgos', 'alexandrou', '1234567', 'female', 'kostisaek@gmail.com', '2021-04-01', '', 'place', 25, '1'),
(46, 'Kostas', 'test', '1234567', 'male', '', '2021-04-01', '', 'testdef', 0, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fill`
--
ALTER TABLE `fill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modq`
--
ALTER TABLE `modq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multiple`
--
ALTER TABLE `multiple`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profileimg`
--
ALTER TABLE `profileimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single`
--
ALTER TABLE `single`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `truefalse`
--
ALTER TABLE `truefalse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fill`
--
ALTER TABLE `fill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `modq`
--
ALTER TABLE `modq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `multiple`
--
ALTER TABLE `multiple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profileimg`
--
ALTER TABLE `profileimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `single`
--
ALTER TABLE `single`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `truefalse`
--
ALTER TABLE `truefalse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
