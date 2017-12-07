-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 Des 2017 pada 05.06
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(45) NOT NULL,
  `nama` text,
  `alamat` text,
  `telp` text,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `telp`, `email`) VALUES
(5, 'Azmil Badrun', 'Gresik', '089838388292', 'zamiln@docotel.com'),
(6, 'Aditya Pramayoga', 'Madiun', '0839383993', 'adika@gmail.com'),
(7, 'Adika Ridlo Taqwin', 'Magetan', '085790331421', 'dikaenjoy@gmail.coms'),
(10, 'Angga Jati Loryan', 'Yogyakarta', '087929838838', 'lory@gmail.com'),
(11, 'Agus Nugraha', 'Pati', '08739938893', 'agusn@gmail.com'),
(12, 'Anas Supatra', 'Kebumen', '082992292929', 'anas@gmail.com'),
(16, 'Alex', 'Magetan', '0938838838', 'alex@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
