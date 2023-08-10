-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 07:50 AM
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
-- Database: `design_thinking_csd`
--

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `scrto` varchar(10) NOT NULL,
  `scrby` varchar(10) NOT NULL,
  `team` int(10) NOT NULL,
  `score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`scrto`, `scrby`, `team`, `score`) VALUES
('22B91A6202', '22B91A6202', 1, 0),
('22B91A6202', '22B91A6207', 1, 30),
('22B91A6202', '22B91A6209', 1, 1),
('22B91A6202', '22B91A6222', 1, 20),
('22B91A6202', '22B91A6250', 1, 20),
('22B91A6207', '22B91A6202', 1, 60),
('22B91A6207', '22B91A6207', 1, 0),
('22B91A6207', '22B91A6209', 1, 40),
('22B91A6207', '22B91A6222', 1, 50),
('22B91A6207', '22B91A6250', 1, 40),
('22B91A6208', '22B91A6208', 2, 0),
('22B91A6208', '22B91A6232', 2, 30),
('22B91A6208', '22B91A6238', 2, 0),
('22B91A6208', '22B91A6242', 2, 0),
('22B91A6208', '22B91A6254', 2, 0),
('22B91A6209', '22B91A6202', 1, 20),
('22B91A6209', '22B91A6207', 1, 30),
('22B91A6209', '22B91A6209', 1, 0),
('22B91A6209', '22B91A6222', 1, 15),
('22B91A6209', '22B91A6250', 1, 20),
('22B91A6222', '22B91A6202', 1, 10),
('22B91A6222', '22B91A6207', 1, 20),
('22B91A6222', '22B91A6209', 1, 20),
('22B91A6222', '22B91A6222', 1, 0),
('22B91A6222', '22B91A6250', 1, 20),
('22B91A6232', '22B91A6208', 2, 100),
('22B91A6232', '22B91A6232', 2, 0),
('22B91A6232', '22B91A6238', 2, 100),
('22B91A6232', '22B91A6242', 2, 100),
('22B91A6232', '22B91A6254', 2, 100),
('22B91A6238', '22B91A6208', 2, 0),
('22B91A6238', '22B91A6232', 2, 30),
('22B91A6238', '22B91A6238', 2, 0),
('22B91A6238', '22B91A6242', 2, 0),
('22B91A6238', '22B91A6254', 2, 0),
('22B91A6242', '22B91A6208', 2, 0),
('22B91A6242', '22B91A6232', 2, 20),
('22B91A6242', '22B91A6238', 2, 0),
('22B91A6242', '22B91A6242', 2, 0),
('22B91A6242', '22B91A6254', 2, 0),
('22B91A6250', '22B91A6202', 1, 10),
('22B91A6250', '22B91A6207', 1, 20),
('22B91A6250', '22B91A6209', 1, 30),
('22B91A6250', '22B91A6222', 1, 15),
('22B91A6250', '22B91A6250', 1, 0),
('22B91A6254', '22B91A6208', 2, 0),
('22B91A6254', '22B91A6232', 2, 20),
('22B91A6254', '22B91A6238', 2, 0),
('22B91A6254', '22B91A6242', 2, 0),
('22B91A6254', '22B91A6254', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `regno` varchar(10) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `team` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`regno`, `student_name`, `team`) VALUES
('22B91A6201', 'Meghana', 6),
('22B91A6202', 'B. Joseph Kumar', 1),
('22B91A6203', 'Lakshman ', 12),
('22B91A6204', 'B.Avinash', 3),
('22B91A6205', 'Hima sri ', 4),
('22B91A6206', 'B.Tejesh', 3),
('22B91A6207', 'Ch. Rajesh', 1),
('22B91A6208', 'Abhiram', 2),
('22B91A6209', 'Ch.Teja Rupak', 1),
('22B91A6210', 'Varsha ', 4),
('22B91A6211', 'D.Revathi ', 6),
('22B91A6212', 'G.Abhinay', 3),
('22B91A6213', 'G.Bhargavi', 9),
('22B91A6214', 'Navya ', 4),
('22B91A6215', 'Priya', 6),
('22B91A6216', 'J.Sanjani', 9),
('22B91A6217', 'Pavan teja', 10),
('22B91A6218', 'Sindhu   ', 7),
('22B91A6219', 'Rishitha ', 7),
('22B91A6220', 'Snigdha ', 9),
('22B91A6221', 'K.Teja Siddardha', 3),
('22B91A6222', ' K. Surya Prakash', 1),
('22B91A6223', 'Yashwanth', 11),
('22B91A6224', 'Stephen', 10),
('22B91A6225', 'Shyam Babu', 12),
('22B91A6226', 'Vishnu', 12),
('22B91A6227', 'Sandeep', 11),
('22B91A6228', 'Lvs.Nikitha', 9),
('22B91A6229', 'M.Akshaya ', 8),
('22B91A6230', 'Mounika ', 4),
('22B91A6231', 'M.Jahnavi', 8),
('22B91A6232', 'Rohith', 2),
('22B91A6233', 'Balu', 10),
('22B91A6234', 'Sandilya', 12),
('22B91A6235', 'M.Manoj Varma ', 5),
('22B91A6236', 'Hema     ', 7),
('22B91A6237', 'Nikhil', 11),
('22B91A6238', 'Rama', 2),
('22B91A6239', 'P.Ganesh ', 5),
('22B91A6240', 'P.Somu', 3),
('22B91A6241', 'Shannu', 10),
('22B91A6242', 'Bharath', 2),
('22B91A6243', 'Ram Ganesh', 11),
('22B91A6244', 'Gayatri   ', 7),
('22B91A6245', 'P.Durgabhavani', 8),
('22B91A6246', 'Krishna vamsi', 11),
('22B91A6247', 'P.Jnaneswari', 8),
('22B91A6248', ' R.Charwak', 5),
('22B91A6249', 'Narendra', 10),
('22B91A6250', 'Sk.Ahmed', 1),
('22B91A6251', 'Karimunnisa ', 6),
('22B91A6252', 'Veera raghava', 4),
('22B91A6253', 'U. Divya', 9),
('22B91A6254', 'Manoj', 2),
('22B91A6255', 'Swapanth', 12),
('22B91A6256', 'V.Gnana sekhar ', 5),
('22B91A6257', 'V.Srinadh ', 5),
('22B91A6258', 'Pradeepthi', 6),
('22B91A6259', 'V.Manasa', 8);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` int(4) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_mentor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_name`, `team_mentor`) VALUES
(1, 'ULTRA DESIGNERS', 'Sanjay'),
(2, 'Eagles', 'Prudhvi '),
(3, 'Brainly Buddies', 'Ravi Kumar'),
(4, 'Amigos', 'Anusha'),
(5, 'warriors', 'Rohith '),
(6, 'The Creators', 'Revathi '),
(7, 'Tech Elites\r\n', 'chaitanya srujana '),
(8, 'Smart crew', 'Sahithi Pallavi'),
(9, 'Tech turtles\r\n', 'Suresh sir'),
(10, 'SUPER KINGS', 'Karthik'),
(11, 'SVYRN', 'Siva Sai'),
(12, 'Titans', 'Siva mani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`scrto`,`scrby`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
