-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 08, 2024 at 08:57 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emodule_testpaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `user_id`, `password`) VALUES
(1, 'AZHAD @ Developer', 'azhadhzq', 'azhad990814');

-- --------------------------------------------------------

--
-- Table structure for table `aliran`
--

CREATE TABLE `aliran` (
  `id` int NOT NULL,
  `nama_aliran` varchar(100) NOT NULL,
  `prog_pendidikan` varchar(100) NOT NULL,
  `jenis_sekolah` varchar(100) NOT NULL,
  `tahap_pendidik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `no_contact` int NOT NULL,
  `email_author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modulelearning`
--

CREATE TABLE `modulelearning` (
  `id_module` int NOT NULL,
  `id_author` int NOT NULL,
  `id_subjek` int NOT NULL,
  `nama_module` varchar(100) NOT NULL,
  `jenis_module` varchar(100) NOT NULL,
  `language_module` varchar(100) NOT NULL,
  `bilangan_ms` int NOT NULL,
  `price_sell` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymentauthor`
--

CREATE TABLE `paymentauthor` (
  `id_payment_fee` int NOT NULL,
  `id_author` int NOT NULL,
  `id_module` int NOT NULL,
  `submission_date` date NOT NULL,
  `release_date` date NOT NULL,
  `status_payment` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjek`
--

CREATE TABLE `subjek` (
  `id` int NOT NULL,
  `nama_subjek` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aliran`
--
ALTER TABLE `aliran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modulelearning`
--
ALTER TABLE `modulelearning`
  ADD PRIMARY KEY (`id_module`);

--
-- Indexes for table `paymentauthor`
--
ALTER TABLE `paymentauthor`
  ADD PRIMARY KEY (`id_payment_fee`);

--
-- Indexes for table `subjek`
--
ALTER TABLE `subjek`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aliran`
--
ALTER TABLE `aliran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modulelearning`
--
ALTER TABLE `modulelearning`
  MODIFY `id_module` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentauthor`
--
ALTER TABLE `paymentauthor`
  MODIFY `id_payment_fee` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjek`
--
ALTER TABLE `subjek`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
