-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:4306
-- Thời gian đã tạo: Th5 27, 2024 lúc 07:29 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_film`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phim`
--

CREATE TABLE `phim` (
  `id` int(11) NOT NULL,
  `tenp` varchar(255) NOT NULL,
  `anhbia` varchar(255) NOT NULL,
  `filephim` varchar(255) NOT NULL,
  `mota` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phim`
--

INSERT INTO `phim` (`id`, `tenp`, `anhbia`, `filephim`, `mota`) VALUES
(1, '123', '', '', 'dfghjksdaftyqwjhjkf ádfhjkhasjkhdf hjasdhfjh jkahsdfjkh hạ jahsdfjhahhdfjk jkajkdhfjkhasjkdf'),
(2, '123123', 'animevsub-0PY6DPdY7W.jpg', 'animevsub-0PY6DPdY7W.jpg', 'ads'),
(3, '123', 'animevsub-HORc1L1C03.webp', '', 'dfghjksdaftyqwjhjkf ádfhjkhasjkhdf hjasdhfjh jkahsdfjkh hạ jahsdfjhahhdfjk jkajkdhfjkhasjkdf'),
(4, '123', 'animevsub-F9AdsrNyfW.jpg', 'animevsub-iFeX9GD0Cd.webp', ''),
(5, '123123', 'animevsub-F9AdsrNyfW.jpg', 'animevsub-HqQA5wvc2J.jpg', '123123'),
(6, '123123', 'animevsub-F9AdsrNyfW.jpg', 'animevsub-HqQA5wvc2J.jpg', '123123'),
(7, '123123', 'animevsub-F9AdsrNyfW.jpg', 'animevsub-HqQA5wvc2J.jpg', '123123'),
(8, '123123', 'animevsub-F9AdsrNyfW.jpg', 'animevsub-HqQA5wvc2J.jpg', '123123'),
(9, '123123', 'animevsub-CLgSVIagmk.webp', 'animevsub-iDvWCparAc.jpg', 'ghhjghjg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `email`, `pass`, `level`) VALUES
(1, 'admin@gmail.com', '123', 0),
(2, 'duong@gmail.com', '123', 1),
(4, 'huyen@gmail.com', '123', 1),
(5, 'ly@gmail.com', '123', 1),
(6, 'duong1@gmail.com', '1234', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `phim`
--
ALTER TABLE `phim`
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
-- AUTO_INCREMENT cho bảng `phim`
--
ALTER TABLE `phim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
