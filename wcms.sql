-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2017 at 02:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `wc_packages`
--

CREATE TABLE `wc_packages` (
  `pack_id` int(11) NOT NULL,
  `pack_name` varchar(50) NOT NULL,
  `pack_price` varchar(15) NOT NULL,
  `pack_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wc_packages`
--

INSERT INTO `wc_packages` (`pack_id`, `pack_name`, `pack_price`, `pack_details`) VALUES
(1, '6 Page Site', 'PHP 250', '');

-- --------------------------------------------------------

--
-- Table structure for table `wc_pages`
--

CREATE TABLE `wc_pages` (
  `page_id` int(11) NOT NULL,
  `page_title` text NOT NULL,
  `page_slug` varchar(120) NOT NULL,
  `page_description` varchar(300) NOT NULL,
  `page_keyword` text NOT NULL,
  `page_content` text NOT NULL,
  `page_published` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `page_updated` datetime NOT NULL,
  `page_acc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `wc_pages`
--

INSERT INTO `wc_pages` (`page_id`, `page_title`, `page_slug`, `page_description`, `page_keyword`, `page_content`, `page_published`, `page_updated`, `page_acc`) VALUES
(1, 'Welcome Home', 'home', 'welcome to our company', 'welcome to our company', '', '2017-08-12 11:20:30', '0000-00-00 00:00:00', 1),
(2, 'About US', 'about-us', 'about company', 'about us, about cms', '', '2017-08-12 10:11:20', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wc_sites`
--

CREATE TABLE `wc_sites` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(60) NOT NULL,
  `s_url` varchar(80) NOT NULL,
  `s_owner_id` int(11) NOT NULL,
  `s_package_id` int(11) NOT NULL,
  `s_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wc_sites`
--

INSERT INTO `wc_sites` (`s_id`, `s_name`, `s_url`, `s_owner_id`, `s_package_id`, `s_added`) VALUES
(1, 'CMS 1', '//cms1.dev', 2, 1, '2017-08-14 14:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `wc_users`
--

CREATE TABLE `wc_users` (
  `user_id` int(11) NOT NULL,
  `user_uname` varchar(50) NOT NULL,
  `user_pass` varchar(70) NOT NULL,
  `user_level` int(2) NOT NULL COMMENT '0 = normal user; 3 = super admin',
  `user_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `wc_users`
--

INSERT INTO `wc_users` (`user_id`, `user_uname`, `user_pass`, `user_level`, `user_added`) VALUES
(1, 'breyjhan', 'bb11886df781cf4e0a1e1965fe28c6055684a7cd', 2, '2017-08-10 10:31:34'),
(2, 'client1', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, '2017-08-10 10:30:46'),
(3, 'client2', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, '2017-08-10 10:31:20');

-- --------------------------------------------------------

--
-- Table structure for table `wc_users_info`
--

CREATE TABLE `wc_users_info` (
  `ui_id` int(11) NOT NULL,
  `ui_fname` varchar(60) NOT NULL,
  `ui_lname` varchar(60) NOT NULL,
  `ui_address` varchar(120) NOT NULL,
  `ui_address2` varchar(120) NOT NULL,
  `ui_town_city` varchar(60) NOT NULL,
  `ui_postal` int(11) NOT NULL,
  `ui_country` varchar(40) NOT NULL,
  `ui_contact` varchar(60) NOT NULL,
  `ui_email` varchar(120) NOT NULL,
  `ui_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wc_users_info`
--

INSERT INTO `wc_users_info` (`ui_id`, `ui_fname`, `ui_lname`, `ui_address`, `ui_address2`, `ui_town_city`, `ui_postal`, `ui_country`, `ui_contact`, `ui_email`, `ui_user_id`) VALUES
(1, 'Fname', 'Lname', 'Sa amua bai', '', 'cebu', 6000, 'PH', '09324554', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wc_packages`
--
ALTER TABLE `wc_packages`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `wc_pages`
--
ALTER TABLE `wc_pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `wc_sites`
--
ALTER TABLE `wc_sites`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `wc_users`
--
ALTER TABLE `wc_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wc_users_info`
--
ALTER TABLE `wc_users_info`
  ADD PRIMARY KEY (`ui_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wc_packages`
--
ALTER TABLE `wc_packages`
  MODIFY `pack_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wc_pages`
--
ALTER TABLE `wc_pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wc_sites`
--
ALTER TABLE `wc_sites`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wc_users`
--
ALTER TABLE `wc_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wc_users_info`
--
ALTER TABLE `wc_users_info`
  MODIFY `ui_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
