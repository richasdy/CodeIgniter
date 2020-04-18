-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 02:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 4);

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
(1, 3, 'Bikini Bottom', 'IMG_9017.JPG', 'Cute face ><', 5),
(2, 3, 'Bikini Bottom', 'IMG_9036.JPG', 'Happy without u', 10),
(3, 1, 'PT Mencari Cinta Sejati', 'feedPhoto.jpg', 'Ups...', 100);

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
(1, 'bellatris', 'bellatris', 'Bellatris A.', 'http://bellatris.com', 'Tambah Bio', 'bella@gmail.com', '088309098121', 'Female', 'bellatris.jpg'),
(2, 'ridho', 'ridho', 'Ridho', 'http://ridho.com', 'Bismillah', 'ridho@mail.com', '085869317979', 'Male', 'avatar.jpg'),
(3, 'user', 'user', 'User', 'www.user.com', 'Ini bioku, mana biomu ?', 'user@mail.com', '088530349881', 'Male', 'IMG.9028.JPG'),
(4, 'dummy', 'dummy', 'Dummy', 'http://dumy.com', 'Aku percobaan edit', 'dumm@mail.com', '080812310912', 'Male', 'avatar.jpg\r\n'),
(6, 'fazainsyah', '1234', 'Fazainsyah', 'fazainsyah.com', 'haha hihi aja kali ya', 'fazainsyah@gmail.com', '0808080808080', 'Laki-Laki', 'Hello.jpg');

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
  MODIFY `id_user` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
