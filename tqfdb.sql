-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2019 at 09:28 AM
-- Server version: 5.7.24
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tqfdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

DROP TABLE IF EXISTS `tbl_account`;
CREATE TABLE IF NOT EXISTS `tbl_account` (
  `acc_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`acc_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`acc_id`, `email`, `password`, `type_id`) VALUES
(1, 'srhdp.lec@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 1),
(3, 'srhdp.stu@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 2),
(4, 'din.nurren@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 1),
(5, 'srhdp.lec2@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 1),
(6, 'din.nurren2@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 2),
(7, 'nurren.lec@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 1),
(9, 'admin@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_building`
--

DROP TABLE IF EXISTS `tbl_building`;
CREATE TABLE IF NOT EXISTS `tbl_building` (
  `building_id` int(11) NOT NULL AUTO_INCREMENT,
  `building_name` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`building_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_building`
--

INSERT INTO `tbl_building` (`building_id`, `building_name`) VALUES
(1, 'A1'),
(2, 'A2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

DROP TABLE IF EXISTS `tbl_course`;
CREATE TABLE IF NOT EXISTS `tbl_course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_name`, `department_id`) VALUES
(2, 'GGGG', 4),
(3, 'klo', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

DROP TABLE IF EXISTS `tbl_department`;
CREATE TABLE IF NOT EXISTS `tbl_department` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `faculty_id` int(11) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`department_id`, `department_name`, `faculty_id`) VALUES
(4, 'Osuludin', 2),
(6, 'Osuludin', 1),
(7, 'Sharia', 1),
(10, 'Sharia', 2),
(18, 'Dakwah', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

DROP TABLE IF EXISTS `tbl_faculty`;
CREATE TABLE IF NOT EXISTS `tbl_faculty` (
  `faculty_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_name` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`faculty_id`, `faculty_name`) VALUES
(1, 'Islam'),
(2, 'Science'),
(4, 'Social'),
(5, 'Dakwah'),
(6, 'Islam'),
(7, 'Ktl'),
(8, 'wer'),
(9, 'Islam'),
(10, 'Science'),
(11, 'faculty-form'),
(12, 'Islam'),
(13, 'Islam'),
(14, '345'),
(15, 'Islam'),
(16, 'btest');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_head_department`
--

DROP TABLE IF EXISTS `tbl_head_department`;
CREATE TABLE IF NOT EXISTS `tbl_head_department` (
  `head_department_id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_id` int(11) NOT NULL,
  `f_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `l_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `department_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `img_profile` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`head_department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lecture`
--

DROP TABLE IF EXISTS `tbl_lecture`;
CREATE TABLE IF NOT EXISTS `tbl_lecture` (
  `lec_id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_id` int(11) NOT NULL,
  `f_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `l_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `gender` varchar(255) COLLATE utf8_bin NOT NULL,
  `birthday` date NOT NULL,
  `position_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `date_in_work` date NOT NULL,
  `start_work` date NOT NULL,
  `img_profile` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`lec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_lecture`
--

INSERT INTO `tbl_lecture` (`lec_id`, `acc_id`, `f_name`, `l_name`, `gender`, `birthday`, `position_id`, `department_id`, `date_in_work`, `start_work`, `img_profile`) VALUES
(1, 1, 'srh lec first', 'dp lec last', 'Male', '2019-05-10', 1, 2, '2019-05-24', '2019-05-23', 'noimage.png'),
(2, 4, 'din', 'nurren', 'Female', '1997-05-17', 1, 2, '2019-05-10', '2019-05-08', 'noimage.png'),
(3, 5, 'srh first', 'dp last', 'Male', '1990-05-16', 1, 2, '2019-05-17', '2019-05-07', 'noimage.png'),
(4, 7, 'Nurren', 'dak', 'Female', '1993-06-14', 1, 1, '2019-06-20', '2019-06-19', 'noimage.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

DROP TABLE IF EXISTS `tbl_position`;
CREATE TABLE IF NOT EXISTS `tbl_position` (
  `position_id` int(11) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`position_id`, `position_name`) VALUES
(1, 'Lecture'),
(2, 'Student'),
(4, 'Tutorial');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

DROP TABLE IF EXISTS `tbl_room`;
CREATE TABLE IF NOT EXISTS `tbl_room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `building_id` int(11) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`room_id`, `room_name`, `building_id`) VALUES
(5, 'A1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

DROP TABLE IF EXISTS `tbl_staff`;
CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `sta_id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_id` int(11) NOT NULL,
  `f_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `l_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `gender` varchar(255) COLLATE utf8_bin NOT NULL,
  `birthday` date NOT NULL,
  `position_id` int(11) NOT NULL,
  `date_in_work` date NOT NULL,
  `start_work` date NOT NULL,
  `img_profile` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`sta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

DROP TABLE IF EXISTS `tbl_status`;
CREATE TABLE IF NOT EXISTS `tbl_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

DROP TABLE IF EXISTS `tbl_student`;
CREATE TABLE IF NOT EXISTS `tbl_student` (
  `stu_id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_id` int(11) NOT NULL,
  `f_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `l_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `gender` varchar(255) COLLATE utf8_bin NOT NULL,
  `department_id` int(11) NOT NULL,
  `img_profile` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`stu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`stu_id`, `acc_id`, `f_name`, `l_name`, `gender`, `department_id`, `img_profile`) VALUES
(2, 3, 'srh stu', 'dp stu', 'Male', 2, 'noimage.png'),
(3, 6, 'din', 'nurren', 'Female', 1, 'noimage.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tqf3`
--

DROP TABLE IF EXISTS `tbl_tqf3`;
CREATE TABLE IF NOT EXISTS `tbl_tqf3` (
  `tqf3_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tqf_name` varchar(200) COLLATE utf8_bin NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`tqf3_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tqf3_section1`
--

DROP TABLE IF EXISTS `tbl_tqf3_section1`;
CREATE TABLE IF NOT EXISTS `tbl_tqf3_section1` (
  `tqf3_sec1_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `program` varchar(200) COLLATE utf8_bin NOT NULL,
  `year` varchar(200) COLLATE utf8_bin NOT NULL,
  `semester` varchar(200) COLLATE utf8_bin NOT NULL,
  `pre_reg` varchar(50) COLLATE utf8_bin NOT NULL,
  `co_reg` varchar(50) COLLATE utf8_bin NOT NULL,
  `building_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `dead_line` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_type`
--

DROP TABLE IF EXISTS `tbl_user_type`;
CREATE TABLE IF NOT EXISTS `tbl_user_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_user_type`
--

INSERT INTO `tbl_user_type` (`type_id`, `type_name`) VALUES
(1, 'Lecturer'),
(2, 'Student'),
(3, 'Head of Department'),
(4, 'Staff'),
(5, 'Admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
