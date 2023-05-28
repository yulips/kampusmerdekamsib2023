-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2023 pada 03.33
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studi-kasus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `isbn` varchar(20) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `judul` varchar(250) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `id_penerbit` varchar(20) DEFAULT NULL,
  `id_pengarang` varchar(20) DEFAULT NULL,
  `id_kategori` varchar(20) DEFAULT NULL,
  `id_jenisBuku` varchar(20) DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `harga_jual` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`isbn`, `gambar`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_kategori`, `id_jenisBuku`, `stok`, `harga_jual`) VALUES
('002-292', 'si juki.jpg', 'Si Juki', 2015, 'PN09', 'PG004', 'KG012', 'JNB05', 21, '75000'),
('089-112', 'bumi.jpg', 'Bumi', 2014, 'PN-03', 'PG001', 'KG012', 'JNB01', 50, '68000'),
('114-609', 'tekad.jpg', 'Tekad', 2019, 'PN-04', 'PG003', 'KG014', 'JNB01', 45, '74800'),
('178-629', 'rindu.jpeg', 'Rindu', 2018, 'PN-02', 'PG007', 'KG012', 'JNB01', 275, '99900'),
('201-687', 'milea.jpg', 'Milea', 2014, 'PN-02', 'PG001', 'KG012', 'JNB01', 400, '89900'),
('249-176', 'ambyar.jpg', 'Segala - Galanya Ambyar', 2020, 'PN-06', 'PG004', 'KG011', 'JNB01', 57, '111000'),
('289-154', 'nebula.jpg', 'Nebula', 2019, 'PN-03', 'PG001', 'KG012', 'JNB01', 124, '79900'),
('346-245', 'Eccedentesiast.jpg', 'Eccedentesiast', 2022, 'PN-02', 'PG002', 'KG012', 'JNB01', 99, '99900'),
('375-908', 'dilan.jpg', 'Dilan 1991', 2016, 'PN-04', 'PG008', 'KG012', 'JNB01', 500, '78900'),
('462-952', 'me.jpg', 'About Me', 2018, 'PN-05', 'PG007', 'KG011', 'JNB01', 80, '63750'),
('478-078', 'dewasa.jpg', 'Dewasa Itu Luka?', 2022, 'PN-04', 'PG005', 'KG011', 'JNB01', 35, '129900'),
('534-076', 'rpul.jpg', 'RPUL Rangkuman Pengetahuan Umum', 2014, 'PN-06', 'PG003', 'KG017', 'JNB05', 300, '56500'),
('569-740', 'memasak.jpg', 'Pandai Memasak', 2018, 'PN-05', 'PG007', 'KG016', 'JNB05', 55, '65500'),
('582-341', 'tentang tubuh.jpg', 'Tentang Tubuhmu', 2019, 'PN-03', 'PG008', 'KG015', 'JNB05', 50, '49900'),
('631-748', NULL, 'Jelajahi Matematika', 2015, 'PN-07', 'PG004', 'KG013', 'JNB05', 30, '25000'),
('746-902', 'bobo.jpg', 'Majalah Bobo', 2019, 'PN-06', 'PG003', 'KG018', 'JNB02', 150, '19900'),
('786-022', 'detektif.jpg', 'Detektif Conan', 2017, 'PN-01', 'PG006', 'KG012', 'JNB04', 75, '75000'),
('889-076', 'ensi cilik transprot.jpg', 'Ensiklopedia Cilik Transportasi', 2021, 'PN-03', 'PG005', 'KG018', 'JNB05', 85, '22500'),
('980-713', 'kitab talim.jpg', 'Kitab Talim Mutaallim', 2014, 'PN-05', 'PG003', 'KG014', 'JNB05', 125, '35500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_buku`
--

CREATE TABLE `jenis_buku` (
  `id_jenisBuku` varchar(20) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_buku`
--

INSERT INTO `jenis_buku` (`id_jenisBuku`, `nama`) VALUES
('JNB01', 'Novel'),
('JNB02', 'Majalah'),
('JNB03', 'Kamus'),
('JNB04', 'Komik'),
('JNB05', 'Ensiklopedia'),
('JNB06', 'Dongeng'),
('JNB07', 'Biografi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(20) NOT NULL,
  `kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
('KG011', 'Buku Dewasa'),
('KG012', 'Buku Remaja'),
('KG013', 'Buku Pelajaran'),
('KG014', 'Buku Agama'),
('KG015', 'Buku Kesehatan'),
('KG016', 'Buku Masakan'),
('KG017', 'Buku Pengetahuan'),
('KG018', 'Buku Anak - Anak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` varchar(20) NOT NULL,
  `nama_penerbit` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` int(20) NOT NULL,
  `alamat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `phone`, `alamat`) VALUES
('PN-01', 'Penerbit 01', 'penerbit01@gmail.com', 876578901, 'Yogyakarta'),
('PN-02', 'Penerbit 02', 'penerbit02@gmail.com', 856578907, 'Jakarta'),
('PN-03', 'Penerbit 03', 'penerbit03@gmail.com', 813452341, 'Depok'),
('PN-04', 'Penerbit 04', 'penerbit04@gmail.com', 867654329, 'Ponorogo'),
('PN-05', 'Penerbit 05', 'penerbit05@gmail.com', 845364780, 'Jakarta Selatan'),
('PN-06', 'Penerbit 06', 'penerbit06@gmail.com', 896670897, 'Surakarta'),
('PN-07', 'Penerbit 07', 'penerbit07@gmail.com', 835432340, 'Jakarta Timur'),
('PN-08', 'Penerbit 08', 'penerbit08@gmail.com', 825467890, 'Semarang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengarang`
--

CREATE TABLE `pengarang` (
  `id_pengarang` varchar(20) NOT NULL,
  `nama_pengarang` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `alamat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengarang`
--

INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`, `email`, `phone`, `alamat`) VALUES
('PG001', 'Pengarang 001', 'pengarang001@gmail.com', 812456378, 'Bandung'),
('PG002', 'Pengarang 002', 'pengarang002@gmail.com', 882341234, 'Jakarta Barat'),
('PG003', 'Pengarang 003', 'pengarang003@gmail.com', 878909876, 'Surabaya'),
('PG004', 'Pengarang 004', 'pengarang004@gmail.com', 873541234, 'Semarang'),
('PG005', 'Pengarang 005', 'pengarang005@gmail.com', 897658768, 'Tangerang Selatan'),
('PG006', 'Pengarang 006', 'pengarang006@gmail.com', 861234569, 'Yogyakarta'),
('PG007', 'Pengarang 007', 'pengarang007@gmail.com', 897654210, 'Bogor'),
('PG008', 'Pengarang 008', 'pengarang008@gmail.com', 824567365, 'Malang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `id_jenisBuku` (`id_jenisBuku`) USING BTREE,
  ADD KEY `id_penerbit` (`id_penerbit`) USING BTREE,
  ADD KEY `id_kategori` (`id_kategori`) USING BTREE,
  ADD KEY `id_pengarang` (`id_pengarang`) USING BTREE;

--
-- Indeks untuk tabel `jenis_buku`
--
ALTER TABLE `jenis_buku`
  ADD PRIMARY KEY (`id_jenisBuku`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indeks untuk tabel `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`id_pengarang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
