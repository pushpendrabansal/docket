-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2017 at 10:26 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docket`
--

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE `domain` (
  `d_name` varchar(100) NOT NULL,
  `d_email` varchar(100) NOT NULL,
  `d_pass` varchar(100) NOT NULL,
  `d_mob` varchar(100) NOT NULL,
  `d_descr` varchar(1000) NOT NULL,
  `d_address` varchar(1000) NOT NULL,
  `d_id` int(10) NOT NULL,
  `domain_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`d_name`, `d_email`, `d_pass`, `d_mob`, `d_descr`, `d_address`, `d_id`, `domain_create`) VALUES
('lnmiit', 'bansalpunitib@gmail.com', 'mnkupiddu', '8764162151', 'xyz', 'A-!74 Jawahar Nagar Bharatpur', 639333358, '2017-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `user_email` varchar(100) NOT NULL,
  `doj` date NOT NULL,
  `group_id` int(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`user_email`, `doj`, `group_id`, `position`, `id`) VALUES
('bansalpunitib@gmail.com', '2017-05-31', 4839, 'admin', 1),
('poojaagarwal075@gmail.com', '2017-06-01', 2939, 'admin', 3),
('poojaagarwal075@gmail.com', '2017-06-05', 4803, 'member', 44);

-- --------------------------------------------------------

--
-- Table structure for table `group_title`
--

CREATE TABLE `group_title` (
  `group_name` varchar(100) NOT NULL,
  `group_desc` varchar(1000) NOT NULL,
  `group_domain` int(100) NOT NULL,
  `group_leader` varchar(100) NOT NULL,
  `group_id` int(100) NOT NULL,
  `group_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_title`
--

INSERT INTO `group_title` (`group_name`, `group_desc`, `group_domain`, `group_leader`, `group_id`, `group_create`) VALUES
('e cell', 'sa', 639333358, 'poojaagarwal075@gmail.com', 2939, '2017-06-01'),
('Y-17', 'q', 639333358, 'poojaagarfwal075@gmail.com', 4803, '2017-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `domain` int(100) DEFAULT NULL,
  `mobile` varchar(100) NOT NULL,
  `doj` date NOT NULL,
  `position` varchar(100) NOT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`email`, `password`, `domain`, `mobile`, `doj`, `position`, `id`, `name`) VALUES
('bansalpunitib@gmail.com', 'q', 7584, 'q', '2017-05-31', 'admin', 1, ''),
('poojaagarwal075@gmail.com', 'q', 639333358, '09461067653', '2017-05-31', 'member', 2, 'Pooja Agrawal'),
('bansalpunit96@gmail.com', 'q', NULL, '23', '2017-06-01', 'member', 3, 'Pushpendra Bansal'),
('poojaagadw5@gmail.com', 'q', 0, '09461067653', '2017-06-01', 'member', 4, 'Pooja Agrawal'),
('ww', 'w', NULL, '1', '2017-06-01', 'member', 5, 'w');

-- --------------------------------------------------------

--
-- Table structure for table `messaging`
--

CREATE TABLE `messaging` (
  `to_receiver` varchar(100) NOT NULL,
  `from_sender` varchar(100) NOT NULL,
  `mail_subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `opened` int(10) NOT NULL,
  `date_send` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ctrl_no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messaging`
--

INSERT INTO `messaging` (`to_receiver`, `from_sender`, `mail_subject`, `message`, `opened`, `date_send`, `ctrl_no`) VALUES
('poojaagarwal075@gmail.com', 'poojaagarwal075@gmail.com', '', '', 1, '2017-05-31 23:01:23', 9),
('babsalpunitib@gmail.com', 'bansalpunitib@gmail.com', 'test', '', 0, '2017-06-01 07:42:06', 10),
('bansalpunitib@gmail.com', 'bansalpunitib@gmail.com', 'test', '', 1, '2017-06-01 07:42:26', 11),
('poojaagarwal075@gmail.com', 'poojaagarwal075@gmail.com', 'q', '', 0, '2017-06-01 13:53:28', 12),
('bansalpunitib@gmail.com', 'poojaagarwal075@gmail.com', 'qwqw', 'wwq', 0, '2017-06-01 14:52:22', 13),
('bansalpunitib@gmail.com', 'poojaagarwal075@gmail.com', '', '', 0, '2017-06-01 14:52:41', 14),
('poojaagarwal075@gmail.com', 'poojaagarwal075@gmail.com', 'test', 'test', 0, '2017-06-01 14:55:18', 15);

-- --------------------------------------------------------

--
-- Table structure for table `sent_items`
--

CREATE TABLE `sent_items` (
  `to_receiver` varchar(100) NOT NULL,
  `from_sender` varchar(100) NOT NULL,
  `mail_subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date_send` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ctrl_no` int(100) NOT NULL,
  `opened` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sent_items`
--

INSERT INTO `sent_items` (`to_receiver`, `from_sender`, `mail_subject`, `message`, `date_send`, `ctrl_no`, `opened`) VALUES
('poojaagarwal075@gmail.com', 'bansalpunitib@gmail.com', 'q', 'q', '2017-05-31 22:37:40', 8, 0),
('poojaagarwal075@gmail.com', 'poojaagarwal075@gmail.com', '', '', '2017-05-31 23:01:23', 9, 0),
('babsalpunitib@gmail.com', 'bansalpunitib@gmail.com', 'test', '', '2017-06-01 07:42:06', 10, 1),
('bansalpunitib@gmail.com', 'bansalpunitib@gmail.com', 'test', '', '2017-06-01 07:42:26', 11, 1),
('poojaagarwal075@gmail.com', 'poojaagarwal075@gmail.com', 'q', '', '2017-06-01 13:53:28', 12, 0),
('bansalpunitib@gmail.com', 'poojaagarwal075@gmail.com', 'qwqw', 'wwq', '2017-06-01 14:52:22', 13, 0),
('bansalpunitib@gmail.com', 'poojaagarwal075@gmail.com', '', '', '2017-06-01 14:52:42', 14, 0),
('poojaagarwal075@gmail.com', 'poojaagarwal075@gmail.com', 'test', 'test', '2017-06-01 14:55:18', 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `date` date NOT NULL,
  `des` varchar(100) NOT NULL,
  `task` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`date`, `des`, `task`, `user`) VALUES
('2017-06-01', 'cd', '12 - 01 AM', 'poojaagarwal075@gmail.com'),
('2017-06-30', 'm', '04 - 05 PM', 'poojaagarwal075@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_title`
--
ALTER TABLE `group_title`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messaging`
--
ALTER TABLE `messaging`
  ADD PRIMARY KEY (`ctrl_no`);

--
-- Indexes for table `sent_items`
--
ALTER TABLE `sent_items`
  ADD PRIMARY KEY (`ctrl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `messaging`
--
ALTER TABLE `messaging`
  MODIFY `ctrl_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sent_items`
--
ALTER TABLE `sent_items`
  MODIFY `ctrl_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
