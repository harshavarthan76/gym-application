-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2017 at 08:01 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorapp`
--

CREATE TABLE `log` (
     `gym_id` varchar(60) NOT NULL,
  `name` varchar(40) NOT NULL,
  `in_time` time NOT NULL,
  `out_time` time NOT NULL,
  `current_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --
-- Dumping data for table `log`
--

INSERT INTO `log` (`gym_id`, `name`, `in_time`, `out_time`,`current_date`) VALUES
('201','Raj', '00:06:04', '00:07:58','24-04-2021' ),
('202','Ram', '00:17:44', '00:19:13','21-01-2021'  ),
('203','Arjun', '09:56:03', '10:01:12','11-03-2021'  );

-- --------------------------------------------------------















COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
