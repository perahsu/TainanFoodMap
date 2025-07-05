-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 
-- 伺服器版本: 10.4.24-MariaDB
-- PHP 版本： 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `2026iie`
--

-- --------------------------------------------------------

--
-- 資料表結構 `s112080072`
--

CREATE TABLE `s112080072` (
  `id` int(11) NOT NULL COMMENT '自動編號(AI)(auto_increment)',
  `account` varchar(10) NOT NULL COMMENT '帳號',
  `password` varchar(10) NOT NULL COMMENT '密碼',
  `name` varchar(10) NOT NULL COMMENT '姓名',
  `sex` char(2) NOT NULL COMMENT '性別',
  `year` tinyint(4) NOT NULL COMMENT '出生年',
  `month` tinyint(4) NOT NULL COMMENT '出生月',
  `day` tinyint(4) NOT NULL COMMENT '出生日',
  `telephone` varchar(20) NOT NULL COMMENT '電話',
  `cellphone` varchar(20) NOT NULL COMMENT '行動電話',
  `address` varchar(50) NOT NULL COMMENT '地址',
  `email` varchar(50) NOT NULL COMMENT '電子郵件',
  `url` varchar(50) NOT NULL COMMENT '個人網址',
  `comment` text NOT NULL COMMENT '備註欄位'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 資料表的匯出資料 `s112080072`
--

INSERT INTO `s112080072` (`id`, `account`, `password`, `name`, `sex`, `year`, `month`, `day`, `telephone`, `cellphone`, `address`, `email`, `url`, `comment`) VALUES
(0, 'Kankichi', 'ilovemoney', '兩津勘吉', '男', 32, 3, 3, '03-3602-5820', '03-3602-5820', '東京都葛飾區亀有三丁目32番17號', 'ryotsukankichi@gmail.com', 'https://kochikame-kinenkan-official.jp/', '兩津勘吉（日語：両津勘吉／りょうつ かんきち Ryōtsu Kankichi）是日本漫畫《烏龍派出所》及其改編作品中的主角。其外型酷似尼安德塔人。目前是葛飾警察署的警察，職階是巡查長，有數集被調到銀座、上野（代班）。多次因闖下大禍被放逐到鳥不生蛋的鬼地方，例如：最邊陲署（又名最果署，有分支）、冰山署（在北極冰山上，派出所全體成員被放逐）。');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
