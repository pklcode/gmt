-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Feb 2018 pada 09.18
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gmt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `content1`
--

CREATE TABLE IF NOT EXISTS `content1` (
`id_content1` int(11) NOT NULL,
  `nama` text NOT NULL,
  `tanggal` text NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `id_category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `content2`
--

CREATE TABLE IF NOT EXISTS `content2` (
`id_content2` int(11) NOT NULL,
  `nama` text NOT NULL,
  `status` text NOT NULL,
  `email` text NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `v&m` text NOT NULL,
  `sosmed` text NOT NULL,
  `ttl` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `content_category`
--

CREATE TABLE IF NOT EXISTS `content_category` (
`id_category` int(11) NOT NULL,
  `db` text NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`id_feedback` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
`id_komen` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `isi` text NOT NULL,
  `id_content1` int(100) NOT NULL,
  `tgl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id_pages` int(11) NOT NULL,
  `menu` text NOT NULL,
  `link` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content1`
--
ALTER TABLE `content1`
 ADD PRIMARY KEY (`id_content1`);

--
-- Indexes for table `content2`
--
ALTER TABLE `content2`
 ADD PRIMARY KEY (`id_content2`);

--
-- Indexes for table `content_category`
--
ALTER TABLE `content_category`
 ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`id_komen`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id_pages`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content1`
--
ALTER TABLE `content1`
MODIFY `id_content1` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `content2`
--
ALTER TABLE `content2`
MODIFY `id_content2` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `content_category`
--
ALTER TABLE `content_category`
MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `id_pages` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
