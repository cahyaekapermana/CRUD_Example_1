-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2019 pada 17.10
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cerita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `genre`) VALUES
(12, 'Ratu Pantai Selatan ', 'Nyi Roro Kidul (juga Nyi Roro Kidul atau Nyi Roro Kidul adalah sesosok roh atau dewi legendaris Indonesia yang sangat populer di kalangan masyarakat Pulau Jawa dan Bali. Tokoh ini dikenal sebagai Ratu Laut Selatan (Samudra Hindia) dan secara umum disamakan dengan Kanjeng Ratu Kidul, meskipun beberapa kalangan sebenarnya keduanya berbeda.[1]\r\n\r\nDalam mitologi Jawa, Kanjeng Ratu Kidul merupakan ciptaan dari Dewa Kaping Telu yang mengisi alam kehidupan sebagai Dewi Padi (Dewi Sri) dan dewi alam yang lain. Sedangkan Nyi Roro Kidul mulanya merupakan putri Kerajaan Sunda yang diusir ayahnya karena ulah ibu tirinya. Dalam perkembangannya, masyarakat cenderung menyamakan Nyi Roro Kidul dengan Kanjeng Ratu Kidul, meskipun dalam kepercayaan Kejawen, Nyi Roro Kidul adalah bawahan setia Kanjeng Ratu Kidul.[1]\r\n\r\nKedudukan Nyi Roro Kidul sebagai Ratu-Lelembut tanah Jawa menjadi motif populer dalam cerita rakyat dan mitologi, selain juga dihubungkan dengan kecantikan putri-putri Sunda.', 'Horor'),
(14, 'Si Manis Jembatan An', 'Si Manis Jembatan Ancol menjadi salah satu kisah misteri yang melegenda. Namun, kisah lain tak kalah seram. Simak kisah-kisah mencekam lain di collection ini dan jangan lupa subscribe untuk dapat notifikasi story terbaru.', 'Horor'),
(15, 'Mas Pandu The Sillen', 'Diam, Sans dan Jaya', 'Misteri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
