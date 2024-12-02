-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2024 at 03:12 PM
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
-- Database: `du_an_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_bl` int NOT NULL,
  `noi_dung_bl` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ngay_bl` date NOT NULL,
  `id_sp` int NOT NULL,
  `id_tk` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`id_bl`, `noi_dung_bl`, `ngay_bl`, `id_sp`, `id_tk`) VALUES
(1, 'a', '2024-11-30', 14, 6);

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id_dm` int NOT NULL,
  `ten_dm` varchar(199) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`id_dm`, `ten_dm`) VALUES
(1, 'Adidas'),
(2, 'Nike'),
(3, 'MLB'),
(4, 'Jodan');

-- --------------------------------------------------------

--
-- Table structure for table `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `id` int NOT NULL,
  `id_donHang` int NOT NULL,
  `id_sp` int NOT NULL,
  `id_trangThai` int NOT NULL,
  `soLuong` int NOT NULL,
  `tongTien` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`id`, `id_donHang`, `id_sp`, `id_trangThai`, `soLuong`, `tongTien`) VALUES
(1, 10, 14, 1, 1, 6098),
(2, 10, 13, 2, 1, 6098),
(3, 10, 11, 3, 3, 6098),
(4, 11, 14, 1, 1, 5433),
(5, 11, 7, 2, 1, 5433);

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id_donhang` int NOT NULL,
  `van_chuyen` int NOT NULL,
  `code_payment` int NOT NULL,
  `trangthai_donhang` int NOT NULL,
  `phuongthuc_thanhtoan` varchar(199) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ngaydat_don` varchar(255) NOT NULL,
  `id_tk` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`id_donhang`, `van_chuyen`, `code_payment`, `trangthai_donhang`, `phuongthuc_thanhtoan`, `ngaydat_don`, `id_tk`) VALUES
(8, 2, 8103, 1, 'Tiền mặt', '27-11-2024 22:26:14', 5),
(9, 2, 3502, 1, 'Tiền mặt', '28-11-2024 21:22:36', 5),
(10, 2, 618, 1, 'Tiền mặt', '28-11-2024 22:03:22', 5),
(11, 1, 5099, 1, 'Tiền mặt', '28-11-2024 22:14:00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id_giohang` int NOT NULL,
  `id_tk` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gio_hang`
--

INSERT INTO `gio_hang` (`id_giohang`, `id_tk`) VALUES
(5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang_chi_tiet`
--

CREATE TABLE `gio_hang_chi_tiet` (
  `id_giohang_chitiet` int NOT NULL,
  `id_sp` int NOT NULL,
  `so_luong` int NOT NULL,
  `id_giohang` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gio_hang_chi_tiet`
--

INSERT INTO `gio_hang_chi_tiet` (`id_giohang_chitiet`, `id_sp`, `so_luong`, `id_giohang`) VALUES
(25, 13, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sp` int NOT NULL,
  `ten_sp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia_tien` int NOT NULL,
  `gia_km` int DEFAULT NULL,
  `anh_sp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mo_ta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luot_xem` int DEFAULT '0',
  `soluong_ton` int NOT NULL,
  `id_dm` int NOT NULL,
  `ngay_gio` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `ten_sp`, `gia_tien`, `gia_km`, `anh_sp`, `mo_ta`, `luot_xem`, `soluong_ton`, `id_dm`, `ngay_gio`) VALUES
(1, 'Originals Campus', 350, NULL, 'images/1732390397_giay.jpg', 'Giày đẹp', 0, 10, 1, '2024-11-29 22:19:35'),
(2, 'Youth of Paris Campus', 550, NULL, 'images/1732390324_cd6c4f2a-5867-4558-8aad-95c0adb89628.jpg', 'Giày đẹp, phong cách', 0, 20, 1, '2024-11-29 22:19:35'),
(7, 'Giày thể thao', 3333, NULL, 'images/1732390160_b6fc70f6-c384-43f5-bfd5-ed9b9170fb89.jpg', 'Đẹp', 0, 222, 1, '2024-11-29 22:19:35'),
(8, 'Giày MLB', 123, NULL, 'images/1732390292_tải xuống.jpg', '123123123213', 0, 2, 3, '2024-11-29 22:19:35'),
(10, 'Nike Air Max 90.', 399, NULL, 'images/1732390054_Sneakers.jpg', 'Đôi giày được ra mắt vào năm 1982 với thiết kế năng động khỏe khoắn đã trở thành đôi giày thịnh hành mà ai cũng muốn được chiếm hữu. Với vẻ ngoài đơn giản nên rất dễ dàng trong việc phối đồ giúp bạn tự tin nhiều năng lượng hơn.', 0, 10, 2, '2024-11-29 22:19:35'),
(11, ' Nike VaporMax ACE', 450, NULL, 'images/1732390034_New Balance 550.jpg', 'Nike VaporMax ACE được đánh giá là một trong những đôi giày có tính đột phá cao nhất trong dòng Air Max của Nike. Thiết kế giày loại bỏ hoàn toàn thanh chống nhựa TPU phía bên trong phần Air', 0, 10, 2, '2024-11-29 22:19:35'),
(12, 'Nike Air Jordan 1 Chicago', 455, NULL, 'images/1732390082_021a435a-fba1-45af-9fb5-1468eff09868.jpg', 'Air Jordan 1 Retro Chicago đã từ lâu trở thành một biểu tượng không thể thiếu và được người hâm mộ yêu thích nhất trong dòng sản phẩm Jordan', 0, 10, 4, '2024-11-29 22:19:35'),
(13, 'Nike Jordan 3 Black Cement', 799, NULL, 'images/1732389997_60e394c3-06f8-428c-8c7e-c7379634fa8e.jpg', 'Nike Jordan 3 Black Cement là mẫu giày đánh dấu đánh dấu kỷ niệm sinh nhật lần thứ 55 của Michael Jordan. Điểm nổi bật của đôi giày này đó chính là họa tiết họa tiết da voi đặc trưng.', 0, 10, 4, '2024-11-29 22:19:35'),
(14, 'Nike Air Jordan 4 Bred', 1050, NULL, 'images/1732389991_22aaab14-b832-4a18-9bc7-dd62cd0b433a.jpg', 'Phiên bản giày này nổi bật nhất với phần đế giày màu đỏ, phần thân trên của giày màu đen cùng với những chi tiết giày màu xám kèm theo. Phần đế giữa của giày màu trắng cùng với một số họa tiết đen, xám, trắng.', 0, 10, 4, '2024-11-29 22:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `sp_yeu_thich`
--

CREATE TABLE `sp_yeu_thich` (
  `id_yeuthich` int NOT NULL,
  `id_sp` int NOT NULL,
  `id_tk` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sp_yeu_thich`
--

INSERT INTO `sp_yeu_thich` (`id_yeuthich`, `id_sp`, `id_tk`) VALUES
(8, 14, 6),
(9, 14, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id_tk` int NOT NULL,
  `ten_tk` varchar(199) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `so_dt` varchar(11) NOT NULL,
  `mat_khau` varchar(199) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `vai_tro` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`id_tk`, `ten_tk`, `ho_ten`, `so_dt`, `mat_khau`, `dia_chi`, `email`, `vai_tro`) VALUES
(1, 'luantph', 'Nguyễn Thị Lụa', '0971918183', '12345', 'Bắc Ninh', 'luantph50931@gmail.com', 1),
(2, 'yennthph', 'Nguyễn Thị Hải Yến', '0971918184', '123456', 'Hà Nội', 'yenntph@gmail.com', 1),
(5, 'vanh', 'Đào Việt Anh', '12345678', '123456', 'a', 'luantph50931@gmail.com', 1),
(6, 'a', 'a', '12345678', 'a', 'Bắc Ninh1', 'luantph50931@gmail.com', 0),
(7, 'luantph', 'Admin', '12345678', '123', 'Bắc Ninh', 'luantph50931@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `trangthaidonhang`
--

CREATE TABLE `trangthaidonhang` (
  `id_trangThai` int NOT NULL,
  `trangThai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trangthaidonhang`
--

INSERT INTO `trangthaidonhang` (`id_trangThai`, `trangThai`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Đã xác nhận'),
(3, 'Đang giao'),
(4, 'Đã hoàn thành');

-- --------------------------------------------------------

--
-- Table structure for table `van_chuyen`
--

CREATE TABLE `van_chuyen` (
  `id_vanChuyen` int NOT NULL,
  `id_tk` int NOT NULL,
  `diaChi` varchar(299) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soDienThoai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoTen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `van_chuyen`
--

INSERT INTO `van_chuyen` (`id_vanChuyen`, `id_tk`, `diaChi`, `city`, `district`, `ward`, `soDienThoai`, `hoTen`, `note`) VALUES
(2, 5, 'Ngõ 2 Văn Trì, Phường Minh Khai, Quận Bắc Từ Liêm, Thành phố Hà Nội', 'Hà Nội', 'Bắc Từ Liêm', 'Minh Khai', '0339125387', 'Đào Việt Anh', 'Chao anh ship'),
(3, 6, 'Ngõ 2 Văn Trì, Phường Minh Khai, Quận Bắc Từ Liêm, Thành phố Hà Nội', 'Hà Nội', 'Bắc Từ Liêm', 'Minh Khai', '0123456789', 'Đào Việt Anh', 'Chào bà con');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `lk_san_pham_binh_luan` (`id_sp`),
  ADD KEY `lk_tai_khoan_binh_luan` (`id_tk`);

--
-- Indexes for table `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Indexes for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_donhang` (`id_donHang`),
  ADD KEY `fk_trangThaiDonHang` (`id_trangThai`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `lk_donhang_taikhoan` (`id_tk`),
  ADD KEY `fk_trangThai` (`trangthai_donhang`);

--
-- Indexes for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id_giohang`),
  ADD KEY `lk_tai_khoan_gio_hang` (`id_tk`);

--
-- Indexes for table `gio_hang_chi_tiet`
--
ALTER TABLE `gio_hang_chi_tiet`
  ADD PRIMARY KEY (`id_giohang_chitiet`),
  ADD KEY `lk_san_pham_giohang_chitiet` (`id_sp`),
  ADD KEY `lk_giohang_giohangct` (`id_giohang`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `lk_san_pham_danh_muc` (`id_dm`);

--
-- Indexes for table `sp_yeu_thich`
--
ALTER TABLE `sp_yeu_thich`
  ADD PRIMARY KEY (`id_yeuthich`),
  ADD KEY `fk_spyt` (`id_sp`),
  ADD KEY `fk_tkyt` (`id_tk`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- Indexes for table `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  ADD PRIMARY KEY (`id_trangThai`);

--
-- Indexes for table `van_chuyen`
--
ALTER TABLE `van_chuyen`
  ADD PRIMARY KEY (`id_vanChuyen`),
  ADD KEY `fk_tkvc` (`id_tk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_bl` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id_dm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_donhang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id_giohang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gio_hang_chi_tiet`
--
ALTER TABLE `gio_hang_chi_tiet`
  MODIFY `id_giohang_chitiet` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sp_yeu_thich`
--
ALTER TABLE `sp_yeu_thich`
  MODIFY `id_yeuthich` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id_tk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trangthaidonhang`
--
ALTER TABLE `trangthaidonhang`
  MODIFY `id_trangThai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `van_chuyen`
--
ALTER TABLE `van_chuyen`
  MODIFY `id_vanChuyen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `lk_san_pham_binh_luan` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_tai_khoan_binh_luan` FOREIGN KEY (`id_tk`) REFERENCES `tai_khoan` (`id_tk`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `fk_donhang` FOREIGN KEY (`id_donHang`) REFERENCES `don_hang` (`id_donhang`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_trangThaiDonHang` FOREIGN KEY (`id_trangThai`) REFERENCES `trangthaidonhang` (`id_trangThai`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `fk_trangThai` FOREIGN KEY (`trangthai_donhang`) REFERENCES `trangthaidonhang` (`id_trangThai`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_donhang_taikhoan` FOREIGN KEY (`id_tk`) REFERENCES `tai_khoan` (`id_tk`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `lk_tai_khoan_gio_hang` FOREIGN KEY (`id_tk`) REFERENCES `tai_khoan` (`id_tk`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `gio_hang_chi_tiet`
--
ALTER TABLE `gio_hang_chi_tiet`
  ADD CONSTRAINT `lk_giohang_giohangct` FOREIGN KEY (`id_giohang`) REFERENCES `gio_hang` (`id_giohang`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_san_pham_giohang_chitiet` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `lk_san_pham_danh_muc` FOREIGN KEY (`id_dm`) REFERENCES `danh_muc` (`id_dm`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `sp_yeu_thich`
--
ALTER TABLE `sp_yeu_thich`
  ADD CONSTRAINT `fk_spyt` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_tkyt` FOREIGN KEY (`id_tk`) REFERENCES `tai_khoan` (`id_tk`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `van_chuyen`
--
ALTER TABLE `van_chuyen`
  ADD CONSTRAINT `fk_tkvc` FOREIGN KEY (`id_tk`) REFERENCES `tai_khoan` (`id_tk`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
