-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-08-04 08:07:19
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
(5, 3456, '学科(4)', '2020-08-07'),
(6, 1234, '学科(4)', '2020-08-13');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `受講処理テーブル`
--
ALTER TABLE `受講処理テーブル`
  ADD PRIMARY KEY (`受講履歴ID`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `受講処理テーブル`
--
ALTER TABLE `受講処理テーブル`
  MODIFY `受講履歴ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
