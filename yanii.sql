-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2024 at 01:49 PM
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
-- Database: `yanii`
--

-- --------------------------------------------------------

--
-- Table structure for table `bien_the_mau_sac`
--

CREATE TABLE `bien_the_mau_sac` (
  `id` int NOT NULL,
  `id_san_pham` int DEFAULT NULL,
  `mau_sac` varchar(50) NOT NULL,
  `hinh_anh` varchar(255) DEFAULT NULL,
  `gia_giam` decimal(12,2) DEFAULT NULL,
  `so_luong` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int NOT NULL,
  `ten_danh_muc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `ten_danh_muc`) VALUES
(1, '1'),
(2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int NOT NULL,
  `id_khach_hang` int NOT NULL,
  `ngay_tao` datetime DEFAULT CURRENT_TIMESTAMP,
  `tong_tien` decimal(12,2) NOT NULL,
  `trang_thai` tinyint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `don_hang_chi_tiet`
--

CREATE TABLE `don_hang_chi_tiet` (
  `id` int NOT NULL,
  `id_don_hang` int NOT NULL,
  `id_san_pham` int NOT NULL,
  `id_bien_the` int DEFAULT NULL,
  `so_luong` int NOT NULL,
  `gia` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id` int NOT NULL,
  `id_khach_hang` int NOT NULL,
  `ngay_tao` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang_chi_tiet`
--

CREATE TABLE `gio_hang_chi_tiet` (
  `id` int NOT NULL,
  `id_gio_hang` int NOT NULL,
  `id_san_pham` int NOT NULL,
  `id_bien_the` int DEFAULT NULL,
  `so_luong` int NOT NULL DEFAULT '1',
  `gia` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int NOT NULL,
  `id_san_pham` varchar(50) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `mo_ta` text,
  `gia` decimal(12,2) NOT NULL,
  `gia_giam` decimal(12,2) DEFAULT NULL,
  `so_luong` int NOT NULL DEFAULT '0',
  `hinh_anh` varchar(255) DEFAULT NULL,
  `id_danh_muc` int DEFAULT NULL,
  `id_co_phieu` tinyint DEFAULT '1' COMMENT '1: Còn hàng, 2: Hết hàng',
  `ngay_tao` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id`, `id_san_pham`, `ten_san_pham`, `mo_ta`, `gia`, `gia_giam`, `so_luong`, `hinh_anh`, `id_danh_muc`, `id_co_phieu`, `ngay_tao`) VALUES
(1, '#546566', 'Phạm', 'rgegre', 324.00, 324324.00, 3242, 'z5614982119577_2676df35293601881bd56dadae264a27.jpg', 1, 1, '2024-12-19 20:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int NOT NULL,
  `ten_slider` varchar(255) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `trang_thai` tinyint DEFAULT '1' COMMENT '1: Hiển thị, 0: Ẩn',
  `ngay_tao` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int NOT NULL,
  `ten_dang_nhap` varchar(50) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_vai_tro` int NOT NULL,
  `ngay_tao` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `ten_dang_nhap`, `mat_khau`, `email`, `id_vai_tro`, `ngay_tao`) VALUES
(1, 'yanii', '123456', 'sss@gmail.com', 2, '2024-12-19 20:43:26'),
(2, 'admin', '123456', 'admin@gmail.com', 1, '2024-12-19 20:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `vai_tro`
--

CREATE TABLE `vai_tro` (
  `id` int NOT NULL,
  `ten_vai_tro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vai_tro`
--

INSERT INTO `vai_tro` (`id`, `ten_vai_tro`) VALUES
(1, 'admin'),
(2, 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bien_the_mau_sac`
--
ALTER TABLE `bien_the_mau_sac`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_san_pham` (`id_san_pham`);

--
-- Indexes for table `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `don_hang_chi_tiet`
--
ALTER TABLE `don_hang_chi_tiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_don_hang` (`id_don_hang`),
  ADD KEY `id_san_pham` (`id_san_pham`),
  ADD KEY `id_bien_the` (`id_bien_the`);

--
-- Indexes for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gio_hang_chi_tiet`
--
ALTER TABLE `gio_hang_chi_tiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gio_hang` (`id_gio_hang`),
  ADD KEY `id_san_pham` (`id_san_pham`),
  ADD KEY `id_bien_the` (`id_bien_the`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_san_pham` (`id_san_pham`),
  ADD KEY `id_danh_muc` (`id_danh_muc`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ten_dang_nhap` (`ten_dang_nhap`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_vai_tro` (`id_vai_tro`);

--
-- Indexes for table `vai_tro`
--
ALTER TABLE `vai_tro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bien_the_mau_sac`
--
ALTER TABLE `bien_the_mau_sac`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `don_hang_chi_tiet`
--
ALTER TABLE `don_hang_chi_tiet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gio_hang_chi_tiet`
--
ALTER TABLE `gio_hang_chi_tiet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vai_tro`
--
ALTER TABLE `vai_tro`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bien_the_mau_sac`
--
ALTER TABLE `bien_the_mau_sac`
  ADD CONSTRAINT `bien_the_mau_sac_ibfk_1` FOREIGN KEY (`id_san_pham`) REFERENCES `san_pham` (`id`);

--
-- Constraints for table `don_hang_chi_tiet`
--
ALTER TABLE `don_hang_chi_tiet`
  ADD CONSTRAINT `don_hang_chi_tiet_ibfk_1` FOREIGN KEY (`id_don_hang`) REFERENCES `don_hang` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `don_hang_chi_tiet_ibfk_2` FOREIGN KEY (`id_san_pham`) REFERENCES `san_pham` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `don_hang_chi_tiet_ibfk_3` FOREIGN KEY (`id_bien_the`) REFERENCES `bien_the_mau_sac` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `gio_hang_chi_tiet`
--
ALTER TABLE `gio_hang_chi_tiet`
  ADD CONSTRAINT `gio_hang_chi_tiet_ibfk_1` FOREIGN KEY (`id_gio_hang`) REFERENCES `gio_hang` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gio_hang_chi_tiet_ibfk_2` FOREIGN KEY (`id_san_pham`) REFERENCES `san_pham` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gio_hang_chi_tiet_ibfk_3` FOREIGN KEY (`id_bien_the`) REFERENCES `bien_the_mau_sac` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`id_danh_muc`) REFERENCES `danh_muc` (`id`);

--
-- Constraints for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD CONSTRAINT `fk_vai_tro` FOREIGN KEY (`id_vai_tro`) REFERENCES `vai_tro` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
