-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2015 at 05:01 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rate_the_teacher`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(150) NOT NULL,
  `date` datetime NOT NULL,
  `reply_id` int(11) NOT NULL,
  `total_likes` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `teacher_id`, `user_id`, `comment`, `date`, `reply_id`, `total_likes`) VALUES
(1, 0, 3, 'Wow good rating ', '2015-07-19 00:00:00', 2, 0),
(2, 0, 0, 'Nice ', '2015-07-19 00:00:00', 3, 0),
(3, 0, 4, 'Awesome', '2015-07-19 00:00:00', 4, 0),
(4, 0, 4, 'Great teacher ', '2015-07-19 00:00:00', 5, 0),
(5, 5, 4, ' ala teacher ', '2015-07-19 00:00:00', 5, 0),
(6, 5, 4, 'behtreen', '2015-07-19 00:00:00', 10, 0),
(7, 5, 4, 'cha gaye ', '2015-07-19 00:00:00', 10, 0),
(8, 5, 4, 'Gret teach\\', '2015-07-19 00:00:00', 10, 0),
(9, 5, 4, 'Great Work', '2015-07-19 00:00:00', 9, 0),
(10, 3, 0, 'Enter Your Ceomments', '2015-07-21 00:00:00', 9, 0),
(11, 5, 4, 'Enter Your Comments', '2015-07-21 00:00:00', 7, 0),
(12, 12, 4, 'COMMMMMMENTSSSSSSSSSSSSSS', '2015-07-24 00:00:00', 0, 5),
(13, 12, 4, 'Evantage Comments ', '2015-07-28 00:00:00', 6, 0),
(14, 12, 4, 'Reply to Comment 4', '2015-07-28 00:00:00', 4, 0),
(15, 12, 4, 'Reply to Comment number 15 ', '2015-07-28 00:00:00', 12, 0),
(16, 12, 4, 'Another Reply to Comment 12', '2015-07-28 00:00:00', 12, 0),
(17, 12, 4, 'This is a NEw Commentt', '2015-07-28 00:00:00', 0, 0),
(18, 12, 4, 'NewCommentReplyyyy :)', '2015-07-28 00:00:00', 17, 0),
(19, 6, 4, 'Great Teacher ', '2015-07-29 00:00:00', 0, 0),
(20, 6, 4, 'That great 2nd Comment', '2015-07-29 00:00:00', 0, 0),
(21, 7, 4, 'Great teachrt', '2015-07-29 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment_likes`
--

CREATE TABLE IF NOT EXISTS `comment_likes` (
  `like_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_likes` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_likes`
--

INSERT INTO `comment_likes` (`like_id`, `comment_id`, `user_id`, `total_likes`) VALUES
(1, 12, 4, 1),
(3, 20, 4, 1),
(6, 19, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`) VALUES
(2, 'MyCOurse1'),
(3, 'MyCourse'),
(4, 'MyCOurse2'),
(5, 'MyCourseUpdated');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `teacher_id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `information` varchar(100) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `approved` varchar(5) NOT NULL,
  `approved_by` varchar(30) NOT NULL,
  `date_approved` date NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `added_by`, `first_name`, `last_name`, `country`, `city`, `gender`, `information`, `contact_number`, `dob`, `approved`, `approved_by`, `date_approved`, `date_added`) VALUES
(1, 0, 'a', 'a', '', 'aa', 'male', 'aaa', '121', '10-08-1988', 'yes', '', '2015-07-31', '0000-00-00 00:00:00'),
(2, 0, 'Taha', 'Kirmani', '', 'Karachi', 'male', 'Currently doing Phd', '03312856242', '10-02-1988', 'no', '', '2015-07-31', '0000-00-00 00:00:00'),
(3, 0, 'Taha', 'Kirmani', '', 'Karachi', 'male', 'Currently doing Phd', '03312856242', '10-02-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(4, 0, 'Taha', 'Kirmani', '', 'Karachi', 'male', 'Currently doing Phd', '03312856242', '10-02-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(5, 0, 'Taha', 'Kirmani', '', 'Karachi', 'male', 'Currently doing Phd', '03312856242', '10-02-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(6, 0, 'Sohail', 'Khan', '', 'Karachi', 'male', '03312856242', '03312856242', '1988-10-08', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(7, 0, 'Sohail', 'Khan', '', 'Karachi', 'male', '03312856242', '03312856242', '1988-10-08', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(8, 0, 'Sohail', 'Khan', '', 'Karachi', 'male', '03312856242', '03312856242', '1988-10-08', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(9, 0, 'Sohail', 'Khan', '', 'Karachi', 'male', '03312856242', '03312856242', '1988-10-08', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(10, 0, 'Kashif ', 'Mehmood', '', 'Karachi', 'male', 'Teacher', '03336363636', '1988-10-05', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(11, 0, 'Kashif ', 'Mehmood', '', 'Karachi', 'male', 'Teacher', '03336363636', '1988-10-05', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(12, 4, 'Ayub ', 'Latif', '', 'Karachi', 'male', 'Currently doing Phd', '03325210365', '1988-10-08', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(13, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(14, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(15, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(16, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(17, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(18, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(19, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(20, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(21, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(22, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(23, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(24, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(25, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(26, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(27, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(28, 4, 'AAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAA', '', 'AAAAAAAAAAAAAA', 'male', 'AAAAAAAAAAAAAA', '1', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(29, 4, 'AAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAA', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(30, 4, 'AAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAA', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(31, 4, 'AAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAA', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(32, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(33, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(34, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '2015-07-31 00:00:00'),
(35, 4, 'Kirmani', 'Kirmani', '', 'Karachi', 'male', 'A great teacfher', '03312856242', '10-08-1988', '', '', '0000-00-00', '2015-07-31 09:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_images`
--

CREATE TABLE IF NOT EXISTS `teachers_images` (
  `image_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `image_path` varchar(30) NOT NULL,
  `active` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers_images`
--

INSERT INTO `teachers_images` (`image_id`, `teacher_id`, `image_path`, `active`) VALUES
(1, 1, 'uploads/aa.jpg', 'Yes'),
(2, 26, '/uploads/image_1_26.png', 'Yes'),
(3, 27, '/uploads/image_2_27.png', 'Yes'),
(4, 29, '/uploads/image_3_29.png', 'Yes'),
(5, 30, '/uploads/image_4_30.png', 'Yes'),
(6, 31, '/uploads/image_5_31.png', 'Yes'),
(7, 32, '/uploads/image_6_32.png', 'Yes'),
(8, 33, '/uploads/image_7_33.png', 'Yes'),
(9, 34, '/uploads/image_8_34.png', 'Yes'),
(10, 35, '/uploads/image_9_35.png', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_majors`
--

CREATE TABLE IF NOT EXISTS `teacher_majors` (
  `teacher_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_majors`
--

INSERT INTO `teacher_majors` (`teacher_id`, `course_id`) VALUES
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 0),
(19, 0),
(20, 0),
(21, 0),
(22, 0),
(23, 0),
(26, 0),
(27, 0),
(28, 0),
(29, 0),
(30, 0),
(31, 0),
(32, 0),
(33, 0),
(34, 0),
(35, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_rating`
--

CREATE TABLE IF NOT EXISTS `teacher_rating` (
  `teacher_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_rating`
--

INSERT INTO `teacher_rating` (`teacher_id`, `user_id`, `rating`) VALUES
(3, 4, 3),
(4, 4, 3.375),
(5, 4, 4),
(6, 4, 5),
(7, 4, 9),
(12, 4, 212);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_teaching`
--

CREATE TABLE IF NOT EXISTS `teacher_teaching` (
  `teacher_id` int(11) NOT NULL,
  `university_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `from` varchar(20) NOT NULL,
  `to` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_teaching`
--

INSERT INTO `teacher_teaching` (`teacher_id`, `university_id`, `position`, `from`, `to`) VALUES
(11, 0, 0, '2001', '2009'),
(12, 0, 0, '2001', '2009'),
(13, 0, 0, '1990', '2010'),
(14, 0, 0, '1990', '2010'),
(15, 0, 0, '1990', '2010'),
(16, 0, 0, '1990', '2010'),
(17, 0, 0, '', ''),
(18, 0, 0, '', ''),
(19, 0, 0, '', ''),
(20, 11, 11, '11', '11'),
(21, 0, 0, '', ''),
(22, 0, 0, '', ''),
(23, 0, 0, '', ''),
(26, 0, 0, '', ''),
(27, 0, 0, '', ''),
(28, 0, 0, '', ''),
(29, 0, 0, '', ''),
(30, 0, 0, '', ''),
(31, 0, 0, '', ''),
(32, 0, 0, '', ''),
(33, 0, 0, '', ''),
(34, 0, 0, '', ''),
(35, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE IF NOT EXISTS `university` (
  `university_id` int(11) NOT NULL,
  `university_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `university_campus`
--

CREATE TABLE IF NOT EXISTS `university_campus` (
  `campus_id` int(11) NOT NULL,
  `university_id` int(11) NOT NULL,
  `campus_name` varchar(30) NOT NULL,
  `campus_address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `role` varchar(10) NOT NULL,
  `reg_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `image`, `country`, `city`, `gender`, `email`, `contact_number`, `dob`, `role`, `reg_time`) VALUES
(1, '1234', '123', 'Taha', 'Kirmani', '', '', '', 'male', 'tahakirmani@Hotmail.com', '', '0000-00-00', '', '0000-00-00 00:00:00'),
(2, '123', '123', 'T', 'a', '', '', 'Karachi', 'male', 'tahakirmani@Hotmail.com', '03312856242', '1988-10-10', '', '0000-00-00 00:00:00'),
(3, 'taha', '+v85eOrAjfSwUWF/dUH8e3ZAJC0ufB', 'Taha', 'Kirmani', '', '', 'Karachi', 'male', 'tahakirmani@Hotmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(4, 'tahak', 'ypvIAaU52TQpSx17QCGd9+go3q5bVNylb4ExcmWS12+SeSrwjpcIIObrmONgIiLaOqP0s0caGW2rzRypQf65/A==', 'taha Update', 'kirmani', '', '', 'Karachi', 'male', 'tahakirmani@Hotmail.com', '021', '0000-00-00', '', '0000-00-00 00:00:00'),
(5, 'tk', 'QY/NhPq7KkYvNbzmqa9t5Ubyn6ogVDCY7BGcps1tuo8q0FEGOm/0X8YADsgr2Qe/U1m/6z877QDyQemWIL4/XQ==', 'tahakirmani', 'kirmani', '', '', 'Karachi', 'male', 'tahakirmani@Hotmail.com', '03312856242', '1988-10-08', '', '0000-00-00 00:00:00'),
(6, '', '0GWZ44qZ2DwL4WtIQI5ZKiYLJ+f3TNOFiS72lxyWi3scUw+l+LXu2tSXJSaC1TlUSnZZsB0mj3rrEakGyRA2rw==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'Kirmani@taha.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(7, '', 'NP/m0DEIyt235MBdsOTSdBp2hSQvi9V2xAFd/By9FBMcjvTXWc/Ql2PoDe473kozGERjReZlaaoBh5Mt6jDZxw==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'Kirmani@taha.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(8, '', 'ePoUHLnXm95CR/bSAJsrHO5BwsFHKbbG4DSiwfxEfgyTUhxRB2k6AnMgLyMQTmvwQKuoc+RBDCxCXyod5h2zgA==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'Kirmani@taha.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(9, '', 'm1UiySAFTT6vCQunL7JmJaJs4L4+KHh33MfI5bwqyGUEgTNYaiG5UVHTRF+QbrJIoNWU6DttYtd2UKvreCVRug==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'taha@evantagesoft.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(10, '', 'nxAP1mmU3//6LAHcPyiAjjX23hoWhxqIt7rNa1tx8R1SbVM4UOeABCZw48MUcn25OV0iTpsqma3Kx7i0SqRdGw==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'taha@evantagesoft.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(11, '', 'gyrdQ5CDUSAmr9dxL/95V6nhvNfORpz4cwyzT9sY+zYDDnlxJpVJAoqMtQUbNUaBcgWtkcBwHkj/Gq3DSlu7mQ==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'taha@evantagesoft.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(12, '', 'R6aLD5jSoqExko1m/zZTgP0sevRnZf3JD795lDse5a/AIPS6hBfHZDAqt1qskoEvW5K3GxSTfxuEVgR5joQyBQ==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'taha@evantagesoft.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(13, '', '6oAZPYCB1IId1CK6r80MCDDXF3He40D6i9IeOXuGr4jgu+GgoKJHs4EiSSCSS1bygb0Vh4Y2lpViIsArdOYN7A==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'taha@evantagesoft.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(14, '', 'bruHyUiP5sLpd5hvPsSm8UThlU41wmGL5kSlPptNWcFs7K73u/XgcQhpGWrwkKny0IVpoHT1v4rOstEsJwSBGg==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'taha@tahakirmani.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(15, '', '0lXUtu/+12OVeu6ErhogOjhN8opuAGN8IhcKoptz4llGA/FLyqXn+AJGVKW5/b33zkwcr51yQsH83KUxwWUqwg==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'taha@tahakirmani.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(16, '', 'FVACAnfNqWQg3SP4/tF64gwXMCeFn0XMPUpQZ3r5TFLFSsxUC8ts8YzKCpxRl82brIwTqK5lwtqKOKJ3UtookQ==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(17, '', 'OqsQr977W8SNoDrNLei068BCTyN9ngZ9Od12jDnglquTmzulOl4KWUTCXKb+8pyJT7i3fEYpMSGOQJ7liYfu6Q==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(18, '', 'faTzN44jD1WqwHGhmyz/mz40IKqwJ7Izo0csLDrWaVBouG+AZkfuoKMGufsvbWmBW4fiC4aqFgfJ3+sA4pA8tw==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(19, '', 'aktiKS7PEqu/MMca5CBr+HxsYKyhY4WZB0dTttNapL4Qk2pnxyUB0oxFBF+i6J6dL68WTDLPKItGxMA5u8SW7A==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(20, '', 'ttMw+y9bdeEzgH50jfQ1NxiD/o7xf7ffzCfaIMy+Pwvp5dyR3bTLCjmro0ey+HiNIB/kZS1vyriFx1fBis0kcQ==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(21, '', 'YzpgrZDGOPcIsJWulahgVRV7/VCie0oE8efAaiQBOjkr3NSxQGg3+wPQuJhrHDYK3QmVctaK5k4or8cpfjil8Q==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(22, '', 'cIPuP1ESW+w8vwvI/jvqUnJTXPGzVz0KdocHlN0llEfuovdZ39rtU/k7I3MFxR4l2Hp8bOlJ1BXhYFkpj/P9dw==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(23, '', '3KrdsXI+3cLSr+LBx6/VLy4KGnMjEpDwWgaunfYpTzUtzPO0qir2mGABbfbYhwY5MUQfOtY8LWw2VA5GsdBEVA==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(24, '', 'qbIrAvJKwHjGfxmb7wMg7UuiOtT0rkO2n2e1h28NagKvY4GLKjuMPIyXLgqeLeIsOQci5Nr/gJxkPFTK2Y+aHg==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(25, '', '1praNNM2Ag0bLrBUeTbLi8gZuBYlKVVcQ6YbUUfQ5LGNzk7Mt0LKHecBzKSw/MNhowVesjUTS7Nj4Az4i3N9QA==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(26, '', 'Y2HpRhQBpYTQvqfuYUrVCaVylzi2hcjhSMbi+oF1vz4rOYVUt1WTTFhWk/LRa9m6MFswia3dCIzYTlCg8o6iSQ==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(27, '', 'UAlYN7WtqNnkLv1pqj5BZ+Gp1jqnwZtIrcUJhBn4+qxGUm1Js2vPFrhultEUerpRfgLrqVAyDJFPaYSwRnJGSA==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(28, '', 'nJEmCbY5Cg9ZfrTCUhILpX7BdRv33c2NcqWQ7hJclfl2iMqheBJzOGn9jf1+AHBWQgmD3OJDnlxFn5uqTE8Qvg==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(29, '', 'SvlWuxakzSQursv8W8Y2wnu5c92o2GCzl2V3OGugjye1rfvaMle6nNuhDvdFN3HDGg4M8qwrlUkHjTBc9Dvfdw==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(30, '', 'VkDkTdfw8BpjvUIVxFnAwNiR0n+5tFO5GwS9YiPD6jUZarCcGoUEdYmHdZJfsW3RBr2TO3RRImtv/2iv9VUYiQ==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(31, '', 'w2nTv/gcc/D3rRgPjc2rnpVJkQApcKaeAIVkbDzHpSPPiZ62zr8klRbI927VDiPw4WEfbwKzQAaRPg66kXAr7g==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(32, '', 'kHAhEHknVqbsfU/ptiD2XLHgr2P6C1lkRORrVbWrwPHMbPcAylulcaC16/mECyZwTJR6MDyk/QL3OGztyQkQ3g==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(33, '', 'I4eCo8XWrhBxRB+s8oC+9iVX8FUmGpEuqgobeNJqaOtGMSa0rU+VDkm8QuWjclK7uPO11rYfs/hCQYlrQ+3HFg==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(34, '', 'ka5xFOYCMOYFM/alu/Op1OIOr9eY1uMUjovCguptItmXYKZe0vTbP5QlvwGqCcrGoJ6Nd1+/W4dyCqiGi/XZMg==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(35, '', 'sy7kHUiElSo5G7/pFWULnHjtnWc7xxJw1fGmbShu79hO/rqkRY8UE/8kUany+bk5g66YfNFegm99qgHFzFo6zw==', 'Kirmani', 'Kirmani', '', '', 'Karachi', 'male', 'aamir3641253@gmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_education`
--

CREATE TABLE IF NOT EXISTS `users_education` (
  `user_id` int(11) NOT NULL,
  `university_id` int(11) NOT NULL,
  `program` varchar(20) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_images`
--

CREATE TABLE IF NOT EXISTS `users_images` (
  `image_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_path` varchar(30) NOT NULL,
  `active` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_images`
--

INSERT INTO `users_images` (`image_id`, `user_id`, `image_path`, `active`) VALUES
(1, 6, 'uploads/aa.jpg', 'Yes'),
(2, 16, './uploads/image_1_16', 'Yes'),
(3, 17, './uploads/image_2_17', 'Yes'),
(4, 18, 'image_3_18', 'Yes'),
(5, 19, 'image_4_19', 'Yes'),
(6, 20, '/uploads/image_5_20', 'Yes'),
(7, 21, '/uploads/image_6_21', 'Yes'),
(8, 22, '/uploads/image_7_22', 'Yes'),
(9, 23, '/uploads/image_8_23', 'Yes'),
(10, 24, '/uploads/image_9_24', 'Yes'),
(11, 25, '/uploads/image_10_25', 'Yes'),
(12, 26, '/uploads/image_11_26', 'Yes'),
(13, 27, '/uploads/image_12_27', 'Yes'),
(14, 28, '/uploads/image_13_28', 'Yes'),
(15, 29, '/uploads/image_14_29', 'Yes'),
(16, 30, '/uploads/image_15_30', 'Yes'),
(17, 31, '/uploads/image_16_31', 'Yes'),
(18, 32, '/uploads/image_17_32.jpeg', 'Yes'),
(19, 33, '/uploads/image_18_33.jpeg', 'Yes'),
(20, 34, '/uploads/image_19_34.jpeg', 'Yes'),
(21, 35, '/uploads/image_20_35.jpeg', 'Yes'),
(22, 4, '/uploads/image_7_33.png', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users_rating`
--

CREATE TABLE IF NOT EXISTS `users_rating` (
  `user_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_rating`
--

INSERT INTO `users_rating` (`user_id`, `teacher_id`, `points`, `reason`, `date_added`) VALUES
(4, 3, 2, 'Rate teacher', '2015-07-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`), ADD KEY `teacher_id` (`teacher_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comment_likes`
--
ALTER TABLE `comment_likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teachers_images`
--
ALTER TABLE `teachers_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `teacher_majors`
--
ALTER TABLE `teacher_majors`
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `teacher_rating`
--
ALTER TABLE `teacher_rating`
  ADD PRIMARY KEY (`teacher_id`,`user_id`), ADD KEY `user_id` (`user_id`), ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `teacher_teaching`
--
ALTER TABLE `teacher_teaching`
  ADD KEY `university_id` (`university_id`), ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`university_id`);

--
-- Indexes for table `university_campus`
--
ALTER TABLE `university_campus`
  ADD KEY `university_id` (`university_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_education`
--
ALTER TABLE `users_education`
  ADD KEY `user_id` (`user_id`), ADD KEY `university_id` (`university_id`);

--
-- Indexes for table `users_images`
--
ALTER TABLE `users_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `users_rating`
--
ALTER TABLE `users_rating`
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `comment_likes`
--
ALTER TABLE `comment_likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `teachers_images`
--
ALTER TABLE `teachers_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users_images`
--
ALTER TABLE `users_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `teacher_rating`
--
ALTER TABLE `teacher_rating`
ADD CONSTRAINT `teacher_rating_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `university_campus`
--
ALTER TABLE `university_campus`
ADD CONSTRAINT `university_campus_ibfk_1` FOREIGN KEY (`university_id`) REFERENCES `university` (`university_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_education`
--
ALTER TABLE `users_education`
ADD CONSTRAINT `users_education_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `users_education_ibfk_2` FOREIGN KEY (`university_id`) REFERENCES `university` (`university_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_rating`
--
ALTER TABLE `users_rating`
ADD CONSTRAINT `users_rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
