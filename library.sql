-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 05:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `B_CODE` varchar(15) NOT NULL,
  `BOOK_NAME` char(25) NOT NULL,
  `BOOK_AUTHOR` char(25) NOT NULL,
  `BOOK_TYPE` varchar(20) NOT NULL,
  `BOOK_PRICE` int(11) NOT NULL,
  `STATUS` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`B_CODE`, `BOOK_NAME`, `BOOK_AUTHOR`, `BOOK_TYPE`, `BOOK_PRICE`, `STATUS`) VALUES
('a1111', 'urtiam', 'rithung sythr', 'anglesd', 500, 'available'),
('d11', 'ggggg', 'jjjj', 'ggggg', 222, 'booked');

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE `borrower` (
  `B_ID` varchar(15) NOT NULL,
  `B_NAME` char(25) NOT NULL,
  `B_PHNO` varchar(25) NOT NULL,
  `B_ADDR` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`B_ID`, `B_NAME`, `B_PHNO`, `B_ADDR`, `password`) VALUES
('rajath', 'Rajath', '1234567897', 'molahalli', 'rajath'),
('root', 'root', '1234567897', 'hhhh', 'root'),
('toor', 'rajath', '1234567897', 'hhhh', 'toor');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `B_CODE` varchar(30) NOT NULL,
  `B_ID` varchar(30) NOT NULL,
  `issue_date` varchar(30) NOT NULL,
  `due_date` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`B_CODE`, `B_ID`, `issue_date`, `due_date`, `status`) VALUES
('A11', 'admin', '16/01/2023', 'Jan 23, 2023', 'approved'),
('B1001', 'root', '', '', 'rejected'),
('m11', 'root', '16/01/2023', 'Jan 23, 2023', 'approved'),
('m11', 'rajath', '16/01/2023', 'Jan 23, 2023', 'approved'),
('d11', 'toor', '16/01/2023', 'Jan 23, 2023', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `written by`
--

CREATE TABLE `written by` (
  `B_CODE` varchar(15) NOT NULL,
  `A_ID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`B_CODE`),
  ADD KEY `INDEX` (`STATUS`);

--
-- Indexes for table `borrower`
--
ALTER TABLE `borrower`
  ADD PRIMARY KEY (`B_ID`);

--
-- Indexes for table `written by`
--
ALTER TABLE `written by`
  ADD PRIMARY KEY (`B_CODE`,`A_ID`),
  ADD KEY `B_CODE` (`B_CODE`),
  ADD KEY `A_ID` (`A_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
