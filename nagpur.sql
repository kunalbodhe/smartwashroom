-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 10:36 PM
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
-- Database: `nagpur`
--

-- --------------------------------------------------------

--
-- Table structure for table `clean_gents1`
--

CREATE TABLE `clean_gents1` (
  `id` int(20) NOT NULL,
  `g_cleanstatus` int(20) NOT NULL,
  `responce` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clean_gents1`
--

INSERT INTO `clean_gents1` (`id`, `g_cleanstatus`, `responce`) VALUES
(1, 1, '2018-05-16 20:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `clean_gents2`
--

CREATE TABLE `clean_gents2` (
  `id` int(20) NOT NULL,
  `g_cleanstatus` int(20) NOT NULL,
  `responce` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clean_gents2`
--

INSERT INTO `clean_gents2` (`id`, `g_cleanstatus`, `responce`) VALUES
(1, 1, '2018-05-16 20:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `clean_gents3`
--

CREATE TABLE `clean_gents3` (
  `id` int(20) NOT NULL,
  `g_cleanstatus` int(20) NOT NULL,
  `responce` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clean_gents3`
--

INSERT INTO `clean_gents3` (`id`, `g_cleanstatus`, `responce`) VALUES
(1, 1, '2018-05-16 20:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `clean_gents4`
--

CREATE TABLE `clean_gents4` (
  `id` int(20) NOT NULL,
  `g_cleanstatus` int(20) NOT NULL,
  `responce` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clean_gents4`
--

INSERT INTO `clean_gents4` (`id`, `g_cleanstatus`, `responce`) VALUES
(1, 1, '2018-05-16 20:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `clean_gents5`
--

CREATE TABLE `clean_gents5` (
  `id` int(20) NOT NULL,
  `g_cleanstatus` int(20) NOT NULL,
  `responce` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clean_gents5`
--

INSERT INTO `clean_gents5` (`id`, `g_cleanstatus`, `responce`) VALUES
(1, 1, '2018-05-16 20:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `clean_gents6`
--

CREATE TABLE `clean_gents6` (
  `id` int(20) NOT NULL,
  `g_cleanstatus` int(20) NOT NULL,
  `responce` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clean_gents6`
--

INSERT INTO `clean_gents6` (`id`, `g_cleanstatus`, `responce`) VALUES
(1, 1, '2018-05-16 20:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `clean_ladies1`
--

CREATE TABLE `clean_ladies1` (
  `id` int(20) NOT NULL,
  `l_cleanstatus` int(20) NOT NULL,
  `responce` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clean_ladies1`
--

INSERT INTO `clean_ladies1` (`id`, `l_cleanstatus`, `responce`) VALUES
(1, 1, '2018-05-16 19:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `clean_ladies2`
--

CREATE TABLE `clean_ladies2` (
  `id` int(20) NOT NULL,
  `l_cleanstatus` int(20) NOT NULL,
  `responce` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clean_ladies2`
--

INSERT INTO `clean_ladies2` (`id`, `l_cleanstatus`, `responce`) VALUES
(1, 1, '2018-05-16 19:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `clean_ladies3`
--

CREATE TABLE `clean_ladies3` (
  `id` int(20) NOT NULL,
  `l_cleanstatus` int(20) NOT NULL,
  `responce` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clean_ladies3`
--

INSERT INTO `clean_ladies3` (`id`, `l_cleanstatus`, `responce`) VALUES
(1, 1, '2018-05-16 19:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `clean_ladies4`
--

CREATE TABLE `clean_ladies4` (
  `id` int(20) NOT NULL,
  `l_cleanstatus` int(20) NOT NULL,
  `responce` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clean_ladies4`
--

INSERT INTO `clean_ladies4` (`id`, `l_cleanstatus`, `responce`) VALUES
(1, 1, '2018-05-16 19:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `clean_ladies5`
--

CREATE TABLE `clean_ladies5` (
  `id` int(20) NOT NULL,
  `l_cleanstatus` int(20) NOT NULL,
  `responce` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clean_ladies5`
--

INSERT INTO `clean_ladies5` (`id`, `l_cleanstatus`, `responce`) VALUES
(1, 1, '2018-05-16 19:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `clean_ladies6`
--

CREATE TABLE `clean_ladies6` (
  `id` int(20) NOT NULL,
  `l_cleanstatus` int(20) NOT NULL,
  `responce` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clean_ladies6`
--

INSERT INTO `clean_ladies6` (`id`, `l_cleanstatus`, `responce`) VALUES
(1, 1, '2018-05-16 19:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `daily1`
--

CREATE TABLE `daily1` (
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
-- Dumping data for table `daily1`
--

INSERT INTO `daily1` (`id`, `cnt_gents`, `cnt_ladies`, `l_fb_good`, `l_fb_bad`, `l_fb_dustbin`, `l_fb_smell`, `l_fb_floor`, `l_fb_toilletpaper`, `l_fb_handwash`, `l_fb_washbasin`, `g_fb_good`, `g_fb_bad`, `g_fb_dustbin`, `g_fb_smell`, `g_fb_toilletpaper`, `g_fb_handwash`, `g_fb_washbasin`, `g_fb_floor`, `date`) VALUES
(1, 100, 90, 100, 30, 10, 10, 0, 10, 10, 10, 100, 30, 10, 10, 10, 10, 10, 0, '2018-05-13 10:17:50'),
(2, 100, 90, 100, 30, 10, 10, 0, 10, 10, 10, 100, 30, 10, 10, 10, 10, 10, 0, '2018-05-13 10:17:54'),
(3, 80, 110, 120, 20, 5, 5, 0, 5, 5, 5, 110, 115, 10, 5, 10, 5, 7, 0, '2018-05-13 10:19:12'),
(4, 80, 45, 20, 5, 1, 1, 0, 0, 1, 0, 70, 10, 1, 5, 4, 3, 2, 0, '2018-05-13 10:21:35'),
(5, 150, 135, 100, 20, 5, 5, 0, 5, 5, 5, 170, 35, 6, 4, 7, 5, 9, 0, '2018-05-13 10:28:54'),
(6, 200, 180, 150, 36, 6, 9, 0, 8, 7, 4, 160, 60, 9, 8, 7, 8, 9, 0, '2018-05-13 10:31:21'),
(7, 190, 180, 90, 10, 1, 1, 0, 12, 3, 8, 75, 6, 2, 1, 2, 4, 5, 0, '2018-05-13 10:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `daily2`
--

CREATE TABLE `daily2` (
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
-- Dumping data for table `daily2`
--

INSERT INTO `daily2` (`id`, `cnt_gents`, `cnt_ladies`, `l_fb_good`, `l_fb_bad`, `l_fb_dustbin`, `l_fb_smell`, `l_fb_floor`, `l_fb_toilletpaper`, `l_fb_handwash`, `l_fb_washbasin`, `g_fb_good`, `g_fb_bad`, `g_fb_dustbin`, `g_fb_smell`, `g_fb_toilletpaper`, `g_fb_handwash`, `g_fb_washbasin`, `g_fb_floor`, `date`) VALUES
(1, 100, 90, 100, 30, 10, 10, 0, 10, 10, 10, 100, 30, 10, 10, 10, 10, 10, 0, '2018-05-13 10:17:50'),
(2, 100, 90, 100, 30, 10, 10, 0, 10, 10, 10, 100, 30, 10, 10, 10, 10, 10, 0, '2018-05-13 10:17:54'),
(3, 80, 110, 120, 20, 5, 5, 0, 5, 5, 5, 110, 115, 10, 5, 10, 5, 7, 0, '2018-05-13 10:19:12'),
(4, 80, 45, 20, 5, 1, 1, 0, 0, 1, 0, 70, 10, 1, 5, 4, 3, 2, 0, '2018-05-13 10:21:35'),
(5, 150, 135, 100, 20, 5, 5, 0, 5, 5, 5, 170, 35, 6, 4, 7, 5, 9, 0, '2018-05-13 10:28:54'),
(6, 200, 180, 150, 36, 6, 9, 0, 8, 7, 4, 160, 60, 9, 8, 7, 8, 9, 0, '2018-05-13 10:31:21'),
(7, 190, 180, 90, 10, 1, 1, 0, 12, 3, 8, 75, 6, 2, 1, 2, 4, 5, 0, '2018-05-13 10:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `daily3`
--

CREATE TABLE `daily3` (
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
-- Dumping data for table `daily3`
--

INSERT INTO `daily3` (`id`, `cnt_gents`, `cnt_ladies`, `l_fb_good`, `l_fb_bad`, `l_fb_dustbin`, `l_fb_smell`, `l_fb_floor`, `l_fb_toilletpaper`, `l_fb_handwash`, `l_fb_washbasin`, `g_fb_good`, `g_fb_bad`, `g_fb_dustbin`, `g_fb_smell`, `g_fb_toilletpaper`, `g_fb_handwash`, `g_fb_washbasin`, `g_fb_floor`, `date`) VALUES
(1, 100, 90, 100, 30, 10, 10, 0, 10, 10, 10, 100, 30, 10, 10, 10, 10, 10, 0, '2018-05-13 10:17:50'),
(2, 100, 90, 100, 30, 10, 10, 0, 10, 10, 10, 100, 30, 10, 10, 10, 10, 10, 0, '2018-05-13 10:17:54'),
(3, 80, 110, 120, 20, 5, 5, 0, 5, 5, 5, 110, 115, 10, 5, 10, 5, 7, 0, '2018-05-13 10:19:12'),
(4, 80, 45, 20, 5, 1, 1, 0, 0, 1, 0, 70, 10, 1, 5, 4, 3, 2, 0, '2018-05-13 10:21:35'),
(5, 150, 135, 100, 20, 5, 5, 0, 5, 5, 5, 170, 35, 6, 4, 7, 5, 9, 0, '2018-05-13 10:28:54'),
(6, 200, 180, 150, 36, 6, 9, 0, 8, 7, 4, 160, 60, 9, 8, 7, 8, 9, 0, '2018-05-13 10:31:21'),
(7, 190, 180, 90, 10, 1, 1, 0, 12, 3, 8, 75, 6, 2, 1, 2, 4, 5, 0, '2018-05-13 10:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `daily4`
--

CREATE TABLE `daily4` (
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
-- Dumping data for table `daily4`
--

INSERT INTO `daily4` (`id`, `cnt_gents`, `cnt_ladies`, `l_fb_good`, `l_fb_bad`, `l_fb_dustbin`, `l_fb_smell`, `l_fb_floor`, `l_fb_toilletpaper`, `l_fb_handwash`, `l_fb_washbasin`, `g_fb_good`, `g_fb_bad`, `g_fb_dustbin`, `g_fb_smell`, `g_fb_toilletpaper`, `g_fb_handwash`, `g_fb_washbasin`, `g_fb_floor`, `date`) VALUES
(1, 100, 90, 100, 30, 10, 10, 0, 10, 10, 10, 100, 30, 10, 10, 10, 10, 10, 0, '2018-05-13 10:17:50'),
(2, 100, 90, 100, 30, 10, 10, 0, 10, 10, 10, 100, 30, 10, 10, 10, 10, 10, 0, '2018-05-13 10:17:54'),
(3, 80, 110, 120, 20, 5, 5, 0, 5, 5, 5, 110, 115, 10, 5, 10, 5, 7, 0, '2018-05-13 10:19:12'),
(4, 80, 45, 20, 5, 1, 1, 0, 0, 1, 0, 70, 10, 1, 5, 4, 3, 2, 0, '2018-05-13 10:21:35'),
(5, 150, 135, 100, 20, 5, 5, 0, 5, 5, 5, 170, 35, 6, 4, 7, 5, 9, 0, '2018-05-13 10:28:54'),
(6, 200, 180, 150, 36, 6, 9, 0, 8, 7, 4, 160, 60, 9, 8, 7, 8, 9, 0, '2018-05-13 10:31:21'),
(7, 190, 180, 90, 10, 1, 1, 0, 12, 3, 8, 75, 6, 2, 1, 2, 4, 5, 0, '2018-05-13 10:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `daily5`
--

CREATE TABLE `daily5` (
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
-- Dumping data for table `daily5`
--

INSERT INTO `daily5` (`id`, `cnt_gents`, `cnt_ladies`, `l_fb_good`, `l_fb_bad`, `l_fb_dustbin`, `l_fb_smell`, `l_fb_floor`, `l_fb_toilletpaper`, `l_fb_handwash`, `l_fb_washbasin`, `g_fb_good`, `g_fb_bad`, `g_fb_dustbin`, `g_fb_smell`, `g_fb_toilletpaper`, `g_fb_handwash`, `g_fb_washbasin`, `g_fb_floor`, `date`) VALUES
(1, 100, 90, 100, 30, 10, 10, 0, 10, 10, 10, 100, 30, 10, 10, 10, 10, 10, 0, '2018-05-13 10:17:50'),
(2, 100, 90, 100, 30, 10, 10, 0, 10, 10, 10, 100, 30, 10, 10, 10, 10, 10, 0, '2018-05-13 10:17:54'),
(3, 80, 110, 120, 20, 5, 5, 0, 5, 5, 5, 110, 115, 10, 5, 10, 5, 7, 0, '2018-05-13 10:19:12'),
(4, 80, 45, 20, 5, 1, 1, 0, 0, 1, 0, 70, 10, 1, 5, 4, 3, 2, 0, '2018-05-13 10:21:35'),
(5, 150, 135, 100, 20, 5, 5, 0, 5, 5, 5, 170, 35, 6, 4, 7, 5, 9, 0, '2018-05-13 10:28:54'),
(6, 200, 180, 150, 36, 6, 9, 0, 8, 7, 4, 160, 60, 9, 8, 7, 8, 9, 0, '2018-05-13 10:31:21'),
(7, 190, 180, 90, 10, 1, 1, 0, 12, 3, 8, 75, 6, 2, 1, 2, 4, 5, 0, '2018-05-13 10:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `daily6`
--

CREATE TABLE `daily6` (
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
-- Dumping data for table `daily6`
--

INSERT INTO `daily6` (`id`, `cnt_gents`, `cnt_ladies`, `l_fb_good`, `l_fb_bad`, `l_fb_dustbin`, `l_fb_smell`, `l_fb_floor`, `l_fb_toilletpaper`, `l_fb_handwash`, `l_fb_washbasin`, `g_fb_good`, `g_fb_bad`, `g_fb_dustbin`, `g_fb_smell`, `g_fb_toilletpaper`, `g_fb_handwash`, `g_fb_washbasin`, `g_fb_floor`, `date`) VALUES
(1, 100, 90, 100, 30, 10, 10, 0, 10, 10, 10, 100, 30, 10, 10, 10, 10, 10, 0, '2018-05-13 10:17:50'),
(2, 100, 90, 100, 30, 10, 10, 0, 10, 10, 10, 100, 30, 10, 10, 10, 10, 10, 0, '2018-05-13 10:17:54'),
(3, 80, 110, 120, 20, 5, 5, 0, 5, 5, 5, 110, 115, 10, 5, 10, 5, 7, 0, '2018-05-13 10:19:12'),
(4, 80, 45, 20, 5, 1, 1, 0, 0, 1, 0, 70, 10, 1, 5, 4, 3, 2, 0, '2018-05-13 10:21:35'),
(5, 150, 135, 100, 20, 5, 5, 0, 5, 5, 5, 170, 35, 6, 4, 7, 5, 9, 0, '2018-05-13 10:28:54'),
(6, 200, 180, 150, 36, 6, 9, 0, 8, 7, 4, 160, 60, 9, 8, 7, 8, 9, 0, '2018-05-13 10:31:21'),
(7, 190, 180, 90, 10, 1, 1, 0, 12, 3, 8, 75, 6, 2, 1, 2, 4, 5, 0, '2018-05-13 10:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `female1`
--

CREATE TABLE `female1` (
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
-- Dumping data for table `female1`
--

INSERT INTO `female1` (`wr_id`, `id`, `cnt_ladies`, `l_live_dustbin`, `l_live_airquality`, `l_live_water`, `l_live_floor1`, `l_live_floor2`, `date`) VALUES
('', 1, 13, 0, 0, 0, 0, 0, '2018-05-16 16:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `female2`
--

CREATE TABLE `female2` (
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
-- Dumping data for table `female2`
--

INSERT INTO `female2` (`wr_id`, `id`, `cnt_ladies`, `l_live_dustbin`, `l_live_airquality`, `l_live_water`, `l_live_floor1`, `l_live_floor2`, `date`) VALUES
('', 1, 13, 0, 0, 0, 0, 0, '2018-05-16 16:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `female3`
--

CREATE TABLE `female3` (
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
-- Dumping data for table `female3`
--

INSERT INTO `female3` (`wr_id`, `id`, `cnt_ladies`, `l_live_dustbin`, `l_live_airquality`, `l_live_water`, `l_live_floor1`, `l_live_floor2`, `date`) VALUES
('', 1, 13, 0, 0, 0, 0, 0, '2018-05-16 16:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `female4`
--

CREATE TABLE `female4` (
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
-- Dumping data for table `female4`
--

INSERT INTO `female4` (`wr_id`, `id`, `cnt_ladies`, `l_live_dustbin`, `l_live_airquality`, `l_live_water`, `l_live_floor1`, `l_live_floor2`, `date`) VALUES
('', 1, 13, 0, 0, 0, 0, 0, '2018-05-16 16:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `female5`
--

CREATE TABLE `female5` (
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
-- Dumping data for table `female5`
--

INSERT INTO `female5` (`wr_id`, `id`, `cnt_ladies`, `l_live_dustbin`, `l_live_airquality`, `l_live_water`, `l_live_floor1`, `l_live_floor2`, `date`) VALUES
('', 1, 13, 0, 0, 0, 0, 0, '2018-05-16 16:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `female6`
--

CREATE TABLE `female6` (
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
-- Dumping data for table `female6`
--

INSERT INTO `female6` (`wr_id`, `id`, `cnt_ladies`, `l_live_dustbin`, `l_live_airquality`, `l_live_water`, `l_live_floor1`, `l_live_floor2`, `date`) VALUES
('', 1, 13, 0, 0, 0, 0, 0, '2018-05-16 16:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `live1`
--

CREATE TABLE `live1` (
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
-- Dumping data for table `live1`
--

INSERT INTO `live1` (`wr_id`, `id`, `g_fb_good`, `g_fb_bad`, `g_fb_dustbin`, `g_fb_smell`, `g_fb_floor`, `g_fb_toiletpaper`, `g_fb_handwash`, `g_fb_washbasin`, `l_fb_good`, `l_fb_bad`, `l_fb_dustbin`, `l_fb_smell`, `l_fb_floor`, `l_fb_toiletpaper`, `l_fb_handwash`, `l_fb_washbasin`, `cnt_handicap`, `cnt_gents`, `cnt_ladies`, `g_live_dustbin`, `g_live_airquality`, `g_live_water`, `g_live_floor1`, `g_live_floor2`, `l_live_dustbin`, `l_live_airquality`, `l_live_water`, `l_live_floor1`, `l_live_floor2`, `l_cleanstatus`, `g_cleanstatus`, `l_lastclean`, `g_lastclean`, `date`) VALUES
('', 1, 41, 42, 8, 7, 4, 3, 4, 2, 3, 7, 2, 3, 2, 2, 2, 3, 0, 13, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-05-17 01:01:19', '2018-05-17 12:40:01', '2018-05-15 07:43:40'),
('', 1, 41, 42, 8, 7, 4, 3, 4, 2, 3, 7, 2, 3, 2, 2, 2, 3, 0, 13, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-05-17 01:01:19', '2018-05-17 12:40:01', '2018-05-15 07:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `live2`
--

CREATE TABLE `live2` (
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
-- Dumping data for table `live2`
--

INSERT INTO `live2` (`wr_id`, `id`, `g_fb_good`, `g_fb_bad`, `g_fb_dustbin`, `g_fb_smell`, `g_fb_floor`, `g_fb_toiletpaper`, `g_fb_handwash`, `g_fb_washbasin`, `l_fb_good`, `l_fb_bad`, `l_fb_dustbin`, `l_fb_smell`, `l_fb_floor`, `l_fb_toiletpaper`, `l_fb_handwash`, `l_fb_washbasin`, `cnt_handicap`, `cnt_gents`, `cnt_ladies`, `g_live_dustbin`, `g_live_airquality`, `g_live_water`, `g_live_floor1`, `g_live_floor2`, `l_live_dustbin`, `l_live_airquality`, `l_live_water`, `l_live_floor1`, `l_live_floor2`, `l_cleanstatus`, `g_cleanstatus`, `l_lastclean`, `g_lastclean`, `date`) VALUES
('', 1, 41, 42, 8, 7, 4, 3, 4, 2, 3, 7, 2, 3, 2, 2, 2, 3, 0, 13, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-05-17 01:01:19', '2018-05-17 12:40:01', '2018-05-15 07:43:40'),
('', 1, 41, 42, 8, 7, 4, 3, 4, 2, 3, 7, 2, 3, 2, 2, 2, 3, 0, 13, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-05-17 01:01:19', '2018-05-17 12:40:01', '2018-05-15 07:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `live3`
--

CREATE TABLE `live3` (
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
-- Dumping data for table `live3`
--

INSERT INTO `live3` (`wr_id`, `id`, `g_fb_good`, `g_fb_bad`, `g_fb_dustbin`, `g_fb_smell`, `g_fb_floor`, `g_fb_toiletpaper`, `g_fb_handwash`, `g_fb_washbasin`, `l_fb_good`, `l_fb_bad`, `l_fb_dustbin`, `l_fb_smell`, `l_fb_floor`, `l_fb_toiletpaper`, `l_fb_handwash`, `l_fb_washbasin`, `cnt_handicap`, `cnt_gents`, `cnt_ladies`, `g_live_dustbin`, `g_live_airquality`, `g_live_water`, `g_live_floor1`, `g_live_floor2`, `l_live_dustbin`, `l_live_airquality`, `l_live_water`, `l_live_floor1`, `l_live_floor2`, `l_cleanstatus`, `g_cleanstatus`, `l_lastclean`, `g_lastclean`, `date`) VALUES
('', 1, 41, 42, 8, 7, 4, 3, 4, 2, 3, 7, 2, 3, 2, 2, 2, 3, 0, 13, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-05-17 01:01:19', '2018-05-17 12:40:01', '2018-05-15 07:43:40'),
('', 1, 41, 42, 8, 7, 4, 3, 4, 2, 3, 7, 2, 3, 2, 2, 2, 3, 0, 13, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-05-17 01:01:19', '2018-05-17 12:40:01', '2018-05-15 07:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `live4`
--

CREATE TABLE `live4` (
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
-- Dumping data for table `live4`
--

INSERT INTO `live4` (`wr_id`, `id`, `g_fb_good`, `g_fb_bad`, `g_fb_dustbin`, `g_fb_smell`, `g_fb_floor`, `g_fb_toiletpaper`, `g_fb_handwash`, `g_fb_washbasin`, `l_fb_good`, `l_fb_bad`, `l_fb_dustbin`, `l_fb_smell`, `l_fb_floor`, `l_fb_toiletpaper`, `l_fb_handwash`, `l_fb_washbasin`, `cnt_handicap`, `cnt_gents`, `cnt_ladies`, `g_live_dustbin`, `g_live_airquality`, `g_live_water`, `g_live_floor1`, `g_live_floor2`, `l_live_dustbin`, `l_live_airquality`, `l_live_water`, `l_live_floor1`, `l_live_floor2`, `l_cleanstatus`, `g_cleanstatus`, `l_lastclean`, `g_lastclean`, `date`) VALUES
('', 1, 41, 42, 8, 7, 4, 3, 4, 2, 3, 7, 2, 3, 2, 2, 2, 3, 0, 13, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-05-17 01:01:19', '2018-05-17 12:40:01', '2018-05-15 07:43:40'),
('', 1, 41, 42, 8, 7, 4, 3, 4, 2, 3, 7, 2, 3, 2, 2, 2, 3, 0, 13, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-05-17 01:01:19', '2018-05-17 12:40:01', '2018-05-15 07:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `live5`
--

CREATE TABLE `live5` (
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
-- Dumping data for table `live5`
--

INSERT INTO `live5` (`wr_id`, `id`, `g_fb_good`, `g_fb_bad`, `g_fb_dustbin`, `g_fb_smell`, `g_fb_floor`, `g_fb_toiletpaper`, `g_fb_handwash`, `g_fb_washbasin`, `l_fb_good`, `l_fb_bad`, `l_fb_dustbin`, `l_fb_smell`, `l_fb_floor`, `l_fb_toiletpaper`, `l_fb_handwash`, `l_fb_washbasin`, `cnt_handicap`, `cnt_gents`, `cnt_ladies`, `g_live_dustbin`, `g_live_airquality`, `g_live_water`, `g_live_floor1`, `g_live_floor2`, `l_live_dustbin`, `l_live_airquality`, `l_live_water`, `l_live_floor1`, `l_live_floor2`, `l_cleanstatus`, `g_cleanstatus`, `l_lastclean`, `g_lastclean`, `date`) VALUES
('', 1, 41, 42, 8, 7, 4, 3, 4, 2, 3, 7, 2, 3, 2, 2, 2, 3, 0, 13, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-05-17 01:01:19', '2018-05-17 12:40:01', '2018-05-15 07:43:40'),
('', 1, 41, 42, 8, 7, 4, 3, 4, 2, 3, 7, 2, 3, 2, 2, 2, 3, 0, 13, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '2018-05-17 01:01:19', '2018-05-17 12:40:01', '2018-05-15 07:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `live6`
--

CREATE TABLE `live6` (
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
-- Dumping data for table `live6`
--

INSERT INTO `live6` (`wr_id`, `id`, `g_fb_good`, `g_fb_bad`, `g_fb_dustbin`, `g_fb_smell`, `g_fb_floor`, `g_fb_toiletpaper`, `g_fb_handwash`, `g_fb_washbasin`, `l_fb_good`, `l_fb_bad`, `l_fb_dustbin`, `l_fb_smell`, `l_fb_floor`, `l_fb_toiletpaper`, `l_fb_handwash`, `l_fb_washbasin`, `cnt_handicap`, `cnt_gents`, `cnt_ladies`, `g_live_dustbin`, `g_live_airquality`, `g_live_water`, `g_live_floor1`, `g_live_floor2`, `l_live_dustbin`, `l_live_airquality`, `l_live_water`, `l_live_floor1`, `l_live_floor2`, `l_cleanstatus`, `g_cleanstatus`, `l_lastclean`, `g_lastclean`, `date`) VALUES
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
-- Table structure for table `male1`
--

CREATE TABLE `male1` (
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
-- Dumping data for table `male1`
--

INSERT INTO `male1` (`wr_id`, `id`, `cnt_gents`, `g_live_dustbin`, `g_live_airquality`, `g_live_water`, `g_live_floor1`, `g_live_floor2`, `date`) VALUES
('', 1, 25, 0, 0, 0, 0, 0, '2018-05-16 16:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `male2`
--

CREATE TABLE `male2` (
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
-- Dumping data for table `male2`
--

INSERT INTO `male2` (`wr_id`, `id`, `cnt_gents`, `g_live_dustbin`, `g_live_airquality`, `g_live_water`, `g_live_floor1`, `g_live_floor2`, `date`) VALUES
('', 1, 25, 0, 0, 0, 0, 0, '2018-05-16 16:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `male3`
--

CREATE TABLE `male3` (
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
-- Dumping data for table `male3`
--

INSERT INTO `male3` (`wr_id`, `id`, `cnt_gents`, `g_live_dustbin`, `g_live_airquality`, `g_live_water`, `g_live_floor1`, `g_live_floor2`, `date`) VALUES
('', 1, 25, 0, 0, 0, 0, 0, '2018-05-16 16:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `male4`
--

CREATE TABLE `male4` (
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
-- Dumping data for table `male4`
--

INSERT INTO `male4` (`wr_id`, `id`, `cnt_gents`, `g_live_dustbin`, `g_live_airquality`, `g_live_water`, `g_live_floor1`, `g_live_floor2`, `date`) VALUES
('', 1, 25, 0, 0, 0, 0, 0, '2018-05-16 16:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `male5`
--

CREATE TABLE `male5` (
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
-- Dumping data for table `male5`
--

INSERT INTO `male5` (`wr_id`, `id`, `cnt_gents`, `g_live_dustbin`, `g_live_airquality`, `g_live_water`, `g_live_floor1`, `g_live_floor2`, `date`) VALUES
('', 1, 25, 0, 0, 0, 0, 0, '2018-05-16 16:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `male6`
--

CREATE TABLE `male6` (
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
-- Dumping data for table `male6`
--

INSERT INTO `male6` (`wr_id`, `id`, `cnt_gents`, `g_live_dustbin`, `g_live_airquality`, `g_live_water`, `g_live_floor1`, `g_live_floor2`, `date`) VALUES
('', 1, 25, 0, 0, 0, 0, 0, '2018-05-16 16:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `notification1`
--

CREATE TABLE `notification1` (
  `id` int(11) NOT NULL,
  `wr_id` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `response` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification1`
--

INSERT INTO `notification1` (`id`, `wr_id`, `title`, `response`) VALUES
(1, '', 'washroom is cleaned', '2018-05-17 20:21:00'),
(2, '', 'ladies washroom is cleaned', '2018-05-17 21:39:18'),
(3, '', 'gents washroom is cleaned', '2018-05-17 21:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `notification2`
--

CREATE TABLE `notification2` (
  `id` int(11) NOT NULL,
  `wr_id` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `response` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification2`
--

INSERT INTO `notification2` (`id`, `wr_id`, `title`, `response`) VALUES
(1, '', 'washroom is cleaned', '2018-05-17 20:21:00'),
(2, '', 'ladies washroom is cleaned', '2018-05-17 21:39:18'),
(3, '', 'gents washroom is cleaned', '2018-05-17 21:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `notification3`
--

CREATE TABLE `notification3` (
  `id` int(11) NOT NULL,
  `wr_id` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `response` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification3`
--

INSERT INTO `notification3` (`id`, `wr_id`, `title`, `response`) VALUES
(1, '', 'washroom is cleaned', '2018-05-17 20:21:00'),
(2, '', 'ladies washroom is cleaned', '2018-05-17 21:39:18'),
(3, '', 'gents washroom is cleaned', '2018-05-17 21:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `notification4`
--

CREATE TABLE `notification4` (
  `id` int(11) NOT NULL,
  `wr_id` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `response` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification4`
--

INSERT INTO `notification4` (`id`, `wr_id`, `title`, `response`) VALUES
(1, '', 'washroom is cleaned', '2018-05-17 20:21:00'),
(2, '', 'ladies washroom is cleaned', '2018-05-17 21:39:18'),
(3, '', 'gents washroom is cleaned', '2018-05-17 21:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `notification5`
--

CREATE TABLE `notification5` (
  `id` int(11) NOT NULL,
  `wr_id` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `response` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification5`
--

INSERT INTO `notification5` (`id`, `wr_id`, `title`, `response`) VALUES
(1, '', 'washroom is cleaned', '2018-05-17 20:21:00'),
(2, '', 'ladies washroom is cleaned', '2018-05-17 21:39:18'),
(3, '', 'gents washroom is cleaned', '2018-05-17 21:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `notification6`
--

CREATE TABLE `notification6` (
  `id` int(11) NOT NULL,
  `wr_id` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `response` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification6`
--

INSERT INTO `notification6` (`id`, `wr_id`, `title`, `response`) VALUES
(1, '', 'washroom is cleaned', '2018-05-17 20:21:00'),
(2, '', 'ladies washroom is cleaned', '2018-05-17 21:39:18'),
(3, '', 'gents washroom is cleaned', '2018-05-17 21:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `weekly1`
--

CREATE TABLE `weekly1` (
  `id` int(11) NOT NULL,
  `cnt_gents` int(20) NOT NULL,
  `cnt_ledies` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weekly1`
--

INSERT INTO `weekly1` (`id`, `cnt_gents`, `cnt_ledies`, `date`) VALUES
(1, 10, 10, '2018-05-13 14:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `weekly2`
--

CREATE TABLE `weekly2` (
  `id` int(11) NOT NULL,
  `cnt_gents` int(20) NOT NULL,
  `cnt_ledies` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weekly2`
--

INSERT INTO `weekly2` (`id`, `cnt_gents`, `cnt_ledies`, `date`) VALUES
(1, 10, 10, '2018-05-13 14:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `weekly3`
--

CREATE TABLE `weekly3` (
  `id` int(11) NOT NULL,
  `cnt_gents` int(20) NOT NULL,
  `cnt_ledies` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weekly3`
--

INSERT INTO `weekly3` (`id`, `cnt_gents`, `cnt_ledies`, `date`) VALUES
(1, 10, 10, '2018-05-13 14:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `weekly4`
--

CREATE TABLE `weekly4` (
  `id` int(11) NOT NULL,
  `cnt_gents` int(20) NOT NULL,
  `cnt_ledies` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weekly4`
--

INSERT INTO `weekly4` (`id`, `cnt_gents`, `cnt_ledies`, `date`) VALUES
(1, 10, 10, '2018-05-13 14:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `weekly5`
--

CREATE TABLE `weekly5` (
  `id` int(11) NOT NULL,
  `cnt_gents` int(20) NOT NULL,
  `cnt_ledies` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weekly5`
--

INSERT INTO `weekly5` (`id`, `cnt_gents`, `cnt_ledies`, `date`) VALUES
(1, 10, 10, '2018-05-13 14:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `weekly6`
--

CREATE TABLE `weekly6` (
  `id` int(11) NOT NULL,
  `cnt_gents` int(20) NOT NULL,
  `cnt_ledies` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weekly6`
--

INSERT INTO `weekly6` (`id`, `cnt_gents`, `cnt_ledies`, `date`) VALUES
(1, 10, 10, '2018-05-13 14:34:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily1`
--
ALTER TABLE `daily1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily2`
--
ALTER TABLE `daily2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily3`
--
ALTER TABLE `daily3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily4`
--
ALTER TABLE `daily4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily5`
--
ALTER TABLE `daily5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily6`
--
ALTER TABLE `daily6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `female1`
--
ALTER TABLE `female1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `female2`
--
ALTER TABLE `female2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `female3`
--
ALTER TABLE `female3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `female4`
--
ALTER TABLE `female4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `female5`
--
ALTER TABLE `female5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `female6`
--
ALTER TABLE `female6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `male1`
--
ALTER TABLE `male1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `male2`
--
ALTER TABLE `male2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `male3`
--
ALTER TABLE `male3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `male4`
--
ALTER TABLE `male4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `male5`
--
ALTER TABLE `male5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `male6`
--
ALTER TABLE `male6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification1`
--
ALTER TABLE `notification1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification2`
--
ALTER TABLE `notification2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification3`
--
ALTER TABLE `notification3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification4`
--
ALTER TABLE `notification4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification5`
--
ALTER TABLE `notification5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification6`
--
ALTER TABLE `notification6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekly1`
--
ALTER TABLE `weekly1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekly2`
--
ALTER TABLE `weekly2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekly3`
--
ALTER TABLE `weekly3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekly4`
--
ALTER TABLE `weekly4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekly5`
--
ALTER TABLE `weekly5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weekly6`
--
ALTER TABLE `weekly6`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily1`
--
ALTER TABLE `daily1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `daily2`
--
ALTER TABLE `daily2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `daily3`
--
ALTER TABLE `daily3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `daily4`
--
ALTER TABLE `daily4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `daily5`
--
ALTER TABLE `daily5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `daily6`
--
ALTER TABLE `daily6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `female1`
--
ALTER TABLE `female1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `female2`
--
ALTER TABLE `female2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `female3`
--
ALTER TABLE `female3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `female4`
--
ALTER TABLE `female4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `female5`
--
ALTER TABLE `female5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `female6`
--
ALTER TABLE `female6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `male1`
--
ALTER TABLE `male1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `male2`
--
ALTER TABLE `male2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `male3`
--
ALTER TABLE `male3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `male4`
--
ALTER TABLE `male4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `male5`
--
ALTER TABLE `male5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `male6`
--
ALTER TABLE `male6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notification1`
--
ALTER TABLE `notification1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notification2`
--
ALTER TABLE `notification2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notification3`
--
ALTER TABLE `notification3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notification4`
--
ALTER TABLE `notification4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notification5`
--
ALTER TABLE `notification5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notification6`
--
ALTER TABLE `notification6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `weekly1`
--
ALTER TABLE `weekly1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `weekly2`
--
ALTER TABLE `weekly2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `weekly3`
--
ALTER TABLE `weekly3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `weekly4`
--
ALTER TABLE `weekly4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `weekly5`
--
ALTER TABLE `weekly5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `weekly6`
--
ALTER TABLE `weekly6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
