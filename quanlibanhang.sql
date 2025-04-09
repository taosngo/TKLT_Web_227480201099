-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2025 at 05:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlibanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahang` varchar(4) NOT NULL COMMENT 'mã hàng',
  `tenhang` varchar(40) NOT NULL COMMENT 'tên hàng',
  `mansx` varchar(2) NOT NULL COMMENT 'mã nhà sx',
  `namsx` int(11) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`mahang`, `tenhang`, `mansx`, `namsx`, `gia`) VALUES
('DE01', 'Dell Vostro', 'DE', 2015, 650),
('DE02', 'Dell Inspiron', 'DE', 2015, 650),
('AS01', 'Asus TUF', 'AS', 2017, 520),
('AS02', 'Asus Vivobook', 'AS', 2017, 580),
('LE01', 'Lenovo Thinkpad', 'LE', 2019, 750),
('TO01', 'Toshiba Satellite', 'TO', 2014, 630);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` varchar(3) NOT NULL COMMENT 'mã hóa đơn',
  `makh` varchar(3) NOT NULL COMMENT 'mã khách hàng',
  `mahang` varchar(4) NOT NULL COMMENT 'mã hàng',
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `makh`, `mahang`, `soluong`, `thanhtien`) VALUES
('001', 'K00', 'DE01', 2, 0),
('001', 'K00', 'DE02', 1, 0),
('002', 'K00', 'LE01', 5, 0),
('002', 'K00', 'LE02', 3, 0),
('003', 'K00', 'TO01', 1, 0),
('004', 'K00', 'DE01', 2, 0),
('005', 'K00', 'AS01', 4, 0),
('005', 'K00', 'LE01', 6, 0),
('005', 'K00', 'LE02', 8, 0),
('006', 'K00', 'AS01', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` varchar(4) NOT NULL COMMENT 'mã khách hàng',
  `tenkh` varchar(30) NOT NULL COMMENT 'tên khách hàng',
  `namsinh` int(11) NOT NULL,
  `dienthoai` varchar(10) NOT NULL COMMENT 'số điện thoại',
  `diachi` varchar(50) NOT NULL COMMENT 'địa chỉ'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `namsinh`, `dienthoai`, `diachi`) VALUES
('k001', 'Nguyễn Thị Lan', 1980, '0913123456', 'bạc liêu'),
('k002', 'ngô thanh minh', 1985, '0913024357', 'vĩnh lợi'),
('K003', 'Lâm Văn Thành', 1979, '0913123457', 'Giá Rai'),
('K004', 'Dương Thu Thủy', 1995, '0913023458', 'Hồng Dân'),
('K005', 'Nguyễn Thị Xuân', 1987, '0903223344', 'Phước Long'),
('K006', 'Huỳnh Mẫn Đạt', 1975, '0989122112', 'Bạc Liêu'),
('K007', 'Lâm Hoài Bảo', 1990, '0944556677', 'Bạc Liêu'),
('K008', 'Hồ Trung Tín', 2000, '0914999999', 'Phước Long'),
('K009', 'Trương Xuân Thi', 2001, '0909000111', 'Vĩnh Lợi'),
('K010', 'Ngô Văn Nam', 2001, '0909000112', 'Giá Rai');

-- --------------------------------------------------------

--
-- Table structure for table `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `mansx` varchar(2) NOT NULL COMMENT 'mã nhà sx',
  `tennsx` varchar(40) NOT NULL COMMENT 'tên nhà sx',
  `quocgia` varchar(20) NOT NULL COMMENT 'quốc gia'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Dumping data for table `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`mansx`, `tennsx`, `quocgia`) VALUES
('DE', 'DELL', 'Hoa Kỳ'),
('AS', 'ASUS', 'Đài Loan'),
('LE', 'LENOVO', 'Trung Quốc'),
('TO', 'TOSHIBA', 'Nhật Bản');

-- --------------------------------------------------------

--
-- Table structure for table `tonkho`
--

CREATE TABLE `tonkho` (
  `mahang` varchar(4) NOT NULL,
  `tenhang` varchar(40) NOT NULL,
  `mansx` varchar(2) NOT NULL,
  `namsx` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_vietnamese_ci;

--
-- Dumping data for table `tonkho`
--

INSERT INTO `tonkho` (`mahang`, `tenhang`, `mansx`, `namsx`, `gia`, `soluong`) VALUES
('DE01', 'Dell Vostro', 'DE', 2015, 650, 20),
('DE02', 'Dell Inspiron', 'DE', 2015, 550, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tonkho`
--
ALTER TABLE `tonkho`
  ADD PRIMARY KEY (`mahang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
