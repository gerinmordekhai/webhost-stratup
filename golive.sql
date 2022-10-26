-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 06:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `golive`
--

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE `domain` (
  `id_domain` int(10) UNSIGNED NOT NULL,
  `nama_domain` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`id_domain`, `nama_domain`) VALUES
(1, 'bismillah-acc.com'),
(2, 'bismillah-acc.com'),
(3, 'akucapek-ngerjain.com'),
(4, 'akucapek-ngerjain.com'),
(5, 'akucapek-ngerjain.com'),
(6, 'bismillah-acc.com'),
(7, 'akucapek-ngerjain.com'),
(8, 'bismillah-acc.com'),
(9, 'bismillah-acc.com'),
(10, 'akucapek-ngerjain.com');

-- --------------------------------------------------------

--
-- Table structure for table `hosting`
--

CREATE TABLE `hosting` (
  `id_hosting` int(10) UNSIGNED NOT NULL,
  `nama_hosting` varchar(25) DEFAULT NULL,
  `has_cpanel` char(1) DEFAULT NULL,
  `has_ssl` char(1) DEFAULT NULL,
  `has_subdomain` char(1) DEFAULT NULL,
  `has_storage` int(10) UNSIGNED DEFAULT NULL,
  `num_database` int(10) UNSIGNED DEFAULT NULL,
  `harga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hosting`
--

INSERT INTO `hosting` (`id_hosting`, `nama_hosting`, `has_cpanel`, `has_ssl`, `has_subdomain`, `has_storage`, `num_database`, `harga`) VALUES
(1, 'GoCeng', '0', '0', '2', 5000, 2, 5000),
(2, 'GoCap', '1', '1', '5', 100000, 20, 49000),
(3, 'GoPek', '1', '1', '9', 500000, 20, 499000),
(6, 'CeBan', '0', '1', '5', 10000, 5, 10000),
(7, 'GoTiao', '1', '1', '9', 900000, 9, 5000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`id_domain`);

--
-- Indexes for table `hosting`
--
ALTER TABLE `hosting`
  ADD PRIMARY KEY (`id_hosting`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `domain`
--
ALTER TABLE `domain`
  MODIFY `id_domain` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hosting`
--
ALTER TABLE `hosting`
  MODIFY `id_hosting` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
