-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 12:04 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
  `id_trans` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_barang` int(13) NOT NULL,
  `berat_barang` int(5) NOT NULL,
  `karat_barang` int(5) NOT NULL,
  `harga_barang` int(13) NOT NULL,
  `jumlah_barang` int(13) NOT NULL,
  `diskon` int(13) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `az_detil_pembelian`
--

INSERT INTO `az_detil_pembelian` (`id`, `id_trans`, `kode_barang`, `berat_barang`, `karat_barang`, `harga_barang`, `jumlah_barang`, `diskon`, `keterangan`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(0000000000001, '111', 100, 90, 24, 2000, 1, 0, 'lorem ipsum dolor 1', '', NULL, '2018-07-24 09:15:42', '2018-07-25 10:23:01'),
(0000000000002, '111', 100, 20, 23, 3000, 1, 0, 'lorem ipsum dolor 2', NULL, NULL, '2018-07-24 09:15:42', '2018-07-25 10:24:00'),
(0000000000003, '222', 300, 20, 24, 3000, 2, 0, 'lorem ipsum dolor 3', NULL, NULL, '2018-07-24 09:15:42', '2018-07-25 10:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `az_detil_pemesanan`
--

CREATE TABLE `az_detil_pemesanan` (
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
  `id` int(13) UNSIGNED ZEROFILL NOT NULL,
  `id_trans` int(13) NOT NULL,
  `kode_barang` int(13) NOT NULL,
  `berat_barang` int(5) NOT NULL,
  `karat_barang` int(5) NOT NULL,
  `harga_barang` int(13) NOT NULL,
  `jumlah_barang` int(10) NOT NULL,
  `diskon` int(13) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `az_detil_penjualan`
--

INSERT INTO `az_detil_penjualan` (`id`, `id_trans`, `kode_barang`, `berat_barang`, `karat_barang`, `harga_barang`, `jumlah_barang`, `diskon`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(0000000000001, 1, 2, 3, 4, 5, 6, 10, NULL, NULL, '2018-07-24 05:47:36', '2018-07-24 05:47:36'),
(0000000000002, 1, 7, 7, 4, 6, 6, 19, NULL, NULL, '2018-07-24 05:49:16', '2018-07-24 05:49:26'),
(0000000000003, 2, 4, 4, 4, 4, 4, NULL, NULL, NULL, '2018-07-24 06:36:07', '2018-07-24 09:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `az_mast_barang`
--

CREATE TABLE `az_mast_barang` (
  `id` int(13) UNSIGNED ZEROFILL NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kode_barang` varchar(13) NOT NULL,
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
(0000000000001, 'Cincin batu', '100', 'Tes', 12, 200, 99000123, '24', '2018-07-18', 'emas.jpg', NULL, NULL, '2018-07-19 09:54:19', '2018-07-25 10:23:16'),
(0000000000002, 'Kalung', '300', '1', 1, 1, 1, '1', '2018-07-04', NULL, NULL, NULL, '2018-07-25 03:55:33', '2018-07-25 10:23:21');

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
(0000000000002, 'Diamond Store', 'Bogor Selatan', 'Ekalokasari Plaza', NULL, 123, NULL, NULL, '2018-07-19 12:38:08', '2018-07-19 12:43:05'),
(0000000000003, '3cb48e40-908d-11e8-acd5-fba3561cb203', 'UUID', 'UUID', NULL, 123, NULL, NULL, '2018-07-25 21:34:51', '2018-07-25 21:34:51');

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
  `handphone` varchar(255) NOT NULL,
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
(0000000000002, 'Lutfi Febrianto', 1, 'Bogor', '1996-02-25', 'Lutfi.febrianto@gmail.com', '085718841359', 'Jl Mekar Jaya RT 1 RW 9 Kelurahan Ranggamekar', NULL, NULL, '2018-07-21 10:15:06', '2018-07-25 07:40:46');

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
(0000000000001, 'Guest', 0, '4', '2018-07-13', 'em', 1, 'Bogor timur jalan jalan baru Bogor timur jalan jala', NULL, NULL, '2018-07-21 10:42:42', '2018-07-25 04:52:55'),
(0000000000002, 'Samsudin', 1, 'Bogor', '2018-07-09', 'awqweqw', 1, 'asd', NULL, NULL, '2018-07-25 04:49:55', '2018-07-25 04:49:55');

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
  `id_trans` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pegawai` varchar(255) DEFAULT NULL,
  `kode_pelanggan` int(13) DEFAULT NULL,
  `tipe_bayar` int(3) DEFAULT NULL,
  `tgl_transaksi` date NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `az_trans_pembelian`
--

INSERT INTO `az_trans_pembelian` (`id`, `id_trans`, `kode_pegawai`, `kode_pelanggan`, `tipe_bayar`, `tgl_transaksi`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(0000000000001, '111', '1', 0, 1, '2018-07-10', NULL, NULL, '2018-07-24 09:15:02', '2018-07-25 10:22:40'),
(0000000000002, '222', '1', 1, 2, '2018-07-05', NULL, NULL, '2018-07-24 09:15:02', '2018-07-25 10:22:43');

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
-- Dumping data for table `az_trans_penjualan`
--

INSERT INTO `az_trans_penjualan` (`id`, `id_trans`, `nama_pegawai`, `kode_pelanggan`, `tipe_bayar`, `tgl_transaksi`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(0000000000001, 1, 'trans 1', 3, 1, '2018-07-03', NULL, NULL, '2018-07-24 05:48:17', '2018-07-24 06:38:54'),
(0000000000002, 2, 'trans 2', 2, 2, '2018-07-03', NULL, NULL, '2018-07-24 09:00:47', '2018-07-24 09:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `az_user_group`
--

CREATE TABLE `az_user_group` (
  `id` int(13) UNSIGNED ZEROFILL NOT NULL,
  `usergroup` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `az_user_group`
--

INSERT INTO `az_user_group` (`id`, `usergroup`, `description`, `is_active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(0000000000001, 'Kasir', 'Mengelola kasir', 1, NULL, NULL, '2018-07-23 04:20:44', '2018-07-22 23:01:29'),
(0000000000002, 'Sales', 'Menawarkan Produk', 1, NULL, NULL, '2018-07-22 22:59:04', '2018-07-22 23:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `az_user_log`
--

CREATE TABLE `az_user_log` (
  `id` int(13) UNSIGNED ZEROFILL NOT NULL,
  `id_user` int(13) NOT NULL,
  `transaction` text NOT NULL,
  `item` text,
  `datetime` datetime NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `az_user_management`
--

CREATE TABLE `az_user_management` (
  `id` int(13) UNSIGNED ZEROFILL NOT NULL,
  `id_user_group` int(13) NOT NULL,
  `id_outlet` int(13) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_superadmin` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `remember_me` varchar(255) DEFAULT NULL,
  `forgot_password` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `az_user_management`
--

INSERT INTO `az_user_management` (`id`, `id_user_group`, `id_outlet`, `username`, `email`, `password`, `is_superadmin`, `is_active`, `remember_me`, `forgot_password`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(0000000000003, 1, 1, 'fhebriantz', 'Lutfi.febrianto@gmail.com', '1004ajib', 0, 0, NULL, NULL, NULL, NULL, '2018-07-23 00:38:22', '2018-07-23 00:50:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_07_26_043656_create_master_u_u_d', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uuid`
--

CREATE TABLE `uuid` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `az_detil_pembelian`
--
ALTER TABLE `az_detil_pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `az_detil_pemesanan`
--
ALTER TABLE `az_detil_pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `az_detil_penjualan`
--
ALTER TABLE `az_detil_penjualan`
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
-- Indexes for table `az_user_group`
--
ALTER TABLE `az_user_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `az_user_log`
--
ALTER TABLE `az_user_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `az_user_management`
--
ALTER TABLE `az_user_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `az_detil_pembelian`
--
ALTER TABLE `az_detil_pembelian`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `az_detil_pemesanan`
--
ALTER TABLE `az_detil_pemesanan`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `az_detil_penjualan`
--
ALTER TABLE `az_detil_penjualan`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `az_mast_barang`
--
ALTER TABLE `az_mast_barang`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `az_mast_kategori`
--
ALTER TABLE `az_mast_kategori`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `az_mast_outlet`
--
ALTER TABLE `az_mast_outlet`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `az_mast_pegawai`
--
ALTER TABLE `az_mast_pegawai`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `az_mast_pelanggan`
--
ALTER TABLE `az_mast_pelanggan`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `az_mast_produk`
--
ALTER TABLE `az_mast_produk`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `az_trans_pembelian`
--
ALTER TABLE `az_trans_pembelian`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `az_trans_pemesanan`
--
ALTER TABLE `az_trans_pemesanan`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `az_trans_penjualan`
--
ALTER TABLE `az_trans_penjualan`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `az_user_group`
--
ALTER TABLE `az_user_group`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `az_user_log`
--
ALTER TABLE `az_user_log`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `az_user_management`
--
ALTER TABLE `az_user_management`
  MODIFY `id` int(13) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
