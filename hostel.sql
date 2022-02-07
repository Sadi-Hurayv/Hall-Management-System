-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 28, 2021 at 07:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accusations`
--

CREATE TABLE `accusations` (
  `id` int(11) NOT NULL,
  `regNo` varchar(20) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accusations`
--

INSERT INTO `accusations` (`id`, `regNo`, `firstName`, `lastName`, `title`, `description`, `postingDate`) VALUES
(16, '1825009', 'Shuvra', 'Aditya', 'New demo accusation title2', 'New demo accusation details2', '2021-09-28 12:51:47'),
(17, '1825009', 'Shuvra', 'Aditya', 'New demo accusation title3', 'New demo accusation details3', '2021-09-28 12:52:43'),
(18, 'xxxxxxxx', 'Annonymous', 'Student', 'New demo accusation title4', 'New demo accusation details4', '2021-09-28 12:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'moon@gmail.com', 'Test@987', '2020-04-04 20:31:45', '2021-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_sn` varchar(255) NOT NULL,
  `course_fn` varchar(255) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_sn`, `course_fn`, `posting_date`) VALUES
(1, 'B10992', 'B.Tech', 'Bachelor  of Technology', '2020-05-11 19:31:42'),
(2, 'BCOM1453', 'B.Com', 'Bachelor Of commerce ', '2020-05-11 19:32:46'),
(3, 'BSC20', 'BSC', 'Bachelor  of Science', '2020-05-11 19:33:23'),
(4, 'BC36356', 'BCA', 'Bachelor Of Computer Application', '2020-05-11 19:34:18'),
(5, 'MCA565', 'MCA', 'Master of Computer Application', '2020-05-11 19:34:40'),
(6, 'MBA75', 'MBA', 'Master of Business Administration', '2020-05-11 19:34:59'),
(7, 'BE765', 'BE', 'Bachelor of Engineering', '2020-05-11 19:35:19'),
(10, 'IIT25', 'IIT', 'Institute Of Information Technology', '2021-09-28 00:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `details`, `postingDate`) VALUES
(1, 'Demo Title 1', 'Demo Details 1', '2021-09-28 05:36:38'),
(3, 'Demo Title 3 edited', 'Demo details 3 edited', '2021-09-28 06:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `stayfrom` date NOT NULL,
  `course` varchar(500) NOT NULL,
  `session` varchar(20) NOT NULL,
  `regno` int(11) NOT NULL,
  `firstName` varchar(500) NOT NULL,
  `lastName` varchar(500) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `contactno` varchar(11) NOT NULL,
  `emailid` varchar(500) NOT NULL,
  `egycontactno` varchar(11) NOT NULL,
  `guardianName` varchar(500) NOT NULL,
  `guardianRelation` varchar(500) NOT NULL,
  `guardianContactno` varchar(11) NOT NULL,
  `corresAddress` varchar(500) NOT NULL,
  `corresCIty` varchar(500) NOT NULL,
  `corresState` varchar(500) NOT NULL,
  `pmntAddress` varchar(500) NOT NULL,
  `pmntCity` varchar(500) NOT NULL,
  `pmnatetState` varchar(500) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `roomno`, `seater`, `stayfrom`, `course`, `session`, `regno`, `firstName`, `lastName`, `gender`, `contactno`, `emailid`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `corresAddress`, `corresCIty`, `corresState`, `pmntAddress`, `pmntCity`, `pmnatetState`, `postingDate`, `updationDate`) VALUES
(11, 100, 5, '2021-09-08', 'Bachelor  of Technology', '2017-2018', 1825009, 'Shuvra', 'Aditya', 'male', '01836573504', 'shuvra@gmail.com', '01836573504', 'Nazrul', 'Uncle', '01836573504', 'Bashikpur', 'Laxmipur', 'Chittagong', 'Bashikpur', 'Laxmipur', 'Chittagong', '2021-09-26 07:57:08', '2021-09-26 03:57:08'),
(12, 100, 5, '2021-09-09', 'Bachelor  of Science', '2017-2018', 1825005, 'Abrar', 'Hossian', 'male', '01836573505', 'asif@gmail.com', '01836573504', 'Pinku', 'Uncle', '01836893505', 'Birahimpur', 'Chitogong', 'Chittagong', 'Birahimpur', 'Chitogong', 'Chittagong', '2021-09-26 08:23:29', '2021-09-26 04:23:29'),
(13, 200, 5, '2021-09-02', 'Bachelor Of commerce ', '2017-2018', 1825027, 'Moon', 'Das', 'female', '01751505093', 'moonmoon@gmail.com', '01751505093', 'Prodip', 'Uncle', '01836554505', 'Hazigonj', 'Chandpur', 'Chittagong', 'Hazigonj', 'Chandpur', 'Chittagong', '2021-09-26 17:18:06', '2021-09-26 13:18:06'),
(16, 100, 5, '2021-09-09', 'Bachelor  of Science', '2017-2018', 1825035, 'Kamruzzaman', 'Shekh', 'male', '01836573589', 'shekh@gmail.com', '01751505096', 'Akbar', 'Uncle', '01837873504', 'Matlab', 'Chandpur', 'Chittagong', 'Matlab', 'Chandpur', 'Chittagong', '2021-09-27 07:57:31', '2021-09-27 03:57:31'),
(17, 100, 5, '2021-09-02', 'Institute Of Information Technology', '2016-2017', 1825001, 'Sadi', 'Hurayv', 'male', '01836573504', 'sadi@gmail.com', '01836573504', 'Nazrul', 'Uncle', '01836573505', 'Laxmipur', 'Laxmipur', 'Chittagong', 'Laxmipur', 'Laxmipur', 'Chittagong', '2021-09-28 02:40:57', '28-09-2021 08:40:57'),
(18, 200, 2, '2021-09-23', 'Institute Of Information Technology', '2017-2018', 1825006, 'Nisat', 'Tasnim', 'female', '01836573502', 'nishat@gmail.com', '01712345678', 'Tazul Islam', 'Uncle', '01833573505', 'Comilla', 'Comilla', 'Chittagong', 'Comilla', 'Comilla', 'Chittagong', '2021-09-28 17:50:58', '28-09-2021 11:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `seater`, `room_no`, `posting_date`) VALUES
(1, 5, 100, '2020-06-11 22:45:43'),
(2, 5, 201, '2020-06-12 01:30:47'),
(3, 2, 200, '2020-06-12 01:30:58'),
(6, 3, 501, '2021-09-27 07:47:00'),
(7, 5, 601, '2021-09-27 07:49:38'),
(8, 5, 701, '2021-09-27 08:43:24'),
(12, 5, 901, '2021-09-27 22:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `regNo` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contactNo` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(100) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `regNo`, `firstName`, `lastName`, `gender`, `contactNo`, `email`, `password`, `updationDate`, `postingDate`) VALUES
(21, '1825009', 'Shuvra', 'Aditya', 'male', '01836573504', 'shuvra@gmail.com', 'shuvra@1234', '28-09-2021 08:54:32', '2021-09-28 02:43:03'),
(22, '1825005', 'Abrar', 'Hossian', 'male', '1836573505', 'asif@gmail.com', '01836573505', '2021-09-26 04:23:29', '2021-09-28 02:43:03'),
(23, '1825027', 'Moon', 'Das', 'female', '1751505093', 'moonmoon@gmail.com', '01751505093', '2021-09-26 13:18:06', '2021-09-28 02:43:03'),
(24, '1825035', 'Kamruzzaman', 'Shekh', 'male', '1836573589', 'shekh@gmail.com', '01836573589', '2021-09-27 03:57:32', '2021-09-28 02:43:03'),
(25, '1825001', 'Sadi', 'Hurayv', 'male', '01836573504', 'sadi@gmail.com', '01836573504', '2021-09-27 22:40:58', '2021-09-28 02:43:03'),
(26, '1825006', 'Nisat', 'Tasnim', 'female', '01836573502', 'nishat@gmail.com', '01836573502', '28-09-2021 11:50:58', '2021-09-28 17:50:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accusations`
--
ALTER TABLE `accusations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accusations`
--
ALTER TABLE `accusations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
