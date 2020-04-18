-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 11:21 AM
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
-- Database: `ci_vietgram`
--

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `username` varchar(30) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `caption` varchar(200) NOT NULL,
  `location` varchar(30) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`username`, `url`, `caption`, `location`, `likes`) VALUES
('ashyiap', 'titan.jpg', 'candid dulu gaes..', 'SMAN 12 BANDUNG', 14),
('tata', '1.jpg', 'no capt:)', 'dimana aja bebas', 14370),
('ashyiap', '2.jpg', 'REZZ live now', 'live concert', 61669);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `website` varchar(30) NOT NULL,
  `bio` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo_profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `name`, `website`, `bio`, `phone`, `gender`, `photo_profile`) VALUES
('ashyiap', 'santuy', 'ashyiap@gmail.com', 'Titan Kinan', 'https://github.com/Titankinan', 'ashyiap santuy pokoknya mah..', '081220627721', 'male', 'titan.jpg'),
('tata', 'jkt48', 'tata48@gmail.com', 'Shinta Naomi', 'https://jkt48.com', 'Shinta Naomi\r\nCP : 081295337343 (Tata)\r\nm.youtube.com/channel/UCO8qchKGLqESWm4E95pUUEg', '081295337343', 'female', 'tata.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
