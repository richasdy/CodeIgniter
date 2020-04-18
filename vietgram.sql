-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 04:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vietgram`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(5) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `photo_name` varchar(50) NOT NULL,
  `person` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `photo_name`, `person`) VALUES
(1, 'weh, asik e', 'feedPhoto.jpg', 'tum_ehe'),
(2, 'loh gak ngajak?', 'feedPhoto.jpg', 'hanhan'),
(3, 'hayuk lah k sana lg', 'feedPhoto2.jpg', 'ismeeee'),
(4, 'lapo dulen beduk iku wkwk', 'feedPhoto2.jpg', ''),
(5, 'iso main drum a bil?', 'feedPhoto1.jpg', 'icaheyo'),
(6, 'pengen drumnya :\')', 'feedPhoto1.jpg', 'dianduar');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `photo_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `likes` int(8) NOT NULL,
  `comment` int(8) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `photo_name`, `username`, `likes`, `comment`, `caption`, `location`) VALUES
(1, 'feedPhoto.jpg', 'nab', 200, 142, 'main piano padahal gak bisa :)', 'Batu'),
(2, 'feedPhoto1.jpg', 'nab', 222, 213, 'ngedrum syek', 'Batu'),
(3, 'feedPhoto2.jpg', 'nab', 97, 67, 'taiko an dulu, kpn lg ya kan', 'Batu Again');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `website` varchar(50) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `ava` varchar(50) NOT NULL,
  `follower` int(8) NOT NULL,
  `following` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `username`, `name`, `website`, `bio`, `email`, `phone`, `gender`, `ava`, `follower`, `following`) VALUES
(1, 'nabs', 'nabs', 'https://github.com/nabilaalissa24/vietgram', 'ha', 'nabilaalissa@student.telkomuni', '082123456222', 'female', 'ava_nab.jpg', 1432, 412);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'nab', '123', 'nab@gmail.com'),
(2, 'asd', '234', 'asd@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
