-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 09:35 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` bigint(100) NOT NULL,
  `question` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `address`, `contact`, `question`) VALUES
(1, 'ishani bora', 'ishanibora02@gmail.com', 'Nimati Road, Seujipar Gaon', 2147483647, 'Is it valid?'),
(2, 'nisha bora', 'nibora03@gmail.com', 'Nimati Road, Seujipar Gaon', 2147483647, 'Is it valid?'),
(3, 'hhtt bora', 'hiybora03@gmail.com', 'Nimati Road, Seujipar Gaon', 6677334499, 'Is it valid?'),
(4, 'hhtt bora', 'hiybora03@gmail.com', 'Nimati Road, Seujipar Gaon', 6677334499, 'Is it valid?'),
(5, 'xxx', 'hiybora000@gmail.com', 'Nimati Road, Seujipar Gaon', 6677553322, 'Is it valid?'),
(6, 'abcd', 'abc@gmail.com', 'Nimati Road, Seujipar Gaon', 9987653678, 'Is it valid?'),
(7, 'abcd', 'abc@gmail.com', 'Nimati Road, Seujipar Gaon', 9987653678, 'Is it valid?'),
(8, 'abcd', 'abc@gmail.com', 'Nimati Road, Seujipar Gaon', 9987653678, 'Is it valid?'),
(9, 'abcd', 'abc@gmail.com', 'Nimati Road, Seujipar Gaon', 9987653678, 'Is it valid?'),
(10, 'abcd', 'abc@gmail.com', 'Nimati Road, Seujipar Gaon', 9987653678, 'Is it valid?'),
(11, 'abcd', 'abc@gmail.com', 'Nimati Road, Seujipar Gaon', 9987653678, 'Is it valid?'),
(12, 'abcd', 'abc@gmail.com', 'Nimati Road, Seujipar Gaon', 9987653678, 'Is it valid?'),
(13, 'abcd', 'abc@gmail.com', 'Nimati Road, Seujipar Gaon', 9987653678, 'Is it valid?'),
(14, 'Raju', 'raju@gmail.com', 'Gujarat', 6678543219, 'None'),
(15, 'Raju', 'raju@gmail.com', 'Gujarat', 6678543219, 'None'),
(16, 'Raju', 'raju@gmail.com', 'Gujarat', 6678543219, 'None'),
(17, 'Raju', 'raju@gmail.com', 'Gujarat', 6678543219, 'None'),
(18, 'Raju', 'raju@gmail.com', 'Gujarat', 6678543219, 'None'),
(21, 'IshanJyoti Bora', 'ishanjyoti15@gmail.com', 'Jorhat,Assam', 7099482461, 'What are the benefits of having this course?'),
(22, 'Jafrin Rahman', 'jaff.rahman@gmail.com', 'Assam', 6001882984, 'Is it valid?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
