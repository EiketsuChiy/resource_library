-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-03 14:20:45
-- 服务器版本： 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ziyuanku`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` mediumint(26) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` mediumint(26) NOT NULL,
  `title` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` mediumint(26) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `pic` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `time` date NOT NULL,
  `author` varchar(26) NOT NULL,
  `click` int(123) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `pic`, `video`, `time`, `author`, `click`) VALUES
(2, '标题2', '内容2', '', '', '2017-04-09', '笨蛋', 0);

-- --------------------------------------------------------

--
-- 表的结构 `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` mediumint(26) NOT NULL,
  `jieshao` varchar(600) NOT NULL,
  `video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `yingyong`
--

CREATE TABLE IF NOT EXISTS `yingyong` (
  `id` mediumint(26) NOT NULL,
  `jieshao` varchar(255) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `yingyong`
--

INSERT INTO `yingyong` (`id`, `jieshao`, `pic`, `video`) VALUES
(1, '666', '', ''),
(2, '发个', '/uploads/20170427\\08c484dea683bfb0873a74aaf177f55f.png', ''),
(4, '666', '/uploads/20170430\\217f49eb8728c53e63b5018af7bb731a.mp4', '');

-- --------------------------------------------------------

--
-- 表的结构 `ziyuan`
--

CREATE TABLE IF NOT EXISTS `ziyuan` (
  `id` mediumint(26) NOT NULL,
  `images` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yingyong`
--
ALTER TABLE `yingyong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ziyuan`
--
ALTER TABLE `ziyuan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` mediumint(26) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` mediumint(26) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` mediumint(26) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` mediumint(26) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `yingyong`
--
ALTER TABLE `yingyong`
  MODIFY `id` mediumint(26) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ziyuan`
--
ALTER TABLE `ziyuan`
  MODIFY `id` mediumint(26) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
