-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 05:05 AM
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `FAID` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` bigint(15) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `HOD_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`FAID`, `Name`, `Email`, `Phone`, `Department`, `Designation`, `Semester`, `HOD_ID`) VALUES
('FC0M13', 'Andrew Smith', 'andrew.smith@email.com', 2234526354, 'Civil Engineering', 'Professor', 'S1', 'FCIVIL016'),
('FC0N14', 'Lauren Davis', 'lauren.davis@email.com', 1232341111, 'Civil Engineering', 'Associate Professor', 'S3', 'FCIVIL016'),
('FC0O15', 'Christopher Miller', 'cristopher.miller@email.com', 5673452341, 'Civil Engineering', 'Assistant Professor', 'S5', 'FCIVIL016'),
('FC0P16', 'Meghan White', 'meghan.white@email.com', 234590781, 'Civil Engineering', 'Assistant Professor', 'S7', 'FCIVIL016'),
('FE0F6', 'Sarah Miller', 'sarah.miller@email.com', 8889990000, 'Mechnical Engineering', 'Associate Professor', 'S3', 'FMECH019'),
('FE0G7', 'Daniel Davis', 'daniel.davis@email.com', 4446668888, 'Mechnical Engineering', 'Assistant  Professor', 'S5', 'FMECH019'),
('FE0H8', 'Ashley Taylor', 'ashley.taylor@email.com', 2224446666, 'Mechnical Engineering', 'Assistant Professor', 'S7', 'FMECH019'),
('FE0J10', 'Olivia Brown', 'olivia.brown@email.com', 1678256739, 'Electrical and Electronics Engineering', 'Associate Professor', 'S3', 'FEEE015'),
('FE0K11', 'Samuel Green', 'samuel.green@email.com', 6784525617, 'Electrical and Electronics Engineering', 'Assistant Professor', 'S5', 'FEEE015'),
('FE0L12', 'Jessica Turner', 'jessica.turner@email.com', 4673567856, 'Electrical and Electronics Engineering', 'Assistant Professor', 'S7', 'FEEE015'),
('FE50E', 'Micheal Brown', 'micheal.brown@email.com', 3335557777, 'Mechnical Engineering', 'Professor', 'S1', 'FMECH019'),
('FEC0Q17', 'Ryan Johnson', 'ryan.johnson@email.com', 8956123987, 'Electronics and Communication Engineering', 'Professor', 'S1', 'FECE017'),
('FEC0R18', 'Taylor Wilson', 'taylor.johnson@email.com', 8976765423, 'Electronics and Communication Engineering', 'Associate Professor', 'S3', 'FECE017'),
('FEC0S19', 'Jordan Harris', 'jordan.harris@email.com', 9812782333, 'Electronics and Communication Engineering', 'Assistant Professor', 'S5', 'FECE017'),
('FEC0T20', 'Morgan Taylor', 'ryan.johnson@email.com', 8921567234, 'Electronics and Communication Engineering', 'Assistant Professor', 'S7', 'FECE017'),
('FEE0I9', 'Brian Wilson', 'brian.wilson@email.com', 5674783456, 'Electrical and Electronics Engineering', ' Professor', 'S1', 'FEEE015'),
('JS0A1', 'John Smith', 'john.smith@email.com', 1234567890, 'Computer Science and Engineering', 'Professor', 'S1', 'FCSE014'),
('JS0B2', 'Jane Doe', 'jane.doe@email.com', 9876543210, 'Computer Science and Engineering', 'Associate Professor', 'S3', 'FCSE014'),
('JS0C3', 'JRobert Johnson', 'robert.johnson@email.com', 5512345657, 'Computer Science and Engineering', 'Assistant Professor', 'S5', 'FCSE014'),
('JS0D4', 'Emily White', 'emily.white@email.com', 1122231342, 'Computer Science and Engineering', 'Associate Professor', 'S7', 'FCSE014');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `NAME` varchar(25) NOT NULL,
  `CONTACT` int(11) NOT NULL,
  `EMAIL` varchar(35) DEFAULT NULL,
  `FACULTY_ID` varchar(15) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `DEPARTMENT` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`NAME`, `CONTACT`, `EMAIL`, `FACULTY_ID`, `PASSWORD`, `DEPARTMENT`) VALUES
('ELSON JOHN', 2147483647, 'elsonjohn@gmail.com', 'FCIVIL016', 'ElsonJ016', 'Civil Engineering'),
('JOBY GEORGE', 2147483647, 'jobygeorge@gmail.com', 'FCSE014', 'George014', 'Computer Science and Engineering'),
('THOMAS GEORGE', 2147483647, 'thomasgeorge@gmail.com', 'FECE017', 'Tgeorge017', 'Electronics and Communication Engineering'),
('BEENA M VARGHESE', 2147483647, 'beenavarghese@gmail.com', 'FEEE015', 'Beenam@015', 'Electrical and Electronics Engineering'),
('BINU MARKOSE', 2147483647, 'binumarkose@gmail.com', 'FMECH019', 'BM019', 'Mechanical Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `admno` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `enrollYear` varchar(50) DEFAULT NULL,
  `semester` varchar(50) DEFAULT NULL,
  `gname` varchar(50) DEFAULT NULL,
  `gphone` varchar(50) DEFAULT NULL,
  `bgroup` varchar(50) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`admno`, `password`, `name`, `email`, `phone`, `address`, `department`, `enrollYear`, `semester`, `gname`, `gphone`, `bgroup`, `dob`) VALUES
('1234', 'abc', 'QWERTY', 'qwert@yuiop', '9999999999', 'SpaceSong', 'cs', '2099', 'S1', 'Dad', '1111111111', 'A', '2023-12-01'),
('B21CE001', 'cepass2022', 'Aiden Smith', 'aiden@email.com', '1234567890', '321 Birch St, City', 'Civil Engineering', '2020', 'S7', 'Sophie Smith', '2345678901', 'o-ve', '03-04-2002'),
('B21CE002', 'cepass123', 'Ava Martin', 'ava@email.com', '5678901234', '654 Maple St, Town', 'Civil Engineering', '2021', 'S5', 'James Martin', '3456789012', 'ab+ve', '20-09-2001'),
('B21CE003', 'cepassword123', 'Liam Wilson', 'liam@email.com', '8901234567', '987 Pine St, Village', 'Civil Engineering', '2022', 'S3', 'Ava Wilson', '9012345678', 'o+ve', '12-06-2000'),
('B21CE004', 'cestudentpass', 'Olivia Davis', 'olivia@email.com', '2345678901', '543 Cedar St, County', 'Civil Engineering', '2023', 'S1', 'William Davis', '4567890123', 'b-ve', '08-03-2002'),
('B21CS004', 'csstudentpass', 'Sophie Johnson', 'sophie@email.com', '9876543210', '876 Oak St, City', 'Computer Science and Engineering', '2023', 'S1', 'James Johnson', '8765432109', 'ab+ve', '14-08-2002'),
('B21CS101', 'securepass', 'Alice Johnson', 'alice@email.com', '9876543210', '456 Oak St, Town', 'Computer Science and Engineering', '2021', 'S5', 'Bob Johnson', '8765432109', 'ab+ve', '05-12-2001'),
('B21CS102', 'mypassword', 'Charlie Brown', 'charlie@email.com', '7654321098', '789 Pine St, Village', 'Computer Science and Engineering', '2022', 'S3', 'Lucy Brown', '7654321098', 'a-ve', '10-08-1999'),
('B21EC001', 'ecpass2022', 'Michael Smith', 'michael@email.com', '2345678901', '321 Maple St, County', 'Electronics and Communication Engineering', '2020', 'S7', 'Sarah Smith', '3456789012', 'ab+ve', '15-03-2002'),
('B21EC002', 'ec2022pass', 'Emma Davis', 'emma@email.com', '5678901234', '654 Birch St, State', 'Electronics and Communication Engineering', '2021', 'S5', 'David Davis', '4567890123', 'o-ve', '22-07-2003'),
('B21EC003', 'ecpass123', 'Olivia White', 'olivia@email.com', '8901234567', '987 Cedar St, Province', 'Electronics and Communication Engineering', '2022', 'S3', 'William White', '5678901234', 'b-ve', '08-11-2000'),
('B21EC004', 'ecepass2022', 'Liam Davis', 'liam@email.com', '1234567890', '789 Pine St, Town', 'Electronics and Communication Engineering', '2023', 'S1', 'Ava Davis', '3456789012', 'o+ve', '28-02-2001'),
('B21EE001', 'ee2022pass', 'Sophia Wilson', 'sophia@email.com', '6789012345', '789 Pine St, District', 'Electrical and Electronics Engineering', '2020', 'S7', 'Jackson Wilson', '6789012345', 'a+ve', '02-04-2001'),
('B21EE002', 'ee123pass', 'Liam Martin', 'liam@email.com', '9012345678', '876 Oak St, Territory', 'Electrical and Electronics Engineering', '2021', 'S5', 'Ava Martin', '7890123456', 'ab-ve', '18-09-2002'),
('B21EE003', 'electropass', 'Mia Davis', 'mia@email.com', '1234567890', '234 Elm St, Region', 'Electrical and Electronics Engineering', '2022', 'S3', 'Ethan Davis', '8901234567', 'o+ve', '25-12-1999'),
('B21EE004', 'eepass123', 'Olivia Brown', 'olivia@email.com', '2345678901', '543 Cedar St, Village', 'Electrical and Electronics Engineering', '2023', 'S1', 'William Brown', '4567890123', 'a-ve', '10-05-2002'),
('B21ME001', 'mepass2022', 'Aiden Johnson', 'aiden@email.com', '2345678901', '543 Cedar St, Country', 'Mechanical Engineering', '2020', 'S7', 'Sophie Johnson', '9012345678', 'a-ve', '11-06-2000'),
('B21ME002', 'mepass123', 'Ava Wilson', 'ava@email.com', '5678901234', '432 Pine St, State', 'Mechanical Engineering', '2021', 'S5', 'James Wilson', '3456789012', 'ab+ve', '30-03-2003'),
('B21ME003', 'mepassword123', 'Ethan Miller', 'ethan@email.com', '6789012345', '765 Maple St, District', 'Mechanical Engineering', '2022', 'S3', 'Emily Miller', '2345678901', 'o-ve', '05-09-2001'),
('B21ME004', 'mestudentpass', 'Emma Wilson', 'emma@email.com', '5678901234', '876 Elm St, County', 'Mechanical Engineering', '2023', 'S1', 'Jackson Wilson', '7890123456', 'ab+ve', '15-11-2001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`FAID`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`FACULTY_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`admno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
