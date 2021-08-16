-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 10:43 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'rakibhasan', '12345'),
(2, 'rakib123', '125141'),
(3, 'admin', '1234'),
(5, 'rkbhsnrj', '478566'),
(6, 'mushfiq', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `appointmentbooking`
--

CREATE TABLE `appointmentbooking` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `pname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `nopatient` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointmentbooking`
--

INSERT INTO `appointmentbooking` (`id`, `name`, `department`, `hospital`, `date`, `time`, `pname`, `phone`, `nopatient`) VALUES
(5, 'Raj', 'XYZPz', 'ABCD', '2021-08-16', '11:21:00', 'Raj', '01454758644', 3),
(6, 'Rakib Hasan', 'Surgery', 'Kurmitola', '2021-08-02', '01:20:00', 'Sadia', '01478445684', 1),
(7, 'Rakib Hasan', 'DEPARTMENT OF SURGERY', 'Popular Hospital', '2021-08-02', '01:15:00', 'Mushfiq', '01478445684', 3),
(8, 'Raj', 'XYZPz', 'ABCD', '2021-08-01', '01:40:00', 'Sadia', '01732739957', 3),
(9, 'Arman', 'Cardiologists', 'Apollo Hospital Dhaka', '2021-08-03', '16:53:00', 'Arman', '1732739957', 2);

-- --------------------------------------------------------

--
-- Table structure for table `appointmentview`
--

CREATE TABLE `appointmentview` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointmentview`
--

INSERT INTO `appointmentview` (`id`, `username`, `name`, `department`, `hospital`, `date`, `time`) VALUES
(3, 'rakib14', 'Rakib Hasan', 'Surgery', 'Kurmitola', '2021-08-02', '01:20:00'),
(8, 'rakibhasan1', 'Raj', 'XYZPz', 'ABCD', '2021-08-01', '01:40:00'),
(9, 'arman1234', 'Arman', 'Cardiologists', 'Apollo Hospital Dhaka', '2021-08-03', '16:53:00'),
(10, 'rakib', 'Rakib Hasan', 'DEPARTMENT OF SURGERY', 'Popular Hospital', '2021-08-02', '05:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(7, 'Afsana', 'afsana@gmail.com', 'Lorem Ipsum is simply dummy text of the printing\r\nand typesetting industry.'),
(8, 'Rakib Hasan', 'rkbhsnrj@gmail.com', 'Needs help.');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `bGroup` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `username`, `password`, `dob`, `bGroup`, `email`, `phone`) VALUES
(7, 'Rakib Hasan', 'rkbhsnrj12', 'Rakib123', '2021-08-02', 'A-', 'rkbhsnrj@gmail.com', '1732739957');

-- --------------------------------------------------------

--
-- Table structure for table `donateblood`
--

CREATE TABLE `donateblood` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bGroup` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donateblood`
--

INSERT INTO `donateblood` (`id`, `name`, `bGroup`, `phone`) VALUES
(1, 'rakib', 'A-', '1732739957'),
(2, 'Rakib', 'B+', '1732739957'),
(3, 'Rakib', 'B+', '01478445684');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `bGroup` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `username`, `password`, `dob`, `bGroup`, `email`, `phone`) VALUES
(2, 'Rakib Hasan', 'rakib123', '12345', '2021-08-03', 'B+', 'rkbhsnrj@gmail.com', '1732739957'),
(4, 'Mushfiq Alam', 'Mushfiq123', 'Mushfiq123', '2021-08-01', 'A-', 'mushfiq@gmail.com', '01754586545');

-- --------------------------------------------------------

--
-- Table structure for table `finaldoctor`
--

CREATE TABLE `finaldoctor` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `bGroup` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `hospital` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finaldoctor`
--

INSERT INTO `finaldoctor` (`id`, `name`, `username`, `password`, `dob`, `bGroup`, `email`, `phone`, `department`, `hospital`) VALUES
(1, 'Rakib Hasan', 'rakib', '12345', '2021-08-03', 'A+', 'rkbhsnrj@gmail.com', '017315456842', 'DEPARTMENT OF SURGERY', 'Popular Hospital'),
(2, 'Raj', 'rakibhasan1', '12345', '2021-08-11', 'O-', 'raj@gmail.com', '017315456841', 'XYZPz', 'ABCD'),
(21, 'Rakib Hasan', 'rakib14', '12345', '2021-08-04', 'A+', 'sakib@gmail.com', '017315456841', 'Surgery', 'Kurmitola'),
(25, 'Arman', 'arman1234', 'Arman1234', '2021-08-04', 'O+', 'arman@gmail.com', '01548745214', 'Cardiologists', 'Apollo Hospital Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `bGroup` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `username`, `password`, `dob`, `bGroup`, `email`, `phone`) VALUES
(5, 'Rakib', 'rkbhsnrj1', 'Rakib147', '2019-10-15', 'AB+', 'rkbhsnrj@gmail.com', '1732739957'),
(7, 'Mushfiq Alam', 'Mushfiq123', 'Mushfiq123', '2021-08-03', 'A+', 'mushfiq@gmail.com', '01478445684'),
(8, 'Rana', 'rana1223', 'Rana12345', '2021-08-03', 'A-', 'rkbhsnrj@gmail.com', '1732739957');

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
-- Indexes for table `appointmentbooking`
--
ALTER TABLE `appointmentbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointmentview`
--
ALTER TABLE `appointmentview`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `donateblood`
--
ALTER TABLE `donateblood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `finaldoctor`
--
ALTER TABLE `finaldoctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `appointmentbooking`
--
ALTER TABLE `appointmentbooking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `appointmentview`
--
ALTER TABLE `appointmentview`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `donateblood`
--
ALTER TABLE `donateblood`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `finaldoctor`
--
ALTER TABLE `finaldoctor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
