-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2015 at 08:03 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_type_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dept_id` int(10) NOT NULL,
  `designation_id` int(10) NOT NULL,
  `doj` date NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `skills` text NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `edted_by` varchar(50) NOT NULL,
  `added_date` date NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_type_id`, `name`, `dept_id`, `designation_id`, `doj`, `dob`, `image`, `username`, `password`, `email_id`, `phone_no`, `address`, `skills`, `blood_group`, `added_by`, `edted_by`, `added_date`, `updated_at`, `status`) VALUES
(19, 1, 'admin', 4, 1, '2012-03-12', '2021-02-12', 'tata-tea_1.jpg', 'admin', '0192023a7bbd73250516f069df18b500', 'test@gmail.com', '2223232323', 'ggccg', '', 'ab+', '19', '19', '2015-04-09', '2015-04-09 00:00:00', '1'),
(20, 2, 'Rahul', 1, 3, '2012-10-02', '2010-02-20', 'Hulk.png', 'rahul', 'e10adc3949ba59abbe56e057f20f883e', 'raj@gmail.com', '9865896589', 'kol', '', 'b', '19', '19', '2015-04-08', '2015-04-08 00:00:00', '1'),
(21, 0, 'sourave', 0, 0, '2012-10-10', '2010-12-22', '27481.png', 'sourave', 'e10adc3949ba59abbe56e057f20f883e', 'sourave@gmail.com', '8596586958', 'kol', '', 'B+', '19', '19', '2015-04-08', '2015-06-04 08:05:01', '1'),
(22, 1, 'Raja', 3, 2, '2012-10-12', '2014-04-01', 'Hulk.png', 'raj123', 'e10adc3949ba59abbe56e057f20f883e', 'raj@gmail.com', '8596586958', 'kol', '', 'B+', '19', '19', '2015-04-08', '2015-04-08 00:00:00', '1'),
(23, 2, 'Raja', 4, 2, '2012-10-10', '2012-10-21', 'Hulk.png', 'raj1234', 'e10adc3949ba59abbe56e057f20f883e', 'raj@gmail.com', '8596586958', 'kol', '', 'b', '19', '19', '2015-04-08', '2015-04-08 00:00:00', '1'),
(24, 1, 'Arindam', 4, 3, '2012-10-11', '2012-10-22', 'Hulk.png', 'arindam', 'e10adc3949ba59abbe56e057f20f883e', 'ari@gmail.com', '8596586958', 'kol', '', 'b', '19', '19', '2015-04-09', '2015-04-09 00:00:00', '1'),
(25, 0, 'asdfgh', 0, 0, '0000-00-00', '0000-00-00', '', 'fggggg', '', 'aaa@ddd.ggg', '1345555555', '', '', 'ss', '', '', '0000-00-00', '0000-00-00 00:00:00', '1'),
(26, 0, 'aaaa', 0, 0, '0000-00-00', '2015-11-25', '', 'ass', '123456', 'aaaa@fff.fff', '8012365478', '', '', 'ss', '', '', '0000-00-00', '0000-00-00 00:00:00', '1'),
(27, 0, 'aaaaaaaaa', 0, 0, '0000-00-00', '0000-00-00', '', 'aaaaa', 'aaaaaa', 'aaaa@aaa.aaa', '7896541230', '', '', 'ss', '', '', '0000-00-00', '0000-00-00 00:00:00', '1'),
(29, 0, 'hjghjgh', 0, 0, '0000-00-00', '0000-00-00', '', 'fggggg', '', 'aaaa@aaa.aaa', '7896541230', '', '', 'rrr', '', '', '0000-00-00', '0000-00-00 00:00:00', '1'),
(30, 0, 'hjghjgh', 0, 0, '0000-00-00', '0000-00-00', '', 'fggggg', '', 'aaaa@aaa.aaa', '7896541230', '', '', 'rrr', '', '', '0000-00-00', '0000-00-00 00:00:00', '1'),
(31, 0, 'pulak', 1, 1, '1987-04-05', '1947-08-15', '', 'pulak', 'pulak', 'pulak@dd.com', '7854123698', 'titagarh', '', 'K+', '', '', '0000-00-00', '0000-00-00 00:00:00', '1'),
(32, 0, 'Raja123', 1, 1, '2012-10-12', '2014-04-01', '', 'raj123', '', 'raj@gmail.com', '8596586958', 'kol', '', 'B+', '', '', '0000-00-00', '0000-00-00 00:00:00', '1'),
(33, 1, 'Raja123', 1, 1, '2012-10-12', '2014-04-01', '', 'raj123', '123456', 'raj@gmail.com123', '8596000000', 'kol', '', 'B+', '', '', '0000-00-00', '0000-00-00 00:00:00', '0'),
(34, 1, 'Raja123', 1, 1, '2012-10-12', '2014-04-01', '', 'raj123', '456328', 'raj@gmail.com123', '8596000000', 'kol', '', 'B+', '', '', '0000-00-00', '0000-00-00 00:00:00', '0'),
(35, 1, 'Raja123', 1, 1, '2012-10-12', '2014-04-01', '', 'raj123', '789654123', 'raj@gmail.com123', '8596000000', 'kol', '', 'B+', '', '', '0000-00-00', '0000-00-00 00:00:00', '0'),
(36, 1, 'Rahul1334', 1, 1, '2012-10-02', '2010-02-20', '', 'rahul1234', '', 'raj@gmail.com', '9865896589', 'kol', '', 'b', '', '', '0000-00-00', '0000-00-00 00:00:00', '0'),
(37, 1, 'Rahul1334', 1, 1, '2012-10-02', '2010-02-20', '', 'rahul1234', '', 'raj@gmail.com', '9865896589', 'kol', '', 'b', '', '', '0000-00-00', '0000-00-00 00:00:00', '0'),
(38, 1, 'pulak', 1, 1, '0000-00-00', '2012-02-01', '', 'aaaaa', '', 'aaaa@aaa.aaa', '7896541230', 'kolkatra', '', 'ss', '', '', '0000-00-00', '0000-00-00 00:00:00', '1'),
(39, 0, 'pulak', 0, 0, '1985-02-05', '2012-02-01', '', 'pulak123', '123456', 'pulak@gmail.com', '8101563779', 'kolkatra', '', 'ss', '', '', '0000-00-00', '2015-06-08 12:43:41', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'tasar', 'tasar@gmail.com', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
