-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 18, 2021 lúc 02:59 PM
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
  `giacu` int(11) NOT NULL,
  `anh` varchar(100) NOT NULL,
  `ngaythem` date NOT NULL,
  `hang` varchar(20) NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dienthoai`
--

INSERT INTO `dienthoai` (`id`, `ten`, `gia`, `giacu`, `anh`, `ngaythem`, `hang`, `mota`) VALUES
(1, 'IPHONE 12 64GB', 24490000, 25490000, 'images/iphone-12.jpg', '0000-00-00', 'APPLE', 'Kích thước màn hình: 6.1 inches<br>\r\nCông nghệ màn hình: OLED <br>\r\nCamera sau: 12 MP, f/1.6, 26mm (wide), 1.4µm, dual pixel PDAF, OIS\r\n12 MP, f/2.0, 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS, 2x optical zoom\r\n12 MP, f/2.4, 120˚, 13mm (ultrawide), 1/3.6\"\r\nTOF 3D LiDAR scanner (depth)<br>\r\nCamera trước: 12 MP, f/2.2, 23mm (wide), 1/3.6\"\r\nSL 3D, (depth/biometrics sensor)<br>\r\nChipset: Apple A14 Bionic (5 nm)<br>\r\nDung lượng RAM: 4 GB<br>\r\nBộ nhớ trong: 128 GB<br>\r\nPin: Li-Ion, sạc nhanh 20W, sạc không dây 15W, USB Power Delivery 2.0<br>\r\nThẻ SIM: 2 SIM (nano‑SIM và eSIM)<br>\r\nHệ điều hành: iOS 14.1 hoặc cao hơn (Tùy vào phiên bản phát hành)<br>'),
(2, 'IPHONE 11 64GB', 15000000, 16000000, 'images/iphone-11.jpg', '0000-00-00', 'APPLE', 'Kích thước màn hình: 6.1 inches <br>\r\nCông nghệ màn hình: IPS LCD <br>\r\nCamera sau: Camera kép 12MP:<br>\r\n -Camera góc rộng: ƒ/1.8 aperture<br>\r\n -Camera siêu rộng: ƒ/2.4 aperture<br>\r\nCamera trước: 12 MP, ƒ/2.2 aperture<br>\r\nChipset: A13 Bionic<br>\r\nDung lượng RAM: 4 GB<br>\r\nBộ nhớ trong: 64 GB<br>\r\nPin: 3110 mAh<br>\r\nThẻ SIM: Nano-SIM + eSIM<br>\r\nHệ điều hành: iOS 13 hoặc cao hơn (Tùy vào phiên bản phát hành)'),
(3, 'Redmi Note 9s', 5000000, 600000, 'images/item3.jpeg', '2021-05-15', 'XIAOMI', 'Màn hình: IPS LCD6.67\"Full HD+ <br>\r\nHệ điều hành: Android 10 <br>\r\nCamera sau: Chính 48 MP & Phụ 8 MP, 5 MP, 2 MP<br>\r\nCamera trước: 16 MP<br>\r\nChip: Snapdragon 720G<br>\r\nRAM: 6 GB<br>\r\nBộ nhớ trong: 128 GB<br>\r\nSIM: 2 Nano SIMHỗ trợ 4G<br>\r\nPin, Sạc: 5020 mAh18 W<br>'),
(4, 'Xiaomi Mi 11', 11000000, 12000000, 'images/xiaomi-mi-11.jpg', '2021-05-15', 'XIAOMI', 'Kích thước màn hình: 6.81 inches <br>\r\nCông nghệ màn hình: AMOLED <br>\r\nCamera sau: Camera góc rộng: 108 MP, f/1.9, 26mm 1/1.33\", 0.8µm, PDAF, OIS<\r\nCamera góc siêu rộng: 13 MP, f/2.4, 123˚ 1/3.06\", 1.12µm\r\nCamera cận cảnh: 5 MP, f/2.4, 1/5.0\", 1.12µm<\r\nCamera trước:	20 MP, 27mm (wide), 1/3.4\", 0.8µm<br>\r\nChipset: Qualcomm SM8350 Snapdragon 888 (5 nm)<br>\r\nDung lượng RAM:	8 GB<br>\r\nBộ nhớ trong: 256 GB<br>\r\nPin: Li-Po 4600 mAh<br>\r\nThẻ SIM: 2 SIM (Nano-SIM)<br>\r\nHệ điều hành: Android 11, MIUI 12.5<br>'),
(5, 'Vivo Y51', 5100000, 6100000, 'images/vivo-y51.jpg', '2021-05-18', 'VIVO', 'Màn hình: IPS LCD6.58\"Full HD+<br>\r\nHệ điều hành: Android 11<br>\r\nCamera sau: Chính 48 MP & Phụ 8 MP, 2 MP<br>\r\nCamera trước: 16 MP<br>\r\nChip: Snapdragon 662<br>\r\nRAM: 8 GB<br>\r\nBộ nhớ trong: 128 GB<br>\r\nSIM: 2 Nano SIM (SIM 2 chung khe thẻ nhớ)Hỗ trợ 4G<br>\r\nPin, Sạc: 5000 mAh<br>'),
(6, 'IPHONE 12 MINI 64GB', 16390000, 17290000, 'images/iphone-23-mini.jpg', '2021-05-18', 'APPLE', 'Màn hình: OLED5.4\"Super Retina XDR<br>\r\nHệ điều hành: iOS 14<br>\r\nCamera sau: 2 camera 12 MP<br>\r\nCamera trước: 12 MP<br>\r\nChip: Apple A14 Bionic<br>\r\nRAM: 4 GB<br>\r\nBộ nhớ trong: 64 GB<br>\r\nSIM: 1 Nano SIM & 1 eSIMHỗ trợ 5G<br>\r\nPin, Sạc: 2227 mAh20 W<br>'),
(7, 'Vivo V20 SE', 8700000, 9500000, 'images/vivo-v20-se.jpg', '2021-05-18', 'VIVO', 'Màn hình: AMOLED6.44\"Full HD+<br>\r\nHệ điều hành: Android 10<br>\r\nCamera sau: Chính 48 MP & Phụ 8 MP, 2 MP<br>\r\nCamera trước: 32 MP<br>\r\nChip: Snapdragon 665<br>\r\nRAM: 8 GB<br>\r\nBộ nhớ trong: 128 GB<br>\r\nSIM: 2 Nano SIMHỗ trợ 4G<br>\r\nPin, Sạc: 4100 mAh33 W<br>'),
(8, 'Oppo Reno 4', 4300000, 5000000, 'images/oppo-reno4-tim.jpg', '2021-05-18', 'OPPO', 'Màn hình: AMOLED6.4\"Full HD+ <br>\r\nHệ điều hành: Android 10<br>\r\nCamera sau: Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP<br>\r\nCamera trước: Chính 32 MP & Phụ cảm biến thông minh A.I<br>\r\nChip: Snapdragon 720G<br>\r\nRAM: 8 GB<br>\r\nBộ nhớ trong: 128 GB<br>\r\nSIM: 2 Nano SIMHỗ trợ 4G<br>\r\nPin, Sạc: 4015 mAh30 W<br>'),
(9, 'Oppo Reno 5', 5700000, 7000000, 'images/oppo-reno5-marvel-thumb.jpg', '2021-05-18', 'OPPO', 'Màn hình: AMOLED6.43\"Full HD+ <br>\r\nHệ điều hành: Android 11<br>\r\nCamera sau: Chính 64 MP & Phụ 8 MP, 2 MP, 2 MP<br>\r\nCamera trước: 44 MP<br>\r\nChip: Snapdragon 720G<br>\r\nRAM: 8 GB<br>\r\nBộ nhớ trong: 128 GB<br>\r\nSIM: 2 Nano SIMHỗ trợ 4G<br>\r\nPin, Sạc: 4310 mAh50 W<br>'),
(10, 'Samsung Galaxy A2', 3450000, 4000000, 'images/samsung-galaxy-a02.jpg', '2021-05-18', 'SAMSUNG', 'Màn hình: PLS TFT LCD6.5\"HD+ <br>\r\nHệ điều hành: Android 10<br>\r\nCamera sau: Chính 13 MP & Phụ 2 MP<br>\r\nCamera trước: 5 MP<br>\r\nChip: MediaTek MT6739W<br>\r\nRAM: 3 GB<br>\r\nBộ nhớ trong: 32 GB<br>\r\nSIM: 2 Nano SIMHỗ trợ 4G<br>\r\nPin, Sạc: 5000 mAh7.8 W<br>'),
(11, 'Samsung Galaxy S10 Lite', 8900000, 9500000, 'images/samsung-galaxy-s10-lite.jpg', '2021-05-18', 'SAMSUNG', 'Màn hình: Super AMOLED6.7\"Full HD+ <br>\r\nHệ điều hành: Android 10<br>\r\nCamera sau: Chính 48 MP & Phụ 12 MP, 5 MP<br>\r\nCamera trước: 32 MP<br>\r\nChip: Snapdragon 855<br>\r\nRAM: 8 GB<br>\r\nBộ nhớ trong: 128 GB<br>\r\nSIM: 2 Nano SIM (SIM 2 chung khe thẻ nhớ)Hỗ trợ 4G<br>\r\nPin, Sạc: 4500 mAh45 W<br>'),
(12, 'Samsung Galaxy S21 ', 18990000, 21000000, 'images/samsung-galaxy-s21.jpg', '2021-05-18', 'SAMSUNG', 'Màn hình: Dynamic AMOLED 2X6.2\"Full HD+ <br>\r\nHệ điều hành: Android 11\r\nCamera sau: Chính 12 MP & Phụ 64 MP, 12 MP<br>\r\nCamera trước: 10 MP<br>\r\nChip: Exynos 2100<br>\r\nRAM: 8 GB<br>\r\nBộ nhớ trong: 128 GB<br>\r\nSIM: 2 Nano SIM hoặc 1 Nano SIM + 1 eSIMHỗ trợ 5G<br>\r\nPin, Sạc: 4000 mAh25 W<br>');

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
