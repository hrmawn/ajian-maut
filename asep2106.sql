-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2018 pada 18.26
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

--
-- Dumping data untuk tabel `tabel_keranjang`
--

INSERT INTO `tabel_keranjang` (`id`, `id_sepatu`, `tanggal`, `status`) VALUES
(2, 2, '2018-03-10', 1),
(3, 29, '2018-06-02', 1),
(5, 20, '2018-06-06', 1),
(6, 20, '2018-06-06', 1),
(7, 17, '2018-06-12', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_merek`
--

CREATE TABLE `tabel_merek` (
  `id` int(3) NOT NULL,
  `nama_merek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_merek`
--

INSERT INTO `tabel_merek` (`id`, `nama_merek`) VALUES
(1, 'CONVERSE'),
(3, 'NIKE'),
(4, 'ADIDAS'),
(5, 'PUMA'),
(6, 'NEW BALANCE'),
(7, 'SKITCHER'),
(8, 'VANS');

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
(13, 'CONVERSE', 'ct 67 slip low', '35', '22', '7', '460000', 'ct 67 slip low.png'),
(16, 'CONVERSE', 'One star Seude', '37,5', '24', '7', '520000', 'one star.png'),
(17, 'CONVERSE', 'Jack purcell', '39,5', '25', '2', '430000', 'jack purcell.png'),
(19, 'CONVERSE', 'One star Seude', '41', '26', '0', '530000', 'ct os seude.png'),
(20, 'CONVERSE', '70 Leather', '42', '27', '9', '850000', 'ct 70 leather.png'),
(21, 'CONVERSE', 'One Star Seude cny', '43', '28', '3', '630000', 'ct os seude cny.png'),
(22, 'CONVERSE', 'Jack purcell', '44,5', '29', '8', '430000', 'jack purcell.png'),
(23, 'CONVERSE', 'All Star High', '46', '30', '4', '400000', 'cstm ct as high.png'),
(24, 'NIKE', 'Air max', '38,5', '24', '6', '895000', 'Air max.png'),
(25, 'NIKE', 'Air Zoom ', '40', '25', '4', '1200000', 'air zoom mariah flyknit racer.png'),
(26, 'NIKE', 'Fly Knit Trainer', '41', '26', '3', '1250000', 'flyknit trainer.png'),
(27, 'NIKE', 'Air max', '42,5', '27', '5', '895000', 'Air max.png'),
(28, 'NIKE', 'Air Zoom ', '44', '28', '4', '1200000', 'air zoom mariah flyknit racer.png'),
(29, 'NIKE', 'Fly Knit Trainer', '45', '29', '6', '1250000', 'flyknit trainer.png'),
(30, 'NIKE', 'Air max', '46', '30', '6', '895000', 'Air max.png'),
(31, 'ADIDAS', 'Stan Smith', '36', '22', '7', '600000', 'STAN SMITH SHOES.png'),
(32, 'ADIDAS', 'Campus', '37,3', '23', '5', '1100000', 'adidas campus.png'),
(33, 'ADIDAS', 'Super Star', '38,7', '24', '9', '400000', 'SUPERSTAR SHOES.png'),
(34, 'ADIDAS', 'Stan Smith', '40', '25', '3', '600000', 'STAN SMITH SHOES.png'),
(35, 'ADIDAS', 'Campus', '41,3', '26', '4', '1100000', 'adidas campus.png'),
(36, 'ADIDAS', 'Super Star', '42,7', '27', '8', '400000', 'SUPERSTAR SHOES.png'),
(37, 'ADIDAS', 'Stan Smith', '44', '28', '3', '600000', 'STAN SMITH SHOES.png'),
(38, 'ADIDAS', 'Campus', '45,3', '29', '2', '1100000', 'adidas campus.png'),
(39, 'ADIDAS', 'Stan Smith', '46,7', '30', '1', '600000', 'STAN SMITH SHOES.png'),
(40, 'NEW BALANCE', '574', '36', '22', '3', '520000', '574.png'),
(41, 'NEW BALANCE', '576', '37,5', '23', '8', '480000', '576.png'),
(42, 'NEW BALANCE', '998', '38,5', '24', '2', '600000', '998.png'),
(43, 'NEW BALANCE', '574', '40', '25', '3', '520000', '574.png'),
(44, 'NEW BALANCE', '576', '41,5', '26', '5', '480000', '576.png'),
(45, 'NEW BALANCE', '998', '42,5', '27', '3', '600000', '998.png'),
(46, 'NEW BALANCE', '574', '44', '28', '6', '520000', '574.png'),
(47, 'NEW BALANCE', '576', '45', '29', '4', '480000', '576.png'),
(48, 'NEW BALANCE', '998', '46,5', '30', '7', '600000', '998.png'),
(49, 'VANS', 'Authentic', '35,5', '23', '3', '650000', 'authentic 1.png'),
(50, 'VANS', 'Era', '37,5', '24', '2', '600000', 'era 2.png'),
(51, 'VANS', 'Old School', '39', '25', '3', '700000', 'old school 2.png'),
(52, 'VANS', 'Authentic', '40,5', '26', '5', '650000', 'authentic 1.png'),
(53, 'VANS', 'Era', '42', '27', '5', '600000', 'era 2.png'),
(54, 'VANS', 'Old School', '43', '28', '4', '700000', 'old school 2.png'),
(55, 'VANS', 'Authentic', '44,5', '29', '3', '650000', 'authentic 1.png'),
(56, 'VANS', 'Era', '46', '30', '4', '600000', 'era 2.png');

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
(1, '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_keranjang`
--
ALTER TABLE `tabel_keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_merek`
--
ALTER TABLE `tabel_merek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_sepatu`
--
ALTER TABLE `tabel_sepatu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_ukuran`
--
ALTER TABLE `tabel_ukuran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_keranjang`
--
ALTER TABLE `tabel_keranjang`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tabel_merek`
--
ALTER TABLE `tabel_merek`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tabel_sepatu`
--
ALTER TABLE `tabel_sepatu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `tabel_ukuran`
--
ALTER TABLE `tabel_ukuran`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
