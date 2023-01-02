-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 01:26 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` char(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `power_level` int(1) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `power_level`, `email`) VALUES
('011193080', 'Safayed Bin Islam', 'hellouiu', 0, 'sislam193080@admin.uiu.ac.bd');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_list`
--

CREATE TABLE `appointment_list` (
  `id` int(11) NOT NULL,
  `time_slot` time NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content_1` varchar(500) NOT NULL,
  `content_2` varchar(500) NOT NULL,
  `image` int(11) NOT NULL,
  `writer_id_FK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blood_request`
--

CREATE TABLE `blood_request` (
  `post_id` int(11) NOT NULL,
  `writer_id` int(11) NOT NULL,
  `blood_group_ID` int(11) NOT NULL,
  `posted_at` text NOT NULL,
  `location` int(11) NOT NULL,
  `details` varchar(500) NOT NULL,
  `urgency_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` char(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `specialist` varchar(255) NOT NULL,
  `details` varchar(250) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `contact`, `specialist`, `details`, `schedule_id`, `appointment_id`, `password`) VALUES
('011193080', 'sadad dsdasd', 'sislam@medical.uiu.ac.bd', 0, '', '', 0, 0, 'sadasdasdasd'),
('011196080', 'sadasd dsadas', 'sislam@medical.uiu.ac.bd', 0, '', '', 0, 0, 'sadasdsad');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `details` varchar(1000) NOT NULL,
  `conductor_id` int(11) NOT NULL,
  `regisatration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `picture` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `med_info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `receipts_id` int(11) NOT NULL,
  `problems` varchar(500) NOT NULL,
  `presecription` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `bill` int(11) NOT NULL,
  `pdf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration_list`
--

CREATE TABLE `registration_list` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `participants_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `timeslot` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` char(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `blood_group_ID` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `consent` int(11) NOT NULL,
  `appointment_list` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `blood_group_ID`, `contact`, `consent`, `appointment_list`, `password`) VALUES
('011193080', 'Safayed Bin Islam', 'sislam193080@bscse.uiu.ac.bd', 0, 0, 0, 0, '$2y$10$Khx9DQXH192jBEj/jQViqO9q.xCQIp9TMrpYIpfxjhF56i8vfbDx6'),
('011193082', 'sdasd sadasd', 'sislam193086@bscse.uiu.ac.bd', 0, 0, 0, 0, '$2y$10$EQnJd.fEsmTd.rK6TjBYu.12Y.2VwoprzPzQaeyxdaZmSDc5myrPe'),
('011193134', 'Sabbir Rahman', 'mrahaman193134@bscse.uiu.ac.bd', 0, 0, 0, 0, '$2y$10$dXHNXdFK4Tz.WecfA/lNse..nNLLN63VaPctat4MlKUVUG2A2GPZC');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` char(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `blood_group_ID` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `consent` int(11) NOT NULL,
  `appointment_list` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
