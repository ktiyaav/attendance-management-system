-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 09:43 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dronaatt`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sec` varchar(255) NOT NULL,
  `daysabsent` int(11) NOT NULL,
  `dayspresent` int(11) NOT NULL,
  `electrical` int(11) NOT NULL,
  `electronics` int(11) NOT NULL,
  `professionalcommunication` int(11) NOT NULL,
  `physics1` int(11) NOT NULL,
  `maths1` int(11) NOT NULL,
  `electricallab` int(11) NOT NULL,
  `physicslab` int(11) NOT NULL,
  `pclab` int(11) NOT NULL,
  `workshop` int(11) NOT NULL,
  `physics2` int(11) NOT NULL,
  `mechanics` int(11) NOT NULL,
  `chemistry` int(11) NOT NULL,
  `maths2` int(11) NOT NULL,
  `caeg` int(11) NOT NULL,
  `mechanicslab` int(11) NOT NULL,
  `chemistrylab` int(11) NOT NULL,
  `cspc` int(11) NOT NULL,
  `cspclab` int(11) NOT NULL,
  `imgpath` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `roll`, `email`, `name`, `password`, `sec`, `daysabsent`, `dayspresent`, `electrical`, `electronics`, `professionalcommunication`, `physics1`, `maths1`, `electricallab`, `physicslab`, `pclab`, `workshop`, `physics2`, `mechanics`, `chemistry`, `maths2`, `caeg`, `mechanicslab`, `chemistrylab`, `cspc`, `cspclab`, `imgpath`) VALUES
(0, 1723009, 'abc@xyz.com', 'Pranay', 'abc', 'CSEB', 8, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 103, 9, 10, 9, 9, 9, 9, 9, '123.jpg'),
(1, 17230019, 'abc@xyz.com', 'Shubham', 'abc', 'CSEB', 8, 12, 11, 17, 18, 9, 19, 89, 9, 18, 18, 77, 299, 19, 101, 91, 98, 94, 93, 94, '123.jpg'),
(2, 1723006, 'abc@xyz.com', 'Abhishek', 'abc', 'CSEB', 8, 12, 0, 0, 0, 0, 20, 0, 0, 0, 0, 8, 103, 9, 10, 9, 9, 9, 9, 9, '123.jpg'),
(3, 1723001, 'abc@xyz.com', 'Shambhu', 'abc', 'CSEB', 8, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 247, 9, 10, 9, 9, 9, 9, 9, '123.jpg'),
(4, 17230073, 'akkirishikumarxi@gmail.com', 'Rishi Kumar', 'abc', 'CSEB', 8, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 227, 9, 10, 9, 9, 9, 9, 9, '123.jpg'),
(5, 17230081, 'ktiyaav@gmail.com', 'Shakti', 'abc', 'CSEB', 8, 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 291, 9, 10, 9, 9, 9, 9, 9, '123.jpg'),
(6, 0, '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 81, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `imgpath` varchar(255) NOT NULL,
  `mon` varchar(255) NOT NULL,
  `tue` varchar(255) NOT NULL,
  `wed` varchar(255) NOT NULL,
  `thu` varchar(255) NOT NULL,
  `fri` varchar(255) NOT NULL,
  `sat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `username`, `pass`, `name`, `post`, `sub`, `imgpath`, `mon`, `tue`, `wed`, `thu`, `fri`, `sat`) VALUES
(0, 1, '123', 'Dinesh Kumar', 'Faculty', 'Mechanics', '1.jpg', '', '', '', '', '', ''),
(1, 1224, '123', 'Ashish Soti','Director', 'Mechanics', '1.jpg', '', '', '', '', '', ''),
(2, 123, '123', 'Prassan Sharma', 'HOD Maths', 'Maths', '1.jpg', '', '', '', '', '', ''),
(3, 4, '123', 'Devangi Grover', '', 'Physics', '1.jpg', '', '', '', '', '', ''),
(4, 5, '123', 'Aswini Kumar', '', 'Mechanics', '1.jpg', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
