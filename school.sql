-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2020 at 07:46 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`) VALUES
(1, '1ST A'),
(3, '1st B'),
(4, '2nd A'),
(5, '2nd B');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `regno` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `dateofpayment` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `class` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `regno`, `amount`, `dateofpayment`, `class`) VALUES
(2, '502cs09001', 5000, '2020-02-18 10:52:39', '1ST A'),
(3, '502cs09001', 2500, '2020-02-18 10:56:07', '1ST A'),
(4, '502cs09001', 2500, '2020-02-18 11:04:36', '1ST A');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `password`) VALUES
('manager', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `regno` varchar(200) NOT NULL,
  `calss` varchar(200) NOT NULL,
  `testno` varchar(200) NOT NULL,
  `sub1` int(11) NOT NULL,
  `sub2` int(11) NOT NULL,
  `sub3` int(11) NOT NULL,
  `sub4` int(11) NOT NULL,
  `sub5` int(11) NOT NULL,
  `sub6` int(11) NOT NULL,
  `ext1` int(11) NOT NULL,
  `ext2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `regno`, `calss`, `testno`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `ext1`, `ext2`) VALUES
(2, '502cs09001', '1ST A', '1ST TEST', 15, 16, 28, 2, 25, 22, 32, 22);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `class` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `qualification`, `address`, `phno`, `class`, `password`) VALUES
('tec1@gmail.com', 'TEC1', 'BEd', 'Sagara', '9876543210', '1ST A', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `regno` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `relegian` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `natinality` varchar(200) NOT NULL,
  `father` varchar(200) NOT NULL,
  `focc` varchar(200) NOT NULL,
  `fqualification` varchar(200) NOT NULL,
  `mother` varchar(200) NOT NULL,
  `mocc` varchar(200) NOT NULL,
  `mqualification` varchar(200) NOT NULL,
  `annualincome` int(11) NOT NULL,
  `class` varchar(200) NOT NULL,
  `fee` int(11) NOT NULL,
  `dateofadmission` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`regno`, `name`, `address`, `relegian`, `gender`, `phno`, `dob`, `natinality`, `father`, `focc`, `fqualification`, `mother`, `mocc`, `mqualification`, `annualincome`, `class`, `fee`, `dateofadmission`) VALUES
('502cs09001', 'Alok M C', 'smg', 'reg', 'reg', '98765643210', '1991-07-15', 'Indian', 'MKC', 'BUsiness', 'Bcom', 'Sindhu', 'House', 'SSLC', 500000, '1ST A', 10000, '2020-02-17 12:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(11) NOT NULL,
  `class` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `class`, `day`, `time`, `subject`) VALUES
(1, '1ST A', 'Monday', '10AM-11AM', 'English'),
(2, '1ST A', 'Monday', '11AM-12PM', 'Kannada'),
(3, '1ST A', 'Monday', '12PM-1PM', 'Science'),
(4, '1ST A', 'Monday', '2PM-3PM', 'Social'),
(5, '1ST A', 'Monday', '3PM-4PM', 'Maths'),
(6, '1ST A', 'Tuesday', '10AM-11AM', 'Hindhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
