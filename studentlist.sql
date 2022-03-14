-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 12:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studendata`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentlist`
--

CREATE TABLE `studentlist` (
  `id` int(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `collegename` varchar(100) NOT NULL,
  `paddress` varchar(100) NOT NULL,
  `ppostoffice` varchar(100) NOT NULL,
  `pdistrict` varchar(100) NOT NULL,
  `pstate` varchar(100) NOT NULL,
  `ppin` varchar(100) NOT NULL,
  `raddress` varchar(100) NOT NULL,
  `rpostoffice` int(100) NOT NULL,
  `rdistrict` varchar(100) NOT NULL,
  `rstate` varchar(100) NOT NULL,
  `rpin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlist`
--

INSERT INTO `studentlist` (`id`, `firstname`, `lastname`, `mobile`, `email`, `fathername`, `gender`, `collegename`, `paddress`, `ppostoffice`, `pdistrict`, `pstate`, `ppin`, `raddress`, `rpostoffice`, `rdistrict`, `rstate`, `rpin`) VALUES
(10, 'Abdul', 'Kader', '987654387654', 'monowargtp@gmail.com', 'Abdul Kader', 'Male', 'Barak Valley Engineering College', 'BVEC Boys Hostel', 'Ambari', 'Karimganj', 'Assam', '987654', 'BVEC Boys Hostel', 0, 'Karimganj', 'Assam', '987654'),
(24, 'Monowar', 'Hussain', '06002538560', 'monowargtp@gmail.com', 'Abdul Kader', 'Male', 'Barak Valley Engineering College', 'BVEC Boys Hostel', 'Ambari', 'Karimganj', 'Assam', '788701', 'BVEC Boys Hostel', 0, 'Karimganj', 'Assam', '788701');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentlist`
--
ALTER TABLE `studentlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentlist`
--
ALTER TABLE `studentlist`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
