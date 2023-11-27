-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2021 pada 14.19
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kerajinan_jawatengah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `contact`, `country`, `subject`, `message`, `date`) VALUES
(1, '', 'asfiliaanggraini123@gmail.com', '11111111', 'Indonesia', 'pengajuan', 'qqqqqqqqqqqqqqqqqqqqqq', '2021-05-24 14:37:57'),
(2, '', 'nisa@gmail.com', '111111111', 'Country', 'pengajuan', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', '2021-05-24 14:39:32'),
(3, 'yeni', 'yeni@gmail.com', '111111', 'Indonesia', 'pengajuan', 'aaaaaaaaaaaa', '2021-05-24 14:46:47'),
(4, 'asfilia nova anggraini', 'asfiliaanggraini123@gmail.com', '111111', 'Singapura', 'pengajuan', '111111111111111', '2021-05-28 19:11:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `longitude` float(10,6) NOT NULL,
  `latitude` float(10,6) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `markers`
--

INSERT INTO `markers` (`id`, `nama`, `alamat`, `longitude`, `latitude`, `tipe`, `telp`) VALUES
(1, 'Sentra Kerajinan Bambu Dusun Cakran', 'Kebonsari, Borobudur, Magelang, Central Java 56553, Indonesia', 110.163986, -7.595211, 'Handicraft', '0811118987'),
(3, 'Suryo Art Craft Toko Seni Souvenir Kerajinan', 'Jl. Raya Klewer - Gawok sta. Gawok No.KM 2, Jamur, Trangsan, Kec. Gatak, Kabupaten Sukoharjo, Jawa T', 110.738914, -7.583836, 'Craft store', '0896-8933-1245'),
(4, 'Toko kerajinan DZAArt', 'Dukuh Sudimoro Rt12/Rw2, Dusun III, Kadireso, Kec. Teras, Kabupaten Boyolali, Jawa Tengah 57372', 110.643333, -7.573962, 'Craft store', '0896-8933-1245'),
(5, 'Alvarizqi Craft', 'Jaranan 645 Rt 2 Rw 9, Rejowinangun Utara, Kec. Magelang Tengah, Kota Magelang, Jawa Tengah 56111', 110.224518, -7.482297, 'Handicraft', '0896-8933-1245'),
(6, 'Kerajinan Tangan Bpk Djumadi', 'Karangpacing, Kebonagung, Kec. Tegowanu, Kabupaten Grobogan, Jawa Tengah 58165', 110.600197, -7.084088, 'Handicraft', '0896-8933-1245'),
(7, 'Sanggar Kerajinan Q_roon Art', 'Prajegsari No.rt.01, RW.02, Degan, Prajeksari, Kec. Tempuran, Magelang, Jawa Tengah 56161', 110.178894, -7.513803, 'Handicraft', '0896-8933-1245'),
(8, 'kerajinan anyaman solo', 'jalan singasari selatan Jl. Tegal Mulyo No.2, RT.4/RW.4, Mojosongo, Kec. Jebres, Kota Surakarta, Jaw', 110.836975, -7.547779, 'Handicraft', '0896-8933-1245'),
(9, 'Kerajinan Bambu Songgobuwana Art Heritage', 'langensari Baluwarti Kec. Ps. Kliwon Kota Surakarta, Jawa Tengah 57144', 110.825859, -7.577296, 'Handicraft', '0896-8933-1245'),
(10, 'Kere Mas Bayek @mitaMBbambu (Kerajinan Bambu Asli Solo Sejak 1948)', 'Prumahan Griya Wonorejo, Blok F25 Watuburik, Wonorejo Kec. Gondangrejo Kabupaten Karanganyar, Jawa T', 110.831764, -7.526264, 'Handicraft', '0896-8933-1245'),
(11, 'Bahan Kerajinan Tangan olshop', 'Bukit Mutiara Jaya I blok BR 15-16 Meteseh Kec. Tembalang Kota Semarang, Jawa Tengah 50271', 110.457024, -7.064768, 'Craft store', '0812-2801-119'),
(12, 'Batik Keris The Park', 'Jl. Ir. Soekarno Lt.FF # 03A # 05 # 06 The Park (Lt.1 Unit No.11,15,17 Dusun II, Langenharjo Sukohar', 110.816719, -7.598798, 'Boutique', '(0271) 7891215'),
(13, 'Kerajinan Tangan Murah berkualitas dan unik Alrama Indoart', 'Nambangan Rt5 Rw19 Rejowinangun Utara Kec. Magelang Tengah Kota Magelang, Jawa Tengah 56127', 110.227623, -7.481323, 'Craft store', '0813-4288-6582'),
(15, 'Emys Craft Gallery Semarang', 'No. 52, Mega Residence, Tulip Garden Pudakpayung Kec. Banyumanik, Kota Semarang, Jawa Tengah 50265', 110.417839, -7.089796, 'Craft store', '0813-8333-2389'),
(17, 'Handmade by Ana WAE', 'Jagoan RT.02/RW.04, Jagoan, Kebonagung Sumowono Semarang, Jawa Tengah 50123', 110.298584, -7.258532, 'Craft store', '0853-4007-7790'),
(20, 'Kerajinan Batok Kelapa', 'Unnamed Road Jambon, Lamuk Kaliwiro Kabupaten Wonosobo, Jawa Tengah 56364', 109.789047, -7.456363, 'Home goods store', '0822-2583-0355'),
(22, 'Mugi Berkah (kerajinan serabut dan tempurung kelapa)', 'Unnamed Road Karangjoso, Langenrejo Butuh Purworejo Regency, Central Java 54264', 109.862846, -7.769875, 'Home goods store', '0822-1877-6806'),
(23, 'Bambu', 'Jl. Magersari No.42, RT.002/RW.002, Gunungpati, Kec. Gn. Pati, Kota Semarang, Jawa Tengah 50225', 110.361771, -7.087290, 'Boutique', '0896-8933-1245');

-- --------------------------------------------------------

--
-- Struktur dari tabel `multiuser`
--

CREATE TABLE `multiuser` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `multiuser`
--

INSERT INTO `multiuser` (`id_pengguna`, `username`, `password`, `level`) VALUES
(1, 'admin', '12345', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `multiuser`
--
ALTER TABLE `multiuser`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `multiuser`
--
ALTER TABLE `multiuser`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
