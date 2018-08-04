-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 04:46 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_azha_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `az_detil_pembelian`
--

CREATE TABLE `az_detil_pembelian` (
  `id` int(13) UNSIGNED ZEROFILL NOT NULL,
  `id_trans` int(13) NOT NULL,
  `kode_barang` int(13) NOT NULL,
  `berat_barang` int(5) NOT NULL,
  `karat_barang` int(5) NOT NULL,
  `harga_barang` int(13) NOT NULL,
  `jumlah_barang` int(13) NOT NULL,
  `diskon` int(13) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `az_detil_penjualan`
--

CREATE TABLE `az_detil_penjualan` (
  `id_transaksi` int(13) NOT NULL,
  `kode_barang` int(13) NOT NULL,
  `berat_barang` int(5) NOT NULL,
  `karat_barang` int(5) NOT NULL,
  `harga_barang` int(13) NOT NULL,
  `jumlah_barang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `az_mast_barang`
--

CREATE TABLE `az_mast_barang` (
  `id` int(13) UNSIGNED ZEROFILL NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kode_barang` int(13) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `stok_barang` int(10) NOT NULL,
  `berat_barang` int(5) NOT NULL,
  `harga_barang` int(25) NOT NULL,
  `karat` varchar(255) NOT NULL,
  `dibuat` date NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `az_mast_barang`
--

INSERT INTO `az_mast_barang` (`id`, `nama_barang`, `kode_barang`, `deskripsi`, `stok_barang`, `berat_barang`, `harga_barang`, `karat`, `dibuat`, `photo`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(0000000000001, 'Cincin batu', 4012, 'Tes', 12, 200, 99000123, '24', '2018-07-18', 'emas.jpg', NULL, NULL, '2018-07-19 09:54:19', '2018-07-19 18:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `az_mast_kategori`
--

CREATE TABLE `az_mast_kategori` (
  `id` int(13) UNSIGNED ZEROFILL NOT NULL,
  `kode_produk` int(13) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `kode_kategori` int(13) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `az_mast_kategori`
--

INSERT INTO `az_mast_kategori` (`id`, `kode_produk`, `nama_kategori`, `kode_kategori`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(0000000000002, 23, 'Kalung', 1002, NULL, NULL, '2018-07-19 12:10:16', '2018-07-19 12:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `az_mast_outlet`
--

CREATE TABLE `az_mast_outlet` (
  `id` int(13) UNSIGNED ZEROFILL NOT NULL,
  `nama_outlet` varchar(255) NOT NULL,
  `lokasi_outlet` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `kode_outlet` int(13) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `az_mast_outlet`
--

INSERT INTO `az_mast_outlet` (`id`, `nama_outlet`, `lokasi_outlet`, `deskripsi`, `photo`, `kode_outlet`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(0000000000001, 'Toko Fahlevi', 'Blok M', 'Grand Blok M', 'fahlevi.jpg', 1001, '', '', '2018-07-19 19:26:07', '0000-00-00 00:00:00'),
(0000000000002, 'Diamond Store', 'Bogor Selatan', 'Ekalokasari Plaza', NULL, 123, NULL, NULL, '2018-07-19 12:38:08', '2018-07-19 12:43:05');

-- --------------------------------------------------------

--
-- Table structure for table `az_mast_pegawai`
--

CREATE TABLE `az_mast_pegawai` (
  `id` int(13) UNSIGNED ZEROFILL NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `kode_pegawai` int(13) NOT NULL,
  `tempat_lahir` varchar(35) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(25) NOT NULL,
  `handphone` int(13) UNSIGNED ZEROFILL NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `az_mast_pegawai`
--

INSERT INTO `az_mast_pegawai` (`id`, `nama_pegawai`, `kode_pegawai`, `tempat_lahir`, `tgl_lahir`, `email`, `handphone`, `alamat`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(0000000000002, '4', 4, '4', '2018-07-20', '4', 0000000000003, '4', NULL, NULL, '2018-07-21 10:15:06', '2018-07-21 10:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `az_mast_pelanggan`
--

CREATE TABLE `az_mast_pelanggan` (
  `id` int(13) UNSIGNED ZEROFILL NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `kode_pelanggan` int(13) DEFAULT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(15) DEFAULT NULL,
  `handphone` int(13) UNSIGNED NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `az_mast_pelanggan`
--

INSERT INTO `az_mast_pelanggan` (`id`, `nama_pelanggan`, `kode_pelanggan`, `tempat_lahir`, `tgl_lahir`, `email`, `handphone`, `alamat`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(0000000000001, '1', NULL, '4', '2018-07-13', 'em', 1, 'Bogor timur jalan jalan baru Bogor timur jalan jala', NULL, NULL, '2018-07-21 10:42:42', '2018-07-21 10:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `az_mast_produk`
--

CREATE TABLE `az_mast_produk` (
  `id` int(13) UNSIGNED ZEROFILL NOT NULL,
  `kode_produk` int(13) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `az_mast_produk`
--

INSERT INTO `az_mast_produk` (`id`, `kode_produk`, `deskripsi`, `nama_produk`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(0000000000002, 1, '3', '2', NULL, NULL, '2018-07-21 11:04:24', '2018-07-21 11:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `az_trans_pembelian`
--

CREATE TABLE `az_trans_pembelian` (
  `id` int(13) UNSIGNED ZEROFILL NOT NULL,
  `id_trans` int(13) NOT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `kode_pelanggan` int(13) DEFAULT NULL,
  `tipe_bayar` int(3) DEFAULT NULL,
  `tgl_transaksi` date NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `az_trans_pemesanan`
--

CREATE TABLE `az_trans_pemesanan` (
  `id` int(13) UNSIGNED ZEROFILL NOT NULL,
  `id_trans` int(13) NOT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `kode_pelanggan` int(13) DEFAULT NULL,
  `tipe_bayar` int(3) DEFAULT NULL,
  `tgl_transaksi` date NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `az_trans_penjualan`
--

CREATE TABLE `az_trans_penjualan` (
  `id` int(13) UNSIGNED ZEROFILL NOT NULL,
  `id_trans` int(13) NOT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `kode_pelanggan` int(13) DEFAULT NULL,
  `tipe_bayar` int(3) DEFAULT NULL,
  `tgl_transaksi` date NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `az_detil_pembelian`
--
ALTER TABLE `az_detil_pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `az_mast_barang`
--
ALTER TABLE `az_mast_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `az_mast_kategori`
--
ALTER TABLE `az_mast_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `az_mast_outlet`
--
ALTER TABLE `az_mast_outlet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `az_mast_pegawai`
--
ALTER TABLE `az_mast_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `az_mast_pelanggan`
--
ALTER TABLE `az_mast_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `az_mast_produk`
--
ALTER TABLE `az_mast_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `az_trans_pembelian`
--
ALTER TABLE `az_trans_pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `az_trans_pemesanan`
--
ALTER TABLE `az_trans_pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `az_trans_penjualan`
--
ALTER TABLE `az_trans_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `az_mast_barang`
--
ALTER TABLE `az_mast_barang`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `az_mast_kategori`
--
ALTER TABLE `az_mast_kategori`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `az_mast_outlet`
--
ALTER TABLE `az_mast_outlet`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `az_mast_pegawai`
--
ALTER TABLE `az_mast_pegawai`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `az_mast_pelanggan`
--
ALTER TABLE `az_mast_pelanggan`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `az_mast_produk`
--
ALTER TABLE `az_mast_produk`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `az_trans_pembelian`
--
ALTER TABLE `az_trans_pembelian`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `az_trans_pemesanan`
--
ALTER TABLE `az_trans_pemesanan`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `az_trans_penjualan`
--
ALTER TABLE `az_trans_penjualan`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
