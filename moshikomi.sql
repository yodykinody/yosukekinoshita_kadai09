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
-- テーブルの構造 `moshikomi`
--

CREATE TABLE `moshikomi` (
  `code` int(8) NOT NULL,
  `real_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `post1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `post2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `roomNumber` int(10) NOT NULL,
  `yachin` int(20) NOT NULL,
  `kyoeki` int(20) NOT NULL,
  `shiki` int(10) NOT NULL,
  `rei` int(10) NOT NULL,
  `madori` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `keyLocation` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email1` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email2` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email3` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email4` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email5` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `company1` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `company2` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `company3` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `company4` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `company5` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `moshikomiCompany` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `moshikomiTel1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `moshikomiTel2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `moshikomiTel3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `timedate` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `moshikomi`
--

INSERT INTO `moshikomi` (`code`, `real_name`, `post1`, `post2`, `address`, `roomNumber`, `yachin`, `kyoeki`, `shiki`, `rei`, `madori`, `keyLocation`, `email1`, `email2`, `email3`, `email4`, `email5`, `company1`, `company2`, `company3`, `company4`, `company5`, `other`, `moshikomiCompany`, `moshikomiTel1`, `moshikomiTel2`, `moshikomiTel3`, `timedate`) VALUES
(1, 'ジーズアパート', '180', '0003', '東京都武蔵野市吉祥寺南町３−３２−６', 101, 80000, 2000, 1, 1, '', 'ガスメーター', 'yosukekinoshita@gmail.com', 'tanaka@yahoo.co.jp', 'eible@yahoo.co.jp', '', '', 'アパマンショップ', '賃貸住宅', 'エイブル', '', '', '町会費：2000円', 'エイブル', '0422', '71', '5601', '2017/10/13 18:37:16'),
(8, 'パークサイド吉祥寺', '180', '0002', '東京都武蔵野市吉祥寺東町２−１−１', 303, 120000, 2000, 1, 1, '', '玄関横keybox 0411', 'machida@gmail.com', 'minimini@yahoo.co.jp', 'yoshizu@gmail.com', 'rebest@yahoo.co.jp', 'eible@yahoo.co.jp', '町田不動産', 'ミニミニ吉祥寺', '吉津不動産', 'リベストサンロード店', 'エイブル', '特になし', 'エイブル', '0422', '71', '5611', '2017/10/13 19:21:39'),
(9, 'ジーズゴールド', '125', '0054', '東京都葛飾区高砂', 101, 52000, 3000, 1, 1, '', '現地ゴミ置場　キーボックス「4222」', 'katsushika@yahoo.co.jp', 'otokomae@yahoo.co.jp', 'kaminari@yahoo.co.jp', 'mitsui@gmail.com', '', '葛飾不動産', '男前不動産', '雷不動産', '三井エステート', '', '', 'エイブル', '', '', '', '2017/10/14 6:21:24'),
(10, 'ジーズレジデンス', '167', '0089', '東京都杉並区西荻南３−２−１', 1, 90000, 2000, 1, 1, '', 'オーナー宅', 'tanaka@yahoo.co.jp', 'yasuoka@gmail.com', '', '', '', 'ミニミニ吉祥寺店', '安岡不動産', '', '', '', '鍵交換：15000円', 'エイブル', '', '', '', '2017/10/14 7:30:51'),
(11, '木下アパート', '1', '11', '111', 111, 60000, 3000, 1, 1, '', 'fafkaw', 'fafa', ' xvcxf', '', '', '', 'fafawfaw', 'bxbfx', '', '', '', 'fafa', '', '', '', '', '2017/10/14 11:52:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moshikomi`
--
ALTER TABLE `moshikomi`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `moshikomi`
--
ALTER TABLE `moshikomi`
  MODIFY `code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
