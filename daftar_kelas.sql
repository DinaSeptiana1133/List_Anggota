-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2020 pada 04.09
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar_kelas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id` int(10) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `nama_ayah` varchar(225) NOT NULL,
  `nama_ibu` varchar(225) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `nama_panggilan` varchar(50) NOT NULL,
  `motto` text NOT NULL,
  `anak_ke` int(10) NOT NULL,
  `tinggi` int(4) NOT NULL,
  `berat` int(4) NOT NULL,
  `no_ortu` int(12) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `hobby` varchar(225) NOT NULL,
  `penyakit` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id`, `gambar`, `nama`, `email`, `alamat`, `tanggal_lahir`, `jenis_kelamin`, `tempat_lahir`, `golongan_darah`, `agama`, `nama_ayah`, `nama_ibu`, `no_hp`, `nama_panggilan`, `motto`, `anak_ke`, `tinggi`, `berat`, `no_ortu`, `alamat_ortu`, `hobby`, `penyakit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, '1a30fb2a4a4baf0afd82e4ee0c05e565.jpg ', 'Intan Laili', 'intan@gmail.com', 'Jl. Mangga 1, Perum Indah', '2002-04-17', 'Perempuan', 'Magelang', 'A', 'Islam', 'Gun Kanawut', 'Nanoon Korapat', 2147483647, 'Intan', 'Bekerjalah', 9, 134, 45, 2147483647, 'Jl. Mangga 1, Perum Indah', 'Makan', '-', '2020-07-18 11:24:33', '2020-07-18 11:24:33', NULL),
(9, '3ktoOfPd_400x400.jpeg', 'Arfianto Setia', 'arfian@gmail.com', 'Jl Simatupang A, Potrosaran', '2003-01-30', 'Laki laki', 'Magelang', 'O', 'Islam', 'Chimon Wachirawit', 'Yoona', 0, 'Arfi', 'Perbanyak tidur adalah sebuah ibadah', 2, 176, 54, 0, 'Jl Simatupang A, Potrosaran', 'Tidur', '-', '2020-07-18 11:27:02', '2020-07-18 11:27:02', NULL),
(10, '44.jpg', 'Bunga Mawar', 'mawar@gmail.com', 'Jl Hasanuddin, Perum Pahlawan', '2002-09-30', 'Perempuan', 'Sulawesi', 'A', 'Islam', 'Ronaldo Jackson', 'Melati Wahyuningrum', 0, 'Mawar', 'Cintailah kehidupan', 7, 145, 36, 0, 'Jl Hasanuddin, Perum Pahlawan', 'Mengaji', 'Diabetes', '2020-07-18 11:29:47', '2020-07-18 11:29:47', NULL),
(11, '694f461ebbc1ed5e05df7ad7db72a446.jpg ', 'Muhammad Fadil', 'fadil@gmail.com', 'Jl Pajajaran B', '2004-03-09', 'Laki laki', 'Temanggung', 'B', 'Kristen', 'Jacob Sartorius', 'Annie Leblanc', 0, 'Fadil', 'Belajarlah setinggi tingginya', 1, 170, 45, 0, 'Jl Pajajaran B', 'Belajar', 'Anemia', '2020-07-18 11:32:24', '2020-07-18 11:32:24', NULL),
(12, '9465ccf5c6f17d86cb92be7c7843c720.jpg ', 'John Bastian Thor', 'bastian@gmail.com', 'Jl Merdeka 03', '2002-08-09', 'Laki laki', 'Magelang', 'O', 'Kristen', 'Carson Lueders', 'Nadiya Ruby', 0, 'Bastian', 'Kan kucapai impianku', 1, 173, 50, 0, 'Jl Merdeka 03', 'Sepak Bola', '-', '2020-07-18 11:34:40', '2020-07-18 11:34:40', NULL),
(13, 'anime_cowok_sma___senpai_idaman_by_afdalrdh_dbhb90u-fullview.jpg  ', 'Antonius Jeffry', 'jeffry@gmail.com', 'Jl Medangkamulan, Perum Arjosari', '2002-09-30', 'Laki laki', 'Canada', 'O', 'Islam', 'Johnny Orlando', 'Dina Septiana', 0, 'Jeffry', 'Travelling membuatku rileks', 2, 175, 62, 0, 'Jl Medangkamulan, Perum Arjosari', 'Travelling', '-', '2020-07-18 11:44:27', '2020-07-18 11:44:27', NULL),
(14, 'images.jpg ', 'Anggita Novia', 'anggita@gmail.com', 'Jl Merpati, Perum Andara', '2001-04-28', 'Perempuan', 'Magelang', 'B', 'Kristen', 'William Franklin Miller', 'Lauren Orlando', 0, 'Gita', 'Hidup Bebas', 1, 154, 38, 0, 'Jl Merpati, Perum Andara', 'Skincarean', '-', '2020-07-18 11:42:03', '2020-07-18 11:42:03', NULL),
(15, 'sofyalaelii@gmail.com.png ', 'Rikhana Putri', 'putri@gmail.com', 'Jl Bojonegoro indah', '2001-07-24', 'Perempuan', 'Sulawesi', 'AB', 'Islam', 'Purnomo Hadiningrat', 'Mega Alisyah', 0, 'Putri', 'Sukai semua hal yang membuatmu bahagia', 2, 134, 37, 0, 'Jl Bojonegoro indah', 'Belajar', '-', '2020-07-18 11:43:51', '2020-07-18 11:43:51', NULL),
(17, '5f11dbbcbcd21-Screenshot (21).png', 'hghghg', 'jhjhj@gmail.com', 'hghgh', '2002-09-08', 'jhjj', 'jgjh', 'jg', 'jhj', 'jhjhjh', 'jhjhjj', 2147483647, 'nvnvbvb', 'hjjhg', 3, 145, 45, 768898, 'gjghjghh', 'hkjhk', 'jkhjh', '2020-07-17 17:11:24', '2020-07-17 17:11:24', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`, `is_admin`) VALUES
(1, 'Dina Septiana', 'ds@gmail.com', '$2y$10$1m0TAJUj6bLzBq2VVikKleiXNl4JxhPZR1Wx6XqSDcuaSWeHDFZRy', '2020-07-13 06:20:19', '2020-07-13 06:20:19', NULL, 1),
(2, 'ds', 'abcd@gmail.com', '$2y$10$EM98nk7HPnMENRkEUc8yAOIWjvUxfFAwK/lfW30.KFJvTbFdneCd2', '2020-07-13 06:42:09', '2020-07-13 06:42:09', NULL, 0),
(9, 'adad', 'edf@gmail.com', '$2y$10$SqRJLT/75Oiqo1qQWrb0w.mmLnfzqab0D0mlrLapW0CiFHxSlKJ2O', '2020-07-15 08:03:34', '2020-07-15 08:03:34', NULL, 0),
(10, 'asdf', 'asdf@gmail.com', '$2y$10$JL9vd.OJmC9XofXb9jgzZe6WpHvSNTlCe.Kii9yJu1PKcLKH/kO8u', '2020-07-15 08:04:06', '2020-07-15 08:04:06', NULL, 0),
(11, '', '', '$2y$10$5xqAzpoWqPx08q5HbvQFEekbq.QWYnhqGWp.yUSyDuycatCUkln9a', '2020-07-15 08:45:51', '2020-07-15 08:45:51', NULL, 0),
(15, 'zxcv', 'zxcv@gmail.com', '$2y$10$b8VpRkHg75OBBggmMlTeYecSRoQtxBDVbAkHi9i099NmB3eeaWTpa', '2020-07-15 09:35:53', '2020-07-15 09:35:53', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
