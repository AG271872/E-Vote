-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 01:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `gender` char(1) NOT NULL,
  `caste_vote` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `mobile`, `gender`, `caste_vote`) VALUES
(2, 'nk', 'nk@gmail.com', '$2y$10$2KQBir5AjB/qhrQviFha0O5M4MhvcLTZcqWnTQ26OqLa8OCBt/T02', 1122334455, 'M', 1),
(3, 'Arpita Gupta', 'arpitaguptakanpur27@gmail.com', '$2y$10$ZTI78XX50welBIIixzAcgew.Ld/FRPdYYFKnuOuwhOpfRzFq6tJzu', 7068793897, 'F', 1),
(4, 'Anuradha', 'anu@gmail.com', '$2y$10$Hhv6FOIVe7.venwZl5Sq7uHBDrYgH6WBEtdhNnoMKQ5efsEhb2j7G', 8115158396, 'F', 1),
(5, 'Anu', 'b@gmail.com', '$2y$10$x3ZzeYcRfah8jqfaPFqI7uqzethnibiZ0zNvLWJus6gtXYWJ6AkxK', 8118458654, 'F', 1),
(6, 'Navyansh', 'navyanshtechnicalpoint001@gmail.com', '$2y$10$c2RoYhhfeof3JbW5KNwEh.Ec22.6Elv4C8YD.VOXZ5J9MYgp6hwdO', 9140997020, 'M', 1);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `BJP` int(100) NOT NULL,
  `Congress` int(100) NOT NULL,
  `AAP` int(100) NOT NULL,
  `Nirdaliya` int(100) NOT NULL,
  `NOTA` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`BJP`, `Congress`, `AAP`, `Nirdaliya`, `NOTA`) VALUES
(2, 1, 4, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`BJP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
