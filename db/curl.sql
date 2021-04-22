-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2021 at 02:49 PM
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
-- Dumping data for table `indek`
--

INSERT INTO `indek` (`kd_idk`, `term`, `count`, `kd_low`) VALUES
(1, 'it', 1, 'lw001'),
(2, 'support', 1, 'lw001'),
(3, 'staff', 1, 'lw001'),
(4, 'jakarta', 1, 'lw001'),
(5, 'selatan', 1, 'lw001'),
(6, 'english', 1, 'lw002'),
(7, 'teacher', 1, 'lw002'),
(8, 'batam', 1, 'lw002'),
(9, 'indonesia', 1, 'lw002'),
(10, 'can', 1, 'lw002'),
(11, 'read', 1, 'lw002'),
(12, 'supervisor', 1, 'lw003'),
(13, 'operational', 1, 'lw003'),
(14, 'jakarta', 1, 'lw003'),
(15, 'timur', 1, 'lw003'),
(16, 'prima', 1, 'lw003'),
(17, 'bimitra', 1, 'lw003'),
(18, 'sejaht', 1, 'lw003'),
(19, 'sales', 1, 'lw004'),
(20, 'representative', 1, 'lw004'),
(21, 'bandung', 1, 'lw004'),
(22, 'tora', 1, 'lw004'),
(23, 'tools', 1, 'lw004'),
(24, 'pt', 1, 'lw004'),
(25, 'sing', 1, 'lw004'),
(26, 'customer', 1, 'lw005'),
(27, 'care', 1, 'lw005'),
(28, 'yogyakarta', 1, 'lw005'),
(29, 'pt', 1, 'lw005'),
(30, 'jc', 1, 'lw005'),
(31, 'indonesia', 1, 'lw005'),
(32, 'dokter', 1, 'lw006'),
(33, 'ngawi', 1, 'lw006'),
(34, 'afifa', 1, 'lw006'),
(35, 'skincare', 1, 'lw006');

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kd_kat`, `kategori`) VALUES
('KA001', 'Administrasi & dan Relationship'),
('KA002', 'Akuntansi & Keuangan'),
('KA003', 'Tour & travel'),
('KA004', 'Penjualan dan pengembangan bisnis'),
('KA005', 'Pendidikan & Pelatihan'),
('KA006', 'Makanan dan minuman'),
('KA007', 'IT'),
('KA008', 'Kesehatan dan Medis'),
('KA009', 'Marketing dan Relasi Publik'),
('KA010', 'Penulis / Media & Jurnalis / Percetakan dan Penerb'),
('KA027', 'Lain'),
('KA028', 'Transportasi'),
('KA029', 'Logistik');

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`kd_kota`, `nama_kota`, `kd_prov`) VALUES
('KO001', 'Jakarta Barat', 'pr013'),
('KO002', 'Jakarta Timur', 'pr013'),
('KO003', 'Jakarta Pusat', 'pr013'),
('KO004', 'Jakarta Selatan', 'pr013'),
('KO005', 'Jakarta Utara', 'pr013'),
('KO006', 'Bekasi', 'pr012'),
('KO007', 'Bandung', 'pr012'),
('KO008', 'Manado', 'pr029'),
('KO009', 'Surabaya', 'pr015'),
('KO010', 'Tangerang Selatan', 'pr011'),
('KO011', 'Cirebon', 'pr012'),
('KO012', 'Sukabumi', 'pr012'),
('KO013', 'Kediri', 'pr015'),
('KO014', 'Bogor', 'pr012'),
('KO015', 'Yogyakarta', 'pr016'),
('KO016', 'Sidoarjo', 'pr015'),
('KO017', 'Depok', 'pr012'),
('KO018', 'Sumedang', 'pr012'),
('KO019', 'Denpasar', 'pr017'),
('KO020', 'Tangerang', 'pr011'),
('KO021', 'Blitar', 'pr015'),
('KO022', 'Sleman', 'pr016'),
('KO023', 'Bandar Lanmpung', 'pr010'),
('KO024', 'Pasuruan', 'pr012'),
('KO025', 'Pekan Baru', 'pr004'),
('KO026', 'Makassar', 'pr026'),
('KO027', 'Magelang', 'pr014'),
('KO028', 'Malang', 'pr015'),
('KO029', 'Semarang', 'pr014'),
('KO030', 'Purwakarta', 'pr012'),
('KO031', 'Palembang', 'pr008'),
('KO032', 'Banjarmasin', 'pr021'),
('KO033', 'Bantul', 'pr016'),
('KO034', 'Gresik', 'pr015'),
('KO035', 'Pati', 'pr014'),
('KO036', 'Medan', 'pr002'),
('KO037', 'Serang', 'pr011'),
('KO038', 'Solo', 'pr014'),
('KO039', 'Oku Timur', 'pr008');

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`kd_low`, `judul`, `perusahaan`, `lokasi`, `syarat`, `selesai`, `url`, `kd_loker`, `kd_prov`, `kd_kat`) VALUES
('lw001', 'IT SUPPORT STAFF', '', 'Jakarta Selatan', 'Laki - Laki  Maks 23 Tahun  SMK Teknik Komputer dan Jaringan  Belum Menikah  Sehat Jasmani Rohani', '2021-05-12', 'https://www.jobs.id/lowongan/MzA4MzA4/it-support-staff?qt_ref=search&qt_page=1&qt_pos=0', 1, 'pr013', 'KA001'),
('lw002', 'English Teacher', 'Indonesia can read', 'Batam', 'S1 Sastra Inggris  Pengalaman minimal 2 tahun  Degree/diploma level qualifications, preferably in Te', '2021-05-12', 'https://www.jobs.id/lowongan/MzA4MzA5/english-teacher-indonesia-can-read?qt_ref=search&qt_page=1&qt_', 1, 'pr035', 'KA005'),
('lw003', 'Supervisor Operational', 'Prima Bimitra Sejaht', 'Jakarta Timur', 'Usia maksimum 35 tahun.  Memiliki gelar Diploma  Memiliki pengalaman kerja minimal 1-3 tahun sebagai', '2021-05-12', 'https://www.jobs.id/lowongan/MzA4MzEw/supervisor-operational-prima-bimitra-sejahtera-pt?qt_ref=searc', 1, 'pr013', 'KA027'),
('lw004', 'Sales Representative', 'Tora Tools - PT Sing', 'Bandung', 'Syarat & Keahlian Microsoft Office, Technology Savy', '2021-05-13', 'https://job.id/kerja/LX9jq8mM/sales-representative', 2, 'pr012', 'KA027'),
('lw005', 'Customer Care', 'PT JC Indonesia', 'Yogyakarta', 'Pengalaman Memiliki pengalaman di domain, hosting, wordpress lebih diutamakan', '2021-05-02', 'https://job.id/kerja/emy5jWmY/customer-care', 2, 'pr016', 'KA007'),
('lw006', 'Dokter', 'Afifa Skincare', 'Ngawi', 'Syarat & Keahlian Kualifikasi:\r\n 1.	Pria/wanita\r\n 2.	Usia maksimal 40 tahun\r\n 3.	Dokter umum/kulit\r\n', '2021-05-01', 'https://job.id/kerja/ymO92PwQ/dokter-afifa-skincare', 2, 'pr035', 'KA027');

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`kd_prov`, `nama_prov`) VALUES
('pr001', 'Aceh'),
('pr002', 'Sumatera Utara'),
('pr003', 'Sumatera Barat'),
('pr004', 'Riau'),
('pr005', 'Kepulauan Riau'),
('pr006', 'Jambi'),
('pr007', 'Bengkulu'),
('pr008', 'Sumatera Selatan'),
('pr009', 'Kepulauan Bangka Belitung'),
('pr010', 'Lampung'),
('pr011', 'Banten'),
('pr012', 'Jawa Barat'),
('pr013', 'DKI Jakarta'),
('pr014', 'Jawa Tengah'),
('pr015', 'Jawa Timur'),
('pr016', 'DI Yogyakarta'),
('pr017', 'Bali'),
('pr018', 'Nusa Tenggara Barat'),
('pr019', 'Nusa Tenggara Timur'),
('pr020', 'Kalimantan Barat'),
('pr021', 'Kalimantan Selatan'),
('pr022', 'Kalimantan Tengah'),
('pr023', 'Kalimantan Timur'),
('pr024', 'Kalimantan Utara'),
('pr025', 'Gorontalo'),
('pr026', 'Sulawesi Selatan'),
('pr027', 'Sulawesi Tenggara'),
('pr028', 'Sulawesi Tengah'),
('pr029', 'Sulawesi Utara'),
('pr030', 'Sulawesi Barat'),
('pr031', 'Maluku'),
('pr032', 'Maluku Utara'),
('pr033', 'Papua'),
('pr034', 'Papua Barat'),
('pr035', 'lainnya');

--
-- Dumping data for table `sub_kategori`
--

INSERT INTO `sub_kategori` (`kd_sub`, `nama`, `kd_kat`) VALUES
('SK001', 'Administrasi & Customer Relationship', 1),
('SK002', 'Admin & HRD', 1),
('SK003', 'Consumer Goods', 1),
('SK004', 'Consumer Service', 1),
('SK005', 'Manajemen Sumber Daya Manusia(HRD) / Konsultasi', 1),
('SK006', 'Human Resource', 1),
('SK007', 'Akuntansi & Keuangan', 2),
('SK008', 'Akuntasi', 2),
('SK009', 'Asuransi', 2),
('SK010', 'Akunting / Audit /Layanan Pajak', 2),
('SK011', 'Perbankan & Keuangan', 2),
('SK012', 'Tour & travel', 3),
('SK013', 'Turisme / Agen Penjalanan', 3),
('SK014', 'Hotel, Restoran & pariwisata', 3),
('SK015', 'Penjualan dan pengembangan bisnis', 4),
('SK016', 'Grosir / Ritel', 4),
('SK017', 'Penjualan, Layanan Konsumen & Pengembangan Bisnis', 4),
('SK018', 'Pendidikan & Pelatihan', 5),
('SK019', 'Pendidikan', 5),
('SK020', 'Makanan dan minuman', 6),
('SK021', 'Makanan / Minuman', 6),
('SK022', 'IT', 7),
('SK023', 'Teknologi & Informatika', 7),
('SK024', 'Teknologi Informatika', 7),
('SK025', 'Perawatan Kesehatan dan Kecantikan', 8),
('SK026', 'Kesehatan dan Medis', 8),
('SK027', 'Kesehatan / Farmasi', 8),
('SK028', 'Kesehatan', 8),
('SK029', 'Jasa & Layanan Profesional', 9),
('SK030', 'Marketing dan Relasi Publik', 9),
('SK031', 'Konsultasi / Layanan Manajemen', 9),
('SK032', 'Layanan Keuangan', 9),
('SK033', 'Layanan Sosial / Organisasi Nirlaba', 9),
('SK034', 'marketing & Pemasaran', 9),
('SK035', 'Penulis / Media & Jurnalis / Percetakan dan Penerb', 10),
('SK040', 'lainnya', 7),
('SK041', 'aaaaa', 8),
('SK042', 'lainnya', 7),
('SK045', 'perpajakan', 2),
('SK047', 'Marketing & PR', 9),
('SK048', 'Transportation', 28),
('SK049', 'Sales & Business Development', 9),
('SK050', 'Supply Chain & Logistic', 29),
('SK051', 'Perdagangan Umum dan Distribusi', 4),
('SK052', 'Education & Science', 5),
('SK053', 'Accounting & Finance', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
