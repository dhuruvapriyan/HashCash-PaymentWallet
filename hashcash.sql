-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 04:05 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hashcash`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `tid` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `from1` bigint(20) NOT NULL,
  `to1` bigint(20) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`tid`, `timestamp`, `from1`, `to1`, `amount`) VALUES
(3, '2019-03-05 22:57:04', 7305399959, 9999999999, 23),
(4, '2019-03-05 22:57:06', 7305399959, 9999999999, 23),
(5, '2019-03-05 22:57:44', 7305399959, 9999999999, 23),
(6, '2019-03-05 22:57:58', 7305399959, 9999999999, 23),
(7, '2019-03-05 22:59:02', 7305399959, 9999999999, 23),
(8, '2019-03-05 22:59:18', 7305399959, 9999999999, 23),
(9, '2019-03-05 22:59:51', 7305399959, 9999999999, 23),
(10, '2019-03-05 23:00:09', 7305399959, 9999999999, 23),
(11, '2019-03-05 23:00:15', 7305399959, 9999999999, 23),
(12, '2019-03-05 23:12:54', 7305399959, 9344148231, 15),
(13, '2019-03-05 23:27:39', 9344148231, 7530034565, 10),
(14, '2019-03-05 23:37:25', 7305399959, 9999999999, 1),
(15, '2019-03-05 23:38:07', 7305399959, 9999999999, 1),
(16, '2019-03-05 23:38:41', 7305399959, 9999999999, 1),
(17, '2019-03-06 00:56:56', 0, 9344148231, 50),
(18, '2019-03-06 20:49:43', 0, 9344148231, 121),
(19, '2019-03-06 20:51:23', 9344148231, 7530034565, 19),
(20, '2019-03-06 20:53:15', 9344148231, 7530034565, 19),
(21, '2019-03-06 21:29:17', 0, 7305399959, 123),
(22, '2019-03-06 21:29:52', 7305399959, 7550123257, 12),
(23, '2019-03-06 23:12:26', 0, 9344148231, 1000),
(24, '2019-03-06 23:13:07', 9344148231, 7305399959, 100),
(25, '2019-03-07 09:57:02', 7305399959, 7530034565, 50),
(26, '2019-03-07 10:00:15', 0, 7305399959, 45),
(27, '2019-03-07 10:03:07', 0, 7305399959, 12),
(28, '2019-03-26 01:49:01', 0, 7305399959, 0),
(29, '2019-03-26 01:52:42', 0, 7305399959, 170),
(30, '2019-03-26 01:54:20', 0, 7305399959, 0),
(31, '2019-03-26 22:32:54', 7305399959, 9344148231, 100),
(32, '2019-03-26 23:09:11', 0, 9344148231, 100),
(33, '2019-03-26 23:09:36', 9344148231, 8903645196, 10);

-- --------------------------------------------------------

--
-- Table structure for table `trdetails`
--

CREATE TABLE `trdetails` (
  `tr1id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mobilenumber` bigint(20) NOT NULL,
  `currentbalance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trdetails`
--

INSERT INTO `trdetails` (`tr1id`, `timestamp`, `mobilenumber`, `currentbalance`) VALUES
(1, '2019-03-05 18:08:07', 7305399959, 37),
(2, '2019-03-05 18:08:07', 9999999999, 148),
(3, '2019-03-05 18:08:41', 7305399959, 36),
(4, '2019-03-05 18:08:41', 9999999999, 149),
(5, '2019-03-05 19:26:56', 9344148231, 55),
(6, '2019-03-06 15:19:41', 9344148231, 176),
(7, '2019-03-06 15:21:23', 9344148231, 157),
(8, '2019-03-06 15:21:23', 7530034565, 29),
(9, '2019-03-06 15:23:14', 9344148231, 138),
(10, '2019-03-06 15:23:14', 7530034565, 48),
(11, '2019-03-06 15:59:16', 7305399959, 123),
(12, '2019-03-06 15:59:51', 7305399959, 111),
(13, '2019-03-06 15:59:51', 7550123257, 12),
(14, '2019-03-06 17:42:24', 9344148231, 1138),
(15, '2019-03-06 17:43:06', 9344148231, 1038),
(16, '2019-03-06 17:43:06', 7305399959, 100),
(17, '2019-03-07 04:27:02', 7305399959, 50),
(18, '2019-03-07 04:27:02', 7530034565, 98),
(19, '2019-03-07 04:30:13', 7305399959, 95),
(20, '2019-03-07 04:33:05', 7305399959, 107),
(21, '2019-03-25 20:17:53', 7305399959, 107),
(22, '2019-03-25 20:19:01', 7305399959, 0),
(23, '2019-03-25 20:22:42', 7305399959, 180),
(24, '2019-03-25 20:24:20', 7305399959, 200),
(25, '2019-03-26 14:32:44', 7305399959, 209),
(26, '2019-03-26 17:02:54', 7305399959, 109),
(27, '2019-03-26 17:02:54', 9344148231, 100),
(28, '2019-03-26 17:39:09', 9344148231, 100),
(29, '2019-03-26 17:39:36', 9344148231, 90),
(30, '2019-03-26 17:39:36', 8903645196, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `mobilenumber` bigint(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `password` bigint(20) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `loyaltypoints` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`mobilenumber`, `name`, `password`, `balance`, `loyaltypoints`) VALUES
(987654321, 'suganthan', 987654321, 0, 0),
(7305399959, 'dhuruvapriyan', 7305399959, 109, 1),
(7530034565, 'Ganesh', 7530034565, 98, 0),
(8903645196, 'Suresh', 8903645196, 10, 0),
(9344148231, 'Aswin S', 9344148231, 90, 10),
(9566533902, 'sridatt', 9566533902, 0, 0),
(9600296781, 'abishek', 9600296781, 0, 0),
(9791474650, 'Riyank', 9791474650, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `tid` (`tid`),
  ADD KEY `tid_2` (`tid`);

--
-- Indexes for table `trdetails`
--
ALTER TABLE `trdetails`
  ADD PRIMARY KEY (`tr1id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`mobilenumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `trdetails`
--
ALTER TABLE `trdetails`
  MODIFY `tr1id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
