-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2022-04-14 08:59:06
-- 伺服器版本: 10.1.30-MariaDB
-- PHP 版本： 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `fyp_ticket`
--

-- --------------------------------------------------------

--
-- 資料表結構 `seat_plan1`
--

CREATE TABLE `seat_plan1` (
  `seatID` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `seat_plan1`
--

INSERT INTO `seat_plan1` (`seatID`, `status`, `type`) VALUES
('A1', 'F', 'student'),
('A2', 'F', 'student'),
('A3', 'T', ''),
('A4', 'F', ''),
('A5', 'F', ''),
('A6', 'F', ''),
('B1', 'F', 'student'),
('B2', 'F', 'student'),
('B3', 'T', ''),
('B4', 'F', ''),
('B5', 'F', ''),
('B6', 'F', ''),
('C1', 'F', 'student'),
('C2', 'F', 'student'),
('C3', 'T', ''),
('C4', 'F', ''),
('C5', 'F', ''),
('C6', 'F', ''),
('D1', 'F', ''),
('D2', 'F', ''),
('D3', 'T', ''),
('D4', 'T', ''),
('D5', 'T', ''),
('D6', 'T', ''),
('E1', 'T', ''),
('E2', 'T', ''),
('E3', 'T', ''),
('E4', 'T', ''),
('E5', 'T', ''),
('E6', 'F', ''),
('F1', 'T', ''),
('F2', 'F', ''),
('F3', 'T', ''),
('F4', 'T', ''),
('F5', 'F', ''),
('F6', 'T', '');

-- --------------------------------------------------------

--
-- 資料表結構 `seat_plan2`
--

CREATE TABLE `seat_plan2` (
  `seatID` varchar(3) NOT NULL,
  `status` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `seat_plan3`
--

CREATE TABLE `seat_plan3` (
  `seatID` varchar(3) NOT NULL,
  `status` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `ticket_record`
--

CREATE TABLE `ticket_record` (
  `movie` varchar(50) NOT NULL,
  `house` int(2) NOT NULL,
  `seat` varchar(3) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `email` varchar(100) NOT NULL,
  `amount` decimal(4,0) NOT NULL,
  `ticketID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `seat_plan1`
--
ALTER TABLE `seat_plan1`
  ADD PRIMARY KEY (`seatID`);

--
-- 資料表索引 `seat_plan2`
--
ALTER TABLE `seat_plan2`
  ADD PRIMARY KEY (`seatID`);

--
-- 資料表索引 `seat_plan3`
--
ALTER TABLE `seat_plan3`
  ADD PRIMARY KEY (`seatID`);

--
-- 資料表索引 `ticket_record`
--
ALTER TABLE `ticket_record`
  ADD PRIMARY KEY (`ticketID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
