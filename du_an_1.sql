-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2024 at 06:18 PM
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
  `noi_dung_bl` varchar(255) NOT NULL,
  `ngay_bl` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_sp` int NOT NULL,
  `id_tk` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id_donhang` int NOT NULL,
  `ten_donhang` varchar(255) NOT NULL,
  `so_dt` varchar(11) NOT NULL,
  `diachi_donhang` varchar(199) NOT NULL,
  `trangthai_donhang` varchar(50) NOT NULL,
  `phuongthuc_thanhtoan` varchar(199) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tong_donhang` int NOT NULL,
  `ngaydat_don` varchar(50) NOT NULL,
  `id_tk` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `don_hang_chi_tiet`
--

CREATE TABLE `don_hang_chi_tiet` (
  `id_donhang_chitiet` int NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `gia_tien` varchar(50) NOT NULL,
  `soluong_sp` int NOT NULL,
  `id_sp` int NOT NULL,
  `id_tk` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id_giohang` int NOT NULL,
  `id_tk` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang_chi_tiet`
--

CREATE TABLE `gio_hang_chi_tiet` (
  `id_giohang_chitiet` int NOT NULL,
  `id_sp` int NOT NULL,
  `so_luong` int NOT NULL,
  `id_giohang` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `id_dm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `ten_sp`, `gia_tien`, `gia_km`, `anh_sp`, `mo_ta`, `luot_xem`, `soluong_ton`, `id_dm`) VALUES
(1, 'Originals Campus', 350, NULL, 'images/1731863675_vn-11134201-7r98o-m0cqvz5bmetr71.jpg', 'Giày đẹp', 0, 10, 1),
(2, 'Youth of Paris Campus', 550, NULL, 'images/1731863666_1056436.jpg', 'Giày đẹp, phong cách', 0, 20, 1),
(7, 'Giày thể thao', 3333, NULL, 'images/1731863656_images.jpg', 'Đẹp', 0, 222, 1),
(8, 'Giày MLB', 123, NULL, 'images/1731863646_cb6642dc-68f5-4d86-bc4d-fc3451fb2543.jpg', '123123123213', 0, 2, 3),
(10, 'Nike Air Max 90.', 399, NULL, 'images/1732183590_2377_122489721_344542823505527_5851162293678721969_n.jpg', 'Đôi giày được ra mắt vào năm 1982 với thiết kế năng động khỏe khoắn đã trở thành đôi giày thịnh hành mà ai cũng muốn được chiếm hữu. Với vẻ ngoài đơn giản nên rất dễ dàng trong việc phối đồ giúp bạn tự tin nhiều năng lượng hơn.', 0, 10, 2),
(11, ' Nike VaporMax ACE', 450, NULL, 'images/1732183706_nike-af1-low-white-brown-1-800x800.jpg', 'Nike VaporMax ACE được đánh giá là một trong những đôi giày có tính đột phá cao nhất trong dòng Air Max của Nike. Thiết kế giày loại bỏ hoàn toàn thanh chống nhựa TPU phía bên trong phần Air', 0, 10, 2),
(12, 'Nike Air Jordan 1 Chicago', 455, NULL, 'images/1732183809_Giày-Nike-Jordan-Mid-Hồng.jpg', 'Air Jordan 1 Retro Chicago đã từ lâu trở thành một biểu tượng không thể thiếu và được người hâm mộ yêu thích nhất trong dòng sản phẩm Jordan', 0, 10, 4),
(13, 'Nike Jordan 3 Black Cement', 799, NULL, 'images/1732183861_Nike-Air-Jordan-1-Low-Shattered-Backboard5-1.jpg', 'Nike Jordan 3 Black Cement là mẫu giày đánh dấu đánh dấu kỷ niệm sinh nhật lần thứ 55 của Michael Jordan. Điểm nổi bật của đôi giày này đó chính là họa tiết họa tiết da voi đặc trưng.', 0, 10, 4),
(14, 'Nike Air Jordan 4 Bred', 1050, NULL, 'images/1732183973_wsxc1692114685292_8.jpg', 'Phiên bản giày này nổi bật nhất với phần đế giày màu đỏ, phần thân trên của giày màu đen cùng với những chi tiết giày màu xám kèm theo. Phần đế giữa của giày màu trắng cùng với một số họa tiết đen, xám, trắng.', 0, 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id_tk` int NOT NULL,
  `ten_tk` varchar(199) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `so_dt` varchar(11) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
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
(5, 'a', 'a', '12345678', 'a', 'a', 'luantph50931@gmail.com', 0),
(6, 'a', 'a', '12345678', 'a', 'Bắc Ninh1', 'luantph50931@gmail.com', 0),
(7, 'luantph', 'Admin', '12345678', '123', 'Bắc Ninh', 'luantph50931@gmail.com', 0);

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
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `lk_donhang_taikhoan` (`id_tk`);

--
-- Indexes for table `don_hang_chi_tiet`
--
ALTER TABLE `don_hang_chi_tiet`
  ADD PRIMARY KEY (`id_donhang_chitiet`),
  ADD KEY `lk_sanpham_donhangct` (`id_sp`),
  ADD KEY `lk_taikhoan_donhangct` (`id_tk`);

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
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_bl` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id_dm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_donhang` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `don_hang_chi_tiet`
--
ALTER TABLE `don_hang_chi_tiet`
  MODIFY `id_donhang_chitiet` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id_giohang` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gio_hang_chi_tiet`
--
ALTER TABLE `gio_hang_chi_tiet`
  MODIFY `id_giohang_chitiet` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id_tk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- Constraints for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `lk_donhang_taikhoan` FOREIGN KEY (`id_tk`) REFERENCES `tai_khoan` (`id_tk`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `don_hang_chi_tiet`
--
ALTER TABLE `don_hang_chi_tiet`
  ADD CONSTRAINT `lk_sanpham_donhangct` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id_sp`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_taikhoan_donhangct` FOREIGN KEY (`id_tk`) REFERENCES `tai_khoan` (`id_tk`) ON DELETE RESTRICT ON UPDATE RESTRICT;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
