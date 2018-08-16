-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 09:59 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smarttoillet`
--

-- --------------------------------------------------------

--
-- Table structure for table `clean_gents`
--

CREATE TABLE `clean_gents` (
  `id` int(20) NOT NULL,
  `g_cleanstatus` int(20) NOT NULL,
  `responce` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clean_gents`
--

INSERT INTO `clean_gents` (`id`, `g_cleanstatus`, `responce`) VALUES
(1, 1, '2018-05-16 20:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `clean_ladies`
--

CREATE TABLE `clean_ladies` (
  `id` int(20) NOT NULL,
  `l_cleanstatus` int(20) NOT NULL,
  `responce` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clean_ladies`
--

INSERT INTO `clean_ladies` (`id`, `l_cleanstatus`, `responce`) VALUES
(1, 1, '2018-05-16 19:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `daily`
--

CREATE TABLE `daily` (
  `id` int(11) NOT NULL,
  `cnt_gents` int(20) NOT NULL,
  `cnt_ladies` int(20) NOT NULL,
  `l_fb_good` int(20) NOT NULL,
  `l_fb_bad` int(20) NOT NULL,
  `l_fb_dustbin` int(20) NOT NULL,
  `l_fb_smell` int(20) NOT NULL,
  `l_fb_floor` int(20) NOT NULL,
  `l_fb_toilletpaper` int(20) NOT NULL,
  `l_fb_handwash` int(20) NOT NULL,
  `l_fb_washbasin` int(20) NOT NULL,
  `g_fb_good` int(20) NOT NULL,
  `g_fb_bad` int(20) NOT NULL,
  `g_fb_dustbin` int(20) NOT NULL,
  `g_fb_smell` int(20) NOT NULL,
  `g_fb_toilletpaper` int(20) NOT NULL,
  `g_fb_handwash` int(20) NOT NULL,
  `g_fb_washbasin` int(20) NOT NULL,
  `g_fb_floor` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily`
--

INSERT INTO `daily` (`id`, `cnt_gents`, `cnt_ladies`, `l_fb_good`, `l_fb_bad`, `l_fb_dustbin`, `l_fb_smell`, `l_fb_floor`, `l_fb_toilletpaper`, `l_fb_handwash`, `l_fb_washbasin`, `g_fb_good`, `g_fb_bad`, `g_fb_dustbin`, `g_fb_smell`, `g_fb_toilletpaper`, `g_fb_handwash`, `g_fb_washbasin`, `g_fb_floor`, `date`) VALUES
(1, 100, 90, 100, 30, 10, 10, 0, 10, 10, 10, 100, 30, 10, 10, 10, 10, 10, 0, '2018-05-13 10:17:50'),
(2, 100, 90, 100, 30, 10, 10, 0, 10, 10, 10, 100, 30, 10, 10, 10, 10, 10, 0, '2018-05-13 10:17:54'),
(3, 80, 110, 120, 20, 5, 5, 0, 5, 5, 5, 110, 115, 10, 5, 10, 5, 7, 0, '2018-05-13 10:19:12'),
(4, 80, 45, 20, 5, 1, 1, 0, 0, 1, 0, 70, 10, 1, 5, 4, 3, 2, 0, '2018-05-13 10:21:35'),
(5, 150, 135, 100, 20, 5, 5, 0, 5, 5, 5, 170, 35, 6, 4, 7, 5, 9, 0, '2018-05-13 10:28:54'),
(6, 200, 180, 150, 36, 6, 9, 0, 8, 7, 4, 160, 60, 9, 8, 7, 8, 9, 0, '2018-05-13 10:31:21'),
(7, 190, 180, 90, 10, 1, 1, 0, 12, 3, 8, 75, 6, 2, 1, 2, 4, 5, 0, '2018-05-13 10:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `female`
--

CREATE TABLE `female` (
  `wr_id` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `cnt_ladies` int(20) NOT NULL,
  `l_live_dustbin` int(20) NOT NULL,
  `l_live_airquality` int(20) NOT NULL,
  `l_live_water` int(20) NOT NULL,
  `l_live_floor1` int(20) NOT NULL,
  `l_live_floor2` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `female`
--

INSERT INTO `female` (`wr_id`, `id`, `cnt_ladies`, `l_live_dustbin`, `l_live_airquality`, `l_live_water`, `l_live_floor1`, `l_live_floor2`, `date`) VALUES
('', 1, 13, 0, 0, 0, 0, 0, '2018-05-16 16:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `live`
--

CREATE TABLE `live` (
  `wr_id` varchar(20) NOT NULL,
  `id` int(20) NOT NULL,
  `g_fb_good` int(20) NOT NULL,
  `g_fb_bad` int(20) NOT NULL,
  `g_fb_dustbin` int(20) NOT NULL,
  `g_fb_smell` int(20) NOT NULL,
  `g_fb_floor` int(20) NOT NULL,
  `g_fb_toiletpaper` int(20) NOT NULL,
  `g_fb_handwash` int(20) NOT NULL,
  `g_fb_washbasin` int(20) NOT NULL,
  `l_fb_good` int(20) NOT NULL,
  `l_fb_bad` int(20) NOT NULL,
  `l_fb_dustbin` int(20) NOT NULL,
  `l_fb_smell` int(20) NOT NULL,
  `l_fb_floor` int(20) NOT NULL,
  `l_fb_toiletpaper` int(20) NOT NULL,
  `l_fb_handwash` int(20) NOT NULL,
  `l_fb_washbasin` int(20) NOT NULL,
  `cnt_handicap` int(20) NOT NULL,
  `cnt_gents` int(20) NOT NULL,
  `cnt_ladies` int(20) NOT NULL,
  `g_live_dustbin` int(20) NOT NULL,
  `g_live_airquality` int(20) NOT NULL,
  `g_live_water` int(20) NOT NULL,
  `g_live_floor1` int(20) NOT NULL,
  `g_live_floor2` int(20) NOT NULL,
  `l_live_dustbin` int(20) NOT NULL,
  `l_live_airquality` int(20) NOT NULL,
  `l_live_water` int(20) NOT NULL,
  `l_live_floor1` int(20) NOT NULL,
  `l_live_floor2` int(20) NOT NULL,
  `l_cleanstatus` int(20) NOT NULL,
  `g_cleanstatus` int(20) NOT NULL,
  `l_lastclean` datetime NOT NULL,
  `g_lastclean` datetime NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `live`
--

INSERT INTO `live` (`wr_id`, `id`, `g_fb_good`, `g_fb_bad`, `g_fb_dustbin`, `g_fb_smell`, `g_fb_floor`, `g_fb_toiletpaper`, `g_fb_handwash`, `g_fb_washbasin`, `l_fb_good`, `l_fb_bad`, `l_fb_dustbin`, `l_fb_smell`, `l_fb_floor`, `l_fb_toiletpaper`, `l_fb_handwash`, `l_fb_washbasin`, `cnt_handicap`, `cnt_gents`, `cnt_ladies`, `g_live_dustbin`, `g_live_airquality`, `g_live_water`, `g_live_floor1`, `g_live_floor2`, `l_live_dustbin`, `l_live_airquality`, `l_live_water`, `l_live_floor1`, `l_live_floor2`, `l_cleanstatus`, `g_cleanstatus`, `l_lastclean`, `g_lastclean`, `date`) VALUES
('', 1, 41, 42, 8, 7, 4, 3, 4, 2, 3, 7, 2, 3, 2, 2, 2, 3, 0, 13, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-05-17 01:01:19', '2018-05-17 12:40:01', '2018-05-15 07:43:40'),
('', 1, 41, 42, 8, 7, 4, 3, 4, 2, 3, 7, 2, 3, 2, 2, 2, 3, 0, 13, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-05-17 01:01:19', '2018-05-17 12:40:01', '2018-05-15 07:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `title`) VALUES
(1, 'PUNE', 'pune', 'airport'),
(2, 'AAI', 'aai', 'aai');

-- --------------------------------------------------------

--
-- Table structure for table `male`
--

CREATE TABLE `male` (
  `wr_id` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `cnt_gents` int(20) NOT NULL,
  `g_live_dustbin` int(20) NOT NULL,
  `g_live_airquality` int(20) NOT NULL,
  `g_live_water` int(20) NOT NULL,
  `g_live_floor1` int(20) NOT NULL,
  `g_live_floor2` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `male`
--

INSERT INTO `male` (`wr_id`, `id`, `cnt_gents`, `g_live_dustbin`, `g_live_airquality`, `g_live_water`, `g_live_floor1`, `g_live_floor2`, `date`) VALUES
('', 1, 25, 0, 0, 0, 0, 0, '2018-05-16 16:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `wr_id` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `response` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `wr_id`, `title`, `response`) VALUES
(1, '', 'washroom is cleaned', '2018-05-17 20:21:00'),
(2, '', 'ladies washroom is cleaned', '2018-05-17 21:39:18'),
(3, '', 'gents washroom is cleaned', '2018-05-17 21:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `weekly`
--

CREATE TABLE `weekly` (
  `id` int(11) NOT NULL,
  `cnt_gents` int(20) NOT NULL,
  `cnt_ledies` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weekly`
--

INSERT INTO `weekly` (`id`, `cnt_gents`, `cnt_ledies`, `date`) VALUES
(1, 10, 10, '2018-05-13 14:34:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily`
--
ALTER TABLE `daily`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `female`
--
ALTER TABLE `female`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `male`
--
ALTER TABLE `male`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekly`
--
ALTER TABLE `weekly`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily`
--
ALTER TABLE `daily`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `female`
--
ALTER TABLE `female`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `male`
--
ALTER TABLE `male`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `weekly`
--
ALTER TABLE `weekly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
