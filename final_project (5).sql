-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2017 at 06:27 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `profession` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `contact` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `name`, `fname`, `mname`, `dob`, `profession`, `start`, `end`, `contact`, `image`) VALUES
(396112072, 'shubham mahidhar', 'kishor mahidhar', 'chanda mahidhar', '2016-03-20', 'ca', '2016-03-02', '2016-03-11', 9890409228, 'Alumni/shubham mahidhar2016-03-20.jpg'),
(118033964, 'akshay kumar', 'manoj tiwary', 'anushka sharma', '2016-04-03', 'gand marna', '2016-03-01', '2016-03-10', 420, 'Alumni/akshay kumar2016-04-03.png'),
(277152057, 'st', 'as', 'as', '2016-03-04', 's', '2016-03-01', '2016-03-03', 123, 'Alumni/st2016-03-04.jpg'),
(249645839, 'shubham mahidhar', 'kishor mahidhar', 'chanda mahidhar', '2016-04-07', 'IT Engineer', '2016-04-07', '2016-04-17', 123654789, 'Alumni/shubham mahidhar2016-04-07.jpg'),
(60693886, 'shubham mahidhar', 'kishor mahidhar', 'chanda mahidhar', '2016-04-07', 'IT Engineer', '2016-04-07', '2016-04-17', 123654789, 'Alumni/shubham mahidhar2016-04-07.jpg'),
(202592435, 'shubham mahidhar', 'kishor mahidhar', 'chanda mahidhar', '2016-04-07', 'IT Engineer', '2016-04-07', '2016-04-17', 123654789, 'Alumni/shubham mahidhar2016-04-07.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `reply` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `given_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `name`, `topic`, `msg`, `reply`, `status`, `given_by`) VALUES
(277965480, 'karan', 'Food', '				food is not good				', '								\r\n								please be specific ', 'cleared', 'admin'),
(179716472, 'shubham', 'Infrastructure', '				rooms are not getting cleaned properly				', '								\r\n			okay we are working on it hope you will see results soon!!!!					', 'cleared', 'admin'),
(373123481, 'karan', 'Food', '				food is not good				', '', 'pending', ''),
(373123481, 'karan', 'Infrastructure', '				washroom not working				', '', 'pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `in_house_academic`
--

CREATE TABLE IF NOT EXISTS `in_house_academic` (
  `id` int(11) NOT NULL,
  `ssc_year` date NOT NULL,
  `xi_year` date NOT NULL,
  `hsc_year` date NOT NULL,
  `fy_year` date NOT NULL,
  `sy_year` date NOT NULL,
  `ty_year` date NOT NULL,
  `ssc_attempt` int(11) NOT NULL,
  `xi_attempt` int(11) NOT NULL,
  `hsc_attempt` int(11) NOT NULL,
  `fy_attempt` int(11) NOT NULL,
  `sy_attempt` int(11) NOT NULL,
  `ty_attempt` int(11) NOT NULL,
  `ssc_uni` varchar(255) NOT NULL,
  `xi_uni` varchar(255) NOT NULL,
  `hsc_uni` varchar(255) NOT NULL,
  `fy_uni` varchar(255) NOT NULL,
  `sy_uni` varchar(255) NOT NULL,
  `ty_uni` varchar(255) NOT NULL,
  `ssc_per` float NOT NULL,
  `xi_per` float NOT NULL,
  `hsc_per` float NOT NULL,
  `fy_per` float NOT NULL,
  `sy_per` float NOT NULL,
  `ty_per` float NOT NULL,
  `cpt_year` date NOT NULL,
  `cpt_attempt` int(11) NOT NULL,
  `cpt_uni` varchar(255) NOT NULL,
  `cpt_per` float NOT NULL,
  `ipcc_year` date NOT NULL,
  `ipcc_attempt` int(11) NOT NULL,
  `ipcc_uni` varchar(255) NOT NULL,
  `ipcc_per` float NOT NULL,
  `last_exam` varchar(255) NOT NULL,
  `center` varchar(255) NOT NULL,
  `run_class` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gadd` varchar(255) NOT NULL,
  `gcontact` bigint(20) NOT NULL,
  `hostel` varchar(255) NOT NULL,
  `last_school` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `in_house_academic`
--

INSERT INTO `in_house_academic` (`id`, `ssc_year`, `xi_year`, `hsc_year`, `fy_year`, `sy_year`, `ty_year`, `ssc_attempt`, `xi_attempt`, `hsc_attempt`, `fy_attempt`, `sy_attempt`, `ty_attempt`, `ssc_uni`, `xi_uni`, `hsc_uni`, `fy_uni`, `sy_uni`, `ty_uni`, `ssc_per`, `xi_per`, `hsc_per`, `fy_per`, `sy_per`, `ty_per`, `cpt_year`, `cpt_attempt`, `cpt_uni`, `cpt_per`, `ipcc_year`, `ipcc_attempt`, `ipcc_uni`, `ipcc_per`, `last_exam`, `center`, `run_class`, `address`, `gadd`, `gcontact`, `hostel`, `last_school`, `stream`) VALUES
(216808570, '2016-03-10', '2016-03-12', '2016-03-10', '2016-03-26', '2016-03-17', '2016-03-04', 0, 0, 0, 0, 0, 0, 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 1, 1, 1, 1, 4, 4, '2016-03-17', 0, 'Mumbai University', 4, '2016-03-11', 0, 'Mumbai University', 4, 'HSC', 'vv', 'FY', '', 'as', 1234, '', 'cc', 'Engineering'),
(216808570, '2016-03-10', '2016-03-12', '2016-03-10', '2016-03-26', '2016-03-17', '2016-03-04', 0, 0, 0, 0, 0, 0, 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 1, 1, 1, 1, 4, 4, '2016-03-17', 0, 'Mumbai University', 4, '2016-03-11', 0, 'Mumbai University', 4, 'HSC', 'vv', 'FY', 'as', 'as', 1234, 'sx', 'cc', 'Engineering'),
(216808570, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 0, 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 0, 0, 0, 0, 0, 0, '0000-00-00', 0, 'Mumbai University', 0, '0000-00-00', 0, 'Mumbai University', 0, 'HSC', '', 'HSC', '169, Lohana Vidhyarthi Bhavan', 'NM Parekh Marg, Opp. VJTI bus stop', 0, '', '', 'Engineering'),
(151734713, '2016-03-10', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2016-03-10', 0, 0, 0, 0, 0, 0, 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 0, 2, 21, 2, 21, 0, '0000-00-00', 0, 'Mumbai University', 0, '0000-00-00', 0, 'Mumbai University', 0, 'HSC', '12', 'FY', 'as', 'as', 0, '121', '12', 'Commerce'),
(151734713, '2016-03-10', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2016-03-10', 0, 0, 0, 0, 0, 0, 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 0, 2, 21, 2, 21, 0, '0000-00-00', 0, 'Mumbai University', 0, '0000-00-00', 0, 'Mumbai University', 0, 'HSC', '12', 'FY', 'as', 'as', 0, '121', '12', 'Commerce'),
(179716472, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '', 0, '0000-00-00', 0, '', 0, '', '', '', '', '', 0, '', '', ''),
(277965480, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '', 0, '0000-00-00', 0, '', 0, '', '', '', '', '', 0, '', '', ''),
(373123481, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '', 0, '0000-00-00', 0, '', 0, '', '', '', '', '', 0, '', '', ''),
(100013512, '2016-03-28', '2016-03-29', '2016-03-30', '2016-03-31', '2016-04-01', '2016-04-02', 0, 1, 0, 0, 1, 0, 'ISCE', 'CBSE', 'CBSE', 'Mumbai University', 'Mumbai University', 'Mumbai University', 52, 52, 52, 52, 52, 52, '2016-04-03', 0, 'ICAI', 52, '2016-04-04', 0, 'ICAI', 52, 'TY', 'mumbai', 'TY', '', '', 0, 'No', 'HR', 'Engineering'),
(35452738, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '', 0, '0000-00-00', 0, '', 0, '', '', '', '', '', 0, '', '', ''),
(220913228, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '', 0, '0000-00-00', 0, '', 0, '', '', '', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `in_house_personal`
--

CREATE TABLE IF NOT EXISTS `in_house_personal` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `profession` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `contact` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `in_house_personal`
--

INSERT INTO `in_house_personal` (`id`, `name`, `fname`, `mname`, `dob`, `profession`, `start`, `end`, `contact`, `image`) VALUES
(216808570, 'shubham mahidhar', 'kishor mahidhar', 'chanda mahidhar', '2016-03-20', 'ca', '2016-03-02', '2016-04-03', 9890409228, 'Inhouse/shubham mahidhar2016-03-20.jpg'),
(108085173, 'st', 'as', 'as', '2016-03-04', 's', '2016-03-01', '2016-04-03', 123, 'Inhouse/st2016-03-04.jpg'),
(358807233, 'st', 'as', 'as', '2016-03-04', 's', '2016-03-01', '2016-04-03', 123, 'Inhouse/st2016-03-04.jpg'),
(114354789, 'st', 'as', 'as', '2016-03-04', 's', '2016-03-01', '2016-04-03', 123, 'Inhouse/st2016-03-04.jpg'),
(151734713, 'sa', 'as', 'as', '2016-03-18', '', '2016-02-29', '2016-04-03', 11, 'Inhouse/sa2016-03-18.jpg'),
(353764009, 'sa', 'as', 'as', '2016-03-18', '', '2016-02-29', '2016-04-03', 11, 'Inhouse/sa2016-03-18.jpg'),
(119923609, 'q', 'a', 'anushka sharma', '2016-03-11', '', '2016-03-27', '2016-04-03', 1, 'Inhouse/q2016-03-11.jpg'),
(156402511, 'q', 'a', 'anushka sharma', '2016-03-11', '', '2016-03-27', '2016-04-03', 1, 'Inhouse/q2016-03-11.jpg'),
(308262366, 'q', 'a', 'anushka sharma', '2016-03-11', '', '2016-03-27', '2016-04-03', 1, 'Inhouse/q2016-03-11.jpg'),
(341612717, 'q', 'a', 'anushka sharma', '2016-03-11', '', '2016-03-27', '2016-04-03', 1, 'Inhouse/q2016-03-11.jpg'),
(329236171, 'aaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaaaaaaa', '2016-03-19', '', '2016-03-20', '2016-04-03', 123, 'Inhouse/aaaaaa2016-03-19.jpg'),
(179716472, 'shubham', 'k', 'c', '2016-04-16', 'student', '2016-04-07', '2016-05-01', 1234567890, 'Inhouse/shubham2016-04-16.jpg'),
(277965480, 'karan', 'k', 'c', '2016-04-14', 'student', '2016-03-29', '2016-04-30', 1234567890, 'Inhouse/karan2016-04-14.jpg'),
(373123481, 'karan', 'karan', 'karan', '2016-04-02', 'vada pav vendor chain', '2016-03-28', '2016-04-24', 89985212585, 'Inhouse/karan2016-04-02.jpg'),
(100013512, 'akshay', 'a', 'q', '2016-04-16', '', '2016-04-09', '2016-04-24', 1, 'Inhouse/akshay2016-04-16.jpg'),
(35452738, 'vijay thakur', 'kishan', 'radha', '1996-06-12', 'student', '2016-04-06', '2016-04-30', 455996596, 'Inhouse/vijay thakur1996-06-12.jpg'),
(220913228, 'krunal somaiya', 'pappa somaiya', 'mummy somaiya', '2017-02-01', 'ENgg', '2017-01-02', '2017-12-03', 789541236, 'Inhouse/krunal somaiya2017-02-01.png');

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE IF NOT EXISTS `leave` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `days` int(11) NOT NULL,
  `roomid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`id`, `name`, `start_date`, `end_date`, `days`, `roomid`, `status`) VALUES
(179716472, 'shubham', '2016-04-02', '2016-04-08', 6, 101, 'Rejected'),
(179716472, 'shubham', '2016-04-16', '2016-04-10', 12, 101, 'Rejected'),
(277965480, 'karan', '2016-04-14', '2016-04-20', 6, 202, 'Rejected'),
(179716472, 'shubham', '2012-07-14', '2012-08-14', 30, 101, 'Rejected'),
(179716472, 'shubham', '2016-04-17', '2016-04-24', 7, 101, 'Rejected'),
(100013512, 'akshay', '2016-04-24', '2016-04-02', 0, 0, 'Rejected'),
(373123481, 'karan', '2016-07-02', '2016-07-10', 0, 325, 'Rejected'),
(373123481, 'karan', '2016-06-29', '2016-07-31', 0, 325, 'Rejected'),
(220913228, 'krunal somaiya', '2017-02-05', '2017-02-01', 0, 0, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE IF NOT EXISTS `mobile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mob_name` varchar(255) NOT NULL,
  `mob_num` bigint(20) NOT NULL,
  `laptop_name` varchar(255) NOT NULL,
  `lid` varchar(255) NOT NULL,
  `mobime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `name`, `mob_name`, `mob_num`, `laptop_name`, `lid`, `mobime`) VALUES
(151734713, 'sa', '', 0, '', '', ''),
(151734713, 'sa', '', 0, '', '', ''),
(151734713, 'sa', 'motoroal', 1234567890, 'lenovo', 'z501', '09876543112357'),
(35452738, 'vijay thakur', 'motoroal', 9890409228, 'mlmknjj', 'mlmlm', '987456321025');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `roomid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`roomid`, `name`, `topic`, `msg`, `type`) VALUES
(0, 'shubham', 'room cleaning', '', 'individual'),
(0, 'shubham', 'room cleaning', 'hello', 'individual'),
(12, 'shubham', 'room cleaning', 'hello', 'individual'),
(123, '', 'room cleaning', 'all rooms were dirty take care otherwise strict action will be taken', 'all'),
(0, '', 'about general meeting', 'all have to come to meeting on 27 january 27/01/2016', 'all'),
(131, 'sa', 'chut', 'lavda le mu me', '');

-- --------------------------------------------------------

--
-- Table structure for table `out_house_academic`
--

CREATE TABLE IF NOT EXISTS `out_house_academic` (
  `id` int(11) NOT NULL,
  `ssc_year` date NOT NULL,
  `xi_year` date NOT NULL,
  `hsc_year` date NOT NULL,
  `fy_year` date NOT NULL,
  `sy_year` date NOT NULL,
  `ty_year` date NOT NULL,
  `ssc_attempt` varchar(110) NOT NULL,
  `xi_attempt` varchar(110) NOT NULL,
  `hsc_attempt` varchar(110) NOT NULL,
  `fy_attempt` varchar(110) NOT NULL,
  `sy_attempt` varchar(110) NOT NULL,
  `ty_attempt` varchar(110) NOT NULL,
  `ssc_uni` varchar(110) NOT NULL,
  `xi_uni` varchar(110) NOT NULL,
  `hsc_uni` varchar(110) NOT NULL,
  `fy_uni` varchar(110) NOT NULL,
  `sy_uni` varchar(110) NOT NULL,
  `ty_uni` varchar(110) NOT NULL,
  `ssc_per` float NOT NULL,
  `xi_per` float NOT NULL,
  `hsc_per` float NOT NULL,
  `fy_per` float NOT NULL,
  `sy_per` float NOT NULL,
  `ty_per` float NOT NULL,
  `cpt_year` date NOT NULL,
  `cpt_attempt` varchar(110) NOT NULL,
  `cpt_uni` varchar(110) NOT NULL,
  `cpt_per` int(11) NOT NULL,
  `ipcc_year` date NOT NULL,
  `ipcc_attempt` varchar(255) NOT NULL,
  `ipcc_uni` varchar(50) NOT NULL,
  `ipcc_per` int(11) NOT NULL,
  `last_exam` varchar(50) NOT NULL,
  `center` varchar(50) NOT NULL,
  `run_class` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `out_house_academic`
--

INSERT INTO `out_house_academic` (`id`, `ssc_year`, `xi_year`, `hsc_year`, `fy_year`, `sy_year`, `ty_year`, `ssc_attempt`, `xi_attempt`, `hsc_attempt`, `fy_attempt`, `sy_attempt`, `ty_attempt`, `ssc_uni`, `xi_uni`, `hsc_uni`, `fy_uni`, `sy_uni`, `ty_uni`, `ssc_per`, `xi_per`, `hsc_per`, `fy_per`, `sy_per`, `ty_per`, `cpt_year`, `cpt_attempt`, `cpt_uni`, `cpt_per`, `ipcc_year`, `ipcc_attempt`, `ipcc_uni`, `ipcc_per`, `last_exam`, `center`, `run_class`, `stream`) VALUES
(4, '2010-07-01', '2011-07-01', '2013-07-01', '2016-03-11', '0000-00-00', '0000-00-00', 'none', 'none', 'none', 'none', 'none', 'none', 'Amravati University', '>Amravati University', 'Amravati University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 91, 88, 75, 6, 0, 0, '0000-00-00', 'none', 'Mumbai University', 0, '0000-00-00', '0', 'Mumbai University', 0, 'FY', 'mumbai', 'SY', ''),
(5, '2016-03-16', '2016-03-22', '2016-03-21', '2016-03-23', '2016-03-24', '2016-03-16', 'none', 'none', 'none', 'none', 'none', 'none', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 33, 33, 22, 22, 22, 22, '2016-03-10', 'none', 'Mumbai University', 22, '2016-03-09', '0', 'Mumbai University', 22, 'TY', 'as', 'TY', ''),
(6, '2016-03-18', '2016-03-12', '2016-03-04', '2016-03-10', '2016-03-11', '2016-03-17', 'none', 'none', 'none', 'none', 'none', 'none', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 1, 1, 1, 1, 1, 1, '2016-03-18', 'none', 'Mumbai University', 1, '2016-03-18', '0', 'Mumbai University', 1, 'FY', 'f', 'TY', ''),
(14266192, '2016-04-06', '2016-03-28', '2016-04-22', '2016-04-03', '0000-00-00', '0000-00-00', 'none', 'none', 'none', 'none', 'none', 'none', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 99, 98, 88, 78, 0, 0, '0000-00-00', 'none', 'Mumbai University', 0, '0000-00-00', 'none', 'Mumbai University', 0, 'FY', 'mumbai', 'SY', 'Engineering'),
(58316187, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'none', 'none', 'none', 'none', 'none', 'none', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 0, 0, 0, 0, 0, 0, '0000-00-00', 'none', 'Mumbai University', 0, '0000-00-00', '0', 'Mumbai University', 0, 'HSC', '1', 'SY', ''),
(108698369, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'none', 'none', 'none', 'none', 'none', 'none', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 0, 0, 0, 0, 0, 0, '0000-00-00', 'none', 'Mumbai University', 0, '0000-00-00', 'none', 'Mumbai University', 0, 'HSC', '', 'HSC', 'Engineering'),
(190591314, '2016-03-08', '2016-03-01', '2016-03-09', '2016-03-08', '2016-03-22', '2016-03-22', 'none', 'none', 'none', 'none', 'none', 'none', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 1, 1, 1, 1, 1, 1, '2016-03-30', 'none', 'Mumbai University', 1, '2016-03-16', '0', 'Mumbai University', 1, 'TY', 'q', 'TY', ''),
(204932591, '2016-07-02', '2016-07-13', '2016-07-19', '2016-07-21', '0000-00-00', '0000-00-00', 'none', 'none', 'none', '2', 'none', 'none', 'CBSE', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 100, 100, 100, 99, 0, 0, '0000-00-00', 'none', 'Mumbai University', 0, '0000-00-00', 'none', 'Mumbai University', 0, 'FY', 'chennai', 'SY', 'Commerce'),
(238921167, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'none', 'none', 'none', 'none', 'none', 'none', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 0, 0, 0, 0, 0, 0, '0000-00-00', 'none', 'Mumbai University', 0, '0000-00-00', '0', 'Mumbai University', 0, 'HSC', '1', 'SY', ''),
(266427385, '2016-03-08', '2016-03-01', '2016-03-09', '2016-03-08', '2016-03-22', '2016-03-22', 'none', 'none', 'none', 'none', 'none', 'none', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 1, 1, 1, 1, 1, 1, '2016-03-30', 'none', 'Mumbai University', 1, '2016-03-16', '0', 'Mumbai University', 1, 'TY', 'q', 'TY', ''),
(323905120, '2016-03-08', '2016-03-01', '2016-03-09', '2016-03-08', '2016-03-22', '2016-03-22', 'none', 'none', 'none', 'none', 'none', 'none', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 1, 1, 1, 1, 1, 1, '2016-03-30', 'none', 'Mumbai University', 1, '2016-03-16', '0', 'Mumbai University', 1, 'TY', 'q', 'TY', ''),
(399140509, '2016-03-08', '2016-03-01', '2016-03-09', '2016-03-08', '2016-03-22', '2016-03-22', 'none', 'none', 'none', 'none', 'none', 'none', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 'Mumbai University', 1, 1, 1, 1, 1, 1, '2016-03-30', 'none', 'Mumbai University', 1, '2016-03-16', '0', 'Mumbai University', 1, 'TY', 'q', 'TY', '');

-- --------------------------------------------------------

--
-- Table structure for table `out_house_personal`
--

CREATE TABLE IF NOT EXISTS `out_house_personal` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `gadd` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `gcontact` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hostel` varchar(255) NOT NULL,
  `last_school` varchar(255) NOT NULL,
  `photo` varchar(110) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `out_house_personal`
--

INSERT INTO `out_house_personal` (`id`, `name`, `fname`, `mname`, `dob`, `address`, `gadd`, `contact`, `gcontact`, `email`, `hostel`, `last_school`, `photo`) VALUES
(30, 'shubham', 'kishor', 'chanda', '2016-01-26', 'krushna kamal appartment khamgaon', 'mumbai', 9890409228, 8975662339, 'sk@gmail.com', ' no', 'vesit', 'Uploads/shubham2016-01-26.jpg'),
(31, 'ashish', 'kumar', 'lalala', '2016-05-12', 'jajaj', 'mamamaa', 921234, 212121212, 'as@a.co', ' no', 'as', 'Uploads/ashish2016-05-12.jpg'),
(32, 'sj', 's', 's', '2016-03-25', 's', 's', 6, 6, 'e', ' f', 'f', 'Uploads/sj2016-03-25.jpg'),
(14266192, 'karan lal', 'karan', 'karan', '2016-04-02', 'washington', 'hogwarts', 8888666655, 9987186429, 'karan@lal.com', ' mit', 'stanford', 'Uploads/karan lal2016-04-02.jpg'),
(58316187, 'ashish', 'a', 'a', '2016-03-11', 'a', 'a', 1, 1, 'a@d.com', ' 1', '1', 'Uploads/ashish2016-03-11.jpg'),
(108698369, 'karan', 'karan', 'karan', '2016-04-02', 'mumbai', 'mumbai', 9890409228, 8975662339, 'karan@lal.com', ' ', '', 'Uploads/karan2016-04-02.jpg'),
(190591314, 'shubham mahidhar', 'g', 'f', '2016-03-11', 'a', 'a', 1, 1, 'as@a.co', ' qq', 'q', 'Uploads/shubham mahidhar2016-03-11.jpg'),
(204932591, 'Jigar Ganatra', 'Hiteshbhai Ganatra', 'Mummy Ganatra', '2016-06-29', 'dada gantra', 'chach gantra', 9856231478, 9745123658, 'jigar@gmail.com', ' No', 'jhata', 'Uploads/Jigar Ganatra2016-06-29.jpg'),
(238921167, 'ashish', 'a', 'a', '2016-03-11', 'a', 'a', 1, 1, 'a@d.com', ' 1', '1', 'Uploads/ashish2016-03-11.jpg'),
(266427385, 'shubham mahidhar', 'g', 'f', '2016-03-11', 'a', 'a', 1, 1, 'as@a.co', ' qq', 'q', 'Uploads/shubham mahidhar2016-03-11.jpg'),
(323905120, 'shubham mahidhar', 'g', 'f', '2016-03-11', 'a', 'a', 1, 1, 'as@a.co', ' qq', 'q', 'Uploads/shubham mahidhar2016-03-11.jpg'),
(399140509, 'shubham mahidhar', 'g', 'f', '2016-03-11', 'a', 'a', 1, 1, 'as@a.co', ' qq', 'q', 'Uploads/shubham mahidhar2016-03-11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE IF NOT EXISTS `room_details` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`id`, `name`, `room_id`) VALUES
(179716472, 'shubham', 101),
(277965480, 'karan', 202),
(373123481, 'karan', 325),
(100013512, 'akshay', 123456),
(35452738, 'vijay thakur', 147),
(220913228, 'krunal somaiya', 0);

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE IF NOT EXISTS `suggestion` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `topic` varchar(255) NOT NULL,
  `reply` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `given_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `user_name`, `password`, `user_level`) VALUES
(396112072, 'sf', '', 'c4ca4238a0b923820dcc509a6f75849b', 'alumni'),
(216808570, 'fg', '', 'c4ca4238a0b923820dcc509a6f75849b', 'in_house'),
(1, 'tr', '', 'c4ca4238a0b923820dcc509a6f75849b', 'trustee'),
(2, 'ad@gmail.com', '', 'c4ca4238a0b923820dcc509a6f75849b', 'admin'),
(1, 'tr', '', 'c4ca4238a0b923820dcc509a6f75849b', 'trustee'),
(2, 'ad@gmail.com', '', 'c4ca4238a0b923820dcc509a6f75849b', 'admin'),
(151734713, 'asbas', 'sa', 'c4ca4238a0b923820dcc509a6f75849b', 'in_house'),
(353764009, 'asbas', 'sa', 'c4ca4238a0b923820dcc509a6f75849b', 'in_house'),
(119923609, 'qq', 'q', 'c4ca4238a0b923820dcc509a6f75849b', 'in_house'),
(156402511, 'qq', 'q', 'c4ca4238a0b923820dcc509a6f75849b', 'in_house'),
(308262366, 'qq', 'q', 'c4ca4238a0b923820dcc509a6f75849b', 'in_house'),
(341612717, 'qq', 'q', 'c4ca4238a0b923820dcc509a6f75849b', 'in_house'),
(329236171, 'zzz', 'aaaaaa', 'c4ca4238a0b923820dcc509a6f75849b', 'in_house'),
(179716472, 's', 'shubham', 'c4ca4238a0b923820dcc509a6f75849b', 'in_house'),
(277965480, 'k', 'karan', 'c4ca4238a0b923820dcc509a6f75849b', 'in_house'),
(373123481, 'karan@lal.com', 'karan', 'c4ca4238a0b923820dcc509a6f75849b', 'in_house'),
(100013512, 'i', 'akshay', 'c4ca4238a0b923820dcc509a6f75849b', 'in_house'),
(35452738, 'vijay@gmail.com', 'vijay thakur', 'c4ca4238a0b923820dcc509a6f75849b', 'in_house'),
(202592435, 'sk@gmail.com', 'shubham mahidhar', 'c4ca4238a0b923820dcc509a6f75849b', 'alumni'),
(220913228, 'ks@gmail.com', 'krunal somaiya', '202cb962ac59075b964b07152d234b70', 'in_house');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
