-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2019 at 06:49 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `filename` varchar(55) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `whenadded` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `title`, `article`, `filename`, `filepath`, `whenadded`) VALUES
(22, 'Nitin', 'Good', 'The standard TEXT data object is sufficiently capable of handling typical long-form text content. TEXT data objects top out at 64 KB (expressed as 2^16 -1) or 65,535 characters and requires a 2 byte overhead.', 'StudentFeeDetail.pdf', 'uploads/StudentFeeDetail.pdf', '2019-02-26 20:43:59.000000'),
(23, 'nitinnema', 'Bad', ' TEXT data objects top out at 64 KB (expressed as 2^16 -1) or 65,535 characters and requires a 2 byte overhead.The standard TEXT data object is sufficiently capable of handling typical long-form text content.', 'adnfjkbh.docx', 'uploads/adnfjkbh.docx', '2019-02-26 20:44:52.000000'),
(24, 'Jatin', 'Window', 'Windows is not working.', 'StudentFeeDetail.pdf', 'uploads/StudentFeeDetail.pdf', '2019-02-27 16:35:35.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
