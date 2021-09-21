-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 06:55 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catcode` int(11) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catcode`, `type`) VALUES
(11, 'creepers'),
(12, 'roots'),
(13, 'tree');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `type_of_item` varchar(20) NOT NULL,
  `code` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `catcode` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`type_of_item`, `code`, `name`, `catcode`, `price`) VALUES
('fruit', 1, 'apple', 13, 50),
('vegetable', 2, 'carrot', 12, 50),
('fruit', 3, 'coconut', 13, 25),
('vegetable', 4, 'cucumber', 11, 50),
('fruit', 5, 'grapes', 11, 30),
('fruit', 6, 'jackfruit', 13, 100),
('fruit', 7, 'mango', 13, 100),
('fruit', 8, 'peanut', 12, 50),
('vegetable', 9, 'pumpkin', 11, 80),
('fruit', 10, 'strawberry', 11, 50),
('vegetable', 11, 'sweet potato', 12, 60),
('vegetable', 12, 'turnip', 12, 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catcode`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
