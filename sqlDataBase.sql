-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2020 pada 10.23
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-vietgram`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `photo`
--

CREATE TABLE `photo` (
  `username` varchar(30) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `caption` varchar(200) NOT NULL,
  `location` varchar(50) NOT NULL,
  `likes` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `photo`
--

INSERT INTO `photo` (`username`, `url`, `caption`, `location`, `likes`) VALUES
('mfaishaldp', 'a.jpg', 'Senja Merupakan sebuah anugrah', 'Ufuk Timur', 96),
('abdul', 'c.jpg', 'Senja..', 'Jakarta', 32),
('mfaishaldp', '3.jfif', 'Joni Walker', 'Zimbabwe', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `website` varchar(40) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo_profile` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `name`, `website`, `bio`, `phone`, `gender`, `photo_profile`) VALUES
('mfaishaldp', '1234', 'faishaldarmaputra@gmail.com', 'M Faishal Darma Putra', 'https://github.com/mfaishaldp', 'Bernyanyi di alam yang sepi', '082218273823', 'Pria', 'isal.jpg'),
('abdul', '1234', 'abduljohri@yahoo.com', 'Abdul Johri', 'http://Johri', 'tes', '082938291', 'can\'t reme', 'johri.jfif');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
