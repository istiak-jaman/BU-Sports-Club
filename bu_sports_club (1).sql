-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 05:59 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bu_sports_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `chess`
--

CREATE TABLE `chess` (
  `NAME` varchar(100) NOT NULL,
  `DEPARTMENT` varchar(100) NOT NULL,
  `SESSION` varchar(100) NOT NULL,
  `ROLL` varchar(100) NOT NULL,
  `REGISTRATION` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `MOBILE` varchar(100) NOT NULL,
  `DATE_OF_BIRTH` varchar(100) NOT NULL,
  `GENDER` varchar(100) NOT NULL,
  `LEVEL` varchar(100) NOT NULL,
  `PHOTO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chess`
--

INSERT INTO `chess` (`NAME`, `DEPARTMENT`, `SESSION`, `ROLL`, `REGISTRATION`, `EMAIL`, `MOBILE`, `DATE_OF_BIRTH`, `GENDER`, `LEVEL`, `PHOTO`) VALUES
('Diptonil Singha', 'CSE', '2015-16', '16CSE-020', '110-020-16', 'Diptonil@gmail.com', '01987654321', '11-11-1996', 'male', 'INTERMIDIATE', 'image/FB_IMG_1475227273862.jpg'),
('Istiak_jaman', 'CSE', '2015-16', '16CSE-031', '110--31-16', 'ij@gmail.com', '01987654321', '01-01-1997', 'male', 'HARD', 'image/FB_IMG_1475057714529.jpg'),
('IJO', 'PHILOSOPHY', '2016-17', '15641', '1213', 'gfvh@gmail.com', '76564456', '12-12-1990', 'male', 'BEGINNER', 'image/FB_IMG_1473625564945.jpg'),
('Tammee', 'CSE', '2015-16', '16cse047', '110-047-16', 'tammee@gmail.com', '01987675432', '10-10-1997', 'female', 'HARD', 'image/IMG_20160826_120145_070.JPG'),
('Dipto', 'DISASTER MANAGEMENT', '6543', '56432', '76543', 'dip@gmail.com', '76543245', '11-11-11', 'male', 'BEGINNER', 'image/FB_IMG_1468436710163.jpg'),
('Hafsa', 'BOTANY', '5643', '6543', '8976', 'hafsa@gmail.com', '098765432', '11-11-11', 'female', 'HARD', 'image/FB_IMG_1469044608384.jpg'),
('Hafsa', 'CSE', '2015-16', '16CSE002', '110-002-16', 'hafsa@gmail.com', '01706679919', '11-08-1996', 'female', 'ADVANCE', 'image/FB_IMG_1469965915636.jpg'),
('Hafsa', 'CSE', '2015-16', '16CSE-002', '110-002-16', 'hafsabucse3@gmail.com', '01706679919', '1996-08-11', 'female', 'ADVANCE', 'image/FB_IMG_1475227273862.jpg'),
('Hafsa', 'CSE', '2015-16', '16CSE-002', '110-002-16', 'hafsabucse3@gmail.com', '01706679919', '1996-08-11', 'female', 'ADVANCE', 'image/FB_IMG_1469107103267.jpg'),
('Hafsa Chowdhury', 'CSE', '2015-16', '16CSE-002', '110-002-16', 'hafsabucse3@gmail.com', '01706679919', '1996-08-11', 'female', 'HARD', 'image/FB_IMG_1468436710163.jpg'),
('Tammee', 'BOTANY', '4343555', '43', '5345', 'tam@gmail.com', '32', '2018-02-07', 'male', 'HARD', 'image/FB_IMG_1468436710163.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cricket`
--

CREATE TABLE `cricket` (
  `NAME` varchar(100) NOT NULL,
  `DEPARTMENT` varchar(100) NOT NULL,
  `SESSION` varchar(100) NOT NULL,
  `ROLL` varchar(100) NOT NULL,
  `REGISTRATION` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `MOBILE` varchar(100) NOT NULL,
  `DATE_OF_BIRTH` varchar(100) NOT NULL,
  `GENDER` varchar(100) NOT NULL,
  `ACTION` varchar(100) NOT NULL,
  `PHOTO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cricket`
--

INSERT INTO `cricket` (`NAME`, `DEPARTMENT`, `SESSION`, `ROLL`, `REGISTRATION`, `EMAIL`, `MOBILE`, `DATE_OF_BIRTH`, `GENDER`, `ACTION`, `PHOTO`) VALUES
('Istiak Jaman', 'CSE', '2014-15', '16CSE031', '110-031-16', 'istiak@gmail.com', '01757222834', '03-10-1997', 'male', 'All Rounder', 'image/2017-02-02-01-13-57-843.jpg'),
('Sajib Paul', 'CSE', '2015-16', '16CSE-039', '110-039-16', 'paul@gmail.com', '01781406132', '01/01/1997', 'male', 'Bat', 'image/P_20161112_090515_BF.jpg'),
('Protap Dam', 'geo', '2015-16', '16GLM-024', '181-024-16', 'pkdbd1@gmail.com', '01772345115', '27-09-1996', 'male', 'Bat', 'image/P_20161112_085708_BF.jpg'),
('Saiful Islam', 'GEOLOGY', '2014-15', '16GLM033', '181-033-16', 'saiful@gmail.com', '01978674534', '21-12-1996', 'male', 'allround', 'image/FB_IMG_1474260274336.jpg'),
('Dhrubo', 'CSE', '2015-16', '16CSE020', '', 'dhrubo@mail.com', '123456789', '2-4-97', 'male', 'allround', 'image/P_20161112_070028.jpg'),
('Istiak_Jaman', 'CSE', '2014-15', '16CSE-031', '110-031-16', 'istiakjaman@gmail.com', '01696174801', '03-10-1997', 'male', 'RIGHT HANDED', 'image/IMG_20161123_013559_619.jpg'),
('anik', 'PUBLIC ADMINSTRATION', '2014-15', '15PUB87', '181716', 'anik@gmail.com', '01826272623', '12-12-1995', 'male', 'LEFT HANDED', 'image/FB_IMG_1469965915636.jpg'),
('Imam Hossain', 'ACCOUNTING', '2014-15', '15AIS-021', '110-021-15', 'hossain@gmail.com', '01834234125', '06-09-1996', 'male', 'LEFT HANDED', 'image/FB_IMG_1474685091724.jpg'),
('Abu Saem Shefat', 'CSE', '2015-16', '16CSE-006', '110-006-16', 'saem.cse3.bu@gmail.com', '01985079500', '16-11-1997', 'male', 'Bat', 'image/FB_IMG_1474725783351.jpg'),
('Imran Gazi', 'GEOLOGY', '2015-16', '16GLM034', '198765', 'imran@gmail.com', '0098765432', '21-12-1996', 'male', 'allround', 'image/FB_IMG_1472895369562.jpg'),
('Mazharul Islam', 'CSE', '876', '456', '67564556', 'mazhar@gmail.com', '9087899876', '1-1-1996', 'male', 'allround', 'image/FB_IMG_1471585830619.jpg'),
('Istiak Jaman Ami', 'CSE', '2015-16', '16CSE-031', '110-031-16', 'anik.cse3.bu@gmail.com', '01757222834', '1997-05-23', 'male', 'allround', 'image/IMG_20161114_012936_794.jpg'),
('ISTIAK JAMAN AMI', 'CSE', '2015-16', '16CSE-031', '110-031-16', 'anik.cse3.bu@gmail.com', '01757222834', '1997-05-23', 'male', 'allround', 'image/IMG_20161114_012936_794.jpg'),
('ISTIAK Jaman AMI', 'CSE', '2015-16', '16CSE-031', '110-031-16', 'anik.cse3.bu@gmail.com', '01757222834', '1997-05-23', 'male', 'allround', 'image/IMG_20161114_012936_794.jpg'),
('Istiak Jaman AMI', 'CSE', '2015-16', '16cse-031', '110-031-16', 'anik.cse3.bu@gmail.com', '01757222834', '1997-05-23', 'male', 'allround', 'image/IMG_20161114_012936_794.jpg'),
('Istiak jaman Ami', 'CSE', '2015-16', '16CSe-031', '110-031-16', 'anik.cse3.bu@gmail.com', '01757222834', '1997-05-23', 'male', 'allround', 'image/IMG_20161114_012936_794.jpg'),
('Arifujjaman Avi', 'ENGLISH', '2015-16', '16ENG011', '110-011-16', 'avi@gmail.com', '01717843286', '04-07-1996', 'male', 'Bat', 'image/FB_IMG_1471958276989.jpg'),
('kkugu', 'PHILOSOPHY', 'gghj', 'fgfghj', 'gfgjhkk', 'ddfghg@gmail.com', '345678324', '2017-08-06', 'male', 'LEFT HANDED', 'image/FB_IMG_1471720313477.jpg'),
('Khan Mohammad Jahir', 'PHYSICS', '2015-16', '16PHY01', '110-001-16', 'jahir@gmail.com', '01767674189', '1995-07-21', 'male', 'allround', 'image/FB_IMG_1473625564945.jpg'),
('Sakib Al Hasan', 'PHILOSOPHY', '2014-15', '16PHE031', '110-031016', 'sakib@gmail.com', '01757222834', '22-10-1996', 'male', 'allround', 'image/FB_IMG_1469948688901.jpg'),
('Virat Kohli', 'CSE', '2015-16', '16CSE031', '110-031-16', 'Virat@gmail.com', '01757222834', '03-10-1997', 'male', 'Bat', 'image/2016-12-27-16-14-54-861.jpg'),
('Sajib Paul', 'CSE', '2015-16', '16CSE-039', '110-039-16', 'sajib.cse3.bu@gmail.com', '01781406132', '2001-02-04', 'male', 'RIGHT HANDED', 'image/FB_IMG_1469965915636.jpg'),
('Arifujjaman Avi', 'CSE', '2015-16', '16CSE001', '110-001-16', 'avi@gmail.com', '01717843286', '1996-11-04', 'male', 'Bat', 'image/20161117_053150.jpg'),
('Sajib Paul', 'CSE', '2015-16', '16CSE039', '110-039-16', 'sajib@gmail.com', '01781406132', '2000-02-08', 'male', 'Bat', 'image/24991302_3262898487372246_1951693925017158304_n.jpg'),
('Shanto', 'POLITICAL SCIENCE', '2071-72', '223', '32', 'shanto@gmail.com', '01757222834', '2018-02-13', 'male', 'RIGHT HANDED', 'image/FB_IMG_1471958276989.jpg'),
('Shanto', 'ECONOMICS', '45', '43', '535', 'sh@gmail.com', '6788', '2018-02-23', 'male', 'Bat', 'image/FB_IMG_1472523370234.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `football`
--

CREATE TABLE `football` (
  `NAME` varchar(100) NOT NULL,
  `DEPARTMENT` varchar(100) NOT NULL,
  `SESSION` varchar(100) NOT NULL,
  `ROLL` varchar(100) NOT NULL,
  `REGISTRATION` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `MOBILE` varchar(100) NOT NULL,
  `DATE_OF_BIRTH` varchar(100) NOT NULL,
  `GENDER` varchar(100) NOT NULL,
  `POSITION` varchar(100) NOT NULL,
  `PHOTO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `football`
--

INSERT INTO `football` (`NAME`, `DEPARTMENT`, `SESSION`, `ROLL`, `REGISTRATION`, `EMAIL`, `MOBILE`, `DATE_OF_BIRTH`, `GENDER`, `POSITION`, `PHOTO`) VALUES
('hafsa', 'SOCIOLOGY', '2013-14', '14soc002', '3444353', 'hafsa@gmail.com', '01654789012', '11-11-194', 'male', 'FORWARD', 'image/C360_2016-09-04-14-12-14-209.jpg'),
('Protap', 'GEOLOGY', '2014-15', '16GLM024', '181-024-16', 'protap@gmail.com', '01765432112', '12-12-1996', 'male', 'Middle Hitter', 'image/P_20161112_091906_HDR.jpg'),
('Sajib paul', 'CSE', '2015-16', '16cse039', '110-039-16', 'sajib.cse3@gmail.com', '01781406132', '04-05-1997', 'male', 'FORWARD', 'image/P_20161112_065217.jpg'),
('Shimul Khan', 'CSE', '2014-15', '7654', '7655', 'shimul@gmail.com', '09876543234', '12-12-12', 'male', 'FORWARD', 'image/FB_IMG_1469107103267.jpg'),
('Mazharul', 'CHEMISTRY', '7654', '7654', '4546', 'maz@gmail.com', '01987654345', '11-12-1996', 'male', 'FORWARD', 'image/FB_IMG_1481195479471.jpg'),
('Istiak Jaman Ami', 'CSE', '2015-16', '16CSE-031', '110-031-16', 'istiakjaman@gmail.com', '01834587977', '1997-05-23', 'male', 'DEFENDER', 'image/IMG_20161123_013406_348.jpg'),
('ISTIAK Jaman', 'CSE', '2015-16', '16CSE-031', '110-031-16', 'istiakjaman@gmail.com', '01834587977', '1997-05-23', 'male', 'DEFENDER', 'image/IMG_20161123_013406_348.jpg'),
('Istiak JAMAN Ami', 'CSE', '2015-16', '16CSE-031', '110-031-16', 'istiakjaman@gmail.com', '01686174801', '1997-03-10', 'male', 'DEFENDER', 'image/IMG_20161123_013218_533.jpg'),
('Bipul Mandal', 'CSE', '2015-16', '16CSE-040', '110-040-16', 'bipul@gmail.com', '01845673412', '1996-11-03', 'male', 'DEFENDER', 'image/IMG_20161123_013218_533.jpg'),
('Sajib PAUL', 'CSE', '2015-16', '16CSE039', '110-039-16', 'sajibpaul@gmail.com', '01784167182', '11-11-1911', 'male', 'Middle Blocker', 'image/FB_IMG_1472895369562.jpg'),
('avi', 'BOTANY', '2015-16', '11111', '12121', 'aavvii@gmail.com', '0987656787', '1998-12-12', 'male', 'Setter', 'image/FB_IMG_1472895369562.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(1, 'CRICKET'),
(2, 'FOOTBALL'),
(3, 'VOLLEY'),
(4, 'BADMINTON'),
(5, 'TABLE TENNIS'),
(6, 'CHESS'),
(7, 'CARROMBOARD'),
(8, 'LUDU'),
(9, 'OTHERS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `firstname`, `lastname`, `email`, `address`, `message`, `status`, `date`) VALUES
(1, 'Istiak Jaman', 'Ami', 'anik.cse3.bu@gmail.com', 'Rupatali,Barisal', 'The website is my dream...!!', 0, '2017-11-22 15:39:45'),
(4, 'à¦¸à§à¦¹à¦¾à¦¸à¦¿à¦¨à¦¿', 'à¦¹à¦¾à¦«à¦¸à¦¾', 'hafsa@gmail.com', 'Rupatali Housing', 'Sidebar text will be go here.Sidebar text will be go here.Sidebar text will be go here.Sidebar text will be go here.', 1, '2017-11-22 17:53:37'),
(5, 'Nadira', 'Akter', 'nadira.mona96@gmail.com', 'Sador Road, Barisal', 'I love the website', 1, '2017-12-05 05:50:25'),
(6, 'Arifujjaman', 'Avi', 'avi@gmail.com', 'Vatiyari, Chittagong', 'Your website is awesome', 1, '2018-01-10 03:10:13'),
(7, 'Sajib', 'Paul', 'sajib@gmail.com', 'BU', 'test message', 1, '2018-01-14 04:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_copyright`
--

CREATE TABLE `tbl_copyright` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_copyright`
--

INSERT INTO `tbl_copyright` (`id`, `text`) VALUES
(1, 'BU Sporting Club');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `cat`, `title`, `body`, `image`, `author`, `tags`, `date`, `userid`) VALUES
(10, 1, 'Barisal University--CRICKET', '<p>University of Barisal is also known as Barisal University or simply BU, is a public university located in Barisal, a city in southern Bangladesh.[1] It is the only general public university in Barisal division and the country\'s 33rd public university. It was established in 2011 and started educational activities on 24 January 2012. The university offers degrees in undergraduate levels. There are twenty academic departments under six faculties<br /><br />University of Barisal is also known as Barisal University or simply BU, is a public university located in Barisal, a city in southern Bangladesh.[1] It is the only general public university in Barisal division and the country\'s 33rd public university. It was established in 2011 and started educational activities on 24 January 2012. The university offers degrees in undergraduate levels. There are twenty academic departments under six faculties<br /><br />University of Barisal is also known as Barisal University or simply BU, is a public university located in Barisal, a city in southern Bangladesh.[1] It is the only general public university in Barisal division and the country\'s 33rd public university. It was established in 2011 and started educational activities on 24 January 2012. The university offers degrees in undergraduate levels. There are twenty academic departments under six faculties</p>', 'upload/ef11501bb2.jpg', 'Istiak Jaman', 'Cricket', '2017-11-11 02:11:22', 0),
(11, 2, 'Moto of Barisal University Sporting Club', '<p>This is a fruitful website for sports lover . Its stands only for Barisal University .All Kind of Sports that is been played at Barisal University you would find these information here . The all sports events and all sports vedios , photos , files are would have been found here . Users may create their player profile on their choosable sports. It will be a great pleasure for sports lover that other users can see their profile . Any user can be registered here if they want...........<br /><br />This is a fruitful website for sports lover . Its stands only for Barisal University .All Kind of Sports that is been played at Barisal University you would find these information here . The all sports events and all sports vedios , photos , files are would have been found here . Users may create their player profile on their choosable sports. It will be a great pleasure for sports lover that other users can see their profile . Any user can be registered here if they want...........<br /><br />This is a fruitful website for sports lover . Its stands only for Barisal University .All Kind of Sports that is been played at Barisal University you would find these information here . The all sports events and all sports vedios , photos , files are would have been found here . Users may create their player profile on their choosable sports. It will be a great pleasure for sports lover that other users can see their profile . Any user can be registered here if they want...........</p>', 'upload/9be05b3277.jpg', 'Hafsa', 'Moto', '2017-11-11 02:13:08', 0),
(14, 8, 'Our post title here--Ludu', '<p>Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.<br /><br />Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.<br /><br />Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.<br /><br />Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>', 'upload/ccf7c9e4f3.png', 'Hafsa', 'Ludu', '2017-11-11 02:17:24', 0),
(15, 4, 'Our post title here--Badminton', '<p>Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.<br /><br />Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.<br /><br />Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.<br /><br />Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>', 'upload/ede5149a4e.jpg', 'Istiak Jaman', 'Badminton', '2017-11-11 02:18:52', 0),
(16, 7, 'Our Carrom post title here--Carrom', '<p>Carrom Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.<br /><br />Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.<br /><br />Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.<br /><br />Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>', 'upload/de8ec286e4.jpg', 'Sajib Paul', 'CARROM', '2017-11-11 02:19:46', 0),
(19, 9, 'Website debugging test', '<p>Hopefully our website will run&nbsp;</p>', 'upload/e78bfd5ba6.jpg', 'istiak_jaman', 'tags', '2017-11-29 05:51:28', 6),
(21, 9, 'Sajib Paul post11', '<p>test posttest post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post test post</p>', 'upload/f32a18e6a7.jpg', 'sajib_paul', 'tags', '2017-12-14 03:51:30', 2),
(22, 8, 'hafsa post title', '<p>hafsa posthafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post hafsa post</p>', 'upload/919a0bc3bf.jpg', 'hafsa', 'hafsa', '2017-12-14 04:05:15', 3),
(23, 9, 'Check Post', '<p>Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;Check post&nbsp;</p>', 'upload/d8a8e8cea4.jpg', 'istiak_jaman', 'check', '2018-02-28 14:47:18', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `dejignation` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `image`) VALUES
(3, 'Beauty of Barisal University', 'upload/slider/f5754f6278.jpg'),
(4, 'University of Barisal.', 'upload/slider/7e156ba3f5.jpg'),
(5, 'Inside capture of Beautiful Barisal University.', 'upload/slider/b06fd77989.png'),
(8, 'Barisal University Bridge at night.', 'upload/slider/1cb2c0ebe6.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `id` int(11) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `ln` varchar(255) NOT NULL,
  `gp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `fb`, `tw`, `ln`, `gp`) VALUES
(1, 'http://facebook.com', 'http://twitter.com', 'http://linkdin.com', 'http://google.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_theme`
--

CREATE TABLE `tbl_theme` (
  `id` int(11) NOT NULL,
  `theme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_theme`
--

INSERT INTO `tbl_theme` (`id`, `theme`) VALUES
(1, 'gray');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `password`, `email`, `details`, `role`) VALUES
(2, 'Sajib Paul', 'sajib_paul', '202cb962ac59075b964b07152d234b70', 'sajib.cse3.bu@gmail.com', '', 1),
(3, 'Hafsa', 'hafsa', '81dc9bdb52d04dc20036dbd8313ed055', 'hafsabucse3@gmail.com', '', 2),
(6, 'Istiak Jaman Ami', 'istiak_jaman', '827ccb0eea8a706c4c34a16891f84e7b', 'anik.cse3.bu@gmail.com', '<p><span style=\"font-size: medium;\">Former student of Barisal University in the department of Computer Science and Engineering</span></p>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `title_slogan`
--

CREATE TABLE `title_slogan` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title_slogan`
--

INSERT INTO `title_slogan` (`id`, `title`, `slogan`, `logo`) VALUES
(1, 'BU Sporting CLUB', 'It Stands only for Barisal University', 'upload/logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_copyright`
--
ALTER TABLE `tbl_copyright`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_theme`
--
ALTER TABLE `tbl_theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_slogan`
--
ALTER TABLE `title_slogan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_copyright`
--
ALTER TABLE `tbl_copyright`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_theme`
--
ALTER TABLE `tbl_theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `title_slogan`
--
ALTER TABLE `title_slogan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
