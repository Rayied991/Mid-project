-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2022 at 05:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

CREATE TABLE `admin_registration` (
  `id` int(100) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `age` int(100) NOT NULL,
  `gender` text NOT NULL,
  `mob_no` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `file_upload` varchar(100) NOT NULL,
  `admin_name` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`id`, `fname`, `lname`, `age`, `gender`, `mob_no`, `email`, `file_upload`, `admin_name`, `password`, `confirm_password`) VALUES
(1, 'MD.SHAHZAD HUSSAIN', 'RAYIED', 22, 'Male', 1968840732, 'hussainrayied9@gmail.com', 'Profile.jpg', 'RAYIED', 'Akmch067**1', 'Akmch067**1'),
(2, 'Imtiaz', 'Rahman Alif', 45, 'Male', 1615972128, '20-42236-1@student.aiub.edu', 'person.jpg', 'Alif ', 'Akmch067**23', 'Akmch067**23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_registration`
--
ALTER TABLE `admin_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_registration`
--
ALTER TABLE `admin_registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
