-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2025 at 11:21 PM
-- Server version: 5.5.27-log
-- PHP Version: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `details`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `sn` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `caste` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `birth` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`sn`, `code`, `fname`, `lname`, `email`, `password`, `gender`, `caste`, `religion`, `occupation`, `birth`, `city`, `state`, `country`) VALUES
(2, 'lm0nAv_2', 'Abhay', 'Sharma', 'abhay@marital.com', '123', 'Male', 'Sharma', 'Hindu', 'Doctor', '2019-01-31', 'Bikaner', 'Rajasthan', 'India'),
(3, '8wgisJ_3', 'Karan', 'Saini', 'karan@marital.com', '123', 'Male', 'Saini', 'Hindu', 'Engineer', '2023-05-19', 'Bikaner', 'Rajasthan', 'India'),
(4, 'gup2Yy_4', 'Yuvraj', 'Singh', 'yuvraj@marital.com', '123', 'Male', 'Singhania', 'Hindu', 'Teacher', '2023-05-18', 'Banglore', 'Karnataka', 'India'),
(5, 'nmIfiQ_5', 'Devraj', 'Sharma', 'devraj@marital.com', '123', 'Male', 'Sharma', 'Hindu', 'Dentist', '2023-06-07', 'Kolkata', 'West Bengal', 'India'),
(6, 'iU71VY_6', 'Shivam', 'Bansal', 'shivam@marital.com', '123', 'Male', 'Bansal', 'Hindu', 'Scientist', '2019-06-11', 'Gurugram', 'Haryana', 'India'),
(7, 'jhS0Dm_7', 'Keshav', 'Bansal', 'keshav@marital.com', '123', 'Male', 'Bansal', 'Hindu', 'Teacher', '2023-06-15', 'Jaipur', 'Rajasthan', 'India'),
(8, '69Pi7T_8', 'Mukul', 'Agarwal', 'mukul@marital.com', '123', 'Male', 'Agarwal', 'Hindu', 'Farmer', '2023-01-18', 'Chennai', 'Tamil Nadu', 'India'),
(9, 'Tn74GH_9', 'Yash ', 'Kansal', 'yash@marital.com', '123', 'Male', 'Kansal', 'Hindu', 'Lawyer', '2013-02-06', 'Delhi', 'Delhi', 'India'),
(10, '5eqpNV_10', 'Anil', 'Jindal', 'anil@marital.com', '123', 'Male', 'Jindal', 'Hindu', 'Teacher', '2023-08-01', 'Mumbai', 'Maharashtra', 'India'),
(11, 'p6c0Ek_11', 'Sachin', 'Goyal', 'sachin@marital.com', '123', 'Male', 'Goyal', 'Hindu', 'Dentist', '2023-07-31', 'Gurugram', 'Haryana', 'India'),
(12, 'kVArXd_12', 'Ajay', 'Kumar', 'ajay@marital.com', '123', 'Male', 'Bansal', 'Hindu', 'Engineer', '2000-12-02', 'Chennai', 'Tamil Nadu', 'India'),
(13, '5dK0VP_13', 'Neha', 'Sharma', 'neha@marital.com', '123', 'Female', 'Sharma', 'Hindu', 'Dentist', '2000-08-11', 'Chennai', 'Tamil Nadu', 'India'),
(14, 'Gnol0i_14', 'Sneha', 'Jindal', 'sneha@marital.com', '123', 'Female', 'Jindal', 'Hindu', 'Teacher', '1998-02-04', 'Kolkata', 'West Bengal', 'India'),
(15, 'I2yaJU_15', 'Harshita', 'Kansal', 'harshita@marital.com', '123', 'Female', 'Kansal', 'Hindu', 'Lawyer', '1996-02-05', 'Mumbai', 'Maharashtra', 'India'),
(16, 'OXuaTq_16', 'Jaya', 'Sharma', 'jaya@marital.com', '123', 'Female', 'Sharma', 'Hindu', 'Farmer', '1995-07-12', 'Bikaner', 'Rajasthan', 'India'),
(17, 'SiL3yE_17', 'Anjali', 'Gupta', 'anjali@marital.com', '123', 'Female', 'Gupta', 'Hindu', 'Engineer', '2000-09-06', 'Gurugram', 'Haryana', 'India'),
(18, 'YFzecr_18', 'Arjun', 'Kumar', 'arjun@marital.com', '123', 'Male', 'Sharma', 'Hindu', 'Teacher', '1997-02-21', 'Kolkata', 'West Bengal', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `sn` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `to_email` varchar(100) NOT NULL,
  `from_code` varchar(100) NOT NULL,
  `to_code` varchar(100) NOT NULL,
  `msg` varchar(5000) NOT NULL,
  `dt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`sn`, `code`, `email`, `to_email`, `from_code`, `to_code`, `msg`, `dt`) VALUES
(1, 'SA8Bgr_1', 'karan@gmail.com', 'abhay@gmail.com', '8wgisJ_3', 'lm0nAv_2', 'Hiiii', '25 Dec 2023'),
(2, 'H5cZRw_2', 'yuvraj@gmail.com', 'abhay@gmail.com', 'gup2Yy_4', 'lm0nAv_2', 'Hello', '25 Dec 2023'),
(3, 'tyLjWc_3', 'Devraj@gmail.com', 'abhay@gmail.com', 'nmIfiQ_5', 'lm0nAv_2', 'Good Evening', '25 Dec 2023'),
(4, 'FOt9YL_4', 'Shivam@gmail.com', 'abhay@gmail.com', 'iU71VY_6', 'lm0nAv_2', 'Take Care', '25 Dec 2023'),
(5, 'HGKERM_5', 'abhay@gmail.com', 'karan@gmail.com', 'lm0nAv_2', '8wgisJ_3', 'Hii Bro', '25 Dec 2023'),
(6, 'WE2Hip_6', 'abhay@gmail.com', 'yuvraj@gmail.com', 'lm0nAv_2', 'gup2Yy_4', 'Hello Bro', '25 Dec 2023'),
(7, '6mCJSK_7', 'abhay@gmail.com', 'devraj@gmail.com', 'lm0nAv_2', 'nmIfiQ_5', 'Good Evening Bro', '25 Dec 2023'),
(8, 'FobhJG_8', 'abhay@gmail.com', 'shivam@gmail.com', 'lm0nAv_2', 'iU71VY_6', 'Take Care Bro', '25 Dec 2023'),
(9, 'MdQnwc_9', 'abhay@marital.com', 'yuvraj@marital.com', 'lm0nAv_2', 'gup2Yy_4', 'Hiiii', '26 Mar 2024'),
(10, '4Li6Ob_10', 'anil@marital.com', 'sachin@marital.com', '5eqpNV_10', 'p6c0Ek_11', 'Hiiii', '10 Jul 2024'),
(11, 'zKfnNB_11', 'anil@marital.com', 'sachin@marital.com', '5eqpNV_10', 'p6c0Ek_11', 'Yo', '10 Jul 2024'),
(12, 'pWF8w0_12', 'abhay@marital.com', 'yash@marital.com', 'lm0nAv_2', 'Tn74GH_9', 'Hello', '26 Jul 2024'),
(13, 'LeHWaI_13', 'abhay@marital.com', 'neha@marital.com', 'lm0nAv_2', '5dK0VP_13', 'Hiii', '26 Jul 2024'),
(14, 'AfcTsO_14', 'abhay@marital.com', 'ajay@marital.com', 'lm0nAv_2', 'kVArXd_12', 'Hi brother', '26 Jul 2024'),
(15, 'bk5uLi_15', 'abhay@marital.com', 'karan@marital.com', 'lm0nAv_2', '8wgisJ_3', 'How are you brother?', '26 Jul 2024'),
(16, 'pSD0rF_16', 'abhay@marital.com', 'devraj@marital.com', 'lm0nAv_2', 'nmIfiQ_5', 'Hiii', '26 Jul 2024'),
(17, '7UfFkm_17', 'abhay@marital.com', 'jaya@marital.com', 'lm0nAv_2', 'OXuaTq_16', 'Hiii', '26 Jul 2024');

-- --------------------------------------------------------

--
-- Table structure for table `moredetails`
--

CREATE TABLE IF NOT EXISTS `moredetails` (
  `usercode` varchar(20) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `mothertongue` varchar(20) NOT NULL,
  `complexion` varchar(20) NOT NULL,
  `birthplace` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `diet` varchar(20) NOT NULL,
  `profilecreated` varchar(20) NOT NULL,
  `smoke` varchar(20) NOT NULL,
  `drink` varchar(20) NOT NULL,
  `zodiac` varchar(20) NOT NULL,
  `education` varchar(20) NOT NULL,
  `income` varchar(20) NOT NULL,
  `fatheroccupation` varchar(20) NOT NULL,
  `motheroccupation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moredetails`
--

INSERT INTO `moredetails` (`usercode`, `maritalstatus`, `mothertongue`, `complexion`, `birthplace`, `weight`, `height`, `bloodgroup`, `diet`, `profilecreated`, `smoke`, `drink`, `zodiac`, `education`, `income`, `fatheroccupation`, `motheroccupation`) VALUES
('lm0nAv_2', 'Single', 'English', 'Fair', 'Mumbai', '90', '180', 'AB+', 'Vagetarian', 'Self', 'Yes', 'Yes', 'Gemini', '12th Pass', '8,00,000', 'Lawyer', 'Engineer'),
('gup2Yy_4', 'Married', 'Hindi', 'Fair', 'Jaipur', '68', '170', 'O+', 'Non-Vegetarian', 'Father', 'Yes', 'Yes', 'Virgo', '10th Pass', '8,50,000', 'Teacher', 'Housewife'),
('nmIfiQ_5', 'Single', 'Hindi', 'Fair', 'Chennai', '70', '165', 'A+', 'Vegetarian', 'Mother', 'No', 'Yes', 'Aries', '12th Pass', '5,00,000', 'Doctor', 'Engineer'),
('iU71VY_6', 'Single', 'English', 'Fair', 'Mumbai', '66', '187', 'A-', 'Non-Vegetarian', 'Mother', 'Yes', 'No', 'Cancer', 'B. Tech', '12,00,000', 'Engineer', 'Lawyer'),
('jhS0Dm_7', 'Married', 'Punjabi', 'Dark', 'Delhi', '90', '160', 'AB+', 'Vegetarian', 'Father', 'Yes', 'No', 'Leo', 'B.Tech', '20,00,000', 'Engineer', 'Housewife'),
('69Pi7T_8', 'Divorced', 'Punjabi', 'Dark', 'Delhi', '88', '172', 'AB+', 'Vegetarian', 'Self', 'No', 'No', 'Taurus', 'MBA', '14,00,000', 'Lawyer', 'Farmer'),
('Tn74GH_9', 'Engaged', 'Punjabi', 'Fair', 'Mumbai', '60', '134', 'O-', 'Vegetarian', 'Self', 'No', 'No', 'Gemini', '12th Pass', '18,00,000', 'Dentist', 'Dentist'),
('5eqpNV_10', 'Engaged', 'Marwadi', 'Fair', 'Bikaner', '82', '183', 'O-', 'Vegetarian', 'Self', 'No', 'Yes', 'Virgo', 'B.Tech', '6,00,000', 'Scientist', 'Scientist'),
('p6c0Ek_11', 'Single', 'English', 'Dark', 'Bikaner', '78', '174', 'O+', 'Non-Vegetarian', 'Friend', 'No', 'No', 'Libra', 'M. Tech', '3,00,000', 'Farmer', 'Farmer'),
('kVArXd_12', 'Married', 'Marwadi', 'Dark', 'Bikaner', '71', '197', 'A+', 'Vegetarian', 'Mother', 'Yes', 'No', 'Libra', '10th Pass', '25,00,000', 'Engineer', 'Engineer'),
('5dK0VP_13', 'Divorced', 'English', 'Fair', 'Bangalore', '67', '180', 'A+', 'Vegetarian', 'Family', 'Yes', 'No', 'Leo', '12th Pass', '7,00,000', 'Engineer', 'Housewife'),
('Gnol0i_14', 'Divorced', 'English', 'Dark', 'Jaipur', '81', '190', 'A+', 'Non-Vegetarian', 'Family', 'No', 'Yes', 'Cancer', 'MBA', '2,00,000', 'Lawyer', 'Housewife'),
('I2yaJU_15', 'Divorced', 'Hindi', 'Dark', 'Mumbai', '72', '192', 'AB+', 'Non-Vegetarian', 'Family', 'Yes', 'No', 'Aries', 'MBA', '16,00,000', 'Farmer', 'Farmer'),
('OXuaTq_16', 'Single', 'Hindi', 'Dark', 'Chennai', '98', '188', 'O+', 'Non-Vegetarian', 'Friend', 'No', 'No', 'Aries', 'MBA', '14,00,000', 'Doctor', 'Doctor'),
('SiL3yE_17', 'Single', 'English', 'Fair', 'Udaipur', '93', '171', 'A-', 'Vegetarian', 'Friend', 'No', 'Yes', 'Leo', 'M.Tech', '2,00,000', 'Lawyer', 'Lawyer'),
('YFzecr_18', 'Engaged', 'Hindi', 'Fair', 'Bikaner', '84', '186', 'A-', 'Vegetarian', 'Self', 'No', 'No', 'Taurus', '12th Pass', '8,00,000', 'Dentist', 'Housewife');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE IF NOT EXISTS `story` (
  `sn` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `story` varchar(400) NOT NULL,
  `story_with_email` varchar(40) NOT NULL,
  `dt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
