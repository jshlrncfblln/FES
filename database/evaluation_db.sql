-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 04:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evaluation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_list`
--

CREATE TABLE `academic_list` (
  `id` int(30) NOT NULL,
  `year` text NOT NULL,
  `semester` int(30) NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '0=Pending,1=Start,2=Closed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_list`
--

INSERT INTO `academic_list` (`id`, `year`, `semester`, `is_default`, `status`) VALUES
(4, '2023-2024', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_list`
--

CREATE TABLE `class_list` (
  `id` int(30) NOT NULL,
  `curriculum` text NOT NULL,
  `level` text NOT NULL,
  `section` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_list`
--

INSERT INTO `class_list` (`id`, `curriculum`, `level`, `section`) VALUES
(1, 'BSIT', '4', 'A'),
(2, 'BSIS', '4', 'A'),
(3, 'BSEMC', '1', 'A'),
(4, 'BSCS', '4', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_list`
--

CREATE TABLE `criteria_list` (
  `id` int(30) NOT NULL,
  `criteria` text NOT NULL,
  `order_by` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criteria_list`
--

INSERT INTO `criteria_list` (`id`, `criteria`, `order_by`) VALUES
(1, 'LEARNING PROCESS', 0),
(5, 'INSTRUCTIONAL DELIVERIES', 1),
(6, 'TEACHER QUALITIES', 2),
(7, 'ASSESSMENT', 3),
(8, 'LEARNING ENVIRONMENT', 4),
(9, 'CLASSROOM MANAGEMENT', 5);

-- --------------------------------------------------------

--
-- Table structure for table `dean_list`
--

CREATE TABLE `dean_list` (
  `id` int(255) NOT NULL,
  `school_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT '''no-image-available.png''',
  `date_created` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_answers`
--

CREATE TABLE `evaluation_answers` (
  `evaluation_id` int(30) NOT NULL,
  `question_id` int(30) NOT NULL,
  `rate` int(20) NOT NULL,
  `student_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation_answers`
--

INSERT INTO `evaluation_answers` (`evaluation_id`, `question_id`, `rate`, `student_name`) VALUES
(1, 1, 5, ''),
(1, 6, 4, ''),
(1, 3, 5, ''),
(2, 1, 5, ''),
(2, 6, 5, ''),
(2, 3, 4, ''),
(3, 1, 5, ''),
(3, 6, 5, ''),
(3, 3, 4, ''),
(4, 1, 5, ''),
(4, 6, 5, ''),
(4, 3, 5, ''),
(4, 7, 5, ''),
(5, 8, 5, ''),
(5, 9, 5, ''),
(5, 10, 5, ''),
(5, 11, 5, ''),
(5, 12, 5, ''),
(5, 16, 5, ''),
(5, 13, 5, ''),
(5, 14, 5, ''),
(5, 15, 5, ''),
(5, 17, 5, ''),
(5, 18, 5, ''),
(5, 19, 5, ''),
(5, 20, 5, ''),
(5, 21, 5, ''),
(5, 22, 5, ''),
(5, 23, 5, ''),
(5, 24, 5, ''),
(5, 25, 5, ''),
(5, 26, 5, ''),
(5, 27, 5, ''),
(5, 28, 5, ''),
(5, 29, 5, ''),
(5, 30, 5, ''),
(5, 31, 5, ''),
(5, 32, 5, ''),
(5, 33, 5, ''),
(5, 34, 5, ''),
(5, 35, 5, ''),
(5, 36, 5, ''),
(5, 37, 5, ''),
(6, 8, 5, ''),
(6, 9, 5, ''),
(6, 10, 5, ''),
(6, 11, 5, ''),
(6, 12, 5, ''),
(6, 16, 5, ''),
(6, 13, 5, ''),
(6, 14, 5, ''),
(6, 15, 5, ''),
(6, 17, 5, ''),
(6, 18, 5, ''),
(6, 19, 5, ''),
(6, 20, 5, ''),
(6, 21, 5, ''),
(6, 22, 5, ''),
(6, 23, 5, ''),
(6, 24, 5, ''),
(6, 25, 5, ''),
(6, 26, 5, ''),
(6, 27, 5, ''),
(6, 28, 5, ''),
(6, 29, 5, ''),
(6, 30, 5, ''),
(6, 31, 5, ''),
(6, 32, 5, ''),
(6, 33, 5, ''),
(6, 34, 5, ''),
(6, 35, 5, ''),
(6, 36, 5, ''),
(6, 37, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_list`
--

CREATE TABLE `evaluation_list` (
  `evaluation_id` int(30) NOT NULL,
  `academic_id` int(30) NOT NULL,
  `class_id` int(30) NOT NULL,
  `student_id` int(30) NOT NULL,
  `subject_id` int(30) NOT NULL,
  `faculty_id` int(30) NOT NULL,
  `restriction_id` int(30) NOT NULL,
  `date_taken` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation_list`
--

INSERT INTO `evaluation_list` (`evaluation_id`, `academic_id`, `class_id`, `student_id`, `subject_id`, `faculty_id`, `restriction_id`, `date_taken`) VALUES
(1, 3, 1, 1, 1, 1, 8, '2020-12-15 16:26:51'),
(2, 3, 2, 2, 2, 1, 9, '2020-12-15 16:33:37'),
(3, 3, 1, 3, 1, 1, 8, '2020-12-15 20:18:49'),
(4, 3, 1, 5, 1, 1, 8, '2023-07-12 13:17:26'),
(5, 4, 1, 7, 2, 3, 13, '2023-07-31 15:21:58'),
(6, 4, 2, 9, 3, 3, 12, '2023-07-31 17:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_list`
--

CREATE TABLE `faculty_list` (
  `id` int(30) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `avatar` text NOT NULL DEFAULT 'no-image-available.png',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_list`
--

INSERT INTO `faculty_list` (`id`, `school_id`, `firstname`, `lastname`, `email`, `password`, `avatar`, `date_created`) VALUES
(3, '20230001', 'Joko', 'Gadingan', 'joko@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1690780320_id-pic-1.jpg', '2023-07-31 13:12:36'),
(4, '20230003', 'Jumyl', 'Reyes', 'jumyl@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1690780380_id-pic-2.jpg', '2023-07-31 13:13:26'),
(5, '20230002', 'Joshua', 'Fabillon', 'joshua@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1690780380_id-pic-1.jpg', '2023-07-31 13:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `program_head_list`
--

CREATE TABLE `program_head_list` (
  `id` int(255) NOT NULL,
  `school_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT '''no-image-available.png''',
  `date_created` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `question_list`
--

CREATE TABLE `question_list` (
  `id` int(30) NOT NULL,
  `academic_id` int(30) NOT NULL,
  `question` text NOT NULL,
  `order_by` int(30) NOT NULL,
  `criteria_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_list`
--

INSERT INTO `question_list` (`id`, `academic_id`, `question`, `order_by`, `criteria_id`) VALUES
(1, 3, 'Sample Question', 0, 1),
(3, 3, 'Test', 2, 2),
(5, 0, 'Question 101', 0, 1),
(6, 3, 'Sample 101', 1, 1),
(7, 3, 'samsaple ', 3, 4),
(8, 4, 'The learners are engaged to think deeply with and about the important concepts and theories.		', 0, 1),
(9, 4, 'The learners have opportunities to create and generate new ideas.', 1, 1),
(10, 4, 'The learners are engaged in pair and group activities.', 2, 1),
(11, 4, 'Maintains eye contact with the students while speaking', 3, 1),
(12, 4, 'The learners are provided opportunities to communicate accurately, appropriately, and meaningfully.	', 4, 1),
(13, 4, 'The teacher clarifies the learning outcomes.', 5, 5),
(14, 4, 'The teacher aligns the learning outcomes with the institutional and program learning outcomes.', 6, 5),
(15, 4, 'The teacher connects the lesson to real-life contexts.', 7, 5),
(16, 4, 'The teacher adjusts his or her teaching style and approaches to different learners.	', 8, 1),
(17, 4, 'The teacher asks questions that requires critical thinking.	', 9, 5),
(18, 4, 'The teacher is knowledgeable in the subject matter.', 10, 6),
(19, 4, 'The teacher has good communication skills.	', 11, 6),
(20, 4, 'The teacher is presentable and well groomed.', 12, 6),
(21, 4, 'The teacher exudes positive attitude.', 13, 6),
(22, 4, 'The teacher has technical skills in using technology.', 14, 6),
(23, 4, 'The learning outcomes have corresponding learning activities and assessment.', 15, 7),
(24, 4, 'The assessment tasks simulate real-life contexts relevant to the learning outcomes.	', 16, 7),
(25, 4, 'The teacher assesses learners misconceptions and current skills and knowledge (diagnostic assessment, comprehension checks) necessary for instructional planning and delivery.', 17, 7),
(26, 4, 'The teacher focuses on performance tasks, projects and other alternative forms of assessments (e.g., portfolios, projects, reflection papers and oral interviews) using appropriate rubrics.', 18, 7),
(27, 4, 'Learners are assessed in multiple ways (self, peer, and teacher; summative and formative; traditional and alternative) to fully capture their performance at different levels.	', 19, 7),
(28, 4, 'The learning environment is cooperative and supportive.', 20, 8),
(29, 4, 'The classroom environment promotes open communication between learners and teacher.	', 21, 8),
(30, 4, 'The classroom environment has enough technology to achieve learning outcomes.', 22, 8),
(31, 4, 'The learning environment promotes learners’ interest and enthusiasm in learning.', 23, 8),
(32, 4, 'The learning environment helps learners become relaxed, focused, and comfortable.', 24, 8),
(33, 4, 'The teacher observes class routines and procedures (e.g., class schedule, checking of attendance, explanation of syllabus).', 25, 9),
(34, 4, 'The teacher promotes proper behavior among learners.', 26, 9),
(35, 4, 'The teacher recognizes each student during class participation or activities.', 27, 9),
(36, 4, 'The teacher maintains learners’ attention.', 28, 9),
(37, 4, 'The teacher provides clear instructions for all classroom activities.', 29, 9);

-- --------------------------------------------------------

--
-- Table structure for table `registrar_list`
--

CREATE TABLE `registrar_list` (
  `id` int(255) NOT NULL,
  `school_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT '''no-image-available.png''	',
  `date_created` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `restriction_list`
--

CREATE TABLE `restriction_list` (
  `id` int(30) NOT NULL,
  `academic_id` int(30) NOT NULL,
  `faculty_id` int(30) NOT NULL,
  `class_id` int(30) NOT NULL,
  `subject_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restriction_list`
--

INSERT INTO `restriction_list` (`id`, `academic_id`, `faculty_id`, `class_id`, `subject_id`) VALUES
(8, 3, 1, 1, 1),
(9, 3, 1, 2, 2),
(10, 3, 1, 3, 3),
(11, 3, 1, 2, 1),
(12, 4, 3, 2, 3),
(13, 4, 3, 1, 2),
(14, 4, 3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `id` int(30) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `class_id` int(30) NOT NULL,
  `avatar` text NOT NULL DEFAULT 'no-image-available.png',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`id`, `school_id`, `firstname`, `lastname`, `email`, `password`, `class_id`, `avatar`, `date_created`) VALUES
(7, '20230001', 'Joko', 'Gadingan', 'joko@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, '1690786860_id-pic-1.jpg', '2023-07-31 15:01:59'),
(8, '20230002', 'Lyka', 'Fortuna', 'lyka@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 4, '1690786920_id-pic-2.jpg', '2023-07-31 15:02:40'),
(9, '20230003', 'Jumyl', 'Reyes', 'jumyl@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, '1690786980_id-pic-1.jpg', '2023-07-31 15:03:14'),
(10, '20230004', 'Princess', 'Rotia', 'princess@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 3, '1690786980_id-pic-1.jpg', '2023-07-31 15:03:57'),
(11, '20230005', 'Joshua', 'Fabillon', 'joshua@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 4, '1690804860_WIN_20220521_10_05_40_Pro.jpg', '2023-07-31 20:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `subject_list`
--

CREATE TABLE `subject_list` (
  `id` int(30) NOT NULL,
  `code` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_list`
--

INSERT INTO `subject_list` (`id`, `code`, `subject`, `description`) VALUES
(2, 'ENG-101', 'English', 'English'),
(3, 'M-101', 'Math 101', 'Math - Advance Algebra ');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
(1, 'Faculty Evaluation System', 'ccsjdm2017@gmail.com', '(044) 815 6543', 'Road 1, Minuyan Proper\nSan Jose del Monte, Bulacan 3024', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `school_id` varchar(255) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `avatar` text NOT NULL DEFAULT 'no-image-available.png',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `school_id`, `firstname`, `lastname`, `email`, `password`, `avatar`, `date_created`) VALUES
(1, '20230000', 'Firstname', 'Lastname', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', '1690784400_id-pic-1.jpg', '2020-11-26 10:57:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_list`
--
ALTER TABLE `academic_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_list`
--
ALTER TABLE `class_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criteria_list`
--
ALTER TABLE `criteria_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dean_list`
--
ALTER TABLE `dean_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation_list`
--
ALTER TABLE `evaluation_list`
  ADD PRIMARY KEY (`evaluation_id`);

--
-- Indexes for table `faculty_list`
--
ALTER TABLE `faculty_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_head_list`
--
ALTER TABLE `program_head_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_list`
--
ALTER TABLE `question_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrar_list`
--
ALTER TABLE `registrar_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restriction_list`
--
ALTER TABLE `restriction_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_list`
--
ALTER TABLE `student_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_list`
--
ALTER TABLE `subject_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_list`
--
ALTER TABLE `academic_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class_list`
--
ALTER TABLE `class_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `criteria_list`
--
ALTER TABLE `criteria_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dean_list`
--
ALTER TABLE `dean_list`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evaluation_list`
--
ALTER TABLE `evaluation_list`
  MODIFY `evaluation_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty_list`
--
ALTER TABLE `faculty_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `program_head_list`
--
ALTER TABLE `program_head_list`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_list`
--
ALTER TABLE `question_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `registrar_list`
--
ALTER TABLE `registrar_list`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restriction_list`
--
ALTER TABLE `restriction_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_list`
--
ALTER TABLE `student_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subject_list`
--
ALTER TABLE `subject_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
