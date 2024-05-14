-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 03:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grading_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `grades` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `student_id`, `subject_name`, `teacher_id`, `grades`) VALUES
(1, '22-00303', 'NET1', '3222345', 90),
(2, '22-00303', 'SSDEV', '16123123', 98),
(3, '22-00303', 'IPTECH', '1231512', 89),
(4, '22-00303', 'FUDBS', '1231541', 78),
(5, '22-00303', 'ACSS', '6123124', 68),
(6, '22-00303', 'ETHICS', '1241512', 89),
(7, '22-00303', 'PAHFIT4', '41245612', 87),
(8, '22-00303', 'ITELECT2', '1251234', 89),
(9, '23-55039', 'ITNET1', '6123123', 90);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `gwa` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fullname`, `student_id`, `email`, `course`, `year`, `section`, `semester`, `gwa`) VALUES
(1, 'jomel marino', '22-00303', 'jomelmarino42@gmail.com', 'BSIT', '2', 'F', 'SECOND', 98),
(2, 'joshua meredores', '23-55039', 'joshuameredores@gmail.com', 'BSCE', '2', 'H', 'SECOND', 75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
