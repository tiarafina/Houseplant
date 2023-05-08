-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 03:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hosplen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(8) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `nama_admin`, `alamat`, `email`, `nohp`) VALUES
(1, 'Refka Maulana S', 'Jl. Jamika', 'rerefkamaulana@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `blogg`
--

CREATE TABLE `blogg` (
  `idb` int(11) NOT NULL,
  `judulb` varchar(100) NOT NULL,
  `tanggalb` date NOT NULL,
  `pengarangb` varchar(32) NOT NULL,
  `isib` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogg`
--

INSERT INTO `blogg` (`idb`, `judulb`, `tanggalb`, `pengarangb`, `isib`, `image`) VALUES
(1, 'Menanam Tanaman', '2021-12-08', 'Refka', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'profileimgRefka.png'),
(2, 'Merawat Tanaman', '2021-12-09', 'Emung', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'profileimgEmung.png');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(8) NOT NULL,
  `nama_per` varchar(100) NOT NULL,
  `alamat_per` varchar(100) NOT NULL,
  `kontak_per` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama_per`, `alamat_per`, `kontak_per`) VALUES
(1, 'House Plants', 'Jl. Telekomunikasi No.1,Terusan buahbatu-bojongsoang,Sukapura Kec.dayeuhkolot Kab.Bandung', 'houseplantscs@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gakses` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `nama`, `gakses`) VALUES
('refka', '12345', 'Refka Maulana', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `jeniskelamin` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`, `nama`, `email`, `nohp`, `jeniskelamin`) VALUES
('amelia', '098765', 'Amelia', 'amelia2@gmail.com', '081225588', 'P'),
('anya', '102030', 'Anya geraldine', 'anya@gmail.com', '0812335577', 'P'),
('emung', 'banten', 'Emung Zakaria', 'emung@gmail.com', '0887456321', 'L'),
('farhan', 'padang', 'Farhan', 'farhan@gmail.com', '0897452210', 'L'),
('raisa', 'raisa', 'Raisa', 'raisa@gmail.com', '0812478965', 'P'),
('refkams', '789654', 'Refkams', 'refkams@gmail.com', '08124578', 'L'),
('ronaldo', '456789', 'Ronaldo Messi', 'ronaldo@gmail.com', '08214452897', 'L'),
('suzril', '098321', 'Auzril', 'auzril@gmail.com', '0812336699', 'L'),
('tiara', '20212021', 'Tiara Nuha', 'tiara1@gmail.com', '0812657890', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) CHARACTER SET latin1 NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text CHARACTER SET latin1 NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(1, 'refka', 4, 'Websitenya bagus dan desainnya juga bagus,informasi lengkap', 1641443667),
(2, 'Farhan', 5, 'Sangat bagus websitenya dan bermanfaat', 1642329663);

-- --------------------------------------------------------

--
-- Table structure for table `umkm`
--

CREATE TABLE `umkm` (
  `idtoko` varchar(32) NOT NULL,
  `username` varchar(50) NOT NULL,
  `namatoko` varchar(100) NOT NULL,
  `jalan` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `umkm`
--

INSERT INTO `umkm` (`idtoko`, `username`, `namatoko`, `jalan`, `kota`, `provinsi`) VALUES
('001', 'refka', 'RMS Plant', 'Jl. Jamika No.35', 'Bandung', 'Jawa Barat'),
('13', 'emung', 'Emung Plants', 'Lebak', 'Banten', 'Banten'),
('14', 'tiara', 'Bunga Tiara', 'Jl. Jenderal Sudirman', 'Jakarta', 'DKI Jakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `blogg`
--
ALTER TABLE `blogg`
  ADD PRIMARY KEY (`idb`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `umkm`
--
ALTER TABLE `umkm`
  ADD PRIMARY KEY (`idtoko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogg`
--
ALTER TABLE `blogg`
  MODIFY `idb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
