-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2020 pada 05.07
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_furnishing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_brng` int(50) NOT NULL,
  `kategori_brng` enum('ruang_tamu','perlengkapan_rumah','kamar_tidur','dekorasi') NOT NULL,
  `nama_brng` text NOT NULL,
  `harga_brng` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_brng`, `kategori_brng`, `nama_brng`, `harga_brng`) VALUES
(1, 'ruang_tamu', 'Kursi goyang', 2995000),
(2, 'ruang_tamu', 'Kursi sofa 3 dudukan', 9795000),
(3, 'ruang_tamu', 'Meja tamu', 699000),
(4, 'ruang_tamu', 'Lampu lantai', 1299000),
(5, 'ruang_tamu', 'Gorden 1 pasang', 179000),
(6, 'perlengkapan_rumah', 'Baki', 39900),
(7, 'perlengkapan_rumah', 'Wajan penggorengan', 149000),
(8, 'perlengkapan_rumah', 'Panci dengan penutup', 219000),
(9, 'perlengkapan_rumah', '2 set perlengkapan dapur', 48900),
(10, 'perlengkapan_rumah', 'Pisau dapur dengan penutup', 9900),
(11, 'kamar_tidur', 'Kasur dengan kantong', 12999000),
(12, 'kamar_tidur', 'Sarung quilt dan 2 sarung bantal', 399000),
(13, 'kamar_tidur', 'Sarung quilt dan 2 sarung bantal', 349000),
(14, 'kamar_tidur', 'Rangka tempat tidur', 1399000),
(15, 'kamar_tidur', 'Jam dinding', 89900),
(16, 'dekorasi', 'Bunga tiruan putih', 69000),
(17, 'dekorasi', 'Bunga tiruan merah', 69900),
(18, 'dekorasi', 'Tanaman gantung', 349000),
(19, 'dekorasi', 'Tanaman gantung', 34900),
(20, 'dekorasi', 'Lentera untuk lilin', 48900);

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `id_brng` int(50) NOT NULL,
  `nama_brng` text NOT NULL,
  `kategori` enum('ruang_tamu','perlengkapan_rumah','kamar_tidur','dekorasi') NOT NULL,
  `jumlah_brng` int(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `harga_brng` int(20) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_plngn` int(20) NOT NULL,
  `nama_plngn` text NOT NULL,
  `nama_brng` varchar(20) NOT NULL,
  `jumlah_brng` int(5) NOT NULL,
  `alamat_plngn` varchar(30) NOT NULL,
  `telepon` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_plngn`, `nama_plngn`, `nama_brng`, `jumlah_brng`, `alamat_plngn`, `telepon`) VALUES
(9, 'aa', 'kursi', 2, '', 80808),
(10, 'dd', 'lampu lantai', 1, '', 80808),
(11, 'aa', 'lampu lantai', 1, '', 80808),
(12, 'syifa', 'meja', 1, '', 80808);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brng`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_plngn`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_brng` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_plngn` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
