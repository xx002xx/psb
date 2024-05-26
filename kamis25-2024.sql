-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 06:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb23`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `Id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_admin` varchar(255) DEFAULT NULL,
  `role_user` varchar(255) DEFAULT NULL,
  `id_user` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`Id`, `email`, `password`, `nama_admin`, `role_user`, `id_user`) VALUES
(1, 'kepalasek@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'kepsek', '0', NULL),
(2, 'admin@gmail.com', '$2y$10$AIxith3klXwMIMT/t3CpHOasClDF8l1JWV66U1zob78mXT4wksaJq', 'Admin', '0', NULL),
(19, 'anggitprayogo@gmail.com', '$2y$10$reSEF5KQSOWr.7MQeqzlqeDDy3dyOZWT9EdZW.fmGgHRjo852WlYi', '', '1', 8),
(20, 'test@gmail.com', '$2y$10$GK/Vsz.N/wTbKijTQw31qOgTZFqeLNwZgofVP0Nst4zJ/XFmwKEoa', '', '1', 9),
(21, 'test2@gmail.com', '$2y$10$gg12u7EggBdGgI7lO6ZC2eeF3vmfsEJjAqiFyrrjptYvESBu//PEy', '', '1', 10),
(22, 'nasrul@gmail.com', '$2y$10$tJiirKPlKN2o7UOHClfTTOZG.MYcZJihW9R1L7wCstAVSpnAPDzaa', '', '1', 11),
(23, 'oka123@gmail.com', '$2y$10$cmnT.U0pwgb1qm2StGvpiOLcsk1FsKhUCgJeamwJ6Z0/AXbarqp/2', '', '1', 12),
(24, 'neneleti@gmail.com', '$2y$10$N9kvOqaY4wTIn/rpuTtxae.00NjI5vU5PSDzDLeAtdoWaAZpxilWy', '', '1', 13),
(25, 'kepalasekola@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Kepala Sekolah', '0', NULL),
(27, 'kepsek@gmail.com', '$2y$10$.8ZH1AaEuS9PzV.QleEsNO1dvQRAgxNo0pVPWhOQ/7mYbMAd.uKn2', '', '0', 14),
(28, 'kepsek23@gmail.com', '$2y$10$AIxith3klXwMIMT/t3CpHOasClDF8l1JWV66U1zob78mXT4wksaJq', 'kepala sekola', '0', NULL),
(29, 'nasrul', '$2y$10$qomPyCp3EX.weZs4PC0eMuCRAutti2jRwEZEleSi1tubEj7iR2/F2', '', '1', 15),
(30, '', '', '', '1', 16),
(31, '', '', '', '1', 17),
(32, 'didin@gmail.com', '$2y$10$DiXR9L7G54zOupL1PwV9feKp/weGzJPmyVS9iJcR3FWStVfzBvUHK', '', '1', 18),
(33, 'nasrul1234', '$2y$10$.GOJGAs3I/yPpv1fuKp.0elbaHNVsf7D60XDO4RhuAIB6r6NCAonC', '', '1', 19),
(34, 'neni1234', '$2y$10$zPDE8vqIISbR3bgxf1EQWOhZ.DbFVs6uwysSFs7Iaw5Cg4b8Rddzm', '', '1', 20),
(35, '', '', '', '1', 21),
(36, 'neni123', '$2y$10$JkJY6jFHQC77Klzn7SIJA.iOC2LSvme/ynTqTTYw2fQW92/8qhp1q', '', '1', 22),
(37, '', '', '', '1', 23),
(38, 'neni12345', '$2y$10$Y4CXqaQg5nZ3e8kfER.1huDmSUwjF8euiQb9w2q62Zaae7TfteEr6', '', '1', 24),
(39, 'neni123655', '$2y$10$VIcfu0al1G.uXgkY9AHmou4tqaUnnMccjRchHrs2JxynsmCuauxvy', '', '1', 25),
(40, '', '', '', '1', 26),
(41, 'ccc123', '$2y$10$nJY2BQLkt/fs8Emomxvc/ue7j/GsR74BSP6bJQQ005AK.QIKH7frW', '', '1', 27);

-- --------------------------------------------------------

--
-- Table structure for table `cicilan_pendaftaran`
--

CREATE TABLE `cicilan_pendaftaran` (
  `Id` int(11) NOT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `id_detail_pendaftaran` int(11) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  `tanggal_pembayaran` varchar(255) DEFAULT NULL,
  `status_cicilan` int(11) NOT NULL,
  `cicilan_ke` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cicilan_pendaftaran`
--

INSERT INTO `cicilan_pendaftaran` (`Id`, `bukti_pembayaran`, `id_detail_pendaftaran`, `nominal`, `tanggal_pembayaran`, `status_cicilan`, `cicilan_ke`) VALUES
(13, '10-12-47test.png', 7, 895000, '2017-12-21', 1, 1),
(16, '04-12-252. Gagal signup (data kurang atau sudah terpakai).PNG', 8, 895000, '2017-12-27', 1, 1),
(17, '10-12-24background2.jpg', 9, 500000, '2017-12-29', 1, 1),
(18, '10-12-11button.png', 9, 395000, '2017-12-29', 1, 2),
(19, '12-09-48sidebar-2.jpg', 10, 895000, '2023-09-27', 1, 1),
(20, '01-09-11new_logo.png', 11, 500000, '2023-09-27', 1, 1),
(21, '02-09-45apple-icon.png', 12, 500000, '2023-09-28', 1, 1),
(22, '06-12-195.jpg', 19, 440000, '2023-12-24', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pendaftaran`
--

CREATE TABLE `detail_pendaftaran` (
  `Id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  `metode_pembayaran_pendaftaran` varchar(255) DEFAULT NULL COMMENT 'metode_pembayaran',
  `kelas` varchar(255) DEFAULT NULL,
  `usia` varchar(255) DEFAULT NULL,
  `status_pendaftaran` varchar(255) DEFAULT NULL,
  `status_kegiatan` int(11) NOT NULL DEFAULT 0,
  `biaya_kegiatan` int(11) DEFAULT 0,
  `tanggal_kegiatan` date DEFAULT NULL,
  `bukti_konfirmasi_pembayaran_kegiatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pendaftaran`
--

INSERT INTO `detail_pendaftaran` (`Id`, `id_user`, `id_admin`, `tanggal_daftar`, `metode_pembayaran_pendaftaran`, `kelas`, `usia`, `status_pendaftaran`, `status_kegiatan`, `biaya_kegiatan`, `tanggal_kegiatan`, `bukti_konfirmasi_pembayaran_kegiatan`) VALUES
(7, 8, 2, '2017-12-21', 'L', 'B', '14 tahun 8 bulan', '1', 1, 500000, '2017-12-21', '10-12-59test.png'),
(8, 9, 2, '2017-12-27', 'L', 'B', '14 tahun 8 bulan', '1', 0, 0, NULL, NULL),
(9, 10, 2, '2017-12-29', 'C', 'B', '14 tahun 8 bulan', '4', 0, 0, NULL, NULL),
(10, 11, 2, '2023-09-27', 'L', 'B', '26 tahun 7 bulan', '4', 0, 0, NULL, NULL),
(11, 12, 2, '2023-09-27', NULL, 'B', '23 tahun 8 bulan', '3', 0, 0, NULL, NULL),
(12, 13, 2, '2023-09-28', NULL, 'B', '20 tahun 7 bulan', '3', 0, 0, NULL, NULL),
(13, 14, NULL, '2023-10-01', NULL, NULL, NULL, '0', 0, 0, NULL, NULL),
(14, 15, NULL, '2023-10-22', NULL, NULL, NULL, '0', 0, 0, NULL, NULL),
(15, 16, NULL, '2023-10-22', NULL, NULL, NULL, '0', 0, 0, NULL, NULL),
(16, 17, NULL, '2023-10-22', NULL, NULL, NULL, '0', 0, 0, NULL, NULL),
(17, 18, NULL, '2023-11-21', NULL, NULL, NULL, '0', 0, 0, NULL, NULL),
(18, 19, 2, '2023-12-15', NULL, 'A', '22 tahun 2 bulan', '1', 0, 0, NULL, NULL),
(19, 20, 2, '2023-12-24', NULL, 'A', '30 tahun 3 bulan', '3', 0, 0, NULL, NULL),
(20, 21, NULL, '2023-12-24', NULL, NULL, NULL, '0', 0, 0, NULL, NULL),
(21, 22, NULL, '2023-12-24', NULL, NULL, NULL, '0', 0, 0, NULL, NULL),
(22, 23, NULL, '2023-12-24', NULL, NULL, NULL, '0', 0, 0, NULL, NULL),
(23, 24, 2, '2024-01-18', NULL, 'A', '15 tahun 0 bulan', '1', 0, 0, NULL, NULL),
(24, 25, NULL, '2024-01-21', NULL, NULL, NULL, '0', 0, 0, NULL, NULL),
(25, 26, NULL, '2024-01-21', NULL, NULL, NULL, '0', 0, 0, NULL, NULL),
(26, 27, 2, '2024-01-21', NULL, 'A', '15 tahun 0 bulan', '1', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `Id` int(11) NOT NULL,
  `nip` char(7) DEFAULT NULL,
  `nama_guru` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`Id`, `nip`, `nama_guru`, `alamat`, `telp`) VALUES
(2, '1170002', 'Achi', 'Tangerang', '+6285946057839'),
(3, '1170003', 'Test Guru', 'Alamat Guru', '000');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `Id` int(11) NOT NULL,
  `nama_hari` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`Id`, `nama_hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat'),
(6, 'PR');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_hari` int(11) DEFAULT NULL,
  `id_mapel` varchar(255) DEFAULT NULL,
  `kelas` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_hari`, `id_mapel`, `kelas`) VALUES
(1, 1, 'P0002', 'A'),
(2, 1, 'P0003', 'A'),
(3, 1, 'P0004', 'A'),
(4, 1, 'P0005', 'A'),
(5, 1, 'P0006', 'A'),
(6, 1, 'P0017', 'A'),
(7, 1, 'P0008', 'A'),
(8, 1, 'P0002', 'B'),
(9, 1, 'P0003', 'B'),
(10, 1, 'P0004', 'B'),
(11, 1, 'P0005', 'B'),
(12, 1, 'P0006', 'B'),
(13, 1, 'P0017', 'B'),
(14, 1, 'P0007', 'B'),
(15, 2, 'P0009', 'B'),
(16, 2, 'P0005', 'B'),
(17, 2, 'P0010', 'B'),
(18, 2, 'P0011', 'B'),
(19, 2, 'P0006', 'B'),
(20, 2, 'P0017', 'B'),
(21, 2, 'P0007', 'B'),
(22, 1, 'P0008', 'B'),
(23, 2, 'P0008', 'B'),
(24, 3, 'P0012', 'B'),
(25, 3, 'P0013', 'B'),
(26, 3, 'P0014', 'B'),
(27, 3, 'P0015', 'B'),
(28, 3, 'P0006', 'B'),
(29, 3, 'P0017', 'B'),
(30, 3, 'P0007', 'B'),
(31, 3, 'P0008', 'B'),
(32, 4, 'P0003', 'B'),
(33, 4, 'P0005', 'B'),
(34, 4, 'P0011', 'B'),
(35, 4, 'P0004', 'B'),
(36, 4, 'P0006', 'B'),
(37, 4, 'P0017', 'B'),
(38, 4, 'P0007', 'B'),
(39, 4, 'P0008', 'B'),
(40, 5, 'P0009', 'B'),
(41, 5, 'P0010', 'B'),
(42, 5, 'P0016', 'B'),
(43, 5, 'P0006', 'B'),
(44, 5, 'P0007', 'B'),
(45, 5, 'P0008', 'B'),
(47, 6, 'P0004', 'B'),
(48, 6, 'P0018', 'B'),
(49, 6, 'P0011', 'B'),
(50, 6, 'P0018', 'B'),
(51, 6, 'P0010', 'B'),
(52, 2, 'P0001', 'A'),
(53, 4, 'P0017', 'A'),
(54, 2, 'P0003', 'A'),
(55, 3, 'P0012', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `kode_mapel_kegiatan` char(5) NOT NULL DEFAULT '',
  `nama_mapel_kegiatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kode_mapel_kegiatan`, `nama_mapel_kegiatan`) VALUES
('P0001', 'Matematika - Jam: 07:30 - 08:30'),
('P0002', 'Upacara - Jam: 08:00 - 08:30'),
('P0003', 'Membaca - Jam: 08:30 - 09:30'),
('P0004', 'Bahasa - Jam: 09:30 - 10:30'),
('P0005', 'Seni - Jam: 10:30 - 11:30'),
('P0006', 'Istirahat - Jam: 11:30 - 12:00'),
('P0007', 'Doa - Jam: 13:00 - 13:30'),
('P0008', 'Pulang - Jam: 13:30'),
('P0009', 'Iqro - Jam: 08:00 - 09:00'),
('P0010', 'Hijaiyah - Jam: 10:00 - 11:00'),
('P0011', 'Angka - Jam: 11:00 - 12:00'),
('P0012', 'Olahraga - Jam: 08:00 - 09:00'),
('P0013', 'Bahasa Inggris - Jam: 09:00 - 10:00'),
('P0014', 'Melukis - Jam: 10:00 - 11:00'),
('P0015', 'Menari - Jam: 11:00 - 12:00'),
('P0016', 'Sholat Dhuha - Jam: 10:00 - 10:30'),
('P0017', 'Evaluasi - Jam: 12:00 - 13:00'),
('P0018', 'Majalah');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_spp`
--

CREATE TABLE `pembayaran_spp` (
  `Id` int(11) NOT NULL,
  `tanggal_pembayaran_spp` date DEFAULT NULL,
  `cicilan_ke` int(11) NOT NULL,
  `status_spp` int(11) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran_spp`
--

INSERT INTO `pembayaran_spp` (`Id`, `tanggal_pembayaran_spp`, `cicilan_ke`, `status_spp`, `user_id`) VALUES
(19, '2017-12-21', 1, 1, '8'),
(20, '2017-12-21', 1, 1, '8'),
(21, '2017-12-24', 3, 1, '8'),
(22, '2017-12-24', 4, 1, '8'),
(23, '2017-12-24', 5, 1, '8'),
(24, '2017-12-24', 6, 1, '8'),
(25, '2017-12-27', 1, 1, '9'),
(26, '2017-12-27', 2, 1, '9'),
(27, '2017-12-27', 3, 1, '9'),
(28, '2017-12-27', 4, 1, '9'),
(29, '2017-12-27', 5, 1, '9'),
(30, '2017-12-27', 6, 1, '9'),
(31, '2017-12-27', 1, 1, '9'),
(32, '2017-12-29', 1, 1, '10'),
(33, '2023-09-27', 1, 1, '11'),
(34, '2023-09-27', 1, 1, '12'),
(35, '2023-09-28', 1, 1, '13'),
(36, '2023-12-24', 1, 1, '20'),
(37, '2023-12-24', 2, 0, '20');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `Id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nama_panggilan` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `jumlah_saudara` int(11) DEFAULT NULL,
  `di_jakarta_ikut` varchar(100) DEFAULT NULL,
  `nama_ayah` varchar(255) DEFAULT NULL,
  `tempat_lahir_ayah` varchar(255) DEFAULT NULL,
  `tanggal_lahir_ayah` date DEFAULT NULL,
  `pendidikan_terakhir_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(255) DEFAULT NULL,
  `agama_ayah` varchar(255) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `tempat_lahir_ibu` varchar(255) DEFAULT NULL,
  `tanggal_lahir_ibu` date DEFAULT NULL,
  `pendidikan_terakhir_ibu` varchar(255) DEFAULT NULL,
  `pekerjaan_ibu` varchar(255) DEFAULT NULL,
  `agama_ibu` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `upload_akte` varchar(255) DEFAULT NULL,
  `upload_kartu_keluarga` varchar(255) DEFAULT NULL,
  `foto_anak` varchar(255) DEFAULT NULL,
  `foto_keluarga` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`Id`, `nama`, `nama_panggilan`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `anak_ke`, `jumlah_saudara`, `di_jakarta_ikut`, `nama_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `pendidikan_terakhir_ayah`, `pekerjaan_ayah`, `agama_ayah`, `nama_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `pendidikan_terakhir_ibu`, `pekerjaan_ibu`, `agama_ibu`, `telp`, `upload_akte`, `upload_kartu_keluarga`, `foto_anak`, `foto_keluarga`) VALUES
(8, 'Anggit Prayogo', 'Anggit', 'tangerang', '2009-01-01', 'L', 1, 2, 'Orang tua', 'Ayah', 'Tangerang', '1980-01-01', 'SMA', 'Karyawan Swasta', 'Islam', 'Ibu', 'Gunung Kidul', '1980-01-01', 'SMA', 'Ibu Rumah Tangga', 'Islam', '+6287812035533', '09-12-34WhatsApp Image 2017-10-24 at 18.35.03.jpeg', '09-12-34WhatsApp Image 2017-11-24 at 16.42.39.jpeg', '09-12-43cropped-GGAD-LOGO-2.png', '09-12-43logo.jpeg'),
(9, 'test', 'test', 'test', '2009-01-01', 'L', 1, 2, 'test', 'test', 'test', '1980-01-01', 'SMA', 'test', 'test', 'test', 'test', '1980-01-01', 'test', 'test', 'test', '908080', '03-12-391. Berhasil signup.PNG', '03-12-392. Gagal signup (data kurang atau sudah terpakai).PNG', '03-12-502. Gagal signup (data kurang atau sudah terpakai).PNG', '03-12-501. Berhasil signup.PNG'),
(10, 'test2', 'test2', 'test2', '2009-01-01', 'L', 2, 2, 'test2', 'test2', 'test2', '1980-01-01', 'test2', 'test2', 'test2', 'test2', 'test2', '1980-01-01', 'test2', 'test2', 'test2', 'test2', '10-12-35filter.png', '10-12-35icon.JPG', '10-12-45edittext.png', '10-12-45cloud-internet-symbol.png'),
(11, 'nasrul', 'nas', 'tangeran', '1997-02-04', 'L', 1, 4, 'nene', 'jul', 'uma', '1980-01-01', 'sd', 'nelayan', 'islam', 'lepang', 'uma', '0000-00-00', 'SD', 'Tenun', 'ISLAM', '+6281338787571', '04-09-44cover.jpeg', '04-09-44logo.jpeg', '06-10-273.jpg', '06-10-271.jpg'),
(12, 'neni mentari', 'nen', 'bompalola', '1999-12-28', 'P', 1, 2, 'ayah', 'rahman', 'bom', '1988-01-08', 'sd', 'kepala desa', 'islam', 'gina', 'bom', '1983-11-23', 'sd', 'nelayan', 'islam', '+6281338787672', '01-09-36a.jpg', '01-09-36favicon.png', '01-09-01cc.png', '01-09-01favicon.png'),
(13, 'nene leti', 'nene', 'umapura', '2003-02-04', 'P', 1, 3, 'orang tua', 'sdsg', 'se', '1980-01-01', 'Array', 'Array', 'Array', 'as', 'awgfa', '1980-01-01', 'esg', 'asg', 'asg', 'sac', '02-09-25favicon.png', '02-09-25favicon.png', '02-09-42apple-icon.png', '02-09-42apple-icon.png'),
(14, 'kepala sekolah', 'kepala', 'bandung', '1999-05-02', 'L', 1, 1, 'warisan', 'Ma', 'bo', '1980-01-01', 'Array', 'Array', 'Array', 'wda', 'awgfa', '1980-01-12', 'SD', 'PNS', 'Islam', '+6281338787672', '', '', '', ''),
(15, 'tsef', 'eyr', 'segdr', '2009-01-01', 'L', 2, 2, 'hg', '45756', 'DFD', '1980-01-01', 'Array', 'Array', 'Array', 'SEGT', 'SEGF', '1980-01-01', 'SD', 'PNS', 'Islam', '58678', '', '', '', ''),
(16, '', '', '', '0000-00-00', '', 0, 0, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(17, '', '', '', '0000-00-00', '', 0, 0, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(18, 'ndidn', 'bandung', 'umapura', '1995-09-17', 'L', 3, 5, 'ibu', '967857', 'kln', '1980-01-01', 'Array', 'Array', 'Array', 'yghg', '89', '1980-01-01', 'SD', 'PNS', 'Islam', '75674345', '', '', '', ''),
(19, 'set', 'bandung', 'pura', '2001-10-24', 'L', 3, 4, 'Panti Asuhan', '5465544', 'se', '1980-01-01', 'Array', 'Array', 'Array', 'hjfvxzcx', 'ffte', '1984-09-10', 'SD', 'PNS', 'Islam', '75674345', '06-12-024.jpg', '06-12-022.jpg', '06-12-40marimas.png', '06-12-405.jpg'),
(20, 'be', 'sf', 'bandung', '1993-09-24', 'L', 3, 4, 'Panti Asuhan', '86756', 'se', '1980-01-01', 'Array', 'Array', 'Array', 'wda', 'ss', '1980-01-01', 'Sarjana', 'PNS', 'Islam', '86754442', '06-12-583.jpg', '06-12-58marimas.png', '06-12-404.jpg', '06-12-40marimas.png'),
(21, '', '', '', '0000-00-00', '', 0, 0, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(22, 'eeee', 'fff', 't', '2009-01-01', 'P', 4, 6, 'Kost', '', 'et', '1980-01-01', 'Array', 'Array', 'Array', 'te', 'ss', '1980-01-01', 'SD', 'PNS', 'Islam', '345', '', '', '', ''),
(23, '', '', '', '0000-00-00', '', 0, 0, '', '', '', '0000-00-00', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(24, 'tt', 'FF', 'sfs', '2009-01-01', 'L', 3, 3, 'Sendiri', '345465', 'ette', '1980-01-01', 'Array', 'Array', 'Array', 'fs', 'sfs', '1980-01-01', 'SD', 'PNS', 'Islam', '56556', '02-01-061.jpg', '02-01-061.jpg', '02-01-341.jpg', '02-01-341.jpg'),
(25, 'ff', 'fhfh', 'sf', '2009-01-01', 'L', 4, 5, 'Wali', '4544', 'ff', '1980-01-01', 'SD', 'Swasta', '', 'gina', 'ss', '1980-01-01', 'Sarjana', 'PNS', 'Islam', '55555555', '', '', '', ''),
(26, 'sfs', 'ef', 'ee', '2009-01-01', 'P', 4, 6, 'Kost', '45345', 'xzcxc', '1980-01-01', 'SMP', 'Swasta', '', 'ssss', 'ssssssssss', '1980-01-01', 'SD', 'PNS', 'Islam', '4554', '', '', '', ''),
(27, 'cc', 'ssjf', 'sfssss', '2009-01-01', 'L', 4, 5, 'Wali', '454', 'cc', '1980-01-01', 'SMP', 'Wiraswasta', '', 'sss', 'cc', '1980-01-01', 'SD', 'PNS', 'Islam', '45', '05-01-592.jpg', '05-01-592.jpg', '05-01-191.jpg', '05-01-191.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` char(6) NOT NULL DEFAULT '0',
  `kelas` varchar(255) DEFAULT NULL,
  `id_detail_pendaftaran` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `kelas`, `id_detail_pendaftaran`, `nama`) VALUES
('170001', 'B', 7, 'Anggit Prayogo'),
('170002', 'B', 8, 'test'),
('170003', 'B', 8, 'test'),
('170004', 'B', 9, 'test2'),
('230005', 'B', 10, 'nasrul'),
('230006', 'B', 11, 'neni mentari'),
('230007', 'B', 12, 'nene leti'),
('230008', 'A', 19, 'be');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indexes for table `cicilan_pendaftaran`
--
ALTER TABLE `cicilan_pendaftaran`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_detail_pendaftaran` (`id_detail_pendaftaran`);

--
-- Indexes for table `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_hari` (`id_hari`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode_mapel_kegiatan`);

--
-- Indexes for table `pembayaran_spp`
--
ALTER TABLE `pembayaran_spp`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `cicilan_pendaftaran`
--
ALTER TABLE `cicilan_pendaftaran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `pembayaran_spp`
--
ALTER TABLE `pembayaran_spp`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pendaftaran` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cicilan_pendaftaran`
--
ALTER TABLE `cicilan_pendaftaran`
  ADD CONSTRAINT `cicilan_pendaftaran_ibfk_1` FOREIGN KEY (`id_detail_pendaftaran`) REFERENCES `detail_pendaftaran` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
  ADD CONSTRAINT `detail_pendaftaran_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pendaftaran` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pendaftaran_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `akun` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`kode_mapel_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`id_hari`) REFERENCES `hari` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
