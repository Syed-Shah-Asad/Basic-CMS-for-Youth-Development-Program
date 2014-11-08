-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2014 at 07:49 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mycms`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `assignment_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  PRIMARY KEY (`assignment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `question`) VALUES
(1, 'Make a CMS for Planning Commision'),
(2, 'Configure Hbase'),
(3, 'Configure Hadoop Cluster'),
(4, 'Write MapReduce Function to optimize the processing power.'),
(5, 'Perform data ingestion and integration'),
(6, 'Setup ruby on rails and Flash via pip.');

-- --------------------------------------------------------

--
-- Table structure for table `ceo`
--

CREATE TABLE IF NOT EXISTS `ceo` (
  `ceo_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`ceo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ceo`
--

INSERT INTO `ceo` (`ceo_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `fellow`
--

CREATE TABLE IF NOT EXISTS `fellow` (
  `fellow_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`fellow_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fellow`
--

INSERT INTO `fellow` (`fellow_id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(3, 'hassan', 'hassan'),
(4, 'ehtisham', 'ehtisham');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `manager_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`manager_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(3, 'yahya', 'yahya');
