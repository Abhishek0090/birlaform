-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 12:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `birlaform`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `toll_number` int(20) NOT NULL,
  `toll_fax` int(20) NOT NULL,
  `added` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `updated` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `toll_number`, `toll_fax`, `added`, `updated`) VALUES
(1, 2147483647, 0, '2022-09-21 18:04:19.156020', '2022-09-21 18:04:19.156020'),
(16, 2147483647, 0, '2022-09-21 18:38:14.530182', '2022-09-21 18:38:14.530182'),
(17, 2147483647, 0, '2022-09-21 18:40:18.225644', '2022-09-21 18:40:18.225644'),
(18, 2147483647, 0, '2022-09-21 18:41:32.123478', '2022-09-21 18:41:32.123478'),
(19, 2147483647, 0, '2022-09-22 10:53:35.577909', '2022-09-22 10:53:35.577909'),
(20, 2147483647, 0, '2022-09-22 11:03:38.877797', '2022-09-22 11:03:38.877797'),
(21, 0, 4134124, '2022-09-22 11:04:51.504236', '2022-09-22 11:04:51.504236'),
(22, 0, 4134124, '2022-09-22 11:08:57.286925', '2022-09-22 11:08:57.286925'),
(23, 2147483647, 0, '2022-09-22 11:56:16.918385', '2022-09-22 11:56:16.918385'),
(24, 2147483647, 0, '2022-09-22 11:57:57.684590', '2022-09-22 11:57:57.684590'),
(25, 2147483647, 0, '2022-09-22 11:58:16.684853', '2022-09-22 11:58:16.684853'),
(26, 2147483647, 4134124, '2022-09-22 11:59:06.900134', '2022-09-22 11:59:06.900134'),
(27, 2147483647, 4134124, '2022-09-22 12:00:54.671223', '2022-09-22 12:00:54.671223'),
(28, 2147483647, 4134124, '2022-09-22 12:01:09.497464', '2022-09-22 12:01:09.497464'),
(29, 2147483647, 4134124, '2022-09-22 12:02:18.809564', '2022-09-22 12:02:18.809564'),
(30, 2147483647, 4134124, '2022-09-22 12:02:44.809060', '2022-09-22 12:02:44.809060'),
(31, 2147483647, 4134124, '2022-09-22 12:02:45.509055', '2022-09-22 12:02:45.509055'),
(32, 2147483647, 4134124, '2022-09-22 12:02:45.796063', '2022-09-22 12:02:45.796063'),
(33, 2147483647, 4134124, '2022-09-22 12:04:43.427349', '2022-09-22 12:04:43.427349'),
(34, 2147483647, 4134124, '2022-09-22 12:04:59.251308', '2022-09-22 12:04:59.251308'),
(35, 2147483647, 4134124, '2022-09-22 12:09:17.597813', '2022-09-22 12:09:17.597813'),
(36, 2147483647, 4134124, '2022-09-22 12:14:53.926587', '2022-09-22 12:14:53.926587'),
(37, 2147483647, 4134124, '2022-09-22 12:23:54.359977', '2022-09-22 12:23:54.359977'),
(38, 2147483647, 4134124, '2022-09-22 12:26:48.077070', '2022-09-22 12:26:48.077070'),
(39, 2147483647, 4134124, '2022-09-22 12:26:59.287330', '2022-09-22 12:26:59.287330');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctorid` int(212) NOT NULL,
  `name_doctor` varchar(211) NOT NULL,
  `contact_doctor` int(211) NOT NULL,
  `nature_illness` varchar(211) NOT NULL,
  `relevant` varchar(111) NOT NULL,
  `duration` varchar(111) NOT NULL,
  `date_consultation` varchar(111) NOT NULL,
  `past_history` varchar(111) NOT NULL,
  `diagnosis` varchar(111) NOT NULL,
  `icd_code` varchar(111) NOT NULL,
  `line_treatment` varchar(111) NOT NULL,
  `invest_medical` varchar(111) NOT NULL,
  `route_drug` varchar(111) NOT NULL,
  `name_surgery` varchar(111) NOT NULL,
  `icd_pcs` varchar(111) NOT NULL,
  `other_treatment` varchar(111) NOT NULL,
  `injury_occur` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctorid`, `name_doctor`, `contact_doctor`, `nature_illness`, `relevant`, `duration`, `date_consultation`, `past_history`, `diagnosis`, `icd_code`, `line_treatment`, `invest_medical`, `route_drug`, `name_surgery`, `icd_pcs`, `other_treatment`, `injury_occur`) VALUES
(1, 'hecker', 2147483647, 'cold', 'good', '20', '20/09/2001', 'no', 'covid', '7418242921', '23e2', 'not yet', 'NAN', 'no', '7654345678', 'cannot say', 'climate change'),
(2, 'hecker', 2147483647, 'cold', 'good', '20', '20/09/2001', 'no', 'covid', '7418242921', '23e2', 'not yet', 'NAN', 'no', '7654345678', 'cannot say', 'climate change'),
(3, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'Dr.Singh', 2147483647, 'fever', 'nothing', '10', '20/09/2022', 'none', 'flu', '6512515455', '23e2', 'None', 'Inhale route', 'NAN', '8235223323', 'nothing', 'fever'),
(5, 'Dr.Singh', 2147483647, 'fever', 'nothing', '10', '20/09/2022', 'none', 'flu', '6512515455', '23e2', 'None', 'Inhale route', 'NAN', '8235223323', 'nothing', 'fever'),
(6, 'Dr.Singh', 2147483647, 'fever', 'nothing', '10', '20/09/2022', 'none', 'flu', '6512515455', '23e2', 'None', 'Inhale route', 'NAN', '8235223323', 'nothing', 'fever'),
(7, 'Dr.Singh', 2147483647, 'fever', 'nothing', '10', '20/09/2022', 'none', 'flu', '6512515455', '23e2', 'None', 'Inhale route', 'NAN', '8235223323', 'nothing', 'fever'),
(8, 'Dr.Singh', 2147483647, 'fever', 'nothing', '10', '20/09/2022', 'none', 'flu', '6512515455', '23e2', 'None', 'Inhale route', 'NAN', '8235223323', 'nothing', 'fever'),
(9, 'Dr.Singh', 2147483647, 'fever', 'nothing', '10', '20/09/2022', 'none', 'flu', '6512515455', '23e2', 'None', 'Inhale route', 'NAN', '8235223323', 'nothing', 'fever'),
(10, 'Dr.Singh', 2147483647, 'fever', 'nothing', '10', '20/09/2022', 'none', 'flu', '6512515455', '23e2', 'None', 'Inhale route', 'NAN', '8235223323', 'nothing', 'fever'),
(11, 'Dr.Singh', 2147483647, 'fever', 'nothing', '10', '20/09/2022', 'none', 'flu', '6512515455', '23e2', 'None', 'Inhale route', 'NAN', '8235223323', 'nothing', 'fever'),
(12, 'Dr.Singh', 2147483647, 'fever', 'nothing', '10', '20/09/2022', 'none', 'flu', '6512515455', '23e2', 'None', 'Inhale route', 'NAN', '8235223323', 'nothing', 'fever'),
(13, 'Dr.Singh', 2147483647, 'fever', 'nothing', '10', '20/09/2022', 'none', 'flu', '6512515455', '23e2', 'None', 'Inhale route', 'NAN', '8235223323', 'nothing', 'fever'),
(14, 'Dr.Singh', 2147483647, 'fever', 'nothing', '10', '20/09/2022', 'none', 'flu', '6512515455', '23e2', 'None', 'Inhale route', 'NAN', '8235223323', 'nothing', 'fever'),
(15, 'Dr.Singh', 2147483647, 'fever', 'nothing', '10', '20/09/2022', 'none', 'flu', '6512515455', '23e2', 'None', 'Inhale route', 'NAN', '8235223323', 'nothing', 'fever'),
(16, 'Dr.Singh', 2147483647, 'fever', 'nothing', '10', '20/09/2022', 'none', 'flu', '6512515455', '23e2', 'None', 'Inhale route', 'NAN', '8235223323', 'nothing', 'fever'),
(17, 'Dr.Singh', 2147483647, 'fever', 'nothing', '10', '20/09/2022', 'none', 'flu', '6512515455', '23e2', 'None', 'Inhale route', 'NAN', '8235223323', 'nothing', 'fever'),
(18, 'Dr.Singh', 2147483647, 'fever', 'nothing', '10', '20/09/2022', 'none', 'flu', '6512515455', '23e2', 'None', 'Inhale route', 'NAN', '8235223323', 'nothing', 'fever'),
(46, 'urdoctor', 2147483647, 'nothing', 'normal', '12', '20/09/2022', 'none', 'none', '32323232', 'nothing', 'yess', 'route', 'no', '7654345678', 'cannot say', 'climate change');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `employeeid` int(121) NOT NULL,
  `name_patient` varchar(212) NOT NULL,
  `gender` varchar(121) NOT NULL,
  `age` varchar(121) NOT NULL,
  `dob` varchar(121) NOT NULL,
  `contact_patient` int(121) NOT NULL,
  `contact_relative` int(121) NOT NULL,
  `insured_number` int(212) NOT NULL,
  `policy_number` varchar(212) NOT NULL,
  `mediclaim` varchar(121) NOT NULL,
  `company_name` varchar(211) NOT NULL,
  `physician` varchar(211) NOT NULL,
  `name_physician` varchar(121) NOT NULL,
  `contact_physician` int(121) NOT NULL,
  `added` date NOT NULL DEFAULT current_timestamp(),
  `updated` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`employeeid`, `name_patient`, `gender`, `age`, `dob`, `contact_patient`, `contact_relative`, `insured_number`, `policy_number`, `mediclaim`, `company_name`, `physician`, `name_physician`, `contact_physician`, `added`, `updated`) VALUES
(21, 'abhi', 'Male', '22', '972001', 786546233, 2147483647, 12112, '23365', 'Yes', 'tata', 'Yes', 'dr.gada', 2147483647, '2022-09-22', '2022-09-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctorid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`employeeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctorid` int(212) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `employeeid` int(121) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
