-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 18, 2021 lúc 12:00 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ctek`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienthoai`
--

CREATE TABLE `dienthoai` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `gia` int(11) NOT NULL,
  `anh` varchar(100) NOT NULL,
  `ngaythem` date NOT NULL,
  `hang` varchar(20) NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dienthoai`
--

INSERT INTO `dienthoai` (`id`, `ten`, `gia`, `anh`, `ngaythem`, `hang`, `mota`) VALUES
(1, 'IPHONE 12', 200000, 'images/iphone-12.jpg', '0000-00-00', '', ''),
(2, 'IPHONE 11', 190000, 'images/iphone-11.jpg', '0000-00-00', '', ''),
(3, 'Redmi Note 9s', 54000, 'images/item3.jpeg', '2021-05-15', '', ''),
(4, 'Xiaomi Mi 11', 240000, 'images/xiaomi-mi-11.jpg', '2021-05-15', '', ''),
(5, 'Vivo Y51', 50000, 'images/vivo-y51.jpg', '2021-05-18', 'VIVO', 'Điện thoại xịn'),
(6, 'IPHONE 12 MINI', 23000, 'images/iphone-23-mini.jpg', '2021-05-18', 'APPLE', ''),
(7, 'Vivo V20 SE', 45000, 'images/vivo-v20-se.jpg', '2021-05-18', 'VIVO', 'Điện thoại xịn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
