-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Okt 2022 pada 03.36
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemesanantiketwisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `nama_lengkap` varchar(35) NOT NULL,
  `nomor_identitas` varchar(16) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `tmpt_wisata` varchar(50) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `pengu_dewasa` varchar(2) NOT NULL,
  `pengu_anak` varchar(2) NOT NULL,
  `total_bayar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`nama_lengkap`, `nomor_identitas`, `no_hp`, `tmpt_wisata`, `tgl_kunjungan`, `pengu_dewasa`, `pengu_anak`, `total_bayar`) VALUES
('Muhammad Riandi', '5203081202340005', '081907181719', 'Pantai Ketapang', '2022-10-24', '2', '2', '30000'),
('Juhriyadi', '5203081506940008', '081907123456', 'Dende Seruni', '2022-10-24', '2', '3', '35000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`nomor_identitas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
