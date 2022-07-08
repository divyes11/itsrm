-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 02:13 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itsrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `ID` int(11) NOT NULL,
  `course` varchar(150) NOT NULL,
  `cname` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`ID`, `course`, `cname`) VALUES
(1, 'MCA', 'Computer Science Department'),
(2, 'PGDCA', 'Post Graduate of Diploma Computer Application'),
(3, 'PGDAVTP', 'દ્રશ્ય-શ્રાવ્ય કાર્યક્રમ (ટેલીવિઝન) નિર્માણ અનુસ્નાતક'),
(4, 'PGDCHN', 'અનુસ્નાતક ડિપ્લોમા ઇન કમ્પ્યૂટર હાર્ડવેર એન્ડ નેટવર્કિંગ'),
(5, 'PGDY', ' યોગવિદ્યા અનુસ્નાતક ડિપ્લોમા'),
(6, 'PGDHT', 'હિન્દી અનુવાદ અનુસ્નાતક ડિપ્લોમા'),
(7, 'PGDH', 'પ્રયોજનમૂલક હિન્દી ડિપ્લોમા'),
(8, 'MA(GUJARATI)', 'ગુજરાતી અનુસ્નાતક'),
(9, 'MA(HINDI)', 'હિન્દી અનુસ્નાતક'),
(10, 'MA(SOCIAL)', 'સમાજશાસ્ત્ર અનુસ્નાતક '),
(11, 'MA(ECONOMY)', 'અર્થશાસ્ત્ર અનુસ્નાતક'),
(12, 'MA(HISTORY)', 'ઈતિહાસ અનુસ્નાતક'),
(13, 'MA(JOURNALISM)', 'પત્રકારત્વ અને સમૂહપ્રત્યાયન અનુસ્નાતક'),
(14, 'M.sc(Microbiology)', 'સૂક્ષ્મજીવાણુવિજ્ઞાન અનુસ્નાતક'),
(15, 'M.sc(Environmental Sciences & Technology)', 'એન્વાયરમેન્ટલ સાયન્સિસ & ટેકનોલોજી અનુસ્નાતક'),
(16, 'MA(HRD)', 'માનવ સંશાધન વિકાસ અનુસ્નાતક'),
(17, 'MSW', 'સમાજકાર્ય અનુસ્નાતક'),
(18, 'BA(Sociology)', 'સમાજશાસ્ત્ર સ્નાતક'),
(19, 'BA(Economics)', 'અર્થશાસ્ત્ર સ્નાતક'),
(20, 'MBA(Rural Management)', 'ગ્રામીણ વ્યવસ્થાપન અનુસ્નાતક'),
(21, 'Ph.D.(Rural Management)', 'પીએચ.ડી. (ગ્રામીણ વ્યવસ્થાપન)'),
(22, 'BRS', 'Bachelor of Rural Studies');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
