-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 11:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olahraga`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `username`, `nama`, `data`, `foto`) VALUES
(1, 'admin', 'admin', 'Hasugian', 'admin', 'admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `nama`, `email`, `comen`) VALUES
(2, 'Kevin Sinaga', 'Kevinnaga@gmail.com', 'Menurut saya, website anda sudah bagus hanya saja ......'),
(3, 'Maya Siotang', 'hotang@gmail.com', 'Websitenya sudah keren, Kenapa website ini ......'),
(6, 'Yudi Hasugian', 'yudhi.hasugian@facebook.com', 'Menurut saya website ini udah keren.... semoga tetap seperti dan tetap berkembang'),
(8, 'Claudiooooo Sitohang', 'Claudio@gmail.com', 'I love you');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `judul_berita`, `tanggal`, `description`, `image`) VALUES
(5, 'Pertandingan Sepak Bola antara Parlilitan Vs Tarabingtang', '2022-02-07', 'Pada tanggal 6 Februari 2022 dihari Minggu, Dikabupaten Humbang Hasundutan ada pertandinga Sepak Bola antara Pemain Muda Sepak Bola Parlilitan Vs Pemain Muda Sepak Bola Tarabintang. Pertandingan di adakan di lapangan Tarabintang. Selama pertangingan dimul', '734-bola_2.jpg'),
(6, 'Bupati Humbahas Membuka Turnamen Sepakbola Sisingamangaraja XII CUP ', '2021-09-10', 'Bupati Humbang Hasundutan yang diwakili oleh Sekretaris Daerah Humbang Hasundutan Drs. Tonny Sihombing, M.IP membuka secara resmi Turnamen Sisingamangaraja XII Cup II yang dilaksanakan di Lapangan Merdeka, Doloksanggul, Selasa (10/9). ', '917-1.jpg'),
(7, 'Seleksi TImnas U-16 di Humbang Hasundutan', '2021-10-12', 'Tiim Nasional melakukan seleksi sepak bola kepada pelajar U-16. Seleksi Timnas Pelajar U-16 KEMENPORA REPUBLIK INDONESIA di laksanakan di STADION SIMANGAROSANG. Pada Gambar di atas merupakan Tim Sepak bola U-16 dari Parlilitan yang akan bertanding', '834-bola_5.jpg'),
(8, 'Latih Tanding antara U-17 Parlilitan dengan U-17 Pearaja', '2022-04-12', 'Latihan tanding sepak bola antara U-17 Parlilitan vs U-17 Pearaja dilaksanakan di lapangan Parlilitan yaitu lapangan Tanah Lapang Parlilitan. Latihan tanding ini bertujuan untuk meningkatkan kualitas Pemain bola usia Muda sekarang', '113-bola_4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
