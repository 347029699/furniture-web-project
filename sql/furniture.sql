-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 �?06 �?11 �?12:39
-- 服务器版本: 5.5.53
-- PHP 版本: 5.5.38

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `furniture`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `number` bigint(11) NOT NULL,
  `password` varchar(99) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`Id`, `number`, `password`) VALUES
(1, 13023777137, '123456');

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`message`) VALUES
('家具很棒哦！'),
('1231231');

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `sort` varchar(60) NOT NULL,
  `nprice` int(12) NOT NULL,
  `oprice` int(12) NOT NULL,
  `label` varchar(60) DEFAULT NULL,
  `size` varchar(60) DEFAULT NULL,
  `material` varchar(60) DEFAULT NULL,
  `img` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`id`, `name`, `sort`, `nprice`, `oprice`, `label`, `size`, `material`, `img`) VALUES
(1, '灰色椅子', '椅子', 200, 200, '热销', '0.55*0.5*0.65', '棕丝、夹芯板', '/BS/img/product/1.jpg'),
(2, '白色塑料椅', '椅子', 120, 120, '新品', '0.5*0.4*0.7', '塑料、人造板', '/BS/img/product/2.jpg'),
(3, '木质椅子', '椅子', 230, 240, '热销', '0.5*0.4*0.7', '榆木', '/BS/img/product/3.jpg'),
(4, '欧式沙发', '沙发', 5000, 5000, NULL, '3.5*0.65', '人造板、海绵', '/BS/img/product/4.jpg'),
(5, '白色沙发', '沙发', 4300, 4600, '热销', '2.5*0.7', '人造板、海绵', '/BS/img/product/5.jpg'),
(6, '办公写字台', '写字台', 180, 180, NULL, '2.0*1.0', '原木', '/BS/img/product/6.jpg'),
(7, '家用写字台', '写字台', 370, 370, '新品', '1.6*0.8', '原木', '/BS/img/product/7.jpg'),
(8, '欧式床', '床', 6300, 6300, '热销', '2.1*1.8', '红松', '/BS/img/product/8.jpg'),
(9, '美式床', '床', 5600, 5600, '', '2.0*1.8', '榆木', '/BS/img/product/9.jpg'),
(10, '实木茶几', '茶几', 1000, 1000, '热销', '1.4*0.8*0.51', '实木', '/BS/img/product/10.jpg'),
(11, '韩式茶几', '茶几', 1200, 1200, '新品', '0.12*0.6*0.45', '细木', '/BS/img/product/11.jpg'),
(12, '实木书柜', '书柜', 4600, 4800, '热销', '0.45*2', '原木', '/BS/img/product/12.jpg'),
(13, '白色书柜', '书柜', 4500, 4500, '新品', '0.4*1.9', '原木', '/BS/img/product/13.jpg'),
(14, '黑皮沙发', '沙发', 2000, 2333, NULL, '1.4*0.7', '皮质、原木', '/BS/img/product/14.jpg'),
(15, '简约椅子', '椅子', 200, 233, '新品', '1.4*0.7', '实木、海绵', '/BS/img/product/15.jpg'),
(16, '高脚吧台凳', '椅子', 150, 170, NULL, '1.5*0.4', '原木', '/BS/img/product/16.jpg'),
(17, '皮质沙发', '沙发', 1800, 1800, NULL, '1.8*1.2', '海绵、原木', '/BS/img/product/17.jpg'),
(18, '新中式床', '床', 4200, 4200, NULL, '1.85*1.6', NULL, '/BS/img/product/18.jpg'),
(19, '中式茶几', '茶几', 388, 388, NULL, '0.7*1.3', '大理石', '/BS/img/product/19.jpg'),
(20, '双层床', '床', 2200, 2200, NULL, '1.85*1.6', '纯实木', '/BS/img/product/20.jpg'),
(21, '简约写字台', '写字台', 1400, 1450, NULL, '1.4*0.7', '柏木', '/BS/img/product/21.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `sort`
--

CREATE TABLE IF NOT EXISTS `sort` (
  `sortname` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `sort`
--

INSERT INTO `sort` (`sortname`) VALUES
('沙发'),
('椅子'),
('写字台'),
('床'),
('茶几'),
('书柜');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
