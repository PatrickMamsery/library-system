-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2019 at 12:10 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
  `id` int(11) NOT NULL,
  `ent_title` varchar(256) DEFAULT NULL,
  `ent_category` varchar(45) DEFAULT NULL,
  `ent_index_no` int(11) NOT NULL,
  `ent_author` varchar(23) NOT NULL,
  `d_o_e` date NOT NULL,
  `blurb` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`id`, `ent_title`, `ent_category`, `ent_index_no`, `ent_author`, `d_o_e`, `blurb`) VALUES
(1, 'The Da Vinci Code', 'Novels', 345, 'Dan Brown', '2019-05-28', 'Hell If I Know'),
(2, 'The Bible', 'Religion', 1, 'N/L', '0001-01-01', 'In the Beginning..................'),
(3, 'Physics Form 4 Student\\\'s Book', 'Reservation', 34, 'Oxford', '2019-05-07', ''),
(4, 'Iconography', 'Generalities', 78, 'Patrick Mamsery', '2019-05-24', 'The nature of icons and symbols in ancient literatures is very disturbing as it is fascinating....'),
(5, 'To Kill a Mockingjay', 'Novels', 12, 'Hannah', '2019-05-22', 'The most interesting story of all time'),
(6, 'Bringing the Nation\\\'s Husband Home', 'Novels', 13, 'Yei Fe Ye', '2019-05-22', 'Romance and the ideal Husband'),
(7, 'Physics Chand', 'Pure Sciences', 567, 'S. Chand', '2019-05-22', ''),
(8, 'The Vets', 'Novels', 67, 'Stephen Leather', '2019-05-22', 'Out of the blue, Colonel Tyler brings together 4 seemingly different people to pull the robbery of the century.........'),
(9, 'Mageka\\\'s', 'Generalities', 1000101, 'Mageka', '2019-05-15', 'lol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
