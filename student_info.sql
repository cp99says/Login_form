-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 07:39 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `user_id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `surname` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`user_id`, `name`, `surname`, `username`, `password`) VALUES
(3, 'chetan', 'pareek', 'root', 'rooty1'),
(6, 'vikram', 'singh', 'vikkydoit', 'v4viks'),
(10, 'dell', 'sharma', 'delly', '5558'),
(16, 'ak', 'kakaka', 'iokl', 'ikjum'),
(31, 'chetan', 'baba', 'baba', 'cp'),
(32, 'bhalu', 'bhalu', 'flame', 'flamy1'),
(33, 'cheta', 'yoyo', 'himan', 'srmisgood'),
(34, 'cheta', 'yoyo', 'himan', 'cfcf'),
(35, 'cheta', 'yoyo', 'himan', 'cfcf'),
(36, 'bhhh', 'jujuhj', 'kaka', 'jaja'),
(37, 'bhhh', 'jujuhj', 'kaka', 'jaja'),
(38, 'jkjk', 'kaka', 'juju', 'nbnb'),
(39, 'saksham', 'thareja', 'tyty', '1212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
