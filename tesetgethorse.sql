-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2018 at 03:54 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tesetgethorse`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo1`
--

CREATE TABLE `demo1` (
  `id` int(11) NOT NULL,
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `age` int(11) NOT NULL,
  `town` varchar(22) NOT NULL,
  `job` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo1`
--

INSERT INTO `demo1` (`id`, `fname`, `lname`, `age`, `town`, `job`) VALUES
(1, 'Sara', 'tuwj', 20, 'riy', 'stu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demo1`
--
ALTER TABLE `demo1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo1`
--
ALTER TABLE `demo1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
