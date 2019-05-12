-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2019 at 01:23 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sscai`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `slug`, `title`, `content`) VALUES
(1, 'mission', 'Mission', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(2, 'vision', 'Vision', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(3, 'why-you-choose', 'WHY YOU CHOOSE SSCAI?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum'),
(4, 'address', 'Address', '039 Reyes Compund NIA Road, Carsadang Bago II, City of Imus Cavite, Philippines 4103'),
(5, 'telephone', 'Telephone', '(046)686-6631/471-3338'),
(6, 'phone', 'Phone Number', '+63 916-796-984'),
(7, 'website', 'Website', 'www.sscai.com'),
(8, 'email', 'Email', 'sscai@gmail.com'),
(9, 'history', 'History', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsuma');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `slug` varchar(300) NOT NULL,
  `date` date DEFAULT NULL,
  `content` text NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'default.png',
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name`, `slug`, `date`, `content`, `image`, `date_created`, `date_modified`, `created_by`) VALUES
(5, 'Sample Activityyyy', 'sample-activityyyy', '2019-02-14', '<p>Content here</p>\r\n', 'download.jpg', '2019-03-17 11:19:04', '2019-03-17 11:19:04', 1),
(6, 'lorem', 'lorem', '2019-02-16', '<p>lorem</p>\r\n', 'default.png', '2019-03-17 11:18:02', '2019-03-17 11:18:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `id` int(11) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text,
  `house_number` varchar(100) DEFAULT NULL,
  `house_street` varchar(100) DEFAULT NULL,
  `house_brgy` varchar(100) DEFAULT NULL,
  `house_city` varchar(100) DEFAULT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `grade_level` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `father_occupation` varchar(100) DEFAULT NULL,
  `father_number` varchar(11) DEFAULT NULL,
  `mother_name` varchar(100) NOT NULL,
  `mother_occupation` varchar(100) DEFAULT NULL,
  `mother_number` varchar(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'unseen'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`id`, `lastname`, `firstname`, `middlename`, `gender`, `address`, `house_number`, `house_street`, `house_brgy`, `house_city`, `dob`, `email`, `grade_level`, `contact`, `father_name`, `father_occupation`, `father_number`, `mother_name`, `mother_occupation`, `mother_number`, `date`, `status`) VALUES
(1, 'Sernaa', 'Mark Erwin', 'T', 'Male', 'Val', NULL, NULL, NULL, NULL, '1998-08-16', 'markerwin.serna@gmail.com', 'Grade 11', '+639954196573', 'E Serna', 'Laborer', '09912321321', 'Erlinda Serna', 'Worker', '09123213213', '2019-03-08 15:06:20', 'unseen'),
(2, 'Serna', 'Mia', 'T', 'female', 'Bulacan', NULL, NULL, NULL, NULL, '1999-08-22', 'mrkserns@gmail.com', 'Grade 11', '09261900529', 'E', 'Test', '09261900529', 'Erlinda', 'Work', '09261900529', '2019-03-21 00:00:00', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `title`) VALUES
(1, 'testing'),
(2, 'album 2');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'default.png',
  `date_created` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `slug`, `content`, `image`, `date_created`, `date_modified`, `created_by`, `date`) VALUES
(2, 'Announcement # 1', 'announcement-1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'default.png', '2019-03-03 07:29:09', '2019-03-03 07:29:09', 1, NULL),
(3, 'test', 'test', '<p><em><strong>Hello World&nbsp;</strong></em>testing 123<br />\r\nhello world</p>\r\n', 'default.png', '2019-03-13 11:04:01', '2019-03-13 11:04:01', 1, NULL),
(4, 'Testing', 'testing123', '<p><strong>Hello World</strong><br />\r\n<em>This is a dummy text</em></p>\r\n', 'default.png', '2019-03-13 19:07:17', '2019-03-13 19:07:17', 1, '2019-03-21'),
(5, 'testing123', 'testing', '<p>testing123</p>\r\n', 'Chrysanthemum.jpg', '2019-03-31 07:40:15', NULL, 1, '2019-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `caption` text,
  `image` varchar(50) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `position`, `caption`, `image`) VALUES
(1, 'Teacher Name', 'Teacher Position', 'teacher caption', 'default.png'),
(2, 'test', 'test', 'test', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `album` int(11) DEFAULT NULL,
  `caption` text,
  `image` varchar(50) NOT NULL DEFAULT 'default.png',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `album`, `caption`, `image`, `date`) VALUES
(1, 'Gallery 11', 1, '<p>lorem impsumm</p>\r\n', '83be6d3d8a2294c0c1bde859608b4a9d.jpg', '2019-03-22'),
(2, 'Default', 2, '<p>lorem</p>\r\n', 'default.png', '2019-03-22'),
(3, 'test', 2, 'test', 'default.png', '2019-03-16'),
(4, 'test', NULL, '123', 'default.png', '2019-03-16'),
(5, 'test', NULL, 'test', 'default.png', '2019-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE `login_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `logout` varchar(50) DEFAULT NULL,
  `date` date NOT NULL,
  `session_key` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_logs`
--

INSERT INTO `login_logs` (`id`, `user_id`, `login`, `logout`, `date`, `session_key`) VALUES
(2, 1, '02:31:03 am', '02:33:02 am', '2019-03-03', 'tRMsXQVmpk'),
(3, 1, '02:33:08 am', '02:33:55 am', '2019-03-03', 'Zj0DoWLUNl'),
(4, 1, '02:34:33 am', '03:46:00 am', '2019-03-03', 'LPEkSA4ioR'),
(5, 2, '03:46:14 am', '03:47:29 am', '2019-03-03', 'naupl4aCtt'),
(6, 2, '03:47:36 am', '03:48:37 am', '2019-03-03', 'GAZg2UCKCF'),
(7, 1, '03:48:46 am', '03:53:31 am', '2019-03-03', 'YnNvbIUrgc'),
(8, 1, '03:56:17 am', '03:56:20 am', '2019-03-03', 'GWncpxFeV6'),
(9, 1, '03:56:25 am', '03:57:07 am', '2019-03-03', 'LibaqMFRQu'),
(10, 1, '03:57:11 am', '03:59:26 am', '2019-03-03', '4nPqj36cIv'),
(11, 1, '03:59:30 am', '03:59:33 am', '2019-03-03', 'kNKNE4lwAd'),
(12, 1, '03:59:45 am', '04:00:17 am', '2019-03-03', 'wTfnTRnLoW'),
(13, 1, '04:00:25 am', '04:01:13 am', '2019-03-03', '5gLtMWckvp'),
(14, 1, '04:01:18 am', '04:01:24 am', '2019-03-03', 'n1Cn38I04c'),
(15, 2, '04:01:31 am', '04:02:38 am', '2019-03-03', 'lCE5smx6yu'),
(16, 2, '04:02:52 am', '04:03:08 am', '2019-03-03', 'qOGKGNizEB'),
(17, 2, '04:03:13 am', '04:03:16 am', '2019-03-03', 'W7zAzs1LEY'),
(18, 1, '04:03:21 am', '04:20:47 am', '2019-03-03', 'PYA7dwbBXk'),
(19, 5, '04:20:54 am', '04:21:12 am', '2019-03-03', 'U2rbyqT9jx'),
(20, 5, '04:21:17 am', '04:21:37 am', '2019-03-03', 'MzPAHdoJaf'),
(21, 1, '04:22:26 am', '04:22:29 am', '2019-03-03', 'buowau7oNO'),
(22, 1, '04:22:33 am', '04:22:40 am', '2019-03-03', 'vodCVwMjuU'),
(23, 1, '04:22:45 am', '06:03:40 am', '2019-03-03', '6GLhueRQNT'),
(24, 5, '06:03:45 am', '06:25:16 am', '2019-03-03', 'F3JC5uaqL5'),
(25, 5, '06:32:33 am', '06:35:57 am', '2019-03-03', '08rj2tTuZP'),
(26, 1, '06:36:09 am', NULL, '2019-03-03', 'Zi2Ms4AruC'),
(27, 1, '07:28:25 am', NULL, '2019-03-03', '24oq8ejgoM'),
(28, 1, '11:13:52 pm', '01:42:49 am', '2019-03-03', 'xO7zGVgmtF'),
(29, 5, '01:43:38 am', '01:43:47 am', '2019-03-04', 'K7vycubkpg'),
(30, 5, '01:43:51 am', '02:52:27 am', '2019-03-04', 'dUY9XLZlfS'),
(31, 1, '02:52:33 am', '03:05:07 am', '2019-03-04', 'Gd7nc8BoRP'),
(32, 1, '03:05:16 am', '03:10:04 am', '2019-03-04', 'b2yKmWo2Uw'),
(33, 1, '03:12:45 am', NULL, '2019-03-04', 'oOjRNYvyiQ'),
(34, 1, '02:49:38 pm', NULL, '2019-03-08', '8jyeOCIjPt'),
(35, 1, '10:48:50 am', NULL, '2019-03-13', 'FHyg8QwKol'),
(36, 1, '06:50:25 pm', NULL, '2019-03-13', 'HImlUG6lAx'),
(37, 1, '11:10:22 am', NULL, '2019-03-17', 'U66s4YxXSr'),
(38, 1, '12:30:31 pm', NULL, '2019-03-20', '6xhWXNItqf'),
(39, 1, '02:14:19 pm', NULL, '2019-03-22', 'ufmbVOQwXA'),
(40, 1, '08:54:31 pm', NULL, '2019-03-28', 'PLFuljiv2x'),
(41, 1, '12:03:15 pm', NULL, '2019-03-29', 'YwsykRtOEJ'),
(42, 1, '07:38:04 am', '07:59:50 am', '2019-03-31', '5o8zGIFUth'),
(43, 1, '08:01:28 am', '08:01:39 am', '2019-03-31', 'vaNFWop1ZF'),
(44, 1, '08:01:49 am', '08:01:58 am', '2019-03-31', 'I1tv1OMHzM'),
(45, 1, '08:02:02 am', '09:32:55 am', '2019-03-31', '0qbYWzi9Jl'),
(46, 1, '09:36:42 am', '10:07:59 am', '2019-03-31', 'JhOZ1TqLtS'),
(47, 1, '10:08:05 am', NULL, '2019-03-31', 'IsHI3Nl6uR');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `transaction`, `datetime`) VALUES
(4, 1, 'Edit activity ID:5', '2019-03-08 14:57:16'),
(5, 1, 'Add activity ID:6', '2019-03-08 14:58:55'),
(6, 1, 'Delete activity ID:6', '2019-03-08 15:00:52'),
(7, 1, 'Accept admission ID:1', '2019-03-08 15:05:06'),
(8, 1, 'Reject admission ID:1', '2019-03-08 15:05:38'),
(9, 1, 'Edit admission ID:1', '2019-03-08 15:06:21'),
(10, 1, 'Add announcement ID:3', '2019-03-08 15:09:52'),
(11, 1, 'Edit announcement ID:3', '2019-03-08 15:10:01'),
(12, 1, 'Delete announcement ID:3', '2019-03-08 15:10:07'),
(13, 1, 'Edit about section:history', '2019-03-08 15:11:34'),
(14, 1, 'Add teacher ID2', '2019-03-08 15:13:32'),
(15, 1, 'Delete message ID:5', '2019-03-08 15:14:14'),
(16, 1, 'Change virtual tour ID:2 to no', '2019-03-08 15:16:57'),
(17, 1, 'Add gallery ID:3', '2019-03-08 15:18:31'),
(18, 1, 'Edit gallert ID:3', '2019-03-08 15:18:40'),
(19, 1, 'Delete virtual tour ID:3', '2019-03-08 15:18:47'),
(20, 1, 'Add user ID:2', '2019-03-08 15:23:12'),
(21, 1, 'Add announcement ID:3', '2019-03-13 10:59:14'),
(22, 1, 'Edit announcement ID:3', '2019-03-13 11:04:01'),
(23, 1, 'Add announcement ID:4', '2019-03-13 19:06:28'),
(24, 1, 'Edit announcement ID:4', '2019-03-13 19:07:17'),
(25, 1, 'Add activity ID:6', '2019-03-17 11:16:21'),
(26, 1, 'Edit activity ID:6', '2019-03-17 11:17:56'),
(27, 1, 'Edit activity ID:6', '2019-03-17 11:18:02'),
(28, 1, 'Edit activity ID:5', '2019-03-17 11:19:04'),
(29, 1, 'Delete admission ID:2', '2019-03-17 11:28:54'),
(30, 1, 'Add gallery ID:3', '2019-03-17 11:32:54'),
(31, 1, 'Edit gallert ID:2', '2019-03-17 11:34:58'),
(32, 1, 'Edit gallert ID:1', '2019-03-17 11:35:03'),
(33, 1, 'Add album ID:1', '2019-03-17 11:53:09'),
(34, 1, 'Edit album ID:1', '2019-03-17 11:53:42'),
(35, 1, 'Add album ID:2', '2019-03-17 12:05:57'),
(36, 1, 'Edit gallery ID:3', '2019-03-17 12:07:40'),
(37, 1, 'Edit gallery ID:3', '2019-03-17 12:08:40'),
(38, 1, 'Edit gallery ID:3', '2019-03-17 12:08:59'),
(39, 1, 'Edit gallery ID:3', '2019-03-17 12:11:02'),
(40, 1, 'Edit gallery ID:3', '2019-03-17 12:12:09'),
(41, 1, 'Edit gallery ID:2', '2019-03-17 12:12:31'),
(42, 1, 'Add gallery ID:4', '2019-03-17 12:12:47'),
(43, 1, 'Add gallery ID:5', '2019-03-17 12:13:31'),
(44, 1, 'Add gallery ID:6', '2019-03-17 12:14:41'),
(45, 1, 'Add gallery ID:7', '2019-03-17 12:15:01'),
(46, 1, 'Accept admission ID:1', '2019-03-22 14:56:20'),
(47, 1, 'Reject admission ID:1', '2019-03-22 14:58:21'),
(48, 1, 'Accept admission ID:1', '2019-03-22 15:03:33'),
(49, 1, 'Delete gallery ID:7', '2019-03-29 12:27:33'),
(50, 1, 'Delete gallery ID:6', '2019-03-29 12:27:45'),
(51, 1, 'Change show virtual tour ID:2 to yes', '2019-03-29 12:43:33'),
(52, 1, 'Change show virtual tour ID:2 to no', '2019-03-29 13:07:12'),
(53, 1, 'Change show virtual tour ID:2 to yes', '2019-03-29 13:18:34'),
(54, 1, 'Add announcement ID:5', '2019-03-31 07:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `subject`, `email`, `message`, `status`, `date`) VALUES
(4, 'Mark Erwin', 'testing', 'markerwin.serna@gmail.com', 'testing contact form', 'seen', '2019-03-03 09:30:43'),
(5, 'amrk', 'test', 'markerwin.serna@gmail.com', 'test', 'pending', '2019-03-31 09:55:52'),
(6, 'amrk', 'test', 'markerwin.serna@gmail.com', 'test', 'seen', '2019-03-31 10:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `cp` varchar(50) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`id`, `email`, `password`, `role`, `status`, `cp`) VALUES
(1, 'sscai.dev@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'superadmin', 1, 'yes'),
(2, 'mrkserns@gmail.com', '134422d84cd3ffeb495417b72cb513c3', 'admin', 1, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `name`, `contact`, `address`) VALUES
(1, 1, 'Super Admin', '09954196572', 'Valenzuela'),
(2, 2, 'mark', '09123213213', 'adsdas');

-- --------------------------------------------------------

--
-- Table structure for table `virtual_tour`
--

CREATE TABLE `virtual_tour` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `isShow` varchar(10) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `virtual_tour`
--

INSERT INTO `virtual_tour` (`id`, `title`, `description`, `image`, `isShow`) VALUES
(1, 'EDUCATION MAKES PROPER HUMANITY', 'I must explain to you how all this mistaken idea of denouncing pleasure and prsing pain was born and I will give you a complete account of the system', 'slider1.jpg', 'yes'),
(2, 'Virtual Tour Slide #2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'default.png', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `virtual_tour`
--
ALTER TABLE `virtual_tour`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `virtual_tour`
--
ALTER TABLE `virtual_tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
