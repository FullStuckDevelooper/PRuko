-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2020 at 09:54 AM
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
-- Database: `pruko`
--

-- --------------------------------------------------------

--
-- Table structure for table `ruko`
--

CREATE TABLE `ruko` (
  `id` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `luas` int(11) NOT NULL,
  `kamar` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruko`
--

INSERT INTO `ruko` (`id`, `tipe`, `luas`, `kamar`, `harga`, `photo`) VALUES
(2, 'C', 120, 4, 1000000, 'https://id1-cdn.pgimgs.com/listing/15980416/UPHO.87351918.V800/Ruko-Symphony-Harapan-Indah-Bekasi-Bekasi-Indonesia.jpg'),
(3, 'S', 290, 5, 2000000, 'https://id1-cdn.pgimgs.com/listing/16120160/UPHO.88219234.V800/Ruko-Bekasi-Indonesia.jpg'),
(4, 'A', 500, 10, 2000000, 'https://www.finansialku.com/wp-content/uploads/2018/10/Investasi-Ruko-02-Finansialku.jpg'),
(5, 'B', 321, 4, 5000000, 'https://id2-cdn.pgimgs.com/listing/16369318/UPHO.89753895.V800/Ruko-3-5-Lantai-Dekat-Rumah-Sakit-PKU-Sragen-Sragen-Indonesia.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ruko_id` int(11) NOT NULL,
  `pembayaran` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id`, `user_id`, `ruko_id`, `pembayaran`, `status`) VALUES
(10, 1, 4, 'BRI - 898989839123 AN Seno Tresna', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `role_id`, `username`, `password`) VALUES
(2, 'admin', '', 1, 'admin', '123456'),
(7, 'Salma', 'salma@gmail.com', 2, 'salma', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ruko`
--
ALTER TABLE `ruko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
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
-- AUTO_INCREMENT for table `ruko`
--
ALTER TABLE `ruko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
