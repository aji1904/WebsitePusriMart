-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 08:50 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pusrimart`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(50) NOT NULL COMMENT 'id produk',
  `username` varchar(50) NOT NULL COMMENT 'user',
  `nama_produk` varchar(255) NOT NULL COMMENT 'nama produk',
  `harga` int(50) NOT NULL COMMENT 'harga',
  `jmlh_produk` int(50) NOT NULL COMMENT 'jumlah produk',
  `desc_produk` text NOT NULL COMMENT 'deskripsi produk',
  `kategori` varchar(40) NOT NULL COMMENT 'kategori produk',
  `jenis_produk` varchar(40) NOT NULL COMMENT 'jenis produk',
  `provinsi` varchar(50) NOT NULL COMMENT 'provinsi',
  `kabupaten_kota` varchar(50) NOT NULL COMMENT 'kabupaten/kota'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(50) NOT NULL COMMENT 'id transaksi',
  `email` varchar(50) NOT NULL COMMENT 'email',
  `username` varchar(50) NOT NULL COMMENT 'username',
  `id_produk` varchar(50) NOT NULL COMMENT 'id produk',
  `alamat` text NOT NULL COMMENT 'alamat',
  `banyak_produk` int(11) NOT NULL COMMENT 'banyak produk',
  `tanggal_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL COMMENT 'username',
  `name` varchar(50) NOT NULL COMMENT 'name',
  `email` varchar(50) NOT NULL COMMENT 'email',
  `password` varchar(255) NOT NULL COMMENT 'password',
  `lahir` int(11) NOT NULL COMMENT 'lahir',
  `no_hp` int(20) NOT NULL COMMENT 'nomor telepon',
  `gender` varchar(20) NOT NULL COMMENT 'gender'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
