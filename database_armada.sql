-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Mar 2021 pada 11.05
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_armada`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `user_id`, `product_id`, `product_total`) VALUES
(8, 2, 2, 1),
(9, 2, 8, 1),
(16, 1, 14, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(1, '    Table'),
(2, 'Chair'),
(3, 'Bed'),
(4, 'Wardrobe'),
(5, 'Dressing Table');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `checkout_total` int(11) NOT NULL,
  `checkout_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_desc` text NOT NULL,
  `product_url` varchar(150) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_discount` int(11) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `product_name`, `product_desc`, `product_url`, `product_price`, `product_discount`, `product_stock`, `category_id`) VALUES
(14, 'Table Ant001a', 'Table', 'Table_Ant001a.jpg', 450000, 0, 100, 1),
(15, 'Table Ant001d', 'Dining table 240x90', 'Table_Ant001d.jpg', 4500000, 0, 100, 1),
(16, 'Wooden table top - Ant001f', 'tes111', 'Wooden_table_top_-_Ant001f.jpg', 1200000, 0, 100, 1),
(17, 'Rectangular table - Ant001g', 'Rectangular table', 'Rectangular_table_-_Ant001g.jpg', 950000, 0, 100, 1),
(18, 'Rectangular dining table - Ant001h', 'Rectangular dining table', 'Rectangular_dining_table_-_Ant001h.jpg', 2750000, 0, 100, 1),
(19, 'Square dining table - Ant001k', 'Square dining table', 'Square_dining_table_-_Ant001k.jpg', 850000, 0, 100, 1),
(20, 'Munggur dining table - Ant002b', 'Munggur dining table 450x117', 'Munggur_dining_table_-_Ant002b.jpg', 15000000, 0, 100, 1),
(21, 'Round Art Deco table - Ant003b', 'Round Art Deco table', 'Round_Art_Deco_table_-_Ant003b.jpg', 850000, 0, 100, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `username`, `password`, `address`, `role`) VALUES
(1, 'ADMIN', 'admin', 'admin', 'admin', 'tes', 'admin'),
(2, 'user', 'user', 'user', 'user', 'user', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
