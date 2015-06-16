-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2015 at 11:49 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_db`
--
CREATE DATABASE IF NOT EXISTS `school_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `school_db`;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
`id` int(6) NOT NULL COMMENT 'Record ID',
  `student_id` int(4) NOT NULL COMMENT 'Student''s ID',
  `course` varchar(50) NOT NULL COMMENT 'Course Name',
  `professor` varchar(50) NOT NULL COMMENT 'Professor''s Last Name  ',
  `subject` varchar(50) NOT NULL COMMENT 'Main Subject of course',
  `grade` int(3) NOT NULL COMMENT 'Grade as percentage (0-100)'
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `student_id`, `course`, `professor`, `subject`, `grade`) VALUES
(1, 1, 'Algebra 92', 'Bordeaux', 'Math', 86),
(2, 2, 'Algebra 92', 'Bordeaux', 'Math', 78),
(3, 3, 'Algebra 92', 'Bordeaux', 'Math', 98),
(4, 4, 'Algebra 92', 'Bordeaux', 'Math', 84),
(5, 5, 'Algebra 92', 'Bordeaux', 'Math', 72),
(6, 6, 'Algebra 92', 'Bordeaux', 'Math', 87),
(7, 7, 'Algebra 92', 'Bordeaux', 'Math', 89),
(8, 8, 'Algebra 92', 'Bordeaux', 'Math', 92),
(9, 9, 'Algebra 92', 'Bordeaux', 'Math', 68),
(10, 10, 'Algebra 92', 'Bordeaux', 'Math', 97),
(11, 11, 'Algebra 92', 'Bordeaux', 'Math', 84),
(12, 12, 'Algebra 92', 'Bordeaux', 'Math', 94),
(13, 13, 'Algebra 92', 'Bordeaux', 'Math', 78),
(14, 14, 'Algebra 92', 'Bordeaux', 'Math', 86),
(15, 15, 'Algebra 92', 'Bordeaux', 'Math', 73),
(16, 16, 'Algebra 92', 'Bordeaux', 'Math', 69),
(17, 17, 'Algebra 92', 'Bordeaux', 'Math', 91),
(18, 18, 'Algebra 92', 'Bordeaux', 'Math', 82),
(19, 19, 'Algebra 92', 'Bordeaux', 'Math', 94),
(20, 20, 'Algebra 92', 'Bordeaux', 'Math', 99),
(21, 21, 'Algebra 92', 'Bordeaux', 'Math', 86),
(22, 22, 'Algebra 92', 'Bordeaux', 'Math', 68),
(23, 23, 'Algebra 92', 'Bordeaux', 'Math', 87),
(24, 24, 'Algebra 92', 'Bordeaux', 'Math', 90),
(25, 25, 'Algebra 92', 'Bordeaux', 'Math', 81),
(26, 22, 'Trigonometry 402', 'Hawking', 'Math', 87),
(27, 14, 'Trigonometry 402', 'Hawking', 'Math', 78),
(28, 3, 'Trigonometry 402', 'Hawking', 'Math', 89),
(29, 16, 'Trigonometry 402', 'Hawking', 'Math', 94),
(30, 9, 'Trigonometry 402', 'Hawking', 'Math', 97),
(31, 21, 'Trigonometry 402', 'Hawking', 'Math', 98),
(32, 15, 'Trigonometry 402', 'Hawking', 'Math', 68),
(33, 19, 'Trigonometry 402', 'Hawking', 'Math', 95),
(34, 10, 'Trigonometry 402', 'Hawking', 'Math', 88),
(35, 6, 'Trigonometry 402', 'Hawking', 'Math', 96),
(43, 17, 'Creative Writing', 'King', 'English', 95),
(44, 5, 'Creative Writing', 'King', 'English', 98),
(45, 23, 'Creative Writing', 'King', 'English', 68),
(46, 8, 'Creative Writing', 'King', 'English', 97),
(47, 11, 'Creative Writing', 'King', 'English', 90),
(48, 24, 'Creative Writing', 'King', 'English', 77),
(49, 20, 'Creative Writing', 'King', 'English', 68),
(50, 13, 'Creative Writing', 'King', 'English', 97),
(51, 4, 'Creative Writing', 'King', 'English', 75),
(52, 1, 'Creative Writing', 'King', 'English', 93),
(53, 2, 'Creative Writing', 'King', 'English', 89),
(54, 18, 'Creative Writing', 'King', 'English', 82),
(55, 12, 'Creative Writing', 'King', 'English', 74),
(56, 7, 'Creative Writing', 'King', 'English', 82),
(57, 25, 'Creative Writing', 'King', 'English', 77),
(58, 2, 'Business Writing ', 'Ford', 'English', 79),
(59, 18, 'Business Writing ', 'Ford', 'English', 71),
(60, 12, 'Business Writing ', 'Ford', 'English', 88),
(61, 7, 'Business Writing ', 'Ford', 'English', 98),
(62, 25, 'Business Writing ', 'Ford', 'English', 72),
(63, 22, 'Intro to Programming', 'Paschel', 'Science', 86),
(64, 14, 'Intro to Programming', 'Paschel', 'Science', 87),
(65, 3, 'Intro to Programming', 'Paschel', 'Science', 92),
(66, 16, 'Intro to Programming', 'Paschel', 'Science', 68),
(67, 9, 'Intro to Programming', 'Paschel', 'Science', 92),
(68, 1, 'Physics 101', 'Heisenberg', 'Science', 95),
(69, 2, 'Physics 101', 'Heisenberg', 'Science', 84),
(70, 3, 'Physics 101', 'Heisenberg', 'Science', 74),
(71, 4, 'Physics 101', 'Heisenberg', 'Science', 84),
(72, 5, 'Physics 101', 'Heisenberg', 'Science', 72),
(73, 6, 'Physics 101', 'Heisenberg', 'Science', 93),
(74, 7, 'Physics 101', 'Heisenberg', 'Science', 80),
(75, 8, 'Physics 101', 'Heisenberg', 'Science', 97),
(76, 9, 'Physics 101', 'Heisenberg', 'Science', 85),
(77, 10, 'Physics 101', 'Heisenberg', 'Science', 94),
(78, 11, 'Physics 101', 'Heisenberg', 'Science', 69),
(79, 12, 'Physics 101', 'Heisenberg', 'Science', 96),
(80, 13, 'Physics 101', 'Heisenberg', 'Science', 83),
(81, 14, 'Physics 101', 'Heisenberg', 'Science', 75),
(82, 15, 'Physics 101', 'Heisenberg', 'Science', 71),
(83, 16, 'Physics 101', 'Heisenberg', 'Science', 76),
(84, 17, 'Physics 101', 'Heisenberg', 'Science', 72),
(85, 18, 'Physics 101', 'Heisenberg', 'Science', 100),
(86, 19, 'Physics 101', 'Heisenberg', 'Science', 80),
(87, 20, 'Physics 101', 'Heisenberg', 'Science', 78),
(88, 21, 'Physics 101', 'Heisenberg', 'Science', 83),
(89, 22, 'Physics 101', 'Heisenberg', 'Science', 69),
(90, 23, 'Physics 101', 'Heisenberg', 'Science', 96),
(91, 24, 'Physics 101', 'Heisenberg', 'Science', 82),
(92, 25, 'Physics 101', 'Heisenberg', 'Science', 98),
(93, 21, 'Geometry 102 ', 'Octavio ', 'Math', 96),
(94, 15, 'Geometry 102 ', 'Octavio ', 'Math', 76),
(95, 19, 'Geometry 102 ', 'Octavio ', 'Math', 84),
(96, 10, 'Geometry 102 ', 'Octavio ', 'Math', 75),
(97, 6, 'Geometry 102 ', 'Octavio ', 'Math', 100),
(98, 22, 'Geometry 102 ', 'Octavio ', 'Math', 76),
(99, 14, 'Geometry 102 ', 'Octavio ', 'Math', 89),
(100, 3, 'Geometry 102 ', 'Octavio ', 'Math', 88),
(101, 16, 'Geometry 102 ', 'Octavio ', 'Math', 85),
(102, 9, 'Geometry 102 ', 'Octavio ', 'Math', 83),
(103, 22, 'Advanced php', 'Paschel', 'Science', 100),
(104, 14, 'Advanced php', 'Paschel', 'Science', 93),
(105, 3, 'Advanced php', 'Paschel', 'Science', 95),
(106, 16, 'Advanced php', 'Paschel', 'Science', 81),
(107, 9, 'Advanced php', 'Paschel', 'Science', 83),
(108, 24, 'Chemistry 201', 'Heisenberg', 'Science', 99),
(109, 20, 'Chemistry 201', 'Heisenberg', 'Science', 82),
(110, 13, 'Chemistry 201', 'Heisenberg', 'Science', 80),
(111, 4, 'Chemistry 201', 'Heisenberg', 'Science', 89),
(112, 1, 'Chemistry 201', 'Heisenberg', 'Science', 80),
(113, 21, 'Chemistry 201', 'Heisenberg', 'Science', 79),
(114, 15, 'Chemistry 201', 'Heisenberg', 'Science', 99),
(115, 19, 'Chemistry 201', 'Heisenberg', 'Science', 84),
(116, 10, 'Chemistry 201', 'Heisenberg', 'Science', 92),
(117, 6, 'Chemistry 201', 'Heisenberg', 'Science', 80),
(118, 17, 'Early American History', 'Adams', 'History', 73),
(119, 5, 'Early American History', 'Adams', 'History', 96),
(120, 23, 'Early American History', 'Adams', 'History', 85),
(121, 8, 'Early American History', 'Adams', 'History', 78),
(122, 11, 'Early American History', 'Adams', 'History', 80),
(123, 24, 'Early American History', 'Adams', 'History', 86),
(124, 20, 'Early American History', 'Adams', 'History', 99),
(125, 13, 'Early American History', 'Adams', 'History', 93),
(126, 4, 'Early American History', 'Adams', 'History', 88),
(127, 1, 'Early American History', 'Adams', 'History', 73),
(128, 21, 'Advanced Theoretical Physics', 'Hawking', 'Science', 93),
(129, 15, 'Advanced Theoretical Physics', 'Hawking', 'Science', 95),
(130, 19, 'Advanced Theoretical Physics', 'Hawking', 'Science', 81),
(131, 10, 'Advanced Theoretical Physics', 'Hawking', 'Science', 98),
(132, 6, 'Advanced Theoretical Physics', 'Hawking', 'Science', 74),
(133, 17, 'Economics During the Civil War', 'Lincoln ', 'History', 76),
(134, 5, 'Economics During the Civil War', 'Lincoln ', 'History', 76),
(135, 23, 'Economics During the Civil War', 'Lincoln ', 'History', 84),
(136, 8, 'Economics During the Civil War', 'Lincoln ', 'History', 77),
(137, 11, 'Economics During the Civil War', 'Lincoln ', 'History', 83),
(138, 17, 'Civil Rights Movement', 'White', 'History', 79),
(139, 5, 'Civil Rights Movement', 'White', 'History', 82),
(140, 23, 'Civil Rights Movement', 'White', 'History', 91),
(141, 8, 'Civil Rights Movement', 'White', 'History', 71),
(142, 11, 'Civil Rights Movement', 'White', 'History', 76);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`id` int(4) NOT NULL COMMENT 'Student''s ID',
  `first_name` varchar(25) NOT NULL COMMENT 'First Name',
  `last_name` varchar(25) NOT NULL COMMENT 'Last Name',
  `age` int(3) NOT NULL COMMENT 'Student''s Age',
  `major` varchar(50) NOT NULL COMMENT 'Course of study',
  `sex` varchar(7) NOT NULL COMMENT 'Male / Female / Other'
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `age`, `major`, `sex`) VALUES
(1, 'Happy', 'Gilmore', 25, 'Liberal Arts', 'Male'),
(2, 'Billy', 'Madison', 28, 'Buisness', 'Male'),
(3, 'Chrisine', 'Flores', 22, 'Computer Science', 'Female'),
(4, 'Sarah', 'Sieler', 20, 'Liberal Arts', 'Female'),
(5, 'John', 'Smith', 25, 'American History', 'Male'),
(6, 'Jessie', 'Watson', 21, 'Theoretical Physics ', 'Female'),
(7, 'John', 'Rogers', 32, 'Buisness', 'Male'),
(8, 'Erin', 'Fabella ', 28, 'American History', 'Female'),
(9, 'Steve', 'Jobs', 34, 'Computer Science', 'Male'),
(10, 'Eric', 'Johnson', 22, 'Theoretical Physics', 'Male'),
(11, 'Rick', 'Harrison', 35, 'American History', 'Male'),
(12, 'Susie', 'Hanson', 31, 'Buisness', 'Female'),
(13, 'Amanda', 'Hardy', 24, 'Liberal Arts', 'Female'),
(14, 'Jacob', 'Hendeerson', 19, 'Computer Science', 'Male'),
(15, 'Bill', 'Gates', 23, 'Theoretical Physics', 'Male'),
(16, 'Nichole', 'White', 30, 'Computer Science', 'Female'),
(17, 'Amber', 'Hafley', 29, 'American History', 'Female'),
(18, 'Cathey', 'Silver', 25, 'Buisness', 'Female'),
(19, 'Tyler', 'Durden', 20, 'Theoretical Physics', 'Male'),
(20, 'Lisa', 'Simpson', 35, 'Liberal Arts', 'Female'),
(21, 'George', 'Kastanza', 21, 'Theoretical Physica', 'Male'),
(22, 'Katie', 'Forsythe', 19, 'Computer Science', 'Female'),
(23, 'Johnny', 'O''quinn', 26, 'American History', 'Male'),
(24, 'Karen', 'Buckley', 24, 'Liberal Arts', 'Female'),
(25, 'Scarlet', 'Johanson', 27, 'Business', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT COMMENT 'Record ID',AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Student''s ID',AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
