-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 08:51 AM
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
-- Database: `thegioismartphone`
--
CREATE DATABASE IF NOT EXISTS `thegioismartphone` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `thegioismartphone`;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id_chitietdonhang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_donhang` varchar(100) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id_chitietdonhang`, `id_sanpham`, `id_donhang`, `soluongmua`) VALUES
(4, 13, '5536', 2),
(5, 12, '5536', 1),
(6, 13, '7995', 2),
(7, 12, '7995', 1),
(8, 13, '9670', 2),
(9, 12, '9670', 1),
(10, 13, '5132', 2),
(11, 12, '5132', 1),
(12, 13, '5393', 2),
(13, 12, '5393', 1),
(14, 13, '1441', 2),
(15, 12, '1441', 1),
(16, 19, '7524', 2),
(17, 16, '7524', 2),
(18, 15, '7524', 1);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(7, 'iPhone', 1),
(8, 'Samsung', 2),
(9, 'Xiaomi', 3),
(10, 'Nokia', 4);

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id_giohang` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `id_donhang` varchar(100) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id_giohang`, `id_kh`, `id_donhang`, `cart_status`) VALUES
(1, 0, '1583', 1),
(2, 0, '6786', 1),
(3, 0, '5536', 1),
(4, 0, '7995', 1),
(5, 29, '9670', 1),
(6, 29, '5132', 1),
(7, 29, '5393', 1),
(8, 29, '1441', 1),
(9, 31, '7524', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensp` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(100) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `mota` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `tensp`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `mota`, `tinhtrang`, `id_danhmuc`) VALUES
(10, 'iPhone 14', 'IP01', '30000000', 100, '1668917402_iphone-14-pro.jpg', 'Iphone 14 pro', 'Iphone 14 pro', 1, 7),
(11, 'Xiaomi redmi note 10 pro', 'RM01', '8000000', 100, '1668917430_xiaomi-redmi-note-10-pro.jpg', 'Xiaomi note 10 pro', 'Xiaomi note 10 pro', 1, 9),
(12, 'Xiaomi redmi note 10 pro 5G', 'RM02', '8300000', 100, '1668917454_redmi-note-10-pro_blue.jpg', 'Xiaomi note 10 pro 5g', 'Xiaomi note 10 pro 5g', 1, 9),
(13, 'Samsung Galaxy Z Flip 4', 'SG01', '43000000', 100, '1668917580_samsung-galaxy-z-flip4-5g.jpg', 'Z Flip 4', 'Z Flip 4', 1, 8),
(14, 'Samsung Galaxy S21 ', 'SGS01', '22000000', 50, '1669007901_samsung-galaxy-s21-tim.jpg', 'Samsung Galaxy S21', 'Samsung Galaxy S21', 1, 8),
(15, 'Samsung Galaxy S21 Ultra 5G', 'SGS02', '27000000', 100, '1669007956_samsung-galaxy-s21-ultra-5g.jpg', 'Samsung Galaxy S21 Ultra 5G', 'Samsung Galaxy S21 Ultra 5G', 1, 8),
(16, 'Samsung Galaxy Note 20 Ultra 5G', 'SGN01', '26000000', 100, '1669008050_Samsung-Galaxy-Note20-Ultra-5G.jpg', 'Samsung Galaxy Note 20 Ultra 5G', 'Samsung Galaxy Note 20 Ultra 5G', 1, 8),
(17, 'Nokia G21', 'NG01', '5000000', 30, '1669008116_nokia-g21-tím-thum.jpg', 'Nokia G21', 'Nokia G21', 1, 10),
(18, 'Nokia X10 5G', 'NX01', '10000000', 50, '1669008185_nokia-x10-5g.jpg', 'Nokia X10 5G', 'Nokia X10 5G', 1, 10),
(19, 'iPhone 13 pro max', 'IPPX01', '31000000', 100, '1669008333_iphone_13_pro_max_gold.jpg', 'Iphone 13 pro max gold', 'Iphone 13 pro max gold', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkh` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkh`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(1, 'Minh Nguyễn', '123@gmail.com', '144 LÝ CHIÊU HOÀNG P10 Q6', '81dc9bdb52d04dc20036dbd8313ed055', '0336739686'),
(21, 'Minh Nguyễn', 'minh.207ct40431@vanlanguni.vn', '144 LÝ CHIÊU HOÀNG P10 Q6', '81dc9bdb52d04dc20036dbd8313ed055', '0336739686'),
(22, 'Minh Nguyễn', 'minh.207ct40431@vanlanguni.vn', '144 LÝ CHIÊU HOÀNG P10 Q6', '81dc9bdb52d04dc20036dbd8313ed055', '0336739686'),
(23, 'Minh ', 'minhnguyen9686q6@gmail.com', '144 LÝ CHIÊU HOÀNG P10 Q6', '81dc9bdb52d04dc20036dbd8313ed055', '0336739686'),
(24, 'Minh ', 'minhnguyen9686q6@gmail.com', '144 LÝ CHIÊU HOÀNG P10 Q6', '81dc9bdb52d04dc20036dbd8313ed055', '0336739686'),
(25, 'Minh ', 'minhnguyen9686q6@gmail.com', '144 LÝ CHIÊU HOÀNG P10 Q6', '81dc9bdb52d04dc20036dbd8313ed055', '0336739686'),
(26, 'Minh ', 'minhnguyen1606q6@gmail.com', '144 LÝ CHIÊU HOÀNG P10 Q6', '81dc9bdb52d04dc20036dbd8313ed055', '0394563139'),
(27, 'Minh ', 'minhnguyen1606q6@gmail.com', '144 LÝ CHIÊU HOÀNG P10 Q6', '81dc9bdb52d04dc20036dbd8313ed055', '0394563139'),
(28, 'Minh ', 'minhnguyen1606q6@gmail.com', '144 LÝ CHIÊU HOÀNG P10 Q6', '81dc9bdb52d04dc20036dbd8313ed055', '0394563139'),
(29, 'Minh ', 'minh123@gmail.com', '144 LÝ CHIÊU HOÀNG P10 Q6', '81dc9bdb52d04dc20036dbd8313ed055', '0336739686'),
(31, 'Minh Nguyễn', '1234@gmail.com', '144 LÝ CHIÊU HOÀNG P10 Q6', '81dc9bdb52d04dc20036dbd8313ed055', '0394563139');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id_chitietdonhang`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_giohang`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id_chitietdonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
