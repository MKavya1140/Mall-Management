-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 07:08 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mallmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sno` int(11) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `desig` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `userid`, `password`, `desig`) VALUES
(1, 'admin', 'admin1', 'admin'),
(2, 'konidenaseethu@gmail.com', '123456', 'owner'),
(3, 'seethu.chiru@gmail.com', '987654', 'owner'),
(4, 'saivineelahoney@gmai', '987654', 'owner');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `sno` int(11) NOT NULL,
  `whom` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`sno`, `whom`, `subject`, `date`, `path`) VALUES
(1, 'All', 'sdsad', '2018-02-24', 'Notifications/6492Seetharam Resume.pdf'),
(2, '10', 'sdfdsf', '2018-02-15', 'Notifications/24691_1_2_IJAES.pdf'),
(3, 'All', 'sdda', '2018-03-02', 'Notifications/1593UML Ajay.docx'),
(4, '5', 'dfsdsf', '2018-03-07', 'Notifications/3582Existed Projects.docx'),
(5, '9', 'dsfdf', '2018-03-06', 'Notifications/6533Mall Management.txt'),
(6, 'All', 'dsf', '2018-03-03', 'Notifications/2715Mall Management.txt'),
(7, 'All', 'abcd', '2018-03-30', 'Notifications/2865Collections.docx');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `sno` int(11) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `shopnumber` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `shopname` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `floor` int(11) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`sno`, `userid`, `shopnumber`, `category`, `shopname`, `mobile`, `address`, `floor`, `photo`, `description`, `fromdate`, `todate`) VALUES
(4, 'seethu.chiru@gmail.com', 5, 'Clothing', 'sadad', '8966552156', 'dsfhgdsgdf', 3, 'shops/95031.png', 'Flat 100% discount on dresses and sarees and kerchiefs ', '2018-02-28', '2018-05-19'),
(5, 'saivineelahoney@gmai', 10, 'Cosmotics', 'naveen kumar', '9949361391', 'dfvgdsbfhkjdvbfhc kjdczjczxnfc  ', 1, 'shops/6738123.png', 'Flat 100% discount on dresses and sarees and kerchiefs ', '2018-02-26', '2018-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `sno` int(11) NOT NULL,
  `shopnumber` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `path` varchar(150) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`sno`, `shopnumber`, `category`, `name`, `mobile`, `email`, `address`, `password`, `path`, `startdate`, `enddate`, `status`) VALUES
(10, '5', 'Clothing', 'sadad', '8966552156', 'konidenaseethu@gmail.com', 'dsfhgdsgdf', '123456', 'Agreement/26871_1_2_IJAES.pdf', '2018-02-01', '2018-02-13', 'Allocated'),
(12, '10', 'Cosmotics', 'naveen kumar', '9949361391', 'saivineelahoney@gmail.com', 'dfvgdsbfhkjdvbfhc kjdczjczxnfc  ', '987654', 'Agreement/1299now3.png', '2018-02-01', '2018-02-28', 'Allocated'),
(11, '9', 'Footware', 'ramesh', '8966552145', 'seethu.chiru@gmail.com', 'dsfdsf', '987654', 'Agreement/65426.png', '2018-02-08', '2018-04-27', 'Allocated');

-- --------------------------------------------------------

--
-- Table structure for table `shopnotifications`
--

CREATE TABLE `shopnotifications` (
  `sno` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `path` varchar(100) NOT NULL,
  `shopnumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopnotifications`
--

INSERT INTO `shopnotifications` (`sno`, `subject`, `date`, `path`, `shopnumber`) VALUES
(1, 'kil', '2018-03-31', 'Notifications/5616smartcity (1).doc', '9');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `sno` int(11) NOT NULL,
  `shopnumber` varchar(30) NOT NULL,
  `facing` varchar(30) NOT NULL,
  `sqfeet` varchar(30) NOT NULL,
  `floor` int(11) NOT NULL,
  `rent` varchar(30) NOT NULL,
  `advance` varchar(30) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `photo1` varchar(100) NOT NULL,
  `photo2` varchar(100) NOT NULL,
  `photo3` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`sno`, `shopnumber`, `facing`, `sqfeet`, `floor`, `rent`, `advance`, `photo`, `photo1`, `photo2`, `photo3`, `status`) VALUES
(11, '10', 'East', '300', 1, '30000', '10000', 'shops/6738123.png', 'shops/6738mall1.jpg', 'shops/6738now1.png', 'shops/6738now2.png', 'available'),
(7, '2', 'West', '253', 3, '25000', '100000', 'shops/20131.png', '', '', '', 'Leased'),
(12, '23', 'East', '300', 3, '25000', '100000', 'shops/64791.jpg', 'shops/64792.jpg', 'shops/64793.jpg', 'shops/64794.jpg', 'available'),
(8, '5', 'West', '250', 3, '25000', '100000', 'shops/95031.png', 'shops/95032.png', 'shops/95033.png', 'shops/95034.png', 'Leased'),
(10, '9', 'West', '300', 2, '20000', '100000', 'shops/36784.png', 'shops/36782.png', 'shops/36783.png', 'shops/36784.png', 'Leased');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `shopnotifications`
--
ALTER TABLE `shopnotifications`
  ADD UNIQUE KEY `sno` (`sno`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`shopnumber`),
  ADD UNIQUE KEY `sno` (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `shopnotifications`
--
ALTER TABLE `shopnotifications`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
