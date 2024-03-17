-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2024 at 02:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) DEFAULT NULL,
  `p_mobile` int(11) DEFAULT NULL,
  `p_email` varchar(255) DEFAULT NULL,
  `p_cnic` int(11) DEFAULT NULL,
  `p_date` varchar(255) DEFAULT NULL,
  `p_timings` varchar(255) DEFAULT NULL,
  `d_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`p_id`, `p_name`, `p_mobile`, `p_email`, `p_cnic`, `p_date`, `p_timings`, `d_id`) VALUES
(1, 'Shahid', 33455677, 'shahid@gmail.com', 2147483647, '2024-02-04', '9-5', 4),
(2, 'Shams', 31234556, 'shams@gmail.com', 2147483647, '2024-02-06', '1-9', 4),
(3, 'Irshad', 322, 'irshad@gmail.com', 2147483647, '2024-02-09', '10-2', 4),
(4, 'Laraib', 2147483647, 'laraib@gmail.com', 2147483647, '2024-03-12', '2-10', 5),
(5, 'Zeeshan', 334456667, 'zeeshan@gmail.com', 2147483647, '2024-03-01', '9-5', 4),
(6, 'Zafar', 2147483647, 'zafar@gmial.com', 2147483647, '2024-02-04', '9-5', 2),
(7, 'Kamal', 2147483647, 'kamal@gmail.com', 2147483647, '2024-02-28', '1-9', 3),
(8, 'Asim', 2147483647, 'asim@gmail.com', 2147483647, '2024-03-11', '2-10', 3),
(9, 'Haseeb', 232435435, 'haseeb@gmail.com', 2147483647, '2024-02-03', '9-5', 2),
(10, 'Yaseen', 23243543, 'yaseen@gmail.com', 2147483647, '2024-02-25', '9-5', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `doctor_username` varchar(255) NOT NULL,
  `doctor_password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `other` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`doctor_id`, `doctor_name`, `doctor_username`, `doctor_password`, `status`, `other`) VALUES
(1, 'Admin', '@admin', 'admin1234', 1, 'Admin'),
(2, 'Saleem', '@doctorsaleem', '1234', 1, 'Doctor'),
(3, 'Shams', '@doctorshams', '1234', 1, 'Doctor'),
(4, 'Fazal', '@doctorfazal', '1234', 1, 'Doctor'),
(5, 'Aman', '@doctoraman', '1234', 1, 'Doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD CONSTRAINT `tbl_appointment_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `tbl_doctor` (`doctor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
