-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 08:09 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lazzaz`
--

-- --------------------------------------------------------

--
-- Table structure for table `horse`
--

CREATE TABLE `horse` (
  `StallNo` char(3) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Color` varchar(10) NOT NULL,
  `Speed` char(10) NOT NULL,
  `DOB` date NOT NULL,
  `Sex` varchar(6) NOT NULL,
  `Origin` varchar(10) NOT NULL,
  `Owner` varchar(10) NOT NULL,
  `TrainerID` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `horse`
--

INSERT INTO `horse` (`StallNo`, `Name`, `Color`, `Speed`, `DOB`, `Sex`, `Origin`, `Owner`, `TrainerID`) VALUES
('111', 'modhi', 'black', '300', '2017-12-12', 'female', 'Arabian', 'khalid', '123456111'),
('222', 'hamra', 'brown', '400', '2017-04-11', 'female', 'arabian', 'khalid', '177456111'),
('333', 'chico', 'brown', '400', '2018-04-21', 'female', 'british', 'mayada', '123232323'),
('444', 'champ', 'black', '350', '2018-01-07', 'male', 'arabian', 'sara', '123456700'),
('555', 'septa', 'white', '200', '0000-00-00', 'female', 'british', 'abdulaziz', '123232323'),
('777', 'Sultan', 'black', '300', '0000-00-00', 'male', 'Arabian', 'Sara', '123456700');

-- --------------------------------------------------------

--
-- Table structure for table `horse_trainer`
--

CREATE TABLE `horse_trainer` (
  `Emp_ID` char(9) NOT NULL,
  `Horses_trained` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `horse_trainer`
--

INSERT INTO `horse_trainer` (`Emp_ID`, `Horses_trained`) VALUES
('123232323', 3),
('123456111', 5),
('123456700', 3),
('123456789', 8),
('177456111', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Member_ID` char(9) NOT NULL,
  `Member_Name` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `Sex` char(1) NOT NULL,
  `Nationality` varchar(30) NOT NULL,
  `Phone` char(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Reg_Type` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Member_ID`, `Member_Name`, `DOB`, `Sex`, `Nationality`, `Phone`, `Email`, `Reg_Type`) VALUES
('123450', 'Mohammed', '0000-00-00', 'M', 'Saudi', '0503345678', 'moh1993@gmail.com', '3months'),
('123451', 'Yasser', '0000-00-00', 'M', 'Saudi', '0503643765', 'yas1990@gmail.com', '3months'),
('123452', 'Maha', '0000-00-00', 'F', 'Syrian', '0503837265', 'maha1994@gmail.com', '6months'),
('123453', 'Rania', '0000-00-00', 'F', 'Egyptian', '0503872134', 'ran1997@gmail.com', '6months'),
('123454', 'Eman', '0000-00-00', 'F', 'Saudi', '0503827365', 'eman1993@gmail.com', '6months');

-- --------------------------------------------------------

--
-- Table structure for table `memb_trainer`
--

CREATE TABLE `memb_trainer` (
  `Emp_ID` char(9) NOT NULL,
  `Trained_Members` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memb_trainer`
--

INSERT INTO `memb_trainer` (`Emp_ID`, `Trained_Members`) VALUES
('123232323', 9),
('123400000', 2),
('123456111', 3),
('123456700', 10),
('177456111', 5);

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `Emp_ID` char(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `Years_exp` int(11) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `Sex` char(1) NOT NULL,
  `Job_title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`Emp_ID`, `Name`, `DOB`, `Years_exp`, `Nationality`, `Sex`, `Job_title`) VALUES
('123232323', 'John', '1997-07-12', 10, '', 'M', 'Horse Trainer'),
('123400000', 'Lubna', '1975-04-13', 7, 'Lebanese', 'F', 'Member Trainer'),
('123455589', 'Hamed', '1988-01-08', 7, 'Lebanese', 'M', 'Member Trainer'),
('123456111', 'Nouf', '1990-08-16', 12, 'Saudi', 'F', 'Horse Trainer'),
('123456700', 'Khalid', '1970-03-04', 12, 'Saudi', 'M', 'Horse Trainer'),
('123456789', 'Mohamed', '2000-02-26', 12, 'Portugese', 'M', 'Horse Trainer'),
('177456111', 'Remaj', '1982-01-07', 0, '', 'F', 'Horse Trainer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `horse`
--
ALTER TABLE `horse`
  ADD PRIMARY KEY (`StallNo`);

--
-- Indexes for table `horse_trainer`
--
ALTER TABLE `horse_trainer`
  ADD UNIQUE KEY `Emp_ID` (`Emp_ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Member_ID`);

--
-- Indexes for table `memb_trainer`
--
ALTER TABLE `memb_trainer`
  ADD PRIMARY KEY (`Emp_ID`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`Emp_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
