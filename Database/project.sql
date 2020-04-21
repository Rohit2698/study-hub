-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2019 at 09:46 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `b`
--

CREATE TABLE `b` (
  `id` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
  `a` varchar(300) NOT NULL,
  `b` varchar(300) NOT NULL,
  `c` varchar(300) NOT NULL,
  `d` varchar(300) NOT NULL,
  `ans` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b`
--

INSERT INTO `b` (`id`, `question`, `a`, `b`, `c`, `d`, `ans`) VALUES
(1, 'WWW stands for ?', 'World Whole Web', 'Wide World Web', 'Web World Wide', 'World Wide Web', 'World Wide Web'),
(2, 'Which of the following are components of Central Processing Unit (CPU) ?', 'Arithmetic logic unit, Mouse', 'Arithmetic logic unit, Control unit Circuits\r\n', 'Control Unit, Monitor', 'Arithmetic logic unit, Integrated', 'Arithmetic logic unit, Control unit Circuits\r\n'),
(3, 'Which among following first generation of computers had ?', 'Vaccum Tubes and Magnetic Drum', 'Integrated Circuits', 'Magnetic Tape and Transistors', 'All of above', 'Vaccum Tubes and Magnetic Drum'),
(4, 'Where is RAM located ?', 'Expansion Board', 'External Drive', 'Mother Board', 'All of above', 'Mother Board'),
(5, 'If a computer has more than one processor then it is known as ?', 'Uniprocess', 'Multiprocessor', 'Multithreaded', 'Multiprogramming', 'Multiprocessor'),
(6, ' If a computer provides database services to other, then it will be known as ?', 'Web server', 'Application server', 'Database server\r\n', 'FTP server', 'Database server');

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `id` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
  `a` varchar(300) NOT NULL,
  `b` varchar(300) NOT NULL,
  `c` varchar(300) NOT NULL,
  `d` varchar(300) NOT NULL,
  `ans` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`id`, `question`, `a`, `b`, `c`, `d`, `ans`) VALUES
(1, 'WWW stands for ?', 'World Whole Web', 'Wide World Web', 'Web World Wide', 'World Wide Web', ''),
(2, 'Which of the following are components of Central Processing Unit (CPU) ?', 'Arithmetic logic unit, Mouse', 'Arithmetic logic unit, Control unit Circuits\r\n', 'Control Unit, Monitor', 'Arithmetic logic unit, Integrated', ''),
(3, 'Which among following first generation of computers had ?', 'Vaccum Tubes and Magnetic Drum', 'Integrated Circuits', 'Magnetic Tape and Transistors', 'All of above', ''),
(4, 'Where is RAM located ?', 'Expansion Board', 'External Drive', 'Mother Board', 'All of above', ''),
(5, 'If a computer has more than one processor then it is known as ?', 'Uniprocess', 'Multiprocessor', 'Multithreaded', 'Multiprogramming', ''),
(6, ' If a computer provides database services to other, then it will be known as ?', 'Web server', 'Application server', 'Database server\r\n', 'FTP server', '');

-- --------------------------------------------------------

--
-- Table structure for table `cool`
--

CREATE TABLE `cool` (
  `id` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
  `a` varchar(300) NOT NULL,
  `b` varchar(300) NOT NULL,
  `c` varchar(300) NOT NULL,
  `d` varchar(300) NOT NULL,
  `ans` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cool`
--

INSERT INTO `cool` (`id`, `question`, `a`, `b`, `c`, `d`, `ans`) VALUES
(1, 'WWW stands for ?', 'World Whole Web', 'Wide World Web', 'Web World Wide', 'World Wide Web', ''),
(2, 'Which of the following are components of Central Processing Unit (CPU) ?', 'Arithmetic logic unit, Mouse', 'Arithmetic logic unit, Control unit Circuits\r\n', 'Control Unit, Monitor', 'Arithmetic logic unit, Integrated', ''),
(3, 'Which among following first generation of computers had ?', 'Vaccum Tubes and Magnetic Drum', 'Integrated Circuits', 'Magnetic Tape and Transistors', 'All of above', ''),
(4, 'Where is RAM located ?', 'Expansion Board', 'External Drive', 'Mother Board', 'All of above', ''),
(5, 'If a computer has more than one processor then it is known as ?', 'Uniprocess', 'Multiprocessor', 'Multithreaded', 'Multiprogramming', ''),
(6, ' If a computer provides database services to other, then it will be known as ?', 'Web server', 'Application server', 'Database server\r\n', 'FTP server', '');

-- --------------------------------------------------------

--
-- Table structure for table `kd@gmail.com`
--

CREATE TABLE `kd@gmail.com` (
  `id` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `test` varchar(300) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kd@gmail.comquery`
--

CREATE TABLE `kd@gmail.comquery` (
  `id` int(11) NOT NULL,
  `question` varchar(300) DEFAULT NULL,
  `ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kd@gmail.comquery`
--

INSERT INTO `kd@gmail.comquery` (`id`, `question`, `ans`) VALUES
(1, 'What is the difference between java and c++', 'Java is Platform independent whereas C++is not'),
(11, 'Can u please tell me how java works', '');

-- --------------------------------------------------------

--
-- Table structure for table `kumar@gmail.com`
--

CREATE TABLE `kumar@gmail.com` (
  `id` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `test` varchar(300) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kumar@gmail.com`
--

INSERT INTO `kumar@gmail.com` (`id`, `marks`, `test`, `time`) VALUES
(1, 2, 'good', 20),
(2, 0, 'C++', 0),
(3, 1, 'fill', 20),
(4, 0, 'Clang', 20);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `dob`, `status`, `phoneno`, `photo`) VALUES
(1, 'Rohit', 'Rohit.thakur2698@gmail.co', '1234', '26-02-1998', 'Teacher', '8156919794', 'image/100_5688.JPG'),
(2, 'abc', 'abc@gmail.com', '1234', '0000-00-00', 'student', '2147483647', 'image/100e4607_001.jpg'),
(3, 'Jindu', 'jindu@gmail.com', 'jindu', '0000-00-00', 'student', '1234567890', 'image/100_5695.JPG'),
(5, 'Itu', 'jindu123@gmail.com', 'jindu', '0000-00-00', 'Teacher', '2147483647', 'image/100_5719.JPG'),
(6, 'Rohit Thakur', 'Rohit.thakur2698@gmail.co', 'miju2698thakur', '0000-00-00', 'Teacher', '2147483647', 'image/100_5740.JPG'),
(7, 'Mohit thakur', 'Mohit.thakur@gmail.com', 'momanddad', '0000-00-00', 'student', '2147483647', 'image/100_4553.JPG'),
(10, 'qwe', 'qwe@gmail.com', 'qwe', '0000-00-00', 'student', '2147483647', 'image/'),
(11, 'kd', 'kd@gmail.com', 'kd', '0000-00-00', 'student', '815628393', 'image/'),
(12, 'Kumar', 'kumar@gmail.com', '1234', '1990', 'student', '9915092933', 'image/'),
(13, 'admin', '', 'admin', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mohit.thakur@gmail.com`
--

CREATE TABLE `mohit.thakur@gmail.com` (
  `id` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `test` varchar(300) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mohit.thakur@gmail.com`
--

INSERT INTO `mohit.thakur@gmail.com` (`id`, `marks`, `test`, `time`) VALUES
(1, 10, 'good', 20),
(2, 1, 'good', 20),
(3, 1, 'good', 20),
(4, 1, 'good', 20),
(5, 1, 'good', 20),
(6, 0, 'good', 20),
(7, 1, 'good', 20),
(8, 1, 'good', 20);

-- --------------------------------------------------------

--
-- Table structure for table `mohit.thakur@gmail.comquery`
--

CREATE TABLE `mohit.thakur@gmail.comquery` (
  `id` int(11) NOT NULL,
  `question` varchar(300) DEFAULT NULL,
  `answer` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questionbank`
--

CREATE TABLE `questionbank` (
  `id` int(100) NOT NULL,
  `question` varchar(255) NOT NULL,
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `d` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionbank`
--

INSERT INTO `questionbank` (`id`, `question`, `a`, `b`, `c`, `d`, `ans`) VALUES
(14, 'WWW stands for ?', 'World Whole Web', 'Wide World Web', 'Web World Wide', 'World Wide Web', 'World Wide Web'),
(17, 'Which of the following are components of Central Processing Unit (CPU) ?', 'Arithmetic logic unit, Mouse', 'Arithmetic logic unit, Control unit Circuits\r\n', 'Control Unit, Monitor', 'Arithmetic logic unit, Integrated', 'Arithmetic logic unit, Control unit Circuits\r\n'),
(18, 'Which among following first generation of computers had ?', 'Vaccum Tubes and Magnetic Drum', 'Integrated Circuits', 'Magnetic Tape and Transistors', 'All of above', 'Vaccum Tubes and Magnetic Drum'),
(22, 'Where is RAM located ?', 'Expansion Board', 'External Drive', 'Mother Board', 'All of above', 'Mother Board'),
(23, 'If a computer has more than one processor then it is known as ?', 'Uniprocess', 'Multiprocessor', 'Multithreaded', 'Multiprogramming', 'Multiprocessor'),
(25, ' If a computer provides database services to other, then it will be known as ?', 'Web server', 'Application server', 'Database server\r\n', 'FTP server', 'Database server');

-- --------------------------------------------------------

--
-- Table structure for table `qwe@gmail.com`
--

CREATE TABLE `qwe@gmail.com` (
  `id` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `test` varchar(300) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwe@gmail.com`
--

INSERT INTO `qwe@gmail.com` (`id`, `marks`, `test`, `time`) VALUES
(1, 1, 'good', 20),
(2, 0, 'good', 20),
(3, 0, 'good', 20),
(4, 0, 'good', 20),
(5, 0, 'good', 20),
(6, 0, 'good', 20),
(7, 0, 'good', 20),
(8, 0, 'good', 20),
(9, 0, 'good', 20),
(10, 0, 'good', 20),
(11, 0, 'good', 20),
(12, 1, 'good', 20),
(13, 5, 'good', 20),
(14, 1, 'good', 20),
(15, 1, 'good', 20),
(16, 3, 'good', 20),
(17, 2, 'good', 20),
(18, 2, 'good', 20);

-- --------------------------------------------------------

--
-- Table structure for table `qwe@gmail.comquery`
--

CREATE TABLE `qwe@gmail.comquery` (
  `id` int(11) NOT NULL,
  `question` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rohit.thakur2698@gmail.com`
--

CREATE TABLE `rohit.thakur2698@gmail.com` (
  `id` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `test` varchar(300) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentquery`
--

CREATE TABLE `studentquery` (
  `id` int(11) NOT NULL,
  `email` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentquery`
--

INSERT INTO `studentquery` (`id`, `email`) VALUES
(1, 'kd@gmail.com'),
(2, 'abc@gmail.com'),
(3, 'abc@gmail.com'),
(4, 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `testtable`
--

CREATE TABLE `testtable` (
  `id` int(255) NOT NULL,
  `test` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testtable`
--

INSERT INTO `testtable` (`id`, `test`, `time`) VALUES
(6, 'computer', '5'),
(9, 'cool', '4'),
(12, 'b', '4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(230) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `college` varchar(230) NOT NULL,
  `email` varchar(230) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `password` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
(1, 'Rohit', 'male', 'DAV', 'rohit.thakur2698@gmail.com', '8146919794', 'momanddad');

-- --------------------------------------------------------

--
-- Table structure for table `zxc@gmail.com`
--

CREATE TABLE `zxc@gmail.com` (
  `id` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `test` varchar(300) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b`
--
ALTER TABLE `b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cool`
--
ALTER TABLE `cool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kd@gmail.com`
--
ALTER TABLE `kd@gmail.com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kd@gmail.comquery`
--
ALTER TABLE `kd@gmail.comquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kumar@gmail.com`
--
ALTER TABLE `kumar@gmail.com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mohit.thakur@gmail.com`
--
ALTER TABLE `mohit.thakur@gmail.com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mohit.thakur@gmail.comquery`
--
ALTER TABLE `mohit.thakur@gmail.comquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionbank`
--
ALTER TABLE `questionbank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qwe@gmail.com`
--
ALTER TABLE `qwe@gmail.com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qwe@gmail.comquery`
--
ALTER TABLE `qwe@gmail.comquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rohit.thakur2698@gmail.com`
--
ALTER TABLE `rohit.thakur2698@gmail.com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentquery`
--
ALTER TABLE `studentquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testtable`
--
ALTER TABLE `testtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`email`),
  ADD UNIQUE KEY `mob` (`mob`);

--
-- Indexes for table `zxc@gmail.com`
--
ALTER TABLE `zxc@gmail.com`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b`
--
ALTER TABLE `b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `computer`
--
ALTER TABLE `computer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cool`
--
ALTER TABLE `cool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kd@gmail.com`
--
ALTER TABLE `kd@gmail.com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kd@gmail.comquery`
--
ALTER TABLE `kd@gmail.comquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kumar@gmail.com`
--
ALTER TABLE `kumar@gmail.com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mohit.thakur@gmail.com`
--
ALTER TABLE `mohit.thakur@gmail.com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mohit.thakur@gmail.comquery`
--
ALTER TABLE `mohit.thakur@gmail.comquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questionbank`
--
ALTER TABLE `questionbank`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `qwe@gmail.com`
--
ALTER TABLE `qwe@gmail.com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `qwe@gmail.comquery`
--
ALTER TABLE `qwe@gmail.comquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rohit.thakur2698@gmail.com`
--
ALTER TABLE `rohit.thakur2698@gmail.com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentquery`
--
ALTER TABLE `studentquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testtable`
--
ALTER TABLE `testtable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zxc@gmail.com`
--
ALTER TABLE `zxc@gmail.com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
