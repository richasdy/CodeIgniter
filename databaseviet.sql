-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 05:22 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaseviet`
--

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photo_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `username` varchar(40) COLLATE utf8_bin NOT NULL,
  `likes` int(8) NOT NULL,
  `comment` int(8) NOT NULL,
  `caption` varchar(500) COLLATE utf8_bin NOT NULL,
  `location` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`photo_name`, `username`, `likes`, `comment`, `caption`, `location`) VALUES
('_chez.gif', 'chez', 0, 0, 'Cat', 'Purple'),
('_chez.jpg', 'chez', 2, 0, 'aduh bingung ', 'Unknown'),
('_chez1.jpg', 'chez', 456, 456, 'silau men', 'Semarang'),
('_chezz.jpg', 'chez', 123, 123, 'touring nih', 'maribaya ');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `username` varchar(40) COLLATE utf8_bin NOT NULL,
  `website` varchar(100) COLLATE utf8_bin NOT NULL,
  `bio` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(32) COLLATE utf8_bin NOT NULL,
  `phone` varchar(12) COLLATE utf8_bin NOT NULL,
  `gender` varchar(14) COLLATE utf8_bin NOT NULL,
  `ava` varchar(50) COLLATE utf8_bin NOT NULL,
  `follower` int(6) NOT NULL,
  `following` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`name`, `username`, `website`, `bio`, `email`, `phone`, `gender`, `ava`, `follower`, `following`) VALUES
('Cheza Pangestu', 'chez', 'https://chezapangestu.wordpress.com/', 'Enjoy, aman dah ☺', 'chez@gmail.com', '082219739481', 'male', 'chz2.jpg', 222, 1),
('r u see me?', 'see', 'https://www.didyouseeme.com', 'are u really see me?', 'see@gmail.com', '0821234567', 'male', 'cek.jpg', 123, 456);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(40) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`) VALUES
('chez', '123', 'chez@gmail.com'),
('see', '123', 'see@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`photo_name`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
