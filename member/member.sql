-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-11-15 09:29:13
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `member`
--

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

CREATE TABLE `account` (
  `id` int(11) UNSIGNED NOT NULL,
  `account` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `mail` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `account`
--

INSERT INTO `account` (`id`, `account`, `password`, `mail`) VALUES
(1, 'mack', '1234', 'mack@gmail.com'),
(2, 'asuna', '1111', 'asuna@gmail.com'),
(3, 'yui', '5555', 'yui@gmail.com');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(16) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `mobile` varchar(14) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `level` tinyint(2) UNSIGNED NOT NULL DEFAULT 0,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `name`, `birthday`, `address`, `mobile`, `level`, `create_time`) VALUES
(1, '劉勤永', '1974-10-07', '桃園迴龍', '0975787687', 0, '2021-11-15 06:45:31'),
(2, '亞絲娜', '2007-06-15', '日本京都', '0975787687', 0, '2021-11-15 07:27:31'),
(3, '小結衣', '2010-10-15', '艾恩葛朗特', '09844222', 0, '2021-11-15 07:31:50'),
(4, 'sdfasdfads', '2021-11-03', 'dfasdfasdf', 'fdfasdfas', 0, '2021-11-15 07:33:33');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
