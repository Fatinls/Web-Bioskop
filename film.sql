-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2021 pada 20.13
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `film`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_film`
--

CREATE TABLE `list_film` (
  `id` int(5) NOT NULL,
  `judul` text NOT NULL,
  `genre` varchar(20) NOT NULL,
  `produser` varchar(20) NOT NULL,
  `harga_tiket` int(5) NOT NULL,
  `tanggal_tayang` date NOT NULL,
  `waktu_tayang` time NOT NULL,
  `link_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `list_film`
--

INSERT INTO `list_film` (`id`, `judul`, `genre`, `produser`, `harga_tiket`, `tanggal_tayang`, `waktu_tayang`, `link_gambar`) VALUES
(11111, 'Venom Let There Be Carnage', 'aksi', 'avi arad', 40000, '2021-12-17', '18:50:00', 'https://i.pinimg.com/564x/e9/6c/e5/e96ce5791792e38c248a93c7a60f4d13.jpg'),
(11112, 'Spiderman No Way Home', 'aksi', 'Kevin Veige', 50000, '2022-01-11', '16:30:00', 'https://i.pinimg.com/564x/d1/59/7f/d1597fc43dbe7daf235ed8f36e11d3f7.jpg'),
(11113, 'Sword Art Online Progressive', 'fantasi', 'Kazuma Miki', 45000, '2022-01-11', '19:00:00', 'https://i.pinimg.com/564x/a4/2f/3f/a42f3f06d98c12920510bce32039ed03.jpg'),
(11114, 'The Medium', 'horor', 'Na Hong Jin', 55000, '2021-10-20', '20:10:00', 'https://media.21cineplex.com/webcontent/gallery/pictures/163453237595721_287x421.jpg'),
(11115, 'No Time To Die', 'petualangan', 'Barbara Broccoli', 50000, '2021-12-14', '14:50:00', 'https://media.21cineplex.com/webcontent/gallery/pictures/163188974336814_290x426.jpg'),
(11116, 'Losmen Bu Broto', 'drama', 'Andi Boediman', 40000, '2021-11-18', '16:00:00', 'https://media.21cineplex.com/webcontent/gallery/pictures/163368343637198_287x421.jpg'),
(11117, 'Ghostbuster Afterlife', 'comedy', 'Ivan Reitman', 45000, '2022-01-18', '14:50:00', 'https://media.21cineplex.com/webcontent/gallery/pictures/163765904668283_287x421.jpg'),
(11118, 'The Boss Baby Family Business', 'animasi', 'Jeff Hermann', 50000, '2022-01-12', '17:10:00', 'https://i.pinimg.com/564x/59/30/ed/5930ed6ac1fa2dc6190d933fab026bae.jpg'),
(11119, 'Nussa', 'keluarga', 'Ricky Manopo', 45000, '2021-11-23', '14:50:00', 'https://media.21cineplex.com/webcontent/gallery/pictures/163188898724513_287x421.jpg'),
(11121, 'Eternal', 'aksi', 'Kevin Feige', 50000, '2021-11-28', '20:00:00', 'https://i.pinimg.com/564x/5f/a8/d4/5fa8d45f1159c3ee7b1663b5fd231fac.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
