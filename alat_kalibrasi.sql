-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2025 pada 15.07
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kalibrasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat_kalibrasi`
--

CREATE TABLE `alat_kalibrasi` (
  `id` int(11) NOT NULL,
  `nama_alat` varchar(100) NOT NULL,
  `nomor_seri` varchar(100) NOT NULL,
  `tanggal_kalibrasi` date NOT NULL,
  `hasil_kalibrasi` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `alat_kalibrasi`
--

INSERT INTO `alat_kalibrasi` (`id`, `nama_alat`, `nomor_seri`, `tanggal_kalibrasi`, `hasil_kalibrasi`, `status`) VALUES
(1, 'Infuse pump', '1240576', '2025-11-04', 'baik', 'Baik'),
(2, 'Baby Incubator', '2450981', '2025-05-14', 'Perbaikan', 'Perlu Kalibrasi Ulang'),
(3, 'USG', '3561738', '2025-06-08', 'perbaikan', 'Perlu Kalibrasi Ulang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat_kalibrasi`
--
ALTER TABLE `alat_kalibrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alat_kalibrasi`
--
ALTER TABLE `alat_kalibrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
