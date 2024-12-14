SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `canhcao`
--

CREATE TABLE `canhcao` (
  `SoBanGhi` int(11) NOT NULL,
  `MaSV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HocKy` int(11) NOT NULL,
  `LyDo` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `canhcao`
--

INSERT INTO `canhcao` (`SoBanGhi`, `MaSV`, `HocKy`, `LyDo`) VALUES
(1, 'B21DCVT014', 4, 'Điểm TBC học kỳ không đạt.'),
(2, 'B21DCPT018', 4, 'Điểm TBC học kỳ không đạt.'),
(3, 'B21DCMR026', 4, 'Điểm TBC học kỳ không đạt.'),
(4, 'B21DCAT009', 4, 'Điểm TBC học kỳ không đạt.'),
(5, 'B21DCTM031', 1, 'Điểm TBC học kỳ không đạt.'),
(6, 'B21DCDT021', 1, 'Điểm TBC học kỳ không đạt.'),
(7, 'B21ACCA007', 1, 'Điểm TBC học kỳ không đạt.'),
(8, 'B21DCCN001', 1, 'Điểm TBC học kỳ không đạt.'),
(9, 'B21DCTM001', 1, 'Điểm TBC học kỳ không đạt.'),
(10, 'B21DCDT022', 1, 'Điểm TBC học kỳ không đạt.'),
(11, 'B21DCMR030', 1, 'Điểm TBC học kỳ không đạt.'),
(12, 'B21DCPT016', 2, 'Điểm TBC học kỳ không đạt.'),
(13, 'B21DCAT010', 2, 'Điểm TBC học kỳ không đạt.'),
(14, 'B21DCCN003', 3, 'Điểm TBC học kỳ không đạt.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `SoBanGhi` int(11) NOT NULL,
  `MaSV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TBCHocKy` float NOT NULL,
  `DiemRL` int(11) NOT NULL,
  `TongTCHK` int(11) NOT NULL,
  `HocKy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`SoBanGhi`, `MaSV`, `TBCHocKy`, `DiemRL`, `TongTCHK`, `HocKy`) VALUES
(1, 'B21DCCN001', 1.01, 82, 12, 1),
(2, 'B21DCCN002', 2.39, 46, 12, 1),
(3, 'B21DCCN003', 2.62, 66, 12, 1),
(4, 'B21DCCN004', 2.09, 93, 12, 1),
(5, 'B21DCCN005', 1.33, 92, 12, 1),
(6, 'B21DCAT006', 2.91, 61, 12, 1),
(7, 'B21DCAT007', 1.03, 40, 12, 1),
(8, 'B21DCAT008', 2.56, 93, 12, 1),
(9, 'B21DCAT009', 1.04, 84, 12, 1),
(10, 'B21DCAT010', 2.18, 59, 12, 1),
(11, 'B21DCVT011', 3.10, 47, 12, 1),
(12, 'B21DCVT012', 1.54, 72, 12, 1),
(13, 'B21DCVT013', 2.78, 55, 12, 1),
(14, 'B21DCVT014', 1.83, 97, 12, 1),
(15, 'B21DCVT015', 2.82, 67, 12, 1),
(16, 'B21DCPT016', 1.64, 76, 12, 1),
(17, 'B21DCPT017', 3.44, 41, 12, 1),
(18, 'B21DCPT018', 2.72, 61, 12, 1),
(19, 'B21DCPT019', 2.69, 78, 12, 1),
(20, 'B21DCPT020', 1.93, 45, 12, 1),
(21, 'B21DCDT021', 0.87, 41, 12, 1),
(22, 'B21DCDT022', 0.96, 61, 12, 1),
(23, 'B21DCDT023', 3.00, 47, 12, 1),
(24, 'B21DCDT024', 1.83, 43, 12, 1),
(25, 'B21DCDT025', 1.49, 76, 12, 1),
(26, 'B21DCMR026', 3.03, 60, 12, 1),
(27, 'B21DCMR027', 2.98, 76, 12, 1),
(28, 'B21DCMR028', 3.98, 50, 12, 1),
(29, 'B21DCMR029', 3.00, 45, 12, 1),
(30, 'B21DCMR030', 0.85, 77, 12, 1),
(31, 'B21DCTM031', 1.14, 83, 12, 1),
(32, 'B21DCTM032', 2.05, 73, 12, 1),
(33, 'B21DCTM033', 3.82, 94, 12, 1),
(34, 'B21DCTM001', 2.21, 49, 19, 1),
(35, 'B21DCTM002', 2.46, 64, 19, 1),
(36, 'B21DCTM003', 3.59, 70, 19, 1),
(37, 'B21DCTM004', 1.94, 74, 19, 1),
(38, 'B21DCTM005', 2.01, 95, 19, 1),
(39, 'B21ACCA006', 1.97, 69, 19, 1),
(40, 'B21ACCA007', 2.44, 65, 19, 1),
(41, 'B21ACCA008', 2.05, 90, 19, 1),
(42, 'B21DCCN001', 2.41, 61, 19, 2),
(43, 'B21DCCN002', 0.97, 84, 19, 2),
(44, 'B21DCCN003', 1.27, 56, 19, 2),
(45, 'B21DCCN004', 2.15, 79, 19, 2),
(46, 'B21DCCN005', 2.24, 58, 19, 2),
(47, 'B21DCAT006', 2.36, 71, 19, 2),
(48, 'B21DCAT007', 3.03, 88, 19, 2),
(49, 'B21DCAT008', 3.38, 85, 19, 2),
(50, 'B21DCAT009', 3.93, 66, 19, 2),
(51, 'B21DCAT010', 1.13, 45, 19, 2),
(52, 'B21DCVT011', 1.28, 71, 19, 2),
(53, 'B21DCVT012', 2.18, 60, 19, 2),
(54, 'B21DCVT013', 3.91, 64, 19, 2),
(55, 'B21DCVT014', 2.56, 49, 19, 2),
(56, 'B21DCVT015', 3.23, 45, 19, 2),
(57, 'B21DCPT016', 2.09, 90, 19, 2),
(58, 'B21DCPT017', 1.52, 78, 19, 2),
(59, 'B21DCPT018', 2.05, 95, 19, 2),
(60, 'B21DCPT019', 1.72, 59, 19, 2),
(61, 'B21DCPT020', 3.28, 95, 19, 2),
(62, 'B21DCDT021', 2.62, 56, 19, 2),
(63, 'B21DCDT022', 3.85, 56, 19, 2),
(64, 'B21DCDT023', 3.89, 77, 19, 2),
(65, 'B21DCDT024', 2.81, 49, 19, 2),
(66, 'B21DCDT025', 1.32, 72, 19, 2),
(67, 'B21DCMR026', 3.07, 58, 14, 2),
(68, 'B21DCMR027', 2.05, 85, 14, 2),
(69, 'B21DCMR028', 1.04, 68, 14, 2),
(70, 'B21DCMR029', 1.30, 99, 14, 2),
(71, 'B21DCMR030', 3.66, 77, 14, 2),
(72, 'B21DCTM031', 3.22, 45, 14, 2),
(73, 'B21DCTM032', 1.31, 55, 14, 2),
(74, 'B21DCTM033', 3.54, 49, 14, 2),
(75, 'B21DCTM001', 2.59, 42, 14, 2),
(76, 'B21DCTM002', 1.90, 58, 14, 2),
(77, 'B21DCTM003', 3.27, 62, 14, 2),
(78, 'B21DCTM004', 3.84, 97, 14, 2),
(79, 'B21DCTM005', 3.40, 42, 14, 2),
(80, 'B21ACCA006', 1.40, 83, 14, 2),
(81, 'B21ACCA007', 3.07, 71, 14, 2),
(82, 'B21ACCA008', 3.00, 88, 14, 2),
(83, 'B21DCCN001', 3.96, 69, 14, 3),
(84, 'B21DCCN002', 2.71, 94, 14, 3),
(85, 'B21DCCN003', 3.76, 51, 14, 3),
(86, 'B21DCCN004', 1.89, 57, 14, 3),
(87, 'B21DCCN005', 1.46, 51, 14, 3),
(88, 'B21DCAT006', 1.20, 40, 14, 3),
(89, 'B21DCAT007', 3.03, 87, 14, 3),
(90, 'B21DCAT008', 3.02, 54, 14, 3),
(91, 'B21DCAT009', 1.85, 88, 14, 3),
(92, 'B21DCAT010', 2.96, 81, 14, 3),
(93, 'B21DCVT011', 2.77, 66, 14, 3),
(94, 'B21DCVT012', 1.95, 94, 14, 3),
(95, 'B21DCVT013', 1.66, 63, 14, 3),
(96, 'B21DCVT014', 1.47, 62, 14, 3),
(97, 'B21DCVT015', 2.30, 73, 14, 3),
(98, 'B21DCPT016', 2.55, 58, 14, 3),
(99, 'B21DCPT017', 3.24, 88, 14, 3),
(100, 'B21DCPT018', 2.96, 44, 17, 3),
(101, 'B21DCPT019', 1.45, 41, 17, 3),
(102, 'B21DCPT020', 3.09, 96, 17, 3),
(103, 'B21DCDT021', 2.00, 90, 17, 3),
(104, 'B21DCDT022', 1.48, 48, 17, 3),
(105, 'B21DCDT023', 1.49, 68, 17, 3),
(106, 'B21DCDT024', 1.54, 70, 17, 3),
(107, 'B21DCDT025', 3.16, 64, 17, 3),
(108, 'B21DCMR026', 0.81, 83, 17, 3),
(109, 'B21DCMR027', 3.87, 46, 17, 3),
(110, 'B21DCMR028', 2.85, 59, 17, 3),
(111, 'B21DCMR029', 2.96, 53, 17, 3),
(112, 'B21DCMR030', 3.79, 50, 17, 3),
(113, 'B21DCTM031', 1.13, 98, 17, 3),
(114, 'B21DCTM032', 1.30, 62, 17, 3),
(115, 'B21DCTM033', 3.05, 97, 17, 3),
(116, 'B21DCTM001', 1.93, 73, 17, 3),
(117, 'B21DCTM002', 1.08, 50, 17, 3),
(118, 'B21DCTM003', 2.28, 90, 17, 3),
(119, 'B21DCTM004', 3.01, 53, 17, 3),
(120, 'B21DCTM005', 3.16, 71, 17, 3),
(121, 'B21ACCA006', 1.24, 74, 17, 3),
(122, 'B21ACCA007', 1.67, 55, 17, 3),
(123, 'B21ACCA008', 2.68, 72, 17, 3),
(124, 'B21DCCN001', 1.81, 55, 17, 4),
(125, 'B21DCCN002', 0.98, 43, 17, 4),
(126, 'B21DCCN003', 3.20, 77, 17, 4),
(127, 'B21DCCN004', 3.04, 49, 17, 4),
(128, 'B21DCCN005', 2.79, 50, 17, 4),
(129, 'B21DCAT006', 1.97, 72, 17, 4),
(130, 'B21DCAT007', 3.91, 100, 17, 4),
(131, 'B21DCAT008', 1.20, 43, 17, 4),
(132, 'B21DCAT009', 1.25, 44, 17, 4),
(133, 'B21DCAT010', 2.13, 53, 17, 4),
(134, 'B21DCVT011', 2.45, 68, 17, 4),
(135, 'B21DCVT012', 1.37, 56, 17, 4),
(136, 'B21DCVT013', 3.09, 47, 17, 4),
(137, 'B21DCVT014', 2.59, 66, 17, 4),
(138, 'B21DCVT015', 2.11, 74, 17, 4),
(139, 'B21DCPT016', 1.92, 51, 17, 4),
(140, 'B21DCPT017', 3.78, 45, 17, 4),
(141, 'B21DCPT018', 2.35, 54, 17, 4),
(142, 'B21DCPT019', 2.98, 69, 17, 4),
(143, 'B21DCPT020', 1.84, 62, 17, 4),
(144, 'B21DCDT021', 1.56, 58, 17, 4),
(145, 'B21DCDT022', 3.33, 50, 17, 4),
(146, 'B21DCDT023', 2.72, 60, 17, 4),
(147, 'B21DCDT024', 1.29, 48, 17, 4),
(148, 'B21DCDT025', 2.47, 66, 17, 4),
(149, 'B21DCMR026', 1.75, 63, 17, 4),
(150, 'B21DCMR027', 3.50, 70, 17, 4),
(151, 'B21DCMR028', 2.22, 59, 17, 4),
(152, 'B21DCMR029', 2.05, 55, 17, 4),
(153, 'B21DCMR030', 3.14, 72, 17, 4),
(154, 'B21DCTM031', 1.69, 57, 17, 4),
(155, 'B21DCTM032', 2.38, 61, 17, 4),
(156, 'B21DCTM033', 1.21, 46, 17, 4),
(157, 'B21DCTM001', 3.41, 60, 17, 4),
(158, 'B21DCTM002', 2.88, 75, 17, 4),
(159, 'B21DCTM003', 3.73, 52, 17, 4),
(160, 'B21DCTM004', 1.43, 65, 17, 4),
(161, 'B21DCTM005', 2.06, 47, 17, 4),
(162, 'B21ACCA006', 1.74, 58, 17, 4),
(163, 'B21ACCA007', 3.56, 49, 17, 4),
(164, 'B21ACCA008', 2.94, 64, 17, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gvcn`
--

CREATE TABLE `gvcn` (
  `MaGV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenGV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gvcn`
--

INSERT INTO `gvcn` (`MaGV`, `TenGV`, `SDT`, `Email`) VALUES
('GV01', 'Đặng Thị Nhung', '0987654321', 'nhungdang@gmail.com'),
('GV02', 'Đỗ Duy Tuân', '0376541289', 'duytuan21@gmail.com'),
('GV03', 'Nguyễn Thành Đạt', '0379865412', 'thanhdat@gmail.com'),
('GV04', 'Đỗ Đình Đức', '0932145687', 'ducdinhdo@gmail.com'),
('GV05', 'Vũ Thị Sâm', '0935596857', 'samvt@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenKhoa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`, `MoTa`) VALUES
('COBAN', 'Cơ bản 1', 'Không'),
('QTKD', 'Quản trị kinh doanh 1', 'Không'),
('TCKT', 'Tài chính kế toán', 'Không'),
('CNTT', 'Công nghệ thông tin 1', 'Không'),
('ATTT', 'An toàn thông tin', 'Không'),
('VT', 'Viễn thông 1', 'Không'),
('KTĐT', 'Kỹ thuật điện tử 1', 'Không'),
('ĐPT', 'Đa phương tiện', 'Không');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `MaLop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenLop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaNganh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaGV` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `MaNganh`, `MaGV`) VALUES
('D21CQCN01-B', 'Công nghệ thông tin 01', '7480201', 'GV03'),
('D21CQCN02-B', 'Công nghệ thông tin 02', '7480201', 'GV01'),
('D21CQAT01-B', 'An toàn thông tin 01', '7480202', 'GV01'),
('D21CQAT02-B', 'An toàn thông tin 02', '7480202', 'GV02'),
('D21CQVT01-B', 'Điện tử viễn thông 01', '7520207', 'GV02'),
('D21CQVT02-B', 'Điện tử viễn thông 02', '7520207', 'GV03'),
('D21CQPT01-B', 'Công nghệ đa phương tiện 01', '7329001', 'GV05'),
('D21CQPT02-B', 'Công nghệ đa phương tiện 02', '7329001', 'GV05'),
('D21CQDT01-B', 'Công nghệ kỹ thuật Điện, điện tử 01', '7510301', 'GV02'),
('D21CQDT02-B', 'Công nghệ kỹ thuật Điện, điện tử 02', '7510301', 'GV03'),
('D21CQMR01-B', 'Marketing 01', '7340115', 'GV02'),
('D21CQMR02-B', 'Marketing 02', '7340115', 'GV03'),
('D21CQTM01-B', 'Thương mại điện tử 01', '7340122', 'GV05'),
('D21CQTM02-B', 'Thương mại điện tử 02', '7340122', 'GV04'),
('D21ACCA01-B', 'Kế toán 01', '7340301', 'GV04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh`
--

CREATE TABLE `nganh` (
  `MaNganh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenNganh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaKhoa` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nganh`
--

INSERT INTO `nganh` (`MaNganh`, `TenNganh`, `MaKhoa`) VALUES
('7520207', 'Kỹ thuật Điện tử viễn thông', 'VT'),
('7510301', 'Công nghệ kỹ thuật Điện, điện tử', 'KTĐT'),
('7480201', 'Công nghệ thông tin', 'CNTT'),
('7480202', 'An toàn thông tin', 'ATTT'),
('7329001', 'Công nghệ đa phương tiện', 'ĐPT'),
('7320104', 'Truyền thông đa phương tiện', 'ĐPT'),
('7320101', 'Báo chí', 'TCKT'),
('7340101', 'Quản trị kinh doanh', 'QTKD'),
('7340122', 'Thương mại điện tử ', 'QTKD'),
('7340115', 'Marketing', 'QTKD'),
('7340301', 'Kế toán', 'TCKT'),
('7340205', 'Công nghệ tài chính (Fintech)', 'TCKT'),
('7480201_CLC', 'Công nghệ thông tin CLC ', 'CNTT'),
('7340115_CLC', 'Marketing CLC', 'QTKD');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TenSV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `QueQuan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DanToc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TonGiao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SoCMT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NoiCapCMT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Email` text COLLATE utf8_unicode_ci NOT NULL,
  `DoiTuongMG` int(11) NOT NULL,
  `MaLop` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaNganh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `TenSV`, `GioiTinh`, `NgaySinh`, `QueQuan`, `DanToc`, `TonGiao`, `SoCMT`, `NoiCapCMT`, `SDT`, `Email`, `DoiTuongMG`, `MaLop`, `MaNganh`) VALUES
('B21DCCN001', 'Nguyễn Thị Hồng Anh', 'Nữ', '2003-11-21', 'Lạng Sơn', 'Kinh', 'Không', '034201007001', 'Lạng Sơn', '0326760976', 'honganh2003@gmail.com', 0, 'D21CQCN01-B', '7480201'),
('B21DCCN002', 'Trần Ngọc Anh', 'Nam', '2003-09-21', 'Bắc Ninh', 'Kinh', 'Không', '034201007002', 'Bắc Ninh', '0914817819', 'tranngocanh21092003@gmail.com', 0, 'D21CQCN01-B', '7480201'),
('B21DCCN003', 'Phạm Bá Chiên', 'Nam', '2003-04-30', 'Hải Dương', 'Kinh', 'Không', '034201007003', 'Hải Dương', '0888736149', 'langtu2k1@gmail.com', 0, 'D21CQCN02-B', '7480201'),
('B21DCCN004', 'Trịnh Quý Công', 'Nam', '2003-01-03', 'Hà Nội', 'Kinh', 'Không', '034201007004', 'Hà Nội', '0342219200', 'trinhquycong@gmail.com', 0, 'D21CQCN02-B', '7480201'),
('B21DCCN005', 'Ngô Quốc Đại', 'Nam', '2003-11-03', 'Bắc Ninh', 'Kinh', 'Không', '034201007005', 'Bắc Ninh', '0385898793', 'ngodaibg2003@gmail.com', 1, 'D21CQCN02-B', '7480201'),
('B21DCAT006', 'Nguyễn Văn Đạt', 'Nam', '2003-07-10', 'Thái Bình', 'Kinh', 'Không', '034201007006', 'Thái Bình', '0333627741', 'dnguyenvan344@gmail.com', 0, 'D21CQAT01-B', '7480202'),
('B21DCAT007', 'Lương Cao Đức', 'Nam', '2003-04-25', 'Hải Phòng', 'Kinh', 'Không', '034201007007', 'Hải Phòng', '0936644059', 'luongduc0401@gmail.com', 0, 'D21CQAT01-B', '7480202'),
('B21DCAT008', 'Phí Đức Dũng', 'Nam', '2003-12-17', 'Hà Nội', 'Kinh', 'Không', '034201007008', 'Hà Nội', '0584742620', 'đucung171201@gmail.com', 0, 'D21CQAT02-B', '7480202'),
('B21DCAT009', 'Đào Xuân Dương', 'Nam', '2003-09-11', 'Bắc Ninh', 'Kinh', 'Không', '034201007009', 'Bắc Ninh', '0977032969', 'dãouanduong2003@gmail.com', 0, 'D21CQAT02-B', '7480202'),
('B21DCAT010', 'Nguyễn Văn Dương', 'Nam', '2003-06-11', 'Bắc Giang', 'Kinh', 'Không', '034201007010', 'Bắc Giang', '0961179646', 'duongnguyen@gmail.com', 0, 'D21CQAT02-B', '7480202'),
('B21DCVT011', 'Nguyễn Quốc Duy', 'Nam', '2003-09-25', 'Bắc Ninh', 'Kinh', 'Không', '034201007011', 'Bắc Ninh', '0936872601', 'duytogbbn1234569@gmail.com', 0, 'D21CQVT01-B', '7520207'),
('B21DCVT012', 'Vũ Ngọc Duyệt', 'Nam', '2003-03-01', 'Hưng Yên', 'Kinh', 'Không', '034201007012', 'Hưng Yên', '0379446167', 'vungocduyet@gmail.com', 0, 'D21CQVT01-B', '7520207'),
('B21DCVT013', 'Hoàng Tuấn Hà', 'Nam', '2003-11-21', 'Thái Nguyên', 'Kinh', 'Không', '034201007013', 'Thái Nguyên', '0343555370', 'tuanha.211101@gmail.com', 1, 'D21CQVT01-B', '7520207'),
('B21DCVT014', 'Vũ Thị Ngọc Hà', 'Nữ', '2003-10-05', 'Hải Dương', 'Kinh', 'Không', '034201007014', 'Hải Dương', '0382309012', 'hagauvg@gmail.com', 0, 'D21CQVT02-B', '7520207'),
('B21DCVT015', 'Phạm Thị Quỳnh Hoa', 'Nữ', '2003-03-02', 'Thái Bình', 'Kinh', 'Không', '034201007015', 'Thái Bình', '0386756326', 'quynhhoa020305@gmail.com', 0, 'D21CQVT02-B', '7520207'),
('B21DCPT016', 'Nguyễn Văn Hồng', 'Nam', '2003-06-19', 'Quảng Ninh', 'Kinh', 'Không', '034201007016', 'Quảng Ninh', '0344811291', 'nguyenhongpf@gmail.com', 0, 'D21CQPT01-B', '7329001'),
('B21DCPT017', 'Nguyễn Văn Hùng', 'Nam', '2003-08-28', 'Thái Bình', 'Kinh', 'Không', '034201007017', 'Thái Bình', '0971412322', 'hugdz280801@gmail.com', 0, 'D21CQPT01-B', '7329001'),
('B21DCPT018', 'Nguyễn Đào Quang Huy', 'Nam', '2003-04-18', 'Hà Nội', 'Kinh', 'Không', '034201007018', 'Hà Nội', '0968921551', 'anhhuytu2003@gmail.com', 0, 'D21CQPT02-B', '7329001'),
('B21DCPT019', 'Phan Quốc Khánh', 'Nam', '2003-10-24', 'Nghệ An', 'Kinh', 'Không', '034201007019', 'Nghệ An', '0327018337', 'khanhphanquoc@gmail.com', 0, 'D21CQPT02-B', '7329001'),
('B21DCPT020', 'Trịnh Hồng Khanh', 'Nam', '2003-11-03', 'Nam Định', 'Kinh', 'Không', '034201007020', 'Nam Định', '0866593103', 'trinhhongkhanh@gmail.com', 0, 'D21CQPT02-B', '7329001'),
('B21DCDT021', 'Chu Văn Nam', 'Nam', '2003-10-10', 'Vĩnh Phúc', 'Kinh', 'Không', '034201007021', 'Vĩnh Phúc', '0973361251', 'chunam1339@gmail.com', 0, 'D21CQDT01-B', '7510301'),
('B21DCDT022', 'Nguyễn Trọng Ngà', 'Nam', '2003-10-10', 'Vĩnh Phúc', 'Kinh', 'Không', '034201007022', 'Vĩnh Phúc', '0365773435', 'nguyentrongnga1010@gmail.com', 0, 'D21CQDT01-B', '7510301'),
('B21DCDT023', 'Nguyễn Dương Trọng Nghĩa', 'Nam', '2003-12-10', 'Hà Nội', 'Kinh', 'Không', '034201007023', 'Hà Nội', '0388743723', 'trongnghia101201@gmail.com', 0, 'D21CQDT02-B', '7510301'),
('B21DCDT024', 'Trần Đức Nghĩa', 'Nam', '2003-04-10', 'Hà Nội', 'Kinh', 'Không', '034201007024', 'Hà Nội', '0966983962', 'trannghia1004@gmail.com', 0, 'D21CQDT02-B', '7510301'),
('B21DCDT025', 'Trần Văn Nghiệp', 'Nam', '2003-04-10', 'Thái Nguyên', 'Kinh', 'Công giáo', '034201007025', 'Thái Nguyên', '0837841230', 'vannghiepdzl@gmail.com', 1, 'D21CQDT02-B', '7510301'),
('B21DCMR026', 'Hà Quốc Phong', 'Nam', '2003-04-16', 'Hà Nam', 'Kinh', 'Không', '034201007026', 'Hà Nam', '0968661074', 'haphong160401@gmail.com', 0, 'D21CQMR01-B', '7340115'),
('B21DCMR027', 'Lê Hồng Phú', 'Nam', '2003-05-02', 'Hải Dương', 'Kinh', 'Không', '034201007027', 'Hải Dương', '0367769261', 'phuhd2k1@gmail.com', 0, 'D21CQMR01-B', '7340115'),
('B21DCMR028', 'Nguyễn Văn Phước', 'Nam', '2003-12-15', 'Bắc Ninh', 'Kinh', 'Không', '034201007028', 'Bắc Ninh', '0982695445', 'phuocpersie@gmail.com', 0, 'D21CQMR01-B', '7340115'),
('B21DCMR029', 'Nguyễn Bá Quang', 'Nam', '2003-01-01', 'Thái Nguyên', 'Kinh', 'Không', '034201007029', 'Thái Nguyên', '0356402300', 'quangtn001@gmail.com', 0, 'D21CQMR01-B', '7340115'),
('B21DCMR030', 'Trần Xuân Quyền', 'Nam', '2003-07-02', 'Nam Định', 'Kinh', 'Không', '034201007030', 'Nam Định', '0898720336', 'tranxuanquyen1@gmail.com', 0, 'D21CQMR02-B', '7340115'),
('B21DCTM031', 'Mai Quý Tân', 'Nam', '2003-05-21', 'Thái Bình', 'Kinh', 'Không', '034201007031', 'Thái Bình', '0865460129', 'maiquytan123@gmail.com', 0, 'D21CQTM01-B', '7340122'),
('B21DCTM032', 'Nguyễn Văn Tân', 'Nam', '2003-04-12', 'Nghệ An', 'Kinh', 'Không', '034201007032', 'Nghệ An', '0376737564', 'tannguyen1204@gmail.com', 0, 'D21CQTM01-B', '7340122'),
('B21DCTM033', 'Nguyễn Đăng Thái', 'Nam', '2003-09-01', 'Bắc Ninh', 'Kinh', 'Không', '034201007033', 'Bắc Ninh', '0947434418', 'thainguyen1901a5@gmail.com', 0, 'D21CQTM02-B', '7340122'),
('B21DCTM001', 'Lê Ngọc Thức', 'Nam', '2003-02-12', 'Thanh Hóa', 'Kinh', 'Không', '034202007001', 'Thanh Hóa', '0822290980', 'thucstun@gmail.com', 0, NULL, '7340122'),
('B21DCTM002', 'Nguyễn Xuân Tình', 'Nam', '2003-07-27', 'Bắc Ninh', 'Kinh', 'Không', '034202007002', 'Bắc Ninh', '0856829972', 'acceptyahoo@gmail.com', 0, NULL, '7340122'),
('B21DCTM003', 'Nguyễn Xuân Trường', 'Nam', '2003-09-18', 'Hà Nội', 'Kinh', 'Không', '034202007003', 'Hà Nội', '0988506821', 'ngxuantruong1809@gmail.com', 0, NULL, '7340122'),
('B21DCTM004', 'Nguyễn Văn Tú', 'Nam', '2003-05-23', 'Bắc Giang', 'Kinh', 'Không', '034202007004', 'Bắc Giang', '0865756514', 'tudu2305@gmail.com', 0, NULL, '7340122'),
('B21DCTM005', 'Vũ Thái Tuấn', 'Nam', '2003-03-23', 'Thái Bình', 'Kinh', 'Không', '034202007005', 'Thái Bình', '0865629845', 'tuanlazy8320@gmail.com', 0, NULL, '7340122'),
('B21ACCA006', 'Đoàn Văn Tùng', 'Nam', '2003-12-10', 'Vĩnh Phúc', 'Kinh', 'Không', '034202007006', 'Vĩnh Phúc', '0382134277', 'tungdoanvan1210@gmail.com', 0, 'D21ACCA01-B', '7340301'),
('B21ACCA007', 'Hoàng Minh Tuyến', 'Nam', '2003-07-04', 'Thái Bình', 'Kinh', 'Công giáo', '034202007007', 'Thái Bình', '0969650089', 'tuyenminh0407@gmail.com', 0, NULL, '7340301'),
('B21ACCA008', 'Mai Đình Vinh', 'Nam', '2003-10-02', 'Thanh Hóa', 'Kinh', 'Không', '034202007008', 'Thanh Hóa', '0353680281', 'vinhtdinht@gmail.com', 0, NULL, '7340301');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thesv`
--

CREATE TABLE `thesv` (
  `MaSo` int(11) NOT NULL,
  `MaSV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TrangThai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgayCap` date DEFAULT NULL,
  `GhiChu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thesv`
--

INSERT INTO `thesv` (`MaSo`, `MaSV`, `TrangThai`, `NgayCap`, `GhiChu`) VALUES
(1, 'B21DCCN001', 'Đã cấp', '2021-11-01', 'Không'),
(2, 'B21DCCN002', 'Đã cấp', '2021-11-01', 'Không'),
(3, 'B21DCCN003', 'Đã cấp', '2021-11-01', 'Không'),
(4, 'B21DCCN004', 'Đã cấp', '2021-11-01', 'Không'),
(5, 'B21DCCN005', 'Đã cấp', '2021-11-01', 'Không'),
(6, 'B21DCAT006', 'Chờ cấp lại', NULL, 'Mất thẻ'),
(7, 'B21DCAT007', 'Đã cấp', '2021-11-01', 'Không'),
(8, 'B21DCAT008', 'Đã cấp', '2021-11-01', 'Không'),
(9, 'B21DCAT009', 'Đã cấp', '2021-11-01', 'Không'),
(10, 'B21DCAT010', 'Chờ cấp lại', NULL, 'Mất thẻ'),
(11, 'B21DCVT011', 'Chờ cấp lại', NULL, 'Mất thẻ'),
(12, 'B21DCVT012', 'Chờ cấp lại', NULL, 'Mất thẻ'),
(13, 'B21DCVT013', 'Đã cấp', '2021-11-01', 'Không'),
(14, 'B21DCVT014', 'Đã cấp', '2021-11-01', 'Không'),
(15, 'B21DCVT015', 'Đã cấp', '2021-11-01', 'Không'),
(16, 'B21DCPT016', 'Đã cấp', '2021-11-01', 'Không'),
(17, 'B21DCPT017', 'Đã cấp', '2021-11-01', 'Không'),
(18, 'B21DCPT018', 'Đã cấp', '2021-11-01', 'Không'),
(19, 'B21DCPT019', 'Đã cấp', '2021-11-01', 'Không'),
(20, 'B21DCPT020', 'Đã cấp', '2021-11-01', 'Không'),
(21, 'B21DCDT021', 'Đã cấp', '2021-11-01', 'Không'),
(22, 'B21DCDT022', 'Đã cấp', '2021-11-01', 'Không'),
(23, 'B21DCDT023', 'Đã cấp', '2021-11-01', 'Không'),
(24, 'B21DCDT024', 'Chờ cấp lại', NULL, 'Mất thẻ'),
(25, 'B21DCDT025', 'Đã cấp', '2021-11-01', 'Không'),
(26, 'B21DCMR026', 'Đã cấp', '2021-11-01', 'Không'),
(27, 'B21DCMR027', 'Đã cấp', '2021-11-01', 'Không'),
(28, 'B21DCMR028', 'Chờ cấp lại', NULL, 'Mất thẻ'),
(29, 'B21DCMR029', 'Đã cấp', '2021-11-01', 'Không'),
(30, 'B21DCMR030', 'Đã cấp', '2021-11-01', 'Không'),
(31, 'B21DCTM031', 'Đã cấp', '2021-11-01', 'Không'),
(32, 'B21DCTM032', 'Chờ cấp lại', NULL, 'Mất thẻ'),
(33, 'B21DCTM033', 'Đã cấp', '2021-11-01', 'Không'),
(34, 'B21DCTM001', 'Chờ cấp thẻ', NULL, 'Sinh viên mới nhập học'),
(35, 'B21DCTM002', 'Chờ cấp thẻ', NULL, 'Sinh viên mới nhập học'),
(36, 'B21DCTM003', 'Chờ cấp thẻ', NULL, 'Sinh viên mới nhập học'),
(37, 'B21DCTM004', 'Chờ cấp thẻ', NULL, 'Sinh viên mới nhập học'),
(38, 'B21DCTM005', 'Chờ cấp thẻ', NULL, 'Sinh viên mới nhập học'),
(39, 'B21ACCA006', 'Chờ cấp thẻ', NULL, 'Sinh viên mới nhập học'),
(40, 'B21ACCA007', 'Chờ cấp thẻ', NULL, 'Sinh viên mới nhập học'),
(41, 'B21ACCA008', 'Chờ cấp thẻ', NULL, 'Sinh viên mới nhập học');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `full_name`) VALUES
(1, 'phamhuyhoa03', 'Huyhoa03', 'Phạm Huy Hòa'),
(2, 'huyhoa1010', 'Huyhoa03', 'Phạm Huy Hòa'),
(3, 'Admin123', 'Admin123', 'Admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `canhcao`
--
ALTER TABLE `canhcao`
  ADD PRIMARY KEY (`SoBanGhi`),
  ADD KEY `MaSV` (`MaSV`);

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`SoBanGhi`),
  ADD KEY `MaSV` (`MaSV`);

--
-- Chỉ mục cho bảng `gvcn`
--
ALTER TABLE `gvcn`
  ADD PRIMARY KEY (`MaGV`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `MaGV` (`MaGV`),
  ADD KEY `MaNganh` (`MaNganh`);

--
-- Chỉ mục cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`MaNganh`),
  ADD KEY `MaKhoa` (`MaKhoa`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `MaNganh` (`MaNganh`),
  ADD KEY `MaLop` (`MaLop`);

--
-- Chỉ mục cho bảng `thesv`
--
ALTER TABLE `thesv`
  ADD PRIMARY KEY (`MaSo`),
  ADD KEY `MaSV` (`MaSV`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `canhcao`
--
ALTER TABLE `canhcao`
  MODIFY `SoBanGhi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `canhcao`
--
ALTER TABLE `canhcao`
  ADD CONSTRAINT `canhcao_ibfk_1` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`);

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`);

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `gvcn` (`MaGV`),
  ADD CONSTRAINT `lop_ibfk_2` FOREIGN KEY (`MaNganh`) REFERENCES `nganh` (`MaNganh`);

--
-- Các ràng buộc cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD CONSTRAINT `nganh_ibfk_1` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`MaNganh`) REFERENCES `nganh` (`MaNganh`),
  ADD CONSTRAINT `sinhvien_ibfk_2` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`);

--
-- Các ràng buộc cho bảng `thesv`
--
ALTER TABLE `thesv`
  ADD CONSTRAINT `thesv_ibfk_1` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
