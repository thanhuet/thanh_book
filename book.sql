-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 01, 2017 lúc 11:16 AM
-- Phiên bản máy phục vụ: 10.1.24-MariaDB
-- Phiên bản PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `book`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `author`
--

CREATE TABLE `author` (
  `Id` int(11) NOT NULL,
  `Full_name` varchar(40) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone_number` int(11) NOT NULL,
  `Birthday` date NOT NULL,
  `Address` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `author`
--

INSERT INTO `author` (`Id`, `Full_name`, `Email`, `Phone_number`, `Birthday`, `Address`) VALUES
(17, 'ngộ không', '@gmail.com', 3234, '2017-12-31', 'd'),
(18, 'DC', 'dc@gmail.com', 32, '0023-04-03', 'hà lan'),
(19, 'MARVEL', 'mv@gmail.com', 23, '0002-04-02', 'd'),
(20, 'Peter Jackson', 'p@gmail.com', 32, '0004-03-02', 'rd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book_data`
--

CREATE TABLE `book_data` (
  `Id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Categories` varchar(40) NOT NULL,
  `Author` varchar(40) NOT NULL,
  `Published_year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `book_data`
--

INSERT INTO `book_data` (`Id`, `Name`, `Categories`, `Author`, `Published_year`) VALUES
(160, 'tây du kí', 'phiêu lưu', 'ngộ không', '3113-02-03'),
(171, 'XMEN', 'viễn tưởng', 'DC', '0002-02-13'),
(172, 'CAPTAIN', 'hành động', 'MARVEL', '0001-02-02'),
(173, 'ngày cũ của tương lai', 'viễn tưởng', 'DC', '1233-04-03'),
(176, 'chúa tể của những chiếc nhẫn', 'phiêu lưu, viễn tưởng', 'Peter Jackson', '4121-03-12'),
(177, 'cuộc chiến thành troy', 'chiến tranh, lịch sử', 'NOT', '0014-03-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `book_data`
--
ALTER TABLE `book_data`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `author`
--
ALTER TABLE `author`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT cho bảng `book_data`
--
ALTER TABLE `book_data`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
