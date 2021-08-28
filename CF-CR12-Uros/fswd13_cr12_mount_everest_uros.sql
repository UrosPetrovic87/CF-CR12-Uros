-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2021 at 05:14 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fswd13_cr12_mount_everest_uros`
--
CREATE DATABASE IF NOT EXISTS `fswd13_cr12_mount_everest_uros` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `fswd13_cr12_mount_everest_uros`;

-- --------------------------------------------------------

--
-- Table structure for table `travels`
--

CREATE TABLE `travels` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `locationName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travels`
--

INSERT INTO `travels` (`id`, `picture`, `locationName`, `price`, `description`, `longitude`, `latitude`) VALUES
(8, 'https://media.tourdata.at/file/pic800x/1739931bf7e24e9c90405ee48999efe8.jpg', 'Mondsee', '200 ', 'Mondsee is a town in the Vöcklabruck district in the Austrian state of Upper Austria located on the shore of the lake Mondsee. The town is home to the medieval Mondsee Abbey.', '13.351667', '47.856667'),
(9, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtp_FVBz6qZhbZ6KjqQuISBG83TWAy5Oi08w&usqp=CAU', 'Sidney', '2500', 'Sydney, capital of New South Wales and one of Australia largest cities, is best known for its harbourfront Sydney Opera House.', '151.209900', '-33.865143'),
(11, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQocSC28hshqasMuJkfBXoMqBq4QXl0wM074g&usqp=CAU', 'Cape Town ', '1500', 'Cape Town is a port city on South Africa’s southwest coast, on a peninsula beneath the imposing Table Mountain. Slowly rotating cable cars climb to the mountain’s flat top.', '18.459778', '-34.270836');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travels`
--
ALTER TABLE `travels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travels`
--
ALTER TABLE `travels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
