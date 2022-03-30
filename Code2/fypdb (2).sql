-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022 年 03 月 30 日 12:47
-- 伺服器版本： 10.4.20-MariaDB
-- PHP 版本： 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `fypdb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `actor`
--

CREATE TABLE `actor` (
  `actorID` int(5) NOT NULL,
  `actorName` varchar(50) NOT NULL,
  `information` varchar(400) DEFAULT NULL,
  `icon` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `actor`
--

INSERT INTO `actor` (`actorID`, `actorName`, `information`, `icon`) VALUES
(1, 'Mai Kadowaki', NULL, NULL),
(2, 'Noriaki Sugiyama', NULL, NULL),
(3, 'Kaori Nazuka', NULL, NULL),
(4, 'Rikiya Koyama', NULL, NULL),
(5, 'Natsuki Hanae', NULL, NULL),
(6, 'Noriko Shitaya', NULL, NULL),
(7, 'Po-Hung Lin', NULL, NULL),
(8, 'Moon Lee', NULL, NULL),
(9, 'J.C. Lin', NULL, NULL),
(10, 'Annie Chen', NULL, NULL),
(11, 'Ning Ding', NULL, NULL),
(12, 'Kai Ko', NULL, NULL),
(13, 'Vivian Sung', NULL, NULL),
(14, 'Gingle Wang', NULL, NULL),
(21, 'Kristen Stewart', NULL, NULL),
(22, 'Timothy Spall', NULL, NULL),
(23, 'Jack Nielen', NULL, NULL),
(24, 'Djimon Hounsou', NULL, NULL),
(25, 'Ralph Fiennes', NULL, NULL),
(26, 'Shaun McKee', NULL, NULL),
(27, 'Nobunaga Shimazaki', NULL, NULL),
(28, 'Tomokazu Sugita', NULL, NULL),
(29, 'Kenichi Suzumura', NULL, NULL),
(30, 'Rie Takahashi', NULL, NULL),
(31, 'Hidetoshi Nishijima', NULL, NULL),
(32, 'Tôko Miura', NULL, NULL),
(33, 'Reika Kirishima', NULL, NULL),
(34, 'Tom Holland', NULL, NULL),
(35, 'Zendaya', NULL, NULL),
(36, 'Benedict Cumberbatch', NULL, NULL),
(37, 'Jacob Batalon', NULL, NULL),
(38, 'Anya Taylor-Joy', NULL, NULL);

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
-- 傾印資料表的資料 `languagestable`
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
-- 傾印資料表的資料 `movie`
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
-- 傾印資料表的資料 `moviecast`
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
-- 傾印資料表的資料 `movierate`
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
-- 傾印資料表的資料 `movietag`
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
-- 傾印資料表的資料 `movietype`
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
-- 資料表結構 `positionstatus`
--

CREATE TABLE `positionstatus` (
  `positionID` int(1) NOT NULL,
  `positionName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `positionstatus`
--

INSERT INTO `positionstatus` (`positionID`, `positionName`) VALUES
(1, 'Fulltime'),
(2, 'PartTime');

-- --------------------------------------------------------

--
-- 資料表結構 `punchin`
--

CREATE TABLE `punchin` (
  `Staffid` int(10) NOT NULL,
  `Date` date NOT NULL,
  `CheckIntime` time NOT NULL,
  `CheckOuttime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `punchin`
--

INSERT INTO `punchin` (`Staffid`, `Date`, `CheckIntime`, `CheckOuttime`) VALUES
(0, '2022-03-08', '12:50:50', '15:50:50'),
(1, '2022-03-08', '12:50:50', '15:50:50'),
(20029999, '2022-03-08', '12:50:50', '15:50:50');

-- --------------------------------------------------------

--
-- 資料表結構 `staffaccount`
--

CREATE TABLE `staffaccount` (
  `Name` varchar(30) NOT NULL,
  `StaffID` int(10) NOT NULL,
  `Position` int(1) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Tel` int(8) NOT NULL,
  `Address` varchar(120) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `staffaccount`
--

INSERT INTO `staffaccount` (`Name`, `StaffID`, `Position`, `Gender`, `Email`, `Tel`, `Address`, `Password`) VALUES
('Amy Chan', 20029999, 1, 'F', 'amychan@yahoo.com1', 12345671, 'Hong Kong1123', '12345678'),
('Tommy li', 20909090, 1, 'M', 'tommyli@yahoo.com', 12356789, 'Lai Chi kok', '87654321');

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
-- 傾印資料表的資料 `tagtable`
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
-- 資料表結構 `ticket`
--

CREATE TABLE `ticket` (
  `ticketID` int(10) NOT NULL,
  `TDate` date NOT NULL,
  `HouseNumber` int(2) NOT NULL,
  `SeatNumber` varchar(3) NOT NULL,
  `MovieID` int(2) NOT NULL,
  `Starttime` time NOT NULL,
  `Endtime` time NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `ticket`
--

INSERT INTO `ticket` (`ticketID`, `TDate`, `HouseNumber`, `SeatNumber`, `MovieID`, `Starttime`, `Endtime`, `status`) VALUES
(123, '2022-02-10', 2, 'A21', 3, '00:00:00', '23:00:00', 0),
(321, '2022-01-18', 2, 'A32', 3, '00:55:25', '20:55:25', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `versiontable`
--

CREATE TABLE `versiontable` (
  `VersionID` int(2) NOT NULL,
  `Version` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `versiontable`
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
-- 已傾印資料表的索引
--

--
-- 資料表索引 `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`actorID`);

--
-- 資料表索引 `languagestable`
--
ALTER TABLE `languagestable`
  ADD PRIMARY KEY (`LanguagesID`);

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
-- 資料表索引 `positionstatus`
--
ALTER TABLE `positionstatus`
  ADD PRIMARY KEY (`positionID`);

--
-- 資料表索引 `staffaccount`
--
ALTER TABLE `staffaccount`
  ADD PRIMARY KEY (`StaffID`);

--
-- 資料表索引 `tagtable`
--
ALTER TABLE `tagtable`
  ADD PRIMARY KEY (`TagID`);

--
-- 資料表索引 `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticketID`);

--
-- 資料表索引 `versiontable`
--
ALTER TABLE `versiontable`
  ADD PRIMARY KEY (`VersionID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `actor`
--
ALTER TABLE `actor`
  MODIFY `actorID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `movie`
--
ALTER TABLE `movie`
  MODIFY `MovieID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `moviecast`
--
ALTER TABLE `moviecast`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `movietag`
--
ALTER TABLE `movietag`
  MODIFY `No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `staffaccount`
--
ALTER TABLE `staffaccount`
  MODIFY `StaffID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20909174;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tagtable`
--
ALTER TABLE `tagtable`
  MODIFY `TagID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `versiontable`
--
ALTER TABLE `versiontable`
  MODIFY `VersionID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_lan_fk4` FOREIGN KEY (`Languages`) REFERENCES `languagestable` (`LanguagesID`),
  ADD CONSTRAINT `movie_rate_fk2` FOREIGN KEY (`MovieRating`) REFERENCES `movierate` (`RateID`),
  ADD CONSTRAINT `movie_type_fk1` FOREIGN KEY (`Type`) REFERENCES `movietype` (`TypeID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_version_fk3` FOREIGN KEY (`Version`) REFERENCES `versiontable` (`VersionID`);

--
-- 資料表的限制式 `moviecast`
--
ALTER TABLE `moviecast`
  ADD CONSTRAINT `actorID_fk2` FOREIGN KEY (`MovieID`) REFERENCES `movie` (`MovieID`),
  ADD CONSTRAINT `movieID_fk` FOREIGN KEY (`actorID`) REFERENCES `actor` (`actorID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `movietag`
--
ALTER TABLE `movietag`
  ADD CONSTRAINT `Tag_id_fk2` FOREIGN KEY (`TagID`) REFERENCES `tagtable` (`TagID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `moiveID_fk` FOREIGN KEY (`MovieID`) REFERENCES `movie` (`MovieID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
