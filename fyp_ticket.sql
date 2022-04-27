-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2022-04-18 15:27:42
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
-- 資料表結構 `cinema`
--

CREATE TABLE `cinema` (
  `cinemaName` varchar(50) NOT NULL,
  `cinemaID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `cinema`
--

INSERT INTO `cinema` (`cinemaName`, `cinemaID`) VALUES
('Causeway Bay Cinema', 'CWB'),
('Mong Kok Cinema ', 'MK'),
('Tsing Yi Cinema ', 'TY');

-- --------------------------------------------------------

--
-- 資料表結構 `cwb_cinema`
--

CREATE TABLE `cwb_cinema` (
  `houseID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `cwb_cinema`
--

INSERT INTO `cwb_cinema` (`houseID`) VALUES
('01'),
('02'),
('03');

-- --------------------------------------------------------

--
-- 資料表結構 `cwb_house_record`
--

CREATE TABLE `cwb_house_record` (
  `movie` varchar(100) NOT NULL,
  `house` varchar(3) NOT NULL,
  `seatID` varchar(3) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `ticketID` varchar(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `position` varchar(2) NOT NULL,
  `branchSeatID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `cwb_house_record`
--

INSERT INTO `cwb_house_record` (`movie`, `house`, `seatID`, `date`, `time`, `email`, `ticketID`, `type`, `position`, `branchSeatID`) VALUES
('Spider-Man: No Way Home', '01', 'A1', '2022-04-19', '09:00:00', '', '', '', '', 'ty01A1'),
('Spider-Man: No Way Home', '01', 'A2', '2022-04-19', '09:00:00', '', '', '', '', 'ty01A2'),
('Spider-Man: No Way Home', '01', 'A3', '2022-04-19', '09:00:00', '', '', '', '', 'ty01A3'),
('Spider-Man: No Way Home', '01', 'A4', '2022-04-19', '09:00:00', '', '', '', '', 'ty01A4'),
('Spider-Man: No Way Home', '01', 'A5', '2022-04-19', '09:00:00', '', '', '', '', 'ty01A5'),
('Spider-Man: No Way Home', '01', 'A6', '2022-04-19', '09:00:00', '', '', '', '', 'ty01A6'),
('Spider-Man: No Way Home', '01', 'B1', '2022-04-19', '09:00:00', '', '', '', '', 'ty01B1'),
('Spider-Man: No Way Home', '01', 'B2', '2022-04-19', '09:00:00', '', '', '', '', 'ty01B2'),
('Spider-Man: No Way Home', '01', 'B3', '2022-04-19', '09:00:00', '', '', '', '', 'ty01B3'),
('Spider-Man: No Way Home', '01', 'B4', '2022-04-19', '09:00:00', '', '', '', '', 'ty01B4'),
('Spider-Man: No Way Home', '01', 'B5', '2022-04-19', '09:00:00', '', '', '', '', 'ty01B5'),
('Spider-Man: No Way Home', '01', 'B6', '2022-04-19', '09:00:00', '', '', '', '', 'ty01B6'),
('Spider-Man: No Way Home', '01', 'C1', '2022-04-19', '09:00:00', '', '', '', '', 'ty01C1'),
('Spider-Man: No Way Home', '01', 'C2', '2022-04-19', '09:00:00', '', '', '', '', 'ty01C2'),
('Spider-Man: No Way Home', '01', 'C3', '2022-04-19', '09:00:00', '', '', '', '', 'ty01C3'),
('Spider-Man: No Way Home', '01', 'C4', '2022-04-19', '09:00:00', '', '', '', '', 'ty01C4'),
('Spider-Man: No Way Home', '01', 'C5', '2022-04-19', '09:00:00', '', '', '', '', 'ty01C5'),
('Spider-Man: No Way Home', '01', 'C6', '2022-04-19', '09:00:00', '', '', '', '', 'ty01C6'),
('Spider-Man: No Way Home', '01', 'D1', '2022-04-19', '09:00:00', '', '', '', '', 'ty01D1'),
('Spider-Man: No Way Home', '01', 'D2', '2022-04-19', '09:00:00', '', '', '', '', 'ty01D2'),
('Spider-Man: No Way Home', '01', 'D3', '2022-04-19', '09:00:00', '', '', '', '', 'ty01D3'),
('Spider-Man: No Way Home', '01', 'D4', '2022-04-19', '09:00:00', '', '', '', '', 'ty01D4'),
('Spider-Man: No Way Home', '01', 'D5', '2022-04-19', '09:00:00', '', '', '', '', 'ty01D5'),
('Spider-Man: No Way Home', '01', 'D6', '2022-04-19', '09:00:00', '', '', '', '', 'ty01D6'),
('Spider-Man: No Way Home', '01', 'E1', '2022-04-19', '09:00:00', '', '', '', '', 'ty01E1'),
('Spider-Man: No Way Home', '01', 'E2', '2022-04-19', '09:00:00', '', '', '', '', 'ty01E2'),
('Spider-Man: No Way Home', '01', 'E3', '2022-04-19', '09:00:00', '', '', '', '', 'ty01E3'),
('Spider-Man: No Way Home', '01', 'E4', '2022-04-19', '09:00:00', '', '', '', '', 'ty01E4'),
('Spider-Man: No Way Home', '01', 'E5', '2022-04-19', '09:00:00', '', '', '', '', 'ty01E5'),
('Spider-Man: No Way Home', '01', 'E6', '2022-04-19', '09:00:00', '', '', '', '', 'ty01E6'),
('Spider-Man: No Way Home', '01', 'F1', '2022-04-19', '09:00:00', '', '', '', '', 'ty01F1'),
('Spider-Man: No Way Home', '01', 'F2', '2022-04-19', '09:00:00', '', '', '', '', 'ty01F2'),
('Spider-Man: No Way Home', '01', 'F3', '2022-04-19', '09:00:00', '', '', '', '', 'ty01F3'),
('Spider-Man: No Way Home', '01', 'F4', '2022-04-19', '09:00:00', '', '', '', '', 'ty01F4'),
('Spider-Man: No Way Home', '01', 'F5', '2022-04-19', '09:00:00', '', '', '', '', 'ty01F5'),
('Spider-Man: No Way Home', '01', 'F6', '2022-04-19', '09:00:00', '', '', '', '', 'ty01F6'),
('Spider-Man: No Way Home', '02', 'A1', '2022-04-19', '15:15:00', '', '', '', '', 'ty02A1'),
('Spider-Man: No Way Home', '02', 'A2', '2022-04-19', '15:15:00', '', '', '', '', 'ty02A2'),
('Spider-Man: No Way Home', '02', 'A3', '2022-04-19', '15:15:00', '', '', '', '', 'ty02A3'),
('Spider-Man: No Way Home', '02', 'A4', '2022-04-19', '15:15:00', '', '', '', '', 'ty02A4'),
('Spider-Man: No Way Home', '02', 'A5', '2022-04-19', '15:15:00', '', '', '', '', 'ty02A5'),
('Spider-Man: No Way Home', '02', 'A6', '2022-04-19', '15:15:00', '', '', '', '', 'ty02A6'),
('Spider-Man: No Way Home', '02', 'A7', '2022-04-19', '15:15:00', '', '', '', '', 'ty02A7'),
('Spider-Man: No Way Home', '02', 'A8', '2022-04-19', '15:15:00', '', '', '', '', 'ty02A8'),
('Spider-Man: No Way Home', '02', 'A9', '2022-04-19', '15:15:00', '', '', '', '', 'ty02A9'),
('Spider-Man: No Way Home', '02', 'B1', '2022-04-19', '15:15:00', '', '', '', '', 'ty02B1'),
('Spider-Man: No Way Home', '02', 'B2', '2022-04-19', '15:15:00', '', '', '', '', 'ty02B2'),
('Spider-Man: No Way Home', '02', 'B3', '2022-04-19', '15:15:00', '', '', '', '', 'ty02B3'),
('Spider-Man: No Way Home', '02', 'B4', '2022-04-19', '15:15:00', '', '', '', '', 'ty02B4'),
('Spider-Man: No Way Home', '02', 'B5', '2022-04-19', '15:15:00', '', '', '', '', 'ty02B5'),
('Spider-Man: No Way Home', '02', 'B6', '2022-04-19', '15:15:00', '', '', '', '', 'ty02B6'),
('Spider-Man: No Way Home', '02', 'B7', '2022-04-19', '15:15:00', '', '', '', '', 'ty02B7'),
('Spider-Man: No Way Home', '02', 'B8', '2022-04-19', '15:15:00', '', '', '', '', 'ty02B8'),
('Spider-Man: No Way Home', '02', 'B9', '2022-04-19', '15:15:00', '', '', '', '', 'ty02B9'),
('Spider-Man: No Way Home', '02', 'C1', '2022-04-19', '15:15:00', '', '', '', '', 'ty02C1'),
('Spider-Man: No Way Home', '02', 'C2', '2022-04-19', '15:15:00', '', '', '', '', 'ty02C2'),
('Spider-Man: No Way Home', '02', 'C3', '2022-04-19', '15:15:00', '', '', '', '', 'ty02C3'),
('Spider-Man: No Way Home', '02', 'C4', '2022-04-19', '15:15:00', '', '', '', '', 'ty02C4'),
('Spider-Man: No Way Home', '02', 'C5', '2022-04-19', '15:15:00', '', '', '', '', 'ty02C5'),
('Spider-Man: No Way Home', '02', 'C6', '2022-04-19', '15:15:00', '', '', '', '', 'ty02C6'),
('Spider-Man: No Way Home', '02', 'C7', '2022-04-19', '15:15:00', '', '', '', '', 'ty02C7'),
('Spider-Man: No Way Home', '02', 'C8', '2022-04-19', '15:15:00', '', '', '', '', 'ty02C8'),
('Spider-Man: No Way Home', '02', 'C9', '2022-04-19', '15:15:00', '', '', '', '', 'ty02C9'),
('Spider-Man: No Way Home', '02', 'D1', '2022-04-19', '15:15:00', '', '', '', '', 'ty02D1'),
('Spider-Man: No Way Home', '02', 'D2', '2022-04-19', '15:15:00', '', '', '', '', 'ty02D2'),
('Spider-Man: No Way Home', '02', 'D3', '2022-04-19', '15:15:00', '', '', '', '', 'ty02D3'),
('Spider-Man: No Way Home', '02', 'D4', '2022-04-19', '15:15:00', '', '', '', '', 'ty02D4'),
('Spider-Man: No Way Home', '02', 'D5', '2022-04-19', '15:15:00', '', '', '', '', 'ty02D5'),
('Spider-Man: No Way Home', '02', 'D6', '2022-04-19', '15:15:00', '', '', '', '', 'ty02D6'),
('Spider-Man: No Way Home', '02', 'E1', '2022-04-19', '15:15:00', '', '', '', '', 'ty02E1'),
('Spider-Man: No Way Home', '02', 'E2', '2022-04-19', '15:15:00', '', '', '', '', 'ty02E2'),
('Spider-Man: No Way Home', '02', 'E3', '2022-04-19', '15:15:00', '', '', '', '', 'ty02E3'),
('Spider-Man: No Way Home', '02', 'E4', '2022-04-19', '15:15:00', '', '', '', '', 'ty02E4'),
('Spider-Man: No Way Home', '02', 'E5', '2022-04-19', '15:15:00', '', '', '', '', 'ty02E5'),
('Spider-Man: No Way Home', '02', 'E6', '2022-04-19', '15:15:00', '', '', '', '', 'ty02E6'),
('Spider-Man: No Way Home', '02', 'F1', '2022-04-19', '15:15:00', '', '', '', '', 'ty02F1'),
('Spider-Man: No Way Home', '02', 'F2', '2022-04-19', '15:15:00', '', '', '', '', 'ty02F2'),
('Spider-Man: No Way Home', '02', 'F3', '2022-04-19', '15:15:00', '', '', '', '', 'ty02F3'),
('Spider-Man: No Way Home', '02', 'F4', '2022-04-19', '15:15:00', '', '', '', '', 'ty02F4'),
('Spider-Man: No Way Home', '02', 'F5', '2022-04-19', '15:15:00', '', '', '', '', 'ty02F5'),
('Spider-Man: No Way Home', '02', 'F6', '2022-04-19', '15:15:00', '', '', '', '', 'ty02F6'),
('Spider-Man: No Way Home', '02', 'G1', '2022-04-19', '15:15:00', '', '', '', '', 'ty02G1'),
('Spider-Man: No Way Home', '02', 'G2', '2022-04-19', '15:15:00', '', '', '', '', 'ty02G2'),
('Spider-Man: No Way Home', '03', 'A1', '2022-04-19', '18:30:00', '', '', '', '', 'ty03A1'),
('Spider-Man: No Way Home', '03', 'A2', '2022-04-19', '18:30:00', '', '', '', '', 'ty03A2'),
('Spider-Man: No Way Home', '03', 'A3', '2022-04-19', '18:30:00', '', '', '', '', 'ty03A3'),
('Spider-Man: No Way Home', '03', 'A4', '2022-04-19', '18:30:00', '', '', '', '', 'ty03A4'),
('Spider-Man: No Way Home', '03', 'A5', '2022-04-19', '18:30:00', '', '', '', '', 'ty03A5'),
('Spider-Man: No Way Home', '03', 'A6', '2022-04-19', '18:30:00', '', '', '', '', 'ty03A6'),
('Spider-Man: No Way Home', '03', 'A7', '2022-04-19', '18:30:00', '', '', '', '', 'ty03A7'),
('Spider-Man: No Way Home', '03', 'A8', '2022-04-19', '18:30:00', '', '', '', '', 'ty03A8'),
('Spider-Man: No Way Home', '03', 'A9', '2022-04-19', '18:30:00', '', '', '', '', 'ty03A9'),
('Spider-Man: No Way Home', '03', 'B1', '2022-04-19', '18:30:00', '', '', '', '', 'ty03B1'),
('Spider-Man: No Way Home', '03', 'B2', '2022-04-19', '18:30:00', '', '', '', '', 'ty03B2'),
('Spider-Man: No Way Home', '03', 'B3', '2022-04-19', '18:30:00', '', '', '', '', 'ty03B3'),
('Spider-Man: No Way Home', '03', 'B4', '2022-04-19', '18:30:00', '', '', '', '', 'ty03B4'),
('Spider-Man: No Way Home', '03', 'B5', '2022-04-19', '18:30:00', '', '', '', '', 'ty03B5'),
('Spider-Man: No Way Home', '03', 'B6', '2022-04-19', '18:30:00', '', '', '', '', 'ty03B6'),
('Spider-Man: No Way Home', '03', 'B7', '2022-04-19', '18:30:00', '', '', '', '', 'ty03B7'),
('Spider-Man: No Way Home', '03', 'B8', '2022-04-19', '18:30:00', '', '', '', '', 'ty03B8'),
('Spider-Man: No Way Home', '03', 'B9', '2022-04-19', '18:30:00', '', '', '', '', 'ty03B9'),
('Spider-Man: No Way Home', '03', 'C1', '2022-04-19', '18:30:00', '', '', '', '', 'ty03C1'),
('Spider-Man: No Way Home', '03', 'C2', '2022-04-19', '18:30:00', '', '', '', '', 'ty03C2'),
('Spider-Man: No Way Home', '03', 'C3', '2022-04-19', '18:30:00', '', '', '', '', 'ty03C3'),
('Spider-Man: No Way Home', '03', 'C4', '2022-04-19', '18:30:00', '', '', '', '', 'ty03C4'),
('Spider-Man: No Way Home', '03', 'C5', '2022-04-19', '18:30:00', '', '', '', '', 'ty03C5'),
('Spider-Man: No Way Home', '03', 'C6', '2022-04-19', '18:30:00', '', '', '', '', 'ty03C6'),
('Spider-Man: No Way Home', '03', 'C7', '2022-04-19', '18:30:00', '', '', '', '', 'ty03C7'),
('Spider-Man: No Way Home', '03', 'C8', '2022-04-19', '18:30:00', '', '', '', '', 'ty03C8'),
('Spider-Man: No Way Home', '03', 'C9', '2022-04-19', '18:30:00', '', '', '', '', 'ty03C9'),
('Spider-Man: No Way Home', '03', 'D1', '2022-04-19', '18:30:00', '', '', '', '', 'ty03D1'),
('Spider-Man: No Way Home', '03', 'D2', '2022-04-19', '18:30:00', '', '', '', '', 'ty03D2'),
('Spider-Man: No Way Home', '03', 'D3', '2022-04-19', '18:30:00', '', '', '', '', 'ty03D3'),
('Spider-Man: No Way Home', '03', 'D4', '2022-04-19', '18:30:00', '', '', '', '', 'ty03D4'),
('Spider-Man: No Way Home', '03', 'D5', '2022-04-19', '18:30:00', '', '', '', '', 'ty03D5'),
('Spider-Man: No Way Home', '03', 'D6', '2022-04-19', '18:30:00', '', '', '', '', 'ty03D6'),
('Spider-Man: No Way Home', '03', 'D7', '2022-04-19', '18:30:00', '', '', '', '', 'ty03D7'),
('Spider-Man: No Way Home', '03', 'D8', '2022-04-19', '18:30:00', '', '', '', '', 'ty03D8'),
('Spider-Man: No Way Home', '03', 'D9', '2022-04-19', '18:30:00', '', '', '', '', 'ty03D9'),
('Spider-Man: No Way Home', '03', 'E1', '2022-04-19', '18:30:00', '', '', '', '', 'ty03E1'),
('Spider-Man: No Way Home', '03', 'E2', '2022-04-19', '18:30:00', '', '', '', '', 'ty03E2'),
('Spider-Man: No Way Home', '03', 'E3', '2022-04-19', '18:30:00', '', '', '', '', 'ty03E3'),
('Spider-Man: No Way Home', '03', 'E4', '2022-04-19', '18:30:00', '', '', '', '', 'ty03E4'),
('Spider-Man: No Way Home', '03', 'E5', '2022-04-19', '18:30:00', '', '', '', '', 'ty03E5'),
('Spider-Man: No Way Home', '03', 'E6', '2022-04-19', '18:30:00', '', '', '', '', 'ty03E6'),
('Spider-Man: No Way Home', '03', 'E7', '2022-04-19', '18:30:00', '', '', '', '', 'ty03E7'),
('Spider-Man: No Way Home', '03', 'E8', '2022-04-19', '18:30:00', '', '', '', '', 'ty03E8'),
('Spider-Man: No Way Home', '03', 'E9', '2022-04-19', '18:30:00', '', '', '', '', 'ty03E9'),
('Spider-Man: No Way Home', '03', 'F1', '2022-04-19', '18:30:00', '', '', '', '', 'ty03F1'),
('Spider-Man: No Way Home', '03', 'F2', '2022-04-19', '18:30:00', '', '', '', '', 'ty03F2'),
('Spider-Man: No Way Home', '03', 'F3', '2022-04-19', '18:30:00', '', '', '', '', 'ty03F3'),
('Spider-Man: No Way Home', '03', 'F4', '2022-04-19', '18:30:00', '', '', '', '', 'ty03F4'),
('Spider-Man: No Way Home', '03', 'F5', '2022-04-19', '18:30:00', '', '', '', '', 'ty03F5'),
('Spider-Man: No Way Home', '03', 'F6', '2022-04-19', '18:30:00', '', '', '', '', 'ty03F6'),
('Spider-Man: No Way Home', '03', 'F7', '2022-04-19', '18:30:00', '', '', '', '', 'ty03F7'),
('Spider-Man: No Way Home', '03', 'F8', '2022-04-19', '18:30:00', '', '', '', '', 'ty03F8'),
('Spider-Man: No Way Home', '03', 'F9', '2022-04-19', '18:30:00', '', '', '', '', 'ty03F9'),
('Spider-Man: No Way Home', '03', 'G1', '2022-04-19', '18:30:00', '', '', '', '', 'ty03G1'),
('Spider-Man: No Way Home', '03', 'G2', '2022-04-19', '18:30:00', '', '', '', '', 'ty03G2'),
('Spider-Man: No Way Home', '03', 'G3', '2022-04-19', '18:30:00', '', '', '', '', 'ty03G3'),
('Spider-Man: No Way Home', '03', 'G4', '2022-04-19', '18:30:00', '', '', '', '', 'ty03G4'),
('Spider-Man: No Way Home', '03', 'G5', '2022-04-19', '18:30:00', '', '', '', '', 'ty03G5'),
('Spider-Man: No Way Home', '03', 'G6', '2022-04-19', '18:30:00', '', '', '', '', 'ty03G6'),
('Spider-Man: No Way Home', '03', 'G7', '2022-04-19', '18:30:00', '', '', '', '', 'ty03G7'),
('Spider-Man: No Way Home', '03', 'G8', '2022-04-19', '18:30:00', '', '', '', '', 'ty03G8'),
('Spider-Man: No Way Home', '03', 'G9', '2022-04-19', '18:30:00', '', '', '', '', 'ty03G9'),
('Spider-Man: No Way Home', '03', 'H1', '2022-04-19', '18:30:00', '', '', '', '', 'ty03H1'),
('Spider-Man: No Way Home', '03', 'H2', '2022-04-19', '18:30:00', '', '', '', '', 'ty03H2'),
('Spider-Man: No Way Home', '03', 'H3', '2022-04-19', '18:30:00', '', '', '', '', 'ty03H3'),
('Spider-Man: No Way Home', '03', 'H4', '2022-04-19', '18:30:00', '', '', '', '', 'ty03H4'),
('Spider-Man: No Way Home', '03', 'H5', '2022-04-19', '18:30:00', '', '', '', '', 'ty03H5'),
('Spider-Man: No Way Home', '03', 'H6', '2022-04-19', '18:30:00', '', '', '', '', 'ty03H6'),
('Spider-Man: No Way Home', '03', 'H7', '2022-04-19', '18:30:00', '', '', '', '', 'ty03H7'),
('Spider-Man: No Way Home', '03', 'H8', '2022-04-19', '18:30:00', '', '', '', '', 'ty03H8'),
('Spider-Man: No Way Home', '03', 'H9', '2022-04-19', '18:30:00', '', '', '', '', 'ty03H9'),
('Spider-Man: No Way Home', '03', 'I1', '2022-04-19', '18:30:00', '', '', '', '', 'ty03I1'),
('Spider-Man: No Way Home', '03', 'I2', '2022-04-19', '18:30:00', '', '', '', '', 'ty03I2'),
('Spider-Man: No Way Home', '03', 'I3', '2022-04-19', '18:30:00', '', '', '', '', 'ty03I3'),
('Spider-Man: No Way Home', '03', 'I4', '2022-04-19', '18:30:00', '', '', '', '', 'ty03I4'),
('Spider-Man: No Way Home', '03', 'I5', '2022-04-19', '18:30:00', '', '', '', '', 'ty03I5'),
('Spider-Man: No Way Home', '03', 'I6', '2022-04-19', '18:30:00', '', '', '', '', 'ty03I6'),
('Spider-Man: No Way Home', '03', 'I7', '2022-04-19', '18:30:00', '', '', '', '', 'ty03I7'),
('Spider-Man: No Way Home', '03', 'I8', '2022-04-19', '18:30:00', '', '', '', '', 'ty03I8'),
('Spider-Man: No Way Home', '03', 'I9', '2022-04-19', '18:30:00', '', '', '', '', 'ty03I9');

-- --------------------------------------------------------

--
-- 資料表結構 `cwb_seat_plan1`
--

CREATE TABLE `cwb_seat_plan1` (
  `seatID` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `houseID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `cwb_seat_plan2`
--

CREATE TABLE `cwb_seat_plan2` (
  `seatID` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `houseID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `cwb_seat_plan3`
--

CREATE TABLE `cwb_seat_plan3` (
  `seatID` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `houseID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `mk_cinema`
--

CREATE TABLE `mk_cinema` (
  `houseID` varchar(10) NOT NULL,
  `totalSeat` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `mk_cinema`
--

INSERT INTO `mk_cinema` (`houseID`, `totalSeat`) VALUES
('01', 0),
('02', 0),
('03', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `mk_house_record`
--

CREATE TABLE `mk_house_record` (
  `movie` varchar(100) NOT NULL,
  `house` varchar(3) NOT NULL,
  `seatID` varchar(3) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `email` varchar(3) NOT NULL,
  `ticketID` varchar(11) DEFAULT NULL,
  `type` int(20) DEFAULT NULL,
  `position` varchar(2) NOT NULL,
  `branchSeatID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `mk_house_record`
--

INSERT INTO `mk_house_record` (`movie`, `house`, `seatID`, `date`, `time`, `email`, `ticketID`, `type`, `position`, `branchSeatID`) VALUES
('Spider-Man: No Way Home', '01', 'A1', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01A1'),
('Spider-Man: No Way Home', '01', 'A2', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01A2'),
('Spider-Man: No Way Home', '01', 'A3', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01A3'),
('Spider-Man: No Way Home', '01', 'A4', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01A4'),
('Spider-Man: No Way Home', '01', 'A5', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01A5'),
('Spider-Man: No Way Home', '01', 'A6', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01A6'),
('Spider-Man: No Way Home', '01', 'B1', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01B1'),
('Spider-Man: No Way Home', '01', 'B2', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01B2'),
('Spider-Man: No Way Home', '01', 'B3', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01B3'),
('Spider-Man: No Way Home', '01', 'B4', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01B4'),
('Spider-Man: No Way Home', '01', 'B5', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01B5'),
('Spider-Man: No Way Home', '01', 'B6', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01B6'),
('Spider-Man: No Way Home', '01', 'C1', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01C1'),
('Spider-Man: No Way Home', '01', 'C2', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01C2'),
('Spider-Man: No Way Home', '01', 'C3', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01C3'),
('Spider-Man: No Way Home', '01', 'C4', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01C4'),
('Spider-Man: No Way Home', '01', 'C5', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01C5'),
('Spider-Man: No Way Home', '01', 'C6', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01C6'),
('Spider-Man: No Way Home', '01', 'D1', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01D1'),
('Spider-Man: No Way Home', '01', 'D2', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01D2'),
('Spider-Man: No Way Home', '01', 'D3', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01D3'),
('Spider-Man: No Way Home', '01', 'D4', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01D4'),
('Spider-Man: No Way Home', '01', 'D5', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01D5'),
('Spider-Man: No Way Home', '01', 'D6', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01D6'),
('Spider-Man: No Way Home', '01', 'E1', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01E1'),
('Spider-Man: No Way Home', '01', 'E2', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01E2'),
('Spider-Man: No Way Home', '01', 'E3', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01E3'),
('Spider-Man: No Way Home', '01', 'E4', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01E4'),
('Spider-Man: No Way Home', '01', 'E5', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01E5'),
('Spider-Man: No Way Home', '01', 'E6', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01E6'),
('Spider-Man: No Way Home', '01', 'F1', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01F1'),
('Spider-Man: No Way Home', '01', 'F2', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01F2'),
('Spider-Man: No Way Home', '01', 'F3', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01F3'),
('Spider-Man: No Way Home', '01', 'F4', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01F4'),
('Spider-Man: No Way Home', '01', 'F5', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01F5'),
('Spider-Man: No Way Home', '01', 'F6', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01F6'),
('Spider-Man: No Way Home', '02', 'A1', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A1'),
('Spider-Man: No Way Home', '02', 'A2', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A2'),
('Spider-Man: No Way Home', '02', 'A3', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A3'),
('Spider-Man: No Way Home', '02', 'A4', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A4'),
('Spider-Man: No Way Home', '02', 'A5', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A5'),
('Spider-Man: No Way Home', '02', 'A6', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A6'),
('Spider-Man: No Way Home', '02', 'A7', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A7'),
('Spider-Man: No Way Home', '02', 'A8', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A8'),
('Spider-Man: No Way Home', '02', 'A9', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A9'),
('Spider-Man: No Way Home', '02', 'B1', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B1'),
('Spider-Man: No Way Home', '02', 'B2', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B2'),
('Spider-Man: No Way Home', '02', 'B3', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B3'),
('Spider-Man: No Way Home', '02', 'B4', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B4'),
('Spider-Man: No Way Home', '02', 'B5', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B5'),
('Spider-Man: No Way Home', '02', 'B6', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B6'),
('Spider-Man: No Way Home', '02', 'B7', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B7'),
('Spider-Man: No Way Home', '02', 'B8', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B8'),
('Spider-Man: No Way Home', '02', 'B9', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B9'),
('Spider-Man: No Way Home', '02', 'C1', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C1'),
('Spider-Man: No Way Home', '02', 'C2', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C2'),
('Spider-Man: No Way Home', '02', 'C3', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C3'),
('Spider-Man: No Way Home', '02', 'C4', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C4'),
('Spider-Man: No Way Home', '02', 'C5', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C5'),
('Spider-Man: No Way Home', '02', 'C6', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C6'),
('Spider-Man: No Way Home', '02', 'C7', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C7'),
('Spider-Man: No Way Home', '02', 'C8', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C8'),
('Spider-Man: No Way Home', '02', 'C9', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C9'),
('Spider-Man: No Way Home', '02', 'D1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02D1'),
('Spider-Man: No Way Home', '02', 'D2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02D2'),
('Spider-Man: No Way Home', '02', 'D3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02D3'),
('Spider-Man: No Way Home', '02', 'D4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02D4'),
('Spider-Man: No Way Home', '02', 'D5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02D5'),
('Spider-Man: No Way Home', '02', 'D6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02D6'),
('Spider-Man: No Way Home', '02', 'E1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02E1'),
('Spider-Man: No Way Home', '02', 'E2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02E2'),
('Spider-Man: No Way Home', '02', 'E3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02E3'),
('Spider-Man: No Way Home', '02', 'E4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02E4'),
('Spider-Man: No Way Home', '02', 'E5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02E5'),
('Spider-Man: No Way Home', '02', 'E6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02E6'),
('Spider-Man: No Way Home', '02', 'F1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02F1'),
('Spider-Man: No Way Home', '02', 'F2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02F2'),
('Spider-Man: No Way Home', '02', 'F3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02F3'),
('Spider-Man: No Way Home', '02', 'F4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02F4'),
('Spider-Man: No Way Home', '02', 'F5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02F5'),
('Spider-Man: No Way Home', '02', 'F6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02F6'),
('Spider-Man: No Way Home', '02', 'G1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02G1'),
('Spider-Man: No Way Home', '02', 'G2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02G2'),
('Spider-Man: No Way Home', '03', 'A1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A1'),
('Spider-Man: No Way Home', '03', 'A2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A2'),
('Spider-Man: No Way Home', '03', 'A3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A3'),
('Spider-Man: No Way Home', '03', 'A4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A4'),
('Spider-Man: No Way Home', '03', 'A5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A5'),
('Spider-Man: No Way Home', '03', 'A6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A6'),
('Spider-Man: No Way Home', '03', 'A7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A7'),
('Spider-Man: No Way Home', '03', 'A8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A8'),
('Spider-Man: No Way Home', '03', 'A9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A9'),
('Spider-Man: No Way Home', '03', 'B1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B1'),
('Spider-Man: No Way Home', '03', 'B2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B2'),
('Spider-Man: No Way Home', '03', 'B3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B3'),
('Spider-Man: No Way Home', '03', 'B4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B4'),
('Spider-Man: No Way Home', '03', 'B5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B5'),
('Spider-Man: No Way Home', '03', 'B6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B6'),
('Spider-Man: No Way Home', '03', 'B7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B7'),
('Spider-Man: No Way Home', '03', 'B8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B8'),
('Spider-Man: No Way Home', '03', 'B9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B9'),
('Spider-Man: No Way Home', '03', 'C1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C1'),
('Spider-Man: No Way Home', '03', 'C2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C2'),
('Spider-Man: No Way Home', '03', 'C3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C3'),
('Spider-Man: No Way Home', '03', 'C4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C4'),
('Spider-Man: No Way Home', '03', 'C5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C5'),
('Spider-Man: No Way Home', '03', 'C6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C6'),
('Spider-Man: No Way Home', '03', 'C7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C7'),
('Spider-Man: No Way Home', '03', 'C8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C8'),
('Spider-Man: No Way Home', '03', 'C9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C9'),
('Spider-Man: No Way Home', '03', 'D1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D1'),
('Spider-Man: No Way Home', '03', 'D2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D2'),
('Spider-Man: No Way Home', '03', 'D3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D3'),
('Spider-Man: No Way Home', '03', 'D4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D4'),
('Spider-Man: No Way Home', '03', 'D5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D5'),
('Spider-Man: No Way Home', '03', 'D6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D6'),
('Spider-Man: No Way Home', '03', 'D7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D7'),
('Spider-Man: No Way Home', '03', 'D8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D8'),
('Spider-Man: No Way Home', '03', 'D9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D9'),
('Spider-Man: No Way Home', '03', 'E1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E1'),
('Spider-Man: No Way Home', '03', 'E2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E2'),
('Spider-Man: No Way Home', '03', 'E3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E3'),
('Spider-Man: No Way Home', '03', 'E4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E4'),
('Spider-Man: No Way Home', '03', 'E5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E5'),
('Spider-Man: No Way Home', '03', 'E6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E6'),
('Spider-Man: No Way Home', '03', 'E7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E7'),
('Spider-Man: No Way Home', '03', 'E8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E8'),
('Spider-Man: No Way Home', '03', 'E9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E9'),
('Spider-Man: No Way Home', '03', 'F1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F1'),
('Spider-Man: No Way Home', '03', 'F2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F2'),
('Spider-Man: No Way Home', '03', 'F3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F3'),
('Spider-Man: No Way Home', '03', 'F4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F4'),
('Spider-Man: No Way Home', '03', 'F5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F5'),
('Spider-Man: No Way Home', '03', 'F6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F6'),
('Spider-Man: No Way Home', '03', 'F7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F7'),
('Spider-Man: No Way Home', '03', 'F8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F8'),
('Spider-Man: No Way Home', '03', 'F9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F9'),
('Spider-Man: No Way Home', '03', 'G1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G1'),
('Spider-Man: No Way Home', '03', 'G2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G2'),
('Spider-Man: No Way Home', '03', 'G3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G3'),
('Spider-Man: No Way Home', '03', 'G4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G4'),
('Spider-Man: No Way Home', '03', 'G5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G5'),
('Spider-Man: No Way Home', '03', 'G6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G6'),
('Spider-Man: No Way Home', '03', 'G7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G7'),
('Spider-Man: No Way Home', '03', 'G8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G8'),
('Spider-Man: No Way Home', '03', 'G9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G9'),
('Spider-Man: No Way Home', '03', 'H1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H1'),
('Spider-Man: No Way Home', '03', 'H2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H2'),
('Spider-Man: No Way Home', '03', 'H3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H3'),
('Spider-Man: No Way Home', '03', 'H4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H4'),
('Spider-Man: No Way Home', '03', 'H5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H5'),
('Spider-Man: No Way Home', '03', 'H6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H6'),
('Spider-Man: No Way Home', '03', 'H7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H7'),
('Spider-Man: No Way Home', '03', 'H8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H8'),
('Spider-Man: No Way Home', '03', 'H9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H9'),
('Spider-Man: No Way Home', '03', 'I1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I1'),
('Spider-Man: No Way Home', '03', 'I2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I2'),
('Spider-Man: No Way Home', '03', 'I3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I3'),
('Spider-Man: No Way Home', '03', 'I4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I4'),
('Spider-Man: No Way Home', '03', 'I5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I5'),
('Spider-Man: No Way Home', '03', 'I6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I6'),
('Spider-Man: No Way Home', '03', 'I7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I7'),
('Spider-Man: No Way Home', '03', 'I8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I8'),
('Spider-Man: No Way Home', '03', 'I9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I9');

-- --------------------------------------------------------

--
-- 資料表結構 `mk_seat_plan1`
--

CREATE TABLE `mk_seat_plan1` (
  `seatID` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `houseID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `mk_seat_plan2`
--

CREATE TABLE `mk_seat_plan2` (
  `seatID` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `houseID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `mk_seat_plan3`
--

CREATE TABLE `mk_seat_plan3` (
  `seatID` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `houseID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `ticketID` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `ticket_record`
--

INSERT INTO `ticket_record` (`movie`, `house`, `seat`, `date`, `time`, `email`, `amount`, `ticketID`, `type`) VALUES
('xxx', 1, 'A3', '2022-04-18', '18:52:41', 'lapyanli@gmail.com', '0', 'A3534317016', 'Student'),
('xxx', 1, 'B3', '2022-04-18', '18:52:41', 'lapyanli@gmail.com', '0', 'B3121807861', 'Student'),
('xxx', 1, 'B3', '2022-04-18', '18:35:05', 'lapyanli@gmail.com', '0', 'B3423931884', 'Student'),
('xxx', 1, 'C3', '2022-04-18', '18:35:05', 'lapyanli@gmail.com', '0', 'C3619515991', 'Student');

-- --------------------------------------------------------

--
-- 資料表結構 `ty_cinema`
--

CREATE TABLE `ty_cinema` (
  `houseID` varchar(10) NOT NULL,
  `totalSeat` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `ty_cinema`
--

INSERT INTO `ty_cinema` (`houseID`, `totalSeat`) VALUES
('01', 0),
('02', 0),
('03', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `ty_house_record`
--

CREATE TABLE `ty_house_record` (
  `movie` varchar(100) NOT NULL,
  `house` varchar(3) NOT NULL,
  `seatID` varchar(3) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `ticketID` varchar(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `position` varchar(2) NOT NULL,
  `branchSeatID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `ty_house_record`
--

INSERT INTO `ty_house_record` (`movie`, `house`, `seatID`, `date`, `time`, `email`, `ticketID`, `type`, `position`, `branchSeatID`) VALUES
('Spider-Man: No Way Home', '01', 'A1', '2022-04-19', '09:30:00', '', '', '', '', 'ty01A1'),
('Spider-Man: No Way Home', '01', 'A2', '2022-04-19', '09:30:00', '', '', '', '', 'ty01A2'),
('Spider-Man: No Way Home', '01', 'A3', '2022-04-19', '09:30:00', '', '', '', '', 'ty01A3'),
('Spider-Man: No Way Home', '01', 'A4', '2022-04-19', '09:30:00', '', '', '', '', 'ty01A4'),
('Spider-Man: No Way Home', '01', 'A5', '2022-04-19', '09:30:00', '', '', '', '', 'ty01A5'),
('Spider-Man: No Way Home', '01', 'A6', '2022-04-19', '09:30:00', '', '', '', '', 'ty01A6'),
('Spider-Man: No Way Home', '01', 'B1', '2022-04-19', '09:30:00', '', '', '', '', 'ty01B1'),
('Spider-Man: No Way Home', '01', 'B2', '2022-04-19', '09:30:00', '', '', '', '', 'ty01B2'),
('Spider-Man: No Way Home', '01', 'B3', '2022-04-19', '09:30:00', '', '', '', '', 'ty01B3'),
('Spider-Man: No Way Home', '01', 'B4', '2022-04-19', '09:30:00', '', '', '', '', 'ty01B4'),
('Spider-Man: No Way Home', '01', 'B5', '2022-04-19', '09:30:00', '', '', '', '', 'ty01B5'),
('Spider-Man: No Way Home', '01', 'B6', '2022-04-19', '09:30:00', '', '', '', '', 'ty01B6'),
('Spider-Man: No Way Home', '01', 'C1', '2022-04-19', '09:30:00', '', '', '', '', 'ty01C1'),
('Spider-Man: No Way Home', '01', 'C2', '2022-04-19', '09:30:00', '', '', '', '', 'ty01C2'),
('Spider-Man: No Way Home', '01', 'C3', '2022-04-19', '09:30:00', '', '', '', '', 'ty01C3'),
('Spider-Man: No Way Home', '01', 'C4', '2022-04-19', '09:30:00', '', '', '', '', 'ty01C4'),
('Spider-Man: No Way Home', '01', 'C5', '2022-04-19', '09:30:00', '', '', '', '', 'ty01C5'),
('Spider-Man: No Way Home', '01', 'C6', '2022-04-19', '09:30:00', '', '', '', '', 'ty01C6'),
('Spider-Man: No Way Home', '01', 'D1', '2022-04-19', '09:30:00', '', '', '', '', 'ty01D1'),
('Spider-Man: No Way Home', '01', 'D2', '2022-04-19', '09:30:00', '', '', '', '', 'ty01D2'),
('Spider-Man: No Way Home', '01', 'D3', '2022-04-19', '09:30:00', '', '', '', '', 'ty01D3'),
('Spider-Man: No Way Home', '01', 'D4', '2022-04-19', '09:30:00', '', '', '', '', 'ty01D4'),
('Spider-Man: No Way Home', '01', 'D5', '2022-04-19', '09:30:00', '', '', '', '', 'ty01D5'),
('Spider-Man: No Way Home', '01', 'D6', '2022-04-19', '09:30:00', '', '', '', '', 'ty01D6'),
('Spider-Man: No Way Home', '01', 'E1', '2022-04-19', '09:30:00', '', '', '', '', 'ty01E1'),
('Spider-Man: No Way Home', '01', 'E2', '2022-04-19', '09:30:00', '', '', '', '', 'ty01E2'),
('Spider-Man: No Way Home', '01', 'E3', '2022-04-19', '09:30:00', '', '', '', '', 'ty01E3'),
('Spider-Man: No Way Home', '01', 'E4', '2022-04-19', '09:30:00', '', '', '', '', 'ty01E4'),
('Spider-Man: No Way Home', '01', 'E5', '2022-04-19', '09:30:00', '', '', '', '', 'ty01E5'),
('Spider-Man: No Way Home', '01', 'E6', '2022-04-19', '09:30:00', '', '', '', '', 'ty01E6'),
('Spider-Man: No Way Home', '01', 'F1', '2022-04-19', '09:30:00', '', '', '', '', 'ty01F1'),
('Spider-Man: No Way Home', '01', 'F2', '2022-04-19', '09:30:00', '', '', '', '', 'ty01F2'),
('Spider-Man: No Way Home', '01', 'F3', '2022-04-19', '09:30:00', '', '', '', '', 'ty01F3'),
('Spider-Man: No Way Home', '01', 'F4', '2022-04-19', '09:30:00', '', '', '', '', 'ty01F4'),
('Spider-Man: No Way Home', '01', 'F5', '2022-04-19', '09:30:00', '', '', '', '', 'ty01F5'),
('Spider-Man: No Way Home', '01', 'F6', '2022-04-19', '09:30:00', '', '', '', '', 'ty01F6'),
('Spider-Man: No Way Home', '02', 'A1', '2022-04-19', '14:15:00', '', '', '', '', 'ty02A1'),
('Spider-Man: No Way Home', '02', 'A2', '2022-04-19', '14:15:00', '', '', '', '', 'ty02A2'),
('Spider-Man: No Way Home', '02', 'A3', '2022-04-19', '14:15:00', '', '', '', '', 'ty02A3'),
('Spider-Man: No Way Home', '02', 'A4', '2022-04-19', '14:15:00', '', '', '', '', 'ty02A4'),
('Spider-Man: No Way Home', '02', 'A5', '2022-04-19', '14:15:00', '', '', '', '', 'ty02A5'),
('Spider-Man: No Way Home', '02', 'A6', '2022-04-19', '14:15:00', '', '', '', '', 'ty02A6'),
('Spider-Man: No Way Home', '02', 'A7', '2022-04-19', '14:15:00', '', '', '', '', 'ty02A7'),
('Spider-Man: No Way Home', '02', 'A8', '2022-04-19', '14:15:00', '', '', '', '', 'ty02A8'),
('Spider-Man: No Way Home', '02', 'A9', '2022-04-19', '14:15:00', '', '', '', '', 'ty02A9'),
('Spider-Man: No Way Home', '02', 'B1', '2022-04-19', '14:15:00', '', '', '', '', 'ty02B1'),
('Spider-Man: No Way Home', '02', 'B2', '2022-04-19', '14:15:00', '', '', '', '', 'ty02B2'),
('Spider-Man: No Way Home', '02', 'B3', '2022-04-19', '14:15:00', '', '', '', '', 'ty02B3'),
('Spider-Man: No Way Home', '02', 'B4', '2022-04-19', '14:15:00', '', '', '', '', 'ty02B4'),
('Spider-Man: No Way Home', '02', 'B5', '2022-04-19', '14:15:00', '', '', '', '', 'ty02B5'),
('Spider-Man: No Way Home', '02', 'B6', '2022-04-19', '14:15:00', '', '', '', '', 'ty02B6'),
('Spider-Man: No Way Home', '02', 'B7', '2022-04-19', '14:15:00', '', '', '', '', 'ty02B7'),
('Spider-Man: No Way Home', '02', 'B8', '2022-04-19', '14:15:00', '', '', '', '', 'ty02B8'),
('Spider-Man: No Way Home', '02', 'B9', '2022-04-19', '14:15:00', '', '', '', '', 'ty02B9'),
('Spider-Man: No Way Home', '02', 'C1', '2022-04-19', '14:15:00', '', '', '', '', 'ty02C1'),
('Spider-Man: No Way Home', '02', 'C2', '2022-04-19', '14:15:00', '', '', '', '', 'ty02C2'),
('Spider-Man: No Way Home', '02', 'C3', '2022-04-19', '14:15:00', '', '', '', '', 'ty02C3'),
('Spider-Man: No Way Home', '02', 'C4', '2022-04-19', '14:15:00', '', '', '', '', 'ty02C4'),
('Spider-Man: No Way Home', '02', 'C5', '2022-04-19', '14:15:00', '', '', '', '', 'ty02C5'),
('Spider-Man: No Way Home', '02', 'C6', '2022-04-19', '14:15:00', '', '', '', '', 'ty02C6'),
('Spider-Man: No Way Home', '02', 'C7', '2022-04-19', '14:15:00', '', '', '', '', 'ty02C7'),
('Spider-Man: No Way Home', '02', 'C8', '2022-04-19', '14:15:00', '', '', '', '', 'ty02C8'),
('Spider-Man: No Way Home', '02', 'C9', '2022-04-19', '14:15:00', '', '', '', '', 'ty02C9'),
('Spider-Man: No Way Home', '02', 'D1', '2022-04-19', '14:15:00', '', '', '', '', 'ty02D1'),
('Spider-Man: No Way Home', '02', 'D2', '2022-04-19', '14:15:00', '', '', '', '', 'ty02D2'),
('Spider-Man: No Way Home', '02', 'D3', '2022-04-19', '14:15:00', '', '', '', '', 'ty02D3'),
('Spider-Man: No Way Home', '02', 'D4', '2022-04-19', '14:15:00', '', '', '', '', 'ty02D4'),
('Spider-Man: No Way Home', '02', 'D5', '2022-04-19', '14:15:00', '', '', '', '', 'ty02D5'),
('Spider-Man: No Way Home', '02', 'D6', '2022-04-19', '14:15:00', '', '', '', '', 'ty02D6'),
('Spider-Man: No Way Home', '02', 'E1', '2022-04-19', '14:15:00', '', '', '', '', 'ty02E1'),
('Spider-Man: No Way Home', '02', 'E2', '2022-04-19', '14:15:00', '', '', '', '', 'ty02E2'),
('Spider-Man: No Way Home', '02', 'E3', '2022-04-19', '14:15:00', '', '', '', '', 'ty02E3'),
('Spider-Man: No Way Home', '02', 'E4', '2022-04-19', '14:15:00', '', '', '', '', 'ty02E4'),
('Spider-Man: No Way Home', '02', 'E5', '2022-04-19', '14:15:00', '', '', '', '', 'ty02E5'),
('Spider-Man: No Way Home', '02', 'E6', '2022-04-19', '14:15:00', '', '', '', '', 'ty02E6'),
('Spider-Man: No Way Home', '02', 'F1', '2022-04-19', '14:15:00', '', '', '', '', 'ty02F1'),
('Spider-Man: No Way Home', '02', 'F2', '2022-04-19', '14:15:00', '', '', '', '', 'ty02F2'),
('Spider-Man: No Way Home', '02', 'F3', '2022-04-19', '14:15:00', '', '', '', '', 'ty02F3'),
('Spider-Man: No Way Home', '02', 'F4', '2022-04-19', '14:15:00', '', '', '', '', 'ty02F4'),
('Spider-Man: No Way Home', '02', 'F5', '2022-04-19', '14:15:00', '', '', '', '', 'ty02F5'),
('Spider-Man: No Way Home', '02', 'F6', '2022-04-19', '14:15:00', '', '', '', '', 'ty02F6'),
('Spider-Man: No Way Home', '02', 'G1', '2022-04-19', '14:15:00', '', '', '', '', 'ty02G1'),
('Spider-Man: No Way Home', '02', 'G2', '2022-04-19', '14:15:00', '', '', '', '', 'ty02G2'),
('Spider-Man: No Way Home', '03', 'A1', '2022-04-19', '20:45:00', '', '', '', '', 'ty03A1'),
('Spider-Man: No Way Home', '03', 'A2', '2022-04-19', '20:45:00', '', '', '', '', 'ty03A2'),
('Spider-Man: No Way Home', '03', 'A3', '2022-04-19', '20:45:00', '', '', '', '', 'ty03A3'),
('Spider-Man: No Way Home', '03', 'A4', '2022-04-19', '20:45:00', '', '', '', '', 'ty03A4'),
('Spider-Man: No Way Home', '03', 'A5', '2022-04-19', '20:45:00', '', '', '', '', 'ty03A5'),
('Spider-Man: No Way Home', '03', 'A6', '2022-04-19', '20:45:00', '', '', '', '', 'ty03A6'),
('Spider-Man: No Way Home', '03', 'A7', '2022-04-19', '20:45:00', '', '', '', '', 'ty03A7'),
('Spider-Man: No Way Home', '03', 'A8', '2022-04-19', '20:45:00', '', '', '', '', 'ty03A8'),
('Spider-Man: No Way Home', '03', 'A9', '2022-04-19', '20:45:00', '', '', '', '', 'ty03A9'),
('Spider-Man: No Way Home', '03', 'B1', '2022-04-19', '20:45:00', '', '', '', '', 'ty03B1'),
('Spider-Man: No Way Home', '03', 'B2', '2022-04-19', '20:45:00', '', '', '', '', 'ty03B2'),
('Spider-Man: No Way Home', '03', 'B3', '2022-04-19', '20:45:00', '', '', '', '', 'ty03B3'),
('Spider-Man: No Way Home', '03', 'B4', '2022-04-19', '20:45:00', '', '', '', '', 'ty03B4'),
('Spider-Man: No Way Home', '03', 'B5', '2022-04-19', '20:45:00', '', '', '', '', 'ty03B5'),
('Spider-Man: No Way Home', '03', 'B6', '2022-04-19', '20:45:00', '', '', '', '', 'ty03B6'),
('Spider-Man: No Way Home', '03', 'B7', '2022-04-19', '20:45:00', '', '', '', '', 'ty03B7'),
('Spider-Man: No Way Home', '03', 'B8', '2022-04-19', '20:45:00', '', '', '', '', 'ty03B8'),
('Spider-Man: No Way Home', '03', 'B9', '2022-04-19', '20:45:00', '', '', '', '', 'ty03B9'),
('Spider-Man: No Way Home', '03', 'C1', '2022-04-19', '20:45:00', '', '', '', '', 'ty03C1'),
('Spider-Man: No Way Home', '03', 'C2', '2022-04-19', '20:45:00', '', '', '', '', 'ty03C2'),
('Spider-Man: No Way Home', '03', 'C3', '2022-04-19', '20:45:00', '', '', '', '', 'ty03C3'),
('Spider-Man: No Way Home', '03', 'C4', '2022-04-19', '20:45:00', '', '', '', '', 'ty03C4'),
('Spider-Man: No Way Home', '03', 'C5', '2022-04-19', '20:45:00', '', '', '', '', 'ty03C5'),
('Spider-Man: No Way Home', '03', 'C6', '2022-04-19', '20:45:00', '', '', '', '', 'ty03C6'),
('Spider-Man: No Way Home', '03', 'C7', '2022-04-19', '20:45:00', '', '', '', '', 'ty03C7'),
('Spider-Man: No Way Home', '03', 'C8', '2022-04-19', '20:45:00', '', '', '', '', 'ty03C8'),
('Spider-Man: No Way Home', '03', 'C9', '2022-04-19', '20:45:00', '', '', '', '', 'ty03C9'),
('Spider-Man: No Way Home', '03', 'D1', '2022-04-19', '20:45:00', '', '', '', '', 'ty03D1'),
('Spider-Man: No Way Home', '03', 'D2', '2022-04-19', '20:45:00', '', '', '', '', 'ty03D2'),
('Spider-Man: No Way Home', '03', 'D3', '2022-04-19', '20:45:00', '', '', '', '', 'ty03D3'),
('Spider-Man: No Way Home', '03', 'D4', '2022-04-19', '20:45:00', '', '', '', '', 'ty03D4'),
('Spider-Man: No Way Home', '03', 'D5', '2022-04-19', '20:45:00', '', '', '', '', 'ty03D5'),
('Spider-Man: No Way Home', '03', 'D6', '2022-04-19', '20:45:00', '', '', '', '', 'ty03D6'),
('Spider-Man: No Way Home', '03', 'D7', '2022-04-19', '20:45:00', '', '', '', '', 'ty03D7'),
('Spider-Man: No Way Home', '03', 'D8', '2022-04-19', '20:45:00', '', '', '', '', 'ty03D8'),
('Spider-Man: No Way Home', '03', 'D9', '2022-04-19', '20:45:00', '', '', '', '', 'ty03D9'),
('Spider-Man: No Way Home', '03', 'E1', '2022-04-19', '20:45:00', '', '', '', '', 'ty03E1'),
('Spider-Man: No Way Home', '03', 'E2', '2022-04-19', '20:45:00', '', '', '', '', 'ty03E2'),
('Spider-Man: No Way Home', '03', 'E3', '2022-04-19', '20:45:00', '', '', '', '', 'ty03E3'),
('Spider-Man: No Way Home', '03', 'E4', '2022-04-19', '20:45:00', '', '', '', '', 'ty03E4'),
('Spider-Man: No Way Home', '03', 'E5', '2022-04-19', '20:45:00', '', '', '', '', 'ty03E5'),
('Spider-Man: No Way Home', '03', 'E6', '2022-04-19', '20:45:00', '', '', '', '', 'ty03E6'),
('Spider-Man: No Way Home', '03', 'E7', '2022-04-19', '20:45:00', '', '', '', '', 'ty03E7'),
('Spider-Man: No Way Home', '03', 'E8', '2022-04-19', '20:45:00', '', '', '', '', 'ty03E8'),
('Spider-Man: No Way Home', '03', 'E9', '2022-04-19', '20:45:00', '', '', '', '', 'ty03E9'),
('Spider-Man: No Way Home', '03', 'F1', '2022-04-19', '20:45:00', '', '', '', '', 'ty03F1'),
('Spider-Man: No Way Home', '03', 'F2', '2022-04-19', '20:45:00', '', '', '', '', 'ty03F2'),
('Spider-Man: No Way Home', '03', 'F3', '2022-04-19', '20:45:00', '', '', '', '', 'ty03F3'),
('Spider-Man: No Way Home', '03', 'F4', '2022-04-19', '20:45:00', '', '', '', '', 'ty03F4'),
('Spider-Man: No Way Home', '03', 'F5', '2022-04-19', '20:45:00', '', '', '', '', 'ty03F5'),
('Spider-Man: No Way Home', '03', 'F6', '2022-04-19', '20:45:00', '', '', '', '', 'ty03F6'),
('Spider-Man: No Way Home', '03', 'F7', '2022-04-19', '20:45:00', '', '', '', '', 'ty03F7'),
('Spider-Man: No Way Home', '03', 'F8', '2022-04-19', '20:45:00', '', '', '', '', 'ty03F8'),
('Spider-Man: No Way Home', '03', 'F9', '2022-04-19', '20:45:00', '', '', '', '', 'ty03F9'),
('Spider-Man: No Way Home', '03', 'G1', '2022-04-19', '20:45:00', '', '', '', '', 'ty03G1'),
('Spider-Man: No Way Home', '03', 'G2', '2022-04-19', '20:45:00', '', '', '', '', 'ty03G2'),
('Spider-Man: No Way Home', '03', 'G3', '2022-04-19', '20:45:00', '', '', '', '', 'ty03G3'),
('Spider-Man: No Way Home', '03', 'G4', '2022-04-19', '20:45:00', '', '', '', '', 'ty03G4'),
('Spider-Man: No Way Home', '03', 'G5', '2022-04-19', '20:45:00', '', '', '', '', 'ty03G5'),
('Spider-Man: No Way Home', '03', 'G6', '2022-04-19', '20:45:00', '', '', '', '', 'ty03G6'),
('Spider-Man: No Way Home', '03', 'G7', '2022-04-19', '20:45:00', '', '', '', '', 'ty03G7'),
('Spider-Man: No Way Home', '03', 'G8', '2022-04-19', '20:45:00', '', '', '', '', 'ty03G8'),
('Spider-Man: No Way Home', '03', 'G9', '2022-04-19', '20:45:00', '', '', '', '', 'ty03G9'),
('Spider-Man: No Way Home', '03', 'H1', '2022-04-19', '20:45:00', '', '', '', '', 'ty03H1'),
('Spider-Man: No Way Home', '03', 'H2', '2022-04-19', '20:45:00', '', '', '', '', 'ty03H2'),
('Spider-Man: No Way Home', '03', 'H3', '2022-04-19', '20:45:00', '', '', '', '', 'ty03H3'),
('Spider-Man: No Way Home', '03', 'H4', '2022-04-19', '20:45:00', '', '', '', '', 'ty03H4'),
('Spider-Man: No Way Home', '03', 'H5', '2022-04-19', '20:45:00', '', '', '', '', 'ty03H5'),
('Spider-Man: No Way Home', '03', 'H6', '2022-04-19', '20:45:00', '', '', '', '', 'ty03H6'),
('Spider-Man: No Way Home', '03', 'H7', '2022-04-19', '20:45:00', '', '', '', '', 'ty03H7'),
('Spider-Man: No Way Home', '03', 'H8', '2022-04-19', '20:45:00', '', '', '', '', 'ty03H8'),
('Spider-Man: No Way Home', '03', 'H9', '2022-04-19', '20:45:00', '', '', '', '', 'ty03H9'),
('Spider-Man: No Way Home', '03', 'I1', '2022-04-19', '20:45:00', '', '', '', '', 'ty03I1'),
('Spider-Man: No Way Home', '03', 'I2', '2022-04-19', '20:45:00', '', '', '', '', 'ty03I2'),
('Spider-Man: No Way Home', '03', 'I3', '2022-04-19', '20:45:00', '', '', '', '', 'ty03I3'),
('Spider-Man: No Way Home', '03', 'I4', '2022-04-19', '20:45:00', '', '', '', '', 'ty03I4'),
('Spider-Man: No Way Home', '03', 'I5', '2022-04-19', '20:45:00', '', '', '', '', 'ty03I5'),
('Spider-Man: No Way Home', '03', 'I6', '2022-04-19', '20:45:00', '', '', '', '', 'ty03I6'),
('Spider-Man: No Way Home', '03', 'I7', '2022-04-19', '20:45:00', '', '', '', '', 'ty03I7'),
('Spider-Man: No Way Home', '03', 'I8', '2022-04-19', '20:45:00', '', '', '', '', 'ty03I8'),
('Spider-Man: No Way Home', '03', 'I9', '2022-04-19', '20:45:00', '', '', '', '', 'ty03I9');

-- --------------------------------------------------------

--
-- 資料表結構 `ty_seat_plan1`
--

CREATE TABLE `ty_seat_plan1` (
  `seatID` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `houseID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `ty_seat_plan2`
--

CREATE TABLE `ty_seat_plan2` (
  `seatID` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `houseID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `ty_seat_plan3`
--

CREATE TABLE `ty_seat_plan3` (
  `seatID` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `houseID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`cinemaID`);

--
-- 資料表索引 `cwb_cinema`
--
ALTER TABLE `cwb_cinema`
  ADD PRIMARY KEY (`houseID`);

--
-- 資料表索引 `cwb_house_record`
--
ALTER TABLE `cwb_house_record`
  ADD PRIMARY KEY (`branchSeatID`);

--
-- 資料表索引 `cwb_seat_plan1`
--
ALTER TABLE `cwb_seat_plan1`
  ADD PRIMARY KEY (`seatID`);

--
-- 資料表索引 `cwb_seat_plan2`
--
ALTER TABLE `cwb_seat_plan2`
  ADD PRIMARY KEY (`seatID`);

--
-- 資料表索引 `cwb_seat_plan3`
--
ALTER TABLE `cwb_seat_plan3`
  ADD PRIMARY KEY (`seatID`);

--
-- 資料表索引 `mk_cinema`
--
ALTER TABLE `mk_cinema`
  ADD PRIMARY KEY (`houseID`);

--
-- 資料表索引 `mk_house_record`
--
ALTER TABLE `mk_house_record`
  ADD PRIMARY KEY (`branchSeatID`);

--
-- 資料表索引 `mk_seat_plan1`
--
ALTER TABLE `mk_seat_plan1`
  ADD PRIMARY KEY (`seatID`);

--
-- 資料表索引 `mk_seat_plan2`
--
ALTER TABLE `mk_seat_plan2`
  ADD PRIMARY KEY (`seatID`);

--
-- 資料表索引 `mk_seat_plan3`
--
ALTER TABLE `mk_seat_plan3`
  ADD PRIMARY KEY (`seatID`);

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

--
-- 資料表索引 `ty_cinema`
--
ALTER TABLE `ty_cinema`
  ADD PRIMARY KEY (`houseID`);

--
-- 資料表索引 `ty_house_record`
--
ALTER TABLE `ty_house_record`
  ADD PRIMARY KEY (`branchSeatID`);

--
-- 資料表索引 `ty_seat_plan1`
--
ALTER TABLE `ty_seat_plan1`
  ADD PRIMARY KEY (`seatID`);

--
-- 資料表索引 `ty_seat_plan2`
--
ALTER TABLE `ty_seat_plan2`
  ADD PRIMARY KEY (`seatID`);

--
-- 資料表索引 `ty_seat_plan3`
--
ALTER TABLE `ty_seat_plan3`
  ADD PRIMARY KEY (`seatID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
