-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-08-04 08:07:53
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
-- テーブルの構造 `試験結果管理テーブル`
--

CREATE TABLE `試験結果管理テーブル` (
  `試験結果管理ID` int(11) NOT NULL,
  `教習生ID` int(11) NOT NULL,
  `試験の種類` varchar(20) NOT NULL,
  `日付` date NOT NULL,
  `点数` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `試験結果管理テーブル`
--

INSERT INTO `試験結果管理テーブル` (`試験結果管理ID`, `教習生ID`, `試験の種類`, `日付`, `点数`) VALUES
(1, 1234, '(仮免許前)効果測定', '2020-08-03', 80),
(2, 1234, '(仮免許前)効果測定', '2020-08-05', 100),
(3, 2345, '(仮免許前)効果測定', '2020-08-06', 80),
(4, 3456, '(仮免許前)効果測定', '2020-08-22', 100);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `試験結果管理テーブル`
--
ALTER TABLE `試験結果管理テーブル`
  ADD PRIMARY KEY (`試験結果管理ID`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `試験結果管理テーブル`
--
ALTER TABLE `試験結果管理テーブル`
  MODIFY `試験結果管理ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
