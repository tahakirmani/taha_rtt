-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2015 at 10:43 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_likes`
--

INSERT INTO `comment_likes` (`like_id`, `comment_id`, `user_id`, `total_likes`) VALUES
(1, 12, 4, 1),
(2, 19, 4, 1),
(3, 20, 4, 1);

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
  `date_added` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `added_by`, `first_name`, `last_name`, `country`, `city`, `gender`, `information`, `contact_number`, `dob`, `approved`, `approved_by`, `date_approved`, `date_added`) VALUES
(1, 0, 'a', 'a', '', 'aa', 'male', 'aaa', '121', '10-08-1988', '', '', '0000-00-00', '0000-00-00'),
(2, 0, 'Taha', 'Kirmani', '', 'Karachi', 'male', 'Currently doing Phd', '03312856242', '10-02-1988', '', '', '0000-00-00', '0000-00-00'),
(3, 0, 'Taha', 'Kirmani', '', 'Karachi', 'male', 'Currently doing Phd', '03312856242', '10-02-1988', '', '', '0000-00-00', '0000-00-00'),
(4, 0, 'Taha', 'Kirmani', '', 'Karachi', 'male', 'Currently doing Phd', '03312856242', '10-02-1988', '', '', '0000-00-00', '0000-00-00'),
(5, 0, 'Taha', 'Kirmani', '', 'Karachi', 'male', 'Currently doing Phd', '03312856242', '10-02-1988', '', '', '0000-00-00', '0000-00-00'),
(6, 0, 'Sohail', 'Khan', '', 'Karachi', 'male', '03312856242', '03312856242', '1988-10-08', '', '', '0000-00-00', '0000-00-00'),
(7, 0, 'Sohail', 'Khan', '', 'Karachi', 'male', '03312856242', '03312856242', '1988-10-08', '', '', '0000-00-00', '0000-00-00'),
(8, 0, 'Sohail', 'Khan', '', 'Karachi', 'male', '03312856242', '03312856242', '1988-10-08', '', '', '0000-00-00', '0000-00-00'),
(9, 0, 'Sohail', 'Khan', '', 'Karachi', 'male', '03312856242', '03312856242', '1988-10-08', '', '', '0000-00-00', '0000-00-00'),
(10, 0, 'Kashif ', 'Mehmood', '', 'Karachi', 'male', 'Teacher', '03336363636', '1988-10-05', '', '', '0000-00-00', '0000-00-00'),
(11, 0, 'Kashif ', 'Mehmood', '', 'Karachi', 'male', 'Teacher', '03336363636', '1988-10-05', '', '', '0000-00-00', '0000-00-00'),
(12, 4, 'Ayub ', 'Latif', '', 'Karachi', 'male', 'Currently doing Phd', '03325210365', '1988-10-08', '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_majors`
--

CREATE TABLE IF NOT EXISTS `teacher_majors` (
  `teacher_id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_majors`
--

INSERT INTO `teacher_majors` (`teacher_id`, `subject`) VALUES
(5, 'Database'),
(6, 'Database'),
(7, 'Database'),
(8, 'Database'),
(9, 'Database'),
(10, 'Oracle'),
(11, 'Oracle'),
(12, 'OOAD,OOP');

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
(12, 0, 0, '2001', '2009');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `image`, `country`, `city`, `gender`, `email`, `contact_number`, `dob`, `role`, `reg_time`) VALUES
(1, '1234', '123', 'Taha', 'Kirmani', '', '', '', 'male', 'tahakirmani@Hotmail.com', '', '0000-00-00', '', '0000-00-00 00:00:00'),
(2, '123', '123', 'T', 'a', '', '', 'Karachi', 'male', 'tahakirmani@Hotmail.com', '03312856242', '1988-10-10', '', '0000-00-00 00:00:00'),
(3, 'taha', '+v85eOrAjfSwUWF/dUH8e3ZAJC0ufB', 'Taha', 'Kirmani', '', '', 'Karachi', 'male', 'tahakirmani@Hotmail.com', '03312856242', '0000-00-00', '', '0000-00-00 00:00:00'),
(4, 'tahak', 'J4Z+DT0lYNWSZ5yur7ra2jOtPn/6UWbCdaWLWYqrR77rcSeAMws4KxGPplNXfbct4pNWcuoTaofHoWT8swte6g==', 'taha', 'kirmani', '', '', 'Karachi', 'male', 'tahakirmani@Hotmail.com', '021', '0000-00-00', '', '0000-00-00 00:00:00'),
(5, 'tk', 'QY/NhPq7KkYvNbzmqa9t5Ubyn6ogVDCY7BGcps1tuo8q0FEGOm/0X8YADsgr2Qe/U1m/6z877QDyQemWIL4/XQ==', 'tahakirmani', 'kirmani', '', '', 'Karachi', 'male', 'tahakirmani@Hotmail.com', '03312856242', '1988-10-08', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_rating`
--

CREATE TABLE IF NOT EXISTS `users_rating` (
  `user_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

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
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users_images`
--
ALTER TABLE `users_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;
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
