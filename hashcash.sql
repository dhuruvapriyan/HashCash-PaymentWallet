-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2019 at 07:09 PM
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
(16, '2019-03-05 23:38:41', 7305399959, 9999999999, 1);

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
(4, '2019-03-05 18:08:41', 9999999999, 149);

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
(7305399959, 'dhuruvapriyan', 123456789, 36, 0),
(7530034565, 'Ganesh', 7530034565, 10, 0),
(9344148231, 'Aswin', 9344148231, 5, 0),
(9999999999, 'admin', 9999999999, 149, 10);

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
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `trdetails`
--
ALTER TABLE `trdetails`
  MODIFY `tr1id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
