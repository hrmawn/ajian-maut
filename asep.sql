-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Nov 2017 pada 15.58
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asep`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'asdasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_keranjang`
--

CREATE TABLE `tabel_keranjang` (
  `id` int(3) NOT NULL,
  `id_sepatu` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_sepatu`
--

CREATE TABLE `tabel_sepatu` (
  `id` int(3) NOT NULL,
  `merek` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `ukuran_lain` varchar(10) NOT NULL,
  `stok` varchar(10) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_sepatu`
--

INSERT INTO `tabel_sepatu` (`id`, `merek`, `tipe`, `ukuran`, `ukuran_lain`, `stok`, `harga`, `gambar`) VALUES
(2, 'Converse', 'Tipe B', '38', '29', '2', '350000', 'ssepatu.png'),
(3, 'Nike', 'Tipe B', '38', '29', '4', '880000', 'sepatu2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_ukuran`
--

CREATE TABLE `tabel_ukuran` (
  `id` int(3) NOT NULL,
  `ukuran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_ukuran`
--

INSERT INTO `tabel_ukuran` (`id`, `ukuran`) VALUES
(1, '29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_keranjang`
--
ALTER TABLE `tabel_keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_sepatu`
--
ALTER TABLE `tabel_sepatu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_ukuran`
--
ALTER TABLE `tabel_ukuran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_keranjang`
--
ALTER TABLE `tabel_keranjang`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabel_sepatu`
--
ALTER TABLE `tabel_sepatu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabel_ukuran`
--
ALTER TABLE `tabel_ukuran`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
