-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2017 at 06:41 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `predict`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `State` varchar(200) NOT NULL,
  `City` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `State`, `City`, `date`, `value`) VALUES
(99, 'Del', 'Delhi', '28-04-17', 239),
(98, 'Del', 'Delhi', '27-04-17', 299),
(97, 'Del', 'Delhi', '26-04-17', 314),
(96, 'Del', 'Delhi', '25-04-17', 329),
(95, 'Del', 'Delhi', '24-04-17', 921),
(94, 'Del', 'Delhi', '23-04-17', 103),
(93, 'KA', 'Mysore', '22-04-17', 422),
(92, 'KA', 'Mysore', '21-04-17', 962),
(91, 'KA', 'Mysore', '20-04-17', 741),
(90, 'KA', 'Mysore', '19-04-17', 561),
(89, 'KA', 'Mysore', '18-04-17', 926),
(88, 'KA', 'Mysore', '17-04-17', 104),
(87, 'KA', 'Mysore', '16-04-17', 491),
(86, 'KA', 'Mysore', '15-04-17', 954),
(85, 'KA', 'Mysore', '14-04-17', 430),
(84, 'KA', 'Mysore', '13-04-17', 141),
(83, 'TN', 'Chennai', '12-04-17', 153),
(82, 'TN', 'Chennai', '11-04-17', 570),
(81, 'TN', 'Chennai', '10-04-17', 787),
(80, 'TN', 'Chennai', '09-04-17', 833),
(79, 'TN', 'Chennai', '08-04-17', 528),
(78, 'TN', 'Chennai', '07-04-17', 426),
(77, 'TN', 'Chennai', '06-04-17', 499),
(76, 'TN', 'Chennai', '05-04-17', 670),
(75, 'TN', 'Chennai', '04-04-17', 629),
(74, 'TN', 'Chennai', '03-04-17', 216),
(73, 'Del', 'Delhi', '02-04-17', 921),
(72, 'Del', 'Delhi', '01-04-17', 553),
(71, 'Del', 'Delhi', '31-03-17', 920),
(70, 'Del', 'Delhi', '30-03-17', 406),
(69, 'Del', 'Delhi', '29-03-17', 162),
(68, 'Del', 'Delhi', '28-03-17', 639),
(67, 'TN', 'Salem', '27-03-17', 518),
(66, 'TN', 'Salem', '26-03-17', 333),
(65, 'TN', 'Salem', '25-03-17', 687),
(64, 'TN', 'Salem', '24-03-17', 518),
(63, 'TN', 'Salem', '23-03-17', 523),
(62, 'TN', 'Salem', '22-03-17', 952),
(61, 'TN', 'Salem', '21-03-17', 863),
(60, 'TN', 'Salem', '20-03-17', 436),
(59, 'TN', 'Salem', '19-03-17', 150),
(58, 'TN', 'Salem', '18-03-17', 412),
(57, 'TN', 'Salem', '17-03-17', 718),
(56, 'TN', 'Salem', '16-03-17', 769),
(55, 'TN', 'Salem', '15-03-17', 124),
(54, 'TN', 'Salem', '14-03-17', 910),
(53, 'TN', 'Salem', '13-03-17', 954),
(52, 'Del', 'Delhi', '12-03-17', 784),
(51, 'Del', 'Delhi', '11-03-17', 801),
(50, 'Del', 'Delhi', '10-03-17', 327),
(49, 'Del', 'Delhi', '09-03-17', 640),
(48, 'Del', 'Delhi', '08-03-17', 508),
(47, 'Del', 'Delhi', '07-03-17', 211),
(46, 'TN', 'Chennai', '06-03-17', 697),
(45, 'TN', 'Chennai', '05-03-17', 322),
(44, 'TN', 'Chennai', '04-03-17', 141),
(43, 'TN', 'Chennai', '03-03-17', 937),
(42, 'TN', 'Chennai', '02-03-17', 632),
(41, 'TN', 'Chennai', '01-03-17', 373),
(40, 'TN', 'Chennai', '28-02-17', 599),
(39, 'TN', 'Chennai', '27-02-17', 118),
(38, 'TN', 'Chennai', '26-02-17', 713),
(37, 'TN', 'Chennai', '25-02-17', 523),
(36, 'TN', 'Chennai', '24-02-17', 351),
(35, 'TN', 'Chennai', '23-02-17', 223),
(34, 'MH', 'Mumbai', '22-02-17', 789),
(33, 'MH', 'Mumbai', '21-02-17', 712),
(32, 'MH', 'Mumbai', '20-02-17', 956),
(31, 'MH', 'Mumbai', '19-02-17', 397),
(30, 'MH', 'Mumbai', '18-02-17', 866),
(29, 'MH', 'Mumbai', '17-02-17', 442),
(28, 'MH', 'Mumbai', '16-02-17', 968),
(27, 'MH', 'Mumbai', '15-02-17', 996),
(26, 'MH', 'Mumbai', '14-02-17', 216),
(25, 'MH', 'Mumbai', '13-02-17', 976),
(24, 'MH', 'Mumbai', '12-02-17', 832),
(23, 'MH', 'Mumbai', '11-02-17', 624),
(22, 'MH', 'Mumbai', '10-02-17', 847),
(21, 'MH', 'Mumbai', '09-02-17', 791),
(20, 'MH', 'Mumbai', '08-02-17', 554),
(19, 'MH', 'Mumbai', '07-02-17', 635),
(18, 'MH', 'Mumbai', '06-02-17', 575),
(17, 'MH', 'Mumbai', '05-02-17', 508),
(16, 'MH', 'Mumbai', '04-02-17', 608),
(15, 'MH', 'Mumbai', '03-02-17', 389),
(14, 'MH', 'Mumbai', '02-02-17', 257),
(13, 'MH', 'Mumbai', '01-02-17', 284),
(12, 'MH', 'Mumbai', '31-01-17', 569),
(11, 'MH', 'Mumbai', '30-01-17', 835),
(10, 'MH', 'Mumbai', '29-01-17', 117),
(9, 'MH', 'Mumbai', '28-01-17', 662),
(8, 'MH', 'Mumbai', '27-01-17', 684),
(7, 'KA', 'Bangalore', '26-01-17', 811),
(4, 'KA', 'Bangalore', '23-01-17', 290),
(5, 'KA', 'Bangalore', '24-01-17', 490),
(6, 'KA', 'Bangalore', '25-01-17', 196),
(3, 'KA', 'Bangalore', '22-01-17', 373),
(2, 'KA', 'Bangalore', '21-01-17', 364),
(1, 'KA', 'Bangalore', '20-01-17', 892);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
