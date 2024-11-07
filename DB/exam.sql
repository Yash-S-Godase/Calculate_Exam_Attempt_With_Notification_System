-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 22, 2024 at 11:42 AM
-- Server version: 8.2.0
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_list`
--

DROP TABLE IF EXISTS `exam_list`;
CREATE TABLE IF NOT EXISTS `exam_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `exam_id` int NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `added_by` int NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_list`
--

INSERT INTO `exam_list` (`id`, `exam_id`, `exam_name`, `added_by`, `status`) VALUES
(1, 1, 'MPSC', 1, ''),
(2, 2, 'UPSC', 2, ''),
(3, 3, 'RRB_Exam', 2, ''),
(4, 4, 'Bank_Exam', 2, ''),
(5, 5, 'MSEB_Exam', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

DROP TABLE IF EXISTS `registration_form`;
CREATE TABLE IF NOT EXISTS `registration_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `number` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `date` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `education` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `exam` varchar(2000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Edate` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `fee` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `added_by` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_form`
--

INSERT INTO `registration_form` (`id`, `name`, `email`, `number`, `date`, `education`, `exam`, `Edate`, `fee`, `added_by`) VALUES
(1, 'Reena Kailas Shinde', 'reenakshinde1996@gmail.com', '9096811903', '2023-12-18', 'BE', 'MPSC', '2024-2-23', '200', 2),
(3, 'Sayali mogal', 'sayli@gmail.com', '1234567890', '2023-12-19', 'Msc', 'Bank_Exam', '2023-12-30', '200', 2),
(4, 'Sayali mogal', 'Sayali@gmail.com', '1234567890', '2023-12-19', 'Computer Sience', 'RRB_Exam', '2023-12-28', '200', 8),
(5, 'Sayali mogal', 'Sayali@gmail.com', '1234567890', '2023-12-19', 'IT sectors', 'Bank_Exam', '2023-12-20', '200', 8),
(6, 'rani', 'rani@123gmail.com', '1234567890', '2023-12-30', 'BE(E & TC)', 'UPSC', '2023-12-30', '200', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `role_id` int NOT NULL COMMENT '0-Admin,1-Student',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role_id`) VALUES
(1, '', 'Exam', 'exam@123', 0),
(2, 'Reena', 'reena', '1234', 1),
(3, 'seema', 'seema', '1234', 1),
(7, 'Pallavi Thorat', 'pallavi', '4321', 1),
(8, 'Sayali mogal', 'sayali@gmail.com', '4567', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

DROP TABLE IF EXISTS `wallet`;
CREATE TABLE IF NOT EXISTS `wallet` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `balance` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `user_id`, `balance`) VALUES
(1, 2, '400'),
(2, 7, '600'),
(3, 8, '600');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
