-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 11, 2020 at 02:40 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `sqltest`
--
CREATE DATABASE IF NOT EXISTS `sqltest` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sqltest`;

-- --------------------------------------------------------

--
-- Table structure for table `regusers`
--

CREATE TABLE `regusers` (
  `uid` int(4) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pw` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

                                                      
INSERT INTO `regusers` (`uid`, `name`, `pw`, `email`, `ad`, `mo`, `si`) VALUES                                
(1, 'alan','123','alan@gmail.com','300 Jay St','new','small');


ALTER TABLE `regusers`
  ADD PRIMARY KEY (`uid`);


ALTER TABLE `regusers`
  MODIFY `uid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

