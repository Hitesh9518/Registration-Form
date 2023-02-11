-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 08:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `hobbies` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `pincode` int(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `fname`, `mname`, `lname`, `dob`, `gender`, `hobbies`, `email`, `mobile`, `address`, `city`, `state`, `country`, `pincode`, `password`) VALUES
(1, 'Kanan', 'P', 'Patel', '2023-02-01', 'Female', 'Reading', 'kanan@gmail.com', 1234567899, 'abcde', 'Vadodara', 'Gujarat', 'India', 395025, '1234'),
(4, 'Hitesh', 'S', 'Patel', '2023-02-09', 'Male', 'Reading,Cycling', 'hitesh@gmail.com', 1234567890, 'abc', 'surat', 'gujarat', 'india', 395025, '123'),
(10, 'Khushi', 'A', 'Patel', '2023-02-01', 'Female', 'Reading', 'khushi@gmail.com', 1234567890, 'abcdef', 'surat', 'gujarat', 'india', 123456, '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
