-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Okt 2018 pada 17.11
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `posting`
--

CREATE TABLE `posting` (
  `id` int(255) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `nim` int(255) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posting`
--

INSERT INTO `posting` (`id`, `judul`, `isi`, `nim`, `gambar`) VALUES
(3, 'soeharto', 'maekkkkkkahahahhahahajaaaaiaiaiaiiaiaiaiiiiiiiiiiiiiiiiiiiiiiiiiiii', 2147483647, '8.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL,
  `nim` int(255) NOT NULL,
  `kelas` text NOT NULL,
  `jk` text NOT NULL,
  `hobi` text NOT NULL,
  `fakultas` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `nim`, `kelas`, `jk`, `hobi`, `fakultas`, `alamat`) VALUES
('pram', '123', 'hijratul', 2147483647, '1', 'laki-laki', 'Olahraga,Membaca', 'Teknik Elektro', 'padang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `posting`
--
ALTER TABLE `posting`
  ADD CONSTRAINT `posting_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `user` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
