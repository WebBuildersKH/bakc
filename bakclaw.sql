-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2018 at 01:26 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `candidate_code`, `candidate_name_en`, `candidate_name_kh`, `candidate_dob`, `candidate_gender`, `modidate`) VALUES
(1, '', 'Rithy Ly', 'រិទ្ធី លី', '12/12/2009', '', '27-03-2018 3:17 pm'),
(2, '', 'Dith Sochang', 'ឌិត សុចង់', '12/33/3444', '', '27-03-2018 3:52 pm'),
(3, '', 'Dith Sochang', 'ឌិត សុចង់', '12/33/3444', '', '27-03-2018 3:52 pm'),
(4, '', 'Sok Dara', 'សុខ ដារា', '11/11/1111', '', '27-03-2018 3:55 pm'),
(5, '', 'Sok Dara', 'សុខ ដារា', '11/11/1111', '', '27-03-2018 3:55 pm');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidate_degree_records`
--

INSERT INTO `candidate_degree_records` (`id`, `candidate_id`, `degree_type_id`, `degree_school`, `degree_date`, `attachment_path`, `modidate`) VALUES
(1, 3, 1, 'RUPP', '44/44/4444', 'images/scan0314.pdf_1.pdf', ''),
(2, 3, 2, 'NUM', '22/22/2222', '0', ''),
(3, 3, 3, '', '', '', ''),
(4, 5, 1, 'NIM', '55/55/5555', 'images/scan0314.pdf_1.pdf', ''),
(5, 5, 2, 'Royal', '66/66/6666', '0', ''),
(6, 5, 3, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_experience_criteria`
--

DROP TABLE IF EXISTS `candidate_experience_criteria`;
CREATE TABLE IF NOT EXISTS `candidate_experience_criteria` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `institution` varchar(150) NOT NULL,
  `exp_detail` text NOT NULL,
  `modidate` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `meeting_outcome_reject` tinyint(4) NOT NULL,
  `meeting_approval_no` varchar(100) NOT NULL,
  `date_of_meeting_approval` varchar(100) NOT NULL,
  `modidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `candidate_id` (`candidate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `continuing_education`
--

INSERT INTO `continuing_education` (`id`, `lawyer_id`, `subject`, `number_of_hours`, `date_of_study`, `modidate`) VALUES
(1, 44, '', 5, '12-03-2018 8:02 am', '12-03-2018 8:02 am'),
(2, 45, '', 8, '12-03-2018 8:07 am', '12-03-2018 8:07 am'),
(3, 51, 'Commercial Law', 10, '23-03-2018 2:49 am', '23-03-2018 2:49 am'),
(4, 51, 'Civil Law', 5, '23-03-2018 2:49 am', '23-03-2018 2:49 am'),
(5, 47, '', 1, '12-03-2018 8:18 am', '12-03-2018 8:18 am'),
(6, 53, 'ABC', 10, '21-03-2018 3:47 pm', '21-03-2018 3:47 pm'),
(7, 53, 'DDA', 6, '21-03-2018 3:47 pm', '21-03-2018 3:47 pm'),
(8, 53, 'BCA', 3, '21-03-2018 3:47 pm', '21-03-2018 3:47 pm'),
(9, 0, '', 0, '21-03-2018 3:47 pm', '21-03-2018 3:47 pm'),
(10, 57, 'Chem', 1, '21-03-2018 4:00 pm', '21-03-2018 4:00 pm'),
(11, 57, 'Math', 2, '21-03-2018 4:00 pm', '21-03-2018 4:00 pm'),
(12, 51, 'Training', 7, '23-03-2018 2:49 am', '23-03-2018 2:49 am'),
(13, 56, 'Culture', 5, '23-03-2018 10:21 am', '23-03-2018 10:21 am'),
(14, 58, 'SSE', 7, '24-03-2018 10:15 am', '24-03-2018 10:15 am'),
(15, 1, 'Computer', 9, '23-03-2018 4:57 pm', '23-03-2018 4:57 pm'),
(16, 60, 'SAP', 10, '26-03-2018 3:15 pm', '26-03-2018 3:15 pm'),
(17, 60, 'APA', 10, '26-03-2018 3:15 pm', '26-03-2018 3:15 pm'),
(18, 60, 'BCAC', 15, '26-03-2018 3:15 pm', '26-03-2018 3:15 pm');

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
  `complaints_path` varchar(250) NOT NULL,
  `cd_id` int(11) NOT NULL COMMENT 'id from council decision',
  `modidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discipline`
--

INSERT INTO `discipline` (`id`, `lawyer_id`, `lawyer_code`, `complaints_code`, `complaints_desc`, `is_presidential_reconciliation`, `is_inspection`, `complaints_path`, `cd_id`, `modidate`) VALUES
(16, 51, '', '', 'second sue', 1, 1, ' ', 3, '21-03-2018 2:29 pm'),
(15, 51, '', '', 'second sue', 1, 1, ' ', 3, '21-03-2018 2:29 pm'),
(5, 36, '', '', 'Hello  ggdd', 1, 0, '', 1, '21-03-2018 8:55 am'),
(6, 37, '', '', 'បិរុយ ហដដ', 1, 0, '', 0, '20-03-2018 3:46 pm'),
(7, 38, '', '', 'ក្យក កហដ', 1, 0, '', 0, '20-03-2018 3:48 pm'),
(14, 52, '', '', 'ddd bbb', 1, 1, '', 2, '21-03-2018 2:28 pm'),
(13, 51, '', '', 'gg bbbb', 1, 1, '', 3, '21-03-2018 2:28 pm'),
(17, 52, '', '', 'Second Sue', 1, 0, ' ', 0, '23-03-2018 2:29 am');

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
  `modidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lawyer_code` (`lawyer_code`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`id`, `lawyer_code`, `lawyer_name_en`, `lawyer_name_kh`, `lawyer_dob`, `modidate`) VALUES
(1, '007', 'Koy Ponleu', 'កុយ ពន្លឺ', '18/10/1984', '23-03-2018 4:57 pm'),
(2, '008', 'Ban Yanno', 'បាន យ៉ាន់ណូ', '11/10/1990', '07-03-2018 8:35 am'),
(3, '009', 'Chhuy Yarttak', 'ឈុយ យ៉ាតតាក់', '11/10/1990', '07-03-2018 8:52 am'),
(31, 'JJ111', 'jklsdf', 'JKDLSD', '44/44/4444', '12-03-2018 3:08 am'),
(38, 'jjdd', 'klsdfjkl', 'UEI', '11/11/1111', '12-03-2018 3:33 am'),
(36, 'Y1', 'MONNN', 'MONNN', '11/11/1111', '12-03-2018 3:30 am'),
(37, '333333', 'nnsdfn', 'NNDN', '11/11/1111', '12-03-2018 3:31 am'),
(34, 'PP112233', 'Kan', 'កាន', '11/12/2000', '12-03-2018 3:23 am'),
(60, 'RL001', 'Rithy Ly', 'លី រិទ្ធី', '12/12/1990', '26-03-2018 3:15 pm'),
(58, 'BD1234', 'Born Da', 'បន ដា', '16/81/6898', '24-03-2018 10:15 am'),
(57, 'PIS1234', 'Piseth', 'ពិសិទ្ធ', '12/12/1985', '21-03-2018 4:00 pm'),
(56, 'JJ009', 'Ranger', 'Ranger', '11/11/2223', '23-03-2018 10:21 am'),
(55, '444ff', '1111111', 'TDD', '22/22/2222', '21-03-2018 3:57 pm'),
(54, '3333', '111', 'TEST', '11/11/1111', '21-03-2018 3:56 pm'),
(53, 'PPO001', 'Ravan', 'រាវាន់', '12/12/1992', '21-03-2018 3:47 pm'),
(52, 'SS001', 'Sok Sokha', 'សុខ សុខា', '12/12/1980', '20-03-2018 1:24 pm'),
(51, '143', 'Suon Visal', 'សួន វិសាល', '10/03/1965', '23-03-2018 2:49 am'),
(50, 'LS001', 'Leng Seng', 'លេង សិង', '11/11/1111', '13-03-2018 9:27 am');

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
  `date_of_righteousness` varchar(100) NOT NULL,
  `date_end_of_righteousness` varchar(100) NOT NULL,
  `cert_of_pro_accr_no` varchar(100) NOT NULL,
  `cert_of_pro_accr_date` varchar(100) NOT NULL,
  `date_of_without_righteousness` varchar(100) NOT NULL,
  `date_of_prob_righteousness` varchar(100) NOT NULL,
  `no_prob_righteousness` varchar(100) NOT NULL,
  `date_of_no_prob_righteousness` varchar(100) NOT NULL,
  `fulltime_approval` varchar(100) NOT NULL,
  `date_of_fulltime_approval` varchar(100) NOT NULL,
  `firm_name` varchar(250) NOT NULL,
  `authorisation_number` varchar(100) NOT NULL,
  `permission_number` varchar(100) NOT NULL,
  `firm_validity` varchar(100) NOT NULL,
  `out_bar_validity` varchar(100) NOT NULL,
  `out_bar_no` varchar(100) NOT NULL,
  `out_bar_decision` varchar(100) NOT NULL,
  `no_pro_no` varchar(100) NOT NULL,
  `date_of_no_pro` varchar(100) NOT NULL,
  `out_list_validity` varchar(100) NOT NULL,
  `out_list_reason` text NOT NULL,
  `prohibition_statement` varchar(250) NOT NULL,
  `date_of_prohibition` varchar(100) NOT NULL,
  `prohibition_reason` text NOT NULL,
  `modidate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lawyer_id` (`lawyer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professional_conditions`
--

INSERT INTO `professional_conditions` (`id`, `lawyer_id`, `cert_completion_no`, `date_of_completion`, `date_of_prob`, `is_pursue_study`, `fulltime_no`, `date_of_fulltime`, `date_of_righteousness`, `date_end_of_righteousness`, `cert_of_pro_accr_no`, `cert_of_pro_accr_date`, `date_of_without_righteousness`, `date_of_prob_righteousness`, `no_prob_righteousness`, `date_of_no_prob_righteousness`, `fulltime_approval`, `date_of_fulltime_approval`, `firm_name`, `authorisation_number`, `permission_number`, `firm_validity`, `out_bar_validity`, `out_bar_no`, `out_bar_decision`, `no_pro_no`, `date_of_no_pro`, `out_list_validity`, `out_list_reason`, `prohibition_statement`, `date_of_prohibition`, `prohibition_reason`, `modidate`) VALUES
(1, 50, '', '22/22/2222', '33/33/3333', 0, '', '', '22/33/3333', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '13-03-2018 9:27 am'),
(2, 51, '', '33/44/5566', '22/22/2222', 1, '', '11/11/1333', '99/99/9999', '', '', '', '', '22/22/2222', '', '', '', '', 'ABC', '', '', '', '', '', '', '', '', '', '', 'final', '', '', '23-03-2018 2:49 am'),
(3, 52, '', '18/12/2010', '20/12/2011', 0, '', '', '', '', '', '', '', '', '', '', '', '', 'KN Legal', '1234', '', '', '', '', '', '', '', '', '', 'Approved', '', '', '20-03-2018 1:24 pm'),
(4, 53, '', '11/11/1111', '22/22/2222', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '88/88/8888', '', '9999', '', '', '', '', '000', '', '', '21-03-2018 3:47 pm'),
(5, 54, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '21-03-2018 3:56 pm'),
(6, 55, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '21-03-2018 3:57 pm'),
(7, 56, '', '22/33/4455', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '23-03-2018 10:21 am'),
(8, 57, '', '22/22/2222', '33/33/3333', 1, '', '', '', '', '', '', '', '', '', '', '', '', 'BELL', '333', 'UHA', '77/77/7777', '', '', '', '', '', '', '', '', '', '', '21-03-2018 4:00 pm'),
(9, 58, '', '12/12/3333', '12/11/1233', 0, '', '12/12/1111', '', '', '', '', '', '', '', '', '', '', 'MOT', '', '12', '', '12/12/2019', '', '', '', '', '', '', '', '', '', '24-03-2018 10:15 am'),
(10, 60, '1001', '12/12/1998', '11/10/2009', 1, '1100', '09/08/2006', '12/07/2006', '15/09/2008', '130', '25/10/2009', '', '19/12/2010', '150', '13/10/2010', '160', '29/12/2016', 'Kn Legal ABC', '170', '180', '14/12/2020', '29/10/2019', '170', '12/12/2009', '180', '19/10/2019', '12/12/2010', 'reason', '190', '28/12/2020', 'reason123', '26-03-2018 3:15 pm');

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
