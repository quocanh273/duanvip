-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 07:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_bl` int(20) NOT NULL,
  `noi_dung` text NOT NULL,
  `id_user` int(20) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngay_bluan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`id_bl`, `noi_dung`, `id_user`, `idpro`, `ngay_bluan`) VALUES
(1, 'abc', 0, 45, ''),
(2, 'abc', 27, 45, ''),
(3, 'Đẹp quá', 29, 68, ' 29/11/2023'),
(4, 'Đẹp quá', 30, 74, ' 01/12/2023'),
(5, 'ô hay đẹp ghê', 30, 76, ' 04/12/2023'),
(8, 'abc', 29, 75, ' 05/12/2023'),
(10, 'phuc đẹp trai2', 34, 66, ' 05/12/2023'),
(11, 'phuc đẹp trai', 34, 66, ' 05/12/2023'),
(13, 'đẹp thees', 29, 76, ' 06/12/2023');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name_product` varchar(222) NOT NULL,
  `price` int(222) NOT NULL,
  `size` varchar(100) NOT NULL,
  `quantity` int(111) NOT NULL,
  `id_hoadon` int(11) NOT NULL,
  `id_nguoidung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name_product`, `price`, `size`, `quantity`, `id_hoadon`, `id_nguoidung`) VALUES
(84, 'Set Nữ 3', 45, 'XS', 1, 71, 29),
(85, 'Set Nữ 3', 45, 'XS', 1, 72, 29),
(86, 'Set Nam 11', 45, 'XS', 1, 73, 29),
(87, 'Set Nữ 3', 45, 'XS', 1, 74, 29),
(88, 'Set Nữ 3', 45, 'XS', 11, 75, 29),
(89, 'Set Nữ 3', 45, 'XS', 1, 76, 32),
(90, 'Set Nữ 3', 45, 'XS', 3, 77, 32),
(91, 'Set Nam 8', 85, 'XS', 1, 78, 29),
(92, 'Set Nữ 3', 45, 'XS', 1, 79, 29),
(93, 'Set Nữ 3', 45, 'XS', 1, 80, 29),
(94, 'Set Nữ 2', 45, 'XS', 1, 81, 29),
(95, 'Set Nữ 2', 45, 'XS', 2, 82, 30),
(96, 'Set Nữ 1', 52, 'XS', 1, 83, 30),
(97, 'Set Nam 11', 45, 'XS', 1, 83, 30),
(98, 'Set Nữ 2', 45, 'S', 2, 84, 30),
(99, 'Set Nữ 3', 45, 'M', 3, 85, 30),
(100, 'Set Nữ 2', 45, 'XS', 2, 87, 30),
(101, 'Set Nữ 2', 45, 'XS', 1, 88, 30),
(102, 'Set Nữ 2', 45, 'XL', 2, 96, 30),
(103, 'Set Nữ 2', 45, 'XS', 5, 97, 30),
(104, 'Set Nữ 2', 45, 'XS', 2, 98, 29),
(105, 'Set Nữ 2', 45, 'XS', 1, 99, 29),
(106, 'Set Nam 9', 54, 'XS', 1, 100, 29),
(107, 'Set Nữ 2', 45, 'XS', 2, 101, 29),
(108, 'Set Nữ 2', 45, 'XS', 2, 102, 29),
(109, 'Set Nữ 1', 52, 'XS', 3, 103, 29),
(110, 'Set Nam 11', 45, 'XS', 4, 104, 34),
(111, 'Set Nữ 2', 45, 'S', 3, 104, 34),
(112, 'Set Nữ 3', 45, 'XS', 5, 105, 29),
(113, 'Set Nữ 3', 45, 'S', 4, 106, 29),
(114, 'Set Nữ 2', 45, 'XS', 6, 107, 29),
(115, 'Set Nữ 2', 45, 'XS', 2, 108, 29),
(116, 'Set Nữ 1', 52, 'S', 4, 108, 29),
(117, 'Set Nữ 1', 52, 'XS', 1, 109, 29),
(118, 'Set Nữ 2', 45, 'XS', 1, 110, 29),
(119, 'Set Nữ 2', 45, 'S', 2, 112, 29),
(120, 'Set Nữ 2', 45, 'XS', 1, 114, 29),
(121, 'Set Nam 8', 85, 'XS', 2, 116, 29),
(122, 'Set Nữ 2', 45, 'XS', 1, 117, 29),
(123, 'Set Nữ 2', 45, 'XS', 2, 89, 29),
(124, 'Set Nữ 2', 45, 'XS', 2, 90, 29),
(125, 'Set Nữ 2', 45, 'XS', 2, 91, 29),
(126, 'Set Nữ 1', 52, 'XS', 4, 92, 29),
(127, 'Set Nam 4', 45, 'XS', 2, 92, 29),
(128, 'Set Nữ 2', 45, 'XS', 3, 94, 29),
(129, 'Set Nữ 2', 45, 'XS', 2, 95, 29),
(130, 'Set Nữ 1', 52, 'XS', 3, 96, 29),
(131, 'Set Nữ 2', 45, 'XS', 2, 97, 29),
(132, 'Set Nữ 2', 45, 'XS', 3, 98, 34),
(133, 'Set Nữ 2', 45, 'XS', 4, 99, 34),
(134, 'Set Nữ 1', 52, 'XS', 1, 99, 34);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ten_nguoi_dung` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `so_dien_thoai` int(200) NOT NULL,
  `tong_gt_hd` double(10,2) NOT NULL,
  `trang_thai` varchar(255) NOT NULL,
  `quan_huyen` varchar(200) NOT NULL,
  `xa_phuong` varchar(200) NOT NULL,
  `tinh_thanhpho` varchar(200) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `pt_tt` varchar(255) NOT NULL,
  `thong_tin_km` varchar(255) NOT NULL,
  `ngay_thd` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `id_user`, `idpro`, `ten_nguoi_dung`, `email`, `so_dien_thoai`, `tong_gt_hd`, `trang_thai`, `quan_huyen`, `xa_phuong`, `tinh_thanhpho`, `dia_chi`, `pt_tt`, `thong_tin_km`, `ngay_thd`) VALUES
(95, 29, 0, 'phuc', 'phuc@gmail.com', 923357203, 90.00, 'Đặt hàng thành công', 'huyen', 'binh xuyen', 'Son loi', 'Bcyigotoyio', 'Thanh Toán Khi Nhận Hàng', '', '2023-12-06'),
(96, 29, 0, 'ANh phúc kaka', 'Anhphuc@gmail.com', 923357203, 156.00, 'Đặt hàng thành công', 'ai van', 'binh xuyen', 'Son loi', 'Bcyigotoyio', 'Thanh Toán Khi Nhận Hàng', '', '2023-12-06'),
(97, 29, 0, 'Phuc123asfasf', 'phuc@gmail.com111', 923357203, 90.00, 'Đặt hàng thành công', 'g', 'acb', 'g', 'Bcyigotoyio', 'Thanh Toán Khi Nhận Hàng', '', '2023-12-06'),
(98, 34, 0, 'Phuc', 'anh@gmail.com', 923357203, 135.00, 'Đặt hàng thành công', 'huyen', 'acb', 'Son loi', 'Son loi binh xuyen vinh phúc', 'Ngân Hàng', '', '2023-12-06'),
(99, 34, 0, 'Phuc123asfasf', 'anh@gmail.com', 923357204, 232.00, 'Đặt hàng thành công', 'huyen', 'binh xuyen', 'abc', 'Son loi binh xuyen vinh phúc', 'Thanh Toán Khi Nhận Hàng', '', '2023-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `img` text NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`img`, `ma_loai`, `ten_loai`) VALUES
('anhdm1.jpg', 1049, 'Quần áo nam'),
('anhdm2.jpg', 1050, 'Quần áo nữ');

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `ten_dang_nhap` text NOT NULL,
  `so_dien_thoai` int(20) NOT NULL,
  `id` int(10) NOT NULL,
  `ten_nguoi_dung` varchar(255) NOT NULL,
  `mat_khau` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `dia_chi` varchar(400) NOT NULL,
  `img` text DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`ten_dang_nhap`, `so_dien_thoai`, `id`, `ten_nguoi_dung`, `mat_khau`, `email`, `ngay_sinh`, `dia_chi`, `img`, `role`) VALUES
('Anhphuc', 123456, 29, 'phuc', '46748', 'phuc@gmail', '2023-11-01', 'Bcyigotoyio', 'ronaldo-2086-2950.jpg', 1),
('nqp27', 92357209, 34, 'Phuc', '123456', 'anh@gmail.com', '2023-12-06', 'Son loi binh xuyen vinh phúc', 'ronaldo_ghana.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `mo_ta` text NOT NULL,
  `gia` double(10,2) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `trangthai` varchar(20) NOT NULL,
  `thong_tin_km` varchar(255) NOT NULL,
  `ma_loai` int(10) NOT NULL,
  `loai_sp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten_san_pham`, `mo_ta`, `gia`, `so_luong`, `img`, `trangthai`, `thong_tin_km`, `ma_loai`, `loai_sp`) VALUES
(85, 'Jeans Basics dáng ', 'Đặc điểm nổi bật\r\nChất liệu: Denim\r\nThành phần: 98% Cotton + 2% Spandex\r\nCông nghệ Laser Marking tạo các vệt hiệu ứng chuẩn xác trên sản phẩm\r\nBề mặt quần không thô ráp\r\nCo giãn tốt giúp quần ôm vừa vặn, thoải mái\r\nDáng Regular Straight suông rộng, thoải mái, không thùng thình\r\nNgười mẫu: 179 cm - 75 kg, mặc quần size 32\r\nTự hào sản xuất tại Việt Nam\r\nLưu ý:Sản phẩm vẫn sẽ bạc màu sau một thời gian dài sử dụng theo tính chất tự nhiên', 490.00, 1000, 'L1.jpg', '', '10%', 1049, NULL),
(86, 'Polo Ice Cooling', 'Đặc điểm nổi bật\r\nThành phần: 85% Polyamide + 15% Spandex\r\nVải được xử lý hoàn thiện tính năng Thấm hút (Wicking) và Nhanh khô (Ex-Dry)\r\nĐường lai tay và lai áo cắt laser được ép seam hiện đại\r\nKiểu dệt Pique thoáng khí, mang đến cảm giác mát mẻ khi mặc\r\nVải có độ bền cao, hạn chế co rút và chống nhăn tốt\r\nTự hào sản xuất tại Việt Nam\r\nNgười mẫu: 182 cm - 76 kg, mặc áo 2XL', 349.00, 100, 'l2.jpg', 'Còn Hàng', '5%', 1049, NULL),
(87, 'Áo nỉ chui đầu Essentials', 'Đặc điểm nổi bật\r\nChất liệu: vải nỉ chân cua\r\nThành phần: 62% Cotton + 38% Polyester\r\nĐịnh lượng vải: 360gsm dày dặn\r\nKhả năng giữ nhiệt tốt, giữ ấm cơ thể\r\nChống nhăn và hạn chế xù lông mặt vải\r\nVải có độ bền cao, không bai nhão\r\nForm: Regular, ôm nhẹ\r\nTự hào sản xuất tại Việt Nam\r\nNgười mẫu: 1m77 - 69kg, mặc áo 2XL', 249.00, 100, 'l3.jpg', 'Còn Hàng', '5%', 1049, NULL),
(88, 'Áo khoác chạy bộ Fast', 'Đặc điểm nổi bật\r\nThành phần: 100% Polyester, định lượng 40gsm\r\nKiểu dệt: Teffeta Ripstop Woven\r\nVải có tính năng trượt nước, chịu được các cơn mưa nhỏ\r\nVải xử lí hoàn thiện tính năng Nhanh khô (Quick-Dry)\r\nTrọng lượng áo siêu nhẹ chỉ 130 gam (cỡ 3XL)\r\nÁo mỏng giúp việc thoát hơi và làm khô nhanh hơn\r\nTự hào sản xuất tại Việt Nam\r\nNgười mẫu: 182 cm - 77kg, mặc áo 2XL, quần 2XL', 259.00, 100, 'l4.jpg', '', '5%', 1049, NULL),
(89, 'Jeans Basics dáng Slim', 'Chất liệu: Denim\r\nThành phần: 98% Cotton + 2% Spandex\r\nCông nghệ Laser Marking tạo các vệt hiệu ứng chuẩn xác trên sản phẩm\r\nVải Denim được wash trước khi may nên không rút và hạn chế ra màu sau khi giặt\r\nBề mặt quần không thô ráp\r\nCo giãn tốt giúp quần ôm vừa vặn, thoải mái\r\nDáng Slim Fit ôm tôn dáng, giúp bạn \"hack\" đôi chân dài và gọn đẹp\r\nNgười mẫu: 179 cm - 75 kg, mặc quần size 32\r\nTự hào sản xuất tại Việt Nam\r\nLưu ý:Sản phẩm vẫn sẽ bạc màu sau một thời gian dài sử dụng theo tính chất tự nhiên', 499.00, 100, 'l5.jpg', '', '5%', 1049, NULL),
(90, 'Quần Kaki Excool trượt nước', 'Đặc điểm nổi bật\r\nThành phần: 50% Polyester + 50% sợi Sorona\r\nSợi Sorona tự nhiên thoáng khí, mát mẻ\r\nVải được xử lí tính năng trượt nước\r\nCo giãn nhẹ, thoải mái\r\nForm dáng: Slim fit, ôm vừa vặn\r\nXem thêm về sợi Sorona tại đây >\r\nHiệu quả tính năng trượt nước giảm dần sau mỗi lần giặt\r\nTự hào sản xuất tại Việt Nam', 399.00, 100, 'l6.jpg', 'Còn Hàng', '5%', 1049, NULL),
(91, 'Áo khoác có mũ Daily Wear', 'Đặc điểm nổi bật\r\nChất liệu áo khoác nam có mũ Daily Wear: 100% Polyester\r\nCông nghệ ứng dụng: HeiQ Viro Block\r\nPhù hợp với: khoác ngoài chống nắng, tránh gió\r\nKiểu dáng: nhỏ gọn, dễ mặc\r\nTự hào sản xuất tại Việt Nam\r\nNgười mẫu: 182 cm - 76 kg, mặc áo 2XL', 699.00, 100, 'l7.jpg', 'Còn Hàng', '10%', 1049, NULL),
(92, 'Jeans Copper Denim Straight', 'Đặc điểm nổi bật\r\nChất liệu: 100% Cotton / 12 Oz\r\nDáng Straight: Dáng suông phóng thoáng, thoải mái, không thùng thình\r\nVải Denim được wash trước khi may nên không rút và hạn chế ra màu sau khi giặt\r\nCảm giác khi chạm mịn màng\r\nNgười mẫu: 175 cm - 69 kg, mặc áo XL, quần size 32\r\nTự hào sản xuất tại Việt Nam\r\nLưu ý: Sản phẩm vẫn sẽ bạc màu sau một thời gian dài sử dụng theo tính chất tự nhiên', 480.00, 100, 'l8.jpg', 'Còn Hàng', '5%', 1049, NULL),
(93, 'Sơ mi dài tay Café-DriS', 'Đặc điểm nổi bật\r\nChất liệu: 50% S.Café + 50% Recycled PET\r\nPhù hợp với: đi làm, đi chơi\r\nKiểu dáng: Regular fit dáng suông\r\nNgười mẫu: 177 cm - 74 kg, mặc size XL\r\nTự hào sản xuất tại Việt Nam', 399.00, 100, 'anh7.jpg', '', '10%', 1049, NULL),
(94, 'Polo thể thao V1', 'Đặc điểm nổi bật\r\nChất liệu: 100% Recycled Polyester\r\nĐịnh lượng vải 130gsm siêu nhẹ\r\nCông nghệ ứng dụng: Wicking & Quick-Dry\r\nKiểu dáng: áo Polo thể thao vừa vặn\r\nNhà cung cấp vải lĩnh vực đồ thể thao hàng đầu: Promax\r\nTự hào sản xuất tại Việt Nam * Xem nhà máy >\r\nNgười mẫu: 184 cm - 73 kg, mặc áo size 2XL', 599.00, 100, 'l10.jpg', 'Còn Hàng', '5%', 1049, NULL),
(95, 'Áo Khoác Chần Bông ', 'THÔNG TIN CHI TIẾT ÁO KHOÁC CHẦN BÔNG NỮ NYLON PHỐI MÀU FORM REGULAR - 10F23JACW004\r\nÁo Khoác Chần Bông Nữ Nylon Phối Màu Form Regular - 10F23JACW004 là một item cực hot dành cho các nàng khi đông về, bởi thiết kế ấm áp và đầy phong cách:\r\n\r\nChất liệu Nylon vô cùng ấm áp, có tính năng giữ nhiệt cực tốt, không lo bị cảm lạnh vào ngày đông lạnh giá\r\nForm áo thuộc dòng Regular có độ rộng vừa phải có thể phù hợp với mọi vóc dáng và nhẹ nhàng che đi những khuyết điểm cơ thể cho nàng\r\nChiếc cổ áo cao, có nút điều chỉnh tiện lợi, thiết kế khóa kéo ẩn đầy tinh tế \r\nTà áo được may xẻ và có nút để người mặc thoải mái diện theo phong cách riêng\r\nMẫu mã đẹp, hợp thời trang, có 2 màu basic tô điểm vẻ đẹp đơn giản, thanh lịch nhưng cũng không kém phần cá tính, sành điệu', 800.00, 100, 'n1.jpg', '', '10%', 1050, NULL),
(96, 'Đầm Nữ Nhún Vai ', 'THÔNG TIN CHI TIẾT ĐẦM NỮ NHÚN VAI TAY LỬNG CỔ V FORM FITTED - 10S21DREW006\r\nVáy đầm là loại trang phục không thể thiếu trong tủ đồ của các nàng. Chúng có thể được xem là một trong những loại trang phục có tuổi đời lâu nhất khi xuất hiện từ thế kỷ thứ nhất. Đi theo qua biết bao thời kì thay đổi, phát triển của thế giới, kiểu dáng và màu sắc của trang phục này cũng trở nên đa dạng, phong phú hơn. Váy đầm dần trở thành mẫu thiết kế được phái nữ ưa chuộng không chỉ vì sự phong phú, đa dạng mà chúng còn giúp tôn lên được vẻ đẹp nữ tính, thanh lịch và gợi cảm cho người phụ nữ.', 500.00, 1000, 'anh21.jpg', '', '5%', 1050, NULL),
(97, 'Đầm Midi Nữ Kiểu Sơ Mi ', 'THÔNG TIN CHI TIẾT ĐẦM MIDI NỮ KIỂU SƠ MI TAY DÀI KẺ SỌC FORM REGULAR - 10S23DREW008\r\nĐầm Midi Nữ Kiểu Sơ Mi Tay Dài Kẻ Sọc Form Regular - 10S23DREW008 được sử dụng chất vải tự nhiên nên đảm bảo độ thoáng mát và êm dịu cho làn da. Đầm được thiết kế theo form suông rộng khá thoải mái khi cử động, phần chân váy midi nhẹ và được xẻ tà bầu. Thiết kế kiểu sơ mi giúp chiếc đầm nổi bật được phong cách thanh lịch, chỉn chu và nữ tính hơn với tone màu pastel nhẹ nhàng. Nhìn chung, đây là chiếc đầm suông rộng khá dễ mặc, linh hoạt và thoải mái di chuyển, bạn có thể mặc đi làm, đi chơi hay đi học đều khá phù hợp.', 499.00, 100, 'anh3.jpg', '', '10%', 1050, NULL),
(98, 'Quần Kaki Nữ Trơn ', 'THÔNG TIN CHI TIẾT QUẦN KAKI NỮ TRƠN XẾP LY ĐÔI FORM WIDE LEG - 10S23PCAW016\r\nQuần Kaki Nữ Trơn Xếp Ly Đôi Form Wide Leg - 10S23PCAW016 là item dễ mặc giúp tôn dáng cực tốt với form quần suông rộng thẳng đứng. Chiếc quần được sử dụng chất vải 100% cotton nên đảm bảo độ thoáng mát và thấm hút mồ hôi tốt. Phần xếp ly đôi và túi đắp được may chắc chắn và sắc nét giúp tổng thể chiếc quần tinh tế và đẹp hơn. Quần kaki phù hợp để có thể diện trong nhiều dịp từ đi chơi, đi làm đến đi học bởi sự tiện lợi cao.', 600.00, 100, 'anh5.jpg', '', '10%', 1050, NULL),
(99, 'Áo Sơ Mi Nữ Tay Dài Vải ', 'THÔNG TIN CHI TIẾT ÁO SƠ MI NỮ TAY DÀI VẢI COFFEE TÚI ĐẮP TRƠN FORM LOOSE - 10S23SHLW025\r\nÁo Sơ Mi Nữ Tay Dài Coffee Túi Đắp Trơn Form Loose - 10S23SHLW025 với form dáng suông rộng mang lại sự thoải mái cho người mặc. Đặc biệt chính là chất vải coffee nhẹ bền, hấp thụ mùi cơ thể cực tốt và có khả năng chống tia UV cực tím hiệu quả. Đây cũng là một trong những chất vải xanh thân thiện môi trường được sử dụng phổ biến trong các sản phẩm cao cấp. Một sản phẩm được đánh giá cao không chỉ vì thiết kế đẹp mà chất vải thân thiện làn da, đặc biệt da chị em phụ nữ càng quan trọng hơn.', 700.00, 100, 'anh9.jpg', '', '10%', 1050, NULL),
(100, 'Áo Sweater Nữ Vải Nỉ ', 'THÔNG TIN CHI TIẾT ÁO SWEATER NỮ VẢI NỈ TAY DÀI TRƠN FORM REGULAR - 10F22SWEW001\r\nVải nỉ đã được phổ biến trên thị trường từ những năm 1990. Qua quá trình phát triển và cải tiến, vải nỉ đã chiếm lĩnh một phần không nhỏ trong thị trường vải vóc. Và trong lĩnh vực thời trang, nỉ thường được sử dụng để thiết kế nên các loại quần áo như áo hoodie, áo sweater, đồ trẻ em, đồ ngủ,...', 700.00, 1000, 'anh6.jpg', '', '10%', 1050, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_bl`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_iduser` (`id_user`),
  ADD KEY `lk_idprohd` (`idpro`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_bl` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1051;

--
-- AUTO_INCREMENT for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `lk_iduser` FOREIGN KEY (`id_user`) REFERENCES `nguoi_dung` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
