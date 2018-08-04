-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2017 at 10:31 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`id`, `name`, `email`, `username`, `password`, `user_role`) VALUES
(1, 'Avinash Mishra', 'avinash@gmail.com', 'mishraavinash98', '12345', 1),
(3, 'Ritesh Gunjal', 'ritzgunjal@gmail.com', 'ritesh', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookhistory`
--

CREATE TABLE `bookhistory` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `date_of_taken` date NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `bid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookhistory`
--

INSERT INTO `bookhistory` (`id`, `username`, `date_of_taken`, `isbn`, `bid`) VALUES
(1, 'prakash', '2017-10-22', 'CS-122', 15),
(2, 'prakash', '2017-10-22', 'sp-1235', 1),
(3, 'ranjitmane', '2017-10-22', 'sp-105', 2),
(4, 'ranjitmane', '2017-10-22', 'CS-122', 15),
(5, 'Avinash', '2017-10-23', 'sm-258', 4),
(6, 'Avinash', '2017-10-23', 'CS-1258', 7);

-- --------------------------------------------------------

--
-- Table structure for table `booklist`
--

CREATE TABLE `booklist` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Author` text NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `Edition` varchar(20) NOT NULL,
  `dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booklist`
--

INSERT INTO `booklist` (`id`, `name`, `Author`, `ISBN`, `Edition`, `dept`) VALUES
(1, 'computer Fundamentals', 'Stifen and Robert', 'sp-1235', '2th', 'CSE'),
(2, 'computer Networking', 'Rose and Kite', 'sp-105', '4th', 'CSE'),
(3, 'Digital Logic Design', 'Lepart and Richard', 'sp-106', '5th', 'EEE'),
(4, 'Mathematics for Modern Science', 'Stifen Fethe and Losen Ruth', 'sm-258', '3rd', 'CSE'),
(7, 'Database management System', 'Korth and Milton', 'CS-1258', '5th', 'CSE'),
(14, 'Algorith Analysis', 'Sartaj Sani', 'CS-121', '5', 'CSE'),
(15, 'Computer Graphics', 'P Bakers', 'CS-122', '4', 'CSE'),
(17, 'Applied Mathematics 3', 'Prof.G.V. Kumbhojkar', 'CS-124', '5', 'CSE'),
(18, 'Applied Mathematics 1', 'Prof.G.V. Kumbhojkar', 'CS-101', '3', 'CSE'),
(19, 'Applied Mathematics 2', 'Prof.G.V. Kumbhojkar', 'CS-102', '4', 'CSE'),
(20, 'Applied Mathematics 4', 'Prof.G.V. Kumbhojkar', 'CS-125', '4', 'CSE'),
(47, 'Fluid Mechanics', 'Agarwal', 'M-101', '4', 'Mechanical');

-- --------------------------------------------------------

--
-- Table structure for table `borrowers`
--

CREATE TABLE `borrowers` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `date_of_taken` date NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `bid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowers`
--

INSERT INTO `borrowers` (`id`, `username`, `date_of_taken`, `isbn`, `bid`) VALUES
(36, 'prakash', '2017-10-22', 'sp-1235', 1),
(37, 'ranjitmane', '2017-10-22', 'sp-105', 2),
(39, 'Avinash', '2017-10-23', 'CS-1258', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `notice` text NOT NULL,
  `date_of_publish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `notice`, `date_of_publish`) VALUES
(1, 'Collection Of Library Card', 'Students and teachers please register with online and collect your registration card from library.', '2017-10-02'),
(11, 'IMPORTANT', 'All Students are reqested return book by 10-10-2017 or fine will be charged', '2017-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `pdfbooks`
--

CREATE TABLE `pdfbooks` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdfbooks`
--

INSERT INTO `pdfbooks` (`id`, `name`, `img_path`) VALUES
(1, 'Dot Net professional', 'image/dotnet tutorial for beginners.pdf'),
(2, 'Oracle 10g', 'image/Oracle 10g - SQL PDF.pdf'),
(4, 'FE Syllabus', 'image/F.E Syllabus.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `st_id` int(11) NOT NULL,
  `dept` varchar(25) NOT NULL,
  `session` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `st_id`, `dept`, `session`, `email`, `username`, `password`, `user_role`) VALUES
(2, 'Hrusabh', 31, 'CSE', 5, 'hk@gmail.com', 'hkotwal', '12345', 2),
(3, 'Prakash Kumar', 27, 'CSE', 5, 'pk@gmail.com', 'prakash', '12345', 2),
(8, 'Nikita Jha', 25, 'CSE', 5, 'niki@gmail.com', 'nikki', '12345', 2),
(9, 'priya gupta', 22, 'CSE', 5, 'priya@gmail.com', 'priya', '12345', 2),
(10, 'Avinash Mishra', 37, 'CSE', 5, 'mishraavinash98@gmail.com', 'Avinash', '12345', 2);

-- --------------------------------------------------------

--
-- Table structure for table `st_notices`
--

CREATE TABLE `st_notices` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date_of_publish` date NOT NULL,
  `notice` text NOT NULL,
  `fine` int(11) NOT NULL,
  `last_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_notices`
--

INSERT INTO `st_notices` (`id`, `title`, `date_of_publish`, `notice`, `fine`, `last_date`) VALUES
(3, 'Book return', '2017-10-02', 'return book by 10-10-2017 or fine will be charged', 50, '2017-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `te_notice`
--

CREATE TABLE `te_notice` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date_of_publish` date NOT NULL,
  `notice` text NOT NULL,
  `fine` int(11) NOT NULL,
  `last_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `te_notice`
--

INSERT INTO `te_notice` (`id`, `title`, `date_of_publish`, `notice`, `fine`, `last_date`) VALUES
(2, 'Book return', '2017-10-02', 'return book by 10-10-2017 or fine will be charged', 50, '2017-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `te_registration`
--

CREATE TABLE `te_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `te_registration`
--

INSERT INTO `te_registration` (`id`, `name`, `designation`, `dept`, `email`, `username`, `password`, `user_role`) VALUES
(1, 'B. W.  Balkhande', 'Professor', 'CSE', 'bwb@gmail.com', 'bwbalkhande', '12345', 3),
(2, 'Ranjit Mane', 'Professor', 'CSE', 'ranjitmane@gmail.com', 'ranjitmane', '12345', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookhistory`
--
ALTER TABLE `bookhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booklist`
--
ALTER TABLE `booklist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrowers`
--
ALTER TABLE `borrowers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdfbooks`
--
ALTER TABLE `pdfbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `te_registration`
--
ALTER TABLE `te_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bookhistory`
--
ALTER TABLE `bookhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `booklist`
--
ALTER TABLE `booklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `borrowers`
--
ALTER TABLE `borrowers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pdfbooks`
--
ALTER TABLE `pdfbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `te_registration`
--
ALTER TABLE `te_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
