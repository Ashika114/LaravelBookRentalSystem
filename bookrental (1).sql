-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 20, 2022 at 04:34 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `authorid` int(4) NOT NULL AUTO_INCREMENT,
  `authorname` varchar(20) NOT NULL,
  `contactno` varchar(14) DEFAULT NULL,
  `emailid` varchar(30) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`authorid`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`authorid`, `authorname`, `contactno`, `emailid`, `image`) VALUES
(1, 'Chetan1', '1234', 'abc@gamil.com', 'file/pp.png'),
(2, 'RuskinBond', '456', 'bvc', NULL),
(3, 'Vikram Seth', '234', 'qwe', NULL),
(34, 'Hamish Chandler', '620', 'qijasof@mailinator.com', 'file/pp.png'),
(29, 'Orson Dotson', '619', 'wybapigo@mailinator.com', 'file/5e9f65ac1ea05159e0b7ecf9d7b8f052.jpg'),
(27, 'Yoshio Golden', '820', 'madojoguf@mailinator.com', 'file/pp.png'),
(31, 'Genevieve12', '130', 'tuhozipod@mailinator.com', 'file/grid.jpg'),
(32, 'Keelie England', '354', 'zyhesufa@mailinator.com', 'file/grid.png'),
(35, 'Amanda Blevins', '726', 'dusijataxe@mailinator.com', 'file/image0.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `bookid` int(4) NOT NULL AUTO_INCREMENT,
  `ownerid` int(4) NOT NULL,
  `authorid` int(4) NOT NULL,
  `pubid` int(4) NOT NULL,
  `booktypeid` int(4) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `shortname` varchar(15) DEFAULT NULL,
  `totalpage` int(5) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `price` int(6) NOT NULL,
  `pubdate` date DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `copies` int(3) NOT NULL,
  `days` varchar(10) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `ownerid`, `authorid`, `pubid`, `booktypeid`, `bookname`, `shortname`, `totalpage`, `image`, `price`, `pubdate`, `details`, `copies`, `days`) VALUES
(1, 2, 1, 1, 1, 'Cadman Zimmerman', 'Bene', 2, 'file/grid.png', 2000, '1990-01-01', 'abc', 3, '6'),
(2, 2, 2, 1, 1, 'Stewart Gross', 'Chava James', 80, NULL, 123, '1990-01-01', 'Neque voluptate accu', 29, '3'),
(3, 2, 27, 4, 3, 'Noble Mooney', 'Alexandra Riley', 4, 'file/5e9f65ac1ea05159e0b7ecf9d7b8f052.jpg', 194, '1983-04-02', 'Adipisci adipisicing', 79, '1'),
(6, 2, 27, 4, 3, 'Aretha Patrick', 'Troy Molina', 74, 'file/pp.png', 630, '1990-03-04', 'Reprehenderit delect', 65, '9'),
(7, 2, 27, 4, 3, 'Aretha Patrick', 'Troy Molina', 74, 'file/pp.png', 630, '1990-03-04', 'Reprehenderit delect', 65, '9');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `bookingid` int(4) NOT NULL AUTO_INCREMENT,
  `bookingdate` date NOT NULL,
  `bookid` int(4) NOT NULL,
  `readerid` int(4) NOT NULL,
  `ownerid` int(4) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `confirmation` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`bookingid`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `bookingdate`, `bookid`, `readerid`, `ownerid`, `status`, `confirmation`) VALUES
(5, '2022-07-06', 3, 3, 2, NULL, NULL),
(4, '2022-07-06', 1, 3, 2, NULL, NULL),
(3, '2022-07-06', 1, 3, 2, NULL, NULL),
(2, '2022-07-06', 2, 3, 2, NULL, NULL),
(1, '2022-07-11', 1, 3, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookingcancel`
--

DROP TABLE IF EXISTS `bookingcancel`;
CREATE TABLE IF NOT EXISTS `bookingcancel` (
  `bkcanid` int(4) NOT NULL AUTO_INCREMENT,
  `bkcandate` date NOT NULL,
  `bookingid` int(4) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`bkcanid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingcancel`
--

INSERT INTO `bookingcancel` (`bkcanid`, `bkcandate`, `bookingid`, `reason`, `status`) VALUES
(1, '2022-07-12', 1, 'abc', ''),
(2, '2022-07-04', 16, 'abc', 'pending'),
(3, '2022-07-04', 16, 'asdsc', 'pending'),
(4, '2022-07-04', 1, 'i dont like ir', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `booktype`
--

DROP TABLE IF EXISTS `booktype`;
CREATE TABLE IF NOT EXISTS `booktype` (
  `booktypeid` int(11) NOT NULL AUTO_INCREMENT,
  `booktypename` varchar(40) NOT NULL,
  `shortname` varchar(20) NOT NULL,
  PRIMARY KEY (`booktypeid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booktype`
--

INSERT INTO `booktype` (`booktypeid`, `booktypename`, `shortname`) VALUES
(1, 'Fantasy', 'fan'),
(2, 'Thriller', 'Thri'),
(3, 'Sci-Fi', 'sci');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `contactid` int(4) NOT NULL AUTO_INCREMENT,
  `contactdate` date DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `details` varchar(100) DEFAULT NULL,
  `contactno` int(12) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `response` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `contactdate`, `name`, `subject`, `details`, `contactno`, `emailid`, `response`) VALUES
(1, NULL, 'sita', '', 'abc', 123, 'assd', 'abc'),
(2, NULL, 'feni', '', 'bjjn', 988, 'hh', 'abc'),
(3, '2022-06-29', 'Ramona Browning', 'Dolore doloremque mi', 'Quia dolore eos ame', 123, 'hyza@mailinator.com', 'dsadsa'),
(4, '2022-06-29', 'Clare Morse', 'Accusamus consequatu', 'Neque sapiente aut i', 12, 'nymesos@mailinator.com', 'avfrvgdfgvdfvergr'),
(5, '2022-06-29', 'Meghan Elliott', 'Ducimus adipisicing', 'Quae sed excepteur n', 123, 'nadelocera@mailinator.com', 'abc'),
(6, '2022-06-29', 'Lydia Wiggins', 'Exercitationem debit', 'Soluta quae delectus', 993, 'patelgita9762@gmail.com', 'hello'),
(7, '2022-06-29', 'Xaviera Yang', 'Consequatur possimu', 'Quidem est atque qui', 1, 'pyfujezos@mailinator.com', 'sad'),
(8, '2022-06-29', 'Gregory Haynes', 'Vel sed saepe tempor', 'Sint minim voluptate', 1, 'zawalyru@mailinator.com', NULL),
(9, '2022-06-29', 'Leilani Solis', 'Dolore beatae aut ab', 'Rerum qui sunt rerum', 52, 'meetpatel03016@gmail.com', 'I am Happy');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

DROP TABLE IF EXISTS `email`;
CREATE TABLE IF NOT EXISTS `email` (
  `emailid` int(4) NOT NULL AUTO_INCREMENT,
  `emaildate` date NOT NULL,
  `emailfrom` varchar(30) NOT NULL,
  `emailto` varchar(30) NOT NULL,
  `subject` varchar(30) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `regid` int(4) NOT NULL,
  PRIMARY KEY (`emailid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedbackid` int(4) NOT NULL AUTO_INCREMENT,
  `feedbackdate` date DEFAULT NULL,
  `readerid` int(4) NOT NULL,
  `ownerid` int(4) NOT NULL,
  `details` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`feedbackid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `feedbackdate`, `readerid`, `ownerid`, `details`) VALUES
(1, '2022-06-13', 1, 1, 'abc'),
(2, '2022-06-06', 2, 2, 'xyz'),
(3, '2022-06-13', 1, 1, 'abc'),
(4, '2022-06-06', 2, 2, 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `msgid` int(4) NOT NULL AUTO_INCREMENT,
  `msgdate` date DEFAULT NULL,
  `message` varchar(100) NOT NULL,
  `mobileno` int(12) NOT NULL,
  `regid` int(4) NOT NULL,
  PRIMARY KEY (`msgid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

DROP TABLE IF EXISTS `owner`;
CREATE TABLE IF NOT EXISTS `owner` (
  `ownerid` int(4) NOT NULL AUTO_INCREMENT,
  `regid` int(4) NOT NULL,
  `ownername` varchar(20) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `contactno` int(12) DEFAULT NULL,
  `emailid` varchar(40) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ownerid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`ownerid`, `regid`, `ownername`, `address`, `city`, `contactno`, `emailid`, `pincode`, `gender`, `birthdate`, `image`) VALUES
(1, 2, 'meet', NULL, NULL, NULL, 'meet1@gmail.com', NULL, NULL, NULL, NULL),
(2, 5, 'owner', NULL, NULL, NULL, 'ashika.navsari@gmail.com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payid` int(4) NOT NULL AUTO_INCREMENT,
  `paydate` date NOT NULL,
  `bookingid` int(4) NOT NULL,
  `paytype` varchar(30) NOT NULL,
  `amount` int(5) NOT NULL,
  `readerid` int(4) NOT NULL,
  PRIMARY KEY (`payid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

DROP TABLE IF EXISTS `publication`;
CREATE TABLE IF NOT EXISTS `publication` (
  `pubid` int(4) NOT NULL AUTO_INCREMENT,
  `pubname` varchar(30) NOT NULL,
  `contactno` int(12) DEFAULT NULL,
  `emailid` varchar(30) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`pubid`, `pubname`, `contactno`, `emailid`, `logo`) VALUES
(1, 'cambridge1', 123, NULL, NULL),
(4, 'oxford', 345, 'xyz', NULL),
(10, 'abc', 123, 'abc@gamil.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reader`
--

DROP TABLE IF EXISTS `reader`;
CREATE TABLE IF NOT EXISTS `reader` (
  `readerid` int(4) NOT NULL AUTO_INCREMENT,
  `regid` int(4) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `contactno` int(12) DEFAULT NULL,
  `emailid` varchar(30) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`readerid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reader`
--

INSERT INTO `reader` (`readerid`, `regid`, `fname`, `mname`, `lname`, `address`, `city`, `pincode`, `contactno`, `emailid`, `birthdate`, `gender`, `image`) VALUES
(1, 3, 'ashika', NULL, NULL, NULL, NULL, NULL, NULL, 'ashika123@gmail.com', NULL, NULL, NULL),
(2, 4, 'gita', NULL, NULL, NULL, NULL, NULL, NULL, 'patelgita9762@gmail.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `regid` int(4) NOT NULL AUTO_INCREMENT,
  `regdate` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`regid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`regid`, `regdate`, `username`, `password`, `usertype`, `email`) VALUES
(5, '2022-07-07', 'owner', '123', 'owner', 'ashika.navsari@gmail.com'),
(4, '2022-07-07', 'gita', '123', 'reader', 'patelgita9762@gmail.com'),
(3, '2022-06-29', 'ashika', '123', 'reader', 'ashika123@gmail.com'),
(2, '2022-06-29', 'meet', '123', 'owner', 'meetpatel03016@gmail.com'),
(1, '2022-06-29', 'admin', 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `reviewid` int(4) NOT NULL AUTO_INCREMENT,
  `reviewdate` date DEFAULT NULL,
  `bookid` int(4) NOT NULL,
  `readerid` int(4) NOT NULL,
  `ownerid` int(4) NOT NULL,
  `rattings` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`reviewid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`reviewid`, `reviewdate`, `bookid`, `readerid`, `ownerid`, `rattings`) VALUES
(1, '2022-06-13', 1, 2, 3, '5'),
(2, '2022-06-07', 3, 4, 4, '1');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vwbook`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vwbook`;
CREATE TABLE IF NOT EXISTS `vwbook` (
`bookid` int(4)
,`bookname` varchar(50)
,`authorname` varchar(20)
,`pubname` varchar(30)
,`booktypename` varchar(40)
,`shortname` varchar(15)
,`totalpage` int(5)
,`image` varchar(50)
,`price` int(6)
,`pubdate` date
,`details` varchar(100)
,`copies` int(3)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vwbooking`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vwbooking`;
CREATE TABLE IF NOT EXISTS `vwbooking` (
`bookingid` int(4)
,`bookingdate` date
,`bookname` varchar(50)
,`fname` varchar(20)
,`ownername` varchar(20)
,`status` varchar(20)
,`days` varchar(10)
,`confirmation` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure for view `vwbook`
--
DROP TABLE IF EXISTS `vwbook`;

DROP VIEW IF EXISTS `vwbook`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwbook`  AS SELECT `b`.`bookid` AS `bookid`, `b`.`bookname` AS `bookname`, `a`.`authorname` AS `authorname`, `p`.`pubname` AS `pubname`, `t`.`booktypename` AS `booktypename`, `b`.`shortname` AS `shortname`, `b`.`totalpage` AS `totalpage`, `b`.`image` AS `image`, `b`.`price` AS `price`, `b`.`pubdate` AS `pubdate`, `b`.`details` AS `details`, `b`.`copies` AS `copies` FROM (((`book` `b` join `author` `a`) join `publication` `p`) join `booktype` `t`) WHERE ((`b`.`authorid` = `a`.`authorid`) AND (`b`.`pubid` = `p`.`pubid`) AND (`b`.`booktypeid` = `t`.`booktypeid`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vwbooking`
--
DROP TABLE IF EXISTS `vwbooking`;

DROP VIEW IF EXISTS `vwbooking`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwbooking`  AS SELECT `b`.`bookingid` AS `bookingid`, `b`.`bookingdate` AS `bookingdate`, `n`.`bookname` AS `bookname`, `r`.`fname` AS `fname`, `o`.`ownername` AS `ownername`, `b`.`status` AS `status`, `n`.`days` AS `days`, `b`.`confirmation` AS `confirmation` FROM (((`booking` `b` join `book` `n`) join `reader` `r`) join `owner` `o`) WHERE ((`b`.`bookid` = `n`.`bookid`) AND (`b`.`readerid` = `r`.`regid`) AND (`b`.`ownerid` = `o`.`regid`)) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
