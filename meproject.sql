-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 23, 2022 at 11:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `description` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `pid`, `uid`, `description`, `rating`) VALUES
(2, 2, 1, 'This is my best place ', 5),
(3, 2, 3, 'The atmosphere is  very nice. The service staff are also very interested. and dedicated to customers makes you go once and then want to go.', 5),
(4, 3, 2, 'wow this places is wonderful, I recommend every one to visit this places, ', 4),
(5, 4, 1, 'wow this places is wonderful, I recommend every one to visit this places, ', 3),
(6, 4, 1, 'wow this places is wonderful, I recommend every one to visit this places, ', 3),
(7, 6, 1, 'wow this places is wonderful, I recommend every one to visit this places, ', 2),
(8, 2, 2, 'wow this places is wonderful, I recommend every one to visit this places, ', 5),
(9, 6, 1, 'wow this places is wonderful, I recommend every one to visit this places, ', 2),
(10, 3, 2, 'wow this places is wonderful, I recommend every one to visit this places, ', 2),
(11, 1, 2, 'Wow Very Nice, It is too nice!!!!!', 2),
(12, 5, 2, 'Wow Very Nice, It is too nice!!!!!', 4);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `pid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location` text NOT NULL,
  `category` enum('vr','gaming','billiard','room') NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`pid`, `name`, `address`, `image`, `description`, `location`, `category`, `price`) VALUES
(1, 'Billiard1', 'Road:878', 'pc.JPG', 'The best gaming experience ', 'Zallage', 'billiard', 10),
(2, 'Gaming2', 'Road:878', 'room.jpg', 'The best gaming experience ', 'Zallage', 'gaming', 20),
(3, 'Gaming3', 'Road:878', 'room.jpg', 'The best gaming experience ', 'Zallage', 'gaming', 30),
(4, 'Gaming4', 'Road:878', 'vr.jpeg', 'The best gaming experience ', 'Zallage', 'vr', 23),
(5, 'Gaming2', 'Road:878', 'room.jpg', 'The best gaming experience ', 'Zallage', 'gaming', 15),
(6, 'VR Game', 'road: 545 Block: 544', 'vr.jpeg', 'Games are so nice here, every one must visit these places', 'East Riffa', 'vr', 12),
(7, 'Gaming18', 'Block: 909', 'img.png', 'Best Games', 'Arad', 'gaming', 12);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `rid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `phone` varchar(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `lname`, `phone`, `email`, `password`) VALUES
(1, 'Zeena', 'Ghulam Haider', '343343', 'zee@gmail.com', '123'),
(2, 'Sara', 'Ali', '33432543', 'sara@gmail.com', '123'),
(3, 'Mohammed', 'Ali', '34543756', 'moh@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `pidc` (`pid`),
  ADD KEY `uidc` (`uid`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `pidr` (`pid`),
  ADD KEY `uidr` (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `pidc` FOREIGN KEY (`pid`) REFERENCES `places` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `uidc` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `pidr` FOREIGN KEY (`pid`) REFERENCES `places` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `uidr` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
