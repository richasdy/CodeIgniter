-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 07:38 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instagramci`
--

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id_user` bigint(255) NOT NULL,
  `id_user_follow` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`id_user`, `id_user_follow`) VALUES
(1, 4),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` bigint(255) NOT NULL,
  `id_user` bigint(255) NOT NULL,
  `location` varchar(30) NOT NULL,
  `pict` varchar(200) NOT NULL,
  `status` varchar(120) DEFAULT NULL,
  `likes` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `id_user`, `location`, `pict`, `status`, `likes`) VALUES
(1, 1, 'bandung', 'IMG_9017.JPG', 'spongebob lucu', 200),
(2, 3, 'medan', 'IMG_9036.JPG', 'lalala', 300);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` bigint(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `website` varchar(50) DEFAULT NULL,
  `bio` varchar(120) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(13) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `name`, `website`, `bio`, `email`, `phone`, `gender`, `avatar`) VALUES
(1, 'bellatris', 'bellatris', 'Bellatris ', 'http://bellatris.com', 'if-42-11', 'bella@gmail.com', '', 'Female', 'bellatris.jpg'),
(3, 'lala', 'lala', 'lala', 'www.lala.com', 'bio', 'lala@icloud', '086827291', 'Male', 'IMG.9028.JPG'),
(4, 'baba', 'baba', 'bababi', 'http://baba.com', 'akulah', 'baba@mail.com', '0982813', 'Male', 'avatar.jpg\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD KEY `fk_following` (`id_user_follow`),
  ADD KEY `fk_post` (`id_user`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `fk_follow` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `fk_following` FOREIGN KEY (`id_user_follow`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `fk_post` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
