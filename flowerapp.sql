-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-02-28 00:48:18
-- 服务器版本： 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flowerapp`
--

-- --------------------------------------------------------

--
-- 表的结构 `classif`
--

DROP TABLE IF EXISTS `classif`;
CREATE TABLE IF NOT EXISTS `classif` (
  `cid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL COMMENT '分类名称',
  `cenname` varchar(255) NOT NULL COMMENT '分类英文名称',
  `pid` int(10) DEFAULT '0',
  `cthumb` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `classif`
--

INSERT INTO `classif` (`cid`, `cname`, `cenname`, `pid`, `cthumb`) VALUES
(3, '花艺', 'Flower art', 0, '/flowerApp/static/upload/18-02-27/1519744505196.png'),
(4, '鲜花', 'Flowers', 0, '/flowerApp/static/upload/18-02-27/1519744566116.png'),
(5, '盆栽', 'Potted', 0, '/flowerApp/static/upload/18-02-27/151974459918.png');

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

DROP TABLE IF EXISTS `goods`;
CREATE TABLE IF NOT EXISTS `goods` (
  `gid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '商品ID',
  `gname` text NOT NULL COMMENT '商品名称',
  `genname` varchar(255) NOT NULL COMMENT '商品英文名称',
  `gdesc` varchar(255) NOT NULL COMMENT '实拍描述',
  `gpicture` varchar(2000) NOT NULL COMMENT '实拍图',
  `gthumb` varchar(255) NOT NULL COMMENT '缩略图',
  `gslide` varchar(2000) NOT NULL COMMENT '商品轮播展示图',
  `gspec` varchar(20) NOT NULL COMMENT '规格',
  `gimg` varchar(255) NOT NULL COMMENT '商品详情图',
  `cid` int(10) NOT NULL COMMENT '商品所属分类',
  `gprice` int(10) NOT NULL COMMENT '商品价格',
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品';

-- --------------------------------------------------------

--
-- 表的结构 `index_user`
--

DROP TABLE IF EXISTS `index_user`;
CREATE TABLE IF NOT EXISTS `index_user` (
  `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `utel` int(18) NOT NULL,
  `upicture` varchar(255) NOT NULL DEFAULT '0' COMMENT '用户头像，有默认',
  `unickname` varchar(255) NOT NULL DEFAULT 'unickname' COMMENT '昵称',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户注册';

-- --------------------------------------------------------

--
-- 表的结构 `manager_user`
--

DROP TABLE IF EXISTS `manager_user`;
CREATE TABLE IF NOT EXISTS `manager_user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '后台用户登陆id',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='后台用户表';

--
-- 转存表中的数据 `manager_user`
--

INSERT INTO `manager_user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- 表的结构 `orderlist`
--

DROP TABLE IF EXISTS `orderlist`;
CREATE TABLE IF NOT EXISTS `orderlist` (
  `oid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL COMMENT '用户ID',
  `odate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '订单时间',
  `ostatus` varchar(255) DEFAULT '0' COMMENT '订单状态0,1,2,3',
  `onum` int(48) NOT NULL COMMENT '订单号',
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `order_attach`
--

DROP TABLE IF EXISTS `order_attach`;
CREATE TABLE IF NOT EXISTS `order_attach` (
  `tid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `gid` int(10) NOT NULL,
  `gnum` int(10) NOT NULL,
  `oid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
