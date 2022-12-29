-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 06, 2022 at 02:54 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalintelligence`
--
CREATE DATABASE IF NOT EXISTS `digitalintelligence` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE `digitalintelligence`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_username` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `admin_password` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_username`, `admin_password`) VALUES
('admin@employability.life.edu.au', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

DROP TABLE IF EXISTS `assignments`;
CREATE TABLE IF NOT EXISTS `assignments` (
  `assign_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `due_date_time` datetime NOT NULL,
  `total_marks` int NOT NULL,
  `faculty_id` int NOT NULL,
  `unit_id` int NOT NULL,
  PRIMARY KEY (`assign_id`),
  KEY `faculty_id` (`faculty_id`),
  KEY `unit_id` (`unit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `booking_id` int NOT NULL AUTO_INCREMENT,
  `timeslot` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `date` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `faculty_id` int NOT NULL,
  `student_id` int NOT NULL,
  `meeting_link` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`booking_id`),
  KEY `bookings_ibfk_1` (`faculty_id`),
  KEY `bookings_ibfk_2` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `timeslot`, `date`, `faculty_id`, `student_id`, `meeting_link`) VALUES
(1, '2:30pm', '2022-09-28', 1, 4, NULL),
(2, '2:30pm', '2022-09-27', 1, 4, NULL),
(15, '3:00pm', '2022-09-27', 1, 4, NULL),
(16, '4:00pm', '2022-09-30', 1, 4, NULL),
(18, '9:30am', '2022-09-28', 2, 4, NULL),
(20, '11:00am', '2022-09-30', 2, 4, NULL),
(80, '3:00pm', '2022-09-28', 3, 4, NULL),
(82, '3:00pm', '2022-09-29', 3, 4, NULL),
(83, '1:00pm', '2022-09-27', 3, 4, NULL),
(87, '2:00pm', '2022-09-30', 4, 4, NULL),
(88, '2:00pm', '2022-09-29', 4, 4, NULL),
(90, '9:00am', '2022-10-04', 2, 4, NULL),
(91, '9:00am', '2022-10-11', 2, 4, NULL),
(92, '2:30pm', '2022-10-20', 1, 4, 'deswgfvaws');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `mobile` int NOT NULL,
  `profile_pic` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `faculty_type` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `name`, `email`, `mobile`, `profile_pic`, `faculty_type`) VALUES
(1, 'Alex', 'alex@support.com', 423518796, NULL, 'Lecturer'),
(2, 'Rahul', 'rahul@support.com', 45789456, NULL, 'Student Support');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

DROP TABLE IF EXISTS `lectures`;
CREATE TABLE IF NOT EXISTS `lectures` (
  `unit_id` int NOT NULL,
  `video_link` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`unit_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`unit_id`, `video_link`) VALUES
(1, 'https://player.vimeo.com/video/581449510?h=b8935c5a4f'),
(2, 'https://player.vimeo.com/video/581449510?h=b8935c5a4f'),
(3, 'https://player.vimeo.com/video/581449510?h=b8935c5a4f'),
(4, 'https://player.vimeo.com/video/581449510?h=b8935c5a4f'),
(5, 'https://player.vimeo.com/video/581449510?h=b8935c5a4f'),
(6, 'https://player.vimeo.com/video/581449510?h=b8935c5a4f'),
(7, 'https://player.vimeo.com/video/581449510?h=b8935c5a4f'),
(8, 'https://player.vimeo.com/video/581449510?h=b8935c5a4f'),
(9, 'https://player.vimeo.com/video/581449510?h=b8935c5a4f'),
(10, 'https://player.vimeo.com/video/581449510?h=b8935c5a4f');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `q_id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `question` varchar(400) COLLATE utf8mb4_bin NOT NULL,
  `correct_opt` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `wrong_opt1` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `wrong_opt2` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `wrong_opt3` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `weightage` int NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`q_id`, `type`, `question`, `correct_opt`, `wrong_opt1`, `wrong_opt2`, `wrong_opt3`, `weightage`) VALUES
(1, 'Easy', 'In which type of business all owners share in gains and losses and all have unlimited liability for all business debts', 'General Partnership', 'Sole proprietorship', 'Limited Partnership', 'Corporation', 1),
(2, 'Medium', 'Which of the following is a series of constant cash flows that occur at the end of each period for some fixed number of periods...', 'Ordinary annuity', 'Annuity due', 'Perpetuity', 'Bonds', 2),
(3, 'Hard', 'During the accounting period, sales revenue is Rs. 25,000 and accounts receivable increased by Rs. 8,000. What will be the amount of cash received from customers for the period...', '17,000', '33,000', '25,000', '20,000', 3),
(4, 'Easy', 'Is concerned with the Acquisition financing and management of assets with some overall goal in mind...', 'Financial management', 'Profit maximization', 'Agency theory', 'Social responsibility', 1),
(5, 'Medium', 'Annual cash dividends divided by annual earnings or alternatively dividends per share divided by earning per share is termed as . . . .', 'Dividend payout ratio', 'Earning per share ratio', 'Proposed dividend ratio', 'Expected dividend ratio', 2),
(6, 'Hard', 'An individual authorized by another person, called the principle to act on the latter’s on behalf is known as . . . .', 'Agent', 'Servant', 'Subordinate', 'Assistant', 3),
(7, 'Easy', 'Quick Ratio is also known as . . . .', 'Acid-test Ratio', 'Current Ratio', 'Cash Ratio', 'None of the given options', 1),
(8, 'Medium', ' Which of the following item provides the important function of shielding part of income from taxes are  . . . .', 'Depreciation', 'Inventory', 'Supplies', 'Machinery', 2),
(9, 'Hard', 'The process of determining the present value of a payment or a stream of payments that is to be received in the future is  . . . .', 'Discounting', 'Compounding', 'Factorization', 'Accounting', 3),
(10, 'Easy', 'In which form of Business owners have limited liability is  . . . .', 'Joint Stock Company', 'Sole Proprietorship', 'Partnership', 'Entrepreneurs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_result`
--

DROP TABLE IF EXISTS `quiz_result`;
CREATE TABLE IF NOT EXISTS `quiz_result` (
  `q_res_id` int NOT NULL,
  `s_id` int NOT NULL,
  `marks_obtained` int NOT NULL,
  `total_marks` int NOT NULL,
  `q_id` int NOT NULL,
  KEY `q_id` (`q_id`),
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(15) COLLATE utf8mb4_bin NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `mobile` int NOT NULL,
  `profile_pic` blob,
  `employment_status` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `desired_job` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `desired_company` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `resume` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `cover_letter` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `linkedin` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `sname`, `email`, `password`, `address`, `mobile`, `profile_pic`, `employment_status`, `desired_job`, `desired_company`, `resume`, `cover_letter`, `linkedin`) VALUES
(4, 'Dhruv Rakesh Desai', 'dhruv.desai2018@gmail.com', '12345', ' A-801, AAGAM TOWERS', 431854947, NULL, 'Student', 'erfgerg', 'Student', 'Resume is Ready', 'Ready ', 'Have an Account'),
(18, 'Hetul Patel', 'hetul70@gmail.com', '12345', 'A-801, AAGAM TOWERS', 426705762, NULL, 'Student', 'tester', 'Student', 'Resume is Ready', 'Partially Ready ', 'Have an Account');

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

DROP TABLE IF EXISTS `submissions`;
CREATE TABLE IF NOT EXISTS `submissions` (
  `submission_id` int NOT NULL AUTO_INCREMENT,
  `assign_id` int NOT NULL,
  `student_id` int NOT NULL,
  `file` blob NOT NULL,
  `marks_obtained` int DEFAULT NULL,
  `assessor_id` int NOT NULL,
  `unit_id` int NOT NULL,
  PRIMARY KEY (`submission_id`),
  KEY `assessor_id` (`assessor_id`),
  KEY `assign_id` (`assign_id`),
  KEY `student_id` (`student_id`),
  KEY `unit_id` (`unit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `tickets` (
  `ticket_id` int NOT NULL AUTO_INCREMENT,
  `query_type` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `subject` varchar(30) COLLATE utf8mb4_bin NOT NULL,
  `query` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `attachments` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `ticket_status` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `resolver_id` int NOT NULL,
  `student_id` int NOT NULL,
  PRIMARY KEY (`ticket_id`),
  KEY `resolver_id` (`resolver_id`),
  KEY `tickets_ibfk_2` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `query_type`, `subject`, `query`, `attachments`, `ticket_status`, `resolver_id`, `student_id`) VALUES
(14, 'Submissions', 'Approval and related query', 'I want able to submit assignment on time.', 'scooter.png', 'Resolved', 1, 4),
(17, 'Miscellaneous', 'Tickets', 'asdkgnaor', 'scooter.png', 'In Process', 2, 4),
(18, 'Submissions', 'Tickets', 'I want able to submit assignment on time.', 'scooter.png', 'Open', 1, 4),
(19, 'Submissions', 'Approval and related query', 'I want to submit my task later this week.', 'Screenshot (123).png', 'Open', 1, 4),
(20, 'Miscellaneous', 'Tickets', 'I want able to submit assignment on time.', 'Screenshot (22).png', 'Open', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_reply`
--

DROP TABLE IF EXISTS `ticket_reply`;
CREATE TABLE IF NOT EXISTS `ticket_reply` (
  `id` int NOT NULL AUTO_INCREMENT,
  `reply` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `ticket_id` int NOT NULL,
  `resolver_id` int NOT NULL,
  `attachments` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ticket_reply_ibfk_1` (`ticket_id`),
  KEY `resolver_id` (`resolver_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `ticket_reply`
--

INSERT INTO `ticket_reply` (`id`, `reply`, `ticket_id`, `resolver_id`, `attachments`) VALUES
(1, 'No problem.', 14, 1, NULL),
(3, 'asedfawse', 17, 2, NULL),
(4, 'heeeeey', 17, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

DROP TABLE IF EXISTS `tutors`;
CREATE TABLE IF NOT EXISTS `tutors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `profile_pic` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `course` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `slot1` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `slot2` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `slot3` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `slot4` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `slot5` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `name`, `profile_pic`, `course`, `slot1`, `slot2`, `slot3`, `slot4`, `slot5`) VALUES
(1, 'Anirudh Phadke', 'anirudh.jpg', 'Digital Intelligence', '2:00pm', '2:30pm', '3:00pm', '3:30pm', '4:00pm'),
(2, 'Abbas Shaik', 'abbas.png', 'Growth Mindset', '9:00am', '9:30am', '10:00am', '10:30am', '11:00am'),
(3, 'Marketa Mozisova', 'marketa.jpg', 'Career Intelligence', '1:00pm', '3:00pm', '5:00pm', '5:30pm', '6:00pm'),
(4, 'Tabinda Khan', 'tabinda.jpg', 'Influence', '11:00am', '11:30am', '1:30pm', '2:00pm', '2:30pm'),
(5, 'Dinushi Bamunusinghe', 'dinushi.jpg', 'Cultural Intelligence', '9:30am', '10:00am', '10:30am', '12:30pm', '1:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

DROP TABLE IF EXISTS `unit`;
CREATE TABLE IF NOT EXISTS `unit` (
  `unit_id` int NOT NULL AUTO_INCREMENT,
  `unit_code` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `faculty_id` int NOT NULL,
  PRIMARY KEY (`unit_id`),
  KEY `faculty_id` (`faculty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `assignments_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assignments_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`unit_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `quiz_result`
--
ALTER TABLE `quiz_result`
  ADD CONSTRAINT `quiz_result_ibfk_1` FOREIGN KEY (`q_id`) REFERENCES `quiz` (`q_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `quiz_result_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `students` (`student_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `submissions`
--
ALTER TABLE `submissions`
  ADD CONSTRAINT `submissions_ibfk_1` FOREIGN KEY (`assessor_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `submissions_ibfk_2` FOREIGN KEY (`assign_id`) REFERENCES `assignments` (`assign_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `submissions_ibfk_3` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `submissions_ibfk_4` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`unit_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`resolver_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `ticket_reply`
--
ALTER TABLE `ticket_reply`
  ADD CONSTRAINT `ticket_reply_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`ticket_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `ticket_reply_ibfk_2` FOREIGN KEY (`resolver_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `unit`
--
ALTER TABLE `unit`
  ADD CONSTRAINT `unit_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
