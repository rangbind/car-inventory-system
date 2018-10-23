-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 23, 2018 at 02:12 AM
-- Server version: 5.6.41
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dasienin_analytics`
--

-- --------------------------------------------------------

--
-- Table structure for table `c_model`
--

CREATE TABLE `c_model` (
  `id` int(11) NOT NULL,
  `manufacture_id` int(11) NOT NULL,
  `model_name` varchar(200) NOT NULL,
  `color` varchar(50) NOT NULL,
  `year` bigint(11) NOT NULL,
  `reg_no` varchar(200) NOT NULL,
  `note` text NOT NULL,
  `pic1` varchar(200) NOT NULL,
  `pic2` varchar(200) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_model`
--

INSERT INTO `c_model` (`id`, `manufacture_id`, `model_name`, `color`, `year`, `reg_no`, `note`, `pic1`, `pic2`, `created_on`) VALUES
(4, 2, 'honda super show', 'red', 2018, '45263', 'honda super show red        \r\n      ', '20181022113258beyu.jpg', '20181022113301beyu.jpg', '2018-10-22 11:33:04'),
(5, 2, 'honda super show', 'black', 2018, '968596', 'honda super show black        \r\n      ', '20181022113331beyu.jpg', '20181022113333beyu.jpg', '2018-10-22 11:33:34'),
(6, 3, 'audi 2000 cc', 'red', 2018, '857452', 'audi 2000 cc red        \r\n      ', '20181022113405beyu.jpg', '20181022113407beyu.jpg', '2018-10-22 11:34:09'),
(7, 3, 'audi 2000 cc', 'black', 2018, '1546511', 'audi 2000 cc black        \r\n      ', '20181022113433beyu.jpg', '20181022113435beyu.jpg', '2018-10-22 11:34:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_model`
--
ALTER TABLE `c_model`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_model`
--
ALTER TABLE `c_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
