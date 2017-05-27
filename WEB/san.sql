-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- 主机: w.rdc.sae.sina.com.cn:3307
-- 生成日期: 2015 年 05 月 30 日 20:48
-- 服务器版本: 5.5.27
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `app_myzonedoctor`
--

-- --------------------------------------------------------

--
-- 表的结构 `san`
--

CREATE TABLE IF NOT EXISTS `san` (
  `id` int(250) NOT NULL,
  `x` int(250) NOT NULL,
  `time` datetime NOT NULL,
  `zz` int(250) NOT NULL,
  `xz` int(250) NOT NULL,
  `yz` int(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `san`
--

