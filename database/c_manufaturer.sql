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
-- Table structure for table `c_manufaturer`
--

CREATE TABLE `c_manufaturer` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_manufaturer`
--

INSERT INTO `c_manufaturer` (`id`, `name`, `created_on`) VALUES
(1, 'maruti', '2018-10-22 11:29:37'),
(2, 'honda', '2018-10-22 11:29:44'),
(3, 'audi', '2018-10-22 11:30:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_manufaturer`
--
ALTER TABLE `c_manufaturer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_manufaturer`
--
ALTER TABLE `c_manufaturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
