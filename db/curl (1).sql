-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2021 at 03:21 PM
-- Server version: 10.1.47-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 5.6.40-14+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curl`
--

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(7, 'bufo', '1234', 'agung'),
(9, 'admin', 'admin', 'Feri');

--
-- Dumping data for table `crul`
--

INSERT INTO `crul` (`kd_crul`, `kd_loker`, `tgl_jalan`, `jam_jalan`, `jumlah`) VALUES
(1, 1, '2021-04-22', '06:04:00', 10),
(3, 2, '2021-04-15', '06:04:00', 3),
(4, 3, '2021-04-15', '06:04:00', 3);

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`kd_loker`, `nama_loker`, `homepage`) VALUES
(1, 'Jobs Id', 'https://www.jobs.id/lowongan-kerja'),
(2, 'Job Id', 'https://job.id/search/?keywords=&location=&lat=&lng=&distance=10&salary-period=1&salary-min=0&salary-max=50000000&category-id=&subcategory-id=&work-type=-&company-id=&sort=latest'),
(3, 'loker.id', 'https://www.loker.id/cari-lowongan-kerja?q=&lokasi=0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
