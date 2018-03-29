-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 29, 2018 at 06:36 AM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakclaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorisation`
--

DROP TABLE IF EXISTS `authorisation`;
CREATE TABLE IF NOT EXISTS `authorisation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(11) NOT NULL,
  `PERMIS_ID` int(11) NOT NULL,
  `MODIDATE` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `USER_PERM` (`USER_ID`,`PERMIS_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authorisation`
--

INSERT INTO `authorisation` (`ID`, `USER_ID`, `PERMIS_ID`, `MODIDATE`) VALUES
(1, 17, 4, '28-02-2018 7:49 am'),
(4, 11, 1, ''),
(3, 17, 3, '28-02-2018 8:08 am'),
(5, 17, 5, '02-03-2018 7:50 am'),
(6, 18, 4, '02-03-2018 8:42 am'),
(7, 19, 4, '04-03-2018 6:20 am');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

DROP TABLE IF EXISTS `candidates`;
CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_code` varchar(100) NOT NULL,
  `candidate_name_en` varchar(100) NOT NULL,
  `candidate_name_kh` varchar(100) NOT NULL,
  `candidate_dob` varchar(100) NOT NULL,
  `candidate_gender` varchar(6) NOT NULL,
  `modidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `candidate_code`, `candidate_name_en`, `candidate_name_kh`, `candidate_dob`, `candidate_gender`, `modidate`) VALUES
(10, '', 'Rithy Ly', 'លី រិទ្ធី', '', '', '28-03-2018 10:51 am'),
(9, '', 'Lim Chung Keang', 'លឹម ជុងគាង', '', '', '28-03-2018 10:46 am'),
(8, '', 'Koy Ponleu', 'កុយ ពន្លឺ', '18/10/1984', '', '28-03-2018 10:38 am'),
(7, '', 'Ban Yanno', 'បាន យ៉ាណូ', '12/12/1986', '', '28-03-2018 10:30 am');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_degree_records`
--

DROP TABLE IF EXISTS `candidate_degree_records`;
CREATE TABLE IF NOT EXISTS `candidate_degree_records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `degree_type_id` int(11) NOT NULL,
  `degree_school` varchar(200) NOT NULL,
  `degree_date` varchar(100) NOT NULL,
  `attachment_path` varchar(250) NOT NULL,
  `modidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidate_degree_records`
--

INSERT INTO `candidate_degree_records` (`id`, `candidate_id`, `degree_type_id`, `degree_school`, `degree_date`, `attachment_path`, `modidate`) VALUES
(10, 8, 2, 'AUT', '12/12/2017', 'images/ma_file_candidate_8.pdf', ''),
(9, 8, 1, 'RUPP', '10/10/2006', 'images/ba_file_candidate_8.pdf', ''),
(8, 7, 1, 'RUPP', '18/08/2008', 'images/ba_file_candidate_7.pdf', ''),
(11, 9, 3, 'Korea', '23/12/2010', 'images/phd_file_candidate_9.pdf', ''),
(12, 10, 1, 'RUPP', '11/11/1111', 'images/ba_file_candidate_10.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_experience_criteria`
--

DROP TABLE IF EXISTS `candidate_experience_criteria`;
CREATE TABLE IF NOT EXISTS `candidate_experience_criteria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `institution` varchar(150) NOT NULL,
  `exp_detail` text NOT NULL,
  `modidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidate_experience_criteria`
--

INSERT INTO `candidate_experience_criteria` (`id`, `candidate_id`, `institution`, `exp_detail`, `modidate`) VALUES
(2, 7, 'NBC', 'Working as IT', '28-03-2018 10:30 am'),
(3, 8, 'NBC', 'Working as security officer', '28-03-2018 10:38 am'),
(4, 9, 'NBC', 'Clear system', '28-03-2018 10:46 am'),
(5, 10, 'NBC', 'Playing', '28-03-2018 10:51 am');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_progress`
--

DROP TABLE IF EXISTS `candidate_progress`;
CREATE TABLE IF NOT EXISTS `candidate_progress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `is_inspection_assigned` tinyint(4) NOT NULL,
  `composition_name1` varchar(100) NOT NULL,
  `composition_name2` varchar(100) NOT NULL,
  `composition_name3` varchar(100) NOT NULL,
  `applying_date` varchar(100) NOT NULL,
  `date_of_inspection_submission` varchar(100) NOT NULL,
  `inspection_decision_no` varchar(100) NOT NULL,
  `date_of_inspection_decision` varchar(100) NOT NULL,
  `inspection_report_file` varchar(250) NOT NULL,
  `inspection_report_des` text NOT NULL,
  `date_of_interview` varchar(100) NOT NULL,
  `interview_file` varchar(250) NOT NULL,
  `interview_report_des` text NOT NULL,
  `date_of_board_meeting` varchar(100) NOT NULL,
  `meeting_outcome_approval` tinyint(4) NOT NULL,
  `meeting_approval_no` varchar(100) NOT NULL,
  `date_of_meeting_approval` varchar(100) NOT NULL,
  `modidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `candidate_id` (`candidate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidate_progress`
--

INSERT INTO `candidate_progress` (`id`, `candidate_id`, `is_inspection_assigned`, `composition_name1`, `composition_name2`, `composition_name3`, `applying_date`, `date_of_inspection_submission`, `inspection_decision_no`, `date_of_inspection_decision`, `inspection_report_file`, `inspection_report_des`, `date_of_interview`, `interview_file`, `interview_report_des`, `date_of_board_meeting`, `meeting_outcome_approval`, `meeting_approval_no`, `date_of_meeting_approval`, `modidate`) VALUES
(1, 9, 1, 'Mr A', 'Mr B', 'Mr C', '12/12/2010', '', '', '', '', '', '', '', '', '', 0, '', '', '28-03-2018 10:46 am'),
(2, 10, 1, 'Mr A', 'Mr B', 'Mr C', '12/12/2010', '11/11/1111', '200', '12/33/3333', 'images/inspection_report_candidate_10.pdf', 'report inspected', '', '', '', '', 0, '', '', '28-03-2018 10:51 am');

-- --------------------------------------------------------

--
-- Table structure for table `continuing_education`
--

DROP TABLE IF EXISTS `continuing_education`;
CREATE TABLE IF NOT EXISTS `continuing_education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lawyer_id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `number_of_hours` int(11) NOT NULL,
  `date_of_study` varchar(100) NOT NULL,
  `modidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `continuing_education`
--

INSERT INTO `continuing_education` (`id`, `lawyer_id`, `subject`, `number_of_hours`, `date_of_study`, `modidate`) VALUES
(25, 68, 'Law', 15, '29-03-2018 1:20 pm', '29-03-2018 1:20 pm'),
(24, 68, 'Math', 10, '29-03-2018 1:20 pm', '29-03-2018 1:20 pm'),
(23, 64, 'Math', 1, '29-03-2018 12:51 pm', '29-03-2018 12:51 pm'),
(22, 65, 'Law', 7, '29-03-2018 12:47 pm', '29-03-2018 12:47 pm'),
(21, 65, 'Math', 9, '29-03-2018 12:47 pm', '29-03-2018 12:47 pm'),
(20, 62, 'Law', 8, '29-03-2018 12:40 pm', '29-03-2018 12:40 pm'),
(19, 63, 'Math', 10, '29-03-2018 12:33 pm', '29-03-2018 12:33 pm');

-- --------------------------------------------------------

--
-- Table structure for table `council_decision`
--

DROP TABLE IF EXISTS `council_decision`;
CREATE TABLE IF NOT EXISTS `council_decision` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `decision` varchar(250) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `council_decision`
--

INSERT INTO `council_decision` (`id`, `decision`, `isActive`) VALUES
(1, 'ស្តីបន្ទោសផ្ទាល់មាត់', 1),
(2, 'ស្តីបន្ទោសជាលាយលក្ខណ៍អក្សរ', 1),
(3, 'លុបឈ្មោះចេញពីបញ្ជី ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `degree_types`
--

DROP TABLE IF EXISTS `degree_types`;
CREATE TABLE IF NOT EXISTS `degree_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `modidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `degree_types`
--

INSERT INTO `degree_types` (`id`, `type`, `modidate`) VALUES
(1, 'BA', ''),
(2, 'MA', ''),
(3, 'PhD', '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `DEP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DEP_NAME` varchar(150) NOT NULL,
  `DEP_DESC` varchar(100) NOT NULL,
  PRIMARY KEY (`DEP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DEP_ID`, `DEP_NAME`, `DEP_DESC`) VALUES
(1, 'Administration', 'រដ្ឋបាល'),
(2, 'Inspection', 'អធិការកិច្ច');

-- --------------------------------------------------------

--
-- Table structure for table `depart_permission`
--

DROP TABLE IF EXISTS `depart_permission`;
CREATE TABLE IF NOT EXISTS `depart_permission` (
  `DPPM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DEP_ID` int(11) NOT NULL,
  `PERMIS_ID` int(11) NOT NULL,
  PRIMARY KEY (`DPPM_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `depart_permission`
--

INSERT INTO `depart_permission` (`DPPM_ID`, `DEP_ID`, `PERMIS_ID`) VALUES
(1, 1, 5),
(2, 2, 4),
(3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `discipline`
--

DROP TABLE IF EXISTS `discipline`;
CREATE TABLE IF NOT EXISTS `discipline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lawyer_id` int(11) NOT NULL,
  `lawyer_code` varchar(100) NOT NULL,
  `complaints_code` varchar(100) NOT NULL,
  `complaints_desc` text NOT NULL,
  `is_presidential_reconciliation` tinyint(4) NOT NULL,
  `is_inspection` tinyint(4) NOT NULL,
  `complaints_file` varchar(250) NOT NULL,
  `cd_id` int(11) NOT NULL COMMENT 'id from council decision',
  `modidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discipline`
--

INSERT INTO `discipline` (`id`, `lawyer_id`, `lawyer_code`, `complaints_code`, `complaints_desc`, `is_presidential_reconciliation`, `is_inspection`, `complaints_file`, `cd_id`, `modidate`) VALUES
(18, 67, '', '', 'Hello', 0, 0, '', 0, '29-03-2018 1:03 pm');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

DROP TABLE IF EXISTS `lawyers`;
CREATE TABLE IF NOT EXISTS `lawyers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lawyer_code` varchar(100) NOT NULL,
  `lawyer_name_en` varchar(100) NOT NULL,
  `lawyer_name_kh` varchar(250) NOT NULL,
  `lawyer_dob` varchar(100) NOT NULL,
  `date_of_code_validity` varchar(100) NOT NULL,
  `code_validity_file` varchar(250) NOT NULL,
  `modidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lawyer_code` (`lawyer_code`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`id`, `lawyer_code`, `lawyer_name_en`, `lawyer_name_kh`, `lawyer_dob`, `date_of_code_validity`, `code_validity_file`, `modidate`) VALUES
(68, '444', 'MMM', 'MNA', '11/11/1111', '', '', '29-03-2018 1:20 pm'),
(67, '222', 'pppp', 'OOIE', '22/22/2___', '', '', '29-03-2018 1:03 pm'),
(66, '444443', 'BAC', 'ABC', '33/33/333_', '', '', '29-03-2018 1:02 pm'),
(64, '9999', 'Dith Sochang', 'Dith Sochang', '11/11/1111', '', '', '29-03-2018 12:51 pm'),
(65, '77', 'Ban Yano', 'បាន យ៉ាណូ', '11/11/1111', '', '', '29-03-2018 12:47 pm'),
(63, '4444', 'Rithy ly', 'លី រិទ្ធី', '22/22/2222', '', '', '29-03-2018 12:33 pm'),
(62, '181084', 'Koy Ponleu', 'កុយ ពន្លឺ', '18/10/1984', '', '', '29-03-2018 12:40 pm');

-- --------------------------------------------------------

--
-- Table structure for table `permission_label`
--

DROP TABLE IF EXISTS `permission_label`;
CREATE TABLE IF NOT EXISTS `permission_label` (
  `PERMIS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PERMIS_LABEL` varchar(50) NOT NULL,
  PRIMARY KEY (`PERMIS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permission_label`
--

INSERT INTO `permission_label` (`PERMIS_ID`, `PERMIS_LABEL`) VALUES
(1, 'Super'),
(4, 'Inspect'),
(5, 'Administrate');

-- --------------------------------------------------------

--
-- Table structure for table `professional_conditions`
--

DROP TABLE IF EXISTS `professional_conditions`;
CREATE TABLE IF NOT EXISTS `professional_conditions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lawyer_id` int(11) NOT NULL,
  `cert_completion_no` varchar(100) NOT NULL,
  `date_of_completion` varchar(100) NOT NULL,
  `date_of_prob` varchar(100) NOT NULL,
  `is_pursue_study` tinyint(1) NOT NULL,
  `fulltime_no` varchar(100) NOT NULL,
  `date_of_fulltime` varchar(100) NOT NULL,
  `fulltime_file` varchar(250) NOT NULL,
  `date_of_righteousness` varchar(100) NOT NULL,
  `date_end_of_righteousness` varchar(100) NOT NULL,
  `cert_of_pro_accr_no` varchar(100) NOT NULL,
  `cert_of_pro_accr_date` varchar(100) NOT NULL,
  `cert_of_pro_file` varchar(250) NOT NULL,
  `date_of_without_righteousness` varchar(100) NOT NULL,
  `date_of_prob_righteousness` varchar(100) NOT NULL,
  `no_prob_righteousness` varchar(100) NOT NULL,
  `date_of_no_prob_righteousness` varchar(100) NOT NULL,
  `no_probabtion_file` varchar(250) NOT NULL,
  `fulltime_approval` varchar(100) NOT NULL,
  `date_of_fulltime_approval` varchar(100) NOT NULL,
  `fulltime_approval_file` varchar(250) NOT NULL,
  `firm_name` varchar(250) NOT NULL,
  `authorisation_number` varchar(100) NOT NULL,
  `permission_number` varchar(100) NOT NULL,
  `firm_validity` varchar(100) NOT NULL,
  `firm_approval_file` varchar(250) NOT NULL,
  `firm_validity_file` varchar(250) NOT NULL,
  `out_bar_validity` varchar(100) NOT NULL,
  `proposal_file` varchar(250) NOT NULL,
  `out_bar_no` varchar(100) NOT NULL,
  `out_bar_decision` varchar(100) NOT NULL,
  `no_pro_no` varchar(100) NOT NULL,
  `date_of_no_pro` varchar(100) NOT NULL,
  `no_pro_file` varchar(250) NOT NULL,
  `out_list_validity` varchar(100) NOT NULL,
  `out_list_validity_file` varchar(250) NOT NULL,
  `out_list_reason` text NOT NULL,
  `prohibition_statement` varchar(250) NOT NULL,
  `prohibition_statement_file` varchar(250) NOT NULL,
  `date_of_prohibition` varchar(100) NOT NULL,
  `prohibition_reason` text NOT NULL,
  `modidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lawyer_id` (`lawyer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professional_conditions`
--

INSERT INTO `professional_conditions` (`id`, `lawyer_id`, `cert_completion_no`, `date_of_completion`, `date_of_prob`, `is_pursue_study`, `fulltime_no`, `date_of_fulltime`, `fulltime_file`, `date_of_righteousness`, `date_end_of_righteousness`, `cert_of_pro_accr_no`, `cert_of_pro_accr_date`, `cert_of_pro_file`, `date_of_without_righteousness`, `date_of_prob_righteousness`, `no_prob_righteousness`, `date_of_no_prob_righteousness`, `no_probabtion_file`, `fulltime_approval`, `date_of_fulltime_approval`, `fulltime_approval_file`, `firm_name`, `authorisation_number`, `permission_number`, `firm_validity`, `firm_approval_file`, `firm_validity_file`, `out_bar_validity`, `proposal_file`, `out_bar_no`, `out_bar_decision`, `no_pro_no`, `date_of_no_pro`, `no_pro_file`, `out_list_validity`, `out_list_validity_file`, `out_list_reason`, `prohibition_statement`, `prohibition_statement_file`, `date_of_prohibition`, `prohibition_reason`, `modidate`) VALUES
(17, 68, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '29-03-2018 1:20 pm'),
(16, 67, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '29-03-2018 1:03 pm'),
(15, 66, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '29-03-2018 1:02 pm'),
(14, 65, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '29-03-2018 12:47 pm'),
(11, 62, '100', '11/10/2006', '10/08/2006', 1, '200', '15/12/2017', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'KN Legal', '300', '2050', '25/12/2020', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'undefined', '29-03-2018 12:40 pm'),
(12, 63, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '29-03-2018 12:33 pm'),
(13, 64, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '29-03-2018 12:51 pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `USER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_NAME` varchar(50) NOT NULL,
  `USER_PASSWORD` varchar(50) NOT NULL,
  `USER_FULLNAME` varchar(100) NOT NULL,
  `USER_STAFFID` varchar(20) NOT NULL,
  `USER_DESC` varchar(150) NOT NULL,
  `MODIDATE` varchar(100) NOT NULL,
  `DEP_ID` int(11) NOT NULL,
  `isActive` tinyint(4) NOT NULL,
  `isSuper` tinyint(4) NOT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USER_ID`, `USER_NAME`, `USER_PASSWORD`, `USER_FULLNAME`, `USER_STAFFID`, `USER_DESC`, `MODIDATE`, `DEP_ID`, `isActive`, `isSuper`) VALUES
(11, 'ponleu18', '1', 'Ponleu Koy', 'P122', '', '', 0, 1, 1),
(17, 'test', '1', 'TEST', 'TEST1112', '', '28-02-2018 7:28 am', 2, 1, 0),
(18, 'test1', '1', 'TEST1', 'TEST1', '', '02-03-2018 8:28 am', 1, 1, 0),
(19, 'yarttak', '123456', 'Chhuy Yarttak', 'YT123', '', '04-03-2018 6:18 am', 2, 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
