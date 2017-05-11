-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-11 08:51:22
-- 服务器版本： 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resource`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(6) NOT NULL,
  `username` varchar(26) NOT NULL,
  `password` varchar(66) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'video', '421b47ffd946ca083b65cd668c6b17e6');

-- --------------------------------------------------------

--
-- 表的结构 `art`
--

CREATE TABLE IF NOT EXISTS `art` (
  `id` int(6) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='艺术设计';

-- --------------------------------------------------------

--
-- 表的结构 `computerapp`
--

CREATE TABLE IF NOT EXISTS `computerapp` (
  `id` int(6) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='计算机应用技术';

-- --------------------------------------------------------

--
-- 表的结构 `display`
--

CREATE TABLE IF NOT EXISTS `display` (
  `id` int(6) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='数字展示技术';

-- --------------------------------------------------------

--
-- 表的结构 `env`
--

CREATE TABLE IF NOT EXISTS `env` (
  `id` int(6) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='环境艺术设计';

-- --------------------------------------------------------

--
-- 表的结构 `iot`
--

CREATE TABLE IF NOT EXISTS `iot` (
  `id` int(6) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='物联网应用技术';

-- --------------------------------------------------------

--
-- 表的结构 `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(6) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='数字媒体应用';

-- --------------------------------------------------------

--
-- 表的结构 `mobileapp`
--

CREATE TABLE IF NOT EXISTS `mobileapp` (
  `id` int(6) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='移动应用开发';

-- --------------------------------------------------------

--
-- 表的结构 `net`
--

CREATE TABLE IF NOT EXISTS `net` (
  `id` int(6) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='计算机网络技术';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computerapp`
--
ALTER TABLE `computerapp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `env`
--
ALTER TABLE `env`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iot`
--
ALTER TABLE `iot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobileapp`
--
ALTER TABLE `mobileapp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `net`
--
ALTER TABLE `net`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `computerapp`
--
ALTER TABLE `computerapp`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `display`
--
ALTER TABLE `display`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `env`
--
ALTER TABLE `env`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `iot`
--
ALTER TABLE `iot`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mobileapp`
--
ALTER TABLE `mobileapp`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `net`
--
ALTER TABLE `net`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
