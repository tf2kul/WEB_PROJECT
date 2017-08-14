-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 17-08-13 15:11
-- 서버 버전: 10.1.21-MariaDB
-- PHP 버전: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `project`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(11) NOT NULL,
  `id` varchar(25) NOT NULL,
  `pw` varchar(25) NOT NULL,
  `title` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `view` int(25) NOT NULL,
  `date` datetime NOT NULL,
  `name` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `content` varchar(25) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `id`, `pw`, `title`, `view`, `date`, `name`, `content`) VALUES
(1, '123', '123', '제목', 46, '2017-08-12 13:32:09', '네임', '내용'),
(2, '', '', '', 0, '2017-08-12 18:15:47', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `cafe`
--

CREATE TABLE `cafe` (
  `idx` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cbenner` varchar(200) NOT NULL,
  `curl` varchar(100) NOT NULL,
  `cexp` varchar(100) NOT NULL,
  `cadmin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `cafejoin`
--

CREATE TABLE `cafejoin` (
  `idx` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `allow` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='가입승인';

-- --------------------------------------------------------

--
-- 테이블 구조 `catecory`
--

CREATE TABLE `catecory` (
  `idx` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 테이블 구조 `comment`
--

CREATE TABLE `comment` (
  `idx` int(11) NOT NULL,
  `id` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `content` varchar(25) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- 테이블의 덤프 데이터 `comment`
--

INSERT INTO `comment` (`idx`, `id`, `name`, `content`, `number`) VALUES
(1, '123', '123', '???', 1),
(2, '', '', '', 1),
(3, '', '', '', 1),
(4, '', '', '', 1);

-- --------------------------------------------------------

--
-- 테이블 구조 `user`
--

CREATE TABLE `user` (
  `idx` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `id` varchar(300) NOT NULL,
  `pw` varchar(300) NOT NULL,
  `email` varchar(45) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `cafe`
--
ALTER TABLE `cafe`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `cafejoin`
--
ALTER TABLE `cafejoin`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `catecory`
--
ALTER TABLE `catecory`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 테이블의 AUTO_INCREMENT `cafe`
--
ALTER TABLE `cafe`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
--
-- 테이블의 AUTO_INCREMENT `cafejoin`
--
ALTER TABLE `cafejoin`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
--
-- 테이블의 AUTO_INCREMENT `catecory`
--
ALTER TABLE `catecory`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
--
-- 테이블의 AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 테이블의 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
