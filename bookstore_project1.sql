-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 04:02 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore_project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinventory`
--

CREATE TABLE `bookinventory` (
  `bookid` int(11) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `available_quantity` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinventory`
--

INSERT INTO `bookinventory` (`bookid`, `bookname`, `available_quantity`, `author_name`, `price`) VALUES
(1, 'The Complete Stories', 5, 'Flannery O\'Connor', 17),
(2, 'Letting Go', 7, 'Philip Roth', 43),
(3, 'Fear of Flying', 21, 'Erica Jong', 12),
(4, 'The French Laundry Cookbook', 12, 'Thomas Keller', 10),
(5, 'Wide Sargasso Sea', 17, 'Jean Rhys', 7),
(6, 'When Breath Becomes Air', 3, 'Paul Kalanithi', 23),
(7, 'GENESIS', 54, 'Lélia Wanick Salgado', 3),
(8, 'The Manuscript Books of Emily Dickinson', 11, ' R. W. Franklin', 9),
(9, 'Letting Go', 7, 'Philip Roth', 35);

-- --------------------------------------------------------

--
-- Table structure for table `insertbookinventory`
--

CREATE TABLE `insertbookinventory` (
  `orderid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `paymentoption` varchar(255) NOT NULL,
  `bookname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insertbookinventory`
--

INSERT INTO `insertbookinventory` (`orderid`, `firstname`, `lastname`, `paymentoption`, `bookname`) VALUES
(3, 'kaushik', 'khambadiya', 'debit', 'The Complete Stories'),
(4, 'kaushik', 'khambadiya', 'debit', 'The Complete Stories'),
(5, 'kaushik', 'khambadiya', 'debit', 'The Complete Stories'),
(6, 'kaushik', 'khambadiya', 'credit', 'The Complete Stories'),
(7, 'kaushik', 'khambadiya', 'cash', 'Fear of Flying'),
(8, 'kaushik', 'khambadiya', 'cash', 'Fear of Flying');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinventory`
--
ALTER TABLE `bookinventory`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `insertbookinventory`
--
ALTER TABLE `insertbookinventory`
  ADD PRIMARY KEY (`orderid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinventory`
--
ALTER TABLE `bookinventory`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `insertbookinventory`
--
ALTER TABLE `insertbookinventory`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
