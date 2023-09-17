-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2022 lúc 10:03 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `csdl_travelbooking`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking_tour`
--

CREATE TABLE `booking_tour` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `booking_tour`
--

INSERT INTO `booking_tour` (`id`, `user_id`, `tour_id`, `quantity`, `total_price`, `time`) VALUES
(1, 1, 1, 3, '6000$', '05/10/2022'),
(2, 1, 8, 5, '7995$', '06/10/2022'),
(3, 4, 7, 1, '799$', '08/10/2022'),
(4, 4, 1, 4, '8000$', '08/10/2022'),
(5, 2, 4, 2, '1798$', '11/10/2022'),
(6, 2, 6, 5, '6495$', '13/10/2022'),
(7, 10, 1, 100, '200000$', '17/10/2022'),
(8, 3, 3, 1, '699$', '20/10/2022'),
(9, 1, 3, 1, '699$', '27/10/2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name_pr` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `img`, `name_pr`, `price`) VALUES
(3, 'xongnoi.jpg', 'Bộ xong nồi cắm trại', '19'),
(8, 'den2.jpg', 'Đèn pin', '15'),
(9, 'giay.jpg', 'Giày thể thao ', '18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `destination_name` varchar(255) NOT NULL,
  `img_main` varchar(255) NOT NULL,
  `img_1` varchar(255) NOT NULL,
  `img_2` varchar(255) NOT NULL,
  `img_3` varchar(255) NOT NULL,
  `img_4` varchar(255) NOT NULL,
  `img_5` varchar(255) NOT NULL,
  `img_6` varchar(255) NOT NULL,
  `img_7` varchar(255) NOT NULL,
  `img_8` varchar(255) NOT NULL,
  `destination_top` text NOT NULL,
  `destination_bot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `destinations`
--

INSERT INTO `destinations` (`id`, `destination_name`, `img_main`, `img_1`, `img_2`, `img_3`, `img_4`, `img_5`, `img_6`, `img_7`, `img_8`, `destination_top`, `destination_bot`) VALUES
(1, 'Vịnh Hạ Long', 'HL1.jpg', 'HL2.jpg', 'HL3.jpg', 'HL4.jpg', 'HL5.jpg', 'HL6.jpg', 'HL7.jpg', 'HL8.jpg', 'HL9.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac efficitur turpis. Suspendisse potenti. In sem metus, tristique vel justo at, aliquet viverra eros. Proin fermentum congue tortor ut mollis. Mauris in tellus sed est varius congue eu et tellus. Sed auctor sapien quis augue rhoncus mollis. Vestibulum vel viverra magna, ac tincidunt arcu. Aliquam erat volutpat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac efficitur turpis. Suspendisse potenti. In sem metus, tristique vel justo at, aliquet viverra eros. Proin fermentum congue tortor ut mollis. Mauris in tellus sed est varius congue eu et tellus. Sed auctor sapien quis augue rhoncus mollis. Vestibulum vel viverra magna, ac tincidunt arcu. Aliquam erat volutpat.'),
(2, 'Quần đảo Cát Bà', 'CB.jpg', 'CB.jpg', 'CB.jpg', 'CB.jpg', 'CB.jpg', 'CB.jpg', 'CB.jpg', 'CB.jpg', 'CB.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac efficitur turpis. Suspendisse potenti. In sem metus, tristique vel justo at, aliquet viverra eros. Proin fermentum congue tortor ut mollis. Mauris in tellus sed est varius congue eu et tellus. Sed auctor sapien quis augue rhoncus mollis. Vestibulum vel viverra magna, ac tincidunt arcu. Aliquam erat volutpat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac efficitur turpis. Suspendisse potenti. In sem metus, tristique vel justo at, aliquet viverra eros. Proin fermentum congue tortor ut mollis. Mauris in tellus sed est varius congue eu et tellus. Sed auctor sapien quis augue rhoncus mollis. Vestibulum vel viverra magna, ac tincidunt arcu. Aliquam erat volutpat.'),
(3, 'Mộc Châu', 'MC.jpg', 'MC.jpg', 'MC.jpg', 'MC.jpg', 'MC.jpg', 'MC.jpg', 'MC.jpg', 'MC.jpg', 'MC.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac efficitur turpis. Suspendisse potenti. In sem metus, tristique vel justo at, aliquet viverra eros. Proin fermentum congue tortor ut mollis. Mauris in tellus sed est varius congue eu et tellus. Sed auctor sapien quis augue rhoncus mollis. Vestibulum vel viverra magna, ac tincidunt arcu. Aliquam erat volutpat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac efficitur turpis. Suspendisse potenti. In sem metus, tristique vel justo at, aliquet viverra eros. Proin fermentum congue tortor ut mollis. Mauris in tellus sed est varius congue eu et tellus. Sed auctor sapien quis augue rhoncus mollis. Vestibulum vel viverra magna, ac tincidunt arcu. Aliquam erat volutpat.'),
(4, 'Sa Pa', 'SAPA.jpg', 'SAPA.jpg', 'SAPA.jpg', 'SAPA.jpg', 'SAPA.jpg', 'SAPA.jpg', 'SAPA.jpg', 'SAPA.jpg', 'SAPA.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac efficitur turpis. Suspendisse potenti. In sem metus, tristique vel justo at, aliquet viverra eros. Proin fermentum congue tortor ut mollis. Mauris in tellus sed est varius congue eu et tellus. Sed auctor sapien quis augue rhoncus mollis. Vestibulum vel viverra magna, ac tincidunt arcu. Aliquam erat volutpat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac efficitur turpis. Suspendisse potenti. In sem metus, tristique vel justo at, aliquet viverra eros. Proin fermentum congue tortor ut mollis. Mauris in tellus sed est varius congue eu et tellus. Sed auctor sapien quis augue rhoncus mollis. Vestibulum vel viverra magna, ac tincidunt arcu. Aliquam erat volutpat.'),
(5, 'Sầm Sơn', 'SS.jpg', 'SS.jpg', 'SS.jpg', 'SS.jpg', 'SS.jpg', 'SS.jpg', 'SS.jpg', 'SS.jpg', 'SS.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac efficitur turpis. Suspendisse potenti. In sem metus, tristique vel justo at, aliquet viverra eros. Proin fermentum congue tortor ut mollis. Mauris in tellus sed est varius congue eu et tellus. Sed auctor sapien quis augue rhoncus mollis. Vestibulum vel viverra magna, ac tincidunt arcu. Aliquam erat volutpat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac efficitur turpis. Suspendisse potenti. In sem metus, tristique vel justo at, aliquet viverra eros. Proin fermentum congue tortor ut mollis. Mauris in tellus sed est varius congue eu et tellus. Sed auctor sapien quis augue rhoncus mollis. Vestibulum vel viverra magna, ac tincidunt arcu. Aliquam erat volutpat.'),
(6, 'Nha Trang', 'NT.jpg', 'NT.jpg', 'NT.jpg', 'NT.jpg', 'NT.jpg', 'NT.jpg', 'NT.jpg', 'NT.jpg', 'NT.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac efficitur turpis. Suspendisse potenti. In sem metus, tristique vel justo at, aliquet viverra eros. Proin fermentum congue tortor ut mollis. Mauris in tellus sed est varius congue eu et tellus. Sed auctor sapien quis augue rhoncus mollis. Vestibulum vel viverra magna, ac tincidunt arcu. Aliquam erat volutpat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac efficitur turpis. Suspendisse potenti. In sem metus, tristique vel justo at, aliquet viverra eros. Proin fermentum congue tortor ut mollis. Mauris in tellus sed est varius congue eu et tellus. Sed auctor sapien quis augue rhoncus mollis. Vestibulum vel viverra magna, ac tincidunt arcu. Aliquam erat volutpat.'),
(7, 'Đà Nẵng', 'ĐN.jpg', 'ĐN.jpg', 'ĐN.jpg', 'ĐN.jpg', 'ĐN.jpg', 'ĐN.jpg', 'ĐN.jpg', 'ĐN.jpg', 'ĐN.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac efficitur turpis. Suspendisse potenti. In sem metus, tristique vel justo at, aliquet viverra eros. Proin fermentum congue tortor ut mollis. Mauris in tellus sed est varius congue eu et tellus. Sed auctor sapien quis augue rhoncus mollis. Vestibulum vel viverra magna, ac tincidunt arcu. Aliquam erat volutpat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac efficitur turpis. Suspendisse potenti. In sem metus, tristique vel justo at, aliquet viverra eros. Proin fermentum congue tortor ut mollis. Mauris in tellus sed est varius congue eu et tellus. Sed auctor sapien quis augue rhoncus mollis. Vestibulum vel viverra magna, ac tincidunt arcu. Aliquam erat volutpat.'),
(8, 'Phú Quốc', 'PQ.jpg', 'PQ.jpg', 'PQ.jpg', 'PQ.jpg', 'PQ.jpg', 'PQ.jpg', 'PQ.jpg', 'PQ.jpg', 'PQ.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac efficitur turpis. Suspendisse potenti. In sem metus, tristique vel justo at, aliquet viverra eros. Proin fermentum congue tortor ut mollis. Mauris in tellus sed est varius congue eu et tellus. Sed auctor sapien quis augue rhoncus mollis. Vestibulum vel viverra magna, ac tincidunt arcu. Aliquam erat volutpat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac efficitur turpis. Suspendisse potenti. In sem metus, tristique vel justo at, aliquet viverra eros. Proin fermentum congue tortor ut mollis. Mauris in tellus sed est varius congue eu et tellus. Sed auctor sapien quis augue rhoncus mollis. Vestibulum vel viverra magna, ac tincidunt arcu. Aliquam erat volutpat.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `time_start` date NOT NULL,
  `destinations` varchar(200) NOT NULL,
  `val` varchar(10) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `locations`
--

INSERT INTO `locations` (`id`, `location_name`, `time_start`, `destinations`, `val`, `img`) VALUES
(1, 'Vịnh Hạ Long', '2022-09-04', 'Chuyến du lịch thú vị cùng những trải nghiệm tuyệt vời bên gia đình', 'AL', 'VHL.jpg'),
(2, 'Quần đảo Cát Bà', '2022-09-14', 'Chuyến du lịch thú vị cùng những trải nghiệm tuyệt vời bên gia đình', 'AK', 'CB.jpg'),
(3, 'Mộc Châu', '2022-09-14', 'Chuyến du lịch thú vị cùng những trải nghiệm tuyệt vời bên gia đình', 'AZ', 'MC.jpg'),
(4, 'Sa Pa', '2022-09-14', 'Chuyến du lịch thú vị cùng những trải nghiệm tuyệt vời bên gia đình', 'AR', 'SAPA.jpg'),
(5, 'Sầm Sơn', '2022-09-14', 'Chuyến du lịch thú vị cùng những trải nghiệm tuyệt vời bên gia đình', 'CA', 'SS.jpg'),
(6, 'Nha Trang', '2022-09-14', 'Chuyến du lịch thú vị cùng những trải nghiệm tuyệt vời bên gia đình', 'CO', 'NT.jpg'),
(7, 'Đà Nẵng', '2022-09-14', 'Chuyến du lịch thú vị cùng những trải nghiệm tuyệt vời bên gia đình', 'CT', 'ĐN.jpg'),
(8, 'Phú Quốc', '2022-09-10', 'Chuyến du lịch thú vị cùng những trải nghiệm tuyệt vời bên gia đình', 'AO', 'PQ.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `login_admin`
--

INSERT INTO `login_admin` (`id`, `name`, `pass`) VALUES
(1, 'adminbooking', '123456'),
(2, 'admin123', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_product`
--

INSERT INTO `order_product` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(22, 1, 6, 1),
(23, 1, 8, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `img`) VALUES
(1, 'Túi du lịch', '15', 'tui.jpg'),
(2, 'Giày thể thao ', '18', 'giay.jpg'),
(3, 'Vali du lịch', '20', 'vali.jpg'),
(4, 'Kem chống nắng', '12', 'kem.jpg'),
(5, 'Lều cắm trại', '35', 'leu2.jpg'),
(6, 'Bộ xong nồi cắm trại', '19', 'xongnoi.jpg'),
(7, 'Kính râm', '12', 'kinh.jpg'),
(8, 'Đèn pin', '15', 'den2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_info`
--

CREATE TABLE `product_info` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `describes` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `available` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product_info`
--

INSERT INTO `product_info` (`id`, `product_name`, `price`, `describes`, `sku`, `brand`, `available`, `img`) VALUES
(1, 'Túi du lịch', 15, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '001', 'Gucci', 'Còn hàng', 'tui.jpg'),
(2, 'Giày thể thao', 18, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '002', 'Bitis', 'Còn hàng', 'giay.jpg'),
(3, 'Vali du lịch', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '003', 'DDBS Việt Nam', 'Còn hàng', 'vali.jpg'),
(4, 'Kem chống nắng', 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '004', 'Innisfree', 'Còn hàng', 'kem.jpg'),
(5, 'Lều cắm trại', 35, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '005', 'NatureHike', 'Còn hàng', 'leu2.jpg'),
(6, 'Bộ xong nồi cắm trại', 19, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '006', 'Sunhouse', 'Còn hàng', 'xongnoi.jpg'),
(7, 'Kính râm', 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '007', 'Oliver Peoples', 'Còn hàng', 'kinh.jpg'),
(8, 'Đèn pin', 15, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '008', 'Ledlenser', 'Còn hàng', 'den2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `time_tour` int(10) NOT NULL,
  `price` int(20) NOT NULL,
  `img` varchar(255) NOT NULL,
  `destinations` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tours`
--

INSERT INTO `tours` (`id`, `tour_name`, `time_tour`, `price`, `img`, `destinations`) VALUES
(1, 'Du thuyền Vịnh Hạ Long', 3, 2000, 'VHL.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(2, 'Chinh phục Phanxipang', 2, 1299, 'SAPA.jpg', 'Lorem ipsum dolor sit amet, consetetu sadipscing elitr'),
(3, 'Khám phá Mộc Châu', 5, 699, 'MC.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(4, 'Quần đảo Cát Bà', 4, 899, 'CB.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(5, 'Bãi biển Sầm Sơn', 5, 599, 'SS.jpg', 'Lorem ipsum dolor sit amet, consetetu sadipscing elitr'),
(6, 'Vinpearl Nha Trang', 7, 1299, 'NT.jpg', 'Lorem ipsum dolor sit amet, consetetu sadipscing elitr'),
(7, 'Cầu Vàng Đà Nẵng', 6, 799, 'ĐN.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(8, 'Grand World Phú Quốc', 8, 1599, 'PQ.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_detail`
--

CREATE TABLE `tour_detail` (
  `id` int(11) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `describes` text NOT NULL,
  `destinations` text NOT NULL,
  `duration` varchar(255) NOT NULL,
  `time_start` date NOT NULL,
  `time_end` date NOT NULL,
  `person` int(10) NOT NULL,
  `seat` int(10) NOT NULL,
  `img_1` varchar(255) NOT NULL,
  `img_2` varchar(255) NOT NULL,
  `img_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tour_detail`
--

INSERT INTO `tour_detail` (`id`, `tour_name`, `price`, `describes`, `destinations`, `duration`, `time_start`, `time_end`, `person`, `seat`, `img_1`, `img_2`, `img_3`) VALUES
(1, 'Du thuyền Vịnh Hạ Long', 2000, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', 'Vịnh Bái Tử Long, Hang Sửng Sốt, Động Thiên Cung, Đảo Tuần Châu', '3 ngày 2 đêm', '2022-09-14', '2022-09-17', 50, 12, 'VHL.jpg', 'VHL.jpg', 'VHL.jpg'),
(2, 'Chinh phục Phanxipang Sapa', 1299, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', 'Bản Tả Phìn, Đỉnh Phanxipang, Đèo Ô Quy Hồ, Hà Khẩu', '2 ngày 2 đêm', '2022-09-24', '2022-09-26', 50, 9, 'SAPA.jpg', 'SAPA.jpg', 'SAPA.jpg'),
(3, 'Khám phá Mộc Châu', 699, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', 'Đồi chè, Ngũ Động Bản Ôn, Rừng thông bản Áng, Thác Dải Yếm', '5 ngày 4 đêm', '2022-09-21', '2022-09-26', 50, 15, 'MC.jpg', 'MC.jpg', 'MC.jpg'),
(4, 'Quần đảo Cát Bà', 899, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', 'Vịnh Lan Hạ, Đảo Khỉ, Biển Cát Cò, Pháo đài thần công', '4 ngày 4 đêm', '2022-10-01', '2022-10-05', 50, 20, 'CB.jpg', 'CB.jpg', 'CB.jpg'),
(5, 'Bãi biển Sầm Sơn', 599, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', 'Núi Trường Lệ, Đồi Độc Cước, Bãi biển Sầm Sơn, Chùa Cô Tiên', '5 ngày 6 đêm', '2022-09-21', '2022-09-27', 50, 18, 'SS.jpg', 'SS.jpg', 'SS.jpg'),
(6, 'Vinpearl Nha Trang', 1299, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', 'Tháp bà Ponagar, Đảo Điệp Sơn, Bãi biển Nha Trang, Vinpearl Nha Trang', '7 ngày 6 đêm', '2022-09-21', '2022-09-28', 50, 5, 'NT.jpg', 'NT.jpg', 'NT.jpg'),
(7, 'Cầu Vàng Đà Nẵng', 799, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', 'Bà Nà Hills, Bán Đảo Sơn Trà, Ngũ Hành Sơn, Công Viên Suối Khoáng Nóng Núi Thần Tài', '6 ngày 6 đêm', '2022-09-14', '2022-09-20', 50, 25, 'ĐN.jpg', 'ĐN.jpg', 'ĐN.jpg'),
(8, 'Grand World Phú Quốc', 1599, 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr', 'Grand World Phú Quốc, Bãi Dài, Hòn Đồi Mồi, Bãi Ông Lang', '8 ngày 8 đêm', '2022-10-08', '2022-10-16', 50, 20, 'PQ.jpg', 'PQ.jpg', 'PQ.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fullname`, `phone`, `email`, `address`, `hoten`, `password`) VALUES
(1, 'Nguyễn Duy Tùng', '0848160901', 'abc@gmail.com', 'Hà Nội', 'duytungtmthd', '123456'),
(2, 'Nguyễn Tùng Lâm', '0123456789', 'abc@gmail.com', 'Quảng Ninh', 'tunglam123', '123456');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `booking_tour`
--
ALTER TABLE `booking_tour`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tour_detail`
--
ALTER TABLE `tour_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `booking_tour`
--
ALTER TABLE `booking_tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `product_info`
--
ALTER TABLE `product_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tour_detail`
--
ALTER TABLE `tour_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
