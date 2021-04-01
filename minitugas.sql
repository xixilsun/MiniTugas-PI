-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Apr 2021 pada 16.28
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minitugas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `telp`, `alamat`) VALUES
('181402031', 'Gary Alvaro', 'Laki-laki', '+6282369573355', 'Jl. Surau, Medan Petisah, Sumatera Utara'),
('181402052', 'Luis', 'Laki-laki', '+625521554214', 'Jalan Asia Megamas no 45'),
('181402055', 'Leonardo Wijaya', 'Laki-laki', '+625521554214', 'Jalan Putri Hijau Komplek Putri Hijau blok 3 no 54'),
('181402061', 'Endity Wasita Angkasa', 'Laki-laki', '081222222222', 'Jalan Sekip no 77E'),
('181402064', 'Xixillia', 'Perempuan', '0813333333333', 'Jalan Wahidin no 33'),
('181402081', 'Fernando', 'Laki-laki', '0895613311830', 'Jalan Merdeka no 25'),
('181402082', 'Betty', 'Perempuan', '08126075643', 'Jalan Perisai no 9'),
('181402083', 'Andi Law', 'Laki-laki', '082126072423', 'Jalan Brigjend Katamso no 8e'),
('181402084', 'Budi ', 'Laki-laki', '+62578448715', 'Jalan Budiman no 77E'),
('181402087', 'Justin', 'Laki-laki', '+628989545142', 'Jl. Bonjornegoro No 5, Bonyowongso, Pulo Jowo Monghosodo'),
('181402088', 'Andy Mandy', 'Laki-laki', '+625521554214', 'Jalan Dr. Mansyur no 156c, seberang pintu 4 USU');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
