-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2014 at 10:42 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student_information_index`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE IF NOT EXISTS `admin_panel` (
  `admin_id` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`admin_id`, `admin_password`) VALUES
('sumi', 'sumi11');

-- --------------------------------------------------------

--
-- Table structure for table `contest_info`
--

CREATE TABLE IF NOT EXISTS `contest_info` (
`contest_id` int(2) NOT NULL,
  `contest_name` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `contest_info`
--

INSERT INTO `contest_info` (`contest_id`, `contest_name`) VALUES
(2, 'ACM ICPC 2014'),
(3, 'IIUC contest 2014'),
(4, 'Inter University Programming Contest 2013'),
(5, 'CSE fest Contest 14'),
(6, 'Training Camp contest 2014'),
(7, 'Uva Organized contest 2014'),
(8, 'AIUB Contest 2014'),
(9, 'BIBUT contest 2014 ss'),
(10, 'Port City University 2014 ee'),
(11, 'llahxhgshd'),
(12, 'gfghghgfhg'),
(13, 'gfhg'),
(14, 'hgsfg');

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE IF NOT EXISTS `course_info` (
  `course_id` varchar(10) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `credit_hour` float NOT NULL,
  `serial_level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_info`
--

INSERT INTO `course_info` (`course_id`, `course_name`, `credit_hour`, `serial_level`) VALUES
('Chem 121', 'General Chemistry', 3, 2),
('CSE-143', 'Object Oriented Programming', 3, 2),
('CSE-221', 'Digital Logic Design', 3, 3),
('CSE-321', 'Computer Architectureee', 3, 8),
('CSE-323', 'Applied Stastics & Queuing Theory', 3, 5),
('CSE-331', 'Theory of Computing', 3, 5),
('CSE-333', 'Microprocessor and Assembly Language programming ss', 3, 5),
('CSE-334', 'Microprocessor and Assembly Language Programming (sessional)', 1.5, 5),
('CSE-336', 'Operating System(sessional)', 1.5, 8),
('CSE-341', 'Numerical Analysis', 2, 5),
('CSE-342', 'Numerical Analysis (sessional)', 1.5, 5),
('CSE-343', 'Arithmetic Logical Circuit Design', 3, 5),
('CSE-345', 'Artificial Intelligence', 3, 8),
('CSE-351', 'Database Management System', 3, 5),
('CSE-352', 'Database Management System(sessional)', 1.5, 5),
('CSE-354', 'System Analysis and Design(sessional)', 0.75, 8),
('CSE-363', 'Operating System(sessional)', 1.5, 8),
('CSE-411', 'Computer Networking', 3, 6),
('CSE-431', 'Compiler Design', 3, 6),
('CSE-437', 'Computer Peripherals and Interface', 3, 6),
('CSE-441', 'Computer Networking', 3, 6),
('CSE-487', 'Comunication Engineering', 3, 6),
('EEE-121', 'Electrical Circuits-II', 3, 2),
('EEE-122', 'Electrical Circuits-II(sessional)', 1.5, 2),
('EEE-123', 'Computing Method and Techniques for Engineering Analysis', 3, 2),
('EEE-124', 'Computing Method and Techniques for Engineering Analysis(sessional)', 1.5, 2),
('EEE-241', 'Electromagnetic Field', 3, 4),
('EEE-243', 'Electrical Machines-II', 3, 4),
('EEE-244', 'Electrical Machines-II(sesional)', 1.5, 4),
('Math-125', 'Vectors Analysis,complex variables and Linear Algebra', 3, 2),
('ME-323', 'Numerical ', 3, 8),
('ME-337', 'Mechanical Physics', 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `district_info`
--

CREATE TABLE IF NOT EXISTS `district_info` (
`district_id` int(2) NOT NULL,
  `district_name` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `district_info`
--

INSERT INTO `district_info` (`district_id`, `district_name`) VALUES
(1, 'BARGUNA'),
(2, 'BARISAL'),
(3, 'BHOLA'),
(4, 'JHALOKATIe'),
(5, 'PATUAKHALI'),
(6, 'PIROJPUR'),
(7, 'BANDARBAN'),
(8, 'BRAHMANBARIA'),
(9, 'CHANDPUR'),
(10, 'CHITTAGONG'),
(11, 'COMILLA'),
(12, 'FENI'),
(13, 'KHAGRACHHARI'),
(14, 'LAKSHMIPUR'),
(15, 'NOAKHALI'),
(16, 'RANGAMATI'),
(17, 'DHAKA'),
(18, 'FARIDPUR'),
(19, 'GAZIPUR'),
(20, 'GOPALGANJ'),
(21, 'JAMALPUR'),
(22, 'KISHOREGONJ'),
(23, 'MADARIPUR'),
(24, 'MANIKGANJ'),
(25, 'MUNSHIGANJ'),
(26, 'MYMENSINGH'),
(27, 'NARAYANGANJ'),
(28, 'NARSINGDI'),
(29, 'NETRAKONA'),
(30, 'RAJBARI'),
(31, 'SHARIATPUR'),
(32, 'SHERPUR'),
(33, 'TANGAIL'),
(34, 'BAGERHAT'),
(35, 'CHUADANGA'),
(36, 'JESSORE'),
(37, 'JHENAIDAH'),
(38, 'KHULNA'),
(39, 'KUSHTIA'),
(40, 'MAGURA'),
(41, 'MEHERPUR'),
(42, 'NARAIL'),
(43, 'SATKHIRA'),
(44, 'BOGRA'),
(45, 'CHAPAINABABGANJ'),
(46, 'JOYPURHAT'),
(47, 'PABNA'),
(48, 'NAOGAON'),
(49, 'NATORE'),
(50, 'RAJSHAHI'),
(51, 'SIRAJGANJ'),
(52, 'DINAJPUR'),
(53, 'GAIBANDHA'),
(54, 'KURIGRAM'),
(55, 'LALMONIRHAT'),
(56, 'NILPHAMARI'),
(57, 'nnnnnnnn'),
(58, 'vvvvv'),
(59, 'Mirpur'),
(60, 'ZZZ'),
(61, 'wwww'),
(62, 'ggg');

-- --------------------------------------------------------

--
-- Table structure for table `game_info`
--

CREATE TABLE IF NOT EXISTS `game_info` (
`game_id` int(2) NOT NULL,
  `game_name` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `game_info`
--

INSERT INTO `game_info` (`game_id`, `game_name`) VALUES
(1, 'Temple Run2'),
(2, 'CandyCrush'),
(3, 'Fifa14'),
(4, 'Shoot Bubble Deluxe'),
(5, 'Criminal Case'),
(6, 'Big Boss22'),
(7, 'Plant VS Zombi'),
(8, 'VU VU LA');

-- --------------------------------------------------------

--
-- Table structure for table `grading_system`
--

CREATE TABLE IF NOT EXISTS `grading_system` (
  `gpa` float NOT NULL,
  `grade` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grading_system`
--

INSERT INTO `grading_system` (`gpa`, `grade`) VALUES
(0, 'F'),
(2, 'D'),
(2.25, 'C'),
(2.5, 'C+'),
(2.75, 'B-'),
(3, 'B'),
(3.25, 'B+'),
(3.5, 'A-'),
(3.75, 'A'),
(4, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `hall_info`
--

CREATE TABLE IF NOT EXISTS `hall_info` (
`hall_id` int(2) NOT NULL,
  `hall_name` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `hall_info`
--

INSERT INTO `hall_info` (`hall_id`, `hall_name`) VALUES
(1, 'Sufia Kamal Hall'),
(2, 'Bango Bandhu Hall'),
(4, 'Shah Hall'),
(5, 'Shohidullah Hall'),
(6, 'Dr. Qudrat-A-Khuda Hall'),
(7, 'TarequeHuda Hall'),
(10, 'sufia kamal'),
(12, 'sssssh'),
(13, 'aaaaa    '),
(14, 'summmmnnnnnn'),
(15, 'bbbbb'),
(16, 'banolata hall'),
(17, 'Pritilota Hall');

-- --------------------------------------------------------

--
-- Table structure for table `level_term_info`
--

CREATE TABLE IF NOT EXISTS `level_term_info` (
`serial_level` int(2) NOT NULL,
  `level` int(1) NOT NULL,
  `term` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `level_term_info`
--

INSERT INTO `level_term_info` (`serial_level`, `level`, `term`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 2),
(5, 3, 1),
(6, 4, 1),
(7, 4, 2),
(8, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `students_contest`
--

CREATE TABLE IF NOT EXISTS `students_contest` (
`serial_contest` int(5) NOT NULL,
  `student_id` int(7) NOT NULL,
  `contest_id` int(10) NOT NULL,
  `position` int(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `students_contest`
--

INSERT INTO `students_contest` (`serial_contest`, `student_id`, `contest_id`, `position`) VALUES
(3, 1104015, 3, 1),
(4, 1104015, 6, 1),
(5, 1104015, 5, 1),
(6, 1104012, 5, 2),
(7, 1004003, 4, 3),
(8, 1104001, 7, 1),
(9, 1104001, 8, 1),
(10, 1104001, 9, 1),
(11, 1004005, 9, 2),
(12, 1104007, 9, 3),
(13, 1104013, 8, 2),
(14, 1104012, 8, 3),
(16, 1104070, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `students_game`
--

CREATE TABLE IF NOT EXISTS `students_game` (
  `student_id` int(7) NOT NULL,
  `game_id` int(2) NOT NULL,
  `position` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_game`
--

INSERT INTO `students_game` (`student_id`, `game_id`, `position`) VALUES
(1101002, 1, 2),
(1101002, 4, 44),
(1104001, 1, 1),
(1104001, 2, 1),
(1104001, 3, 1),
(1104003, 2, 2),
(1104007, 2, 3),
(1104015, 3, 1),
(1104015, 5, 1),
(1104015, 6, 2),
(1104016, 3, 2),
(1104070, 5, 3),
(1104081, 4, 1),
(1104081, 6, 2),
(1104115, 3, 3),
(1104115, 4, 1),
(1104117, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `students_hall`
--

CREATE TABLE IF NOT EXISTS `students_hall` (
  `student_id` int(7) NOT NULL,
  `hall_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_hall`
--

INSERT INTO `students_hall` (`student_id`, `hall_id`) VALUES
(1104001, 1),
(1104003, 1),
(1104081, 1),
(1104114, 1),
(1104115, 1),
(1103052, 2),
(1104010, 2),
(1104044, 2),
(1104078, 2),
(1104091, 2),
(1104092, 2),
(1004003, 5),
(1104008, 5),
(1104020, 5),
(1006020, 6),
(1104002, 7),
(1104060, 7),
(1302004, 7);

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE IF NOT EXISTS `student_course` (
  `student_id` int(7) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `gpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`student_id`, `course_id`, `gpa`) VALUES
(1104003, 'CSE-333', 0),
(1104003, 'CSE-342', 0),
(1104004, 'CSE-331', 0),
(1104015, 'CSE-351', 0),
(1104114, 'CSE-342', 0),
(1104114, 'CSE-351', 0),
(1104003, 'CSE-331', 2),
(1104011, 'CSE-351', 2),
(1104019, 'CSE-351', 2.5),
(1104002, 'CSE-323', 2.75),
(1104003, 'CSE-334', 2.75),
(1104023, 'CSE-351', 2.75),
(1006003, 'EEE-124', 3),
(1104002, 'CSE-321', 3),
(1104004, 'CSE-351', 3),
(1104020, 'CSE-351', 3),
(1104058, 'CSE-343', 3),
(1104058, 'CSE-351', 3),
(1203005, 'EEE-241', 3),
(1104001, 'CSE-323', 3.25),
(1104001, 'CSE-342', 3.25),
(1104001, 'CSE-343', 3.25),
(1104002, 'CSE-331', 3.25),
(1104002, 'CSE-341', 3.25),
(1104002, 'CSE-351', 3.25),
(1104004, 'CSE-341', 3.25),
(1104004, 'CSE-342', 3.25),
(1104007, 'CSE-351', 3.25),
(1104009, 'CSE-351', 3.25),
(1104015, 'CSE-323', 3.25),
(1104015, 'CSE-334', 3.25),
(1103052, 'EEE-124', 3.5),
(1104001, 'CSE-143', 3.5),
(1104001, 'CSE-331', 3.5),
(1104001, 'CSE-351', 3.5),
(1104002, 'CSE-334', 3.5),
(1104004, 'CSE-333', 3.5),
(1104004, 'CSE-334', 3.5),
(1104008, 'CSE-351', 3.5),
(1104015, 'CSE-333', 3.5),
(1104016, 'CSE-351', 3.5),
(1104021, 'CSE-351', 3.5),
(1104022, 'CSE-351', 3.5),
(1104058, 'CSE-341', 3.5),
(1104116, 'CSE-143', 3.5),
(1106023, 'EEE-244', 3.5),
(1104001, 'CSE-333', 3.75),
(1104001, 'CSE-352', 3.75),
(1104002, 'CSE-333', 3.75),
(1104002, 'CSE-343', 3.75),
(1104003, 'CSE-351', 3.75),
(1104003, 'CSE-352', 3.75),
(1104004, 'CSE-323', 3.75),
(1104004, 'CSE-352', 3.75),
(1104010, 'CSE-351', 3.75),
(1104014, 'CSE-351', 3.75),
(1104015, 'CSE-331', 3.75),
(1104015, 'CSE-342', 3.75),
(1104018, 'CSE-351', 3.75),
(1104119, 'CSE-351', 3.75),
(1104001, 'CSE-334', 4),
(1104001, 'CSE-341', 4),
(1104002, 'CSE-352', 4),
(1104006, 'CSE-351', 4),
(1104012, 'CSE-351', 4),
(1104013, 'CSE-351', 4),
(1104015, 'CSE-341', 4),
(1104015, 'CSE-352', 4),
(1106023, 'EEE-243', 4);

-- --------------------------------------------------------

--
-- Table structure for table `student_personal_info`
--

CREATE TABLE IF NOT EXISTS `student_personal_info` (
  `student_id` int(7) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `birth_year` int(4) NOT NULL,
  `district_id` int(2) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_personal_info`
--

INSERT INTO `student_personal_info` (`student_id`, `student_name`, `birth_year`, `district_id`, `contact`, `email_address`) VALUES
(1004003, 'Miskat Ul Islam', 1993, 2, '1733994400', 'miska@yahoo.com'),
(1004005, 'MIna Aktar', 1990, 14, '19345050070', 'mina@yahoo.com'),
(1006003, 'Zerin Mohona', 1993, 36, '192838902', '455mohona@yahoo.com'),
(1006020, 'Yousif Khan', 1990, 6, '173922403', 'yousuf44@yahoo.com'),
(1101001, 'Kibria Huda ', 1994, 10, '1554379990', 'kibhuda@yahoo.com'),
(1101002, 'Lubna Hasin', 1993, 31, '1829992993', 'kjjssjhj@gmail.com'),
(1102014, 'Sumon Aslam', 1994, 11, '1734020302', 'sumon4@yahoo.com'),
(1103005, 'Tipu Sultan', 1993, 12, '192933005', 'siltanahmed@hotmail.com'),
(1103052, 'Maliha Sultana', 1994, 53, '04029002', 'malihaa..@gamil.com'),
(1104001, 'Arifa', 1994, 3, '19235678343', 'arifasultana@gmail.com'),
(1104002, 'Mohammad Robaiul Islamm', 1993, 16, '1712345678', 'robiulislam@gmail.com'),
(1104003, 'Arifa Tasnim', 1993, 12, '01930202020', 'tasnim@yahoo.com'),
(1104004, 'Tanzin Ara', 1993, 10, '1934040055', 'tanzin@gmail.com'),
(1104006, 'Jobyer Shekh', 1993, 12, '1723461223', 'joyber@gmail.com'),
(1104007, 'Miftahul Jannat', 1992, 17, '01823040000', 'mifta@yahoo.com'),
(1104008, 'Abdullah-Al-Noman', 1994, 43, '01832923000', 'noman@gmail.com'),
(1104009, 'Md Mynul Hassan', 1990, 18, '01923485969', 'hasan@gmail.com'),
(1104010, 'Jahidul Momin', 1990, 18, '01738596095', 'jahidul@yahoo.com'),
(1104011, 'A B M Touhidul Islam', 1993, 46, '01533040330', 'abm@gmail.com'),
(1104012, 'Md Shakruf Anam', 1992, 15, '01723456780', 'anam@gmail.com'),
(1104013, 'Md Ashraf Uddin Russo', 1994, 15, '01834567078', 'russo@yahoo.com'),
(1104014, 'Jinat-Ul-Ferdos', 1993, 4, '01756356069', 'jinatul@gmail.com'),
(1104015, 'Shahnewaz Ahmed', 1992, 18, '01923410394', 'ahmed@gmail.com'),
(1104016, 'Nurul Alam Pabel', 1994, 17, '01554567233', 'pabel@yahoo.com'),
(1104018, 'Md Muktadir', 1992, 3, '1723451230', 'muktarid@gmail.com'),
(1104019, 'Ishtiaq Ahmed', 1992, 3, '01923446700', 'ishtiaq@hotmail.com'),
(1104020, 'Saiba Nazha', 1992, 2, '01635728992', 'saiba@gmail.com'),
(1104021, 'Towhida Parvin', 1992, 18, '01738490002', 'tinni@gmail.com'),
(1104022, 'Ariful Islam', 1992, 40, '01824740990', 'arif@gmail.com'),
(1104023, 'A B M Shohel Rahman', 1992, 38, '01596070034', 'shohel@yahoo.com'),
(1104032, 'Jesmin Aktar', 1992, 10, '162039396', 'jesmin@yahoo.com'),
(1104033, 'Sumaia Bristy', 1993, 9, '193912023', 'bristy45@gmail.com'),
(1104044, 'Aminul Islam', 1992, 38, '19283849555', 'aminul@yahoo.com'),
(1104047, 'Kamal', 1990, 35, '1829045005', 'kamal@yahoo.com'),
(1104052, 'Auntika Ray', 1993, 17, '1734904576', 'auntika234@gmail.com'),
(1104058, 'Shym Mahmud Riha', 1992, 13, '172738299', 'mahmud@yahoo.com'),
(1104060, 'Naima Sultana', 1993, 17, '1825374889', 'naima@gmail.com'),
(1104070, 'Chondrima Chy', 1992, 10, '1923123455', 'chondrima@yahoo.com'),
(1104078, 'Mahtabul Alam', 1992, 6, '01923993999', 'shohan@yahoo.co '),
(1104081, 'Maliha Momtaz Islam', 1993, 17, '1092384999', 'maliha@gmail.com'),
(1104083, 'Nazmul Islam', 1993, 38, '1092384999', 'nazmul@gmail.com'),
(1104091, 'Nishat Hasan', 1992, 36, '18293939333', 'nishat@gmail.com'),
(1104092, 'Shakibur Rahman', 1992, 10, '1929393332', 'shakib@yahoo.com'),
(1104094, 'Shaborni Sen Gupta', 1993, 12, '192939333', 'tropa@gmail.com'),
(1104114, 'Achira Das', 1992, 16, '1756356069', 'achira@gmail.com'),
(1104115, 'Sumi Khatun', 1994, 38, '1948914060', 'sumicuet11@gmail.com'),
(1104116, 'Mukta Ghosh', 1993, 10, '17254047894', 'mukta@gmail.com'),
(1104117, 'Aysha Khatun', 1992, 17, '1673849505', 'sujana@gmail.com'),
(1104119, 'Abdul Kayum', 1992, 9, '1823609368', 'kayum@gmail.com'),
(1106023, 'Hasem Mahmud', 1992, 10, '01837392000', 'hasem7488@yahoo.com'),
(1107003, 'Jerin Khan', 1992, 17, '0374892993', 'jerin@gmail.com'),
(1107023, 'Mila Nasrin', 1992, 17, '01829930030', 'abssvcjh@gmail.com'),
(1203005, 'Rubayet  Islam', 1993, 39, '01829390049', 'islam@yahoo.com'),
(1203050, 'Keya Parvin', 1993, 30, '01929300022', 'keyaparvin34@gmail.com'),
(1205006, 'Sumaya Islam Sumi', 1994, 18, '01929833033', 'sumi@hotmail.com'),
(1302004, 'Miskal Ul Islam', 1995, 2, '1923344000', 'Miskal.33.@gmai.com'),
(1303040, 'Sadia Afrin Keya', 1992, 7, '177384802', 'keyapp@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contest_info`
--
ALTER TABLE `contest_info`
 ADD PRIMARY KEY (`contest_id`);

--
-- Indexes for table `course_info`
--
ALTER TABLE `course_info`
 ADD PRIMARY KEY (`course_id`), ADD KEY `serial_level` (`serial_level`);

--
-- Indexes for table `district_info`
--
ALTER TABLE `district_info`
 ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `game_info`
--
ALTER TABLE `game_info`
 ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `grading_system`
--
ALTER TABLE `grading_system`
 ADD PRIMARY KEY (`gpa`);

--
-- Indexes for table `hall_info`
--
ALTER TABLE `hall_info`
 ADD PRIMARY KEY (`hall_id`);

--
-- Indexes for table `level_term_info`
--
ALTER TABLE `level_term_info`
 ADD PRIMARY KEY (`serial_level`);

--
-- Indexes for table `students_contest`
--
ALTER TABLE `students_contest`
 ADD PRIMARY KEY (`serial_contest`), ADD KEY `student_id` (`student_id`), ADD KEY `contest_id` (`contest_id`);

--
-- Indexes for table `students_game`
--
ALTER TABLE `students_game`
 ADD PRIMARY KEY (`student_id`,`game_id`), ADD KEY `game_id` (`game_id`);

--
-- Indexes for table `students_hall`
--
ALTER TABLE `students_hall`
 ADD PRIMARY KEY (`student_id`), ADD KEY `hall_id` (`hall_id`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
 ADD PRIMARY KEY (`student_id`,`course_id`), ADD KEY `gpa` (`gpa`), ADD KEY `course_id` (`course_id`), ADD KEY `gpa_2` (`gpa`);

--
-- Indexes for table `student_personal_info`
--
ALTER TABLE `student_personal_info`
 ADD PRIMARY KEY (`student_id`), ADD KEY `district_id` (`district_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contest_info`
--
ALTER TABLE `contest_info`
MODIFY `contest_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `district_info`
--
ALTER TABLE `district_info`
MODIFY `district_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `game_info`
--
ALTER TABLE `game_info`
MODIFY `game_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hall_info`
--
ALTER TABLE `hall_info`
MODIFY `hall_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `level_term_info`
--
ALTER TABLE `level_term_info`
MODIFY `serial_level` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `students_contest`
--
ALTER TABLE `students_contest`
MODIFY `serial_contest` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_info`
--
ALTER TABLE `course_info`
ADD CONSTRAINT `course_info_ibfk_1` FOREIGN KEY (`serial_level`) REFERENCES `level_term_info` (`serial_level`);

--
-- Constraints for table `students_contest`
--
ALTER TABLE `students_contest`
ADD CONSTRAINT `students_contest_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_personal_info` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `students_contest_ibfk_3` FOREIGN KEY (`contest_id`) REFERENCES `contest_info` (`contest_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students_game`
--
ALTER TABLE `students_game`
ADD CONSTRAINT `students_game_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_personal_info` (`student_id`),
ADD CONSTRAINT `students_game_ibfk_2` FOREIGN KEY (`game_id`) REFERENCES `game_info` (`game_id`);

--
-- Constraints for table `students_hall`
--
ALTER TABLE `students_hall`
ADD CONSTRAINT `students_hall_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_personal_info` (`student_id`),
ADD CONSTRAINT `students_hall_ibfk_2` FOREIGN KEY (`hall_id`) REFERENCES `hall_info` (`hall_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_course`
--
ALTER TABLE `student_course`
ADD CONSTRAINT `student_course_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_personal_info` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `student_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course_info` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_personal_info`
--
ALTER TABLE `student_personal_info`
ADD CONSTRAINT `student_personal_info_ibfk_1` FOREIGN KEY (`district_id`) REFERENCES `district_info` (`district_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
