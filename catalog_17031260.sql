-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 07:30 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `companyinfo`
--

CREATE TABLE `companyinfo` (
  `S.N.` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `URL` varchar(100) NOT NULL,
  `Contact` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companyinfo`
--

INSERT INTO `companyinfo` (`S.N.`, `Name`, `Address`, `URL`, `Contact`) VALUES
(1, 'NabiNStack Infotech', 'New Baneshwor, Kathmandu Nepal', 'www.anonstackedu.com', '+01 43122344');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dep_ID` varchar(50) NOT NULL,
  `Dep_Name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dep_ID`, `Dep_Name`, `location`) VALUES
('HR06', 'Human Resource Department,', 'Kathmandu'),
('MBL03', 'Web Development,', 'Kathmandu'),
('MR02', 'Marketing Department,', 'Bhaktapur'),
('RD05', 'Research and Development,', 'Lalitpur'),
('WEB01', 'Mobile Development,', 'Lalitpur');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_ID` varchar(50) NOT NULL,
  `Emp_Title` varchar(100) NOT NULL,
  `Emp_Name` varchar(100) NOT NULL,
  `Emp_JobTitle` varchar(100) NOT NULL,
  `Emp_Contact` varchar(100) NOT NULL,
  `Emp_Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_ID`, `Emp_Title`, `Emp_Name`, `Emp_JobTitle`, `Emp_Contact`, `Emp_Email`) VALUES
('AK022', 'Mr.', 'Nabin Khadka', 'Supervisor', '+977 9865098777', 'nabin4345@gmail.com'),
('AS015', 'Mrs.', 'Anita Shrestha', 'Marketing Manager', '+977 9867564323', 'anit@yahoo.com.uk'),
('BP091', 'Mr.', 'Bilab Dhungana', 'Branch Manager', '+977 987666709', 'bips@gmail.com'),
('M4012', 'Mrs.', 'Sona Khadka', 'Project Manager', '+977 9871367781', 'sonakha234345@gmail.com'),
('SK021', 'Mr.', 'Sujit Khadka', 'HR Manager', '+977 987656789', 'sujitk@gmail.com.np');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `S.N.` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`S.N.`, `Name`, `Category`, `Description`) VALUES
(1, 'www.ECashhelp.com', 'web', 'www.ECashhelp.com\", is an Online payment getway in Nepal.'),
(2, 'Nabin gym fitness center app', 'mob', 'Nabin gym fitness center app is an system management app, that maintains the customer records.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companyinfo`
--
ALTER TABLE `companyinfo`
  ADD PRIMARY KEY (`S.N.`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dep_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`S.N.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companyinfo`
--
ALTER TABLE `companyinfo`
  MODIFY `S.N.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `S.N.` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
