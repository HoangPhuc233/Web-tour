-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2024 at 08:15 AM
-- Server version: 8.0.40-0ubuntu0.22.04.1
-- PHP Version: 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour_tmdt`
--

-- --------------------------------------------------------

--
-- Table structure for table `goi_tour`
--

CREATE TABLE `goi_tour` (
  `ma_goitour` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ten_goitour` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vitri_khoihanh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gia` int NOT NULL,
  `thoigian` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phuongtien` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `avatar_goitour` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `anh1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `anh2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `anh3` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slot` int NOT NULL,
  `trangthai` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'chưa duyệt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goi_tour`
--

INSERT INTO `goi_tour` (`ma_goitour`, `ten_goitour`, `vitri_khoihanh`, `gia`, `thoigian`, `phuongtien`, `avatar_goitour`, `anh1`, `anh2`, `anh3`, `slot`, `trangthai`) VALUES
('DAD001', 'Đà Nẵng - Hội An', 'Đà Nẵng', 5000000, '3 ngày 2 đêm', 'Xe khách', 'danang_hoian.jpg', '', '', '', 10, 'chưa duyệt'),
('DAD002', 'Đà Nẵng - Huế', 'Đà Nẵng ', 6500000, '3 ngày 2 đêm', 'Xe khách', 'danang_hue.jpg', '', '', '', 10, 'đã duyệt'),
('HCM001', 'Hồ Chí Minh - Đà Lạt', 'Hồ Chí Minh', 5500000, '3 ngày 2 đêm', 'Xe khách', 'hcm_dalat.jpg', '', '', '', 10, 'đã duyệt'),
('HCM002', 'Hồ Chí Minh - Phú Quốc', 'Hồ Chí Minh', 8000000, '4 ngày 3 đêm', 'Máy bay', 'hcm_phuquoc.jpg', '', '', '', 10, 'đã duyệt'),
('HNI001', 'Hà Nội - Hạ Long', 'Hà Nội', 6000000, '3 ngày 2 đêm', 'Xe khách', 'hanoi_halong.jpg', '', '', '', 10, 'đã duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int NOT NULL,
  `ma_tour` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `makh` int NOT NULL,
  `tenkh` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `diachi` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dcmail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nguoi_lon` int DEFAULT NULL,
  `tre_em` int DEFAULT NULL,
  `phu_thu_visa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phong_don` int DEFAULT NULL,
  `payment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ghi_chu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `ten_nguoi_lon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `ten_tre_em` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `ma_tour`, `makh`, `tenkh`, `diachi`, `phone`, `dcmail`, `nguoi_lon`, `tre_em`, `phu_thu_visa`, `phong_don`, `payment`, `ghi_chu`, `ten_nguoi_lon`, `ten_tre_em`) VALUES
(5, NULL, 1, 'phúc', 'Nam Dinh', '0387059999', 'anh@gmail.com', 1, 1, 'Không', 1, 'quay', 'jk', '', ''),
(6, NULL, 2, 'anh', '1', '1', 'anh@gmail.com', 1, 1, 'Không', 1, 'quay', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `lichtrinh`
--

CREATE TABLE `lichtrinh` (
  `ma_goitour` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ngay` int NOT NULL,
  `ten_lichtrinh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `noidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lichtrinh`
--

INSERT INTO `lichtrinh` (`ma_goitour`, `ngay`, `ten_lichtrinh`, `noidung`) VALUES
('DAD001', 1, 'Ngày 1: Tham quan Đà Nẵng', '0 bữa ăn.\nQuý khách tập trung tại ga đi trong nước, sân bay Tân Sơn Nhất, hướng dẫn viên Vietravel hỗ trợ làm thủ tục cho đoàn đáp chuyến bay đi Đà Nẵng, tại sân bay Đà Nẵng xe và HDV đón đoàn về khách sạn nghỉ ngơi. Nghỉ đêm tại Đà Nẵng'),
('DAD001', 2, 'Ngày 2: Hội An', '2 bữa ăn sáng, chiều\nQuý khách dùng bữa sáng tại khách sạn và tự do tắm biển Mỹ Khê.\nSau khi tắm biển, xe và HDV sẽ đưa đoàn đi tham quan:\n	-Khu du lịch Bà Nà (chi phí cáp treo & ăn trưa tự túc) - tận hưởng không khí se lạnh của Đà Lạt tại miền Trung, đoàn tự do tham quan Chùa Linh Ứng, Hầm rượu Debay, vườn hoa Le Jardin D’Amour, Khu Tâm linh mới của Bà Nà viếng Đền Lĩnh Chúa Linh Từ, khu vui chơi Fantasy Park.\n		+Cầu Vàng - tự do chụp hình tại điểm tham quan siêu hot của Đà Nẵng.\n		+Trải nghiệm Tàu hỏa leo núi đến với Lâu đài Mặt Trăng.\nQuý khách tự túc dùng bữa trưa tại KDL. Đoàn tự do vui chơi cho đến giờ xuống cáp. Đoàn tham quan:\n	-Vườn tượng Apec - nằm bên bờ sông Hàn tổ hợp công trình bao gồm khu công viên cây xanh, thảm cỏ, lối đi bộ, vườn dạo.\n	-Cầu Tình Yêu - Cầu Tình Yêu ở Đà Nẵng được lấy cảm hứng từ những cây cầu tình yêu nổi tiếng trên thế giới như: Ý, Pháp, Nga, Đức. Đây là nơi minh chứng, ước hẹn cho các đôi lứa, ý nghĩa của ổ khóa tình yêu thể hiện một tình yêu bền chặt, vĩnh cửu.\n	-Mua sắm đặc sản phố biển tại Quà Đà Nẵng với hơn 2000 sản phẩm đặc sản Đà Nẵng, Miền Trung và các vùng miền lân cận, nổi bật nhất là chả bò, bò khô, mực rim me, mực khô, ghẹ sữa sốt và đầy đủ các loại khô cá,...\nQuý khách dùng bữa tối tại nhà hàng địa phương. Buổi tối, đoàn tự do tham quan chợ đêm, Đà Nẵng Downtown...\nNghỉ đêm tại Đà Nẵng'),
('DAD001', 3, 'Ngày 3: Kết thúc', '2 Bữa ăn sáng, trưa\nQuý khách dùng bữa sáng tại khách sạn và tự do tắm biển Mỹ Khê. Sau đó đoàn khởi hành tham quan:\n	-Bán đảo Sơn Trà và viếng Chùa Linh Ứng - với tượng Phật Quan Thế Âm cao nhất Việt Nam, đứng nơi đây, Quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất.\n	-Làng Đá Non Nước Quốc Hiệp - nơi chế tác các sản phẩm đá mỹ nghệ tạo phong thủy.\n	-Phố Cổ Hội An - Chùa Cầu, Nhà cổ, Hội quán, dạo phố đèn lồng cảm nhận sự yên bình, cổ kính, lãng mạn Hội An, thưởng thức đặc sản nổi tiếng địa phương Cao lầu, Mì Quảng, Cơm gà,…. Tự do tham quan thành phố về đêm, ngắm cầu Rồng, cầu Tình Yêu hay dạo chơi dọc bờ sông Hàn.\n	-Tham quan Cao su thiên nhiên WE - ngả lưng nghỉ ngơi trên những chiếc nệm được làm từ cao su thiên nhiên hoặc mua sắm sản phẩm như chăn, ga, gối đệm… mang đến cho Quý khách một giấc ngủ tốt cho ngày mới tràn đầy năng lượng.\n	-Quý khách có thể trải nghiệm các dịch vụ massage thư giãn cơ thể tại Chloe Luxury Spa cùng hệ thống (chi phí trải nghiệm tự túc).\nTới giờ bay, HDV và xe tiễn Quý khách ra sân bay Đà Nẵng đón chuyến bay trở về Tp. Hồ Chí Minh. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.\n\n			***KẾT THÚC CHƯƠNG TRÌNH – TẠM BIỆT QUÝ KHÁCH***\n\nLưu ý:\n\n	Hành trình có thể thay đổi thứ tự điểm đến tùy vào điều kiện thực tế.\n	Lịch trình tham quan (tắm biển, ngắm hoa, trải nghiệm,...) rất dễ bị ảnh hưởng bởi thời tiết. Đây là trường hợp bất khả kháng mong Quý khách hiểu và thông cảm.\n	Khách sạn có thể ở xa trung tâm thành phố vào các mùa Cao điểm.'),
('HCM002', 1, 'Ngày 1: Đến Phú Quốc', 'Tham quan Vinpearl Land, Safari'),
('HCM002', 2, 'Ngày 2: Đảo Phú Quốc', 'Tắm biển, tham quan cơ sở nuôi cấy ngọc trai'),
('HCM002', 3, 'Ngày 3: Nghỉ dưỡng', 'Tự do nghỉ dưỡng và mua sắm'),
('HNI001', 1, 'Ngày 1: Vịnh Hạ Long', 'Tham quan hang động và chèo thuyền kayak'),
('HNI001', 2, 'Ngày 2: Đảo Cát Bà', 'Khám phá đảo và các hoạt động thể thao dưới nước'),
('HCM001', 1, 'Ngày 1: Đà Lạt', 'Tham quan Thung lũng Tình yêu, Đồi Mộng Mơ'),
('HCM001', 2, 'Ngày 2: Đà Lạt', 'Khám phá chợ đêm Đà Lạt, vườn hoa thành phố'),
('DAD002', 1, 'Ngày 1: Khám phá Huế', 'Tham quan Hoàng cung Huế, các lăng tẩm'),
('DAD002', 2, 'Ngày 2: Trải nghiệm ẩm thực', 'Thưởng thức món ăn địa phương, thăm chợ Đông Ba');

-- --------------------------------------------------------

--
-- Table structure for table `lydo`
--

CREATE TABLE `lydo` (
  `ma_lydo` int NOT NULL,
  `ma_goitour` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `noidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `thoigian` datetime NOT NULL,
  `loai` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lydo`
--

INSERT INTO `lydo` (`ma_lydo`, `ma_goitour`, `noidung`, `thoigian`, `loai`) VALUES
(1, 'DAD007', 'abcderf gh', '2024-11-25 20:24:19', 'lý do yêu cầu chỉnh sửa'),
(2, 'DAD009', 'giá cả tour chưa hợp lệ', '2024-11-25 20:25:38', 'lý do xóa');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `ma_nhanvien` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'căn cước công dân',
  `taikhoan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `matkhau` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hodem` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ten` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sodienthoai` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `quequan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `chucvu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`ma_nhanvien`, `taikhoan`, `matkhau`, `hodem`, `ten`, `ngaysinh`, `gioitinh`, `sodienthoai`, `email`, `quequan`, `chucvu`) VALUES
('082203010909', 'huyen01', '123', 'Nguyễn Ngọc', 'Huyền', '2004-11-05', 'Nữ', '0385481231', 'nnhuen.officical@gmail.com', 'Sài gòn', 'hướng dẫn viên'),
('082203010996', 'phuc01', '123', 'Lê Hoàng', 'Phúc', '2003-11-05', 'Nam', '0385481237', '233phucle@gmail.com', 'Sài gòn', 'hướng dẫn viên'),
('082203010997', 'tu01', '123', 'Lê Cẩm', 'Tú', '2003-11-05', 'Nữ', '0385481235', 'lecamtu171103@gmail.com', 'Cà Mau', 'nhân viên'),
('082203010998', 'thuy01', '123', 'Trần Nguyễn Anh', 'Thùy', '2003-07-07', 'Nữ', '0385481234', 'nguyentranthuy.tnat@gmail.com', 'Sài Gòn', 'quản lí'),
('082203010999', 'tai01', '123', 'Bùi Anh', 'Tài', '2003-07-07', 'Nam', '0385485869', 'buianhtai4903@gmail.com', 'ấp Hưng Điền xã Hưng Thạnh huyện Tân Phước tỉnh Tiền Giang', 'quản trị');

-- --------------------------------------------------------

--
-- Table structure for table `phancong_hdv`
--

CREATE TABLE `phancong_hdv` (
  `ma_nhanvien` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'căn cước công dân',
  `ma_tour` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ngay_phan_cong` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phancong_hdv`
--

INSERT INTO `phancong_hdv` (`ma_nhanvien`, `ma_tour`, `ngay_phan_cong`) VALUES
('082203010909', 'DAD002-001-05052025XE', '2024-11-24 01:37:30'),
('082203010996', 'DAD002-002-10052025XE', '2024-11-24 02:35:41'),
('082203010909', 'DAD002-003-07072025XE', '2024-11-26 00:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int NOT NULL,
  `tensp` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mancc` int DEFAULT NULL,
  `mota` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `manhom` int DEFAULT NULL,
  `dvt` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `giagoc` decimal(19,4) DEFAULT NULL,
  `slton` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tinh`
--

CREATE TABLE `tinh` (
  `ma_tinh` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ten_tinh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mien` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tinh`
--

INSERT INTO `tinh` (`ma_tinh`, `ten_tinh`, `mien`) VALUES
('AGL', 'An Giang', 'Miền Nam'),
('BDG', 'Bình Dương', 'Miền Nam'),
('BDI', 'Bình Định', 'Miền Trung'),
('BGG', 'Bắc Giang', 'Miền Bắc'),
('BKN', 'Bắc Kạn', 'Miền Bắc'),
('BLC', 'Lai Châu', 'Miền Bắc'),
('BLU', 'Bạc Liêu', 'Miền Nam'),
('BNH', 'Bắc Ninh', 'Miền Bắc'),
('BTE', 'Bến Tre', 'Miền Nam'),
('BTH', 'Bình Thuận', 'Miền Trung'),
('CBA', 'Cao Bằng', 'Miền Bắc'),
('CMA', 'Cà Mau', 'Miền Nam'),
('CTH', 'Cần Thơ', 'Miền Nam'),
('DAD', 'Đà Nẵng', 'Miền Trung'),
('DBN', 'Điện Biên', 'Miền Bắc'),
('DKN', 'Đắk Nông', 'Miền Trung'),
('DLA', 'Đắk Lắk', 'Miền Trung'),
('DNA', 'Đồng Nai', 'Miền Nam'),
('DTH', 'Đồng Tháp', 'Miền Nam'),
('GLI', 'Gia Lai', 'Miền Trung'),
('HCM', 'Hồ Chí Minh', 'Miền Nam'),
('HDU', 'Hậu Giang', 'Miền Nam'),
('HGI', 'Hà Giang', 'Miền Bắc'),
('HNA', 'Hà Nam', 'Miền Bắc'),
('HNI', 'Hà Nội', 'Miền Bắc'),
('HPG', 'Hải Phòng', 'Miền Bắc'),
('HQA', 'Hòa Bình', 'Miền Bắc'),
('HTH', 'Hà Tĩnh', 'Miền Trung'),
('HYE', 'Hưng Yên', 'Miền Bắc'),
('KGG', 'Kiên Giang', 'Miền Nam'),
('KHA', 'Khánh Hòa', 'Miền Trung'),
('KTM', 'Kon Tum', 'Miền Trung'),
('LCA', 'Lào Cai', 'Miền Bắc'),
('LDA', 'Lâm Đồng', 'Miền Trung'),
('LNG', 'Lạng Sơn', 'Miền Bắc'),
('LSN', 'Long An', 'Miền Nam'),
('NAN', 'Nghệ An', 'Miền Trung'),
('NBC', 'Nam Định', 'Miền Bắc'),
('NBH', 'Ninh Bình', 'Miền Bắc'),
('NTN', 'Ninh Thuận', 'Miền Trung'),
('PTO', 'Phú Thọ', 'Miền Bắc'),
('PYN', 'Phú Yên', 'Miền Trung'),
('QBI', 'Quảng Bình', 'Miền Trung'),
('QNG', 'Quảng Ngãi', 'Miền Trung'),
('QNI', 'Quảng Ninh', 'Miền Bắc'),
('QNM', 'Quảng Nam', 'Miền Trung'),
('QTR', 'Quảng Trị', 'Miền Trung'),
('SLA', 'Sóc Trăng', 'Miền Nam'),
('STN', 'Sơn La', 'Miền Bắc'),
('TBN', 'Thái Bình', 'Miền Bắc'),
('TGI', 'Tiền Giang', 'Miền Nam'),
('TNG', 'Thái Nguyên', 'Miền Bắc'),
('TNT', 'Tây Ninh', 'Miền Nam'),
('TQG', 'Tuyên Quang', 'Miền Bắc'),
('TQN', 'Thanh Hóa', 'Miền Trung'),
('TTH', 'Thừa Thiên Huế', 'Miền Trung'),
('TVH', 'Trà Vinh', 'Miền Nam'),
('VLG', 'Vĩnh Long', 'Miền Nam'),
('VPH', 'Vĩnh Phúc', 'Miền Bắc'),
('YBI', 'Yên Bái', 'Miền Bắc');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `ma_tour` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ma_goitour` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ngaykhoihanh` date NOT NULL,
  `ngayve` date NOT NULL,
  `ma_hdv` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `slot_khadung` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`ma_tour`, `ma_goitour`, `ngaykhoihanh`, `ngayve`, `ma_hdv`, `slot_khadung`) VALUES
('DAD001-001-15012025XE', 'DAD001', '2025-01-15', '2025-01-17', '', 10),
('DAD001-002-20012025XE', 'DAD001', '2025-01-20', '2025-01-22', '', 10),
('DAD002-001-05052025XE', 'DAD002', '2025-05-05', '2025-05-07', '082203010909', 3),
('DAD002-002-10052025XE', 'DAD002', '2025-05-10', '2025-05-12', '082203010996', 3),
('DAD002-003-07072025XE', 'DAD002', '2025-07-07', '2025-07-09', '082203010909', 10),
('DAD002-004-29112024XE', 'DAD002', '2024-11-29', '2024-12-01', '', 10),
('HCM001-001-21042025XE', 'HCM001', '2025-04-21', '2025-04-23', '', 4),
('HCM001-002-26042025XE', 'HCM001', '2025-04-26', '2025-04-28', '', 5),
('HCM002-001-03022025MB', 'HCM002', '2025-02-03', '2025-02-06', '', 3),
('HCM002-002-06022025MB', 'HCM002', '2025-02-06', '2025-02-09', '', 8),
('HNI001-001-15032025XE', 'HNI001', '2025-03-15', '2025-03-17', '', 4),
('HNI001-002-20032025XE', 'HNI001', '2025-03-20', '2025-03-22', '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'Tên đăng nhập',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'Mật khẩu đăng nhập',
  `status` tinyint DEFAULT '0' COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`) VALUES
(1, '2', '$2y$10$wTOIzlZ0V0aNAnle2AW9uOMZ.AElWMGzttI7t3yr8yaRKtWGwGhue', 0),
(2, '3', '$2y$10$mxln91qFdoEv9SuyH3iO1eBVBq0ORXdkgblRqQSCXWIQ5ALwHRRda', 0),
(3, '4', '$2y$10$eg3wbgOub70wyXm8frKN2ORjHsfwLl6Tsr15sSRoeD29AT1mmkLbu', 0),
(4, '1', '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goi_tour`
--
ALTER TABLE `goi_tour`
  ADD PRIMARY KEY (`ma_goitour`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lichtrinh`
--
ALTER TABLE `lichtrinh`
  ADD KEY `fk_lichtrinh_goitour` (`ma_goitour`);

--
-- Indexes for table `lydo`
--
ALTER TABLE `lydo`
  ADD PRIMARY KEY (`ma_lydo`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`ma_nhanvien`),
  ADD UNIQUE KEY `taikhoan` (`taikhoan`);

--
-- Indexes for table `phancong_hdv`
--
ALTER TABLE `phancong_hdv`
  ADD KEY `fk_hdv_tour` (`ma_tour`),
  ADD KEY `fk_hdv_nhanvien` (`ma_nhanvien`);

--
-- Indexes for table `tinh`
--
ALTER TABLE `tinh`
  ADD PRIMARY KEY (`ma_tinh`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`ma_tour`),
  ADD KEY `fk_tour_goitour` (`ma_goitour`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lydo`
--
ALTER TABLE `lydo`
  MODIFY `ma_lydo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lichtrinh`
--
ALTER TABLE `lichtrinh`
  ADD CONSTRAINT `fk_lichtrinh_goitour` FOREIGN KEY (`ma_goitour`) REFERENCES `goi_tour` (`ma_goitour`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phancong_hdv`
--
ALTER TABLE `phancong_hdv`
  ADD CONSTRAINT `fk_hdv_nhanvien` FOREIGN KEY (`ma_nhanvien`) REFERENCES `nhanvien` (`ma_nhanvien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_hdv_tour` FOREIGN KEY (`ma_tour`) REFERENCES `tour` (`ma_tour`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `fk_tour_goitour` FOREIGN KEY (`ma_goitour`) REFERENCES `goi_tour` (`ma_goitour`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
