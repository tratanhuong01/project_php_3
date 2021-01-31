-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 02, 2021 lúc 06:08 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bandongho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `id_session_user` varchar(200) DEFAULT NULL,
  `masanpham` varchar(20) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `maloai` varchar(20) NOT NULL,
  `tenloai` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`maloai`, `tenloai`) VALUES
('LOAISP01', 'Đồng Hồ Nam'),
('LOAISP02', 'Đồng Hồ Nữ'),
('LOAISP03', 'Trang sức'),
('LOAISP04', 'Quà Tặng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masanpham` varchar(20) NOT NULL,
  `maloai` varchar(20) DEFAULT NULL,
  `tensanpham` varchar(100) DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `khuyenmai` int(11) DEFAULT NULL,
  `anh` varchar(100) DEFAULT NULL,
  `mota1` varchar(1000) DEFAULT NULL,
  `mota2` varchar(1000) DEFAULT NULL,
  `loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masanpham`, `maloai`, `tensanpham`, `gia`, `khuyenmai`, `anh`, `mota1`, `mota2`, `loai`) VALUES
('MASP11101', 'LOAISP01', 'Hamilton American Classic Pan Europ, 42mm H35415761', 26890000, 7, 'MASP111011.png&MASP111012.png&MASP111013.png&MASP111014.png', NULL, NULL, 0),
('MASP11102', 'LOAISP01', 'TAG Heuer Formula 1 x Indy 500, 43mm CAZ101AD.FT8024', 49890000, 6, 'MASP111021.png&MASP111022.png&MASP111023.png&MASP111024.png', NULL, NULL, 0),
('MASP11103', 'LOAISP01', 'TAG Heuer Formula 1, 43mm CAZ1011.BA0843', 49540000, 10, 'MASP111031.png&MASP111032.png&MASP111033.png&MASP111034.png', NULL, NULL, 0),
('MASP11104', 'LOAISP01', 'TAG Heuer Formula 1, 44mm CAZ2015.BA0876', 67540000, 8, 'MASP111041.png&MASP111042.png&MASP111043.png&MASP111044.png', NULL, NULL, 0),
('MASP11105', 'LOAISP01', 'TAG Heuer Formula 1, 43mm CAZ101Y.BA0842', 37540000, 8, 'MASP111051.png&MASP111052.png&MASP111053.png&MASP111054.png', NULL, NULL, 1),
('MASP11106', 'LOAISP02', 'TAG Heuer Link, 32mm WBC131G.BA0649', 108540000, 7, 'MASP111061.png&MASP111062.png&MASP111063.png&MASP111064.png', NULL, NULL, 1),
('MASP11107', 'LOAISP02', 'TAG Heuer Formula 1, 35 mm WBJ131A.FC8250', 38540000, 8, 'MASP111071.png&MASP111072.png&MASP111073.png&MASP111074.png', NULL, NULL, 1),
('MASP11108', 'LOAISP02', 'TAG Heuer Formula 1, 32mm WBJ1414.FC8234', 58540000, 8, 'MASP111081.png&MASP111082.png&MASP111083.png&MASP111084.png', NULL, NULL, 2),
('MASP11109', 'LOAISP02', 'Tissot Lovely, 19.5mm T058.009.33.031.01', 9540000, 5, 'MASP111091.png&MASP111092.png&MASP111093.png&MASP111094.png', NULL, NULL, 1),
('MASP11110', 'LOAISP02', 'Tissot Classic Dream Lady, 28mm T129.210.16.053.00', 5540000, 8, 'MASP111101.png&MASP111102.png&MASP111103.png&MASP111104.png', NULL, NULL, 0),
('MASP11111', 'LOAISP04', 'Lamborghini Spyder Chrono watch, 44,3 mm T9SE', 33540000, 5, 'MASP111111.png&MASP111112.png&MASP111113.png&MASP111114.png', NULL, NULL, 1),
('MASP11112', 'LOAISP04', 'Salvatore Ferragamo Ora, 40mm SFHQ00120', 27540000, 5, 'MASP111121.png&MASP111122.png&MASP111123.png&MASP111124.png', NULL, NULL, 2),
('MASP11113', 'LOAISP04', 'Versace V-Motif Watch, 35mm VERE00918', 20540000, 5, 'MASP111131.png&MASP111132.png&MASP111133.png&MASP111134.png', NULL, NULL, 0),
('MASP11114', 'LOAISP04', 'Swarovski Octea Watch, 39mm 5563480', 12540000, 5, 'MASP111141.png&MASP111142.png&MASP111143.png&MASP111144.png', NULL, NULL, 0),
('MASP11115', 'LOAISP04', 'Lamborghini Spyder X Chrono, 53 x 56 mm T9XA', 37540000, 5, 'MASP111151.png&MASP111152.png&MASP111153.png&MASP111154.png', NULL, NULL, 2),
('MASP11116', 'LOAISP03', 'The Wolf Ring, JRG02661 JRG02661', 1300540000, 5, 'MASP111161.png&MASP111162.png&MASP111163.png&MASP111164.png', NULL, NULL, 2),
('MASP11117', 'LOAISP03', 'Pégase Bracelet, JBT00410M JBT00410M', 6300540000, 5, 'MASP111171.png&MASP111172.png&MASP111173.png&MASP111174.png', NULL, NULL, 2),
('MASP11118', 'LOAISP03', 'Wolf Brooch, JCP00189 JCP00189', 2000540000, 5, 'MASP111181.png&MASP111182.png&MASP111183.png&MASP111184.png', NULL, NULL, 1),
('MASP11119', 'LOAISP03', 'Delilah Necklace, JCLT8AEA01 JCLT8AEA01', 700540000, 5, 'MASP111191.png&MASP111192.png&MASP111193.png&MASP111194.png', NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `masanpham` (`masanpham`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masanpham`),
  ADD KEY `maloai` (`maloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loaisanpham` (`maloai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
