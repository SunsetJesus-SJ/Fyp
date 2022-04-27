-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2022-04-25 15:08:38
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
-- 資料表結構 `actor`
--

CREATE TABLE `actor` (
  `actorID` int(5) NOT NULL,
  `actorName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 資料表的匯出資料 `actor`
--

INSERT INTO `actor` (`actorID`, `actorName`) VALUES
(1, 'Mai Kadowaki'),
(2, 'Noriaki Sugiyama'),
(3, 'Kaori Nazuka'),
(4, 'Rikiya Koyama'),
(5, 'Natsuki Hanae'),
(6, 'Noriko Shitaya'),
(7, 'Po-Hung Lin'),
(8, 'Moon Lee'),
(9, 'J.C. Lin'),
(10, 'Annie Chen'),
(11, 'Ning Ding'),
(12, 'Kai Ko'),
(13, 'Vivian Sung'),
(14, 'Gingle Wang'),
(21, 'Kristen Stewart'),
(22, 'Timothy Spall'),
(23, 'Jack Nielen'),
(24, 'Djimon Hounsou'),
(25, 'Ralph Fiennes'),
(26, 'Shaun McKee'),
(27, 'Nobunaga Shimazaki'),
(28, 'Tomokazu Sugita'),
(29, 'Kenichi Suzumura'),
(30, 'Rie Takahashi'),
(31, 'Hidetoshi Nishijima'),
(32, 'Tôko Miura'),
(33, 'Reika Kirishima'),
(34, 'Tom Holland'),
(35, 'Zendaya'),
(36, 'Benedict Cumberbatch'),
(37, 'Jacob Batalon'),
(38, 'Anya Taylor-Joy');

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
-- 資料表結構 `house_record`
--

CREATE TABLE `house_record` (
  `movie` varchar(100) NOT NULL,
  `house` varchar(3) NOT NULL,
  `seatID` varchar(3) NOT NULL,
  `date` date DEFAULT NULL,
  `StartTime` time DEFAULT NULL,
  `EndTime` time DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `ticketID` varchar(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `position` varchar(2) NOT NULL,
  `branchSeatID` int(20) NOT NULL,
  `branchID` varchar(10) NOT NULL,
  `refund` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `house_record`
--

INSERT INTO `house_record` (`movie`, `house`, `seatID`, `date`, `StartTime`, `EndTime`, `email`, `ticketID`, `type`, `position`, `branchSeatID`, `branchID`, `refund`) VALUES
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A1', '2022-04-25', '21:00:00', '22:00:00', 'lapyanli@gmail.com', 'A1515502929', 'Student', '1', 716, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A2', '2022-04-25', '21:00:00', '22:00:00', 'lapyanli@gmail.com', 'A2391384887', 'Adult', '1', 717, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A3', '2022-04-25', '21:00:00', '22:00:00', 'lapyanli@gmail.com', 'A3329531860', 'Student', '1', 718, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A4', '2022-04-25', '21:00:00', '22:00:00', 'lapyanli@gmail.com', 'A4750225830', 'Student', '1', 719, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A5', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 720, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A6', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 721, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B1', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 722, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B2', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 723, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B3', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 724, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B4', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 725, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B5', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 726, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B6', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 727, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C1', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 728, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C2', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 729, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C3', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 730, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C4', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 731, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C5', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 732, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C6', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 733, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D1', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 734, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D2', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 735, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D3', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 736, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D4', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 737, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D5', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 738, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D6', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 739, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E1', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 740, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E2', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 741, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E3', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 742, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E4', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 743, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E5', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 744, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E6', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 745, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F1', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 746, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F2', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 747, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F3', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 748, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F4', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 749, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F5', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 750, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F6', '2022-04-25', '21:00:00', '22:00:00', '', NULL, NULL, '', 751, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A1', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 779, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A2', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 780, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A3', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 781, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A4', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 782, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A5', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 783, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A6', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 784, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B1', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 785, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B2', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 786, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B3', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 787, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B4', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 788, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B5', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 789, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B6', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 790, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C1', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 791, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C2', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 792, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C3', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 793, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C4', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 794, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C5', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 795, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C6', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 796, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D1', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 797, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D2', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 798, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D3', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 799, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D4', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 800, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D5', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 801, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D6', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 802, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E1', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 803, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E2', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 804, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E3', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 805, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E4', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 806, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E5', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 807, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E6', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 808, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F1', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 809, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F2', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 810, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F3', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 811, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F4', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 812, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F5', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 813, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F6', '2022-04-25', '13:00:00', '19:00:00', '', NULL, NULL, '', 814, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A1', '2022-04-25', '09:44:00', '11:49:00', 'lapyanli@gmail.com', 'A1311157226', 'Student', '1', 905, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A2', '2022-04-25', '09:44:00', '11:49:00', 'lapyanli@gmail.com', 'A2842703247', 'Student', '1', 906, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A3', '2022-04-25', '09:44:00', '11:49:00', 'lapyanli@gmail.com', 'A3385040283', 'Adult', '1', 907, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A4', '2022-04-25', '09:44:00', '11:49:00', 'lapyanli@gmail.com', 'A4992831420', 'Adult', '1', 908, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A5', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 909, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'A6', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 910, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B1', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 911, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B2', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 912, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B3', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 913, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B4', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 914, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B5', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 915, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'B6', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 916, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C1', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 917, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C2', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 918, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C3', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 919, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C4', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 920, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C5', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 921, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'C6', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 922, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D1', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 923, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D2', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 924, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D3', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 925, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D4', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 926, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D5', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 927, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'D6', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 928, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E1', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 929, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E2', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 930, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E3', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 931, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E4', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 932, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E5', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 933, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'E6', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 934, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F1', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 935, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F2', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 936, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F3', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 937, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F4', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 938, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F5', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 939, 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', '1', 'F6', '2022-04-25', '09:44:00', '11:49:00', '', NULL, NULL, '', 940, 'TY', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `languagestable`
--

CREATE TABLE `languagestable` (
  `LanguagesID` int(2) NOT NULL,
  `Languages` varchar(50) NOT NULL,
  `Subtitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 資料表的匯出資料 `languagestable`
--

INSERT INTO `languagestable` (`LanguagesID`, `Languages`, `Subtitle`) VALUES
(1, 'English', 'English'),
(2, 'English', 'Chinese'),
(3, 'English', 'English, Chinese'),
(4, 'Chinese', 'Chinese'),
(5, 'Chinese', 'English'),
(6, 'Chinese', 'English, Chinese'),
(7, 'Japanese', 'Japanese'),
(8, 'Japanese', 'Chinese'),
(9, 'Japanese', 'English'),
(10, 'Japanese', 'English, Chinese'),
(11, 'Japanese', 'Japanese, Chinese'),
(12, 'Hangul', 'Hangul'),
(13, 'Hangul', 'Chinese'),
(14, 'Hangul', 'English'),
(15, 'Hangul', 'English, Chinese'),
(16, 'Hangul', 'Hangul, Chinese'),
(17, 'Hindi', 'Hindi'),
(18, 'Hindi', 'Chinese'),
(19, 'Hindi', 'English'),
(20, 'Hindi', 'English, Chinese'),
(21, 'Hindi', 'Hindi, Chinese'),
(22, 'Russian', 'Russian'),
(23, 'Russian', 'Chinese'),
(24, 'Russian', 'English'),
(25, 'Russian', 'English, Chinese'),
(26, 'Russian', 'Russian, Chinese');

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
  `branchSeatID` varchar(20) NOT NULL,
  `branch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `mk_house_record`
--

INSERT INTO `mk_house_record` (`movie`, `house`, `seatID`, `date`, `time`, `email`, `ticketID`, `type`, `position`, `branchSeatID`, `branch`) VALUES
('Spider-Man: No Way Home', '01', 'A1', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01A1', ''),
('Spider-Man: No Way Home', '01', 'A2', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01A2', ''),
('Spider-Man: No Way Home', '01', 'A3', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01A3', ''),
('Spider-Man: No Way Home', '01', 'A4', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01A4', ''),
('Spider-Man: No Way Home', '01', 'A5', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01A5', ''),
('Spider-Man: No Way Home', '01', 'A6', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01A6', ''),
('Spider-Man: No Way Home', '01', 'B1', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01B1', ''),
('Spider-Man: No Way Home', '01', 'B2', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01B2', ''),
('Spider-Man: No Way Home', '01', 'B3', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01B3', ''),
('Spider-Man: No Way Home', '01', 'B4', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01B4', ''),
('Spider-Man: No Way Home', '01', 'B5', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01B5', ''),
('Spider-Man: No Way Home', '01', 'B6', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01B6', ''),
('Spider-Man: No Way Home', '01', 'C1', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01C1', ''),
('Spider-Man: No Way Home', '01', 'C2', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01C2', ''),
('Spider-Man: No Way Home', '01', 'C3', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01C3', ''),
('Spider-Man: No Way Home', '01', 'C4', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01C4', ''),
('Spider-Man: No Way Home', '01', 'C5', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01C5', ''),
('Spider-Man: No Way Home', '01', 'C6', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01C6', ''),
('Spider-Man: No Way Home', '01', 'D1', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01D1', ''),
('Spider-Man: No Way Home', '01', 'D2', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01D2', ''),
('Spider-Man: No Way Home', '01', 'D3', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01D3', ''),
('Spider-Man: No Way Home', '01', 'D4', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01D4', ''),
('Spider-Man: No Way Home', '01', 'D5', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01D5', ''),
('Spider-Man: No Way Home', '01', 'D6', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01D6', ''),
('Spider-Man: No Way Home', '01', 'E1', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01E1', ''),
('Spider-Man: No Way Home', '01', 'E2', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01E2', ''),
('Spider-Man: No Way Home', '01', 'E3', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01E3', ''),
('Spider-Man: No Way Home', '01', 'E4', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01E4', ''),
('Spider-Man: No Way Home', '01', 'E5', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01E5', ''),
('Spider-Man: No Way Home', '01', 'E6', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01E6', ''),
('Spider-Man: No Way Home', '01', 'F1', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01F1', ''),
('Spider-Man: No Way Home', '01', 'F2', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01F2', ''),
('Spider-Man: No Way Home', '01', 'F3', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01F3', ''),
('Spider-Man: No Way Home', '01', 'F4', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01F4', ''),
('Spider-Man: No Way Home', '01', 'F5', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01F5', ''),
('Spider-Man: No Way Home', '01', 'F6', '2022-04-19', '10:00:00', 'xxx', NULL, NULL, '0', 'mk01F6', ''),
('Spider-Man: No Way Home', '02', 'A1', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A1', ''),
('Spider-Man: No Way Home', '02', 'A2', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A2', ''),
('Spider-Man: No Way Home', '02', 'A3', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A3', ''),
('Spider-Man: No Way Home', '02', 'A4', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A4', ''),
('Spider-Man: No Way Home', '02', 'A5', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A5', ''),
('Spider-Man: No Way Home', '02', 'A6', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A6', ''),
('Spider-Man: No Way Home', '02', 'A7', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A7', ''),
('Spider-Man: No Way Home', '02', 'A8', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A8', ''),
('Spider-Man: No Way Home', '02', 'A9', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02A9', ''),
('Spider-Man: No Way Home', '02', 'B1', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B1', ''),
('Spider-Man: No Way Home', '02', 'B2', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B2', ''),
('Spider-Man: No Way Home', '02', 'B3', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B3', ''),
('Spider-Man: No Way Home', '02', 'B4', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B4', ''),
('Spider-Man: No Way Home', '02', 'B5', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B5', ''),
('Spider-Man: No Way Home', '02', 'B6', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B6', ''),
('Spider-Man: No Way Home', '02', 'B7', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B7', ''),
('Spider-Man: No Way Home', '02', 'B8', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B8', ''),
('Spider-Man: No Way Home', '02', 'B9', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02B9', ''),
('Spider-Man: No Way Home', '02', 'C1', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C1', ''),
('Spider-Man: No Way Home', '02', 'C2', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C2', ''),
('Spider-Man: No Way Home', '02', 'C3', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C3', ''),
('Spider-Man: No Way Home', '02', 'C4', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C4', ''),
('Spider-Man: No Way Home', '02', 'C5', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C5', ''),
('Spider-Man: No Way Home', '02', 'C6', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C6', ''),
('Spider-Man: No Way Home', '02', 'C7', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C7', ''),
('Spider-Man: No Way Home', '02', 'C8', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C8', ''),
('Spider-Man: No Way Home', '02', 'C9', '2022-04-19', '10:00:00', 'lap', '', 0, '', 'mk02C9', ''),
('Spider-Man: No Way Home', '02', 'D1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02D1', ''),
('Spider-Man: No Way Home', '02', 'D2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02D2', ''),
('Spider-Man: No Way Home', '02', 'D3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02D3', ''),
('Spider-Man: No Way Home', '02', 'D4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02D4', ''),
('Spider-Man: No Way Home', '02', 'D5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02D5', ''),
('Spider-Man: No Way Home', '02', 'D6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02D6', ''),
('Spider-Man: No Way Home', '02', 'E1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02E1', ''),
('Spider-Man: No Way Home', '02', 'E2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02E2', ''),
('Spider-Man: No Way Home', '02', 'E3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02E3', ''),
('Spider-Man: No Way Home', '02', 'E4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02E4', ''),
('Spider-Man: No Way Home', '02', 'E5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02E5', ''),
('Spider-Man: No Way Home', '02', 'E6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02E6', ''),
('Spider-Man: No Way Home', '02', 'F1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02F1', ''),
('Spider-Man: No Way Home', '02', 'F2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02F2', ''),
('Spider-Man: No Way Home', '02', 'F3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02F3', ''),
('Spider-Man: No Way Home', '02', 'F4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02F4', ''),
('Spider-Man: No Way Home', '02', 'F5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02F5', ''),
('Spider-Man: No Way Home', '02', 'F6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02F6', ''),
('Spider-Man: No Way Home', '02', 'G1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02G1', ''),
('Spider-Man: No Way Home', '02', 'G2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk02G2', ''),
('Spider-Man: No Way Home', '03', 'A1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A1', ''),
('Spider-Man: No Way Home', '03', 'A2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A2', ''),
('Spider-Man: No Way Home', '03', 'A3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A3', ''),
('Spider-Man: No Way Home', '03', 'A4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A4', ''),
('Spider-Man: No Way Home', '03', 'A5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A5', ''),
('Spider-Man: No Way Home', '03', 'A6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A6', ''),
('Spider-Man: No Way Home', '03', 'A7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A7', ''),
('Spider-Man: No Way Home', '03', 'A8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A8', ''),
('Spider-Man: No Way Home', '03', 'A9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03A9', ''),
('Spider-Man: No Way Home', '03', 'B1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B1', ''),
('Spider-Man: No Way Home', '03', 'B2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B2', ''),
('Spider-Man: No Way Home', '03', 'B3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B3', ''),
('Spider-Man: No Way Home', '03', 'B4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B4', ''),
('Spider-Man: No Way Home', '03', 'B5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B5', ''),
('Spider-Man: No Way Home', '03', 'B6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B6', ''),
('Spider-Man: No Way Home', '03', 'B7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B7', ''),
('Spider-Man: No Way Home', '03', 'B8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B8', ''),
('Spider-Man: No Way Home', '03', 'B9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03B9', ''),
('Spider-Man: No Way Home', '03', 'C1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C1', ''),
('Spider-Man: No Way Home', '03', 'C2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C2', ''),
('Spider-Man: No Way Home', '03', 'C3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C3', ''),
('Spider-Man: No Way Home', '03', 'C4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C4', ''),
('Spider-Man: No Way Home', '03', 'C5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C5', ''),
('Spider-Man: No Way Home', '03', 'C6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C6', ''),
('Spider-Man: No Way Home', '03', 'C7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C7', ''),
('Spider-Man: No Way Home', '03', 'C8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C8', ''),
('Spider-Man: No Way Home', '03', 'C9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03C9', ''),
('Spider-Man: No Way Home', '03', 'D1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D1', ''),
('Spider-Man: No Way Home', '03', 'D2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D2', ''),
('Spider-Man: No Way Home', '03', 'D3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D3', ''),
('Spider-Man: No Way Home', '03', 'D4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D4', ''),
('Spider-Man: No Way Home', '03', 'D5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D5', ''),
('Spider-Man: No Way Home', '03', 'D6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D6', ''),
('Spider-Man: No Way Home', '03', 'D7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D7', ''),
('Spider-Man: No Way Home', '03', 'D8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D8', ''),
('Spider-Man: No Way Home', '03', 'D9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03D9', ''),
('Spider-Man: No Way Home', '03', 'E1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E1', ''),
('Spider-Man: No Way Home', '03', 'E2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E2', ''),
('Spider-Man: No Way Home', '03', 'E3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E3', ''),
('Spider-Man: No Way Home', '03', 'E4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E4', ''),
('Spider-Man: No Way Home', '03', 'E5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E5', ''),
('Spider-Man: No Way Home', '03', 'E6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E6', ''),
('Spider-Man: No Way Home', '03', 'E7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E7', ''),
('Spider-Man: No Way Home', '03', 'E8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E8', ''),
('Spider-Man: No Way Home', '03', 'E9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03E9', ''),
('Spider-Man: No Way Home', '03', 'F1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F1', ''),
('Spider-Man: No Way Home', '03', 'F2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F2', ''),
('Spider-Man: No Way Home', '03', 'F3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F3', ''),
('Spider-Man: No Way Home', '03', 'F4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F4', ''),
('Spider-Man: No Way Home', '03', 'F5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F5', ''),
('Spider-Man: No Way Home', '03', 'F6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F6', ''),
('Spider-Man: No Way Home', '03', 'F7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F7', ''),
('Spider-Man: No Way Home', '03', 'F8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F8', ''),
('Spider-Man: No Way Home', '03', 'F9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03F9', ''),
('Spider-Man: No Way Home', '03', 'G1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G1', ''),
('Spider-Man: No Way Home', '03', 'G2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G2', ''),
('Spider-Man: No Way Home', '03', 'G3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G3', ''),
('Spider-Man: No Way Home', '03', 'G4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G4', ''),
('Spider-Man: No Way Home', '03', 'G5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G5', ''),
('Spider-Man: No Way Home', '03', 'G6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G6', ''),
('Spider-Man: No Way Home', '03', 'G7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G7', ''),
('Spider-Man: No Way Home', '03', 'G8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G8', ''),
('Spider-Man: No Way Home', '03', 'G9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03G9', ''),
('Spider-Man: No Way Home', '03', 'H1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H1', ''),
('Spider-Man: No Way Home', '03', 'H2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H2', ''),
('Spider-Man: No Way Home', '03', 'H3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H3', ''),
('Spider-Man: No Way Home', '03', 'H4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H4', ''),
('Spider-Man: No Way Home', '03', 'H5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H5', ''),
('Spider-Man: No Way Home', '03', 'H6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H6', ''),
('Spider-Man: No Way Home', '03', 'H7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H7', ''),
('Spider-Man: No Way Home', '03', 'H8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H8', ''),
('Spider-Man: No Way Home', '03', 'H9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03H9', ''),
('Spider-Man: No Way Home', '03', 'I1', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I1', ''),
('Spider-Man: No Way Home', '03', 'I2', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I2', ''),
('Spider-Man: No Way Home', '03', 'I3', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I3', ''),
('Spider-Man: No Way Home', '03', 'I4', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I4', ''),
('Spider-Man: No Way Home', '03', 'I5', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I5', ''),
('Spider-Man: No Way Home', '03', 'I6', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I6', ''),
('Spider-Man: No Way Home', '03', 'I7', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I7', ''),
('Spider-Man: No Way Home', '03', 'I8', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I8', ''),
('Spider-Man: No Way Home', '03', 'I9', '2022-04-19', '10:00:00', '', '', 0, '', 'mk03I9', '');

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
-- 資料表結構 `movie`
--

CREATE TABLE `movie` (
  `MovieID` int(5) NOT NULL,
  `MovieName` varchar(50) NOT NULL,
  `Type` int(2) NOT NULL,
  `MovieRating` int(1) NOT NULL,
  `Version` int(3) NOT NULL,
  `Languages` int(2) NOT NULL,
  `ReleaseDate` date NOT NULL,
  `Duration` int(4) NOT NULL,
  `Description` varchar(2500) NOT NULL,
  `Image` varchar(300) DEFAULT NULL,
  `Director` varchar(500) NOT NULL,
  `video_url` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 資料表的匯出資料 `movie`
--

INSERT INTO `movie` (`MovieID`, `MovieName`, `Type`, `MovieRating`, `Version`, `Languages`, `ReleaseDate`, `Duration`, `Description`, `Image`, `Director`, `video_url`) VALUES
(1, 'Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', 9, 2, 1, 8, '2021-12-02', 95, 'Earth is dying. Within the next few centuries, it will be unable to support human life. But Julian Ainsworth has a plan. Using the remaining magic on the planet, the Holy Grail, and a mysterious, otherworldly cube, he can save humanity from their impending doom. However, as with all magic, there is a price to be paid: in this case, the life of Miyu, a single innocent girl.\r\n\r\nNow, everything is finally in place. Yet, for his plan to come to fruition, he must first overcome one last obstacle: Illyasviel von Einzbern, a girl from a parallel world powered by heroes of myth and legend who has vowed to stop him and save not only the world itself but Miyu as well.', '..\\img\\oghx5U2.jpg', 'Shin Oonuma', 'https://www.youtube.com/embed/u1Q50htZ3l0'),
(2, 'Fate/Kaleid Liner Prisma Illya: Vow in the Snow', 9, 2, 1, 8, '2017-08-26', 90, 'In promoting Vow in the Snow, Takashi Takeuchi drew his take on Hiroshi Hiroyama\'s Shirou Emiya. Fate/Kaleid Liner Prisma Illya is a spin-off manga to the visual novel Fate/stay Night written by Kinoko Nasu centered around Shirou Emiya and three parallel storylines regarding his participance in the Holy Grail War.', '..\\img\\DktKswC.jpg', 'Shin Oonuma', 'https://www.youtube.com/embed/wrcNxdDUIy8'),
(3, 'Last Night in Soho', 5, 3, 1, 2, '2021-10-28', 117, 'An aspiring fashion designer is mysteriously able to enter the 1960s where she encounters a dazzling wannabe singer. But the glamour is not all it appears to be and the dreams of the past start to crack and splinter into something darker.', '..\\img\\wD0jou6.jpg', 'Edgar Wright', 'https://www.youtube.com/embed/AcVnFrxjPjI'),
(4, 'Terrorizers', 7, 3, 1, 4, '2021-12-09', 127, 'The intersecting lives and relationships of a group of 20-somethings in Taipei are tested after a tragic incident that connects them all.', '..\\img\\IRJKFcw.jpg', 'Wi Ding Ho', 'https://www.youtube.com/embed/gU5M9fVAnSk'),
(5, ' Yue Lao', 7, 3, 1, 4, '2021-12-23', 127, 'Ah-Lun, who has a choice to make in the underworld, decides to be a god of love in Chinese mythology. As he advances with his tasks on Earth, his biggest challenge is to tie a red string with the woman he loved the most.', '..\\img\\JcKueDR.jpg', 'Giddens Ko', 'https://www.youtube.com/embed/gEqXgmrgGgM'),
(6, 'Spencer', 3, 2, 1, 2, '2021-12-23', 116, 'During her Christmas holidays with the royal family at the Sandringham estate in Norfolk, England, Diana Spencer, struggling with mental health problems, decides to end her decade-long marriage to Prince Charles.', '..\\img\\kn44Z4k.jpg', 'Pablo Larraín', 'https://www.youtube.com/embed/ORvPh_gdD_M'),
(7, 'The King\'s Man', 1, 3, 1, 2, '2021-12-30', 131, 'In the early years of the 20th century, the Kingsman agency is formed to stand against a cabal plotting a war to wipe out millions.', '..\\img\\UEH67yI.jpg', 'Matthew Vaughn', 'https://www.youtube.com/embed/_0vKejp3rvA'),
(8, 'Fate Grand Order: The Grand Temple of Time', 9, 2, 1, 8, '2021-12-09', 94, 'The Chaldea Organization must deal with the Grand Temple of Solomon, the King of Magic, which has come to destroy the world.', '..\\img\\Fa1vzQf.jpg', 'Kinoko Nasu(creator)', 'https://www.youtube.com/embed/HxG7uM6sd0o'),
(9, 'Drive My Car', 3, 4, 1, 8, '2021-12-09', 179, 'After his wife\'s unexpected death, Yusuke Kafuku, a renowned stage actor and director, receives an offer to direct a production of Uncle Vanya in Hiroshima. There, he begins to face the haunting mysteries his wife left behind.', '..\\img\\Kl7gh9G.jpg', 'Ryûsuke Hamaguchi', 'https://www.youtube.com/embed/6BPKPb_RTwI'),
(10, 'Spider-Man: No Way Home', 1, 2, 1, 2, '2021-12-15', 148, 'After his wife\'s unexpected death, Yusuke Kafuku, a renowned stage actor and director, receives an offer to direct a production of Uncle Vanya in Hiroshima. There, he begins to face the haunting mysteries his wife left behind.', '..\\img\\tAiHR2N.jpg', 'Jon Watts', 'https://www.youtube.com/embed/JfVOs4VSpmA');

-- --------------------------------------------------------

--
-- 資料表結構 `moviecast`
--

CREATE TABLE `moviecast` (
  `MovieID` int(5) NOT NULL,
  `actorID` int(5) NOT NULL,
  `No` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 資料表的匯出資料 `moviecast`
--

INSERT INTO `moviecast` (`MovieID`, `actorID`, `No`) VALUES
(1, 1, 1),
(2, 2, 2),
(2, 3, 3),
(2, 4, 4),
(2, 5, 5),
(2, 6, 6),
(4, 7, 7),
(4, 8, 8),
(4, 9, 9),
(4, 10, 10),
(4, 11, 11),
(5, 12, 12),
(5, 13, 13),
(5, 14, 14),
(6, 21, 15),
(6, 22, 16),
(6, 23, 17),
(7, 24, 18),
(7, 25, 19),
(7, 26, 20),
(8, 27, 21),
(8, 28, 22),
(8, 29, 23),
(8, 30, 24),
(9, 31, 25),
(9, 32, 26),
(9, 33, 27),
(10, 35, 28),
(10, 34, 29),
(10, 36, 30),
(10, 37, 31),
(3, 38, 32);

-- --------------------------------------------------------

--
-- 資料表結構 `movierate`
--

CREATE TABLE `movierate` (
  `RateID` int(1) NOT NULL,
  `MovieRate` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 資料表的匯出資料 `movierate`
--

INSERT INTO `movierate` (`RateID`, `MovieRate`) VALUES
(1, 'I'),
(2, 'IIA'),
(3, 'IIB'),
(4, 'III'),
(5, 'TBC');

-- --------------------------------------------------------

--
-- 資料表結構 `movietag`
--

CREATE TABLE `movietag` (
  `MovieID` int(5) NOT NULL,
  `TagID` int(5) NOT NULL,
  `No` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 資料表的匯出資料 `movietag`
--

INSERT INTO `movietag` (`MovieID`, `TagID`, `No`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 3, 3),
(4, 2, 4),
(3, 4, 5),
(5, 2, 6),
(6, 14, 7),
(6, 7, 8),
(7, 5, 9),
(7, 15, 10),
(7, 4, 11),
(8, 16, 12),
(8, 1, 13),
(9, 7, 14),
(10, 5, 15),
(10, 11, 16),
(9, 12, 17);

-- --------------------------------------------------------

--
-- 資料表結構 `movietype`
--

CREATE TABLE `movietype` (
  `TypeID` int(2) NOT NULL,
  `Type` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 資料表的匯出資料 `movietype`
--

INSERT INTO `movietype` (`TypeID`, `Type`) VALUES
(1, 'Action'),
(2, 'Comedy'),
(3, 'Drama'),
(4, 'Fantasy'),
(5, 'Horror'),
(6, 'Mystery'),
(7, 'Romance'),
(8, 'Thriller'),
(9, 'Animated');

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
('A1', 'F', 'Student'),
('A2', 'F', 'Adult'),
('A3', 'F', 'Student'),
('A4', 'F', 'Adult'),
('A5', 'F', 'Adult'),
('A6', 'F', ''),
('B1', 'F', ''),
('B2', 'T', ''),
('B3', 'F', ''),
('B4', 'T', ''),
('B5', 'T', ''),
('B6', 'F', ''),
('C1', 'F', ''),
('C2', 'F', 'student'),
('C3', 'F', 'Student'),
('C4', 'T', ''),
('C5', 'F', ''),
('C6', 'F', ''),
('D1', 'T', ''),
('D2', 'F', ''),
('D3', 'T', ''),
('D4', 'T', ''),
('D5', 'F', ''),
('D6', 'T', ''),
('E1', 'T', ''),
('E2', 'F', 'Student'),
('E3', 'F', 'Adult'),
('E4', 'F', 'Student'),
('E5', 'T', ''),
('E6', 'F', ''),
('F1', 'F', 'Adult'),
('F2', 'F', ''),
('F3', 'F', 'Adult'),
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
-- 資料表結構 `tagtable`
--

CREATE TABLE `tagtable` (
  `TagID` int(5) NOT NULL,
  `TagName` varchar(20) NOT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 資料表的匯出資料 `tagtable`
--

INSERT INTO `tagtable` (`TagID`, `TagName`, `description`) VALUES
(1, 'Animated', 'Animation is a method in which figures are manipulated to appear as moving images.'),
(2, 'Romance', 'Romance films or romance movies are romantic love stories recorded in visual media for broadcast in theaters and on television that focus on passion, emotion, and the affectionate romantic involvement of the main characters and the journey that their love takes them through dating, courtship or marriage.'),
(3, 'Horror', 'Horror is a film genre that seeks to elicit fear or disgust in its audience for entertainment purposes.'),
(4, 'Thriller', 'Thriller film, also known as suspense film or suspense thriller, is a broad film genre that evokes excitement and suspense in the audience'),
(5, 'Action', 'Action film is a film genre in which the protagonist is thrust into a series of events that typically involve violence and physical feats.'),
(6, 'Comedy', 'A comedy film is a category of film which emphasizes humor. These films are designed to make the audience laugh through amusement.'),
(7, 'Drama', 'In film and television, drama is a category of narrative fiction (or semi-fiction) intended to be more serious than humorous in tone.'),
(8, 'Mystery', 'A mystery film is a genre of film that revolves around the solution of a problem or a crime. It focuses on the efforts of the detective, private investigator or amateur sleuth to solve the mysterious circumstances of an issue by means of clues, investigation, and clever deduction.'),
(9, 'Fantasy', 'Fantasy films are films that belong to the fantasy genre with fantastic themes, usually magic, supernatural events, mythology, folklore, or exotic fantasy worlds. '),
(10, 'Video Game', 'Movie that related to Video Game'),
(11, 'Super Hero', 'A superhero film (or superhero movie) is a film that focuses on the actions of superheroes: individuals who usually possess extraordinary – generally superhuman – abilities and are dedicated to protecting the public.'),
(12, '18+', 'Movie that contain content that not suitable for children'),
(13, 'Slasher', 'A slasher film is a genre of horror films involving a killer stalking and murdering a group of people, usually by use of bladed tools.'),
(14, 'Biography', 'Biographical film is a film that dramatizes the life of a non-fictional or historically-based person or people.'),
(15, 'Adventure', 'An adventure film is form of adventure fiction, and is a genre of film.Adventure films may also be combined with other film genres such as action, animation, comedy, drama, fantasy, science fiction, family, horror, or war.'),
(16, 'FGO', 'Movie that related to mobile game FGO');

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
  `type` varchar(10) NOT NULL,
  `branchID` varchar(10) NOT NULL,
  `refund` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `ticket_record`
--

INSERT INTO `ticket_record` (`movie`, `house`, `seat`, `date`, `time`, `email`, `amount`, `ticketID`, `type`, `branchID`, `refund`) VALUES
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', 1, 'A1', '2022-04-25', '15:22:18', 'lapyanli@gmail.com', '0', 'A1515502929', 'Student', 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', 1, 'A2', '2022-04-25', '15:22:18', 'lapyanli@gmail.com', '0', 'A2391384887', 'Adult', 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', 1, 'A3', '2022-04-25', '20:51:49', 'lapyanli@gmail.com', '0', 'A3329531860', 'Student', 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', 1, 'A3', '2022-04-25', '09:08:45', 'lapyanli@gmail.com', '0', 'A3385040283', 'Adult', 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', 1, 'A4', '2022-04-25', '20:51:49', 'lapyanli@gmail.com', '0', 'A4750225830', 'Student', 'TY', 0),
('Fate/kaleid liner PRISMA ILLYA Licht Nameless Girl', 1, 'A4', '2022-04-25', '09:08:45', 'lapyanli@gmail.com', '0', 'A4992831420', 'Adult', 'TY', 0);

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

-- --------------------------------------------------------

--
-- 資料表結構 `versiontable`
--

CREATE TABLE `versiontable` (
  `VersionID` int(2) NOT NULL,
  `Version` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 資料表的匯出資料 `versiontable`
--

INSERT INTO `versiontable` (`VersionID`, `Version`) VALUES
(1, '2D'),
(2, '3D'),
(3, 'THX'),
(4, 'CGS'),
(5, 'REAL D'),
(6, '4DX'),
(7, 'IMAX'),
(8, 'VIP');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`actorID`);

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
-- 資料表索引 `house_record`
--
ALTER TABLE `house_record`
  ADD PRIMARY KEY (`branchSeatID`);

--
-- 資料表索引 `languagestable`
--
ALTER TABLE `languagestable`
  ADD PRIMARY KEY (`LanguagesID`);

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
-- 資料表索引 `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`MovieID`),
  ADD UNIQUE KEY `MovieName` (`MovieName`),
  ADD UNIQUE KEY `MovieID` (`MovieID`),
  ADD KEY `movie_type_fk1` (`Type`),
  ADD KEY `movie_version_fk3` (`Version`),
  ADD KEY `movie_lan_fk4` (`Languages`),
  ADD KEY `movie_rate_fk2` (`MovieRating`);

--
-- 資料表索引 `moviecast`
--
ALTER TABLE `moviecast`
  ADD PRIMARY KEY (`No`),
  ADD KEY `movieID_fk` (`actorID`),
  ADD KEY `actorID_fk2` (`MovieID`);

--
-- 資料表索引 `movierate`
--
ALTER TABLE `movierate`
  ADD PRIMARY KEY (`RateID`),
  ADD UNIQUE KEY `MovieRate` (`MovieRate`);

--
-- 資料表索引 `movietag`
--
ALTER TABLE `movietag`
  ADD PRIMARY KEY (`No`),
  ADD KEY `Tag_id_fk2` (`TagID`),
  ADD KEY `moiveID_fk` (`MovieID`);

--
-- 資料表索引 `movietype`
--
ALTER TABLE `movietype`
  ADD PRIMARY KEY (`TypeID`);

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
-- 資料表索引 `tagtable`
--
ALTER TABLE `tagtable`
  ADD PRIMARY KEY (`TagID`);

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

--
-- 資料表索引 `versiontable`
--
ALTER TABLE `versiontable`
  ADD PRIMARY KEY (`VersionID`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `actor`
--
ALTER TABLE `actor`
  MODIFY `actorID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- 使用資料表 AUTO_INCREMENT `house_record`
--
ALTER TABLE `house_record`
  MODIFY `branchSeatID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=941;

--
-- 使用資料表 AUTO_INCREMENT `movie`
--
ALTER TABLE `movie`
  MODIFY `MovieID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表 AUTO_INCREMENT `moviecast`
--
ALTER TABLE `moviecast`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- 使用資料表 AUTO_INCREMENT `movietag`
--
ALTER TABLE `movietag`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表 AUTO_INCREMENT `tagtable`
--
ALTER TABLE `tagtable`
  MODIFY `TagID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用資料表 AUTO_INCREMENT `versiontable`
--
ALTER TABLE `versiontable`
  MODIFY `VersionID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_lan_fk4` FOREIGN KEY (`Languages`) REFERENCES `languagestable` (`LanguagesID`),
  ADD CONSTRAINT `movie_rate_fk2` FOREIGN KEY (`MovieRating`) REFERENCES `movierate` (`RateID`),
  ADD CONSTRAINT `movie_type_fk1` FOREIGN KEY (`Type`) REFERENCES `movietype` (`TypeID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_version_fk3` FOREIGN KEY (`Version`) REFERENCES `versiontable` (`VersionID`);

--
-- 資料表的 Constraints `moviecast`
--
ALTER TABLE `moviecast`
  ADD CONSTRAINT `actorID_fk2` FOREIGN KEY (`MovieID`) REFERENCES `movie` (`MovieID`),
  ADD CONSTRAINT `movieID_fk` FOREIGN KEY (`actorID`) REFERENCES `actor` (`actorID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `movietag`
--
ALTER TABLE `movietag`
  ADD CONSTRAINT `Tag_id_fk2` FOREIGN KEY (`TagID`) REFERENCES `tagtable` (`TagID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `moiveID_fk` FOREIGN KEY (`MovieID`) REFERENCES `movie` (`MovieID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
