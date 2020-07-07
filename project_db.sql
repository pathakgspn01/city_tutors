-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 04:58 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `city_tutor`
--

CREATE TABLE `city_tutor` (
  `rid` int(5) NOT NULL,
  `rfname` varchar(100) NOT NULL,
  `rlname` varchar(100) NOT NULL,
  `remail` varchar(100) NOT NULL,
  `rmobile` varchar(15) NOT NULL,
  `rage` int(5) NOT NULL,
  `rtlevel` varchar(100) NOT NULL,
  `remedium` varchar(100) NOT NULL,
  `rcity` varchar(100) NOT NULL,
  `rczone` varchar(200) NOT NULL,
  `reyear` int(5) NOT NULL,
  `rslanguage` varchar(100) NOT NULL,
  `rcstatus` varchar(200) NOT NULL,
  `rqualification` varchar(200) NOT NULL,
  `rtsession` varchar(100) NOT NULL,
  `rmtution` varchar(100) NOT NULL,
  `image` longtext NOT NULL,
  `rlogin` varchar(100) NOT NULL,
  `rdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_tutor`
--

INSERT INTO `city_tutor` (`rid`, `rfname`, `rlname`, `remail`, `rmobile`, `rage`, `rtlevel`, `remedium`, `rcity`, `rczone`, `reyear`, `rslanguage`, `rcstatus`, `rqualification`, `rtsession`, `rmtution`, `image`, `rlogin`, `rdate`) VALUES
(8, 'Govind', 'Pathak', 'govindpathak17921@gmail.com', '2147483647', 21, 'P.H.D.', 'Offline Class', 'Shahjahanpur', 'Tedhi Puliya', 3, 'Hindi', 'job', 'PHD', '4', 'Hindi', '7b46749001e92e0166a63833f05563f5_cm_and_pupil-1140-760-c-90.jpg', '123456789', '2019-08-05 08:59:12'),
(10, '', '', '', '', 0, '-Select Tuition Level-', '-select Education Medium-', '-Select City-', '-Select City Zone/Location-', 0, '-Select Speak Language-', '', '', '', '-Select Mode of Tuition-', 'dwn1.jpg', '', '2019-08-05 09:14:17'),
(12, 'Pathak', 'Govind', 'pathakgovind420@gmail.com', '8009765540', 20, 'Gradution', 'Offline Class', 'Shahjahanpur', 'Ameenabad', 1, 'Hindi', 'Master', 'LLb', '2', 'Hindi', 'Capture.PNG', 'papa', '2019-08-07 16:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `aid` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'govind');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `cid` int(5) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cemail` varchar(50) NOT NULL,
  `cmobile` varchar(15) NOT NULL,
  `cmsg` longtext NOT NULL,
  `cdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`cid`, `cname`, `cemail`, `cmobile`, `cmsg`, `cdate`) VALUES
(2, 'Govind Pathak', 'govindpathak179211@gmail.com', '8009765540', 'i love you', '2019-08-05 14:56:34'),
(3, 'Govind Pathak', 'govindpathak179211@gmail.com', '', '', '2019-08-05 15:58:46'),
(4, 'Govind Pathak', 'govindpathak179211@gmail.com', '6307290055', 'I Love You', '2019-08-07 19:08:30'),
(5, 'Govind Pathak', 'govindpathak179211@gmail.com', '6307290055', 'I Love You', '2019-08-07 19:09:15'),
(6, 'Govind Pathak', 'govindpathak179211@gmail.com', '6307290055', 'I Love You', '2019-08-07 19:11:55'),
(7, 'Govind Pathak', 'govindpathak179211@gmail.com', '6307290055', 'I Love You', '2019-08-07 19:29:05'),
(8, 'Govind Pathak', 'govindpathak179211@gmail.com', '8318047583', 'I m in class', '2019-08-07 19:41:59'),
(9, 'Govind Pathak', 'govindpathak179211@gmail.com', '6307290055', '8', '2019-08-07 19:42:46'),
(10, 'Govind Pathak', 'govindpathak179211@gmail.com', '6307290055', '8', '2019-08-07 19:56:23'),
(11, 'Govind Pathak', 'govindpathak179211@gmail.com', '6307290055', 'g', '2019-08-07 20:01:17'),
(12, 'Govind Pathak', 'govindpathak179211@gmail.com', '8400205264', 'g', '2019-08-07 20:02:49'),
(13, 'Govind Pathak', 'govindpathak179211@gmail.com', '8318047583', 'g', '2019-08-07 20:03:16'),
(14, 'Govind Pathak', 'govindpathak179211@gmail.com', '6307290055', 'g', '2019-08-07 20:04:48'),
(15, 'Govind Pathak', 'govindpathak179211@gmail.com', '6394824413', 'Hi ! I am Govind Pathak.', '2019-08-07 20:12:00'),
(16, 'Govind Pathak', 'govindpathak179211@gmail.com', '6307290055', 'Hi ! I am Govind Pathak.', '2019-08-08 00:14:41'),
(17, 'Govind Pathak', 'govindpathak179211@gmail.com', '7390804479', 'Hi ! I am Govind Pathak.', '2019-08-08 00:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_generateleads`
--

CREATE TABLE `tbl_generateleads` (
  `glid` int(5) NOT NULL,
  `glname` varchar(100) NOT NULL,
  `glemail` varchar(100) NOT NULL,
  `glmobile` varchar(15) NOT NULL,
  `glclass` varchar(300) NOT NULL,
  `gleducationm` varchar(30) NOT NULL,
  `glcity` varchar(100) NOT NULL,
  `glarea` varchar(100) NOT NULL,
  `gldate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_generateleads`
--

INSERT INTO `tbl_generateleads` (`glid`, `glname`, `glemail`, `glmobile`, `glclass`, `gleducationm`, `glcity`, `glarea`, `gldate`) VALUES
(1, 'govind', '', '322', '11', 'hindi', 'kanpur', 'ghar chauba', '2019-08-02 11:07:29'),
(2, 'shyam ji yadav', '0', '123', '10', 'hindi', 'gonda', 'tilhar', '2019-08-03 06:44:39'),
(3, 'vishal bisaria', 'govindpathak@gmail.com', '5432', '12', 'english', 'gonda', 'tilhar', '2019-08-03 06:46:48'),
(4, 'govind', 'govindpathak@gmail.com', '2147483647', '12', 'hindi', 'rampur', 'ghar chauba', '2019-08-06 04:13:45'),
(5, '', '', '123', '-select class-', '-Select Education medium-', '-Select City-', '-select area-', '2019-08-06 05:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_message`
--

CREATE TABLE `tbl_master_message` (
  `smid` int(5) NOT NULL,
  `smname` varchar(100) NOT NULL,
  `smemail` varchar(100) NOT NULL,
  `smmobile` varchar(15) NOT NULL,
  `smmsg` varchar(300) NOT NULL,
  `smdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_master_message`
--

INSERT INTO `tbl_master_message` (`smid`, `smname`, `smemail`, `smmobile`, `smmsg`, `smdate`) VALUES
(5, 'govind', 'govindpathak179211@gmail.com', '2147483647', 'q', '2019-08-04 21:48:23'),
(6, '', '', '2147483647', '', '2019-08-04 21:49:39'),
(7, 'jk', '', '0', '', '2019-08-04 22:05:11'),
(8, 'govind', 'govindpathak179211@gmail.com', '2147483647', 'i m govind', '2019-08-04 22:05:53'),
(9, 'govind', 'govindpathak179211@gmail.com', '6307290055', 'jj', '2019-08-04 22:06:59'),
(10, 'love', '', '', '', '2019-08-04 22:36:41'),
(11, '', '', '', 'jcbpos9cswlbs ansn m i love u', '2019-08-07 18:21:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE `tbl_notification` (
  `nid` int(5) NOT NULL,
  `ndescription` varchar(300) NOT NULL,
  `ndate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`nid`, `ndescription`, `ndate`) VALUES
(19, 'i love you', '2019-08-04 17:07:16'),
(20, 'hi', '2019-08-05 19:51:58'),
(21, 'hello', '2019-08-07 10:20:38'),
(22, 'govind pathak', '2019-08-07 10:23:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city_tutor`
--
ALTER TABLE `city_tutor`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_generateleads`
--
ALTER TABLE `tbl_generateleads`
  ADD PRIMARY KEY (`glid`);

--
-- Indexes for table `tbl_master_message`
--
ALTER TABLE `tbl_master_message`
  ADD PRIMARY KEY (`smid`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD PRIMARY KEY (`nid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city_tutor`
--
ALTER TABLE `city_tutor`
  MODIFY `rid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `aid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `cid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_generateleads`
--
ALTER TABLE `tbl_generateleads`
  MODIFY `glid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_master_message`
--
ALTER TABLE `tbl_master_message`
  MODIFY `smid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `nid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
