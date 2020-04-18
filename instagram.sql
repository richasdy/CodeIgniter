-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 09:24 AM
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
-- Database: `instagram`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `bio` varchar(300) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `photo_profile` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `email`, `name`, `website`, `bio`, `phone`, `gender`, `photo_profile`) VALUES
('rizkisyafaat', 'rizkisyafaat', 'Rizkisyafaaat@gmail.com', 'Rizki Syafaat Amardita', 'https://www.csgostash.com/', 'Hayu Udah Lama Ga Hayu.', '087773771112', 'can\'t remember', 'gambar11.jpg'),
('coba', 'coba', 'coba@gmail.com', 'coba', 'https://www.googleadservices.com/pagead/aclk?sa=L&', 'ini akun coba coba', '0897611111', 'can\'t remember', 'poster 3.jpg'),
('coba1', 'coba1', 'coba@gmail.com', 'coba1', '', '', '', '', ''),
('coba3', 'coba3', 'coba@gmail.com', 'coba3', 'https://www.csgostash.com/', 'ga pernah nyoba ga pernah tahu ya', '08719928611212', 'can\'t remember', 'profilepic.png');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `username` varchar(30) NOT NULL,
  `url` varchar(100) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `like` int(11) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`username`, `url`, `caption`, `like`, `location`) VALUES
('rizkisyafaat', 'gambar2.jpg', 'kawas', 111, 'bebas weh'),
('rizkisyafaat', 'DHL 1.jpg', 'DHL ini teh', 1, 'Bandung'),
('rizkisyafaat', 'gambar4.jpg', 'luis viton', 6528, 'Jaksel'),
('coba3', 'supreme slide.jpg', 'sendal aja da', 4532, 'New york'),
('', '', '', 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
