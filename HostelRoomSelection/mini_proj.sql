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
  `Name` varchar(40) NOT NULL,
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

CREATE TABLE `login` (
  `id` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `password`) VALUES
('bittu', '123'),
('mayank', '111');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `regno` varchar(20) NOT NULL,
  `roomno` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`regno`, `roomno`, `name`) VALUES
('2017ca52', 111, 'Bittu kumar'),
('2017ca51', 107, 'sriram'),
('2017CA25', 112, 'mubashhsir ahmad'),
('2017CA21', 107, 'lokesh'),
('2017CA21', 107, 'lokesh');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `registration_num` varchar(8) NOT NULL,
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
  `Fathers Mob` bigint(10) NOT NULL,
  `Room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`registration_num`, `student_name`, `exam`, `course`, `branch`, `DOB`, `Mobile`, `Address`, `City`, `State`, `Country`, `Email`, `Fathers Name`, `Fathers Mob`, `Room`) VALUES
('2017CA21', 'lokesh', 'NIMCET', 'MCA', '', '1992-02-02', 9410236114, 'jila khagarya bihar', 'muzaffarpur', 'bihar', 'INDIA', 'lokeshchutya@gmail.com', 'mujhe nhi pata', 9898649641, 107),
('2017CA25', 'mubashhsir ahmad', 'NIMCET', 'MCA', '', '1992-02-02', 9410236114, 'jila khagarya bihar', 'muzaffarpur', 'bihar', 'INDIA', 'lokeshchutya@gmail.com', 'mujhe nhi pata', 9898649641, 112),
('2017ca51', 'sriram', 'NIMET', 'MCA', 'ddd', '2000-10-10', 7317778274, 'tilak hostel,mnnit(room no-222), mnnit allahabad', 'ALLAHABAD', 'mnnit', 'India', 'bittukumarmnnit@gmail.com', 'RAMAN', 7317778274, 107),
('2017ca52', 'Bittu kumar', 'NIMET', 'MCA', 'ddd', '2000-10-10', 7317778274, 'tilak hostel,mnnit(room no-222), mnnit allahabad', 'ALLAHABAD', 'mnnit', 'India', 'bittukumarmnnit@gmail.com', 'Vipin Choudhary', 7317778274, 111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`registration_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
