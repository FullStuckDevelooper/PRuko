-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 05:33 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pruang`
--

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `user_id` int(200) NOT NULL,
  `ruangan_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `alasan` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id_pinjam`, `user_id`, `ruangan_id`, `tanggal`, `alasan`, `status`) VALUES
(27, 1, 2, '2019-05-23', 'Sosialisasi Bukber', 'Ditolak'),
(28, 1, 4, '2019-05-31', 'pengen aja', 'Diterima'),
(29, 2, 4, '2019-05-16', 'hoyong we atuhh', 'Ditolak'),
(30, 2, 4, '2019-05-22', 'Acara Himatif Peduli', 'Diterima'),
(31, 1, 2, '2019-05-23', 'Ingin Minjam', 'Pending'),
(32, 1, 4, '2019-05-22', 'asdasd', 'Pending'),
(33, 1, 4, '2019-05-26', 'sdadsadasdad', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(11) NOT NULL,
  `nama_ruangan` varchar(200) NOT NULL,
  `kode_ruangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `nama_ruangan`, `kode_ruangan`) VALUES
(2, 'Ruang 4', 'R-04'),
(3, 'Ruang 5', 'R-05'),
(4, 'Aula Saintek', 'A-01'),
(5, 'Anwar Musadad', 'A-02'),
(6, 'Aula Abdjan Sulaeman', 'A-03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `NIM` int(11) NOT NULL,
  `Jurusan` varchar(200) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `NIM`, `Jurusan`, `role_id`, `username`, `password`) VALUES
(1, 'Seno Tresna Galang Pradana', 1177050106, 'Teknik Informatika', 2, '1177050106', 123456),
(2, 'Aaz M Hafidz', 1177050001, 'Teknik Informatika', 2, '1177050001', 123456),
(3, 'Admin', 0, 'ada aja', 1, 'admin', 123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
