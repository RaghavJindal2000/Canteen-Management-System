-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 05:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteenmgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `acalacarte`
--

CREATE TABLE `acalacarte` (
  `iid` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acalacarte`
--

INSERT INTO `acalacarte` (`iid`, `name`, `price`, `time`) VALUES
(1, 'Butter Naan', 25, 12),
(2, 'Gobi 65', 40, 12),
(3, 'Parantha', 25, 10),
(4, 'Ghee Naan', 30, 12),
(5, 'Paneer Butter Masala', 45, 20),
(6, 'Gobi Manchurian', 40, 20),
(7, 'Palak Paneer', 45, 25),
(8, 'Daal Fry', 30, 15),
(9, 'Plain Dosa', 20, 10),
(10, 'Masala Dosa', 25, 10),
(11, 'Ghee Dosa', 30, 10),
(12, 'Rava Dosa', 30, 12),
(13, 'Sambar Vada', 30, 15),
(14, 'Veg Fried Rice', 30, 30),
(15, 'Curd Rice', 15, 20),
(16, 'Jeera Rice', 25, 30);

-- --------------------------------------------------------

--
-- Table structure for table `canteen`
--

CREATE TABLE `canteen` (
  `cid` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `location` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `canteen`
--

INSERT INTO `canteen` (`cid`, `name`, `location`) VALUES
(919, 'SJT Canteen', 'In SJT'),
(943, 'DC', 'Near TT'),
(2015, 'FC (Non AC)', 'Near TT'),
(2038, 'FC (AC)', 'Near TT'),
(2299, 'Darling Canteen', 'Near Gate ');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custid` varchar(10) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `wallet` int(11) DEFAULT NULL,
  `hblock` varchar(2) DEFAULT NULL,
  `hroom` int(11) DEFAULT NULL,
  `phone` decimal(30,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custid`, `name`, `wallet`, `hblock`, `hroom`, `phone`) VALUES
('18BCE0124', 'Arpit Bhattar', 4950, 'E', 123, '4845566000'),
('18BCE0213', 'Navyaa Sharma', 4870, 'E', 11, '4565587530'),
('18BCE0234', 'Varun Mishra', 5660, 'Q', 606, '4165587530'),
('18BCE0244', 'Samarth Nehe', 4820, 'Q', 245, '4875565070'),
('18BCE0269', 'Nikhil Singh', 5000, 'Q', 408, '4965587530'),
('18BCE0273', 'Suyash Agarwal', 4770, 'Q', 606, '9878898563'),
('18BCE0279', 'Atharva Gulhane', 5000, 'Q', 606, '4765587530'),
('18BCE0296', 'Sai Karthik', 5000, 'Q', 606, '4565587532'),
('18BCE0299', 'Ayush Sinha', 5000, 'Q', 239, '4875565040'),
('18BCE0337', 'Niket Jain', 5000, 'Q', 547, '4875565001'),
('18BCE0370', 'Naman Kapoor', 5000, 'Q', 547, '4845565989'),
('18BCE0377', 'Adithya Yalagoud', 4880, 'E', 11, '9878898560'),
('18BCE0634', 'Mridul Khanna', 4890, 'E', 123, '4845565999'),
('18BCE0741', 'Devina Varshney', 4950, 'E', 11, '4565587531'),
('18BCE2080', 'Raghav Jindal', 7300, 'K', 513, '4548821653'),
('18BCE2085', 'Shubham Kedia', 4920, 'Q', 462, '9878898562'),
('18BCE2087', 'Nimish Batra', 4970, 'Q', 462, '9878898561'),
('18BCE2094', 'Sahaaj Singh', 4625, 'D', 123, '4855521444'),
('18BCE2153', 'Ritwik Goyal', 4905, 'Q', 547, '4875565000');

-- --------------------------------------------------------

--
-- Table structure for table `dalacarte`
--

CREATE TABLE `dalacarte` (
  `iid` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dalacarte`
--

INSERT INTO `dalacarte` (`iid`, `name`, `price`, `time`) VALUES
(1, 'Phulka', 25, 5),
(2, 'Aloo Tikka', 40, 20),
(3, 'Roti', 25, 7),
(4, 'Butter Naan', 30, 12),
(5, 'Paneer Butter Masala', 45, 20),
(6, 'Gobi Manchurian', 40, 22),
(7, 'Paneer Tikka', 45, 20),
(8, 'Daal Fry', 30, 15),
(9, 'Plain Dosa', 20, 5),
(10, 'Masala Dosa', 25, 10),
(11, 'Ghee Dosa', 30, 10),
(12, 'Rava Dosa', 30, 12),
(13, 'Sambar Vada', 30, 15),
(14, 'Veg Fried Rice', 30, 20);

-- --------------------------------------------------------

--
-- Table structure for table `dcalacarte`
--

CREATE TABLE `dcalacarte` (
  `iid` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dcalacarte`
--

INSERT INTO `dcalacarte` (`iid`, `name`, `price`, `time`) VALUES
(1, 'Naan', 25, 14),
(2, 'Aloo 65', 40, 20),
(3, 'Veg Fried Rice', 30, 25),
(4, 'Sambar Vada', 30, 15),
(5, 'Paneer Butter Masala', 45, 10),
(6, 'Gobi Manchurian', 40, 13),
(7, 'Palak Paneer', 45, 10),
(8, 'Daal Fry', 30, 15),
(9, 'Plain Dosa', 20, 15),
(10, 'Masala Dosa', 25, 18),
(11, 'Ghee Dosa', 30, 15),
(12, 'Rava Dosa', 30, 18);

-- --------------------------------------------------------

--
-- Table structure for table `eauth`
--

CREATE TABLE `eauth` (
  `eid` int(11) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eauth`
--

INSERT INTO `eauth` (`eid`, `pwd`) VALUES
(1, 'greysanatomy'),
(2, 'greysanatomy'),
(3, 'greysanatomy'),
(4, 'greysanatomy'),
(5, 'greysanatomy'),
(6, 'greysanatomy'),
(7, 'greysanatomy'),
(8, 'greysanatomy'),
(9, 'greysanatomy'),
(10, 'greysanatomy'),
(11, 'greysanatomy'),
(12, 'greysanatomy'),
(13, 'greysanatomy'),
(14, 'greysanatomy'),
(15, 'greysanatomy'),
(16, 'greysanatomy'),
(17, 'greysanatomy');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `streetname` varchar(15) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `phone` decimal(30,0) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `name`, `join_date`, `streetname`, `city`, `phone`, `cid`) VALUES
(1, 'Jesse Williams', '2014-01-13', 'Murli', 'Birgunj', '5426658744', 919),
(2, 'Justin Chambers', '2015-01-18', 'Adarshnagar', 'Surkhet', '5429987563', 2038),
(3, 'Sarah Drew', '2015-02-19', 'Bhaktapur', 'Kathmandu', '6521145447', 943),
(4, 'Sandra Oh', '2015-12-28', 'Thankot', 'Kathmandu', '5421154789', 943),
(5, 'Ellen Pompeo', '2016-01-13', 'Gandhinagar', 'Kolkata', '2154985632', 919),
(6, 'Katherine Heigl', '2016-03-13', 'Shantinagar', 'Kolapur', '2122458532', 2015),
(7, 'T. R. Knight', '2016-01-29', 'Guwahati', 'Guwahati', '8454545632', 2038),
(8, 'Patrick Dempsey', '2016-02-14', 'Machahat', 'Pondicherr', '8788898655', 919),
(9, 'Chyler Leigh', '2016-05-23', 'Manikarnika', 'Thane', '6589986544', 2015),
(10, 'Eric Dane', '2016-01-29', 'Wasabi', 'Chirupur', '8532214756', 2038),
(11, 'Sara Ramirez', '2016-05-13', 'Wasabi', 'Chirupur', '8755565444', 2038),
(12, 'Kevin McKidd', '2016-01-31', 'Thankot', 'Kathmandu', '5466654555', 943),
(13, 'Jessica Capshaw', '2016-08-13', 'Gandhinagar', 'Kolkata', '8788865997', 2015),
(14, 'Chandra Wilson', '2016-08-11', 'Gandhinagar', 'Kolkata', '8788800997', 2299),
(15, 'Camilla Luddington', '2016-08-12', 'Gandhinagar', 'Kolkata', '8780000997', 2299),
(16, 'Giacomo Gianniotti', '2016-08-16', 'Bhaktapur', 'Kathmandu', '8788800007', 2299),
(17, 'James Pickens', '2016-08-21', 'Gandhinagar', 'Kolkata', '8788800990', 2299);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `custid` varchar(25) DEFAULT NULL,
  `content` varchar(150) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `cid`, `custid`, `content`, `rating`) VALUES
(1, 919, '18BCE0273', 'Amazing canteen', 9),
(2, 2015, '18BCE0244', 'Best Canteen Ever', 10),
(3, 2015, '18BCE2087', 'Love It!', 10),
(4, 2015, '18BCE2080', 'Loving it', 10),
(5, 2015, '18BCE096', 'Best food in life is never free', 10),
(6, 2015, '18BCE0279', 'Best!', 10),
(7, 2299, '18BCE2153', 'Okayish', 8),
(8, 919, '18BCE0269', 'Worth it', 8),
(9, 943, '18BCE0213', 'Good food.', 6),
(10, 2038, '18BCE0124', 'Amazing', 9),
(11, 943, '18BCE0337', 'Like the food.', 9),
(12, 943, '18BCE0337', 'Poor service', 2),
(13, 943, '18BCE2085', 'Poor', 3),
(14, 2299, '18BCE0370', 'Please keep idli sambhar', 0),
(15, 919, '18BCE0377', 'Please maintain hygiene', 0),
(16, 2299, '18BCE0299', 'Poor service', 4),
(17, 919, '18BCE2080', 'Nice', 8),
(18, 943, '18BCE2080', 'Amazing Canteen', 10),
(19, 919, '18BCE2080', 'Amazing Canteen', 8),
(20, 919, '18BCE2080', 'Nice', 8),
(21, 919, '18BCE2080', 'Amazing Canteen', 6),
(22, 943, '18BCE2080', 'Amazing Canteen', 8),
(23, 943, '18BCE2080', 'Amazing Canteen', 8),
(24, 919, '18BCE2080', 'Amazing Canteen', 8),
(25, 919, '18BCE2080', 'Amazing Canteen', 8),
(26, 2038, '18BCE2080', 'Nice', 8),
(27, 2038, '18BCE2080', 'Amazing Canteen', 8),
(28, 919, '18BCE2080', 'Nice', 10),
(29, 2015, '18BCE2080', 'Amazing Canteen', 8);

-- --------------------------------------------------------

--
-- Table structure for table `nacalacarte`
--

CREATE TABLE `nacalacarte` (
  `iid` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nacalacarte`
--

INSERT INTO `nacalacarte` (`iid`, `name`, `price`, `time`) VALUES
(1, 'Samosa', 15, 5),
(2, 'Pav Bhaji', 40, 10),
(3, 'Parantha', 25, 10),
(4, 'Butter Naan', 30, 15),
(5, 'Paneer Butter Masala', 45, 15),
(6, 'Gobi Manchurian', 40, 20),
(7, 'Palak Paneer', 45, 20),
(8, 'Dal Makhani', 30, 20),
(9, 'Plain Dosa', 20, 15),
(10, 'Masala Dosa', 25, 15),
(11, 'Ghee Dosa', 30, 15),
(12, 'Rava Dosa', 30, 15),
(13, 'Sambar Vada', 30, 10),
(14, 'Veg Fried Rice', 30, 20);

-- --------------------------------------------------------

--
-- Table structure for table `ord`
--

CREATE TABLE `ord` (
  `oid` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `custid` varchar(10) DEFAULT NULL,
  `odate` date DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `eid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ord`
--

INSERT INTO `ord` (`oid`, `cid`, `custid`, `odate`, `cost`, `status`, `eid`) VALUES
(1, 919, '18BCE0273', '2020-01-24', 220, 'Cancelled', 1),
(2, 943, '18BCE2085', '2020-01-25', 100, 'Completed', 3),
(3, 919, '18BCE0377', '2020-01-25', 60, 'Completed', 5),
(4, 943, '18BCE2094', '2020-01-25', 90, 'Cancelled', 4),
(5, 2015, '18BCE2087', '2020-01-26', 150, 'Completed', 6),
(6, 2015, '18BCE2080', '2020-01-27', 150, 'Completed', 9),
(7, 2038, '18BCE0296', '2020-01-30', 90, 'Completed', 2),
(8, 2038, '18BCE0279', '2020-01-30', 60, 'Completed', 7),
(9, 2299, '18BCE0299', '2020-01-31', 60, 'Completed', 15),
(10, 2299, '18BCE0370', '2020-01-31', 60, 'Cancelled', 14),
(17, 919, '18BCE0234', '2020-02-26', 100, 'Completed', 6),
(18, 919, '18BCE0234', '2020-02-26', 100, 'Completed', 9),
(19, 2015, '18BCE2094', '2020-02-26', 90, 'Completed', 1),
(20, 919, '18BCE2094', '2020-02-27', 20, 'Cancelled', 1),
(21, 2015, '18BCE0377', '2020-02-27', 60, 'Completed', 13),
(22, 919, '18BCE0234', '2020-02-27', 50, 'Cancelled', 1),
(23, 919, '18BCE2094', '2020-02-27', 200, 'Cancelled', 1),
(24, 919, '18BCE2094', '2020-02-27', 70, 'Completed', 1),
(25, 919, '18BCE0234', '2020-02-27', 90, 'Cancelled', 1),
(26, 919, '18BCE0377', '2020-02-27', 60, 'Completed', 1),
(27, 2299, '18BCE0377', '2020-02-27', 120, 'Cancelled', 15),
(28, 919, '18BCE0273', '2020-02-27', 180, 'Cancelled', 1),
(29, 2015, '18BCE2087', '2020-02-27', 30, 'Completed', 6),
(30, 943, '18BCE2080', '2020-09-05', 220, 'Received', NULL),
(31, 943, '18BCE2080', '2020-09-05', 110, 'Received', NULL),
(32, 919, '18BCE0234', '2020-09-05', 260, 'Cancelled', 1),
(33, 919, '18BCE0234', '2020-09-05', 340, 'Completed', 1),
(34, 2015, '18BCE2080', '2020-09-08', 0, 'Received', NULL),
(35, 2015, '18BCE2080', '2020-09-08', 0, 'Received', NULL),
(36, 943, '18BCE2080', '2020-09-23', 140, 'Received', NULL),
(37, 919, '18BCE2080', '2020-09-25', 150, 'Processing', 1),
(38, 919, '18BCE2080', '2020-10-13', 85, 'Completed', 1),
(39, 919, '18BCE2080', '2020-10-13', 110, 'Cancelled', 1),
(40, 919, '18BCE2080', '2020-10-13', 80, 'Completed', 1),
(41, 919, '18BCE2080', '2020-10-18', 100, 'Received', NULL),
(42, 919, '18BCE2080', '2020-10-19', 100, 'Received', NULL),
(43, 919, '18BCE2080', '2020-10-23', 100, 'Completed', 1),
(44, 919, '18BCE2080', '2020-10-23', 100, 'Completed', 1),
(45, 919, '18BCE2080', '2020-10-23', 100, 'Completed', 1),
(46, 919, '18BCE2080', '2020-11-04', 100, 'Completed', 1),
(47, 919, '18BCE2080', '2020-11-05', 100, 'Completed', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderdet`
--

CREATE TABLE `orderdet` (
  `oid` int(11) DEFAULT NULL,
  `iid` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdet`
--

INSERT INTO `orderdet` (`oid`, `iid`, `qty`) VALUES
(1, 1, 4),
(1, 4, 4),
(2, 3, 4),
(3, 4, 2),
(4, 5, 2),
(5, 7, 2),
(5, 8, 2),
(6, 8, 2),
(6, 7, 2),
(7, 11, 3),
(8, 12, 2),
(9, 13, 2),
(10, 14, 2),
(17, 9, 2),
(17, 14, 2),
(18, 2, 2),
(18, 9, 1),
(19, 3, 2),
(19, 6, 1),
(20, 9, 1),
(21, 11, 2),
(22, 1, 2),
(23, 9, 10),
(24, 6, 1),
(24, 15, 2),
(25, 8, 3),
(26, 11, 2),
(27, 13, 4),
(28, 8, 4),
(28, 13, 2),
(29, 1, 2),
(30, 1, 4),
(30, 3, 1),
(30, 5, 2),
(31, 1, 2),
(31, 3, 2),
(32, 1, 4),
(32, 2, 4),
(33, 3, 4),
(33, 5, 4),
(33, 15, 4),
(36, 3, 2),
(36, 6, 2),
(37, 4, 2),
(37, 5, 2),
(38, 3, 1),
(38, 4, 2),
(39, 3, 2),
(39, 4, 2),
(40, 1, 1),
(40, 3, 1),
(40, 4, 1),
(41, 1, 4),
(42, 1, 2),
(42, 3, 2),
(43, 1, 4),
(44, 3, 4),
(45, 9, 5),
(46, 1, 4),
(47, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sauth`
--

CREATE TABLE `sauth` (
  `custid` varchar(10) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sauth`
--

INSERT INTO `sauth` (`custid`, `pwd`, `email`) VALUES
('18BCE0273', 'vitstudent', 'suyash@gmail.com'),
('18BCE2085', 'vitstudent', 'subham@gmail.com'),
('18BCE2087', 'vitstudent', 'nimish@gmail.com'),
('18BCE0377', 'vitstudent', 'elpu@gmail.com'),
('18BCE0296', 'vitstudent', 'karthik@gmail.com'),
('18BCE0741', 'vitstudent', 'devina@gmail.com'),
('18BCE0213', 'vitstudent', 'navyaa@gmail.com'),
('18BCE0279', 'vitstudent', 'atharva1610@gmail.com'),
('18BCE0234', 'vitstudent', 'mishra.varun255@gmail.com'),
('18BCE0269', 'vitstudent', 'nikhil@gmail.com'),
('18BCE2153', 'vitstudent', 'ritwik@gmail.com'),
('18BCE0244', 'vitstudent', 'samarthnehe2000@gmail.com'),
('18BCE0337', 'vitstudent', 'niket@gmail.com'),
('18BCE0299', 'vitstudent', 'ayush@gmail.com'),
('18BCE0634', 'vitstudent', 'mridhul@gmail.com'),
('18BCE0124', 'vitstudent', 'aptbhattar@gmail.com'),
('18BCE2080', 'vitstudent', 'raghavjindal2000@gmail.com'),
('18BCE2094', 'vitstudent', 'sahaaj@gmail.com'),
('18BCE0370', 'vitstudent', 'nammu@gmail.com'),
('18BCE0413', 'vitstudent', 'abc@gmail.com'),
('18BCE0425', 'vitstudent', 'abcd@gmail.com'),
('18BCE0623', 'vitstudent', 'abcde@gmail.com'),
('18BCE0623', 'vitstudent', 'abcde@gmail.com'),
('18BCE0625', 'vitstudent', 'abcdef@gmail.com'),
('18BCE0626', 'vitstudent', 'abcdefg@gmail.com'),
('18BCE2089', 'vitstudent', 'abcdefghi@gmail.com'),
('18BCE0279', 'vitstudent', 'atharva1610@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sjtalacarte`
--

CREATE TABLE `sjtalacarte` (
  `iid` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sjtalacarte`
--

INSERT INTO `sjtalacarte` (`iid`, `name`, `price`, `time`) VALUES
(1, 'Pasta', 25, 15),
(2, 'Pizza', 40, 15),
(3, 'Tea', 25, 5),
(4, 'Coffee', 30, 5),
(5, 'Paneer Butter Masala', 45, 15),
(6, 'Gobi Manchurian', 40, 15),
(7, 'Palak Paneer', 45, 20),
(8, 'Sandwich', 30, 20),
(9, 'Plain Dosa', 20, 15),
(10, 'Masala Dosa', 25, 15),
(11, 'Ghee Dosa', 30, 15),
(12, 'Rava Dosa', 30, 15),
(13, 'Sambar Vada', 30, 10),
(14, 'Veg Fried Rice', 30, 15),
(15, 'Roti', 15, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acalacarte`
--
ALTER TABLE `acalacarte`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `canteen`
--
ALTER TABLE `canteen`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `dalacarte`
--
ALTER TABLE `dalacarte`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `dcalacarte`
--
ALTER TABLE `dcalacarte`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `nacalacarte`
--
ALTER TABLE `nacalacarte`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `ord`
--
ALTER TABLE `ord`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `sjtalacarte`
--
ALTER TABLE `sjtalacarte`
  ADD PRIMARY KEY (`iid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acalacarte`
--
ALTER TABLE `acalacarte`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `dalacarte`
--
ALTER TABLE `dalacarte`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dcalacarte`
--
ALTER TABLE `dcalacarte`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `nacalacarte`
--
ALTER TABLE `nacalacarte`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ord`
--
ALTER TABLE `ord`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `sjtalacarte`
--
ALTER TABLE `sjtalacarte`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
