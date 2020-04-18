-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 10:53 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

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
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photoname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `likes` int(6) NOT NULL,
  `comment` int(6) NOT NULL,
  `caption` varchar(300) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`photoname`, `username`, `likes`, `comment`, `caption`, `location`) VALUES
('bk1.png', 'jalibambang', 0, 0, 'Kieu weh abdi mah', 'BK Bubat'),
('cekrek1.jpg', 'jalibambang', 654, 100, 'Cekrek heulay atuh boy', 'Parapatan Kircon'),
('dp1.jpg', 'seanakbarr', 1445, 1321, 'Stay Cool', 'Taman'),
('dp22.jpg', 'seanakbarr', 1200, 300, 'Best View', 'Gunung Bromo'),
('kasep1.jpg', 'jalibambang', 149, 200, 'Kasep kieu euy', 'Tol Pasteur'),
('oasis.jpg', 'seanakbarr', 1030, 176, 'Favorite', 'Bandung'),
('sean1.png', 'seanakbarr', 0, 0, 'Kasep', 'Bandung'),
('skate2.jpg', 'seanakbarr', 1354, 10643, 'Passion', 'Taman Pasupati'),
('slash1.jpg', 'seanakbarr', 0, 0, 'Cool', 'Stage');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `website` varchar(20) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phonenumber` varchar(13) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `username`, `website`, `bio`, `email`, `phonenumber`, `gender`, `dp`) VALUES
(0, 'Sean Akbar Ryanto', 'seanakbarr', 'http://localhost/vci', 'Personal Blogs', 'seanakbarr@gmail.com', '081572278474', 'male', 'dp5.jpg'),
(1, 'Jali Khairul Bambang', 'jalibambang', 'http://localhost/ci-', 'Kasep Bagai Kuda', 'jali@gmail.com', '08143547633', 'male', 'jali.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(0, 'seanakbarr', 'seanhehe'),
(1, 'jalibambang', 'jalali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`photoname`);

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
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
