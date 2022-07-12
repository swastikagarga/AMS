-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 12:00 PM
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
-- Database: `cred`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Vikas', 'admin@admin.com', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `admission_record`
--

CREATE TABLE `admission_record` (
  `admission_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `department_id` int(11) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `caste` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL,
  `10th_marks` varchar(255) NOT NULL,
  `12th_marks` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `admission_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_record`
--

INSERT INTO `admission_record` (`admission_id`, `first_name`, `last_name`, `dob`, `department_id`, `nationality`, `caste`, `address`, `signature`, `10th_marks`, `12th_marks`, `image`, `mobile`, `email`, `admission_status`) VALUES
(1, 'Vikas', 'Kumar', '2022-01-01', 1, 'Indian', 'Yadav', 'Fancy Ali, Jorhat, Assam', 'uploads/1655627109-my-sign-transparent.png', 'uploads/1655627074-Screenshot 2022-03-25 005145.png', 'uploads/1655627087-mongo-db-2.png', 'uploads/1655627056-passpord-me-ps.jpg', '8723992495', 'v.ray96610@gmail.com', 1),
(2, 'ABC', 'XYZ', '2022-01-01', 1, 'Indian', 'YAdav', 'Fancy', 'uploads/1655628495-my-sign-transparent.png', 'uploads/1655629311-my-sign-transparent.png', 'uploads/1655629323-my-sign-transparent.png', 'uploads/1655629304-my-sign-transparent.png', '4569878585', 'email@email.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL,
  `candidate_email` varchar(50) NOT NULL,
  `candidate_password` varchar(50) NOT NULL,
  `candidate_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `candidate_email`, `candidate_password`, `candidate_name`) VALUES
(1, 'email@email.com', 'qwerty', 'Full Name'),
(2, 'email1@email.com', 'qwerty', 'Second');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `cert_number` varchar(50) NOT NULL,
  `cert_url` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL,
  `issue_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `cert_number`, `cert_url`, `student_id`, `issue_date`) VALUES
(2, 'xxxx', 'https://via.placeholder.com/1200/000000.png?text=2', 1, '2021-07-24 12:19:00'),
(3, '55555', 'uploads/1627135684-WhatsApp Image 2021-04-01 at 8.58.59 AM.jpeg', 5, '2021-07-24 14:08:04'),
(4, '55555t', 'uploads/1627135970-ggg.jpeg', 5, '2021-07-24 14:12:50'),
(5, 'hjyfgtuyfyt', 'uploads/1627136011-ggg.jpeg', 5, '2021-07-24 14:13:31'),
(6, 'htftyhfy', 'uploads/1627206759-5249-GPS INSTALLATION_page-0001.jpg', 8, '2021-07-25 09:52:39'),
(8, 'AITI/DCA/2021', 'uploads/1653553205-WhatsApp-Image-2020-12-20-at-12.10.02-AM-1024x683 (1).jpeg', 10, '2022-05-26 08:20:05'),
(9, '1016', 'uploads/1654723373-img20200204_14403562.jpg', 12, '2022-06-08 21:22:53'),
(10, '9148/AITI/112', 'uploads/1654724032-olee_1.jpg', 13, '2022-06-08 21:33:52'),
(11, '123456', 'uploads/1655615844-access-key.png', 13, '2022-06-19 05:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `department_hod` varchar(50) NOT NULL,
  `department_phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `department_hod`, `department_phone`) VALUES
(1, 'Computer Science And Engineering', 'Jameson', '9875642358');

-- --------------------------------------------------------

--
-- Table structure for table `portal_setting`
--

CREATE TABLE `portal_setting` (
  `id` int(11) NOT NULL,
  `setting_key` varchar(50) NOT NULL,
  `setting_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portal_setting`
--

INSERT INTO `portal_setting` (`id`, `setting_key`, `setting_value`) VALUES
(1, 'system_name', 'Admission Portal'),
(2, 'system_logo', 'https://upload.wikimedia.org/wikipedia/en/thumb/d/db/Jorhat_Institute_of_Science_%26_Technology_logo.png/220px-Jorhat_Institute_of_Science_%26_Technology_logo.png'),
(3, 'system_footer', 'Jakashay Dowarah');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `bio` varchar(200) NOT NULL,
  `current_org` varchar(50) NOT NULL,
  `current_position` varchar(50) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `birth_year` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` int(11) NOT NULL,
  `registration_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `facebook_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `username`, `bio`, `current_org`, `current_position`, `website_url`, `birth_year`, `country`, `city`, `zip`, `registration_number`, `email`, `password`, `profile_picture`, `facebook_url`) VALUES
(10, 'PRANJAL ', 'PHUKAN', 'PRANJAL -JZfi', '', '', '', '', 0, '', '', 0, 'AITI/DCA/2021', '8011611161', 'ngaHcz', 'https://via.placeholder.com/150', ''),
(11, 'Rahul', 'Verma', 'Rahul-jfv0', '', '', '', '', 0, '', '', 0, '5041/AITI/61', '8399923703', 'BlTZas', 'https://via.placeholder.com/150', ''),
(12, 'PANKAJ ', 'GOHAIN', 'PANKAJ -jKb4', '', '', '', '', 0, '', '', 0, 'AT23DCRT1012', '8135920567', 'D784cC', 'https://via.placeholder.com/150', ''),
(13, 'Anamika ', 'Sonowal ', 'Anamika -YFAI', '', '', '', '', 1997, 'India', 'Tinsukia', 0, '9148/AITI/112', '9101043711', 'hbDoNW', 'https://via.placeholder.com/150', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_record`
--
ALTER TABLE `admission_record`
  ADD PRIMARY KEY (`admission_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `portal_setting`
--
ALTER TABLE `portal_setting`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_key` (`setting_key`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_record`
--
ALTER TABLE `admission_record`
  MODIFY `admission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portal_setting`
--
ALTER TABLE `portal_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
