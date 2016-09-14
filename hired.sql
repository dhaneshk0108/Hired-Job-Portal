-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2015 at 08:21 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hired`
--

-- --------------------------------------------------------

--
-- Table structure for table `companydetails`
--

CREATE TABLE IF NOT EXISTS `companydetails` (
  `Id` int(11) NOT NULL,
  `CompanyName` varchar(20) DEFAULT NULL,
  `CompanyDescription` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companydetails`
--

INSERT INTO `companydetails` (`Id`, `CompanyName`, `CompanyDescription`) VALUES
(1, 'ibm', 'The IBM is a multinational technology and consulting corporation.'),
(2, 'verizon', 'Verizon Communications Inc., is an American broadband and  \r\ntelecommunications company.'),
(3, 'AT&T', 'AT&T Inc. is an American multinational telecom corporation.'),
(4, 'adp', 'adp adp adp adp adp adp adp adp adp adp adp adp adp adp adp adp adp adp adp adp adp adp adp adp adp adp adp adp adp adp '),
(5, 'name', ''),
(6, 'name', ''),
(7, 'name', ''),
(8, 'name', ''),
(9, 'name', ''),
(10, 'name', 'rvs is a customer service support company which is 24x7'),
(11, 'name', 'rvs is a customer service support company which is 24x7'),
(12, 'name', 'rvs is a customer service support company which is 24x7'),
(13, 'name', 'company description'),
(14, 'name', 'company description'),
(15, 'name', 'company description'),
(16, 'name', 'company description'),
(17, 'name', 'company description'),
(23, 'name', 'IT company'),
(24, 'hcl', 'IT company'),
(25, 'hcl', 'IT company'),
(26, 'hcl', 'IT company'),
(27, 'hcl', 'IT company'),
(28, 'hcl', 'hcl technologies'),
(29, 'hcl', 'support,BPO'),
(30, 'hcl', 'support,BPO'),
(31, 'hcl', 'support,BPO');

-- --------------------------------------------------------

--
-- Table structure for table `employerdetails`
--

CREATE TABLE IF NOT EXISTS `employerdetails` (
  `PersonId` int(11) NOT NULL,
  `CompanyId` int(11) NOT NULL,
  `JobId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employerdetails`
--

INSERT INTO `employerdetails` (`PersonId`, `CompanyId`, `JobId`) VALUES
(4, 1, 1),
(5, 2, 2),
(6, 3, 3),
(4, 1, 4),
(15, 4, 5),
(31, 24, 25),
(31, 25, 26),
(31, 26, 27),
(31, 27, 28),
(33, 28, 29);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE IF NOT EXISTS `guest` (
  `EmailId` varchar(40) DEFAULT NULL,
  `JobId` int(11) NOT NULL,
  `Data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobdetails`
--

CREATE TABLE IF NOT EXISTS `jobdetails` (
  `Id` int(11) NOT NULL,
  `JobTitle` varchar(30) DEFAULT NULL,
  `Location` varchar(40) DEFAULT NULL,
  `JobTypeId` int(11) NOT NULL,
  `Description` varchar(600) DEFAULT NULL,
  `Vacancies` int(11) DEFAULT NULL,
  `Experience` varchar(30) DEFAULT NULL,
  `Salary` varchar(30) DEFAULT NULL,
  `StatusId` int(11) NOT NULL,
  `JobPostedDate` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobdetails`
--

INSERT INTO `jobdetails` (`Id`, `JobTitle`, `Location`, `JobTypeId`, `Description`, `Vacancies`, `Experience`, `Salary`, `StatusId`, `JobPostedDate`) VALUES
(1, 'software engineer', 'NY', 1, 'develop code', 20, '1-2', '68000', 1, '2015-05-01'),
(2, 'Network  \r\nengineer', 'NJ', 2, 'troubleshoot network', 15, '5', '70000', 1, '2015-02-02'),
(3, 'supervisor', 'NY', 3, 'supervising, managing people', 10, '7', '80000', 2, '2015-04-08'),
(4, 'test  \r\nengineer', 'NJ', 1, 'test codes in the production', 5, '0-1', '55000', 3, '2015-02-14'),
(5, 'business analyst', 'new york', 4, 'sample sample sample', 25, '7-8', '95000', 1, '2015-05-15'),
(11, 'support engineer', 'poughkeepsie', 1, 'attend calls, monitor defects', 15, '0', '60000', 1, '0000-00-00'),
(12, 'support engineer', 'poughkeepsie', 1, 'attend calls, monitor defects', 15, '0', '60000', 1, '0000-00-00'),
(13, 'support engineer', 'poughkeepsie', 1, 'attend calls, monitor defects', 15, '0', '60000', 1, '0000-00-00'),
(14, 'software engineer', 'NY', 1, 'coding testing and maintenence', 5, '5', '50000', 1, '0000-00-00'),
(16, 'software engineer', 'NY', 1, 'coding testing and maintenence', 5, '5', '50000', 1, '2015-05-15'),
(17, 'software engineer', 'NY', 1, 'coding testing and maintenence', 5, '5', '50000', 1, '2015-05-15'),
(18, 'software engineer', 'NY', 1, 'coding testing and maintenence', 5, '5', '50000', 2, '2015-05-15'),
(19, 'software engineer', 'NY', 1, 'coding testing and maintenence', 5, '5', '50000', 1, '2015-05-15'),
(20, 'dummy', 'NJ', 5, 'dummy', 2, '3', '50000', 1, '2015-05-15'),
(21, 'dummy', 'NJ', 5, 'dummy', 2, '3', '50000', 1, '2015-05-15'),
(22, 'dummy', 'NJ', 5, 'dummy', 2, '3', '50000', 1, '2015-05-15'),
(23, 'dummy', 'NJ', 5, 'dummy', 2, '3', '50000', 1, '2015-05-15'),
(24, 'dummy', 'NJ', 5, 'dummy', 2, '3', '50000', 1, '2015-05-15'),
(25, 'dummy', 'NJ', 5, 'dummy', 2, '3', '50000', 1, '2015-05-15'),
(26, 'dummy', 'NJ', 5, 'dummy', 2, '3', '50000', 1, '2015-05-15'),
(27, 'dummy', 'NJ', 5, 'dummy', 2, '3', '50000', 1, '2015-05-15'),
(28, 'dummy', 'NJ', 5, 'dummy', 2, '3', '50000', 1, '2015-05-15'),
(29, 'software developer', 'new york', 1, 'coding and testing', 20, '5-7', '150000', 1, '2015-05-15'),
(30, 'customer service', 'NJ', 1, 'attend calls', 5, '2', '50000', 1, '2015-05-15'),
(31, 'customer service', 'NJ', 1, 'attend calls', 5, '2', '50000', 1, '2015-05-15'),
(32, 'customer service', 'NY', 1, 'attend calls, monitor defects', 20, '2', '50000', 1, '2015-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `jobsapplied`
--

CREATE TABLE IF NOT EXISTS `jobsapplied` (
  `PersonId` int(11) NOT NULL,
  `JobId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobsapplied`
--

INSERT INTO `jobsapplied` (`PersonId`, `JobId`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 4),
(3, 1),
(23, 5);

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE IF NOT EXISTS `jobseeker` (
  `PersonId` int(11) NOT NULL,
  `Data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`PersonId`, `Data`) VALUES
(5, ''),
(1, ''),
(21, 0x42534e4c2062696c6c0d0a2d2d2d2d2d2d2d2d2d0d0a0d0a687474703a2f2f706f7274616c2e62736e6c2e696e2f706f7274616c2f6173707866696c65732f6c6f67696e2e617370780d0a0d0a67697665206c6f67696e2064657461696c730d0a0d0a636c69636b206f6e2022506179206e6f77220d0a0d0a),
(21, 0x42534e4c2062696c6c0d0a2d2d2d2d2d2d2d2d2d0d0a0d0a687474703a2f2f706f7274616c2e62736e6c2e696e2f706f7274616c2f6173707866696c65732f6c6f67696e2e617370780d0a0d0a67697665206c6f67696e2064657461696c730d0a0d0a636c69636b206f6e2022506179206e6f77220d0a0d0a),
(22, 0x42534e4c2062696c6c0d0a2d2d2d2d2d2d2d2d2d0d0a0d0a687474703a2f2f706f7274616c2e62736e6c2e696e2f706f7274616c2f6173707866696c65732f6c6f67696e2e617370780d0a0d0a67697665206c6f67696e2064657461696c730d0a0d0a636c69636b206f6e2022506179206e6f77220d0a0d0a);

-- --------------------------------------------------------

--
-- Table structure for table `jobstatus`
--

CREATE TABLE IF NOT EXISTS `jobstatus` (
  `Id` int(11) NOT NULL,
  `StatusType` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobstatus`
--

INSERT INTO `jobstatus` (`Id`, `StatusType`) VALUES
(1, 'open'),
(2, 'paused'),
(3, 'closed');

-- --------------------------------------------------------

--
-- Table structure for table `jobtype`
--

CREATE TABLE IF NOT EXISTS `jobtype` (
  `Id` int(11) NOT NULL,
  `Type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobtype`
--

INSERT INTO `jobtype` (`Id`, `Type`) VALUES
(1, 'IT services'),
(2, 'Network'),
(3, 'Civil'),
(4, 'Electronics'),
(5, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(30) DEFAULT NULL,
  `LastName` varchar(30) DEFAULT NULL,
  `EmailId` varchar(40) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `PersonType` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Id`, `FirstName`, `LastName`, `EmailId`, `Password`, `PersonType`) VALUES
(1, 'dhanesh', 'kumar', 'dhaneshk@gmail.com', 'asdfg123', ''),
(2, 'rohit', 'karra', 'rohit.k@yahoo.com', 'india12345', ''),
(3, 'vineet', 'paladi', 'paladi@gmail.com', 'Vineet@', ''),
(4, 'Ian', 'becker', 'ian.b@marist.edu', 'kittydb', ''),
(5, 'vishal', 'k', 'vishal01@gmail.com', 'thewishal', ''),
(6, 'sai', 'ram', 'sairam1@yahoo.com', 'password', ''),
(7, 'rohit', 'salpe', 'rohit.salpe@gmail.com', '123456', ''),
(11, 'dhanesh kumar', 'chandrasekaran', 'dhaneshrvs@gmail.com', '12345678', 'jobseeker'),
(15, 'pritesh', 'g', 'pritz@gmail.com', '12345678', ''),
(17, 'dan', 'kumar', 'dankumar@yahoo.com', '12345678', 'employer'),
(18, 'hari', 'prasad', 'hari.p@gmail.com', 'hsenahdk', ''),
(19, 'rahul', 's', 'rahuls@gmail.com', 'asdasdasd', ''),
(20, 'dinesh', 'm', 'dm@gmail.com', '12345678', ''),
(21, 'chandra', 'k', 'chandrak@gmail.com', '1234567890', ''),
(22, 'harinath', 'h', 'hari@gmail.com', '12345678', ''),
(23, '', '', '', '', ''),
(27, 'kaladevi', 'c', 'devikala@gmail.com', 'chandrasekaran', ''),
(30, 'sangetha', 'r', 'sangee@yahoo.com', '12345678', ''),
(31, 'dine', 'mande', 'din.m@gmail.com', '456789123', ''),
(33, 'employer', 'employer', 'employer@gmail.com', '12345678', 'employer');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE IF NOT EXISTS `phone` (
  `PhoneId` int(11) NOT NULL,
  `PersonId` int(11) NOT NULL,
  `Number` int(11) DEFAULT NULL,
  `Prefered` char(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`PhoneId`, `PersonId`, `Number`, `Prefered`) VALUES
(1, 1, 2147483647, 'n'),
(2, 1, 2147483647, 'y'),
(3, 2, 2147483647, 'y'),
(4, 5, 2147483647, 'y'),
(5, 6, 2147483647, 'n'),
(22, 21, 2147483647, 'Y'),
(25, 22, 2147483647, 'Y'),
(26, 22, 2147483647, 'N'),
(27, 23, 0, 'N'),
(37, 27, 2147483647, 'Y'),
(38, 27, 2147483647, 'N'),
(43, 30, 2147483647, 'Y'),
(44, 30, 2147483647, 'N'),
(55, 31, 2147483647, 'Y'),
(56, 31, 2147483647, 'N'),
(57, 33, 2147483647, 'Y'),
(58, 33, 2147483647, 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companydetails`
--
ALTER TABLE `companydetails`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `employerdetails`
--
ALTER TABLE `employerdetails`
  ADD KEY `EmployerDetails_JobDetails_FK` (`JobId`), ADD KEY `EmployerDetails_Person_FK` (`PersonId`), ADD KEY `Employer_CompanyDetails_FK` (`CompanyId`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD KEY `Guest_JobDetails_FK` (`JobId`);

--
-- Indexes for table `jobdetails`
--
ALTER TABLE `jobdetails`
  ADD PRIMARY KEY (`Id`), ADD KEY `JobDetails_JobStatus_FK` (`StatusId`), ADD KEY `JobDetails_JobType_FK` (`JobTypeId`);

--
-- Indexes for table `jobsapplied`
--
ALTER TABLE `jobsapplied`
  ADD KEY `JobsApplied_JobDetails_FK` (`JobId`), ADD KEY `JobsApplied_Person_FK` (`PersonId`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD KEY `JobSeeker_Person_FK` (`PersonId`);

--
-- Indexes for table `jobstatus`
--
ALTER TABLE `jobstatus`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `jobtype`
--
ALTER TABLE `jobtype`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Id`), ADD UNIQUE KEY `EmailId` (`EmailId`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`PhoneId`), ADD UNIQUE KEY `Phone__UN` (`PersonId`,`Prefered`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companydetails`
--
ALTER TABLE `companydetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `jobdetails`
--
ALTER TABLE `jobdetails`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `jobstatus`
--
ALTER TABLE `jobstatus`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jobtype`
--
ALTER TABLE `jobtype`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `PhoneId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employerdetails`
--
ALTER TABLE `employerdetails`
ADD CONSTRAINT `EmployerDetails_JobDetails_FK` FOREIGN KEY (`JobId`) REFERENCES `jobdetails` (`Id`),
ADD CONSTRAINT `EmployerDetails_Person_FK` FOREIGN KEY (`PersonId`) REFERENCES `person` (`Id`),
ADD CONSTRAINT `Employer_CompanyDetails_FK` FOREIGN KEY (`CompanyId`) REFERENCES `companydetails` (`Id`);

--
-- Constraints for table `guest`
--
ALTER TABLE `guest`
ADD CONSTRAINT `Guest_JobDetails_FK` FOREIGN KEY (`JobId`) REFERENCES `jobdetails` (`Id`);

--
-- Constraints for table `jobdetails`
--
ALTER TABLE `jobdetails`
ADD CONSTRAINT `JobDetails_JobStatus_FK` FOREIGN KEY (`StatusId`) REFERENCES `jobstatus` (`Id`),
ADD CONSTRAINT `JobDetails_JobType_FK` FOREIGN KEY (`JobTypeId`) REFERENCES `jobtype` (`Id`);

--
-- Constraints for table `jobsapplied`
--
ALTER TABLE `jobsapplied`
ADD CONSTRAINT `JobsApplied_JobDetails_FK` FOREIGN KEY (`JobId`) REFERENCES `jobdetails` (`Id`),
ADD CONSTRAINT `JobsApplied_Person_FK` FOREIGN KEY (`PersonId`) REFERENCES `person` (`Id`);

--
-- Constraints for table `jobseeker`
--
ALTER TABLE `jobseeker`
ADD CONSTRAINT `JobSeeker_Person_FK` FOREIGN KEY (`PersonId`) REFERENCES `person` (`Id`);

--
-- Constraints for table `phone`
--
ALTER TABLE `phone`
ADD CONSTRAINT `Phone_Person_FK` FOREIGN KEY (`PersonId`) REFERENCES `person` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
