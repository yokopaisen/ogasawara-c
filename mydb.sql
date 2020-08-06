-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-08-06 06:03:14
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
-- テーブルの構造 `受講処理テーブル`
--

CREATE TABLE `受講処理テーブル` (
  `受講履歴ID` int(11) NOT NULL,
  `教習生ID` int(11) NOT NULL,
  `学科名` varchar(20) NOT NULL,
  `日付` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `受講処理テーブル`
--

INSERT INTO `受講処理テーブル` (`受講履歴ID`, `教習生ID`, `学科名`, `日付`) VALUES
(1, 1234, '学科(1)', '2020-08-03'),
(2, 2345, '学科(2)', '2020-08-04'),
(3, 1234, '学科(2)', '2020-08-04'),
(4, 3456, '学科(3)', '2020-08-20'),
(5, 3456, '学科(4)', '2020-08-07');

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
(21, 2345, '(仮免許前)効果測定', '2020-08-06', 90),
(22, 2345, '仮免許前試験', '2020-08-08', 90),
(23, 2345, '(卒業検定前)効果測定', '2020-08-12', 80),
(24, 2345, '(卒業検定前)効果測定', '2020-08-20', 90),
(25, 1234, '(仮免許前)効果測定', '2020-08-06', 100),
(26, 1234, '仮免許前試験', '2020-08-08', 90),
(27, 1234, '(卒業検定前)効果測定', '2020-08-20', 90),
(28, 3456, '(仮免許前)効果測定', '2020-08-14', 100),
(29, 4567, '(仮免許前)効果測定', '2020-08-14', 80);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `受講処理テーブル`
--
ALTER TABLE `受講処理テーブル`
  ADD PRIMARY KEY (`受講履歴ID`);

--
-- テーブルのインデックス `教習生個人情報管理テーブル`
--
ALTER TABLE `教習生個人情報管理テーブル`
  ADD PRIMARY KEY (`教習生ID`);

--
-- テーブルのインデックス `試験結果管理テーブル`
--
ALTER TABLE `試験結果管理テーブル`
  ADD PRIMARY KEY (`試験結果管理ID`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `受講処理テーブル`
--
ALTER TABLE `受講処理テーブル`
  MODIFY `受講履歴ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- テーブルのAUTO_INCREMENT `試験結果管理テーブル`
--
ALTER TABLE `試験結果管理テーブル`
  MODIFY `試験結果管理ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
