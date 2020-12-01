-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 05:13 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(10) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `title`, `content`, `username`) VALUES
(7, 'Testing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium distinctio unde aut doloremque quasi sint impedit maiores dolores, suscipit error velit iusto dolorum. Quas dignissimos unde soluta, at alias esse.', 'leonardrizta'),
(9, 'Testing - Hello World', 'Halo Dunia, lagi testing article nich', 'user1'),
(10, 'Aku Cinta Code Igniter', 'CodeIgniter merupakan salah satu framework PHP', 'user2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `role`) VALUES
('leonardrizta', 'leonardrizta3@gmail.com', '$2y$10$rwzlDI/NVGrAgw9aO/aKReey/w8QAb4CuX6iw/alglzfvnfQ/NSci', 1),
('user1', 'user1@user1.com', '$2y$10$PUk3OdfDJK7WtLODdYvcBux0WfxbwYifdRESgdNxEgXNNoRHm.ISu', 2),
('user2', 'user2@user2.com', '$2y$10$3J42e8.TXOM9W1tUrFCWx.hnADTw2kK53yvz6DDtoYZoCQZZ1L5y.', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
