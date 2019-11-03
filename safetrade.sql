-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-11-01 09:35:27
-- 服务器版本： 10.3.16-MariaDB
-- PHP 版本： 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `safetrade`
--

-- --------------------------------------------------------

--
-- 表的结构 `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `jobname` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cost` varchar(15) NOT NULL,
  `dop` date NOT NULL,
  `dov` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `customer`
--

INSERT INTO `customer` (`id`, `username`, `mobile`, `jobname`, `location`, `description`, `cost`, `dop`, `dov`) VALUES
(1, '1', 1, '1', '1', '1', '1', '0000-00-00', '0000-00-00'),
(2, '12', 123, '123', '123', '123', '123', '2019-10-28', '0000-00-00'),
(3, '12', 123, 'asd', '123', '123', '123', '2019-10-28', '2019-10-29'),
(4, '12', 123, '', '', '', '', '2019-10-28', '2019-10-31'),
(5, 'admin', 0, 'qqqq', 'qqq', 'qq', 'qq', '2019-10-28', '2019-10-31'),
(6, 'bill', 0, 'asasd', 'asd', 'ads', 'asd', '2019-10-28', '2019-10-31'),
(7, 'bill', 123123, '123213', '123213', '123123', '213123', '2019-10-28', '2019-10-31'),
(8, '1', 0, 'aaa', 'aa', 'aaa', 'aaa', '2019-10-30', '2019-10-31'),
(9, '1', 0, 'aaa', 'aa', 'aaa', 'aaa', '2019-10-30', '2019-10-31'),
(10, '1', 0, 'aaa', 'aa', 'aaa', 'aaa', '2019-10-30', '2019-10-31');

-- --------------------------------------------------------

--
-- 表的结构 `tradesmen`
--

CREATE TABLE `tradesmen` (
  `tid` int(11) NOT NULL,
  `tname` varchar(255) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `age` int(3) NOT NULL,
  `mobile` int(11) NOT NULL,
  `wid` int(255) NOT NULL,
  `totalcost` varchar(255) NOT NULL,
  `laborcost` varchar(255) NOT NULL,
  `materialcost` varchar(255) NOT NULL,
  `tvaliddate` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `tradesmen`
--

INSERT INTO `tradesmen` (`tid`, `tname`, `sex`, `age`, `mobile`, `wid`, `totalcost`, `laborcost`, `materialcost`, `tvaliddate`, `status`) VALUES
(1, 'admin', 'qqq', 0, 0, 0, 'qq', 'qq', 'qq', '2019-10-31', 0),
(2, '2', '2', 2, 2, 2, '2', '2', '2', '2', 0),
(3, '12', '423', 324, 234, 0, '234', '234', '234', '2019-10-31', 0),
(4, '12', '423', 324, 234, 0, '234', '234', '234', '2019-10-31', 0),
(5, 'Rafael123', 'm', 45, 12345678, 0, '34', '34', '34', '2019-10-30', 0),
(6, 'bill', '1231', 123, 123, 0, '123', '123', '123', '', 0),
(7, 'admin', '12331', 12312, 123123, 7, '123213', '123321', '123123', '2019-10-31', 0),
(8, '1', 'aaa', 0, 0, 5, 'aa', 'aa', 'aa', '2019-10-30', 1);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `mobile`) VALUES
(1, 'admin', '1234', '123@123.com', 123123123),
(2, 'admin2', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '12', 12),
(3, 'rafael', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '123', 123),
(4, '1', '1', '1', 1),
(5, '12', '1', '1', 1),
(6, 'Rafael123', '123', '123', 123),
(7, 'bill', '123', '123', 123);

--
-- 转储表的索引
--

--
-- 表的索引 `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `tradesmen`
--
ALTER TABLE `tradesmen`
  ADD PRIMARY KEY (`tid`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `tradesmen`
--
ALTER TABLE `tradesmen`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
