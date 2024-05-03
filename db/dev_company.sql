-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 03, 2024 at 12:43 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_group`
--

CREATE TABLE `mst_group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(150) DEFAULT NULL,
  `group_description` text,
  `created_user_id` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_user_id` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mst_group`
--

INSERT INTO `mst_group` (`group_id`, `group_name`, `group_description`, `created_user_id`, `created_date`, `modified_user_id`, `modified_date`) VALUES
(1, 'Superadmin', 'Superadmin', 1, '2022-02-04 20:22:33', NULL, NULL),
(2, 'Admin', 'Admin', 1, '2022-02-04 20:22:36', NULL, NULL),
(3, 'Umum', 'Umum / Masyarakat', 1, '2022-02-04 20:23:05', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_mahasiswa`
--

CREATE TABLE `mst_mahasiswa` (
  `mahasiswa_id` int(11) NOT NULL,
  `mahasiswa_nim` varchar(15) DEFAULT NULL COMMENT 'NIM:Nomor Induk Mahsiswa',
  `mahasiswa_nama` varchar(100) DEFAULT NULL,
  `created_user_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_user_id` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mst_mahasiswa`
--

INSERT INTO `mst_mahasiswa` (`mahasiswa_id`, `mahasiswa_nim`, `mahasiswa_nama`, `created_user_id`, `created_date`, `modified_user_id`, `modified_date`) VALUES
(1, 'A11.2024.00001', 'Genta Alby', 1, '2024-05-03 10:25:08', NULL, NULL),
(2, 'A11.2024.00002', 'Garin Alsaki', 1, '2024-05-03 10:25:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_menu`
--

CREATE TABLE `mst_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_parent_id` int(11) DEFAULT NULL,
  `menu_name` varchar(100) DEFAULT NULL,
  `menu_order` int(11) DEFAULT NULL,
  `menu_module` varchar(100) DEFAULT NULL,
  `menu_icon` varchar(100) DEFAULT NULL,
  `menu_dropdown` varchar(100) DEFAULT NULL,
  `menu_status` tinyint(1) DEFAULT '1',
  `menu_aplication` varchar(200) DEFAULT NULL,
  `created_user_id` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_user_id` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE `mst_user` (
  `user_id` int(11) NOT NULL,
  `user_username` char(20) DEFAULT NULL,
  `user_group_id` int(11) DEFAULT NULL,
  `user_nik` char(18) DEFAULT NULL,
  `user_fullname` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_token` varchar(100) DEFAULT NULL,
  `user_keys` char(50) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_phone` char(20) DEFAULT NULL,
  `user_whatsapp` char(20) DEFAULT NULL,
  `user_address` text,
  `user_gender` char(25) DEFAULT NULL,
  `user_path` varchar(100) DEFAULT NULL,
  `user_photo` varchar(255) DEFAULT NULL,
  `user_last_login` datetime DEFAULT NULL,
  `user_status` char(1) DEFAULT NULL COMMENT 'Y:active, N:not_active',
  `created_user_id` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_user_id` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`user_id`, `user_username`, `user_group_id`, `user_nik`, `user_fullname`, `user_password`, `user_token`, `user_keys`, `user_email`, `user_phone`, `user_whatsapp`, `user_address`, `user_gender`, `user_path`, `user_photo`, `user_last_login`, `user_status`, `created_user_id`, `created_date`, `modified_user_id`, `modified_date`) VALUES
(1, 'hesen', 1, '3322061411870001', 'HESEN DWI YATMIKO', '1586b9f7df20fc6e2619e7f935b7f1ff', 'ca5f19b29f10a2031a3a051a18f6a4858a5cb554292f354eee85c447bea2', 'K3Y$-041711', 'hesendwiyatmiko@gmail.com', '081297871114', '085329177744', 'Griya Muslim Mutiara Pendowoharjo Kav.C - Bantul - Yogyakarta', 'LAKI-LAKI', NULL, NULL, '2024-05-03 17:50:05', 'Y', 1, '2022-02-01 13:16:55', 1, '2024-05-03 12:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `ref_gender`
--

CREATE TABLE `ref_gender` (
  `gender_id` tinyint(4) NOT NULL,
  `gender_name` varchar(100) DEFAULT NULL,
  `gender_code_en` char(5) DEFAULT NULL COMMENT 'kode inggris',
  `gender_code_id` char(5) DEFAULT NULL COMMENT 'kode indonesia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ref_gender`
--

INSERT INTO `ref_gender` (`gender_id`, `gender_name`, `gender_code_en`, `gender_code_id`) VALUES
(1, 'LAKI-LAKI', 'M', 'L'),
(2, 'PEREMPUAN', 'F', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `trx_nilai`
--

CREATE TABLE `trx_nilai` (
  `nilai_id` int(11) NOT NULL,
  `nilai_mahasiswa_id` int(11) NOT NULL,
  `nilai_ujian_a` decimal(10,0) NOT NULL DEFAULT '0',
  `nilai_ujian_b` decimal(10,0) NOT NULL DEFAULT '0',
  `nilai_total` decimal(10,0) DEFAULT '0',
  `nilai_rata_rata` decimal(10,0) NOT NULL DEFAULT '0',
  `nilai_grade` varchar(1) DEFAULT NULL,
  `created_user_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_user_id` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trx_nilai`
--

INSERT INTO `trx_nilai` (`nilai_id`, `nilai_mahasiswa_id`, `nilai_ujian_a`, `nilai_ujian_b`, `nilai_total`, `nilai_rata_rata`, `nilai_grade`, `created_user_id`, `created_date`, `modified_user_id`, `modified_date`) VALUES
(1, 1, '70', '80', '150', '76', 'B', 1, '2024-05-03 11:34:42', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_group`
--
ALTER TABLE `mst_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `mst_mahasiswa`
--
ALTER TABLE `mst_mahasiswa`
  ADD PRIMARY KEY (`mahasiswa_id`),
  ADD UNIQUE KEY `mahasiswa_nim` (`mahasiswa_nim`);

--
-- Indexes for table `mst_menu`
--
ALTER TABLE `mst_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `idx_cu_name` (`user_fullname`),
  ADD UNIQUE KEY `idx_cu_nik` (`user_nik`),
  ADD UNIQUE KEY `idx_cu_username` (`user_username`),
  ADD KEY `idx_cu_group_id` (`user_group_id`);

--
-- Indexes for table `ref_gender`
--
ALTER TABLE `ref_gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `trx_nilai`
--
ALTER TABLE `trx_nilai`
  ADD PRIMARY KEY (`nilai_id`),
  ADD UNIQUE KEY `mahasiswa_id` (`nilai_mahasiswa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_group`
--
ALTER TABLE `mst_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mst_mahasiswa`
--
ALTER TABLE `mst_mahasiswa`
  MODIFY `mahasiswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_menu`
--
ALTER TABLE `mst_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ref_gender`
--
ALTER TABLE `ref_gender`
  MODIFY `gender_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trx_nilai`
--
ALTER TABLE `trx_nilai`
  MODIFY `nilai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD CONSTRAINT `fk_cu_group_id` FOREIGN KEY (`user_group_id`) REFERENCES `mst_group` (`group_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `trx_nilai`
--
ALTER TABLE `trx_nilai`
  ADD CONSTRAINT `trx_nilai_ibfk_1` FOREIGN KEY (`nilai_mahasiswa_id`) REFERENCES `mst_mahasiswa` (`mahasiswa_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
