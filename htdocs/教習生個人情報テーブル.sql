-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-08-04 08:05:42
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `mydb`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `教習生個人情報管理テーブル`
--

CREATE TABLE `教習生個人情報管理テーブル` (
  `教習生ID` int(11) NOT NULL,
  `パスワード` int(11) NOT NULL,
  `氏名` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `教習生個人情報管理テーブル`
--

INSERT INTO `教習生個人情報管理テーブル` (`教習生ID`, `パスワード`, `氏名`) VALUES
(1234, 19990927, '久松月彦'),
(2345, 20000314, '折口翔'),
(3456, 20000321, '立野陽子'),
(4567, 19990913, '島田叶夢');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `教習生個人情報管理テーブル`
--
ALTER TABLE `教習生個人情報管理テーブル`
  ADD PRIMARY KEY (`教習生ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
