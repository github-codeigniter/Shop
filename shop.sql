-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Bulan Mei 2020 pada 03.22
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `Id_kategori` int(11) NOT NULL,
  `baju_kategori` varchar(20) NOT NULL,
  `celana_kategori` varchar(20) NOT NULL,
  `baju_dalam_kategori` varchar(20) NOT NULL,
  `celana_dalam_kategori` varchar(20) NOT NULL,
  `aksesoris_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`Id_kategori`, `baju_kategori`, `celana_kategori`, `baju_dalam_kategori`, `celana_dalam_kategori`, `aksesoris_kategori`) VALUES
(1, 'Baju', 'Celana', 'Baju Dalam', 'Celana Dalam', 'Aksesoris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `Id_chart` int(100) NOT NULL,
  `Id_user` varchar(50) NOT NULL,
  `Id_item` varchar(50) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `nama_item` varchar(20) NOT NULL,
  `harga_item` int(50) NOT NULL,
  `stok_item` varchar(50) NOT NULL,
  `ukuran_item` varchar(50) NOT NULL,
  `warna_item` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`Id_chart`, `Id_user`, `Id_item`, `nama_user`, `nama_item`, `harga_item`, `stok_item`, `ukuran_item`, `warna_item`, `gambar`) VALUES
(37, '2', '5ea2e7010ea22', 'User KUYYYY', 'olimpik', 20000, '', '', '', ''),
(38, '2', '5ea7f2acb9b17', 'User KUYYYY', 'bajuku', 3, '', '', '', ''),
(39, '2', '5ea7f2acb9b17', 'User KUYYYY', 'bajuku', 3, '', '', '', ''),
(40, '2', '5ea2e7010ea22', 'User KUYYYY', 'olimpik', 20000, '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `Id_pembelian` int(100) NOT NULL,
  `Id_item` varchar(100) NOT NULL,
  `stok_item` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `Id_penjualan` int(100) NOT NULL,
  `Id_item` varchar(100) NOT NULL,
  `nama_item` varchar(100) NOT NULL,
  `kategori_item` varchar(100) NOT NULL,
  `harga_item` varchar(100) NOT NULL,
  `jumlah_pesanan` varchar(100) NOT NULL,
  `total_pembelian` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telepon` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `bayar` varchar(100) NOT NULL,
  `kembalian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`Id_penjualan`, `Id_item`, `nama_item`, `kategori_item`, `harga_item`, `jumlah_pesanan`, `total_pembelian`, `nama`, `no_telepon`, `alamat`, `bayar`, `kembalian`) VALUES
(2, '5ea2e7010ea22', 'olimpik', 'Baju', '20000', '1', '20000', 'riswan', '0887', 'okeee', '20000', '0'),
(3, '5ea2e7010ea22', 'olimpik', 'Baju', '20000', '2', '40000', 'riswan', '09999', 'rossaaa', '35000', '-5000');

--
-- Trigger `penjualan`
--
DELIMITER $$
CREATE TRIGGER `delete_data` AFTER DELETE ON `penjualan` FOR EACH ROW BEGIN
UPDATE shop_item SET shop_item.stok_item = shop_item.stok_item + OLD.jumlah_pesanan
WHERE shop_item.Id_item = OLD.Id_item;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_data` AFTER INSERT ON `penjualan` FOR EACH ROW BEGIN
UPDATE shop_item SET shop_item.stok_item = shop_item.stok_item - NEW.jumlah_pesanan
WHERE shop_item.Id_item = NEW.Id_item;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `shop_item`
--

CREATE TABLE `shop_item` (
  `Id_item` varchar(200) NOT NULL,
  `nama_item` varchar(50) NOT NULL,
  `gender_item` varchar(10) NOT NULL,
  `kategori_item` varchar(20) NOT NULL,
  `harga_item` int(10) NOT NULL,
  `keterangan_item` text NOT NULL,
  `warna_item` text NOT NULL,
  `ukuran_item` varchar(100) NOT NULL,
  `stok_item` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `gambar1` varchar(100) NOT NULL,
  `gambar2` varchar(100) NOT NULL,
  `gambar3` varchar(100) NOT NULL,
  `gambar4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `shop_item`
--

INSERT INTO `shop_item` (`Id_item`, `nama_item`, `gender_item`, `kategori_item`, `harga_item`, `keterangan_item`, `warna_item`, `ukuran_item`, `stok_item`, `gambar`, `gambar1`, `gambar2`, `gambar3`, `gambar4`) VALUES
('5ea2e7010ea22', 'olimpik', 'Pria', 'Baju', 20000, '', 'white, black', 'XXS, S', 1, 'Android_Nougat.png', '', '', '', ''),
('5ea7f2acb9b17', 'bajuku', 'Pria', 'Baju', 3, 'oke', 'white, darkgrey', 'XXS, S', 2, 'CaptureBB.PNG', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Id_user` int(11) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id_user`, `role`, `username`, `password`, `nama_user`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin COYY'),
(2, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'User KUYYYY'),
(3, 'user', 'user2', '7e58d63b60197ceb55a1c487989a3720', 'user KE 2'),
(4, 'user', 'user3', '92877af70a45fd6a2ed7fe81e1236b78', 'user KE 3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`Id_kategori`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`Id_chart`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`Id_pembelian`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`Id_penjualan`);

--
-- Indeks untuk tabel `shop_item`
--
ALTER TABLE `shop_item`
  ADD PRIMARY KEY (`Id_item`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `Id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `Id_chart` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `Id_pembelian` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `Id_penjualan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
