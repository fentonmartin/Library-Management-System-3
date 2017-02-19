-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2016 at 10:50 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `book_id` int(11) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `book_pub` varchar(100) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `submit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `author`, `book_pub`, `isbn`, `submit`) VALUES
(100, 'CODEIGNTOR REFRENCE', 'Prajeesh K P', 'PKP GROUP', '41511214XE12', ''),
(102, 'Computer Graphics', 'Donald D. Heran', 'Pearson Pvt LTD', '978-81-775-8765-4', 'Submit');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `mem_id` int(11) NOT NULL,
  `bk_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `r_date` date NOT NULL,
  `borrow_id` int(11) NOT NULL,
  `return_date` date NOT NULL,
  `status` text NOT NULL,
  `bk_name` text NOT NULL,
  `auth` text NOT NULL,
  `pub` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`mem_id`, `bk_id`, `date`, `r_date`, `borrow_id`, `return_date`, `status`, `bk_name`, `auth`, `pub`) VALUES
(123, 101, '2016-11-15', '2016-11-22', 101, '0000-00-00', 'Returned', 'Laravel Refernce', 'Prajeesh K P', 'PKP GROUP'),
(123, 101, '2016-11-15', '2016-11-22', 102, '0000-00-00', 'Returned', 'Laravel Refernce', 'Prajeesh K P', 'PKP GROUP'),
(123, 100, '2016-11-15', '2016-11-22', 103, '0000-00-00', 'Returned', 'CODEIGNTOR REFRENCE', 'Prajeesh K P', 'PKP GROUP'),
(123, 100, '2016-11-16', '2016-11-23', 104, '0000-00-00', 'Returned', 'CODEIGNTOR REFRENCE', 'Prajeesh K P', 'PKP GROUP'),
(123, 100, '2016-11-16', '2016-11-23', 105, '0000-00-00', 'Returned', 'CODEIGNTOR REFRENCE', 'Prajeesh K P', 'PKP GROUP'),
(123, 101, '2016-11-16', '2016-11-23', 106, '0000-00-00', 'Borrowed', 'Laravel Refernce', 'Prajeesh K P', 'PKP GROUP');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `submit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `firstname`, `lastname`, `gender`, `address`, `contact`, `type`, `submit`) VALUES
(123, 'Ajeesh', 'P', 'male', 'Kaleekal Thekkethil Cheriyand kerala', '9496121892', 'student', 'Submit');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `submit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `submit`) VALUES
(1, 'admin', 'password', 'Prajeesh', 'K P', 'Submit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrow_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
