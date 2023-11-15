-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 04:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webquanlyktx`
--

-- --------------------------------------------------------

--
-- Table structure for table `canbo`
--

CREATE TABLE `canbo` (
  `tendn` varchar(100) NOT NULL,
  `mk` varchar(100) NOT NULL,
  `macb` varchar(100) NOT NULL,
  `tencb` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sdt` varchar(100) NOT NULL,
  `dc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `canbo`
--

INSERT INTO `canbo` (`tendn`, `mk`, `macb`, `tencb`, `email`, `sdt`, `dc`) VALUES
('anh hai', '123456789', 'cb002', 'nguyễn văn a', 'toduyduc@gmail.com', '0855454848', 'na'),
('anh phong', '123', 'CB0043242', 'phong bac ninh', 'anhphong@gmail.com', '015566465', 'bac ninh'),
('bac lam', '123', 'CB00143424', 'hoang van bac', 'hoangvanbac@gmail.com', '0965254555', 'vinh phuc'),
('dangnhap', '123', 'cb001', 'nguyễn thị hà', 'ffsfdf', 'hhthfhthdh', 'fdfs'),
('duy duc', '123', 'CB0078', 'toduy duc', 'toduyduc0@gmail.com', '0966149525', 'bac ninh'),
('toduyduc', '2001', 'cb003', 'Tô Duy Đức', 'toduyduc0@gmail.com', '0966149525', 'na'),
('van bac', '123', 'CB0014342', 'hoang van bac', 'vanbac0@gmail.com', '044566522555', 'thạnh thất'),
('van lam', '123', 'CB00143423', 'hoang van bac', 'tovanlam0@gmail.com', '0966149525', 'thạnh thất');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `hoadon` varchar(50) NOT NULL,
  `phong` int(5) NOT NULL,
  `toanha` varchar(50) NOT NULL,
  `sodien` int(30) DEFAULT NULL,
  `sodiendadung` int(20) NOT NULL,
  `giadien` int(50) NOT NULL,
  `tiendien` double NOT NULL,
  `sonuoc` int(30) DEFAULT NULL,
  `sonuocdadung` int(20) NOT NULL,
  `gianuoc` int(50) NOT NULL,
  `tiennuoc` double NOT NULL,
  `loaiwifi` varchar(50) NOT NULL,
  `giawifi` int(50) NOT NULL,
  `ngay` varchar(50) NOT NULL,
  `thang` varchar(50) NOT NULL,
  `nam` varchar(50) NOT NULL,
  `thanhtien` double NOT NULL,
  `nguoilap` varchar(50) NOT NULL,
  `trangthai` varchar(50) NOT NULL,
  `ghichu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`hoadon`, `phong`, `toanha`, `sodien`, `sodiendadung`, `giadien`, `tiendien`, `sonuoc`, `sonuocdadung`, `gianuoc`, `tiennuoc`, `loaiwifi`, `giawifi`, `ngay`, `thang`, `nam`, `thanhtien`, `nguoilap`, `trangthai`, `ghichu`) VALUES
('hd00004354354', 107, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai1', 200000, '30', '1', '2023', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd0003848385404', 303, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd0034394954848', 405, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd003439495532', 105, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd0094737354', 407, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai1', 200000, '30', '1', '2023', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd01', 406, 'b1', NULL, 24, 4000, 96000, NULL, 15, 2000, 30000, 'loai1', 200000, '12', '12', '2022', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd02', 407, 'b1', NULL, 24, 4000, 96000, NULL, 15, 2000, 30000, 'loai2', 300000, '12', '12', '2022', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd020924843824', 502, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai1', 200000, '30', '1', '2023', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd02348384343', 102, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai1', 200000, '30', '1', '2023', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd0249348348', 401, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd02834923932', 103, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd0290004838476', 301, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd02954325544', 101, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd0295952', 406, 'b1', NULL, 24, 4000, 96000, NULL, 15, 2000, 30000, 'loai1', 200000, '12', '12', '2022', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd0295952343', 406, 'b1', NULL, 24, 4000, 96000, NULL, 15, 2000, 30000, 'loai1', 200000, '12', '12', '2022', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd0295952344', 407, 'b1', NULL, 24, 4000, 96000, NULL, 15, 2000, 30000, 'loai2', 300000, '12', '12', '2022', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd0295952346', 409, 'b2', NULL, 24, 4000, 96000, NULL, 15, 2000, 30000, 'loai1', 200000, '12', '12', '2022', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd0295952347', 501, 'b1', NULL, 24, 4000, 96000, NULL, 15, 2000, 30000, 'loai2', 300000, '12', '12', '2022', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd0295952348', 502, 'b1', NULL, 24, 4000, 96000, NULL, 15, 2000, 30000, 'loai3', 400000, '12', '12', '2022', 526000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd0295952349', 503, 'b1', NULL, 24, 4000, 96000, NULL, 15, 2000, 30000, 'loai1', 200000, '12', '12', '2022', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd0295952350', 504, 'b1', NULL, 24, 4000, 96000, NULL, 15, 2000, 30000, 'loai2', 300000, '12', '12', '2022', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd0295953', 407, 'b1', NULL, 24, 4000, 96000, NULL, 15, 2000, 30000, 'loai2', 300000, '12', '12', '2022', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd0295954', 408, 'a', NULL, 50, 4000, 200000, NULL, 44, 2000, 88000, 'loai3', 400000, '12', '10', '2022', 688000, 'nguyễn thị hà', 'đã thanh toán', 'không ghi'),
('hd0295955', 409, 'b2', NULL, 24, 4000, 96000, NULL, 15, 2000, 30000, 'loai4', 0, '12', '12', '2022', 126000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd03', 408, 'a', NULL, 24, 4000, 96000, NULL, 15, 2000, 30000, 'loai3', 400000, '12', '12', '2022', 526000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd0304930388483', 201, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd034030497365', 508, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd034054948374', 408, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd034054994054', 108, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd038583958385', 209, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd039248324834', 503, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd04', 409, 'b2', NULL, 24, 4000, 96000, NULL, 15, 2000, 30000, 'loai1', 200000, '12', '12', '2022', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd05', 501, 'b1', NULL, 24, 4000, 96000, NULL, 15, 2000, 30000, 'loai2', 300000, '12', '12', '2022', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd050483885845', 409, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd05430837492857', 309, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd054938434885', 509, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd054959385845', 109, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd06', 502, 'b1', NULL, 24, 4000, 96000, NULL, 15, 2000, 30000, 'loai3', 400000, '12', '12', '2022', 526000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd07', 503, 'b1', NULL, 24, 4000, 96000, NULL, 15, 2000, 30000, 'loai1', 200000, '12', '12', '2022', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd093747354000', 507, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai1', 200000, '30', '1', '2023', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd095483494584', 205, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd0994932492', 505, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd10139932495833', 206, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd123454530885', 308, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('HD148915348', 301, 'b2', 5456, 56, 500, 28000, 45566, 66, 500, 33000, 'loai2', 300000, '12', '10', '2023', 361000, 'nguyễn thị hà', 'đã thanh toán', ''),
('HD240923958', 301, 'b2', 4900, 100, 3000, 300000, 12600, 150, 800, 120000, 'loai2', 300000, '23', '10', '2022', 720000, 'nguyễn thị hà', 'chưa thanh toán', ''),
('HD30739150', 308, 'a', 5453, 13, 3000, 39000, NULL, 11, 2500, 27500, 'loai2', 300000, '5', '5', '2023', 366500, 'nguyễn thị hà', 'chưa thanh toán', 'chưa trả tiền'),
('HD307793918', 301, 'b2', 5155, 5155, 400, 2062000, 5515, 5515, 500, 2757500, 'loai2', 300000, '15', '5', '2023', 5119500, 'nguyễn thị hà', 'đã thanh toán', ''),
('hd34839493751', 302, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai1', 200000, '30', '1', '2023', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd3494945304944', 204, 'a', 1000, 500, 4000, 2000000, 1000, 400, 2000, 800000, 'loai1', 200000, '30', '10', '2023', 3000000, 'nguyễn thị hà', 'đã thanh toán', 'không ghi'),
('HD379321349', 203, 'b1', 35689, 34174, 2000, 68348000, 3000, -5000, 3000, -15000000, 'loai2', 300000, '15', '10', '2023', 53648000, 'phong bac ninh', 'chưa thanh toán', 'acs'),
('hd39492995943539', 208, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd39498587843', 506, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd3984843', 403, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd403847838483', 305, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd40394830044', 307, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai1', 200000, '30', '1', '2023', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('HD437601604', 301, 'b2', 78555, 78555, 200, 15711000, 56848, 56848, 600, 34108800, 'loai2', 300000, '15', '5', '2023', 50119800, 'nguyễn thị hà', 'đã thanh toán', 'fdfsd'),
('hd4834892043', 504, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai1', 200000, '30', '1', '2023', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd49348384343', 402, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai1', 200000, '30', '1', '2023', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd493924848', 501, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('HD557086590', 301, 'b2', 78555, 0, 200, 0, 56848, 0, 600, 0, 'loai2', 300000, '15', '5', '2023', 0, 'nguyễn thị hà', 'đã thanh toán', 'fdfsd'),
('HD573912345', 308, 'a', NULL, 13, 3000, 39000, NULL, 11, 2500, 27500, 'loai2', 300000, '5', '5', '2023', 366500, 'nguyễn thị hà', 'chưa thanh toán', 'chưa trả tiền'),
('hd593475393059390', 203, 'a', 1000, 500, 4000, 2000000, 1000, 500, 2000, 1000000, 'loai2', 300000, '30', '10', '2023', 3300000, 'phong bac ninh', 'chưa thanh toán', 'không ghi'),
('HD597729790', 301, 'b2', 456, 0, 2000, 0, 600, 0, 3000, 0, 'loai2', 300000, '15', '12', '2022', 0, 'nguyễn thị hà', 'chưa thanh toán', 'treeeret'),
('HD628259282', 301, 'b2', 5000, 100, 3000, 300000, 12700, 100, 2500, 250000, 'loai2', 300000, '13', '10', '2022', 850000, 'nguyễn thị hà', 'chưa thanh toán', ''),
('hd7500594831637', 304, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai1', 200000, '30', '1', '2023', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd759394803984', 404, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai1', 200000, '30', '1', '2023', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd7593948394', 104, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai1', 200000, '30', '1', '2023', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('HD761210395', 301, 'b2', 78555, 78555, 200, 15711000, 56848, 56848, 600, 34108800, 'loai2', 300000, '15', '5', '2023', 50119800, 'nguyễn thị hà', 'đã thanh toán', 'fdfsd'),
('HD862459543', 301, 'b2', 1515, 1515, 500, 757500, 8000, 8000, 300, 2400000, 'loai2', 300000, '15', '5', '2023', 3457500, 'nguyễn thị hà', 'chưa thanh toán', 'dfdsfs'),
('hd92472', 204, 'a', 45700, 15, 2000, 30000, 1100, 241, 3000, 723000, 'loai3', 400000, '15', '10', '2023', 1153000, 'nguyễn thị hà', 'đã thanh toán', 'mới đóng 1 triệu'),
('hd9395830598305', 207, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai1', 200000, '30', '1', '2023', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('HD940075906', 301, 'b2', 45685, 0, 2000, 0, 859, 0, 3000, 0, 'loai2', 300000, '15', '9', '2023', 0, 'nguyễn thị hà', 'đã thanh toán', 'fdsfdsfdsf'),
('hd94829338849', 406, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd94829600349', 306, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd948296945934', 106, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai2', 300000, '30', '1', '2023', 426000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd948385949463', 202, 'a', 1000, 24, 4000, 96000, 1000, 15, 2000, 30000, 'loai1', 200000, '30', '1', '2023', 326000, 'nguyễn thị hà', 'chưa thanh toán', 'không ghi'),
('hd994344', 303, 'a', NULL, 50, 3000, 150000, NULL, 100, 2000, 200000, 'loai2', 300000, '13', '12', '2022', 650000, 'nguyễn thị hà', 'đã thanh toán', '');

-- --------------------------------------------------------

--
-- Table structure for table `hopdong`
--

CREATE TABLE `hopdong` (
  `mahopdong` varchar(100) NOT NULL,
  `masv` varchar(100) NOT NULL,
  `phong` int(11) NOT NULL,
  `toanha` varchar(50) NOT NULL,
  `ngaylap` date NOT NULL,
  `ngaykt` date NOT NULL,
  `tienphaidong` double NOT NULL,
  `tiendadong` double NOT NULL,
  `tienconthieu` double NOT NULL,
  `macb` varchar(100) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hopdong`
--

INSERT INTO `hopdong` (`mahopdong`, `masv`, `phong`, `toanha`, `ngaylap`, `ngaykt`, `tienphaidong`, `tiendadong`, `tienconthieu`, `macb`, `trangthai`) VALUES
('hd102001', '71dctt001', 203, 'a', '2023-05-30', '2023-11-30', 2500000, 2500000, 0, 'nguyễn thị hà', 0),
('hd19102', '70dctd71', 204, 'a', '2022-12-15', '2023-12-15', 2500000, 2500000, 0, 'phong bac ninh', 0),
('hd19103', '70dctd72', 204, 'a', '2022-12-15', '2023-12-15', 2500000, 2500000, 0, 'phong bac ninh', 0),
('hd19104', '70dctd73', 204, 'a', '2022-12-15', '2023-12-15', 2500000, 2000000, 500000, 'nguyễn thị hà', 0),
('hd19105', '70dctd74', 204, 'a', '2022-12-15', '2023-12-15', 2500000, 2000000, 500000, 'nguyễn thị hà', 0),
('hd19106', '70dctd75', 204, 'a', '2022-12-15', '2023-12-15', 2500000, 2000000, 500000, 'nguyễn thị hà', 0),
('hd19107', '70dctd76', 204, 'a', '2022-12-15', '2023-12-15', 2500000, 2000000, 500000, 'nguyễn thị hà', 0),
('hd19108', '70dctd77', 204, 'a', '2022-12-15', '2023-12-15', 2500000, 2000000, 500000, 'nguyễn thị hà', 0),
('hd19109', '70dctd78', 205, 'b1', '2022-12-15', '2023-12-15', 2500000, 2000000, 500000, 'nguyễn thị hà', 0),
('hd19110', '70dctd79', 205, 'b1', '2022-12-15', '2023-12-15', 2500000, 2000000, 500000, 'nguyễn thị hà', 0),
('hd19111', '70dctd80', 205, 'b1', '2022-12-15', '2023-12-15', 2500000, 2000000, 500000, 'nguyễn thị hà', 0),
('hd19112', '70dctd81', 205, 'b1', '2022-12-16', '2023-12-16', 2500000, 2500000, 0, 'nguyễn thị hà', 0),
('hd19113', '70dctd82', 205, 'b1', '2022-12-17', '2023-12-17', 2500000, 2500000, 0, 'nguyễn thị hà', 0),
('hd19114', '70dctd83', 205, 'b1', '2022-12-18', '2023-12-18', 2500000, 2500000, 0, 'nguyễn thị hà', 0),
('hd19115', '70dctd84', 205, 'b1', '2022-12-19', '2023-12-19', 2500000, 2500000, 0, 'nguyễn thị hà', 0),
('hd19116', '70dctd85', 101, 'b2', '2022-12-20', '2023-12-20', 2500000, 2500000, 0, 'nguyễn thị hà', 0),
('hd19117', '70dctd86', 102, 'b2', '2022-12-21', '2023-12-21', 2500000, 2500000, 0, 'nguyễn thị hà', 0),
('hd19118', '70dctd87', 103, 'b2', '2022-12-22', '2023-12-22', 2500000, 2500000, 0, 'nguyễn thị hà', 0),
('hd19119', '70dctd88', 104, 'b2', '2022-12-23', '2023-12-23', 2500000, 2500000, 0, 'nguyễn thị hà', 0),
('hd19120', '70dctd89', 105, 'b2', '2022-12-24', '2023-12-24', 2500000, 2500000, 0, 'nguyễn thị hà', 0),
('hd19121', '70dctd90', 106, 'b2', '2022-12-25', '2023-12-25', 2500000, 2500000, 0, 'nguyễn thị hà', 0),
('hd19122', '70dctd91', 107, 'b2', '2022-12-26', '2023-12-26', 2500000, 2500000, 0, 'nguyễn thị hà', 0),
('hd19123', '70dctd92', 108, 'b2', '2022-12-27', '2023-12-27', 2500000, 2500000, 0, 'nguyễn thị hà', 0),
('hd19124', '70dctd93', 109, 'b2', '2022-12-28', '2023-12-28', 2500000, 2500000, 0, 'nguyễn thị hà', 0),
('hd19125', '70dctd94', 201, 'c', '2022-11-19', '2023-11-19', 2500000, 2500000, 0, 'nguyễn thị hà', 0),
('hd19126', '70dctd95', 202, 'c', '2022-11-20', '2023-11-20', 2500000, 2500000, 0, 'nguyễn thị hà', 0),
('hd19127', '70dctd96', 203, 'c', '2022-11-21', '2023-11-21', 2500000, 1000000, 1500000, 'nguyễn thị hà', 0),
('hd19128', '70dctd97', 204, 'c', '2022-11-22', '2023-11-22', 2500000, 1000000, 1500000, 'nguyễn thị hà', 0),
('hd19129', '70dctd98', 205, 'c', '2022-11-23', '2023-11-23', 2500000, 2500000, 0, 'phong bac ninh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `phong` int(11) NOT NULL,
  `toanha` varchar(50) NOT NULL,
  `sosvo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`phong`, `toanha`, `sosvo`) VALUES
(104, 'a', 0),
(105, 'a', 8),
(106, 'a', 1),
(107, 'a', 0),
(108, 'a', 0),
(109, 'a', 0),
(201, 'a', 0),
(202, 'a', 0),
(203, 'a', 1),
(204, 'a', 7),
(205, 'a', 0),
(206, 'a', 0),
(207, 'a', 0),
(208, 'a', 0),
(209, 'a', 0),
(301, 'a', 0),
(302, 'a', 0),
(303, 'a', -1),
(304, 'a', 0),
(305, 'a', 0),
(306, 'a', 0),
(307, 'a', 0),
(308, 'a', 0),
(309, 'a', 0),
(401, 'a', 0),
(402, 'a', 0),
(403, 'a', 0),
(404, 'a', 0),
(405, 'a', 0),
(406, 'a', 0),
(407, 'a', 0),
(408, 'a', 0),
(409, 'a', 0),
(501, 'a', 0),
(502, 'a', 0),
(503, 'a', 0),
(504, 'a', 0),
(505, 'a', 0),
(506, 'a', 0),
(507, 'a', 0),
(508, 'a', 0),
(509, 'a', 0),
(102, 'c', 0),
(103, 'c', 0),
(104, 'c', 0),
(105, 'c', 0),
(106, 'c', 0),
(107, 'c', 0),
(108, 'c', 0),
(109, 'c', 0),
(201, 'c', 1),
(202, 'c', 1),
(203, 'c', 1),
(204, 'c', 1),
(205, 'c', 1),
(206, 'c', 0),
(207, 'c', 0),
(208, 'c', 0),
(209, 'c', 0),
(301, 'c', 0),
(302, 'c', 0),
(303, 'c', 0),
(304, 'c', 0),
(305, 'c', 0),
(306, 'c', 0),
(307, 'c', 0),
(308, 'c', 0),
(309, 'c', 0),
(401, 'c', 0),
(402, 'c', 0),
(403, 'c', 0),
(404, 'c', 0),
(405, 'c', 0),
(406, 'c', 0),
(407, 'c', 0),
(408, 'c', 0),
(409, 'c', 0),
(501, 'c', 0),
(502, 'c', 0),
(503, 'c', 0),
(504, 'c', 0),
(505, 'c', 0),
(506, 'c', 0),
(507, 'c', 0),
(508, 'c', 0),
(509, 'c', 0),
(102, 'b1', 0),
(103, 'b1', 0),
(104, 'b1', 0),
(105, 'b1', 0),
(201, 'b1', 0),
(202, 'b1', 0),
(203, 'b1', 0),
(204, 'b1', 0),
(205, 'b1', 7),
(301, 'b1', 0),
(302, 'b1', 0),
(303, 'b1', 0),
(304, 'b1', 0),
(305, 'b1', 0),
(401, 'b1', 0),
(402, 'b1', 0),
(403, 'b1', 0),
(404, 'b1', 0),
(405, 'b1', 0),
(501, 'b1', 0),
(502, 'b1', 0),
(503, 'b1', 0),
(504, 'b1', 0),
(505, 'b1', 0),
(102, 'b2', 1),
(103, 'b2', 1),
(104, 'b2', 1),
(105, 'b2', 1),
(201, 'b2', 0),
(202, 'b2', 0),
(203, 'b2', 0),
(204, 'b2', 0),
(205, 'b2', 0),
(301, 'b2', 0),
(302, 'b2', 0),
(303, 'b2', 0),
(304, 'b2', 0),
(305, 'b2', 0),
(401, 'b2', 0),
(402, 'b2', 0),
(403, 'b2', 0),
(404, 'b2', 0),
(405, 'b2', 0),
(501, 'b2', 0),
(502, 'b2', 0),
(503, 'b2', 0),
(504, 'b2', 0),
(505, 'b2', 0),
(101, 'a', 0),
(101, 'c', 0),
(101, 'b1', 0),
(101, 'b2', 1),
(908, 'a', 0),
(707, 'c', 0),
(654, 'c', 0),
(102, 'a', 0),
(103, 'a', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `masv` varchar(50) NOT NULL,
  `tensv` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `quequan` varchar(200) NOT NULL,
  `gioitinh` varchar(20) NOT NULL,
  `sdt` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`masv`, `tensv`, `ngaysinh`, `quequan`, `gioitinh`, `sdt`) VALUES
('70dctd71', 'nguyễn đức anh', '2001-12-08', 'vĩnh phúc', 'nam', '159825685'),
('70dctd72', 'nguyễn thị thùy linh', '2001-12-09', 'vĩnh phúc', 'nữ', '159825686'),
('70dctd73', 'nguyễn văn độ', '2001-12-10', 'vĩnh phúc', 'nam', '159825687'),
('70dctd74', 'nguyễn thị bích', '2001-12-11', 'vĩnh phúc', 'nam', '159825688'),
('70dctd75', 'nguyễn vinh râu', '2001-12-12', 'vĩnh phúc', 'nam', '159825689'),
('70dctd76', 'nguyễn thái vũ', '2001-12-13', 'vĩnh phúc', 'nam', '159825690'),
('70dctd77', 'nguyễn huỳnh phương', '2001-12-14', 'vĩnh phúc', 'nam', '159825691'),
('70dctd78', 'nguyễn gia huy', '2001-12-15', 'vĩnh phúc', 'nam', '159825692'),
('70dctd79', 'nguyễn văn gia bảo', '2001-12-16', 'vĩnh phúc', 'nam', '159825693'),
('70dctd80', 'nguyễn thị bích trâm', '2002-12-17', 'vĩnh phúc', 'nữ', '159825694'),
('70dctd81', 'huỳnh trấn thành', '2002-12-18', 'vĩnh phúc', 'nam', '159825695'),
('70dctd82', 'võ vũ trường giang', '2002-12-19', 'vĩnh phúc', 'nam', '159825696'),
('70dctd83', 'nguyễn hoài linh', '2002-12-20', 'vĩnh phúc', 'nam', '159825697'),
('70dctd84', 'nguyễn thị hương', '2002-12-21', 'vĩnh phúc', 'nam', '159825698'),
('70dctd85', 'nguyễn thị thùy linh', '2002-12-22', 'vĩnh phúc', 'nữ', '159825699'),
('70dctd86', 'phan văn tài', '2002-12-23', 'vĩnh phúc', 'nam', '159825700'),
('70dctd87', 'tô duy đức', '2002-12-24', 'vĩnh phúc', 'nam', '159825701'),
('70dctd88', 'nguyễn đức anh hào', '2002-12-25', 'vĩnh phúc', 'nam', '159825702'),
('70dctd89', 'nguyễn tiến hữu', '2002-12-26', 'vĩnh phúc', 'nam', '159825703'),
('70dctd90', 'nguyễn chi tài', '2002-12-27', 'vĩnh phúc', 'nam', '159825704'),
('70dctd91', 'nguyễn trọng hiếu', '2002-10-01', 'vĩnh phúc', 'nam', '159825705'),
('70dctd92', 'hồ văn hiếu', '2002-10-02', 'vĩnh phúc', 'nam', '159825706'),
('70dctd93', 'nguyễn văn bắc', '2002-10-03', 'vĩnh phúc', 'nam', '159825707'),
('70dctd94', 'nguyễn thị thùy linh', '2002-10-04', 'vĩnh phúc', 'nữ', '159825708'),
('70dctd95', 'nguyễn thị thủy', '2002-10-05', 'vĩnh phúc', 'nữ', '159825709'),
('70dctd96', 'nguyễn hương tràm', '2002-10-06', 'vĩnh phúc', 'nữ', '159825710'),
('70dctd97', 'nguyễn mỹ tâm', '2002-10-07', 'vĩnh phúc', 'nữ', '159825711'),
('70dctd98', 'phan mạnh quỳnh', '2002-10-08', 'vĩnh phúc', 'nam', '159825712'),
('71dctt001', 'tien huu', '2001-02-08', 'Hà Nam', 'nam', '0965254555');

-- --------------------------------------------------------

--
-- Table structure for table `thietbi`
--

CREATE TABLE `thietbi` (
  `phong` int(11) NOT NULL,
  `toanha` varchar(50) NOT NULL,
  `mathietbi` varchar(50) NOT NULL,
  `tenthietbi` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tinhtrang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thietbi`
--

INSERT INTO `thietbi` (`phong`, `toanha`, `mathietbi`, `tenthietbi`, `soluong`, `tinhtrang`) VALUES
(304, 'b2', 'TB001', 'bóng đèn', 6, 'bình thường'),
(203, 'a', 'TB001', 'bóng đèn', 6, 'hỏng'),
(203, 'b1', 'TB001', 'bóng đèn', 6, 'bình thường');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canbo`
--
ALTER TABLE `canbo`
  ADD PRIMARY KEY (`tendn`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`hoadon`);

--
-- Indexes for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`mahopdong`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`masv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
