-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 09:31 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_27654712_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `bno` int(255) NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `img` text NOT NULL,
  `content` text NOT NULL,
  `sources` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `links` text NOT NULL,
  `tags` text NOT NULL,
  `pgofblog` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`bno`, `title`, `subtitle`, `img`, `content`, `sources`, `date`, `time`, `author`, `links`, `tags`, `pgofblog`) VALUES
(7, 'Tree', 'Trees are Useful', 'https://www.telegraph.co.uk/content/dam/news/2016/09/08/107667228_beech-tree-NEWS_trans_NvBQzQNjv4BqplGOf-dgG3z4gg9owgQTXEmhb5tXCQRHAvHRWfzHzHk.jpg', '<p><strong>Tree</strong></p>\r\n<p>Trees are Very Useful</p>\r\n<p><strong>Plants</strong></p>\r\n<p>They are <em>version-2</em></p>', 'Google,', '14/05/2021', '16:27:57', 'Shobhan', 'google.com', 'tree,environment', 'finance'),
(8, 'Laptop', 'Laptop is used to do everything', 'https://cdn.mos.cms.futurecdn.net/vEcELHdn998wRTcCzqV5m9.jpg', '<p><strong>Laptop</strong></p>\r\n<p>Laptops are used to do something</p>', 'blah', '14/05/2021', '16:38:15', 'Shobhan', 'youtube.com', 'internet,website,computer', 'Learn'),
(9, 'Courses', 'Courses are used to learn', 'https://assets-global.website-files.com/58e32bace1998d6e3fee8d74/5f84ddb145460575b0d99d84_5c1be2d54c15d926ab8ab856_productivity_apps_1.png', '<p><strong>O</strong><strong>nline Courses</strong></p>\r\n<p>Online Courses are used to learn from wherever you want</p>', 'udemy,youtube', '14/05/2021', '16:41:16', 'Shobhan', 'udemy.com,youtube.com', 'course,online,udemy', 'Productivity');

-- --------------------------------------------------------

--
-- Table structure for table `pagenames`
--

CREATE TABLE `pagenames` (
  `pno` int(255) NOT NULL,
  `pgname` varchar(255) NOT NULL,
  `pgdesc` text NOT NULL,
  `pgimg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pagenames`
--

INSERT INTO `pagenames` (`pno`, `pgname`, `pgdesc`, `pgimg`) VALUES
(1, 'Productivity', 'Be Better and Stronger', 'https://blog.hubstaff.com/wp-content/uploads/2018/03/how-to-be-productive@2x.png'),
(2, 'Learn', 'Learn things New in a Daily Basis', 'https://miro.medium.com/max/693/1*2vt-C5QMnVdh8euVgpRhNw.jpeg'),
(3, 'Finance', 'Earn and Earn', 'https://rwfxjps98l-flywheel.netdna-ssl.com/wp-content/uploads/2018/11/Alternative-data-1-1024x577.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uno` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uno`, `name`, `email`, `pass`, `admin`) VALUES
(1, 'Shobhan', 'rshobhan02@gmail.com', '56bd7107802ebe56c6918992f0608ec6', 1),
(2, 'a', 'a@a.com', '0cc175b9c0f1b6a831c399e269772661', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`bno`);

--
-- Indexes for table `pagenames`
--
ALTER TABLE `pagenames`
  ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `bno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pagenames`
--
ALTER TABLE `pagenames`
  MODIFY `pno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
