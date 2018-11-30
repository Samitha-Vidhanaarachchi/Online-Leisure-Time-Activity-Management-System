-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2018 at 02:23 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finepets`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passcode`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'root', '63a9f0ea7bb98050796b649e85481845');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `log_id` int(11) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `l_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`log_id`, `l_name`, `l_password`) VALUES
(1, 'krushani', 'krushani');

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `Orderid` int(6) NOT NULL,
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Proid` int(6) NOT NULL,
  `Proname` varchar(50) NOT NULL,
  `Unitprice` varchar(10) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Picture` blob NOT NULL,
  `Custname` varchar(100) NOT NULL,
  `Telno` int(12) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`Orderid`, `Time`, `Proid`, `Proname`, `Unitprice`, `Quantity`, `Picture`, `Custname`, `Telno`, `Address`, `Email`) VALUES
(47, '2018-09-29 14:36:06', 125, 'Relay', '200.00', 5, '', 'Nirma De Silva', 77564533, 'Kandy Road ,Malabe', 'nirma123@gmail.com'),
(48, '2018-09-29 14:35:24', 135, 'Boxing', '300.00', 1, '', 'Krushani', 77435678, 'Athurugiriya Road , Hokandara', 'Krushani@yahoo.com'),
(49, '2018-09-29 14:37:59', 135, 'Boxing', '300.00', 1, '', 'Samitha', 774333378, 'Negomo Road , Daluwakotuwa', 'samitha@gmail.com'),
(50, '2018-09-29 14:39:24', 145, 'Kids Pool', '400.00', 1, '', 'Rashmika Madhushan', 71892939, 'rashmika@gmail.com', 'rashmika@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Proid` int(6) NOT NULL,
  `Proname` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  `Categoryname` varchar(12) NOT NULL,
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Picture` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Proid`, `Proname`, `Price`, `Categoryname`, `Time`, `Picture`) VALUES
(101, 'Water Volleyball', 700, 'waterG', '2018-09-26 22:50:14', 0x363730372d556e7469746c65642d312e6a7067),
(103, 'Water Basketball', 750, 'waterG', '2018-09-26 14:55:14', 0x36373637392d556e7469746c65642d382e6a7067),
(104, 'Water Ball', 750, 'waterG', '2018-09-27 15:53:20', 0x32323233332d556e7469746c65642d30302e6a7067),
(105, 'Water Boat', 1000, 'waterG', '2018-09-26 14:58:01', 0x37303030322d556e7469746c65642d322e6a7067),
(106, 'Water Race', 800, 'waterG', '2018-09-26 14:59:23', 0x34343738372d556e7469746c65642d332e6a7067),
(107, 'Water Bowling', 1000, 'waterG', '2018-09-26 15:00:06', 0x38363537342d556e7469746c65642d342e6a7067),
(108, 'Water Slide', 1000, 'waterG', '2018-09-26 15:00:51', 0x32363537382d556e7469746c65642d352e6a7067),
(109, 'Water Tennis', 400, 'waterG', '2018-09-29 15:33:27', 0x35333633332d556e7469746c65642d362e6a7067),
(110, 'Water Balloon', 500, 'waterG', '2018-09-26 15:01:52', 0x35313138362d556e7469746c65642d372e6a7067),
(111, 'Water float', 600, 'waterG', '2018-09-26 15:02:44', 0x32353536322d556e7469746c65642d392e6a7067),
(112, 'Shape Throw', 500, 'outdoorG', '2018-09-26 15:16:23', 0x33373530322d556e7469746c65642d322e6a7067),
(113, 'Tug of War', 600, 'outdoorG', '2018-09-27 15:53:30', 0x39363033372d392e6a7067),
(114, 'Basketball', 300, 'outdoorG', '2018-09-26 15:18:03', 0x343438392d382e6a7067),
(115, 'Angry Bird', 300, 'outdoorG', '2018-09-26 15:20:51', 0x35313733362d362e6a7067),
(116, 'Cricket', 200, 'outdoorG', '2018-09-26 15:21:11', 0x353634302d352e6a7067),
(117, 'Disk Golf', 500, 'outdoorG', '2018-09-26 15:27:48', 0x34393132352d342e6a7067),
(118, 'Archery', 700, 'outdoorG', '2018-09-26 15:28:28', 0x36343238362d322e6a7067),
(119, 'Football', 700, 'outdoorG', '2018-09-26 15:30:32', 0x31303636322d312e6a7067),
(120, 'Jericho Tower', 700, 'outdoorG', '2018-09-26 15:34:38', 0x36333639372d30302e6a7067),
(121, 'Jumping', 200, 'kidsG', '2018-09-26 15:56:53', 0x35313931312d332e6a7067),
(122, 'Ring Throw', 400, 'kidsG', '2018-09-27 15:53:37', 0x373337372d342e6a7067),
(123, 'Ring Game', 200, 'kidsG', '2018-09-26 15:58:21', 0x313832312d352e6a7067),
(124, 'Netball', 200, 'kidsG', '2018-09-26 15:58:51', 0x37393135342d66676664682e6a7067),
(125, 'Relay', 200, 'kidsG', '2018-09-28 10:25:08', 0x343132302d6d68682e6a7067),
(126, 'Disk Golf', 300, 'kidsG', '2018-09-26 16:00:18', 0x37333936302d556e7469746875672e6a7067),
(127, 'Sack Race', 200, 'kidsG', '2018-09-26 16:01:32', 0x33303433332d556e7469746c65642d312e6a7067),
(128, 'Slide', 400, 'kidsG', '2018-09-26 16:02:03', 0x35303832302d556e7469746c65642d746775727974652e6a7067),
(129, 'Table Pool', 800, 'indoorG', '2018-09-26 16:04:37', 0x32303830372d556e7469746c65642d312e6a7067),
(130, 'Table Tennis', 500, 'indoorG', '2018-09-26 16:05:18', 0x31363439362d556e7469746c65642d332e6a7067),
(131, 'Carrom', 200, 'indoorG', '2018-09-26 16:10:44', 0x33303139312d556e7469746c65642d322e6a7067),
(132, 'Basket Ball', 500, 'indoorG', '2018-09-27 15:53:44', 0x39323330382d556e7469746c65642d342e6a7067),
(133, 'Bowling', 400, 'indoorG', '2018-09-26 16:11:23', 0x33303438342d556e7469746c65642d352e6a7067),
(134, 'Chess', 200, 'indoorG', '2018-09-26 16:11:37', 0x34343435342d556e7469746c65642d362e6a7067),
(135, 'Boxing', 300, 'indoorG', '2018-09-27 15:54:10', 0x37333235362d556e7469746c65642d372e6a7067),
(136, 'Badminton', 300, 'indoorG', '2018-09-26 16:12:12', 0x38363236302d556e7469746c65642d382e6a7067),
(137, 'Card game', 100, 'indoorG', '2018-09-26 16:12:29', 0x37343633372d556e7469746c65642d392e6a7067),
(139, 'Hokey', 500, 'Discount', '2018-09-27 15:43:37', 0x34373737322d556e7469746c65642d312e6a7067),
(140, 'Disk Play', 400, 'Discount', '2018-09-27 15:45:33', 0x33313834342d556e7469746c65642d322e6a7067),
(141, 'Disk Play', 400, 'Discount', '2018-09-27 15:47:28', 0x36313132392d556e7469746c65642d322e6a7067),
(142, 'Dart Throw', 300, 'Discount', '2018-09-27 15:48:33', 0x34353130342d556e7469746c65642d332e6a7067),
(143, 'Arcade Games', 500, 'Discount', '2018-09-27 15:49:13', 0x35393630392d556e7469746c65642d352e6a7067),
(144, 'Polo', 300, 'Discount', '2018-09-27 15:49:39', 0x33363637322d556e7469746c65642d362e6a7067),
(145, 'Kids Pool', 400, 'Discount', '2018-09-27 15:50:08', 0x31373937392d7668662e6a7067),
(146, 'Hot Ball', 200, 'Discount', '2018-09-27 15:52:25', 0x37363131312d556e7469746c65642d342e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`Orderid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Proid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `Orderid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Proid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
