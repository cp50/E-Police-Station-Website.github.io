-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 07:12 PM
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
-- Database: `epolicestation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `punch_in_date` date NOT NULL,
  `punch_in_time` time NOT NULL,
  `emp_id` int(11) NOT NULL,
  `full_or_halfday` varchar(50) NOT NULL,
  `punch_out_date` date NOT NULL,
  `punch_out_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaintno` int(11) NOT NULL,
  `complaint_details` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(100) NOT NULL,
  `status_description` varchar(1000) NOT NULL,
  `complainant_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaintno`, `complaint_details`, `date`, `time`, `status`, `status_description`, `complainant_id`) VALUES
(9, 'theft', '2023-06-16', '18:17:00', 'Y', 'fir created', 18),
(10, 'speed', '2023-06-09', '00:12:00', 'N', 'N', 1),
(11, 'Theft', '2023-06-09', '14:48:00', 'N', 'inprogress', 28);

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE `fir` (
  `complaint_no` int(11) NOT NULL,
  `firno` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `crime` varchar(1000) NOT NULL,
  `section` varchar(500) NOT NULL,
  `crime_location` varchar(500) NOT NULL,
  `police_station` varchar(400) NOT NULL,
  `distance_from_crime_in_km` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `complainant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`complaint_no`, `firno`, `date`, `time`, `crime`, `section`, `crime_location`, `police_station`, `distance_from_crime_in_km`, `status`, `complainant_id`) VALUES
(9, 6, '2023-06-06', '07:12:41', 'theft', '395', 'kollam', 'kollam station', 40, 'y', 18);

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `empid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `official_mobno` int(12) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`empid`, `name`, `designation`, `official_mobno`, `password`) VALUES
(9876, 'manas', 'investigator', 98377878, 'Nadfg@123456'),
(123456, 'athul', 'inspector', 98377878, 'athul@A1234567');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `validid` varchar(50) NOT NULL,
  `mobileno` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `housename` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `place` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `validid`, `mobileno`, `email`, `housename`, `pin`, `place`, `district`, `state`, `password`) VALUES
(1, 'nandu', '3432424', 3323233, 'aaeffytd', 'iihii', 999999, 'pgd', 'tfytr', 'hfy', 't6'),
(13, 'chris', '1te546546', 143435456, 'chrispaul68002@gmail.com', '1434343', 11434134, 'bnbnbjbj', 'kerala', 'kannur', '1233445'),
(18, 'athul', '5658878', 6768768, 'athul@123', 'kjgkjkj', 989898, 'kjgkjgkjg', 'kollam', 'kerala', '76768768'),
(25, 'sangeeth', '87687687', 56789690, 'sangeethbiju@123', 'jnkjnkn', 676102, 'mattancheriiii', 'kochi', 'kerala', '1234'),
(26, 'nandu', '1te546546', 6768768, 'athul@123', 'jgir6ru', 686102, 'nkojojjo', 'kerala', 'kerala', 'nandU@12345'),
(27, 'sangeeth', '89879879', 2147483647, 'sangeethbiju@123', 'kjgkjkj', 686102, 'vyttila', 'kochi', 'kerala', 'SAngeeth@123456'),
(28, 'manas', '78654', 987655, 'manas@99g', 'house123', 686102, 'vyttila', 'kannur', 'kerala', 'manastw6@A12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaintno`),
  ADD KEY `complainant_id` (`complainant_id`);

--
-- Indexes for table `fir`
--
ALTER TABLE `fir`
  ADD PRIMARY KEY (`firno`),
  ADD KEY `complaint_no` (`complaint_no`),
  ADD KEY `complainant_id` (`complainant_id`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaintno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fir`
--
ALTER TABLE `fir`
  MODIFY `firno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `officials` (`empid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`complainant_id`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fir`
--
ALTER TABLE `fir`
  ADD CONSTRAINT `fir_ibfk_1` FOREIGN KEY (`complaint_no`) REFERENCES `complaint` (`complaintno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fir_ibfk_2` FOREIGN KEY (`complainant_id`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
