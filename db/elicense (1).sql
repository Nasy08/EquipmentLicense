-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 10:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elicense`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `name` varchar(255) NOT NULL,
  `id` int(10) NOT NULL,
  `level` varchar(25) NOT NULL,
  `course` enum('Multimedia','Networking','CADD SeniBina','Programming') NOT NULL,
  `sem` int(6) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_reason` longtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`name`, `id`, `level`, `course`, `sem`, `item_name`, `item_reason`, `image`) VALUES
('niko', 23221101, 'SIJIL', 'Multimedia', 2, 'patung', 'nk buat job', '64f7856a2d6ca_image.jpg'),
('MUHAMMAD ANAS', 23221142, 'SIJIL', 'Programming', 4, 'cerek', 'masak air', '64f7878f5cd76_Screenshot 2023-09-04 173952.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(255) NOT NULL,
  `id` int(8) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(10) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `type` enum('admin','student') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `id`, `nohp`, `email`, `password`, `confirm_password`, `type`) VALUES
('IMAN', 1, '011111111', 'imandanial@gmail.com', 'iman123', 'iman123', 'admin'),
('AMAD', 2, '0123456778', 'amad@gmail.com', 'amad123', 'amad123', 'student'),
('ANAS', 23221142, '0169520918', 'anassuhaimi08@gmail.com', 'anas123', 'anas123', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
