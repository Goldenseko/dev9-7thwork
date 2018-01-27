-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 年 1 月 27 日 07:10
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE IF NOT EXISTS `gs_an_table` (
`id` int(12) NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `myURL` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `posttime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `title`, `myURL`, `detail`, `posttime`) VALUES
(1, '詳細！PHP 7+MySQL 入門ノート', 'https://www.amazon.co.jp/%E8%A9%B3%E7%B4%B0%EF%BC%81PHP-MySQL-%E5%85%A5%E9%96%80%E3%83%8E%E3%83%BC%E3%83%88-%E5%A4%A7%E9%87%8D-%E7%BE%8E%E5%B9%B8-ebook/dp/B01HO61ZY2/ref=sr_1_2?ie=UTF8&qid=1517033293&sr=8-2&keywords=PHP', 'TEST 1', '2018-01-27 15:08:56'),
(2, 'PHP7＋MariaDB／MySQLマスターブック', 'https://www.amazon.co.jp/PHP7%EF%BC%8BMariaDB%EF%BC%8FMySQL%E3%83%9E%E3%82%B9%E3%82%BF%E3%83%BC%E3%83%96%E3%83%83%E3%82%AF-%E6%B0%B8%E7%94%B0-%E9%A0%86%E4%BC%B8/dp/4839962340/ref=sr_1_5?ie=UTF8&qid=1517033293&sr=8-5&keywords=PHP', 'TEST 2', '2018-01-27 15:09:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_an_table`
--
ALTER TABLE `gs_an_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
