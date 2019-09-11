-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 03:38 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notice`
--

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `userid` int(11) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Category` varchar(5) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Date` date NOT NULL,
  `View` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`userid`, `Subject`, `Category`, `Semester`, `Date`, `View`) VALUES
(1, 'Seating Plan for End Semester', 'All', 0, '2019-04-13', '../../Notices/Seating_Plan(END(EVEN)SEMESTER2018-19).pdf'),
(1, 'Schedule for End Semester', 'All', 0, '2019-04-13', '../../Notices/schedule(END(EVEN)SEMESTER2018-19).pdf'),
(1, 'Mini Project Evaluation', 'MCA', 4, '2019-04-13', '../../Notices/Mini_Project_Evaluation.pdf'),
(1, 'Project', 'BTech', 1, '2019-04-15', '../../Notices/06917356.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Course` varchar(6) NOT NULL,
  `Year` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `Name`, `Course`, `Year`) VALUES
(9, '2017CA12', 'aish1996', 'Aishwarya Sadana', 'MCA', 2),
(10, '2017CA59', 'mansi123', 'Mansi Sharma', 'MCA', 2),
(11, '2017CA79', '123456', 'Mansi Sharma', 'MCA', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
