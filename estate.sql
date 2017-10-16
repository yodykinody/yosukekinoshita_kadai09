-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017 年 10 月 16 日 12:53
-- サーバのバージョン： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_shop`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `estate`
--

CREATE TABLE `estate` (
  `code` int(11) NOT NULL,
  `real_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `post1` int(10) NOT NULL,
  `post2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `roomNumber` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `yachin` int(16) NOT NULL,
  `kyoeki` int(16) NOT NULL,
  `shiki` int(4) NOT NULL,
  `rei` int(4) NOT NULL,
  `madori` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `keyLocation` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email1` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email2` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email3` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email4` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email5` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `company1` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `company2` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `company3` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `company4` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `company5` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `timedate` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `estate`
--

INSERT INTO `estate` (`code`, `real_name`, `post1`, `post2`, `address`, `roomNumber`, `yachin`, `kyoeki`, `shiki`, `rei`, `madori`, `keyLocation`, `email1`, `email2`, `email3`, `email4`, `email5`, `company1`, `company2`, `company3`, `company4`, `company5`, `other`, `timedate`) VALUES
(12, 'ジーズプラチナ', 107, '0064', '東京都港区北青山３−１', '3-D', 100000, 10000, 2, 2, '', '現地エントランス横　keybox「0331」', 'g\'s@gmail.com', 'akasaka@yahoo.co.hp', 'every@co.jp', '', '', 'ジーズ不動産', '赤坂不動産', 'エブリー不動産', '', '', '', '2017/10/14 2:20:18'),
(13, 'ハイパージーズ', 166, '0022', '東京都杉並区久我山３−１', '202', 77000, 3000, 1, 1, '', 'オーナー所有', 'minimini@yahoo.co.jp', '', '', '', '', 'ミニミニ浜田山', '', '', '', '', '', '2017/10/14 2:19:21'),
(15, 'スーパージーズ', 125, '0053', '東京都葛飾区金町３−４−３', '101', 65000, 4000, 1, 1, '', '俺の家', 'katsushika@yahoo.co.jp', 'takasago@gmail.com', 'ue@yahoo.co.jp', '', '', '葛飾不動産', '高砂不動産', '海岸不動産', '', '', '', '2017/10/14 6:28:10'),
(16, 'ジーズレジデンスⅡ', 107, '0052', '東京都港区赤坂１−２−３', 'A', 200000, 5000, 2, 2, '', 'ジーズアカデミー東京', 'dejihari@gmail.com', '', '', '', '', 'デジハリ不動産', '', '', '', '', '', '2017/10/14 7:10:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estate`
--
ALTER TABLE `estate`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estate`
--
ALTER TABLE `estate`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
