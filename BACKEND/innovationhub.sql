-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 04:54 PM
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
-- Database: `innovationhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogindata`
--

CREATE TABLE `adminlogindata` (
  `username` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogindata`
--

INSERT INTO `adminlogindata` (`username`, `password`) VALUES
('', ''),
('narendra', '123'),
('nandu', '123'),
('nandu', '123'),
('hari', '123'),
('hari', '123'),
('hp', '123'),
('lakshmi', '123'),
('moksha', '123');

-- --------------------------------------------------------

--
-- Table structure for table `formdata`
--

CREATE TABLE `formdata` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formdata`
--

INSERT INTO `formdata` (`firstname`, `lastname`, `email`, `message`) VALUES
('lakshmi', 'mohan', 'jemsgaming73@gmail.com', 'kkk\r\n'),
('moksha', 'moksha', 'anushayagatila@gmail.com', 'i am interested');

-- --------------------------------------------------------

--
-- Table structure for table `meetingdetails`
--

CREATE TABLE `meetingdetails` (
  `place` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `purpose` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meetingdetails`
--

INSERT INTO `meetingdetails` (`place`, `date`, `time`, `purpose`) VALUES
('svgp,basketball court', '0000-00-00', '00:00:17.000000', 'about nba work'),
('svgp,basketball court', '0000-00-00', '00:00:17.000000', 'about nba work'),
('svgp,basketball court', '0000-00-00', '00:00:17.000000', 'about nba work'),
('svgp,basketball court', '0000-00-00', '00:00:17.000000', 'about nba work'),
('svgp,basketball court', '0000-00-00', '00:00:14.000000', 'kkkk'),
('kkk', '0000-00-00', '00:00:22.000000', 'kkkk'),
('kkk', '0000-00-00', '00:00:22.000000', 'thujkfdkfoj'),
('', '0000-00-00', '00:00:00.000000', ''),
('', '0000-00-00', '00:00:00.000000', ''),
('', '0000-00-00', '00:00:00.000000', ''),
('svgp,basketball court', '2023-12-11', '15:20:00.000000', 'kkkkkkkk'),
('svgp,basketball court', '2023-12-12', '14:51:00.000000', 'lllll');

-- --------------------------------------------------------

--
-- Table structure for table `memberdata`
--

CREATE TABLE `memberdata` (
  `image` varchar(100) NOT NULL,
  `name` varchar(70) NOT NULL,
  `description` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Username` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Repassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Username`, `Email`, `Contact`, `Password`, `Repassword`) VALUES
('narendra', 'narendra@gmail.com', '8309377748', '123', '123'),
('lakshmi', 'mohan@gmail.com', '9948953073', '1234', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
