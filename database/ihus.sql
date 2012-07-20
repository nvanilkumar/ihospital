-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2012 at 05:10 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ihus`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `address_id` int(100) NOT NULL AUTO_INCREMENT,
  `address` varchar(200) NOT NULL,
  `area` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `address`, `area`, `city`, `state`, `country`, `pincode`) VALUES
(1, 'add', 'sfd', 'city', 'sta', 'country', '2342'),
(2, 'add', 'sfd', 'city', 'sta', 'country', '2342'),
(3, 'asfd', 'sdf', 'sfd', 'sf', 'sfd', '234'),
(4, 'asfd', 'sdf', 'sfd', 'sf', 'sfd', '234'),
(5, 'asfd', 'sdf', 'sfd', 'sf', 'sfd', '234'),
(6, 'asfd', 'sdf', 'sfd', 'sf', 'sfd', '234'),
(7, 'asfd', 'sdf', 'sfd', 'sf', 'sfd', '234'),
(8, 'ad', 'fsf', 'c', 'sta', 'c', '234'),
(9, '', '', '', '', '', ''),
(10, 'asdf', 'asdf', 'sfd', 'dfs', 'sadf', '234');

-- --------------------------------------------------------

--
-- Table structure for table `businessoffers`
--

CREATE TABLE IF NOT EXISTS `businessoffers` (
  `offers_id` int(200) NOT NULL AUTO_INCREMENT,
  `offer_details` text NOT NULL,
  `status` int(50) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  PRIMARY KEY (`offers_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `busines_snapshot`
--

CREATE TABLE IF NOT EXISTS `busines_snapshot` (
  `business_id` int(200) NOT NULL AUTO_INCREMENT,
  `org_name` varchar(200) NOT NULL,
  `business_overview` text NOT NULL,
  `address_id` int(200) NOT NULL,
  `website` varchar(100) NOT NULL,
  `opd_id` int(200) NOT NULL,
  `date` date NOT NULL,
  `health_camp_id` int(200) NOT NULL,
  `verified` int(20) NOT NULL,
  PRIMARY KEY (`business_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `doctorsnapshot`
--

CREATE TABLE IF NOT EXISTS `doctorsnapshot` (
  `speciality` varchar(100) NOT NULL,
  `licensenumber` varchar(100) NOT NULL,
  `addressid` int(200) NOT NULL,
  `college` varchar(500) NOT NULL,
  `degree` varchar(500) NOT NULL,
  `year_of_passing` varchar(500) NOT NULL,
  `accomplishments` text NOT NULL,
  `publications` text NOT NULL,
  `awards` text NOT NULL,
  `available` int(20) NOT NULL,
  `verified` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `healthcamps`
--

CREATE TABLE IF NOT EXISTS `healthcamps` (
  `campid` int(100) NOT NULL AUTO_INCREMENT,
  `camp_name` varchar(200) NOT NULL,
  `time_from` varchar(200) NOT NULL,
  `time_to` varchar(100) NOT NULL,
  `date_from` varchar(200) NOT NULL,
  `date_to` varchar(200) NOT NULL,
  `addressid` int(200) NOT NULL,
  `land_mark` varchar(200) NOT NULL,
  `landline_phone` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `fax` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `notes` varchar(500) NOT NULL,
  PRIMARY KEY (`campid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `healthcamps`
--

INSERT INTO `healthcamps` (`campid`, `camp_name`, `time_from`, `time_to`, `date_from`, `date_to`, `addressid`, `land_mark`, `landline_phone`, `mobile`, `fax`, `email`, `notes`) VALUES
(2, 'aaaaa', '0000-00-00', '03:15:PM', '0000-00-00', '0000-00-00', 7, '0', '654-654-654-654#', '654-654-654-654#', '654-6546-654-6546#', 'abhilash.yella@gmail.com', 'adfadfa'),
(3, 'aaaaa', '0000-00-00', '03:15:PM', '0000-00-00', '0000-00-00', 8, '0', '654-654-654-654#', '654-654-654-654#', '654-6546-654-6546#', 'abhilash.yella@gmail.com', 'adfadfa'),
(4, 'oiou', '0000-00-00', '02:30:AM', '0000-00-00', '0000-00-00', 9, '0', '6544-654-654-#', '654-65-46-6#', '6546-65464-6546-54#', 'abc@gmail.com', 'adfasdf'),
(5, 'ddddd', '0000-00-00', '02:00:PM', '0000-00-00', '0000-00-00', 10, '0', '25-52-2554-4444#', '1-5554-555-777#', '9-555-7774-5555#', 'prabhakar040@gmail.com', 'abced'),
(6, 'aaa', '02:00:AM', '03:00:AM', '03-07-2012', '31-07-2012', 11, 'near narayanaguda', '52-55-5555-5555#', '91-5554-555-555#', '91-555-5555-5555#', 'pppppppp@gmail.com', 'hiiiiiiiiiiiii'),
(7, 'ppppp', '11:00:AM', '11:00:AM', '03-07-2012', '04-07-2012', 12, 'aaaaa', '91-654-4444-4444#', '555-5555-555-555#', '91-5555-5555-5555#', 'abhilash.yella@gmail.com', 'eeeeeeeee'),
(8, 'rrrrrrr', '02:00:AM', '05:00:AM', '16-07-2012', '09-07-2012', 13, 'andhrapradesh', '91-5555-5554-4444#', '91-9185-444-555#', '91-1111-1111-1111#', 'prabhakar040@gmail.com', 'oooooooooooo');

-- --------------------------------------------------------

--
-- Table structure for table `healthcamptype`
--

CREATE TABLE IF NOT EXISTS `healthcamptype` (
  `healthcamptypeid` int(200) NOT NULL,
  `campid` int(200) NOT NULL,
  `typename` varchar(500) NOT NULL,
  `details` varchar(500) NOT NULL,
  `fees` int(200) NOT NULL,
  PRIMARY KEY (`healthcamptypeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospitaloverview`
--

CREATE TABLE IF NOT EXISTS `hospitaloverview` (
  `hospitaluserid` int(200) NOT NULL,
  `established` varchar(200) NOT NULL,
  `beds` int(200) NOT NULL,
  `totalresidents` int(200) NOT NULL,
  `management` text NOT NULL,
  `facilities` text NOT NULL,
  `overview` text NOT NULL,
  `achievements` text NOT NULL,
  `consultants` varchar(200) NOT NULL,
  PRIMARY KEY (`hospitaluserid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospitalsdoctors`
--

CREATE TABLE IF NOT EXISTS `hospitalsdoctors` (
  `hospitaluserid` int(200) NOT NULL,
  `doctoruserid` int(200) NOT NULL,
  `opdtimings` varchar(500) NOT NULL,
  `fees` int(200) NOT NULL,
  PRIMARY KEY (`hospitaluserid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospitalsnapshot`
--

CREATE TABLE IF NOT EXISTS `hospitalsnapshot` (
  `hospital_name` varchar(500) NOT NULL,
  `landline` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `fax` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `website` varchar(200) NOT NULL,
  `address_id` int(200) NOT NULL,
  `photourl` varchar(100) NOT NULL,
  `licenseurl` varchar(100) NOT NULL,
  `opdid` int(200) NOT NULL,
  `fees` int(200) NOT NULL,
  `slideshowimages` varchar(500) NOT NULL,
  `available` int(20) NOT NULL,
  `doctorscount` int(20) NOT NULL,
  `verified` int(20) NOT NULL,
  `hospital_userid` int(200) NOT NULL,
  PRIMARY KEY (`hospital_userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitalsnapshot`
--

INSERT INTO `hospitalsnapshot` (`hospital_name`, `landline`, `mobile`, `fax`, `email`, `website`, `address_id`, `photourl`, `licenseurl`, `opdid`, `fees`, `slideshowimages`, `available`, `doctorscount`, `verified`, `hospital_userid`) VALUES
('hos', '1-1-1-1#2-2-2-2#', '3-3-3-3#4-4-4-4#', '5-5-5-5#6-6-6-6#', 'anil2222815@yahoo.com', 'fsda', 10, 'storage/ihospital/logo4.jpg', '', 0, 4234, '', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `opdtimingid`
--

CREATE TABLE IF NOT EXISTS `opdtimingid` (
  `opd_id` int(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `monday` varchar(200) NOT NULL,
  `tuesday` varchar(200) NOT NULL,
  `wednesday` text NOT NULL,
  `thursday` varchar(200) NOT NULL,
  `friday` varchar(200) NOT NULL,
  `saturday` varchar(200) NOT NULL,
  `sunday` varchar(200) NOT NULL,
  `available` int(50) NOT NULL,
  PRIMARY KEY (`opd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opdtimingid`
--

INSERT INTO `opdtimingid` (`opd_id`, `type`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `available`) VALUES
(1, 'hospital', '', '', '', '03-00-AM/07-15-AM#', '', '', '', 0),
(2, 'hospital', '03-30-AM/01-00-PM#03-30-AM/01-00-PM#03-30-AM/01-00-PM#03-30-AM/01-00-PM#', '03-30-AM/01-00-PM#03-30-AM/01-00-PM#03-30-AM/01-00-PM#03-30-AM/01-00-PM#', '03-30-AM/01-00-PM#03-30-AM/01-00-PM#03-30-AM/01-00-PM#03-30-AM/01-00-PM#', '', '', '', '', 0),
(3, 'hospital', '06-00-am/08-00-am#', '', '', '', '', '', '01-00-am/02-00-am#', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(200) NOT NULL AUTO_INCREMENT,
  `user_id` int(200) NOT NULL,
  `status` int(50) NOT NULL,
  `date` date NOT NULL,
  `time` int(100) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE IF NOT EXISTS `orderitems` (
  `order_id` int(200) NOT NULL,
  `report_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pressreleases`
--

CREATE TABLE IF NOT EXISTS `pressreleases` (
  `pressid` int(100) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `newsdetails` text NOT NULL,
  `hospitaluserid` int(100) NOT NULL,
  PRIMARY KEY (`pressid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `query_appointment`
--

CREATE TABLE IF NOT EXISTS `query_appointment` (
  `qa_id` int(200) NOT NULL AUTO_INCREMENT,
  `patient_fname` varchar(200) NOT NULL,
  `patient_lastname` varchar(200) NOT NULL,
  `addressid` int(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `landline` int(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`qa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `research_user_id` int(100) NOT NULL,
  `report_id` int(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `report title` varchar(500) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date_publishing` date NOT NULL,
  `pages` int(50) NOT NULL,
  `price` int(100) NOT NULL,
  PRIMARY KEY (`research_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `researchusers`
--

CREATE TABLE IF NOT EXISTS `researchusers` (
  `research_user_id` int(200) NOT NULL,
  `org_name` varchar(100) NOT NULL,
  `overview` text NOT NULL,
  `addressid` int(11) NOT NULL,
  `website` varchar(100) NOT NULL,
  `opdid` int(200) NOT NULL,
  `date_of_establishment` date NOT NULL,
  `url` varchar(80) NOT NULL,
  `verified` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `landline` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `usertype` varchar(200) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `email`, `first_name`, `last_name`, `dob`, `gender`, `landline`, `mobile`, `username`, `password`, `usertype`) VALUES
(2, 'Amit@gmail.com', 'asdf', 'asfd', '2012-06-12', 'male', '1111111111111', '2222', 'asdf', 'e10adc3949ba59abbe56e057f20f883e', '6'),
(3, 'anil2222815@yahoo.com', 'asf', 'asdf', '0000-00-00', 'male', '1-1-1-1', '2-2-2-2', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '6'),
(4, 'a@g.c', 'asfd', 'asfd', '2012-07-10', 'male', '23-2323-233-2323', '23-232-234-2432', 'afdsf', 'e10adc3949ba59abbe56e057f20f883e', '7'),
(6, 'Amit@gmail.com', 'asdf', 'asdf', '2012-07-10', 'male', '45-4545-454-4545', '45-45-454-454', 'afds', 'e10adc3949ba59abbe56e057f20f883e', '6'),
(7, '0', '0', '0', '0000-00-00', '', '---', '---', '0', 'd41d8cd98f00b204e9800998ecf8427e', '0'),
(8, '0', '0', '0', '0000-00-00', '', '---', '---', '0', 'd41d8cd98f00b204e9800998ecf8427e', '0'),
(9, '0', '0', '0', '0000-00-00', '', '---', '---', '0', 'd41d8cd98f00b204e9800998ecf8427e', '0'),
(10, 'ascas@afas.com', 'sdf', 'asfd', '2012-07-11', 'male', '34-3443-343-3434', '34-3434-343-343', 'afdsdfs', 'e10adc3949ba59abbe56e057f20f883e', '7');

-- --------------------------------------------------------

--
-- Table structure for table `usercategories`
--

CREATE TABLE IF NOT EXISTS `usercategories` (
  `catid` int(100) NOT NULL AUTO_INCREMENT,
  `catname` varchar(200) NOT NULL,
  `parentcatid` int(100) NOT NULL,
  `status` int(50) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `usercategories`
--

INSERT INTO `usercategories` (`catid`, `catname`, `parentcatid`, `status`) VALUES
(1, 'Medical Institutions', 0, 0),
(2, 'Health Professionals', 0, 0),
(3, 'Medical Services / Aid', 0, 0),
(4, 'Health Businesses', 0, 0),
(5, 'Others', 0, 1),
(6, 'Govt. Hospital / Nursing Home', 1, 0),
(7, 'Private Hospital / Nursing Home', 1, 0),
(8, 'Clinic', 1, 0),
(9, 'Ayurveda / Unani / Alternative Medicine Hospital', 1, 0),
(10, 'Wellness Centre / Others', 1, 0),
(11, 'Doctor', 2, 0),
(12, 'Ayurveda / Unani / Alternative Medicine Practitioner', 2, 0),
(13, 'Nurse', 2, 0),
(14, 'Other Health Professional ', 2, 0),
(15, 'Blood Bank', 3, 0),
(16, 'Diagnostic Centre / Laboratory', 3, 0),
(17, 'NGO', 3, 0),
(18, 'Medical Care Equipment', 3, 0),
(19, 'Nursing Care Service', 3, 0),
(20, 'Other Medical Services / Aid', 3, 0),
(21, 'Pharmacy Store / Chain', 4, 0),
(22, 'Medical Products Mfg. / Trading', 4, 0),
(23, 'Other Health Businesses', 4, 0),
(24, 'Consumer', 5, 1),
(25, 'Firm / Company / Business / Media', 5, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
