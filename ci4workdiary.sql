-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2021 pada 09.04
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4workdiary`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `work`
--

INSERT INTO `work` (`id`, `kegiatan`, `tanggal`, `created_at`, `updated_at`, `keterangan`) VALUES
(15, 'Cek UPS Fani', '2021-01-04', '2021-01-04', '2021-01-04', 'Baterray Drop'),
(16, 'Serah terima UPS ke Mba Dini', '2021-01-04', '2021-01-04', '2021-01-04', 'Ganti Batteray'),
(18, 'Terima dari Bintang Comp - 2 Monitor, 2 batteray UPS, 1 PSU', '2021-01-04', '2021-01-04', '2021-01-04', ''),
(19, 'Re-install WPS GPJ Devi', '2021-01-04', '2021-01-04', '2021-01-04', ''),
(20, 'Instalasi PDF Reader - Hendra FA', '2021-01-05', '2021-01-04', '2021-01-04', ''),
(21, 'Serah Terima UPS ke Hendra FA', '2021-01-05', '2021-01-05', '2021-01-05', ''),
(22, 'Serah terima UPS ke Devi GPJ', '2021-01-05', '2021-01-05', '2021-01-05', 'Ganti Batteray');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
