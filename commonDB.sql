-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 09:41 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `commondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwordd` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `email`, `passwordd`, `bdate`, `nationality`, `gender`, `nid`) VALUES
('Hasibur', 'Rahman', 'hasibur@gm.com', '123456789', '1998-02-02', 'bangladeshi', 'male', 123456789),
('', '', '', '', '0000-00-00', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `Names` varchar(20) NOT NULL,
  `id` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `username` text NOT NULL,
  `passwordd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`Names`, `id`, `age`, `username`, `passwordd`) VALUES
('Hasibur Rahman', '181-15-1777', 21, 'hasibur1777', '123'),
('Hasibur', '181151777', 22, 'hasib', '1234'),
('Student3', '3', 21, 'student3', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
