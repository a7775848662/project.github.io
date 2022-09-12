-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 06:44 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movietime`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `username`, `pass`, `date`) VALUES
(1, 'gd', '1427', '23/11/2021');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lang` varchar(255) NOT NULL,
  `ry` varchar(255) NOT NULL,
  `type` varchar(200) NOT NULL,
  `category` varchar(255) NOT NULL,
  `poster` varchar(200) NOT NULL,
  `sample` varchar(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`, `lang`, `ry`, `type`, `category`, `poster`, `sample`, `date`) VALUES
('627a83f033fdb', 'Pharmacology Mnemonics', 'English', '2017', '', 'latest', 'https://rukminim1.flixcart.com/image/416/416/k0igia80/book/1/6/5/pharmacology-mnemonics-for-the-family-nurse-practitioner-original-imafka9259pc2z4a.jpeg?q=70', 'https://www.dropbox.com/s/eo5kob7r9orn4w0/%28Pharmacology%20Mnemonics%29_1.pdf?dl=0', '2022-05-10 15:27:41.491927'),
('627a8a139a61c', 'B D chaurasia Anatomy Book', 'English', '2016', '', 'latest', 'https://cdn.slidesharecdn.com/ss_thumbnails/bdchaurasiashandbookofgeneralanatomy4theditionussamamaqbool-180228133937-thumbnail-4.jpg?cb=1519825485', 'https://www.dropbox.com/s/1kx3rbfded6ma96/B%20D%20chaurasia%20Anatomy%20Book.pdf?dl=0', '2022-05-10 15:51:47.632502');

-- --------------------------------------------------------

--
-- Table structure for table `rmovies`
--

CREATE TABLE `rmovies` (
  `rid` varchar(255) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `remail` varchar(255) NOT NULL,
  `rmname` varchar(255) NOT NULL,
  `mry` varchar(255) NOT NULL,
  `feedback` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `rmovies`
--
ALTER TABLE `rmovies`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
