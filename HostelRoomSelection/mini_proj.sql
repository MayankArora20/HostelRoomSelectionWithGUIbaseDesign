-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 06:42 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `Name` varchar(40) NOT NULL primary key,
  `Total_Room` int(11) NOT NULL,
  `Total_Floor` int(11) NOT NULL,
  `Floor_Room` int(11) NOT NULL,
  `Mess` int(11) NOT NULL,
  `Canteen` int(11) NOT NULL,
  `Games` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`Name`, `Total_Room`, `Total_Floor`, `Floor_Room`, `Mess`, `Canteen`, `Games`) VALUES
('Swami Vivekanand Boys Hostel', 273, 7, 39, 2, 2, 14);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `admin` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `hostel` varchar(40) NOT NULL,
  FOREIGN KEY (`hostel`) References hostel(`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `login`
--

INSERT INTO `admin` VALUES
('bittu', '123','Swami Vivekanand Boys Hostel'),
('mayank', '111','Swami Vivekanand Boys Hostel');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `registration_num` varchar(8) NOT NULL primary key,
  `student_name` varchar(30) NOT NULL,
  `exam` varchar(6) NOT NULL,
  `course` varchar(3) NOT NULL,
  `branch` varchar(15) NOT NULL,
  `DOB` date NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `Address` varchar(90) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Fathers Name` varchar(30) NOT NULL,
  `Fathers Mob` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;



-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (roomNo int primary key, availability int,
           reg1 varchar(8), reg2 varchar(8),reg3 varchar(8),
   `hostel` varchar(40) NOT NULL,
  foreign key (hostel) REFERENCES hostel(Name),
  foreign key (reg1) REFERENCES student(registration_num),
  foreign key (reg2) REFERENCES student(registration_num),
  foreign key (reg3) REFERENCES student(registration_num)
  )
 ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `room`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
