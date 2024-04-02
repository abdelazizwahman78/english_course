-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 21, 2023 at 12:32 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsenglish`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `aid` varchar(10) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` int(8) NOT NULL,
  `Security_Qus` varchar(70) NOT NULL,
  `Security_Ans` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`aname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`aid`, `aname`, `email`, `phone`, `Security_Qus`, `Security_Ans`, `password`) VALUES
('1234', 'adminss', 'adminss@email.com', 98574500, 'saas', 'zz', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

DROP TABLE IF EXISTS `tblcourse`;
CREATE TABLE IF NOT EXISTS `tblcourse` (
  `cid` varchar(6) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`cid`, `cname`, `level`) VALUES
('655CE', 'English level 2', 2),
('857TT', 'English level 1', 1),
('887Rt', 'English level 3', 3),
('S2328', 'English level 4', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tblquizque`
--

DROP TABLE IF EXISTS `tblquizque`;
CREATE TABLE IF NOT EXISTS `tblquizque` (
  `Qid` int(8) NOT NULL AUTO_INCREMENT,
  `Category` varchar(25) NOT NULL,
  `cid` varchar(8) NOT NULL,
  PRIMARY KEY (`Qid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblquizque`
--

INSERT INTO `tblquizque` (`Qid`, `Category`, `cid`) VALUES
(4, 'reading', '655CE'),
(5, 'Listening', '887Rt'),
(6, 'writing', '655CE'),
(7, 'interview', '887Rt');

-- --------------------------------------------------------

--
-- Table structure for table `tblquizquestion`
--

DROP TABLE IF EXISTS `tblquizquestion`;
CREATE TABLE IF NOT EXISTS `tblquizquestion` (
  `Qu_id` int(8) NOT NULL AUTO_INCREMENT,
  `Qid` int(8) NOT NULL,
  `ResouseFile` text NOT NULL,
  `Answer` varchar(255) NOT NULL,
  `Mark` double NOT NULL,
  `statement` varchar(255) NOT NULL,
  PRIMARY KEY (`Qu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblquizquestion`
--

INSERT INTO `tblquizquestion` (`Qu_id`, `Qid`, `ResouseFile`, `Answer`, `Mark`, `statement`) VALUES
(6, 3, 'videoplayback (7).mp4', '', 5, ''),
(7, 3, 'Question: Choose the correct form of the verb to complete the sentence: She __________ to the store yesterday. \r\n\r\na) go\r\n\r\nb) goes\r\n\r\nc) went\r\n\r\nd) gone', 'A', 5, ''),
(8, 3, 'Question: Fill in the blank with the correct preposition: The book is ________ the table.\r\n\r\na) at\r\n\r\nb) in\r\n\r\nc) on\r\n\r\nd) by\r\n', 'C', 5, ''),
(9, 3, 'Question: Identify the adverb in the following sentence: She quickly ran to catch the bus.\r\n\r\na) She\r\n\r\nb) quickly\r\n\r\nc) ran\r\n\r\nd) bus\r\n', 'B', 5, ''),
(10, 5, 'videoplayback (7).mp4', '', 5, ''),
(11, 5, ' Which sentence has correct subject-verb agreement?\r\n\r\n  a) The cat runs fast.\r\n\r\n  b) The cat run fast.\r\n\r\n  c) The cats runs fast.\r\n\r\n  d) The cats run fast.\r\n', 'C', 5, ''),
(12, 5, ' Choose the correct form of the verb to complete the sentence: They ________ basketball every weekend.\r\n\r\n  a) plays\r\n\r\n  b) play\r\n\r\n  c) played\r\n\r\n   d) playing\r\n', 'B', 5, ''),
(13, 5, 'Question: Identify the adverb in the following sentence: She quickly ran to catch the bus.\r\n\r\n  a) She\r\n\r\n b) quickly\r\n\r\n  c) ran\r\n \r\n  d) bus\r\n', 'B', 5, ''),
(14, 3, 'The sun slowly dipped below the horizon, casting a warm orange glow across the tranquil lake. The water shimmered, reflecting the fading light of the day. A gentle breeze rustled the leaves of the surrounding trees, creating a soothing melody. Birds chirped their final songs before settling in for the night. The air was filled with the sweet scent of blooming flowers that lined the shore. As dusk settled in, the stars began to emerge one by one, dotting the darkening sky. The soft hum of insects filled the air, adding to the symphony of nature. The stillness of the evening \r\nembraced the surroundings, inviting a sense of calm and serenity. In the distance, a faint echo of laughter could be heard from a group of friends gathered around a crackling bonfire. Time seemed to stand still in this picturesque moment, capturing the essence of nature\'s beauty.\r\nThe sun slowly dipped below the horizon, casting a warm orange glow across the tranquil lake. The water shimmered, reflecting the fading light of the day. A gentle breeze rustled the leaves of the surrounding trees, creating a soothing melody. Birds chirped their final songs before settling in for the night. The air was filled with the sweet scent of blooming flowers that lined the shore. As dusk settled in, the stars began to emerge one by one, dotting the darkening sky. The soft hum of insects filled the air, adding to the symphony of nature. The stillness of the evening embraced the surroundings, inviting a sense of calm and serenity. In the distance, a faint echo of laughter could be heard from a group of friends gathered around a crackling bonfire. Time seemed to stand still in this picturesque moment, capturing the essence of nature\'s beauty.', '', 5, ''),
(15, 5, 'cvcxv xdgdsglsgkr\'r;kpfkg gknbc bpknf gldsngpds g,md ogd glap\'g\r\npdag dlg dgdm gdjs gpkds gl\'ds g dsglmds g\'dg\'ds g\'dsmg l\'dsm gdsm gd\'sg peinpwingdmd gm dlsm gpdsgldm gpds gpds gd sgd g\'sd g\'sdg \'sdgdsgn jdngjfgnjfgnsj\'\'aÃ¡epnfdkf;a ;ag pepiewpiriprrrr 3lkn3nrpe\'t\'nÃ¡geloe\r\n[[]e]le]kte[wt[eomtetl ddl lds gld gld gld gld gld gd g\'dsdsgd]gddgsog[dog[eoe]gr]gr]gr]gor', 'ff', 5, ''),
(16, 4, 'cccccccccccccc jjk Ã³o\'hj[9yhb j.vulcyicxkyic ,n ,lj cvlovcl .jb;jgpugi[ .jb;jb;\'[iohpiguot790tjvjlv', 'nn', 5, ''),
(17, 4, 'Some years ago, my husband and I went to stay with our friend, John, at a â€˜pousadaâ€™ (guest house) he had opened in Paraty, a small town in Brazil. John was going to have his 30th birthday after we left and to celebrate this event, we told him we would like to take him out somewhere special for a meal. He said he knew just the place and duly made all the arrangements. \r\n\r\nOn the date set, we parked and suddenly Senhor Roberto, the owner of the restaurant, appeared out of the darkness clutching a candle in a jam jar. He led us up the hillside into the darkness along a well lit, but steep, winding path which seemed to fall away.We had no idea where we were going and held each othersâ€™ hands.We suddenly realized the restaurant was above us and as we arrived, we were introduced to Senhor Robertoâ€™s wife and daughter, who stood shyly in the makeshift kitchen waiting to serve the food. \r\n\r\nThe restaurant itself was no less magical than the trip up, with two small tables set with banana leaves for place mats and an arrangement of fabulous tropical flowers. It quickly became apparent that we were the only guests and would be served dishes from food bought fresh at market and selected by the family, so after chatting briefly, Senhor Roberto served the first course, which was some kind of Brazilian river fish served with fried banana. More delights followed and the main course and high point of the meal was â€˜Bobo de camaraoâ€™, a dish of prawns served inside a baked pumpkin. \r\n\r\nIt was a remarkable meal, and what I remember was how Senhor Roberto and his family had served and prepared the meal with a love of their local produce. \r\n\r\n \r\n\r\nWhy did the writer want to take John out for a meal? \r\n\r\n A) to celebrate his birthday  \r\n B) to commemorate a special event in \r\n       the \r\n    town  \r\n C) to celebrate seeing each other again\r\n', 'A', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

DROP TABLE IF EXISTS `tblstudent`;
CREATE TABLE IF NOT EXISTS `tblstudent` (
  `sid` varchar(10) NOT NULL,
  `Sfname` varchar(20) NOT NULL,
  `Slname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` int(8) NOT NULL,
  `Security_Qus` varchar(70) NOT NULL,
  `Security_Ans` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `aid` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`sid`, `Sfname`, `Slname`, `mname`, `email`, `phone`, `Security_Qus`, `Security_Ans`, `password`, `aid`, `status`) VALUES
('123', 'intisar', 'Ahmed', '', 'intisar19961@hotmail.com', 96857452, 'What is your mothers maiden name?', 'fatma', '12345678', '', '1'),
('2323r', 'ss', 'ssd', 'df', 'ahmed211@email.com', 96857452, 'What is your mothers maiden name?', 'xx', '123456Aa@', '', '0'),
('343f', 'dfd', 'd', 'v', 'customer@email.com', 96857452, 'What is your favorite book or movie?', 'ss', '12345678', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbltakequiz`
--

DROP TABLE IF EXISTS `tbltakequiz`;
CREATE TABLE IF NOT EXISTS `tbltakequiz` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `sid` varchar(10) NOT NULL,
  `Qid` varchar(10) NOT NULL,
  `Result` int(20) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltakequiz`
--

INSERT INTO `tbltakequiz` (`id`, `sid`, `Qid`, `Result`, `Date`) VALUES
(20, '1', '3', 5, '2023-05-15'),
(21, '343f', '5', 5, '2023-05-15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
