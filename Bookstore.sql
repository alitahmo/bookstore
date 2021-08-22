-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 22, 2021 at 11:26 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookid` int(11) NOT NULL,
  `bookname` varchar(150) NOT NULL,
  `kryarprice` int(11) NOT NULL,
  `shopperprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `bookname`, `kryarprice`, `shopperprice`) VALUES
(1, 'دیوانی مەحوی', 6000, 3500),
(2, 'دیوانی نالی', 8000, 5500),
(3, 'دیوانی هێمن', 4000, 2000),
(4, 'دیوانی بێکەس', 10000, 8000);

-- --------------------------------------------------------

--
-- Table structure for table `kryar`
--

CREATE TABLE `kryar` (
  `kryarid` int(11) NOT NULL,
  `kryarname` varchar(100) NOT NULL,
  `kryarphone` varchar(16) NOT NULL,
  `kryaremail` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kryar`
--

INSERT INTO `kryar` (`kryarid`, `kryarname`, `kryarphone`, `kryaremail`) VALUES
(1, 'Hassan Halmet', '07501112233', 'hassan@gmail.com'),
(2, 'Karwan Jasm', '07703336699', 'karwan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `shoppers`
--

CREATE TABLE `shoppers` (
  `shopperid` int(11) NOT NULL,
  `shoppername` varchar(150) NOT NULL,
  `shopperphone` varchar(16) NOT NULL,
  `shopperemail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoppers`
--

INSERT INTO `shoppers` (`shopperid`, `shoppername`, `shopperphone`, `shopperemail`) VALUES
(1, 'Hawler Book Shopper', '075098765432', 'hawler@gmail.com'),
(2, 'Duhok Book Shopper', '077011223344', 'duhok@gmail.com'),
(3, 'Sulaymaniyah Book Shopper', '075098765432', 'Sulaymaniyah@gmail.com'),
(4, 'Halabja Book Shopper', '077011223344', 'halabja@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `shoppers`
--
ALTER TABLE `shoppers`
  ADD PRIMARY KEY (`shopperid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shoppers`
--
ALTER TABLE `shoppers`
  MODIFY `shopperid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
